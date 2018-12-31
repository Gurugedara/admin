@extends('admin.layouts.app')
@section('content')
    <section id="content">
        <div class="container">
            <div class="c-header">
                <h2>Messages</h2>
            </div>

            <div class="card clearfix" id="messages">
                <div class="ms-menu">
                    <div class="ms-user clearfix palette-Teal-400 bg">
                        <img src="/admin/img/profile-pics/1.jpg" alt="">
                        <div>Signed in as <br/> m-hollaway@gmail.com</div>
                    </div>

                    <div class="list-group lg-alt m-t-10">
                        <div style="width:80%;margin-left:15%">
                            <input id="search" class="typeahead1 form-control" name="name" type="text" placeholder="Enter the Name of User" autocomplete="off">
                        </div>
                        <a class="list-group-item media" href="#">
                            <div class="pull-left">
                                <img src="/admin/img/profile-pics/4.jpg" alt="" class="avatar-img">
                            </div>
                            <div class="media-body">
                                <div class="lgi-heading">Davil Parnell</div>
                                <small class="lgi-text">Fierent fastidii recteque ad pro</small>
                            </div>
                        </a>

                        <a class="list-group-item media" href="#">
                            <div class="pull-left">
                                <img src="/admin/img/profile-pics/2.jpg" alt="" class="avatar-img">
                            </div>
                            <div class="media-body">
                                <div class="lgi-heading">Ann Watkinson</div>
                                <small class="lgi-text">Cum sociis natoque penatibus </small>
                            </div>
                        </a>

                    </div>

                </div>

                <div class="ms-body">
                    <div class="action-header clearfix palette-Teal-400 bg">
                        <div class="ah-label hidden-xs palette-White text">Marsh Walter</div>

                        <div class="menu-collapse visible-xs" data-ma-action="message-toggle">
                            <div class="mc-wrap">
                                <div class="mcw-line top palette-White bg"></div>
                                <div class="mcw-line center palette-White bg"></div>
                                <div class="mcw-line bottom palette-White bg"></div>
                            </div>
                        </div>

                        <ul class="actions a-alt">
                            <li>
                                <a href="#">
                                    <i class="zmdi zmdi-delete"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="zmdi zmdi-check"></i>
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
                                        <a href="#">Latest</a>
                                    </li>
                                    <li>
                                        <a href="#">Oldest</a>
                                    </li>
                                </ul>
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
                                        <a href="#">Message Settings</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <div class="list-group lg-alt" id="messageWindow">
                        <div class="list-group-item media">
                            <div class="pull-left">
                                <img class="avatar-img" src="/admin/img/profile-pics/1.jpg" alt="">
                            </div>

                            <div class="media-body">
                                <div>
                                    <div class="msb-item">
                                        Quisque consequat arcu eget odio cursus, ut tempor arcu vestibulum. Etiam ex arcu, porta a urna non, lacinia pellentesque orci. Proin semper sagittis erat, eget condimentum sapien viverra et. Mauris volutpat magna nibh, et condimentum est rutrum a. Nunc sed turpis mi. In eu massa a sem pulvinar lobortis.
                                    </div>
                                </div>
                                <small class="ms-date"><i class="zmdi zmdi-time"></i> 20/02/2015 at 09:00</small>
                            </div>
                        </div>

                        <div class="list-group-item media">
                            <div class="pull-right">
                                <img class="avatar-img" src="/admin/img/profile-pics/8.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <div>
                                    <div class="msb-item">
                                        Mauris volutpat magna nibh, et condimentum est rutrum a. Nunc sed turpis mi. In eu massa a sem pulvinar lobortis.
                                    </div>
                                </div>
                                <div>
                                    <div class="msb-item">
                                        Condimentum est rutrum lobortis.
                                    </div>
                                </div>
                                <div>
                                    <div class="msb-item">
                                        :)
                                    </div>
                                </div>
                                <small class="ms-date"><i class="zmdi zmdi-time"></i> 20/02/2015 at 09:30</small>
                            </div>
                        </div>

                        <div class="list-group-item media">
                            <div class="pull-left">
                                <img class="avatar-img" src="/admin/img/profile-pics/1.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <div>
                                    <div class="msb-item">
                                        Etiam ex arcumentum
                                    </div>
                                </div>
                                <small class="ms-date"><i class="zmdi zmdi-time"></i> 20/02/2015 at 09:33</small>
                            </div>
                        </div>

                        <div class="list-group-item media">
                            <div class="pull-right">
                                <img class="avatar-img" src="/admin/img/profile-pics/8.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <div>
                                    <div class="msb-item">
                                        Etiam nec facilisis lacus. Nulla imperdiet augue ullamcorper dui ullamcorper, eu laoreet sem consectetur. Aenean et ligula risus. Praesent sed posuere sem. Cum sociis natoque penatibus et magnis dis parturient montes,
                                    </div>
                                </div>
                                <small class="ms-date"><i class="zmdi zmdi-time"></i> 20/02/2015 at 10:10</small>
                            </div>
                        </div>

                        <div class="list-group-item media">
                            <div class="pull-left">
                                <img class="avatar-img" src="/admin/img/profile-pics/1.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <div>
                                    <div class="msb-item">
                                        Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam ac tortor ut elit sodales varius. Mauris id ipsum id mauris malesuada tincidunt. Vestibulum elit massa, pulvinar at sapien sed, luctus vestibulum eros. Etiam finibus tristique ante, vitae rhoncus sapien volutpat eget
                                    </div>
                                </div>
                                <small class="ms-date"><i class="zmdi zmdi-time"></i> 20/02/2015 at 10:24</small>
                            </div>
                        </div>

                        <div class="ms-reply">
                            <textarea placeholder="What's on your mind..."></textarea>

                            <button><i class="zmdi zmdi-mail-send"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('css')

    <link href="/admin/vendors/bower_components/animate.css/animate.min.css" rel="stylesheet">
    <link href="/admin/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">
    <link href="/admin/vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet">
    <link href="/admin/vendors/bower_components/google-material-color/dist/palette.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">


@endpush

@push('js')
    <script src="/admin/vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="/admin/vendors/bower_components/Waves/dist/waves.min.js"></script>
    <script src="/admin/vendors/bootstrap-growl/bootstrap-growl.min.js"></script>
    <script src="/admin/js/chat.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://twitter.github.io/typeahead.js/releases/latest/typeahead.bundle.js"></script>



    <script>
            $(document).ready(function() {
                var bloodhound = new Bloodhound({
                    datumTokenizer: Bloodhound.tokenizers.whitespace,
                    queryTokenizer: Bloodhound.tokenizers.whitespace,
                    remote: {
                        url: '/admin/message/getUsers?query=%QUERY%',
                        wildcard: '%QUERY%'
                    },
                });
                
                $('#search').typeahead({
                    hint: true,
                    highlight: true,
                    minLength: 1
                }, {
                    name: 'users',
                    source: bloodhound,
                    display: function(data) {
                        return data.firstname  //Input value to be set when you select a suggestion. 
                    },
                    templates: {
                        empty: [
                            '<div class="list-group search-results-dropdown"><div class="list-group-item">Nothing found.</div></div>'
                        ],
                        header: [
                            '<div class="list-group search-results-dropdown">'
                        ],
                        suggestion: function(data) {
                        return '<div style="font-weight:normal; margin-top:-10px ! important;" class="list-group-item">' + data.firstname +' '+data.Lastname + '</div></div>'
                        }
                    }
                });
            });
        </script>
@endpush