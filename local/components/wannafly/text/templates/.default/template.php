<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<section class="textBlock section-container">
    <div class="textBlock__container container">
        <h2 class="textBlock__title title__second title__bottom-margin"><?= htmlspecialchars($arResult['TITLE']) ?></h2>
        <div class="textBlock__paragraph">
            <?$APPLICATION->IncludeFile(
                SITE_DIR.'includes/text.php',
                [], 
                ["MODE" => "html"]
            );?>
        </div>
    </div>
</section>

