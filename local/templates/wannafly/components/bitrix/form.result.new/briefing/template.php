<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<section class="contactForm">
    <div class="contactForm__container">
        <div>
            <div class="contactForm__instructions-container">
                <div class="contactForm__instructions">
                    <h2 class="contactForm__title title__second title__second_hight">Расскажите нам о вашей задаче</h2>
                    <ol class="contactForm__steps">
                        <li class="contactForm__step">Отправьте нам заполненную форму и прикрепите файлы для
                            ознакомления, если возможно. Это поможет нам быстрее подобрать оптимальное решение.
                        </li>
                        <li class="contactForm__step">После отправки заявки наш специалист ознакомится с информацией и
                            свяжется с вами.
                        </li>
                    </ol>
                </div>
            </div>

            <div class="contactForm__instructions-container">
                <div class="contactForm__instructions">
                    <p class="contactForm__note">Позвоните или напишите нам на электронный адрес. Так мы сможем
                        оперативно подобрать решение, которое подойдет вам лучше всего.</p>
                    <div class="contactForm__contacts">
                        <p class="contactForm__contactsTitle">Контакты</p>
                        <div class="wrapper d-flex">
                            <?php $APPLICATION->IncludeFile(
                                SITE_DIR . 'includes/phone_getSupport.php',
                                array(),
                                array("MODE" => 'html')
                            ); ?>
                            <?php $APPLICATION->IncludeFile(
                                SITE_DIR . 'includes/email.php',
                                array(),
                                array("MODE" => 'html')
                            ); ?>
                        </div>
                    </div>
            </div>
            </div>
        </div>

        <form class="contactForm__submission" action="<?= POST_FORM_ACTION_URI ?>" method="POST"
            enctype="multipart/form-data" <?=$this->GetEditAreaId($arResult['ID']);?>>
            <?= bitrix_sessid_post(); ?>
            <?= $arResult["FORM_HEADER"] ?>

            <h3 class="contactForm__formTitle title__third title__third_color_white">Заполните форму</h3>

            <!-- Поля формы -->
            <fieldset class="contactForm__inputFieldset">
                <div class="contactForm__inputWrapper contactForm__nameWrapper popup__field">
                    <label for="name" class="contactForm__label"><?= $arResult["QUESTIONS"]["name"]["CAPTION"] ?></label>
                    <?php
                        $nameHTML = $arResult["QUESTIONS"]["name"]["HTML_CODE"];
                        $nameHTML = str_replace('>', 'id="popup__name" required>', $nameHTML);
                        echo $nameHTML;
                    ?>
                    <span class="popup__error"></span>
                </div>
                <div class="contactForm__inputWrapper popup__field_phone">
                <label for="phone" class="contactForm__label"><?= $arResult["QUESTIONS"]["phone"]["CAPTION"] ?></label>
                    <?php
                        $phoneHTML = $arResult["QUESTIONS"]["phone"]["HTML_CODE"];
                        $phoneHTML = str_replace('>', 'required id="popup__phone">', $phoneHTML);
                        echo $phoneHTML;
                    ?>
                    <span class="popup__error"></span>
                </div>
            </fieldset>

            <fieldset class="contactForm__inputFieldset">
                <div class="contactForm__inputWrapper popup__field">
                    <label for="email" class="contactForm__label"><?= $arResult["QUESTIONS"]["email"]["CAPTION"] ?></label>
                    <?php
                        $emailHTML = $arResult["QUESTIONS"]["email"]["HTML_CODE"];
                        $emailHTML = str_replace('>', 'required id="popup__email">', $emailHTML);
                        echo $emailHTML;
                    ?>
                    <span class="popup__error"></span>
                </div>
            </fieldset>

            <fieldset class="contactForm__inputFieldset">
                <div class="contactForm__inputWrapper popup__field ">
                    <label for="projectDescription" class="contactForm__label"><?= $arResult["QUESTIONS"]["projectDescription"]["CAPTION"] ?></label>
                    <?= $arResult["QUESTIONS"]["projectDescription"]["HTML_CODE"] ?>
                    <span class="popup__error"></span>
                </div>
            </fieldset>

            <input type="submit" class="btn btn-primary contactForm__submit popup__button" id="popup__btn-submit" name="web_form_submit" value="<?= htmlspecialcharsbx($arResult['arForm']['BUTTON']) ?>">

            <label class="contactForm__checkboxContainer">
                <?= $arResult["QUESTIONS"]["agreement"]["HTML_CODE"] ?>
                <p class="contactForm__textCheckbox"><?= $arResult["QUESTIONS"]["agreement"]["CAPTION"] ?></p>
            </label>

            <?= $arResult["FORM_FOOTER"] ?>
        </form>
    </div>
</section>
