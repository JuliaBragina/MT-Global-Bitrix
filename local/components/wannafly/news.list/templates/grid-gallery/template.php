<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
?>

<section id="certificates" class="certificates">
    <div class="certificates__container container">
        <h2 class="certificates__title title__second title__bottom-margin"><?= $arParams['TITLE'] ?></h2>
            <div class="certificates__flex running-line-container">
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
                                    <img class="certificates__img running-line-container__item" src="<?= $certificateImage['src']; ?>"
                                            alt="Сертификат" id="<?= $this->GetEditAreaId($item['ID']); ?>">
                                <?php endif; ?>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endif; ?>
        </div>
    </div>
</section>