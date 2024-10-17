<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); 
/** @var array $arParams */
/** @var array $arResult */
// ... другие переменные
$this->setFrameMode(true);
?>

<section class="ourSolutions">
    <div class="ourSolutions__container">
        <h2 class="ourSolutions__title title__second"><?= $arParams['TITLE'] ?>й</h2>
        <div class="ourSolutions__grid">
            <?php foreach ($arResult['ITEMS'] as $item):
                $imgSrc = CFile::ResizeImageGet(
                    $item['DETAIL_PICTURE'],
                    ['width' => 300, 'height' => 200],
                    BX_RESIZE_IMAGE_PROPORTIONAL,
                    true
                );
            ?>
            <article id="<?= $this->GetEditAreaId($item['ID']); ?>" class="ourSolutions__item">
                <img class="ourSolutions__img" src="<?= $imgSrc['src']; ?>" alt="<?= $item['NAME']; ?>">
                <h3 class="ourSolutions__subTitle title__third"><?= $item['NAME']; ?></h3>
                <p class="ourSolutions__paragraph"><?= $item['DETAIL_TEXT']; ?></p>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

