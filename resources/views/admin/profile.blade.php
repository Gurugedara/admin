@extends('admin.layouts.app')
@section('content')
            <section id="content">
                <div class="container">
                    <div class="c-header">
                        <h2>Malinda Hollaway <small>Web/UI Developer, Edinburgh, Scotland</small></h2>
                    </div>

                    <div class="card" id="profile-main">
                        <div class="pm-overview c-overflow">
                            <div class="pmo-pic">
                                <div class="p-relative">
                                    <a href="#">
                                        <img class="img-responsive" src="img/profile-pics/profile-pic-2.jpg" alt="">
                                    </a>

                                    <div class="dropdown pmop-message">
                                        <a data-toggle="dropdown" href="#" class="btn palette-White bg btn-float z-depth-1">
                                            <i class="zmdi zmdi-comment-text-alt"></i>
                                        </a>

                                        <div class="dropdown-menu">
                                            <textarea placeholder="Write something..."></textarea>

                                            <button class="btn bgm-green btn-float"><i class="zmdi zmdi-mail-send"></i></button>
                                        </div>
                                    </div>

                                    <a href="#" class="pmop-edit">
                                        <i class="zmdi zmdi-camera"></i> <span class="hidden-xs">Update Profile Picture</span>
                                    </a>
                                </div>


                                <div class="pmo-stat">
                                    <h2 class="m-0 c-white">1562</h2>
                                    Total Connections
                                </div>
                            </div>

                            <div class="pmo-block pmo-contact hidden-xs">
                                <h2>Contact</h2>

                                <ul>
                                    <li><i class="zmdi zmdi-phone"></i> 00971 12345678 9</li>
                                    <li><i class="zmdi zmdi-email"></i> malinda-h@gmail.com</li>
                                    <li><i class="zmdi zmdi-facebook-box"></i> malinda.hollaway</li>
                                    <li><i class="zmdi zmdi-twitter"></i> @malinda (twitter.com/malinda)</li>
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

                            <div class="pmo-block pmo-items hidden-xs">
                                <h2>Connections</h2>

                                <div class="pmob-body">
                                    <div class="row">
                                        <a href="#" class="col-xs-2">
                                            <img class="img-circle" src="img/profile-pics/1.jpg" alt="">
                                        </a>
                                        <a href="#" class="col-xs-2">
                                            <img class="img-circle" src="img/profile-pics/2.jpg" alt="">
                                        </a>
                                        <a href="#" class="col-xs-2">
                                            <img class="img-circle" src="img/profile-pics/3.jpg" alt="">
                                        </a>
                                        <a href="#" class="col-xs-2">
                                            <img class="img-circle" src="img/profile-pics/4.jpg" alt="">
                                        </a>
                                        <a href="#" class="col-xs-2">
                                            <img class="img-circle" src="img/profile-pics/5.jpg" alt="">
                                        </a>
                                        <a href="#" class="col-xs-2">
                                            <img class="img-circle" src="img/profile-pics/6.jpg" alt="">
                                        </a>
                                        <a href="#" class="col-xs-2">
                                            <img class="img-circle" src="img/profile-pics/7.jpg" alt="">
                                        </a>
                                        <a href="#" class="col-xs-2">
                                            <img class="img-circle" src="img/profile-pics/8.jpg" alt="">
                                        </a>
                                        <a href="#" class="col-xs-2">
                                            <img class="img-circle" src="img/profile-pics/1.jpg" alt="">
                                        </a>
                                        <a href="#" class="col-xs-2">
                                            <img class="img-circle" src="img/profile-pics/2.jpg" alt="">
                                        </a>
                                        <a href="#" class="col-xs-2">
                                            <img class="img-circle" src="img/profile-pics/3.jpg" alt="">
                                        </a>
                                        <a href="#" class="col-xs-2">
                                            <img class="img-circle" src="img/profile-pics/4.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="pm-body clearfix">
                            <ul class="tab-nav tn-justified">
                                <li class="active waves-effect"><a href="profile-about.html">About</a></li>
                                <li class="waves-effect"><a href="profile-photos.html">Photos</a></li>
                                <li class="waves-effect"><a href="profile-connections.html">Connections</a></li>
                            </ul>


                            <div class="pmb-block">
                                <div class="pmbb-header">
                                    <h2><i class="zmdi zmdi-equalizer m-r-5"></i> Summary</h2>

                                    <ul class="actions">
                                        <li class="dropdown">
                                            <a href="#" data-toggle="dropdown">
                                                <i class="zmdi zmdi-more-vert"></i>
                                            </a>

                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li>
                                                    <a data-pmb-action="edit" href="#">Edit</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pmbb-body p-l-30">
                                    <div class="pmbb-view">
                                        Sed eu est vulputate, fringilla ligula ac, maximus arcu. Donec sed felis vel magna mattis ornare ut non turpis. Sed id arcu elit. Sed nec sagittis tortor. Mauris ante urna, ornare sit amet mollis eu, aliquet ac ligula. Nullam dolor metus, suscipit ac imperdiet nec, consectetur sed ex. Sed cursus porttitor leo.
                                    </div>

                                    <div class="pmbb-edit">
                                        <div class="fg-line">
                                            <textarea class="form-control" rows="5" placeholder="Summary...">Sed eu est vulputate, fringilla ligula ac, maximus arcu. Donec sed felis vel magna mattis ornare ut non turpis. Sed id arcu elit. Sed nec sagittis tortor. Mauris ante urna, ornare sit amet mollis eu, aliquet ac ligula. Nullam dolor metus, suscipit ac imperdiet nec, consectetur sed ex. Sed cursus porttitor leo.</textarea>
                                        </div>
                                        <div class="m-t-10">
                                            <button class="btn btn-primary btn-sm">Save</button>
                                            <button data-pmb-action="reset" class="btn btn-link btn-sm">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="pmb-block">
                                <div class="pmbb-header">
                                    <h2><i class="zmdi zmdi-account m-r-5"></i> Basic Information</h2>

                                    <ul class="actions">
                                        <li class="dropdown">
                                            <a href="#" data-toggle="dropdown">
                                                <i class="zmdi zmdi-more-vert"></i>
                                            </a>

                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li>
                                                    <a data-pmb-action="edit" href="#">Edit</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pmbb-body p-l-30">
                                    <div class="pmbb-view">
                                        <dl class="dl-horizontal">
                                            <dt>Full Name</dt>
                                            <dd>Mallinda Hollaway</dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt>Gender</dt>
                                            <dd>Female</dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt>Birthday</dt>
                                            <dd>June 23, 1990</dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt>Martial Status</dt>
                                            <dd>Single</dd>
                                        </dl>
                                    </div>

                                    <div class="pmbb-edit">
                                        <dl class="dl-horizontal">
                                            <dt class="p-t-10">Full Name</dt>
                                            <dd>
                                                <div class="fg-line">
                                                    <input type="text" class="form-control" placeholder="eg. Mallinda Hollaway">
                                                </div>

                                            </dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt class="p-t-10">Gender</dt>
                                            <dd>
                                                <div class="fg-line">
                                                    <select class="form-control">
                                                        <option>Male</option>
                                                        <option>Female</option>
                                                        <option>Other</option>
                                                    </select>
                                                </div>
                                            </dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt class="p-t-10">Birthday</dt>
                                            <dd>
                                                <div class="dtp-container dropdown fg-line">
                                                    <input type='text' class="form-control date-picker" data-toggle="dropdown" placeholder="Click here...">
                                                </div>
                                            </dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt class="p-t-10">Martial Status</dt>
                                            <dd>
                                                <div class="fg-line">
                                                    <select class="form-control">
                                                        <option>Single</option>
                                                        <option>Married</option>
                                                        <option>Other</option>
                                                    </select>
                                                </div>
                                            </dd>
                                        </dl>

                                        <div class="m-t-30">
                                            <button class="btn btn-primary btn-sm">Save</button>
                                            <button data-pmb-action="reset" class="btn btn-link btn-sm">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="pmb-block">
                                <div class="pmbb-header">
                                    <h2><i class="zmdi zmdi-phone m-r-5"></i> Contact Information</h2>

                                    <ul class="actions">
                                        <li class="dropdown">
                                            <a href="#" data-toggle="dropdown">
                                                <i class="zmdi zmdi-more-vert"></i>
                                            </a>

                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li>
                                                    <a data-pmb-action="edit" href="#">Edit</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pmbb-body p-l-30">
                                    <div class="pmbb-view">
                                        <dl class="dl-horizontal">
                                            <dt>Mobile Phone</dt>
                                            <dd>00971 12345678 9</dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt>Email Address</dt>
                                            <dd>malinda.h@gmail.com</dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt>Twitter</dt>
                                            <dd>@malinda</dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt>Skype</dt>
                                            <dd>malinda.hollaway</dd>
                                        </dl>
                                    </div>

                                    <div class="pmbb-edit">
                                        <dl class="dl-horizontal">
                                            <dt class="p-t-10">Mobile Phone</dt>
                                            <dd>
                                                <div class="fg-line">
                                                    <input type="text" class="form-control" placeholder="eg. 00971 12345678 9">
                                                </div>
                                            </dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt class="p-t-10">Email Address</dt>
                                            <dd>
                                                <div class="fg-line">
                                                    <input type="email" class="form-control" placeholder="eg. malinda.h@gmail.com">
                                                </div>
                                            </dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt class="p-t-10">Twitter</dt>
                                            <dd>
                                                <div class="fg-line">
                                                    <input type="text" class="form-control" placeholder="eg. @malinda">
                                                </div>
                                            </dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                            <dt class="p-t-10">Skype</dt>
                                            <dd>
                                                <div class="fg-line">
                                                    <input type="text" class="form-control" placeholder="eg. malinda.hollaway">
                                                </div>
                                            </dd>
                                        </dl>

                                        <div class="m-t-30">
                                            <button class="btn btn-primary btn-sm">Save</button>
                                            <button data-pmb-action="reset" class="btn btn-link btn-sm">Cancel</button>
                                        </div>
                                    </div>
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
    <link href="/admin/vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="/admin/vendors/bower_components/google-material-color/dist/palette.css" rel="stylesheet">
@endpush