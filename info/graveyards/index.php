<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Кладбища");
?>

<!--SECTION CEMETERIES PAGE CONTENT START-->
<section class="cemeteries_content_wrapper">
    <div class="container">
        <div class="cemeteries_content">
            <?$APPLICATION->IncludeComponent(
		    		"bitrix:breadcrumb",
		    		"",
		    	Array(),
		    	false
		    );?>
            <h2>Кладбища Москвы</h2>
            <p class="descr">
                Приобретение места на кладбище входит в число основных мероприятий при организации похорон.
                <span class="underline">Следует сразу оговориться, что просто так купить участок для захоронения нельзя.</span> Российское
                законодательство предусматривает предоставление места на кладбище в бессрочное пользование и
                до тех пор, пока за ним осуществляется уход. <b>Однако участок можно купить в комплекте
                    с ритуальными услугами.</b>
            </p>

            <p class="descr">
                <span class="underline">Важно понимать, что не все кладбища столицы доступны для захоронений. Часть из них являются закрытыми.</span> На сайте
                нашего агентства представлена подробная информация о кладбищах, где можно провести погребение. Похороны на
                кладбище закрытого типа проводятся <b>только после выдачи специального разрешения.</b>
            </p>

            <?$APPLICATION->IncludeComponent(
            	"bitrix:news.list",
            	"graveyards_list",
            	Array(
            		"CACHE_FILTER" => "N",
            		"CACHE_GROUPS" => "Y",
            		"CACHE_TIME" => "36000000",
            		"CACHE_TYPE" => "A",
            		"DETAIL_URL" => "",
            		"FIELD_CODE" => array(0=>"",1=>"",),
            		"FILTER_NAME" => "",
            		"IBLOCK_ID" => "11",
            		"IBLOCK_TYPE" => "content",
            		"INCLUDE_SUBSECTIONS" => "Y",
            		"NEWS_COUNT" => "",
            		"PARENT_SECTION_CODE" => "graveyards",
            		"PROPERTY_CODE" => array(0=>"",1=>"",),
            		"SET_BROWSER_TITLE" => "N",
            		"SET_META_DESCRIPTION" => "N",
            		"SET_META_KEYWORDS" => "N",
            		"SET_STATUS_404" => "N",
            		"SET_TITLE" => "N",
            		"SHOW_404" => "N",
            		"SORT_BY1" => "NAME",
            		"SORT_BY2" => "SORT",
            		"SORT_ORDER1" => "ASC",
            		"SORT_ORDER2" => "ASC",
            		"STRICT_SECTION_CHECK" => "N"
            	)
            );?>

            

        </div>
    </div>
</section>
<!--SECTION CEMETERIES PAGE CONTENT END-->

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