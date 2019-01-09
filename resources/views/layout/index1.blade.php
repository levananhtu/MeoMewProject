<!DOCTYPE html>
<html lang="en">

<head>
    <title>Meomew Comic</title>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <!-- Favicon icon -->
    <link rel="shortcut icon" href="{{asset("images/favicon.png")}}" type="image/x-icon">
    <link rel="icon" href="{{asset("images/favicon.ico")}}" type="image/x-icon">

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <!--Date Picker Material Icon Css-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- iconfont -->
    <link rel="stylesheet" type="text/css" href="{{asset("icon/icofont/css/icofont.css")}}">

    <!-- simple line icon -->
    <link rel="stylesheet" type="text/css" href="{{asset("icon/simple-line-icons/css/simple-line-icons.css")}}">

    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{asset("bower_components/bootstrap/css/bootstrap.min.css")}}">

    <!-- Chartlist chart css -->
    <link rel="stylesheet" href="{{asset("bower_components/chartist/css/chartist.css")}}" type="text/css" media="all">

    <!-- Weather css -->
    <link href="{{asset("css/svg-weather.css")}}" rel="stylesheet">

    <!-- Echart js -->
    <script src="{{asset("plugins//charts/echarts/js/echarts-all.js")}}"></script>

    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{asset("css/main.css")}}">

    <!-- Responsive.css-->
    <link rel="stylesheet" type="text/css" href="{{asset("css/responsive.css")}}">

    <!--color css-->
    <link rel="stylesheet" type="text/css" href="{{asset("css/color/color-1.min.css")}}" id="color"/>

</head>
<body class="horizontal-fixed fixed">

<div class="wrapper">
    <!-- Navbar-->
    <header class="main-header-top hidden-print">
        <a href="<?= route("home");?>" class="logo"><img class="img-fluid able-logo" src="{{asset("images/logo.png")}}"
                                                         alt="Theme-logo"></a>
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button--><a href="#!" data-toggle="offcanvas" class="sidebar-toggle hidden-md-up"></a>
            <!-- Navbar Right Menu-->
            <div class="navbar-custom-menu">
                <ul class="top-nav">
                    <!--Notification Menu-->

                    <li class="dropdown pc-rheader-submenu message-notification search-toggle">
                        <a href="#!" id="morphsearch-search" class="drop icon-circle txt-white">
                            <i class="icofont icofont-search-alt-1"></i>
                        </a>
                    </li>
                    <!-- chat dropdown -->
                    <!-- window screen -->
                    <li class="pc-rheader-submenu">
                        <a href="#!" class="drop icon-circle" onclick="javascript:toggleFullScreen()">
                            <i class="icon-size-fullscreen"></i>
                        </a>

                    </li>
                </ul>

                <!-- search -->
                <div id="morphsearch" class="morphsearch">
                    <form class="morphsearch-form">

                        <input class="morphsearch-input" type="search" placeholder="Search..."/>

                        <button class="morphsearch-submit" type="submit">Search</button>

                    </form>
                    <div class="morphsearch-content">
                        <div class="dummy-column">
                            <h2>People</h2>
                            <a class="dummy-media-object" href="#!">
                                <img class="round"
                                     src="http://0.gravatar.com/avatar/81b58502541f9445253f30497e53c280?s=50&d=identicon&r=G"
                                     alt="Sara Soueidan"/>
                                <h3>Sara Soueidan</h3>
                            </a>

                            <a class="dummy-media-object" href="#!">
                                <img class="round"
                                     src="http://1.gravatar.com/avatar/9bc7250110c667cd35c0826059b81b75?s=50&d=identicon&r=G"
                                     alt="Shaun Dona"/>
                                <h3>Shaun Dona</h3>
                            </a>
                        </div>
                        <div class="dummy-column">
                            <h2>Popular</h2>
                            <a class="dummy-media-object" href="#!">
                                <img src="{{asset("images/avatar-1.png")}}" alt="PagePreloadingEffect"/>
                                <h3>Page Preloading Effect</h3>
                            </a>

                            <a class="dummy-media-object" href="#!">
                                <img src="{{asset("images/avatar-1.png")}}" alt="DraggableDualViewSlideshow"/>
                                <h3>Draggable Dual-View Slideshow</h3>
                            </a>
                        </div>
                        <div class="dummy-column">
                            <h2>Recent</h2>
                            <a class="dummy-media-object" href="#!">
                                <img src="{{asset("images/avatar-1.png")}}" alt="TooltipStylesInspiration"/>
                                <h3>Tooltip Styles Inspiration</h3>
                            </a>
                            <a class="dummy-media-object" href="#!">
                                <img src="{{asset("images/avatar-1.png")}}" alt="NotificationStyles"/>
                                <h3>Notification Styles Inspiration</h3>
                            </a>
                        </div>
                    </div><!-- /morphsearch-content -->
                    <span class="morphsearch-close"><i class="icofont icofont-search-alt-1"></i></span>
                </div>
                <!-- search end -->
            </div>
        </nav>
    </header>
    <!-- Side-Nav-->
    <aside class="main-sidebar hidden-print ">
        <section class="sidebar" id="sidebar-scroll">
            <div class="user-panel">
                <div class="f-left image"><img src="{{asset("images/avatar-1.png")}}" alt="User Image"
                                               class="rounded-circle">
                </div>
                <div class="f-left info">
                    <p>John Doe</p>
                    <p class="designation">UX Designer <i class="fa fa-sort-down m-l-5"></i>
                    </p>
                </div>
            </div>
            <!--horizontal Menu Starts-->
            <ul class="sidebar-menu">
                <li class="nav-level">Navigation</li>
                <li class="treeview">
                    <a href="<?= route("home");?>">
                        <b> Trang chủ </b>
                    </a>
                </li>
                <li><a href="<?= route("all")?>"><span>  Đủ bộ </span></a></li>

                <li class="treeview"><a href="#"><span>  Thể loại  </span><i
                                class="icon-arrow-down"></i></a>
                    <ul class="mega-menu treeview-menu">
                        <li class="col-md-12">
                            <div class="card-block mega-card">
                                <ul class="mega-list row">
                                    <?php
                                    $genres = \App\PrepareData\PrepareAllData::getAllGenre();
                                    $count = ceil(count($genres) / 6);
                                    ?>
                                    @while (count($genres)!=0)
                                        <li class="col-xs-12 col-md-2">
                                            <ul>
                                                @for($i = 0;$i < $count;$i++)
                                                    <?php $row = array_shift($genres);?>
                                                    @if($row != null)
                                                        <li>
                                                            <a class="waves-effect waves-dark"
                                                               href="<?= route("genre", [
                                                                   "genreId" => $row["GenreID"],
                                                                   "genreName" => $row["GenreName"]
                                                               ]);?>">
                                                                <i class="icon-arrow-right"></i> {!!$row["GenreName"]!!}
                                                            </a>
                                                        </li>
                                                    @endif
                                                @endfor
                                            </ul>
                                        </li>
                                    @endwhile
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>

            </ul>
            <!--horizontal Menu Ends-->
        </section>
    </aside>
    <!-- Sidebar chat start -->
