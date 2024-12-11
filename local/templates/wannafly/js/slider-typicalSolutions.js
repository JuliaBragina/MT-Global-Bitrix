document.addEventListener('DOMContentLoaded', () => {
    const buttons = document.querySelectorAll('.typicalSolutions__button');
    const descriptions = document.querySelectorAll('.typicalSolutions__description');

    buttons.forEach((button, index) => {
        button.addEventListener('click', () => {
            buttons.forEach(btn => btn.classList.remove('typicalSolutions__button_active'));

            const buttonsShowMore = document.querySelectorAll('.typicalSolutions__buttonOpenArticle');
            buttonsShowMore.forEach(button => {
                button.addEventListener('click', function() {
                    const article = this.closest('.typicalSolutions__article');
                    article.classList.remove('typicalSolutions__article_fulltext');
                    this.classList.remove('typicalSolutions__buttonOpenArticle_fulltext');
                });
            });

            button.classList.add('typicalSolutions__button_active');

            descriptions.forEach(desc => desc.style.display = 'none');
            descriptions[index].style.display = 'flex';
        });
    });

    buttons[0].classList.add('typicalSolutions__button_active');
    descriptions[0].style.display = 'flex';

    const buttonsShowMore = document.querySelectorAll('.typicalSolutions__buttonOpenArticle');
    buttonsShowMore.forEach(button => {
        button.addEventListener('click', function() {
            const article = this.closest('.typicalSolutions__article');
            article.classList.toggle('typicalSolutions__article_fulltext');
            this.classList.toggle('typicalSolutions__buttonOpenArticle_fulltext');
        });
    });
})