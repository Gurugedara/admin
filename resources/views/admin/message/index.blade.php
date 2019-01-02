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
                        <img src="{{Auth::user()->avatar}}" alt="">
                    <div>Signed in as <br/> {{Auth::user()->email}}</div>
                    </div>

                    <div class="list-group lg-alt m-t-10">
                        <div style="width:80%;margin-left:15%">
                            <input id="search" class="typeahead1 form-control" name="name" type="text" placeholder="Enter the Name of User" autocomplete="off">
                        </div>
                        @foreach($users as $user)
                        <a class="list-group-item media" href="#" onclick="getMessages({{$user}})">
                            {{-- {{dd($users)}} --}}
                            <div class="pull-left">
                                <img src="{{\App\User::find($user)->avatar}}" alt="" class="avatar-img">
                            </div>
                            <div class="media-body">
                                <div class="lgi-heading">{{\App\User::find($user)->firstname." ".\App\User::find($user)->Lastname}}</div>
                            </div>
                        </a>
                        @endforeach
                    </div>

                </div>

                <div class="ms-body">
                    <div class="action-header clearfix palette-Teal-400 bg">
                        <div class="ah-label hidden-xs palette-White text">{{Auth::user()->firstname." ".Auth::user()->Lastname}}</div>

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
                    <form method="POST" action="/admin/message/send">
                        @csrf
                        <div class="list-group lg-alt" id="messageWindow">
                            <div id = "chatWindow"></div>
                            <div class="ms-reply">
                                <textarea name="content" placeholder="What's on your mind..."></textarea>
                                <input type="hidden" name="reciever" value="2" id="reciever">
                                <button type="submit"><i class="zmdi zmdi-mail-send"></i></button>
                            </div>
                        </div>
                    </form>
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

        <script>
            var messageWindow = document.getElementById('chatWindow');
            getMessages({{$users[0]}});
            function getMessages(userId){
                $.ajax({
                    type: 'GET',
                    url: '/admin/message/get/{{\Auth::user()->id}}/'+userId,
                    data: {},
                    success: function(response) {
                        writeThread(response);
                    },
                    error: function() {
                        alert("Fuck");
                    }

                });
            }

            function writeThread(response){
                var text = "";
                var previous = -1;
                for(i=0;i<response.length;i++){
                    var align = "right";
                    if(response[i].sender_id=={{Auth::user()->id}}) align="left";
                    if(previous==-1) {
                        text = text+"<div class='list-group-item media'>\
                                    <div class='pull-"+align+"'>\
                                        <img class='avatar-img' id='"+response[i].id+"' src='#' alt=''>\
                                    </div>\
                                    <div class='media-body'>\
                                        <div>\
                                            <div class='msb-item'>\
                                                "+response[i].content+".\
                                            </div>\
                                        </div>\
                                        ";
                        getAvatar(response[i].id,response[i].sender_id)
                    }else if(previous==response[i].sender_id){
                        text = text+"<div><div class='msb-item'>\
                                                "+response[i].content+".\
                                            </div></div>";
                    }else{
                        text = text+"</div>\
                                        <small class='ms-date'><i class='zmdi zmdi-time'></i> 20/02/2015 at 09:00</small>\
                                    </div>\
                                </div>";
                        text = text + "<div class='list-group-item media'>\
                                    <div class='pull-"+align+"'>\
                                        <img class='avatar-img' id='"+response[i].id+"' src='#' alt=''>\
                                    </div>\
                                    <div class='media-body'>\
                                        <div>\
                                            <div class='msb-item'>\
                                                    "+response[i].content+".\
                                            </div>";
                        getAvatar(response[i].id,response[i].sender_id)
                    }
                    previous=(response[i].sender_id);
                }
                messageWindow.innerHTML = text;
            }

            function getAvatar(imageId,userId){
                var avatar;
                $.ajax({
                    type: 'GET',
                    url: '/admin/message/avatar/'+userId,
                    data: {},
                    success: function(response) {
                        var tempImageHolder = document.getElementById(imageId)
                        tempImageHolder.setAttribute('src',response);
                    },
                    error: function() {
                        alert("Something Went Wrong!");
                    }
                });
                return avatar;
            }
        </script>

@endpush