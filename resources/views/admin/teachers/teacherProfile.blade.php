@extends('admin.layouts.app')
@section('content')
            <section id="content">
                <div class="container">
                    <div class="c-header">
                        <h2>{{$teacher->user->firstname." ".$teacher->user->Lastname}} <small>Web/UI Developer, Edinburgh, Scotland</small></h2>
                    </div>

                    <div class="card" id="profile-main">
                        <div class="pm-overview c-overflow">
                            <div class="pmo-pic">
                                <div class="p-relative">
                                    <a href="#">
                                        <img class="img-responsive" src="/admin/img/profile-pics/profile-pic-2.jpg" alt="">
                                    </a>

                                    <div class="dropdown pmop-message">
                                        <a data-toggle="dropdown" href="#" class="btn palette-White bg btn-float z-depth-1">
                                            <i class="zmdi zmdi-comment-text-alt"></i>
                                        </a>

                                        <div class="dropdown-menu">
                                            <textarea placeholder="Write something..."></textarea>

                                            <button class="btn bgm-green btn-float"><i class="zmdi zmdi-mail-send"></i></button>
                                        </div>
                                    </div>

                                    <a href="#" class="pmop-edit">
                                        <i class="zmdi zmdi-camera"></i> <span class="hidden-xs">Update Profile Picture</span>
                                    </a>
                                </div>


                                <div class="pmo-stat">
                                    <h2 class="m-0 c-white">{{$teacher->user->firstname}}</h2>
                                    Student
                                </div>
                            </div>

                        </div>

                        <div class="pm-body clearfix">
                            <ul class="tab-nav tn-justified">
                                <li class="active waves-effect" id="about" onclick="showAbout()"><a >About</a></li>
                                <li class="waves-effect" id="institute" onclick="showCourse()"><a >Course Info</a></li>
                                <li class="waves-effect" id="result" onclick="showResult()"><a >Exam Result</a></li>
                            </ul>
                            <div id="aboutSection">
                                <div class="pmb-block">
                                <div class="pmbb-header">
                                    <h2><i class="zmdi zmdi-account m-r-5"></i> Basic Information</h2>

                                    <ul class="actions">
                                        <li class="dropdown">
                                            <a href="#" data-toggle="dropdown">
                                                <i class="zmdi zmdi-more-vert"></i>
                                            </a>

                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li>
                                                    <a data-pmb-action="edit" href="#">Edit</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pmbb-body p-l-30">
                                    <div class="pmbb-view">
                                        <dl class="dl-horizontal">
                                            <dt>Full Name</dt>
                                            <dd>{{$teacher->user->firstname." ".$teacher->user->Lastname}}</dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt>Education:</dt>
                                            <dd>{{$teacher->education}}</dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt>School</dt>
                                            <dd>{{$teacher->school}}</dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt>Subjects</dt>
                                            <dd>{{$teacher->subjects}}</dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt>Qualifications</dt>
                                            <dd>{{$teacher->qualification}}</dd>
                                        </dl>
                                    </div>

                                    <div class="pmbb-edit">
                                        <dl class="dl-horizontal">
                                            <dt class="p-t-10">First Name</dt>
                                            <dd>
                                                <div class="fg-line">
                                                    <input type="text" class="form-control" placeholder="eg. Mallinda">
                                                </div>

                                            </dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt class="p-t-10">Last Name</dt>
                                            <dd>
                                                <div class="fg-line">
                                                    <input type="text" class="form-control" placeholder="eg.Hollaway">
                                                </div>
                                            </dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt class="p-t-10">Age</dt>
                                            <dd>
                                                <div class="dtp-container dropdown fg-line">
                                                    <input type='number' class="form-control" data-toggle="dropdown" placeholder="Age">
                                                </div>
                                            </dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt class="p-t-10">School</dt>
                                            <dd>
                                                <div class="dtp-container dropdown fg-line">
                                                    <input type='number' class="form-control" data-toggle="dropdown" placeholder="School">
                                                </div>
                                            </dd>
                                        </dl>

                                        <div class="m-t-30">
                                            <button class="btn btn-primary btn-sm">Save</button>
                                            <button data-pmb-action="reset" class="btn btn-danger btn-sm">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <div class="pmb-block">
                                <div class="pmbb-header">
                                    <h2><i class="zmdi zmdi-phone m-r-5"></i> Contact Information</h2>

                                    <ul class="actions">
                                        <li class="dropdown">
                                            <a href="#" data-toggle="dropdown">
                                                <i class="zmdi zmdi-more-vert"></i>
                                            </a>

                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li>
                                                    <a data-pmb-action="edit" href="#">Edit</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pmbb-body p-l-30">
                                    <div class="pmbb-view">
                                        <dl class="dl-horizontal">
                                            <dt>Mobile Phone</dt>
                                            <dd>{{$teacher->phone}}</dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt>Email Address</dt>
                                            <dd>{{$teacher->user->email}}</dd>
                                        </dl>
                                    </div>

                                    <div class="pmbb-edit">
                                        <dl class="dl-horizontal">
                                            <dt class="p-t-10">Mobile Phone</dt>
                                            <dd>
                                                <div class="fg-line">
                                                    <input type="text" class="form-control" placeholder="eg. 00971 12345678 9">
                                                </div>
                                            </dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt class="p-t-10">Email Address</dt>
                                            <dd>
                                                <div class="fg-line">
                                                    <input type="email" class="form-control" placeholder="eg. malinda.h@gmail.com">
                                                </div>
                                            </dd>
                                        </dl>

                                        <div class="m-t-30">
                                            <button class="btn btn-primary btn-sm">Save</button>
                                            <button data-pmb-action="reset" class="btn btn-sm btn-danger">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div id="instituteSection" class="hide">
                                <div class="pmb-block clearfix">
                                    <div class="p-header">
                                        <div class="row">
                                            @foreach($teacher->institutes as $institute)
                                                <div class="col col-sm-4 card card-padding c-white bgm-blue">
                                                    <div class="card-content bg-white">
                                                        <img class="center-block" src="/admin/img/books.png">
                                                        <p align="center">{{$institute->pivot->course_id}}</p>
                                                        <p align="center">Registration Number: {{$institute->pivot->regNumber}}</p>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    {{--<button class="btn btn-float btn-danger m-btn"><i class="zmdi zmdi-plus"></i></button>--}}
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div id="resultSection" class="hide">
                                <div class="pmb-block clearfix photos">
                                    <div class="p-header">
                                        <div class="card">
                                            <div class="card-content">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <img src="/admin/img/exam.png" width="128" height="128">
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <h4 align="center">Final Exam of AAT 2018</h4>
                                                        <p>Year: 2018</p>
                                                        <p>course: AAT </p>
                                                        <p>Marks: 55</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
