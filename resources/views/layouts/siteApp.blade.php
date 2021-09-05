<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ::::::::::::::Favicon icon::::::::::::::-->
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" type="image/png">

    <!-- ::::::::::::::All CSS Files here :::::::::::::: -->

    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="{{ asset('css/vendor/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/plaza-icon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/bootstrap.min.css') }}">

    <!-- Plugin CSS Files -->
    <link rel="stylesheet" href="{{ asset('css/plugin/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugin/material-scrolltop.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugin/price_range_style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugin/in-number.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugin/venobox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugin/jquery.lineProgressbar.css') }}">

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <!-- <link rel="stylesheet" href="{{ asset('css/vendor/vendor.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/plugin/plugins.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/main.min.css') }}"> -->

    <!-- Main Style CSS File -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>

<body>
    <!-- ::::::  Start Header Section  ::::::  -->
    <header>
        @yield('header')
    </header>
    <!-- :::::: End Header Section ::::::  -->

    <!-- ::::::  Start  Breadcrumb Section  ::::::  -->
    <div class="page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="page-breadcrumb__menu">
                        @yield('breadcrumb')
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- ::::::  End  Breadcrumb Section  ::::::  -->

    <!-- :::::: Start Main Container Wrapper :::::: -->
    <main id="main-container" class="main-container">
        @yield('main')
    </main>
    <!-- :::::: End MainContainer Wrapper :::::: -->

    <!-- ::::::  Start  Footer ::::::  -->
    <footer class="footer m-t-100">
        @yield('footer')
    </footer>
    <!-- ::::::  End  Footer ::::::  -->

    <!-- material-scrolltop button -->
    <button class="material-scrolltop" type="button"></button>

    <!-- Start Modal Add cart -->
    <div class="modal fade" id="modalAddCart" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col text-right">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true"> <i class="fal fa-times"></i></span>
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-7">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="modal__product-img">
                                        <img class="img-fluid" src="../img/product/size-normal/product-home-1-img-1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="link--green link--icon-left"><i class="fal fa-check-square"></i>Added to cart successfully!</div>
                                    <div class="modal__product-cart-buttons m-tb-15">
                                        <a href="cart.html" class="btn btn--box  btn--tiny btn--green btn--green-hover-black btn--uppercase">View Cart</a>
                                        <a href="checkout.html" class="btn btn--box  btn--tiny btn--green btn--green-hover-black btn--uppercaset">Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 modal__border">
                            <ul class="modal__product-shipping-info">
                                <li class="link--icon-left"><i class="icon-shopping-cart"></i> There Are 5 Items In Your Cart.</li>
                                <li>TOTAL PRICE: <span>$187.00</span></li>
                                <li><a href="#" class="btn text-underline color-green" data-dismiss="modal">CONTINUE SHOPPING</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div> <!-- End Modal Add cart -->

    <!-- Start Modal Quickview cart -->
    <div class="modal fade" id="modalQuickView" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col text-right">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true"> <i class="fal fa-times"></i></span>
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="product-gallery-box m-b-60">
                                    <div class="modal-product-image--large">
                                        <img class="img-fluid" src="../img/product/gallery/gallery-large/product-gallery-large-1.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="product-details-box">
                                    <h5 class="title title--normal m-b-20">Aliquam lobortis</h5>
                                    <div class="product__price">
                                        <span class="product__price-del">$35.90</span>
                                        <span class="product__price-reg">$31.69</span>
                                    </div>
                                    <ul class="product__review m-t-15">
                                        <li class="product__review--fill"><i class="icon-star"></i></li>
                                        <li class="product__review--fill"><i class="icon-star"></i></li>
                                        <li class="product__review--fill"><i class="icon-star"></i></li>
                                        <li class="product__review--fill"><i class="icon-star"></i></li>
                                        <li class="product__review--blank"><i class="icon-star"></i></li>
                                    </ul>
                                    <div class="product__desc m-t-25 m-b-30">
                                        <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will</p>
                                    </div>

                                    <div class="product-var p-t-30">
                                        <div class="product-quantity product-var__item d-flex align-items-center flex-wrap">
                                            <span class="product-var__text">Quantity: </span>
                                            <form class="modal-quantity-scale m-l-20">
                                                <div class="value-button" id="modal-decrease" onclick="decreaseValueModal()">-</div>
                                                <input type="number" id="modal-number" value="1" />
                                                <div class="value-button" id="modal-increase" onclick="increaseValueModal()">+</div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="product-links">
                                        <div class="product-social m-tb-30">
                                            <span>SHARE THIS PRODUCT</span>
                                            <ul class="product-social-link">
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Modal Quickview cart -->


    <!-- Vendor JS Files -->
    <script src="{{ asset('js/vendor/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/vendor/modernizr-3.7.1.min.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/vendor/bootstrap.bundle.min.js') }}"></script>

    <!-- Plugins JS Files -->
    <script src="{{ asset('js/plugin/slick.min.js') }}"></script>
    <script src="{{ asset('js/plugin/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('js/plugin/material-scrolltop.js') }}"></script>
    <script src="{{ asset('js/plugin/price_range_script.js') }}"></script>
    <script src="{{ asset('js/plugin/in-number.js') }}"></script>
    <script src="{{ asset('js/plugin/jquery.elevateZoom-3.0.8.min.js') }}"></script>
    <script src="{{ asset('js/plugin/venobox.min.js') }}"></script>
    <script src="{{ asset('js/plugin/jquery.waypoints.js') }}"></script>
    <script src="{{ asset('js/plugin/jquery.lineProgressbar.js') }}"></script>
    @stack('scripts')

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <!-- <script src="{{ asset('js/vendor/vendor.min.js') }}"></script>
    <script src="{{ asset('js/plugin/plugins.min.js') }}"></script> -->

    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
