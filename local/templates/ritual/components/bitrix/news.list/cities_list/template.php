<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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

$i = 0;
$col_height = 4;
?>

<ul class="features">
    <?foreach($arResult["ITEMS"] as $arItem):?>
        <?if( $i >= $col_height ):
            $i = 0;
        ?>
            </ul>
            <ul class="features">
        <?endif;?>

        <li><span><?=$arItem["NAME"]?></span></li>

        <?$i++?>

    <?endforeach;?>
</ul>
