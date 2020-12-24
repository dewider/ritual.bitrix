<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Интернет-магазин \"Одежда\"");
?>

<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"top-slider",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "top-slider",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "6",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(0=>"",1=>"",),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?>

<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list",
	"large_tiles",
	Array(
		"ADD_SECTIONS_CHAIN" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COUNT_ELEMENTS" => "Y",
		"COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
		"FILTER_NAME" => "sectionsFilter",
		"IBLOCK_ID" => "4",
		"IBLOCK_TYPE" => "catalog",
		"SECTION_CODE" => "",
		"SECTION_FIELDS" => array("",""),
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array("",""),
		"SHOW_PARENT_NAME" => "Y",
		"TOP_DEPTH" => "2",
		"VIEW_MODE" => "LINE"
	)
);?>

<!--SECTION MAIN PAGE BADGES START-->
<section class="main_page_badges_wrapper">
    <div class="container">
        <div class="main_page_badges">
            <div class="badges_item">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/hotel.png" alt="icon">
                <p>
                    Многофункциональный центр
                    ритуального обслуживания
                </p>
            </div>
            <div class="badges_item">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/certificate.png" alt="icon">
                <p>
                    Товар сертифицирован
                </p>
            </div>
            <div class="badges_item">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/refresh-left-arrow.png" alt="icon">
                <p>
                    Возврат и обмен товара
                </p>
            </div>
            <div class="badges_item">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/delivery.png" alt="icon">
                <p>
                    Быстрая доставка
                </p>
            </div>
        </div>
    </div>
</section>
<!--SECTION MAIN PAGE BADGES END-->

<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.top",
	"main_page_products",
	Array(
		"ACTION_VARIABLE" => "action",
		"ADD_PICT_PROP" => "-",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"ADD_TO_BASKET_ACTION" => "ADD",
		"BASKET_URL" => "/personal/basket.php",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COMPARE_NAME" => "CATALOG_COMPARE_LIST",
		"COMPATIBLE_MODE" => "Y",
		"CONVERT_CURRENCY" => "N",
		"CUSTOM_FILTER" => "",
		"DETAIL_URL" => "",
		"DISPLAY_COMPARE" => "N",
		"ELEMENT_COUNT" => "9",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_ORDER2" => "desc",
		"ENLARGE_PRODUCT" => "STRICT",
		"FILTER_NAME" => "",
		"HIDE_NOT_AVAILABLE" => "N",
		"HIDE_NOT_AVAILABLE_OFFERS" => "N",
		"IBLOCK_ID" => "4",
		"IBLOCK_TYPE" => "catalog",
		"LABEL_PROP" => array(),
		"LINE_ELEMENT_COUNT" => "3",
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
		"MESS_BTN_BUY" => "Купить",
		"MESS_BTN_COMPARE" => "Сравнить",
		"MESS_BTN_DETAIL" => "Подробнее",
		"MESS_NOT_AVAILABLE" => "Нет в наличии",
		"OFFERS_LIMIT" => "5",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRICE_CODE" => array(),
		"PRICE_VAT_INCLUDE" => "Y",
		"PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
		"PRODUCT_SUBSCRIPTION" => "Y",
		"ROTATE_TIMER" => "30",
		"SECTION_URL" => "",
		"SEF_MODE" => "N",
		"SHOW_CLOSE_POPUP" => "N",
		"SHOW_DISCOUNT_PERCENT" => "N",
		"SHOW_MAX_QUANTITY" => "N",
		"SHOW_OLD_PRICE" => "N",
		"SHOW_PAGINATION" => "Y",
		"SHOW_PRICE_COUNT" => "1",
		"SHOW_SLIDER" => "Y",
		"SLIDER_INTERVAL" => "3000",
		"SLIDER_PROGRESS" => "N",
		"TEMPLATE_THEME" => "blue",
		"USE_ENHANCED_ECOMMERCE" => "N",
		"USE_PRICE_COUNT" => "N",
		"USE_PRODUCT_QUANTITY" => "N",
		"VIEW_MODE" => "SECTION"
	)
);?>


<!--SECTION MAIN PAGE CONTRACT START-->
<section class="main_page_contract_wrapper">
    <div class="container">
        <div class="main_page_contract">
            <div class="contract_text">
                <h4>Прижизненный договор</h4>
                <p>
                    This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor.
                </p>
            </div>
            <div class="contract_action">
                <button class="btn">
                    Прижизненный договор
                </button>
            </div>
        </div>
    </div>
</section>
<!--SECTION MAIN PAGE CONTRACT END-->

<!--SECTION MAIN PAGE SEO CONTENT START-->
<section class="main_page_seo_content_wrapper">
    <div class="container">
        <div class="main_page_seo_content">
            <h2>Интернет-магазин ритуальных товаров - купить ритуальные товары в Москве</h2>
            <p>
                Многофункциональный похоронно-ритуальный центр по обслуживанию населения
                МСК Ритуал <span class="underline">предоставляет ритуальные услуги, связанные с погребением усопших,
                комплексный сервис по захоронению и кремированию</span> в Москве и Московской области.
                <b>Его главная цель – помочь населению, которое столкнулось с трудностями по причине
                    утраты близких.</b> Воспользовавшись услугами этого центра, гражданин получит
                государственные ритуальные услуги – организацию похоронной процедуры. Также
                ритуальная служба МСК Ритуал грамотно и юридически правильно оформляют документы
                и «справки о смерти», организовывает отпевание и процессом погребения, решает
                вопросы по отправлению тела скончавшегося в морг, занимается вопросом подготовки
                прощания, кремирования либо поиском бесплатного места на московском кладбище.
            </p>
            <div class="license">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/license.png" alt="image">
                <p>
                    Городская служба «РИТУАЛ» осуществляет свою деятельность на основании
                    Федерального закона от 12.01.1996 г. №8-ФЗ «О погребении
                    и похоронном деле» ( с изменениями и дополнениями ), Закона г.
                    Москвы от 04.06.1997 г. №11 «О погребении и похоронном деле в
                    г. Москве» ред. от 07.05.2014 г. Постановления Правительства Москвы
                    от 08.04.2008 г. №260-ПП «О состоянии и мерах по улучшению
                    похоронного обслуживания в городе Москве»
                </p>
            </div>
        </div>
    </div>
</section>
<!--SECTION MAIN PAGE SEO CONTENT END-->
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>