<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<section class="getPresentationSection">
    <div class="getPresentationSection__container">

        <form class="getPresentationForm" action="<?= POST_FORM_ACTION_URI ?>" method="POST"
                id="<?= $this->GetEditAreaId($arResult['ID']); ?>">
            <?= bitrix_sessid_post(); ?>

            <?= $arResult["FORM_HEADER"] ?>
            <h2 class="getPresentationSection__title title__second">
                Презентация о MT global
            </h2>

            <!-- Поле "Имя" -->
            <div class="getPresentationForm__field">
                <label for="name" class="getPresentationForm__label">
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
                <span class="popup__error"></span>
            </div>

            <!-- Поле "Почта" -->
            <div class="getPresentationForm__field">
                <label for="email" class="getPresentationForm__label">
                    <?= $arResult["QUESTIONS"]["email"]["CAPTION"] ?>
                    <?php if ($arResult["QUESTIONS"]["email"]["REQUIRED"] == "Y"): ?>
                        <span class="required"><?= $arResult["REQUIRED_SIGN"]; ?></span>
                    <?php endif; ?>
                </label>
                <?php
                    $emailHTML = $arResult["QUESTIONS"]["email"]["HTML_CODE"];
                    $emailHTML = str_replace('>', 'required id="popup__email">', $emailHTML);
                    echo $emailHTML;
                ?>
                <span class="popup__error"></span>
            </div>

            <!-- Кнопка отправки формы -->
            <input type="submit" class="btn btn-secondary-grey getPresentationForm__button popup__button" id="popup__btn-submit" name="web_form_submit" value="<?= htmlspecialcharsbx($arResult['arForm']['BUTTON']) ?>">

            <?= $arResult["FORM_FOOTER"] ?>
        </form>

        <!-- Изображение с презентацией -->
        <img class="getPresentationSection__img" src="<?= SITE_TEMPLATE_PATH ?>/img/img-pdf.svg" alt="Презентация">
    </div>
</section>