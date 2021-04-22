<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="Anil z" name="author">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Shopwise is Powerful features and You Can Use The Perfect Build this Template For Any eCommerce Website. The template is built for sell Fashion Products, Shoes, Bags, Cosmetics, Clothes, Sunglasses, Furniture, Kids Products, Electronics, Stationery Products and Sporting Goods.">
    <meta name="keywords" content="ecommerce, electronics store, Fashion store, furniture store,  bootstrap 4, clean, minimal, modern, online store, responsive, retail, shopping, ecommerce store">

    <!-- SITE TITLE -->
    <title>1st Gear - Nhom1</title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>/public/client/assets/images/favicon.png">
    <!-- Animation CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/public/client/assets/css/animate.css">
    <!-- Latest Bootstrap min CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/public/client/assets/bootstrap/css/bootstrap.min.css">
    <!-- Google Font -->
    <link href="<?= base_url() ?>/public/client/assets/css.css?family=Roboto:100,300,400,500,700,900&display=swap" rel="stylesheet">
    <link href="<?= base_url() ?>/public/client/assets/css-1.css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/public/client/assets/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/client/assets/css/ionicons.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/client/assets/css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/client/assets/css/linearicons.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/client/assets/css/flaticon.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/client/assets/css/simple-line-icons.css">
    <!--- owl carousel CSS-->
    <link rel="stylesheet" href="<?= base_url() ?>/public/client/assets/owlcarousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/client/assets/owlcarousel/css/owl.theme.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/client/assets/owlcarousel/css/owl.theme.default.min.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/public/client/assets/css/magnific-popup.css">
    <!-- jquery-toast CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/public/client/assets/css/jquery.toast.min.css">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/public/client/assets/css/slick.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/client/assets/css/slick-theme.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/public/client/assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/client/assets/css/responsive.css">


    <!-- Hotjar Tracking Code for bestwebcreator.com -->
    <script>
        (function(h, o, t, j, a, r) {
            h.hj = h.hj || function() {
                (h.hj.q = h.hj.q || []).push(arguments)
            };
            h._hjSettings = {
                hjid: 2073024,
                hjsv: 6
            };
            a = o.getElementsByTagName('head')[0];
            r = o.createElement('script');
            r.async = 1;
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
                                        <input name="email" required="" type="email" class="form-control" placeholder="Enter Your Email">
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-fill-out btn-block text-uppercase" title="Subscribe" type="submit">Subscribe</button>
                                    </div>
                                </form>
                                <div class="chek-form">
                                    <div class="custome-checkbox">
                                        <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox3" value="">
                                        <label class="form-check-label" for="exampleCheckbox3"><span>Don't show this
                                                popup again!</span></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="background_bg h-100" data-img-src="<?= base_url() ?>/public/client/assets/images/popup_img3.jpg"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Screen Load Popup Section -->

    <!-- START HEADER -->
    <header class="header_wrap">

        <header class="middle-header dark_skin header_wrap fixed-top header_with_topbar">
            <div class="custom-container">
                <div class="nav_block">
                    <a class="navbar-brand" href="<?= base_url() ?>">
                        <img class="logo_light" src="<?= base_url() ?>/public/client/assets/images/logo_light.png" alt="logo">
                        <img class="logo_dark" src="<?= base_url() ?>/public/client/assets/images/logo_dark.png" alt="logo">
                    </a>
                    <div class="product_search_form rounded_input">
                        <form action="<?= base_url() ?>/search">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <!-- <div class="custom_select">
                                        <select class="first_null">
                                            <option value="">All Category</option>
                                            <option value="Dresses">Dresses</option>
                                            <option value="Shirt-Tops">Shirt & Tops</option>
                                            <option value="T-Shirt">T-Shirt</option>
                                            <option value="Pents">Pents</option>
                                            <option value="Jeans">Jeans</option>
                                        </select>
                                    </div> -->
                                </div>
                                <input class="form-control" placeholder="Tìm kiếm.." type="text" name="key" required>
                                <button type="submit" class="search_btn2"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <ul class="navbar-nav attr-nav align-items-center">
                        <li>
                            <?php session_start(); ?>
                            <?php if ($_SESSION['customer']) : ?>
                                Chào mừng quay trở lại, <?= $_SESSION['customer']["fullname"] ?>
                                <a href="<?= base_url() ?>/login/logout" class="btn btn-fill-out checkout">Đăng xuất</a>
                            <?php else : ?>

                            <?php endif; ?>
                        </li>
                        <li><a href="javascript:void(0);" class="nav-link search_trigger"><i class="linearicons-magnifier"></i></a>
                            <div class="search_wrap">
                                <span class="close-search"><i class="ion-ios-close-empty"></i></span>
                                <form>
                                    <input type="text" placeholder="Tìm kiếm.." class="form-control" id="search_input">
                                    <button type="submit" class="search_icon"><i class="ion-ios-search-strong"></i></button>
                                </form>
                            </div>
                            <div class="search_overlay"></div>
                        </li>
                        <li><a class="nav-link " href="<?= base_url() ?>/login"><i class="ti-user"></i></a></li>
                        <li class="dropdown cart_dropdown"><a class="nav-link cart_trigger" href="#" data-toggle="dropdown"><i class="linearicons-cart"></i><span class="cart_count"></span></a>
                            <div class="cart_box dropdown-menu dropdown-menu-right">
                                <ul class="cart_list">

                                </ul>
                                <div class="cart_footer">
                                    <p class="cart_total"></p>
                                    <p class="cart_buttons"><a href="<?= base_url() ?>/checkout" class="btn btn-fill-out checkout">Thanh toán</a></p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <div class="bottom_header dark_skin main_menu_uppercase border-top border-bottom">
            <div class="custom-container">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-3">
                        <div class="categories_wrap">
                            <button type="button" data-toggle="collapse" data-target="#navCatContent" aria-expanded="false" class="categories_btn">
                                <i class="linearicons-menu"></i><span>Danh mục sản phẩm</span>
                            </button>
                            <div id="navCatContent" class="nav_cat navbar collapse">
                                <ul>
                                    <li><a class="dropdown-item nav-link nav_item" href="<?= base_url() ?>/loai-hang/ban-phim"><i class="flaticon-console"></i> <span>Bàn phím</span></a></li>
                                    <li><a class="dropdown-item nav-link nav_item" href="<?= base_url() ?>/loai-hang/chuot"><i class="flaticon-mouse"></i> <span>Chuột</span></a></li>
                                    <li><a class="dropdown-item nav-link nav_item" href="<?= base_url() ?>/loai-hang/ghe-gaming"><i class="flaticon-chair"></i> <span>Ghế gaming</span></a></li>
                                    <li><a class="dropdown-item nav-link nav_item" href="<?= base_url() ?>/loai-hang/laptop"><i class="flaticon-tv"></i> <span>Laptop</span></a></li>
                                    <li><a class="dropdown-item nav-link nav_item" href="<?= base_url() ?>/loai-hang/linh-kien-pc"><i class="flaticon-music-system"></i> <span>Linh kiện PC</span></a></li>
                                    <li><a class="dropdown-item nav-link nav_item" href="<?= base_url() ?>/loai-hang/man-hinh"><i class="flaticon-monitor"></i> <span>Màn hình</span></a></li>
                                    <li><a class="dropdown-item nav-link nav_item" href="<?= base_url() ?>/loai-hang/tai-nghe"><i class="flaticon-headphones"></i> <span>Tai nghe</span></a></li>
                                    <li><a class="dropdown-item nav-link nav_item" href="<?= base_url() ?>/loai-hang/thiet-bi-livestream"><i class="flaticon-printer"></i> <span>Thiết bị Livestream</span></a></li>
                                    <li>
                                        <ul class="more_slide_open">
                                            <li><a class="dropdown-item nav-link nav_item" href="<?= base_url() ?>/loai-hang/ban-phim"><i class="flaticon-fax"></i> <span>Fax Machine</span></a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <!-- <div class="more_categories">More Categories</div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8 col-sm-6 col-9">
                        <nav class="navbar navbar-expand-lg">
                            <button class="navbar-toggler side_navbar_toggler" type="button" data-toggle="collapse" data-target="#navbarSidetoggle" aria-expanded="false">
                                <span class="ion-android-menu"></span>
                            </button>
                            <div class="pr_search_icon">
                                <a href="javascript:void(0);" class="nav-link pr_search_trigger"><i class="linearicons-magnifier"></i></a>
                            </div>
                            <div class="collapse navbar-collapse mobile_side_menu" id="navbarSidetoggle">
                                <ul class="navbar-nav">
                                    <li><a class="nav-link nav_item" href="<?= base_url() ?>">Trang chủ</a></li>
                                    <li class="dropdown">
                                        <a data-toggle="dropdown" class="nav-link dropdown-toggle" href="#">Thể loại</a>
                                        <div class="dropdown-menu">
                                            <ul>
                                                <?php foreach ($category as $item) : ?>
                                                    <li><a class="dropdown-item nav-link nav_item" href="loai-hang/<?= $item['metaTitle'] ?>"><?= $item['name'] ?></a></li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a class="nav-link nav_item" href="<?= base_url() ?>/about">Giới thiệu</a></li>
                                    <li><a class="nav-link nav_item" href="<?= base_url() ?>/contact">Liên hệ</a></li>
                                </ul>
                            </div>
                            <div class="contact_phone contact_support">
                                <i class="linearicons-phone-wave"></i>
                                <span>098-117-3413</span>
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
                        <div id="carouselExampleControls" class="carousel slide carousel-fade light_arrow" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active background_bg" data-img-src="<?= $banner[0]['link'] ?>">
                                    <div class="banner_slide_content banner_content_inner">
                                        <div class="col-lg-7 col-10">
                                            <!-- <div class="banner_content3 overflow-hidden">
                                                <h5 class="mb-3 staggered-animation font-weight-light" data-animation="slideInLeft" data-animation-delay="0.5s">Get up to
                                                    50% off Today Only!</h5>
                                                <h2 class="staggered-animation" data-animation="slideInLeft" data-animation-delay="1s">Dual Camera 20MP</h2>
                                                <h4 class="staggered-animation mb-4 product-price" data-animation="slideInLeft" data-animation-delay="1.2s"><span class="price">$45.00</span><del>$55.25</del></h4>
                                                <a class="btn btn-fill-out btn-radius staggered-animation text-uppercase" href="shop-left-sidebar.html" data-animation="slideInLeft" data-animation-delay="1.5s">Shop Now</a>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item background_bg" data-img-src="<?= $banner[1]['link'] ?>">
                                    <div class="banner_slide_content banner_content_inner">
                                        <div class="col-lg-8 col-10">
                                            <!-- <div class="banner_content3 overflow-hidden">
                                                <h5 class="mb-3 staggered-animation font-weight-light" data-animation="slideInLeft" data-animation-delay="0.5s">50% off in
                                                    all products</h5>
                                                <h2 class="staggered-animation" data-animation="slideInLeft" data-animation-delay="1s">Smart Watches</h2>
                                                <h4 class="staggered-animation mb-3 mb-sm-4 product-price" data-animation="slideInLeft" data-animation-delay="1.2s"><span class="price">$45.00</span><del>$55.25</del></h4>
                                                <a class="btn btn-fill-out btn-radius staggered-animation text-uppercase" href="shop-left-sidebar.html" data-animation="slideInLeft" data-animation-delay="1.5s">Shop Now</a>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item background_bg" data-img-src="<?= $banner[2]['link'] ?>">
                                    <div class="banner_slide_content banner_content_inner">
                                        <div class="col-lg-8 col-10">
                                            <!-- <div class="banner_content3 overflow-hidden">
                                                <h5 class="mb-3 staggered-animation font-weight-light" data-animation="slideInLeft" data-animation-delay="0.5s">Taking your
                                                    Viewing Experience to Next Level</h5>
                                                <h2 class="staggered-animation" data-animation="slideInLeft" data-animation-delay="1s">Beat Headphone</h2>
                                                <h4 class="staggered-animation mb-4 product-price" data-animation="slideInLeft" data-animation-delay="1.2s"><span class="price">$45.00</span><del>$55.25</del></h4>
                                                <a class="btn btn-fill-out btn-radius staggered-animation text-uppercase" href="shop-left-sidebar.html" data-animation="slideInLeft" data-animation-delay="1.5s">Shop Now</a>
                                            </div> -->
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
                                <img src="<?= $banner[3]['link'] ?>" alt="<?= $banner[3]['name'] ?>">
                            </div>
                        </a>
                    </div>
                    <div class="shop_banner2 el_banner2">
                        <a href="#" class="hover_effect1">
                            <!-- <div class="el_title text_white">
                                <h6>MAC Computer</h6>
                                <span><u>Shop Now</u></span>
                            </div> -->
                            <div class="el_img">
                                <img src="<?= $banner[4]['link'] ?>" alt="<?= $banner[4]['name'] ?>">
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
                                <img src="<?= base_url() ?>/public/client/assets/images/logitechtest.png" alt="shop_banner_img6">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-9">
                        <div class="row">
                            <div class="col-12">
                                <div class="heading_tab_header">
                                    <div class="heading_s2">
                                        <h4>Sản phẩm mới nhất</h4>
                                    </div>
                                    <div class="view_all">
                                        <a href="<?= base_url() ?>/san-pham-moi" class="text_default"><i class="linearicons-power"></i> <span>Xem tất cả</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="tab_slider">
                                    <div class="tab-pane fade show active" id="arrival" role="tabpanel" aria-labelledby="arrival-tab">
                                        <div class="product_slider carousel_slider owl-carousel owl-theme dot_style1" data-loop="true" data-margin="20" data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "991":{"items": "4"}}'>
                                            <?php foreach ($newsProduct as $key => $item) : ?>
                                                <div class="item">
                                                    <div class="product_wrap">
                                                        <div class="product_img">
                                                            <a href="<?= base_url() ?>/product/<?= $item['product_id'] ?>">
                                                                <img src="<?= $item['image'] ?>" alt="el_img7">
                                                                <img class="product_hover_img" src="<?= $item['image'] ?>" alt="el_hover_img7">
                                                            </a>
                                                        </div>
                                                        <div class="product_info">
                                                            <h6 class="product_title"><a href="<?= base_url() ?>/product/<?= $item['product_id'] ?>"><?= $item['name'] ?></a></h6>
                                                            <div class="product_price">
                                                                <!-- <span class="price"><?php if (intval($item['price']) == 0) echo $item['price'];
                                                                                            else echo $item['price'] . ' đ' ?></span> -->
                                                                <span class="price"><?= $item['price'] ?></span>
                                                                <!-- <del>$55.25</del>
                                                                <div class="on_sale">
                                                                    <span>35% Off</span>
                                                                </div> -->
                                                            </div>
                                                            <div class="add-to-bag">
                                                                <a href="#" data-id="<?= $item['product_id'] ?>" onclick="addToCart(event, this)"><i class="icon-basket-loaded"></i> </a>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="sellers" role="tabpanel" aria-labelledby="sellers-tab">
                                        <div class="product_slider carousel_slider owl-carousel owl-theme dot_style1" data-loop="true" data-margin="20" data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "991":{"items": "4"}}'>
                                            <?php foreach ($hotProduct as $item) : ?>
                                                <div class="item">
                                                    <div class="product_wrap">
                                                        <div class="product_img">
                                                            <a href="<?= base_url() ?>/product/<?= $item['product_id'] ?>">
                                                                <img src="<?= $item['image'] ?>" alt="el_img7">
                                                                <img class="product_hover_img" src="<?= $item['image'] ?>" alt="el_hover_img7">
                                                            </a>
                                                        </div>
                                                        <div class="product_info">
                                                            <h6 class="product_title"><a href="<?= base_url() ?>/product/<?= $item['product_id'] ?>"><?= $item['name'] ?></a></h6>
                                                            <div class="product_price">
                                                                <span class="price"><?php if (intval($item['price']) == 0) echo $item['price'];
                                                                                    else echo $item['price'] . ' đ' ?></span>
                                                                <!-- <del>$55.25</del>
                                                                <div class="on_sale">
                                                                    <span>35% Off</span>
                                                                </div> -->
                                                            </div>
                                                            <div class="add-to-bag">
                                                                <a href="#" data-id="<?= $item['product_id'] ?>" onclick="addToCart(event, this)"><i class="icon-basket-loaded"></i> </a>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="featured" role="tabpanel" aria-labelledby="featured-tab">
                                        <div class="product_slider carousel_slider owl-carousel owl-theme dot_style1" data-loop="true" data-margin="20" data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "991":{"items": "4"}}'>
                                            <div class="item">
                                                <div class="product_wrap">
                                                    <span class="pr_flash bg-danger">Hot</span>
                                                    <div class="product_img">
                                                        <a href="shop-product-detail.html">
                                                            <img src="<?= base_url() ?>/public/client/assets/images/el_img8.jpg" alt="el_img8">
                                                            <img class="product_hover_img" src="<?= base_url() ?>/public/client/assets/images/el_hover_img8.jpg" alt="el_hover_img8">
                                                        </a>
                                                        <div class="product_action_box">
                                                            <ul class="list_none pr_action_btn">
                                                                <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To
                                                                        Cart</a></li>
                                                                <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                                                <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                                                <li><a href="#"><i class="icon-heart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product_info">
                                                        <h6 class="product_title"><a href="shop-product-detail.html">Surveillance camera</a>
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
                                                            <img src="<?= base_url() ?>/public/client/assets/images/el_img4.jpg" alt="el_img4">
                                                            <img class="product_hover_img" src="<?= base_url() ?>/public/client/assets/images/el_hover_img4.jpg" alt="el_hover_img4">
                                                        </a>
                                                        <div class="product_action_box">
                                                            <ul class="list_none pr_action_btn">
                                                                <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To
                                                                        Cart</a></li>
                                                                <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                                                <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                                                <li><a href="#"><i class="icon-heart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product_info">
                                                        <h6 class="product_title"><a href="shop-product-detail.html">Audio Equipment</a></h6>
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
                                                            <img src="<?= base_url() ?>/public/client/assets/images/el_img11.jpg" alt="el_img11">
                                                            <img class="product_hover_img" src="<?= base_url() ?>/public/client/assets/images/el_hover_img11.jpg" alt="el_hover_img11">
                                                        </a>
                                                        <div class="product_action_box">
                                                            <ul class="list_none pr_action_btn">
                                                                <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To
                                                                        Cart</a></li>
                                                                <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                                                <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                                                <li><a href="#"><i class="icon-heart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product_info">
                                                        <h6 class="product_title"><a href="shop-product-detail.html">Basics High-Speed
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
                                                            <img src="<?= base_url() ?>/public/client/assets/images/el_img1.jpg" alt="el_img1">
                                                            <img class="product_hover_img" src="<?= base_url() ?>/public/client/assets/images/el_hover_img1.jpg" alt="el_hover_img1">
                                                        </a>
                                                        <div class="product_action_box">
                                                            <ul class="list_none pr_action_btn">
                                                                <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To
                                                                        Cart</a></li>
                                                                <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                                                <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
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
                                                            <img src="<?= base_url() ?>/public/client/assets/images/el_img7.jpg" alt="el_img7">
                                                            <img class="product_hover_img" src="<?= base_url() ?>/public/client/assets/images/el_hover_img7.jpg" alt="el_hover_img7">
                                                        </a>
                                                        <div class="product_action_box">
                                                            <ul class="list_none pr_action_btn">
                                                                <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To
                                                                        Cart</a></li>
                                                                <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                                                <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                                                <li><a href="#"><i class="icon-heart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product_info">
                                                        <h6 class="product_title"><a href="shop-product-detail.html">Audio Theaters</a></h6>
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
                                                            <img src="<?= base_url() ?>/public/client/assets/images/el_img6.jpg" alt="el_img6">
                                                            <img class="product_hover_img" src="<?= base_url() ?>/public/client/assets/images/el_hover_img6.jpg" alt="el_hover_img6">
                                                        </a>
                                                        <div class="product_action_box">
                                                            <ul class="list_none pr_action_btn">
                                                                <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To
                                                                        Cart</a></li>
                                                                <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                                                <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                                                <li><a href="#"><i class="icon-heart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product_info">
                                                        <h6 class="product_title"><a href="shop-product-detail.html">Samsung Smart Phone</a>
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
                                    <div class="tab-pane fade" id="special" role="tabpanel" aria-labelledby="special-tab">
                                        <div class="product_slider carousel_slider owl-carousel owl-theme dot_style1" data-loop="true" data-margin="20" data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "991":{"items": "4"}}'>
                                            <div class="item">
                                                <div class="product_wrap">
                                                    <div class="product_img">
                                                        <a href="shop-product-detail.html">
                                                            <img src="<?= base_url() ?>/public/client/assets/images/el_img2.jpg" alt="el_img2">
                                                            <img class="product_hover_img" src="<?= base_url() ?>/public/client/assets/images/el_hover_img2.jpg" alt="el_hover_img2">
                                                        </a>
                                                        <div class="product_action_box">
                                                            <ul class="list_none pr_action_btn">
                                                                <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To
                                                                        Cart</a></li>
                                                                <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                                                <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                                                <li><a href="#"><i class="icon-heart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product_info">
                                                        <h6 class="product_title"><a href="shop-product-detail.html">Smart Watch External</a>
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
                                                            <img src="<?= base_url() ?>/public/client/assets/images/el_img5.jpg" alt="el_img5">
                                                            <img class="product_hover_img" src="<?= base_url() ?>/public/client/assets/images/el_hover_img5.jpg" alt="el_hover_img5">
                                                        </a>
                                                        <div class="product_action_box">
                                                            <ul class="list_none pr_action_btn">
                                                                <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To
                                                                        Cart</a></li>
                                                                <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                                                <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                                                <li><a href="#"><i class="icon-heart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product_info">
                                                        <h6 class="product_title"><a href="shop-product-detail.html">Smart Televisions</a>
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
                                                            <img src="<?= base_url() ?>/public/client/assets/images/el_img9.jpg" alt="el_img9">
                                                            <img class="product_hover_img" src="<?= base_url() ?>/public/client/assets/images/el_hover_img9.jpg" alt="el_hover_img9">
                                                        </a>
                                                        <div class="product_action_box">
                                                            <ul class="list_none pr_action_btn">
                                                                <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To
                                                                        Cart</a></li>
                                                                <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                                                <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                                                <li><a href="#"><i class="icon-heart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product_info">
                                                        <h6 class="product_title"><a href="shop-product-detail.html">oppo Reno3 Pro</a></h6>
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
                                                            <img src="<?= base_url() ?>/public/client/assets/images/el_img7.jpg" alt="el_img7">
                                                            <img class="product_hover_img" src="<?= base_url() ?>/public/client/assets/images/el_hover_img7.jpg" alt="el_hover_img7">
                                                        </a>
                                                        <div class="product_action_box">
                                                            <ul class="list_none pr_action_btn">
                                                                <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To
                                                                        Cart</a></li>
                                                                <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                                                <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                                                <li><a href="#"><i class="icon-heart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product_info">
                                                        <h6 class="product_title"><a href="shop-product-detail.html">Audio Theaters</a></h6>
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
                                                            <img src="<?= base_url() ?>/public/client/assets/images/el_img5.jpg" alt="el_img5">
                                                            <img class="product_hover_img" src="<?= base_url() ?>/public/client/assets/images/el_hover_img5.jpg" alt="el_hover_img5">
                                                        </a>
                                                        <div class="product_action_box">
                                                            <ul class="list_none pr_action_btn">
                                                                <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To
                                                                        Cart</a></li>
                                                                <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                                                <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                                                <li><a href="#"><i class="icon-heart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product_info">
                                                        <h6 class="product_title"><a href="shop-product-detail.html">Smart Televisions</a>
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
                                                            <img src="<?= base_url() ?>/public/client/assets/images/el_img12.jpg" alt="el_img12">
                                                            <img class="product_hover_img" src="<?= base_url() ?>/public/client/assets/images/el_hover_img12.jpg" alt="el_hover_img12">
                                                        </a>
                                                        <div class="product_action_box">
                                                            <ul class="list_none pr_action_btn">
                                                                <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To
                                                                        Cart</a></li>
                                                                <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                                                <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                                                <li><a href="#"><i class="icon-heart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product_info">
                                                        <h6 class="product_title"><a href="shop-product-detail.html">Sound Equipment for
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
                                <img src="<?= base_url() ?>/public/client/assets/images/shop_banner_img10.jpg" alt="shop_banner_img10">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-9">
                        <div class="row">
                            <div class="col-12">
                                <div class="heading_tab_header">
                                    <div class="heading_s2">
                                        <h4>Sản phẩm hot</h4>
                                    </div>
                                    <div class="view_all">
                                        <a href="<?= base_url() ?>/san-pham-hot" class="text_default"><i class="linearicons-power"></i> <span>Xem tất cả</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="product_slider carousel_slider owl-carousel owl-theme dot_style1" data-loop="true" data-margin="20" data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "991":{"items": "4"}}'>
                                    <?php foreach ($hotProduct as $item) : ?>
                                        <div class="item">
                                            <div class="product_wrap">
                                                <div class="product_img">
                                                    <a href="<?= base_url() ?>/product/<?= $item['product_id'] ?>">
                                                        <img src="<?= $item['image'] ?>" alt="el_img7">
                                                        <img class="product_hover_img" src="<?= $item['image'] ?>" alt="el_hover_img7">
                                                    </a>
                                                </div>
                                                <div class="product_info">
                                                    <h6 class="product_title"><a href="<?= base_url() ?>/product/<?= $item['product_id'] ?>"><?= $item['name'] ?></a></h6>
                                                    <div class="product_price">
                                                        <!-- <span class="price"><?php if (intval($item['price']) == 0) echo $item['price'];
                                                                                    else echo $item['price'] . ' đ' ?></span> -->
                                                        <span class="price"><?= $item['price'] ?></span>
                                                        <!-- <del>$55.25</del>
                                                                <div class="on_sale">
                                                                    <span>35% Off</span>
                                                                </div> -->
                                                    </div>
                                                    <div class="add-to-bag">
                                                        <a href="#" data-id="<?= $item['product_id'] ?>" onclick="addToCart(event, this)"><i class="icon-basket-loaded"></i></a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
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
                                <div class="heading_s2" style="margin: 0 auto">
                                    <h4>Thương hiệu</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="client_logo carousel_slider owl-carousel owl-theme nav_style3" data-dots="false" data-nav="true" data-margin="30" data-loop="true" data-autoplay="true" data-responsive='{"0":{"items": "2"}, "480":{"items": "3"}, "767":{"items": "4"}, "991":{"items": "5"}, "1199":{"items": "6"}}'>
                                <?php foreach ($suppliers as $item) : ?>
                                    <div class="item">
                                        <div class="cl_logo">
                                            <img src="<?= $item['image'] ?>" alt="cl_logo">
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END SECTION CLIENT LOGO -->

            <!-- START SECTION SHOP INFO -->

            <!-- END SECTION SHOP INFO -->
            <!-- START SECTION TESTIMONIAL -->
            <div class="section bg_redon">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="heading_s1 text-center">
                                <h2>Khách hàng nói gì!</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-9">
                            <div class="testimonial_wrap testimonial_style1 carousel_slider owl-carousel owl-theme nav_style2" data-nav="true" data-dots="false" data-center="true" data-loop="true" data-autoplay="true" data-items='1'>
                                <?php foreach ($comment as $item) : ?>
                                    <div class="testimonial_box">
                                        <div class="testimonial_desc">
                                            <p><?= $item['content'] ?></p>
                                        </div>
                                        <div class="author_wrap">
                                            <div class="author_img">
                                                <img src="https://i.pinimg.com/originals/c2/9a/7d/c29a7d29348b1a3f502803ab9d8355cc.png" alt="user_img1">
                                            </div>
                                            <div class="author_name">
                                                <h6><?= $item['author'] ?></h6>
                                                <span><?= $item['address'] ?></span>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="middle_footer">
                <div class="custom-container">
                    <div class="row">
                        <div class="col-12">

                            <div class="shopping_info">
                                <div class="row justify-content-center">
                                    <div class="col-md-4">
                                        <div class="icon_box icon_box_style2">
                                            <div class="icon">
                                                <i class="flaticon-shipped"></i>
                                            </div>
                                            <div class="icon_box_content">
                                                <h5>Miễn phí vận chuyển</h5>
                                                <p>Miễn phí vận chuyển nếu dưới 20 km.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="icon_box icon_box_style2">
                                            <div class="icon">
                                                <i class="flaticon-money-back"></i>
                                            </div>
                                            <div class="icon_box_content">
                                                <h5>Hỗ trợ trả góp</h5>
                                                <p>Chỉ cần có CMND và sổ hộ khẩu.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="icon_box icon_box_style2">
                                            <div class="icon">
                                                <i class="flaticon-support"></i>
                                            </div>
                                            <div class="icon_box_content">
                                                <h5>Đội ngũ nhiệt tình</h5>
                                                <p>Nhân viên trực 24/7 hỗ trợ.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END SECTION TESTIMONIAL -->
            <!-- END SECTION SHOP -->

            <!-- START SECTION SUBSCRIBE NEWSLETTER -->

            <!-- START SECTION SUBSCRIBE NEWSLETTER -->

        </div>
        <!-- END MAIN CONTENT -->

        <!-- START FOOTER -->
        <?= $this->include('_footer') ?>
        <!-- END FOOTER -->

        <a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a>

        <!-- Latest jQuery -->
        <script src="<?= base_url() ?>/public/client/assets/js/jquery-1.12.4.min.js"></script>
        <!-- popper min js -->
        <script src="<?= base_url() ?>/public/client/assets/js/popper.min.js"></script>
        <!-- Latest compiled and minified Bootstrap -->
        <script src="<?= base_url() ?>/public/client/assets/bootstrap/js/bootstrap.min.js"></script>
        <!-- owl-carousel min js  -->
        <script src="<?= base_url() ?>/public/client/assets/owlcarousel/js/owl.carousel.min.js"></script>
        <!-- magnific-popup min js  -->
        <script src="<?= base_url() ?>/public/client/assets/js/magnific-popup.min.js"></script>
        <!-- waypoints min js  -->
        <script src="<?= base_url() ?>/public/client/assets/js/waypoints.min.js"></script>
        <!-- parallax js  -->
        <script src="<?= base_url() ?>/public/client/assets/js/parallax.js"></script>
        <!-- countdown js  -->
        <script src="<?= base_url() ?>/public/client/assets/js/jquery.countdown.min.js"></script>
        <!-- imagesloaded js -->
        <script src="<?= base_url() ?>/public/client/assets/js/imagesloaded.pkgd.min.js"></script>
        <!-- isotope min js -->
        <script src="<?= base_url() ?>/public/client/assets/js/isotope.min.js"></script>
        <!-- jquery.dd.min js -->
        <script src="<?= base_url() ?>/public/client/assets/js/jquery.dd.min.js"></script>
        <!-- slick js -->
        <script src="<?= base_url() ?>/public/client/assets/js/slick.min.js"></script>
        <!-- elevatezoom js -->
        <script src="<?= base_url() ?>/public/client/assets/js/jquery.elevatezoom.js"></script>
        <!-- toast js -->
        <script src="<?= base_url() ?>/public/client/assets/js/jquery.toast.min.js"></script>

        <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
        <!-- scripts js -->
        <script src="<?= base_url() ?>/public/client/assets/js/scripts.js"></script>

        <script src="<?= base_url() ?>/public/client/assets/js/cart-handler.js"></script>
</body>

</html>