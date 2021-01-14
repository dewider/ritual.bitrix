<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
$this->setFrameMode(true);?>

<div class="search_block">
	<form action="<?=$arResult["FORM_ACTION"]?>">
    	<button type="submit" name="s">
    	    <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/search.svg" alt="search">
    	</button>
    	<input type="search" name="q" placeholder="<?=GetMessage("BSF_T_SEARCH_BUTTON");?>">
	</form>
</div>