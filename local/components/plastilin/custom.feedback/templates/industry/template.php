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
      $('form.industry input[name="<?=$error ?>"]').css('border', '2px solid red');
      $($('form.industry input[name="<?=$error ?>"]').parents('.customLabel-cb')[0]).css('border-bottom', '2px solid red');
    <? endforeach ?>
  });
  $(".customScroll").select2({
        minimumResultsForSearch: -1,
       width: "100%",
   });
</script>
<?endif;?>
<? if ($arResult["OK_MESSAGE"]): ?>
<script>
  $(".customScroll").select2({
        minimumResultsForSearch: -1,
       width: "100%",
   });
</script>
<? endif ?>
<div class="formSection">
    <div class="global-container global-container-min">
        <form class="industry" method="post" class="details" action="<?=POST_FORM_ACTION_URI ?>" enctype="multipart/form-data">
          <?= bitrix_sessid_post() ?>
            <div class="formSection__flex">
                <div class="formSection__item formSection__item-2">
                    <select class="customScroll" name="industry">
                        <option value="Ваша индустрия">
                            Ваша индустрия
                        </option>
                        <option value="Промышленность и сельское хозяйство">
                            Промышленность и сельское хозяйство
                        </option>
                        <option value="Ритейл">
                            Ритейл
                        </option>
                        <option value="HoReCa">
                            HoReCa
                        </option>
                        <option value="Транспорт и логистика">
                            Транспорт и логистика
                        </option>
                        <option value="Государственные учреждения">
                            Государственные учреждения
                        </option>
                        <option value="IT">
                            IT
                        </option>
                        <option value="Строительство и недвижимость">
                            Строительство и недвижимость
                        </option>
                        <option value="Другая">
                            Другая
                        </option>
                    </select>
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
        </form>
    </div>
</div>