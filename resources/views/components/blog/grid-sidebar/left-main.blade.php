<div class="container">
            <div class="row flex-column-reverse flex-lg-row">
                <!-- Start Leftside - Sidebar Widgets -->
                <div class="col-lg-3">
                    <div class="sidebar">
                        <!-- Start Single Sidebar Widget - Custom Menu -->
                        <x-blog.grid-sidebar.section.menu/>
                        <!-- End Single Sidebar Widget - Custom Menu -->

                        <!-- Start Single Sidebar Widget - Recent Post -->
                        <x-blog.grid-sidebar.section.post/>
                        <!-- End Single Sidebar Widget - Recent Post  -->

                        <!-- ::::::  Start Single Sidebar Widget - Tag   ::::::  -->
                        <x-blog.grid-sidebar.section.tag/>
                        <!-- ::::::  End Single Sidebar Widget - Recent Post   ::::::  -->

                    </div>
                </div>  <!-- End Left Sidebar  Widgets-->

                <!-- Start Rightside - Blog Grid Content -->
                <div class="col-lg-9">
                    <div class="blog">
                        <div class="row">
                            <!-- Start Single Blog Grid -->
                            <div class="col-md-6">
                                <div class="blog__type-grid">
                                    <div class="blog__img"><a href=""><img src="{{ URL::asset('img/blog/feed/blog-feed-home-1-img-1.jpg') }}" alt=""></a></div>

                                    <div class="blog__content">
                                        <a href=""><h3 class="blog__title m-t-25">Consectetur Adipisicing</h3></a>
                                        <div class="blog__archive m-t-20">
                                            <a href="#" class="link--gray link--icon-left m-r-30"><i class="far fa-calendar"></i> Oct 29, 2020</a>
                                            <a href="#" class="link--gray link--icon-left"><i class="far fa-user"></i> Jhon Doe</a>
                                        </div>
                                        <div class="para m-tb-20">
                                            <p class="para__text">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus expedita quo voluptate, esse ratione facilis quibusdam vel ad, quas ut reiciendis neque voluptates adipisci laborum, dolor saepe natus.
                                            </p>
                                        </div>
                                        <a class="btn btn--radius btn--small btn--black btn--black-hover-green" href="blog-single-sidebar-left.html">Read More</a>
                                    </div>
                                </div>
                            </div> <!-- End Single Blog Grid -->
                            <!-- Start Single Blog Grid -->
                            <div class="col-md-6">
                                <div class="blog__type-grid">
                                    <div class="inner-slider inner-slider-grid-1 pos-relative">
                                        <div class="blog__img"><img src="{{ URL::asset('img/blog/feed/blog-feed-home-1-img-2.jpg') }}" alt=""></div>
                                        <div class="blog__img"><img src="{{ URL::asset('img/blog/feed/blog-feed-home-1-img-1.jpg') }}" alt=""></div>
                                        <div class="blog__img"><img src="{{ URL::asset('img/blog/feed/blog-feed-home-1-img-3.jpg') }}" alt=""></div>
                                    </div>
                                    <div class="blog__content">
                                        <a href=""><h3 class="blog__title m-t-25">Without Very Darkness</h3></a>
                                        <div class="blog__archive m-t-20">
                                            <a href="#" class="link--gray link--icon-left m-r-30"><i class="far fa-calendar"></i> Jul 9, 2020</a>
                                            <a href="#" class="link--gray link--icon-left"><i class="far fa-user"></i> Jhon Doe</a>
                                        </div>
                                        <div class="para m-tb-20">
                                            <p class="para__text">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus expedita quo voluptate, esse ratione facilis quibusdam vel ad, quas ut reiciendis neque voluptates adipisci laborum, dolor saepe natus.
                                            </p>
                                        </div>
                                        <a class="btn btn--radius btn--small btn--black btn--black-hover-green" href="blog-single-sidebar-left.html">Read More</a>
                                    </div>
                                </div>
                            </div> <!-- End Single Blog Grid -->
                            <!-- Start Single Blog Grid -->
                            <div class="col-md-6">
                                <div class="blog__type-grid">
                                    <div class="blog__img">
                                        <div class="blog__video pos-relative">
                                            <img src="{{ URL::asset('img/blog/feed/blog-feed-home-1-img-4.jpg') }}" alt="">
                                            <a class="popup-icon vinobox-popup pos-absolute" data-autoplay="true" data-vbtype="video" href="https://youtu.be/QQHLGlB4Dpk?list=PLk25BQFrj7wHgCkzPuejFXJTiFIam-MVq"><i class="fal fa-play"></i></a>
                                        </div>
                                    </div>

                                    <div class="blog__content">
                                        <a href=""><h3 class="blog__title m-t-25">How to Diet Properly</h3></a>
                                        <div class="blog__archive m-t-20">
                                            <a href="#" class="link--gray link--icon-left m-r-30"><i class="far fa-calendar"></i> Mar 3, 2020</a>
                                            <a href="#" class="link--gray link--icon-left"><i class="far fa-user"></i> Jhon Doe</a>
                                        </div>
                                        <div class="para m-tb-20">
                                            <p class="para__text">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus expedita quo voluptate, esse ratione facilis quibusdam vel ad, quas ut reiciendis neque voluptates adipisci laborum, dolor saepe natus.
                                            </p>
                                        </div>
                                        <a class="btn btn--radius btn--small btn--black btn--black-hover-green" href="blog-single-sidebar-left.html">Read More</a>
                                    </div>
                                </div>
                            </div> <!-- End Single Blog Grid -->
                            <!-- Start Single Blog Grid -->
                            <div class="col-md-6">
                                <div class="blog__type-grid">
                                    <div class="blog__img">
                                        <iframe class="embed-responsive-item" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/users/182537870&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=true"></iframe>
                                    </div>

                                    <div class="blog__content">
                                        <a href=""><h3 class="blog__title m-t-25">Remaining Essential Foods</h3></a>
                                        <div class="blog__archive m-t-20">
                                            <a href="#" class="link--gray link--icon-left m-r-30"><i class="far fa-calendar"></i> Feb 11, 2020</a>
                                            <a href="#" class="link--gray link--icon-left"><i class="far fa-user"></i> Jhon Doe</a>
                                        </div>
                                        <div class="para m-tb-20">
                                            <p class="para__text">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus expedita quo voluptate, esse ratione facilis quibusdam vel ad, quas ut reiciendis neque voluptates adipisci laborum, dolor saepe natus.
                                            </p>
                                        </div>
                                        <a class="btn btn--radius btn--small btn--black btn--black-hover-green" href="blog-single-sidebar-left.html">Read More</a>
                                    </div>
                                </div>
                            </div> <!-- End Single Blog Grid -->
                        </div>
                    </div>

                    <div class="page-pagination">
                        <ul class="page-pagination__list">
                            <li class="page-pagination__item"><a class="page-pagination__link"  href="#">Prev</a>
                            <li class="page-pagination__item"><a class="page-pagination__link active"  href="#">1</a></li>
                            <li class="page-pagination__item"><a class="page-pagination__link"  href="#">2</a></li>
                            <li class="page-pagination__item"><a class="page-pagination__link"  href="#">Next</a>
                            </li>
                          </ul>
                    </div>
                </div>  <!-- Start Rightside - Blog Grid Content -->

            </div>
        </div>
