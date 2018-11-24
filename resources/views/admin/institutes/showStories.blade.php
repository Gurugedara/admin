@extends('admin.layouts.app')
@section('content')
    <section id="content">
        <div class="container">
            <div class="c-header">
                <h2>Success Stories</h2>
            </div>

            <div class="card" id="profile-main">
                <div class="pm-overview c-overflow">
                    <div class="pmo-pic">
                        <div class="p-relative">
                            <a href="#">
                                <img class="img-responsive" src="{{\Illuminate\Support\Facades\Storage::url($story->image)}}" alt="">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="pm-body clearfix">
                    <div class="pmb-block">
                        <div class="pmbb-header">
                            <h2><i class="zmdi zmdi-equalizer m-r-5"></i> Summary</h2>
                        </div>
                        <div class="pmbb-body p-l-30">
                            <div class="pmbb-view">
                                {{$story->description}}
                            </div>
                        </div>
                    </div>

                    <div class="pmb-block">
                        <div class="pmbb-header">
                            <h2><i class="zmdi zmdi-account m-r-5"></i> Basic Information</h2>
                        </div>
                        <div class="pmbb-body p-l-30">
                            <div class="pmbb-view">
                                <dl class="dl-horizontal">
                                    <dt>Full Name</dt>
                                    <dd>{{$story->student->user->firstname." ".$story->student->user->Lastname}}</dd>
                                </dl>
                                <dl class="dl-horizontal">
                                    <dt>School</dt>
                                    <dd>{{$story->student->school}}</dd>
                                </dl>
                                <dl class="dl-horizontal">
                                    <dt>Age</dt>
                                    <dd>{{$story->student->age}}</dd>
                                </dl>
                                <dl class="dl-horizontal">
                                    <dt>OL index</dt>
                                    <dd>{{$story->student->olindex}}</dd>
                                </dl>
                                <dl class="dl-horizontal">
                                    <dt>AL index</dt>
                                    <dd>{{$story->student->alindex}}</dd>
                                </dl>
                            </div>
                        </div>
                    </div>


                    <div class="pmb-block">
                        <div class="pmbb-header">
                            <h2><i class="zmdi zmdi-phone m-r-5"></i> Contact Information</h2>
                        </div>
                        <div class="pmbb-body p-l-30">
                            <div class="pmbb-view">
                                <dl class="dl-horizontal">
                                    <dt>Mobile Phone</dt>
                                    <dd>{{$story->student->phone}}</dd>
                                </dl>
                                <dl class="dl-horizontal">
                                    <dt>Email Address</dt>
                                    <dd>{{$story->student->user->email}}</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('css')
    <!-- Vendor CSS -->
    <link href="/admin/vendors/bower_components/animate.css/animate.min.css" rel="stylesheet">
    <link href="/admin/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">
    <link href="/admin/vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet">
    <link href="/admin/vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="/admin/vendors/bower_components/google-material-color/dist/palette.css" rel="stylesheet">
@endpush

@push('js')
    <script src="/admin/vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="/admin/vendors/bower_components/Waves/dist/waves.min.js"></script>
    <script src="/admin/vendors/bootstrap-growl/bootstrap-growl.min.js"></script>
    <script src="/admin/vendors/bootgrid/jquery.bootgrid.updated.min.js"></script>
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