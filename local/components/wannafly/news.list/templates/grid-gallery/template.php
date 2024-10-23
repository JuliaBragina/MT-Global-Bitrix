<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
?>

<section id="certificates" class="certificates swiper">
    <div class="certificates__container swiper-container">
        <h2 class="certificates__title title__second"><?= $arParams['TITLE'] ?></h2>
            <div class="certificates__flex swiper-wrapper">
                <?php if (!empty($arResult['ITEMS'])): ?>
                    <?php foreach ($arResult['ITEMS'] as $item): ?>
                        <?php if (!empty($item['PROPERTIES']['SERTIFICATES']['VALUE'])): ?>
                            <?php foreach ($item['PROPERTIES']['SERTIFICATES']['VALUE'] as $certificateId): ?>
                                <?php
                                $certificateImage = CFile::ResizeImageGet($certificateId, [
                                    'width' => 0,
                                    'height' => 200,
                                ], BX_RESIZE_IMAGE_PROPORTIONAL);
                                ?>
                                <?php if (!empty($certificateImage['src'])): ?>
                                    <img class="certificates__img swiper-slide" src="<?= $certificateImage['src']; ?>"
                                            alt="Сертификат" id="<?= $this->GetEditAreaId($item['ID']); ?>">
                                <?php endif; ?>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endif; ?>
        </div>
    </div>
</section>