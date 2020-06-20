<!DOCTYPE html>
<html class="rd-navbar-sidebar-active page-small-footer" lang="en">
<head>
    <base http://gazprom2020.capyba.ru/">
    <?$APPLICATION->ShowHead();?>
    <title><?$APPLICATION->ShowTitle()?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="og:title" content="Template Monster Admin Template">
    <meta property="og:description" content="brevis, barbatus clabulares aliquando convertam de dexter, peritus capio. devatio clemens habitio est.">
    <meta property="og:image" content="http://digipunk.netii.net/images/radar.gif">
    <meta property="og:url" content="http://digipunk.netii.net">
    <link rel="icon" href="/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/components/base/base.css">
    <script src="/components/base/script.js"></script>
</head>
<body>
    <?$APPLICATION->ShowPanel();?>
    <div class="page">
      <header class="section page-header">
        <!--RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar">
            <div class="rd-navbar-panel">
              <div class="rd-navbar-panel-cell">
                <button class="btn btn-navbar-panel rd-navbar-sidebar-toggle" data-navigation-switch="data-navigation-switch"><span class="fa-bars"></span></button>
              </div>
              <div class="rd-navbar-panel-cell rd-navbar-panel-cell-fullscreen">
                <button class="btn btn-navbar-panel" data-fullscreen="html"><span class="fa-arrows-alt"></span></button>
              </div>
              <div class="rd-navbar-panel-cell rd-navbar-panel-cell-search">
                <div class="rd-navbar-sidebar-search">
                  <input class="form-control" type="text" placeholder="Поиск"/>
                </div>
              </div>
              <div class="rd-navbar-panel-center"></div>
              <div class="rd-navbar-panel-cell">

                <div class="rd-navbar-subpanel" id="subpanel-chat"> 
