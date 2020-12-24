<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<!--SECTION MAIN PAGE BANNER START-->
<section class="main_page_banner_wrapper">
    <div class="main_page_banner_carousel">
    <?foreach($arResult["ITEMS"] as $arItem):?>

        <div class="carousel_item">
            <img src="<?=$arItem["BG_URL"]?>" alt="banner">
            <div class="container">
                <div class="carousel_content_wrapper">
                <?=$arItem["CONTENT"]?>
                </div>
            </div>

        </div>
        
    <?endforeach;?>
    </div>
</section>
<!--SECTION MAIN PAGE BANNER END-->
