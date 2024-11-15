<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>


<?php
    if (isset($arResult['SLOGANS']) && is_array($arResult['SLOGANS'])) {
        $arResult['SLOGANS'] = array_filter($arResult['SLOGANS']);
    } else {
        $arResult['SLOGANS'] = [];
    }
?>

<section class="main">
    <div class="main__video-container first-video">
        <video class="main__video" autoplay muted loop>
            <source src="<?= htmlspecialchars($arResult['VIDEO_SRC']) ?>" type="video/mp4">
            Ваш браузер не поддерживает видео.
        </video>
        <svg class="main__mask" width="760" height="806" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <mask id="video-mask" maskUnits="userSpaceOnUse">
                    <rect width="100%" height="100%" fill="black" />
                    <path d="M467.159 2.96016C359.203 14.2423 282.109 96.7486 202.431 170.505C117.661 248.974 0.453918 319.847 0.00128174 435.399C-0.451904 551.09 115.996 623.255 200.347 702.378C280.48 777.544 357.854 862.802 467.159 873.6C585.863 885.326 719.187 855.077 792.424 760.868C861.705 671.747 807.601 548.307 807.811 435.399C808.021 322.091 863.732 197.707 793.633 108.72C720.022 15.2741 585.427 -9.39961 467.159 2.96016Z" fill="white" />
                </mask>
            </defs>
        </svg>
    </div>

    <div class="main__video-container main__video-container_second second-video">
        <video class="main__video" autoplay muted loop>
            <source src="<?= htmlspecialchars($arResult['VIDEO_SRC']) ?>" type="video/mp4">
            Ваш браузер не поддерживает видео.
        </video>
        <svg class="main__mask" width="760" height="806" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <mask id="video-mask-2" maskUnits="userSpaceOnUse">
                    <rect width="100%" height="100%" fill="black" />
                    <path d="M688.881 69.5428C603.191 2.93821 490.504 9.03752 382.006 7.04131C266.574 4.91749 132.993 -25.1381 52.7446 57.8388C-27.6007 140.916 6.49923 273.548 12.6302 388.976C18.4545 498.631 15.3078 613.651 86.6992 697.105C164.229 787.734 281.34 858.229 399.339 841.024C510.963 824.748 557.307 698.316 635.551 617.076C714.073 535.548 840.298 484.46 851.272 371.789C862.796 253.472 782.756 142.509 688.881 69.5428Z" fill="white" />
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
