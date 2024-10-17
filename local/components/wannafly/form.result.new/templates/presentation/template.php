<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<section class="getPresentationSection">
    <div class="getPresentationSection__container">
        <?php if ($arResult["isFormNote"] == "Y"): ?>
            <p class="form-success-message">Спасибо! Ваша заявка отправлена.</p>
            <?php if (isset($arResult["FORM_STATUS"])): ?>
                <p class="form-status-message">Статус заявки: <?= $arResult["FORM_STATUS"]; ?></p>
            <?php endif; ?>
        <?php else: ?>

            <!-- Вывод ошибок формы -->
            <?php if ($arResult["isFormErrors"] == "Y"): ?>
                <div class="form-error-message">
                    <?= $arResult["FORM_ERRORS_TEXT"]; ?>
                </div>
            <?php endif; ?>

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
                    <?= $arResult["QUESTIONS"]["name"]["HTML_CODE"] ?>
                </div>

                <!-- Поле "Почта" -->
                <div class="getPresentationForm__field">
                    <label for="email" class="getPresentationForm__label">
                        <?= $arResult["QUESTIONS"]["email"]["CAPTION"] ?>
                        <?php if ($arResult["QUESTIONS"]["email"]["REQUIRED"] == "Y"): ?>
                            <span class="required"><?= $arResult["REQUIRED_SIGN"]; ?></span>
                        <?php endif; ?>
                    </label>
                    <?= $arResult["QUESTIONS"]["email"]["HTML_CODE"] ?>
                </div>

                <!-- Кнопка отправки формы -->
                <button type="submit" class="btn btn-secondary-grey getPresentationForm__button">Отправить</button>

                <?= $arResult["FORM_FOOTER"] ?>
            </form>

        <?php endif; ?>

        <!-- Изображение с презентацией -->
        <img class="getPresentationSection__img" src="<?= SITE_TEMPLATE_PATH ?>/img/img-pdf.svg" alt="Презентация">
    </div>
</section>
