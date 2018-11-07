@extends('admin.layouts.app')
@section('content')
    <section id="content">
        <div class="container">
            <div class="c-header">
                <h2>Institute Reviews</h2>
            </div>

            <div class="card">
                <div class="action-header palette-Teal-400 bg clearfix">
                    <div class="ah-label hidden-xs palette-White text">Student Reviews</div>

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

                <div class="list-group lg-alt lg-even-black">
                    <div class="list-group-item media">
                        <div class="checkbox pull-left lgi-checkbox">
                            <label>
                                <input type="checkbox" value="">
                                <i class="input-helper"></i>
                            </label>
                        </div>

                        <div class="pull-left">
                            <div class="avatar-char palette-Light-Blue bg">P</div>
                        </div>

                        <div class="pull-right">
                            <ul class="actions">
                                <li class="dropdown">
                                    <a href="#" data-toggle="dropdown" aria-expanded="false">
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

                        <div class="media-body">
                            <div class="lgi-heading">Per an error perpetua, fierent fastidii recteque ad pro. Mei id brute intellegam</div>
                            <small class="lgi-text">Quisque non tortor ultricies, posuere elit id, lacinia purus curabitur.</small>
                        </div>
                    </div>

                    <div class="list-group-item media">
                        <div class="checkbox pull-left lgi-checkbox">
                            <label>
                                <input type="checkbox" value="">
                                <i class="input-helper"></i>
                            </label>
                        </div>

                        <div class="pull-right">
                            <ul class="actions">
                                <li class="dropdown">
                                    <a href="#" data-toggle="dropdown" aria-expanded="false">
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

                        <div class="pull-left">
                            <div class="avatar-char palette-Red-400 bg">D</div>
                        </div>

                        <div class="media-body">
                            <div class="lgi-heading">Dulla vel metus scelerisque ante sollicitudin commodo purus odio</div>
                            <small class="lgi-text">Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</small>
                        </div>
                    </div>

                    <div class="list-group-item media">
                        <div class="checkbox pull-left lgi-checkbox">
                            <label>
                                <input type="checkbox" value="">
                                <i class="input-helper"></i>
                            </label>
                        </div>

                        <div class="pull-right">
                            <ul class="actions">
                                <li class="dropdown">
                                    <a href="#" data-toggle="dropdown" aria-expanded="false">
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

                        <div class="pull-left">
                            <div class="avatar-char palette-Green-400 bg">P</div>
                        </div>

                        <div class="media-body">
                            <div class="lgi-heading">Per an error perpetua, fierent fastidii recteque ad pro. Mei id brute intellegam</div>
                            <ul class="lgi-attrs">
                                <li>Date Created: 09/06/1988</li>
                                <li>Members: 78954</li>
                                <li>Published: No</li>
                            </ul>
                        </div>
                    </div>

                    <div class="list-group-item media">
                        <div class="checkbox pull-left lgi-checkbox">
                            <label>
                                <input type="checkbox" value="">
                                <i class="input-helper"></i>
                            </label>
                        </div>

                        <div class="pull-left">
                            <div class="avatar-char palette-Purple-300 bg">D</div>
                        </div>

                        <div class="pull-right">
                            <ul class="actions">
                                <li class="dropdown">
                                    <a href="#" data-toggle="dropdown" aria-expanded="false">
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

                        <div class="media-body">
                            <div class="lgi-heading">Donec congue tempus ligula, varius hendrerit mi hendrerit sit amet. Duis ac quam sit amet leo feugiat iaculis</div>
                            <small class="lgi-text">An erant explicari salutatus duo, sumo doming delicata in cum. Eos at augue viderer principes</small>

                            <ul class="lgi-attrs">
                                <li>Date Created: 09/06/1988</li>
                                <li>Members: 78954</li>
                                <li>Published: No</li>
                            </ul>
                        </div>
                    </div>

                    <div class="list-group-item media">
                        <div class="checkbox pull-left lgi-checkbox">
                            <label>
                                <input type="checkbox" value="">
                                <i class="input-helper"></i>
                            </label>
                        </div>

                        <div class="pull-left">
                            <img class="avatar-img" src="/admin/img/profile-pics/1.jpg" alt="">
                        </div>

                        <div class="pull-right">
                            <ul class="actions">
                                <li class="dropdown">
                                    <a href="#" data-toggle="dropdown" aria-expanded="false">
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

                        <div class="media-body">
                            <div class="lgi-heading">Per an error perpetua, fierent fastidii recteque ad pro. Mei id brute intellegam</div>
                            <small class="lgi-text">Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</small>
                        </div>
                    </div>

                    <div class="list-group-item media">
                        <div class="checkbox pull-left lgi-checkbox">
                            <label>
                                <input type="checkbox" value="">
                                <i class="input-helper"></i>
                            </label>
                        </div>

                        <div class="pull-left">
                            <img class="avatar-img" src="/admin/img/profile-pics/2.jpg" alt="">
                        </div>

                        <div class="pull-right">
                            <ul class="actions">
                                <li class="dropdown">
                                    <a href="#" data-toggle="dropdown" aria-expanded="false">
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

                        <div class="media-body">
                            <div class="lgi-heading">Wel ea elit iuvaret. Mea labitur definitiones ex, id atqui accusata vix, vim nibh mandamus ad</div>
                            <small class="lgi-text">Wendy create ipsum dolor sit amet, per cu solet docendi ntoenstion</small>

                            <ul class="lgi-attrs">
                                <li>Date Created: 09/06/1988</li>
                                <li>Members: 78954</li>
                                <li>Published: No</li>
                            </ul>
                        </div>
                    </div>

                    <div class="list-group-item media">
                        <div class="checkbox pull-left lgi-checkbox">
                            <label>
                                <input type="checkbox" value="">
                                <i class="input-helper"></i>
                            </label>
                        </div>

                        <div class="pull-left">
                            <img class="avatar-img" src="/admin/img/profile-pics/3.jpg" alt="">
                        </div>

                        <div class="pull-right">
                            <ul class="actions">
                                <li class="dropdown">
                                    <a href="#" data-toggle="dropdown" aria-expanded="false">
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

                        <div class="media-body">
                            <div class="lgi-heading">Per an error perpetua, fierent fastidii recteque ad pro. Mei id brute intellegam</div>

                            <ul class="lgi-attrs">
                                <li>Date Created: 11/06/1988</li>
                                <li>Members: 212</li>
                                <li>Published: Yes</li>
                            </ul>
                        </div>
                    </div>

                    <div class="list-group-item media">
                        <div class="checkbox pull-left lgi-checkbox">
                            <label>
                                <input type="checkbox" value="">
                                <i class="input-helper"></i>
                            </label>
                        </div>

                        <div class="pull-left">
                            <img class="avatar-img" src="/admin/img/profile-pics/4.jpg" alt="">
                        </div>

                        <div class="pull-right">
                            <ul class="actions">
                                <li class="dropdown">
                                    <a href="#" data-toggle="dropdown" aria-expanded="false">
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

                        <div class="media-body">
                            <div class="lgi-heading">Per an error perpetua, fierent fastidii recteque ad pro. Mei id brute intellegam</div>
                            <small class="lgi-text">Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</small>
                        </div>
                    </div>

                    <div class="list-group-item media">
                        <div class="checkbox pull-left lgi-checkbox">
                            <label>
                                <input type="checkbox" value="">
                                <i class="input-helper"></i>
                            </label>
                        </div>

                        <div class="pull-right">
                            <ul class="actions">
                                <li class="dropdown">
                                    <a href="#" data-toggle="dropdown" aria-expanded="false">
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

                        <div class="media-body">
                            <div class="lgi-heading">Dulla vel metus scelerisque ante sollicitudin commodo purus odio</div>
                            <small class="lgi-text">Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</small>
                        </div>
                    </div>

                    <div class="list-group-item media">
                        <div class="checkbox pull-left lgi-checkbox">
                            <label>
                                <input type="checkbox" value="">
                                <i class="input-helper"></i>
                            </label>
                        </div>

                        <div class="pull-right">
                            <ul class="actions">
                                <li class="dropdown">
                                    <a href="#" data-toggle="dropdown" aria-expanded="false">
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

                        <div class="media-body">
                            <div class="lgi-heading">Per an error perpetua, fierent fastidii recteque ad pro. Mei id brute intellegam</div>
                            <ul class="lgi-attrs">
                                <li>Date Created: 09/06/1988</li>
                                <li>Members: 78954</li>
                                <li>Published: No</li>
                            </ul>
                        </div>
                    </div>

                    <div class="list-group-item media">
                        <div class="checkbox pull-left lgi-checkbox">
                            <label>
                                <input type="checkbox" value="">
                                <i class="input-helper"></i>
                            </label>
                        </div>

                        <div class="pull-right">
                            <ul class="actions">
                                <li class="dropdown">
                                    <a href="#" data-toggle="dropdown" aria-expanded="false">
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

                        <div class="media-body">
                            <div class="lgi-heading">Per an error perpetua, fierent fastidii recteque ad pro. Mei id brute intellegam</div>
                            <small class="lgi-text">An erant explicari salutatus duo, sumo doming delicata in cum. Eos at augue viderer principes</small>

                            <ul class="lgi-attrs">
                                <li>Date Created: 09/06/1988</li>
                                <li>Members: 78954</li>
                                <li>Published: No</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <ul class="pagination lg-pagination">
                    <li>
                        <a href="#" aria-label="Previous">
                            <i class="zmdi zmdi-chevron-left"></i>
                        </a>
                    </li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li>
                        <a href="#" aria-label="Next">
                            <i class="zmdi zmdi-chevron-right"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

@endsection