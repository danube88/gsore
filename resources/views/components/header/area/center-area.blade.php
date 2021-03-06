<div class="header__center sticky-header p-tb-10">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-between align-items-center">
                <!-- Start Logo -->
                <div class="header__logo">
                    <a href="{{ route('index') }}" class="header__logo-link img-responsive">
                        <img class="header__logo-img img-fluid" src="{{ config('app.url') }}/img/logo/logo.png" alt="">
                    </a>
                </div> <!-- End Logo -->
                 <!-- Start Header Menu -->
                 <div class="header-menu">
                    <nav>
                        <ul class="header__nav">
                            <!--Start Single Nav link-->
                            <li class="header__nav-item pos-relative">
                                <a href="{{ route('index') }}" class="header__nav-link">Home</a>
                            </li> <!-- End Single Nav link-->

                            <!--Start Single Nav link-->
                            <li class="header__nav-item pos-relative">
                                <a href="#" class="header__nav-link">Shop <i class="fal fa-chevron-down"></i></a>
                                <span class="menu-label menu-label--red">New</span>
                                <!-- Megamenu Menu-->
                                <ul class="mega-menu pos-absolute">
                                    <li class="mega-menu__box">
                                        <!--Single Megamenu Item Menu-->
                                        <div class="mega-menu__item-box">
                                            <span class="mega-menu__title">Shop Layout</span>
                                            <ul class="mega-menu__item">
                                                <li class="mega-menu__list"><a href="{{ route('shopGridSidebarLeft') }}" class="mega-menu__link">Grid Left Sidebar</a></li>
                                                <li class="mega-menu__list pos-relative">
                                                    <a href="{{ route('shopGridSidebarRight') }}" class="mega-menu__link">Grid Right Sidebar</a>
                                                    <span class="menu-label menu-label--red">New</span>
                                                </li>
                                                <li class="mega-menu__list"><a href="{{ route('shopFullSidebar') }}" class="mega-menu__link">Full Width</a></li>
                                                <li class="mega-menu__list"><a href="{{ route('shopListSidebarLeft') }}" class="mega-menu__link">List Left Sidebar</a></li>
                                                <li class="mega-menu__list"><a href="{{ route('shopListSidebarRight') }}" class="mega-menu__link">List Right Sidebar</a></li>
                                            </ul>
                                        </div>
                                        <!--Single Megamenu Item Menu-->

                                        <!--Single Megamenu Item Menu-->
                                        <div class="mega-menu__item-box">
                                            <span class="mega-menu__title">Shop Pages</span>
                                            <ul class="mega-menu__item">
                                                <li class="mega-menu__list"><a href="{{ route('cart') }}" class="mega-menu__link">Cart</a></li>
                                                <li class="mega-menu__list"><a href="{{ route('checkout') }}" class="mega-menu__link">Checkout</a></li>
                                                <li class="mega-menu__list"><a href="{{ route('compare') }}" class="mega-menu__link">Compare</a></li>
                                                <li class="mega-menu__list pos-relative">
                                                    <a href="{{ route('empty-cart') }}" class="mega-menu__link">Empty Cart</a>
                                                    <span class="menu-label menu-label--blue">New</span>
                                                </li>
                                                <li class="mega-menu__list"><a href="{{ route('wishlist') }}" class="mega-menu__link">Wishlist</a></li>
                                                <li class="mega-menu__list"><a href="{{ route('my-account') }}" class="mega-menu__link">My Account</a></li>
                                                <li class="mega-menu__list"><a href="{{ route('login') }}" class="mega-menu__link">Login</a></li>
                                            </ul>
                                        </div>
                                        <!--Single Megamenu Item Menu-->

                                        <!--Single Megamenu Item Menu-->
                                        <div class="mega-menu__item-box">
                                            <span class="mega-menu__title">Product Single</span>
                                            <ul class="mega-menu__item">
                                                <li class="mega-menu__list"><a href="product-single-default.html" class="mega-menu__link">Simple</a></li>
                                                <li class="mega-menu__list"><a href="product-single-affiliate.html" class="mega-menu__link">Affiliate</a></li>
                                                <li class="mega-menu__list pos-relative">
                                                    <a href="product-single-group.html" class="mega-menu__link">Grouped</a>
                                                    <span class="menu-label menu-label--red">New</span>
                                                </li>
                                                <li class="mega-menu__list"><a href="product-single-variable.html" class="mega-menu__link">Variable</a></li>
                                                <li class="mega-menu__list"><a href="product-single-tab-left.html" class="mega-menu__link">Left Tab</a></li>
                                                <li class="mega-menu__list"><a href="product-single-tab-right.html" class="mega-menu__link">Right Tab</a></li>
                                            </ul>
                                        </div>
                                        <!--Single Megamenu Item Menu-->

                                        <!--Single Megamenu Item Menu-->
                                        <div class="mega-menu__item-box">
                                            <span class="mega-menu__title">Product Single</span>
                                            <ul class="mega-menu__item">
                                                <li class="mega-menu__list"><a href="product-single-slider.html" class="mega-menu__link">Single Slider</a></li>
                                                <li class="mega-menu__list"><a href="product-single-gallery-left.html" class="mega-menu__link">Gallery Left</a></li>
                                                <li class="mega-menu__list"><a href="product-single-gallery-right.html" class="mega-menu__link">Gallery Right</a></li>
                                                <li class="mega-menu__list"><a href="product-single-sticky-left.html" class="mega-menu__link">Sticky Left</a></li>
                                                <li class="mega-menu__list pos-relative">
                                                    <a href="product-single-sticky-right.html" class="mega-menu__link">Sticky Right</a>
                                                    <span class="menu-label menu-label--blue">New</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <!--Single Megamenu Item Menu-->

                                        <!--Single Megamenu Item Menu-->
                                        <div class="mega-menu__item-box">
                                            <ul class="mega-menu__item">
                                                <!--Megamenu Item Banner-->
                                                <li class="mega-menu__banner ">
                                                    <a href="product-single-default.html" class="mega-menu__banner-link">
                                                        <img src="{{ config('app.url') }}/img/banner/menu-banner.jpg" alt="" class="mega-menu__banner-img mega-menu__banner-img--vertical" />
                                                    </a>
                                                </li>
                                                <!--Megamenu Item Banner-->
                                            </ul>
                                        </div>
                                        <!--Single Megamenu Item Menu-->
                                    </li>

                                </ul>
                                <!-- Megamenu Menu-->
                            </li> <!-- Start Single Nav link-->

                            <!--Start Single Nav link-->
                            <li class="header__nav-item pos-relative">
                                <a href="#" class="header__nav-link">Custom Block <i class="fal fa-chevron-down"></i></a>
                                <!-- Megamenu Menu-->
                                <ul class="mega-menu pos-absolute">
                                    <li class="mega-menu__box">
                                        <!--Single Megamenu Item Menu-->
                                        <div class="mega-menu__item-box">
                                            <span class="mega-menu__title">Women Is Clothes & Fashion</span>
                                            <ul class="mega-menu__item">
                                                <li><p>Shop Women Is Clothing And Accessories And Get Inspired By The Latest Fashion Trends.</p></li>
                                            </ul>
                                        </div>
                                        <!--Single Megamenu Item Menu-->

                                        <!--Single Megamenu Item Menu-->
                                        <div class="mega-menu__item-box">
                                            <span class="mega-menu__title">Simple Style</span>
                                            <ul class="mega-menu__item">
                                                <li><p>A New Flattering Style With All The Comfort Of Our Linen.</p></li>
                                            </ul>
                                        </div>
                                        <!--Single Megamenu Item Menu-->

                                        <!--Single Megamenu Item Menu-->
                                        <div class="mega-menu__item-box">
                                            <span class="mega-menu__title">Easy Layers</span>
                                            <ul class="mega-menu__item">
                                                <li><p>Endless Styling Possibilities In A Collection Full Of Versatile Pieces.</p></li>
                                            </ul>
                                        </div>
                                        <!--Single Megamenu Item Menu-->

                                    </li>
                                    <!--Megamenu Item Banner-->
                                    <li class="mega-menu__banner m-t-30">
                                        <a href="product-single-default.html" class="mega-menu__banner-link">
                                            <img src="{{ config('app.url') }}/img/banner/menu-banner-2.png" alt="" class="mega-menu__banner-img mega-menu__banner-img--horaizontal">
                                        </a>
                                    </li>
                                    <!--Megamenu Item Banner-->
                                </ul>
                                <!-- Megamenu Menu-->
                            </li> <!-- Start Single Nav link-->

                            <!--Start Single Nav link-->
                            <li class="header__nav-item pos-relative">
                                <a href="#" class="header__nav-link">Blog<i class="fal fa-chevron-down"></i></a>
                                <!--Single Dropdown Menu-->
                                <ul class="dropdown__menu pos-absolute">
                                    <li class="dropdown__list">
                                        <a href="#" class="dropdown__link d-flex justify-content-between align-items-center">Blog Grid <i class="far fa-chevron-right"></i></a>
                                        <ul class="dropdown__submenu pos-absolute">
                                            <li class="dropdown__submenu-list"><a href="{{ route('blogGridSidebarLeft') }}" class="dropdown__submenu-link"> Blog Grid Left Sidebar</a></li>
                                            <li class="dropdown__submenu-list"><a href="{{ route('blogGridSidebarRight') }}" class="dropdown__submenu-link"> Blog Grid Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown__list">
                                        <a href="#" class="dropdown__link d-flex justify-content-between align-items-center">Blog List <i class="far fa-chevron-right"></i></a>
                                        <ul class="dropdown__submenu pos-absolute">
                                            <li class="dropdown__submenu-list"><a href="{{ route('blogListSidebarLeft') }}" class="dropdown__submenu-link"> Blog List Left Sidebar</a></li>
                                            <li class="dropdown__submenu-list"><a href="{{ route('blogListSidebarRight') }}" class="dropdown__submenu-link"> Blog List Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown__list">
                                        <a href="#" class="dropdown__link d-flex justify-content-between align-items-center">Blog Single <i class="far fa-chevron-right"></i></a>
                                        <ul class="dropdown__submenu pos-absolute">
                                            <li class="dropdown__submenu-list"><a href="{{ route('blogSingleSidebarLeft') }}" class="dropdown__submenu-link"> Blog Single Left Sidebar</a></li>
                                            <li class="dropdown__submenu-list"><a href="{{ route('blogSingleSidebarRight') }}" class="dropdown__submenu-link"> Blog Single Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <!--Single Dropdown Menu-->
                            </li> <!-- End Single Nav link-->

                            <!--Start Single Nav link-->
                            <li class="header__nav-item pos-relative">
                                <a href="#" class="header__nav-link">Pages <i class="fal fa-chevron-down"></i></a>
                                <span class="menu-label menu-label--blue">New</span>
                                <!--Single Dropdown Menu-->
                                <ul class="dropdown__menu pos-absolute">
                                    <li class="dropdown__list"><a href="{{ route('about') }}" class="dropdown__link">About Us</a></li>
                                    <li class="dropdown__list pos-relative">
                                        <a href="frequently-questions.html" class="dropdown__link">Frequently Questions</a>
                                        <span class="menu-label menu-label--blue">New</span>
                                    </li>
                                    <li class="dropdown__list"><a href="privacy-policy.html" class="dropdown__link">Privacy Policy</a></li>
                                    <li class="dropdown__list"><a href="404.html" class="dropdown__link">404 Page</a></li>
                                </ul>
                                <!--Single Dropdown Menu-->
                            </li> <!-- End Single Nav link-->

                            <!--Start Single Nav link-->
                            <li class="header__nav-item pos-relative">
                                    <a href="{{ route('contact') }}" class="header__nav-link">Contact Us</a>
                            </li> <!-- End Single Nav link-->
                        </ul>
                    </nav>
                </div> <!-- End Header Menu -->
                <!-- Start Wishlist-AddCart -->
                <ul class="header__user-action-icon">
                    <!-- Start Header Wishlist Box -->
                    <li>
                        <a href="my-account.html">
                            <i class="icon-users"></i>
                        </a>
                    </li> <!-- End Header Wishlist Box -->
                    <!-- Start Header Wishlist Box -->
                    <li>
                        <a href="wishlist.html">
                            <i class="icon-heart"></i>
                            <span class="item-count pos-absolute">3</span>
                        </a>
                    </li> <!-- End Header Wishlist Box -->
                    <!-- Start Header Add Cart Box -->
                    <li>
                        <a href="#offcanvas-add-cart__box" class="offcanvas-toggle">
                            <i class="icon-shopping-cart"></i>
                            <span class="wishlist-item-count pos-absolute">3</span>
                        </a>
                    </li> <!-- End Header Add Cart Box -->
                </ul>
            </div>
        </div>
    </div>
</div>
