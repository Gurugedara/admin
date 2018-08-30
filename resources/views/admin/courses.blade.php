@extends('admin.layouts.app')
@push('header')
    <link rel="stylesheet" href="/admin/css/mdb.min.css">
    <link href="/admin/css/style1.css" rel="stylesheet">
@endpush
@section('content')
    <div class="container mainTable">
            <div class="card card-cascade narrower subTable">
                    
                    <!--Card header-->
                    <div class="view view-cascade py-3 gradient-card-header info-color-dark mx-4 d-flex justify-content-between align-items-center">

                        <div>
                            <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2 waves-effect waves-light">
                                <i class="fa fa-th-large mt-0"></i>
                            </button>
                            <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2 waves-effect waves-light">
                                <i class="fa fa-columns mt-0"></i>
                            </button>
                        </div>

                        <a href="" class="white-text mx-3">Manage Courses</a>

                        <div>
                            <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2 waves-effect waves-light">
                                <i class="fa fa-pencil mt-0"></i>
                            </button>
                            <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2 waves-effect waves-light" data-toggle="modal" data-target="#modalConfirmDelete">
                                <i class="fa fa-remove mt-0"></i>
                            </button>
                            <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2 waves-effect waves-light">
                                <i class="fa fa-info-circle mt-0"></i>
                            </button>
                        </div>

                    </div>
                    <!--/Card header-->

                    <!--Card content-->
                    <div class="card-body card-body-cascade">

                        <div class="table-responsive" >

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>
                                            <input class="form-check-input" type="checkbox" id="checkbox">
                                            <label for="checkbox" class="label-table form-check-label"></label>
                                        </th>
                                        <th class="th-lg">Registration Number</th>
                                        <th class="th-lg">First Name</th>
                                        <th class="th-lg">Last Name</th>
                                        <th class="th-lg">Course</th>
                                        <th class="th-lg">Action</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">
                                            <input class="form-check-input" type="checkbox" id="checkbox1">
                                            <label for="checkbox1" class="label-table form-check-label"></label>
                                        </th>
                                        <td>Lorem Ipsum</td>
                                        <td>Lorem Ipsum</td>
                                        <td>Lorem Ipsum</td>
                                        <td>Lorem Ipsum</td>
                                        <td>Lorem Ipsum</td>
                                        
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <input class="form-check-input" type="checkbox" id="checkbox2">
                                            <label for="checkbox2" class="label-table form-check-label"></label>
                                        </th>
                                        <td>Lorem Ipsum</td>
                                        <td>Lorem Ipsum</td>
                                        <td>Lorem Ipsum</td>
                                        <td>Lorem Ipsum</td>
                                        <td>Lorem Ipsum</td>
                                        
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <input class="form-check-input" type="checkbox" id="checkbox3">
                                            <label for="checkbox3" class="label-table form-check-label"></label>
                                        </th>
                                        <td>Lorem Ipsum</td>
                                        <td>Lorem Ipsum</td>
                                        <td>Lorem Ipsum</td>
                                        <td>Lorem Ipsum</td>
                                        <td>Lorem Ipsum</td>
                                        
                                    </tr>
                                </tbody>
                            </table>

                        </div>

                        <hr class="my-0">

                        <!--Bottom Table UI-->
                        <div class="d-flex justify-content-between">

                            <!--Pagination -->
                            <nav class="my-4">
                                <ul class="pagination pagination-circle pg-blue mb-0">

                                    <!--First-->
                                    <li class="page-item disabled">
                                        <a class="page-link waves-effect waves-effect">First</a>
                                    </li>

                                    <!--Arrow left-->
                                    <li class="page-item disabled">
                                        <a class="page-link waves-effect waves-effect" aria-label="Previous">
                                            <span aria-hidden="true">«</span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </li>

                                    <!--Numbers-->
                                    <li class="page-item active">
                                        <a class="page-link waves-effect waves-effect">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link waves-effect waves-effect">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link waves-effect waves-effect">3</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link waves-effect waves-effect">4</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link waves-effect waves-effect">5</a>
                                    </li>

                                    <!--Arrow right-->
                                    <li class="page-item">
                                        <a class="page-link waves-effect waves-effect" aria-label="Next">
                                            <span aria-hidden="true">»</span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>

                                    <!--First-->
                                    <li class="page-item">
                                        <a class="page-link waves-effect waves-effect">Last</a>
                                    </li>

                                </ul>
                            </nav>
                            <!--/Pagination -->

                        </div>
                        <!--Bottom Table UI-->

                    </div>
                    <!--/.Card content-->

                </div>
        
    </div>
@endsection