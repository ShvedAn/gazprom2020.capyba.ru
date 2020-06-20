<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("профиль");
$APPLICATION->AddChainItem("профиль");
?>

    <section class="section-sm bg-200">
        <div class="container-fluid px-xl-4">
            <div class="media flex-column flex-sm-row align-items-sm-center group-30">
                <div class="media-item"><img src="/images/users/user-01-165x165.jpg" width="165" height="165" alt=""></div>
                <div class="media-body">
                    <h2>Николай Поддубный</h2>
                    <p>Менеджер проектов в отделе иноваций</p>
                    <ul class="list-inline">
                        <li class="list-inline-item"><a class="fa-facebook-square h1 text-primary" href="#"></a></li>
                        <li class="list-inline-item"><a class="fa-twitter-square h1 text-info" href="#"></a></li>
                        <li class="list-inline-item"><a class="fa-google-plus-square h1 text-danger" href="#"></a></li>
                        <li class="list-inline-item"><a class="fa-phone-square h1 text-success" href="#"></a></li>
                        <li class="list-inline-item"><a class="fa-envelope-square h1 text-secondary" href="#"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="section-sm">
        <div class="container-fluid">
            <div class="row row-30">
                <div class="col-lg-5 col-xl-4">
                    <div class="row row-30">
                        <div class="col-12">
                            <div class="panel">
                                <div class="panel-header">
                                    <h3 class="panel-title"><span class="fa-star panel-icon"></span><span>Активность пользователя</span></h3>
                                </div>
                                <div class="panel-body p-0">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                            <tr>
                                                <td class="text-center"><span class="fa-television text-warning"></span></td>
                                                <td>Бонусный счет</td>
                                                <td class="text-right"><span class="fa-caret-up text-success"></span> 12593</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"><span class="fa-microphone text-primary"></span></td>
                                                <td>Предложил идей</td>
                                                <td class="text-right"><span class="fa-caret-up text-danger"></span> 74</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"><span class="fa-newspaper-o text-info"></span></td>
                                                <td>Прошел опросов</td>
                                                <td class="text-right"><span class="fa-caret-up text-success"></span> 215</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="panel">
                                <div class="panel-header">
                                    <h3 class="panel-title"><span class="fa-trophy panel-icon"></span><span>Достижения</span></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="group-5">
                                        <div class="badge badge-primary">Primary</div>
                                        <div class="badge badge-secondary">Secondary</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="panel">
                                <div class="panel-header">
                                    <h3 class="panel-title"><span class="fa-pencil panel-icon"></span><span>Краткая информация</span></h3>
                                </div>
                                <div class="panel-body">
                                    <h6>Опыт</h6>
                                    <h4 class="mt-1">Менеджер проектов</h4>
                                    <p>Отдел иноваций, с июня 2017</p>
                                    <hr>
                                    <h6>Образование</h6>
                                    <h4 class="mt-1">Бакалавр, Управление предприятием</h4>
                                    <p>МГТУ 2012-2016</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-xl-8">
                    <div class="panel panel-nav">
                        <div class="panel-header">
                            <ul class="nav nav-tabs scroller scroller-horizontal" role="tablist">
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#panelTab1" role="tab" aria-controls="panelTab1" aria-selected="true">Идеи пользователя</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#panelTab2" role="tab" aria-controls="panelTab2" aria-selected="false">Ативность</a></li>

                            </ul>
                        </div>
                        <div class="panel-body">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="panelTab1" role="tabpanel">
                                    <div class="panel-body p-0">
                                        <div class="table-responsive">
                                            <table class="table table-sm table-borderless table-vertical-align">
                                                <thead>
                                                <tr class="border-bottom bg-lighter">
                                                    <th style="min-width: 150px;">Название</th>
                                                    <th>Описание идеи</th>
                                                    <th>Голосовать</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
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
                                <div class="tab-pane fade" id="panelTab2" role="tabpanel">
                                    Пользователь не заходил на портал последние 14 дней. (Отпуск, с нетерпением ждем возвращения)
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>