<?php
global $APPLICATION;
?>
<?if($APPLICATION->GetCurpage() == '/'):?>
<div class="footer__logo footer__wrapper-block">
            <div class="logo"></div>
          </div>
<?else:?>
  <div class="footer__logo footer__wrapper-block">
  <a href='/'><div class="footer__logo footer__wrapper-block">
    <div class="logo">

    </div>
  </div>
  </a>
  </div>
<?endif?>