<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->RestartBuffer();?>
<?php if(check_bitrix_sessid()) {
    $request = \Bitrix\Main\Application::getInstance()->getContext()->getRequest();
    $currentUrl = $request->getPost("currentUrl");
    ?>
<? if ($_SERVER['HTTP_HOST'] === 'en.mtglobal.ru'): ?>
    <?$APPLICATION->IncludeComponent(
        "bitrixsoid:feedback",
        "modal",
        array(
            "COMPONENT_TEMPLATE" => "modal",
            "EVENT_MESSAGE_ID" => array(
                0 => "50",
            ),
            "FIELDS" => "[{\"code\":\"name\",\"name\":\"Name\",\"is_required\":\"Y\",\"tag\":\"input\",\"input_type\":\"text\"},{\"code\":\"phone\",\"name\":\"Phone\",\"is_required\":\"Y\",\"tag\":\"input\",\"input_type\":\"tel\"},{\"code\":\"message\",\"name\":\"Message\",\"is_required\":\"N\",\"tag\":\"input\",\"input_type\":\"text\"}]",
            "ACTION_CODE" => "modal_box_one",
            "PARAM_1" => "one",
            "PARAM_2" => "",
            "SUBJECT" => "Feedback",
            "HEADER" => "Ask a question",
            "BUTTON_NAME" => "Send",
            "PARAM_3" => "",
            "CURRENT_URL" =>$currentUrl,
        ),
        false
    );?>
<?else:?>
    <?$APPLICATION->IncludeComponent(
        "bitrixsoid:feedback",
        "modal",
        array(
            "COMPONENT_TEMPLATE" => "modal",
            "EVENT_MESSAGE_ID" => array(
                0 => "50",
            ),
            "FIELDS" => "[{\"code\":\"name\",\"name\":\"Ваше имя\",\"is_required\":\"Y\",\"tag\":\"input\",\"input_type\":\"text\"},{\"code\":\"phone\",\"name\":\"".GetMessage("YOUR_PHONE")."\",\"is_required\":\"Y\",\"tag\":\"input\",\"input_type\":\"tel\"},{\"code\":\"message\",\"name\":\"Вопрос\",\"is_required\":\"N\",\"tag\":\"input\",\"input_type\":\"text\"}]",
            "ACTION_CODE" => "modal_box_one",
            "PARAM_1" => "one",
            "PARAM_2" => "",
            "SUBJECT" => "Обратная связь",
            "HEADER" => "Задать вопрос",
            "BUTTON_NAME" => "Отправить",
            "PARAM_3" => "",
            "CURRENT_URL" =>$currentUrl,
        ),
        false
    );?>
<?endif;?>
<?$APPLICATION->IncludeComponent(
    "bitrixsoid:feedback",
    "modal",
    array(
        "COMPONENT_TEMPLATE" => "modal",
        "EVENT_MESSAGE_ID" => array(
            0 => "50",
        ),
        "FIELDS" => "[{\"code\":\"name\",\"name\":\"".GetMessage("MODAL_NAME")."\",\"is_required\":\"Y\",\"tag\":\"input\",\"input_type\":\"text\"},{\"code\":\"phone\",\"name\":\"".GetMessage("YOUR_PHONE")."\",\"is_required\":\"Y\",\"tag\":\"input\",\"input_type\":\"tel\"},{\"code\":\"company_size\",\"name\":\"Размер вашей компании\",\"is_required\":\"Y\",\"tag\":\"select\",\"input_type\":\"text\"}]",
        "ACTION_CODE" => "modal_box_two",
        "PARAM_1" => "two",
        "PARAM_2" => "",
        "SUBJECT" => GetMessage("SERVICE_ORDER"),
        "HEADER" => GetMessage("ORDER_SERVICE"),
        "BUTTON_NAME" => GetMessage("ORDER_SERVICE"),
        "PARAM_3" => "",
        "CURRENT_URL" =>$currentUrl,
    ),
    false
);?>


<?$APPLICATION->IncludeComponent(
    "bitrixsoid:feedback",
    "modal",
    array(
        "COMPONENT_TEMPLATE" => "modal",
        "EVENT_MESSAGE_ID" => array(
            0 => "50",
        ),
        "FIELDS" => "[{\"code\":\"name\",\"name\":\"".GetMessage("MODAL_NAME")."\",\"is_required\":\"Y\",\"tag\":\"input\",\"input_type\":\"text\"},{\"code\":\"phone\",\"name\":\"".GetMessage("YOUR_PHONE")."\",\"is_required\":\"Y\",\"tag\":\"input\",\"input_type\":\"tel\"},{\"code\":\"company_size\",\"name\":\"Размер вашей компании\",\"is_required\":\"Y\",\"tag\":\"select\",\"input_type\":\"text\"}]",
        "ACTION_CODE" => "modal_box_three",
        "PARAM_1" => "three",
        "PARAM_2" => "",
        "SUBJECT" => GetMessage("CONSULTATION_ORDER"),
        "HEADER" => GetMessage("ORDER_A_CONSULTATION"),
        "BUTTON_NAME" => GetMessage("ORDER_A_CONSULTATION"),
        "PARAM_3" => "",
        "CURRENT_URL" =>$currentUrl,
    ),
    false
);?>
<?

$APPLICATION->IncludeComponent(
    "bitrixsoid:feedback",
    "modal",
    array(
        "COMPONENT_TEMPLATE" => "modal",
        "EVENT_MESSAGE_ID" => array(
            0 => "50",
        ),
        "FIELDS" => "[{\"code\":\"name\",\"name\":\"".GetMessage("MODAL_NAME")."\",\"is_required\":\"Y\",\"tag\":\"input\",\"input_type\":\"text\"},{\"code\":\"phone\",\"name\":\"".GetMessage("YOUR_PHONE")."\",\"is_required\":\"Y\",\"tag\":\"input\",\"input_type\":\"tel\"},{\"code\":\"company_size\",\"name\":\"Размер вашей компании\",\"is_required\":\"Y\",\"tag\":\"select\",\"input_type\":\"text\"}]",
        "ACTION_CODE" => "modal_box_four",
        "PARAM_1" => "four",
        "PARAM_2" => "",
        "SUBJECT" => GetMessage("SOLUTION_ORDER"),
        "HEADER" => GetMessage("ORDER_A_SOLUTION"),
        "BUTTON_NAME" => GetMessage("ORDER_A_SOLUTION"),
        "PARAM_3" => "",
        "CURRENT_URL" =>$currentUrl,
    ),
    false
);?>

<? if ($_SERVER['HTTP_HOST'] === 'en.mtglobal.ru'): ?>

    <?$APPLICATION->IncludeComponent(
        "bitrixsoid:feedback",
        "modal",
        array(
            "COMPONENT_TEMPLATE" => "modal",
            "EVENT_MESSAGE_ID" => array(
                0 => "50",
            ),
            "FIELDS" => "[{\"code\":\"name\",\"name\":\"Name\",\"is_required\":\"Y\",\"tag\":\"input\",\"input_type\":\"text\"},{\"code\":\"phone\",\"name\":\"Phone\",\"is_required\":\"Y\",\"tag\":\"input\",\"input_type\":\"tel\"},{\"code\":\"company_size\",\"name\":\"Size of your company\",\"is_required\":\"Y\",\"tag\":\"select\",\"input_type\":\"text\"}]",
            "ACTION_CODE" => "modal_box_five",
            "PARAM_1" => "five",
            "PARAM_2" => "",
            "SUBJECT" => "Ordering a consultation",
            "HEADER" => "Order a consultation",
            "BUTTON_NAME" => "Order a consultation",
            "PARAM_3" => "",
            "CURRENT_URL" =>$currentUrl,
        ),
        false
    );?>

<?else:?>
    <?$APPLICATION->IncludeComponent(
        "bitrixsoid:feedback",
        "modal",
        array(
            "COMPONENT_TEMPLATE" => "modal",
            "EVENT_MESSAGE_ID" => array(
                0 => "50",
            ),
            "FIELDS" => "[{\"code\":\"name\",\"name\":\"".GetMessage("MODAL_NAME")."\",\"is_required\":\"Y\",\"tag\":\"input\",\"input_type\":\"text\"},{\"code\":\"phone\",\"name\":\"".GetMessage("YOUR_PHONE")."\",\"is_required\":\"Y\",\"tag\":\"input\",\"input_type\":\"tel\"},{\"code\":\"company_size\",\"name\":\"Размер вашей компании\",\"is_required\":\"Y\",\"tag\":\"select\",\"input_type\":\"text\"}]",
            "ACTION_CODE" => "modal_box_five",
            "PARAM_1" => "five",
            "PARAM_2" => "",
            "SUBJECT" => GetMessage("CONSULTATION_ORDER"),
            "HEADER" => GetMessage("ORDER_A_CONSULTATION"),
            "BUTTON_NAME" => GetMessage("ORDER_A_CONSULTATION"),
            "PARAM_3" => "",
            "CURRENT_URL" =>$currentUrl,
        ),
        false
    );?>
<?endif;?>
<?$APPLICATION->IncludeComponent(
    "bitrixsoid:feedback",
    "modal",
    array(
        "COMPONENT_TEMPLATE" => "modal",
        "EVENT_MESSAGE_ID" => array(
            0 => "50",
        ),
        "FIELDS" => "[{\"code\":\"name\",\"name\":\"".GetMessage("MODAL_NAME")."\",\"is_required\":\"Y\",\"tag\":\"input\",\"input_type\":\"text\"},{\"code\":\"phone\",\"name\":\"".GetMessage("YOUR_PHONE")."\",\"is_required\":\"Y\",\"tag\":\"input\",\"input_type\":\"tel\"},{\"code\":\"company_size\",\"name\":\"Размер вашей компании\",\"is_required\":\"Y\",\"tag\":\"select\",\"input_type\":\"text\"}]",
        "ACTION_CODE" => "modal_box_six",
        "PARAM_1" => "six",
        "PARAM_2" => "",
        "SUBJECT" => GetMessage("PRODUCT_ORDER"),
        "HEADER" => GetMessage("ORDER_A_PRODUCT"),
        "BUTTON_NAME" => GetMessage("ORDER_A_PRODUCT"),
        "PARAM_3" => "",
        "CURRENT_URL" =>$currentUrl,
    ),
    false
);?>
<?$APPLICATION->IncludeComponent(
    "bitrixsoid:feedback",
    "modal",
    array(
        "COMPONENT_TEMPLATE" => "modal",
        "EVENT_MESSAGE_ID" => array(
            0 => "50",
        ),
        "FIELDS" => "[{\"code\":\"name\",\"name\":\"".GetMessage("MODAL_NAME")."\",\"is_required\":\"Y\",\"tag\":\"input\",\"input_type\":\"text\"},{\"code\":\"phone\",\"name\":\"".GetMessage("YOUR_PHONE")."\",\"is_required\":\"Y\",\"tag\":\"input\",\"input_type\":\"text\"},{\"code\":\"company_size\",\"name\":\"Размер вашей компании\",\"is_required\":\"Y\",\"tag\":\"select\",\"input_type\":\"text\"}]",
        "ACTION_CODE" => "modal_box_seven",
        "PARAM_1" => "seven",
        "PARAM_2" => "",
        "SUBJECT" => GetMessage("PARTNERSHIP_APPLICATION"),
        "HEADER" => GetMessage("BECOME_A_PARTNER"),
        "BUTTON_NAME" => GetMessage("SEND_A_REQUEST"),
        "PARAM_3" => "",
        "CURRENT_URL" =>$currentUrl,
    ),
    false
);?>

<?
$callBackFields = [
    ["code" => "name", "name" => "Ф.И.О", "is_required" => "Y", "tag" => "input", "input_type" => "text"],
    ["code" => "company", "name" => "Компания", "is_required" => "Y", "tag" => "input", "input_type" => "text"],
    ["code" => "phone", "name" => "Телефон", "is_required" => "Y", "tag" => "input", "input_type" => "tel"],
    ["code" => "msg", "name" => "Ваш вопрос", "is_required" => "Y", "tag" => "textarea", "input_type" => "text"],
];
$APPLICATION->IncludeComponent(
    "bitrixsoid:feedback",
    "modal_callback",
    array(
        "COMPONENT_TEMPLATE" => "modal",
        "EVENT_MESSAGE_ID" => array(
            0 => "57",
        ),
        "FIELDS" => json_encode($callBackFields),
        "ACTION_CODE" => "modal_box_callback",
        "PARAM_1" => "callback",
        "PARAM_2" => "",
        "SUBJECT" => "Заказ обратного звонка",
        "HEADER" => "Заказать обратный звонок",
        "BUTTON_NAME" => GetMessage("SEND_A_REQUEST"),
        "PARAM_3" => "",
        'CAPTCHA' => 'Y',
        "CURRENT_URL" =>$currentUrl,
    ),
    false
);?>


<?/*?>
<!--modal-footer-->
<div class="modal-box modal-box_one">
 <svg class="modal-close modal-close_one" width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path d="M24.75 8.25L8.25 24.75" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
  <path d="M8.25 8.25L24.75 24.75" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
 </svg>
 <h3>Задать вопрос</h3>
 <form class="modal-form">
  <input class="form-input" type="text" placeholder="Ваше имя" required>
  <input class="form-input" type="tel" placeholder="Ваш телефон" required>
  <input class="form-input" type="text" placeholder="Вопрос" required>
  <label class="input-checkbox">
   <input type="checkbox" required checked>
   <span class="input-checkbox_icon">
    <svg viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
     <path d="M13 1L4.75 9.25L1 5.5" stroke-width="2" stroke-linecap="round" />
    </svg>
   </span>
   <span class="input-checkbox_text"><b>Даю согласие</b> на обработку персональных данных</span>
  </label>
  <button class="form-button" type="submit">Отправить</button>
 </form>
</div>
<div class="modal-bgr modal-bgr_one"></div>
<!--/modal-footer-->
<!--modal-service-->
<div class="modal-box modal-box_two">
 <svg class="modal-close modal-close_two" width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path d="M24.75 8.25L8.25 24.75" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
  <path d="M8.25 8.25L24.75 24.75" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
 </svg>
 <h3>Заказать услугу</h3>
 <form class="modal-form">
  <input class="form-input" type="text" placeholder="Ваше имя" required>
  <input class="form-input" type="tel" placeholder="Ваш телефон" required>
  <select class="form-select">
   <option disabled selected>Размер вашей компании</option>
   <option value="до 30 сотрудников">до 30 сотрудников</option>
   <option value="от 30 до 100 сотрудников">от 30 до 100 сотрудников</option>
   <option value="более 100 сотрудников">более 100 сотрудников</option>
  </select>
   <label class="input-checkbox">
    <input type="checkbox" required checked>
    <span class="input-checkbox_icon">
     <svg viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M13 1L4.75 9.25L1 5.5" stroke-width="2" stroke-linecap="round" />
     </svg>
    </span>
    <span class="input-checkbox_text"><b>Даю согласие</b> на обработку персональных данных</span>
   </label>
   <button class="form-button" type="submit">Заказать услугу</button>
 </form>
</div>
<div class="modal-bgr modal-bgr_two"></div>
<!--/modal-service-->
<!--modal-specialization-->
<div class="modal-box modal-box_three">
 <svg class="modal-close modal-close_three" width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path d="M24.75 8.25L8.25 24.75" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
  <path d="M8.25 8.25L24.75 24.75" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
 </svg>
 <h3>Заказать консультацию</h3>
 <form class="modal-form">
  <input class="form-input" type="text" placeholder="Ваше имя" required>
  <input class="form-input" type="tel" placeholder="Ваш телефон" required>
  <select class="form-select">
   <option disabled selected>Размер вашей компании</option>
   <option value="до 30 сотрудников">до 30 сотрудников</option>
   <option value="от 30 до 100 сотрудников">от 30 до 100 сотрудников</option>
   <option value="более 100 сотрудников">более 100 сотрудников</option>
  </select>
  <label class="input-checkbox">
   <input type="checkbox" required checked>
   <span class="input-checkbox_icon">
    <svg viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
     <path d="M13 1L4.75 9.25L1 5.5" stroke-width="2" stroke-linecap="round" />
    </svg>
   </span>
   <span class="input-checkbox_text"><b>Даю согласие</b> на обработку персональных данных</span>
  </label>
  <button class="form-button" type="submit">Заказать консультацию</button>
 </form>
</div>
<div class="modal-bgr modal-bgr_three"></div>
<!--/modal-specialization-->
<!--modal-solution-->
<div class="modal-box modal-box_four">
 <svg class="modal-close modal-close_four" width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path d="M24.75 8.25L8.25 24.75" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
  <path d="M8.25 8.25L24.75 24.75" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
 </svg>
 <h3>Заказать решение</h3>
 <form class="modal-form">
  <input class="form-input" type="text" placeholder="Ваше имя" required>
  <input class="form-input" type="tel" placeholder="Ваш телефон" required>
  <select class="form-select">
   <option disabled selected>Размер вашей компании</option>
   <option value="до 30 сотрудников">до 30 сотрудников</option>
   <option value="от 30 до 100 сотрудников">от 30 до 100 сотрудников</option>
   <option value="более 100 сотрудников">более 100 сотрудников</option>
  </select>
  <label class="input-checkbox">
   <input type="checkbox" required checked>
   <span class="input-checkbox_icon">
    <svg viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
     <path d="M13 1L4.75 9.25L1 5.5" stroke-width="2" stroke-linecap="round" />
    </svg>
   </span>
   <span class="input-checkbox_text"><b>Даю согласие</b> на обработку персональных данных</span>
  </label>
  <button class="form-button" type="submit">Заказать решение</button>
 </form>
</div>
<div class="modal-bgr modal-bgr_four"></div>
<!--/modal-solution-->
<!--modal-industrial-->
<div class="modal-box modal-box_five">
 <svg class="modal-close modal-close_five" width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path d="M24.75 8.25L8.25 24.75" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
  <path d="M8.25 8.25L24.75 24.75" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
 </svg>
 <h3>Заказать консультацию</h3>
 <form class="modal-form">
  <input class="form-input" type="text" placeholder="Ваше имя" required>
  <input class="form-input" type="tel" placeholder="Ваш телефон" required>
  <select class="form-select">
   <option disabled selected>Размер вашей компании</option>
   <option value="до 30 сотрудников">до 30 сотрудников</option>
   <option value="от 30 до 100 сотрудников">от 30 до 100 сотрудников</option>
   <option value="более 100 сотрудников">более 100 сотрудников</option>
  </select>
  <label class="input-checkbox">
   <input type="checkbox" required checked>
   <span class="input-checkbox_icon">
    <svg viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
     <path d="M13 1L4.75 9.25L1 5.5" stroke-width="2" stroke-linecap="round" />
    </svg>
   </span>
   <span class="input-checkbox_text"><b>Даю согласие</b> на обработку персональных данных</span>
  </label>
  <button class="form-button" type="submit">Заказать консультацию</button>
 </form>
</div>
<div class="modal-bgr modal-bgr_five"></div>
<!--/modal-industrial-->
<!--modal-products-->
<div class="modal-box modal-box_six">
 <svg class="modal-close modal-close_six" width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path d="M24.75 8.25L8.25 24.75" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
  <path d="M8.25 8.25L24.75 24.75" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
 </svg>
 <h3>Заказать продукт</h3>
 <form class="modal-form">
  <input class="form-input" type="text" placeholder="Ваше имя" required>
  <input class="form-input" type="tel" placeholder="Ваш телефон" required>
  <select class="form-select">
   <option disabled selected>Интересующие продукты</option>
   <option value="ПО">ПО</option>
   <option value="Системы хранения данных">Системы хранения данных</option>
   <option value="Сетевое оборудование">Сетевое оборудование</option>
   <option value="Системы безопасности">Системы безопасности</option>
   <option value="Аппаратная инфраструктура">Аппаратная инфраструктура</option>
   <option value="Другое">Другое</option>
  </select>
  <label class="input-checkbox">
   <input type="checkbox" required checked>
   <span class="input-checkbox_icon">
    <svg viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
     <path d="M13 1L4.75 9.25L1 5.5" stroke-width="2" stroke-linecap="round" />
    </svg>
   </span>
   <span class="input-checkbox_text"><b>Даю согласие</b> на обработку персональных данных</span>
  </label>
  <button class="form-button" type="submit">Заказать продукт</button>
 </form>
</div>
<div class="modal-bgr modal-bgr_six"></div>
<!--/modal-products-->
<!--modal-parthner-->
<div class="modal-box modal-box_seven">
 <svg class="modal-close modal-close_seven" width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path d="M24.75 8.25L8.25 24.75" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
  <path d="M8.25 8.25L24.75 24.75" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
 </svg>
 <h3>Стать партнёром</h3>
 <form class="modal-form">
  <input class="form-input" type="text" placeholder="Ваше имя" required>
  <input class="form-input" type="text" placeholder="Какой компании планируете нас рекомендовать" required>
  <input class="form-input" type="tel" placeholder="Ваш телефон" required>
  <label class="input-checkbox">
   <input type="checkbox" required checked>
   <span class="input-checkbox_icon">
    <svg viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
     <path d="M13 1L4.75 9.25L1 5.5" stroke-width="2" stroke-linecap="round" />
    </svg>
   </span>
   <span class="input-checkbox_text"><b>Даю согласие</b> на обработку персональных данных</span>
  </label>
  <button class="form-button" type="submit">Отправить заявку</button>
 </form>
</div>
<div class="modal-bgr modal-bgr_seven"></div>
<!--/modal-parthner-->
<?*/?>

<?
}
?>