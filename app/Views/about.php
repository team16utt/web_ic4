<?= $this->extend('_Layout') ?>
<?= $this->section('content') ?>

<!-- STAT SECTION ABOUT -->
<div class="section">
    <div class="container">
        <?php foreach ($content as $row) :?>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about_img scene mb-4 mb-lg-0">
                        <img src="<?= $row['image']?>">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="heading_s1">
                        <h2><?= $row['title']?></h2>
                    </div>
                    <p><?= $row['content1']?></p>
                    <p><?= $row['content2']?></p>
                </div>
                
            </div>
        <?php endforeach; ?>
    </div>
</div>
<!-- END SECTION ABOUT -->

<!-- START SECTION WHY CHOOSE -->

<!-- END SECTION WHY CHOOSE -->

<!-- START SECTION TEAM -->
<div class="section pb_70">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="heading_s1 text-center">
                    <h2>Our Team Members</h2>
                </div>
                <p class="text-center leads">Chúng tôi là những kĩ sư tài năng với niềm đam mê với gaming gear.</p>
            </div>
        </div>
        <div class="row justify-content-center">
        <?php foreach ($admin as $row1) :?>
            <div class="col-lg-2 col-sm-6">
                <div class="team_box team_style1">
                    <div class="team_img">
                        <img src="<?php if($row1['image'][0] =='h'){ echo $row1['image'];} else echo base_url().$row1['image'];?>" alt="team_img1">
                        <ul class="social_icons social_style1">
                            <li><a href="<?= $row1['facebook']?>"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="<?= $row1['twitter']?>"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="<?= $row1['gmail']?>"><i class="ion-social-googleplus"></i></a></li>
                            <li><a href="<?= $row1['insta']?>"><i class="ion-social-instagram-outline"></i></a></li>
                        </ul>
                    </div>
                    <div class="team_content">
                        <div class="team_title">
                            <h5><?= $row1['fullname']?></h5>
                            <span><?php if($row1['role_id'] == 1) {echo 'Admin';}?></span>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            <!-- <div class="col-lg-2 col-sm-6">
                <div class="team_box team_style1">
                    <div class="team_img">
                        <img src="<?= base_url() ?>/public/client/assets/images/team_img1.jpg" alt="team_img1">
                        <ul class="social_icons social_style1">
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                        </ul>
                    </div>
                    <div class="team_content">
                        <div class="team_title">
                            <h5>John Muniz</h5>
                            <span>Project Engineer</span>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- <div class="col-lg-2 col-sm-6">
                <div class="team_box team_style1">
                    <div class="team_img">
                        <img src="<?= base_url() ?>/public/client/assets/images/team_img2.jpg" alt="team_img2">
                        <ul class="social_icons social_style4">
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                        </ul>
                    </div>
                    <div class="team_content">
                        <div class="team_title">
                            <h5>Alea Brooks</h5>
                            <span>Graphics Designer</span>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- <div class="col-lg-2 col-sm-6">
                <div class="team_box team_style1">
                    <div class="team_img">
                        <img src="<?= base_url() ?>/public/client/assets/images/team_img3.jpg" alt="team_img3">
                        <ul class="social_icons social_style4">
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                        </ul>
                    </div>
                    <div class="team_content">
                        <div class="team_title">
                            <h5>Anders Glick</h5>
                            <span>Software Developer</span>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- <div class="col-lg-2 col-sm-6">
                <div class="team_box team_style1">
                    <div class="team_img">
                        <img src="<?= base_url() ?>/public/client/assets/images/team_img4.jpg" alt="team_img4">
                        <ul class="social_icons social_style4">
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                        </ul>
                    </div>
                    <div class="team_content">
                        <div class="team_title">
                            <h5>Richard Tice</h5>
                            <span>Web Developer</span>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</div>
<!-- END SECTION TEAM -->

<!-- START SECTION TESTIMONIAL -->

<!-- END SECTION TESTIMONIAL -->

<!-- START SECTION SHOP INFO -->
<?= $this->endSection() ?>