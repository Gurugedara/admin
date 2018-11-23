@extends('layouts.app')
@section('content')

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

<br>
<br>
@include('inc.msg')

<!-- Register panel -->

    <div class="container2">
        <br>
        <br>
        <div class="container">
         <h3 style="color:#f4511e; font-size:30px;">Register Institute</h3>
        </div>
        <br>
        <div class="row">
        <div class="col-lg-4">
            <br>
            <div class="imgcontainer">
            <img src="/frontend/img/logo/logo2.png" alt="Avatar" class="avatar">
            </div>
        </div>
        
        <div class="col-lg-8">
        <div class="form-grou">
            {!! Form::open(['action' => 'instituteController@store', 'method'=>'POST']) !!}
                
                <div class="form-group col-lg-8 col-sm-8 col-md-8">
                    {{Form::label('title','Institute Name')}}
                    {{Form::text('name','',['class' => ['form-control'], 'placeholder' => 'Enter Institute Name'])}}
                </div>
                <div class="form-group col-lg-8">
                    {{Form::label('title','Address')}}
                    {{Form::text('address','',['class' => 'form-control', 'placeholder' => 'Enter Address'])}}
                </div>
                <div class="form-group col-lg-8">
                    {{Form::label('title','Telephone')}}
                    {{Form::text('telephone','',['class' => 'form-control', 'placeholder' => 'Enter Telephone'])}}
                </div>
                <div class="form-group col-lg-8">
                {{Form::submit('Submit',['class'=>'btn btn-success'])}}
                <a class="btn btn-danger" href="/">Cancel</a>
                </div>
                
                
            {!! Form::close() !!}
        </div>
        </div>
        <br>
  
    </div> 
    </div>

    <br>


  @endsection