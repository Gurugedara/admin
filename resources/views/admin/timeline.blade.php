@extends('admin.layouts.app')
@section('content')
            <section id="content">
                <div class="container">
                    <div class="c-header">
                        <h2>Photo Gallery</h2>
                    </div>

                    <div class="card">
                        <div class="action-header clearfix palette-Teal-400 bg">
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
                            <div class="p-timeline">
                                <div class="pt-line c-gray text-right">
                                    <span class="d-block">2015</span>
                                    05/08
                                </div>

                                <div class="pt-body">
                                    <h2 class="ptb-title">Mallinda's Collection</h2>

                                    <div class="lightbox clearfix">
                                        <div data-src="media/gallery/1.jpg">
                                            <div class="lightbox-item">
                                                <img src="media/gallery/thumbs/1.jpg" alt="" />
                                            </div>
                                        </div>

                                        <div data-src="media/gallery/2.jpg">
                                            <div class="lightbox-item">
                                                <img src="media/gallery/thumbs/2.jpg" alt="" />
                                            </div>
                                        </div>

                                        <div data-src="media/gallery/3.jpg">
                                            <div class="lightbox-item p-item">
                                                <img src="media/gallery/thumbs/3.jpg" alt="" />
                                            </div>
                                        </div>

                                        <div data-src="media/gallery/4.jpg">
                                            <div class="lightbox-item p-item">
                                                <img src="media/gallery/thumbs/4.jpg" alt="" />
                                            </div>
                                        </div>

                                        <div data-src="media/gallery/5.jpg">
                                            <div class="lightbox-item p-item">
                                                <img src="media/gallery/thumbs/5.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div data-src="media/gallery/6.jpg">
                                            <div class="lightbox-item p-item">
                                                <img src="media/gallery/thumbs/6.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div data-src="media/gallery/7.jpg">
                                            <div class="lightbox-item p-item">
                                                <img src="media/gallery/thumbs/7.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div data-src="media/gallery/8.jpg">
                                            <div class="lightbox-item p-item">
                                                <img src="media/gallery/thumbs/8.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div data-src="media/gallery/9.jpg">
                                            <div class="lightbox-item p-item">
                                                <img src="media/gallery/thumbs/9.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div data-src="media/gallery/10.jpg">
                                            <div class="lightbox-item p-item">
                                                <img src="media/gallery/thumbs/10.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div data-src="media/gallery/11.jpg">
                                            <div class="lightbox-item p-item">
                                                <img src="media/gallery/thumbs/11.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div data-src="media/gallery/12.jpg">
                                            <div class="lightbox-item p-item">
                                                <img src="media/gallery/thumbs/12.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div data-src="media/gallery/13.jpg">
                                            <div class="lightbox-item p-item">
                                                <img src="media/gallery/thumbs/13.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div data-src="media/gallery/14.jpg">
                                            <div class="lightbox-item p-item">
                                                <img src="media/gallery/thumbs/14.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div data-src="media/gallery/15.jpg">
                                            <div class="lightbox-item p-item">
                                                <img src="media/gallery/thumbs/15.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div data-src="media/gallery/16.jpg">
                                            <div class="lightbox-item p-item">
                                                <img src="media/gallery/thumbs/16.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div data-src="media/gallery/17.jpg">
                                            <div class="lightbox-item p-item">
                                                <img src="media/gallery/thumbs/7.jpg" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="p-timeline">
                                <div class="pt-line c-gray text-right">
                                    <span class="d-block">2015</span>
                                    10/07
                                </div>

                                <div class="pt-body">
                                    <h2 class="ptb-title">Trip to Orbit</h2>

                                    <div class="lightbox clearfix">
                                        <div data-src="media/gallery/10.jpg">
                                            <div class="lightbox-item p-item">
                                                <img src="media/gallery/thumbs/10.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div data-src="media/gallery/11.jpg">
                                            <div class="lightbox-item p-item">
                                                <img src="media/gallery/thumbs/11.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div data-src="media/gallery/12.jpg">
                                            <div class="lightbox-item p-item">
                                                <img src="media/gallery/thumbs/12.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div data-src="media/gallery/13.jpg">
                                            <div class="lightbox-item p-item">
                                                <img src="media/gallery/thumbs/13.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div data-src="media/gallery/14.jpg">
                                            <div class="lightbox-item p-item">
                                                <img src="media/gallery/thumbs/14.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div data-src="media/gallery/15.jpg">
                                            <div class="lightbox-item p-item">
                                                <img src="media/gallery/thumbs/15.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div data-src="media/gallery/16.jpg">
                                            <div class="lightbox-item p-item">
                                                <img src="media/gallery/thumbs/16.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div data-src="media/gallery/17.jpg">
                                            <div class="lightbox-item p-item">
                                                <img src="media/gallery/thumbs/7.jpg" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="p-timeline">
                                <div class="pt-line c-gray text-right">
                                    <span class="d-block">2015</span>
                                    12/06
                                </div>

                                <div class="pt-body">
                                    <h2 class="ptb-title">Purchased for print</h2>

                                    <div class="lightbox clearfix">

                                        <div data-src="media/gallery/4.jpg">
                                            <div class="lightbox-item p-item">
                                                <img src="media/gallery/thumbs/4.jpg" alt="" />
                                            </div>
                                        </div>

                                        <div data-src="media/gallery/5.jpg">
                                            <div class="lightbox-item p-item">
                                                <img src="media/gallery/thumbs/5.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div data-src="media/gallery/6.jpg">
                                            <div class="lightbox-item p-item">
                                                <img src="media/gallery/thumbs/6.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div data-src="media/gallery/7.jpg">
                                            <div class="lightbox-item p-item">
                                                <img src="media/gallery/thumbs/7.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div data-src="media/gallery/8.jpg">
                                            <div class="lightbox-item p-item">
                                                <img src="media/gallery/thumbs/8.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div data-src="media/gallery/9.jpg">
                                            <div class="lightbox-item p-item">
                                                <img src="media/gallery/thumbs/9.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div data-src="media/gallery/10.jpg">
                                            <div class="lightbox-item p-item">
                                                <img src="media/gallery/thumbs/10.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div data-src="media/gallery/11.jpg">
                                            <div class="lightbox-item p-item">
                                                <img src="media/gallery/thumbs/11.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div data-src="media/gallery/12.jpg">
                                            <div class="lightbox-item p-item">
                                                <img src="media/gallery/thumbs/12.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div data-src="media/gallery/13.jpg">
                                            <div class="lightbox-item p-item">
                                                <img src="media/gallery/thumbs/13.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div data-src="media/gallery/14.jpg">
                                            <div class="lightbox-item p-item">
                                                <img src="media/gallery/thumbs/14.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div data-src="media/gallery/15.jpg">
                                            <div class="lightbox-item p-item">
                                                <img src="media/gallery/thumbs/15.jpg" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="p-timeline">
                                <div class="pt-line c-gray text-right">
                                    <span class="d-block">2015</span>
                                    01/06
                                </div>

                                <div class="pt-body">
                                    <h2 class="ptb-title">For Website</h2>

                                    <div class="lightbox clearfix">
                                        <div data-src="media/gallery/1.jpg">
                                            <div class="lightbox-item">
                                                <img src="media/gallery/thumbs/1.jpg" alt="" />
                                            </div>
                                        </div>

                                        <div data-src="media/gallery/2.jpg">
                                            <div class="lightbox-item">
                                                <img src="media/gallery/thumbs/2.jpg" alt="" />
                                            </div>
                                        </div>

                                        <div data-src="media/gallery/3.jpg">
                                            <div class="lightbox-item p-item">
                                                <img src="media/gallery/thumbs/3.jpg" alt="" />
                                            </div>
                                        </div>

                                        <div data-src="media/gallery/4.jpg">
                                            <div class="lightbox-item p-item">
                                                <img src="media/gallery/thumbs/4.jpg" alt="" />
                                            </div>
                                        </div>

                                        <div data-src="media/gallery/5.jpg">
                                            <div class="lightbox-item p-item">
                                                <img src="media/gallery/thumbs/5.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div data-src="media/gallery/6.jpg">
                                            <div class="lightbox-item p-item">
                                                <img src="media/gallery/thumbs/6.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div data-src="media/gallery/7.jpg">
                                            <div class="lightbox-item p-item">
                                                <img src="media/gallery/thumbs/7.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div data-src="media/gallery/8.jpg">
                                            <div class="lightbox-item p-item">
                                                <img src="media/gallery/thumbs/8.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div data-src="media/gallery/9.jpg">
                                            <div class="lightbox-item p-item">
                                                <img src="media/gallery/thumbs/9.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div data-src="media/gallery/10.jpg">
                                            <div class="lightbox-item p-item">
                                                <img src="media/gallery/thumbs/10.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div data-src="media/gallery/11.jpg">
                                            <div class="lightbox-item p-item">
                                                <img src="media/gallery/thumbs/11.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div data-src="media/gallery/12.jpg">
                                            <div class="lightbox-item p-item">
                                                <img src="media/gallery/thumbs/12.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div data-src="media/gallery/13.jpg">
                                            <div class="lightbox-item p-item">
                                                <img src="media/gallery/thumbs/13.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div data-src="media/gallery/14.jpg">
                                            <div class="lightbox-item p-item">
                                                <img src="media/gallery/thumbs/14.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div data-src="media/gallery/15.jpg">
                                            <div class="lightbox-item p-item">
                                                <img src="media/gallery/thumbs/15.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div data-src="media/gallery/16.jpg">
                                            <div class="lightbox-item p-item">
                                                <img src="media/gallery/thumbs/16.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div data-src="media/gallery/17.jpg">
                                            <div class="lightbox-item p-item">
                                                <img src="media/gallery/thumbs/7.jpg" alt="" />
                                            </div>
                                        </div>

                                        <div data-src="media/gallery/4.jpg">
                                            <div class="lightbox-item p-item">
                                                <img src="media/gallery/thumbs/4.jpg" alt="" />
                                            </div>
                                        </div>

                                        <div data-src="media/gallery/5.jpg">
                                            <div class="lightbox-item p-item">
                                                <img src="media/gallery/thumbs/5.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div data-src="media/gallery/6.jpg">
                                            <div class="lightbox-item p-item">
                                                <img src="media/gallery/thumbs/6.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div data-src="media/gallery/7.jpg">
                                            <div class="lightbox-item p-item">
                                                <img src="media/gallery/thumbs/7.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div data-src="media/gallery/8.jpg">
                                            <div class="lightbox-item p-item">
                                                <img src="media/gallery/thumbs/8.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div data-src="media/gallery/9.jpg">
                                            <div class="lightbox-item p-item">
                                                <img src="media/gallery/thumbs/9.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div data-src="media/gallery/10.jpg">
                                            <div class="lightbox-item p-item">
                                                <img src="media/gallery/thumbs/10.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div data-src="media/gallery/11.jpg">
                                            <div class="lightbox-item p-item">
                                                <img src="media/gallery/thumbs/11.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div data-src="media/gallery/12.jpg">
                                            <div class="lightbox-item p-item">
                                                <img src="media/gallery/thumbs/12.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div data-src="media/gallery/13.jpg">
                                            <div class="lightbox-item p-item">
                                                <img src="media/gallery/thumbs/13.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div data-src="media/gallery/14.jpg">
                                            <div class="lightbox-item p-item">
                                                <img src="media/gallery/thumbs/14.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div data-src="media/gallery/15.jpg">
                                            <div class="lightbox-item p-item">
                                                <img src="media/gallery/thumbs/15.jpg" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="p-timeline">
                                <div class="pt-line c-gray text-right">
                                    <span class="d-block">2015</span>
                                    22/04
                                </div>

                                <div class="pt-body">
                                    <h2 class="ptb-title">To Print and Review</h2>

                                    <div class="lightbox clearfix">
                                        <div data-src="media/gallery/13.jpg">
                                            <div class="lightbox-item p-item">
                                                <img src="media/gallery/thumbs/13.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div data-src="media/gallery/10.jpg">
                                            <div class="lightbox-item p-item">
                                                <img src="media/gallery/thumbs/10.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div data-src="media/gallery/11.jpg">
                                            <div class="lightbox-item p-item">
                                                <img src="media/gallery/thumbs/11.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div data-src="media/gallery/12.jpg">
                                            <div class="lightbox-item p-item">
                                                <img src="media/gallery/thumbs/12.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div data-src="media/gallery/14.jpg">
                                            <div class="lightbox-item p-item">
                                                <img src="media/gallery/thumbs/14.jpg" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
@endsection