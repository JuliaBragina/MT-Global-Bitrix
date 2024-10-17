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
      $('form.consultation input[name="<?=$error ?>"]').css('border', '2px solid red');
      $($('form.consultation input[name="<?=$error ?>"]').parents('.customLabel-cb')[0]).css('border-bottom', '2px solid red');
    <? endforeach ?>
  });
</script>
<?endif;?>
<div class="formBox">
  <form method="post" class="consultation" action="<?=POST_FORM_ACTION_URI ?>" enctype="multipart/form-data">
  <?= bitrix_sessid_post() ?>
      <div class="formBox__inner">
          <div class="formBox__body">
<div class="formSection__item formSection__item-2t">
                  <input class="customInput" type="name" name="user_name" placeholder="Имя" value="<?=($_POST['user_name']) ? $_POST['user_name'] : '' ?>">
              </div>
              <div class="formSection__item formSection__item-2">
                  <input class="customInput" type="tel" name="user_phone" placeholder="Телефон" value="<?=($_POST['user_phone']) ? $_POST['user_phone'] : '' ?>">
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
                    <input type="submit" name="submit" class="customBtn<?= (!empty($arResult["OK_MESSAGE"])) ? ' customBtnSucsec' : '' ?>" value="<?= (!empty($arResult["OK_MESSAGE"])) ? 'Запрос отправлен' : 'Проконсультироваться' ?>" <?= (!empty($arResult["OK_MESSAGE"])) ? 'disabled' : '' ?>>
                </div>
          </div>
      </div>
  </form>
</div>