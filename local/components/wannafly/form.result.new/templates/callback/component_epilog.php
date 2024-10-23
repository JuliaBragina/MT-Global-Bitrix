<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

// Проверка прав пользователя (например, только для администраторов или редакторов)
global $USER;
if ($USER->IsAuthorized() && $USER->IsAdmin()) {

}
?>