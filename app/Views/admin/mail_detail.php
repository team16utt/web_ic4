<?= $this->extend('admin/_Layout') ?>
<?= $this->section('content_Admin') ?>
<div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="row">
                                
                                <div class="col-lg-12  bg-light border-left">
                                    
                                    <div class="card-body p-t-0">
                                        <div class="card b-all shadow-none">
                                            <div class="card-body">
                                                <h3 class="card-title m-b-0">Contact from Client</h3>
                                            </div>
                                            <div>
                                                <hr class="m-t-0">
                                            </div>
                                            
                                            <div class="card-body">
                                                <div class="d-flex m-b-40">
                                                    <div class="p-l-10">
                                                        <h4 class="m-b-0"><?= $mail['fullname'] ?></h4><br>
                                                        <small class="text-muted"><?php echo 'From:'.$mail['email']; ?></small><br>
                                                        <small class="text-muted"><?php echo 'Created at:'.$mail['created_on']; ?></small>
                                                    </div>
                                                </div>
                                                <p><b>Dear You</b></p>
                                                <p><?= $mail['content']?></p>
                                                <!-- <p>enean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar,</p> -->
                                            </div>
                                            <div>
                                                <hr class="m-t-0">
                                            </div>
                                            
                                            <!-- <div class="card-body">
                                                <h4><i class="fa fa-paperclip m-r-10 m-b-10"></i> Attachments <span>(3)</span></h4>
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <a href="javascript:void(0)"> <img class="img-thumbnail img-responsive" alt="attachment" src="<?php echo base_url(). '/public/admin/assets/images/big/img1.jpg'?> "</a>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <a href="javascript:void(0)"> <img class="img-thumbnail img-responsive" alt="attachment" src="<?php echo base_url(). '/public/admin/assets/images/big/img2.jpg'?>" </a>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <a href="javascript:void(0)"> <img class="img-thumbnail img-responsive" alt="attachment" src="<?php echo base_url(). '/public/admin/assets/images/big/img3.jpg'?>" </a>
                                                    </div>
                                                </div>
                                                <div class="b-all m-t-20 p-20">
                                                    <p class="p-b-20">click here to <a href="javascript:void(0)">Reply</a> or <a href="javascript:void(0)">Forward</a></p>
                                                </div>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?= $this->endSection() ?>