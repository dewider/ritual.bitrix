<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Наши контакты");
$APPLICATION->AddHeadScript("http://maps.api.2gis.ru/1.0");
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/contactsPageInit.js");
?>

<!--SECTION CONTACTS PAGE CONTENT START-->
<!-- section open tag and title in header.php-->
    </div>
    <div class="contacts_content">
        <div class="container">
            <div class="map_contacts_wrapper">
                <div class="map">
                    <div id="myMapId" style="width:100%; height:100%"></div>
                </div>
                <div class="contacts">
                    <h4>Email</h4>
                    <p>
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <a href="mailto:yourmail@gmail.com" class="active-mail">yourmail@gmail.com</a>
                    </p>
                    <div class="addresses">
                        <h4>Адреса наших МФЦ</h4>
                        <p>
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            Москва, Госпитальная площадь, 3, стр. 16
                        </p>
                        <p>
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            Москва, улица Гамалеи, дом 17
                        </p>
                        <p>
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            Москва, улица Братиславская, дом 15, корп.1
                        </p>
                        <p>
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            Москва, Пятницкое шоссе, 6 км
                        </p>
                    </div>
                    <div class="phone_wrapper">
                        <div class="phone">
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_SHOW" => "sect", 
                                    "AREA_FILE_SUFFIX" => "phone-link", 
                                    "AREA_FILE_RECURSIVE" => "Y", 
                                    "EDIT_TEMPLATE" => "standard.php" 
                                )
                            );?>
                        </div>
                        <div class="work_time">
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/aroundtheclock-red.png" alt="phone">
                            <p>
                                Круглосуточная справочная
                            </p>
                        </div>
                    </div>
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "sect", 
                            "AREA_FILE_SUFFIX" => "callback", 
                            "AREA_FILE_RECURSIVE" => "Y", 
                            "EDIT_TEMPLATE" => "standard.php" 
                        )
                    );?>
                </div>
            </div>
        </div>
    </div>
    <div class="contacts_districts_wrapper">
        <div class="container">
            <div class="contacts_districts">
                <div class="contacts_districts_item">
                    <p>
                        Для оперативного вызова ритуального агента,
                        относящегося непосредственно к округу проживания
                        покойного, либо месту нахождения его родственников,
                        обращайтесь в окружные похоронные отделения
                        нашей службы:
                    </p>
                    <div class="phone_wrapper">
                        <div class="phone">
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_SHOW" => "sect", 
                                    "AREA_FILE_SUFFIX" => "phone-link", 
                                    "AREA_FILE_RECURSIVE" => "Y", 
                                    "EDIT_TEMPLATE" => "standard.php" 
                                )
                            );?>
                        </div>
                        <div class="work_time">
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/aroundtheclock-red.png" alt="phone">
                            <p>
                                Круглосуточная справочная
                            </p>
                        </div>
                    </div>
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "sect", 
                            "AREA_FILE_SUFFIX" => "callback", 
                            "AREA_FILE_RECURSIVE" => "Y", 
                            "EDIT_TEMPLATE" => "standard.php" 
                        )
                    );?>
                </div>
                <div class="contacts_districts_item">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/moscow_map.png" alt="map">
                </div>
            </div>
        </div>
    </div>

</section>
<!--SECTION CONTACTS PAGE CONTENT START-->

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php")?>