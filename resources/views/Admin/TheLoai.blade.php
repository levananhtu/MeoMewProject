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
    <meta name="keywords"
          content="appestia, Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
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

    <!-- datatable js -->
    <link rel="stylesheet" type="text/css"
          href="../bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css"
          href="../bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">

    <!-- Modal animation CSS -->
    <link rel="stylesheet" type="text/css" href="assets/plugins/modal/css/component.css">

    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">

    <!-- Responsive.css-->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

    <!--color css-->
    <link rel="stylesheet" type="text/css" href="assets/css/color/inverse.css" id="color"/>
</head>
@include('layouts.AdminHeader')
@include('layouts.AdminLeftSideNav')
    <div class="content-wrapper">
        <!-- Container-fluid starts -->
        <div class="container-fluid">
            <!-- Main content starts -->
            <!-- Row Starts -->
            <div class="row">
                <div class="col-sm-12 p-0">
                    <div class="main-header">
                        <h4>Tên Thể Loại</h4>
                        <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                            <li class="breadcrumb-item"><a href="index.html"><i class="icofont icofont-home"></i></a>
                            </li>
                            <li class="breadcrumb-item"><a href="#!"> Thể loại </a>
                            </li>
                            <li class="breadcrumb-item"><a href="product-list.html"> Tên thể loại </a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- Row end -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-header-text">Danh sách truyện</h5>
                            <button type="button" class="btn btn-primary waves-effect waves-light f-right md-trigger"
                                    data-modal="modal-13"><i class="icofont icofont-plus m-r-5"></i> Thêm Truyện
                            </button>
                        </div>
                        <div class="card-block">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="table-content p-l-30 p-r-30">
                                        <div class="project-table">
                                            <table id="e-product-list"
                                                   class="table table-striped dt-responsive nowrap" width="100%"
                                                   cellspacing="0">
                                                <thead>
                                                <tr>
                                                    <th>Hình</th>
                                                    <th>Tên Truyện</th>
                                                    <th>Chương</th>
                                                    <th>Tình Trạng</th>
                                                    <th>Chỉnh Sửa</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td class="pro-list-img">
                                                        <img src="assets/images/e-commerce/product-list/pro-l1.png"
                                                             class="img-fluid" alt="tbl">
                                                    </td>
                                                    <td class="pro-name">
                                                        <h6>Doraemon</h6>
                                                        <span>Lorem ipsum dolor sit consec te imperdiet iaculis ipsum..</span>
                                                    </td>
                                                    <td> 456</td>
                                                    <td><label class="text-danger">Tạm Ngưng</label></td>
                                                    <td class="action-icon">
                                                        <a href="#!" class="m-r-15 text-muted" data-toggle="tooltip"
                                                           data-placement="top" title="" data-original-title="Edit"><i
                                                                class="icofont icofont-edit"></i></a>
                                                        <a href="#!" class="text-muted" data-toggle="tooltip"
                                                           data-placement="top" title=""
                                                           data-original-title="Delete"><i
                                                                class="icofont icofont-ui-delete"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pro-list-img">
                                                        <img src="assets/images/e-commerce/product-list/pro-l6.png"
                                                             class="img-fluid" alt="tbl">
                                                    </td>
                                                    <td class="pro-name"><h6> Kekkaishi </h6>
                                                        <span>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</span>
                                                    </td>
                                                    <td> 689</td>
                                                    <td><label class="text-success">Đang tiến hành</label></td>
                                                    <td class="action-icon">
                                                        <a href="#!" class="m-r-15 text-muted" data-toggle="tooltip"
                                                           data-placement="top" title="" data-original-title="Edit"><i
                                                                class="icofont icofont-edit"></i></a>
                                                        <a href="#!" class="text-muted" data-toggle="tooltip"
                                                           data-placement="top" title=""
                                                           data-original-title="Delete"><i
                                                                class="icofont icofont-ui-delete"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pro-list-img">
                                                        <img src="assets/images/e-commerce/product-list/pro-l2.png"
                                                             class="img-fluid" alt="tbl">
                                                    </td>
                                                    <td class="pro-name"><h6> Berserk </h6>
                                                        <span>Lorem ipsum dolor sit consec te imperdiet iaculis ipsum..</span>
                                                    </td>
                                                    <td> 755</td>
                                                    <td><label class="text-warning">Đã Hoàn Thành</label></td>
                                                    <td class="action-icon">
                                                        <a href="#!" class="m-r-15 text-muted" data-toggle="tooltip"
                                                           data-placement="top" title="" data-original-title="Edit"><i
                                                                class="icofont icofont-edit"></i></a>
                                                        <a href="#!" class="text-muted" data-toggle="tooltip"
                                                           data-placement="top" title=""
                                                           data-original-title="Delete"><i
                                                                class="icofont icofont-ui-delete"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pro-list-img">
                                                        <img src="assets/images/e-commerce/product-list/pro-l3.png"
                                                             class="img-fluid" alt="tbl">
                                                    </td>
                                                    <td class="pro-name"><h6> Velvet Kiss </h6>
                                                        <span>Lorem ipsum dolor sit consec te imperdiet iaculis ipsum..</span>
                                                    </td>
                                                    <td> 989</td>
                                                    <td><label class="text-success">Đang tiến hành</label></td>
                                                    <td class="action-icon">
                                                        <a href="#!" class="m-r-15 text-muted" data-toggle="tooltip"
                                                           data-placement="top" title="" data-original-title="Edit"><i
                                                                class="icofont icofont-edit"></i></a>
                                                        <a href="#!" class="text-muted" data-toggle="tooltip"
                                                           data-placement="top" title=""
                                                           data-original-title="Delete"><i
                                                                class="icofont icofont-ui-delete"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pro-list-img">
                                                        <img src="assets/images/e-commerce/product-list/pro-l4.png"
                                                             class="img-fluid" alt="tbl">
                                                    </td>
                                                    <td class="pro-name"><h6> Black Cat </h6>
                                                        <span>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</span>
                                                    </td>
                                                    <td> 1150</td>
                                                    <td><label class="text-success">Đang tiến hành</label></td>
                                                    <td class="action-icon">
                                                        <a href="#!" class="m-r-15 text-muted" data-toggle="tooltip"
                                                           data-placement="top" title="" data-original-title="Edit"><i
                                                                class="icofont icofont-edit"></i></a>
                                                        <a href="#!" class="text-muted" data-toggle="tooltip"
                                                           data-placement="top" title=""
                                                           data-original-title="Delete"><i
                                                                class="icofont icofont-ui-delete"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pro-list-img">
                                                        <img src="assets/images/e-commerce/product-list/pro-l5.png"
                                                             class="img-fluid" alt="tbl">
                                                    </td>
                                                    <td class="pro-name"><h6> Velvet Kiss </h6>
                                                        <span>Lorem ipsum dolor sit consec te imperdiet iaculis ipsum..</span>
                                                    </td>
                                                    <td> 2006</td>
                                                    <td><label class="text-danger">Tạm Ngưng</label></td>
                                                    <td class="action-icon">
                                                        <a href="#!" class="m-r-15 text-muted" data-toggle="tooltip"
                                                           data-placement="top" title="" data-original-title="Edit"><i
                                                                class="icofont icofont-edit"></i></a>
                                                        <a href="#!" class="text-muted" data-toggle="tooltip"
                                                           data-placement="top" title=""
                                                           data-original-title="Delete"><i
                                                                class="icofont icofont-ui-delete"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pro-list-img">
                                                        <img src="assets/images/e-commerce/product-list/pro-l7.png"
                                                             class="img-fluid" alt="tbl">
                                                    </td>
                                                    <td class="pro-name"><h6> Pokemon Special </h6>
                                                        <span>sum dolor sit consec te imperdiet iaculis ipsum..</span>
                                                    </td>
                                                    <td> 1199</td>
                                                    <td><label class="text-success">Đang tiến hành</label></td>
                                                    <td class="action-icon">
                                                        <a href="#!" class="m-r-15 text-muted" data-toggle="tooltip"
                                                           data-placement="top" title="" data-original-title="Edit"><i
                                                                class="icofont icofont-edit"></i></a>
                                                        <a href="#!" class="text-muted" data-toggle="tooltip"
                                                           data-placement="top" title=""
                                                           data-original-title="Delete"><i
                                                                class="icofont icofont-ui-delete"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pro-list-img">
                                                        <img src="assets/images/e-commerce/product-list/pro-l8.png"
                                                             class="img-fluid" alt="tbl">
                                                    </td>
                                                    <td class="pro-name"><h6> One Piece </h6>
                                                        <span class="text-muted f-12">Lorem ipsum dolor sit consec te imperdiet iaculis ipsum..</span>
                                                    </td>
                                                    <td> 589</td>
                                                    <td><label class="text-warning">Đã Hoàn Thành</label></td>
                                                    <td class="action-icon">
                                                        <a href="#!" class="m-r-15 text-muted" data-toggle="tooltip"
                                                           data-placement="top" title="" data-original-title="Edit"><i
                                                                class="icofont icofont-edit"></i></a>
                                                        <a href="#!" class="text-muted" data-toggle="tooltip"
                                                           data-placement="top" title=""
                                                           data-original-title="Delete"><i
                                                                class="icofont icofont-ui-delete"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pro-list-img">
                                                        <img src="assets/images/e-commerce/product-list/pro-l9.png"
                                                             class="img-fluid" alt="tbl">
                                                    </td>
                                                    <td class="pro-name"><h6> Detective Conan </h6>
                                                        <span>sum dolor sit consec te imperdiet iaculis ipsum..</span>
                                                    </td>
                                                    <td> 1255</td>
                                                    <td><label class="text-danger">Tạm Ngưng</label></td>
                                                    <td class="action-icon">
                                                        <a href="#!" class="m-r-15 text-muted" data-toggle="tooltip"
                                                           data-placement="top" title="" data-original-title="Edit"><i
                                                                class="icofont icofont-edit"></i></a>
                                                        <a href="#!" class="text-muted" data-toggle="tooltip"
                                                           data-placement="top" title=""
                                                           data-original-title="Delete"><i
                                                                class="icofont icofont-ui-delete"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pro-list-img">
                                                        <img src="assets/images/e-commerce/product-list/pro-l8.png"
                                                             class="img-fluid" alt="tbl">
                                                    </td>
                                                    <td class="pro-name"><h6> Velvet Kiss </h6>
                                                        <span>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</span>
                                                    </td>
                                                    <td> 499</td>
                                                    <td><label class="text-success">Đang tiến hành</label></td>
                                                    <td class="action-icon">
                                                        <a href="#!" class="m-r-15 text-muted" data-toggle="tooltip"
                                                           data-placement="top" title="" data-original-title="Edit"><i
                                                                class="icofont icofont-edit"></i></a>
                                                        <a href="#!" class="text-muted" data-toggle="tooltip"
                                                           data-placement="top" title=""
                                                           data-original-title="Delete"><i
                                                                class="icofont icofont-ui-delete"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pro-list-img">
                                                        <img src="assets/images/e-commerce/product-list/pro-l7.png"
                                                             class="img-fluid" alt="tbl">
                                                    </td>
                                                    <td class="pro-name"><h6> Velvet Kiss </h6>
                                                        <span>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</span>
                                                    </td>
                                                    <td> 259</td>
                                                    <td><label class="text-success">Đang tiến hành</label></td>
                                                    <td class="action-icon">
                                                        <a href="#!" class="m-r-15 text-muted" data-toggle="tooltip"
                                                           data-placement="top" title="" data-original-title="Edit"><i
                                                                class="icofont icofont-edit"></i></a>
                                                        <a href="#!" class="text-muted" data-toggle="tooltip"
                                                           data-placement="top" title=""
                                                           data-original-title="Delete"><i
                                                                class="icofont icofont-ui-delete"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pro-list-img">
                                                        <img src="assets/images/e-commerce/product-list/pro-l6.png"
                                                             class="img-fluid" alt="tbl">
                                                    </td>
                                                    <td class="pro-name"><h6> Velvet Kiss </h6>
                                                        <span>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</span>
                                                    </td>
                                                    <td> 456</td>
                                                    <td><label class="text-success">Đang tiến hành</label></td>
                                                    <td class="action-icon">
                                                        <a href="#!" class="m-r-15 text-muted" data-toggle="tooltip"
                                                           data-placement="top" title="" data-original-title="Edit"><i
                                                                class="icofont icofont-edit"></i></a>
                                                        <a href="#!" class="text-muted" data-toggle="tooltip"
                                                           data-placement="top" title=""
                                                           data-original-title="Delete"><i
                                                                class="icofont icofont-ui-delete"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pro-list-img">
                                                        <img src="assets/images/e-commerce/product-list/pro-l5.png"
                                                             class="img-fluid" alt="tbl">
                                                    </td>
                                                    <td class="pro-name"><h6> Velvet Kiss </h6>
                                                        <span>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</span>
                                                    </td>
                                                    <td> 456</td>
                                                    <td><label class="text-success">Đang tiến hành</label></td>
                                                    <td class="action-icon">
                                                        <a href="#!" class="m-r-15 text-muted" data-toggle="tooltip"
                                                           data-placement="top" title="" data-original-title="Edit"><i
                                                                class="icofont icofont-edit"></i></a>
                                                        <a href="#!" class="text-muted" data-toggle="tooltip"
                                                           data-placement="top" title=""
                                                           data-original-title="Delete"><i
                                                                class="icofont icofont-ui-delete"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pro-list-img">
                                                        <img src="assets/images/e-commerce/product-list/pro-l4.png"
                                                             class="img-fluid" alt="tbl">
                                                    </td>
                                                    <td class="pro-name"><h6> Velvet Kiss </h6>
                                                        <span>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</span>
                                                    </td>
                                                    <td> 456</td>
                                                    <td><label class="text-success">Đang tiến hành</label></td>
                                                    <td class="action-icon">
                                                        <a href="#!" class="m-r-15 text-muted" data-toggle="tooltip"
                                                           data-placement="top" title="" data-original-title="Edit"><i
                                                                class="icofont icofont-edit"></i></a>
                                                        <a href="#!" class="text-muted" data-toggle="tooltip"
                                                           data-placement="top" title=""
                                                           data-original-title="Delete"><i
                                                                class="icofont icofont-ui-delete"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pro-list-img">
                                                        <img src="assets/images/e-commerce/product-list/pro-l2.png"
                                                             class="img-fluid" alt="tbl">
                                                    </td>
                                                    <td class="pro-name"><h6> Velvet Kiss </h6>
                                                        <span>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</span>
                                                    </td>
                                                    <td> 456</td>
                                                    <td><label class="text-success">Đang tiến hành</label></td>
                                                    <td class="action-icon">
                                                        <a href="#!" class="m-r-15 text-muted" data-toggle="tooltip"
                                                           data-placement="top" title="" data-original-title="Edit"><i
                                                                class="icofont icofont-edit"></i></a>
                                                        <a href="#!" class="text-muted" data-toggle="tooltip"
                                                           data-placement="top" title=""
                                                           data-original-title="Delete"><i
                                                                class="icofont icofont-ui-delete"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pro-list-img">
                                                        <img src="assets/images/e-commerce/product-list/pro-l1.png"
                                                             class="img-fluid" alt="tbl">
                                                    </td>
                                                    <td class="pro-name"><h6> Velvet Kiss </h6>
                                                        <span>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</span>
                                                    </td>
                                                    <td> 456</td>
                                                    <td><label class="text-success">Đang tiến hành</label></td>
                                                    <td class="action-icon">
                                                        <a href="#!" class="m-r-15 text-muted" data-toggle="tooltip"
                                                           data-placement="top" title="" data-original-title="Edit"><i
                                                                class="icofont icofont-edit"></i></a>
                                                        <a href="#!" class="text-muted" data-toggle="tooltip"
                                                           data-placement="top" title=""
                                                           data-original-title="Delete"><i
                                                                class="icofont icofont-ui-delete"></i></a>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add Comic Start Model -->
        <form class="md-float-material" action="index.html">
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
                          <button type="button" class="btn btn-primary waves-effect m-r-20 f-w-600 d-inline-block">Save
                          </button>
                          <button type="button"
                                  class="btn btn-primary waves-effect m-r-20 f-w-600 md-close d-inline-block">Close
                          </button>
                      </div>
                  </div>
              </div>
          </div>
        </form>
        <!-- end of form -->
        <!-- Add Comic Ends Model-->
        @include('layouts.footer-center')
        <!-- Container-fluid ends -->
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

<!-- datatable js -->
<script src="../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../bower_components/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="../bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
<!-- Model animation js -->

<script type="text/javascript" src="assets/plugins/ModalWindowEffects/js/modalEffects.js"></script>
<!-- echart js -->
<script type="text/javascript" src="assets/plugins/charts/echarts/js/echarts-all.js"></script>

<!-- custom js -->
<script type="text/javascript" src="assets/js/main.min.js"></script>
<script type="text/javascript" src="assets/pages/product-list.js"></script>
<script type="text/javascript" src="assets/pages/elements.js"></script>
<script type="text/javascript" src="assets/js/menu.min.js"></script>


</body>
</html>
