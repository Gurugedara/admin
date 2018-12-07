@extends('admin.layouts.app')
@section('content')
    <section id="content">
        <div class="container">
            <div class="c-header">
                <h2>All Syllabus Registered</h2>
            </div>
            <div class="card">
                <div class="card-header">
                    <h2>Manage Syllabus <small>These syllabus will be visible under your institute for students</small></h2>
                </div>

                <table id="data-table" class="table table-striped table-vmiddle">
                    <thead>
                    <tr>
                        <th data-column-id="id" data-type="numeric" data-order="desc"> ID</th>
                        <th data-column-id="name">Name</th>
                        <th data-column-id="institute">Document</th>
                        <th data-column-id="nos">Version</th>
                        <th data-column-id="syllabus">Modules</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($syllabi as $syllabus)
                    <tr>
                        <td>{{$syllabus->id}}</td>
                        <td>{{$syllabus->name}}</td>
                        <td><a href="{{\Illuminate\Support\Facades\Storage::url($syllabus->document)}}" target="_blank">View</a></td>
                        <td>{{$syllabus->version}}</td>
                        <td><a href="{{route('admin.modules.view',$syllabus->id)}}">Show</a></td>
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