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
                                        <div class="badge badge-success">Success</div>
                                        <div class="badge badge-danger">Danger</div>
                                        <div class="badge badge-warning">Warning</div>
                                        <div class="badge badge-info">Info</div>
                                        <div class="badge badge-light">Light</div>
                                        <div class="badge badge-dark">Dark</div>
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
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#panelTab1" role="tab" aria-controls="panelTab1" aria-selected="true">Activity</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#panelTab2" role="tab" aria-controls="panelTab2" aria-selected="false">Social</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#panelTab3" role="tab" aria-controls="panelTab3" aria-selected="false">Media</a></li>
                            </ul>
                        </div>
                        <div class="panel-body">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="panelTab1" role="tabpanel">
                                    <div class="media group-15 flex-column flex-sm-row">
                                        <div class="media-item"><img src="/images/users/user-02-40x40.jpg" width="40" height="40" alt=""></div>
                                        <div class="media-body">
                                            <h5>Jessica Wong Posted - <span class="text-muted font-weight-normal">3 hours ago</span></h5>
                                            <div class="group-10"><img src="/images/image-01-140x90.jpg" width="140" height="90" alt=""><img src="/images/image-02-140x90.jpg" width="140" height="90" alt=""><img src="/images/image-03-140x90.jpg" width="140" height="90" alt=""></div>
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <div class="group-5"><span class="fa-thumbs-o-up text-primary"></span><span>Like</span></div>
                                                </li>
                                                <li class="list-inline-item">
                                                    <div class="group-5"><span class="fa-share text-primary"></span><span>Share</span></div>
                                                </li>
                                                <li class="list-inline-item">
                                                    <div class="group-5"><span class="fa-download text-primary"></span><span>Save</span></div>
                                                </li>
                                                <li class="list-inline-item">
                                                    <div class="group-5"><span class="fa-comments-o text-primary"></span><span>Comment</span></div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="media group-15">
                                        <div class="media-item"><img src="/images/users/user-03-40x40.jpg" width="40" height="40" alt=""></div>
                                        <div class="media-body">
                                            <h5>Simon Rivers Posted - <span class="text-muted font-weight-normal">3 hours ago</span></h5>
                                            <p class="mt-0">Omg so freaking sweet dude. This song is amazing. I love when you write with your hands...</p>
                                            <div class="media group-10">
                                                <div class="media-item"><img src="/images/users/user-02-40x40.jpg" width="40" height="40" alt=""></div>
                                                <div class="media-body">
                                                    <h5>Jessica Wong - <span class="text-muted font-weight-normal">3 hours ago</span></h5>
                                                    <p class="mt-0">What a pleasure to bring you back to my life at this place. It had this wonderful vibe from the first moment I sat down in the chair and walked by the window.</p>
                                                </div>
                                            </div>
                                            <div class="media group-10">
                                                <div class="media-item"><img src="/images/users/user-03-40x40.jpg" width="40" height="40" alt=""></div>
                                                <div class="media-body">
                                                    <h5>Simon Rivers - <span class="text-muted font-weight-normal">3 hours ago</span></h5>
                                                    <p class="mt-0">I'm so so super proud of this place and so glad I came here. The atmosphere is so amazing, the service is great, we had a great time...and we will continue it for years. Thank you for giving me the opportunity to</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media group-15 flex-column flex-sm-row">
                                        <div class="media-item"><img src="/images/users/user-03-40x40.jpg" width="40" height="40" alt=""></div>
                                        <div class="media-body">
                                            <h5>Simon Rivers Posted - <span class="text-muted font-weight-normal">3 hours ago</span></h5>
                                            <div class="group-10"><img src="/images/image-04-140x90.jpg" width="140" height="90" alt=""><img src="/images/image-02-140x90.jpg" width="140" height="90" alt=""><img src="/images/image-05-140x90.jpg" width="140" height="90" alt=""></div>
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <div class="group-5"><span class="fa-thumbs-o-up text-primary"></span><span>Like</span></div>
                                                </li>
                                                <li class="list-inline-item">
                                                    <div class="group-5"><span class="fa-share text-primary"></span><span>Share</span></div>
                                                </li>
                                                <li class="list-inline-item">
                                                    <div class="group-5"><span class="fa-download text-primary"></span><span>Save</span></div>
                                                </li>
                                                <li class="list-inline-item">
                                                    <div class="group-5"><span class="fa-comments-o text-primary"></span><span>Comment</span></div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="panelTab2" role="tabpanel">
                                    <div class="media group-15 flex-column flex-sm-row">
                                        <div class="media-item"><img src="/images/users/user-03-40x40.jpg" width="40" height="40" alt=""></div>
                                        <div class="media-body">
                                            <h5>Simon Rivers Posted - <span class="text-muted font-weight-normal">3 hours ago</span></h5>
                                            <div class="group-10"><img src="/images/image-04-140x90.jpg" width="140" height="90" alt=""><img src="/images/image-02-140x90.jpg" width="140" height="90" alt=""><img src="/images/image-05-140x90.jpg" width="140" height="90" alt=""></div>
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <div class="group-5"><span class="fa-thumbs-o-up text-primary"></span><span>Like</span></div>
                                                </li>
                                                <li class="list-inline-item">
                                                    <div class="group-5"><span class="fa-share text-primary"></span><span>Share</span></div>
                                                </li>
                                                <li class="list-inline-item">
                                                    <div class="group-5"><span class="fa-download text-primary"></span><span>Save</span></div>
                                                </li>
                                                <li class="list-inline-item">
                                                    <div class="group-5"><span class="fa-comments-o text-primary"></span><span>Comment</span></div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="media group-15 flex-column flex-sm-row">
                                        <div class="media-item"><img src="/images/users/user-02-40x40.jpg" width="40" height="40" alt=""></div>
                                        <div class="media-body">
                                            <h5>Jessica Wong Posted - <span class="text-muted font-weight-normal">3 hours ago</span></h5>
                                            <div class="group-10"><img src="/images/image-01-140x90.jpg" width="140" height="90" alt=""><img src="/images/image-02-140x90.jpg" width="140" height="90" alt=""><img src="/images/image-03-140x90.jpg" width="140" height="90" alt=""></div>
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <div class="group-5"><span class="fa-thumbs-o-up text-primary"></span><span>Like</span></div>
                                                </li>
                                                <li class="list-inline-item">
                                                    <div class="group-5"><span class="fa-share text-primary"></span><span>Share</span></div>
                                                </li>
                                                <li class="list-inline-item">
                                                    <div class="group-5"><span class="fa-download text-primary"></span><span>Save</span></div>
                                                </li>
                                                <li class="list-inline-item">
                                                    <div class="group-5"><span class="fa-comments-o text-primary"></span><span>Comment</span></div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="media group-15">
                                        <div class="media-item"><img src="/images/users/user-03-40x40.jpg" width="40" height="40" alt=""></div>
                                        <div class="media-body">
                                            <h5>Simon Rivers Posted - <span class="text-muted font-weight-normal">3 hours ago</span></h5>
                                            <p class="mt-0">Omg so freaking sweet dude. This song is amazing. I love when you write with your hands...</p>
                                            <div class="media group-10">
                                                <div class="media-item"><img src="/images/users/user-02-40x40.jpg" width="40" height="40" alt=""></div>
                                                <div class="media-body">
                                                    <h5>Jessica Wong - <span class="text-muted font-weight-normal">3 hours ago</span></h5>
                                                    <p class="mt-0">What a pleasure to bring you back to my life at this place. It had this wonderful vibe from the first moment I sat down in the chair and walked by the window.</p>
                                                </div>
                                            </div>
                                            <div class="media group-10">
                                                <div class="media-item"><img src="/images/users/user-03-40x40.jpg" width="40" height="40" alt=""></div>
                                                <div class="media-body">
                                                    <h5>Simon Rivers - <span class="text-muted font-weight-normal">3 hours ago</span></h5>
                                                    <p class="mt-0">I'm so so super proud of this place and so glad I came here. The atmosphere is so amazing, the service is great, we had a great time...and we will continue it for years. Thank you for giving me the opportunity to</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="panelTab3" role="tabpanel">
                                    <div class="media group-15">
                                        <div class="media-item"><img src="/images/users/user-03-40x40.jpg" width="40" height="40" alt=""></div>
                                        <div class="media-body">
                                            <h5>Simon Rivers Posted - <span class="text-muted font-weight-normal">3 hours ago</span></h5>
                                            <p class="mt-0">Omg so freaking sweet dude. This song is amazing. I love when you write with your hands...</p>
                                            <div class="media group-10">
                                                <div class="media-item"><img src="/images/users/user-02-40x40.jpg" width="40" height="40" alt=""></div>
                                                <div class="media-body">
                                                    <h5>Jessica Wong - <span class="text-muted font-weight-normal">3 hours ago</span></h5>
                                                    <p class="mt-0">What a pleasure to bring you back to my life at this place. It had this wonderful vibe from the first moment I sat down in the chair and walked by the window.</p>
                                                </div>
                                            </div>
                                            <div class="media group-10">
                                                <div class="media-item"><img src="/images/users/user-03-40x40.jpg" width="40" height="40" alt=""></div>
                                                <div class="media-body">
                                                    <h5>Simon Rivers - <span class="text-muted font-weight-normal">3 hours ago</span></h5>
                                                    <p class="mt-0">I'm so so super proud of this place and so glad I came here. The atmosphere is so amazing, the service is great, we had a great time...and we will continue it for years. Thank you for giving me the opportunity to</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media group-15 flex-column flex-sm-row">
                                        <div class="media-item"><img src="/images/users/user-03-40x40.jpg" width="40" height="40" alt=""></div>
                                        <div class="media-body">
                                            <h5>Simon Rivers Posted - <span class="text-muted font-weight-normal">3 hours ago</span></h5>
                                            <div class="group-10"><img src="/images/image-04-140x90.jpg" width="140" height="90" alt=""><img src="/images/image-02-140x90.jpg" width="140" height="90" alt=""><img src="/images/image-05-140x90.jpg" width="140" height="90" alt=""></div>
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <div class="group-5"><span class="fa-thumbs-o-up text-primary"></span><span>Like</span></div>
                                                </li>
                                                <li class="list-inline-item">
                                                    <div class="group-5"><span class="fa-share text-primary"></span><span>Share</span></div>
                                                </li>
                                                <li class="list-inline-item">
                                                    <div class="group-5"><span class="fa-download text-primary"></span><span>Save</span></div>
                                                </li>
                                                <li class="list-inline-item">
                                                    <div class="group-5"><span class="fa-comments-o text-primary"></span><span>Comment</span></div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="media group-15 flex-column flex-sm-row">
                                        <div class="media-item"><img src="/images/users/user-02-40x40.jpg" width="40" height="40" alt=""></div>
                                        <div class="media-body">
                                            <h5>Jessica Wong Posted - <span class="text-muted font-weight-normal">3 hours ago</span></h5>
                                            <div class="group-10"><img src="/images/image-01-140x90.jpg" width="140" height="90" alt=""><img src="/images/image-02-140x90.jpg" width="140" height="90" alt=""><img src="/images/image-03-140x90.jpg" width="140" height="90" alt=""></div>
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <div class="group-5"><span class="fa-thumbs-o-up text-primary"></span><span>Like</span></div>
                                                </li>
                                                <li class="list-inline-item">
                                                    <div class="group-5"><span class="fa-share text-primary"></span><span>Share</span></div>
                                                </li>
                                                <li class="list-inline-item">
                                                    <div class="group-5"><span class="fa-download text-primary"></span><span>Save</span></div>
                                                </li>
                                                <li class="list-inline-item">
                                                    <div class="group-5"><span class="fa-comments-o text-primary"></span><span>Comment</span></div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>