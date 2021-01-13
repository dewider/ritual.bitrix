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
$this->setFrameMode(true);

$this->addExternalJs( SITE_TEMPLATE_PATH . "/assest/wnumb/wNumb.min.js");
$this->addExternalCss( SITE_TEMPLATE_PATH . "/assest/nouislider/nouislider.css");
$this->addExternalJs( SITE_TEMPLATE_PATH . "/assest/nouislider/nouislider.min.js");
?>

<div class="content_item">
    <h4>Категории</h4>
    <ul class="categories">
        <li><a href="#">Искусственные</a></li>
        <li><a href="#" class="active">Из живых цветов</a></li>
        <li><a href="#">Корзины искусственные</a></li>
        <li><a href="#">Траурные композиции</a></li>
        <li><a href="#"> Ленты на венок</a></li>
    </ul>

    <div class="form_wrapper">
    <form name="<?echo $arResult["FILTER_NAME"]."_form"?>" action="<?echo $arResult["FORM_ACTION"]?>" method="get" class="smartfilter">
            <div class="forma">

            <?foreach( $arResult["ITEMS"] as $key=>$arItem ):

                if(isset($arItem["PRICE"])):
                    if ($arItem["VALUES"]["MAX"]["VALUE"] - $arItem["VALUES"]["MIN"]["VALUE"] <= 0)
                        continue;
                    
                    $fromPrice = $arItem["VALUES"]["MIN"]["HTML_VALUE"] ? $arItem["VALUES"]["MIN"]["HTML_VALUE"] : $arItem["VALUES"]["MIN"]["VALUE"];
                    $toPrice = $arItem["VALUES"]["MAX"]["HTML_VALUE"] ? $arItem["VALUES"]["MAX"]["HTML_VALUE"] : $arItem["VALUES"]["MAX"]["VALUE"];
                    ?>

                    <h4>Стоимость</h4>
	                <div class="form_group_rage bx-filter-parameters-box">
                        <span class="bx-filter-container-modef"></span>
	                    <label for="filter-price-from">
	                        <input  type="text"
                                    style="display: none"
                                    class="filter-price-from-hidden"
                                    name="<?echo $arItem["VALUES"]["MIN"]["CONTROL_NAME"]?>"
                                    id="<?= $arItem["VALUES"]["MIN"]["CONTROL_ID"]; ?>"
                                    value="<?=$fromPrice?>"
                            />
	                        <input  type="text" class="filter-price-from">
	                    </label>

                        <span>-</span>
                        <label for="filter-price-to">
                            <input  type="text"
                                    style="display: none"
                                    class="filter-price-to-hidden"
                                    name="<?echo $arItem["VALUES"]["MAX"]["CONTROL_NAME"]?>"
                                    id="<?echo $arItem["VALUES"]["MAX"]["CONTROL_ID"]?>"
                                    value="<?=$toPrice?>"
                            />
                            <input type="text" class="filter-price-to">
                        </label>

                    </div>

                    <div id="price-range"></div>
                
                    <?
					$jsParams["MAX_PRICE"] = $arItem["VALUES"]["MAX"]["VALUE"];
                    $jsParams["MIN_PRICE"] = $arItem["VALUES"]["MIN"]["VALUE"];
                endif;
            endforeach;
			?>

				<?foreach( $arResult["ITEMS"] as $arItem ):
					if( isset($arItem["PRICE"]) ){
							continue;
                    }
                ?>

                <h4><?=$arItem['NAME']?></h4>
                    <?foreach( $arItem['VALUES'] as $arValue ):?>
                    <div class="form_group_checkbox bx-filter-parameters-box">
                    <span class="bx-filter-container-modef"></span>
                        <input type="checkbox"
                               id="<?= $arValue["CONTROL_ID"]; ?>"
                               name="<?= $arValue["CONTROL_NAME"]; ?>"
                               value="<?= $arValue["HTML_VALUE"]; ?>"
                               <?= $arValue["CHECKED"] ? 'checked="checked"' : ''; ?>
                               onclick="smartFilter.click(this)"
                        />
                        <label for="<?= $arValue["CONTROL_ID"]; ?>"
                               <?= $arValue["DISABLED"] ? 'disabled': '' ?>
                               data-role="label_<?=$arValue["CONTROL_ID"]?>">
                            <span><i class="fa fa-check" aria-hidden="true"></i></span>
                            <?= $arValue["VALUE"]; ?>см
                        </label>
                    </div>
                    <?endforeach;?>

				<?endforeach;?>

                <div class="btn_form_wrapper bx-filter-block">
                    <input
                        class="btn"
					    type="submit"
					    id="set_filter"
					    name="set_filter"
					    value="<?=GetMessage("CT_BCSF_SET_FILTER")?>"
					/>
                    <input
						class="btn grey"
						type="submit"
						id="del_filter"
						name="del_filter"
						value="<?=GetMessage("CT_BCSF_DEL_FILTER")?>"
					/>
                    <?//*?>
                    <div class="bx-filter-popup-result <?if ($arParams["FILTER_VIEW_MODE"] == "VERTICAL") echo $arParams["POPUP_POSITION"]?>" id="modef" <?if(!isset($arResult["ELEMENT_COUNT"])) echo 'style="display:none"';?> style="display: inline-block;">
				    	<?echo GetMessage("CT_BCSF_FILTER_COUNT", array("#ELEMENT_COUNT#" => '<span id="modef_num">'.intval($arResult["ELEMENT_COUNT"]).'</span>'));?>
				    	<span class="arrow"></span>
				    	<br/>
				    	<a href="<?echo $arResult["FILTER_URL"]?>" target=""><?echo GetMessage("CT_BCSF_FILTER_SHOW")?></a>
				    </div>
                    <?//*/?>
                </div>
                
            </div>
        </form>
    </div>
</div>
<script type="text/javascript">
	var smartFilter = new JCSmartFilter('<?echo CUtil::JSEscape($arResult["FORM_ACTION"])?>', '<?=CUtil::JSEscape($arParams["FILTER_VIEW_MODE"])?>', <?=CUtil::PhpToJSObject($arResult["JS_FILTER_PARAMS"])?>);
    var FILTER_PARAMS = <?=CUtil::PhpToJSObject($jsParams, false, true)?>;
</script>