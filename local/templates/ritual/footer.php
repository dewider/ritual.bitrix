<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>

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
<!--
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/remodal/1.1.1/remodal.min.js" integrity="sha512-a/KwXZUMuN0N2aqT/nuvYp6mg1zKg8OfvovbIlh4ByLw+BJ4sDrJwQM/iSOd567gx+yS0pQixA4EnxBlHgrL6A==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/qs/6.9.4/qs.min.js" integrity="sha512-BHtomM5XDcUy7tDNcrcX1Eh0RogdWiMdXl3wJcKB3PFekXb3l5aDzymaTher61u6vEZySnoC/SAj2Y/p918Y3w==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.3/nouislider.min.js" integrity="sha512-EnXkkBUGl2gBm/EIZEgwWpQNavsnBbeMtjklwAa7jLj60mJk932aqzXFmdPKCG6ge/i8iOCK0Uwl1Qp+S0zowg==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wnumb/1.2.0/wNumb.min.js" integrity="sha512-igVQ7hyQVijOUlfg3OmcTZLwYJIBXU63xL9RC12xBHNpmGJAktDnzl9Iw0J4yrSaQtDxTTVlwhY730vphoVqJQ==" crossorigin="anonymous"></script>
<script type="text/javascript" src="http://maps.api.2gis.ru/1.0"></script>
-->

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
</body>
</html>