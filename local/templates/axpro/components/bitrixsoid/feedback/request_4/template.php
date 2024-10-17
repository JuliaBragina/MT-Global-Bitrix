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
    <div class="section-title">
        <div class="like_h2"><?=GetMessage("TITLErequest_4")?></div>
        <p class="descr-s"><?=GetMessage("DESCrequest_4")?></p>
    </div>
    <div class="form-top"><?
        $ar = $arParams['FIELDS']['phone'];?>
        <input class="form-input input-phone" type="tel" placeholder="<?=$ar['name']?>" name="DATA[<?=$ar['code']?>]" required />
        <button class="form-button ss7" onsubmit="ym(53077474,'reachGoal','send-form');return true;" type="submit"><?=GetMessage("BUTTONrequest_4")?></button>
    </div>
    <div class="form-bottom">
        <? include Application::getDocumentRoot().SITE_TEMPLATE_PATH.'/include/feedback/agree.php'; ?>
    </div>
</form>
