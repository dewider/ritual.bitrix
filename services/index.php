<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Ритуальные услуги");
?>
<!--SECTION MAIN SERVICES PAGE BANNER START-->
<section class="main_services_page_banner_wrapper">
    <div class="container">
        <div class="main_services_page_banner">
            <h1>Организация похорон в Москве<br>
                и Московской области</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur deradipiscing elit. Nulla quam velit, vulputate eu pharetra nec.
                mattis ac neque. Duis vulputate commodo lectus, ac blandit elit tincidunt id
            </p>
        </div>
        <div class="main_services_page_banner_list">
            <div class="item">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/cemetery.png" alt="icon">
                <div class="services_text">
                    <h4>Экстренная ситуация</h4>
                    <p>Человек умер. Что делать?</p>
                </div>
            </div>
            <div class="item">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/diploma.png" alt="icon">
                <div class="services_text">
                    <h4>Требуемые документы</h4>
                    <p>Для организации похорон</p>
                </div>
            </div>
            <div class="item">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/skidka.png" alt="icon">
                <div class="services_text">
                    <h4>Льготы и скидки</h4>
                    <p>Положенные государством</p>
                </div>
            </div>
        </div>

    </div>
</section>
<!--SECTION MAIN SERVICES PAGE BANNER END-->

<!--SECTION MAIN PAGE SEO CONTENT START-->
<section class="main_page_seo_content_wrapper">
    <div class="container">
        <div class="main_page_seo_content">
            <h2>Многофункциональный похоронно-ритуальный центр “МСК Ритуал”</h2>
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
            <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                    "AREA_FILE_SHOW" => "sect", 
                    "AREA_FILE_SUFFIX" => "license", 
                    "AREA_FILE_RECURSIVE" => "Y", 
                    "EDIT_TEMPLATE" => "standard.php" 
                )
            );?>
            <div class="btn_wrapper">
                <button class="btn">Вызов ритуального агента ОНЛАЙН</button>
                <a href="/catalog" class="btn grey">Перейти в наш интернет-магазин</a>
            </div>
        </div>
    </div>
</section>
<!--SECTION MAIN PAGE SEO CONTENT END-->

<!--SECTION MAIN PAGE CONTRACT START-->
<section class="main_services_page_contract_wrapper">
    <div class="container">
        <div class="main_page_contract">
            <div class="contract_text">
                <h4>Что делать если умер близкий человек?</h4>
                <p>
                    Порядок действий в экстренных ситуациях
                </p>
            </div>

        </div>
    </div>
</section>
<!--SECTION MAIN PAGE CONTRACT END-->

<!--SECTION MAIN SERVICES PAGE LIST START-->
<section class="main_services_page_list_wrapper">
    <div class="container">
        <h2>Ритуальные услуги в Москве и Московской области</h2>
        <?$APPLICATION->IncludeComponent(
        	"bitrix:catalog.section.list",
        	"large_tiles_services",
        	Array(
        		"ADD_SECTIONS_CHAIN" => "Y",
        		"CACHE_FILTER" => "N",
        		"CACHE_GROUPS" => "Y",
        		"CACHE_TIME" => "36000000",
        		"CACHE_TYPE" => "A",
        		"COUNT_ELEMENTS" => "Y",
        		"COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
        		"FILTER_NAME" => "sectionsFilter",
        		"IBLOCK_ID" => "5",
        		"IBLOCK_TYPE" => "catalog",
        		"SECTION_CODE" => "",
        		"SECTION_FIELDS" => array("",""),
        		"SECTION_ID" => $_REQUEST["SECTION_ID"],
        		"SECTION_URL" => "",
        		"SECTION_USER_FIELDS" => array("",""),
        		"SHOW_PARENT_NAME" => "Y",
        		"TOP_DEPTH" => "1",
        		"VIEW_MODE" => "LINE"
        	)
        );?>
    </div>
</section>
<!--SECTION MAIN SERVICES PAGE LIST END-->

<!--SECTION MAIN SERVICES PAGE DECOR START-->
<section class="main_services_page_decor_wrapper">
    <div class="container">
        <div class="main_page_contract">
            <div class="contract_text">
                <h4>Интернет магазин ритуальных товаров</h4>
                <p>
                    Скидки и акции на все категории товаров
                </p>
            </div>
        </div>
    </div>
</section>
<!--SECTION MAIN SERVICES PAGE DECOR END-->

<!--SECTION MAIN SERVICES PAGE PRICE START-->
<section class="main_services_page_price_wrapper">
    <div class="container">
        <div class="prices_contract_wrapper">
        <div class="prices_content">
            <?$APPLICATION->IncludeComponent(
			    "bitrix:main.include",
			    "",
			    Array(
			        "AREA_FILE_SHOW" => "sect", 
			        "AREA_FILE_SUFFIX" => "services-list", 
			        "AREA_FILE_RECURSIVE" => "Y", 
			        "EDIT_TEMPLATE" => "standard.php" 
			    )
			);?>
        </div>
            <div class="contract_content">
                <a href="/calculator" class = "contract_item">
                    <div class="image_wrapper">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/calculator.png" alt="icon">
                    </div>
                    <div class="text_wrapper">
                        <h4>
                            РАСЧЕТ стоимости
                            РИТУАЛЬНЫх УСЛУГ
                        </h4>
                        <p>
                            This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh
                            vel velit auctor aliquet. Aenean
                        </p>
                    </div>
                </a>
                <a href="#" class = "contract_item">
                    <div class="image_wrapper">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/contract.png" alt="icon">
                    </div>
                    <div class="text_wrapper">
                        <h4>
                            Прижизненый
                            договор
                        </h4>
                        <p>
                            This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh
                            vel velit auctor aliquet. Aenean lorem quis bibendum auctor,
                            nisi elit consequat
                        </p>
                    </div>
                </a>
                <a href="#" class = "contract_item">
                    <div class="image_wrapper">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/contract.png" alt="icon">
                    </div>
                    <div class="text_wrapper">
                        <h4>
                            ГБУ Ритуал
                            договор №
                        </h4>
                        <p>
                            This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh
                            vel velit auctor aliquet. Aenean lorem quis bibendum auctor,
                            nisi elit consequat lorem quis bibendum auctor,

                        </p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<!--SECTION MAIN SERVICES PAGE PRICE END-->

<!--SECTION MAIN SERVICES PAGE PARTNERS START-->
<section class="main_services_page_partners_wrapper">
    <div class="container">
        <div class="main_services_page_partners">
            <a href="#">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/partners1.png" alt="partners">
            </a>
            <a href="#">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/partners2.png" alt="partners">
            </a>
            <a href="#">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/partners3.png" alt="partners">
            </a>
            <a href="#">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/partners4.png" alt="partners">
            </a>
            <a href="#">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/partners5.png" alt="partners">
            </a>
            <a href="#">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/partners6.png" alt="partners">
            </a>
            <a href="#">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/partners7.png" alt="partners">
            </a>
        </div>
    </div>
</section>
<!--SECTION MAIN SERVICES PAGE PARTNERS END-->

<?$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_SHOW" => "sect", 
        "AREA_FILE_SUFFIX" => "advantages", 
        "AREA_FILE_RECURSIVE" => "Y", 
        "EDIT_TEMPLATE" => "standard.php" 
    )
);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>