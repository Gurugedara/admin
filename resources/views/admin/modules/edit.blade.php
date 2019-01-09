@extends('admin.layouts.app')
@section('content')
    <section id="content">
        <div class="container">
            <div class="c-header">
                <h2>Syllabus Module</h2>
            </div>

            <div class="card">
                <div class="card-header">
                    <h2>Edit Syllabus Module <small>These modules will be visible to the students.</small></h2>
                </div>

                <div class="card-body card-padding">
                    <br/><br/>
                    <form method="POST" action="{{route('admin.modules.update',$module->id)}}" id = "addCourse">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="input-group">

                                    <div class="select">
                                        <input type="text" class="form-control" 
                                        name="name" placeholder="module Name" value="{{$module->name}}" required
                                        >
                                    </div>
                                </div>

                                <br/>
                            </div>
                            <div class="col-sm-4">
                                <div class="input-group">
                                    <div class="select">
                                        <input type="text" class="form-control" name="description" 
                                        \placeholder="description" value="{{$module->description}}" required>
                                    </div>
                                </div>
                                <br/>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="input-group">
                                    <div class="select">
                                        <textarea class="form-control" cols="20" rows="10" required name="learning_points" placeholder="Learning Points">{{$module->learning_points}}</textarea>
                                    </div>
                                </div>

                                <br/>
                            </div>
                            <div class="col-sm-4">
                                <div class="input-group">
                                    <div class="select">
                                        <select class="form-control" name="syllabus_id" required style="width: 180px">
                                            @foreach($syllabi as $syllabus)
                                                <option value="{{$syllabus->id}}">{{$syllabus->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <br/>
                            </div>

                        </div>
                        <div class="col-sm-3">
                            <div>
                                <div >
                                    <button class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <br/>
            </div>
            <a href="/admin/institute/syllabus"> <button class="btn btn-float btn-danger m-btn"><i class="zmdi zmdi-arrow-back"></i></button></a>
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
