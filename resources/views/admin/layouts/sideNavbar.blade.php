<aside id="s-main-menu" class="sidebar">
    <div class="smm-header">
        <i class="zmdi zmdi-long-arrow-left" data-ma-action="sidebar-close"></i>
    </div>

    <ul class="smm-alerts">
        <li data-user-alert="sua-messages" data-ma-action="sidebar-open" data-ma-target="user-alerts">
            <i class="zmdi zmdi-email"></i>
        </li>
        <li data-user-alert="sua-notifications" data-ma-action="sidebar-open" data-ma-target="user-alerts">
            <i class="zmdi zmdi-notifications"></i>
        </li>
        <li data-user-alert="sua-tasks" data-ma-action="sidebar-open" data-ma-target="user-alerts">
            <i class="zmdi zmdi-view-list-alt"></i>
        </li>
    </ul>

    <ul class="main-menu">
        <li {{(Request::is('admin/dashboard') ? 'class=active' : '')}}>
            <a href="/admin/dashboard"><i class="zmdi zmdi-home"></i> Home</a>
        </li>
        <li class= "{{((Request::is('admin/verify/student')||Request::is('admin/search/student/*')||Request::is('admin/search/student')) ? 'sub-menu toggled active' : 'sub-menu')}}">
            <a href="students" data-ma-action="submenu-toggle"><i class="zmdi zmdi-view-compact"></i> Students</a>

            <ul>
                <li {{(Request::is('admin/verify/student') ? 'class=active' : '')}}><a href="{{url('admin/verify/student')}}">Verify</a></li>
                <li {{((Request::is('admin/search/student')||Request::is('admin/search/student/*')) ? 'class=active' : '')}}><a href="{{url('admin/search/student')}}">Search</a></li>
            </ul>
        </li>
        <li class="{{((Request::is('admin/verify/teacher')||Request::is('admin/search/teacher/*')||Request::is('admin/search/teacher')) ? 'sub-menu toggled active' : 'sub-menu')}}">
            <a href="#" data-ma-action="submenu-toggle"><i class="zmdi zmdi-view-compact"></i> Teachers</a>

            <ul>
                <li {{(Request::is('admin/verify/teacher') ? 'class=active' : '')}}><a href="{{url('admin/verify/teacher')}}">Verify</a></li>
                <li {{((Request::is('admin/search/teacher')||Request::is('admin/search/teacher/*')) ? 'class=active' : '')}}><a href="{{url('admin/search/teacher')}}">Search</a></li>
            </ul>
        </li>
        <li class="{{((Request::is('admin/institute/*')||Request::is('admin/institute')) ? 'sub-menu toggled active' : 'sub-menu')}}">
            <a href="#" data-ma-action="submenu-toggle"><i class="zmdi zmdi-view-compact"></i> Institute</a>

            <ul>
                <li {{((Request::is('admin/institute/course')||(Request::is('admin/institute/course/*'))) ? 'class=active' : '')}}><a href="{{url('/admin/institute/course')}}">Courses</a></li>
                <li {{((Request::is('admin/institute/papers')||(Request::is('admin/institute/papers/*'))) ? 'class=active' : '')}}><a href="{{route('admin.papers.index')}}">papers</a></li>
                <li {{((Request::is('admin/institute/reviews'))||(Request::is('admin/institute/reviews/*')) ? 'class=active' : '')}}><a href="{{url('/admin/institute/reviews')}}">Reviews</a></li>
                <li {{((Request::is('admin/institute/syllabus'))||(Request::is('admin/institute/syllabus/*')) ? 'class=active' : '')}}><a href="{{url('/admin/institute/syllabus')}}">syllabus</a></li>
                <li {{((Request::is('admin/institute/stories'))||(Request::is('admin/institute/stories/*')) ? 'class=active' : '')}}><a href="{{url('/admin/institute/stories')}}">Success Stories</a></li>
                <li {{((Request::is('admin/institute/carrierpath'))||(Request::is('admin/institute/carrierpath/*')) ? 'class=active' : '')}}><a href="{{url('/admin/institute/carrierpath')}}">Carrier Path</a></li>
            </ul>
        </li>
        <li {{(Request::is('admin/message/view') ? 'class=active' : '')}}><a href="{{url('/admin/message/view')}}"><i class="zmdi zmdi-format-underlined"></i> Message Inbox</a></li>
        <li {{(Request::is('admin/forum') ? 'class=active' : '')}}><a href="{{url('/admin/forum')}}forum"><i class="zmdi zmdi-format-underlined"></i> Forum</a></li>
        <li {{(Request::is('admin/schedule') ? 'class=active' : '')}}><a href="{{url('institiue/syllabus')}}schedule"><i class="zmdi zmdi-format-underlined"></i> Schedule</a></li>
        <li {{(Request::is('admin/settings') ? 'class=active' : '')}}><a href="{{url('institiue/syllabus')}}settings"><i class="zmdi zmdi-format-underlined"></i> Settings</a></li>

    </ul>
</aside>