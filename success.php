<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Спасибо за обращение!");

if ($_REQUEST["form_success"] === "Y" && !empty($_REQUEST["WEB_FORM_ID"]) && !empty($_REQUEST["RESULT_ID"])) {
    ?>
    <div class="success-message">
        <div class="container">
            <h1 class="success-message__title title__first">Спасибо за вашу заявку!</h1>
            <p class="success-message__text">Мы получили вашу информацию и свяжемся с вами в ближайшее время.</p>
            <a href="/" class="btn btn btn-primary success-message__button">Вернуться на главную</a>
        </div>
    </div>
    <?php
} else { ?>
    <script>
        Fancybox.show([{
            src: "#thanks2",
            type: "inline"
        }]);
        setTimeout(function() {
            Fancybox.close();
        }, 5000);
    </script> <?php
}

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>