<!--                  <div class="panel">-->
<!--                    <div class="panel-header">-->
<!--                      <h3 class="panel-title"><span class="panel-icon fa-pencil"></span> <span>Chat widget</span>-->
<!--                      </h3>-->
<!--                    </div>-->
<!--                    <div class="panel-body scroller scroller-vertical">-->
<!--                      <div class="media media-cloud group-10">-->
<!--                        <div class="media-item"><img src="images/users/user-02-50x50.jpg" width="50" height="50" alt=""/></div>-->
<!--                        <div class="media-body">-->
<!--                          <h4 class="media-heading offline">Sara Marshall <small>- 12:30am</small>-->
<!--                          </h4>-->
<!--                          <div class="media-text">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</div>-->
<!--                        </div>-->
<!--                      </div>-->
<!--                      <div class="media media-cloud flex-row-reverse group-10">-->
<!--                        <div class="media-item"><img src="images/users/user-03-50x50.jpg" width="50" height="50" alt=""/></div>-->
<!--                        <div class="media-body media-body-right-caret">-->
<!--                          <h4 class="media-heading online">Tom Jorgensen <small>- 12:30am</small>-->
<!--                          </h4>-->
<!--                          <div class="media-text">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</div>-->
<!--                        </div>-->
<!--                      </div>-->
<!--                      <div class="media media-cloud group-10">-->
<!--                        <div class="media-item"><img src="images/users/user-02-50x50.jpg" width="50" height="50" alt=""/></div>-->
<!--                        <div class="media-body">-->
<!--                          <h4 class="media-heading offline">Sara Marshall <small>- 12:30am</small>-->
<!--                          </h4>-->
<!--                          <div class="media-text">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</div>-->
<!--                        </div>-->
<!--                      </div>-->
<!--                      <div class="media media-cloud flex-row-reverse group-10">-->
<!--                        <div class="media-item"><img src="images/users/user-03-50x50.jpg" width="50" height="50" alt=""/></div>-->
<!--                        <div class="media-body media-body-right-caret">-->
<!--                          <h4 class="media-heading online">Tom Jorgensen <small>- 12:30am</small>-->
<!--                          </h4>-->
<!--                          <div class="media-text">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</div>-->
<!--                        </div>-->
<!--                      </div>-->
<!--                    </div>-->
<!--                    <div class="panel-footer">-->
<!--                      <div class="input-group form-group">-->
<!--                        <input class="form-control" type="text" placeholder="Enter your message here"/>-->
<!--                        <div class="input-group-append">-->
<!--                          <button class="btn btn-primary">Send</button>-->
<!--                        </div>-->
<!--                      </div>-->
<!--                    </div>-->
<!--                  </div>-->
                </div>
              </div>
              <div class="rd-navbar-panel-cell">
                <button class="btn btn-navbar-panel" data-multi-switch='{"targets":"#subpanel-notifications","scope":"#subpanel-notifications","isolate":"[data-multi-switch]"}'><span class="fa-bell"></span><span class="badge badge-warning">2</span></button>
                <div class="rd-navbar-subpanel" id="subpanel-notifications">
                  <div class="panel">
                    <div class="panel-header">
                      <h3 class="panel-title"><span class="panel-icon fa-bell"></span><span>Уведомления</span></h3>
                    </div>
                    <div class="panel-body p-2 scroller scroller-vertical">
                      <div class="group-5">
                        <div class="alert alert-dismissible alert-success alert-sm" role="alert"><span class="alert-icon fa-thumbs-up"></span><span>Спасибо за пройденный опрос</span>
                          <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span class="fa-close" aria-hidden="true"></span></button>
                        </div>
                        <div class="alert alert-dismissible alert-success alert-sm" role="alert"><span class="alert-icon fa-thumbs-up"></span><span>Начислены баллы за голосование</span>
                          <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span class="fa-close" aria-hidden="true"></span></button>
                        </div>
                      </div>
                    </div>
                    <div class="panel-footer p-2"><a class="btn btn-primary btn-sm" href="alerts.html">Все уведомления</a></div>
                  </div>
                </div>
              </div>
              <div class="rd-navbar-panel-cell">

                </div>
              <div class="rd-navbar-panel-cell rd-navbar-panel-cell-user">
                <div class="btn btn-navbar-panel" data-multi-switch='{"targets":"#subpanel-user","scope":"#subpanel-user","isolate":"[data-multi-switch]"}'>
                  <div class="media align-items-center"><img class="rounded-circle" src="images/users/user-03-50x50.jpg" width="30" height="30" alt=""/>
                    <div class="media-body ml-2">
                      <p>Администратор</p>
                    </div>
                  </div>
                </div>
                <div class="rd-navbar-subpanel" id="subpanel-user">
                  <div class="panel">
                    <div class="panel-header">
                      <div class="group-5 d-flex flex-wrap align-items-center"><img class="rounded mr-2" src="images/users/user-03-50x50.jpg" width="50" height="50" alt=""/>
                        <h3 class="panel-title">Администратор</h3>
                      </div>
                    </div>
                    <div class="panel-body p-0 scroller scroller-vertical">
                      <div class="list-group"><a class="list-group-item rounded-0" href="#">
                          <div class="media align-items-center">
                            <div class="pr-2"><span class="fa-user"></span></div>
                            <div class="media-body">
                              <h5>Профиль</h5>
                            </div>
                          </div></a><a class="list-group-item rounded-0" href="#">
                          <div class="media align-items-center">
                            <div class="pr-2"><span class="fa-envelope-o"></span></div>
                            <div class="media-body">
                              <h5>Уведомления</h5>
                            </div>
                            <div class="badge badge-warning">2</div>
                          </div></a>
                      </div>
                    </div>
                    <div class="panel-footer p-2">
                      <div class="d-flex align-items-center justify-content-between"><a class="btn btn-danger btn-sm" href="#">Выйти</a></div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="rd-navbar-sidebar scroller scroller-vertical">
              <div class="rd-navbar-sidebar-panel">
                <div>
                  <div class="group-5">
                    <div class="rd-navbar-brand"><a class="desktop-brand" href="index.html"><img
                            src="/images/blue-logo-eng.svg" alt=""/></a><a class="mobile-brand" href="/"><img
                            src="/images/blue-logo-eng.svg" alt=""/></a></div>
                    <div class="rd-navbar-sidebar-search"> 
                      <input class="form-control" type="text" placeholder="Поиск"/>
                    </div>
                  </div>
                </div>
                <button class="btn btn-primary rd-navbar-sidebar-toggle" data-navigation-switch="data-navigation-switch"><span class="fa-bars"></span></button>
              </div>
              <ul class="rd-navbar-nav">
                <li class="rd-navbar-nav-item">
                  <div class="rd-navbar-title"><span class="rd-navbar-title-icon"><span class="fa-ellipsis-h"></span></span><span class="rd-navbar-title-text"></span></div>
                </li>
                <li class="rd-navbar-nav-item active"><a class="rd-navbar-link" href="/"><span
                        class="rd-navbar-icon fa-home"></span><span class="rd-navbar-link-text">Главная</span></a>
                <li class="rd-navbar-nav-item"><a class="rd-navbar-link" href="/ideas/addidea.php"><span class="rd-navbar-icon fa-file-o"></span><span class="rd-navbar-link-text">Добавить идею</span></a>
                <li class="rd-navbar-nav-item"><a class="rd-navbar-link" href="/ideas/"><span class="rd-navbar-icon fa-file-o"></span><span class="rd-navbar-link-text">Список идей</span></a>
                <li class="rd-navbar-nav-item"><a class="rd-navbar-link" href="/profile/user.php"><span class="rd-navbar-icon fa-file-o"></span><span class="rd-navbar-link-text">Профиль пользователя</span></a>

                </li>

              </ul>
            </div>
          </nav>
        </div>
      </header>
      <section class="topbar">
        <!-- Breadcrumbs-->
<?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "pomp_breadcrumbs", Array(
	"PATH" => "",	// Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
		"SITE_ID" => "s1",	// Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
		"START_FROM" => "0",	// Номер пункта, начиная с которого будет построена навигационная цепочка
	),
	false
);?>
      </section>
