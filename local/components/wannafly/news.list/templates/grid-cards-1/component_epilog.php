<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

// Проверка прав пользователя (например, только для администраторов или редакторов)
global $USER;
if ($USER->IsAuthorized() && $USER->IsAdmin()) {

    // Перебираем все элементы, чтобы добавить к ним контекстное меню
    if (is_array($arResult['ITEMS']) && count($arResult['ITEMS']) > 0) {
        foreach ($arResult['ITEMS'] as $arItem) {
            // Добавляем действия редактирования и удаления для каждого элемента
            $arButtons = CIBlock::GetPanelButtons(
                $arItem['IBLOCK_ID'],
                $arItem['ID'],
                0, // ID раздела, если нужен
                array("SECTION_BUTTONS" => false, "SESSID" => true)
            );

            // Добавляем тулбар редактирования и удаления для каждого элемента
            $this->AddEditAction($arItem['ID'], $arButtons["edit"]["edit_element"]["ACTION_URL"], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arButtons["edit"]["delete_element"]["ACTION_URL"], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        }
    }
}
