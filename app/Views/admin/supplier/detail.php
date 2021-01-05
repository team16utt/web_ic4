<?= $this->extend('admin/_Layout') ?>
<?= $this->section('content_Admin') ?>

<div class="row d-flex justify-content-center">
                    <!-- Column -->
                    <div class="col-lg-6 ">
                        <div class="card">
                            <div class="card-body">
                                <center class="m-t-30"> <img src="<?php echo $info['image']?>" class="img-circle"
                                        width="150">
                                    <h4 class="card-title m-t-10"><?= $user['fullname'] ?></h4>
                                    
                                </center>
                            </div>
                            <div>
                                <hr>
                            </div>
                            <div class="card-body">
                                <small class="text-muted p-t-30 db">Company Name</small>
                                <h6><?= $info['company_name']?></h6> 
                                <small class="text-muted">Web url</small>
                                <h6><?= $info['weburl']?></h6> <small class="text-muted p-t-30 db">Product type</small>
                                <h6><?= $info['product_type']?></h6> 
                                <small class="text-muted p-t-30 db">Telephone</small>
                                <h6><?= $info['telephone']?></h6>
                                <small class="text-muted p-t-30 db">Email</small>
                                <h6><?= $info['email']?></h6>
                                <small class="text-muted p-t-30 db">Address</small>
                                <h6><?= $info['address']?></h6>
                                <small class="text-muted p-t-30 db">Country</small>
                                <h6><?= $info['country']?></h6>
                                
                                
                            </div>
                        </div>
                    </div>

                </div>

<?= $this->endSection() ?>