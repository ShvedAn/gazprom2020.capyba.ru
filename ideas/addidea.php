<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Добавление идеи");
//?><!--<!----><?//$APPLICATION->IncludeComponent("bitrix:iblock.element.add", "addidea", Array(
//	"AJAX_MODE" => "N",	// Включить режим AJAX
//		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
//		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
//		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
//		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
//		"ALLOW_DELETE" => "Y",	// Разрешать удаление
//		"ALLOW_EDIT" => "Y",	// Разрешать редактирование
//		"CUSTOM_TITLE_DATE_ACTIVE_FROM" => "",	// * дата начала *
//		"CUSTOM_TITLE_DATE_ACTIVE_TO" => "",	// * дата завершения *
//		"CUSTOM_TITLE_DETAIL_PICTURE" => "",	// * подробная картинка *
//		"CUSTOM_TITLE_DETAIL_TEXT" => "",	// * подробный текст *
//		"CUSTOM_TITLE_IBLOCK_SECTION" => "",	// * раздел инфоблока *
//		"CUSTOM_TITLE_NAME" => "",	// * наименование *
//		"CUSTOM_TITLE_PREVIEW_PICTURE" => "",	// * картинка анонса *
//		"CUSTOM_TITLE_PREVIEW_TEXT" => "",	// * текст анонса *
//		"CUSTOM_TITLE_TAGS" => "",	// * теги *
//		"DEFAULT_INPUT_SIZE" => "30",	// Размер полей ввода
//		"DETAIL_TEXT_USE_HTML_EDITOR" => "N",	// Использовать упрощенный визуальный редактор для редактирования подробного текста
//		"ELEMENT_ASSOC" => "CREATED_BY",	// Привязка к пользователю
//		"GROUPS" => "",	// Группы пользователей, имеющие право на добавление/редактирование
//		"IBLOCK_ID" => "3",	// Инфоблок
//		"IBLOCK_TYPE" => "IDEA",	// Тип инфоблока
//		"LEVEL_LAST" => "Y",	// Разрешить добавление только на последний уровень рубрикатора
//		"MAX_FILE_SIZE" => "0",	// Максимальный размер загружаемых файлов, байт (0 - не ограничивать)
//		"MAX_LEVELS" => "100000",	// Ограничить кол-во рубрик, в которые можно добавлять элемент
//		"MAX_USER_ENTRIES" => "100000",	// Ограничить кол-во элементов для одного пользователя
//		"NAV_ON_PAGE" => "10",	// Количество элементов на странице
//		"PREVIEW_TEXT_USE_HTML_EDITOR" => "N",	// Использовать упрощенный визуальный редактор для редактирования текста анонса
//		"PROPERTY_CODES" => array(	// Свойства, выводимые на редактирование
//			0 => "3",
//			1 => "4",
//			2 => "5",
//			3 => "6",
//			4 => "7",
//			5 => "8",
//			6 => "9",
//			7 => "10",
//			8 => "11",
//			9 => "12",
//			10 => "NAME",
//			11 => "TAGS",
//		),
//		"PROPERTY_CODES_REQUIRED" => "",	// Свойства, обязательные для заполнения
//		"RESIZE_IMAGES" => "N",	// Использовать настройки инфоблока для обработки изображений
//		"SEF_MODE" => "N",	// Включить поддержку ЧПУ
//		"STATUS" => "ANY",	// Редактирование возможно
//		"STATUS_NEW" => "N",	// Деактивировать элемент после сохранения
//		"USER_MESSAGE_ADD" => "",	// Сообщение об успешном добавлении
//		"USER_MESSAGE_EDIT" => "",	// Сообщение об успешном сохранении
//		"USE_CAPTCHA" => "N",	// Использовать CAPTCHA
//		"COMPONENT_TEMPLATE" => ".default"
//	),
//	false
//);?>
-->
    <div class="col-sm-12">
        <div class="panel">
            <div class="panel-header">
                <h3 class="panel-title">Добавить новую идею</h3>
            </div>
            <div class="panel-body">
                <div class="row form-group">
                    <div class="col-sm-3 text-sm-right">
                        <label class="col-form-label" for="standardInput">Название </label>
                    </div>
                    <div class="col-sm-9">
                        <input class="form-control" id="standardInput" type="text" placeholder="Название идеи">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-3 text-sm-right">
                        <label class="col-form-label" for="standardTextarea">Задача/цель - SMART</label>
                    </div>
                    <div class="col-sm-9">
                        <textarea class="form-control" id="standardTextarea" rows="3" placeholder="точное, краткое и соответствует содержанию"></textarea>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-3 text-sm-right">
                        <label class="col-form-label" for="standardSelect">Подразделение</label>
                    </div>
                    <div class="col-sm-9">
                        <select class="form-control" id="standardSelect">
                            <option>Департамент цифровых технологий</option>
                            <option>Департамент CRM и развития цифровых каналов продаж</option>
                            <option>Департамент коммуникаций и маркетинга</option>
                            <option>Департамент по управлению цифровыми активами</option>
                            <option>Департамент розничных продаж</option>
                            <option>Департамент банковских карт</option>
                            <option>Департамент розничных продуктов и премиального бизнеса</option>
                            <option>Департамент информационных технологий общебанковских процессов</option>
                            <option>Департамент по работе с персоналом</option>
                            <option>Департамент информационных технологий корпоративного бизнеса</option>
                            <option>Департамент стандартных расчетных продуктов</option>
                            <option>Департамент рисков розничного бизнеса</option>
                            <option>Юридический департамент</option>
                            <option>Департамент малого и среднего бизнеса</option>
                            <option>Департамент клиентского сервиса</option>
                            <option>Департамент по работе с ключевыми партнерами</option>
                            <option>Департамент процессинга и платежных технологий</option>
                            <option>Департамент анализа данных</option>

                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-3 text-sm-right">
                        <label class="col-form-label" for="standardSelect">Какую проблему решает</label>
                    </div>
                    <div class="col-sm-9">
                        <select class="form-control" id="standardSelect">
                            <option>Улучшение материально-технических условий труда</option>
                            <option>Улучшение бизнес-процессов</option>
                            <option>Новая услуга</option>
                            <option>Новый продукт</option>
                            <option>Изменение положений и регламентов</option>
                            <option>Улучшение экологии</option>
                            <option>Снижение затрат/издержек</option>
                            <option>Благоустройство</option>
                            <option>Поиск и адаптация сотрудников</option>

                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-3 text-sm-right">
                        <label class="col-form-label" for="standardTextarea">Предполагаемый вариант решения</label>
                    </div>
                    <div class="col-sm-9">
                        <textarea class="form-control" id="standardTextarea" rows="7" placeholder="обязательное множественное поле - описываем шаги"></textarea>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-3 text-sm-right">
                        <label class="col-form-label" for="standardTextarea">Предполагаемый бюджет</label>
                    </div>
                    <div class="col-sm-9">
                        <div class="input-group form-group">
                            <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                            <input class="form-control" type="text" aria-label="Amount (to the nearest dollar)">
                            <div class="input-group-append"><span class="input-group-text">.00</span></div>
                        </div>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-3 text-sm-right">
                        <label class="col-form-label" for="standardTextarea">Выгоды</label>
                    </div>
                    <div class="col-sm-9">
                        <textarea class="form-control" id="standardTextarea" rows="3"></textarea>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-3 text-sm-right">
                    </div>
                <div class="col-sm-9">
                <div class="form-check">
                    <input class="form-check-input" id="defaultCheck1" type="checkbox" value="">
                    <label class="form-check-label" for="defaultCheck1">идея/предложение не снижающее надежность, долговечность и другие показатели качества продукции или ухудшающее условия труда, качество работ и т.п.</label>
                </div>
                </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-3 text-sm-right">
                    </div>
                <div class="col-sm-9">
                <div class="form-check">
                    <input class="form-check-input" id="defaultCheck1" type="checkbox" value="">
                    <label class="form-check-label" for="defaultCheck1">Такая идея не была подана или реализована ранее</label>
                </div>
                </div>
                </div>

                <div class="col-6 col-sm-4 col-md-3 col-xxl">
                <div class="mt-2">
                <button class="btn btn-block btn-secondary" type="button">Отправить</button>
            </div>
            </div>
            </div>
        </div>


    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>