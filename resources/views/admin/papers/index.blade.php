@extends('admin.layouts.app')
@section('content')
<section id="content">
    <div class="container">
        <div class="c-header">
            <h2>Papers</h2>
        </div>

        <!-- Add button -->
        <a href="{{route('admin.papers.create')}}"> <button class="btn btn-float btn-danger m-btn"><i class="zmdi zmdi-plus"></i></button></a>


        <div class="card">
            <div class="action-header palette-Teal-400 bg clearfix">
                <div class="ah-label hidden-xs palette-White text">Sample Papers for student Evaluation</div>

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

            <div class="card-body card-padding">
                <div class="contacts clearfix row">
                    @foreach($papers as $paper)
                        @foreach (Auth::user()->institutes as $institute)
                            @if ($institute->id==$paper->institute_id) 
                                <div class="col-md-2 col-sm-4 col-xs-6">
                                    <div class="c-item">
                                        <a href="#" class="ci-avatar">
                                            <img src="/admin/img/doc.png" alt="">
                                        </a>
                                        <div class="c-info">
                                            <strong>{{$paper->name}}</strong>
                                            <small>{{$paper->course->name}}</small>
                                        </div>
                                        <div class="c-footer">
                                            <button class="waves-effect"><i class="zmdi zmdi-person-add"></i><a href="{{route('admin.papers.show',$paper->id)}}"> View</a></button>
                                            <button class="waves-effect"><i class="zmdi zmdi-person-add"></i><a href="{{route('admin.papers.edit',$paper->id)}}"> Edit</a></button>
                                            <button class="waves-effect"><i class="zmdi zmdi-person-add"></i><a href="{{route('admin.papers.destroy',$paper->id)}}"> Delete</a></button>
                                        </div>
                                    </div>
                                </div>
                            @endif    
                        @endforeach
                    @endforeach
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