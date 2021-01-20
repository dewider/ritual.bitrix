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

$col_height = 4;
?>

<?foreach($arResult["SECTIONS"] as $arSection):?>
    <?$i = 0;?>

    <h2><?=$arSection["NAME"]?></h2>
    <div class="morgues_list_wrapper">
        <ul class="morgues_list">
            <?foreach($arResult["ITEMS_BY_SECTIONS"][ $arSection["ID"] ] as $arItem):?>
                <?if( $i >= $col_height ):
                    $i = 0;
                ?>
                    </ul>
                    <ul class="morgues_list">
                <?endif;?>
                
                <li><a href="#"><?=$arItem["NAME"]?></a></li>
                
                <?$i++?>
                
            <?endforeach;?>
        </ul>
    </div>

<?endforeach;?>
