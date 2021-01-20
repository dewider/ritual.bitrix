<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

// получаем список подразделов
$dbSections  = CIBlockSection::GetList(
    array(),
    array(
        "DEPTH_LEVEL"   => 2,
        "IBLOCK_CODE"   => "info",
        "SECTION_ID"    => 43
    ),
);
$arResult["SECTIONS"] = array();
while( $arSection = $dbSections->GetNext() ){
    array_push( $arResult["SECTIONS"], $arSection );
}

// получаем массив элементов вида [SECTIO_ID] => [Элементы подкаталога]
$arResult["ITEMS_BY_SECTIONS"] = array();
foreach( $arResult["ITEMS"] as $arItem ){
    $sID = $arItem["IBLOCK_SECTION_ID"];

    if( !isset( $arResult["ITEMS_BY_SECTIONS"][$sID] ) )
        $arResult["ITEMS_BY_SECTIONS"][$sID] = array();

    array_push($arResult["ITEMS_BY_SECTIONS"][$sID], $arItem);
}
?>