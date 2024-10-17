<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>

<?php if (!empty($arResult)):?>
<nav class="menu-main__nav">
    <ul class="menu-main__list">
        <?php foreach($arResult as $key => $arItem):?>
            <?php if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) continue;?>
            
            <li class="menu-main__item">
                <?php if($arItem["TEXT"] == "Услуги"):?>
                    <button type="button" class="menu-main__burger-button" aria-label="Открыть бургерное меню" onclick="toggleBurgerMenu()">
                        <?=$arItem["TEXT"]?>
                    </button>
                <?php else:?>
                    <a class="menu-main__link" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
                <?php endif?>
            </li>
        <?php endforeach?>
    </ul>
</nav>
<?php endif?>