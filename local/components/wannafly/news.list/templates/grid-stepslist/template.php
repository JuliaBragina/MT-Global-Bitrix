<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); 
$this->setFrameMode(true);
?>

<section id="ourApproach" class="ourApproach section">
    <aside class="asideMenu">
        <nav class="asideMenu__nav">
            <ul class="asideMenu__list">
                <li class="asideMenu__item"><a class="asideMenu__link" href="#solutions">Решения</a></li>
                <li class="asideMenu__item"><a class="asideMenu__link" href="#equipments">Оборудование</a></li>
                <li class="asideMenu__item"><a class="asideMenu__link" href="#doneProjects">Кейсы</a></li>
                <li class="asideMenu__item asideMenu__item_active"><a class="asideMenu__link" href="#ourApproach">Наш подход</a></li>
                <li class="asideMenu__item"><a class="asideMenu__link" href="#sertificates">Сертификаты</a></li>
            </ul>
        </nav>
    </aside>

    <div class="ourApproach__container container">
        <h2 class="ourApproach__title title__second title__bottom-margin"><?= $arParams['TITLE'] ?></h2>
        
        <div class="ourApproach__steps">
            <?php foreach ($arResult['ITEMS'] as $index => $item): ?>
                <article class="ourApproach__step" id="<?=$this->GetEditAreaId($item['ID']);?>">
                    <div class="ourApproach__headerContainer">
                        <?php if ($item['PREVIEW_PICTURE']): ?>
                            <img src="<?= ($item['PREVIEW_PICTURE']['SRC']) ?>" class="ourApproach__img" alt="<?= htmlspecialchars($item['NAME']) ?>">
                        <?php endif; ?>
                        <div class="ourApproach__subTitleContainer">
                            <p class="ourApproach__number title__third"><?= str_pad($index + 1, 2, '0', STR_PAD_LEFT) ?> <span class="ourApproach__divider">/</span></p>
                            <h3 class="ourApproach__subTitle title__third"><?= htmlspecialchars($item['NAME']) ?></h3>
                        </div>
                    </div>
                    <div class="ourApproach__description">
                        <?= $item['PREVIEW_TEXT'] ?>
                    </div>

                </article>
            <?php endforeach; ?>
        </div>

        <button type="button" class="btn btn-primary btn-arrow-white popup__callBack ourApproach__button" data-fancybox="popup__callback" data-src="#popup__callBack">Подобрать решение</button>
    </div>
</section>
