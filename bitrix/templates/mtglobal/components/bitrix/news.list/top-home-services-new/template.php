<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
/*echo "<pre>";
print_r($arResult["ITEMS"]);
echo "</pre>";*/
?>



<?php if( is_array($arResult["ITEMS"]) && count($arResult["ITEMS"]) > 0): ?>
<div class="request pb-152 ">

    <? $APPLICATION->IncludeFile(
        SITE_DIR . "include/slider_logo.php",
        Array(),
        Array("MODE"=>"php","NAME" => 'Логотипы')
    );?>
    <div class="container__service-top-caption ">
        <div class="container" >   Наши услуги
            <div style="width: 247px;   border-bottom: 2px solid #284FE6"></div>
        </div>
    </div>

<div class="container__service-top">
    <div class=" wrapper__service_main_top">
        <? $count = 0;?>
        <? foreach ($arResult["ITEMS"] as $arItem): ?>
            <?
            $count++;
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

            $props = $arItem['PROPERTIES'];
            $url = '#';
            if($props['URL']['VALUE']) $url = $props['URL']['VALUE'];
            //echo '<pre>'; print_r($props['LIST']['VALUE']); echo '</pre>'; die;
            ?>

            <div class="wrapper__service_top_item" id="<?= $this->GetEditAreaId($arItem['ID']);?>">
                <a href="<?=$url;?>" class="full__block_url"></a>

                        <div class="service__top_item_img" style="background-image: url('<?=$arItem['PREVIEW_PICTURE']['SRC']?>')">
                            <? if( is_array( $arItem['PREVIEW_PICTURE']) ):
                                //$img = \CFile::ResizeImageGet($arItem['PREVIEW_PICTURE']['ID'], array('width'=>316, 'height'=>337), BX_RESIZE_IMAGE_EXACT);
                                ?>
                                
                            <? endif;?>
                        </div>
                        <div class="service__top_item_number">
                            <? if( $count < 10 ):?> 0<? endif;?><?=$count?>
                        </div>
                        <div class="service__top_item_name">
                            <?=$arItem['NAME']?>
                        </div>



            </div>
        <? endforeach; ?>
    </div>
</div>
</div>
<?php endif;?>