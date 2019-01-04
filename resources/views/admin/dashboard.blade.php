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
                                    <h2>{{$studentsCount}}</h2>
                                    <small>Number of Students</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="ca-item media">
                                <div class="pull-right hidden-sm">
                                    <div class="sparkline-bar-5 cai-chart"></div>
                                </div>
                                <div class="media-body">
                                    <h2>{{$teachersCount}}</h2>
                                    <small>Number of Teachers</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="ca-item media">
                                <div class="pull-right hidden-sm">
                                    <div class="sparkline-bar-6 cai-chart"></div>
                                </div>
                                <div class="media-body">
                                    <h2>{{$institutesCount}}</h2>
                                    <small>Number of Institutes</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h2>User Interaction in the Site <small>This graph Shows you about the latest user interaction with this site</small></h2>

                           
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
                                    <h2>Time on Page <small>Average of time User spent on a Page this week</small></h2>
                                </div>
                                <div class="card-body card-padding">
                                    <h2 class="m-t-0 m-b-15 c-white">
                                        <i class="zmdi zmdi-caret-up-circle m-r-5"></i>
                                        {{$avgtimeonpage[0][1]}} Seconds
                                    </h2>

                                    <div class="sparkline-1 text-center"></div>
                                </div>
                            </div>

                        <div class="card c-dark palette-Green-A700 bg">
                            <div class="card-header">
                                <h2>Traffic From new Users <small>New Users Activities over the week</small></h2>
                            </div>
                            <div class="card-body card-padding">
                                <h2 class="m-t-0 m-b-15 c-white">
                                    <i class="zmdi zmdi-caret-up-circle m-r-5"></i>
                                    {{$avgNewUsers}}
                                </h2>
                                <div class="sparkline-2 text-center"></div>
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
    <script>
        $(document).ready(function(){
            var d1 = [
                @foreach($analyticsData as $data)
                    [{{$data[0]}},{{$data[1]}}],
                @endforeach
            ];
        });
        var timeonpage = [@foreach($timeonpage as $time){{$time[1]}},@endforeach];
        var newUsers = [@foreach($newUsers as $user){{$user[1]}},@endforeach];
    </script>

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