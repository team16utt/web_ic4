<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="Anil z" name="author">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Shopwise is Powerful features and You Can Use The Perfect Build this Template For Any eCommerce Website. The template is built for sell Fashion Products, Shoes, Bags, Cosmetics, Clothes, Sunglasses, Furniture, Kids Products, Electronics, Stationery Products and Sporting Goods.">
    <meta name="keywords"
        content="ecommerce, electronics store, Fashion store, furniture store,  bootstrap 4, clean, minimal, modern, online store, responsive, retail, shopping, ecommerce store">

    <!-- SITE TITLE -->
    <title>Shopwise - eCommerce Bootstrap 4 HTML Template</title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>/public/client//assets/images/favicon.png">
    <!-- Animation CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/public/client//assets/css/animate.css">
    <!-- Latest Bootstrap min CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/public/client//assets/bootstrap/css/bootstrap.min.css">
    <!-- Google Font -->
    <link href="<?= base_url() ?>/public/client//assets/css.css?family=Roboto:100,300,400,500,700,900&display=swap" rel="stylesheet">
    <link href="<?= base_url() ?>/public/client//assets/css-1.css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/public/client//assets/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/client//assets/css/ionicons.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/client//assets/css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/client//assets/css/linearicons.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/client//assets/css/flaticon.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/client//assets/css/simple-line-icons.css">
    <!--- owl carousel CSS-->
    <link rel="stylesheet" href="<?= base_url() ?>/public/client//assets/owlcarousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/client//assets/owlcarousel/css/owl.theme.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/client//assets/owlcarousel/css/owl.theme.default.min.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/public/client//assets/css/magnific-popup.css">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/public/client//assets/css/slick.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/client//assets/css/slick-theme.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/public/client//assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/client//assets/css/responsive.css">
    

    <!-- Hotjar Tracking Code for bestwebcreator.com -->
    <script>
        (function (h, o, t, j, a, r) {
            h.hj = h.hj || function () { (h.hj.q = h.hj.q || []).push(arguments) };
            h._hjSettings = { hjid: 2073024, hjsv: 6 };
            a = o.getElementsByTagName('head')[0];
            r = o.createElement('script'); r.async = 1;
            r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
            a.appendChild(r);
        })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
    </script>

</head>

<body>

    <!-- LOADER -->
    <!-- <div class="preloader loaded">
    <div class="lds-ellipsis">
        <span></span>
        <span></span>
        <span></span>
    </div>
