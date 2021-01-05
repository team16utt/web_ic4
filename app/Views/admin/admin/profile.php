<?= $this->extend('admin/_Layout') ?>
<?= $this->section('content_Admin') ?>

<div class="row d-flex justify-content-center">
                    <!-- Column -->
                    <div class="col-lg-6 ">
                        <div class="card">
                            <div class="card-body">
                                <center class="m-t-30"> <img src="<?php if($user['image'][0] =='h') {echo $user['image'];} else echo base_url().$user['image']?>" class="img-circle"
                                        width="150">
                                    <h4 class="card-title m-t-10"><?= $user['fullname'] ?></h4>
                                    <h6 class="card-subtitle"><?php if ($user['role_id']=='1'){echo 'Admin';} else {echo 'User';}?></h6>
                                    
                                </center>
                            </div>
                            <div>
                                <hr>
                            </div>
                            <div class="card-body">
                                <small class="text-muted p-t-30 db">Date of Birth</small>
                                <h6><?= $user['birthday']?></h6> 
                                <small class="text-muted">Email address </small>
                                <h6><?= $user['email']?></h6> <small class="text-muted p-t-30 db">Phone</small>
                                <h6><?= $user['phone_number']?></h6> <small class="text-muted p-t-30 db">Address</small>
                                <h6><?= $user['address']?></h6>
                                

                                <br>
                                <button class="btn btn-circle btn-secondary"><i class="fab fa-facebook-f"></i></button>
                                <button class="btn btn-circle btn-secondary"><i class="fab fa-twitter"></i></button>
                                <button class="btn btn-circle btn-secondary"><i class="fab fa-youtube"></i></button>
                                <button class="btn btn-circle btn-secondary btn-edit-profile" data-toggle="tooltip" data-placement="bottom" title="Edit Profile"><i class="fas fa-edit"></i></button>
                                
                            </div>
                        </div>
                    </div>

                </div>

<?= $this->endSection() ?>