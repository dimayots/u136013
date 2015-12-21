<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("appointments");
?><br></br>
<h1>Добавить запись на прием</h1>
<h2>
<?$APPLICATION->IncludeComponent(
	"appointment",
	"",
	Array(
	)
);?> </h2><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>