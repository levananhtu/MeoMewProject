
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
  <meta name="keywords" content=", Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
  <meta name="author" content="Phoenixcoded">

  <!-- Favicon icon -->
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

  <!-- Google font-->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

  <!-- iconfont -->
  <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">

  <!-- Font Awesome -->
  <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <!-- simple line icon -->
  <link rel="stylesheet" type="text/css" href="assets/icon/simple-line-icons/css/simple-line-icons.css">

  <!-- Required Fremwork -->
  <link rel="stylesheet" type="text/css" href="../bower_components/bootstrap/css/bootstrap.min.css">

  <!-- Date Picker css -->
  <link rel="stylesheet" href="assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" />

  <!-- Style.css -->
  <link rel="stylesheet" type="text/css" href="assets/css/main.css">

  <!-- Responsive.css-->
  <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

  <!--color css-->
  <link rel="stylesheet" type="text/css" href="assets/css/color/inverse.css" id="color"/>

</head>
      @include('layouts.header2')

      @include('layouts.leftSideNav3')

        <div class="content-wrapper">
          <!-- Container-fluid starts -->
          <div class="container-fluid">
            <div class="row">
              <div class="main-header">
                <h4>Profile</h4>
                <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                  <li class="breadcrumb-item"><a href="index.html"><i class="icofont icofont-home"></i></a>
                  </li>
                  <li class="breadcrumb-item"><a href="#!">Author</a>
                  </li>
                  <li class="breadcrumb-item"><a href="profile.html">Profile</a>
                  </li>
                </ol>
              </div>
            </div>
            <!-- Header end -->
            <div class="row">
              <div class="col-xl-3 col-lg-4">
                <div class="card faq-left">
                  <div class="social-profile">
                    <img class="img-fluid" src="assets/images/social/profile.jpg" alt="">
                    <div class="profile-hvr m-t-15">
                      <i class="icofont icofont-ui-edit p-r-10 c-pointer"></i>
                      <i class="icofont icofont-ui-delete c-pointer"></i>
                    </div>
                  </div>
                  <div class="card-block">
                    <h4 class="f-18 f-normal m-b-10 txt-primary">Makoto Shinkai</h4>
                    <h5 class="f-14">Về tác giả</h5>
                    <p class="m-b-15">Lorem ipsum dolor sit amet, consectet
                      ur adipisicing elit</p>
                      <ul>
                        <li class="faq-contact-card">
                          <i class="icofont icofont-badge"></i>
                          Honor / Award
                        </li>
                      </ul>
                      <p class="m-b-15">Lorem ipsum dolor sit amet, consectet
                        ur adipisicing elit</p>
                      <ul>
                        <li class="faq-contact-card">
                          <i class="icofont icofont-location-pin"></i>
                          Tokyo, Japan
                        </li>
                        <li class="faq-contact-card">
                          <i class="icofont icofont-birthday-cake"></i>
                          November 28th, 1999
                        </li>
                        <li class="faq-contact-card">
                          <i class="icofont icofont-world"></i>
                          <a href="http://phoenixcoded.com">www.phoenixcoded.com</a>
                        </li>
                        <li class="faq-contact-card">
                          <i class="icofont icofont-email"></i>
                          <a href="mailto:joe@example.com">demo@phoenixcoded.com</a>
                        </li>
                      </ul>
                      <div class="faq-profile-btn">
                        <button type="button" class="btn btn-primary waves-effect waves-light">Follows
                        </button>
                        <button type="button" class="btn btn-success waves-effect waves-light">Message
                        </button>
                      </div>

                    </div>
                  </div>
                  <!-- end of card-block -->
                </div>
                <!-- end of col-lg-3 -->

                <!-- start col-lg-9 -->
                <div class="col-xl-9 col-lg-8">
                  <!-- Nav tabs -->
                  <div class="tab-header">
                    <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#project" role="tab">Truyện</a>
                        <div class="slide"></div>
                      </li>
                    </ul>
                  </div>
                  <!-- end of tab-header -->

                  <div class="tab-content">

                    <!-- start tab-pane of project tab -->
                    <div class="tab-pane active" id="project" role="tabpanel">
                      <div class="card">
                        <div class="card-header">
                          <h5 class="card-header-text">Thông tin</h5>
                          <button type="button" class="btn btn-primary waves-effect waves-light f-right">
                            + Thêm truyện</button>
                          </div>
                          <!-- end of card-header  -->
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="project-table">
                                <div class="table-responsive">
                                  <table class="table table-hover">
                                    <thead>
                                      <tr>
                                        <th class="text-center txt-primary pro-pic">Ảnh</th>
                                        <th class="text-center txt-primary">Tên truyện</th>
                                        <th class="text-center txt-primary">Ngày bắt đầu</th>
                                        <th class="text-center txt-primary">Ngày kết thúc</th>
                                        <th class="text-center txt-primary">Tình trạng</th>
                                        <th class="text-center txt-primary">Chỉnh sửa</th>
                                      </tr>
                                    </thead>
                                    <tbody class="text-center">
                                      <tr>
                                        <td>
                                          <img src="assets/images/avatar-2.png" class="rounded-circle" alt="tbl">
                                        </td>
                                        <td>Lorem ipsum dolor sit amet, consectetur </td>
                                        <td>Oct 25th, 2014</td>
                                        <td>Oct 25th, 2015</td>
                                        <td class="text-center"><span class="label label-warning m-t-20">Kết thúc</span>
                                        </td>
                                        <td class="faq-table-btn">
                                          <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Edit">
                                            <i class="icofont icofont-ui-edit"></i>
                                          </button>
                                          <button type="button" class="btn btn-danger waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Delete">
                                            <i class="icofont icofont-ui-delete"></i>
                                          </button>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <img src="assets/images/avatar-2.png" class="rounded-circle" alt="tbl">
                                        </td>
                                        <td>Lorem ipsum dolor sit amett</td>
                                        <td>Oct 25th, 2014</td>
                                        <td>Oct 25th, 2015</td>
                                        <td class="text-center"><span class="label label-warning">Kết thúc</span>
                                        </td>
                                        <td class="faq-table-btn">
                                          <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Edit">
                                            <i class="icofont icofont-ui-edit"></i>
                                          </button>
                                          <button type="button" class="btn btn-danger waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Delete">
                                            <i class="icofont icofont-ui-delete"></i>
                                          </button>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <img src="assets/images/avatar-2.png" class="rounded-circle" alt="tbl">
                                        </td>
                                        <td>Lorem ipsum dolor sit amett</td>
                                        <td>Oct 25th, 2014</td>
                                        <td>Oct 25th, 2015</td>
                                        <td class="text-center"><span class="label label-success">Đang tiến hành</span>
                                        </td>
                                        <td class="faq-table-btn">
                                          <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Edit">
                                            <i class="icofont icofont-ui-edit"></i>
                                          </button>
                                          <button type="button" class="btn btn-danger waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Delete">
                                            <i class="icofont icofont-ui-delete"></i>
                                          </button>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <img src="assets/images/avatar-2.png" class="rounded-circle" alt="tbl">
                                        </td>
                                        <td>Lorem ipsum dolor sit amett</td>
                                        <td>Oct 25th, 2014</td>
                                        <td>Oct 25th, 2015</td>
                                        <td class="text-center"><span class="label label-warning">Kết thúc</span></td>
                                        <td class="faq-table-btn">
                                          <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Edit">
                                            <i class="icofont icofont-ui-edit"></i>
                                          </button>
                                          <button type="button" class="btn btn-danger waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Delete">
                                            <i class="icofont icofont-ui-delete"></i>
                                          </button>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <img src="assets/images/avatar-2.png" class="rounded-circle" alt="tbl">
                                        </td>
                                        <td>Lorem ipsum dolor sit amett</td>
                                        <td>Oct 25th, 2014</td>
                                        <td>Oct 25th, 2015</td>
                                        <td class="text-center"><span class="label label-danger">Tạm ngưng</span></td>
                                        <td class="faq-table-btn">
                                          <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Edit">
                                            <i class="icofont icofont-ui-edit"></i>
                                          </button>
                                          <button type="button" class="btn btn-danger waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Delete">
                                            <i class="icofont icofont-ui-delete"></i>
                                          </button>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <img src="assets/images/avatar-2.png" class="rounded-circle" alt="tbl">
                                        </td>
                                        <td>Lorem ipsum dolor sit amett</td>
                                        <td>Oct 25th, 2014</td>
                                        <td>Oct 25th, 2015</td>
                                        <td class="text-center"><span class="label label-success">Đang tiến hành</span>
                                        </td>
                                        <td class="faq-table-btn">
                                          <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Edit">
                                            <i class="icofont icofont-ui-edit"></i>
                                          </button>
                                          <button type="button" class="btn btn-danger waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Delete">
                                            <i class="icofont icofont-ui-delete"></i>
                                          </button>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <img src="assets/images/avatar-2.png" class="rounded-circle" alt="tbl">
                                        </td>
                                        <td>Lorem ipsum dolor sit amett</td>
                                        <td>Oct 25th, 2014</td>
                                        <td>Oct 25th, 2015</td>
                                        <td class="text-center"><span class="label label-warning m-t-20">Kết thúc</span>
                                        </td>
                                        <td class="faq-table-btn">
                                          <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Edit">
                                            <i class="icofont icofont-ui-edit"></i>
                                          </button>
                                          <button type="button" class="btn btn-danger waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Delete">
                                            <i class="icofont icofont-ui-delete"></i>
                                          </button>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <img src="assets/images/avatar-2.png" class="rounded-circle" alt="tbl">
                                        </td>
                                        <td>Lorem ipsum dolor sit amett</td>
                                        <td>Oct 25th, 2014</td>
                                        <td>Oct 25th, 2015</td>
                                        <td class="text-center"><span class="label label-warning m-t-20">Kết thúc</span>
                                        </td>
                                        <td class="faq-table-btn">
                                          <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Edit">
                                            <i class="icofont icofont-ui-edit"></i>
                                          </button>
                                          <button type="button" class="btn btn-danger waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Delete">
                                            <i class="icofont icofont-ui-delete"></i>
                                          </button>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <img src="assets/images/avatar-2.png" class="rounded-circle" alt="tbl">
                                        </td>
                                        <td>Lorem ipsum dolor sit amett</td>
                                        <td>Oct 25th, 2014</td>
                                        <td>Oct 25th, 2015</td>
                                        <td class="text-center"><span class="label label-success">Đang tiến hành</span>
                                        </td>
                                        <td class="faq-table-btn">
                                          <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Edit">
                                            <i class="icofont icofont-ui-edit"></i>
                                          </button>
                                          <button type="button" class="btn btn-danger waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Delete">
                                            <i class="icofont icofont-ui-delete"></i>
                                          </button>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <img src="assets/images/avatar-2.png" class="rounded-circle" alt="tbl">
                                        </td>
                                        <td>Lorem ipsum dolor sit amett</td>
                                        <td>Oct 25th, 2014</td>
                                        <td>Oct 25th, 2015</td>
                                        <td class="text-center"><span class="label label-warning m-t-20">Kết thúc</span>
                                        </td>
                                        <td class="faq-table-btn">
                                          <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Edit">
                                            <i class="icofont icofont-ui-edit"></i>
                                          </button>
                                          <button type="button" class="btn btn-danger waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Delete">
                                            <i class="icofont icofont-ui-delete"></i>
                                          </button>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <img src="assets/images/avatar-2.png" class="rounded-circle" alt="tbl">
                                        </td>
                                        <td>Lorem ipsum dolor sit amett</td>
                                        <td>Oct 25th, 2014</td>
                                        <td>Oct 25th, 2015</td>
                                        <td class="text-center"><span class="label label-success">Đang tiến hành</span>
                                        </td>
                                        <td class="faq-table-btn">
                                          <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Edit">
                                            <i class="icofont icofont-ui-edit"></i>
                                          </button>
                                          <button type="button" class="btn btn-danger waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Delete">
                                            <i class="icofont icofont-ui-delete"></i>
                                          </button>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                  <!-- end of table -->
                                </div>
                                <!-- end of table responsive -->
                              </div>
                              <!-- end of project table -->
                            </div>
                            <!-- end of col-lg-12 -->
                          </div>
                          <!-- end of row -->
                        </div>
                        <!-- end of card-main -->
                      </div>
                      <!-- end of project pane -->

                    </div>
                    <!-- end of main tab content -->
                  </div>
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
<script type="text/javascript" src="assets/plugins/notification/js/bootstrap-growl.min.js"></script>

<!-- pie chart.js -->
<script type="text/javascript" src="../bower_components/bower-jquery-easyPieChart/js/jquery.easypiechart.min.js"></script>
<script type="text/javascript" src="assets/pages/counter.js"></script>

<!-- Date picker.js -->
<script type="text/javascript" src="../bower_components/moment/js/moment.js"></script>
<script src="assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

<!-- custom js -->
<script type="text/javascript" src="assets/js/main.min.js"></script>
<script type="text/javascript" src="assets/pages/profile.js"></script>
<script type="text/javascript" src="assets/pages/elements.js"></script>
<script type="text/javascript" src="assets/js/menu.min.js"></script>

</body>
</html>
