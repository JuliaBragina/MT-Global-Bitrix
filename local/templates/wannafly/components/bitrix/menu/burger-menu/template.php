<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>

<?php
include('./.burger-menu.menu.php');
include('./multimediynye-resheniya/.burger-sub-menu.menu.php');
?>
<nav class="burgerMenu burgerMenu_hidden">
    <ul class="burgerMenu__list">
        <?php foreach($aMenuLinks as $arItem): ?>
            <li class="burgerMenu__item">
                <?php if ($arItem[3]["has_submenu"]):?>
                    <span class="burgerMenu__link"><?=$arItem[0]?></span>
                    <ul class="burgerMenu__subList burgerMenu__subList_hidden">
                        <?php foreach($aSubMenuLinks as $subItem): ?>
                            <li class="burgerMenu__subItem">
                                <a class="burgerMenu__subLink" href="<?=$subItem[1]?>"><?=$subItem[0]?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php else: ?>
                    <a class="burgerMenu__link" href="<?=$arItem[1]?>"><?=$arItem[0]?></a>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</nav>