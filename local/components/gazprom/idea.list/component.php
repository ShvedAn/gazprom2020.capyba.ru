<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
use Bitrix\Main\Loader;

if(!Loader::includeModule("iblock"))
{
    return;
}
///@todo доработать список.
$arSelect = Array("ID", "NAME", "PROPERTY_15");
$arFilter = Array("IBLOCK_ID" => IntVal($arParams["IBLOCK_ID"]), "ACTIVE"=>"Y");
// Из-за небольшого количества демо данных намеренно сэмитирируем работу фильтра
$count = false;
if($arParams["FILTER"]){
    $count = Array("nTopCount"=>2);
}

$res = CIBlockElement::GetList(Array(), $arFilter, false, $count, $arSelect);
while($arFields = $res->GetNext())
{
    $arResult[] = $arFields;
}

$this->includeComponentTemplate();
?>