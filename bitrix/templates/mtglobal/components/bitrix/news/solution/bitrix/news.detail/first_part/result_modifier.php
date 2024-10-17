<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
use \Pixelplus\Seo\MetatagTable;
$arResult['SEO_H1'] = (!empty($arResult['IPROPERTY_VALUES']['ELEMENT_PAGE_TITLE'])) ? $arResult['IPROPERTY_VALUES']['ELEMENT_PAGE_TITLE'] : $arResult['NAME'];

$meta = MetatagTable::getList(
    array(
        "select" => array("H1"),
        "filter" => array(
            "ACTIVE" => "Y",
            "=URL" => $arResult['DETAIL_PAGE_URL'],
            "%SITE_ID" => SITE_ID
        ),
        "order" => array("SORT" => "ASC")
    )
)->fetch();

if($meta && json_decode($meta['H1']) != '') {
    $arResult['SEO_H1'] = json_decode($meta['H1']);

}

