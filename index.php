<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "gazprom2020");
$APPLICATION->SetTitle("Главная страница");
?>
<section class="section-sm">
    <div class="container-fluid">
        <div class="row row-30">
    <div class="col-md-6">
        <?$APPLICATION->IncludeComponent("gazprom:idea.list", "list.idea.top", Array(
	"COMPONENT_TEMPLATE" => ".default",
		"IBLOCK_TYPE" => "IDEA",	// Тип инфоблока
		"IBLOCK_ID" => "3",	// Инфобок,	// Инфобок
        "FILTER" => $_REQUEST['filter-category']
	),
	false
);?>

            <div class="panel">
                <div class="panel-header">
                    <h3 class="panel-title"><span class="panel-icon fa-trophy"></span> <span>Опросы</span>
                    </h3>
                </div>
                <div class="panel-body">
                    <ul class="nav nav-pills" role="tablist">
                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#panelTab16-1" role="tab" aria-selected="true">Опрос №214</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#panelTab16-2" role="tab" aria-selected="false"><span class="fa-bolt"></span> Опрос №215</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="panelTab16-1" role="tabpanel">
                           Вам нравится наш новый корпоративный портал, разработанный в рамках Хакатона №2, Цифровой прорыв 2020?
                            <div class="form-group group-5">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" id="exampleRadios1" type="radio" name="exampleRadios" value="option1" checked="">
                                    <label class="form-check-label" for="exampleRadios1">Да</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" id="exampleRadios2" type="radio" name="exampleRadios" value="option2">
                                    <label class="form-check-label" for="exampleRadios2">Нет</label>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="panelTab16-2" role="tabpanel">
                        	Где бы Вы хотели провести свой дополнительный выходной, полученный за активность на новом корпортале?
                            <div class="form-group group-5">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" id="defaultCheck1" type="checkbox" value="">
                                    <label class="form-check-label" for="defaultCheck1">На пляже</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" id="defaultCheck2" type="checkbox" value="">
                                    <label class="form-check-label" for="defaultCheck2">На рабочем месте)</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" id="defaultCheck2" type="checkbox" value="">
                                    <label class="form-check-label" for="defaultCheck2">В мягкой кроватке</label>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

    </div>

    <div class="col-md-6">
        <div class="panel admin-panel">
            <div class="panel-header d-flex align-items-center">
                <div class="h3 panel-title flex-grow-1">Перечень задач/квестов</div>

            </div>
            <div class="panel-body">
                <h4 class="list-sortable-title"><span class="pr-2 fa-bell"></span><span>Активные задачи</span></h4>
                <ul class="list-sortable list-sortable-bordered sortable sortable-current" data-connect-group=".sortable-completed">
                    <li class="list-sortable-item-primary">
                        <div class="custom-control custom-checkbox custom-check">
                            <input class="custom-control-input" type="checkbox" id="taskCheck1"/>
                            <label class="custom-control-label" for="taskCheck1">Поставить 1000 лайков
                            </label>
                        </div>
                        <div class="sortable-drag"></div>
                    </li>
                    <li class="list-sortable-item-secondary">
                        <div class="custom-control custom-checkbox custom-check">
                            <input class="custom-control-input" type="checkbox" id="taskCheck2"/>
                            <label class="custom-control-label" for="taskCheck2">Написать 10 комментариев
                            </label>
                        </div>
                        <div class="sortable-drag"></div>
                    </li>
                    <li class="list-sortable-item-success">
                        <div class="custom-control custom-checkbox custom-check">
                            <input class="custom-control-input" type="checkbox" id="taskCheck3"/>
                            <label class="custom-control-label" for="taskCheck3">Поставить 100 лайков
                            </label>
                        </div>
                        <div class="sortable-drag"></div>
                    </li>
                </ul>
                <h4 class="list-sortable-title"><span class="pr-2 fa-check"></span><span>Выполненные задачи</span></h4>
                <ul class="list-sortable list-sortable-bordered sortable sortable-completed" data-connect-group=".sortable-current">
                    <li class="list-sortable-item-warning">
                        <div class="custom-control custom-checkbox custom-check">
                            <input class="custom-control-input" type="checkbox" id="taskCheck4" checked=""/>
                            <label class="custom-control-label" for="taskCheck4">Поставить лайк
                            </label>
                        </div>
                        <div class="sortable-drag"></div>
                    </li>
                    <li class="list-sortable-item-info">
                        <div class="custom-control custom-checkbox custom-check">
                            <input class="custom-control-input" type="checkbox" id="taskCheck5" checked=""/>
                            <label class="custom-control-label" for="taskCheck5">Пройди 10 опросов
                            </label>
                        </div>
                        <div class="sortable-drag"></div>
                    </li>
                    <li class="list-sortable-item-danger">
                        <div class="custom-control custom-checkbox custom-check">
                            <input class="custom-control-input" type="checkbox" id="taskCheck6" checked=""/>
                            <label class="custom-control-label" for="taskCheck6">За идею, которая дошла до реализации
                            </label>
                        </div>
                        <div class="sortable-drag"></div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="col-12">
        <div class="panel">
            <div class="panel-header">
                <h3 class="panel-title">Instagram</h3>
            </div>
            <div class="panel-body">
                <div class="row row-30">
                    <div class="col-sm-6 col-lg-4"><a class="lightgallery-item" href="images/inst1_103973955_570482710325313_2899389362461016160_n.jpg" data-lightgallery='{"selector":"this"}'><img src="images/inst1_103973955_570482710325313_2899389362461016160_400x300.jpg" width="400" height="300" alt=""></a></div>
                    <div class="col-sm-6 col-lg-4"><a class="lightgallery-item" href="images/inst_4_103846767_3441197302559051_2390249645647725707_n.jpg" data-lightgallery='{"selector":"this"}'><img src="images/inst_4_103846767_3441197302559051_2390249645647725707_400x300.jpg" width="400" height="300" alt=""></a></div>
                    <div class="col-sm-6 col-lg-4"><a class="lightgallery-item" href="images/inst_3_103846767_3441197302559051_2390249645647725707_n.jpg" data-lightgallery='{"selector":"this"}'><img src="images/inst3_103846767_3441197302559051_2390249645647725707_400x300.jpg" width="400" height="300" alt=""></a></div>
                </div>
            </div>
        </div>
    </div>


    <div class="col-md-4">
        <div class="panel admin-panel">
            <div class="panel-header">
                <div class="d-flex align-items-center">
                    <div class="h3 panel-title flex-grow-1">Митап About React — совместно с GetIT Community</div>


                </div>
            </div>
            <div class="panel-body">
                <p>25 февраля в Газпромбанк прошел очередной митап для IT-специалистов совместно с сообществом разработчиков GetIT Community. </p>
                <hr>
                <p>Первым выступил главный инженер разработки департамента информационно-технологической поддержки рисков Надир Жумабаев. Он поделился опытом работы с монорепозиториями и рассказал, как они помогают организовать большие проекты и повысить их эффективность.</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel admin-panel">
            <div class="panel-header">
                <div class="d-flex align-items-center">
                    <div class="h3 panel-title flex-grow-1">Tech.Talk «Удаленная идентификация и биометрия»</div>


                </div>
            </div>
            <div class="panel-body">
                <p>Новый сезон мероприятий Tech.Talk для сотрудников и гостей Газпромбанка начался 28 января с темы «Удаленная идентификация и биометрия», которая вызывает все больший интерес у участников российского финансового рынка. На митапе представители Ростелекома и компании SafeTech говорили о возможностях и перспективах удаленной идентификации как ключевого элемента цифрового банка. </p>
                <hr>
                <p>Директор по цифровой идентичности компании «Ростелеком», руководитель направления АФТ «Удаленная идентификация и менеджмент цифровой идентичности» Иван Беров привел данные статистики: сейчас к Единой биометрической системе (ЕБС) подключены 227 банков и около 11 тысяч отделений в 1048 городах – и сеть постоянно расширяется.</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel admin-panel">
            <div class="panel-header">
                <div class="d-flex align-items-center">
                    <div class="h3 panel-title flex-grow-1">Митап для разработчиков совместно с React Moscow Meetup</div>


                </div>
            </div>
            <div class="panel-body">
                <p>11 декабря в Газпромбанке прошел React Moscow Meetup: HOC, Hooks, Java & React, Huge Apps, MobX vs Redux, на который пришло более 200 человек.  </p>
                <hr>
                <p>Первым выступил главный инженер разработки Газпромбанка Дмитрий Григоров, рассказав о приемах использования компонентов высшего порядка (High Order Components) и сравнив их с приемами, которые принесли хуки в «синтаксис» Реакта. А еще он ответил на актуальный вопрос: призвано ли одно заменить другое? .</p>
            </div>
        </div>
    </div>

            <div class="col-12">
                <div class="panel">
                    <div class="panel-header">
                        <h3 class="panel-title">Новые видео</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row row-30" data-lightgallery>
                            <div class="col-sm-6 col-lg-4"><iframe width="400" height="300" src="https://www.youtube.com/embed/roOCyotGL8E" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                            <div class="col-sm-6 col-lg-4"><iframe width="400" height="300" src="https://www.youtube.com/embed/s_8RtyMXi2o" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                            <div class="col-sm-6 col-lg-4"><iframe width="400" height="300" src="https://www.youtube.com/embed/jux0oZiHJsc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="panel admin-panel">
                    <div class="panel-header d-flex align-items-center">
                        <div class="h3 panel-title flex-grow-1">Календарь событий</div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <div class="fullcalendar calendar-widget" data-fullcalendar-header='{"left":"title","center":"","right":"today prev,next"}' data-fullcalendar-event='[{"title":"Sony Meeting","start":"2019-08-06","className":"fc-event-success"},{"title":"Conference","start":"2019-08-14","end":"2019-08-16","className":"fc-event-warning"},{"title":"System Testing","start":"2019-07-26","end":"2019-07-28","className":"fc-event-primary"}]'></div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>