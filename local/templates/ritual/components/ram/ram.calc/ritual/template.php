<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;

$this->setFrameMode(true);

if (!$arResult) return false;

$this->addExternalCss( SITE_TEMPLATE_PATH . "/assest/select2/select2.min.css");
$this->addExternalJs( SITE_TEMPLATE_PATH . "/assest/select2/select2.min.js");

if ($arParams["TEMPLATE_THEME"] === "other")
{
	$arParams["TEMPLATE_THEME"] = $arResult["ID"];
}

?>
<form>
<div class="calculator_page_content">
	<h4>Гроб</h4>
	<div class="content_list">
		<?
		foreach ($arResult["PROPERTIES"] as $arProperty):
		
			if ($arProperty["TYPE"] === "list"):

				if (!$propertyDisplay) $propertyDisplay = "select";
				?>

				<div class="content_item">
					<h6>Похоронный комплект в гроб</h6>
					<div class="select_wrapper">
						<select class="funeral_calculator" onchange='CRamCalc.OnSelectChange(this);' <?=$arProperty["MULTYPLE"] === "Y" ? "multiple='multiple'" : ""?> name='<?=$arProperty["FIELD_NAME"]?>'>
							<?
							foreach ($arProperty["VALUES"] as $valueID => $arValue):
							
								if ($arValue["ACTIVE"] !== "Y") continue;
							
								$selected = $arValue["CHECKED"] ? "selected='selected'" : "";
							
								?><option <?=$selected?> value="<?=$valueID?>"><?=$arValue["TITLE"]?></option><?
							endforeach;
							?>
						</select>
					</div>
				</div>
						
				<?
			endif;
		
		endforeach;
		?>
	</div>
</div>

