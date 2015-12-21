<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

	<!-- <? echo '<div style="background-color:#fff;"><pre>' . print_r($arResult, "true"). '</pre></div>'; ?> -->

<?if (!empty($arResult)):?>
	<?foreach($arResult["ITEMS"] as $key => $arItem):?>
		<h1><br><b><? echo $arItem["NAME"]; ?> </b></h1>
		<h2><br><? echo $arItem["PREVIEW_TEXT"]; ?></h2>
		<h2><br><b><? echo $arItem["PROPERTIES"]["PRICE"]["VALUE"]; ?> </b></br></h2>
	<?endforeach;?>
<?endif?>