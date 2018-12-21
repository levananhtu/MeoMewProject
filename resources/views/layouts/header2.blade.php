
<body class="sidebar-mini sidebar-fixed header-fixed">
  <div class="wrapper">
    <div class="loader-bg">
      <div class="loader-bar">
      </div>
    </div>

    <!-- Navbar-->
    <header class="main-header-top hidden-print">
      <a href="index.html" class="logo"><img class="img-fluid able-logo" src="assets/images/logo.png" alt="Theme-logo"></a>
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button--><a href="#!" class="sidebar-toggle"></a>
        <!-- Navbar Right Menu-->
        <div class="navbar-custom-menu">
          <ul class="top-nav">
            <!--Notification Menu-->

            <li class="dropdown pc-rheader-submenu message-notification search-toggle">
              <a href="#!" id="morphsearch-search" class="drop icon-circle txt-white">
                <i class="icofont icofont-search-alt-1"></i>
              </a>
            </li>
            <li class="dropdown notification-menu">
              <a href="#!" data-toggle="dropdown" aria-expanded="false" class="dropdown-toggle">
                <i class="icon-bell"></i>
                <span class="badge badge-danger header-badge">3</span>
              </a>
              <ul class="dropdown-menu">
                <li class="not-head">Bạn có <b class="text-primary">3</b> tin mới.</li>
                <li class="bell-notification">
                  <a href="javascript:;" class="media">
                    <span class="mr-3 media-icon">
                      <img class="rounded-circle" src="assets/images/avatar-1.png" alt="User Image">
                    </span>
                    <div class="media-body"><span class="block">Berserk Chương 352</span><span class="text-muted block-time">2min ago</span></div></a>
                  </li>
                  <li class="bell-notification">
                    <a href="javascript:;" class="media">
                      <span class="mr-3 media-icon">
                        <img class="rounded-circle" src="assets/images/avatar-2.png" alt="User Image">
                      </span>
                      <div class="media-body"><span class="block">Battle Royale Chương 90</span><span class="text-muted block-time">20min ago</span></div></a>
                    </li>
                    <li class="bell-notification">
                      <a href="javascript:;" class="media"><span class="mr-3 media-icon">
                        <img class="rounded-circle" src="assets/images/avatar-3.png" alt="User Image">
                      </span>
                      <div class="media-body"><span class="block">Sanctuary Chương 47</span><span class="text-muted block-time">3 hours ago</span></div></a>
                    </li>
                    <li class="not-footer">
                      <a href="#!">See all notifications.</a>
                    </li>
                  </ul>
                </li>

                <!-- window screen -->
                <li class="pc-rheader-submenu">
                  <a href="#!" class="drop icon-circle" onclick="javascript:toggleFullScreen()">
                    <i class="icon-size-fullscreen"></i>
                  </a>

                </li>

                <li>
                  <button type="button" class="btn btn-primary btn-md waves-effect waves-light butt" onclick="window.location='{{ URL::route('DangKy') }}'">Đăng ký</button>
                  <button type="button" class="btn btn-primary btn-md waves-effect waves-light butt" onclick="window.location='{{ URL::route('DangNhap') }}'">Đăng nhập</button>
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
                      <img class="round" src="http://0.gravatar.com/avatar/81b58502541f9445253f30497e53c280?s=50&d=identicon&r=G" alt="Sara Soueidan"/>
                      <h3>Sara Soueidan</h3>
                    </a>

                    <a class="dummy-media-object" href="#!">
                      <img class="round" src="http://1.gravatar.com/avatar/9bc7250110c667cd35c0826059b81b75?s=50&d=identicon&r=G" alt="Shaun Dona"/>
                      <h3>Shaun Dona</h3>
                    </a>
                  </div>
                  <div class="dummy-column">
                    <h2>Popular</h2>
                    <a class="dummy-media-object" href="#!">
                      <img src="assets/images/avatar-1.png" alt="PagePreloadingEffect"/>
                      <h3>Page Preloading Effect</h3>
                    </a>

                    <a class="dummy-media-object" href="#!">
                      <img src="assets/images/avatar-1.png" alt="DraggableDualViewSlideshow"/>
                      <h3>Draggable Dual-View Slideshow</h3>
                    </a>
                  </div>
                  <div class="dummy-column">
                    <h2>Recent</h2>
                    <a class="dummy-media-object" href="http://tympanus.net/codrops/2014/10/07/tooltip-styles-inspiration/">
                      <img src="assets/images/avatar-1.png" alt="TooltipStylesInspiration"/>
                      <h3>Tooltip Styles Inspiration</h3>
                    </a>
                    <a class="dummy-media-object" href="#!">
                      <img src="assets/images/avatar-1.png" alt="NotificationStyles"/>
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
