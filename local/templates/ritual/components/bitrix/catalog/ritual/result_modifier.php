<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

// получение текущего раздела
$dbSection = CIBlockSection::GetList(
    array(),
    array( "CODE" => $arResult["VARIABLES"]["SECTION_CODE"])
);

if( $arSection = $dbSection->Fetch() ){

    //получаем ID
    $sectionId = $arSection["ID"];
    $iblockId = $arSection["IBLOCK_ID"];
}

// получение корневого раздела
$navChain = CIBlockSection::GetNavChain(
    $iblockId,
    $sectionId,
    array(),
    true
);

foreach( $navChain as $navItem ){

    if( $navItem["DEPTH_LEVEL"] === "1" ){

        $arResult["ROOT_SECTION_CODE"] = $navItem["CODE"];
        $arResult["SECTION_TITLE"] = $navItem["NAME"];
    }
}