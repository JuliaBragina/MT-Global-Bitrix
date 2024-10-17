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
?>
<?php
/*
<div class="modal-box modal-box_<?=$arParams['PARAM_1']?>">
    <svg class="modal-close modal-close_<?=$arParams['PARAM_1']?>" width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M24.75 8.25L8.25 24.75" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        <path d="M8.25 8.25L24.75 24.75" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
    </svg>
    <div class="like_h3"><?=$arParams['HEADER']?></div>
    <form class="modal-form <?=$arParams['ACTION_CODE']?> feedback" autocomplete="off"
    action="<?=POST_FORM_ACTION_URI?>" method="post" <?if($arParams['PARAM_1'] == 'one'){?>onsubmit="ym(53077474,'reachGoal','zadat-vopros-ok');return true;"<?}?>
    <?if($arParams['PARAM_1'] == 'two'){?>onsubmit="ym(53077474,'reachGoal','zakaz-uslugu-ok');return true;"<?}?>
    >
        <?=bitrix_sessid_post()?>
        <input type="hidden" name="act" value="<?=$arParams['ACTION_CODE']?>" />
        <input type="hidden" name="t" id="t" value="<?=bitrix_sessid();?>" /><?
        foreach ($arParams['FIELDS'] as $ar) {
            if($ar['tag'] == 'input'){
                if($ar['input_type']=='tel'){ ?>
                    <input class="form-input input-phone" type="<?=$ar['input_type']?>"
                           name="DATA[<?=$ar['code']?>]" <?if($ar['is_required']){echo 'required';}?>  /><?
                }else{ ?>
                    <input class="form-input" type="<?=$ar['input_type']?>" placeholder="<?=$ar['name']?><?if($ar['is_required']){echo '*';}?>"
                           name="DATA[<?=$ar['code']?>]" <?if($ar['is_required']){echo 'required';}?>  /><?
                }
                continue;
            }
            if($ar['tag'] == 'textarea'){?>
                <textarea class="form-textarea" placeholder="<?=$ar['name']?>" name="DATA[<?=$ar['code']?>]"></textarea><?
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
        <button onsubmit="ym(53077474,'reachGoal','get-the-service-ok');return true;" class="form-button zzfoot1"  type="submit"><?=$arParams['BUTTON_NAME']?></button>
    </form>
</div>
<div class="modal-bgr modal-bgr_<?=$arParams['PARAM_1']?>"></div>
*/?>