<?
include $_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php";

if($_GET['csitemap'] == 'Y'):

CModule::IncludeModule("iblock");

$ch = curl_init();
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_POST,1);
curl_setopt($ch,CURLOPT_HEADER,0);


$sitemap = [];
$siteID = "s1";
$filter = array(
    "IBLOCK_ID" => [31, 32, 33, 34], 
    "ACTIVE" => "Y",
);

$dbSites = CSite::GetList($by = "sort", $order = "asc", array("ACTIVE" => "Y"));
while ($arSite = $dbSites->Fetch()) {
    if ($arSite["ID"] == $siteID) {
        $arFilter = array(
            "SITE_ID" => $arSite["ID"],
            "IBLOCK_ID" => $filter["IBLOCK_ID"],
            "ACTIVE" => $filter["ACTIVE"],
        );

        $dbPages = CIBlockElement::GetList(
            array("sort" => "asc"),
            $arFilter,
            false,
            false,
            array("ID", "IBLOCK_ID", "DETAIL_PAGE_URL")
        );

        while ($arPage = $dbPages->Fetch()) {

            $string = $arPage["DETAIL_PAGE_URL"]; 
            $siteDir = $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['HTTP_HOST'];
            $elementCode = $arPage["CODE"];

            $newString = str_replace("#SITE_DIR#", $siteDir, $string);
            $newString = str_replace("#ELEMENT_CODE#", $elementCode, $newString);
            curl_setopt($ch, CURLOPT_URL, $newString);
            $html = curl_exec($ch);
            $res = preg_match('/content="noindex/i', $html);
            if (!$res) {
                $sitemap[] = [
                    "loc" => $newString,
                    "changefreq" => "weekly",
                    "priority" => "1.0",
                ];
            }
        }
    }
}

curl_close($ch);

$sitemapFiles = simplexml_load_file('../sitemap-files.xml');

foreach ($sitemapFiles->url as $url) {
    $sitemap[] = [
        "loc" => $url->loc,
        "changefreq" => "weekly",
        "priority" => "1.0",
    ];
}
$xml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"></urlset>');
foreach ($sitemap as $item) {
    $url = $xml->addChild('url');
    $loc = $url->addChild('loc', $item['loc']);
    $changefreq = $url->addChild('changefreq', $item['changefreq']);
    $priority = $url->addChild('priority', $item['priority']);
}

$xml->asXML('sitemap.xml');

endif;
?>
