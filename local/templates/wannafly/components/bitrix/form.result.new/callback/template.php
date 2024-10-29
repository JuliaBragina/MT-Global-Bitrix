<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<?php if ($arResult["isFormNote"] != "Y"): ?>
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
    <? if ($arResult["isFormErrors"] === "Y"): ?>
        <div class="errors">
            <?=$arResult["FORM_ERRORS_TEXT"]?>
        </div>
    <? endif; ?>
    <script>
        Fancybox.show([{
            src: "#thanks2",
            type: "inline"
        }]);
        setTimeout(function() {
            Fancybox.close();
        }, 5000);
    </script>
<?php endif; ?>

