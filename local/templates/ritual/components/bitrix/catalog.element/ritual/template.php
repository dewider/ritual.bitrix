<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogSectionComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 * @var string $templateFolder
 */

define( 'MAX_PRODUCT_SLIDE', 5);

$mainId = $this->GetEditAreaId($arResult['ID']);
$itemIds = array(
	'ID' => $mainId,
	'DISCOUNT_PERCENT_ID' => $mainId.'_dsc_pict',
	'STICKER_ID' => $mainId.'_sticker',
	'BIG_SLIDER_ID' => $mainId.'_big_slider',
	'BIG_IMG_CONT_ID' => $mainId.'_bigimg_cont',
	'SLIDER_CONT_ID' => $mainId.'_slider_cont',
	'OLD_PRICE_ID' => $mainId.'_old_price',
	'PRICE_ID' => $mainId.'_price',
	'DISCOUNT_PRICE_ID' => $mainId.'_price_discount',
	'PRICE_TOTAL' => $mainId.'_price_total',
	'SLIDER_CONT_OF_ID' => $mainId.'_slider_cont_',
	'QUANTITY_ID' => $mainId.'_quantity',
	'QUANTITY_DOWN_ID' => $mainId.'_quant_down',
	'QUANTITY_UP_ID' => $mainId.'_quant_up',
	'QUANTITY_MEASURE' => $mainId.'_quant_measure',
	'QUANTITY_LIMIT' => $mainId.'_quant_limit',
	'BUY_LINK' => $mainId.'_buy_link',
	'ADD_BASKET_LINK' => $mainId.'_add_basket_link',
	'BASKET_ACTIONS_ID' => $mainId.'_basket_actions',
	'NOT_AVAILABLE_MESS' => $mainId.'_not_avail',
	'COMPARE_LINK' => $mainId.'_compare_link',
	'TREE_ID' => $mainId.'_skudiv',
	'DISPLAY_PROP_DIV' => $mainId.'_sku_prop',
	'DISPLAY_MAIN_PROP_DIV' => $mainId.'_main_sku_prop',
	'OFFER_GROUP' => $mainId.'_set_group_',
	'BASKET_PROP_DIV' => $mainId.'_basket_prop',
	'SUBSCRIBE_LINK' => $mainId.'_subscribe',
	'TABS_ID' => $mainId.'_tabs',
	'TAB_CONTAINERS_ID' => $mainId.'_tab_containers',
	'SMALL_CARD_PANEL_ID' => $mainId.'_small_card_panel',
	'TABS_PANEL_ID' => $mainId.'_tabs_panel'
);

