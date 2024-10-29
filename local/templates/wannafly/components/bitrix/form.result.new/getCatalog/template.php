<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<?php if ($arResult["isFormNote"] != "Y"): ?>

    <section class="popup popup_getCatalog" id="popup__getCatalog" style="display: none;">
        <h1 class="popup__title title__second">Получите каталог готовых решений
        <span class="popup__title_pink">для переговорных комнат</span> </h1>

        <form class="popup__form" action="<?= POST_FORM_ACTION_URI ?>" method="POST" enctype="multipart/form-data" id="<?= $this->GetEditAreaId($arResult['ID']); ?>">
            <?= bitrix_sessid_post(); ?>
            <?= $arResult["FORM_HEADER"] ?>

            <div class="popup__inputs popup__inputs_getCatalog">
                <div class="popup__field popup__field_getCatalog">
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

                <div class="popup__field popup__field_phone popup__field_getCatalog">
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

            <div class="popup__checkboxContainer">
                <?= $arResult["QUESTIONS"]["agreement"]["HTML_CODE"] ?>
                <label class="popup__checkboxLabel"><?= $arResult["QUESTIONS"]["agreement"]["CAPTION"] ?></label>
            </div>

            <?= $arResult["FORM_FOOTER"] ?>
        </form>
    </section>
<?php else: ?>
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