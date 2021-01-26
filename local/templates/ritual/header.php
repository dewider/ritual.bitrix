<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Page\Asset;
?>

<!DOCTYPE html>
<html lang="<?= LANGUAGE_ID;?>">

<head>
    <title><? $APPLICATION->ShowTitle(); ?></title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?
    Asset::getInstance()->addCss( "https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" );
    Asset::getInstance()->addCss( "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" );
    // <!-- jQuery -->
    Asset::getInstance()->addJs( SITE_TEMPLATE_PATH . "/assest/jquery/jquery-3.5.1.min.js" );
    // <!-- Slick -->
    Asset::getInstance()->addCss( SITE_TEMPLATE_PATH . "/assest/slick/slick.css" );
    Asset::getInstance()->addJs( SITE_TEMPLATE_PATH . "/assest/slick/slick.min.js" );
    
    Asset::getInstance()->addJs( SITE_TEMPLATE_PATH . "/js/script.js" );
    ?>
    <? $APPLICATION->ShowHead(); ?>
    <?CJSCore::Init(array("popup"));?>
</head>

<body>
<? $APPLICATION->ShowPanel(); ?>
<!--HEADER START-->
<header class="header_wrapper">
    <?$APPLICATION->IncludeComponent(
        "bitrix:main.include",
        "",
        Array(
            "AREA_FILE_SHOW" => "sect", 
            "AREA_FILE_SUFFIX" => "header-top", 
            "AREA_FILE_RECURSIVE" => "Y", 
            "EDIT_TEMPLATE" => "standard.php" 
        )
    );?>
    <div class="main_menu_search_wrapper">
        <div class="container">
            <div class="main_menu_search_block">
                <div class="mobile_menu_bg"></div>
                <?$APPLICATION->IncludeComponent(
                	"bitrix:menu", 
                	"nav_menu", 
                	array(
                		"ALLOW_MULTI_SELECT" => "N",
                		"COMPONENT_TEMPLATE" => "nav_menu",
                		"ROOT_MENU_TYPE" => "top",
                		"MENU_CACHE_TYPE" => "N",
                		"MENU_CACHE_TIME" => "3600",
                		"MENU_CACHE_USE_GROUPS" => "Y",
                		"MENU_CACHE_GET_VARS" => array(
                		),
                		"MAX_LEVEL" => "1",
                		"CHILD_MENU_TYPE" => "top",
                		"USE_EXT" => "N",
                		"DELAY" => "N"
                	),
                	false
                );?>
                <?$APPLICATION->IncludeComponent("bitrix:search.form","",Array(
                        "USE_SUGGEST" => "N",
                        "PAGE" => "#SITE_DIR#search/index.php"
                    )
                );?> 
            </div>
            
        </div>
    </div>

</header>
<!--HEADER END-->


