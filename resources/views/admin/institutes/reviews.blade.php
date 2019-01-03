@extends('admin.layouts.app')
@section('content')
    <section id="content">
        <div class="container">
            <div class="c-header">
                <h2>Institute Reviews</h2>
            </div>

            <div class="card">
                <div class="action-header palette-Teal-400 bg clearfix">
                    <div class="ah-label hidden-xs palette-White text">Student Reviews</div>

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
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" aria-expanded="true">
                                <i class="zmdi zmdi-more-vert"></i>
                            </a>

                            <ul class="dropdown-menu dropdown-menu-right">
                                <li>
                                    <a href="#">Refresh</a>
                                </li>
                                <li>
                                    <a href="#">Listview Settings</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="list-group lg-alt lg-even-black">
                    @foreach($reviews as $review)
                        @foreach (Auth::user()->institutes as $institute)
                            @if ($institute->id==$review->institute_id)
                                <div class="list-group-item media">
                                    <div class="checkbox pull-left lgi-checkbox">
                                        <label>
                                            <input type="checkbox" value="">
                                            <i class="input-helper"></i>
                                        </label>
                                    </div>

                                    <div class="pull-right">
                                        <ul class="actions">
                                            <li class="dropdown">
                                                <a href="#" data-toggle="dropdown" aria-expanded="false">
                                                    <i class="zmdi zmdi-more-vert"></i>
                                                </a>

                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li>
                                                        @if($review->status==0)
                                                            <a href="/admin/institute/reviews/publish/{{$review->id}}">Publish</a>
                                                        @else
                                                            <a href="/admin/institute/reviews/hide/{{$review->id}}">hide</a>
                                                        @endif
                                                    </li>
                                                    <li>
                                                        <a href="/admin/institute/reviews/comment/{{$review->id}}">Comment</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="pull-left">
                                        <div class="avatar-char palette-Green-400 bg">P</div>
                                    </div>

                                    <div class="media-body">
                                        <div class="lgi-heading">{{$review->comment}}</div>
                                        <ul class="lgi-attrs">
                                            <li>Date Created: 09/06/1988</li>
                                            <li>stars: {{$review->stars}}</li>
                                            <li style="color: #f8f8f8;{{($review->status==0)?"background: orange":"background: blue"}}">status: {{($review->status==1)?"published":"Not Published"}}</li>
                                            <li>Student ID: {{$review->student_id}}</li>
                                            <li>Institute Name: {{$review->institute->name}}</li>
                                        </ul>
                                    </div>
                                </div>
                            @endif    
                        @endforeach
                    @endforeach
                </div>

                {{--<ul class="pagination lg-pagination">--}}
                    {{--<li>--}}
                        {{--<a href="#" aria-label="Previous">--}}
                            {{--<i class="zmdi zmdi-chevron-left"></i>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li class="active"><a href="#">1</a></li>--}}
                    {{--<li><a href="#">2</a></li>--}}
                    {{--<li><a href="#">3</a></li>--}}
                    {{--<li><a href="#">4</a></li>--}}
                    {{--<li><a href="#">5</a></li>--}}
                    {{--<li>--}}
                        {{--<a href="#" aria-label="Next">--}}
                            {{--<i class="zmdi zmdi-chevron-right"></i>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
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