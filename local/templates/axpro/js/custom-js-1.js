

$(document).ready(function() {
   $("#phone-basket").mask("+7(999) 999-99-99");

   $("#phone").mask("+7(999) 999-99-99");
   $(".phone").mask("+7(999) 999-99-99");

   //Срабатывание форм на сайте
   $("form").submit(function(event) {
    
    if($(this).attr('id') === 'form_offer' || $(this).attr('id') === 'feedback_case' || $(this).attr('id') === 'form_consultation')
    {
      event.preventDefault();

      var thisBlock = $(this);
      var data = $(this).serialize();
      $.ajax({
            type: "POST", 
            url: "/local/tools/feedback.php",
            dataType: 'json', 
            data: data, 
            success: function (data) {
              if(data.status == 'success')
              {
                thisBlock.parent().html("Благодарим за обращение. Наш менеджер свяжется с Вами после обработки Ваших данных!");
                setTimeout(() =>  location.reload(), 3000);
              }
            }
        });
    }

  });

  // Установка гет параметров для фильтрации
  $('.itc-select__option').on('click', function(e) {
    var strGet = $(this).data('value').split('-');
  
    let param = strGet[0] +'='+strGet[1];
      document.location.search = param;
      // $('.itc-select__option[data-value="SCALED_PRICE_1-desc"]').addClass('itc-select__option_selected');
    
  });
   // Открытие кейса по нажатию на название
  $(".cases__slide-title").on('click', function(e){
    alert(1);
    $.ajax({
      type: "POST", 
       url: "/local/tools/cases.php", 
      data: {CASES_ID : $(this).data('case-id')},
      success: function (data) {
        $("#cases_pop_window").html(data);
      }
   });
   
  });
  // Открытие кейса по нажатию на картинку
  $(".swiper-slide").on('click', function(e){
    // $(this).firstChild().remove();
    alert(1);
    $.ajax({
      type: "POST", 
       url: "/local/tools/cases.php", 
      data: {CASES_ID : $(this).data('case-id')},
      success: function (data) {
        $("#cases_pop_window").html(data);
      }
   });
   
  });

  
  // Окно с товаров каталога
  $(".catalog-list-item").on('click', function(e){
    $.ajax({
      type: "POST", 
       url: "/local/tools/catalog.php", 
      data: {CATALOG_ID : $(this).data('productId')},
      success: function (data) {
        $("#catalog_pop_window").html(data);
      }
   });
   
  });
  

  // Корзина
  $('#basket-axpro').submit(function(e) {
    e.preventDefault();
    // console.log($(this).serialize());
    var data = $(this).serialize();
    $.ajax({
          type: "POST", 
           url: "/local/tools/basket.php", 
          data: data, 
          success: function (data) {
            alert('Заказ оформлен! Наши менеджеры свяжутся с вами после его обработки!');
            location.reload();
          
          }
       });

});

$('.catalog__filter-button_reset').on('click', function(e){
  window.location.href = location.protocol + '//' + location.host + location.pathname;
});

function encodeQuery(data){
  let query='';
  for (let d in data.params)
       query += encodeURIComponent(d) + '='
            + encodeURIComponent(data.params[d]) + '&';
  return query.slice(0, -1)
}

$('input[id=lower]').on('mouseup', function(e){

  let param = { 
    params : {
    minPrice : $('input[id=lowerLabel]').val(),
    maxPrice : $('input[id=upperLabel]').val()
    }
  }
  
  document.location.search = encodeQuery(param);
});

$('input[id=upper]').on('mouseup', function(e){

  let param = { 
    params : {
    minPrice : $('input[id=lowerLabel]').val(),
    maxPrice : $('input[id=upperLabel]').val()
    }
  };
 
  document.location.search = encodeQuery(param);
});


//Выбор селекта
var strGET = window.location.search.replace( '?', ''); 
var newStrGet = strGET.replace('=', '-');
if(newStrGet)
{
  if($('.itc-select__option[data-value="'+newStrGet+'"]').length)
  {
    var element = $('.itc-select__option[data-value="'+newStrGet+'"]');
    element.addClass('itc-select__option_selected');
  
    if(newStrGet.includes('SCALED_PRICE_1'))
      var buttonName = 'price';
    
    if(newStrGet.includes('name'))
      var buttonName = 'name';

    if(newStrGet.includes('shows'))
      var buttonName = 'rating';

    $('button[name="'+buttonName+'"]').html($('.itc-select__option[data-value="'+newStrGet+'"]').html());
  }
}

});
