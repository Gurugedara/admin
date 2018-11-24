@extends('admin.layouts.app')
@section('content')
    <section id="content">
        <div class="container">
            <div class="c-header">
                <h2>Questions</h2>
            </div>
            <a href="{{route('admin.mcq.create')}}"> <button class="btn btn-float btn-success m-btn"><i class="zmdi zmdi-plus"></i></button></a>
            <div class="card">
                <div class="action-header palette-Teal-400 bg clearfix">
                    <div class="ah-label hidden-xs palette-White text">Manage MCQ</div>

                    <div class="ah-search">
                        <input type="text" placeholder="Start typing..." class="ahs-input">

                        <i class="ah-search-close zmdi zmdi-long-arrow-left" data-ma-action="ah-search-close"></i>
                    </div>

                    <ul class="ah-actions actions a-alt">
                        <li>
                            <a href="#" class="ah-search-trigger" data-ma-action="ah-search-open">
                                <i class="zmdi zmdi-search"></i>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="zmdi zmdi-time"></i>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" aria-expanded="true">
                                <i class="zmdi zmdi-sort"></i>
                            </a>

                            <ul class="dropdown-menu dropdown-menu-right">
                                <li>
                                    <a href="#">Last Modified</a>
                                </li>
                                <li>
                                    <a href="#">Last Edited</a>
                                </li>
                                <li>
                                    <a href="#">Name</a>
                                </li>
                                <li>
                                    <a href="#">Date</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="zmdi zmdi-info"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="list-group lg-alt lg-even-black">
                    <div class="list-group-item media">
                        <div class="checkbox pull-left lgi-checkbox">
                            <label>
                                <input type="checkbox" value="">
                                <i class="input-helper"></i>
                            </label>
                        </div>

                        <div class="pull-left">
                            <div class="avatar-char palette-Light-Blue bg">P</div>
                        </div>

                        <div class="pull-right">
                            <ul class="actions">
                                <li class="dropdown">
                                    <a href="#" data-toggle="dropdown" aria-expanded="false">
                                        <i class="zmdi zmdi-more-vert"></i>
                                    </a>

                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li>
                                            <a href="#">View</a>
                                        </li>
                                        <li>
                                            <a href="#">Edit</a>
                                        </li>
                                        <li>
                                            <a href="#">Delete</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                        <div class="media-body">
                            <div class="lgi-heading">Per an error perpetua, fierent fastidii recteque ad pro. Mei id brute intellegam</div>
                            <small class="lgi-text">Quisque non tortor ultricies, posuere elit id, lacinia purus curabitur.</small>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


@endsection

@push('js')
    <script src="/admin/vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="/admin/vendors/bower_components/Waves/dist/waves.min.js"></script>
    <script src="/admin/vendors/bootstrap-growl/bootstrap-growl.min.js"></script>
    <script src="/admin/vendors/bootgrid/jquery.bootgrid.updated.min.js"></script>
@endpush

@push('css')

    <!-- Vendor CSS -->
    <link href="/admin/vendors/bower_components/animate.css/animate.min.css" rel="stylesheet">
    <link href="/admin/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">
    <link href="/admin/vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet">
    <link href="/admin/vendors/bower_components/google-material-color/dist/palette.css" rel="stylesheet">

@endpush