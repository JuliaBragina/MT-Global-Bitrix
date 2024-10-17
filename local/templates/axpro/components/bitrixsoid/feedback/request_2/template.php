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
<form class="<?=$arParams['ACTION_CODE']?> feedback request-form_two" autocomplete="off"
action="<?=POST_FORM_ACTION_URI?>" method="post">
    <?=bitrix_sessid_post()?>
    <input type="hidden" name="act" value="<?=$arParams['ACTION_CODE']?>" />
    <input type="hidden" name="t" id="t" />
    <div class="form-top"><?
        $ar = $arParams['FIELDS']['name'];?>
        <input class="form-input" type="text" placeholder="<?=$ar['name']?>" name="DATA[<?=$ar['code']?>]" required /><?
        $ar = $arParams['FIELDS']['industry'];?>
        <select class="form-select" name="DATA[<?=$ar['code']?>]">
            <option disabled selected><?=GetMessage("OPTION_0")?></option>
            <option value="<?=GetMessage("OPTION_1")?>"><?=GetMessage("OPTION_1")?></option>
            <option value="<?=GetMessage("OPTION_2")?>"><?=GetMessage("OPTION_2")?></option>
            <option value="<?=GetMessage("OPTION_3")?>"><?=GetMessage("OPTION_3")?></option>
            <option value="<?=GetMessage("OPTION_4")?>"><?=GetMessage("OPTION_4")?></option>
            <option value="<?=GetMessage("OPTION_5")?>"><?=GetMessage("OPTION_5")?></option>
            <option value="<?=GetMessage("OPTION_6")?>"><?=GetMessage("OPTION_6")?></option>
            <option value="<?=GetMessage("OPTION_7")?>"><?=GetMessage("OPTION_7")?></option>
            <option value="<?=GetMessage("OPTION_8")?>"><?=GetMessage("OPTION_8")?></option>
        </select><?
        foreach ($arParams['FIELDS'] as $ar) {
            if($ar['tag'] !== 'input'){
                continue;
            }
            if($ar['input_type']=='tel'){ ?>
                <input class="form-input input-phone" type="<?=$ar['input_type']?>"
                       name="DATA[<?=$ar['code']?>]" <?if($ar['is_required']){echo 'required';}?>  /><?
            }
        } ?>
    </div>
    <div class="form-bottom">
        <? include Application::getDocumentRoot().SITE_TEMPLATE_PATH.'/include/feedback/agree.php'; ?>
        <button class="form-button ss5" onsubmit="ym(53077474,'reachGoal','send-form');return true;" type="submit"><?=GetMessage("BUTTONrequest_2")?></button>
    </div>
</form>
