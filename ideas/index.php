<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Идеи");
?>

    <section class="section-sm">
        <div class="container-fluid">
    <div class="panel">
        <div class="panel-header">
<?
// Изменение отступов в фильтре при появлении дополнительной кнопки.
if (!empty($_GET)) {
    $size = 4;
}
else{
    $size = 5;
}
?>
            <form method="get">
            <div class="row row-30">
                <div class="col-lg-<?=$size?>">
                    <select class="form-control" name="filter-category">
                        <option value="t1">Департамент цифровых технологий</option>
                        <option value="t1">Департамент CRM и развития цифровых каналов продаж</option>
                        <option value="t1">Департамент коммуникаций и маркетинга</option>
                        <option value="t1">Департамент по управлению цифровыми активами</option>
                        <option value="t1">Департамент розничных продаж</option>
                        <option value="t1">Департамент банковских карт</option>
                        <option value="t1">Департамент розничных продуктов и премиального бизнеса</option>
                        <option value="t1">Департамент информационных технологий общебанковских процессов</option>
                        <option value="t1">Департамент по работе с персоналом</option>
                        <option value="t1">Департамент информационных технологий корпоративного бизнеса</option>
                        <option value="t1">Департамент стандартных расчетных продуктов</option>
                        <option value="t1">Департамент рисков розничного бизнеса</option>
                        <option value="t1">Юридический департамент</option>
                        <option value="t1">Департамент малого и среднего бизнеса</option>
                        <option value="t1">Департамент клиентского сервиса</option>
                        <option value="t1">Департамент по работе с ключевыми партнерами</option>
                        <option value="t1">Департамент процессинга и платежных технологий</option>
                        <option value="t1">Департамент анализа данных</option>
                    </select>
                </div>
                <div class="col-lg-<?=$size?>">
                    <select class="form-control" name="filter-status">
                        <option value="t2">Улучшение материально-технических условий труда</option>
                        <option value="t2">Улучшение бизнес-процессов</option>
                        <option value="t2">Новая услуга</option>
                        <option value="t2">Новый продукт</option>
                        <option value="t2">Изменение положений и регламентов</option>
                        <option value="t2">Улучшение экологии</option>
                        <option value="t2">Снижение затрат/издержек</option>
                        <option value="t2">Благоустройство</option>
                        <option value="t2">Поиск и адаптация сотрудников</option>
                    </select>
                </div>
                <div class="col-lg-2">
                    <button class="btn btn-block btn-secondary" type="submit">Фильтровать</button>
                </div>
                <?if ($size == 4) {?>
                <div class="col-lg-2">
                    <a href="/ideas/">
                    <button class="btn btn-block btn-secondary" type="button">Сбросить</button>
                    </a>
                </div>
                <?}?>
            </div>
            </form>
        </div>
        <?$APPLICATION->IncludeComponent(
        	"gazprom:idea.list",
        	".default",
        	array(
        		"COMPONENT_TEMPLATE" => ".default",
        		"IBLOCK_TYPE" => "IDEA",
        		"IBLOCK_ID" => "3",
        		// Данные приводтся в безопасный вид средтсвами Ядра. Отсутствие обработки данных в коде это не ошибка.
        		"FILTER" => $_REQUEST
        	),
        	false
        );?>

    </div>
        </div>
    </section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>