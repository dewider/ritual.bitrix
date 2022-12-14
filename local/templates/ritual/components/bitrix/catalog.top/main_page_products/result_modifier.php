<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/**
 * @var CBitrixComponentTemplate $this
 * @var CatalogTopComponent $component
 */

/**
 * Получение цен базовых цен и скидок
 * @param $arProductIDs {array} Массив ID товаров
 * @param $$arPriceList {*array} Указатель на массив для результата
 */
function getPriceList( $arProductIDs, &$arPriceList ){

    global $USER;

    $dbPrice = CPrice::GetList(
        array(),
        array(
            "PRODUCT_ID" => $arProductIDs
        ),
        false,
        false,
        array()
        //array("PRODUCT_ID", "PRICE")
    );

    while ( $arPrice = $dbPrice->Fetch() ){

        $arDiscount = CCatalogDiscount::GetDiscountByPrice(
            $arPrice['ID'],
            $USER->GetUserGroupArray(),
            "N",
            SITE_ID
        );
        $discountPrice = CCatalogProduct::CountPriceWithDiscount(
            $arPrice["PRICE"],
            $arPrice["CURRENCY"],
            $arDiscount
        );
        $arPriceList[ $arPrice['PRODUCT_ID'] ] = array(
            "PRICE"             => CurrencyFormat( $arPrice["PRICE"], $arPrice["CURRENCY"] ),
            "DISCOUNT_PRICE"    => CurrencyFormat( $discountPrice, $arPrice["CURRENCY"] )
        );
    }
}

/**
 * Получение списка товаров из подкаталога
 */
function getSectionItems( $sectionCode, &$arItems){
    $dbItems = CIBlockElement::GetList(
        array(),
        array("SECTION_CODE" => $sectionCode),
        false,
        array ("nTopCount" => 4),
        array("ID", "NAME", "DETAIL_PAGE_URL", "PREVIEW_PICTURE", "PREVIEW_TEXT", "IBLOCK_ID", "LANG_DIR")
    );
    $IDs = array();
    while ( $arItem = $dbItems->GetNext() ){

        array_push( $IDs, $arItem["ID"] );
        $arItem['PREVIEW_PICTURE_URL'] = CFile::GetPath( $arItem['PREVIEW_PICTURE'] );
        array_push( $arItems, $arItem );
    }
    return $IDs;
}

// получение цен топ товаров
$IDs = array();
foreach ( $arResult['ITEMS'] as $key => $arItem ){
    
    array_push($IDs, ($arItem['ID']) );
}

$arResult['PRICE_LIST'] = array();
getPriceList( $IDs, $arResult['PRICE_LIST'] );

// получение рекомендуемых товаров
$arResult['RECOMMENDATIONS']['ITEMS'] = array();
$IDs = getSectionItems( "recommendation", $arResult['RECOMMENDATIONS']['ITEMS'] );

$arResult['RECOMMENDATIONS']['PRICE_LIST'] = array();
getPriceList( $IDs, $arResult['RECOMMENDATIONS']['PRICE_LIST'] );

// получение товаров по скидке
$arResult['STOCK']['ITEMS'] = array();
$IDs = getSectionItems( "stock", $arResult['STOCK']['ITEMS'] );

$arResult['STOCK']['PRICE_LIST'] = array();
getPriceList( $IDs, $arResult['STOCK']['PRICE_LIST'] );