<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

// получаем список ID
$arIDs = array();
foreach($arResult["ITEMS"] as $arItem){
    array_push( $arIDs, $arItem["ID"] );
}

// получаем массив свойств
$arProps = array();
CIBlockElement::GetPropertyValuesArray(
    $arProps,
    $arItem["IBLOCK_ID"],
    array(
        "ID" => $arIDs
    )
);

// добавляем к arResult
foreach($arResult["ITEMS"] as &$arItem){

    $arItem["CONTENT"] = htmlspecialcharsBack( $arProps[ $arItem["ID"] ]["content"]["VALUE"]["TEXT"] );
    $arItem["BG_URL"] = CFile::GetPath( $arProps[ $arItem["ID"] ]["background"]["VALUE"] );
}

?>