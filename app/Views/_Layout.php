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
    <title>1st Gear - Nhom2</title>
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
    <!-- jquery-ui CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/public/client/assets/css/jquery-ui.css">
    <!-- jquery-toast CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/public/client/assets/css/jquery.toast.min.css">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/public/client/assets/css/slick.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/client/assets/css/slick-theme.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/public/client/assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/client/assets/css/responsive.css">

    <!-- duong style -->
    <link rel="stylesheet" href="<?= base_url() ?>/public/client/assets/css/dtd-custom-style.css">

</head>

<body>


    <?= $this->include('_header') ?>


    <!-- START SECTION BREADCRUMB -->

    <!-- END SECTION BREADCRUMB -->

    <!-- START MAIN CONTENT -->
    <div class="main_content">

        <?= $this->renderSection('content') ?>


    </div>
    <!-- END MAIN CONTENT -->

    <?= $this->include('_footer') ?>


    <a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a>
    <a href="#" class="scrollup scroll-cart" style="display: none;"><i class="linearicons-cart"></i></i><span class="cart_count scroll-cart-count"></span></a>

    <!-- Latest jQuery -->
    <script src="<?= base_url() ?>/public/client/assets/js/jquery-1.12.4.min.js"></script>
    <!-- jquery-ui -->
    <script src="<?= base_url() ?>/public/client/assets/js/jquery-ui.js"></script>
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
    <!-- isotope-loadmore js -->
    <script src="<?= base_url() ?>/public/client/assets/js/isotope-loadmore.js"></script>
    <!-- elevatezoom js -->
    <script src="<?= base_url() ?>/public/client/assets/js/jquery.elevatezoom.js"></script>
    <!-- toast js -->
    <script src="<?= base_url() ?>/public/client/assets/js/jquery.toast.min.js"></script>
    <!-- scripts js -->
    <script src="<?= base_url() ?>/public/client/assets/js/scripts.js"></script>

    <!-- cart js -->

    <script src="<?= base_url() ?>/public/client/assets/js/cart-handler.js"></script>
    <?= $this->renderSection('_script') ?>
</body>

</html>