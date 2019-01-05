@extends('layouts.mcq')
@section('content')

<br>
<div class="container">

    <div class="container">
        @if(count($allmcq)>0)
        <form>
            @foreach($allmcq as $mcq)
                <div class="well">
                    <h4><p>{{$mcq->id}} {{$mcq->description}}</p></h4>
                    
                        @foreach($mcq->answers as $answer)
                            <label class="radio-inline">
                                <input type="radio" name="{{$mcq->id}}" >{{$answer->answer}}
                            </label>
                        @endforeach
                     

                </div>
            @endforeach
            <div>
                <button type="button" class="col-xs-3 col-sm-3 btn btn-primary">Submit</button>
            </div>
        </form> 
        @else
            <p>No MCQs Found</p>
        @endif
    </div>
    
</div>    


@endsection