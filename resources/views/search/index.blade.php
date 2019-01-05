@extends('layouts.app')
@section('content')

<br>
<div class="container">

    <div class="container">
        @if(count($results)>1)
        <form>
            @foreach($results as $result)
                <div class="well">
                    <h4><p>{{$institute->name}}</p></h4>
                </div>
            @endforeach
            
        </form> 
        @else
            <p>No MCQs Found</p>
        @endif
    </div>
    
</div>    


@endsection