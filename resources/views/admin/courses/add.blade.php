@extends('admin.layouts.app')
@section('content')
            <section id="content">
                <div class="container">
                    <div class="c-header">
                        <h2>Add new Course</h2>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h2>Create a new Course <small>These courses will be visible to the students as they can enroll with them</small></h2>
                        </div>

                        <div class="card-body card-padding">
                            <br/><br/>
                            <form method="POST" action="/admin/courses/add" enctype="multipart/form-data" id = "addCourse">
                                @csrf
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="zmdi zmdi-book"></i></span>
                                        <div class="select">
                                            <input class="form-control" type="text" name="name" placeholder="Name of the Course">
                                        </div>
                                    </div>

                                    <br/>
                                </div>
                                <div class="col-sm-3">
                                    <div>
                                        <div >
                                            {{--<button class="btn btn-primary" onclick="select()">Add</button>--}}
                                            <button class="btn btn-primary">Save</button>
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

    {{--<script type="text/javascript">--}}
        {{--function select(){--}}
            {{--var form = $('#addCourse');--}}
            {{--$(form).submit(function (event) {--}}
                {{--event.preventDefault();--}}
            {{--});--}}
            {{--//var formData = $(form).serialize();--}}
	    {{--var formData = new FormData();--}}
	    {{--var institute_id = $('#institute_id');--}}
	    {{--var course_id = $('#course_id');--}}
	    {{--var syllabus = $('#syllabus');--}}

	    {{--formData.append('institute_id', institute_id);--}}
	    {{--formData.append('course_id', course_id);--}}
	    {{--formData.append('syllabus', syllabus);--}}

            {{--$.ajax({--}}
                {{--url: '{{url('/admin/institute/course/add')}}',--}}
                {{--type: 'post',--}}
                {{--// dataType: 'JSON',--}}
                {{--data: formData.values(),--}}
            {{--})--}}
                {{--.done(function(result) {--}}
                    {{--if(result==='true'){--}}
                        {{--swal("Done!", "Course Added to your institute Successfully", "success")--}}
                    {{--}else{--}}
                        {{--swal("Failed!", "This course is already registered with your institute", "error");--}}
                    {{--}--}}
                    {{--return "true";--}}
                {{--})--}}
                {{--.fail(function() {--}}
                    {{--console.log('Fail');--}}
                    {{--return "false";--}}
                {{--});--}}
        {{--}--}}
    {{--</script>--}}
@endpush
