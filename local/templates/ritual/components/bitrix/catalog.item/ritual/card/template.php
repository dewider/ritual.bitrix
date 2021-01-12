<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $item
 * @var array $actualItem
 * @var array $minOffer
 * @var array $itemIds
 * @var array $price
 * @var array $measureRatio
 * @var bool $haveOffers
 * @var bool $showSubscribe
 * @var array $morePhoto
 * @var bool $showSlider
 * @var bool $itemHasDetailUrl
 * @var string $imgTitle
 * @var string $productTitle
 * @var string $buttonSizeClass
 * @var CatalogSectionComponent $component
 */
?>
<li>
    <a href="<?=$item['DETAIL_PAGE_URL']?>" class="image-wrapper">
        <img src="<?=$item['PREVIEW_PICTURE']['SRC']?>" alt="catalog">
    </a>
    <h2><?=$productTitle?></h2>
    <div class="descr"><?=$item['PREVIEW_TEXT'];?></div>
    <div class="price product-price" data-product-id="<?=$item['ID']?>">
        <?=$price['PRINT_RATIO_PRICE'];?>
    </div>
    <div class="invisibly">
		<?if( $item['OFFERS'] ):?>
        <div class="size_wrapper">
            <h6><?$item["PROPERTIES"]["offers_title"]["VALUE"];?>.</h6>
            <div class="size" data-product-id="<?=$item['ID']?>">

				<?foreach( getOffersVar( $item ) as $offer ):?>
                <div
					class="size_item"
					data-id="<?=$offer["ID"];?>"
					data-price="<?=$offer["PRICE"];?>"
					data-qty="<?=$offer["QTY"];?>">
						<?=$offer["TITLE"];?>
				</div>
				<?endforeach;?>
            </div>
        </div>
		<?endif;?>
        <div class="qty_wrapper">
            <div class="qty" data-product-id="<?=$item['ID']?>">
                <input type="number" value="1" step="1" min="1">
                <button class="up"><i class="fa fa-angle-right" aria-hidden="true"></i></button>
                <button class="down"><i class="fa fa-angle-left" aria-hidden="true"></i></button>
            </div>

            <div class="btn_wrapper">
                <button class="btn to-cart" data-product-id="<?=$item['ID']?>"><?=$arParams['MESS_BTN_ADD_TO_BASKET']?></button>
            </div>
        </div>
    </div>
</li>