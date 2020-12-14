<?= $this->extend('_Layout') ?>
<?= $this->Section('content') ?>
<!-- START SECTION SHOP -->

<div class="section">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <h2><b>CHECK OUT</b></h2>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="medium_divider"></div>
                <div class="divider center_icon"><i class="linearicons-credit-card"></i></div>
                <div class="medium_divider"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="heading_s1">
                    <h4>Billing Details</h4>
                </div>
                <form method="post">
                    <div class="form-group">
                        <input type="text" required="" class="form-control" name="fname" placeholder="Họ và tên *">
                    </div>
                    <div class="form-group">
                        <input type="number" required="" class="form-control" name="fname"
                            placeholder="Số điện thoại *">
                    </div>
                    <div class="form-group">
                        <input type="email" required="" class="form-control" name="fname" placeholder="Email *">
                    </div>
                    <div class="form-group">
                        <div class="custom_select">
                            <select class="form-control">
                                <option value="">Tỉnh...</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="custom_select">
                            <select class="form-control">
                                <option value="">Huyện...</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="custom_select">
                            <select class="form-control">
                                <option value="">Xã...</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="billing_address" required=""
                            placeholder="Địa chỉ chi tiết">
                    </div>

                    <div class="form-group">
                        <div class="chek-form">
                            <div class="custome-checkbox">
                                <input class="form-check-input" type="checkbox" name="checkbox" id="createaccount">
                                <label class="form-check-label label_info" for="createaccount"><span>Bạn có muốn
                                        tạo tài khoản?</span></label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group create-account">
                        <input class="form-control" required="" type="password" placeholder="Password" name="password">
                    </div>
                    <div class="ship_detail">
                        <div class="form-group">
                            <div class="chek-form">
                                <div class="custome-checkbox">
                                    <input class="form-check-input" type="checkbox" name="checkbox"
                                        id="differentaddress">
                                    <label class="form-check-label label_info" for="differentaddress"><span>Giao
                                            hàng ở địa chỉ khác</span></label>
                                </div>
                            </div>
                        </div>
                        <div class="different_address">
                            <div class="form-group">
                                <input type="text" required="" class="form-control" name="fname"
                                    placeholder="Họ và tên *">
                            </div>
                            <div class="form-group">
                                <input type="number" required="" class="form-control" name="fname"
                                    placeholder="Số điện thoại *">
                            </div>
                            <div class="form-group">
                                <div class="custom_select">
                                    <select class="form-control">
                                        <option value="">Tỉnh...</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom_select">
                                    <select class="form-control">
                                        <option value="">Huyện...</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom_select">
                                    <select class="form-control">
                                        <option value="">Xã...</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="billing_address" required=""
                                    placeholder="Địa chỉ chi tiết">
                            </div>

                        </div>
                    </div>
                    <button class="btn btn-fill-out btn-block">Thanh toán</button>
                </form>
            </div>
            <div class="col-md-6">
                <div class="order_review">
                    <div class="heading_s1">
                        <h4>Your Orders</h4>
                    </div>
                    <div class="table-responsive order_table">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody class="checkout-cart">
                                <tr>
                                    <td>Blue Dress For Woman <span class="product-qty">x 2</span></td>
                                    <td>$90.00</td>
                                </tr>
                                <tr>
                                    <td>Lether Gray Tuxedo <span class="product-qty">x 1</span></td>
                                    <td>$55.00</td>
                                </tr>
                                <tr>
                                    <td>woman full sliv dress <span class="product-qty">x 3</span></td>
                                    <td>$204.00</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>SubTotal</th>
                                    <td class="product-subtotal">$349.00</td>
                                </tr>
                                <tr>
                                    <th>Shipping</th>
                                    <td>Free Shipping</td>
                                </tr>
                                <tr>
                                    <th>Total</th>
                                    <td class="product-subtotal">$349.00</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- END SECTION SHOP -->
<?= $this->endSection() ?>