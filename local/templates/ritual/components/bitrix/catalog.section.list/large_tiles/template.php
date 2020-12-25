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

?>

<?if (0 < $arResult["SECTIONS_COUNT"]):?>

<!--SECTION MAIN PAGE CATALOG START-->
<section class="main_page_catalog_wrapper">
    <div class="container">
        <div class="main_page_catalog">

		<?
		foreach ($arResult['SECTIONS'] as &$arSection):

			if ( $arSection["CODE"] == "recommendation" || $arSection["CODE"] == "stock") continue;
			if (false === $arSection['PICTURE'])
				$arSection['PICTURE'] = array(
					'SRC' => $arCurView['EMPTY_IMG'],
					'ALT' => (
						'' != $arSection["IPROPERTY_VALUES"]["SECTION_PICTURE_FILE_ALT"]
						? $arSection["IPROPERTY_VALUES"]["SECTION_PICTURE_FILE_ALT"]
						: $arSection["NAME"]
					),
					'TITLE' => (
						'' != $arSection["IPROPERTY_VALUES"]["SECTION_PICTURE_FILE_TITLE"]
						? $arSection["IPROPERTY_VALUES"]["SECTION_PICTURE_FILE_TITLE"]
						: $arSection["NAME"]
					)
				);
			?>
			<div class="catalog_item">
                <a href="<?=$arSection['SECTION_PAGE_URL'];?>">
                    <img src="<?=$arSection['PICTURE']['SRC'];?>" alt="catalog">
                </a>
                <p class="title glitch"><?=$arSection['PICTURE']['TITLE'];?></p>
            </div>
			<?endforeach;?>

		</div>
    </div>
</section>
<!--SECTION MAIN PAGE CATALOG END-->

<?endif?>