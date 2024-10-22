<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); 
/** @var array $arParams */
/** @var array $arResult */
// ... другие переменные
$this->setFrameMode(true);
?>

<section class="grid-cards">
    <div class="grid-cards__container">
        <h2 class="grid-cards__title title__second"><?php echo $arParams["TITLE"]?></h2>
        <div class="grid-cards__grid">
            <?php foreach ($arResult["ITEMS"] as $item): ?>
                <?php
                // Проверяем наличие изображения
                if (!empty($item["DETAIL_PICTURE"])) {
                    // Меняем размер изображения с фиксированной высотой 30px
                    $resizedImage = CFile::ResizeImageGet(
                        $item["DETAIL_PICTURE"],
                        array("width" => 110, "height" => 9999), // Ширина 9999, чтобы сохранить пропорции
                        BX_RESIZE_IMAGE_PROPORTIONAL, // Пропорциональное изменение
                        false // Получаем путь к файлу и размеры
                    );
                    ?>
                    <div class="grid-cards__item" id="<?=$this->GetEditAreaId($item['ID']);?>">
                        <img class="grid-cards__img"
                             src="<?= htmlspecialchars($resizedImage['src']) ?>"
                             alt="<?= htmlspecialchars($item["NAME"]) ?>">
                    </div>
                <?php } ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>
