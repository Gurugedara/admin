@extends('admin.layouts.app')
@section('content')
<section id="content">
                <div class="container">
                    <div class="c-analytics row hidden-xs">
                        <div class="col-sm-4">
                            <div class="ca-item media">
                                <div class="pull-right hidden-sm">
                                    <div class="sparkline-bar-4 cai-chart"></div>
                                </div>
                                <div class="media-body">
                                    <h2>987,459</h2>
                                    <small> Website Traffics</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="ca-item media">
                                <div class="pull-right hidden-sm">
                                    <div class="sparkline-bar-5 cai-chart"></div>
                                </div>
                                <div class="media-body">
                                    <h2>356,785K</h2>
                                    <small>Website Impressions</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="ca-item media">
                                <div class="pull-right hidden-sm">
                                    <div class="sparkline-bar-6 cai-chart"></div>
                                </div>
                                <div class="media-body">
                                    <h2>$ 458,778</h2>
                                    <small>Total Sales</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h2>Sales Statistics <small>Vestibulum purus quam scelerisque, mollis nonummy metus</small></h2>

                            <ul class="actions">
                                <li>
                                    <a href="#">
                                        <i class="zmdi zmdi-check-all"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="zmdi zmdi-trending-up"></i>
                                    </a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" data-toggle="dropdown">
                                        <i class="zmdi zmdi-more-vert"></i>
                                    </a>

                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li>
                                            <a href="#">Change Date Range</a>
                                        </li>
                                        <li>
                                            <a href="#">Change Graph Type</a>
                                        </li>
                                        <li>
                                            <a href="#">Other Settings</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                        <div class="card-body">
                            <div class="chart-edge">
                                <div id="curved-line-chart" class="flot-chart "></div>
                            </div>
                        </div>
                    </div>

                    <div id="c-grid" class="clearfix" data-columns>
                        <div class="card c-dark palette-Light-Blue bg">
                                <div class="card-header">
                                    <h2>Website Impressions <small>Consectetur Ultricies Porta Fringilla</small></h2>

                                     <ul class="actions a-alt">
                                        <li class="dropdown">
                                            <a href="#" data-toggle="dropdown">
                                                <i class="zmdi zmdi-more-vert"></i>
                                            </a>

                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li>
                                                    <a href="#">Change Date Range</a>
                                                </li>
                                                <li>
                                                    <a href="#">Change Graph Type</a>
                                                </li>
                                                <li>
                                                    <a href="#">Other Settings</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body card-padding">
                                    <h2 class="m-t-0 m-b-15 c-white">
                                        <i class="zmdi zmdi-caret-up-circle m-r-5"></i>
                                        987,453
                                    </h2>

                                    <div class="sparkline-1 text-center"></div>
                                </div>
                            </div>

                        <div class="card c-dark palette-Green-A700 bg">
                            <div class="card-header">
                                <h2>Website Traffics <small>Nullam Adipiscing Pellentesque</small></h2>

                                <ul class="actions a-alt">
                                    <li class="dropdown">
                                        <a href="#" data-toggle="dropdown">
                                            <i class="zmdi zmdi-more-vert"></i>
                                        </a>

                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li>
                                                <a href="#">Change Date Range</a>
                                            </li>
                                            <li>
                                                <a href="#">Change Graph Type</a>
                                            </li>
                                            <li>
                                                <a href="#">Other Settings</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body card-padding">
                                <h2 class="m-t-0 m-b-15 c-white">
                                    <i class="zmdi zmdi-caret-up-circle m-r-5"></i>
                                    356,785K
                                </h2>
                                <div class="sparkline-2 text-center"></div>
                            </div>
                        </div>

                        <div class="card c-dark palette-Blue-Grey bg">
                            <div class="card-header">
                                <h2>Total Sales <small>Purus Malesuada Consectetur</small></h2>

                                <ul class="actions a-alt">
                                    <li class="dropdown">
                                        <a href="#" data-toggle="dropdown">
                                            <i class="zmdi zmdi-more-vert"></i>
                                        </a>

                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li>
                                                <a href="#">Change Date Range</a>
                                            </li>
                                            <li>
                                                <a href="#">Change Graph Type</a>
                                            </li>
                                            <li>
                                                <a href="#">Other Settings</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body card-padding">
                                <h2 class="m-t-0 m-b-15 c-white">
                                    <i class="zmdi zmdi-caret-down-circle m-r-5"></i>
                                    $458,778
                                </h2>
                                <div class="sparkline-3 text-center"></div>
                            </div>
                        </div>

                        <div class="card c-dark palette-Deep-Purple-A700 bg">
                            <div class="card-header">
                                <h2>Total Sales <small>Purus Malesuada Consectetur</small></h2>

                                <ul class="actions a-alt">
                                    <li class="dropdown">
                                        <a href="#" data-toggle="dropdown">
                                            <i class="zmdi zmdi-more-vert"></i>
                                        </a>

                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li>
                                                <a href="#">Change Date Range</a>
                                            </li>
                                            <li>
                                                <a href="#">Change Graph Type</a>
                                            </li>
                                            <li>
                                                <a href="#">Other Settings</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body card-padding">
                                <h2 class="m-t-0 m-b-15 c-white">
                                    <i class="zmdi zmdi-caret-down-circle m-r-5"></i>
                                    $458,778
                                </h2>
                                <div class="sparkline-3 text-center"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
    @endsection
@push('css')
    <link href="/admin/vendors/bower_components/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
    <link href="/admin/vendors/bower_components/animate.css/animate.min.css" rel="stylesheet">
    <link href="/admin/vendors/bower_components/bootstrap-sweetalert/lib/sweet-alert.css" rel="stylesheet">
    <link href="/admin/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">
    <link href="/admin/vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet">
    <link href="/admin/vendors/bower_components/google-material-color/dist/palette.css" rel="stylesheet">
@endpush

@push('js')
    <script src="/admin/vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="/admin/vendors/bower_components/Waves/dist/waves.min.js"></script>
    <script src="/admin/vendors/bootstrap-growl/bootstrap-growl.min.js"></script>
    <script src="/admin/vendors/bower_components/moment/min/moment.min.js"></script>
    <script src="/admin/vendors/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
    <script src="/admin/vendors/bower_components/simpleWeather/jquery.simpleWeather.min.js"></script>
    <script src="/admin/vendors/bower_components/salvattore/dist/salvattore.min.js"></script>

    <script src="/admin/vendors/bower_components/flot/jquery.flot.js"></script>
    <script src="/admin/vendors/bower_components/flot/jquery.flot.resize.js"></script>
    <script src="/admin/vendors/bower_components/flot.curvedlines/curvedLines.js"></script>
    <script src="/admin/vendors/sparklines/jquery.sparkline.min.js"></script>
    <script src="/admin/vendors/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
    <script src="/admin/js/flot-charts/curved-line-chart.js"></script>
    <script src="/admin/js/flot-charts/line-chart.js"></script>

    <!-- Placeholder for IE9 -->
    <!--[if IE 9 ]>
    <script src="/admin/vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
    <![endif]-->

    <script src="/admin/js/charts.js"></script>
@endpush