<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>

<!--FOOTER MENU START-->
<div class="footer_menu_wrapper">
    <ul class="footer_menu">
	<?
	foreach($arResult as $arItem):
		if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
			continue;
	?>
		<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>

	<?endforeach?>
	</ul>
</div>
<!--FOOTER MENU END-->

<?endif?>