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