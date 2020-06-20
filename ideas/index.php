<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Идеи");
?>
<?//$APPLICATION->IncludeComponent(
//	"gazprom:idea.list",
//	".default",
//	array(
//		"COMPONENT_TEMPLATE" => ".default",
//		"IBLOCK_TYPE" => "IDEA",
//		"IBLOCK_ID" => "3"
//	),
//	false
//);?>
    <section class="section-sm">
        <div class="container-fluid">
    <div class="panel">
        <div class="panel-header">
            <div class="row row-30">
                <div class="col-lg-5">
                    <select class="form-control" name="filter-category">
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
                <div class="col-lg-5">
                    <select class="form-control" name="filter-status">
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
                <div class="col-lg-2">
                    <button class="btn btn-block btn-secondary" type="button">Фильтровать</button>
                </div>
            </div>
        </div>
        <div class="panel-body p-0">
            <div class="table-responsive">
                <table class="table table-sm table-borderless table-vertical-align">
                    <thead>
                    <tr class="border-bottom bg-lighter">
                        <th>Автор</th>
                        <th style="min-width: 150px;">Название</th>
                        <th>Описание идеи</th>
                        <th>Голосовать</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><img src="/images/users/user-01-165x165.jpg" width="50" height="50" alt="" title="Иван Петров"></td>
                        <td>Название идеи 1</td>
                        <td>Юридический департамент
                            Департамент малого и среднего бизнеса
                            Департамент клиентского сервиса
                            Департамент по работе с ключевыми партнерами
                            Департамент процессинга и платежных технологий
                            Департамент анализа данных
                        </td>

                        <td>
                            <div class="dropdown">
                                <button class="btn dropdown-toggle btn-success btn-sm" data-toggle="dropdown"><span>Нравиться</span>
                                </button>
                                <div class="dropdown-menu"><a class="dropdown-item" href="#">Не нравиться</a>

                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="/images/users/user-01-165x165.jpg" width="50" height="50" alt="" title="Иван Петров"></td>
                        <td>Название идеи 2</td>
                        <td>Юридический департамент
                            Департамент малого и среднего бизнеса
                            Департамент клиентского сервиса
                            Департамент по работе с ключевыми партнерами
                            Департамент процессинга и платежных технологий
                            Департамент анализа данных
                        </td>

                        <td>
                            <div class="dropdown">
                                <button class="btn dropdown-toggle btn-success btn-sm" data-toggle="dropdown"><span>Нравиться</span>
                                </button>
                                <div class="dropdown-menu"><a class="dropdown-item" href="#">Не нравиться</a>

                                </div>
                            </div>
                        </td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
        </div>
    </section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>