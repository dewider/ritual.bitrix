<?if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();
/**
 * @global array $arParams
 * @global CUser $USER
 * @global CMain $APPLICATION
 * @global string $cartId
 */
?>
<div class="shopping_cart">
	<a href="<?= $arParams['PATH_TO_BASKET'] ?>">
		<img src="<?=SITE_TEMPLATE_PATH?>/img/icons/shopping-cart%20(1).png" alt="cart">
	</a>
	<a href="<?= $arParams['PATH_TO_BASKET'] ?>">
		<span>Корзина(<?=$arResult['NUM_PRODUCTS']?>)</span>
	</a>
</div>