?>
<!--SECTION PRODUCT PAGE CONTENT START-->
<section class="product_page_content_wrapper">
    <div class="container">
	<?$APPLICATION->IncludeComponent(
		"bitrix:breadcrumb",
		"",
	Array(),
	false
    );?>
        <h2><?=$arResult["NAME"];?></h2>
    </div>
    <div class="product_page_content">
        <div class="container">
            <div class="content_list">
                <div class="content_item">
                    <div class="img_wrapper">
                        <img src="<?=$arResult['PREVIEW_PICTURE']['SRC'];?>" alt="product" class="active">
                        <? 
                            for( $i = 2; $i <= MAX_PRODUCT_SLIDE; $i++){
                                if( $arResult["PROPERTIES"]["img$i"]["VALUE"] ){
                                    echo '<img src="'.CFile::GetPath( $arResult["PROPERTIES"]["img$i"]["VALUE"] ).'" alt="product">';
                                }
                            }
                        ?>
                    </div>
                    <div class="product_carousel">
                        <div class="carousel_item">
                            <img src="<?=$arResult['PREVIEW_PICTURE']['SRC'];?>" alt="product">
                        </div>
                        <? 
                            for( $i = 2; $i <= MAX_PRODUCT_SLIDE; $i++){
                                if( $arResult["PROPERTIES"]["img$i"]["VALUE"] ):
                                ?>
                                <div class="carousel_item">
                                    <img src="<?=CFile::GetPath( $arResult["PROPERTIES"]["img$i"]["VALUE"] );?>" alt="product">
                                </div>
                                <?endif;
                            }
                        ?>
                    </div>
                </div>
                <div class="content_item">
                    <div class="code_availability_wrapper">
                        <div class="code">
                            <p>
                                Артикул: <span class="code_number"><?=$arResult['ID'];?></span>
                            </p>
                        </div>
                        <div class="availability">
                            <?=( $arResult['PRODUCT']['AVAILABLE'] == 'Y' ? "есть в наличии" : "нет в наличии");?>
                        </div>
                    </div>
                    <div class="price product-price">
                        <?=$arResult["PRINT_MIN_PRICE"];?>
                    </div>
                    <ul class="features">
                        <? foreach( $arResult["PROPERTIES"] as $propsKey => $propsItem ): ?>

                            <? if(
                                !preg_match('/^img\d+$/', $propsKey) &&
                                $propsItem["VALUE"] &&
                                !preg_match('/^desc$/', $propsKey) &&
                                !preg_match('/^BLOG_POST_ID$/', $propsKey) &&
                                !preg_match('/^BLOG_COMMENTS_CNT$/', $propsKey) &&
                                !preg_match('/^offers_title$/', $propsKey)
                                
                            ): ?>
                                <li><span><?=$propsItem["NAME"];?>: <?=$propsItem["VALUE"];?></span></li>
                            <?endif;?>
                        <?endforeach;?>
                    </ul>
                    <p class="descr">
                    <?=$arResult['DETAIL_TEXT'];?>
                    </p>
                    <?if( CCatalogSKU::IsExistOffers( $arResult['ID'] )): ?>
                    <div class="size_wrapper">
                        <h6><?=$arResult["PROPERTIES"]["offers_title"]["VALUE"]?></h6>
                        <div class="size">
                        <?foreach( $arResult["OFFERS"] as $arOffer ):?>
                            <?if( $arOffer["PRODUCT"]["AVAILABLE"] === "N" ) continue;?>
                            <div class="size_item" data-id="<?=$arOffer['ID']?>">
                                <?=$arOffer['NAME']?>
                            </div>
                        <?endforeach;?>
                        </div>
                    </div>
                    <?endif;?>
                    <div class="qty_wrapper">
                        <div class="qty">
                            <input type="number" value="1" step="1" min="1" max="10">
                            <button class="up"><i class="fa fa-angle-right" aria-hidden="true"></i></button>
                            <button class="down"><i class="fa fa-angle-left" aria-hidden="true"></i></button>
                        </div>

                        <div class="btn_wrapper">
                            <a class="btn to-cart" href="javascript:void(0);" id="<?=$itemIds['ADD_BASKET_LINK']?>"><?=$arParams['MESS_BTN_ADD_TO_BASKET']?></a>
                            <button class="btn grey buy">Купить в 1 клик</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--SECTION PRODUCT PAGE CONTENT END-->

<!--SECTION PRODUCT PAGE DESCRIPTION START-->
<section class="product_page_description_wrapper">
    <div class="container">
        <div class="product_page_description">
            <?
            $deliveryTabClass = "active";
            $deliveryTabStyle = '';
            if( $arResult['PROPERTIES']['desc']['VALUE'] ){
                $deliveryTabClass = '';
                $deliveryTabStyle = 'display: none';
            }
            ?>
            <ul class="prices_navigation_tabs">
                <?if( $deliveryTabClass == '' ):?>
                <li><a href="#tab1" class="active"><span>Описание</span></a></li>
                <?endif;?>
                <li><a href="#tab2" class="<?=$deliveryTabClass;?>"><span>Доставка</span></a></li>
            </ul>

            <div class="prices_content_tabs">
            <?if( $deliveryTabClass == '' ):?>
                <div class="tab" id="tab1">
                    <p>
                    <?=$arResult['PROPERTIES']['desc']['VALUE']['TEXT'];?>
                    </p>
                </div>
            <?endif;?>

                <div class="tab" id="tab2" style="<?=$deliveryTabStyle;?>">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "sect", 
                            "AREA_FILE_SUFFIX" => "product-desc", 
                            "AREA_FILE_RECURSIVE" => "Y", 
                            "EDIT_TEMPLATE" => "standard.php" 
                        )
                    );?>
                </div>
            </div>
        </div>
    </div>
</section>
<!--SECTION PRODUCT PAGE DESCRIPTION END-->