</div> -->
    <!-- END LOADER -->

    <!-- Home Popup Section -->
    <div class="modal fade subscribe_popup" id="onload-popup" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="ion-ios-close-empty"></i></span>
                    </button>
                    <div class="row no-gutters">
                        <div class="col-sm-7">
                            <div class="popup_content text-left">
                                <div class="popup-text">
                                    <div class="heading_s1">
                                        <h3>Subscribe Newsletter and Get 25% Discount!</h3>
                                    </div>
                                    <p>Subscribe to the newsletter to receive updates about new products.</p>
                                </div>
                                <form method="post">
                                    <div class="form-group">
                                        <input name="email" required="" type="email" class="form-control"
                                            placeholder="Enter Your Email">
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-fill-out btn-block text-uppercase" title="Subscribe"
                                            type="submit">Subscribe</button>
                                    </div>
                                </form>
                                <div class="chek-form">
                                    <div class="custome-checkbox">
                                        <input class="form-check-input" type="checkbox" name="checkbox"
                                            id="exampleCheckbox3" value="">
                                        <label class="form-check-label" for="exampleCheckbox3"><span>Don't show this
                                                popup again!</span></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="background_bg h-100" data-img-src="<?= base_url() ?>/public/client//assets/images/popup_img3.jpg"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Screen Load Popup Section -->

    <!-- START HEADER -->
    <header class="header_wrap">

        <div class="middle-header dark_skin">
            <div class="custom-container">
                <div class="nav_block">
                    <a class="navbar-brand" href="index.html">
                        <img class="logo_light" src="<?= base_url() ?>/public/client//assets/images/logo_light.png" alt="logo">
                        <img class="logo_dark" src="<?= base_url() ?>/public/client//assets/images/logo_dark.png" alt="logo">
                    </a>
                    <div class="product_search_form rounded_input">
                        <form>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="custom_select">
                                        <select class="first_null">
                                            <option value="">All Category</option>
                                            <option value="Dresses">Dresses</option>
                                            <option value="Shirt-Tops">Shirt & Tops</option>
                                            <option value="T-Shirt">T-Shirt</option>
                                            <option value="Pents">Pents</option>
                                            <option value="Jeans">Jeans</option>
                                        </select>
                                    </div>
                                </div>
                                <input class="form-control" placeholder="Search Product..." required="" type="text">
                                <button type="submit" class="search_btn2"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <ul class="navbar-nav attr-nav align-items-center">
                        <li><a href="#" class="nav-link"><i class="linearicons-user"></i></a></li>
                        <li class="dropdown cart_dropdown"><a class="nav-link cart_trigger" href="#"
                                data-toggle="dropdown"><i class="linearicons-bag2"></i><span
                                    class="cart_count">2</span><span class="amount"><span
                                        class="currency_symbol">$</span>159.00</span></a>
                            <div class="cart_box cart_right dropdown-menu dropdown-menu-right">
                                <ul class="cart_list">
                                    <li>
                                        <a href="#" class="item_remove"><i class="ion-close"></i></a>
                                        <a href="#"><img src="<?= base_url() ?>/public/client//assets/images/cart_thamb1.jpg" alt="cart_thumb1">Variable
                                            product 001</a>
                                        <span class="cart_quantity"> 1 x <span class="cart_amount"> <span
                                                    class="price_symbole">$</span></span>78.00</span>
                                    </li>
                                    <li>
                                        <a href="#" class="item_remove"><i class="ion-close"></i></a>
                                        <a href="#"><img src="<?= base_url() ?>/public/client//assets/images/cart_thamb2.jpg" alt="cart_thumb2">Ornare
                                            sed consequat</a>
                                        <span class="cart_quantity"> 1 x <span class="cart_amount"> <span
                                                    class="price_symbole">$</span></span>81.00</span>
                                    </li>
                                </ul>
                                <div class="cart_footer">
                                    <p class="cart_total"><strong>Subtotal:</strong> <span class="cart_price"> <span
                                                class="price_symbole">$</span></span>159.00</p>
                                    <p class="cart_buttons"><a href="#" class="btn btn-fill-line view-cart">View
                                            Cart</a><a href="#" class="btn btn-fill-out checkout">Checkout</a></p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="bottom_header dark_skin main_menu_uppercase border-top border-bottom">
            <div class="custom-container">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-3">
                        <div class="categories_wrap">
                            <button type="button" data-toggle="collapse" data-target="#navCatContent"
                                aria-expanded="false" class="categories_btn">
                                <i class="linearicons-menu"></i><span>All Categories </span>
                            </button>
                            <div id="navCatContent" class="nav_cat navbar collapse">
                                <ul>

                                    <li><a class="dropdown-item nav-link nav_item" href="coming-soon.html"><span class="iconify" data-icon="bx:bx-headphone" data-inline="false"></span> <span class="px-2">Tai nghe</span></a></li>
                                    <li><a class="dropdown-item nav-link nav_item" href="404.html"><span class="iconify" data-icon="bi:mouse" data-inline="false"></span> <span>Chuột</span></a></li>
                                    <li><a class="dropdown-item nav-link nav_item" href="login.html"><span class="iconify" data-icon="bi:keyboard" data-inline="false"></span> <span>Bàn phím</span></a></li>
                                    <li><a class="dropdown-item nav-link nav_item" href="register.html"><span class="iconify" data-icon="ph:monitor-light" data-inline="false"></span> <span>man hinh</span></a>
                                    </li>

                                    <li><a class="dropdown-item nav-link nav_item" href="404.html"><span class="iconify" data-icon="si-glyph:chair-2" data-inline="false"></span> <span>Ghe</span></a></li>
                                    <li><a class="dropdown-item nav-link nav_item" href="404.html"><span class="iconify" data-icon="ant-design:laptop-outlined" data-inline="false"></span><span>Laptop</span></a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8 col-sm-6 col-9">
                        <nav class="navbar navbar-expand-lg">
                            <button class="navbar-toggler side_navbar_toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSidetoggle" aria-expanded="false">
                                <span class="ion-android-menu"></span>
                            </button>
                            <div class="pr_search_icon">
                                <a href="javascript:void(0);" class="nav-link pr_search_trigger"><i
                                        class="linearicons-magnifier"></i></a>
                            </div>
                            <div class="collapse navbar-collapse mobile_side_menu" id="navbarSidetoggle">
                                <ul class="navbar-nav">
                                    <li><a class="nav-link nav_item" href="contact.html">Home</a>

                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Pages</a>
                                        <div class="dropdown-menu">
                                            <ul>
                                                <li><a class="dropdown-item nav-link nav_item" href="about.html">About
                                                        Us</a></li>
                                                <li><a class="dropdown-item nav-link nav_item"
                                                        href="contact.html">Contact Us</a></li>
                                                <li><a class="dropdown-item nav-link nav_item" href="faq.html">Faq</a>
                                                </li>
                                                <li><a class="dropdown-item nav-link nav_item" href="404.html">404 Error
                                                        Page</a></li>
                                                <li><a class="dropdown-item nav-link nav_item"
                                                        href="login.html">Login</a></li>
                                                <li><a class="dropdown-item nav-link nav_item"
                                                        href="signup.html">Register</a></li>
                                                <li><a class="dropdown-item nav-link nav_item"
                                                        href="term-condition.html">Terms and Conditions</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Category</a>
                                        <div class="dropdown-menu">
                                            <ul>
                                                <li><a class="dropdown-item nav-link nav_item" href="about.html">About
                                                        Us</a></li>
                                                <li><a class="dropdown-item nav-link nav_item"
                                                        href="contact.html">Contact Us</a></li>
                                                <li><a class="dropdown-item nav-link nav_item" href="faq.html">Faq</a>
                                                </li>
                                                <li><a class="dropdown-item nav-link nav_item" href="404.html">404 Error
                                                        Page</a></li>
                                                <li><a class="dropdown-item nav-link nav_item"
                                                        href="login.html">Login</a></li>
                                                <li><a class="dropdown-item nav-link nav_item"
                                                        href="signup.html">Register</a></li>
                                                <li><a class="dropdown-item nav-link nav_item"
                                                        href="term-condition.html">Terms and Conditions</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a class="nav-link nav_item" href="contact.html">Giới thiệu</a></li>
                                    <li><a class="nav-link nav_item" href="contact.html">Contact Us</a></li>
                                </ul>
                            </div>
       
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- END HEADER -->

    <!-- START SECTION BANNER -->
    <div class="mt-4 staggered-animation-wrap">
        <div class="custom-container">
            <div class="row">
                <div class="col-lg-7 offset-lg-3">
                    <div class="banner_section shop_el_slider">
                        <div id="carouselExampleControls" class="carousel slide carousel-fade light_arrow"
                            data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active background_bg"
                                    data-img-src="<?= base_url() ?>/public/client//assets/images/blog_img3.jpg">
                                    <div class="banner_slide_content banner_content_inner">
                                        <div class="col-lg-7 col-10">
                                            <div class="banner_content3 overflow-hidden">
                                                <h5 class="mb-3 staggered-animation font-weight-light"
                                                    data-animation="slideInLeft" data-animation-delay="0.5s">Get up to
                                                    50% off Today Only!</h5>
                                                <h2 class="staggered-animation" data-animation="slideInLeft"
                                                    data-animation-delay="1s">Dual Camera 20MP</h2>
                                                <h4 class="staggered-animation mb-4 product-price"
                                                    data-animation="slideInLeft" data-animation-delay="1.2s"><span
                                                        class="price">$45.00</span><del>$55.25</del></h4>
                                                <a class="btn btn-fill-out btn-radius staggered-animation text-uppercase"
                                                    href="shop-left-sidebar.html" data-animation="slideInLeft"
                                                    data-animation-delay="1.5s">Shop Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item background_bg" data-img-src="<?= base_url() ?>/public/client//assets/images/banner14.jpg">
                                    <div class="banner_slide_content banner_content_inner">
                                        <div class="col-lg-8 col-10">
                                            <div class="banner_content3 overflow-hidden">
                                                <h5 class="mb-3 staggered-animation font-weight-light"
                                                    data-animation="slideInLeft" data-animation-delay="0.5s">50% off in
                                                    all products</h5>
                                                <h2 class="staggered-animation" data-animation="slideInLeft"
                                                    data-animation-delay="1s">Smart Watches</h2>
                                                <h4 class="staggered-animation mb-3 mb-sm-4 product-price"
                                                    data-animation="slideInLeft" data-animation-delay="1.2s"><span
                                                        class="price">$45.00</span><del>$55.25</del></h4>
                                                <a class="btn btn-fill-out btn-radius staggered-animation text-uppercase"
                                                    href="shop-left-sidebar.html" data-animation="slideInLeft"
                                                    data-animation-delay="1.5s">Shop Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item background_bg" data-img-src="<?= base_url() ?>/public/client//assets/images/banner15.jpg">
                                    <div class="banner_slide_content banner_content_inner">
                                        <div class="col-lg-8 col-10">
                                            <div class="banner_content3 overflow-hidden">
                                                <h5 class="mb-3 staggered-animation font-weight-light"
                                                    data-animation="slideInLeft" data-animation-delay="0.5s">Taking your
                                                    Viewing Experience to Next Level</h5>
                                                <h2 class="staggered-animation" data-animation="slideInLeft"
                                                    data-animation-delay="1s">Beat Headphone</h2>
                                                <h4 class="staggered-animation mb-4 product-price"
                                                    data-animation="slideInLeft" data-animation-delay="1.2s"><span
                                                        class="price">$45.00</span><del>$55.25</del></h4>
                                                <a class="btn btn-fill-out btn-radius staggered-animation text-uppercase"
                                                    href="shop-left-sidebar.html" data-animation="slideInLeft"
                                                    data-animation-delay="1.5s">Shop Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ol class="carousel-indicators indicators_style3">
                                <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleControls" data-slide-to="1"></li>
                                <li data-target="#carouselExampleControls" data-slide-to="2"></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 d-none d-lg-block">
                    <div class="shop_banner2 el_banner1">
                        <a href="#" class="hover_effect1">
                            <div class="el_title text_white">
                                <h6>iphone Collection</h6>
                                <span>25% off</span>
                            </div>
                            <div class="el_img">
                                <img src="<?= base_url() ?>/public/client//assets/images/shop_banner_img6.png" alt="shop_banner_img6">
                            </div>
                        </a>
                    </div>
                    <div class="shop_banner2 el_banner2">
                        <a href="#" class="hover_effect1">
                            <div class="el_title text_white">
                                <h6>MAC Computer</h6>
                                <span><u>Shop Now</u></span>
                            </div>
                            <div class="el_img">
                                <img src="<?= base_url() ?>/public/client//assets/images/shop_banner_img7.png" alt="shop_banner_img7">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION BANNER -->

    <!-- END MAIN CONTENT -->
    <div class="main_content">

        <!-- START SECTION SHOP -->
        <div class="section small_pt pb-0">
            <div class="custom-container">
                <div class="row">
                    <div class="col-xl-3 d-none d-xl-block">
                        <div class="sale-banner">
                            <a class="hover_effect1" href="#">
                                <img src="<?= base_url() ?>/public/client//assets/images/logitechtest.png" alt="shop_banner_img6">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-9">
                        <div class="row">
                            <div class="col-12">
                                <div class="heading_tab_header">
                                    <div class="heading_s2">
                                        <h4>Exclusive Products</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="tab_slider">
                                    <div class="tab-pane fade show active" id="arrival" role="tabpanel"
                                        aria-labelledby="arrival-tab">
                                        <div class="product_slider carousel_slider owl-carousel owl-theme dot_style1"
                                            data-loop="true" data-margin="20"
                                            data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "991":{"items": "4"}}'>
                                            <div class="item">
                                                <div class="product_wrap">
                                                    <div class="product_img">
                                                        <a href="shop-product-detail.html">
                                                            <img src="<?= base_url() ?>/public/client//assets/images/el_img1.jpg" alt="el_img1">
                                                        </a>
                                                    </div>
                                                    <div class="product_info">
                                                        <h6 class="product_title"><a href="shop-product-detail.html">Red
                                                                & Black Headphone</a></h6>
                                                        <div class="product_price">
                                                            <span class="price">$45.00</span>
                                                            <del>$55.25</del>
                                                            <div class="on_sale">
                                                                <span>35% Off</span>
                                                            </div>
                                                        </div>
                                                        <div class="add-to-bag">
                                                            <a href="#"><i
                                                                class="icon-basket-loaded"></i></a>
                                                        </div>                                                     
                                                    
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="product_wrap">
                                                    <div class="product_img">
                                                        <a href="shop-product-detail.html">
                                                            <img src="<?= base_url() ?>/public/client//assets/images/el_img1.jpg" alt="el_img1">
                                                        </a>
                                                    </div>
                                                    <div class="product_info">
                                                        <h6 class="product_title"><a href="shop-product-detail.html">Red
                                                                & Black Headphone</a></h6>
                                                        <div class="product_price">
                                                            <span class="price">$45.00</span>
                                                            <del>$55.25</del>
                                                            <div class="on_sale">
                                                                <span>35% Off</span>
                                                            </div>
                                                        </div>
                                                        <div class="add-to-bag">
                                                            <a href="#"><i
                                                                class="icon-basket-loaded"></i></a>
                                                        </div>                                                     
                                                    
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="product_wrap">
                                                    <div class="product_img">
                                                        <a href="shop-product-detail.html">
                                                            <img src="<?= base_url() ?>/public/client//assets/images/el_img1.jpg" alt="el_img1">
                                                        </a>
                                                    </div>
                                                    <div class="product_info">
                                                        <h6 class="product_title"><a href="shop-product-detail.html">Red
                                                                & Black Headphone</a></h6>
                                                        <div class="product_price">
                                                            <span class="price">$45.00</span>
                                                            <del>$55.25</del>
                                                            <div class="on_sale">
                                                                <span>35% Off</span>
                                                            </div>
                                                        </div>
                                                        <div class="add-to-bag">
                                                            <a href="#"><i
                                                                class="icon-basket-loaded"></i></a>
                                                        </div>                                                     
                                                    
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="product_wrap">
                                                    <div class="product_img">
                                                        <a href="shop-product-detail.html">
                                                            <img src="<?= base_url() ?>/public/client//assets/images/el_img1.jpg" alt="el_img1">
                                                        </a>
                                                    </div>
                                                    <div class="product_info">
                                                        <h6 class="product_title"><a href="shop-product-detail.html">Red
                                                                & Black Headphone</a></h6>
                                                        <div class="product_price">
                                                            <span class="price">$45.00</span>
                                                            <del>$55.25</del>
                                                            <div class="on_sale">
                                                                <span>35% Off</span>
                                                            </div>
                                                        </div>
                                                        <div class="add-to-bag">
                                                            <a href="#"><i
                                                                class="icon-basket-loaded"></i></a>
                                                        </div>                                                     
                                                    
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="product_wrap">
                                                    <div class="product_img">
                                                        <a href="shop-product-detail.html">
                                                            <img src="<?= base_url() ?>/public/client//assets/images/el_img1.jpg" alt="el_img1">
                                                        </a>
                                                    </div>
                                                    <div class="product_info">
                                                        <h6 class="product_title"><a href="shop-product-detail.html">Red
                                                                & Black Headphone</a></h6>
                                                        <div class="product_price">
                                                            <span class="price">$45.00</span>
                                                            <del>$55.25</del>
                                                            <div class="on_sale">
                                                                <span>35% Off</span>
                                                            </div>
                                                        </div>
                                                        <div class="add-to-bag">
                                                            <a href="#"><i
                                                                class="icon-basket-loaded"></i></a>
                                                        </div>                                                     
                                                    
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="product_wrap">
                                                    <div class="product_img">
                                                        <a href="shop-product-detail.html">
                                                            <img src="<?= base_url() ?>/public/client//assets/images/el_img1.jpg" alt="el_img1">
                                                        </a>
                                                    </div>
                                                    <div class="product_info">
                                                        <h6 class="product_title"><a href="shop-product-detail.html">Red
                                                                & Black Headphone</a></h6>
                                                        <div class="product_price">
                                                            <span class="price">$45.00</span>
                                                            <del>$55.25</del>
                                                            <div class="on_sale">
                                                                <span>35% Off</span>
                                                            </div>
                                                        </div>
                                                        <div class="add-to-bag">
                                                            <a href="#"><i
                                                                class="icon-basket-loaded"></i></a>
                                                        </div>                                                     
                                                    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="sellers" role="tabpanel"
                                        aria-labelledby="sellers-tab">
                                        <div class="product_slider carousel_slider owl-carousel owl-theme dot_style1"
                                            data-loop="true" data-margin="20"
                                            data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "991":{"items": "4"}}'>
                                            <div class="item">
                                                <div class="product_wrap">
                                                    <div class="product_img">
                                                        <a href="shop-product-detail.html">
                                                            <img src="<?= base_url() ?>/public/client//assets/images/el_img7.jpg" alt="el_img7">
                                                            <img class="product_hover_img"
                                                                src="<?= base_url() ?>/public/client//assets/images/el_hover_img7.jpg"
                                                                alt="el_hover_img7">
                                                        </a>
                                                        <div class="product_action_box">
                                                            <ul class="list_none pr_action_btn">
                                                                <li class="add-to-cart"><a href="#"><i
                                                                            class="icon-basket-loaded"></i> Add To
                                                                        Cart</a></li>
                                                                <li><a href="shop-compare.html" class="popup-ajax"><i
                                                                            class="icon-shuffle"></i></a></li>
                                                                <li><a href="shop-quick-view.html" class="popup-ajax"><i
                                                                            class="icon-magnifier-add"></i></a></li>
                                                                <li><a href="#"><i class="icon-heart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product_info">
                                                        <h6 class="product_title"><a
                                                                href="shop-product-detail.html">Audio Theaters</a></h6>
                                                        <div class="product_price">
                                                            <span class="price">$45.00</span>
                                                            <del>$55.25</del>
                                                            <div class="on_sale">
                                                                <span>35% Off</span>
                                                            </div>
                                                        </div>
                                                        <!-- <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width:80%"></div>
                                                            </div>
                                                            <span class="rating_num">(21)</span>
                                                        </div> -->
                                                        <div class="pr_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Phasellus blandit massa enim. Nullam id varius nunc id
                                                                varius nunc.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="product_wrap">
                                                    <span class="pr_flash bg-danger">Hot</span>
                                                    <div class="product_img">
                                                        <a href="shop-product-detail.html">
                                                            <img src="<?= base_url() ?>/public/client//assets/images/el_img8.jpg" alt="el_img8">
                                                            <img class="product_hover_img"
                                                                src="<?= base_url() ?>/public/client//assets/images/el_hover_img8.jpg"
                                                                alt="el_hover_img8">
                                                        </a>
                                                        <div class="product_action_box">
                                                            <ul class="list_none pr_action_btn">
                                                                <li class="add-to-cart"><a href="#"><i
                                                                            class="icon-basket-loaded"></i> Add To
                                                                        Cart</a></li>
                                                                <li><a href="shop-compare.html" class="popup-ajax"><i
                                                                            class="icon-shuffle"></i></a></li>
                                                                <li><a href="shop-quick-view.html" class="popup-ajax"><i
                                                                            class="icon-magnifier-add"></i></a></li>
                                                                <li><a href="#"><i class="icon-heart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product_info">
                                                        <h6 class="product_title"><a
                                                                href="shop-product-detail.html">Surveillance camera</a>
                                                        </h6>
                                                        <div class="product_price">
                                                            <span class="price">$55.00</span>
                                                            <del>$95.00</del>
                                                            <div class="on_sale">
                                                                <span>25% Off</span>
                                                            </div>
                                                        </div>
                                                        <!-- <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width:68%"></div>
                                                            </div>
                                                            <span class="rating_num">(15)</span>
                                                        </div> -->
                                                        <div class="pr_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Phasellus blandit massa enim. Nullam id varius nunc id
                                                                varius nunc.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="product_wrap">
                                                    <div class="product_img">
                                                        <a href="shop-product-detail.html">
                                                            <img src="<?= base_url() ?>/public/client//assets/images/el_img9.jpg" alt="el_img9">
                                                            <img class="product_hover_img"
                                                                src="<?= base_url() ?>/public/client//assets/images/el_hover_img9.jpg"
                                                                alt="el_hover_img9">
                                                        </a>
                                                        <div class="product_action_box">
                                                            <ul class="list_none pr_action_btn">
                                                                <li class="add-to-cart"><a href="#"><i
                                                                            class="icon-basket-loaded"></i> Add To
                                                                        Cart</a></li>
                                                                <li><a href="shop-compare.html" class="popup-ajax"><i
                                                                            class="icon-shuffle"></i></a></li>
                                                                <li><a href="shop-quick-view.html" class="popup-ajax"><i
                                                                            class="icon-magnifier-add"></i></a></li>
                                                                <li><a href="#"><i class="icon-heart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product_info">
                                                        <h6 class="product_title"><a
                                                                href="shop-product-detail.html">oppo Reno3 Pro</a></h6>
                                                        <div class="product_price">
                                                            <span class="price">$68.00</span>
                                                            <del>$99.00</del>
                                                            <div class="on_sale">
                                                                <span>20% Off</span>
                                                            </div>
                                                        </div>
                                                        <!-- <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width:87%"></div>
                                                            </div>
                                                            <span class="rating_num">(25)</span>
                                                        </div> -->
                                                        <div class="pr_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Phasellus blandit massa enim. Nullam id varius nunc id
                                                                varius nunc.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="product_wrap">
                                                    <span class="pr_flash bg-success">Sale</span>
                                                    <div class="product_img">
                                                        <a href="shop-product-detail.html">
                                                            <img src="<?= base_url() ?>/public/client//assets/images/el_img10.jpg" alt="el_img10">
                                                            <img class="product_hover_img"
                                                                src="<?= base_url() ?>/public/client//assets/images/el_hover_img10.jpg"
                                                                alt="el_hover_img10">
                                                        </a>
                                                        <div class="product_action_box">
                                                            <ul class="list_none pr_action_btn">
                                                                <li class="add-to-cart"><a href="#"><i
                                                                            class="icon-basket-loaded"></i> Add To
                                                                        Cart</a></li>
                                                                <li><a href="shop-compare.html" class="popup-ajax"><i
                                                                            class="icon-shuffle"></i></a></li>
                                                                <li><a href="shop-quick-view.html" class="popup-ajax"><i
                                                                            class="icon-magnifier-add"></i></a></li>
                                                                <li><a href="#"><i class="icon-heart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product_info">
                                                        <h6 class="product_title"><a
                                                                href="shop-product-detail.html">classical Headphone</a>
                                                        </h6>
                                                        <div class="product_price">
                                                            <span class="price">$68.00</span>
                                                            <del>$99.00</del>
                                                            <div class="on_sale">
                                                                <span>20% Off</span>
                                                            </div>
                                                        </div>
                                                        <!-- <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width:87%"></div>
                                                            </div>
                                                            <span class="rating_num">(25)</span>
                                                        </div> -->
                                                        <div class="pr_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Phasellus blandit massa enim. Nullam id varius nunc id
                                                                varius nunc.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="product_wrap">
                                                    <div class="product_img">
                                                        <a href="shop-product-detail.html">
                                                            <img src="<?= base_url() ?>/public/client//assets/images/el_img11.jpg" alt="el_img11">
                                                            <img class="product_hover_img"
                                                                src="<?= base_url() ?>/public/client//assets/images/el_hover_img11.jpg"
                                                                alt="el_hover_img11">
                                                        </a>
                                                        <div class="product_action_box">
                                                            <ul class="list_none pr_action_btn">
                                                                <li class="add-to-cart"><a href="#"><i
                                                                            class="icon-basket-loaded"></i> Add To
                                                                        Cart</a></li>
                                                                <li><a href="shop-compare.html" class="popup-ajax"><i
                                                                            class="icon-shuffle"></i></a></li>
                                                                <li><a href="shop-quick-view.html" class="popup-ajax"><i
                                                                            class="icon-magnifier-add"></i></a></li>
                                                                <li><a href="#"><i class="icon-heart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product_info">
                                                        <h6 class="product_title"><a
                                                                href="shop-product-detail.html">Basics High-Speed
                                                                HDMI</a></h6>
                                                        <div class="product_price">
                                                            <span class="price">$69.00</span>
                                                            <del>$89.00</del>
                                                            <div class="on_sale">
                                                                <span>20% Off</span>
                                                            </div>
                                                        </div>
                                                        <!-- <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width:70%"></div>
                                                            </div>
                                                            <span class="rating_num">(22)</span>
                                                        </div> -->
                                                        <div class="pr_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Phasellus blandit massa enim. Nullam id varius nunc id
                                                                varius nunc.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="product_wrap">
                                                    <div class="product_img">
                                                        <a href="shop-product-detail.html">
                                                            <img src="<?= base_url() ?>/public/client//assets/images/el_img12.jpg" alt="el_img12">
                                                            <img class="product_hover_img"
                                                                src="<?= base_url() ?>/public/client//assets/images/el_hover_img12.jpg"
                                                                alt="el_hover_img12">
                                                        </a>
                                                        <div class="product_action_box">
                                                            <ul class="list_none pr_action_btn">
                                                                <li class="add-to-cart"><a href="#"><i
                                                                            class="icon-basket-loaded"></i> Add To
                                                                        Cart</a></li>
                                                                <li><a href="shop-compare.html" class="popup-ajax"><i
                                                                            class="icon-shuffle"></i></a></li>
                                                                <li><a href="shop-quick-view.html" class="popup-ajax"><i
                                                                            class="icon-magnifier-add"></i></a></li>
                                                                <li><a href="#"><i class="icon-heart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product_info">
                                                        <h6 class="product_title"><a
                                                                href="shop-product-detail.html">Sound Equipment for
                                                                Low</a></h6>
                                                        <div class="product_price">
                                                            <span class="price">$45.00</span>
                                                            <del>$55.25</del>
                                                            <div class="on_sale">
                                                                <span>35% Off</span>
                                                            </div>
                                                        </div>
                                                        <!-- <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width:80%"></div>
                                                            </div>
                                                            <span class="rating_num">(21)</span>
                                                        </div> -->
                                                        <div class="pr_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Phasellus blandit massa enim. Nullam id varius nunc id
                                                                varius nunc.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="featured" role="tabpanel"
                                        aria-labelledby="featured-tab">
                                        <div class="product_slider carousel_slider owl-carousel owl-theme dot_style1"
                                            data-loop="true" data-margin="20"
                                            data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "991":{"items": "4"}}'>
                                            <div class="item">
                                                <div class="product_wrap">
                                                    <span class="pr_flash bg-danger">Hot</span>
                                                    <div class="product_img">
                                                        <a href="shop-product-detail.html">
                                                            <img src="<?= base_url() ?>/public/client//assets/images/el_img8.jpg" alt="el_img8">
                                                            <img class="product_hover_img"
                                                                src="<?= base_url() ?>/public/client//assets/images/el_hover_img8.jpg"
                                                                alt="el_hover_img8">
                                                        </a>
                                                        <div class="product_action_box">
                                                            <ul class="list_none pr_action_btn">
                                                                <li class="add-to-cart"><a href="#"><i
                                                                            class="icon-basket-loaded"></i> Add To
                                                                        Cart</a></li>
                                                                <li><a href="shop-compare.html" class="popup-ajax"><i
                                                                            class="icon-shuffle"></i></a></li>
                                                                <li><a href="shop-quick-view.html" class="popup-ajax"><i
                                                                            class="icon-magnifier-add"></i></a></li>
                                                                <li><a href="#"><i class="icon-heart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product_info">
                                                        <h6 class="product_title"><a
                                                                href="shop-product-detail.html">Surveillance camera</a>
                                                        </h6>
                                                        <div class="product_price">
                                                            <span class="price">$55.00</span>
                                                            <del>$95.00</del>
                                                            <div class="on_sale">
                                                                <span>25% Off</span>
                                                            </div>
                                                        </div>
                                                        <!-- <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width:68%"></div>
                                                            </div>
                                                            <span class="rating_num">(15)</span>
                                                        </div> -->
                                                        <div class="pr_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Phasellus blandit massa enim. Nullam id varius nunc id
                                                                varius nunc.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="product_wrap">
                                                    <div class="product_img">
                                                        <a href="shop-product-detail.html">
                                                            <img src="<?= base_url() ?>/public/client//assets/images/el_img4.jpg" alt="el_img4">
                                                            <img class="product_hover_img"
                                                                src="<?= base_url() ?>/public/client//assets/images/el_hover_img4.jpg"
                                                                alt="el_hover_img4">
                                                        </a>
                                                        <div class="product_action_box">
                                                            <ul class="list_none pr_action_btn">
                                                                <li class="add-to-cart"><a href="#"><i
                                                                            class="icon-basket-loaded"></i> Add To
                                                                        Cart</a></li>
                                                                <li><a href="shop-compare.html" class="popup-ajax"><i
                                                                            class="icon-shuffle"></i></a></li>
                                                                <li><a href="shop-quick-view.html" class="popup-ajax"><i
                                                                            class="icon-magnifier-add"></i></a></li>
                                                                <li><a href="#"><i class="icon-heart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product_info">
                                                        <h6 class="product_title"><a
                                                                href="shop-product-detail.html">Audio Equipment</a></h6>
                                                        <div class="product_price">
                                                            <span class="price">$69.00</span>
                                                            <del>$89.00</del>
                                                            <div class="on_sale">
                                                                <span>20% Off</span>
                                                            </div>
                                                        </div>
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width:70%"></div>
                                                            </div>
                                                            <span class="rating_num">(22)</span>
                                                        </div>
                                                        <div class="pr_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Phasellus blandit massa enim. Nullam id varius nunc id
                                                                varius nunc.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="product_wrap">
                                                    <div class="product_img">
                                                        <a href="shop-product-detail.html">
                                                            <img src="<?= base_url() ?>/public/client//assets/images/el_img11.jpg" alt="el_img11">
                                                            <img class="product_hover_img"
                                                                src="<?= base_url() ?>/public/client//assets/images/el_hover_img11.jpg"
                                                                alt="el_hover_img11">
                                                        </a>
                                                        <div class="product_action_box">
                                                            <ul class="list_none pr_action_btn">
                                                                <li class="add-to-cart"><a href="#"><i
                                                                            class="icon-basket-loaded"></i> Add To
                                                                        Cart</a></li>
                                                                <li><a href="shop-compare.html" class="popup-ajax"><i
                                                                            class="icon-shuffle"></i></a></li>
                                                                <li><a href="shop-quick-view.html" class="popup-ajax"><i
                                                                            class="icon-magnifier-add"></i></a></li>
                                                                <li><a href="#"><i class="icon-heart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product_info">
                                                        <h6 class="product_title"><a
                                                                href="shop-product-detail.html">Basics High-Speed
                                                                HDMI</a></h6>
                                                        <div class="product_price">
                                                            <span class="price">$69.00</span>
                                                            <del>$89.00</del>
                                                            <div class="on_sale">
                                                                <span>20% Off</span>
                                                            </div>
                                                        </div>
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width:70%"></div>
                                                            </div>
                                                            <span class="rating_num">(22)</span>
                                                        </div>
                                                        <div class="pr_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Phasellus blandit massa enim. Nullam id varius nunc id
                                                                varius nunc.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="product_wrap">
                                                    <div class="product_img">
                                                        <a href="shop-product-detail.html">
                                                            <img src="<?= base_url() ?>/public/client//assets/images/el_img1.jpg" alt="el_img1">
                                                            <img class="product_hover_img"
                                                                src="<?= base_url() ?>/public/client//assets/images/el_hover_img1.jpg"
                                                                alt="el_hover_img1">
                                                        </a>
                                                        <div class="product_action_box">
                                                            <ul class="list_none pr_action_btn">
                                                                <li class="add-to-cart"><a href="#"><i
                                                                            class="icon-basket-loaded"></i> Add To
                                                                        Cart</a></li>
                                                                <li><a href="shop-compare.html" class="popup-ajax"><i
                                                                            class="icon-shuffle"></i></a></li>
                                                                <li><a href="shop-quick-view.html" class="popup-ajax"><i
                                                                            class="icon-magnifier-add"></i></a></li>
                                                                <li><a href="#"><i class="icon-heart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product_info">
                                                        <h6 class="product_title"><a href="shop-product-detail.html">Red
                                                                & Black Headphone</a></h6>
                                                        <div class="product_price">
                                                            <span class="price">$45.00</span>
                                                            <del>$55.25</del>
                                                            <div class="on_sale">
                                                                <span>35% Off</span>
                                                            </div>
                                                        </div>
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width:80%"></div>
                                                            </div>
                                                            <span class="rating_num">(21)</span>
                                                        </div>
                                                        <div class="pr_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Phasellus blandit massa enim. Nullam id varius nunc id
                                                                varius nunc.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="product_wrap">
                                                    <div class="product_img">
                                                        <a href="shop-product-detail.html">
                                                            <img src="<?= base_url() ?>/public/client//assets/images/el_img7.jpg" alt="el_img7">
                                                            <img class="product_hover_img"
                                                                src="<?= base_url() ?>/public/client//assets/images/el_hover_img7.jpg"
                                                                alt="el_hover_img7">
                                                        </a>
                                                        <div class="product_action_box">
                                                            <ul class="list_none pr_action_btn">
                                                                <li class="add-to-cart"><a href="#"><i
                                                                            class="icon-basket-loaded"></i> Add To
                                                                        Cart</a></li>
                                                                <li><a href="shop-compare.html" class="popup-ajax"><i
                                                                            class="icon-shuffle"></i></a></li>
                                                                <li><a href="shop-quick-view.html" class="popup-ajax"><i
                                                                            class="icon-magnifier-add"></i></a></li>
                                                                <li><a href="#"><i class="icon-heart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product_info">
                                                        <h6 class="product_title"><a
                                                                href="shop-product-detail.html">Audio Theaters</a></h6>
                                                        <div class="product_price">
                                                            <span class="price">$45.00</span>
                                                            <del>$55.25</del>
                                                            <div class="on_sale">
                                                                <span>35% Off</span>
                                                            </div>
                                                        </div>
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width:80%"></div>
                                                            </div>
                                                            <span class="rating_num">(21)</span>
                                                        </div>
                                                        <div class="pr_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Phasellus blandit massa enim. Nullam id varius nunc id
                                                                varius nunc.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="product_wrap">
                                                    <span class="pr_flash bg-danger">Hot</span>
                                                    <div class="product_img">
                                                        <a href="shop-product-detail.html">
                                                            <img src="<?= base_url() ?>/public/client//assets/images/el_img6.jpg" alt="el_img6">
                                                            <img class="product_hover_img"
                                                                src="<?= base_url() ?>/public/client//assets/images/el_hover_img6.jpg"
                                                                alt="el_hover_img6">
                                                        </a>
                                                        <div class="product_action_box">
                                                            <ul class="list_none pr_action_btn">
                                                                <li class="add-to-cart"><a href="#"><i
                                                                            class="icon-basket-loaded"></i> Add To
                                                                        Cart</a></li>
                                                                <li><a href="shop-compare.html" class="popup-ajax"><i
                                                                            class="icon-shuffle"></i></a></li>
                                                                <li><a href="shop-quick-view.html" class="popup-ajax"><i
                                                                            class="icon-magnifier-add"></i></a></li>
                                                                <li><a href="#"><i class="icon-heart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product_info">
                                                        <h6 class="product_title"><a
                                                                href="shop-product-detail.html">Samsung Smart Phone</a>
                                                        </h6>
                                                        <div class="product_price">
                                                            <span class="price">$55.00</span>
                                                            <del>$95.00</del>
                                                            <div class="on_sale">
                                                                <span>25% Off</span>
                                                            </div>
                                                        </div>
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width:68%"></div>
                                                            </div>
                                                            <span class="rating_num">(15)</span>
                                                        </div>
                                                        <div class="pr_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Phasellus blandit massa enim. Nullam id varius nunc id
                                                                varius nunc.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="special" role="tabpanel"
                                        aria-labelledby="special-tab">
                                        <div class="product_slider carousel_slider owl-carousel owl-theme dot_style1"
                                            data-loop="true" data-margin="20"
                                            data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "991":{"items": "4"}}'>
                                            <div class="item">
                                                <div class="product_wrap">
                                                    <div class="product_img">
                                                        <a href="shop-product-detail.html">
                                                            <img src="<?= base_url() ?>/public/client//assets/images/el_img2.jpg" alt="el_img2">
                                                            <img class="product_hover_img"
                                                                src="<?= base_url() ?>/public/client//assets/images/el_hover_img2.jpg"
                                                                alt="el_hover_img2">
                                                        </a>
                                                        <div class="product_action_box">
                                                            <ul class="list_none pr_action_btn">
                                                                <li class="add-to-cart"><a href="#"><i
                                                                            class="icon-basket-loaded"></i> Add To
                                                                        Cart</a></li>
                                                                <li><a href="shop-compare.html" class="popup-ajax"><i
                                                                            class="icon-shuffle"></i></a></li>
                                                                <li><a href="shop-quick-view.html" class="popup-ajax"><i
                                                                            class="icon-magnifier-add"></i></a></li>
                                                                <li><a href="#"><i class="icon-heart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product_info">
                                                        <h6 class="product_title"><a
                                                                href="shop-product-detail.html">Smart Watch External</a>
                                                        </h6>
                                                        <div class="product_price">
                                                            <span class="price">$55.00</span>
                                                            <del>$95.00</del>
                                                            <div class="on_sale">
                                                                <span>25% Off</span>
                                                            </div>
                                                        </div>
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width:68%"></div>
                                                            </div>
                                                            <span class="rating_num">(15)</span>
                                                        </div>
                                                        <div class="pr_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Phasellus blandit massa enim. Nullam id varius nunc id
                                                                varius nunc.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="product_wrap">
                                                    <div class="product_img">
                                                        <a href="shop-product-detail.html">
                                                            <img src="<?= base_url() ?>/public/client//assets/images/el_img5.jpg" alt="el_img5">
                                                            <img class="product_hover_img"
                                                                src="<?= base_url() ?>/public/client//assets/images/el_hover_img5.jpg"
                                                                alt="el_hover_img5">
                                                        </a>
                                                        <div class="product_action_box">
                                                            <ul class="list_none pr_action_btn">
                                                                <li class="add-to-cart"><a href="#"><i
                                                                            class="icon-basket-loaded"></i> Add To
                                                                        Cart</a></li>
                                                                <li><a href="shop-compare.html" class="popup-ajax"><i
                                                                            class="icon-shuffle"></i></a></li>
                                                                <li><a href="shop-quick-view.html" class="popup-ajax"><i
                                                                            class="icon-magnifier-add"></i></a></li>
                                                                <li><a href="#"><i class="icon-heart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product_info">
                                                        <h6 class="product_title"><a
                                                                href="shop-product-detail.html">Smart Televisions</a>
                                                        </h6>
                                                        <div class="product_price">
                                                            <span class="price">$45.00</span>
                                                            <del>$55.25</del>
                                                            <div class="on_sale">
                                                                <span>35% Off</span>
                                                            </div>
                                                        </div>
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width:80%"></div>
                                                            </div>
                                                            <span class="rating_num">(21)</span>
                                                        </div>
                                                        <div class="pr_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Phasellus blandit massa enim. Nullam id varius nunc id
                                                                varius nunc.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="product_wrap">
                                                    <div class="product_img">
                                                        <a href="shop-product-detail.html">
                                                            <img src="<?= base_url() ?>/public/client//assets/images/el_img9.jpg" alt="el_img9">
                                                            <img class="product_hover_img"
                                                                src="<?= base_url() ?>/public/client//assets/images/el_hover_img9.jpg"
                                                                alt="el_hover_img9">
                                                        </a>
                                                        <div class="product_action_box">
                                                            <ul class="list_none pr_action_btn">
                                                                <li class="add-to-cart"><a href="#"><i
                                                                            class="icon-basket-loaded"></i> Add To
                                                                        Cart</a></li>
                                                                <li><a href="shop-compare.html" class="popup-ajax"><i
                                                                            class="icon-shuffle"></i></a></li>
                                                                <li><a href="shop-quick-view.html" class="popup-ajax"><i
                                                                            class="icon-magnifier-add"></i></a></li>
                                                                <li><a href="#"><i class="icon-heart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product_info">
                                                        <h6 class="product_title"><a
                                                                href="shop-product-detail.html">oppo Reno3 Pro</a></h6>
                                                        <div class="product_price">
                                                            <span class="price">$68.00</span>
                                                            <del>$99.00</del>
                                                            <div class="on_sale">
                                                                <span>20% Off</span>
                                                            </div>
                                                        </div>
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width:87%"></div>
                                                            </div>
                                                            <span class="rating_num">(25)</span>
                                                        </div>
                                                        <div class="pr_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Phasellus blandit massa enim. Nullam id varius nunc id
                                                                varius nunc.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="product_wrap">
                                                    <div class="product_img">
                                                        <a href="shop-product-detail.html">
                                                            <img src="<?= base_url() ?>/public/client//assets/images/el_img7.jpg" alt="el_img7">
                                                            <img class="product_hover_img"
                                                                src="<?= base_url() ?>/public/client//assets/images/el_hover_img7.jpg"
                                                                alt="el_hover_img7">
                                                        </a>
                                                        <div class="product_action_box">
                                                            <ul class="list_none pr_action_btn">
                                                                <li class="add-to-cart"><a href="#"><i
                                                                            class="icon-basket-loaded"></i> Add To
                                                                        Cart</a></li>
                                                                <li><a href="shop-compare.html" class="popup-ajax"><i
                                                                            class="icon-shuffle"></i></a></li>
                                                                <li><a href="shop-quick-view.html" class="popup-ajax"><i
                                                                            class="icon-magnifier-add"></i></a></li>
                                                                <li><a href="#"><i class="icon-heart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product_info">
                                                        <h6 class="product_title"><a
                                                                href="shop-product-detail.html">Audio Theaters</a></h6>
                                                        <div class="product_price">
                                                            <span class="price">$45.00</span>
                                                            <del>$55.25</del>
                                                            <div class="on_sale">
                                                                <span>35% Off</span>
                                                            </div>
                                                        </div>
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width:80%"></div>
                                                            </div>
                                                            <span class="rating_num">(21)</span>
                                                        </div>
                                                        <div class="pr_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Phasellus blandit massa enim. Nullam id varius nunc id
                                                                varius nunc.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="product_wrap">
                                                    <div class="product_img">
                                                        <a href="shop-product-detail.html">
                                                            <img src="<?= base_url() ?>/public/client//assets/images/el_img5.jpg" alt="el_img5">
                                                            <img class="product_hover_img"
                                                                src="<?= base_url() ?>/public/client//assets/images/el_hover_img5.jpg"
                                                                alt="el_hover_img5">
                                                        </a>
                                                        <div class="product_action_box">
                                                            <ul class="list_none pr_action_btn">
                                                                <li class="add-to-cart"><a href="#"><i
                                                                            class="icon-basket-loaded"></i> Add To
                                                                        Cart</a></li>
                                                                <li><a href="shop-compare.html" class="popup-ajax"><i
                                                                            class="icon-shuffle"></i></a></li>
                                                                <li><a href="shop-quick-view.html" class="popup-ajax"><i
                                                                            class="icon-magnifier-add"></i></a></li>
                                                                <li><a href="#"><i class="icon-heart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product_info">
                                                        <h6 class="product_title"><a
                                                                href="shop-product-detail.html">Smart Televisions</a>
                                                        </h6>
                                                        <div class="product_price">
                                                            <span class="price">$45.00</span>
                                                            <del>$55.25</del>
                                                            <div class="on_sale">
                                                                <span>35% Off</span>
                                                            </div>
                                                        </div>
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width:80%"></div>
                                                            </div>
                                                            <span class="rating_num">(21)</span>
                                                        </div>
                                                        <div class="pr_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Phasellus blandit massa enim. Nullam id varius nunc id
                                                                varius nunc.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="product_wrap">
                                                    <div class="product_img">
                                                        <a href="shop-product-detail.html">
                                                            <img src="<?= base_url() ?>/public/client//assets/images/el_img12.jpg" alt="el_img12">
                                                            <img class="product_hover_img"
                                                                src="<?= base_url() ?>/public/client//assets/images/el_hover_img12.jpg"
                                                                alt="el_hover_img12">
                                                        </a>
                                                        <div class="product_action_box">
                                                            <ul class="list_none pr_action_btn">
                                                                <li class="add-to-cart"><a href="#"><i
                                                                            class="icon-basket-loaded"></i> Add To
                                                                        Cart</a></li>
                                                                <li><a href="shop-compare.html" class="popup-ajax"><i
                                                                            class="icon-shuffle"></i></a></li>
                                                                <li><a href="shop-quick-view.html" class="popup-ajax"><i
                                                                            class="icon-magnifier-add"></i></a></li>
                                                                <li><a href="#"><i class="icon-heart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product_info">
                                                        <h6 class="product_title"><a
                                                                href="shop-product-detail.html">Sound Equipment for
                                                                Low</a></h6>
                                                        <div class="product_price">
                                                            <span class="price">$45.00</span>
                                                            <del>$55.25</del>
                                                            <div class="on_sale">
                                                                <span>35% Off</span>
                                                            </div>
                                                        </div>
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width:80%"></div>
                                                            </div>
                                                            <span class="rating_num">(21)</span>
                                                        </div>
                                                        <div class="pr_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Phasellus blandit massa enim. Nullam id varius nunc id
                                                                varius nunc.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SECTION SHOP -->

        <!-- START SECTION BANNER -->

        <!-- END SECTION BANNER -->

        <!-- START SECTION SHOP -->

        <!-- END SECTION SHOP -->

        <!-- START SECTION SHOP -->
        <div class="section small_pt small_pb">
            <div class="custom-container">
                <div class="row">
                    <div class="col-xl-3 d-none d-xl-block">
                        <div class="sale-banner">
                            <a class="hover_effect1" href="#">
                                <img src="<?= base_url() ?>/public/client//assets/images/shop_banner_img10.jpg" alt="shop_banner_img10">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-9">
                        <div class="row">
                            <div class="col-12">
                                <div class="heading_tab_header">
                                    <div class="heading_s2">
                                        <h4>Trending products</h4>
                                    </div>
                                    <div class="view_all">
                                        <a href="#" class="text_default"><i class="linearicons-power"></i> <span>View
                                                All</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="product_slider carousel_slider owl-carousel owl-theme dot_style1"
                                    data-loop="true" data-margin="20"
                                    data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "991":{"items": "4"}}'>
                                    <div class="item">
                                        <div class="product_wrap">
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img src="<?= base_url() ?>/public/client//assets/images/el_img2.jpg" alt="el_img2">
                                                    <img class="product_hover_img" src="<?= base_url() ?>/public/client//assets/images/el_hover_img2.jpg"
                                                        alt="el_hover_img2">
                                                </a>
                                                <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart"><a href="#"><i
                                                                    class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                        <li><a href="shop-compare.html" class="popup-ajax"><i
                                                                    class="icon-shuffle"></i></a></li>
                                                        <li><a href="shop-quick-view.html" class="popup-ajax"><i
                                                                    class="icon-magnifier-add"></i></a></li>
                                                        <li><a href="#"><i class="icon-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title"><a href="shop-product-detail.html">Smart Watch
                                                        External</a></h6>
                                                <div class="product_price">
                                                    <span class="price">$55.00</span>
                                                    <del>$95.00</del>
                                                    <div class="on_sale">
                                                        <span>25% Off</span>
                                                    </div>
                                                </div>
                                              
                                                <div class="pr_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                        Phasellus blandit massa enim. Nullam id varius nunc id varius
                                                        nunc.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product_wrap">
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img src="<?= base_url() ?>/public/client//assets/images/el_img5.jpg" alt="el_img5">
                                                    <img class="product_hover_img" src="<?= base_url() ?>/public/client//assets/images/el_hover_img5.jpg"
                                                        alt="el_hover_img5">
                                                </a>
                                                <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart"><a href="#"><i
                                                                    class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                        <li><a href="shop-compare.html" class="popup-ajax"><i
                                                                    class="icon-shuffle"></i></a></li>
                                                        <li><a href="shop-quick-view.html" class="popup-ajax"><i
                                                                    class="icon-magnifier-add"></i></a></li>
                                                        <li><a href="#"><i class="icon-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title"><a href="shop-product-detail.html">Smart
                                                        Televisions</a></h6>
                                                <div class="product_price">
                                                    <span class="price">$45.00</span>
                                                    <del>$55.25</del>
                                                    <div class="on_sale">
                                                        <span>35% Off</span>
                                                    </div>
                                                </div>
                                                <!-- <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:80%"></div>
                                                    </div>
                                                    <span class="rating_num">(21)</span>
                                                </div> -->
                                                <div class="pr_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                        Phasellus blandit massa enim. Nullam id varius nunc id varius
                                                        nunc.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product_wrap">
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img src="<?= base_url() ?>/public/client//assets/images/el_img9.jpg" alt="el_img9">
                                                    <img class="product_hover_img" src="<?= base_url() ?>/public/client//assets/images/el_hover_img9.jpg"
                                                        alt="el_hover_img9">
                                                </a>
                                                <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart"><a href="#"><i
                                                                    class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                        <li><a href="shop-compare.html" class="popup-ajax"><i
                                                                    class="icon-shuffle"></i></a></li>
                                                        <li><a href="shop-quick-view.html" class="popup-ajax"><i
                                                                    class="icon-magnifier-add"></i></a></li>
                                                        <li><a href="#"><i class="icon-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title"><a href="shop-product-detail.html">oppo Reno3
                                                        Pro</a></h6>
                                                <div class="product_price">
                                                    <span class="price">$68.00</span>
                                                    <del>$99.00</del>
                                                    <div class="on_sale">
                                                        <span>20% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:87%"></div>
                                                    </div>
                                                    <span class="rating_num">(25)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                        Phasellus blandit massa enim. Nullam id varius nunc id varius
                                                        nunc.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product_wrap">
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img src="<?= base_url() ?>/public/client//assets/images/el_img7.jpg" alt="el_img7">
                                                    <img class="product_hover_img" src="<?= base_url() ?>/public/client//assets/images/el_hover_img7.jpg"
                                                        alt="el_hover_img7">
                                                </a>
                                                <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart"><a href="#"><i
                                                                    class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                        <li><a href="shop-compare.html" class="popup-ajax"><i
                                                                    class="icon-shuffle"></i></a></li>
                                                        <li><a href="shop-quick-view.html" class="popup-ajax"><i
                                                                    class="icon-magnifier-add"></i></a></li>
                                                        <li><a href="#"><i class="icon-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title"><a href="shop-product-detail.html">Audio
                                                        Theaters</a></h6>
                                                <div class="product_price">
                                                    <span class="price">$45.00</span>
                                                    <del>$55.25</del>
                                                    <div class="on_sale">
                                                        <span>35% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:80%"></div>
                                                    </div>
                                                    <span class="rating_num">(21)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                        Phasellus blandit massa enim. Nullam id varius nunc id varius
                                                        nunc.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product_wrap">
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img src="<?= base_url() ?>/public/client//assets/images/el_img5.jpg" alt="el_img5">
                                                    <img class="product_hover_img" src="<?= base_url() ?>/public/client//assets/images/el_hover_img5.jpg"
                                                        alt="el_hover_img5">
                                                </a>
                                                <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart"><a href="#"><i
                                                                    class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                        <li><a href="shop-compare.html" class="popup-ajax"><i
                                                                    class="icon-shuffle"></i></a></li>
                                                        <li><a href="shop-quick-view.html" class="popup-ajax"><i
                                                                    class="icon-magnifier-add"></i></a></li>
                                                        <li><a href="#"><i class="icon-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title"><a href="shop-product-detail.html">Smart
                                                        Televisions</a></h6>
                                                <div class="product_price">
                                                    <span class="price">$45.00</span>
                                                    <del>$55.25</del>
                                                    <div class="on_sale">
                                                        <span>35% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:80%"></div>
                                                    </div>
                                                    <span class="rating_num">(21)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                        Phasellus blandit massa enim. Nullam id varius nunc id varius
                                                        nunc.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product_wrap">
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img src="<?= base_url() ?>/public/client//assets/images/el_img12.jpg" alt="el_img12">
                                                    <img class="product_hover_img"
                                                        src="<?= base_url() ?>/public/client//assets/images/el_hover_img12.jpg" alt="el_hover_img12">
                                                </a>
                                                <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart"><a href="#"><i
                                                                    class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                        <li><a href="shop-compare.html" class="popup-ajax"><i
                                                                    class="icon-shuffle"></i></a></li>
                                                        <li><a href="shop-quick-view.html" class="popup-ajax"><i
                                                                    class="icon-magnifier-add"></i></a></li>
                                                        <li><a href="#"><i class="icon-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title"><a href="shop-product-detail.html">Sound
                                                        Equipment for Low</a></h6>
                                                <div class="product_price">
                                                    <span class="price">$45.00</span>
                                                    <del>$55.25</del>
                                                    <div class="on_sale">
                                                        <span>35% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:80%"></div>
                                                    </div>
                                                    <span class="rating_num">(21)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                        Phasellus blandit massa enim. Nullam id varius nunc id varius
                                                        nunc.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SECTION SHOP -->

        <!-- START SECTION CLIENT LOGO -->
        <div class="section pt-0 small_pb">
            <div class="custom-container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading_tab_header">
                            <div class="heading_s2">
                                <h4>Our Brands</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="client_logo carousel_slider owl-carousel owl-theme nav_style3" data-dots="false"
                            data-nav="true" data-margin="30" data-loop="true" data-autoplay="true"
                            data-responsive='{"0":{"items": "2"}, "480":{"items": "3"}, "767":{"items": "4"}, "991":{"items": "5"}, "1199":{"items": "6"}}'>
                            <div class="item">
                                <div class="cl_logo">
                                    <img src="<?= base_url() ?>/public/client//assets/images/cl_logo1.png" alt="cl_logo">
                                </div>
                            </div>
                            <div class="item">
                                <div class="cl_logo">
                                    <img src="<?= base_url() ?>/public/client//assets/images/cl_logo2.png" alt="cl_logo">
                                </div>
                            </div>
                            <div class="item">
                                <div class="cl_logo">
                                    <img src="<?= base_url() ?>/public/client//assets/images/cl_logo3.png" alt="cl_logo">
                                </div>
                            </div>
                            <div class="item">
                                <div class="cl_logo">
                                    <img src="<?= base_url() ?>/public/client//assets/images/cl_logo4.png" alt="cl_logo">
                                </div>
                            </div>
                            <div class="item">
                                <div class="cl_logo">
                                    <img src="<?= base_url() ?>/public/client//assets/images/cl_logo5.png" alt="cl_logo">
                                </div>
                            </div>
                            <div class="item">
                                <div class="cl_logo">
                                    <img src="<?= base_url() ?>/public/client//assets/images/cl_logo6.png" alt="cl_logo">
                                </div>
                            </div>
                            <div class="item">
                                <div class="cl_logo">
                                    <img src="<?= base_url() ?>/public/client//assets/images/cl_logo7.png" alt="cl_logo">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SECTION CLIENT LOGO -->

        <!-- START SECTION SHOP -->
        <div class="section pt-0 pb_20">
            <div class="custom-container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-12">
                                <div class="heading_tab_header">
                                    <div class="heading_s2">
                                        <h4>Featured Products</h4>
                                    </div>
                                    <div class="view_all">
                                        <a href="#" class="text_default"><span>View All</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="product_slider carousel_slider product_list owl-carousel owl-theme nav_style5"
                                    data-nav="true" data-dots="false" data-loop="true" data-margin="20"
                                    data-responsive='{"0":{"items": "1"}, "380":{"items": "1"}, "640":{"items": "2"}, "991":{"items": "1"}}'>
                                    <div class="item">
                                        <div class="product_wrap">
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img src="<?= base_url() ?>/public/client//assets/images/el_img2.jpg" alt="el_img2">
                                                   
                                                </a>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title"><a href="shop-product-detail.html">Smart Watch
                                                        External</a></h6>
                                                <div class="product_price">
                                                    <span class="price">$55.00</span>
                                                    <del>$95.00</del>
                                                    <div class="on_sale">
                                                        <span>25% Off</span>
                                                    </div>
                                                </div>
                                                <div class="add-to-bag">
                                                    <a href="#"><i
                                                        class="icon-basket-loaded"></i></a>
                                                </div>                                       
                                            </div>
                                        </div>
                                        <div class="product_wrap">
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img src="<?= base_url() ?>/public/client//assets/images/el_img2.jpg" alt="el_img2">
                                                   
                                                </a>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title"><a href="shop-product-detail.html">Smart Watch
                                                        External</a></h6>
                                                <div class="product_price">
                                                    <span class="price">$55.00</span>
                                                    <del>$95.00</del>
                                                    <div class="on_sale">
                                                        <span>25% Off</span>
                                                    </div>
                                                </div>
                                                <div class="add-to-bag">
                                                    <a href="#"><i
                                                        class="icon-basket-loaded"></i></a>
                                                </div>                                       
                                            </div>
                                        </div>
                                        <div class="product_wrap">
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img src="<?= base_url() ?>/public/client//assets/images/el_img2.jpg" alt="el_img2">
                                                   
                                                </a>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title"><a href="shop-product-detail.html">Smart Watch
                                                        External</a></h6>
                                                <div class="product_price">
                                                    <span class="price">$55.00</span>
                                                    <del>$95.00</del>
                                                    <div class="on_sale">
                                                        <span>25% Off</span>
                                                    </div>
                                                </div>
                                                <div class="add-to-bag">
                                                    <a href="#"><i
                                                        class="icon-basket-loaded"></i></a>
                                                </div>                                       
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product_wrap">
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img src="<?= base_url() ?>/public/client//assets/images/el_img2.jpg" alt="el_img2">
                                                   
                                                </a>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title"><a href="shop-product-detail.html">Smart Watch
                                                        External</a></h6>
                                                <div class="product_price">
                                                    <span class="price">$55.00</span>
                                                    <del>$95.00</del>
                                                    <div class="on_sale">
                                                        <span>25% Off</span>
                                                    </div>
                                                </div>
                                                <div class="add-to-bag">
                                                    <a href="#"><i
                                                        class="icon-basket-loaded"></i></a>
                                                </div>                                       
                                            </div>
                                        </div>
                                        <div class="product_wrap">
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img src="<?= base_url() ?>/public/client//assets/images/el_img2.jpg" alt="el_img2">
                                                   
                                                </a>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title"><a href="shop-product-detail.html">Smart Watch
                                                        External</a></h6>
                                                <div class="product_price">
                                                    <span class="price">$55.00</span>
                                                    <del>$95.00</del>
                                                    <div class="on_sale">
                                                        <span>25% Off</span>
                                                    </div>
                                                </div>
                                                <div class="add-to-bag">
                                                    <a href="#"><i
                                                        class="icon-basket-loaded"></i></a>
                                                </div>                                       
                                            </div>
                                        </div>
                                        <div class="product_wrap">
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img src="<?= base_url() ?>/public/client//assets/images/el_img2.jpg" alt="el_img2">
                                                   
                                                </a>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title"><a href="shop-product-detail.html">Smart Watch
                                                        External</a></h6>
                                                <div class="product_price">
                                                    <span class="price">$55.00</span>
                                                    <del>$95.00</del>
                                                    <div class="on_sale">
                                                        <span>25% Off</span>
                                                    </div>
                                                </div>
                                                <div class="add-to-bag">
                                                    <a href="#"><i
                                                        class="icon-basket-loaded"></i></a>
                                                </div>                                       
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-12">
                                <div class="heading_tab_header">
                                    <div class="heading_s2">
                                        <h4>Top Rated Products</h4>
                                    </div>
                                    <div class="view_all">
                                        <a href="#" class="text_default"><span>View All</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="product_slider carousel_slider product_list owl-carousel owl-theme nav_style5"
                                    data-nav="true" data-dots="false" data-loop="true" data-margin="20"
                                    data-responsive='{"0":{"items": "1"}, "380":{"items": "1"}, "640":{"items": "2"}, "991":{"items": "1"}}'>
                                    <div class="item">
                                        <div class="product_wrap">
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img src="<?= base_url() ?>/public/client//assets/images/el_img5.jpg" alt="el_img5">
                                                    <img class="product_hover_img" src="<?= base_url() ?>/public/client//assets/images/el_hover_img5.jpg"
                                                        alt="el_hover_img5">
                                                </a>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title"><a href="shop-product-detail.html">Smart
                                                        Televisions</a></h6>
                                                <div class="product_price">
                                                    <span class="price">$45.00</span>
                                                    <del>$55.25</del>
                                                    <div class="on_sale">
                                                        <span>35% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:80%"></div>
                                                    </div>
                                                    <span class="rating_num">(21)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                        Phasellus blandit massa enim. Nullam id varius nunc id varius
                                                        nunc.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product_wrap">
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img src="<?= base_url() ?>/public/client//assets/images/el_img12.jpg" alt="el_img12">
                                                    <img class="product_hover_img"
                                                        src="<?= base_url() ?>/public/client//assets/images/el_hover_img12.jpg" alt="el_hover_img12">
                                                </a>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title"><a href="shop-product-detail.html">Sound
                                                        Equipment for Low</a></h6>
                                                <div class="product_price">
                                                    <span class="price">$45.00</span>
                                                    <del>$55.25</del>
                                                    <div class="on_sale">
                                                        <span>35% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:80%"></div>
                                                    </div>
                                                    <span class="rating_num">(21)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                        Phasellus blandit massa enim. Nullam id varius nunc id varius
                                                        nunc.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product_wrap">
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img src="<?= base_url() ?>/public/client//assets/images/el_img4.jpg" alt="el_img4">
                                                    <img class="product_hover_img" src="<?= base_url() ?>/public/client//assets/images/el_hover_img4.jpg"
                                                        alt="el_hover_img4">
                                                </a>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title"><a href="shop-product-detail.html">Audio
                                                        Equipment</a></h6>
                                                <div class="product_price">
                                                    <span class="price">$69.00</span>
                                                    <del>$89.00</del>
                                                    <div class="on_sale">
                                                        <span>20% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:70%"></div>
                                                    </div>
                                                    <span class="rating_num">(22)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                        Phasellus blandit massa enim. Nullam id varius nunc id varius
                                                        nunc.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product_wrap">
                                            <span class="pr_flash bg-danger">Hot</span>
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img src="<?= base_url() ?>/public/client//assets/images/el_img6.jpg" alt="el_img6">
                                                    <img class="product_hover_img" src="<?= base_url() ?>/public/client//assets/images/el_hover_img6.jpg"
                                                        alt="el_hover_img6">
                                                </a>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title"><a href="shop-product-detail.html">Samsung
                                                        Smart Phone</a></h6>
                                                <div class="product_price">
                                                    <span class="price">$55.00</span>
                                                    <del>$95.00</del>
                                                    <div class="on_sale">
                                                        <span>25% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:68%"></div>
                                                    </div>
                                                    <span class="rating_num">(15)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                        Phasellus blandit massa enim. Nullam id varius nunc id varius
                                                        nunc.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product_wrap">
                                            <span class="pr_flash bg-danger">Hot</span>
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img src="<?= base_url() ?>/public/client//assets/images/el_img8.jpg" alt="el_img8">
                                                    <img class="product_hover_img" src="<?= base_url() ?>/public/client//assets/images/el_hover_img8.jpg"
                                                        alt="el_hover_img8">
                                                </a>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title"><a
                                                        href="shop-product-detail.html">Surveillance camera</a></h6>
                                                <div class="product_price">
                                                    <span class="price">$55.00</span>
                                                    <del>$95.00</del>
                                                    <div class="on_sale">
                                                        <span>25% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:68%"></div>
                                                    </div>
                                                    <span class="rating_num">(15)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                        Phasellus blandit massa enim. Nullam id varius nunc id varius
                                                        nunc.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product_wrap">
                                            <span class="pr_flash bg-success">Sale</span>
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img src="<?= base_url() ?>/public/client//assets/images/el_img10.jpg" alt="el_img10">
                                                    <img class="product_hover_img"
                                                        src="<?= base_url() ?>/public/client//assets/images/el_hover_img10.jpg" alt="el_hover_img10">
                                                </a>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title"><a href="shop-product-detail.html">classical
                                                        Headphone</a></h6>
                                                <div class="product_price">
                                                    <span class="price">$68.00</span>
                                                    <del>$99.00</del>
                                                    <div class="on_sale">
                                                        <span>20% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:87%"></div>
                                                    </div>
                                                    <span class="rating_num">(25)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                        Phasellus blandit massa enim. Nullam id varius nunc id varius
                                                        nunc.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-12">
                                <div class="heading_tab_header">
                                    <div class="heading_s2">
                                        <h4>On Sale Products</h4>
                                    </div>
                                    <div class="view_all">
                                        <a href="#" class="text_default"><span>View All</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="product_slider carousel_slider product_list owl-carousel owl-theme nav_style5"
                                    data-nav="true" data-dots="false" data-loop="true" data-margin="20"
                                    data-responsive='{"0":{"items": "1"}, "380":{"items": "1"}, "640":{"items": "2"}, "991":{"items": "1"}}'>
                                    <div class="item">
                                        <div class="product_wrap">
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img src="<?= base_url() ?>/public/client//assets/images/el_img11.jpg" alt="el_img11">
                                                    <img class="product_hover_img"
                                                        src="<?= base_url() ?>/public/client//assets/images/el_hover_img11.jpg" alt="el_hover_img11">
                                                </a>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title"><a href="shop-product-detail.html">Basics
                                                        High-Speed HDMI</a></h6>
                                                <div class="product_price">
                                                    <span class="price">$69.00</span>
                                                    <del>$89.00</del>
                                                    <div class="on_sale">
                                                        <span>20% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:70%"></div>
                                                    </div>
                                                    <span class="rating_num">(22)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                        Phasellus blandit massa enim. Nullam id varius nunc id varius
                                                        nunc.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product_wrap">
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img src="<?= base_url() ?>/public/client//assets/images/el_img7.jpg" alt="el_img7">
                                                    <img class="product_hover_img" src="<?= base_url() ?>/public/client//assets/images/el_hover_img7.jpg"
                                                        alt="el_hover_img7">
                                                </a>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title"><a href="shop-product-detail.html">Audio
                                                        Theaters</a></h6>
                                                <div class="product_price">
                                                    <span class="price">$45.00</span>
                                                    <del>$55.25</del>

                                                    <div class="on_sale">
                                                        <span>35% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:80%"></div>
                                                    </div>
                                                    <span class="rating_num">(21)</span>
                                                </div>
                                                <div class="pr_desc">

                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                        Phasellus blandit massa enim. Nullam id varius nunc id varius
                                                        nunc.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product_wrap">
                                            <span class="pr_flash bg-danger">Hot</span>
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img src="<?= base_url() ?>/public/client//assets/images/el_img8.jpg" alt="el_img8">
                                                    <img class="product_hover_img" src="<?= base_url() ?>/public/client//assets/images/el_hover_img8.jpg"
                                                        alt="el_hover_img8">
                                                </a>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title"><a
                                                        href="shop-product-detail.html">Surveillance camera</a></h6>
                                                <div class="product_price">
                                                    <span class="price">$55.00</span>
                                                    <del>$95.00</del>
                                                    <div class="on_sale">
                                                        <span>25% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:68%"></div>
                                                    </div>
                                                    <span class="rating_num">(15)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                        Phasellus blandit massa enim. Nullam id varius nunc id varius
                                                        nunc.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="item">
                                        <div class="product_wrap">
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img src="<?= base_url() ?>/public/client//assets/images/el_img5.jpg" alt="el_img5">
                                                    <img class="product_hover_img" src="<?= base_url() ?>/public/client//assets/images/el_hover_img5.jpg"
                                                        alt="el_hover_img5">
                                                </a>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title"><a href="shop-product-detail.html">Smart
                                                        Televisions</a></h6>
                                                <div class="product_price">
                                                    <span class="price">$45.00</span>
                                                    <del>$55.25</del>
                                                    <div class="on_sale">
                                                        <span>35% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:80%"></div>
                                                    </div>
                                                    <span class="rating_num">(21)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                        Phasellus blandit massa enim. Nullam id varius nunc id varius
                                                        nunc.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product_wrap">
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img src="<?= base_url() ?>/public/client//assets/images/el_img9.jpg" alt="el_img9">
                                                    <img class="product_hover_img" src="<?= base_url() ?>/public/client//assets/images/el_hover_img9.jpg"
                                                        alt="el_hover_img9">
                                                </a>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title"><a href="shop-product-detail.html">oppo Reno3
                                                        Pro</a></h6>
                                                <div class="product_price">
                                                    <span class="price">$68.00</span>
                                                    <del>$99.00</del>
                                                    <div class="on_sale">
                                                        <span>20% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:87%"></div>
                                                    </div>
                                                    <span class="rating_num">(25)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                        Phasellus blandit massa enim. Nullam id varius nunc id varius
                                                        nunc.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product_wrap">
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img src="<?= base_url() ?>/public/client//assets/images/el_img1.jpg" alt="el_img1">
                                                    <img class="product_hover_img" src="<?= base_url() ?>/public/client//assets/images/el_hover_img1.jpg"
                                                        alt="el_hover_img1">
                                                </a>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title"><a href="shop-product-detail.html">Red &amp;
                                                        Black Headphone</a></h6>
                                                <div class="product_price">
                                                    <span class="price">$45.00</span>
                                                    <del>$55.25</del>
                                                    <div class="on_sale">
                                                        <span>35% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:80%"></div>
                                                    </div>
                                                    <span class="rating_num">(21)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                        Phasellus blandit massa enim. Nullam id varius nunc id varius
                                                        nunc.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SECTION SHOP -->

        <!-- START SECTION SUBSCRIBE NEWSLETTER -->

        <!-- START SECTION SUBSCRIBE NEWSLETTER -->

    </div>
    <!-- END MAIN CONTENT -->

    <!-- START FOOTER -->
    <footer class="footer_dark">
        <div class="footer_top small_pt pb_20">
            <div class="custom-container">
                <div class="row justify-content-around">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="widget">
                            <div class="footer_logo">
                                <a href="#"><img src="<?= base_url() ?>/public/client//assets/images/logo_dark.png" alt="logo"></a>
                            </div>
                            <p class="mb-3">If you are going to use of Lorem Ipsum need to be sure there isn't anything
                                hidden of text</p>
                            <ul class="contact_info">
                                <li>
                                    <i class="ti-location-pin"></i>
                                    <p>123 Street, Old Trafford, NewYork, USA</p>
                                </li>
                                <li>
                                    <i class="ti-email"></i>
                                    <a href="mailto:info@sitename.com">info@sitename.com</a>
                                </li>
                                <li>
                                    <i class="ti-mobile"></i>
                                    <p>+ 457 789 789 65</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="widget">
                            <h6 class="widget_title">Useful Links</h6>
                            <ul class="widget_links">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Location</a></li>
                                <li><a href="#">Affiliates</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="widget">
                            <h6 class="widget_title">My Account</h6>
                            <ul class="widget_links">
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">Discount</a></li>
                                <li><a href="#">Returns</a></li>
                                <li><a href="#">Orders History</a></li>
                                <li><a href="#">Order Tracking</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="bottom_footer border-top-tran">
            <div class="custom-container">
                <div class="row">
                    <div class="col-lg-4">
                        <p class="mb-lg-0 text-center">© 2020 All Rights Reserved by Bestwebcreator</p>
                    </div>
                    <div class="col-lg-4 order-lg-first">
                        <div class="widget mb-lg-0">
                            <ul class="social_icons text-center text-lg-left">
                                <li><a href="#" class="sc_facebook"><i class="ion-social-facebook"></i></a></li>
                                <li><a href="#" class="sc_twitter"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="#" class="sc_google"><i class="ion-social-googleplus"></i></a></li>
                                <li><a href="#" class="sc_youtube"><i class="ion-social-youtube-outline"></i></a></li>
                                <li><a href="#" class="sc_instagram"><i class="ion-social-instagram-outline"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <ul class="footer_payment text-center text-lg-right">
                            <li><a href="#"><img src="<?= base_url() ?>/public/client//assets/images/visa.png" alt="visa"></a></li>
                            <li><a href="#"><img src="<?= base_url() ?>/public/client//assets/images/discover.png" alt="discover"></a></li>
                            <li><a href="#"><img src="<?= base_url() ?>/public/client//assets/images/master_card.png" alt="master_card"></a></li>
                            <li><a href="#"><img src="<?= base_url() ?>/public/client//assets/images/paypal.png" alt="paypal"></a></li>
                            <li><a href="#"><img src="<?= base_url() ?>/public/client//assets/images/amarican_express.png" alt="amarican_express"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- END FOOTER -->

    <a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a>

    <!-- Latest jQuery -->
    <script src="<?= base_url() ?>/public/client//assets/js/jquery-1.12.4.min.js"></script>
    <!-- popper min js -->
    <script src="<?= base_url() ?>/public/client//assets/js/popper.min.js"></script>
    <!-- Latest compiled and minified Bootstrap -->
    <script src="<?= base_url() ?>/public/client//assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- owl-carousel min js  -->
    <script src="<?= base_url() ?>/public/client//assets/owlcarousel/js/owl.carousel.min.js"></script>
    <!-- magnific-popup min js  -->
    <script src="<?= base_url() ?>/public/client//assets/js/magnific-popup.min.js"></script>
    <!-- waypoints min js  -->
    <script src="<?= base_url() ?>/public/client//assets/js/waypoints.min.js"></script>
    <!-- parallax js  -->
    <script src="<?= base_url() ?>/public/client//assets/js/parallax.js"></script>
    <!-- countdown js  -->
    <script src="<?= base_url() ?>/public/client//assets/js/jquery.countdown.min.js"></script>
    <!-- imagesloaded js -->
    <script src="<?= base_url() ?>/public/client//assets/js/imagesloaded.pkgd.min.js"></script>
    <!-- isotope min js -->
    <script src="<?= base_url() ?>/public/client//assets/js/isotope.min.js"></script>
    <!-- jquery.dd.min js -->
    <script src="<?= base_url() ?>/public/client//assets/js/jquery.dd.min.js"></script>
    <!-- slick js -->
    <script src="<?= base_url() ?>/public/client//assets/js/slick.min.js"></script>
    <!-- elevatezoom js -->
    <script src="<?= base_url() ?>/public/client//assets/js/jquery.elevatezoom.js"></script>

    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <!-- scripts js -->
    <script src="<?= base_url() ?>/public/client//assets/js/scripts.js"></script>

</body>

</html>