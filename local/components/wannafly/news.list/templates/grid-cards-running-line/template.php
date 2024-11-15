<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<section class="grid-cards-running-line section-container">
    <div class="grid-cards-running-line__container grid-cards-running-line__container_runningLine">
        <div class="grid-cards-running-line__containerTitle container">
            <h2 class="grid-cards-running-line__title title__second title__bottom-margin"><?= $arParams['TITLE'] ?></h2>
        </div>

        <div class="grid-cards-running-line__wrap">
            <div class="grid-cards-running-line__grid running-line-container grid-cards-running-line__marquee">
                <?php foreach ($arResult['ITEMS'] as $item): ?>
                    <?php if (!empty($item['DETAIL_PICTURE'])): ?>
                        <div class="grid-cards-running-line__item">
                        <?php
                            $resizedImage = CFile::ResizeImageGet(
                                $item["DETAIL_PICTURE"],
                                array("width" => 150, "height" => 9999), // Ширина 9999, чтобы сохранить пропорции
                                BX_RESIZE_IMAGE_PROPORTIONAL, // Пропорциональное изменение
                                false // Получаем путь к файлу и размеры
                            );
                            ?>
                            <img class="grid-cards-running-line__img" src="<?= htmlspecialchars($resizedImage['src']) ?>" alt="<?= htmlspecialchars($item['NAME']) ?>" id="<?=$this->GetEditAreaId($item['ID']);?>">
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>

            <div aria-hidden="true" class="grid-cards-running-line__grid running-line-container grid-cards-running-line__marquee">
                <?php foreach ($arResult['ITEMS'] as $item): ?>
                    <?php if (!empty($item['DETAIL_PICTURE'])): ?>
                        <div class="grid-cards-running-line__item">
                        <?php
                            $resizedImage = CFile::ResizeImageGet(
                                $item["DETAIL_PICTURE"],
                                array("width" => 150, "height" => 9999), // Ширина 9999, чтобы сохранить пропорции
                                BX_RESIZE_IMAGE_PROPORTIONAL, // Пропорциональное изменение
                                false // Получаем путь к файлу и размеры
                            );
                            ?>
                            <img class="grid-cards-running-line__img" src="<?= htmlspecialchars($resizedImage['src']) ?>" alt="<?= htmlspecialchars($item['NAME']) ?>" id="<?=$this->GetEditAreaId($item['ID']);?>">
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="grid-cards-running-line__wrap">
            <div class="grid-cards-running-line__grid running-line-container running-line-container_reverse grid-cards-running-line__marquee reverce">
                <?php foreach ($arResult['ITEMS'] as $item): ?>
                    <?php if (!empty($item['DETAIL_PICTURE'])): ?>
                        <div class="grid-cards-running-line__item running-line-container__item">
                        <?php
                            $resizedImage = CFile::ResizeImageGet(
                                $item["DETAIL_PICTURE"],
                                array("width" => 150, "height" => 9999), // Ширина 9999, чтобы сохранить пропорции
                                BX_RESIZE_IMAGE_PROPORTIONAL, // Пропорциональное изменение
                                false // Получаем путь к файлу и размеры
                            );
                            ?>
                            <img class="grid-cards-running-line__img" src="<?= htmlspecialchars($resizedImage['src']) ?>" alt="<?= htmlspecialchars($item['NAME']) ?>" id="<?=$this->GetEditAreaId($item['ID']);?>">
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>

            <div aria-hidden="true"  class="grid-cards-running-line__grid running-line-container running-line-container_reverse grid-cards-running-line__marquee reverce">
                <?php foreach ($arResult['ITEMS'] as $item): ?>
                    <?php if (!empty($item['DETAIL_PICTURE'])): ?>
                        <div class="grid-cards-running-line__item running-line-container__item">
                        <?php
                            $resizedImage = CFile::ResizeImageGet(
                                $item["DETAIL_PICTURE"],
                                array("width" => 150, "height" => 9999), // Ширина 9999, чтобы сохранить пропорции
                                BX_RESIZE_IMAGE_PROPORTIONAL, // Пропорциональное изменение
                                false // Получаем путь к файлу и размеры
                            );
                            ?>
                            <img class="grid-cards-running-line__img" src="<?= htmlspecialchars($resizedImage['src']) ?>" alt="<?= htmlspecialchars($item['NAME']) ?>" id="<?=$this->GetEditAreaId($item['ID']);?>">
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
