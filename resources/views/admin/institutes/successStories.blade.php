@extends('admin.layouts.app')
@section('content')
    <section id="content">
        <div class="container">
            <div class="c-header">
                <h2>Contacts</h2>
            </div>

            <!-- Add button -->
            <button class="btn btn-float btn-danger m-btn"><i class="zmdi zmdi-plus"></i></button>


            <div class="card">
                <div class="action-header palette-Teal-400 bg clearfix">
                    <div class="ah-label hidden-xs palette-White text">Some text here</div>

                    <div class="ah-search">
                        <input type="text" placeholder="Start typing..." class="ahs-input">

                        <i class="ah-search-close zmdi zmdi-long-arrow-left" data-ma-action="ah-search-close"></i>
                    </div>

                    <ul class="ah-actions actions a-alt">
                        <li>
                            <a href="#" class="ah-search-trigger" data-ma-action="ah-search-open">
                                <i class="zmdi zmdi-search"></i>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="zmdi zmdi-time"></i>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" aria-expanded="true">
                                <i class="zmdi zmdi-sort"></i>
                            </a>

                            <ul class="dropdown-menu dropdown-menu-right">
                                <li>
                                    <a href="#">Last Modified</a>
                                </li>
                                <li>
                                    <a href="#">Last Edited</a>
                                </li>
                                <li>
                                    <a href="#">Name</a>
                                </li>
                                <li>
                                    <a href="#">Date</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="zmdi zmdi-info"></i>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" aria-expanded="true">
                                <i class="zmdi zmdi-more-vert"></i>
                            </a>

                            <ul class="dropdown-menu dropdown-menu-right">
                                <li>
                                    <a href="#">Refresh</a>
                                </li>
                                <li>
                                    <a href="#">Listview Settings</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="card-body card-padding">
                    <div class="contacts clearfix row">
                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <div class="c-item">
                                <a href="#" class="ci-avatar">
                                    <img src="/admin/img/contacts/1.jpg" alt="">
                                </a>

                                <div class="c-info">
                                    <strong>Cathy Shelton</strong>
                                    <small>cathy.shelton31@example.com</small>
                                </div>

                                <div class="c-footer">
                                    <button class="waves-effect"><i class="zmdi zmdi-person-add"></i> Add</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <div class="c-item">
                                <a href="#" class="ci-avatar">
                                    <img src="/admin/img/contacts/2.jpg" alt="">
                                </a>

                                <div class="c-info">
                                    <strong>Stella Flores</strong>
                                    <small>stella@example.com</small>
                                </div>

                                <div class="c-footer">
                                    <button class="waves-effect"><i class="zmdi zmdi-person-add"></i> Add</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <div class="c-item">
                                <a href="#" class="ci-avatar">
                                    <img src="/admin/img/contacts/3.jpg" alt="">
                                </a>

                                <div class="c-info">
                                    <strong>Marilyn Thomas</strong>
                                    <small>marilyn@example.com</small>
                                </div>

                                <div class="c-footer">
                                    <button class="waves-effect"><i class="zmdi zmdi-person-add"></i> Add</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <div class="c-item">
                                <a href="#" class="ci-avatar">
                                    <img src="/admin/img/contacts/4.jpg" alt="">
                                </a>

                                <div class="c-info">
                                    <strong>Dwight Gilbert</strong>
                                    <small>dwight@example.com</small>
                                </div>

                                <div class="c-footer">
                                    <button class="waves-effect"><i class="zmdi zmdi-person-add"></i> Add</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <div class="c-item">
                                <a href="#" class="ci-avatar">
                                    <img src="/admin/img/contacts/5.jpg" alt="">
                                </a>

                                <div class="c-info">
                                    <strong>Cody Moreno</strong>
                                    <small>moreno@example.com</small>
                                </div>

                                <div class="c-footer">
                                    <button class="waves-effect"><i class="zmdi zmdi-person-add"></i> Add</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <div class="c-item">
                                <a href="#" class="ci-avatar">
                                    <img src="/admin/img/contacts/6.jpg" alt="">
                                </a>

                                <div class="c-info">
                                    <strong>Jamie Freeman</strong>
                                    <small>freeman@example.com</small>
                                </div>

                                <div class="c-footer">
                                    <button class="waves-effect"><i class="zmdi zmdi-person-add"></i> Add</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <div class="c-item">
                                <a href="#" class="ci-avatar">
                                    <img src="/admin/img/contacts/7.jpg" alt="">
                                </a>

                                <div class="c-info">
                                    <strong>Charles Spencer</strong>
                                    <small>charles@example.com</small>
                                </div>

                                <div class="c-footer">
                                    <button class="waves-effect"><i class="zmdi zmdi-person-add"></i> Add</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <div class="c-item">
                                <a href="#" class="ci-avatar">
                                    <img src="/admin/img/contacts/8.jpg" alt="">
                                </a>

                                <div class="c-info">
                                    <strong>Vickie Reed</strong>
                                    <small>reed@example.com</small>
                                </div>

                                <div class="c-footer">
                                    <button class="waves-effect"><i class="zmdi zmdi-person-add"></i> Add</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <div class="c-item">
                                <a href="#" class="ci-avatar">
                                    <img src="/admin/img/contacts/9.jpg" alt="">
                                </a>

                                <div class="c-info">
                                    <strong>Lauren Ruiz</strong>
                                    <small>ruiz@example.com</small>
                                </div>

                                <div class="c-footer">
                                    <button class="waves-effect"><i class="zmdi zmdi-person-add"></i> Add</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <div class="c-item">
                                <a href="#" class="ci-avatar">
                                    <img src="/admin/img/contacts/10.jpg" alt="">
                                </a>

                                <div class="c-info">
                                    <strong>Marlene Vasquez</strong>
                                    <small>vasquez@example.com</small>
                                </div>

                                <div class="c-footer">
                                    <button class="waves-effect"><i class="zmdi zmdi-person-add"></i> Add</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <div class="c-item">
                                <a href="#" class="ci-avatar">
                                    <img src="/admin/img/contacts/11.jpg" alt="">
                                </a>

                                <div class="c-info">
                                    <strong>Loretta Morrisonz</strong>
                                    <small>morrisonz@example.com</small>
                                </div>

                                <div class="c-footer">
                                    <button class="waves-effect"><i class="zmdi zmdi-person-add"></i> Add</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <div class="c-item">
                                <a href="#" class="ci-avatar">
                                    <img src="/admin/img/contacts/12.jpg" alt="">
                                </a>

                                <div class="c-info">
                                    <strong>Yvonne Wood</strong>
                                    <small>wood@example.com</small>
                                </div>

                                <div class="c-footer">
                                    <button class="waves-effect"><i class="zmdi zmdi-person-add"></i> Add</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <div class="c-item">
                                <a href="#" class="ci-avatar">
                                    <img src="/admin/img/contacts/13.jpg" alt="">
                                </a>

                                <div class="c-info">
                                    <strong>Denise Franklin</strong>
                                    <small>franklin@example.com</small>
                                </div>

                                <div class="c-footer">
                                    <button class="waves-effect"><i class="zmdi zmdi-person-add"></i> Add</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <div class="c-item">
                                <a href="#" class="ci-avatar">
                                    <img src="/admin/img/contacts/14.jpg" alt="">
                                </a>

                                <div class="c-info">
                                    <strong>Joseph Gonzalez</strong>
                                    <small>gonzalez@example.com</small>
                                </div>

                                <div class="c-footer">
                                    <button class="waves-effect"><i class="zmdi zmdi-person-add"></i> Add</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <div class="c-item">
                                <a href="#" class="ci-avatar">
                                    <img src="/admin/img/contacts/15.jpg" alt="">
                                </a>

                                <div class="c-info">
                                    <strong>Rick Graham</strong>
                                    <small>graham@example.com</small>
                                </div>

                                <div class="c-footer">
                                    <button class="waves-effect"><i class="zmdi zmdi-person-add"></i> Add</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <div class="c-item">
                                <a href="#" class="ci-avatar">
                                    <img src="/admin/img/contacts/16.jpg" alt="">
                                </a>

                                <div class="c-info">
                                    <strong>Alexander Bailey</strong>
                                    <small>bailey@example.com</small>
                                </div>

                                <div class="c-footer">
                                    <button class="waves-effect"><i class="zmdi zmdi-person-add"></i> Add</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <div class="c-item">
                                <a href="#" class="ci-avatar">
                                    <img src="/admin/img/contacts/1.jpg" alt="">
                                </a>

                                <div class="c-info">
                                    <strong>Cathy Shelton</strong>
                                    <small>cathy.shelton31@example.com</small>
                                </div>

                                <div class="c-footer">
                                    <button class="waves-effect"><i class="zmdi zmdi-person-add"></i> Add</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <div class="c-item">
                                <a href="#" class="ci-avatar">
                                    <img src="/admin/img/contacts/2.jpg" alt="">
                                </a>

                                <div class="c-info">
                                    <strong>Stella Flores</strong>
                                    <small>stella@example.com</small>
                                </div>

                                <div class="c-footer">
                                    <button class="waves-effect"><i class="zmdi zmdi-person-add"></i> Add</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <div class="c-item">
                                <a href="#" class="ci-avatar">
                                    <img src="/admin/img/contacts/3.jpg" alt="">
                                </a>

                                <div class="c-info">
                                    <strong>Marilyn Thomas</strong>
                                    <small>marilyn@example.com</small>
                                </div>

                                <div class="c-footer">
                                    <button class="waves-effect"><i class="zmdi zmdi-person-add"></i> Add</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <div class="c-item">
                                <a href="#" class="ci-avatar">
                                    <img src="/admin/img/contacts/4.jpg" alt="">
                                </a>

                                <div class="c-info">
                                    <strong>Dwight Gilbert</strong>
                                    <small>dwight@example.com</small>
                                </div>

                                <div class="c-footer">
                                    <button class="waves-effect"><i class="zmdi zmdi-person-add"></i> Add</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <div class="c-item">
                                <a href="#" class="ci-avatar">
                                    <img src="/admin/img/contacts/5.jpg" alt="">
                                </a>

                                <div class="c-info">
                                    <strong>Cody Moreno</strong>
                                    <small>moreno@example.com</small>
                                </div>

                                <div class="c-footer">
                                    <button class="waves-effect"><i class="zmdi zmdi-person-add"></i> Add</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <div class="c-item">
                                <a href="#" class="ci-avatar">
                                    <img src="/admin/img/contacts/6.jpg" alt="">
                                </a>

                                <div class="c-info">
                                    <strong>Jamie Freeman</strong>
                                    <small>freeman@example.com</small>
                                </div>

                                <div class="c-footer">
                                    <button class="waves-effect"><i class="zmdi zmdi-person-add"></i> Add</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <div class="c-item">
                                <a href="#" class="ci-avatar">
                                    <img src="/admin/img/contacts/7.jpg" alt="">
                                </a>

                                <div class="c-info">
                                    <strong>Charles Spencer</strong>
                                    <small>charles@example.com</small>
                                </div>

                                <div class="c-footer">
                                    <button class="waves-effect"><i class="zmdi zmdi-person-add"></i> Add</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <div class="c-item">
                                <a href="#" class="ci-avatar">
                                    <img src="/admin/img/contacts/8.jpg" alt="">
                                </a>

                                <div class="c-info">
                                    <strong>Vickie Reed</strong>
                                    <small>reed@example.com</small>
                                </div>

                                <div class="c-footer">
                                    <button class="waves-effect"><i class="zmdi zmdi-person-add"></i> Add</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <div class="c-item">
                                <a href="#" class="ci-avatar">
                                    <img src="/admin/img/contacts/9.jpg" alt="">
                                </a>

                                <div class="c-info">
                                    <strong>Lauren Ruiz</strong>
                                    <small>ruiz@example.com</small>
                                </div>

                                <div class="c-footer">
                                    <button class="waves-effect"><i class="zmdi zmdi-person-add"></i> Add</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <div class="c-item">
                                <a href="#" class="ci-avatar">
                                    <img src="/admin/img/contacts/10.jpg" alt="">
                                </a>

                                <div class="c-info">
                                    <strong>Marlene Vasquez</strong>
                                    <small>vasquez@example.com</small>
                                </div>

                                <div class="c-footer">
                                    <button class="waves-effect"><i class="zmdi zmdi-person-add"></i> Add</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <div class="c-item">
                                <a href="#" class="ci-avatar">
                                    <img src="/admin/img/contacts/11.jpg" alt="">
                                </a>

                                <div class="c-info">
                                    <strong>Loretta Morrisonz</strong>
                                    <small>morrisonz@example.com</small>
                                </div>

                                <div class="c-footer">
                                    <button class="waves-effect"><i class="zmdi zmdi-person-add"></i> Add</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <div class="c-item">
                                <a href="#" class="ci-avatar">
                                    <img src="/admin/img/contacts/12.jpg" alt="">
                                </a>

                                <div class="c-info">
                                    <strong>Yvonne Wood</strong>
                                    <small>wood@example.com</small>
                                </div>

                                <div class="c-footer">
                                    <button class="waves-effect"><i class="zmdi zmdi-person-add"></i> Add</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <div class="c-item">
                                <a href="#" class="ci-avatar">
                                    <img src="/admin/img/contacts/13.jpg" alt="">
                                </a>

                                <div class="c-info">
                                    <strong>Denise Franklin</strong>
                                    <small>franklin@example.com</small>
                                </div>

                                <div class="c-footer">
                                    <button class="waves-effect"><i class="zmdi zmdi-person-add"></i> Add</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <div class="c-item">
                                <a href="#" class="ci-avatar">
                                    <img src="/admin/img/contacts/14.jpg" alt="">
                                </a>

                                <div class="c-info">
                                    <strong>Joseph Gonzalez</strong>
                                    <small>gonzalez@example.com</small>
                                </div>

                                <div class="c-footer">
                                    <button class="waves-effect"><i class="zmdi zmdi-person-add"></i> Add</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection