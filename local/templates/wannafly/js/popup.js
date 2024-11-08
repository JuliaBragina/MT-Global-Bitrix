$(document).on('click', '.equipment__itemList', function () {
    const image = $(this).data('image');
    const description = $(this).data('description');

    $('#popup__showMoreInfo .popup__img').attr('src', image);

    const listContainer = $('#popup__showMoreInfo .popup__list');
    listContainer.empty();

    const tempContainer = $(`<div>${description}</div>`);
    const listItems = tempContainer.find('li');

    listItems.each(function() {
        $(this).addClass('popup__item list-item');
        listContainer.append($(this).prop('outerHTML'));
    });

    $('#popup__showMoreInfo').show();
});
