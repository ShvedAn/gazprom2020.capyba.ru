<?
require_once( $_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_admin_before.php" );
require_once( $_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_admin_after.php" );

// не задокументированный функционал фреймворка по генерации API.
$APPLICATION->IncludeComponent("bitrix:rest.marketplace.localapp", "", array(),
    false,
    array()
);

require( $_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_admin.php" );