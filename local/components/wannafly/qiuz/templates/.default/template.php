<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<section class="quiz">
    <div class="container text-wrapper">
        <h2 class="getCalculation__title title__second title__bottom-margin"><?= htmlspecialchars($arParams['TITLE']) ?></h2>
        <p class="getCalculation__paragrapgh"><?= htmlspecialchars($arParams['DESCRIPTION']) ?></p>
    </div>
    <div class="container quiz-wrapper">
        <?php $APPLICATION->IncludeFile(
            SITE_DIR . 'includes/quiz.php',
            [],
            ["MODE" => "html"]
        ); ?>

    </div>
</section>