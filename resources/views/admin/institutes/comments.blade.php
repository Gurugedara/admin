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
                                    <img class="avatar-img a-lg" src="img/profile-pics/1.jpg" alt="">
                                </div>

                                <div class="media-body m-t-5">
                                    <h2>{{$review->student->user->firstname." ".$review->student->user->Lastname}} <small>Posted on 31st Aug 2015 at 07:00</small></h2>
                                </div>
                            </div>
                        </div>

                        <div class="card-body card-padding">
                            <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce eget dolor id justo luctus commodo vel pharetra nisi. Donec velit libero, gravida vel diam ut, lobortis mollis quam. Morbi posuere egestas posuere. Curabitur in dui sollicitudin, lacinia magna at, laoreet sapien. Integer vitae eros nulla.</p>

                            <ul class="wall-attrs clearfix list-inline list-unstyled">
                                <li class="wa-stats">
                                    <span><i class="zmdi zmdi-comments"></i> 36</span>
                                    <span class="active"><i class="zmdi zmdi-thumb-up"></i> 220</span>
                                    <span class="active"><i class="zmdi zmdi-thumb-down"></i> 220</span>
                                </li>
                            </ul>
                        </div>

                        <div class="wall-comment-list">

                            <!-- Comment Listing -->
                            <div class="wcl-list">
                                <div class="media">
                                    <a href="#" class="pull-left">
                                        <img src="img/profile-pics/5.jpg" alt="" class="avatar-img">
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
                                        <a href="#" class="a-title">David Nathan</a> <small class="c-gray m-l-10">3 mins ago...</small>
                                        <p class="m-t-5 m-b-0">Maecenas dignissim in neque id commodo. Nam pretium a tortor a convallis. Curabitur in arcu quis nulla aliquam condimentum. Morbi eu cursus diam, vitae tristique dui.</p>
                                    </div>
                                </div>

                                <div class="media">
                                    <a href="#" class="pull-left">
                                        <img src="img/profile-pics/4.jpg" alt="" class="avatar-img">
                                    </a>

                                    <div class="media-body">
                                        <a href="#" class="a-title">Sam Anderson</a> <small class="c-gray m-l-10">3 mins ago...</small>
                                        <p class="m-t-5 m-b-0">Curabitur in arcu quis nulla aliquam condimentum.</p>
                                    </div>

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
                            </div>

                            <!-- Comment form -->
                            <div class="wcl-form">
                                <div class="wc-comment">
                                    <div class="wcc-inner wcc-toggle">
                                        Write Something...
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- One post ends in here -->
                </div>

                <div class="col-md-4 hidden-sm">
                    <div class="card">
                        <div class="card-header">
                            <h2>Contact Information <small>Fusce eget dolor id justo luctus commodo vel pharetra nisi. Donec velit libero</small></h2>
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
        <a href="/admin/institute/course/add"> <button class="btn btn-float btn-primary m-btn"><i class="zmdi zmdi-arrow-back"></i></button></a>
    </section>


@endsection