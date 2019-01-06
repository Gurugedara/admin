@extends('layouts.mcq')
@section('content')

<br>
<div class="container">

    <div class="container">
        @if(count($allmcq)>0)
        <form>
            @foreach($allmcq as $mcq)
                <div class="well">
                    <h4><p>{{$number++}}. {{$mcq->description}}</p></h4>
                    
                        @foreach($mcq->answers as $answer)
                        <div class="col-xm-12">
                            <label class="radio-inline">
                                <input type="radio" name="{{$mcq->id}}" >{{$answer->answer}}
                            </label>
                        </div>
                        @endforeach
                     

                </div>
            @endforeach
            <div>
                <button type="button" class="col-xs-4 col-sm-4 btn btn-primary">Submit</button>
            </div>
        </form> 
        @else
            <p>No MCQs Found</p>
        @endif
    </div>
    
</div>    


@endsection