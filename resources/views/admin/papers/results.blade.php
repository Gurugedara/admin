@extends('admin.layouts.app')
@section('content')
    <section id="content">
        <div class="container">
            <div class="c-header">
                <h2>All courses Registered with your Institute</h2>
            </div>
            <div class="card">
                <div class="card-header">
                    <h2>Student Results <small>These are the Results we got from student for this paper</small></h2>
                </div>

                <a href="/admin/institute/papers"> <button class="btn btn-float btn-danger m-btn"><i class="zmdi zmdi-arrow-back"></i></button></a>

                <table id="data-table" class="table table-striped table-vmiddle">
                    <thead>
                    <tr>
                        <th data-column-id="id" data-type="numeric" data-order="desc">Student ID</th>
                        <th data-column-id="name">Marks</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($paper->results as $result)
                        <tr>
                            <td>{{$result->student_id}}</td>
                            <td>{{$result->marks}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

@endsection

@push('css')

    <!-- Vendor CSS -->
    <link href="/admin/vendors/bower_components/animate.css/animate.min.css" rel="stylesheet">
    <link href="/admin/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">
    <link href="/admin/vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet">
    <link href="/admin/vendors/bower_components/google-material-color/dist/palette.css" rel="stylesheet">

@endpush

@push('js')
    <!-- Data Table -->
    <script src="/admin/vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="/admin/vendors/bower_components/Waves/dist/waves.min.js"></script>
    <script src="/admin/vendors/bootstrap-growl/bootstrap-growl.min.js"></script>
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
                        return "<a href='/admin/verify/student/'> <button type=\"button\" class=\"btn btn-icon palette-Green bg command-edit waves-effect waves-circle waves-float\" data-row-id=\"" + row.id + "\"><span class=\"zmdi zmdi-check\"></span></button> </a>" +
                            "<button type=\"button\" class=\"btn btn-icon palette-Red bg command-edit waves-effect waves-circle waves-float\" data-row-id=\"" + row.id + "\"><span class=\"zmdi zmdi-close\"></span></button>";
                    }
                }
            });
        });
    </script>


@endpush