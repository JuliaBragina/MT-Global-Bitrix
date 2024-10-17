<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/**
 * Bitrix vars
 *
 * @var array                    $arParams
 * @var array                    $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain                 $APPLICATION
 * @global CUser                 $USER
 */
?>
<?if ($arResult['ERROR_MESSAGE']):?>
<script>
  $(document).ready(function() {
    <? foreach ($arResult['ERROR_MESSAGE'] as $error): ?>
      $('form.questForm input[name="<?=$error ?>"]').css('border', '2px solid red');
      $($('form.questForm input[name="<?=$error ?>"]').parents('.customLabel-cb')[0]).css('border-bottom', '2px solid red');
    <? endforeach ?>
  });
</script>
<?endif;?>
<section class="questionsSection">
    <div class="global-container global-container-min">
        <h2 class="simple-title">
            Напишите нам, если остались вопросы
        </h2>
        <div class="questForm">
            <form method="post" class="questForm" id="quest_form" action="<?=POST_FORM_ACTION_URI ?>" enctype="multipart/form-data">
            <?= bitrix_sessid_post() ?>
                <div class="formSection__flex">
                  <div class="formSection__item formSection__item-2">
                      <input class="customInput" type="text" name="user_email" placeholder="Email" value="<?=($_POST['user_email']) ? $_POST['user_email'] : '' ?>">
                  </div>
                  <div class="formSection__item formSection__item-2">
                      <input class="customInput" type="tel" name="user_phone" placeholder="Телефон" value="<?=($_POST['user_phone']) ? $_POST['user_phone'] : '' ?>">
                  </div>
                  <div class="formSection__item formSection__item-full">
                      <input class="customInput" type="text" name="message" placeholder="Ваши пожелания" value="<?=($_POST['message']) ? $_POST['message'] : '' ?>">
                  </div>
                  <div class="formSection__item">
                      <label class="customLabel-cb">
                          <input class="visually-hidden customCb-main" type="checkbox" name="ok" <?if($_POST['ok'] || empty($_POST['submit'])):?>checked <?endif?>>
                          <span class="customCb customCb-check"></span>
                          <span class="customLabel__text">
                              Даю согласие <span class="simple"><a target="_blank" href="/policies.html">на обработку персональных данных</a></span>
                          </span>
                      </label>
                  </div>
                  <div class="formSection__item">
                      <input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
                      <input type="submit" name="submit" class="customBtn<?= (!empty($arResult["OK_MESSAGE"])) ? ' customBtnSucsec' : '' ?>" value="<?= (!empty($arResult["OK_MESSAGE"])) ? 'Отправлено' : 'Отправить' ?>" <?= (!empty($arResult["OK_MESSAGE"])) ? 'disabled' : '' ?>>
                  </div>
                </div>
            </form>
        </div>
    </div>
</section>