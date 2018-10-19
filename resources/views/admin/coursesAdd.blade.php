@extends('admin.layouts.app')
@section('content')
            <section id="content">
                <div class="container">
                    <div class="c-header">
                        <h2>Add new Course</h2>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h2>Select the New Course <small>These courses will be visible to the students as they can enroll with them</small></h2>
                        </div>

                        <div class="card-body card-padding">
                            <br/><br/>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="zmdi zmdi-home"></i></span>
                                        <div class="select">
                                                <select class="form-control" id="institute">
                                                    <option disabled="disabled">Select and Option</option>
                                                    @foreach($institutes as $institute)
                                                        @foreach(auth()->user()->institutes as $userInstitute)
                                                            @if($institute->id==$userInstitute->id)
                                                                <option value="{{$institute->id}}">{{$institute->name}}</option>
                                                            @endif
                                                        @endforeach
                                                    @endforeach
                                                </select>
                                        </div>
                                    </div>

                                    <br/>
                                </div>
                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="zmdi zmdi-book"></i></span>
                                        <div class="select">
                                           <select class="form-control" id="course">
                                               <option disabled>Please Select an Option</option>
                                               @foreach($courses as $course)
                                                   <option value="{{$course->id}}">{{$course->name}}</option>
                                               @endforeach
                                           </select>
                                        </div>
                                    </div>

                                    <br/>
                                </div>
                                <div class="col-sm-4">
                                    <div>
                                        <div >
                                            <button class="btn btn-primary" onclick="select()">Add</button>
                                        </div>
                                    </div>
                                </div>
                                </div>
                        </div>
                        <br/>
                    </div>

                </div>
            </section>
@endsection

@push('js')
    <script type="text/javascript">
        function select(){

            var course = document.getElementById('course');
            var institute = document.getElementById('institute');

            var selectedCourse = course.selectedIndex;
            var selectedInstitute = institute.selectedIndex;

            $.ajax({
                url: '{{url('admin/institute/course/add')}}/'+selectedInstitute+'/'+selectedCourse,
                type: 'get',
                // dataType: 'JSON',
                // data: {_token: {{ csrf_token() }}},
            })
                .done(function(result) {
                    if(result==='true'){
                        swal("Done!", "Course Added to your institute Successfully", "success")
                    }else{
                        swal("Failed!", "This course is already registered with your institute", "error");
                    }
                    return "true";
                })
                .fail(function() {
                    console.log('Fail');
                    return "false";
                });
        }
    </script>
@endpush