<?
if (!empty($arResult["CALCULATIONS"]))
{
	?><div class='ram-calc__calculator-calculations'><?
	foreach ($arResult["CALCULATIONS"] as $calculationID => $arCalculation)
	{
		?><div class='ram-calc__calculation'><div class='ram-calc__calculation-title'><?=$arCalculation["NAME"]?>:</div><div class='ram-calc__calculation-result' data-calculation='<?=$arCalculation["CODE"]?>'>0</div><div class='ram-calc__calculation-measure'><?=$arCalculation["MEASURE"]?></div></div><?
	}
	?></div><?
}
?></form><?
if ($arParams["MULTYPLE"] === "Y")
{
	if (!empty($arResult["CALCULATIONS"]))
	{
		?><div class='ram-calc__calculator-total-calculations'><div class='ram-calc__calculations-title'><?=GetMessage("RAM_CALC_TOTAL_CALCULATIONS")?></div><?
		foreach ($arResult["CALCULATIONS"] as $calculationID => $arCalculation)
		{
			if (!empty($arParams["HIDDEN_CALCULATIONS"]) && in_array($arCalculation["CODE"], $arParams["HIDDEN_CALCULATIONS"])) continue;
			
			?><div class='ram-calc__calculation'><div class='ram-calc__calculation-title'><?=$arCalculation["NAME"]?>:</div><div class='ram-calc__calculation-result' data-calculation='<?=$arCalculation["CODE"]?>'>0</div><div class='ram-calc__calculation-measure'><?=$arCalculation["MEASURE"]?></div></div><?
		}
		?></div><?
	}
}
if ($arParams["ACTION"] === "basket")
{
	?><div class='ram-calc__request'><div class='ram-calc__request-submit'><input onclick='CRamCalc.Submit(this);' type='button' value='<?=$arParams["REQUEST_BASKET_BTN"]?>' /></div></div><?
}
else if ($arParams["ACTION"] === "request")
{
	?><div class='ram-calc__request' id='request-<?=$arResult["ID"]?>'><?
	if (strlen($arParams["REQUEST_DESCRIPTION"]))
	{
		?><div class='ram-calc__request-description'><?=$arParams["REQUEST_DESCRIPTION"]?></div><?
	}
	foreach ($arParams["REQUEST_FIELDS"] as $k => $userField)
	{
		?><div class='ram-calc__request-field'><input type='text' placeholder='<?=trim($userField)?>' data-index='<?=$k?>' name='requestFields[]' /></div><?
	}
	?><div data-consent-place='<?=$arResult["ID"]?>'></div><div class='ram-calc__request-submit'><input onclick='CRamCalc.Submit(this);' type='button' value='<?=$arParams["REQUEST_BTN"]?>' /></div></div><?
}
?></div>
<script type='text/javascript'>
CRamCalc.AddData(
{
	id: "<?=$arResult["ID"]?>",
	title: "<?=$arResult["TITLE"]?>",
	conditions: <?=CUtil::PhpToJSObject($arResult["CONDITIONS"])?>,
	calculations: <?=CUtil::PhpToJSObject($arResult["CALCULATIONS"])?>,
	properties: <?=CUtil::PhpToJSObject($arResult["PROPERTIES"])?>,
	multyple: <?=($arParams["MULTYPLE"] === "Y" ? "true" : "false")?>,
	params: "<?=base64_encode(json_encode(Array("AJAX_URL" => $componentPath."/ajax.php", "AJAX" => "Y", "ACTION" => $arParams["ACTION"], "REQUEST_EMAIL" => $arParams["REQUEST_EMAIL"], "ELEMENT_ID" => $arParams["ELEMENT_ID"], "SERVICE_ID" => $arParams["SERVICE_ID"], "PRICE" => $arParams["PRICE"])))?>"
});
BX.message({"CONFIRM_CALCULATOR_DELETE": "<?=GetMessage("RAM_CALC_CONFIRM_CALCULATOR_DELETE")?>"});
<?
if ($arParams["ACTION"] === "request")
{
	?>CRamCalc.InitPopup({id: "<?=$arResult["ID"]?>", theme: "<?=$arParams["TEMPLATE_THEME"]?>", successMessage: "<?=htmlspecialchars_decode($arParams["REQUEST_SUCCESS"])?>", failMessage: "<?=htmlspecialchars_decode($arParams["REQUEST_FAIL"])?>"});<?
}
else if ($arParams["ACTION"] === "basket")
{
	?>CRamCalc.InitPopup({id: "<?=$arResult["ID"]?>", theme: "<?=$arParams["TEMPLATE_THEME"]?>", successMessage: "<?=htmlspecialchars_decode($arParams["REQUEST_BASKET_SUCCESS"])?>", failMessage: "<?=htmlspecialchars_decode($arParams["REQUEST_BASKET_FAIL"])?>"});<?
}
?>
</script>
<?
if ($arParams["TEMPLATE_THEME"] === $arResult["ID"] && $arParams["COLOR"])
{
	?><style type='text/css'>
		.ram-calc__calculator_theme-<?=$arResult["ID"]?> .ram-calc__tab_active {background-color: <?=$arParams["COLOR"]?>;}
		.ram-calc__calculator_theme-<?=$arResult["ID"]?> .ram-calc__calculation-result {color: <?=$arParams["COLOR"]?>;}
		.ram-calc__calculator_theme-<?=$arResult["ID"]?> .ram-calc__value_noimage input + .ram-calc__value-title:before {border-color: <?=$arParams["COLOR"]?>;}
		.ram-calc__calculator_theme-<?=$arResult["ID"]?> .ram-calc__value_noimage input[type=checkbox] + .ram-calc__value-title:after {border-color: <?=$arParams["COLOR"]?>;}
		.ram-calc__calculator_theme-<?=$arResult["ID"]?> .ram-calc__value_noimage input[type=radio] + .ram-calc__value-title:after {background-color: <?=$arParams["COLOR"]?>;}
		.ram-calc__calculator_theme-<?=$arResult["ID"]?> .ram-calc__value_image input:checked + .ram-calc__value-image {border-color: <?=$arParams["COLOR"]?>;}
		.ram-calc__calculator_theme-<?=$arResult["ID"]?> .ram-calc__range input[type=range]::-webkit-slider-thumb {border-color: <?=$arParams["COLOR"]?>;}
		.ram-calc__calculator_theme-<?=$arResult["ID"]?> .ram-calc__range input[type=range]::-moz-range-thumb {border-color: <?=$arParams["COLOR"]?>;}
		.ram-calc__calculator_theme-<?=$arResult["ID"]?> .ram-calc__range input[type=range]::-ms-thumb {border-color: <?=$arParams["COLOR"]?>;}
		.ram-calc__calculator_theme-<?=$arResult["ID"]?> .ram-calc__request-submit input[type='button'] {background-color: <?=$arParams["COLOR"]?>;}
		.ram-calc__calculator_theme-<?=$arResult["ID"]?> .ram-calc__request-consent input[type='checkbox'] + a:before {border-color: <?=$arParams["COLOR"]?>;}
		.ram-calc__calculator_theme-<?=$arResult["ID"]?> .ram-calc__request-consent input[type='checkbox'] + a:after {border-color: <?=$arParams["COLOR"]?>;}
		.ram-calc__popup-<?=$arResult["ID"]?> a {background-color: <?=$arParams["COLOR"]?>;}
	</style><?
}
?>