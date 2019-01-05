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
                @if(Auth::user()==null)
                <li><a href="#" onclick="document.getElementById('id01').style.display='block'" style="width:auto;"> LOGIN</a></li> 
                @else
                <li><a href="/admin/dashboard">ADMIN</a></li>
                @endif
                
              </ul>
            </div>
          </div>
        </nav>
      </div>