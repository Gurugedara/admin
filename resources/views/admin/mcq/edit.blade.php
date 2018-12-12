@extends('admin.layouts.app')
@section('content')
    <section id="content">
        <div class="container">
            <div class="c-header">
                <h2>Edit MCQ</h2>
            </div>
            <a href="{{route('admin.papers.index')}}"> <button class="btn btn-float btn-success m-btn"><i class="zmdi zmdi-arrow-back"></i></button></a>
            <form method="POST" action="{{route('admin.mcq.update',$mcq->id)}}">
                @method('PUT')
                @csrf
            <div class="card">
                <div class="card-header">
                    <h2>Edit MCQ Details </h2>
                </div>

                <div class="card-body card-padding">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="fg-line form-group">
                                <input type="text" value="{{$mcq->description}}" name="description" class="form-control input-sm" placeholder="Enter the Question">
                            </div>
                        </div>
                    </div>
                    <br/><br/>
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="fg-line form-group">
                                <input type="text" name="answers[]" class="form-control input-sm" placeholder="Answer 1"
                                value="{{$answer1->answer}}">
                            </div>
                        </div>
                        <div class="col-sm-4 m-b-20">
                            <div class="toggle-switch" data-ts-color="blue">
                                <input id="ans1" name="answer" type="radio" hidden="hidden" value="1"
                                {{($answer1->status==1) ? "checked":""}}
                                >
                                <label for="ans1" class="ts-helper"></label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="fg-line form-group">
                                <input type="text" name="answers[]" class="form-control input-sm" placeholder="Answer 2"
                                       value="{{$answer2->answer}}">
                            </div>
                        </div>
                        <div class="col-sm-4 m-b-20">
                            <div class="toggle-switch" data-ts-color="blue">
                                <input id="ans2" name="answer" type="radio" hidden="hidden" value="2"
                                        {{($answer2->status==1) ? "checked":""}}>
                                <label for="ans2" class="ts-helper"></label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="fg-line form-group">
                                <input type="text" name="answers[]" class="form-control input-sm" placeholder="Answer 3"
                                       value="{{$answer3->answer}}">
                            </div>
                        </div>
                        <div class="col-sm-4 m-b-20">
                            <div class="toggle-switch" data-ts-color="blue">
                                <input id="ans3" name="answer" type="radio" hidden="hidden" value="3"
                                        {{($answer3->status==1) ? "checked":""}}>
                                <label for="ans3" class="ts-helper"></label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="fg-line form-group">
                                <input type="text" name="answers[]" class="form-control input-sm" placeholder="Answer 4"
                                       value="{{$answer4->answer}}">
                            </div>
                        </div>
                        <div class="col-sm-4 m-b-20">
                            <div class="toggle-switch" data-ts-color="blue">
                                <input id="ans4" name="answer" type="radio" hidden="hidden" value="4"
                                        {{($answer4->status==1) ? "checked":""}}>
                                <label for="ans4" class="ts-helper"></label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-xs-4">
                        <div class="fg-line form-group">
                            <input type="number" value="{{$mcq->marks}}" name="marks" class="form-control input-sm" placeholder="Marks">
                        </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-success sa-btn-medium">Update</button>
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
