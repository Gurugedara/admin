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
        <li class= "{{((Request::is('admin/verify/student')||Request::is('admin/search/student')) ? 'sub-menu toggled active' : 'sub-menu')}}">
            <a href="students" data-ma-action="submenu-toggle"><i class="zmdi zmdi-view-compact"></i> Students</a>

            <ul>
                <li {{(Request::is('admin/verify/student') ? 'class=active' : '')}}><a href="{{url('admin/verify/student')}}">Verify</a></li>
                <li {{(Request::is('admin/search/student') ? 'class=active' : '')}}><a href="{{url('admin/search/student')}}">Search</a></li>
            </ul>
        </li>
        <li class="{{((Request::is('admin/verify/teacher')||Request::is('admin/search/teacher')) ? 'sub-menu toggled active' : 'sub-menu')}}">
            <a href="#" data-ma-action="submenu-toggle"><i class="zmdi zmdi-view-compact"></i> Teachers</a>

            <ul>
                <li {{(Request::is('admin/verify/teacher') ? 'class=active' : '')}}><a href="{{url('admin/verify/teacher')}}">Verify</a></li>
                <li {{(Request::is('admin/search/teacher') ? 'class=active' : '')}}><a href="{{url('admin/search/teacher')}}">Search</a></li>
            </ul>
        </li>
        <li class="{{((Request::is('admin/institiue/syllabus')||Request::is('institute/reviews')||Request::is('institute/stories')||Request::is('institute/carrierpath')) ? 'sub-menu toggled active' : 'sub-menu')}}">
            <a href="#" data-ma-action="submenu-toggle"><i class="zmdi zmdi-view-compact"></i> Institute</a>

            <ul>
                <li {{(Request::is('admin/institiue/syllabus') ? 'class=active' : '')}}><a href="{{url('institiue/syllabus')}}">Syllabus</a></li>
                <li {{(Request::is('admin/institiue/reviews') ? 'class=active' : '')}}><a href="{{url('institute/reviews')}}">Reviews</a></li>
                <li {{(Request::is('admin/institiue/stories') ? 'class=active' : '')}}><a href="{{url('institute/stories')}}">Success Stories</a></li>
                <li {{(Request::is('admin/institiue/carrierpath') ? 'class=active' : '')}}><a href="{{url('institute/carrierpath')}}">Carrier Path</a></li>
            </ul>
        </li>
        <li {{(Request::is('admin/message/inbox') ? 'class=active' : '')}}><a href="{{url('message/inbox')}}"><i class="zmdi zmdi-format-underlined"></i> Message Inbox</a></li>
        <li {{(Request::is('admin/forum') ? 'class=active' : '')}}><a href="{{url('institiue/syllabus')}}forum"><i class="zmdi zmdi-format-underlined"></i> Forum</a></li>
        <li {{(Request::is('admin/schedule') ? 'class=active' : '')}}><a href="{{url('institiue/syllabus')}}schedule"><i class="zmdi zmdi-format-underlined"></i> Schedule</a></li>
        <li {{(Request::is('admin/settings') ? 'class=active' : '')}}><a href="{{url('institiue/syllabus')}}settings"><i class="zmdi zmdi-format-underlined"></i> Settings</a></li>

    </ul>
</aside>