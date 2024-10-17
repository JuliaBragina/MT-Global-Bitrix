<?php

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
<form action="<?=POST_FORM_ACTION_URI?>" method="post" autocomplete="off" class="<?=$arParams['ACTION_CODE']?>">
    <?=bitrix_sessid_post()?>
    <input type="hidden" name="act" value="<?=$arParams['ACTION_CODE']?>" />
    <input type="hidden" name="t" id="t" />
    <h4>Обратная связь</h4><?
    foreach ($arParams['FIELDS'] as $ar) {?>
        <div>
            <input type="text" placeholder="<?=htmlspecialcharsEx($ar['name'])?>" name="DATA[<?=$ar['code']?>]" />
        </div><?
    } ?>
    <div>
        <input id="checkbox-agree" name="agree" type="checkbox" />
        <label for="checkbox-agree">Я согласен на обработку персональных данных, а также с условиями оферты.</label>
    </div>
    <div>
        <button type="submit">Отправить</button>
    </div>
</form>
<script type="text/javascript">
$(document).ready(function(){
    $(document).on('submit', 'form.<?=$arParams['ACTION_CODE']?>', function(){
        var ob = $(this);
        if(!ob.find('input#checkbox-agree:checked').length){
            alert('Необходимо согласие на обработку персональных данных, а также с условиями оферты');
            return false;
        } <?
        if(in_array('phone', $arParams['FIELDS_CODES'])){?>
            if(ob.find('input[name="DATA[phone]"]').val() == ''){
                alert('Укажите, пожалуйста, ваш телефон');
                return false;
            } <?
        } ?>
        ob.find('input#t').val(ob.find('input[name="sessid"]').val());
        return true;
    });
});
</script>