@extends('layouts.mcq')
@section('content')

<br>
<br>
<br>

<div class="container col-xs-12">
    <div class=" select-part-section p-2 rounded" style="margin-top:50px">
        <form method="POST" action="/app/search">
        @csrf
            <div class="row">
                <div class="col-lg-9">
                    <select name="courseId" class="form-control form-control-lg" placeholder="select language">
                        @foreach($courses as $course)
                        <option value="{{$course->id}}" >{{$course->name}}</option>
                        @endforeach
                    </select>
                </div>
                <br>
                <div class="col-lg-3">
                <input type="submit" class="btn btn-primary btn-block search-btn" value="Search Institute">
                </div>
            </form>
        </div>
     </div>
   </div>
</div>

@endsection