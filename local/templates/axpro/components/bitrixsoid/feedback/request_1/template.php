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
<form class="<?=$arParams['ACTION_CODE']?> feedback request-form" autocomplete="off"
action="<?=POST_FORM_ACTION_URI?>" method="post">
    <?=bitrix_sessid_post()?>
    <input type="hidden" name="act" value="<?=$arParams['ACTION_CODE']?>" />
    <input type="hidden" name="t" id="t" />
    <div class="form-top"><?
        foreach ($arParams['FIELDS'] as $ar) {
            if($ar['tag'] !== 'input'){
                continue;
            }
            if($ar['input_type']=='tel'){ ?>
                <input class="form-input input-phone" type="<?=$ar['input_type']?>"
                       name="DATA[<?=$ar['code']?>]" oninvalid="this.setCustomValidity('<?=GetMessage("PLEASE_FILL_IN_THIS_FIELD")?>')" <?if($ar['is_required']){echo 'required';}?>  /><?
            }else{ ?>
                <input class="form-input" type="<?=$ar['input_type']?>" placeholder="<?=$ar['name']?>"
                       name="DATA[<?=$ar['code']?>]"  <?if($ar['is_required']){echo 'required';}?>  /><?
            }
        } ?>
        <button class="form-button ss4" onsubmit="ym(53077474,'reachGoal','send-form');return true;" type="submit"><?=GetMessage("BUTTON")?></button>
    </div>
    <div class="form-bottom">
        <? include Application::getDocumentRoot().SITE_TEMPLATE_PATH.'/include/feedback/agree.php'; ?>
    </div>
</form>

