<?php

use Bitrix\Main\Application;

/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
//echo '<pre>'; print_r($arParams['FIELDS']); echo '</pre>'; die;
?>
<?/*
<div class="modal-box modal-box_<?=$arParams['PARAM_1']?>">
    <svg class="modal-close modal-close_<?=$arParams['PARAM_1']?>" width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M24.75 8.25L8.25 24.75" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        <path d="M8.25 8.25L24.75 24.75" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
    </svg>
    <div class="like_h3"><?=$arParams['HEADER']?><?=__FILE__?></div>
    <form class="modal-form <?=$arParams['ACTION_CODE']?> feedback" autocomplete="off" action="<?=POST_FORM_ACTION_URI?>" method="post">
        <?=bitrix_sessid_post()?>
        <? if( isset($arParams['CAPTCHA']) && $arParams['CAPTCHA'] === 'Y' ):?>
            <input type="hidden" name="g_recaptcha_response" >
        <? endif;?>

        <input type="hidden" name="act" value="<?=$arParams['ACTION_CODE']?>" />
        <input type="hidden" name="t" id="t" value="<?=bitrix_sessid();?>" /><?
        foreach ($arParams['FIELDS'] as $ar) {
            if($ar['tag'] == 'input'){
                if($ar['input_type']=='tel'){ ?>
                    <input class="form-input input-phone" type="<?=$ar['input_type']?>"
                           name="DATA[<?=$ar['code']?>]" <?if($ar['is_required']){echo 'required';}?>  /><?
                }else{ ?>
                    <input class="form-input" type="<?=$ar['input_type']?>" placeholder="<?=$ar['name']?><?if($ar['is_required']){echo '*';}?>"
                           name="DATA[<?=$ar['code']?>]" <? if($ar['code'] == 'name' || $ar['code'] == 'company'): ?> maxlength="50" <? endif;?> <?if($ar['is_required']){echo 'required';}?>  /><?
                }
                continue;
            }
            if($ar['tag'] == 'textarea'){?>
                <textarea <? if( 'msg' == $ar['code']):?> maxlength="300"<? endif;?> <?if($ar['is_required']){echo 'required';}?> class="form-textarea mb-20 w-100 fz-12 colorGray5" placeholder="<?=$ar['name']?>" name="DATA[<?=$ar['code']?>]"></textarea><?
                continue;
            }
            if($ar['tag'] == 'select' && $ar['code'] == 'company_size'){?>
                <select class="form-select" name="DATA[<?=$ar['code']?>]">
                    <option disabled selected><?=GetMessage("YOUR_COMPANY_SIZE")?></option>
                    <option value="до 30 сотрудников"><?=GetMessage("UP_TO_30_EMPLOYEES")?></option>
                    <option value="от 30 до 100 сотрудников"><?=GetMessage("FROM_30_TO_100_EMPLOYEES")?></option>
                    <option value="более 100 сотрудников"><?=GetMessage("MORE_THAN_100_EMPLOYEES")?></option>
                </select><?
                continue;
            }
        }
        include Application::getDocumentRoot().SITE_TEMPLATE_PATH.'/include/feedback/agree.php'; ?>
        <button class="form-button zzfoot1"  type="submit"><?=$arParams['BUTTON_NAME']?></button>
    </form>

    <? if( isset($arParams['CAPTCHA']) && $arParams['CAPTCHA'] === 'Y' ):?>
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                if (typeof(grecaptcha) == 'undefined') {
                    var grecaptcha_s = document.createElement('script');
                    grecaptcha_s.src = 'https://www.google.com/recaptcha/api.js?render=<?=\Bitrix\Main\Config\Option::get( "askaron.settings", "UF_KEY_RECATCHA");?>&onload=googleCaptcha';
                    var grecaptcha_h = document.getElementsByTagName('script')[0];
                    grecaptcha_h.parentNode.insertBefore(grecaptcha_s,grecaptcha_h);
                }
            });


            if ( typeof googleCaptcha == 'undefined' ) {
                var googleCaptcha = () => {
                    grecaptcha.execute('<?=\Bitrix\Main\Config\Option::get( "askaron.settings", "UF_KEY_RECATCHA");?>',{action: 'feedback'}).then(
                        function(token) {
                            let inputs = document.querySelectorAll('[name="g_recaptcha_response"]');

                            if( inputs && inputs.length ) {
                                for (let i = 0; i < inputs.length; i++) {
                                    inputs[i].value=token;
                                }
                            }
                        }
                    );
                }
            }
        </script>
    <? endif;?>
</div>
<div class="modal-bgr modal-bgr_<?=$arParams['PARAM_1']?>"></div>
*/?>