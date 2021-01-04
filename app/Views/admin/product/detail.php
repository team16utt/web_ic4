<?= $this->extend('admin/_Layout') ?>
<?= $this->section('content_Admin') ?>
                <!-- import code hereeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee -->
                <?php $type = ['1' => 'Chuột',
                                '2' => 'Bàn phím',
                                '3' => 'Ghế gaming',
                                '4' => 'Laptop',
                                '5' => 'Linh kiện PC',
                                '6' => 'Màn hình',
                                '7' => 'Tai nghe',
                                '8' => 'Thiết bị Livestream'];?>
                <div class="row">
                    <h3>Product in4: </h3>
                </div>

                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="d-flex flex-row">
                                <div class="p-10 bg-info">
                                    <h3 class="text-white box m-b-0"><i class=" ti-pin-alt"></i></h3>
                                </div>
                                <div class="align-self-center m-l-20">
                                    <h3 class="m-b-0 text-info"><?= $product['name']?></h3>
                                    <h5 class="text-muted m-b-0">Product name</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="d-flex flex-row">
                                <div class="p-10 bg-success">
                                    <h3 class="text-white box m-b-0"><i class=" ti-direction"></i></h3>
                                </div>
                                <div class="align-self-center m-l-20">
                                    <h3 class="m-b-0 text-success"><?= $type[$product['category_id']]?></h3>
                                    <h5 class="text-muted m-b-0">Product Type</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="d-flex flex-row">
                                <div class="p-10 bg-inverse">
                                    <h3 class="text-white box m-b-0"><i class=" ti-lock"></i></h3>
                                </div>
                                <div class="align-self-center m-l-20">
                                    <h3 class="m-b-0"><?= $product['product_id']?></h3>
                                    <h5 class="text-muted m-b-0">Product Id</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="d-flex flex-row">
                                <div class="p-10 bg-primary">
                                    <h3 class="text-white box m-b-0"><i class=" ti-key"></i></h3>
                                </div>
                                <div class="align-self-center m-l-20">
                                    <h3 class="m-b-0 text-primary"><?= $product['productCode']?></h3>
                                    <h5 class="text-muted m-b-0">Product code</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="d-flex flex-row">
                                <div class="p-10 bg-primary">
                                    <h3 class="text-white box m-b-0"><i class=" ti-money"></i></h3>
                                </div>
                                <div class="align-self-center m-l-20">
                                    <h3 class="m-b-0 text-primary"><?= $product['price']. ' VND'?></h3>
                                    <h5 class="text-muted m-b-0">Price</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->

                <!-- Row -->
                <!-- Column -->

                <!-- Column -->
                <!-- Row -->

                <!-- Row -->
                <!-- Row -->
                <div class="row">
                    <div class="col-lg-5">
                        <div class="card">
                            <div class="box bg-dark text-center">
                                <h5 class="text-white">Thumbnail</h5>
                            </div>
                            <div class="card-body">
                                <div class=""> <img class="img-fluid" src=<?php if ($product['image'][0] == 'h') echo $product['image']; else echo base_url().$product['image']; ?>
                                        alt="Second slide"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="card">
                            <div class="box bg-dark text-center">
                                <h5 class="text-white">More Image</h5>
                            </div>
                            <div class="card-body">
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner" role="listbox">
                                    <?php $array_image = [
                                        '1' => 'First slide',
                                        '2' => 'Second slide',
                                        '3' => 'Third slide',
                                        '4' => 'Four slide',
                                        '5' => 'Five slide',
                                        '6' => 'Six slide'
                                    ]; $count= '11';?>
                                         <div class="carousel-item active"> <img class="img-fluid"
                                         src="<?php if ($image[0]['imageSmall'][0] == 'h') echo $image[1]['imageSmall']; else echo base_url().$image[1]['imageSmall']; ?>" alt="First slide"> </div>
                                        <?php for($i = 2; $i < count($image); $i++):?>
                                        <div class="carousel-item"> <img class="img-fluid"
                                                src="<?php if ($image[$i]['imageSmall'][0] == 'h') echo $image[$i]['imageSmall']; else echo base_url().$image[$i]['imageSmall']; ?>" alt="<?php echo $array_image[(string) $i];?>"> </div>
                                        
                                        <?php endfor; ?>
                                        
                                        <!-- <div class="carousel-item"> <img class="img-fluid"
                                                src="../assets/images/big/img6.jpg" alt="Third slide"> </div>
                                        <div class="carousel-item"> <img class="img-fluid"
                                            src="../assets/images/big/img3.jpg" alt="Four slide"> </div>
                                            <div class="carousel-item"> <img class="img-fluid"
                                            src="../assets/images/big/img2.jpg" alt="Five slide"> </div>
                                            <div class="carousel-item"> <img class="img-fluid"
                                            src="../assets/images/big/img1.jpg" alt="Six slide"> </div> --> 
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                        data-slide="prev"> <span class="carousel-control-prev-icon"
                                            aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                        data-slide="next"> <span class="carousel-control-next-icon"
                                            aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
                                </div>

                            </div>
                            
                        </div>
                    </div>
                </div>


                <!-- Row -->


                <!-- ============================================================== -->
                <!-- End Page Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <?= $this->endSection() ?>