<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Калькулятор");
?><!--SECTION CALCULATOR PAGE CONTENT START-->
<!-- section open tag and title in header.php-->
	<?$APPLICATION->IncludeComponent(
		"ram:ram.calc",
		"ritual",
		Array(
			"ACTION" => "basket",
			"CACHE_TIME" => "36000000",
			"CACHE_TYPE" => "A",
			//"ELEMENT_ID" => $_REQUEST["ELEMENT_ID"],
			"ELEMENT_ID" => 334,
			"HIDDEN_CALCULATIONS" => array(),
			"JQUERY" => "N",
			"MULTYPLE" => "N",
			"PRICE" => "0",
			"PROPERTY_1_DISPLAY" => "select",
			"PROPERTY_2_DISPLAY" => "select",
			"PROPERTY_3_DISPLAY" => "select",
			"PROPERTY_4_DISPLAY" => "select",
			"REQUEST_BASKET_BTN" => "Оформить заказ",
			"REQUEST_BASKET_FAIL" => "Ошибка",
			"REQUEST_BASKET_SUCCESS" => "Заказ добавлен в корзину",
			"REQUEST_BTN" => "Отправить",
			"REQUEST_DESCRIPTION" => "Указанная стоимость не является итоговой. Окончательную стоимость уточняйте у менеджера",
			"REQUEST_EMAIL" => "",
			"REQUEST_FAIL" => "Произошла ошибка. Пожалуйста, попробуйте отправить заявку позже.",
			"REQUEST_FIELDS" => array("Электронный адрес",""),
			"REQUEST_SUCCESS" => "Заявка отправлена. Наш менеджер свяжется с Вами в ближайшее время.",
			"SERVICE_ID" => "2",
			"TEMPLATE_THEME" => "blue",
			"USER_CONSENT" => "N",
			"USER_CONSENT_ID" => "0",
			"USER_CONSENT_IS_CHECKED" => "Y",
			"USER_CONSENT_IS_LOADED" => "N"
		)
	);?>
	
	</div>
 </section>
<!--SECTION CALCULATOR PAGE CONTENT END-->
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>