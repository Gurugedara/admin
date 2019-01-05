@extends('layouts.app')
@section('content')

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
                  <br>
                  <h4>Institute Admin Details</h4>
                </div>
                <div class="form-group col-lg-8">
                    {{Form::label('title','First Name')}}
                    {{Form::text('firstname','',['class' => 'form-control', 'placeholder' => 'Enter First Name'])}}
                </div>
                <div class="form-group col-lg-8">
                    {{Form::label('title','Last Name')}}
                    {{Form::text('Lastname','',['class' => 'form-control', 'placeholder' => 'Enter Last Name'])}}
                </div>
                <div class="form-group col-lg-8">
                    {{Form::label('title','Email')}}
                    {{Form::text('email','',['class' => 'form-control', 'placeholder' => 'Enter Email Address'])}}
                </div>
                <div class="form-group col-lg-8">
                    {{Form::label('title','Password')}}
                    {{Form::password('password',['class' => 'form-control', 'placeholder' => 'Enter Password'])}}
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