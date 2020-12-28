<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/**
 * @var CBitrixComponentTemplate $this
 * @var CatalogElementComponent $component
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
            "PRICE"             => $arPrice["PRICE"],
            "DISCOUNT_PRICE"    => $discountPrice
        );
    }
}

 // если товар имеет торговые предложения - получаем их
if( CCatalogSKU::IsExistOffers( $arResult['ID'] )){

    $arSKUList = CCatalogSKU::getOffersList(
        array( $arResult['ID'] )
        )[ $arResult['ID'] ];

    // получаем массив с ID торговых предложений
    $skuIDs = array();
    foreach( $arSKUList as $skuItem ){
        array_push( $skuIDs, $skuItem['ID'] );
    }

    // получаем массив ТП
    $dbSKU = CCatalogProduct::GetList(
        array(),
        array( 'ID' => $skuIDs ),
        false,
        false,
        array()
    );
    $arResult['SKU_ITEMS'] = array();
    while( $skuItem = $dbSKU->Fetch() ){
        $arResult['SKU_ITEMS'][ $skuItem['ID'] ] = $skuItem;
    }

    // получаем цены для ТП
    $arResult['SKU_PRICELIST'] = array();
    getPriceList( $skuIDs, $arResult['SKU_PRICELIST'] );

}

// получаем дефолтную цену товара
$arPrice = array();
getPriceList( $arResult["ID"], $arPrice );
$arResult["DEFAULT_PRICE"] = $arPrice[ $arResult['ID'] ];

// получаем массив свойств
$arProps = array();
CIBlockElement::GetPropertyValuesArray(
    $arProps,
    $arResult["IBLOCK_ID"],
    array(
        "ID" => $arResult['ID']
    )
);
$arResult['PROPS'] = $arProps[ $arResult['ID'] ];