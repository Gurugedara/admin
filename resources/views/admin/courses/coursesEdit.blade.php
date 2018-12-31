@extends('admin.layouts.app')
@section('content')
    <section id="content">
        <div class="container">
            <div class="c-header">
                <h2>Edit Course</h2>
            </div>

            <div class="card">
                <div class="card-header">
                    <h2>Select the New Course <small>These courses will be visible to the students as they can enroll with them</small></h2>
                </div>

                <div class="card-body card-padding">
                    <br/><br/>
                    <form method="POST" action="/admin/institute/course/update/{{$syllabus->id}}" enctype="multipart/form-data" id = "addCourse">
                        @csrf
                        <br>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="zmdi zmdi-book"></i></span>
                                <div class="select">
                                    <input class="form-control" type="text" name="name"
                                            placeholder="Name of the Syllabus" value="{{$syllabus->name}}">
                                </div>
                            </div>

                            <br/>
                        </div>
                        <div class="col-sm-3">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="zmdi zmdi-book"></i></span>
                                <div class="select">
                                    <input class="form-control" type="text" name="version"
                                            placeholder="Version" value="{{$syllabus->version}}">
                                </div>
                            </div>

                            <br/>
                        </div>
                        <div class="col-sm-3">
                                <div class="col-sm-4">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                <span class="btn btn-success btn-file m-r-10 waves-effect">
                                    <span class="fileinput-new">Add Downloadable Version</span>
                                    <span class="fileinput-exists">Change</span>
                                    <input type="hidden" value="" name="..."><input type="file" name="syllabus" accept=".xlsx,.xls,image/*,.doc, .docx,.ppt, .pptx,.txt,.pdf">
                                </span>
                                        <span class="fileinput-filename"></span>
                                        <a href="#" class="close fileinput-exists" data-dismiss="fileinput">×</a>
                                    </div>
                                </div>
                            <br/>
                        </div>
                        <div class="col-sm-3">
                            <div>
                                <div >
                                    {{--<button class="btn btn-primary" onclick="select()">Add</button>--}}
                                    <button class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
                <br/>
            </div>

        </div>
    </section>
@endsection

@push('css')

    <!-- Vendor CSS -->
    <link href="/admin/vendors/bower_components/animate.css/animate.min.css" rel="stylesheet">
    <link href="/admin/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">
    <link href="/admin/vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet">
    <link href="/admin/vendors/bower_components/google-material-color/dist/palette.css" rel="stylesheet">

@endpush

@push('js')
    <script src="/admin/vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="/admin/vendors/bower_components/Waves/dist/waves.min.js"></script>
    <script src="/admin/vendors/bootstrap-growl/bootstrap-growl.min.js"></script>
    <script src="/admin/vendors/bootgrid/jquery.bootgrid.updated.min.js"></script>
    <script src="/admin/vendors/bower_components/chosen/chosen.jquery.min.js"></script>
    <script src="/admin/vendors/fileinput/fileinput.min.js"></script>
    <script src="/admin/vendors/input-mask/input-mask.min.js"></script>
    <script src="/admin/vendors/farbtastic/farbtastic.min.js"></script>

@endpush
