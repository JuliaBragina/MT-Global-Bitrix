<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
$this->setFrameMode(true);
?>

<section id="equipments" class="equipment section">
    <div class="container">
        <h2 class="equipment__title title__second title__bottom-margin"><?= $arParams['TITLE'] ?></h2>
        <div class="equipment__list">
            <?php if (!empty($arResult['ITEMS'])): ?>
                <?php foreach ($arResult['ITEMS'] as $item): ?>
                    <?php
                    $resizedImage = CFile::ResizeImageGet(
                        $item["PREVIEW_PICTURE"]['ID'],
                        array("width" => 200, "height" => 9999),
                        BX_RESIZE_IMAGE_PROPORTIONAL,
                        false 
                    );
                    ?>
                    <div class="equipment__itemList" 
                        id="<?= $this->GetEditAreaId($item['ID']); ?>"
                        data-image="<?= $resizedImage['src'] ?>"
                        data-description="<?= htmlspecialchars($item['PREVIEW_TEXT']) ?>"
                        data-fancybox href="#popup__showMoreInfo"  
                        data-options='{"touch" : false, "momentum" : false}'
                    >


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

