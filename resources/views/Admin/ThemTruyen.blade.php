<!DOCTYPE html>
<html lang="en">
<head>
	<title>Web Comic - Meomew Team</title>
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

	<!--ico Fonts-->
	<link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
	<!-- Required Fremwork -->
	<link rel="stylesheet" type="text/css" href="../bower_components/bootstrap/css/bootstrap.min.css">

	<!-- waves css -->
	<link rel="stylesheet" type="text/css" href="assets/plugins/waves/css/waves.min.css">

	<!-- Style.css -->
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">

	<!-- Responsive.css-->
	<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

	<!--color css-->
    <link rel="stylesheet" type="text/css" href="assets/css/color/inverse.css" id="color"/>

</head>
<body>
	<section class="login common-img-bg">
		<!-- Container-fluid starts -->
		<div class="container-fluid">
			<div class="row">
					<div class="col-lg-12">
						<div class="login-card card-block bg-white">
							<form class="md-float-material" action="index.html">
								<!-- Add Comic Start Model -->
				        <div class="md-modal md-effect-13 addcomic" id="modal-13">
				            <div class="md-content">
				                <h3 class="f-26 text-center">Add Comic</h3>
				                <div class="card-block">
													<div class="row">
														<div class="col-md-6">
															<div class="md-group-add-on">
																							<span class="md-add-on-file">
																									<button class="btn btn-success waves-effect waves-light">File</button>
																							</span>
																	<div class="md-input-file">
																			<input type="file" class=""/>
																			<input type="text" class="md-form-control md-form-file">
																			<label class="md-label-file">Hình Đại Diện</label>
																	</div>
															</div>
															<div class="md-group-add-on">
																	<span class="md-add-on">
																			<i class="icofont icofont-read-book"></i>
																	 </span>
																	<div class="md-input-wrapper">
																			<input type="text" class="md-form-control"/>
																			<label>Tên Truyện</label>
																	</div>
															</div>
															<div class="md-group-add-on">
																	<span class="md-add-on">
																			<i class="icofont icofont-pen-nib"></i>
																	 </span>
																	<div class="md-input-wrapper">
																			<input type="text" class="md-form-control"/>
																			<label>Tên Tác Giả</label>
																	</div>
															</div>
															<div class="md-group-add-on">
																	<span class="md-add-on">
																			<i class="icofont icofont-brand-opensuse"></i>
																	 </span>
																	<div class="md-input-wrapper">
																			<input type="text" class="md-form-control"/>
																			<label>Tên Dịch Giả</label>
																	</div>
															</div>
														</div>
														<div class="col-md-6">
														<div class="md-group-add-on">
															<span class="md-add-on">
																<i class="icofont icofont-opposite"></i>
															</span>
															<div class="md-input-wrapper">
																<input type="text" class="md-form-control"/>
																<label>Tổng số chương</label>
															</div>
														</div>
														<div class="md-input-wrapper">
															<select class="md-form-control">
																<option>Đang tiến hành</option>
																<option>Đã Hoàn Thành</option>
																<option>Tạm Ngưng</option>
															</select>
														</div>
														<div class="md-input-wrapper">
															<select class="md-form-control">
																<option>Thể Loại</option>
																<option>Shounen</option>
																<option>Seinen</option>
															</select>
														</div>
													</div>
													</div>
				                    <div class="md-input-wrapper">
				                        <textarea class="md-form-control" cols="2" rows="4"></textarea>
				                        <label class="label label-lg"> Mô tả </label>
				                    </div>
				                    <div class="text-center m-t-30">
				                        <button type="submit" class="btn btn-primary waves-effect m-r-20 f-w-600 d-inline-block">Save
				                        </button>
				                        <button type="button"
				                                class="btn btn-primary waves-effect m-r-20 f-w-600 md-close d-inline-block">Close
				                        </button>
				                    </div>
				                </div>
				            </div>
				        </div>
				        <!-- Add Comic Ends Model-->
							</form>
							<!-- end of form -->

						</div>
						<!-- end of login-card -->
					</div>
					<!-- end of col-sm-12 -->
				</div>
				<!-- end of row-->
			</div>
			<!-- end of container-fluid -->
	</section>

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
	<!-- tether.js -->
	<script type="text/javascript" src="../bower_components/popper.js/js/popper.min.js"></script>
	<!-- waves effects.js -->
	<script src="assets/plugins/waves/js/waves.min.js"></script>
	<!-- Required Framework -->
	<script type="text/javascript" src="../bower_components/bootstrap/js/bootstrap.min.js"></script>

	<!--text js-->
	<script type="text/javascript" src="assets/pages/elements.js"></script>
	<script type="text/javascript" src="assets/js/common-pages.min.js"></script>

</body>
</html>
