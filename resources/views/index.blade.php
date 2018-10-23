<!DOCTYPE html>
<html lang="en">
<head>

  <title>Gurugedara</title>
  
  <link rel="icon" href="img/logo/guru.png" type="image/png" sizes="16x16">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
/* Styles for main page */
  body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #818181;
      max-width: 100%;
      overflow-x: hidden;
  }
  h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;
      margin-bottom: 30px;
  }
  h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
  }  
  .jumbotron {
      background-color: #fff;
      color: #ad42f4;
      padding: 100px 45px;
      font-family: Montserrat, sans-serif;
      
  }
  .container-fluid {
      padding: 60px 50px;
  }
  input[type=text] {
    width: 130px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url("frontend/img/logo/search.png");
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    width: 100%;
  }

  input[type=text]:focus {
      
  }

  .strt {
  background-image:url("frontend/img/slide/1.png");
  padding: 270px ;
  }

   /* section-2 background color*/
  .bg-grey {
      
  }
   /* logos in section-3 */
  .logo-small {
      color: #ad42f4;
      font-size: 30px;
  }
  /* settings of big logos in all sections */
  .logo {
      color: #31f938;
      font-size: 200px;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
  }

  .panel {
      border: 1px solid #f4511e; 
      border-radius:0 !important;
      transition: box-shadow 0.8s;
  }
  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
      border: 1px solid #f4511e;
      background-color: #fff !important;
      color: #f4511e;
  }
  .panel-heading {
      color: #fff !important;
      background-color: #f4511e !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
  .panel-footer {
      background-color: white !important;
  }
  .panel-footer h3 {
      font-size: 32px;
  }
  .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
  }
  .panel-footer .btn {
      margin: 15px 0;
      background-color: #f4511e;
      color: #fff;
  }
  .navbar {
      margin-bottom: 0;
      background-color: transparent;
      background: transparent;
      border-color: transparent;
      z-index: 9999;
      border: 0;

      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }

   
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color:  #ad42f4 !important;
      background-color: transparent !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
  footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #f4511e;
  }
  .slideanim {
    visibility:hidden;
  }

  .slideanim2 {
    visibility:hidden;
  }

  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .col-sm-8 {
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 150px;
    }
  }
/* -----------------------------------------*/

/* Styles for login panel */

body {font-family: Arial, Helvetica, sans-serif;}



/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container1 {
    padding: 10px;
    
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 40%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}

/* styles of search window*/


.overlay {
    height: 100%;
    width: 100%;
    display: none;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0, 0.9);
}

.overlay-content {
    position: relative;
    top: 46%;
    width: 80%;
    text-align: center;
    margin-top: 30px;
    margin: auto;
}

.overlay .closebtn {
    position: absolute;
    top: 20px;
    right: 45px;
    font-size: 60px;
    cursor: pointer;
    color: white;
}

.overlay .closebtn:hover {
    color: #ccc;
}

.overlay input[type=text] {
    padding: 15px;
    font-size: 17px;
    float: left;
    width: 100%;
    border-color: #fff;
    background: transparent;
    font-family: Arial, Helvetica, sans-serif;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    color:#fff;
}

    

.overlay input[type=text]:hover {
    background: transparent;
}


/* -----------------------------------------*/
  </style>

</head>

<!-- mainpage -->
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<div class="col-sm-8">
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="col-sm-2 navbar-header">
        <a class="navbar-brand" href="/">Gurugedara</a>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
      </div>
      
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#about">ABOUT</a></li>
          <li><a href="#vision">VISION & MISSION</a></li>
          <li><a href="#services">SERVICES</a></li>
          <li><a href="#contact">CONTACT</a></li>
          <li><a href="#" onclick="document.getElementById('id01').style.display='block'" style="width:auto;"> LOGIN</a></li> 
          <li><a onclick="openSearch()"><i class="fa fa-search"></i></a></li> 
        </ul>
      </div>
    </div>
  </nav>
</div>

<!-- search window -->

<div id="myOverlay" class="overlay">
  <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
  <div class="overlay-content">
    <form action="#">
      <div>
        <input type="text" placeholder="Search.." name="search">
      </div>
    </form>
  </div>
</div>

<!-- container(start) -->

<div id="start" class="strt">
  <div class="row">
    <div >

    <!--
      <div class="col-sm-4">
        <button type="button" class="btn btn-success btn-lg">Create account</button>
      </div>
      <div class="col-sm-4">
        <button type="button" class="btn btn-default btn-lg">Create account</button>
      </div>  
    -->



    </div>
  </div>
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
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
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
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

<!-- Login panel -->
<div id="id01" class="modal">
  
  <form class="modal-content animate" role="form" method="POST" action="{{ url('login') }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="/frontend/img/logo/logo2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container1">
      <label for="uname"><b>Username</b></label>
      <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Enter username" required>
      <br>
      <label for="psw"><b>Password</b></label>
      <input type="password" class="form-control" name="password" placeholder="Enter password" required>
      {{-- <input type="checkbox" name="remember" hidden> --}}
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container1" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>
<!-- ---------------------------------------------------------------- -->

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });

  $(window).scroll(function() {
    $(".slideanim2").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

<!-- function for make nav bar transparent when scrolling -->
<script>
    $(document).ready(function(){
      $(window).scroll(function() { // check if scroll event happened
        if ($(document).scrollTop() > 50) { // check if user scrolled more than 50 from top of the browser window
          $(".navbar").css("background-color", "#fff"); // if yes, then change the color of class "navbar-fixed-top" to white (#f8f8f8)
        } else {
          $(".navbar").css("background-color", "transparent"); // if not, change it back to transparent
        }
      });
    });
</script>

<!-- function for  open and close search window -->

<script>
function openSearch() {
    document.getElementById("myOverlay").style.display = "block";
}

function closeSearch() {
    document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>

