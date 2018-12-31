@extends('admin.layouts.app')
@section('content')
    <section id="content">
        <div class="container">
            <div class="c-header">
                <h2>Wall <small>Post about You</small></h2>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <div class="card wall-posting">
                    <form method="POST" action="/admin/forum/post" enctype="multipart/form-data" id="forumPost">
                            @csrf
                            <div class="card-body card-padding">
                                <input type="file" name="imageFile[]" style="display:none" id="imageFile" onchange="readURL(this)">
                                <textarea name="content" class="wp-text" data-auto-size placeholder="Write Something..."></textarea>
                                <div class="tab-content p-0">
                                    <div class="wp-media tab-pane" id="wpm-image">
                                        Add a Image
                                    </div>

                                    <div class="wp-media tab-pane" id="wpm-video">
                                        Add a Video
                                    </div>

                                    <div class="wp-media tab-pane" id="wpm-link">
                                        Share a Link
                                    </div>
                                </div>
                                <div class="tab-content p-0">
                                    <div class="contain1" style="display:none" id="contain1">
                                        <img src="#" id="uploaded" style="display:none">
                                        <button class="close" id="btnClose" onclick="resetInput">Close</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <ul class="list-unstyled clearfix wpb-actions">
                            <li class="wpba-attrs">
                                <ul class="list-unstyled list-inline">
                                    <li><a data-wpba="image" data-toggle="tab" href="#" data-target="#wpm-image"><i class="zmdi zmdi-image"></i></a></li>
                                    {{-- <li><a data-wpba="video" data-toggle="tab" href="#" data-target="#wpm-video"><i class="zmdi zmdi-play-circle"></i></a></li>
                                    <li><a data-wpba="link" data-toggle="tab" href="#" data-target="#wpm-link"><i class="zmdi zmdi-link"></i></a></li> --}}
                                </ul>
                            </li>

                            <button type="submit" id="formSubmit" class="btn btn-primary btn-sm btn-icon"><i class="zmdi zmdi-check"></i></button>
                        </ul>
                    </div>
                    @foreach($posts as $post)
                    <div class="card">
                        <div class="card-header">
                            <div class="media">
                                <div class="pull-left">
                                    <img class="avatar-img a-lg" src="{{$post->user->avatar}}" alt="">
                                </div>

                                <div class="media-body m-t-5">
                                    <h2>{{$post->user->firstname." ".$post->user->Lastname}} <small>Posted on {{$post->created_at}}</small></h2>
                                </div>
                            </div>
                        </div>

                        <div class="card-body card-padding">
                        <p>{{$post->content}}</p>
                            @foreach($post->images as $image)
                            <div class="wall-img-preview lightbox clearfix">
                                <div class="wip-item" data-src={{\Illuminate\Support\Facades\Storage::url($image->path)}} style="background-image: url({{\Illuminate\Support\Facades\Storage::url($image->path)}});">
                                    <div class="lightbox-item"></div>
                                </div>
                            </div>
                            @endforeach
                            <ul class="wall-attrs clearfix list-inline list-unstyled">
                                <li class="wa-stats">
                                    <span><i class="zmdi zmdi-comments"></i> {{count($post->comments)}}</span>
                                    <span class="active"><i class="zmdi zmdi-favorite"></i> {{$post->likes}}</span>
                                </li>
                                <li class="wa-users">
                                @foreach($post->comments as $comment)
                                <a href="#"><img src="{{$comment->user->avatar}}" alt=""></a>
                                @endforeach
                                </li>
                                
                            </ul>
                        </div>

                        <div class="wall-comment-list">

                            <!-- Comment Listing -->
                            <div class="wcl-list">
                                @foreach($post->comments as $comment)
                                <div class="media">
                                    <a href="#" class="pull-left">
                                        <img src="{{$comment->user->avatar}}" alt="" class="avatar-img">
                                    </a>

                                    <div class="pull-right p-0">
                                        <ul class="actions">
                                            <li class="dropdown" dropdown="">
                                                <a href="#" dropdown-toggle="" aria-haspopup="true" aria-expanded="false">
                                                    <i class="zmdi zmdi-more-vert"></i>
                                                </a>

                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li>
                                                        <a href="#">Report</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Delete</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="media-body">
                                        <a href="#" class="a-title">{{$comment->user->firstname." ".$comment->user->Lastname}}</a> <small class="c-gray m-l-10">{{$comment->created_at}}</small>
                                        <p class="m-t-5 m-b-0">{{$comment->content}}</p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <!-- Comment form -->
                            <div class="wcl-form">
                                <form method="POST" action="/admin/forum/comment" id="commentForm">
                                    @csrf
                                    <input type="hidden" name="post_id" value="{{$post->id}}">
                                <div class="wc-comment">
                                    <div class="wcc-inner wcc-toggle">
                                       Write Something...
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>

                <div class="col-md-4 hidden-sm">
                    <div class="card">
                        <div class="card-header">
                            <h2>About me</h2>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h2>Contact Information</h2>
                        </div>
                        <div class="card-body card-padding">
                            <div class="pmo-contact">
                                <ul>
                                    <li class="ng-binding"><i class="zmdi zmdi-phone"></i> 00971123456789</li>
                                    <li class="ng-binding"><i class="zmdi zmdi-email"></i> malinda.h@gmail.com</li>
                                    <li class="ng-binding"><i class="zmdi zmdi-facebook-box"></i> malinda.hollaway</li>
                                    <li class="ng-binding"><i class="zmdi zmdi-twitter"></i> @malinda (twitter.com/malinda)</li>
                                    <li>
                                        <i class="zmdi zmdi-pin"></i>
                                        <address class="m-b-0 ng-binding">
                                            44-46 Morningside Road,<br>
                                            Edinburgh,<br>
                                            Scotland
                                        </address>
                                    </li>
                                </ul>
                            </div>

                            <a class="pmo-map" href="#">
                                <img src="img/demo/map.png" alt="">
                            </a>
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
    <link href="/admin/vendors/bower_components/google-material-color/dist/palette.css" rel="stylesheet">
    <link href="/admin/vendors/bower_components/lightgallery/dist/css/lightgallery.min.css" rel="stylesheet">
    <link href="/admin/css/forum.css" rel="stylesheet">

@endpush

@push('js')
    <script src="/admin/js/forum.js"></script>
    <script src="/admin/vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="/admin/vendors/bower_components/Waves/dist/waves.min.js"></script>
    <script src="/admin/vendors/bootstrap-growl/bootstrap-growl.min.js"></script>
    <script src="/admin/vendors/bootgrid/jquery.bootgrid.updated.min.js"></script>
    <script src="/admin/vendors/bower_components/lightgallery/dist/js/lightgallery-all.min.js"></script>
@endpush
