<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>

<ul class="footer_list">
<?
	$itemIndex = 0;
	foreach($arResult as $arItem):
		if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
			continue;

		if( $itemIndex > 7 ):
	?>
		</ul><ul class="footer_list last">

	<?
		$itemIndex = 0;
		endif;
	?>
		<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
	<?
	$itemIndex++;
	endforeach;
?>
	<li><a href="#" class="articles">Все статьи</a></li>
</ul>

<?endif?>