</div>
<div class="content-wrapper">
    <div class="container-fluid">
        @yield("content")
    </div>
</div>

<!-- Warning Section Starts -->
<!-- Older IE warning message -->
<!--[if lt IE 9]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers
        to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="{{asset(" images/browser/chrome.png")}}" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="{{asset(" images/browser/firefox.png")}}" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="{{asset(" images/browser/opera.png")}}" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="{{asset(" images/browser/safari.png")}}" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="{{asset(" images/browser/ie.png")}}" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
<!-- Warning Section Ends -->

<!-- Required Jqurey -->
<script type="text/javascript" src="{{asset("bower_components/jquery/js/jquery.min.js")}}"></script>
<script type="text/javascript" src="{{asset("bower_components/jquery-ui/js/jquery-ui.min.js")}}"></script>
<script type="text/javascript" src="{{asset("bower_components/popper.js/js/popper.min.js")}}"></script>

<!-- Required Fremwork -->
<script type="text/javascript" src="{{asset("bower_components/bootstrap/js/bootstrap.min.js")}}"></script>

<!-- waves effects.js -->
<script src="{{asset("plugins//waves/js/waves.min.js")}}"></script>

<!-- Scrollbar JS-->
<script type="text/javascript" src="{{asset("bower_components/jquery-slimscroll/js/jquery.slimscroll.js")}}"></script>
<script type="text/javascript" src="{{asset("plugins//jquery.nicescroll/js/jquery.nicescroll.min.js")}}"></script>


<!--classic JS-->
<script type="text/javascript" src="{{asset("bower_components/classie/js/classie.js")}}"></script>

<!-- notification -->
<script src="{{asset("plugins//notification/js/bootstrap-growl.min.js")}}"></script>

<!-- Sparkline charts -->
<script src="{{asset("bower_components/jquery-sparkline/js/jquery.sparkline.js")}}"></script>

<!-- Counter js  -->
<script type="text/javascript" src="{{asset("bower_components/waypoints/js/jquery.waypoints.min.js")}}"></script>
<script src="{{asset("plugins//countdown/js/jquery.counterup.js")}}"></script>

<!-- custom js -->
<script type="text/javascript" src="{{asset("js/main.min.js")}}"></script>
<script type="text/javascript" src="{{asset("pages/dashboard.js")}}"></script>
<script type="text/javascript" src="{{asset("pages/elements.js")}}"></script>
<script src="{{asset("js/menu-horizontal.min.js")}}"></script>


</body>
</html>
