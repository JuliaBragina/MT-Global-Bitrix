<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
// ... другие переменные
$this->setFrameMode(true);
?>

<section class="typicalSolutions">
    <div class="typicalSolutions__container container">
        <h2 class="typicalSolutions__title title__second title__bottom-margin"><?= $arParams['TITLE'] ?></h2>
        <nav class="typicalSolutions__navigation">
            <ul class="typicalSolutions__list">
                <?php foreach ($arResult['ITEMS'] as $item): ?>
                    <li class="typicalSolutions__item">
                        <button type="button" class="typicalSolutions__button" data-solution="<?= $item['CODE']; ?>">
                            <?= $item['NAME']; ?>
                        </button>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>
        
        <?php foreach ($arResult['ITEMS'] as $item): ?>
            <div class="typicalSolutions__description" data-solution="<?= $item['CODE']; ?>" style="display:none;" id="<?=$this->GetEditAreaId($item['ID']);?>">
                <article class="typicalSolutions__article" >
                    <h3 class="typicalSolutions__subTitle title__third"><?= $item['NAME']; ?></h3>
                    <?= $item['DETAIL_TEXT']; ?>
                    
                    <button type="button" class="btn btn-primary btn-arrow-white doneProjects__button"
                            data-fancybox="popup__needProject" data-src="#popup__needProject">Заказать решение</button>
                </article>

                <figure class="typicalSolutions__illustration">
                    <img class="typicalSolutions__img" src="<?= $item['DETAIL_PICTURE']['SRC']; ?>" alt="<?= $item['NAME']; ?>">
                </figure>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<script>
    const buttons = document.querySelectorAll('.typicalSolutions__button');
    const descriptions = document.querySelectorAll('.typicalSolutions__description');

    buttons.forEach((button, index) => {
        button.addEventListener('click', () => {
            buttons.forEach(btn => btn.classList.remove('typicalSolutions__button_active'));

            button.classList.add('typicalSolutions__button_active');

            descriptions.forEach(desc => desc.style.display = 'none');
            descriptions[index].style.display = 'flex';
        });
    });

    buttons[0].classList.add('typicalSolutions__button_active');
    descriptions[0].style.display = 'flex';
</script>