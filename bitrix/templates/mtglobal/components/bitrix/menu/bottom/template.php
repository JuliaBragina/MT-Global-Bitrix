<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<? if (!empty($arResult)): ?>


    <ul class="footer-menu col-lg col-12 d-flex flex-wrap fz-0 align-content-start pb-sm-0 mb-sm-0 pb-20 mb-20">
        <?
        $previousLevel = 0;
        foreach ($arResult as $arItem):
            ?>
            <? if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
            <?= str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"])); ?>
        <? endif ?>

            <? if ($arItem["IS_PARENT"]):?>
            <li <? if ($arItem["SELECTED"]):?> class="active"<? endif ?>>
                <a class="d-inline-block colorGray8 fz-18" href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a>
            </li>

        <? else:?>

            <? if ($arItem["PERMISSION"] > "D"):?>
                <li <? if ($arItem["SELECTED"]):?> class="active"<? endif ?>>
                    <a class="d-inline-block colorGray8 fz-18" href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a>
                </li>
            <? endif ?>

        <? endif ?>

            <? $previousLevel = $arItem["DEPTH_LEVEL"]; ?>

        <? endforeach ?>

        <? if ($previousLevel > 1)://close last item tags?>
            <?= str_repeat("</ul></li>", ($previousLevel - 1)); ?>
        <? endif ?>

        <li class="footer-list_link pt-xl-15">
            <a class="fz-12 colorGray5" href="/sitemap/"><?= GetMessage("SITEMAP") ?></a>
        </li>
        <li class="footer-list_link pt-xl-15">
            <a class="fz-12 colorGray5" href="/Privacy_policy_MTG.pdf" target="_blank"><?= GetMessage("POLITICA") ?></a>
        </li>

    </ul>

<? endif ?>