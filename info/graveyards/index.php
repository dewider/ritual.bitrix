<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Кладбища");
?>

<!--SECTION CEMETERIES PAGE CONTENT START-->
<!-- section open tag and title in header.php-->
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
					"ADD_SECTIONS_CHAIN" => "N",
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
					"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
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

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>