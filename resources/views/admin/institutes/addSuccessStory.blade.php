@extends('admin.layouts.app')
@section('content')
    <section id="content">
        <div class="container">
            <div class="c-header">
                <h2>Success Stories</h2>
            </div>
            <a href="{{route('admin.stories.index')}}"><button class="btn btn-float btn-danger m-btn"><i class="zmdi zmdi-arrow-back"></i></button></a>
            <div class="card">
                <div class="card-header">
                    <h2>Add new Story</h2>
                </div>
            <form method="POST" action="{{route('admin.stories.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="card-body card-padding">
                    <div class=" m-b-20">
                        <div class="form-group fg-line">
                            <label>student id</label>
                            <input type="text" name="student_id" class="form-control input-mask"  placeholder="eg: 168545" maxlength="10" autocomplete="off"><br>
                        </div>
                    </div>

                    <div class="">
                        <p class="f-500 m-b-15 c-black">Institute</p>

                        <select name="institute_id" class="selectpicker bs-select-hidden">
                            @foreach(\Illuminate\Support\Facades\Auth::user()->institutes as $institute)
                                <option value="{{$institute->id}}">{{$institute->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <br/>
                    <br/>
                    <br/>
                    <p class="f-500 c-black m-b-20">Image Preview</p>

                    <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="fileinput-preview thumbnail" data-trigger="fileinput"></div>
                        <div>
                                    <span class="btn btn-info btn-file">
                                        <span class="fileinput-new">Select image</span>
                                        <span class="fileinput-exists">Change</span>
                                        <input type="file" name="image">
                                    </span>
                            <a href="#" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Remove</a>
                        </div>
                    </div>

                    <br/>
                    <br/>
                </div>
                <div class="card-body card-padding">
                    <p class="f-500 c-black m-b-20">Description</p>

                    <div class="html-editor"></div>

                    <br/>
                    <br/>

                    <button type="submit" name="submit" class="btn btn-primary btn">Save</button>
                </div>
            </form>
            </div>
        </div>
    </section>
@endsection

@push('js')

    <script src="/admin/vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="/admin/vendors/bower_components/Waves/dist/waves.min.js"></script>
    <script src="/admin/vendors/bootstrap-growl/bootstrap-growl.min.js"></script>

    <script src="/admin/vendors/bower_components/moment/min/moment.min.js"></script>
    <script src="/admin/vendors/bower_components/bootstrap-select/dist/js/bootstrap-select.js"></script>
    <script src="/admin/vendors/bower_components/nouislider/distribute/jquery.nouislider.all.min.js"></script>
    <script src="/admin/vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    <script src="/admin/vendors/bower_components/typeahead.js/dist/typeahead.bundle.min.js"></script>
    <script src="/admin/vendors/summernote/dist/summernote-updated.min.js"></script>


    <script src="/admin/vendors/bower_components/chosen/chosen.jquery.min.js"></script>
    <script src="/admin/vendors/fileinput/fileinput.min.js"></script>
    <script src="/admin/vendors/input-mask/input-mask.min.js"></script>
    <script src="/admin/vendors/farbtastic/farbtastic.min.js"></script>
@endpush

@push('css')
    @push('css')
        <link href="/admin/vendors/bower_components/animate.css/animate.min.css" rel="stylesheet">
        <link href="/admin/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">
        <link href="/admin/vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet">
        <link href="/admin/vendors/bower_components/google-material-color/dist/palette.css" rel="stylesheet">
        <link href="/admin/vendors/bower_components/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet">
        <link href="/admin/vendors/bower_components/nouislider/distribute/jquery.nouislider.min.css" rel="stylesheet">
        <link href="/admin/vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
        <link href="/admin/vendors/farbtastic/farbtastic.css" rel="stylesheet">
        <link href="/admin/vendors/bower_components/chosen/chosen.min.css" rel="stylesheet">
        <link href="/admin/vendors/summernote/dist/summernote.css" rel="stylesheet">
@endpush