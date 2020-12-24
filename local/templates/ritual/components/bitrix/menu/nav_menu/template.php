<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>

<!--MAIN MENU START-->
<div class="main_menu_wrapper">
    <a href="#" class="mobile_menu_btn">
        <span></span>
        <span></span>
        <span></span>
    </a>
    <div class="main_menu_block">
        <ul class="main_menu">
		<?
		foreach($arResult as $arItem):
			if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
				continue;
		?>
			<?if($arItem["SELECTED"]):?>
				<li><a href="<?=$arItem["LINK"]?>" class="active"><?=$arItem["TEXT"]?></a></li>
			<?else:?>
				<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
			<?endif?>
			
		<?endforeach?>
		</ul>
    </div>
</div>
<!--MAIN MENU END-->
<?endif?>