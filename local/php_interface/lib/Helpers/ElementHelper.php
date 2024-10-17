<?php
namespace LocalLib\Helpers;

use CIBlock;
use function filter_var;

class ElementHelper {

    /**
     * @param string $template      $arIblock['DETAIL_PAGE_URL']
     * @param array $arElement
     * @return string               $arElement['DETAIL_PAGE_URL']
     */
    public static function getDetailUrlByTemplate($template, $arElement = []) {
        $template = filter_var($template);
        if (empty($template)) {
            return;
        }
        if(!is_array($arElement)){
            $arElement = [];
        }
        $type = (array_key_exists('GLOBAL_ACTIVE', $arElement)?'S':'E');
        return CIBlock::ReplaceDetailUrl($template, $arElement, true, $type);
    }

}