<?= $this->extend('_Layout') ?>
<?= $this->section('content') ?>
<!-- START SECTION SHOP -->
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-4 mb-md-0">
                <div class="product-image">

                    <div class="product_img_box">
                        <img id="product_img" src='<?= $productDetail['images'][0]['imageThumb'] ?>' data-zoom-image="<?= $productDetail['images'][0]['imageThumb'] ?>" alt="<?= $productDetail['name'] ?>">
                        <a href="#" class="product_img_zoom" title="Zoom">
                            <span class="linearicons-zoom-in"></span>
                        </a>
                    </div>
                    <div id="pr_item_gallery" class="product_gallery_item slick_slider" data-slides-to-show="4" data-slides-to-scroll="2" data-infinite="false">
                        <?php foreach ($productDetail['images'] as $image) : ?>
                            <div class="item">
                                <a href="#" class="product_gallery_item" data-image="<?= $image['imageThumb'] ?>" data-zoom-image="<?= $image['imageThumb'] ?>">
                                    <img src="<?= $image['imageThumb'] ?>" alt="<?= $productDetail['name'] ?>" />
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="pr_detail">
                    <div class="product_description">
                        <h4 class="product_title"><a href="#"><?= $productDetail['name'] ?></a></h4>
                        <div class="product_price" style="float: none !important;">
                            <span class="price"><?= $productDetail['price'] ?></span>
                            <!-- <del>$55.25</del>
                                    <div class="on_sale">
                                        <span>35% Off</span>
                                    </div> -->
                        </div>

                        <div class="pr_desc">
                            <p>Bảo hành: 12 tháng</p>
                        </div>
                        <!-- <div class="product_sort_info">
                                    <ul>
                                        <li><i class="linearicons-shield-check"></i> 1 Year AL Jazeera Brand Warranty
                                        </li>
                                        <li><i class="linearicons-sync"></i> 30 Day Return Policy</li>
                                        <li><i class="linearicons-bag-dollar"></i> Cash on Delivery available</li>
                                    </ul>
                                </div> -->

                    </div>
                    <hr>
                    <div class="cart_extra">
                        <div class="cart-product-quantity">
                            <div class="quantity">
                                <input type="button" value="-" class="minus">
                                <input type="text" name="quantity" value="1" title="Qty" class="qty" size="4">
                                <input type="button" value="+" class="plus">
                            </div>
                        </div>
                        <div class="cart_btn">
                            <a class="btn btn-fill-out btn-addtocart" type="button" onclick="addToCart(event, this)" style="color:white;"><i class=" icon-basket-loaded"></i>Thêm vào giỏ hàng</a>
                        </div>
                    </div>
                    <hr>
                    <ul class="product-meta">
                        <li>Mã sản phẩm: <a href="#"><?= $productDetail['productCode'] ?></a></li>
                        <!-- <li>Category: <a href="#">Clothing</a></li>
                                <li>Tags: <a href="#" rel="tag">Cloth</a>, <a href="#" rel="tag">printed</a> </li> -->
                    </ul>

                    <!-- <div class="product_share">
                                <span>Share:</span>
                                <ul class="social_icons">
                                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                    <li><a href="#"><i class="ion-social-youtube-outline"></i></a></li>
                                    <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                                </ul>
                            </div> -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="large_divider clearfix"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="tab-style3">
                    <ul class="nav nav-tabs" role="tablist">

                        <li class="nav-item">
                            <a class="nav-link active" id="Additional-info-tab" data-toggle="tab" href="#Additional-info" role="tab" aria-controls="Additional-info" aria-selected="false">Thông số kỹ thuật</a>
                        </li>

                    </ul>
                    <div class="tab-content shop_info_tab">
                        <div class="tab-pane fade show active" id="Additional-info" role="tabpanel" aria-labelledby="Additional-info-tab">
                            <table class="table table-bordered">
                                <?php
                                if ($productDetail['featureData'] == null) {
                                    echo "
                                                <script>
                                                const element = document.querySelector('#Additional-info');
                                                element.innerHTML = 'Chưa cập nhật';
                                                </script>";
                                }
                                $featureData = explode('|', $productDetail['featureData']);
                                $featureData_item = [];
                                foreach ($featureData as $item) {
                                    $value = explode(':', $item);
                                    array_push($featureData_item, $value);
                                }
                                ?>
                                <?php foreach ($featureData_item as $item) : ?>
                                    <tr>
                                        <td><?= $item[0] ?></td>
                                        <td><?= $item[1] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="small_divider"></div>
                <div class="divider"></div>
                <div class="medium_divider"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="heading_s1">
                    <h3>Sản phẩm liên quan</h3>
                </div>
                <div class="releted_product_slider carousel_slider owl-carousel owl-theme" data-margin="20" data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "1199":{"items": "4"}}'>
                    <?php foreach ($relatedProduct as $item) : ?>
                        <div class="item">
                            <div class="product">
                                <div class="product_img">
                                    <a href="<?= base_url() ?>/product/<?= $item['product_id'] ?>">
                                        <img src="<?= $item['image'] ?>" alt="<?= $item['name'] ?>">
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
                                        <a href="#"><i class="icon-basket-loaded"></i></a>
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
<!-- END SECTION SHOP -->

<?= $this->endSection() ?>