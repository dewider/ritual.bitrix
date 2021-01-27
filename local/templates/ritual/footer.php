<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>

<?
$currentPath = $APPLICATION->GetCurPage();
$showReferencePages = array(
						"/about/howto/", 
						"/services/",
						"/about/",
						"/about/contacts/",
						"/pricelist/",
						"/info/morgues/",
						"/info/graveyards/",
						"/calculator/"
					);

if( false !== array_search( $currentPath, $showReferencePages ) ):?>

<?$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_SHOW" => "sect", 
        "AREA_FILE_SUFFIX" => "reference-info", 
        "AREA_FILE_RECURSIVE" => "Y", 
        "EDIT_TEMPLATE" => "standard.php" 
    )
);?>

<?endif?>
<?
$showLicensePages = array("/services/");
if( false !== array_search( $currentPath, $showLicensePages ) ):?>

<!--SECTION MAIN SERVICES PAGE CERTIFICATES START-->
<section class="main_services_page_certificates_wrapper">
    <div class="container">
        <h2>Лицензии и сертификаты</h2>
        <div class="main_services_page_certificates">
            <img src="<?=SITE_TEMPLATE_PATH?>/img/certificate.png" alt="license">
            <img src="<?=SITE_TEMPLATE_PATH?>/img/certificate.png" alt="license">
            <img src="<?=SITE_TEMPLATE_PATH?>/img/certificate.png" alt="license">
            <img src="<?=SITE_TEMPLATE_PATH?>/img/certificate.png" alt="license">
        </div>
    </div>
</section>
<!--SECTION MAIN SERVICES PAGE CERTIFICATES END-->

<?endif?>

        <!--FOOTER START-->
<footer class="footer_wrapper">
    <div class="container">
        <div class="footer_content">
            <div class="footer_item">
                <h4>Ритуальные услуги</h4>
                <?$APPLICATION->IncludeComponent(
                	"bitrix:menu", 
                	"footer_menu", 
                	array(
                		"ALLOW_MULTI_SELECT" => "N",
                		"COMPONENT_TEMPLATE" => "footer_menu",
                		"ROOT_MENU_TYPE" => "footer_services",
                		"MENU_CACHE_TYPE" => "N",
                		"MENU_CACHE_TIME" => "3600",
                		"MENU_CACHE_USE_GROUPS" => "Y",
                		"MENU_CACHE_GET_VARS" => array(
                		),
                		"MAX_LEVEL" => "1",
                		"CHILD_MENU_TYPE" => "footer_services",
                		"USE_EXT" => "N",
                		"DELAY" => "N"
                	),
                	false
                );?>
            </div>

            <div class="footer_item">
                <h4>Ритуальные товары</h4>
                <?$APPLICATION->IncludeComponent(
                	"bitrix:menu", 
                	"footer_menu", 
                	array(
                		"ALLOW_MULTI_SELECT" => "N",
                		"COMPONENT_TEMPLATE" => "footer_menu",
                		"ROOT_MENU_TYPE" => "footer_goods",
                		"MENU_CACHE_TYPE" => "N",
                		"MENU_CACHE_TIME" => "3600",
                		"MENU_CACHE_USE_GROUPS" => "Y",
                		"MENU_CACHE_GET_VARS" => array(
                		),
                		"MAX_LEVEL" => "1",
                		"CHILD_MENU_TYPE" => "footer_goods",
                		"USE_EXT" => "N",
                		"DELAY" => "N"
                	),
                	false
                );?>
            </div>

            <div class="footer_item">
                <h4>Справочная информация</h4>
                <div class="footer_list_wrapper">
                <?$APPLICATION->IncludeComponent(
                	"bitrix:menu", 
                	"footer_articles_menu", 
                	array(
                		"ALLOW_MULTI_SELECT" => "N",
                		"COMPONENT_TEMPLATE" => "footer_articles_menu",
                		"ROOT_MENU_TYPE" => "footer_articles",
                		"MENU_CACHE_TYPE" => "N",
                		"MENU_CACHE_TIME" => "3600",
                		"MENU_CACHE_USE_GROUPS" => "Y",
                		"MENU_CACHE_GET_VARS" => array(
                		),
                		"MAX_LEVEL" => "1",
                		"CHILD_MENU_TYPE" => "footer_articles",
                		"USE_EXT" => "N",
                		"DELAY" => "N"
                	),
                	false
                );?>
                </div>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="logo_wrapper">
            <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                    "AREA_FILE_SHOW" => "sect", 
                    "AREA_FILE_SUFFIX" => "footer-logo", 
                    "AREA_FILE_RECURSIVE" => "Y", 
                    "EDIT_TEMPLATE" => "standard.php" 
                )
            );?>
            </div>
            <?$APPLICATION->IncludeComponent(
            	"bitrix:menu", 
            	"footer_bottom_menu", 
            	array(
            		"ALLOW_MULTI_SELECT" => "N",
            		"COMPONENT_TEMPLATE" => "footer_bottom_menu",
            		"ROOT_MENU_TYPE" => "footer_bottom",
            		"MENU_CACHE_TYPE" => "N",
            		"MENU_CACHE_TIME" => "3600",
            		"MENU_CACHE_USE_GROUPS" => "Y",
            		"MENU_CACHE_GET_VARS" => array(
            		),
            		"MAX_LEVEL" => "1",
            		"CHILD_MENU_TYPE" => "footer_bottom",
            		"USE_EXT" => "N",
            		"DELAY" => "N"
            	),
            	false
            );?>
            <div class="contact_info_wrapper">
            <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                    "AREA_FILE_SHOW" => "sect", 
                    "AREA_FILE_SUFFIX" => "footer-contact", 
                    "AREA_FILE_RECURSIVE" => "Y", 
                    "EDIT_TEMPLATE" => "standard.php" 
                )
            );?>
            </div>
        </div>
    </div>
</footer>
<!--FOOTER END-->
<?///*?>
<div id="cb-popup-content">
<?$APPLICATION->IncludeComponent("ivit:main.feedback","",Array(
        "USE_CAPTCHA" => "Y",
        "OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"EMAIL_TO" => "radiontcev@ivit.pro",
        "REQUIRED_FIELDS" => Array("NAME","PHONE"),
		"EVENT_MESSAGE_ID" => Array("7"),
		
		"AJAX_MODE" => "Y",  // режим AJAX
		"AJAX_OPTION_JUMP" => "N", // скроллить страницу до компонента.
    )
);?>
</div>
<?//*/?>

</body>
</html>