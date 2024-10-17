<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
$APPLICATION->SetPageProperty('title','Контакты MTGlobal - Свяжитесь с нами для консультаций и поддержки');
$APPLICATION->SetPageProperty('description','Нужна помощь с ИТ- инфраструктурой? Контактная информация MTGlobal для обращений и запросов по обслуживанию и продуктам.');
?><div class="contacts" id="contacts">
 <section class="section__contacts">
	<div class="container">
		<div class="section-title">
			<h1>Контакты</h1>
		</div>
		<div class="contact-info">
			<div class="contact__office">
 <img alt="time" src="/img/icons/icon-time.png">
				<div class="contact__details">
					<p>
						 График работы центрального офиса:
					</p>
					<p>
						 Ежедневно с 10:00 до 18:00
					</p>
					<p>
						 Перед визитом просим вас предварительно связаться с нами и назначить встречу.
					</p>
					<p>
					</p>
				</div>
			</div>
			<div class="contact__office">
 <img alt="tel" src="/img/icons/icon-tel.png">
				<div class="contact__details">
					<p>
						 Телефон:
					</p>
					<p>
 <span><a href="tel:+74995021817">+7 499 502-18-17</a><br>
 <a href="tel:+78003334000">+7 800 333-40-00</a></span>
					</p>
				</div>
			</div>
			<div class="contact__office">
 <img alt="adress" src="/img/icons/icon-adress.png">
				<div class="contact__details">
					<p>
						 Адрес:
					</p>
					<p>
						 г. Москва, Большая Татарская ул., дом 35с15-16
					</p>
				</div>
			</div>
			<div class="contact__office">
 <img alt="mail" src="/img/icons/icon-mail.png">
				<div class="contact__details">
					<p>
						 Адрес электронной почты:
					</p>
					<p>
 <a href="mailto:info@mtglobal.ru">info@mtglobal.ru</a>
					</p>
				</div>
			</div>
			<div>
			</div>
		</div>
	</div>
 </section>
	<div class="ya-map">
		 <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Afa4f15bdac3869d1618a2aa182247aa8d3ff37278647d8df9f5bcd3f5849be32&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe>
	</div>
</div>
  <script type="application/ld+json">
{
  "@context" : "http://schema.org",
  "@type" : "LocalBusiness",
  "image" : "https://mtglobal.ru/img/logo.svg",
  "name" : "MT group",
  "telephone" : "+7 499 502-18-17",
  "email" : "info@mtglobal.ru",
  "address" : {
    "@type" : "PostalAddress",
    "streetAddress" : "Нижний Сусальный пер., дом 9, стр. 6",
    "addressLocality" : "г. Москва"
  }
}
</script><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>