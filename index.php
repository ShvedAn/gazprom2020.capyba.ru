<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "gazprom2020");
$APPLICATION->SetTitle("Главная страница");
?>
<section class="section-sm">
    <div class="container-fluid">
        <div class="row row-30">
    <div class="col-md-6">
        <div class="panel admin-panel">
            <div class="panel-header d-flex align-items-center">
                <div class="h3 panel-title flex-grow-1">Топ идей</div>

            </div>
            <div class="panel-body p-0">
                <ul class="list-unstyled list-divided">
                    <li class="px-3 py-2 progress-wrap-1">
                        <div class="progress-wrap-content"><span class="fa-circle pr-2 text-primary"></span><a class="text-light" href="#">pages.com/img/15</a></div>
                        <div class="progress">
                            <div class="progress-bar progress-200" role="progressbar" style="width: 9%" aria-valuenow="9" aria-valuemin="0" aria-valuemax="100">9</div>
                        </div>
                    </li>
                    <li class="px-3 py-2 progress-wrap-1">
                        <div class="progress-wrap-content"><span class="fa-circle pr-2 text-warning"></span><a class="text-light" href="#">pages.com/popular</a></div>
                        <div class="progress">
                            <div class="progress-bar progress-200" role="progressbar" style="width: 14%" aria-valuenow="14" aria-valuemin="0" aria-valuemax="100">14</div>
                        </div>
                    </li>
                    <li class="px-3 py-2 progress-wrap-1">
                        <div class="progress-wrap-content"><span class="fa-circle pr-2 text-success"></span><a class="text-light" href="#">pages.com/news/3</a></div>
                        <div class="progress">
                            <div class="progress-bar progress-200" role="progressbar" style="width: 31%" aria-valuenow="31" aria-valuemin="0" aria-valuemax="100">31</div>
                        </div>
                    </li>
                    <li class="px-3 py-2 progress-wrap-1">
                        <div class="progress-wrap-content"><span class="fa-circle pr-2 text-info"></span><a class="text-light" href="#">pages.com/featured/16</a></div>
                        <div class="progress">
                            <div class="progress-bar progress-200" role="progressbar" style="width: 22%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100">22</div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
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
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt.
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
                        <div class="tab-pane fade" id="panelTab16-2" role="tabpanel">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.
                            <div class="form-group group-5">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" id="defaultCheck1" type="checkbox" value="">
                                    <label class="form-check-label" for="defaultCheck1">checkbox 1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" id="defaultCheck2" type="checkbox" value="">
                                    <label class="form-check-label" for="defaultCheck2">checkbox 2</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" id="defaultCheck2" type="checkbox" value="">
                                    <label class="form-check-label" for="defaultCheck2">checkbox 3</label>
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
                <h4 class="list-sortable-title"><span class="pr-2 fa-bell"></span><span>Перечень задач/квестов</span></h4>
                <ul class="list-sortable list-sortable-bordered sortable sortable-current" data-connect-group=".sortable-completed">
                    <li class="list-sortable-item-primary">
                        <div class="custom-control custom-checkbox custom-check">
                            <input class="custom-control-input" type="checkbox" id="taskCheck1"/>
                            <label class="custom-control-label" for="taskCheck1">Add new servers to design board
                            </label>
                        </div>
                        <div class="sortable-drag"></div>
                    </li>
                    <li class="list-sortable-item-secondary">
                        <div class="custom-control custom-checkbox custom-check">
                            <input class="custom-control-input" type="checkbox" id="taskCheck2"/>
                            <label class="custom-control-label" for="taskCheck2">Finish building prototype for Sony
                            </label>
                        </div>
                        <div class="sortable-drag"></div>
                    </li>
                    <li class="list-sortable-item-success">
                        <div class="custom-control custom-checkbox custom-check">
                            <input class="custom-control-input" type="checkbox" id="taskCheck3"/>
                            <label class="custom-control-label" for="taskCheck3">Order new building supplies for Microsoft
                            </label>
                        </div>
                        <div class="sortable-drag"></div>
                    </li>
                </ul>
                <h4 class="list-sortable-title"><span class="pr-2 fa-check"></span><span>Completed Tasks</span></h4>
                <ul class="list-sortable list-sortable-bordered sortable sortable-completed" data-connect-group=".sortable-current">
                    <li class="list-sortable-item-warning">
                        <div class="custom-control custom-checkbox custom-check">
                            <input class="custom-control-input" type="checkbox" id="taskCheck4" checked=""/>
                            <label class="custom-control-label" for="taskCheck4">Finish building prototype for Sony
                            </label>
                        </div>
                        <div class="sortable-drag"></div>
                    </li>
                    <li class="list-sortable-item-info">
                        <div class="custom-control custom-checkbox custom-check">
                            <input class="custom-control-input" type="checkbox" id="taskCheck5" checked=""/>
                            <label class="custom-control-label" for="taskCheck5">Create documentation for launch
                            </label>
                        </div>
                        <div class="sortable-drag"></div>
                    </li>
                    <li class="list-sortable-item-danger">
                        <div class="custom-control custom-checkbox custom-check">
                            <input class="custom-control-input" type="checkbox" id="taskCheck6" checked=""/>
                            <label class="custom-control-label" for="taskCheck6">Order new building supplies for Microsoft
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
                    <div class="col-sm-6 col-lg-4"><a class="lightgallery-item" href="images/image-01-1200x800.jpg" data-lightgallery='{"selector":"this"}'><img src="images/image-01-400x300.jpg" width="400" height="300" alt=""></a></div>
                    <div class="col-sm-6 col-lg-4"><a class="lightgallery-item" href="images/image-02-1200x800.jpg" data-lightgallery='{"selector":"this"}'><img src="images/image-02-400x300.jpg" width="400" height="300" alt=""></a></div>
                    <div class="col-sm-6 col-lg-4"><a class="lightgallery-item" href="images/image-03-1200x800.jpg" data-lightgallery='{"selector":"this"}'><img src="images/image-03-400x300.jpg" width="400" height="300" alt=""></a></div>
                </div>
            </div>
        </div>
    </div>


    <div class="col-md-4">
        <div class="panel admin-panel">
            <div class="panel-header">
                <div class="d-flex align-items-center">
                    <div class="h3 panel-title flex-grow-1">Новость 1</div>


                </div>
            </div>
            <div class="panel-body">
                <p>Pess tolerare in aetheres! Peritus nuptias ducunt ad adgium. Eheu. Domesticus historias ducunt ad medicina. Calcarias credere! Eheu, medicina! Cum planeta persuadere, omnes plasmatores vitare rusticus, peritus gabaliumes. </p>
                <hr>
                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel admin-panel">
            <div class="panel-header">
                <div class="d-flex align-items-center">
                    <div class="h3 panel-title flex-grow-1">Новость 2</div>


                </div>
            </div>
            <div class="panel-body">
                <p>Pess tolerare in aetheres! Peritus nuptias ducunt ad adgium. Eheu. Domesticus historias ducunt ad medicina. Calcarias credere! Eheu, medicina! Cum planeta persuadere, omnes plasmatores vitare rusticus, peritus gabaliumes. </p>
                <hr>
                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel admin-panel">
            <div class="panel-header">
                <div class="d-flex align-items-center">
                    <div class="h3 panel-title flex-grow-1">Новость 3</div>


                </div>
            </div>
            <div class="panel-body">
                <p>Pess tolerare in aetheres! Peritus nuptias ducunt ad adgium. Eheu. Domesticus historias ducunt ad medicina. Calcarias credere! Eheu, medicina! Cum planeta persuadere, omnes plasmatores vitare rusticus, peritus gabaliumes. </p>
                <hr>
                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.</p>
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
                            <div class="col-sm-6 col-lg-4"><a class="lightgallery-item" href="/"><img src="images/image-01-400x300.jpg" width="400" height="300" alt=""></a></div>
                            <div class="col-sm-6 col-lg-4"><a class="lightgallery-item" href="/"><img src="images/image-02-400x300.jpg" width="400" height="300" alt=""></a></div>
                            <div class="col-sm-6 col-lg-4"><a class="lightgallery-item" href="/"><img src="images/image-03-400x300.jpg" width="400" height="300" alt=""></a></div>
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