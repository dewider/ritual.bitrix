<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="header_top_wrapper">
    <div class="container">
        <div class="header_top_content">
            <div class="header_top_item">
                <div class="logo_wrapper">
                    <div class="logo_img">
                        <a href="/">
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/logo.png" alt="logo">
                        </a>
                    </div>
                    <div class="logo_content">
                        <p class="logo_text_up">
                            Городская<br>
                            Ритуальная служба
                        </p>
                        <p class="logo_text_down">
                            Москва и Московская область
                        </p>
                    </div>
                </div>
            </div>
            <div class="header_top_item">
                <div class="contact_info_wrapper">
                    <div class="phone">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/auricular-phone-symbol-in-a-circle.png" alt="phone">
                        <a href="tel:+74951523333">+7 (495) 152 33 33</a>
                    </div>
                    <div class="work_time">
                        <p>
                            Время работы: c 9:00 до 21:00
                        </p>
                    </div>
                </div>
                <div class="header_btn">
                    <button class="btn">Заказать обратный звонок</button>
                </div>
                <?$APPLICATION->IncludeComponent(
                	"bitrix:sale.basket.basket.line",
                	"",
                	Array(
                		"HIDE_ON_BASKET_PAGES" => "Y",
                		"PATH_TO_AUTHORIZE" => "",
                		"PATH_TO_BASKET" => SITE_DIR."personal/cart/",
                		"PATH_TO_ORDER" => SITE_DIR."personal/order/make/",
                		"PATH_TO_PERSONAL" => SITE_DIR."personal/",
                		"PATH_TO_PROFILE" => SITE_DIR."personal/",
                		"PATH_TO_REGISTER" => SITE_DIR."login/",
                		"POSITION_FIXED" => "N",
                		"SHOW_AUTHOR" => "N",
                		"SHOW_EMPTY_VALUES" => "Y",
                		"SHOW_NUM_PRODUCTS" => "Y",
                		"SHOW_PERSONAL_LINK" => "Y",
                		"SHOW_PRODUCTS" => "N",
                		"SHOW_REGISTRATION" => "Y",
                		"SHOW_TOTAL_PRICE" => "Y"
                	)
                );?>
            </div>
        </div>
    </div>
</div>