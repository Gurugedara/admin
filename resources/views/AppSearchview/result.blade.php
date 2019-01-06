@extends('layouts.mcq')
@section('content')


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