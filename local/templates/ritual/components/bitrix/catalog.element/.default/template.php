<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogSectionComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 * @var string $templateFolder
 */

define( 'MAX_PRODUCT_SLIDE', 5);
?>
<!--SECTION PRODUCT PAGE CONTENT START-->
<section class="product_page_content_wrapper">
    <div class="container">
	<?$APPLICATION->IncludeComponent(
		"bitrix:breadcrumb",
		"",
	Array(),
	false
    );?>
        <h2><?=$arResult["NAME"];?></h2>
    </div>
    <div class="product_page_content">
        <div class="container">
            <div class="content_list">
                <div class="content_item">
                    <div class="img_wrapper">
                        <img src="<?=$arResult['PREVIEW_PICTURE']['SRC'];?>" alt="product" class="active">
                        <? 
                            for( $i = 2; $i <= MAX_PRODUCT_SLIDE; $i++){
                                if( $arResult["PROPS"]["img$i"]["VALUE"] ){
                                    echo '<img src="'.CFile::GetPath( $arResult["PROPS"]["img$i"]["VALUE"] ).'" alt="product">';
                                }
                            }
                        ?>
                    </div>
                    <div class="product_carousel">
                        <div class="carousel_item">
                            <img src="<?=$arResult['PREVIEW_PICTURE']['SRC'];?>" alt="product">
                        </div>
                        <? 
                            for( $i = 2; $i <= MAX_PRODUCT_SLIDE; $i++){
                                if( $arResult["PROPS"]["img$i"]["VALUE"] ):
                                ?>
                                <div class="carousel_item">
                                    <img src="<?=CFile::GetPath( $arResult["PROPS"]["img$i"]["VALUE"] );?>" alt="product">
                                </div>
                                <?endif;
                            }
                        ?>
                    </div>
                </div>
                <div class="content_item">
                    <div class="code_availability_wrapper">
                        <div class="code">
                            <p>
                                Артикул: <span class="code_number"><?=$arResult['ID'];?></span>
                            </p>
                        </div>
                        <div class="availability">
                            <?=( $arResult['PRODUCT']['AVAILABLE'] == 'Y' ? "есть в наличии" : "нет в наличии");?>
                        </div>
                    </div>
                    <div class="price">
                        <?=$arResult["DEFAULT_PRICE"]["DISCOUNT_PRICE"];?>
                        <i class="fa fa-rub" aria-hidden="true"></i>
                    </div>
                    <ul class="features">
                        <? foreach( $arResult["PROPS"] as $propsKey => $propsItem ): ?>

                            <? if(
                                !preg_match('/^img\d+$/', $propsKey) &&
                                $propsItem["VALUE"] &&
                                !preg_match('/^desc$/', $propsKey)
                            ): ?>
                                <li><span><?=$propsItem["NAME"];?>: <?=$propsItem["VALUE"];?></span></li>
                            <?endif;?>
                        <?endforeach;?>
                    </ul>
                    <p class="descr">
                    <?=$arResult['DETAIL_TEXT'];?>
                    </p>
                    <div class="size_wrapper">
                        <h6>Высота, см.</h6>
                        <div class="size">
                            <div class="size_item">
                                80
                            </div>
                            <div class="size_item active">
                                100
                            </div>
                            <div class="size_item">
                                120
                            </div>
                            <div class="size_item">
                                160
                            </div>
                        </div>
                    </div>
                    <div class="qty_wrapper">
                        <div class="qty">
                            <input type="number" value="1" step="1" min="1" max="10">
                            <button class="up"><i class="fa fa-angle-right" aria-hidden="true"></i></button>
                            <button class="down"><i class="fa fa-angle-left" aria-hidden="true"></i></button>
                        </div>

                        <div class="btn_wrapper">
                            <button class="btn">В корзину</button>
                            <button class="btn grey">Купить в 1 клик</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!--SECTION PRODUCT PAGE CONTENT END-->

<!--SECTION PRODUCT PAGE DESCRIPTION START-->
<section class="product_page_description_wrapper">
    <div class="container">
        <div class="product_page_description">
            <?
            $deliveryTabClass = "active";
            $deliveryTabStyle = '';
            if( $arResult['PROPS']['desc']['VALUE'] ){
                $deliveryTabClass = '';
                $deliveryTabStyle = 'display: none';
            }
            ?>
            <ul class="prices_navigation_tabs">
                <?if( $deliveryTabClass == '' ):?>
                <li><a href="#tab1" class="active"><span>Описание</span></a></li>
                <?endif;?>
                <li><a href="#tab2" class="<?=$deliveryTabClass;?>"><span>Доставка</span></a></li>
            </ul>

            <div class="prices_content_tabs">
            <?if( $deliveryTabClass == '' ):?>
                <div class="tab" id="tab1">
                    <p>
                    <?=$arResult['PROPS']['desc']['VALUE']['TEXT'];?>
                    </p>
                </div>
            <?endif;?>

                <div class="tab" id="tab2" style="<?=$deliveryTabStyle;?>">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        At dicta ducimus impedit maxime minus sequi totam! Aliquam
                        animi aperiam architecto, beatae consectetur dolorum
                        error est et eveniet expedita in inventore itaque libero
                        modi neque nobis odio officia officiis omnis porro possimus
                        praesentium quam quo rerum sapiente sint temporibus voluptate
                        voluptates!
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--SECTION PRODUCT PAGE DESCRIPTION END-->