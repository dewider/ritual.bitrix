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

$this->addExternalJS("/local/templates/ritual/js/catalogElement.js");
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
                    <div class="price product-price" data-product-id="<?=$arResult['ID']?>">
                        <?=$arResult["PRINT_MIN_PRICE"];?>
                    </div>
                    <ul class="features">
                        <? foreach( $arResult["PROPERTIES"] as $propsKey => $propsItem ): ?>

                            <? if(
                                $propsItem["VALUE"] &&
                                preg_match('/^s_\S+$/', $propsKey)
                                
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
                        <div class="size" data-product-id="<?=$arResult['ID']?>">
                        <?foreach( getOffersVar( $arResult ) as $arOffer ):?>
                            <?if( $arOffer["PRODUCT"]["AVAILABLE"] === "N" ) continue;?>
                            <div class="size_item" data-id="<?=$arOffer['ID']?>" data-price="<?=$arOffer['PRICE']?>" data-qty="<?=$arOffer['QTY']?>">
                                <?=$arOffer['TITLE']?>
                            </div>
                        <?endforeach;?>
                        </div>
                    </div>
                    <?endif;?>
                    <div class="qty_wrapper">
                        <div class="qty" data-product-id="<?=$arResult['ID']?>">
                            <input type="number" value="1" step="1" min="1" max="10">
                            <button class="up"><i class="fa fa-angle-right" aria-hidden="true"></i></button>
                            <button class="down"><i class="fa fa-angle-left" aria-hidden="true"></i></button>
                        </div>

                        <div class="btn_wrapper">
                            <a class="btn to-cart" data-product-id="<?=$arResult['ID']?>" href="javascript:void(0);"><?=$arParams['MESS_BTN_ADD_TO_BASKET']?></a>
                            <button class="btn grey buy" data-product-id="<?=$arResult['ID']?>"><?=$arParams['MESS_BTN_BUY']?></button>
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

    'BASKET' => array(
        'BASKET_URL' => $arParams['BASKET_URL'],
        'ADD_URL_TEMPLATE' => $arResult['~ADD_URL_TEMPLATE'],
        'BUY_URL_TEMPLATE' => $arResult['~BUY_URL_TEMPLATE'],
        "PATH_TO_ORDER" => SITE_DIR."personal/order/make/"
    )
);
?>
<pre><?=var_dump($arResult)?></pre>
<script>
    var PARAMS = <?=CUtil::PhpToJSObject($jsParams, false, true)?>
</script>