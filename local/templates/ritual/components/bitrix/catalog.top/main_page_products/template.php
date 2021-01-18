<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogTopComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 * @var string $templateFolder
 */

$this->setFrameMode(true);

if (!empty($arResult['ITEMS']))
{
?>

<!--SECTION MAIN PAGE PRODUCTS START-->
<section class="main_page_products_wrapper">
    <div class="container">
        <div class="prices_content">
            <ul class="prices_navigation_tabs">
                <li><a href="#tab1" class="active"><span>популярные товары</span></a></li>
                <li><a href="#tab2"><span>Рекомендуемые</span></a></li>
                <li><a href="#tab3"><span>Товары по акции</span></a></li>
            </ul>

            <div class="prices_content_tabs">
                <div class="tab" id="tab1">

                <?foreach ($arResult['ITEMS'] as $key => $arItem) {?>

                    <a href="<?=$arItem['DETAIL_PAGE_URL'];?>" class="tab_item">
                        <img src="<?=$arItem['PREVIEW_PICTURE']['SRC'];?>" alt="product">
                        <h4><?=$arItem['NAME'];?></h4>
                        <p class="descr">
                        <?=$arItem['PREVIEW_TEXT'];?>
                        </p>
                        <p class="price">
                            <?=$arResult['PRICE_LIST'][$arItem['ID']]["DISCOUNT_PRICE"];?>
                        </p>
                        <button class="btn">Узнать подробнее</button>
                    </a>
                <?}?>
                </div>
                <div class="tab" id="tab2" style="display: none">
                <?foreach ($arResult['RECOMMENDATIONS']['ITEMS'] as $key => $arItem) {?>

                    <a href="<?=$arItem['DETAIL_PAGE_URL'];?>" class="tab_item">
                        <img src="<?=$arItem['PREVIEW_PICTURE_URL']?>" alt="product">
                        <h4><?=$arItem['NAME'];?></h4>
                        <p class="descr">
                        <?=$arItem['PREVIEW_TEXT'];?>
                        </p>
                        <p class="price">
                            <?=$arResult['RECOMMENDATIONS']['PRICE_LIST'][$arItem['ID']]["DISCOUNT_PRICE"];?>
                        </p>
                        <button class="btn">Узнать подробнее</button>
                    </a>

                <?}?>
                </div>
                <div class="tab" id="tab3" style="display: none">

                <?foreach ($arResult['STOCK']['ITEMS'] as $key => $arItem) {?>
                    <a href="<?=$arItem['DETAIL_PAGE_URL'];?>" class="tab_item">
                        <img src="<?=$arItem['PREVIEW_PICTURE_URL']?>" alt="product">
                        <h4><?=$arItem['NAME'];?></h4>
                        <p class="descr">
                        <?=$arItem['PREVIEW_TEXT'];?>
                        </p>
                        <p class="price">
                            <?=$arResult['STOCK']['PRICE_LIST'][$arItem['ID']]["DISCOUNT_PRICE"];?>
                        </p>
                        <button class="btn">Узнать подробнее</button>
                    </a>
                <?}?>

                </div>
            </div>

        </div>
    </div>
</section>
<!--SECTION MAIN PAGE PRODUCTS END-->

<?	
}
?>