<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); 
?>

<?php
    $arResult['SLOGANS'] = array_filter($arResult['SLOGANS']);
?>

<section class="main">
    <div class="main__container main__container_spacebetween container">
        <div class="main__description">
            <h1 class="main__title title__first"><?= htmlspecialchars($arResult["TITLE"]) ?></h1>

            <?php if (count($arResult['SLOGANS']) > 1): ?>
                <ul class="main__actionList">
                    <?php foreach ($arResult['SLOGANS'] as $slogan): ?>
                        <li class="main__actionItem list-item"><?= htmlspecialchars($slogan) ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php elseif (count($arResult['SLOGANS']) == 1): ?>
                <p class="main__slogan"><?= htmlspecialchars($arResult['SLOGANS'][0]) ?></p>
            <?php else: ?>
                <p class="main__slogan">Слоганы не заданы</p>
            <?php endif; ?>

            <button type="button" class="btn btn-arrow btn-secondary main__button" data-fancybox="popup__callback"
                data-src="#popup__callBack">Подобрать решение
            </button>
        </div>

        <img class="main__img img-fluid" src="<?= htmlspecialchars($arResult['IMG_SRC']) ?>" alt="">
    </div>
</section>