@endsection

@push('js')
    <script src="/admin/vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>

    <script>
    //Menu Items
    var menuAbout = document.getElementById('about');
    var menuInstitute = document.getElementById('institute');
    var menuResult = document.getElementById('result');
    //Body Sections
    var aboutSection = document.getElementById('aboutSection');
    var instituteSection = document.getElementById('instituteSection');
    var resultSection = document.getElementById('resultSection');

    //About Section Control
    function showAbout() {
        //Menu Activation Control
        menuAbout.classList.add('active');
        menuInstitute.classList.remove('active');
        menuResult.classList.remove('active');

        // Section Body Display Control
        aboutSection.classList.remove('hide');
        instituteSection.classList.add('hide');
        resultSection.classList.add('hide');
    }
    //Course Section Control
    function showCourse() {
        //Menu Activation Control
        menuAbout.classList.remove('active');
        menuInstitute.classList.add('active');
        menuResult.classList.remove('active');

        // Section Body Display Control
        aboutSection.classList.add('hide');
        instituteSection.classList.remove('hide');
        resultSection.classList.add('hide');
    }
    //Result Section Control
    function showResult() {
        //Menu Activation Control
        menuAbout.classList.remove('active');
        menuInstitute.classList.remove('active');
        menuResult.classList.add('active');

        // Section Body Display Control
        aboutSection.classList.add('hide');
        instituteSection.classList.add('hide');
        resultSection.classList.remove('hide');
    }
</script>    
@endpush