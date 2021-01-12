<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

function getOffersVar( $item ){

    if(!$item) return;

    $offerVarID = $item["PROPERTIES"]["offers_var"]["VALUE_XML_ID"];

    $res = array();
    foreach( $item["OFFERS"] as $offer){

        $qty = $offer["PRODUCT"]["QUANTITY"];
        if( $qty <= 0 || $offer["PRODUCT"]["AVAILABLE"] === "N") continue;

        switch($offerVarID){

            case 'height':
                $title = $offer["PRODUCT"]["HEIGHT"];
                break;
        }

        array_push( $res, array(
            "ID"    => $offer["ID"],
            "TITLE" => $title,
            "PRICE" => $offer["ITEM_PRICES"][ $item["ITEM_PRICE_SELECTED"] ]["PRINT_RATIO_PRICE"],
            "QTY"   => $qty
        ));
    }

    return $res;
}