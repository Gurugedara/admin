@extends('layouts.app')
@section('content')

<!-- container(start) -->

<div id="start" class="strt" style="background-repeat:no-repeat;">
  <div class="row">
    <div class="head-title">
      <h1>Place for Learners.</h1>
    </div>
    
  <div class= bt-set>
    <div class="col-sm-4">
      <br>
      <a class="btn btn-success btn-lg" style="width:200px" href="/institutes/create">Create your Institute</a>
    </div>
  </div>  
</div>
<div class=" select-part-section p-2 rounded" style="margin-top:50px">
    <form method="POST" action="/search">
    @csrf
      <div class="row">
          <div class="col-lg-9">
              <select name="courseId" class="form-control form-control-lg pull-left" placeholder="select language">
                  @foreach($courses as $course)
                    <option value="{{$course->id}}" >{{$course->name}}</option>
                  @endforeach
              </select>
            
          </div>
          <div class="col-lg-3">
            <input type="submit" class="btn btn-danger btn-block search-btn" value="Search Institute"><i class="fa fa-search" aria-hidden="true"></i>
          </div>
      </form>
    </div>
  </div>
</div>

<!-- Container (About Section) -->
<div id="about" name="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>About Gurugedara</h2><br>
      <h4>Gurugedara helps students and teachers to maintain a good and quality education system with help of the modern tecnology.</h4><br><br>
      <p>Gurugedara helps students to build up their future career successfully with online career guidence programme. This career guidence is based on courses thay follow and thair personal preferances. Not only that Gurugedara helps students to improve thair knowladge and take a mesurement of their current level of subject understandings by participating online exams. <br>With gurudedara Students can make clarifications in subject matters directly from the teacher. Teacher can add questions and host online exams with this system. With Gurugedara education system can be taken to same standerd. <br>
</p>
      <br>
    </div>
    <div class="col-sm-4">
      <span class="slideanim"><img src="/frontend/img/logo/logo2.png"></span>
    </div>
  </div>
</div>

<div id=vision class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="slideanim2"><img src="/frontend/img/logo/teacher.png"></span>
    </div>
    <div class="col col-lg-auto">
      <h2>Our Values</h2><br>
      <h4><strong>MISSION:</strong> Our mission is to help students to get a quality education and Help teachers to give a quality education by breaking student teacher barrier using modern tecnology.</h4><br>
      <p><strong>VISION:</strong> Our vision is to take current education system to new standerd. By using this system we hope to help students to choose best institutes to learn and by doing so make a competition between institutes. With this competition institutes will get better and better.</p>
    </div>
  </div>
</div>

<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>SERVICES</h2>
  <h4>What we offer</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-education logo-small"></span>
      <h4>Guidance</h4>
      <p>Guide students to build successful future careers..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-folder-open logo-small"></span>
      <h4>Syllabuses</h4>
      <p>We provide syllabuses to students who follow courses..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-pencil logo-small"></span>
      <h4>Exams</h4>
      <p>Students can participate Online Exams on what thay have lerned in courses.. </p>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-comment logo-small"></span>
      <h4>Knowledge sharing</h4>
      <p>Students can share thair knowladge with others through discussions foram..</p>
    </div>
 <div class="col-sm-4">
      <span class=""></span>
      <h4></h4>
      <p></p>
    </div>   
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-user logo-small"></span>
      <h4 style="color:#303030;">Clarifications</h4>
      <p>Student can clarify thair questions by asking directly form teacher through a foram..</p>
    </div>
  </div>
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Raid ave, Colombo 00700</p>
      <p><span class="glyphicon glyphicon-phone"></span> +94 770095174</p>
      <p><span class="glyphicon glyphicon-envelope"></span> gurugedara@gmail.com</p>
      <span class="slideanim"><img src="/frontend/img/logo/std.gif"></span>
    </div>
    <div class="col-sm-7 slideanim">
      <form method="POST" action="/contact">
        @csrf
        <div class="row">
          <div class="col-sm-6 form-group">
            <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
          </div>
          <div class="col-sm-6 form-group">
            <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
          </div>
        </div>
        <textarea class="form-control" id="comments" name="comment" placeholder="Comment" rows="5" required></textarea><br>
        <div class="row">
          <div class="col-sm-12 form-group">
            <button class="btn btn-default pull-right" type="submit">Send</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<div id="footer">
<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
</footer>
</div>
<!-- ---------------------------------------------------------------- -->

@endsection