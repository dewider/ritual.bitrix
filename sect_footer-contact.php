<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="phone">
    <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/aroundtheclock.png" alt="phone">
    <?$APPLICATION->IncludeComponent(
        "bitrix:main.include",
        "",
        Array(
            "AREA_FILE_SHOW" => "sect", 
            "AREA_FILE_SUFFIX" => "phone-link", 
            "AREA_FILE_RECURSIVE" => "Y", 
            "EDIT_TEMPLATE" => "standard.php" 
        )
    );?>
</div>
<div class="work_time">
    <p>
        Круглосуточная справочная
    </p>
</div>