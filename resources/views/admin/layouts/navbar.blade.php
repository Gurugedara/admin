<nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
    <a class="mdl-navigation__link {{Request::is('admin/home')?'mdl-navigation__link--current':null}}" href="/"><i class="mdl-color-text--blue-grey-400 material-icons" >home</i>Home</a>
    <a class="mdl-navigation__link {{Request::is('admin/studentVerify')?'mdl-navigation__link--current':null}}" href="studentVerify"><i class="mdl-color-text--blue-grey-400 material-icons" >people</i>Verify Students</a>
    <a class="mdl-navigation__link" ><i class="mdl-color-text--blue-grey-400 material-icons" >person</i>Verify Teachers</a>
    <a class="mdl-navigation__link" ><i class="mdl-color-text--blue-grey-400 material-icons" >add</i>Add Courses</a>

    <a class="mdl-navigation__link" ><i class="mdl-color-text--blue-grey-400 material-icons" >cloud_upload</i>Upload Syllabus</a>

    <a class="mdl-navigation__link" ><i class="mdl-color-text--blue-grey-400 material-icons" >rate_review</i>Reviews</a>

    <a class="mdl-navigation__link" ><i class="mdl-color-text--blue-grey-400 material-icons" >supervised_user_circle</i>Manage Admins</a>

    <a class="mdl-navigation__link" href="#"><i class="mdl-color-text--blue-grey-400 material-icons" >help_outline</i>Help</a>
</nav>