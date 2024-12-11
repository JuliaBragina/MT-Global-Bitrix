<section id="certificates" class="certificates swiper section-container">
    <div class="certificates__container container">
        <h2 class="certificates__title title__second title__bottom-margin"><?= $arParams['TITLE'] ?></h2>
        <div class="certificates__wrap swiper-container">
            <div class="certificates__flex certificates__flex_mode_swiper running-line-container certificates__marquee swiper-wrapper">
                <?php if (!empty($arResult['ITEMS'])): ?>
                    <?php foreach ($arResult['ITEMS'] as $item): ?>
                        <?php if (!empty($item['PROPERTIES']['SERTIFICATES']['VALUE'])): ?>
                            <?php foreach ($item['PROPERTIES']['SERTIFICATES']['VALUE'] as $certificateId): ?>
                                <?php
                                $certificateImage = CFile::ResizeImageGet($certificateId, [
                                    'width' => 270,
                                    'height' => 400,
                                ], BX_RESIZE_IMAGE_PROPORTIONAL);
                                ?>
                                <?php if (!empty($certificateImage['src'])): ?>
                                    <a href="<?= CFile::GetPath($certificateId); ?>" class="certificates__link swiper-slide" data-fancybox="gallery1" data-caption="Сертификат">
                                        <img class="certificates__img running-line-container__item" src="<?= $certificateImage['src']; ?>"
                                            alt="Сертификат" id="<?= $this->GetEditAreaId($item['ID']); ?>">
                                    </a>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>

            <div class="certificates__flex certificates__flex_mode_static running-line-container certificates__marquee">
                <?php if (!empty($arResult['ITEMS'])): ?>
                    <?php foreach ($arResult['ITEMS'] as $item): ?>
                        <?php if (!empty($item['PROPERTIES']['SERTIFICATES']['VALUE'])): ?>
                            <?php foreach ($item['PROPERTIES']['SERTIFICATES']['VALUE'] as $certificateId): ?>
                                <?php
                                $certificateImage = CFile::ResizeImageGet($certificateId, [
                                    'width' => 400,
                                    'height' => 300,
                                ], BX_RESIZE_IMAGE_PROPORTIONAL);
                                ?>
                                <?php if (!empty($certificateImage['src'])): ?>
                                    <a href="<?= CFile::GetPath($certificateId); ?>" class="certificates__link swiper-slide" data-fancybox="gallery2" data-caption="Сертификат">
                                        <img class="certificates__img running-line-container__item" src="<?= $certificateImage['src']; ?>"
                                            alt="Сертификат" id="<?= $this->GetEditAreaId($item['ID']); ?>">
                                    </a>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>

            <?php /* <div aria-hidden="true" class="certificates__flex running-line-container certificates__marquee">
                <?php if (!empty($arResult['ITEMS'])): ?>
                    <?php foreach ($arResult['ITEMS'] as $item): ?>
                        <?php if (!empty($item['PROPERTIES']['SERTIFICATES']['VALUE'])): ?>
                            <?php foreach ($item['PROPERTIES']['SERTIFICATES']['VALUE'] as $certificateId): ?>
                                <?php
                                $certificateImage = CFile::ResizeImageGet($certificateId, [
                                    'width' => 0,
                                    'height' => 9999,
                                ], BX_RESIZE_IMAGE_PROPORTIONAL);
                                ?>
                                <?php if (!empty($certificateImage['src'])): ?>
                                    <a href="<?= CFile::GetPath($certificateId); ?>" data-fancybox="gallery" data-caption="Сертификат">
                                        <img class="certificates__img running-line-container__item" src="<?= $certificateImage['src']; ?>"
                                            alt="Сертификат" id="<?= $this->GetEditAreaId($item['ID']); ?>">
                                    </a>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endif;?>
            </div> */ ?>
        </div>
    </div>
</section>