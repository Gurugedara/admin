@extends('admin.layouts.app')
@section('content')
    <section id="content">
        <div class="container">
            <div class="c-header">
                <h2>Review <small>Comment on this review as the institute owner</small></h2>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <!-- One comment starts form here-->
                    <div class="card">
                        <div class="card-header">
                            <div class="media">
                                <div class="pull-left">
                                    <img class="avatar-img a-lg" src="{{$review->student->user->avatar}}" alt="">
                                </div>

                                <div class="media-body m-t-5">
                                    <h2>{{$review->student->user->firstname." ".$review->student->user->Lastname}} <small>Posted on {{$review->created_at}}</small></h2>
                                </div>
                            </div>
                        </div>

                        <div class="card-body card-padding">
                            <p>{{$review->comment}}</p>

                            <ul class="wall-attrs clearfix list-inline list-unstyled">
                                <li class="wa-stats">
                                    <span><i class="zmdi zmdi-comments"></i> {{count($review->comments)}}</span>
                                    <span class="active"><i class="zmdi zmdi-thumb-up"></i> {{$review->up}}</span>
                                    <span class="active"><i class="zmdi zmdi-thumb-down"></i> {{$review->down}}</span>
                                </li>
                            </ul>
                        </div>

                        <div class="wall-comment-list">

                            <!-- Comment Listing -->
                            <div class="wcl-list">
                                @foreach($review->comments as $comment)
                                <div class="media">
                                    <a href="#" class="pull-left">
                                        <img src="{{$comment->user->avatar}}" alt="" class="avatar-img">
                                    </a>
                                    @if($comment->user_id==auth()->user()->id)
                                    <div class="pull-right">
                                        <ul class="actions">
                                            <li class="dropdown">
                                                <a href="#" data-toggle="dropdown" aria-expanded="false">
                                                    <i class="zmdi zmdi-more-vert"></i>
                                                </a>

                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li>
                                                        <a href="/admin/institute/reviews/comment/delete/{{$comment->id}}">Delete</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    @endif

                                    <div class="media-body">
                                        <a href="#" class="a-title">{{$comment->user->firstname." ".$comment->user->lastName}}</a>
                                        <p class="m-t-5 m-b-0">{{$comment->comment}}</p>
                                    </div>
                                </div>
                                @endforeach
                            </div>

                            <!-- Comment form -->

                            <div class="wcl-form">
                                <form method="POST" action="/admin/institute/review/{{$review->id}}/comment/add">
                                    @csrf
                                    <div class="wc-comment">
                                        <div class="wcc-inner wcc-toggle">
                                            Write Something...
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                    <!-- One post ends in here -->
                </div>

                <div class="col-md-4 hidden-sm">
                    <div class="card">
                        <div class="card-header">
                            <h2>Contact Information <small>Details about the reviewer</small></h2>
                        </div>
                        <div class="card-body card-padding">
                            <div class="pmo-contact">
                                <ul>
                                    <li class="ng-binding"><i class="zmdi zmdi-phone"></i> {{$review->student->phone}}</li>
                                    <li class="ng-binding"><i class="zmdi zmdi-email"></i> {{$review->student->user->email}}</li>
                                    <li class="ng-binding"><i class="zmdi zmdi-assignment-account"></i>{{$review->student->school}}</li>
                                    <li class="ng-binding"><i class="zmdi zmdi-accounts-list"></i> <a href="/admin/search/student/{{$review->student->id}}">Profile</a></li>
                                </ul>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="/admin/institute/reviews"> <button class="btn btn-float btn-primary m-btn"><i class="zmdi zmdi-arrow-back"></i></button></a>
    </section>


@endsection

@push('css')
    <link href="/admin/vendors/bower_components/animate.css/animate.min.css" rel="stylesheet">
    <link href="/admin/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">
    <link href="/admin/vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet">
    <link href="/admin/vendors/bower_components/google-material-color/dist/palette.css" rel="stylesheet">
    <link href="/admin/vendors/bower_components/lightgallery/dist/css/lightgallery.min.css" rel="stylesheet">
@endpush
@push('js')
    <script src="/admin/vendors/bower_components/lightgallery/dist/js/lightgallery-all.min.js"></script>
    <script src="/admin/vendors/bower_components/autosize/dist/autosize.min.js"></script>
    <script src="/admin/vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="/admin/vendors/bower_components/Waves/dist/waves.min.js"></script>
    <script src="/admin/vendors/bootstrap-growl/bootstrap-growl.min.js"></script>
    <script src="/admin/vendors/bootgrid/jquery.bootgrid.updated.min.js"></script>
@endpush