<?
$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "submenu",
    Array(
		"IBLOCK_ID" => "32",
		"IBLOCK_TYPE" => "content",
		"CACHE_TYPE" => "N",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "ADD_SECTIONS_CHAIN"=> "N"
	)
);

?>