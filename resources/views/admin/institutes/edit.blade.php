@extends('admin.layouts.app')
@section('content')
    <section id="content">
        <div class="container">
            <div class="c-header">
                <h2>Edit Institute</h2>
            </div>
            <div class="card">
                <div class="card-header">
                    <h2>Edit Details of Institue </h2>
                </div>
                <a href="/admin/institute/details"> <button class="btn btn-float btn-danger m-btn"><i class="zmdi zmdi-arrow-left"></i></button></a>
                <div class="card-body card-padding">
                    <br/><br/>
                <form method="POST" action="/admin/institute/update/{{$institute->id}}" enctype="multipart/form-data" id = "addCourse">
                        @csrf
                        <div class="input-group">
                            <span class="input-group-addon"><i class="zmdi zmdi-book"></i></span>
                            <div class="select">
                                <input class="form-control" type="text" name="name"
                            placeholder="Name of the Institute" value="{{$institute->name}}">
                            </div>
                        </div>
                        <br/>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="zmdi zmdi-book"></i></span>
                            <div class="select">
                                <input class="form-control" type="text" name="address"
                                        placeholder="Address" value="{{$institute->address}}">
                            </div>
                        </div>
                        <br/>
                        <div class="input-group">
                                <span class="input-group-addon"><i class="zmdi zmdi-book"></i></span>
                                <div class="select">
                                    <input class="form-control" type="text" name="telephone"
                                            placeholder="telephone" value="{{$institute->telephone}}">
                                </div>
                            </div>
                        <br/>
                        <div >
                            <button class="btn btn-primary">Update</button>
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
