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
    <input type="hidden" name="t" id="t" value="<?=bitrix_sessid();?>" />
    <div class="form-top"><?
        $ar = $arParams['FIELDS']['email'];?>
        <input class="form-input" type="email" placeholder="<?=$ar['name']?>" name="DATA[<?=$ar['code']?>]" required />
        <button class="form-button ss8" onsubmit="ym(53077474,'reachGoal','send-form');return true;" type="submit"><?=GetMessage("BUTTON")?></button>
    </div>
    <div class="form-bottom">
        <? include Application::getDocumentRoot().SITE_TEMPLATE_PATH.'/include/feedback/agree.php'; ?>
    </div>
</form>
