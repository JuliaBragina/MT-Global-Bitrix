<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

    use Bitrix\Main\Page\Asset;

    $cssFile = $_SERVER["DOCUMENT_ROOT"] . $templateFolder . '/assets/style.css';
    $cssVersion = file_exists($cssFile) ? '?' . filemtime($cssFile) : '';

    $jsFile = $_SERVER["DOCUMENT_ROOT"] . $templateFolder . '/assets/menu.js';
    $jsVersion = file_exists($jsFile) ? '?' . filemtime($jsFile) : '';

    Asset::getInstance()->addCss($templateFolder . '/assets/style.css' . $cssVersion);

    Asset::getInstance()->addJs($templateFolder . '/assets/menu.js' . $jsVersion);
?>

<div class="overlay" id="overlay"></div>
<nav class="header__nav">
    <ul class="header__list container">
        <?php
        $previousLevel = 0;
        foreach ($arResult as $arItem):
        if ($arItem["DEPTH_LEVEL"] > $arParams["MAX_LEVEL"]) continue;

        if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel) {
            echo str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));
        }
        ?>
        <?php if ($arItem["IS_PARENT"]): ?>
        <li class="header__item has-submenu header__item_level_<?= $arItem["DEPTH_LEVEL"] ?><?php if ($arItem["SELECTED"]): ?> header__item_active<?php endif; ?>">
            <a href="<?= $arItem["LINK"] ?>" class="header__link header__link_level_<?= $arItem["DEPTH_LEVEL"] ?>"><?= $arItem["TEXT"] ?></a>
            <div class="header__sublist">
                <ul>
                    <?php else: ?>
                        <li class="header__item header__item_level_<?= $arItem["DEPTH_LEVEL"] ?><?php if ($arItem["SELECTED"]): ?> header__item_active<?php endif; ?>">
                            <a href="<?= $arItem["LINK"] ?>" class="header__link header__link_level_<?= $arItem["DEPTH_LEVEL"] ?>"><?= $arItem["TEXT"] ?></a>
                        </li>
                    <?php endif; ?>

                    <?php
                    $previousLevel = $arItem["DEPTH_LEVEL"];
                    endforeach;

                    if ($previousLevel > 1) {
                        echo str_repeat("</ul></li>", ($previousLevel - 1));
                    }
                    ?>
    </ul>
</nav>
