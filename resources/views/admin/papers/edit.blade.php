@extends('admin.layouts.app')
@section('content')
    <section id="content">
        <div class="container">
            <div class="c-header">
                <h2>Edit Paper</h2>
            </div>
            <a href="{{route('admin.papers.index')}}"> <button class="btn btn-float btn-success m-btn"><i class="zmdi zmdi-arrow-back"></i></button></a>
            <div class="card">
                <div class="card-header">
                    <h2>Edit Paper</h2>
                </div>

                <div class="card-body card-padding">
                    <br/><br/>
                    <form method="POST" action="{{route('admin.papers.update')}}" id = "addCourse">
                        @csrf
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="zmdi zmdi-home"></i></span>
                                    <div class="select">
                                        <select class="form-control" id="institute_id" name="institute_id">
                                            <option disabled="disabled">Select and Option</option>
                                            @foreach($institutes as $institute)
                                                @foreach(auth()->user()->institutes as $userInstitute)
                                                    @if($institute->id==$userInstitute->id)
                                                        <option value="{{$institute->id}}">{{$institute->name}}</option>
                                                    @endif
                                                @endforeach
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <br/>
                            </div>
                            <div class="col-sm-3">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="zmdi zmdi-book"></i></span>
                                    <div class="select">
                                        <select class="form-control" id="course_id" name="course_id">
                                            <option disabled>Please Select an Option</option>
                                            @foreach($courses as $course)
                                                <option value="{{$course->id}}">{{$course->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <br/>
                            </div>
                            <div class="col-sm-3">
                                <div class="col-sm-12">
                                    <input type="text" name="name" class="form-control" value="{{$paper->name}}" placeholder="Paper Name">
                                </div>
                                <br/>
                            </div>
                            <div class="col-sm-3">
                                <div>
                                    <div >
                                        {{--<button class="btn btn-primary" onclick="select()">Add</button>--}}
                                        <button class="btn btn-primary">Add</button>
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
