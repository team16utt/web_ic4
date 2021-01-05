<?= $this->extend('_Layout') ?>
<?= $this->Section('content') ?>
<?php session_Start() ?>
<!-- START SECTION SHOP -->

<div class="section">
    <div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 200px;">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <h2><b>GIỎ HÀNG</b></h2>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="medium_divider"></div>
                    <div class="divider center_icon"><i class="linearicons-credit-card"></i></div>
                    <div class="medium_divider"></div>
                </div>
            </div>
            <div class="row">
                <?php if ($message == "success") : ?>
                    <script>
                        localStorage.removeItem('cart');
                    </script>
                    <div class="alert alert-success">
                        <strong>Đặt hàng thành công !</strong> Vui lòng liên hệ email CSKH@gear16.com hoặc số điện thoại 0981173413 để thêm thông tin.
                    </div>
                <?php elseif ($message == "fail") : ?>
                    <div class="alert alert-danger">
                        <strong>Đặt hàng không thành công !</strong> Vui lòng liên hệ email CSKH@gear16.com hoặc số điện thoại 0981173413 để thêm thông tin.
                    </div>
                <?php endif; ?>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="heading_s1">
                        <h4>Chi tiết đơn hàng</h4>
                    </div>
                    <form action="<?= base_url() ?>/checkout" method="post">
                        <div class="form-group">
                            <input type="text" required="" class="form-control" name="cName" placeholder="Họ và tên *">
                        </div>
                        <div class="form-group">
                            <input type="text" required="" class="form-control" name="cPhone" placeholder="Số điện thoại *">
                        </div>
                        <div class="form-group">
                            <input type="email" required="" class="form-control" name="cEmail" placeholder="Email *">
                        </div>
                        <!-- <div class="form-group">
                            <div class="custom_select">
                                <select class="form-control" id="tinhid" onchange="getHuyen(this.value)" name="tinh">
                                    <option value="">Tỉnh...</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom_select">
                                <select class="form-control" id="huyenid" onchange="getXa(this.value)" name="huyen">
                                    <option value="">Huyện...</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom_select">
                                <select class="form-control" id="xaid" name="xa">
                                    <option value="">Xã...</option>
                                </select>
                            </div>
                        </div> -->
                        <div class="form-group">
                            <textarea type="text" class="form-control" name="cAddress" required="" placeholder="Địa chỉ chi tiết"></textarea>
                        </div>
                        <div class="form-group">
                            <textarea type="text" class="form-control" name="notes" required="" placeholder="Ghi chú"></textarea>
                        </div>

                        <!-- <div class="form-group">
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
                    </div> -->
                        <!-- <div class="ship_detail">
                        <div class="form-group">
                            <div class="chek-form">
                                <div class="custome-checkbox">
                                    <input class="form-check-input" type="checkbox" name="checkbox" id="differentaddress">
                                    <label class="form-check-label label_info" for="differentaddress"><span>Giao
                                            hàng ở địa chỉ khác</span></label>
                                </div>
                            </div>
                        </div>
                        <div class="different_address">
                            <div class="form-group">
                                <input type="text" required="" class="form-control" name="fname" placeholder="Họ và tên *">
                            </div>
                            <div class="form-group">
                                <input type="number" required="" class="form-control" name="fname" placeholder="Số điện thoại *">
                            </div>
                            <div class="form-group">
                                <div class="custom_select">
                                    <select class="form-control" id="tinhid">
                                        <option value="">Tỉnh...</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom_select">
                                    <select class="form-control" id="huyenid">
                                        <option value="">Huyện...</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom_select">
                                    <select class="form-control" id="xaid">
                                        <option value="">Xã...</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="billing_address" required="" placeholder="Địa chỉ chi tiết">
                            </div>

                        </div>
                    </div> -->
                </div>
                <div class="col-md-6">
                    <div class="order_review">
                        <div class="heading_s1">
                            <h4>Đơn hàng của bạn</h4>
                        </div>
                        <div class="table-responsive order_table">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Sản phẩm</th>
                                        <th>Đơn giá</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- <tr>
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
                                </tr> -->
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Tổng tiền</th>
                                        <td class="product-subtotal" id="subtotal">0</td>
                                    </tr>
                                    <tr>
                                        <th>Giao hàng</th>
                                        <td>Miễn phí</td>
                                    </tr>
                                    <tr>
                                        <th>Thanh toán</th>
                                        <td class="product-subtotal">0</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>

                    </div>
                    <button type="submit" class="btn btn-fill-out btn-block" style="margin-top:30px">Đặt hàng</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- END SECTION SHOP -->

</div>
<?= $this->endSection('content') ?>
<?= $this->Section('_script') ?>
<script>
    const json = localStorage.getItem('cart');
    const checkout = JSON.parse(json);
    let subtotal = 0;
    checkout.map(el => {
        subtotal += +(el.price.split('.').join('')) * el.quantity;
    });
    subtotalValue = +subtotal;
    const listLI = checkout.map(el =>
        `
    <tr>       
        <td>${el.name} <span class="product-qty">x ${el.quantity}</span></td>
        <td>${(+el.price.split('.').join('')).toLocaleString('vn')}</td>
    </tr>
    `);
    const listProduct = checkout.map(el =>
        `
        <input type="hidden" name="productIds[]" value="${el.id}"/>
        <input type="hidden" name="productQuantities[]" value="${el.quantity}" />
        <input type="hidden" name="productPrices[]" value="${el.price.split('.').join('')}" />
    `);
    const listItem = document.querySelector('table > tbody');
    listItem.insertAdjacentHTML('beforeend', listLI);
    const subtotalDOM = document.querySelectorAll('.product-subtotal');
    const subtotalA = Array.from(subtotalDOM);
    subtotalA.map(el => {
        el.innerHTML = (Number.isNaN(subtotal)) ? 'Liên hệ' : subtotal.toLocaleString('vn');
    });
    const html = `<input type="hidden" name="subtotal" value=${subtotalValue}/>`;
    document.querySelectorAll('textarea')[document.querySelectorAll('textarea').length - 1].insertAdjacentHTML('afterend', listProduct + html);
</script>
<?= $this->endSection('_script') ?>