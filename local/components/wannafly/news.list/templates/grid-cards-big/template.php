<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); 
/** @var array $arParams */
/** @var array $arResult */
// ... другие переменные
$this->setFrameMode(true);
?>

<section class="ourSolutions section-container">
    <div class="ourSolutions__container container">
        <h2 class="ourSolutions__title title__second title__bottom-margin"><?= $arParams['TITLE'] ?>й</h2>
        <div class="ourSolutions__grid">
            <?php foreach ($arResult['ITEMS'] as $item):
                $resizedImage = CFile::ResizeImageGet(
                    $item["DETAIL_PICTURE"]['ID'],
                    array("width" => 59, "height" => 59),
                    BX_RESIZE_IMAGE_PROPORTIONAL,
                    false
                );
            ?>
            <article id="<?= $this->GetEditAreaId($item['ID']); ?>" class="ourSolutions__item">
                <img class="ourSolutions__img" src="<?= $resizedImage['src']; ?>" alt="<?= $item['NAME']; ?>">
                <h3 class="ourSolutions__subTitle title__third"><?= $item['NAME']; ?></h3>
                <p class="ourSolutions__paragraph"><?= $item['DETAIL_TEXT']; ?></p>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

