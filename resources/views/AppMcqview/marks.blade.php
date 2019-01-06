@extends('layouts.mcq')
@section('content')
<h1 style="text-align:center;">Your Marks!</h1>
<br>

<div class="container" style="text-align:center;">
    <div class="well col-xs-12" style="text-align:center;">
    <p>Correct- {{$marks}}/{{$numQuestions}}</p>
        <p>Marks: {{$marks}}</p>
    </div>
</div>

@endsection