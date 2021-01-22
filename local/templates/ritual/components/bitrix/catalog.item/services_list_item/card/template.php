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
<a href="<?=$item['DETAIL_PAGE_URL']?>" class="tab_item">
    <?if($arParams["DISPLAY_TYPE"] === "vertical"):?>
        <h4><?=$productTitle?></h4>
        <?=$item["PROPERTIES"]["features"]["~VALUE"]["TEXT"];?>
    <?else:?>
    <div class="descr">
        <h4><?=$productTitle?></h4>
        <p>
            <?=$item['PREVIEW_TEXT'];?>
        </p>
    </div>
    <?endif;?>
    <div class="price">
        <?=$price['PRINT_RATIO_PRICE'];?>
    </div>
</a>