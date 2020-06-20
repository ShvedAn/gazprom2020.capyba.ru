<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Добавление идеи");
?><?$APPLICATION->IncludeComponent("bitrix:iblock.element.add", "addidea", Array(
	"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"ALLOW_DELETE" => "Y",	// Разрешать удаление
		"ALLOW_EDIT" => "Y",	// Разрешать редактирование
		"CUSTOM_TITLE_DATE_ACTIVE_FROM" => "",	// * дата начала *
		"CUSTOM_TITLE_DATE_ACTIVE_TO" => "",	// * дата завершения *
		"CUSTOM_TITLE_DETAIL_PICTURE" => "",	// * подробная картинка *
		"CUSTOM_TITLE_DETAIL_TEXT" => "",	// * подробный текст *
		"CUSTOM_TITLE_IBLOCK_SECTION" => "",	// * раздел инфоблока *
		"CUSTOM_TITLE_NAME" => "",	// * наименование *
		"CUSTOM_TITLE_PREVIEW_PICTURE" => "",	// * картинка анонса *
		"CUSTOM_TITLE_PREVIEW_TEXT" => "",	// * текст анонса *
		"CUSTOM_TITLE_TAGS" => "",	// * теги *
		"DEFAULT_INPUT_SIZE" => "30",	// Размер полей ввода
		"DETAIL_TEXT_USE_HTML_EDITOR" => "N",	// Использовать упрощенный визуальный редактор для редактирования подробного текста
		"ELEMENT_ASSOC" => "CREATED_BY",	// Привязка к пользователю
		"GROUPS" => "",	// Группы пользователей, имеющие право на добавление/редактирование
		"IBLOCK_ID" => "3",	// Инфоблок
		"IBLOCK_TYPE" => "IDEA",	// Тип инфоблока
		"LEVEL_LAST" => "Y",	// Разрешить добавление только на последний уровень рубрикатора
		"MAX_FILE_SIZE" => "0",	// Максимальный размер загружаемых файлов, байт (0 - не ограничивать)
		"MAX_LEVELS" => "100000",	// Ограничить кол-во рубрик, в которые можно добавлять элемент
		"MAX_USER_ENTRIES" => "100000",	// Ограничить кол-во элементов для одного пользователя
		"NAV_ON_PAGE" => "10",	// Количество элементов на странице
		"PREVIEW_TEXT_USE_HTML_EDITOR" => "N",	// Использовать упрощенный визуальный редактор для редактирования текста анонса
		"PROPERTY_CODES" => array(	// Свойства, выводимые на редактирование
			0 => "3",
			1 => "4",
			2 => "5",
			3 => "6",
			4 => "7",
			5 => "8",
			6 => "9",
			7 => "10",
			8 => "11",
			9 => "12",
			10 => "NAME",
			11 => "TAGS",
		),
		"PROPERTY_CODES_REQUIRED" => "",	// Свойства, обязательные для заполнения
		"RESIZE_IMAGES" => "N",	// Использовать настройки инфоблока для обработки изображений
		"SEF_MODE" => "N",	// Включить поддержку ЧПУ
		"STATUS" => "ANY",	// Редактирование возможно
		"STATUS_NEW" => "N",	// Деактивировать элемент после сохранения
		"USER_MESSAGE_ADD" => "",	// Сообщение об успешном добавлении
		"USER_MESSAGE_EDIT" => "",	// Сообщение об успешном сохранении
		"USE_CAPTCHA" => "N",	// Использовать CAPTCHA
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>