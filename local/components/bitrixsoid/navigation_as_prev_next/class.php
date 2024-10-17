<?php

namespace LocalComponents\Bitrixsoid;

use Bitrix\Iblock\ElementTable;
use Bitrix\Main\FileTable;
use Bitrix\Main\Localization\Loc;
use Bitrix\Main\ORM\Fields\ExpressionField;
use Bitrix\Main\ORM\Fields\Relations\Reference;
use Bitrix\Main\ORM\Query\Join;
use CBitrixComponent;
use Exception;
use LocalLib\Helpers\ElementHelper;
use const B_PROLOG_INCLUDED;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true){
    die();
}

class CBitrixsoidComponentNavigationItems extends CBitrixComponent {

    final public function __construct($component = null) {
        parent::__construct($component);
        Loc::loadMessages(__FILE__);
    }

    final public function onPrepareComponentParams($arParams) {
        $arParams['IBLOCK_ID'] = intval($arParams['IBLOCK_ID']);
        $arParams['ELEMENT_ID'] = intval($arParams['ELEMENT_ID']);
		if(!isset($params["CACHE_TIME"])){
            $params["CACHE_TIME"] = 86400;
        }
        return $arParams;
    }

    final public function executeComponent() {
        global $USER;
        if ($this->arParams['IBLOCK_ID'] <= 0 || $this->arParams['ELEMENT_ID'] <= 0) {
            return;
        }
        try {
            if($this->startResultCache(false, [
                ($this->arParams["CACHE_GROUPS"]==="N"? false: $USER->GetGroups()),
                $this->arParams['IBLOCK_ID'],
                $this->arParams['ELEMENT_ID']
            ])){
                $this->setData();
                $this->setResultCacheKeys([
                    'IBLOCK_ID',
                    'ELEMENT_ID',
                    'DATA',
                ]);
                $this->includeComponentTemplate();
            }
        } catch (Exception $e) {
			$this->AbortResultCache();
        }
    }

    final private function setData() {
        $this->arResult['PREV'] = [];
        $this->arResult['NEXT'] = [];
        $this->arResult['COUNT'] = ElementTable::getCount([
            '=IBLOCK_ID' => $this->arParams['IBLOCK_ID'],
        ]);
        if($this->arResult['COUNT'] <= 1){
            return;
        }
        $this->arResult['CURRENT_ELEMENT'] = ElementTable::getRow([
            'select' => [
                'ID',
                'CODE',
                'SORT',
                'NAME',
            ],
            'filter' => [
               '=IBLOCK_ID' => $this->arParams['IBLOCK_ID'],
               '=ID' => $this->arParams['ELEMENT_ID'],
            ],
        ]);

        $arSelect = [
            'ID',
            'CODE',
            'SORT',
            'NAME',
            'IBLOCK_DETAIL_PAGE_URL' => 'IBLOCK.DETAIL_PAGE_URL',
            'IMG_ID' => 'PREVIEW_PICTURE',
            'IMG_SUBDIR' => 'IMG.SUBDIR',
            'IMG_NAME' => 'IMG.FILE_NAME',
            'IMG_ORIGINAL_NAME' => 'IMG.ORIGINAL_NAME',
        ];
        $arRuntime = [
            new Reference(
               'IMG',
               FileTable::class,
               Join::on('this.PREVIEW_PICTURE', 'ref.ID')
            )
        ];

        $ob = ElementTable::getList([
            'select' => $arSelect,
            'filter' => [
               '=IBLOCK_ID' => $this->arParams['IBLOCK_ID'],
               '!=ID' => $this->arParams['ELEMENT_ID'],
               'ACTIVE' => 'Y',
                '<SORT' => $this->arResult['CURRENT_ELEMENT']['SORT'],
            ],
            'runtime' => $arRuntime,
            'order' => ['SORT' => 'DESC'],
            'limit' => 1,
        ]);
        while ($arElement = $ob->fetch()) {
            $this->arResult['PREV'] = $this->processedElement($arElement);
            if($this->arResult['COUNT'] == 2){
                return;
            }
        }

        $ob = ElementTable::getList([
            'select' => $arSelect,
            'filter' => [
               '=IBLOCK_ID' => $this->arParams['IBLOCK_ID'],
               '!=ID' => $this->arParams['ELEMENT_ID'],
                'ACTIVE' => 'Y',
                '>SORT' => $this->arResult['CURRENT_ELEMENT']['SORT'],
            ],
            'runtime' => $arRuntime,
            'order' => ['SORT' => 'ASC'],
            'limit' => 1,
        ]);
        while ($arElement = $ob->fetch()) {
            $this->arResult['NEXT'] = $this->processedElement($arElement);
            if($this->arResult['COUNT'] == 2){
                return;
            }
        }

        if (empty($this->arResult['PREV'])) {
            $ob = ElementTable::getList([
                'select' => $arSelect,
                'filter' => [
                   '=IBLOCK_ID' => $this->arParams['IBLOCK_ID'],
                    'ACTIVE' => 'Y',
                    '!=ID' => $this->arParams['ELEMENT_ID'],
                ],
                'runtime' => $arRuntime,
                'order' => ['SORT' => 'DESC'],
                'limit' => 1,
            ]);
            while ($arElement = $ob->fetch()) {
                $this->arResult['PREV'] = $this->processedElement($arElement);
                if($this->arResult['COUNT'] == 2){
                    return;
                }
            }
        }

        if (empty($this->arResult['NEXT'])) {
            $ob = ElementTable::getList([
                'select' => $arSelect,
                'filter' => [
                   '=IBLOCK_ID' => $this->arParams['IBLOCK_ID'],
                    'ACTIVE' => 'Y',
                    '!=ID' => $this->arParams['ELEMENT_ID'],
                ],
                'runtime' => $arRuntime,
                'order' => ['SORT' => 'ASC'],
                'limit' => 1,
            ]);
            while ($arElement = $ob->fetch()) {
                $this->arResult['NEXT'] = $this->processedElement($arElement);
                if($this->arResult['COUNT'] == 2){
                    return;
                }
            }
        }

    }

    private function processedElement($arElement) {
        $arElement['DETAIL_PAGE_URL'] = ElementHelper::getDetailUrlByTemplate(
            $arElement['IBLOCK_DETAIL_PAGE_URL'], $arElement
        );
        if (!empty($arElement['IMG_NAME'])) {
            $arElement['IMG_SRC'] = '/upload/'.$arElement['IMG_SUBDIR'].'/'.$arElement['IMG_NAME'];
        }
        return $arElement;
    }

}