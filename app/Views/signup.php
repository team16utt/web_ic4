<?= $this->extend('_Layout') ?>
<?= $this->Section('content') ?>

<!-- START MAIN CONTENT -->
<div class="main_content">

    <!-- START LOGIN SECTION -->
    <div class="login_register_wrap section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-md-10">
                    <div class="login_wrap">
                        <div class="padding_eight_all bg-white">
                            <div class="heading_s1">
                                <h3 style="text-align: center;">Tạo tài khoản</h3>
                            </div>
                            <?php if ($message == "success") : ?>
                                <div class="alert alert-success">
                                    <strong>Tạo tài khoản thành công !</strong> Bấm vào <strong><a href="<?= base_url() ?>">đây</a></strong> để trở về trang chủ
                                </div>
                            <?php elseif ($message == "fail") : ?>
                                <div class="alert alert-danger">
                                    <strong>Tạo tài khoản không thành công !</strong> Đã xảy ra lỗi!!!
                                    <?php if ($error) : ?>
                                        <?php foreach ($error as $item) : ?>
                                            <li><?= $item ?></li>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                            <form action="<?= base_url() ?>/signup/register" method="post">
                                <div class="form-group">
                                    <input type="text" required="" class="form-control" name="fullname" placeholder="Họ và tên">
                                </div>
                                <div class="form-group">
                                    <input type="text" required="" class="form-control" name="username" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" required="" minlength="8" type="password" name="password" placeholder="Mật khẩu">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" required="" minlength="8" type="password" name="repassword" placeholder="Xác nhận mật khẩu">
                                </div>
                                <div class="form-group">
                                    <label class="bold">Giới tính</label>
                                    <select class="form-control first_null not_chosen" name="gender">
                                        <option value="Nam">Nam</option>
                                        <option value="Nữ">Nữ</option>
                                        <option value="Khác">Khác</option>
                                    </select>
                                    <!-- <input type="radio" name="gender" value="Male">Nam
                                        <input type="radio" name="gender" value="Female">Nữ -->
                                </div>
                                <div class="form-group">
                                    <label class="bold">Ngày Sinh</label>
                                    <input type="date" required="" class="form-control" name="birthday">
                                </div>
                                <div class="form-group">
                                    <input type="phone" required="" class="form-control" name="phonenumber" placeholder="Số điện thoại">
                                </div>
                                <div class="form-group">
                                    <input type="text" required="" class="form-control" name="address" placeholder="Địa chỉ">
                                </div>
                                <div class="form-group">
                                    <input type="text" required="" class="form-control" name="email" placeholder="Email" required>
                                </div>

                                <!-- <div class="form-group">
                                    <input type="text" required="" class="form-control" name="country" placeholder="Enter Your Country">
                                </div> -->
                                <div class="login_footer form-group">
                                    <div class="chek-form">
                                        <div class="custome-checkbox">
                                            <input class="form-check-input" required type="checkbox" name="checkbox" id="exampleCheckbox2" value="">
                                            <label class="form-check-label" for="exampleCheckbox2"><span>Tôi đồng ý điều khoản &amp; chính sách.</span></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-fill-out btn-block" name="register">Đăng ký</button>
                                </div>
                            </form>


                            <div class="different_login">
                                <span> Hoặc</span>
                            </div>

                            <div class="form-note text-center">Đã có tài khoản? <a href="<?= base_url() ?>/login">Đăng nhập</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END LOGIN SECTION -->
</div>
<!-- END MAIN CONTENT -->
<?= $this->endSection() ?>