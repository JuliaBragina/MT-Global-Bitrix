<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<section class="popup popup_callBack" id="popup__callBack" style="display: none;">
    <h1 class="popup__title title__second">Запланировать встречу</h1>
    <p class="popup__paragraph">Оставьте свои контактные данные для назначения онлайн или офлайн-встречи</p>

    <?php if ($arResult["isFormNote"] == "Y"): ?>
        <p class="form-success-message">Спасибо! Ваша заявка отправлена.</p>
    <?php else: ?>
        <?php if ($arResult["isFormErrors"] == "Y"): ?>
            <div class="form-error-message">
                <?= $arResult["FORM_ERRORS_TEXT"]; ?>
            </div>
        <?php endif; ?>

        <form class="popup__form" action="<?= POST_FORM_ACTION_URI ?>" method="POST" enctype="multipart/form-data" id="<?= $this->GetEditAreaId($arResult['ID']); ?>">
            <?= bitrix_sessid_post(); ?>
            <?= $arResult["FORM_HEADER"] ?>

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
                        $nameHTML = str_replace('>', ' required minlength="2" maxlength="50" title="Минимум 2 символа, максимум 50 символов.">', $nameHTML);
                        echo $nameHTML;
                    ?>
                </div>

                <div class="popup__field">
                    <label class="popup__label" for="phone">
                        <?= $arResult["QUESTIONS"]["phone"]["CAPTION"] ?>
                        <?php if ($arResult["QUESTIONS"]["phone"]["REQUIRED"] == "Y"): ?>
                            <span class="required"><?= $arResult["REQUIRED_SIGN"]; ?></span>
                        <?php endif; ?>
                    </label>
                    <?php
                        $phoneHTML = $arResult["QUESTIONS"]["phone"]["HTML_CODE"];
                        $phoneHTML = str_replace('>', ' required title="Формат: +7 (XXX) XXX-XX-XX">', $phoneHTML);
                        echo $phoneHTML;
                    ?>
                </div>
            </div>

            <?= $arResult['SUBMIT_BUTTON'] ?>

            <div class="popup__checkboxContainer">
                <?= $arResult["QUESTIONS"]["agreement"]["HTML_CODE"] ?>
                <label class="popup__checkboxLabel"><?= $arResult["QUESTIONS"]["agreement"]["CAPTION"] ?></label>
            </div>

            <?= $arResult["FORM_FOOTER"] ?>
        </form>
    <?php endif; ?>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const submitButton = document.querySelector('input[type="submit"]');
        if (submitButton) {
            submitButton.classList.add('btn', 'btn-primary', 'popup__button');
        }
    });
</script>