<?
$jsParams = array(
    'CONFIG' => array(
        'USE_CATALOG' => $arResult['CATALOG'],
        'SHOW_QUANTITY' => $arParams['USE_PRODUCT_QUANTITY'],
        'SHOW_PRICE' => true,
        'SHOW_DISCOUNT_PERCENT' => $arParams['SHOW_DISCOUNT_PERCENT'] === 'Y',
        'SHOW_OLD_PRICE' => $arParams['SHOW_OLD_PRICE'] === 'Y',
        'USE_PRICE_COUNT' => $arParams['USE_PRICE_COUNT'],
        'DISPLAY_COMPARE' => $arParams['DISPLAY_COMPARE'],
        'SHOW_SKU_PROPS' => $arResult['SHOW_OFFERS_PROPS'],
        'OFFER_GROUP' => $arResult['OFFER_GROUP'],
        'MAIN_PICTURE_MODE' => $arParams['DETAIL_PICTURE_MODE'],
        'ADD_TO_BASKET_ACTION' => $arParams['ADD_TO_BASKET_ACTION'],
        'SHOW_CLOSE_POPUP' => $arParams['SHOW_CLOSE_POPUP'] === 'Y',
        'SHOW_MAX_QUANTITY' => $arParams['SHOW_MAX_QUANTITY'],
        'RELATIVE_QUANTITY_FACTOR' => $arParams['RELATIVE_QUANTITY_FACTOR'],
        'TEMPLATE_THEME' => $arParams['TEMPLATE_THEME'],
        'USE_STICKERS' => true,
        'USE_SUBSCRIBE' => $showSubscribe,
        'SHOW_SLIDER' => $arParams['SHOW_SLIDER'],
        'SLIDER_INTERVAL' => $arParams['SLIDER_INTERVAL'],
        'ALT' => $alt,
        'TITLE' => $title,
        'MAGNIFIER_ZOOM_PERCENT' => 200,
        'USE_ENHANCED_ECOMMERCE' => $arParams['USE_ENHANCED_ECOMMERCE'],
        'DATA_LAYER_NAME' => $arParams['DATA_LAYER_NAME'],
        'BRAND_PROPERTY' => !empty($arResult['DISPLAY_PROPERTIES'][$arParams['BRAND_PROPERTY']])
            ? $arResult['DISPLAY_PROPERTIES'][$arParams['BRAND_PROPERTY']]['DISPLAY_VALUE']
            : null
    ),
    'PRODUCT_TYPE' => $arResult['PRODUCT']['TYPE'],
    'VISUAL' => $itemIds,
    'DEFAULT_PICTURE' => array(
        'PREVIEW_PICTURE' => $arResult['DEFAULT_PICTURE'],
        'DETAIL_PICTURE' => $arResult['DEFAULT_PICTURE']
    ),
    'PRODUCT' => array(
        'ID' => $arResult['ID'],
        'ACTIVE' => $arResult['ACTIVE'],
        'NAME' => $arResult['~NAME'],
        'CATEGORY' => $arResult['CATEGORY_PATH']
    ),
    'BASKET' => array(
        'QUANTITY' => $arParams['PRODUCT_QUANTITY_VARIABLE'],
        'BASKET_URL' => $arParams['BASKET_URL'],
        'SKU_PROPS' => $arResult['OFFERS_PROP_CODES'],
        'ADD_URL_TEMPLATE' => $arResult['~ADD_URL_TEMPLATE'],
        'BUY_URL_TEMPLATE' => $arResult['~BUY_URL_TEMPLATE']
    ),
    'OFFER_SELECTED' => $arResult['OFFERS_SELECTED'],
    'TREE_PROPS' => $skuProps
);

$jsParams['OFFERS'] = array();
foreach( $arResult["OFFERS"] as $arOffer ):
    if( $arOffer["PRODUCT"]["AVAILABLE"] === "N" ) continue;

    $jsParams['OFFERS'][ $arOffer['ID'] ] = array(

        'PRINT_PRICE'   => $arOffer['ITEM_PRICES'][0]['PRINT_PRICE'],
        'QUANTITY'      => $arOffer['PRODUCT']['QUANTITY']
    );

endforeach;
?>
<script>
    var catalogElement = new CatalogElement(<?=CUtil::PhpToJSObject($jsParams, false, true)?>);
    catalogElement.logParams();
</script>

<pre><?=var_dump($arResult)?></pre>