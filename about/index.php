<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("О магазине");
$APPLICATION->AddHeadScript("http://maps.api.2gis.ru/1.0");
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/contactsPageInit.js");
?>

<!--SECTION FUNERAL ORGANIZATION PAGE INFO CONTENT START-->
<!-- section open tag and title in header.php-->
        <div class="funeral_organization_page_info">
            <div class="info_item">
                <p>
                    Городская служба «Ритуал» оказывает помощь в подготовке и проведении
                    траурных церемоний. Вежливые сотрудники готовы выехать по адресу или
                    предоставить консультацию 24 часа в сутки. Ритуальные услуги от компании
                    «Ритуал»
                </p>

                <p>
                    Мы готовы предложить помощь в:
                </p>
                <ul class="info_list">
                    <li><span>Оформлении документов (медицинских, гербовых, для кладбища, крематория);</span></li>
                    <li><span>Организации похорон (поиск места на кладбище, предоставление транспорта, услуги грузчиков и оркестра);</span></li>
                    <li><span>Подготовке тела (к погребению, бальзамированию, кремации);</span></li>
                    <li><span>В перевозке ГРУЗА 200 и т.д.</span></li>
                </ul>
                <div class="btn_wrapper">
                    <button class="btn">Вызов ритуального агента ОНЛАЙН</button>
                    <a href="/calculator" class="btn grey">Расчитать стоимость похорон</a>
                </div>
            </div>
            <div class="info_item">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/organiz.png" alt="image">
            </div>
        </div>
    </div>
</section>
<!--SECTION FUNERAL ORGANIZATION PAGE INFO CONTENT END-->

<!--SECTION FUNERAL ORGANIZATION PAGE MORGUES LIST START-->
<section class="funeral_organization_page_morgues_list_wrapper">
    <div class="container">
        <h2>Близлежащие объекты</h2>
        <table>
            <colgroup>
                <col width="33%">
                <col width="33%">
                <col>
            </colgroup>
            <thead>
                <tr>
                    <th>Морг</th>
                    <th>Телефон и адрес</th>
                    <th>Часы работы</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Морг больницы №50</td>
                    <td>г. Москва, ул. Вучетича д. 21</td>
                    <td>будни  9:00 до 15:00 суббота — с 9:00
                        до 13:00, воскресение — выходной
                    </td>
                </tr>
                <tr>
                    <td>Морг больницы им. С.П. Боткина</td>
                    <td>г. Москва, 2-й Боткинский проезд, дом 5</td>
                    <td>
                        будни  9:00 до 15:00 суббота — с 9:00
                        до 13:00, воскресение — выходной
                    </td>
                </tr>
                <tr>
                    <td>Морг Судебно-медицинский №10</td>
                    <td>г. Москва, 2-й Боткинский проезд, дом 5, корпус 33</td>
                    <td>
                        будни  9:00 до 15:00 суббота — с 9:00
                        до 13:00, воскресение — выходной
                    </td>
                </tr>
                <tr>
                    <td>Морг больницы №81</td>
                    <td>г. Москва, ул. Лобненская, 10</td>
                    <td>
                        будни  9:00 до 15:00 суббота — с 9:00
                        до 13:00, воскресение — выходной
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</section>
<!--SECTION FUNERAL ORGANIZATION PAGE MORGUES LIST END-->

<!--SECTION FUNERAL ORGANIZATION PAGE MAP START-->
<section class="funeral_organization_page_map_wrapper">
    <div class="container">
        <h2>Горслужба Ритуал оказывает услуги по адресу</h2>
    </div>
    <div class="map">
        <div id="myMapId" style="width:100%; height:100%"></div>
    </div>
</section>
<!--SECTION FUNERAL ORGANIZATION PAGE MAP END-->

<!--SECTION FUNERAL ORGANIZATION PAGE LOCATION START-->
<section class="funeral_organization_page_location_wrapper">
    <div class="container">

        <?$sections = array(
            array(
                'code' => "moscow_region",
                'title' => 'ГОРОДА ПОДМОСКОВЬЯ'
            ),
            array(
                'code' => "moscow",
                'title' => 'Москва'
            )
        );?>

        <div class="funeral_organization_page_location">
            <ul class="prices_navigation_tabs">
                <?
                $i = 1;
                foreach( $sections as $section ):?>
                <li><a <?=($i == 1) ? 'class="active"': ''?> href="#tab<?=$i++?>"><span><?=$section['title']?></span></a></li>
                <?endforeach;?>
            </ul>

            <div class="prices_content_tabs">
                <?
                $i = 1;
                foreach( $sections as $section ):?>
                <div class="tab" <?=( $i>1 ) ? 'style="display: none"' : ''?> id="tab<?=$i++?>">
                    <?$APPLICATION->IncludeComponent(
                    	"bitrix:news.list",
                    	"cities_list",
                    	Array(
                    		"ACTIVE_DATE_FORMAT" => "d.m.Y",
                    		"ADD_SECTIONS_CHAIN" => "N",
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
                    		"IBLOCK_ID" => "10",
                    		"IBLOCK_TYPE" => "city_lists",
                    		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
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
                    		"PARENT_SECTION_CODE" => $section['code'],
                    		"PREVIEW_TRUNCATE_LEN" => "",
                    		"PROPERTY_CODE" => array(0=>"",1=>"",),
                    		"SET_BROWSER_TITLE" => "N",
                    		"SET_LAST_MODIFIED" => "N",
                    		"SET_META_DESCRIPTION" => "Y",
                    		"SET_META_KEYWORDS" => "Y",
                    		"SET_STATUS_404" => "N",
                    		"SET_TITLE" => "N",
                    		"SHOW_404" => "N",
                    		"SORT_BY1" => "ACTIVE_FROM",
                    		"SORT_BY2" => "SORT",
                    		"SORT_ORDER1" => "DESC",
                    		"SORT_ORDER2" => "ASC",
                    		"STRICT_SECTION_CHECK" => "N"
                    	)
                    );?>
                </div>
                <?endforeach;?>

            </div>
        </div>
    </div>
</section>
<!--SECTION FUNERAL ORGANIZATION PAGE LOCATION END-->

<!--SECTION FUNERAL ORGANIZATION PAGE TEXT CONTENT START-->
<section class="funeral_organization_page_text_wrapper">
    <div class="container">
        <h2>Организация похорон - САО</h2>
        <p>
            Когда уходит близкий человек, тяжело заставить себя
            заниматься оформлением документов и решением проблем,
            связанных с организацией похорон. Наше ритуальное агентство
            имеет опыт более 15 лет в сфере похоронных услуг и помогает
            в организации похорон на должном уровне. Мы стремимся
            сделать все, чтобы избавить вас от лишних стрессов и волнений.
            Наши специалисты профессионалы своего дела и готовы
            обеспечить выполнение заказа любой степени сложности.
            Ритуальные агенты похоронного бюро “Горслужба-ритуал”
            работают круглосуточно по Москве и всем городам Московской
            области, включая город САО.
        </p>
    </div>
</section>
<!--SECTION FUNERAL ORGANIZATION PAGE TEXT CONTENT END-->

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>