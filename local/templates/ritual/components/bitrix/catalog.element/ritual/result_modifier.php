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

$arResult["PRINT_MIN_PRICE"] = $arResult["OFFERS"][0]["ITEM_PRICES"][0]["PRINT_PRICE"];
if( $arResult["OFFERS"] ){

    $minPrice = $arResult["OFFERS"][0]["ITEM_PRICES"][0]["PRICE"];
    foreach( $arResult["OFFERS"] as $key => $arOffer ){
        
        if( $key == 0 || $arOffer["PRODUCT"]["AVAILABLE"] === "N" ) continue;
        if( $arOffer["ITEM_PRICES"][0]["PRICE"] < $minPrice ){

            $minPrice = $arOffer["ITEM_PRICES"][0]["PRICE"];
            $arResult["PRINT_MIN_PRICE"] = $arOffer["ITEM_PRICES"][0]["PRINT_PRICE"];
        }
    }
}