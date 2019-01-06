@extends('layouts.mcq')
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
            <li><a href="https://www.gurugedara.ga#about">ABOUT</a></li>
            <li><a href="https://www.gurugedara.ga#vision">VISION & MISSION</a></li>
            <li><a href="https://www.gurugedara.ga#services">SERVICES</a></li>
            <li><a href="https://www.gurugedara.ga#contact">CONTACT</a></li>
            @if(Auth::user()==null)
            <li><a href="https://www.gurugedara.ga" onclick="document.getElementById('id01').style.display='block'" style="width:auto;"> LOGIN</a></li> 
            @else
            <li><a href="/admin/dashboard">ADMIN</a></li>
            @endif
            
            </ul>
        </div>
        </div>
    </nav>
</div>
<br>
<br>

<h1 style="text-align:center;">Search Results</h1>
<br>
<br>
<div class="container">
    <div class="container" style="text-align:center;">
        @if(count($results)>0)
            @foreach($results as $result)
            <div class="card col-sm-5 well" style="text-align:center; margin-left: 50px;">
                <div class="card-body">
                    <h4 class="card-title">{{App\institute::find($result->institute_id)->name}}</h4>
                    <p class="card-text">Address - {{App\institute::find($result->institute_id)->address}}</p>
                    <p class="card-text">Telephone - {{App\institute::find($result->institute_id)->telephone}}</p>
                    <h5 style=><b>Rating</b></h5>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="70"
                            aria-valuemin="0" aria-valuemax="100" style="width:{{App\review::where('institute_id',$result->institute_id)->avg('stars')/5*100}}%">
                            {{App\review::where('institute_id',$result->institute_id)->avg('stars')/5*100}}%
                        </div>
                    </div> 
                </div>
            </div>
            @endforeach


        @else
            <p>No Institutes Found</p>
        @endif
    </div>
    
</div>    


@endsection