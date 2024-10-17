<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<section class="textBlock">
    <div class="textBlock__container">
        <h2 class="textBlock__title title__second"><?= htmlspecialchars($arResult['TITLE']) ?></h2>
        <div class="textBlock__paragraph">
            <?$APPLICATION->IncludeFile(
                SITE_DIR.'includes/text.php',
                [], 
                ["MODE" => "html"]
            );?>
        </div>
    </div>
</section>

