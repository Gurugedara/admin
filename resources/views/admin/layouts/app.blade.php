<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Guru Gedara Admin Panel</title>

    <!-- Vendor CSS -->
    @stack('css')
    <!-- CSS -->
    <link href="/admin/css/app.min.1.css" rel="stylesheet">
    <link href="/admin/css/app.min.2.css" rel="stylesheet">

</head>
<body data-ma-header="teal">
    {{--upper navigation bar--}}
    @include('admin.layouts.upperBar')

<section id="main">
    {{--Side popup Bar for notification, mails and etc..--}}
    @include('admin.layouts.sidePopup')
    {{--Navigation panel in the left side(main navigation)--}}
    @include('admin.layouts.sideNavbar')

    <section id="content">
        @yield('content')
    </section>

    {{--Footer of the site--}}
    <footer id="footer">
        @include('admin.layouts.footer')
    </footer>

</section>

<!-- Page Loader -->
<div class="page-loader palette-Teal bg">
    <div class="preloader pl-xl pls-white">
        <svg class="pl-circular" viewBox="25 25 50 50">
            <circle class="plc-path" cx="50" cy="50" r="20"/>
        </svg>
    </div>
</div>

<!-- Older IE warning message -->
<!--[if lt IE 9]>
<div class="ie-warning">
    <h1 class="c-white">Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="/admin/img/browsers/chrome.png" alt="">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="/admin/img/browsers/firefox.png" alt="">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="/admin/img/browsers/opera.png" alt="">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="/admin/img/browsers/safari.png" alt="">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="/admin/img/browsers/ie.png" alt="">
                    <div>IE (New)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->

<!-- Javascript Libraries -->
<script src="/admin/vendors/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/admin/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="/admin/vendors/bootgrid/jquery.bootgrid.updated.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://twitter.github.io/typeahead.js/releases/latest/typeahead.bundle.js"></script>
<script>
    $(document).ready(function() {
                var bloodhound = new Bloodhound({
                    datumTokenizer: Bloodhound.tokenizers.whitespace,
                    queryTokenizer: Bloodhound.tokenizers.whitespace,
                    remote: {
                        url: '/admin/message/getUsers/%QUERY%',
                        wildcard: '%QUERY%'
                    },
                });
                
                $('#mainSearch').typeahead({
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
            // document.getElementsByClassName("tt-menu")[0].setAttribute("style","position:unset");
            $(".tt-menu").css("position","unset");
</script>
@stack('js')

<script src="/admin/js/functions.js"></script>
<script src="/admin/js/actions.js"></script>
<script src="/admin/js/demo.js"></script>

</body>
</html>