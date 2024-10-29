<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<?php if ($arResult["isFormNote"] != "Y"): ?>
    <?php
        $logFilePath = $_SERVER['DOCUMENT_ROOT'] . '/form_log.txt';

        $logData = "---Form Statuses 1 callback---:\n";
        $logData .= "isFormNote: " . var_export($arResult['isFormNote'], true) . "\n";
        $logData .= "FORM_NOTE: " . var_export($arResult['FORM_NOTE'], true) . "\n";
        $logData .= "isFormErrors: " . var_export($arResult['isFormErrors'], true) . "\n";
        $logData .= "FORM_ERRORS_TEXT: " . var_export($arResult['FORM_ERRORS_TEXT'], true) . "\n";
        $logData .= "Form ID: " . var_export($arResult['arForm']['ID'], true) . "\n";
        $logData .= "_REQUEST: " . var_export($_REQUEST, true) . "\n";
        $logData .= "Timestamp: " . date("Y-m-d H:i:s") . "\n\n";

        file_put_contents($logFilePath, $logData, FILE_APPEND);
    ?>

    <section class="popup popup_callBack" id="popup__callBack" style="display: none;">
        <h1 class="popup__title title__second">Запланировать встречу</h1>
        <p class="popup__paragraph">Оставьте свои контактные данные для назначения онлайн или офлайн-встречи</p>

        <form class="popup__form" method="POST" action="<?=POST_FORM_ACTION_URI?>" enctype="multipart/form-data" id="form_callback">
            <?= bitrix_sessid_post(); ?>
            <?= $arResult["FORM_HEADER"] ?>
            <input type="hidden" name="web_form_submit" value="Y">

            <div class="popup__inputs">
                <div class="popup__field">
                    <label class="popup__label" for="name">
                        <?= $arResult["QUESTIONS"]["name"]["CAPTION"] ?>
                        <?php if ($arResult["QUESTIONS"]["name"]["REQUIRED"] == "Y"): ?>
                            <span class="required"><?= $arResult["REQUIRED_SIGN"]; ?></span>
                        <?php endif; ?>
                    </label>
                    <?php
                        $nameHTML = $arResult["QUESTIONS"]["name"]["HTML_CODE"];
                        $nameHTML = str_replace('>', 'id="popup__name" required>', $nameHTML);
                        echo $nameHTML;
                    ?>
                </div>

                <div class="popup__field popup__field_phone">
                    <label class="popup__label" for="phone">
                        <?= $arResult["QUESTIONS"]["phone"]["CAPTION"] ?>
                        <?php if ($arResult["QUESTIONS"]["phone"]["REQUIRED"] == "Y"): ?>
                            <span class="required"><?= $arResult["REQUIRED_SIGN"]; ?></span>
                        <?php endif; ?>
                    </label>
                    <?php
                        $phoneHTML = $arResult["QUESTIONS"]["phone"]["HTML_CODE"];
                        $phoneHTML = str_replace('>', 'required id="popup__phone">', $phoneHTML);
                        echo $phoneHTML;
                    ?>
                </div>
            </div>

            <input type="submit" class="btn btn-primary popup__button" id="popup__btn-submit" name="web_form_submit" value="<?= htmlspecialcharsbx($arResult['arForm']['BUTTON']) ?>">
            <input type="hidden" name="WEB_FORM_ID" value="<?=$arParams["WEB_FORM_ID"];?>" />
            <input type="hidden" name="lang" value="ru" />

            <div class="popup__checkboxContainer">
                <?= $arResult["QUESTIONS"]["agreement"]["HTML_CODE"] ?>
                <label class="popup__checkboxLabel"><?= $arResult["QUESTIONS"]["agreement"]["CAPTION"] ?></label>
            </div>

            <?= $arResult["FORM_FOOTER"] ?>

        </form>
    </section>
<?php else: ?>
    <script> 
        alert("Ваша заявка отправлена.");
        const modal = document.getElementById('thanks');
        modalOpen(modal);
    </script>

    <?php
        $logFilePath = $_SERVER['DOCUMENT_ROOT'] . '/form_log.txt';

        $logData = "---Form Statuses callback---:\n";
        $logData .= "isFormNote: " . var_export($arResult['isFormNote'], true) . "\n";
        $logData .= "FORM_NOTE: " . var_export($arResult['FORM_NOTE'], true) . "\n";
        $logData .= "isFormErrors: " . var_export($arResult['isFormErrors'], true) . "\n";
        $logData .= "FORM_ERRORS_TEXT: " . var_export($arResult['FORM_ERRORS_TEXT'], true) . "\n";
        $logData .= "Form ID: " . var_export($arResult['arForm']['ID'], true) . "\n";
        $logData .= "_REQUEST: " . var_export($_REQUEST, true) . "\n";
        $logData .= "Timestamp: " . date("Y-m-d H:i:s") . "\n\n";

        file_put_contents($logFilePath, $logData, FILE_APPEND);

        $logData2 = "---_REQUEST---:\n";
        $logData2 .= var_export($_REQUEST, true) . "\n\n";
        file_put_contents($_SERVER['DOCUMENT_ROOT'] . '/form_log.txt', $logData2, FILE_APPEND);
    ?>
<?php endif; ?>