
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
    <meta name="description" content="Appestia App Landing Page Template by Phoenixcoded">
    <meta name="keywords" content="appestia, Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
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

    <!-- Rating css -->
    <link rel="stylesheet" href="assets/plugins/rating/css/rating.css">
    <link rel="stylesheet" type="text/css" href="assets/icon/ion-icon/css/ionicons.min.css">

    <!-- slick.css-->
    <link href="../bower_components/slick-carousel/css/slick.css" rel="stylesheet">
    <link href="assets/css/slick-theme.css" rel="stylesheet">

    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">

    <!-- Responsive.css-->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

    <!--color css-->
    <link rel="stylesheet" type="text/css" href="assets/css/color/inverse.css" id="color"/>


</head>
@include('layouts.PageHeader')

@include('layouts.PagesLeftSideNav')
    <div class="content-wrapper">
        <!-- Container-fluid starts -->
        <div class="container-fluid">
            <!-- Main content starts -->
            <div>
                <!-- Row Starts -->
                <div class="row">
                    <div class="col-lg-12 p-0">
                        <div class="main-header">
                            <h4>Berserk</h4>
                            <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                                <li class="breadcrumb-item"><a href="/"><i class="icofont icofont-home"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="#!">Truyện</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ URL::route('Truyen') }}">Berserk</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- Row end -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-lg-5 ">
                                        <div class="port_details_all_img row">
                                            <div class="col-lg-12">
                                                <div id="big_banner">
                                                    <div class="port_big_img">
                                                        <img class="img img-fluid" src="image/2.jpg" alt="Big_ Details">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7  product-detail" id="product-detail">
                                        <div class="row">
                                            <div>
                                                <div class="col-lg-12">
                                                    <span class="txt-muted d-inline-block">Status: <label class="label label-lg bg-success">Đã hoàn thành</label> </span>
                                                    <span class="f-right"><label class="badge badge-lg bg-primary">Nổi Bật</label></span>
                                                </div>
                                                <div class="col-lg-12">
                                                    <h4 class="pro-desc">Pokemon Special</h4>
                                                </div>
                                                <div class="col-lg-12">
                                                    <span class="txt-muted"> Tác giả : Shinkai Makoto </span>
                                                </div>

                                                <div class="stars stars-example-css m-t-15 detail-stars col-lg-12">
                                                    <select id="product-view" class="rating-star" name="rating" autocomplete="off">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select>
                                                </div>

                                                <div class="col-lg-12">
                                                    <span class="txt-primary product-price"><i class="icofont icofont-woman-bird"></i>Rating:</span> <span class="txt-primary product-price">4.95</span>
                                                    <hr>
                                                    <p>
                                                      Pokemon Special lấy bối cảnh một tương lai giả tưởng, nơi những thực thể sống mới mang tên Bảo Thạch ra đời. 28 Bảo thạch này phải chiến đấu chống lại Nguyệt nhân vì họ muốn biến những thực thể này thành vật trang trí. Chính vì vậy, mỗi Bảo thạch đều được ấn định một nhiệm vụ như đấu sĩ hay dược sĩ. PS: Chắc chắn Anime sẽ làm hết arc Winter tức là chap 20 nên nếu ai xem hết Anime có thể xem tiếp từ chap 20 Chú thích: 1, Về cơ bản Bảo thạch không có giới tính do không phải là người (mà là ngọc) tuy nhiên tác giả đã ghi là chọn cách xưng hô kiểu nam do không có kiểu xưng hô trung tính (nên đừng thấy lạ khi vài Bảo Thạch trông nữ tính nhưng lại xưng hô kiểu nam hay thắc mắc về giới tính) 2, Trí nhớ của Bảo thạch nằm trong mọi phần thân thể nên mất phần thân thể nào sẽ mất 1 phần ký ức nhưng không chết và chỉ cần tập hợp đủ ở mức độ nào đó là có thể tái sinh (chap 1, 2 manga/ anime) 3, Trong cơ thể bảo thạch có một loại vi sinh vật hấp thụ ánh sáng chuyển hóa năng lượng giúp bảo thạch di chuyển nên hầu như buổi tối bảo thạch không hoạt động vì không có đủ năng lượng (giống như cây cối vậy) (chap 1, 2 anime/manga)
                                                    </p>
                                                    <hr>
                                                </div>
                                                <div class="col-lg-12 col-sm-12 m-t-40">
                                                    <button type="button" class="btn btn-inverse-primary waves-effect waves-light m-r-20">
                                                        <i class="icofont icofont-love"></i><span class="m-l-10">Yêu Thích</span>
                                                    </button>
                                                    <button type="button" class="btn btn-inverse-primary waves-effect waves-light">
                                                        <a href="{{ URL::route('TrangTruyen') }}"><i class="icofont icofont-eye-alt f-16"></i></a>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- start col-lg-9 -->
                    <div class="col-lg-12">
                      <!-- Nav tabs -->
                      <div class="tab-header">
                        <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#personal" role="tab">Thông Tin</a>
                            <div class="slide"></div>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#project" role="tab">Chương</a>
                            <div class="slide"></div>
                          </li>
                        </ul>
                      </div>
                      <!-- end of tab-header -->

                      <div class="tab-content">
                        <div class="tab-pane active" id="personal" role="tabpanel">
                          <div class="card">
                            <div class="card-header">
                              <h5 class="card-header-text">Mô tả</h5>
                            </div>
                            <div class="card-block">
                              <div class="view-info">
                                <div class="row">
                                  <div class="col-lg-12">
                                    <div class="general-info">
                                      <div class="row">
                                        <div class="col-lg-12 col-xl-6">
                                          <table class="table m-0">
                                            <tbody>
                                              <tr>
                                                <th scope="row">Ngày bắt đầu</th>
                                                <td>October 25th, 1990</td>
                                              </tr>
                                              <tr>
                                                <th scope="row">Ngày kết thúc</th>
                                                <td>None</td>
                                              </tr>
                                              <tr>
                                                <th scope="row">Số Chương</th>
                                                <td>123</td>
                                              </tr>
                                              <tr>
                                                <th scope="row">Tổng Số Chương</th>
                                                <td>252</td>
                                              </tr>
                                              <tr>
                                                <th scope="row">Lượt xem</th>
                                                <td>100, 701</td>
                                              </tr>
                                            </tbody>
                                          </table>
                                        </div>
                                        <!-- end of table col-lg-6 -->

                                      </div>
                                      <!-- end of row -->
                                    </div>
                                    <!-- end of general info -->
                                  </div>
                                  <!-- end of col-lg-12 -->
                                </div>
                                <!-- end of row -->
                              </div>
                              <!-- end of view-info -->

                            </div>
                            <!-- end of card-block -->
                          </div>
                          <!-- end of card-->

                        </div>
                        <!-- end of tab-pane -->
                        <!-- end of about us tab-pane -->

                        <!-- start tab-pane of project tab -->
                        <div class="tab-pane" id="project" role="tabpanel">
                          <div class="card">
                            <div class="card-header">
                              <h5 class="card-header-text">Danh Sách</h5>
                              </div>
                              <!-- end of card-header  -->
                              <div class="row">
                                <div class="col-lg-12">
                                  <div class="project-table">
                                    <div class="table-responsive">
                                      <table class="table table-hover">
                                        <thead>
                                          <tr>
                                            <th class="text-center txt-primary">Chương</th>
                                            <th class="text-center txt-primary">Ngày Đăng</th>
                                            <th class="text-center txt-primary">Nhóm dịch</th>
                                          </tr>
                                        </thead>
                                        <tbody class="text-center">
                                          <tr>
                                            <td><a href="{{ URL::route('TrangTruyen') }}">Lorem ipsum dolor sit amet</a></td>
                                            <td>Oct 25th, 2014</td>
                                            <td>GàMeii ~ Gà con lon ton</td>
                                          </tr>
                                          <tr>
                                            <td><a href="{{ URL::route('TrangTruyen') }}">Lorem ipsum dolor sit amet</a></td>
                                            <td>Oct 25th, 2014</td>
                                            <td>GàMeii ~ Gà con lon ton</td>
                                          </tr>
                                          <tr>
                                            <td><a href="{{ URL::route('TrangTruyen') }}">Lorem ipsum dolor sit amet</a></td>
                                            <td>Oct 25th, 2014</td>
                                            <td>GàMeii ~ Gà con lon ton</td>
                                          </tr>
                                          <tr>
                                            <td><a href="{{ URL::route('TrangTruyen') }}">Lorem ipsum dolor sit amet</a></td>
                                            <td>Oct 25th, 2014</td>
                                            <td>GàMeii ~ Gà con lon ton</td>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td><a href="{{ URL::route('TrangTruyen') }}">Lorem ipsum dolor sit amet</a></td>
                                            <td>Oct 25th, 2014</td>
                                            <td>GàMeii ~ Gà con lon ton</td>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td><a href="{{ URL::route('TrangTruyen') }}">Lorem ipsum dolor sit amet</a></td>
                                            <td>Oct 25th, 2014</td>
                                            <td>GàMeii ~ Gà con lon ton</td>
                                          </tr>
                                          <tr>
                                            <td><a href="{{ URL::route('TrangTruyen') }}">Lorem ipsum dolor sit amet</a></td>
                                            <td>Oct 25th, 2014</td>
                                            <td>GàMeii ~ Gà con lon ton</td>
                                          </tr>
                                          <tr>
                                            <td><a href="{{ URL::route('TrangTruyen') }}">Lorem ipsum dolor sit amet</a></td>
                                            <td>Oct 25th, 2014</td>
                                            <td>GàMeii ~ Gà con lon ton</td>
                                          </tr>
                                          <tr>
                                            <td><a href="{{ URL::route('TrangTruyen') }}">Lorem ipsum dolor sit amet</a></td>
                                            <td>Oct 25th, 2014</td>
                                            <td>GàMeii ~ Gà con lon ton</td>
                                          </tr>
                                          <tr>
                                            <td><a href="{{ URL::route('TrangTruyen') }}">Lorem ipsum dolor sit amet</a></td>
                                            <td>Oct 25th, 2014</td>
                                            <td>GàMeii ~ Gà con lon ton</td>
                                          </tr>
                                          <tr>
                                            <td><a href="{{ URL::route('TrangTruyen') }}">Lorem ipsum dolor sit amet</a></td>
                                            <td>Oct 25th, 2014</td>
                                            <td>GàMeii ~ Gà con lon ton</td>
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

                    <!-- Votes and Comments -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="user-unread-msg">
                                <div class="media friendlist-box">
                                    <div class="mr-3 media-middle photo-table">
                                        <a href="#">
                                            <img class="rounded-circle" src="assets/images/avatar-1.png" alt="chat-user">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h6>Josephin Doe</h6>
                                        <div class="m-t-10 m-b-10">
                                        <h5 class="text-primary text-left d-inline">
                                            <i class="icofont icofont-ui-rating"></i>
                                            <i class="icofont icofont-ui-rating"></i>
                                            <i class="icofont icofont-ui-rating"></i>
                                            <i class="icofont icofont-ui-rating"></i>
                                            <i class="icofont icofont-ui-rate-blank"></i>
                                        </h5>
                                        <span class="f-right text-muted ">4:00 pm, 25 January, 2017</span>
                                        </div>
                                        <p>This is awesome product and, I am very happy with delivery & product packaging. Overall experience is good & I prefer to buy it again from this portals and like more orders.</p>
                                        <i class="icofont icofont-reply user-unread-reply"></i>
                                        <i class="icofont icofont-settings-alt c-pointer txt-muted"></i>
                                    </div>
                                </div>
                                <div class="media friendlist-box">
                                    <div class="mr-3 media-middle photo-table">
                                        <a href="#">
                                            <img class="rounded-circle" src="assets/images/avatar-1.png" alt="chat-user">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h6>Nina Doe</h6>
                                        <div class="m-t-10 m-b-10">
                                            <h5 class="text-left d-inline text-success">
                                                <i class="icofont icofont-ui-rating"></i>
                                                <i class="icofont icofont-ui-rating"></i>
                                                <i class="icofont icofont-ui-rating"></i>
                                                <i class="icofont icofont-ui-rating"></i>
                                                <i class="icofont icofont-ui-rating"></i>
                                            </h5>
                                            <span class="f-right text-muted ">6:00 pm, 21 January, 2017</span>
                                        </div>
                                        <p>This is awesome product and, I am very happy with delivery & product packaging. Overall experience is good & I prefer to buy it again from this portals and like more orders.</p>
                                        <i class="icofont icofont-reply user-unread-reply"></i>
                                        <i class="icofont icofont-settings-alt c-pointer txt-muted"></i>
                                    </div>
                                </div>
                                <div class="media friendlist-box">
                                    <div class="mr-3 media-middle photo-table">
                                        <a href="#">
                                            <img class="rounded-circle" src="assets/images/avatar-1.png" alt="chat-user">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h6>Rena Joness</h6>
                                        <div class="m-t-10 m-b-10">
                                            <h5 class="text-left d-inline text-success">
                                                <i class="icofont icofont-ui-rating"></i>
                                                <i class="icofont icofont-ui-rating"></i>
                                                <i class="icofont icofont-ui-rate-add"></i>
                                                <i class="icofont icofont-ui-rate-blank"></i>
                                                <i class="icofont icofont-ui-rate-blank"></i>
                                            </h5>
                                            <span class="f-right text-muted ">9:00 pm, 11 January, 2017</span>
                                        </div>
                                        <p>This is awesome product and, I am very happy with delivery & product packaging. Overall experience is good & I prefer to buy it again from this portals and like more orders.</p>
                                        <i class="icofont icofont-reply user-unread-reply"></i>
                                        <i class="icofont icofont-settings-alt c-pointer txt-muted"></i>
                                    </div>
                                </div>
                                <div class="media friendlist-box">
                                    <div class="mr-3 media-middle photo-table">
                                        <a href="#">
                                            <img class="rounded-circle" src="assets/images/avatar-1.png" alt="chat-user">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h6>Dhoni Doe</h6>
                                        <div class="m-t-10 m-b-10">
                                            <h5 class="text-primary text-left d-inline">
                                                <i class="icofont icofont-ui-rating"></i>
                                                <i class="icofont icofont-ui-rating"></i>
                                                <i class="icofont icofont-ui-rating"></i>
                                                <i class="icofont icofont-ui-rate-blank"></i>
                                                <i class="icofont icofont-ui-rate-blank"></i>
                                            </h5>
                                            <span class="f-right text-muted ">4:00 pm, 25 January, 2017</span>
                                        </div>
                                        <p>This is awesome product and, I am very happy with delivery & product packaging. Overall experience is good & I prefer to buy it again from this portals and like more orders.</p>
                                        <i class="icofont icofont-reply user-unread-reply"></i>
                                        <i class="icofont icofont-settings-alt c-pointer txt-muted"></i>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
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

<!--Rating js -->
<script src="../bower_components/jquery-bar-rating/js/jquery.barrating.min.js"></script>
<script src="assets/plugins/rating/js/rating.js"></script>

<!-- Quality Code slick Slider -->
<script src="../bower_components/slick-carousel/js/slick.min.js"></script>

<!-- custom js -->
<script type="text/javascript" src="assets/js/main.min.js"></script>
<script src="assets/pages/product-detail.js"></script>
<script type="text/javascript" src="assets/pages/elements.js"></script>
<script src="assets/js/menu.js"></script>

</body>
</html>
