<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

$dbSection = CIBlockSection::GetList(
    array(),
    array( "CODE" => $arResult["VARIABLES"]["SECTION_CODE"])
);

if( $arSection = $dbSection->Fetch() )
    $arResult["SECTION_TITLE"] = $arSection["NAME"];