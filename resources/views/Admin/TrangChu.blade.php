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
    <meta name="keywords"  content=", Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
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

    <!-- weather css -->
    <link rel="stylesheet" type="text/css" href="assets/icon/weather-icons/css/weather-icons.min.css">
    <link rel="stylesheet" type="text/css" href="assets/icon/weather-icons/css/weather-icons-wind.min.css">

    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">

    <!-- Responsive.css-->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

    <!--color css-->
    <link rel="stylesheet" type="text/css" href="assets/css/color/inverse.css" id="color"/>

</head>
@include('layouts.header2')
@include('layouts.leftSideNav2')
    <div class="content-wrapper">
        <!-- Container-fluid starts -->
        <div class="container-fluid">
            <!-- Row Starts -->
            <div class="row">
                <div class="col-sm-12 p-0">
                    <div class="main-header">
                        <h2>Trang Chủ</h2>
                        <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                            <li class="breadcrumb-item"><a href="index.html"><i class="icofont icofont-home"></i></a>
                            </li>
                            <li class="breadcrumb-item"><a href="#!">Trang Chủ</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- Row end -->
            <div class="page-body">
                <div class="row">
                    <!-- Left column start -->
                    <div class="col-lg-9">
                      <h4>Ngẫu Nhiên</h4>
                        <div class="job-card card-columns">
                            <!-- Job card start -->
                            <div class="card">
                                <div class="card-header">
                                    <div class="media">
                                        <a class="media-left media-middle" href="#">
                                            <img class="media-object img-60"
                                                 src="assets/images/browser/chrome.png"
                                                 alt="Generic placeholder image">
                                        </a>
                                        <div class="media-body media-middle">
                                            <div class="company-name col-md-9">
                                                <p>A Secret Just Between You and Me</p>
                                            </div>
                                            <div class="job-badge col-md-3">
                                                <label class="label bg-primary">Nổi Bật</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-block">
                                    <div class="job-lable">
                                        <label class="label">Thể loại 1</label>
                                        <label class="label">Thể loại 2</label>
                                        <label class="label">Thể loại 3</label>
                                        <label class="label">Thể loại 4</label>
                                    </div>
                                    <h6 class="job-card-desc">Nội dung</h6>
                                    <p class="text-muted">một cặp đôi yuri cực kì dễ thương :v</p>
                                    <div class="job-meta-data"><i
                                            class="icofont icofont-woman-bird"></i>Đánh giá
                                    </div>
                                    <div class="job-meta-data"><i
                                            class="icofont icofont-sand-clock"></i><label class="label label-lg bg-primary">Đang tiến hành</label>
                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <button type="button"
                                            class="btn btn-primary waves-effect waves-light">
                                            <i class="icofont icofont-love"></i>Yêu Thích
                                    </button>
                                </div>
                            </div>
                            <!-- Job card end -->

                            <!-- Job card start -->
                            <div class="card">
                                <div class="card-header">
                                    <div class="media">
                                      <div class="row">
                                        <a class="media-left media-middle" href="#">
                                          <img class="media-object img-60"
                                          src="assets/images/browser/firefox.png"
                                          alt="Generic placeholder image">
                                        </a>
                                        <div class="media-body media-middle">
                                          <div class="company-name col-md-9">
                                            <p>Kanojo to Kanojo no Neko</p>
                                          </div>
                                          <div class="job-badge col-md-3">
                                            <label class="label bg-primary">Nổi Bật</label>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                <div class="card-block">
                                    <div class="job-lable">
                                        <label class="label">Thể loại 1</label>
                                        <label class="label">Thể loại 2</label>
                                        <label class="label">Thể loại 3</label>
                                    </div>
                                    <h6 class="job-card-desc">Nội Dung</h6>
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                        et dolore magna aliqua.</p>
                                    <div class="job-meta-data"><i
                                            class="icofont icofont-woman-bird"></i>Đánh giá:
                                    </div>
                                    <div class="job-meta-data"><i
                                            class="icofont icofont-sand-clock"></i><label class="label label-lg bg-danger">Tạm Ngưng</label>
                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <button type="button"
                                            class="btn btn-primary waves-effect waves-light"><i class="icofont icofont-love"></i> Yêu Thích
                                    </button>
                                </div>
                            </div>
                            <!-- Job card end -->

                            <!-- Job card start -->
                            <div class="card">
                                <div class="card-header">
                                    <div class="media">
                                        <a class="media-left media-middle" href="#">
                                            <img class="media-object img-60"
                                                 src="assets/images/browser/ie.png"
                                                 alt="Generic placeholder image">
                                        </a>
                                        <div class="media-body media-middle">
                                            <div class="company-name col-md-9">
                                                <p>Ánh sáng - bóng tối (Liên minh huyền thoại)</p>
                                            </div>
                                            <div class="job-badge col-md-3">
                                                <label class="label bg-primary">Nổi Bật</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-block">
                                    <div class="job-lable">
                                        <label class="label">Thể Loại 1</label>
                                        <label class="label">Thể Loại 2</label>
                                        <label class="label">Thể Loại 6</label>
                                        <label class="label">Thể Loại 7</label>
                                        <label class="label">Thể Loại 4</label>
                                    </div>
                                    <h6 class="job-card-desc">Nội Dung</h6>
                                    <p class="text-muted">Trật tự và hỗn loạn, ánh sáng và bóng tối. Cuộc chiến đã đến hồi kết.</p>
                                    <div class="job-meta-data"><i
                                            class="icofont icofont-woman-bird"></i>Đánh giá:
                                    </div>
                                    <div class="job-meta-data"><i
                                            class="icofont icofont-sand-clock"></i><label class="label label-lg bg-primary">Đang tiến hành</label>
                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <button type="button"
                                            class="btn btn-primary waves-effect waves-light"><i class="icofont icofont-love"></i> Yêu Thích
                                    </button>
                                </div>
                            </div>
                            <!-- Job card end -->

                            <!-- Job card start -->
                            <div class="card">
                                <div class="card-header">
                                    <div class="media">
                                        <a class="media-left media-middle" href="#">
                                            <img class="media-object img-60"
                                                 src="assets/images/browser/opera.png"
                                                 alt="Generic placeholder image">
                                        </a>
                                        <div class="media-body media-middle">
                                            <div class="company-name col-md-9">
                                                <p>Bỗng Dưng Lại Yêu</p>
                                            </div>
                                            <div class="job-badge col-md-3">
                                                <label class="label bg-primary">Nổi Bật</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-block">
                                    <div class="job-lable">
                                        <label class="label">Thể Loại 1</label>
                                        <label class="label">Thể Loại 3</label>
                                        <label class="label">Thể Loại 6</label>
                                    </div>
                                    <h6 class="job-card-desc">Nội Dung</h6>
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                        et dolore magna aliqua. adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua</p>
                                    <div class="job-meta-data"><i
                                            class="icofont icofont-woman-bird"></i>Đánh giá:
                                    </div>
                                    <div class="job-meta-data"><i
                                            class="icofont icofont-sand-clock"></i><label class="label label-lg bg-danger">Tạm ngưng</label>
                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <button type="button"
                                            class="btn btn-primary waves-effect waves-light"> <i class="icofont icofont-love"></i> Yêu Thích
                                    </button>
                                </div>
                            </div>
                            <!-- Job card end -->
                            <!-- Job card start -->
                            <div class="card">
                                <div class="card-header">
                                    <div class="media">
                                        <a class="media-left media-middle" href="#">
                                            <img class="media-object img-60"
                                                 src="assets/images/browser/opera.png"
                                                 alt="Generic placeholder image">
                                        </a>
                                        <div class="media-body media-middle">
                                            <div class="company-name col-md-9">
                                                <p>Bỗng Dưng Lại Yêu</p>
                                            </div>
                                            <div class="job-badge col-md-3">
                                                <label class="label bg-primary">Nổi Bật</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-block">
                                    <div class="job-lable">
                                        <label class="label">Thể Loại 1</label>
                                        <label class="label">Thể Loại 3</label>
                                        <label class="label">Thể Loại 6</label>
                                    </div>
                                    <h6 class="job-card-desc">Nội Dung</h6>
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                        et dolore magna aliqua. adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua</p>
                                    <div class="job-meta-data"><i
                                            class="icofont icofont-woman-bird"></i>Đánh giá:
                                    </div>
                                    <div class="job-meta-data"><i
                                            class="icofont icofont-sand-clock"></i><label class="label label-lg bg-danger">Tạm ngưng</label>
                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <button type="button"
                                            class="btn btn-primary waves-effect waves-light"> <i class="icofont icofont-love"></i> Yêu Thích
                                    </button>
                                </div>
                            </div>
                            <!-- Job card end -->
                            <!-- Job card start -->
                            <div class="card">
                                <div class="card-header">
                                    <div class="media">
                                        <a class="media-left media-middle" href="#">
                                            <img class="media-object img-60"
                                                 src="assets/images/browser/opera.png"
                                                 alt="Generic placeholder image">
                                        </a>
                                        <div class="media-body media-middle">
                                            <div class="company-name col-md-9">
                                                <p>Bỗng Dưng Lại Yêu</p>
                                            </div>
                                            <div class="job-badge col-md-3">
                                                <label class="label bg-primary">Nổi Bật</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-block">
                                    <div class="job-lable">
                                        <label class="label">Thể Loại 1</label>
                                        <label class="label">Thể Loại 3</label>
                                        <label class="label">Thể Loại 6</label>
                                    </div>
                                    <h6 class="job-card-desc">Nội Dung</h6>
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                        et dolore magna aliqua. adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua</p>
                                    <div class="job-meta-data"><i
                                            class="icofont icofont-woman-bird"></i>Đánh giá:
                                    </div>
                                    <div class="job-meta-data"><i
                                            class="icofont icofont-sand-clock"></i><label class="label label-lg bg-danger">Tạm ngưng</label>
                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <button type="button"
                                            class="btn btn-primary waves-effect waves-light"> <i class="icofont icofont-love"></i> Yêu Thích
                                    </button>
                                </div>
                            </div>
                            <!-- Job card end -->
                            <!-- Job card start -->
                            <div class="card">
                                <div class="card-header">
                                    <div class="media">
                                        <a class="media-left media-middle" href="#">
                                            <img class="media-object img-60"
                                                 src="assets/images/browser/opera.png"
                                                 alt="Generic placeholder image">
                                        </a>
                                        <div class="media-body media-middle">
                                            <div class="company-name col-md-9">
                                                <p>Bỗng Dưng Lại Yêu</p>
                                            </div>
                                            <div class="job-badge col-md-3">
                                                <label class="label bg-primary">Nổi Bật</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-block">
                                    <div class="job-lable">
                                        <label class="label">Thể Loại 1</label>
                                        <label class="label">Thể Loại 3</label>
                                        <label class="label">Thể Loại 6</label>
                                    </div>
                                    <h6 class="job-card-desc">Nội Dung</h6>
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                        et dolore magna aliqua. adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua</p>
                                    <div class="job-meta-data"><i
                                            class="icofont icofont-woman-bird"></i>Đánh giá:
                                    </div>
                                    <div class="job-meta-data"><i
                                            class="icofont icofont-sand-clock"></i><label class="label label-lg bg-danger">Tạm ngưng</label>
                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <button type="button"
                                            class="btn btn-primary waves-effect waves-light"> <i class="icofont icofont-love"></i> Yêu Thích
                                    </button>
                                </div>
                            </div>
                            <!-- Job card end -->
                            <!-- Job card start -->
                            <div class="card">
                                <div class="card-header">
                                    <div class="media">
                                        <a class="media-left media-middle" href="#">
                                            <img class="media-object img-60"
                                                 src="assets/images/browser/opera.png"
                                                 alt="Generic placeholder image">
                                        </a>
                                        <div class="media-body media-middle">
                                            <div class="company-name col-md-9">
                                                <p>Bỗng Dưng Lại Yêu</p>
                                            </div>
                                            <div class="job-badge col-md-3">
                                                <label class="label bg-primary">Nổi Bật</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-block">
                                    <div class="job-lable">
                                        <label class="label">Thể Loại 1</label>
                                        <label class="label">Thể Loại 3</label>
                                        <label class="label">Thể Loại 6</label>
                                    </div>
                                    <h6 class="job-card-desc">Nội Dung</h6>
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                        et dolore magna aliqua. adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua</p>
                                    <div class="job-meta-data"><i
                                            class="icofont icofont-woman-bird"></i>Đánh giá:
                                    </div>
                                    <div class="job-meta-data"><i
                                            class="icofont icofont-sand-clock"></i><label class="label label-lg bg-danger">Tạm ngưng</label>
                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <button type="button"
                                            class="btn btn-primary waves-effect waves-light"> <i class="icofont icofont-love"></i> Yêu Thích
                                    </button>
                                </div>
                            </div>
                            <!-- Job card end -->
                            <!-- Job card start -->
                            <div class="card">
                                <div class="card-header">
                                    <div class="media">
                                        <a class="media-left media-middle" href="#">
                                            <img class="media-object img-60"
                                                 src="assets/images/browser/opera.png"
                                                 alt="Generic placeholder image">
                                        </a>
                                        <div class="media-body media-middle">
                                            <div class="company-name col-md-9">
                                                <p>Bỗng Dưng Lại Yêu</p>
                                            </div>
                                            <div class="job-badge col-md-3">
                                                <label class="label bg-primary">Nổi Bật</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-block">
                                    <div class="job-lable">
                                        <label class="label">Thể Loại 1</label>
                                        <label class="label">Thể Loại 3</label>
                                        <label class="label">Thể Loại 6</label>
                                    </div>
                                    <h6 class="job-card-desc">Nội Dung</h6>
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                        et dolore magna aliqua. adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua</p>
                                    <div class="job-meta-data"><i
                                            class="icofont icofont-woman-bird"></i>Đánh giá:
                                    </div>
                                    <div class="job-meta-data"><i
                                            class="icofont icofont-sand-clock"></i><label class="label label-lg bg-danger">Tạm ngưng</label>
                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <button type="button"
                                            class="btn btn-primary waves-effect waves-light"> <i class="icofont icofont-love"></i> Yêu Thích
                                    </button>
                                </div>
                            </div>
                            <!-- Job card end -->
                            <!-- Job card start -->
                            <div class="card">
                                <div class="card-header">
                                    <div class="media">
                                        <a class="media-left media-middle" href="#">
                                            <img class="media-object img-60"
                                                 src="assets/images/browser/opera.png"
                                                 alt="Generic placeholder image">
                                        </a>
                                        <div class="media-body media-middle">
                                            <div class="company-name col-md-9">
                                                <p>Bỗng Dưng Lại Yêu</p>
                                            </div>
                                            <div class="job-badge col-md-3">
                                                <label class="label bg-primary">Nổi Bật</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-block">
                                    <div class="job-lable">
                                        <label class="label">Thể Loại 1</label>
                                        <label class="label">Thể Loại 3</label>
                                        <label class="label">Thể Loại 6</label>
                                    </div>
                                    <h6 class="job-card-desc">Nội Dung</h6>
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                        et dolore magna aliqua. adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua</p>
                                    <div class="job-meta-data"><i
                                            class="icofont icofont-woman-bird"></i>Đánh giá:
                                    </div>
                                    <div class="job-meta-data"><i
                                            class="icofont icofont-sand-clock"></i><label class="label label-lg bg-danger">Tạm ngưng</label>
                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <button type="button"
                                            class="btn btn-primary waves-effect waves-light"> <i class="icofont icofont-love"></i> Yêu Thích
                                    </button>
                                </div>
                            </div>
                            <!-- Job card end -->

                            <!-- Job card start -->
                            <div class="card">
                                <div class="card-header">
                                    <div class="media">
                                        <a class="media-left media-middle" href="#">
                                            <img class="media-object img-60"
                                                 src="assets/images/browser/opera.png"
                                                 alt="Generic placeholder image">
                                        </a>
                                        <div class="media-body media-middle">
                                            <div class="company-name col-md-9">
                                                <p>Opera</p>
                                            </div>
                                            <div class="job-badge col-md-3">
                                                <label class="label bg-primary">Nổi Bật</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-block">
                                    <div class="job-lable">
                                        <label class="label">Thể Loại 1</label>
                                        <label class="label">Đánh giá:</label>
                                        <label class="label">Thể Loại 6</label>
                                    </div>
                                    <h6 class="job-card-desc">Nội Dung</h6>
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                        et dolore magna aliqua. adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua</p>
                                    <div class="job-meta-data"><i
                                            class="icofont icofont-woman-bird"></i>Đánh giá:
                                    </div>
                                    <div class="job-meta-data"><i
                                            class="icofont icofont-sand-clock"></i><label class="label label-lg bg-success">Đã hoàn thành</label>
                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <button type="button"
                                            class="btn btn-primary waves-effect waves-light"> <i class="icofont icofont-love"></i> Yêu Thích
                                    </button>
                                </div>
                            </div>
                            <!-- Job card end -->


                            <!-- Job card start -->
                            <div class="card">
                                <div class="card-header">
                                    <div class="media">
                                        <a class="media-left media-middle" href="#">
                                            <img class="media-object img-60"
                                                 src="assets/images/browser/opera.png"
                                                 alt="Generic placeholder image">
                                        </a>
                                        <div class="media-body media-middle">
                                            <div class="company-name col-md-9">
                                                <p>Opera</p>
                                            </div>
                                            <div class="job-badge col-md-3">
                                                <label class="label bg-primary">Nổi Bật</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-block">
                                    <div class="job-lable">
                                        <label class="label">Thể Loại 1</label>
                                        <label class="label">Thể Loại 2</label>
                                        <label class="label">Thể Loại 6</label>
                                    </div>
                                    <h6 class="job-card-desc">Nội Dung</h6>
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                        et dolore magna aliqua. adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua</p>
                                    <div class="job-meta-data"><i class="icofont icofont-woman-bird"></i>Đánh giá:
                                    </div>
                                    <div class="job-meta-data"><i class="icofont icofont-sand-clock"></i><label class="label label-lg bg-success">Đã hoàn thành</label>
                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <button type="button"
                                            class="btn btn-primary waves-effect waves-light"> <i class="icofont icofont-love"></i>Yêu Thích
                                    </button>
                                </div>
                            </div>
                            <!-- Job card end -->
                        </div>


                        <!-- Pagination start -->
                        <nav aria-label="...">
                            <ul class="pagination justify-content-center m-t-20 m-b-20">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">2 <span
                                            class="sr-only">(current)</span></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                        <!-- Pagination end -->
                    </div>

                    <!-- Left column end -->
                    <!-- Right column start -->
                    <div class="col-lg-3">
                        <!-- Filter card start -->
                        <div class="card">
                            <div class="card-header">
                                <h5><i class="icofont icofont-filter m-r-5"></i>Lọc</h5>
                            </div>
                            <div class="card-block">
                                <form action="#">
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control"
                                                   placeholder="Thể loại">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control"
                                                   placeholder="Tác giả">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <select class="form-control">
                                                <option>Đang tiến hành</option>
                                                <option>Đã hoàn thành</option>
                                                <option>Tạm ngưng</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="icofont icofont-job-search m-r-5"></i>Tìm
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Filter card end -->
                        <!-- Recent Searches card start -->
                        <div class="card job-right-header">
                            <div class="card-header">
                                <h5>Mới cập nhật</h5>
                            </div>
                            <div class="card-block">
                                <form action="#">
                                    <div>
                                        Chương 335
                                        <p>Berserk</p>
                                    </div>
                                    <div>
                                        Chương 12
                                        <p>Thời đại thiếu nữ của tôi</p>
                                    </div>
                                    <div>
                                        Chương 423
                                        <p>Hiệp khách giang hồ</p>
                                    </div>
                                    <div>
                                        Chương 514
                                        <p>Code Geass</p>
                                    </div>
                                    <div>
                                        Chương 899
                                        <p>One Piece</p>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Recent Searches card end -->

                        <!-- Recent Searches card start -->
                        <div class="card job-right-header">
                            <div class="card-header">
                                <h5>Nổi bật (Random)</h5>
                            </div>
                            <div class="card-block">
                                <form action="#">
                                    <div>
                                        Berserk
                                        <p>Rating: 4.95</p>
                                    </div>
                                    <div>
                                        Thời đại thiếu nữ của tôi
                                        <p>Rating: 3.19</p>
                                    </div>
                                    <div>
                                      Hiệp Khách Giang Hồ
                                      <p>Rating: 3.19</p>
                                    </div>
                                    <div>
                                      Code Geass
                                      <p>Rating: 3.19</p>
                                    </div>
                                    <div>
                                      One Piece
                                      <p>Rating: 3.19</p>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Recent Searches card end -->
                        <!-- Recent Searches card start -->
                        <div class="card job-right-header">
                            <div class="card-header">
                                <h5>Nhóm dịch (Random)</h5>
                            </div>
                            <div class="card-block">
                                <form action="#">
                                    <div>
                                      <a href="#">
                                        MTO
                                      </a>
                                        <br>
                                    </div>
                                    <div>
                                      <a href="#">

                                        Clip-sub
                                      </a>
                                        <br>
                                    </div>
                                    <div>
                                        <a href="#">

                                          CyberAgent
                                        </a>
                                        <br>
                                    </div>
                                    <div>
                                      <a href="#">

                                        Nyan Team
                                      </a>
                                        <br>
                                    </div>
                                    <div>
                                      <a href="#">

                                        MeoMew Team
                                      </a>
                                        <br>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Recent Searches card end -->
                        <!-- Recent Searches card start -->
                        <div class="card job-right-header">
                            <div class="card-header">
                                <h5>Tác giả (Random)</h5>
                            </div>
                            <div class="card-block">
                                <form action="#">
                                    <div>
                                      <a href="tacgia/idTacGia">
                                        CLAMP
                                      </a>
                                        <br>
                                    </div>
                                    <div>
                                      <a href="#">

                                        Makoto Shinkai
                                      </a>
                                        <br>
                                    </div>
                                    <div>
                                      <a href="#">

                                        Fumiya Satou
                                      </a>
                                        <br>
                                    </div>
                                    <div>
                                      <a href="#">

                                        YONEDA Kazusa
                                      </a>
                                        <br>
                                    </div>
                                    <div>
                                      <a href="#">

                                        Mạn Khải Động Mạn
                                      </a>
                                        <br>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Recent Searches card end -->
                    </div>
                </div>
                <!-- Right column end -->
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

<!-- isotope js -->
<script src="assets/plugins/isotope/js/jquery.isotope.js"></script>
<script src="assets/plugins/isotope/js/isotope.pkgd.min.js"></script>

<!-- notification -->
<script type="text/javascript" src="assets/plugins/notification/js/bootstrap-growl.min.js"></script>

<!-- custom js -->
<script type="text/javascript" src="assets/js/main.min.js"></script>
<script type="text/javascript" src="assets/pages/elements.js"></script>
<script type="text/javascript" src="assets/js/menu.min.js"></script>
<script type="text/javascript">
    $(window).on('load', function() {
        var $container = $('.filter-container');
        $container.isotope({
            filter: '*',
            Thể Loại 1Options: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
        });
        var $grid = $('.default-grid').isotope({
            itemSelector: '.default-grid-item',
            masonry: {}
        });
    });
</script>
</body>
</html>
