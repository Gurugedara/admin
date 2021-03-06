@extends('admin.layouts.app')
@section('content')
    <section id="content">
        <div class="container">
            <div class="c-header">
                <h2>Add new MCQ</h2>
            </div>
            <a href="{{route('admin.papers.index')}}"> <button class="btn btn-float btn-success m-btn"><i class="zmdi zmdi-arrow-back"></i></button></a>
            <form method="POST" action="{{route('admin.mcq.store')}}">
                @csrf
                <input type="hidden" value="{{$id}}" name="paper_id">
            <div class="card">
                <div class="card-header">
                    <h2>Enter MCQ Details </h2>
                </div>

                <div class="card-body card-padding">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="fg-line form-group">
                                <input type="text" name="description" class="form-control input-sm" placeholder="Enter the Question" required>
                            </div>
                        </div>
                    </div>
                    <br/><br/>
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="fg-line form-group">
                                <input type="text" name="answers[]" class="form-control input-sm" placeholder="Answer 1" required>
                            </div>
                        </div>
                        <div class="col-sm-4 m-b-20">
                            <div class="toggle-switch" data-ts-color="blue">
                                <input id="ans1" name="answer" type="radio" hidden="hidden" value="1">
                                <label for="ans1" class="ts-helper"></label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="fg-line form-group">
                                <input type="text" name="answers[]" class="form-control input-sm" placeholder="Answer 2" required>
                            </div>
                        </div>
                        <div class="col-sm-4 m-b-20">
                            <div class="toggle-switch" data-ts-color="blue">
                                <input id="ans2" name="answer" type="radio" hidden="hidden" value="2">
                                <label for="ans2" class="ts-helper"></label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="fg-line form-group">
                                <input type="text" name="answers[]" class="form-control input-sm" placeholder="Answer 3" required>
                            </div>
                        </div>
                        <div class="col-sm-4 m-b-20">
                            <div class="toggle-switch" data-ts-color="blue">
                                <input id="ans3" name="answer" type="radio" hidden="hidden" value="3">
                                <label for="ans3" class="ts-helper"></label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="fg-line form-group">
                                <input type="text" name="answers[]" class="form-control input-sm" placeholder="Answer 4" required>
                            </div>
                        </div>
                        <div class="col-sm-4 m-b-20">
                            <div class="toggle-switch" data-ts-color="blue">
                                <input id="ans4" name="answer" type="radio" hidden="hidden" value="4">
                                <label for="ans4" class="ts-helper"></label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-xs-4">
                        <div class="fg-line form-group">
                            <input type="number" name="marks" class="form-control input-sm" placeholder="Marks" required>
                        </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-success sa-btn-medium">Save</button>
                    </div>
                </div>
            </div>
            </form>
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
