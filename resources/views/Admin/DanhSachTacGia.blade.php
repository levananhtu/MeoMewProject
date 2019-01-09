
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

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <!-- Favicon icon -->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- iconfont -->
    <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">

    <!-- simple line icon -->
    <link rel="stylesheet" type="text/css" href="assets/icon/simple-line-icons/css/simple-line-icons.css">

    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="../bower_components/bootstrap/css/bootstrap.min.css">

    <!--foo table Grid-->
    <link rel="stylesheet" type="text/css" href="../bower_components/footable/css/footable.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/foo-table/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="../bower_components/footable/css/footable.standalone.min.css">

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
            <!-- Header Starts -->
            <div class="row">
                <div class="col-sm-12 p-0">
                    <div class="main-header">
                        <h4>Danh Sách Tác Giả</h4>
                        <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                            <li class="breadcrumb-item"><a href="index.html"><i class="icofont icofont-home"></i></a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Tác Giả</a>
                            </li>
                            <li class="breadcrumb-item"><a href="foo-tables.html">Danh Sách</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- Header end -->

            <div class="row">
              <div class="col-cm-3">

              </div>
                <div class="col-sm-12">
                    <div class="card">
                        <div class="data_table_main">
                            <div class="card-header">
                                <h5 class="card-header-text">Danh Sách</h5>
                                <button type="button" class="btn btn-primary waves-effect waves-light f-right md-trigger"
                                        data-modal="modal-13"><i class="icofont icofont-plus m-r-5"></i> Thêm
                                </button>
                                <p class="m-t-5">điền tên tác giả trong ô Search để lọc từ danh sách.</p>
                                <p class="m-t-5">Click vào tên tác giả để đến trang thông tin tác giả.</p>
                            </div>
                            <div class="card-block">
                                <table id="demo-foo-filtering" class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th data-breakpoints="xs">Tên Tác Giả</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                    </tr>
                                    <tr>
                                        <td>Garrett</td>
                                    </tr>
                                    <tr>
                                        <td>Cox</td>
                                    </tr>
                                    <tr>
                                        <td>Kelly</td>
                                    </tr>
                                    <tr>
                                        <td>Airi Satou</td>
                                    </tr>
                                    <tr>
                                        <td>Brielle</td>
                                    </tr>
                                    <tr>
                                        <td>Herrod Chandler</td>
                                    </tr>
                                    <tr>
                                        <td>Rhona Davidson</td>
                                    </tr>
                                    <tr>
                                        <td>Colleen Hurst</td>
                                    </tr>
                                    <tr>
                                        <td>Sonya Frost</td>
                                    </tr>
                                    <tr>
                                        <td>Jena Gaines</td>
                                    </tr>
                                    <tr>
                                        <td>Flynn</td>
                                    </tr>
                                    <tr>
                                        <td>Charde Marshall</td>
                                    </tr>
                                    <tr>
                                        <td>Haley Kennedy</td>
                                    </tr>
                                    <tr>
                                        <td>Tatyana Fitzpatrick</td>
                                    </tr>
                                    <tr>
                                        <td>Michael Silva</td>
                                    </tr>
                                    <tr>
                                        <td>Paul Byrd</td>
                                    </tr>
                                    <tr>
                                        <td>Gloria Little</td>
                                    </tr>
                                    <tr>
                                        <td>Bradley Greer</td>
                                    </tr>
                                    </tbody>
                                </table>
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

<!--FOO Table js-->
<script src="../bower_components/footable/js/footable.min.js"></script>

<!-- custom js -->
<script type="text/javascript" src="assets/js/main.min.js"></script>
<script src="assets/pages/foo-table.js"></script>
<script type="text/javascript" src="assets/pages/elements.js"></script>
<script src="assets/js/menu.js"></script>

</body>
</html>
