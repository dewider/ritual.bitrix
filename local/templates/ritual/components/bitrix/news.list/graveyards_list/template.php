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

$col_num = 4;
$col = 0;
?>

<div class="cemeteries_list_wrapper">
    <div class="cemeteries">
        <?$current_char = mb_substr($arResult["ITEMS"][0]["NAME"], 0, 1);?>
        <h2><?=$current_char?></h2>
        <ul class="cemeteries_list">
        <?foreach($arResult["ITEMS"] as $arItem):?>
            <?
                $f_char = mb_substr($arItem["NAME"], 0, 1);
                if( $f_char !== $current_char ):
                    $current_char = $f_char;
                    $col++;
                ?>
                    </ul>
                    </div>

                    <?if( $col >= $col_num ):
                        $col = 0;
                    ?>
                        </div>
                        <div class="cemeteries_list_wrapper">
                    <?endif?>

                    <div class="cemeteries">
                    <h2><?=$current_char?></h2>
                    <ul class="cemeteries_list">

                <?endif;?>

                <li><a href="#"><?=$arItem["NAME"];?></a></li>

            <?endforeach;?>
        </ul>
    </div>
</div>