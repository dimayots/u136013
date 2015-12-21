<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("appointments");
?><br></br>
<h2>
<?$APPLICATION->IncludeComponent(
	"appointment",
	"",
	Array(
	)
);?> </h2><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>