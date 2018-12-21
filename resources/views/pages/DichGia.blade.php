
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

      @include('layouts.leftSideNav2')

      <div class="content-wrapper">
        <!-- Container-fluid starts -->
        <div class="container-fluid">
          <div class="row">
            <div class="main-header">
              <h4>Profile</h4>
              <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                <li class="breadcrumb-item"><a href="index.html"><i class="icofont icofont-home"></i></a>
                </li>
                <li class="breadcrumb-item"><a href="#!">Dịch Giả</a>
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
                  <h5 class="f-14">Về dịch giả</h5>
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
                <div class="card">
                  <div class="card-header"><h5 class="card-header-text">Technical Skill</h5></div>
                  <div class="card-block">
                    <div class="technical-skill">
                      <h6>Photoshop</h6>
                      <div class="faq-progress">
                        <div class="progress">
                          <span class="faq-text1"></span>
                          <div class="faq-bar1"></div>
                        </div>
                      </div>
                      <h6>Illustrator</h6>
                      <div class="faq-progress">
                        <div class="progress">
                          <span class="faq-text2"></span>
                          <div class="faq-bar2"></div>
                        </div>
                      </div>
                      <h6>PHP</h6>
                      <div class="faq-progress">
                        <div class="progress">
                          <span class="faq-text3"></span>
                          <div class="faq-bar3"></div>
                        </div>
                      </div>
                      <h6>Javascript</h6>
                      <div class="faq-progress">
                        <div class="progress">
                          <span class="faq-text4"></span>
                          <div class="faq-bar4"></div>
                        </div>
                      </div>
                      <h6>Communication</h6>
                      <div class="faq-progress">
                        <div class="progress">
                          <span class="faq-text5"></span>
                          <div class="faq-bar5"></div>
                        </div>
                      </div>
                    </div>
                    <!-- end of technical skill -->
                  </div>
                  <!-- end of card-block -->
                </div>
                <!-- end of card -->
              </div>
              <!-- end of col-lg-3 -->

              <!-- start col-lg-9 -->
              <div class="col-xl-9 col-lg-8">
                <!-- Nav tabs -->
                <div class="tab-header">
                  <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" data-toggle="tab" href="#personal" role="tab">Thông Tin</a>
                      <div class="slide"></div>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#project" role="tab">Truyện</a>
                      <div class="slide"></div>
                    </li>
                  </ul>
                </div>
                <!-- end of tab-header -->

                <div class="tab-content">
                  <div class="tab-pane active" id="personal" role="tabpanel">
                    <div class="card">
                      <div class="card-header"><h5 class="card-header-text">About Me</h5>
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
                                          <th scope="row">Full Name</th>
                                          <td>Josephine Villa</td>
                                        </tr>
                                        <tr>
                                          <th scope="row">Gender</th>
                                          <td>Female</td>
                                        </tr>
                                        <tr>
                                          <th scope="row">Birth Date</th>
                                          <td>October 25th, 1990</td>
                                        </tr>
                                        <tr>
                                          <th scope="row">Marital Status</th>
                                          <td>Single</td>
                                        </tr>
                                        <tr>
                                          <th scope="row">Location</th>
                                          <td>New York, USA</td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                  <!-- end of table col-lg-6 -->

                                  <div class="col-lg-12 col-xl-6">
                                    <table class="table">
                                      <tbody>
                                        <tr>
                                          <th scope="row">Email</th>
                                          <td><a href="#!">Demo@phenix.com</a></td>
                                        </tr>
                                        <tr>
                                          <th scope="row">Mobile Number</th>
                                          <td>(0123) - 4567891</td>
                                        </tr>
                                        <tr>
                                          <th scope="row">Twitter</th>
                                          <td>@phoenixcoded</td>
                                        </tr>
                                        <tr>
                                          <th scope="row">Skype</th>
                                          <td>phoenixcoded.demo</td>
                                        </tr>
                                        <tr>
                                          <th scope="row">Website</th>
                                          <td><a href="#!">www.demo.com</a></td>
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

                        <div class="edit-info">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="general-info">
                                <div class="row">
                                  <div class="col-lg-6">
                                    <table class="table b-none">
                                      <tbody>
                                        <tr>
                                          <td>
                                            <div class="md-group-add-on">
                                              <span class="md-add-on">
                                                <i class="icofont icofont-ui-user"></i>
                                              </span>
                                              <div class="md-input-wrapper">
                                                <input type="text" class="md-form-control">
                                                <label>Full Name</label>
                                              </div>
                                            </div>
                                          </td>

                                        </tr>
                                        <tr>
                                          <td>

                                            <div class="form-radio">
                                              <form>
                                                <div class="md-group-add-on">
                                                  <span class="md-add-on">
                                                    <i class="icofont icofont-group-students"></i>
                                                  </span>
                                                  <div class="radio radiofill radio-inline">
                                                    <label>
                                                      <input type="radio" name="radio"><i class="helper"></i> Male
                                                    </label>
                                                  </div>
                                                  <div class="radio radiofill radio-inline">
                                                    <label>
                                                      <input type="radio" name="radio"><i class="helper"></i> Female
                                                    </label>
                                                  </div>
                                                </div>
                                              </form>
                                            </div>
                                          </td>

                                        </tr>
                                        <tr>
                                          <td>
                                            <div class="md-group-add-on">
                                              <span class="md-add-on">
                                                <i class="icofont icofont-ui-calendar"></i>
                                              </span>
                                              <div class="md-input-wrapper">
                                                <input type="text" id="date" class="md-form-control">
                                                <label>Birthday Date</label>
                                              </div>
                                            </div>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>
                                            <div class="md-group-add-on">
                                              <span class="md-add-on">
                                                <i class="icofont icofont-users-alt-4"></i>
                                              </span>
                                              <div class="md-input-wrapper">
                                                <select class="md-form-control">
                                                  <option>Select Marital Status</option>
                                                  <option>Married</option>
                                                  <option>Unmarried</option>
                                                </select>
                                              </div>
                                            </div>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>
                                            <div class="md-group-add-on">
                                              <span class="md-add-on">
                                                <i class="icofont icofont-location-pin"></i>
                                              </span>
                                              <div class="md-input-wrapper">
                                                <textarea class="md-form-control" cols="2" rows="4"></textarea>
                                                <label>Address</label>

                                              </div>
                                            </div>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                  <!-- end of table col-lg-6 -->

                                  <div class="col-lg-6">
                                    <table class="table  b-none">
                                      <tbody>
                                        <tr>
                                          <td>
                                            <div class="md-group-add-on">
                                              <span class="md-add-on">
                                                <i class="icofont icofont-email"></i>
                                              </span>
                                              <div class="md-input-wrapper">
                                                <input type="email" class="md-form-control">
                                                <label>Email</label>
                                              </div>
                                            </div>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>
                                            <div class="md-group-add-on">
                                              <span class="md-add-on">
                                                <i class="icofont icofont-mobile-phone"></i>
                                              </span>
                                              <div class="md-input-wrapper">
                                                <input type="number" class="md-form-control">
                                                <label>Mobile Number</label>
                                              </div>
                                            </div>
                                          </td>

                                        </tr>
                                        <tr>
                                          <td>
                                            <div class="md-group-add-on">
                                              <span class="md-add-on">
                                                <i class="icofont icofont-social-twitter"></i>
                                              </span>
                                              <div class="md-input-wrapper">
                                                <input type="email" class="md-form-control">
                                                <label>Twitter Id</label>
                                              </div>
                                            </div>
                                          </td>

                                        </tr>
                                        <tr>
                                          <td>
                                            <div class="md-group-add-on">
                                              <span class="md-add-on">
                                                <i class="icofont icofont-social-skype"></i>
                                              </span>
                                              <div class="md-input-wrapper">
                                                <input type="email" class="md-form-control">
                                                <label>Skype Id</label>
                                              </div>
                                            </div>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>
                                            <div class="md-group-add-on">
                                              <span class="md-add-on">
                                                <i class="icofont icofont-web"></i>
                                              </span>
                                              <div class="md-input-wrapper">
                                                <input type="text" class="md-form-control">
                                                <label>Website</label>
                                              </div>
                                            </div>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>

                                  </div>

                                  <!-- end of table col-lg-6 -->
                                </div>
                                <!-- end of row -->
                                <div class="text-center">
                                  <a href="#!" class="btn btn-primary waves-effect waves-light m-r-20">Save</a>
                                  <a href="#!" id="edit-cancel" class="btn btn-default waves-effect">Cancel</a>
                                </div>
                              </div>
                              <!-- end of edit info -->
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

                    <div class="row">

                      <div class="col-xl-12">
                        <!-- Description card start -->
                        <div class="card">
                            <div class="card-header">
                                <h5 class=" d-inline-block">Description</h5>
                                <div class="card-header-right f-right">
                                </div>
                            </div>
                            <div class="card-block">
                                <div class="media p-t-10 m-b-20 ">
                                    <a class="mr-3" href="#">
                                        <img class="media-object m-r-10" src="assets/images/logo-blue.png" alt="Generic placeholder image">
                                    </a>
                                    <div class="media-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="company-name">
                                                    <p>MeoMew Team</p>
                                                    <span class="text-muted">14 February, 2017</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p>Across a Global footprint, we believe we’re at our best when you’re at yours. From our diverse workforce, our flexible working policies to our creative work spaces, we embrace a culture of learning and sharing to develop our next stage growth. It’s in our hearts to push forward, to create a better future, to never rest and find new ways that help people communicate.</p>
                                <p>We are committed to developing the very best people by offering a flexible, motivating and inclusive workplace in which talent is truly recognised and rewarded. We respect, value and celebrate our people’s individual differences - we are not only multinational but multicultural too. That’s what we mean when we say Power to you.</p>
                            </div>
                        </div>
                        <!-- Company profile card end -->
                      </div>
                      <!-- end of col-lg-12 -->
                    </div>
                    <!-- end of row of Description  -->

                    <div class="row">
                      <div class="col-lg-12">
                        <div class="card">
                          <div class="card-header"><h5 class="card-header-text">Tiến Độ</h5></div>
                          <div class="card-block">
                            <div class="row">
                              <div class="col-md-4 faq-chart">
                                <div class="chart" data-percent="75" data-barColor="#5cb85c" data-trackColor="#fff" data-lineWidth="5" data-barSize="150">
                                  <div class="chart-percent"><span></span>%</div>
                                </div>
                                <!-- end of creativity chart -->
                                <h5>Đang tiến hành</h5>
                              </div>
                              <!-- end of col-lg-3 creativity chart -->
                              <div class="col-md-4 faq-chart">
                                <div class="chart" data-percent="90" data-barColor="#c9302c" data-trackColor="#fff" data-lineWidth="5" data-barSize="150">
                                  <div class="chart-percent"><span></span>%</div>
                                </div>
                                <!-- end of social media chart -->
                                <h5>Tạm ngưng</h5>
                              </div>
                              <!-- end of col-lg-3 social media chart -->
                              <div class="col-md-4 faq-chart">
                                <div class="chart" data-percent="83" data-barColor="#ec971f" data-trackColor="#fff" data-lineWidth="5" data-barSize="150">
                                  <div class="chart-percent"><span></span>%</div>
                                </div>
                                <!-- end of marketing chart -->
                                <h5>Đã hoàn thành</h5>
                              </div>
                              <!-- end of col-lg-3 marketing chart -->
                            </div>
                            <!-- end of row -->
                          </div>
                          <!-- end of card block -->
                        </div>
                        <!-- end of card -->
                      </div>
                      <!-- end of col-lg-12 -->
                    </div>
                    <!-- end of row -->
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
                                      <th class="text-center txt-primary pro-pic">Ảnh</th>
                                      <th class="text-center txt-primary">Tên truyện</th>
                                      <th class="text-center txt-primary">Ngày bắt đầu</th>
                                      <th class="text-center txt-primary">Ngày kết thúc</th>
                                      <th class="text-center txt-primary">Tình trạng</th>
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
                                    </tr>
                                    <tr>
                                      <td>
                                        <img src="assets/images/avatar-2.png" class="rounded-circle" alt="tbl">
                                      </td>
                                      <td>Lorem ipsum dolor sit amett</td>
                                      <td>Oct 25th, 2014</td>
                                      <td>Oct 25th, 2015</td>
                                      <td class="text-center"><span class="label label-warning">Kết thúc</span></td>
                                    </tr>
                                    <tr>
                                      <td>
                                        <img src="assets/images/avatar-2.png" class="rounded-circle" alt="tbl">
                                      </td>
                                      <td>Lorem ipsum dolor sit amett</td>
                                      <td>Oct 25th, 2014</td>
                                      <td>Oct 25th, 2015</td>
                                      <td class="text-center"><span class="label label-danger">Tạm ngưng</span></td>
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
            <!-- Container-fluid ends -->

            @include('layouts.footer-center')
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
