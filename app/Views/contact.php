<?= $this->extend('_Layout') ?>
<?= $this->section('content') ?>

<!-- START MAIN CONTENT -->
<div class="main_content">

    <!-- START SECTION CONTACT -->
    <div class="section pb_70">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="contact_wrap contact_style3">
                        <div class="contact_icon">
                            <i class="linearicons-map2"></i>
                        </div>
                        <div class="contact_text">
                            <span>Địa chỉ</span>
                            <p>54 Triều Khúc, Thanh Xuân Nam, Hà Nội</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="contact_wrap contact_style3">
                        <div class="contact_icon">
                            <i class="linearicons-envelope-open"></i>
                        </div>
                        <div class="contact_text">
                            <span>Địa chỉ email</span>
                            <a href="mailto:info@sitename.com">CSKH@gear16.com</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="contact_wrap contact_style3">
                        <div class="contact_icon">
                            <i class="linearicons-tablet2"></i>
                        </div>
                        <div class="contact_text">
                            <span>Điện thoại</span>
                            <p>0981 173 413</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION CONTACT -->

    <!-- START SECTION CONTACT -->
    <div class="section pt-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="heading_s1">
                        <h2>Liên hệ</h2>
                    </div>
                    <p class="leads">Hãy chia sẻ với chúng tôi.</p>
                    <div class="field_form">
                        <div class="row">
                            <?php if ($message == "success") : ?>
                                <div class="alert alert-success">
                                    <strong>Gửi thành công !</strong> Vui lòng liên hệ email CSKH@gear16.com hoặc số điện thoại 0981173413 để thêm thông tin.
                                </div>
                            <?php elseif ($message == "fail") : ?>
                                <div class="alert alert-danger">
                                    <strong>Gửi không thành công !</strong> Vui lòng liên hệ email CSKH@gear16.com hoặc số điện thoại 0981173413 để thêm thông tin.
                                </div>
                            <?php endif; ?>
                        </div>
                        <form action="<?= base_url() ?>/contact" method="POST">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <input placeholder="Họ và tên *" class="form-control" name="name" type="text" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <input required placeholder="Số điện thoại *" class="form-control" name="phone" required>
                                </div>
                                <div class="form-group col-md-12">
                                    <input required placeholder="Địa chỉ email *" class="form-control" name="email" type="email" required>
                                </div>

                                <!-- <div class="form-group col-md-6">
                                    <input placeholder="Enter Subject" id="subject" class="form-control" name="subject">
                                </div> -->
                                <div class="form-group col-md-12">
                                    <textarea required placeholder="Nội dung *" class="form-control" name="message" rows="4"></textarea>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" title="Gửi" class="btn btn-fill-out" name="submit" value="Submit">Gửi nội dung</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 pt-2 pt-lg-0 mt-4 mt-lg-0">
                    <div id="map" class="contact_map2" data-zoom="16" data-latitude="20.984583284623014" data-longitude="105.79826772654529" data-icon="assets/images/marker.png"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION CONTACT -->
    <?= $this->endSection('content') ?>
    <?= $this->Section('_maps') ?>
    <!-- Google Map Js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7TypZFTl4Z3gVtikNOdGSfNTpnmq-ahQ&amp;callback=initMap"></script>
    <?= $this->endSection('_maps') ?>