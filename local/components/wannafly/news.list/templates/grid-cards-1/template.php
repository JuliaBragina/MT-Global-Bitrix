<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
$this->setFrameMode(true);
?>

<section id="equipments" class="equipment section">
    <div class="container">
        <h2 class="equipment__title title__second"><?= $arParams['TITLE'] ?></h2>
        <div class="equipment__list">
            <?php if (!empty($arResult['ITEMS'])): ?>
                <?php foreach ($arResult['ITEMS'] as $item): ?>
                    <?php
                    // Получение измененного изображения
                    $resizedImage = CFile::ResizeImageGet(
                        $item["PREVIEW_PICTURE"]['ID'],
                        array("width" => 9999, "height" => 200), // Ширина 9999, чтобы сохранить пропорции
                        BX_RESIZE_IMAGE_PROPORTIONAL, // Пропорциональное изменение
                        false // Получаем путь к файлу и размеры
                    );
                    ?>
                    <div class="equipment__itemList" id="<?= $this->GetEditAreaId($item['ID']); ?>" data-fancybox="popup__showMoreInfo" data-src="#popup__showMoreInfo">
                        <img src="<?= $resizedImage['src'] ?>" class="equipment__img img-fluid" alt="<?= $item['NAME'] ?>">
                        <p class="equipment__caption"><?= $item['NAME'] ?></p>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <li class="equipment__itemList">
                    <p>Нет доступного оборудования.</p>
                </li>
            <?php endif; ?>
        </div>
    </div>
</section>

