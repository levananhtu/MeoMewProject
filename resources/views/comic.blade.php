<?php
$comic = $values["comic"];
$chapters = $values["chapters"];
$genres = $values["genres"];
$translators = $values["translators"];
$authors = $values["authors"];
$finishStatus = $values["finishStatus"];
?>

@extends("layout/index1")

@section("content")

    <div class="row">
        <div class="col-xl-3 col-lg-4">
            <div class="card faq-left">
                <div class="social-profile">
                    <img class="img-fluid w-100" src="{{$comic[0]["Thumbnail"]}}" alt="profile">
                </div>
                <div class="card-block">
                    <h4 class="f-18 f-normal m-b-10 txt-primary">{{$comic[0]["ComicName"]}}</h4>
                    <p class="m-b-15">{{$comic[0]["Description"]}}</p>
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
                        <a class="nav-link active" data-toggle="tab" href="#personal" role="tab" aria-expanded="false">
                            Chi tiết
                        </a>
                        <div class="slide"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#project" role="tab" aria-expanded="true">Chương</a>
                        <div class="slide"></div>
                    </li>
                    <li class="nav-item">
                    </li>
                    <li class="nav-item">
                    </li>
                </ul>
            </div>
            <!-- end of tab-header -->

            <div class="tab-content">
                <div class="tab-pane active" id="personal" role="tabpanel" aria-expanded="false">
                    <div class="card">
                        <div class="card-header"><h5 class="card-header-text">Thông tin chi tiết</h5>
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
                                                            <th scope="row">Tên truyện</th>
                                                            <td>{{$comic[0]["ComicName"]}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Trạng thái</th>
                                                            <td>
                                                                @if($finishStatus["FinishStatusID"]==2)
                                                                    <label class="label bg-danger">{{$finishStatus["FinishStatusName"]}}</label>
                                                                @elseif($finishStatus["FinishStatusID"]==1)
                                                                    <label class="label bg-success">{{$finishStatus["FinishStatusName"]}}</label>
                                                                @elseif($finishStatus["FinishStatusID"]==3)
                                                                    <label class="label bg-primary">{{$finishStatus["FinishStatusName"]}}</label>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Update</th>
                                                            <td>{{$comic[0]["CreatedDate"]}}</td>
                                                        </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- end of table col-lg-6 -->

                                                <div class="col-lg-12 col-xl-6">
                                                    <table class="table">
                                                        <tbody>
                                                        <tr>
                                                            <th scope="row">Tác giả</th>
                                                            <td>
                                                                @if(sizeof($authors)!=0)
                                                                    @foreach($authors as $author)
                                                                        <a href="{{route("author",["authorId"=>$author["AuthorID"],"authorName"=>$author["AuthorName"]])}}">
                                                                            <span class="label bg-info">
                                                                                {{$author["AuthorName"]}}
                                                                            </span>
                                                                        </a>
                                                                    @endforeach
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Dịch giả</th>
                                                            <td>
                                                                @if(sizeof($translators)!=0)
                                                                    @foreach($translators as $translator)
                                                                        <a href="{{route("translator",["translatorId"=>$translator["TranslatorID"],"TranslatorName"=>$translator["TranslatorName"]])}}">
                                                                            <span class="label bg-info">
                                                                                {{$translator["TranslatorName"]}}
                                                                            </span>
                                                                        </a>
                                                                    @endforeach
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Thể loại</th>
                                                            <td>
                                                                @if(sizeof($genres)!=0)
                                                                    @foreach($genres as $genre)
                                                                        <a href="{{route("translator",["genreId"=>$genre["GenreID"],"genreName"=>$genre["GenreName"]])}}">
                                                                            <span class="label bg-info">
                                                                                {{$genre["GenreName"]}}
                                                                            </span>
                                                                        </a>
                                                                    @endforeach
                                                                @endif
                                                            </td>
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

                            <div class="edit-info" style="display: none;">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="general-info">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <table class="table">
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
                                                                        <span class="md-line"></span></div>
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
                                                                                    <input type="radio" name="radio"><i
                                                                                            class="helper"></i> Male
                                                                                </label>
                                                                            </div>
                                                                            <div class="radio radiofill radio-inline">
                                                                                <label>
                                                                                    <input type="radio" name="radio"><i
                                                                                            class="helper"></i> Female
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
                                                                        <input type="text" id="date"
                                                                               class="md-form-control form-control floating-label"
                                                                               data-dtp="dtp_OwbzW">
                                                                        <label>Birthday Date</label>
                                                                        <span class="md-line"></span></div>
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
                                                                        <span class="md-line"></span></div>
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
                                                                        <textarea class="md-form-control" cols="2"
                                                                                  rows="4"></textarea>
                                                                        <label>Address</label>

                                                                        <span class="md-line"></span></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- end of table col-lg-6 -->

                                                <div class="col-lg-6">
                                                    <table class="table">
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
                                                                        <span class="md-line"></span></div>
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
                                                                        <span class="md-line"></span></div>
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
                                                                        <span class="md-line"></span></div>
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
                                                                        <span class="md-line"></span></div>
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
                                                                        <span class="md-line"></span></div>
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

                </div>
                <!-- end of tab-pane -->
                <!-- end of about us tab-pane -->

                <!-- start tab-pane of project tab -->
                <div class="tab-pane" id="project" role="tabpanel" aria-expanded="true">
                    <div class="col-md-12 col-lg-12">
                        <div class="card card-block">
                            <ul class="scroll-list cards">
                                @foreach($chapters as $chapter)
                                    <a href="{{route("chapter",["chapterId"=>$chapter["ChapterID"],"chapterName"=>$chapter["ChapterName"]])}}">
                                        <li><h6>{{$chapter["ChapterName"]}}</h6></li>
                                    </a>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of project pane -->

@endsection