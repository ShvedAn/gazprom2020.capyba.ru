<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Список пользователей");
?>

<?
$coin = json_decode(file_get_contents('http://gazprom2020.capyba.ru/api/?apicoin.get={}'));
var_dump($coin->response);
//var_dump(json_decode($coin->response));
?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>