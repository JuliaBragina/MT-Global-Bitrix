<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>
<footer class="mainFooter">
            <div class="global-container global-container-min">
                <div class="addressBox">
                    <div class="addressBox__label">
                        Адрес:
                    </div>
                    <div class="addressBox__adr">
                        г. Москва, Большая Татарская ул., 35с15-16
                    </div>
                    <a class="decisionItem__arr decisionItem__arr-footer" href="https://goo.gl/maps/eSayCqu7C6McugjC9" target="_blank">
                        Посмотреть на карте
                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.5 18H28.5" class="svg-stroke-w" stroke-width="2"></path>
                            <path d="M18 7.5L28.5 18L18 28.5" class="svg-stroke-w" stroke-width="2"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </footer>
    </div>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": 
  [
    {
      "@context":"https://schema.org/",
      "@type":"WPHeader",
      "url":"<?=$_SERVER['REQUEST_URI']?>",
      "headline":"MT global",
      "description":"Долгосрочный партнер по обеспечению стабильности, эффективности и защиты ИТ- инфраструктуры"  
    },
    
    {
      "@context":"http://schema.org/",
      "@type":"ItemList",
      "itemListElement":[
      {
        "@type":"SiteNavigationElement",
        "position":1,
        "name": "Главная",
        
        "url":"https://mtglobal.ru/"
      },
      {
        "@type":"SiteNavigationElement",
        "position":2,
        "name": "О компании",
        "url":"https://mtglobal.ru/about/"
      },
          
      {
        "@type":"SiteNavigationElement",
        "position":3,
        "name": "Услуги",
        "url":"https://mtglobal.ru/service/"
      },
          
       {
        "@type":"SiteNavigationElement",
        "position":4,
        "name": "Специализация",
        "url":"https://mtglobal.ru/specialization/"
      },
          
      {
        "@type":"SiteNavigationElement",
        "position":5,
        "name": "Комплексные решения",
        "url":"https://mtglobal.ru/solution/"
      },
          
      {
        "@type":"SiteNavigationElement",
        "position":6,
        "name": "Индустриальные решения",
        "url":"https://mtglobal.ru/industrial/"
      },
          
      {
        "@type":"SiteNavigationElement",
        "position":7,
        "name": "Продукты",
        "url":"https://mtglobal.ru/products/"
      },
          
      {
        "@type":"SiteNavigationElement",
        "position":8,
        "name": "Контакты",
        "url":"https://mtglobal.ru/contacts/"
      }
      ]
    },
    {
      "@context":"https://schema.org/",
      "@type":"WPFooter",
      "url":"<?=$_SERVER['REQUEST_URI']?>",
      "headline":"MT global",
      "description":"Долгосрочный партнер по обеспечению стабильности, эффективности и защиты ИТ- инфраструктуры",
      "copyrightYear":"2023"
    }
  ]
}
</script>


<!-- CLEANTALK template addon -->
<?php $frame = (new \Bitrix\Main\Page\FrameHelper("cleantalk_frame"))->begin(); if(CModule::IncludeModule("cleantalk.antispam")) echo CleantalkAntispam::FormAddon(); $frame->end(); ?>
<!-- /CLEANTALK template addon -->
</body>
</html>