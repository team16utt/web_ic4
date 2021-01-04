<?= $this->extend('_Layout') ?>
<?= $this->Section('content') ?>

<!-- START SECTION SHOP -->
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row align-items-center mb-4 pb-1">
                    <div class="col-12">
                        <div class="product_header">
                            <div class="product_header_left">
                                <div class="custom_select">
                                    <select class="form-control form-control-sm">
                                        <option value="order">Default sorting</option>
                                        <option value="popularity">Sort by popularity</option>
                                        <option value="date">Sort by newness</option>
                                        <option value="price">Sort by price: low to high</option>
                                        <option value="price-desc">Sort by price: high to low</option>
                                    </select>
                                </div>
                            </div>
                            <div class="product_header_right">
                                <div class="products_view">
                                    <!-- <a href="javascript:void(0);" class="shorting_icon grid active"><i class="ti-view-grid"></i></a> -->
                                    <!-- <a href="javascript:void(0);" class="shorting_icon list"><i class="ti-layout-list-thumb"></i></a> -->
                                </div>
                                <div class="custom_select">
                                    <select class="form-control form-control-sm">
                                        <option value="">Showing</option>
                                        <option value="9">9</option>
                                        <option value="12">12</option>
                                        <option value="18">18</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row shop_container">
                    <?php if (count($products) != 0) : ?>
                        <?php foreach ($products as $item) : ?>
                            <div class="col-lg-3 col-md-4 col-6 grid_item">
                                <div class="product">
                                    <!-- <span class="pr_flash bg-success">Sale</span> -->
                                    <a href="<?= base_url() ?>/product/<?= $item['product_id'] ?>">
                                        <div class="product_img">

                                            <img src="<?php if($item['image'][0] == 'h'){ echo $item['image'];} else echo base_url(). $item['image']?>" alt="<?php if($item['image'][0] == 'h'){ echo $item['image'];} else echo base_url(). $item['image']?>">

                                            

                                        </div>
                                    </a>
                                    <div class="product_info">
                                        <h6 class="product_title"><a href="<?= base_url() ?>/product/<?= $item['product_id'] ?>"><?= $item['name'] ?></a></h6>
                                        <div class="product_price">
                                            <span class="price"><?= $item['price'] ?></span>
                                            <!-- <del>$99.00</del>
                                    <div class="on_sale">
                                        <span>20% Off</span>
                                    </div> -->
                                        </div>
                                        <div class="add-to-bag">
                                            <a href="#" data-id="<?= $item['product_id'] ?>" onclick="addToCart(event, this)"><i class="icon-basket-loaded"></i> </a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <div>Không có sản phẩm</div>
                    <?php endif; ?>
                </div>
                <div class="row">
                    <div class="col-12">
                        <ul class="pagination mt-3 justify-content-center pagination_style1">
                            <?php
                            for ($i = 1; $i < $total_pages + 1; $i++) {
                                if ($page == $i) {
                                    echo "<li class='page-item active'><a class='page-link' href='#'>" . $i . "</a></li>";
                                } else {
                                    echo "<li class='page-item'><a class='page-link' href='?cid=" . $cid . "&page=" . $i . "'>" . $i . "</a></li>";
                                }
                            }
                            ?>
                            <!-- <li class="page-item active"><a class="page-link" href="#">1</a></li>

                            <li class="page-item"><a class="page-link" href="#">3</a></li> -->
                            <li class="page-item"><a class="page-link" href="?cid=<?= $cid . "&page=" . ++$page ?>"><i class="linearicons-arrow-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END SECTION SHOP -->
<!-- <ul class="pagination">
    <li><a href="?page=1">First</a></li>
    <li class="<?php if ($page <= 1) {
                    echo 'disabled';
                } ?>">
        <a href="<?php if ($page <= 1) {
                        echo '#';
                    } else {
                        echo "?page=" . ($page - 1);
                    } ?>">Prev</a>
    </li>
    <li class="<?php if ($page >= $total_pages) {
                    echo 'disabled';
                } ?>">
        <a href="<?php if ($page >= $total_pages) {
                        echo '#';
                    } else {
                        echo "?page=" . ($page + 1);
                    } ?>">Next</a>
    </li>
    <li><a href="?page=<?php echo $total_pages; ?>">Last</a></li>
</ul> -->
<?= $this->endSection() ?>