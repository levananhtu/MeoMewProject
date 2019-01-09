
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Web Comic - MeoMew Team</title>
  <base href="{{asset('')}}">
  <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Meta -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="description" content="Phoenixcoded">
  <meta name="keywords"
  content=", Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
  <meta name="author" content="Phoenixcoded">

  <!-- Favicon icon -->
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

  <!-- Google font-->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

  <!-- iconfont -->
  <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">

  <!-- simple line icon -->
  <link rel="stylesheet" type="text/css" href="assets/icon/simple-line-icons/css/simple-line-icons.css">

  <!-- Required Fremwork -->
  <link rel="stylesheet" type="text/css" href="../bower_components/bootstrap/css/bootstrap.min.css">

  <!-- animation css -->
  <link rel="stylesheet" type="text/css" href="../bower_components/animate.css/css/animate.css">

  <!-- Style.css -->
  <link rel="stylesheet" type="text/css" href="assets/css/main.css">

  <!-- Responsive.css-->
  <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

  <!--color css-->
  <link rel="stylesheet" type="text/css" href="assets/css/color/inverse.css" id="color"/>

</head>

        @include('layouts.AdminHeader')

        @include('layouts.leftSideNav3')

        <div class="content-wrapper">
          <!-- Container-fluid starts -->
          <div class="container-fluid">
            <div>
              <!-- Header Starts -->
              <div class="row">
                <div class="col-sm-12 p-0">
                  <div class="main-header">
                    <h4>Velvet Kiss</h4>
                    <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                      <li class="breadcrumb-item">
                        <a href="index.html">
                          <i class="icofont icofont-home"></i>
                        </a>
                      </li>
                      <li class="breadcrumb-item"><a href="#">Danh Sách</a>
                      </li>
                      <li class="breadcrumb-item"><a href="animation.html">Velvet Kiss</a>
                      </li>
                    </ol>
                  </div>
                </div>
              </div>
              <!-- Header end -->

              <!-- Row start -->
              <div class="row">
                <div class="col-sm-12">
                  <div class="card">
                    <!-- Animation start -->
                    <div class="card-header"><h5 class="card-header-text">Chương 1</h5></div>
                    <div class="card-block">
                      <div class="row">
                        <div class="col-sm-12">
                          <form class="animation-type">
                            <div class="container">
                              <div class="row justify-content-md-center">
                                <div class="col-lg-2 col-md-6 col-xs-3">
                                  <button type="button" class="btn btn-primary btn-md waves-effect waves-light butt js--triggerAnimation">Chương Trước</button>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                  <div class="m-b-30">
                                    <select class="form-control form-control-default waves-effect input input--dropdown js--animations">
                                      <optgroup label="Chương">
                                        <option value="9">Chương 9</option>
                                        <option value="8">Chương 8</option>
                                        <option value="7">Chương 7</option>
                                        <option value="rubberBand">Chương 6</option>
                                        <option value="shake">Chương 5</option>
                                        <option value="swing">Chương 4</option>
                                        <option value="tada">Chương 3</option>
                                        <option value="wobble">Chương 2</option>
                                        <option value="jello">Chương 1</option>
                                      </optgroup>
                                    </select>
                                  </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-xs-6">
                                  <button type="button" class="btn btn-primary btn-md waves-effect waves-light butt js--triggerAnimation">Chương Sau</button>
                                </div>
                              </div>
                            </div>
                          </form>
                          <div id="animationSandbox">
                            <div class="text-center animation-image col-lg-10 m-auto">
                              @for($i = 1;  $i <= 27; $i++)
                              <img class="d-block img-fluid img-thumbnail" src="image/{{$i}}.png" alt="Third slide">
                              @endfor
                            </div>
                          </div>
                          <br>

                          <form class="animation-type">
                            <div class="container">
                              <div class="row justify-content-md-center">
                                <div class="col-lg-2 col-md-6 col-xs-3">
                                  <button type="button" class="btn btn-primary btn-md waves-effect waves-light butt js--triggerAnimation">Chương Trước</button>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                  <div class="m-b-30">
                                    <select class="form-control form-control-default waves-effect input input--dropdown js--animations">
                                      <optgroup label="Attention Seekers">
                                        <option value="9">Chương 9</option>
                                        <option value="8">Chương 8</option>
                                        <option value="7">Chương 7</option>
                                        <option value="rubberBand">Chương 6</option>
                                        <option value="shake">Chương 5</option>
                                        <option value="swing">Chương 4</option>
                                        <option value="tada">Chương 3</option>
                                        <option value="wobble">Chương 2</option>
                                        <option value="jello">Chương 1</option>
                                      </optgroup>
                                    </select>
                                  </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-xs-6">
                                  <button type="button" class="btn btn-primary btn-md waves-effect waves-light butt js--triggerAnimation">Chương Sau</button>
                                </div>
                              </div>
                            </div>
                          </form>

                        </div>
                      </div>
                    </div>
                    <!-- Animation end -->
                  </div>
                </div>
              </div>
              <!-- Row end -->
            </div>
          </div>

          @include('layouts.footer-center')
          <!-- Container-fluid ends -->
        </div>
      </div>

      <!-- Warning Section Starts -->
      <!-- Older IE warning message -->
      <!--[if lt IE 9]>
      <div class="ie-warning">
      <h1>Warning!!</h1>
      <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
      <div class="iew-container">
      <ul class="iew-download">
      <li>
      <a href="http://www.google.com/chrome/">
      <img src="assets/images/browser/chrome.png" alt="Chrome">
      <div>Chrome</div>
    </a>
  </li>
  <li>
  <a href="https://www.mozilla.org/en-US/firefox/new/">
  <img src="assets/images/browser/firefox.png" alt="Firefox">
  <div>Firefox</div>
</a>
</li>
<li>
<a href="http://www.opera.com">
<img src="assets/images/browser/opera.png" alt="Opera">
<div>Opera</div>
</a>
</li>
<li>
<a href="https://www.apple.com/safari/">
<img src="assets/images/browser/safari.png" alt="Safari">
<div>Safari</div>
</a>
</li>
<li>
<a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
<img src="assets/images/browser/ie.png" alt="">
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
<script type="text/javascript" src="../bower_components/jquery/js/jquery.min.js"></script>
<script type="text/javascript" src="../bower_components/jquery-ui/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="../bower_components/popper.js/js/popper.min.js"></script>

<!-- Required Fremwork -->
<script type="text/javascript" src="../bower_components/bootstrap/js/bootstrap.min.js"></script>

<!-- waves effects.js -->
<script src="assets/plugins/waves/js/waves.min.js"></script>

<!-- Scrollbar JS-->
<script type="text/javascript" src="../bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
<script type="text/javascript" src="assets/plugins/jquery.nicescroll/js/jquery.nicescroll.min.js"></script>


<!--classic JS-->
<script type="text/javascript" src="../bower_components/classie/js/classie.js"></script>

<!-- notification -->
<script src="assets/plugins/notification/js/bootstrap-growl.min.js"></script>

<!-- custom js -->
<script type="text/javascript" src="assets/js/main.min.js"></script>
<script type="text/javascript" src="assets/pages/animation.js"></script>
<script type="text/javascript" src="assets/pages/elements.js"></script>
<script src="assets/js/menu.js"></script>


</body>
</html>
