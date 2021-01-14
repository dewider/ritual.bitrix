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

	<h4>Категории</h4>
    <ul class="categories">
        <?foreach( $arResult["SECTIONS"] as $arSection ):?>
            <li>
                <a  href="<?=$arSection["SECTION_PAGE_URL"]?>"
                    <?=($arSection["CODE"] === $arParams["CURRENT_SECTION_CODE"]) ? 'class="active"' : ''?>
                >
                    <?=$arSection["NAME"]?>
                </a>
            </li>
        <?endforeach;?>
    </ul>

<?endif?>