<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>

<?if($APPLICATION->GetCurPage() !== '/'):?>
  </main>
<?endif;?>

<!--/main-->
<!--footer-->
 <footer class="footer">
      <div class="main__container">
        <div class="footer__wrapper">
        <!-- Контакты -->
        <?$APPLICATION->IncludeFile('/include/axpro_main/bottom_logo.php',Array(),Array('MODE'=>'php'));?>

          <?$APPLICATION->IncludeComponent(
          "bitrix:menu", 
          "menu_bottom_axpro", 
          array(
            "ALLOW_MULTI_SELECT" => "N",
            "CHILD_MENU_TYPE" => "left",
            "DELAY" => "N",
            "MAX_LEVEL" => "1",
            "MENU_CACHE_GET_VARS" => array(
            ),
            "MENU_CACHE_TIME" => "3600",
            "MENU_CACHE_TYPE" => "Y",
            "MENU_CACHE_USE_GROUPS" => "Y",
            "ROOT_MENU_TYPE" => "bottom_axpro",
            "USE_EXT" => "N",
            "COMPONENT_TEMPLATE" => "menu_bottom_axpro"
          ),
          false
          );?>
          <!-- Контакты -->
          <?$APPLICATION->IncludeFile('/include/axpro_main/bottom_contact.php',Array(),Array('MODE'=>'php'));?>
          <!-- адрес -->
          <?$APPLICATION->IncludeFile('/include/axpro_main/bottom_adress.php',Array(),Array('MODE'=>'php'));?>
          <!-- Соц сети -->
          <?$APPLICATION->IncludeFile('/include/axpro_main/bottom_social.php',Array(),Array('MODE'=>'php'));?>
        </div>
         <!-- Соц сети -->
         <?$APPLICATION->IncludeFile('/include/axpro_main/bottom_politic.php',Array(),Array('MODE'=>'php'));?>
         <br>
         
      </div>

      <?
      if(isset($_GET['PAGEN_1']))
        $APPLICATION->SetPageProperty('canonical', '/catalog/');

      if($APPLICATION->GetCurPage() == '/')
        // $APPLICATION->SetPageProperty("description", "Охранные системы для дома и офиса от компании AX PRO. Подробнее на нашем сайте или по телефону +7 499 502-18-17");
      ?>
    </footer>

    <div class="modal" id="requestOfferModal">
      <div class="modal-dialog">
        <button
          class="icon-button icon-button_close-black"
          id="casesCloseBtn"
        ></button>
        <div class="modal-content">
          <div class="consult-form__wrapper consult-form">
            <h2 class="main__heading">Запросить предложение</h2>
               <?$APPLICATION->IncludeFile('/include/feedback_forms/feedback_offer.php',Array(),Array('MODE'=>'php'));?>
          </div>
        </div>
      </div>
    </div>
    <!-- Запросить предложение -->
    <!-- <?$APPLICATION->IncludeFile('/include/feedback_forms/feedback_offer.php',Array(),Array('MODE'=>'php'));?> -->

    <!-- Кейсы -->
    <div class="modal" id="casesModal">
      <div class="modal-dialog">
        <button
          class="icon-button icon-button_close-black"
          id="casesCloseBtn"
        ></button>
        <div class="modal-content">
          <article class="cases-card" id="cases_pop_window">
            <div id='cases_children_pop_window'>
            </div>
        
          <?$APPLICATION->IncludeFile('/include/feedback_forms/feedback_case.php',Array(),Array('MODE'=>'php'));?>
          </article>
        </div>
      </div>
    </div> 

    <!-- Каталог -->
    <div class="modal" id="catalogModal">
      <div class="modal-dialog">
        <button
          class="icon-button icon-button_close-black"
          id="catModalCloseBtn"
        ></button>
        <div class="modal-content">
          <article class="catalog-card" id="catalog_pop_window">
          </article>
        </div>
      </div>
    </div>

  </div>
</body>
</html>
<?
\LocalLib\Helpers\SessionFlashHelper::showFlashToBlock();
