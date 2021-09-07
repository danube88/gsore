<div class="container">
    <div class="row flex-column-reverse flex-lg-row">
        <!-- Start Leftside - Sidebar Widgets -->
        <div class="col-lg-3">
            <div class="sidebar">
                <!-- Start Single Sidebar Widget - Custom Menu -->
                <x-blog.section.menu/>
                <!-- End Single Sidebar Widget - Custom Menu -->

                <!-- Start Single Sidebar Widget - Recent Post -->
                <x-blog.section.post/>
                <!-- End Single Sidebar Widget - Recent Post  -->

                <!-- ::::::  Start Single Sidebar Widget - Tag   ::::::  -->
                <x-blog.section.tag/>
                <!-- ::::::  End Single Sidebar Widget - Recent Post   ::::::  -->
            </div>
        </div>  <!-- End Left Sidebar  Widgets-->

        <!-- Start Rightside - Blog Grid Content -->
        <div class="col-lg-9">
            <div class="blog">
                <x-blog.grid-sidebar.section.blog/>
            </div>

            <div class="page-pagination">
                <ul class="page-pagination__list">
                    <li class="page-pagination__item"><a class="page-pagination__link"  href="#">Prev</a>
                    <li class="page-pagination__item"><a class="page-pagination__link active"  href="#">1</a></li>
                    <li class="page-pagination__item"><a class="page-pagination__link"  href="#">2</a></li>
                    <li class="page-pagination__item"><a class="page-pagination__link"  href="#">Next</a></li>
                </ul>
            </div>
        </div>  <!-- Start Rightside - Blog Grid Content -->

    </div>
</div>
