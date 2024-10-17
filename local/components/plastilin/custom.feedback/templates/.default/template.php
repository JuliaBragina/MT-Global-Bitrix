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
      $('input[name="<?=$error ?>"]').css('border', '1px solid red');
    <? endforeach ?>
  });
</script>
<?endif;?>
<? if ($arResult["OK_MESSAGE"]): ?>
  <script>
    $('.inputPopUp .rewiew-form input').val('');
    $('.popupPrice').css('display', 'none');
    $('.pop-up-fon').css('display', 'block');
    $('.tc-popup.four').css('display', 'block');
  </script>
<? endif ?>
<div class="big-border">
  <p class="b-title center">Заказать обратный звонок</p>
  <div class="form-place small-100-input">
    <form method="post" action="<?=POST_FORM_ACTION_URI ?>" enctype="multipart/form-data" class="center">
      <?= bitrix_sessid_post() ?>
      <div class="justify-content-between flex-wrap align-items-center">
        <div class="max-width-1199">
          <input type="text" name="user_name" class="custom-input" placeholder="Ваше имя" value="<?=($_POST['user_name']) ? $_POST['user_name'] : '' ?>">
        </div>
        <div class="max-width-1199">
          <input class="form-input phone2" type="text" placeholder="+7999 999 99 99" name="PHONE_2" value="<?=($_POST['PHONE_2']) ? $_POST['PHONE_2'] : '' ?>">
          <input type="text" name="user_phone" class="custom-input <?= ($arResult['ERROR_MESSAGE'][0] == 'user_phone')? 'error' : '' ?>" placeholder="Ваш телефон" required>
        </div>
        <div class="max-width-1199">
          <input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
          <input type="submit" name="submit" class="rounded-btn custom-btn" value="<?= (!empty($arResult["OK_MESSAGE"])) ? 'Отправлено' : 'Перезвоните мне' ?>" <?= (!empty($arResult["OK_MESSAGE"])) ? 'disabled' : '' ?>>
        </div>
      </div>
      <? if ($arParams["USE_CAPTCHA"] == "Y"): ?>
        <br>
          <div class="mf-captcha">
            <div class="mf-text"><?= GetMessage("MFT_CAPTCHA") ?></div>
            <input type="hidden" name="captcha_sid" value="<?= $arResult["capCode"] ?>">
            <img src="/bitrix/tools/captcha.php?captcha_sid=<?= $arResult["capCode"] ?>" width="180"
               height="40"
               alt="CAPTCHA">
            <div class="mf-text"><?= GetMessage("MFT_CAPTCHA_CODE") ?><span class="mf-req">*</span>
            </div>
            <input type="text" name="captcha_word" size="30" maxlength="50" value="">
          </div>
          <br>
      <? endif; ?>
      <div class="ok-check">
        <label class="custom-radio">
          <input type="checkbox" name="ok" checked="">
            <div class="radio__text">Вы соглашаетесь с условиями обработки персональных данных <a href="/litsenzionnoye-soglasheniye/" target="_blank">(ознакомиться)</a></div>
        </label>
      </div>
    </form>
  </div>
</div>