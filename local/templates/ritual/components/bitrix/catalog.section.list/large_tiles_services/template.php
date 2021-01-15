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

	<div class="main_services_page_list">
		<?
		foreach ($arResult['SECTIONS'] as &$arSection):

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
			<div class="services_item">
            	<a href="<?=$arSection['SECTION_PAGE_URL'];?>">
            	    <img src="<?=$arSection['PICTURE']['SRC'];?>" alt="image">
            	    <p><?=$arSection['PICTURE']['TITLE'];?></p>
            	</a>
        	</div>
		<?endforeach;?>

    </div>

<?endif?>