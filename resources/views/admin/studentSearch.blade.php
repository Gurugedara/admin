@extends('admin.layouts.app')
@section('content')
    <section id="content">
        <div class="container">
            <div class="c-header">
                <h2>Students Waiting for Registration</h2>
            </div>
            <div class="card">
                <div class="card-header">
                    <h2>Search Students <small>If each student is registered under your institute click on verify, otherwise deny</small></h2>
                </div>

                <table id="data-table-command" class="table table-striped table-vmiddle">
                    <thead>
                    <tr>
                        <th data-column-id="indexNum" data-type="numeric" hidden></th>
                        <th data-column-id="id" data-type="numeric" data-order="desc">Reg Number</th>
                        <th data-column-id="nic">NIC</th>
                        <th data-column-id="name">Name</th>
                        <th data-column-id="institute">Institute</th>
                        <th data-column-id="course">Course</th>
                        <th data-column-id="commands" data-formatter="commands" data-sortable="false">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($allstudents as $student)
                        @foreach($student->institutes as $institute)
                            @foreach(auth()->user()->institutes as $userInstitute)
                                @if($institute->id==$userInstitute->id)
                                    <tr>
                                        <td hidden>{{$student->id}}</td>
                                        <td>{{$institute->pivot->regNumber}}</td>
                                        <td>{{$student->nic}}</td>
                                        <td>{{$student->user->firstname." ".$student->user->Lastname}}</td>
                                        <td>{{$institute->name}}</td>
                                        <td>{{$institute->pivot->course_id}}</td>
                                    </tr>
                                @endif
                            @endforeach
                        @endforeach
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

@endsection
@push('js')
    <!-- Data Table -->
    <script src="/admin/vendors/bootgrid/jquery.bootgrid.updated.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            //Basic Example
            $("#data-table-basic").bootgrid({
                css: {
                    icon: 'zmdi icon',
                    iconColumns: 'zmdi-view-module',
                    iconDown: 'zmdi-expand-more',
                    iconRefresh: 'zmdi-refresh',
                    iconUp: 'zmdi-expand-less'
                },
            });

            //Selection
            $("#data-table-selection").bootgrid({
                css: {
                    icon: 'zmdi icon',
                    iconColumns: 'zmdi-view-module',
                    iconDown: 'zmdi-expand-more',
                    iconRefresh: 'zmdi-refresh',
                    iconUp: 'zmdi-expand-less'
                },
                selection: true,
                multiSelect: true,
                rowSelect: true,
                keepSelection: true
            });

            //Command Buttons
            $("#data-table-command").bootgrid({
                css: {
                    icon: 'zmdi icon',
                    iconColumns: 'zmdi-view-module',
                    iconDown: 'zmdi-expand-more',
                    iconRefresh: 'zmdi-refresh',
                    iconUp: 'zmdi-expand-less'
                },
                formatters: {
                    "commands": function(column, row) {
                        return "<a href='/admin/search/student/"+row.indexNum+"'> <button type=\"button\" class=\"btn btn-success waves-effect\" data-row-id=\"" + row.id + "\">View</button> </a>";
                    }
                }
            });
        });
    </script>


@endpush