<?php
use Bitrix\Main\Localization\Loc;
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}
Loc::loadMessages(__FILE__);
?>
<label class="input-checkbox">
    <input id="checkbox-agree" name="agree" type="checkbox" required checked />
    <span class="input-checkbox_icon glee">
        <svg viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M13 1L4.75 9.25L1 5.5" stroke-width="2" stroke-linecap="round" />
        </svg>
    </span>
    <span class="input-checkbox_text"><?=Loc::getMessage('FEEDBACK__AGREE')?></span>
</label>