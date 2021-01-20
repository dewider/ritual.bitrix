<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Морги");
?>

<!--SECTION MORGUES PAGE CONTENT START-->
<section class="morgues_content_wrapper">
        <div class="container">
            <div class="morgues_content">
                <?$APPLICATION->IncludeComponent(
		        		"bitrix:breadcrumb",
		        		"",
		        	Array(),
		        	false
		        );?>
                <h2>Морги Москвы</h2>
                <p class="descr">
                <span class="underline">Моргом называют медицинское учреждение, которое призвано обеспечивать сохранность тел в особых холодильных
                устройствах.</span>Здесь проводится специальная экспертиза причин смерти, после вскрытия тел усопших.
                    Морги Москвы проводят подготовительные процедуры покойного к захоронению. В частности, при необходимости
                    они бальзамируют тело, обмывают его, осуществляют косметические услуги. Тела умерших людей находятся в
                    морге вне зависимости от того, <b>где произошла смерть, и какие причины тому способствовали.</b>
                </p>

                <h6>Актуальная информация о московских моргах</h6>
                <p class="descr">
                    <span class="underline">Если вам необходимы морги в Москве, то ниже представлены контактные данные этих медицинских учреждений.</span>
                    Телефонные номера вам потребуются в том случае, если умер кто-то из близких людей. Ниже имеется ссылка,
                    в которой представлен полный список моргов с адресами и телефонными номерами.
                </p>

                <h6>Московские морги подразделяются на три вида:</h6>
                <ul class="morgues_kinds">
                    <li>
                    <span>
                        Патоанатомические отделения. <span class="underline">Они являются отдельным структурным подразделением медицинских учреждений, где находятся больные люди.</span>
                        Здесь находятся тела тех людей, в чьей смерти нет насильственного характера, и отсутствуют признаки криминала. Тела умерших людей без признаков
                        насильственной смерти помещаются в данный тип моргов.
                    </span>
                    </li>
                    <li>
                    <span>
                        Бюро судебной медицины. <span class="underline">В данное учреждение помещаются тела умерших, когда смерть имела насильственный характер или имеются подозрения в
                            совершении преступного действия.</span>
                    </span>
                    </li>
                </ul>
                <?$APPLICATION->IncludeComponent(
                	"bitrix:news.list",
                	"morgues_list",
                	Array(
                		//"ACTIVE_DATE_FORMAT" => "d.m.Y",
                		//"ADD_SECTIONS_CHAIN" => "Y",
                		//"AJAX_MODE" => "N",
                		//"AJAX_OPTION_ADDITIONAL" => "",
                		//"AJAX_OPTION_HISTORY" => "N",
                		//"AJAX_OPTION_JUMP" => "N",
                		//"AJAX_OPTION_STYLE" => "Y",
                		"CACHE_FILTER" => "N",
                		"CACHE_GROUPS" => "Y",
                		"CACHE_TIME" => "36000000",
                		"CACHE_TYPE" => "A",
                		//"CHECK_DATES" => "Y",
                		"DETAIL_URL" => "",
                		//"DISPLAY_BOTTOM_PAGER" => "Y",
                		//"DISPLAY_DATE" => "Y",
                		//"DISPLAY_NAME" => "Y",
                		//"DISPLAY_PICTURE" => "Y",
                		//"DISPLAY_PREVIEW_TEXT" => "Y",
                		//"DISPLAY_TOP_PAGER" => "N",
                		"FIELD_CODE" => array(0=>"",1=>"",),
                		"FILTER_NAME" => "",
                		//"HIDE_LINK_WHEN_NO_DETAIL" => "N",
                		"IBLOCK_ID" => "11",
                		"IBLOCK_TYPE" => "content",
                		//"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                		"INCLUDE_SUBSECTIONS" => "Y",
                		//"MESSAGE_404" => "",
                		"NEWS_COUNT" => "",
                		//"PAGER_BASE_LINK_ENABLE" => "N",
                		//"PAGER_DESC_NUMBERING" => "N",
                		//"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                		//"PAGER_SHOW_ALL" => "N",
                		//"PAGER_SHOW_ALWAYS" => "N",
                		//"PAGER_TEMPLATE" => ".default",
                		//"PAGER_TITLE" => "Новости",
                		//"PARENT_SECTION" => "",
                		"PARENT_SECTION_CODE" => "morgues",
                		///"PREVIEW_TRUNCATE_LEN" => "",
                		"PROPERTY_CODE" => array(0=>"",1=>"",),
                		"SET_BROWSER_TITLE" => "N",
                		//"SET_LAST_MODIFIED" => "N",
                		"SET_META_DESCRIPTION" => "N",
                		"SET_META_KEYWORDS" => "N",
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
        </div>
    </section>
<!--SECTION MORGUES PAGE CONTENT END-->

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

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>