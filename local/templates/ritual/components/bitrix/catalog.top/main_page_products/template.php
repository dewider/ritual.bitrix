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
                    <a href="/product.php" class="tab_item">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/product.png" alt="product">
                        <h4>Венок 1,2 метра</h4>
                        <p class="descr">
                            Комбинированный с живыми цветами “Стандарт”
                        </p>
                        <p class="price">
                            13 990
                            <i class="fa fa-rub" aria-hidden="true"></i>
                        </p>
                        <button class="btn">Узнать подробнее</button>
                    </a>
                </div>
                <div class="tab" id="tab2" style="display: none">
                    <a href="/product.php" class="tab_item">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/product.png" alt="product">
                        <h4>Венок 1,2 метра</h4>
                        <p class="descr">
                            Комбинированный с живыми цветами “Стандарт”
                        </p>
                        <p class="price">
                            13 990
                            <i class="fa fa-rub" aria-hidden="true"></i>
                        </p>
                        <button class="btn">Узнать подробнее</button>
                    </a>
                    <a href="/product.php" class="tab_item">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/product.png" alt="product">
                        <h4>Венок 1,2 метра</h4>
                        <p class="descr">
                            Комбинированный с живыми цветами “Стандарт”
                        </p>
                        <p class="price">
                            13 990
                            <i class="fa fa-rub" aria-hidden="true"></i>
                        </p>
                        <button class="btn">Узнать подробнее</button>
                    </a>
                    <a href="/product.php" class="tab_item">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/product.png" alt="product">
                        <h4>Венок 1,2 метра</h4>
                        <p class="descr">
                            Комбинированный с живыми цветами “Стандарт”
                            fgdfhghfgjjfgj
                            ghdghgh
                            ghghdghgdh
                        </p>
                        <p class="price">
                            13 990
                            <i class="fa fa-rub" aria-hidden="true"></i>
                        </p>
                        <button class="btn">Узнать подробнее</button>
                    </a>
                    <a href="/product.php" class="tab_item">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/product.png" alt="product">
                        <h4>Венок 1,2 метра</h4>
                        <p class="descr">
                            Комбинированный с живыми цветами “Стандарт”
                        </p>
                        <p class="price">
                            13 990
                            <i class="fa fa-rub" aria-hidden="true"></i>
                        </p>
                        <button class="btn">Узнать подробнее</button>
                    </a>
                </div>
                <div class="tab" id="tab3" style="display: none">
                    <a href="/product.php" class="tab_item">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/product.png" alt="product">
                        <h4>Венок 1,2 метра</h4>
                        <p class="descr">
                            Комбинированный с живыми цветами “Стандарт”
                        </p>
                        <p class="price">
                            13 990
                            <i class="fa fa-rub" aria-hidden="true"></i>
                        </p>
                        <button class="btn">Узнать подробнее</button>
                    </a>
                    <a href="/product.php" class="tab_item">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/product.png" alt="product">
                        <h4>Венок 1,2 метра</h4>
                        <p class="descr">
                            Комбинированный с живыми цветами “Стандарт”
                        </p>
                        <p class="price">
                            13 990
                            <i class="fa fa-rub" aria-hidden="true"></i>
                        </p>
                        <button class="btn">Узнать подробнее</button>
                    </a>
                    <a href="/product.php" class="tab_item">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/product.png" alt="product">
                        <h4>Венок 1,2 метра</h4>
                        <p class="descr">
                            Комбинированный с живыми цветами “Стандарт”
                            fgdfhghfgjjfgj
                            ghdghgh
                            ghghdghgdh
                        </p>
                        <p class="price">
                            13 990
                            <i class="fa fa-rub" aria-hidden="true"></i>
                        </p>
                        <button class="btn">Узнать подробнее</button>
                    </a>
                    <a href="/product.php" class="tab_item">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/product.png" alt="product">
                        <h4>Венок 1,2 метра</h4>
                        <p class="descr">
                            Комбинированный с живыми цветами “Стандарт”
                        </p>
                        <p class="price">
                            13 990
                            <i class="fa fa-rub" aria-hidden="true"></i>
                        </p>
                        <button class="btn">Узнать подробнее</button>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>
<!--SECTION MAIN PAGE PRODUCTS END-->

<?	
}
?>