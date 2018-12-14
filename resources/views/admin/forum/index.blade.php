@extends('admin.layouts.app')
@section('content')
    <section id="content">
        <div class="container">
            <div class="c-header">
                <h2>Wall <small>Yeah, I got wall views as well!. These image grids are generated only using CSS.</small></h2>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <div class="card wall-posting">
                        <div class="card-body card-padding">
                            <textarea class="wp-text" data-auto-size placeholder="Write Something..."></textarea>

                            <div class="tab-content p-0">
                                <div class="wp-media tab-pane" id="wpm-image">
                                    Images - Coming soon...
                                </div>

                                <div class="wp-media tab-pane" id="wpm-video">
                                    Video Links - Coming soon...
                                </div>

                                <div class="wp-media tab-pane" id="wpm-link">
                                    Links - Coming soon...
                                </div>
                            </div>
                        </div>

                        <ul class="list-unstyled clearfix wpb-actions">
                            <li class="wpba-attrs">
                                <ul class="list-unstyled list-inline">
                                    <li><a data-wpba="image" data-toggle="tab" href="#" data-target="#wpm-image"><i class="zmdi zmdi-image"></i></a></li>
                                    <li><a data-wpba="video" data-toggle="tab" href="#" data-target="#wpm-video"><i class="zmdi zmdi-play-circle"></i></a></li>
                                    <li><a data-wpba="link" data-toggle="tab" href="#" data-target="#wpm-link"><i class="zmdi zmdi-link"></i></a></li>
                                </ul>
                            </li>

                            <button class="btn btn-primary btn-sm btn-icon"><i class="zmdi zmdi-check"></i></button>
                        </ul>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <div class="media">
                                <div class="pull-left">
                                    <img class="avatar-img a-lg" src="img/profile-pics/1.jpg" alt="">
                                </div>

                                <div class="media-body m-t-5">
                                    <h2>Mallinda Hollaway <small>Posted on 31st Aug 2015 at 07:00</small></h2>
                                </div>
                            </div>
                        </div>

                        <div class="card-body card-padding">
                            <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce eget dolor id justo luctus commodo vel pharetra nisi. Donec velit libero, gravida vel diam ut, lobortis mollis quam. Morbi posuere egestas posuere. Curabitur in dui sollicitudin, lacinia magna at, laoreet sapien. Integer vitae eros nulla.</p>

                            <div class="wall-img-preview lightbox clearfix">
                                <div class="wip-item" data-src="/admin/img/headers/4.png" style="background-image: url(/admin/img/headers/4.png);">
                                    <div class="lightbox-item"></div>
                                </div>
                            </div>

                            <ul class="wall-attrs clearfix list-inline list-unstyled">
                                <li class="wa-stats">
                                    <span><i class="zmdi zmdi-comments"></i> 36</span>
                                    <span class="active"><i class="zmdi zmdi-favorite"></i> 220</span>
                                </li>

                                <li class="wa-users">
                                    <a href="#"><img src="img/profile-pics/1.jpg" alt=""></a>
                                    <a href="#"><img src="img/profile-pics/2.jpg" alt=""></a>
                                    <a href="#"><img src="img/profile-pics/3.jpg" alt=""></a>
                                    <a href="#"><img src="img/profile-pics/5.jpg" alt=""></a>
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

                    <div class="card">
                        <div class="card-header">
                            <div class="media">
                                <div class="pull-left">
                                    <img class="avatar-img a-lg" src="img/profile-pics/5.jpg" alt="">
                                </div>

                                <div class="media-body m-t-5">
                                    <h2>Morgan Francis <small>Posted on 2nd Sep 2015 at 17:00</small></h2>
                                </div>
                            </div>
                        </div>

                        <div class="card-body card-padding">
                            <p>Donec velit libero, gravida vel diam ut, lobortis mollis quam. Morbi posuere egestas posuere. Curabitur in dui sollicitudin, lacinia magna at, laoreet sapien. Integer vitae eros nulla.</p>

                            <div class="wall-img-preview lightbox clearfix">
                                <div class="wip-item" data-src="media/gallery/4.jpg" style="background-image: url(media/gallery/4.jpg);">
                                    <img src="media/gallery/thumbs/4.jpg" alt="">
                                </div>
                                <div class="wip-item" data-src="media/gallery/5.jpg" style="background-image: url(media/gallery/5.jpg);">
                                    <img src="media/gallery/thumbs/5.jpg" alt="">
                                </div>
                                <div class="wip-item" data-src="media/gallery/6.jpg" style="background-image: url(media/gallery/6.jpg);">
                                    <img src="media/gallery/thumbs/6.jpg" alt="">
                                </div>
                            </div>

                            <ul class="wall-attrs clearfix list-inline list-unstyled">
                                <li class="wa-stats">
                                    <span><i class="zmdi zmdi-comments"></i> 20</span>
                                    <span class="active"><i class="zmdi zmdi-favorite"></i> 78</span>
                                </li>

                                <li class="wa-users">
                                    <a href="#"><img src="img/profile-pics/2.jpg" alt=""></a>
                                    <a href="#"><img src="img/profile-pics/3.jpg" alt=""></a>
                                </li>
                            </ul>
                        </div>

                        <div class="wall-comment-list">

                            <!-- Comment Listing -->
                            <div class="wcl-list">
                                <div class="media">
                                    <a href="#" class="pull-left">
                                        <img src="img/profile-pics/3.jpg" alt="" class="avatar-img">
                                    </a>

                                    <div class="media-body">
                                        <a href="#" class="a-title">Samantha Diaz</a> <small class="c-gray m-l-10">1 hour ago...</small>
                                        <p class="m-t-5 m-b-0">Pellentesque mollis fringilla finibus. Class aptent taciti sociosqu ad litora torquent per conubia nostra.</p>
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

                </div>

                <div class="col-md-4 hidden-sm">
                    <div class="card">
                        <div class="card-header">
                            <h2>About me</h2>
                        </div>

                        <div class="card-body card-padding">
                            Maecenas malesuada. Nam adipiscing. Etiam vitae tortor. Maecenas ullamcorper, dui et placerat feugiat, eros pede varius nisi, condimentum viverra felis nunc et lorem. <a data-ui-sref="pages.profile.profile-about"><small>Read more...</small></a>
                        </div>
                    </div>

                    <div class="card picture-list">
                        <div class="card-header">
                            <h2>Photos <small>Cras congue nec lorem eget posuere</small></h2>

                            <ul class="actions">
                                <li class="dropdown action-show" dropdown>
                                    <a href="#" dropdown-toggle>
                                        <i class="zmdi zmdi-more-vert"></i>
                                    </a>

                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li>
                                            <a href="#">Refresh</a>
                                        </li>
                                        <li>
                                            <a href="#">Manage Widgets</a>
                                        </li>
                                        <li>
                                            <a href="#">Widgets Settings</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                        <div class="pl-body clearfix">
                            <div class="col-xs-3">
                                <a href="#">
                                    <img src="img/headers/square/1.png" alt="">
                                </a>
                            </div>

                            <div class="col-xs-3">
                                <a href="#">
                                    <img src="img/headers/square/2.png" alt="">
                                </a>
                            </div>
                            <div class="col-xs-3">
                                <a href="#">
                                    <img src="img/headers/square/3.png" alt="">
                                </a>
                            </div>
                            <div class="col-xs-3">
                                <a href="#">
                                    <img src="img/headers/square/4.png" alt="">
                                </a>
                            </div>
                            <div class="col-xs-3">
                                <a href="#">
                                    <img src="img/headers/square/5.png" alt="">
                                </a>
                            </div>
                            <div class="col-xs-3">
                                <a href="#">
                                    <img src="img/headers/square/6.png" alt="">
                                </a>
                            </div>
                            <div class="col-xs-3">
                                <a href="#">
                                    <img src="img/headers/square/7.png" alt="">
                                </a>
                            </div>
                            <div class="col-xs-3">
                                <a href="#">
                                    <img src="img/headers/square/8.png" alt="">
                                </a>
                            </div>
                            <div class="col-xs-3">
                                <a href="#">
                                    <img src="img/headers/square/9.png" alt="">
                                </a>
                            </div>
                            <div class="col-xs-3">
                                <a href="#">
                                    <img src="img/headers/square/1.png" alt="">
                                </a>
                            </div>
                            <div class="col-xs-3">
                                <a href="#">
                                    <img src="img/headers/square/2.png" alt="">
                                </a>
                            </div>
                            <div class="col-xs-3">
                                <a href="#">
                                    <img src="img/headers/square/3.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h2>Recent Comments <small>Commodo vel pharetra nisi. Donec velit libero</small></h2>
                        </div>

                        <div class="list-group lg-alt">
                            <a href="#" class="list-group-item media">
                                <div class="pull-left">
                                    <img class="avatar-img mCS_img_loaded" src="img/profile-pics/1.jpg" alt="">
                                </div>

                                <div class="media-body">
                                    <div class="lgi-heading">David Villa Jacobs</div>
                                    <small class="lgi-text">Sorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam mattis lobortis sapien non posuere</small>
                                </div>
                            </a>

                            <a href="#" class="list-group-item media">
                                <div class="pull-left">
                                    <img class="avatar-img mCS_img_loaded" src="img/profile-pics/5.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="lgi-heading">Candice Barnes</div>
                                    <small class="lgi-text">Quisque non tortor ultricies, posuere elit id, lacinia purus curabitur.</small>
                                </div>
                            </a>

                            <a href="#" class="list-group-item media">
                                <div class="pull-left">
                                    <img class="avatar-img mCS_img_loaded" src="img/profile-pics/3.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="lgi-heading">Jeannette Lawson</div>
                                    <small class="lgi-text">Donec congue tempus ligula, varius hendrerit mi hendrerit sit amet. Duis ac quam sit amet leo feugiat iaculis</small>
                                </div>
                            </a>

                            <a href="#" class="list-group-item media">
                                <div class="pull-left">
                                    <img class="avatar-img mCS_img_loaded" src="img/profile-pics/4.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="lgi-heading">Darla Mckinney</div>
                                    <small class="lgi-text">Duis tincidunt augue nec sem dignissim scelerisque. Vestibulum rhoncus sapien sed nulla aliquam lacinia</small>
                                </div>
                            </a>

                            <a href="#" class="list-group-item media">
                                <div class="pull-left">
                                    <img class="avatar-img mCS_img_loaded" src="img/profile-pics/2.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="lgi-heading">Rudolph Perez</div>
                                    <small class="lgi-text">Phasellus a ullamcorper lectus, sit amet viverra quam. In luctus tortor vel nulla pharetra bibendum</small>
                                </div>
                            </a>
                        </div>

                        <a href="#" class="list-group-item view-more">
                            <i class="zmdi zmdi-long-arrow-right"></i> View all
                        </a>
                    </div>


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
    </section>
@endsection

@push('css')

    <!-- Vendor CSS -->
    <link href="/admin/vendors/bower_components/animate.css/animate.min.css" rel="stylesheet">
    <link href="/admin/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">
    <link href="/admin/vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet">
    <link href="/admin/vendors/bower_components/google-material-color/dist/palette.css" rel="stylesheet">
    <link href="/admin/vendors/bower_components/lightgallery/dist/css/lightgallery.min.css" rel="stylesheet">

@endpush

@push('js')
    <script src="/admin/vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="/admin/vendors/bower_components/Waves/dist/waves.min.js"></script>
    <script src="/admin/vendors/bootstrap-growl/bootstrap-growl.min.js"></script>
    <script src="/admin/vendors/bootgrid/jquery.bootgrid.updated.min.js"></script>
    <script src="/admin/vendors/bower_components/lightgallery/dist/js/lightgallery-all.min.js"></script>
@endpush
