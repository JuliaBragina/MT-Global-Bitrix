<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>


<?php
    if (isset($arResult['SLOGANS']) && is_array($arResult['SLOGANS'])) {
        $arResult['SLOGANS'] = array_filter($arResult['SLOGANS']);
    } else {
        $arResult['SLOGANS'] = [];
    }
?>

<section class="main section-container_margin_mobile">
    <div class="main__video-container first-video">
        <?php if (!empty($arResult['VIDEO_SRC'])): ?>
            <video class="main__video" autoplay muted loop>
                <source src="<?= htmlspecialchars($arResult['VIDEO_SRC']) ?>" type="video/mp4">
                Ваш браузер не поддерживает видео.
            </video>
            <?php else: ?>
                <?php 
                    $pageIdentifier = md5($_SERVER['REQUEST_URI']); 
                    $sourceFile = $_SERVER['DOCUMENT_ROOT'] . $arResult['IMG_SRC'];
                    $destinationFile = $_SERVER['DOCUMENT_ROOT'] . "/upload/resized_image_{$pageIdentifier}.jpeg";
                    $arSize = ["width" => 1500, "height" => 1500];
                    $resized = CFile::ResizeImageFile($sourceFile, $destinationFile, $arSize, BX_RESIZE_IMAGE_EXACT, ['quality' => 100]);
                    
                    if (!file_exists($destinationFile)) {
                        $resized = CFile::ResizeImageFile($sourceFile, $destinationFile, $arSize, BX_RESIZE_IMAGE_EXACT, ['quality' => 100]);
                        if (!$resized) {
                            $destinationFile = $arResult['IMG_SRC'];
                        }
                    }

                    $resizedImagePath = str_replace($_SERVER['DOCUMENT_ROOT'], '', $destinationFile);
                ?>
                <img class="main__img" src="<?= htmlspecialchars($resizedImagePath) ?>" alt="">
            <?php endif; ?>

        
            <svg class="main__mask" width="829" height="876" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <mask id="video-mask" maskUnits="userSpaceOnUse">
                        <rect width="100%" height="100%" fill="black" />
                        <path d="M467.159 2.96016C359.203 14.2423 282.109 96.7486 202.431 170.505C117.661 248.974 0.453918 319.847 0.00128174 435.399C-0.451904 551.09 115.996 623.255 200.347 702.378C280.48 777.544 357.854 862.802 467.159 873.6C585.863 885.326 719.187 855.077 792.424 760.868C861.705 671.747 807.601 548.307 807.811 435.399C808.021 322.091 863.732 197.707 793.633 108.72C720.022 15.2741 585.427 -9.39961 467.159 2.96016Z" fill="white" />
                    </mask>
                </defs>
            </svg>
    </div>

    <div class="main__video-container main__video-container_second second-video">
        <?php if (!empty($arResult['VIDEO_SRC'])): ?>
            <video class="main__video" autoplay muted loop>
                <source src="<?= htmlspecialchars($arResult['VIDEO_SRC']) ?>" type="video/mp4">
                Ваш браузер не поддерживает видео.
            </video>
        <?php else: ?>
            <?php
                $pageIdentifier = md5($_SERVER['REQUEST_URI']);
                $destinationFile = $_SERVER['DOCUMENT_ROOT'] . "/upload/resized_image_{$pageIdentifier}.png";
                if (!file_exists($destinationFile)) {
                    $resized = CFile::ResizeImageFile($sourceFile, $destinationFile, $arSize, BX_RESIZE_IMAGE_EXACT, ['quality' => 100]);
                    if (!$resized) {
                        $destinationFile = $arResult['IMG_SRC'];
                    }
                }

                $resizedImagePath = str_replace($_SERVER['DOCUMENT_ROOT'], '', $destinationFile);
            ?>
            <img class="main__img" src="<?= htmlspecialchars($resizedImagePath) ?>" alt="">
        <?php endif; ?>

        <svg class="main__mask" width="829" height="876" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <mask id="video-mask" maskUnits="userSpaceOnUse">
                    <rect width="100%" height="100%" fill="black" />
                    <path d="
                        M467.159 2.96016
                        C359.203 14.2423 282.109 96.7486 202.431 170.505
                        C117.661 248.974 0.453918 319.847 0.00128174 435.399
                        C-0.451904 551.09 115.996 623.255 200.347 702.378
                        C280.48 777.544 357.854 862.802 467.159 873.6
                        C550 870 650 860 750 820
                        S820 780 829 760
                        V876 H0 V760
                        C50 800 150 860 467.159 873.6
                        Z" fill="white" />
                </mask>
            </defs>
        </svg>
    </div>

    <div class="main__container container">
        <div class="main__description">
                <h1 class="main__title title__first title__bottom-margin">
                    <?= htmlspecialchars_decode($arResult['TITLE'], ENT_QUOTES) ?>
                </h1>

            <?php if (count($arResult['SLOGANS']) > 1): ?>
                <ul class="main__actionList">
                    <?php foreach ($arResult['SLOGANS'] as $slogan): ?>
                        <li class="main__actionItem list-item"><?= htmlspecialchars($slogan) ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php elseif (count($arResult['SLOGANS']) == 1): ?>
                <p class="main__slogan"><?= htmlspecialchars($arResult['SLOGANS'][0]) ?></p>
            <?php endif; ?>

            <button type="button" class="btn btn-arrow btn-secondary main__button" data-fancybox
                href="#popup__callBack"  data-options='{"touch" : false, "momentum" : false}'>Запланировать встречу
            </button>
        </div>
    </div>
</section>