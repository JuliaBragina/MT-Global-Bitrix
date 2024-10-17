<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/**
 * @var CBitrixComponentTemplate $this
 * @var CatalogSectionComponent $component
 */

$component = $this->getComponent();
$arParams = $component->applyTemplateModifications();

foreach ($arResult['ITEMS'] as &$item)
{
    $db_props = CIBlockElement::GetProperty($item['IBLOCK_ID'], $item['ID'], array("sort" => "asc"), Array("CODE"=>"IMAGE_SVG"));
    if($ar_props = $db_props->Fetch())
        $item['IMAGE_SVG'] = CFile::GetPath($ar_props["VALUE"]);
     
}
				?>