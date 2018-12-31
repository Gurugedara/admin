@extends('admin.layouts.app')
@section('content')
    <section id="content">
        <div class="container">
            <div class="c-header">
                <h2>All Institutes Registerd with your Administation</h2>
            </div>
            <div class="card">
                <div class="card-header">
                    <h2>Manage Institutes <small>Carefull When you Deleting Institutes</small></h2>
                </div>

                <table id="data-table" class="table table-striped table-vmiddle">
                    <thead>
                    <tr>
                        <th data-column-id="id" data-type="numeric" data-order="desc">ID</th>
                        <th data-column-id="name">Name</th>
                        <th data-column-id="institute">Address</th>
                        <th data-column-id="nos">Telephone</th>
                        <th data-column-id="action">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach(Auth::user()->institutes as $institute)
                                   <tr>
                                        <td>{{$institute->id}}</td>
                                       <td>{{$institute->name}}</td>
                                       <td>{{$institute->address}}</td>
                                       <td>{{$institute->telephone}}</td>                                       
                                       <td>
                                       <a id="sa-params" href="/admin/institute/edit/{{$institute->id}}"> <button class="btn waves-effect btn-success">Edit</button></a>
                                           <a id="sa-params" href="/admin/institute/delete/{{$institute->id}}"> <button class="btn waves-effect btn-danger">Delete</button></a>
                                       </td>
                                   </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- <a href="/admin/institute/course/add"> <button class="btn btn-float btn-success m-btn"><i class="zmdi zmdi-plus"></i></button></a> --}}
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

@endpush