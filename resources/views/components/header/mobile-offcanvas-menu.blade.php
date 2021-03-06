<div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
            <div class="offcanvas__top">
                <span class="offcanvas__top-text"></span>
                <button class="offcanvas-close"><i class="fal fa-times"></i></button>
            </div>

            <div class="offcanvas-inner">
                <ul class="user-set-role d-flex justify-content-between m-tb-15">
                    <x-header.select.select-language />
                    <x-header.select.select-currency />
                </ul>
                <form class="header-search m-tb-15" action="#" method="post">
                    <div class="header-search__content pos-relative">
                        <input type="search" name="header-search" placeholder="Search our store" required>
                        <button class="pos-absolute" type="submit"><i class="icon-search"></i></button>
                    </div>
                </form>
                 <!-- Start Mobile User Action -->
                <ul class="header__user-action-icon m-tb-15 text-center">
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
                        <a href="cart.html">
                            <i class="icon-shopping-cart"></i>
                            <span class="wishlist-item-count pos-absolute">3</span>
                        </a>
                    </li> <!-- End Header Add Cart Box -->
                </ul>  <!-- End Mobile User Action -->
                <div class="offcanvas-menu">
                    <ul>
                        <li><a href="{{ route('index') }}"><span>Home</span></a></li>
                        <li>
                            <a href="#"><span>Shop</span></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">Shop Layout</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('shopGridSidebarLeft') }}">Grid Left Sidebar</a></li>
                                        <li><a href="{{ route('shopGridSidebarRight') }}">Grid Right Sidebar</a></li>
                                        <li><a href="{{ route('shopFullSidebar') }}">Full Width</a></li>
                                        <li><a href="{{ route('shopListSidebarLeft') }}">List Left Sidebar</a></li>
                                        <li><a href="{{ route('shopListSidebarRight') }}">List Right Sidebar</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">Shop Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('cart') }}">Cart</a></li>
                                        <li><a href="{{ route('checkout') }}">Checkout</a></li>
                                        <li><a href="{{ route('compare') }}">Compare</a></li>
                                        <li><a href="{{ route('empty-cart') }}">Empty Cart</a></li>
                                        <li><a href="{{ route('wishlist') }}">Wishlist</a></li>
                                        <li><a href="{{ route('my-account') }}">My Account</a></li>
                                        <li><a href="{{ route('login') }}">Login</a></li>

                                    </ul>
                                </li>
                            </ul>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">Product Single</a>
                                    <ul class="sub-menu">
                                        <li><a href="product-single-default.html">Simple</a></li>
                                        <li><a href="product-single-affiliate.html">Affiliate</a></li>
                                        <li><a href="product-single-group.html">Grouped</a></li>
                                        <li><a href="product-single-variable.html">Variable</a></li>
                                        <li><a href="product-single-tab-left.html">Left Tab</a></li>
                                        <li><a href="product-single-tab-right.html">Right Tab</a></li>
                                        <li><a href="product-single-slider.html">Single Slider</a></li>
                                        <li><a href="product-single-gallery-left.html">Gallery Left</a></li>
                                        <li><a href="product-single-gallery-right.html">Gallery Right</a></li>
                                        <li><a href="product-single-sticky-left.html">Sticky Left</a></li>
                                        <li><a href="product-single-sticky-right.html">Sticky Right</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><span>Blogs</span></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">Blog Grid</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('blogGridSidebarLeft') }}"> Blog Grid Left Sidebar</a></li>
                                        <li><a href="{{ route('blogGridSidebarRight') }}"> Blog Grid Right Sidebar</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Blog List</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('blogListSidebarLeft') }}"> Blog List Left Sidebar</a></li>
                                        <li><a href="{{ route('blogListSidebarRight') }}"> Blog List Right Sidebar</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Blog Single</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('blogSingleSidebarLeft') }}"> Blog Single Left Sidebar</a></li>
                                        <li><a href="{{ route('blogSingleSidebarRight') }}"> Blog Single Right Sidebar</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><span>Pages</span></a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('about') }}">About Us</a></li>
                                <li><a href="frequently-questions.html">Frequently Questions</a></li>
                                <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                <li><a href="404.html">404 Page</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('contact') }}">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <ul class="offcanvas__social-nav m-t-50">
                <li class="offcanvas__social-list"><a href="#" class="offcanvas__social-link"><i class="fab fa-facebook-f"></i></a></li>
                <li class="offcanvas__social-list"><a href="#" class="offcanvas__social-link"><i class="fab fa-twitter"></i></a></li>
                <li class="offcanvas__social-list"><a href="#" class="offcanvas__social-link"><i class="fab fa-youtube"></i></a></li>
                <li class="offcanvas__social-list"><a href="#" class="offcanvas__social-link"><i class="fab fa-google-plus-g"></i></a></li>
                <li class="offcanvas__social-list"><a href="#" class="offcanvas__social-link"><i class="fab fa-instagram"></i></a></li>
            </ul>
        </div> <!--  End Mobile-offcanvas Menu Section   -->
