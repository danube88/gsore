<div class="container">
            <div class="row flex-column-reverse flex-lg-row-reverse">
                <!-- Start Leftside - Sidebar Widgets -->
                <div class="col-lg-3">
                    <div class="sidebar">
                        <!-- Start Single Sidebar Widget - Recent Post -->
                        <x-blog.section.post/>
                        <!-- End Single Sidebar Widget - Recent Post  -->

                        <!-- Start Single Sidebar Widget - Custom Menu -->
                        <x-blog.section.menu/>
                        <!-- End Single Sidebar Widget - Custom Menu -->

                        <!-- ::::::  Start Single Sidebar Widget - Tag   ::::::  -->
                        <x-blog.section.tag/>
                        <!-- ::::::  End Single Sidebar Widget - Recent Post   ::::::  -->

                    </div>
                </div>  <!-- End Left Sidebar  Widgets-->

                 <!-- Start Rightside - Content -->
                <div class="col-lg-9">
                    <div class="blog">
                        <x-blog.single-sidebar.section.blog/>
                    </div>

                    <!-- Start Blog Comment -->
                    <div class="blog blog--comment m-t-100">
                        <x-blog.single-sidebar.section.blog-comment/>
                    </div>  <!-- End Blog Comment -->

                    <!-- Start Blog Comment Form -->
                    <div class="blog blog--comment-form m-t-40">
                        <x-blog.single-sidebar.section.blog-comment-form/>
                    </div> <!-- End Blog Comment Form -->

                </div>  <!-- Start Rightside - Content -->

            </div>
        </div>
