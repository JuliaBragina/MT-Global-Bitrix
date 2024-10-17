<section class="section breadcrumb">
    <div class="container">
        <? $APPLICATION->IncludeComponent(
            "bitrix:breadcrumb",
            "mtglobal",
            array(
                "PATH" => "",
                "SITE_ID" => "s1",
                "START_FROM" => "0"
            )
        );?>
    </div>
</section>