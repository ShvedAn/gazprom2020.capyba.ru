<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Идеи");
?>
<?$APPLICATION->IncludeComponent("gazprom:idea.list", "", "", false);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>