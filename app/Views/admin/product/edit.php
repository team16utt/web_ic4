<?= $this->extend('admin/_Layout') ?>
<?= $this->section('content_Admin') ?>

<!-- Start Page Content -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Basic Information</h5>
                <form class="form-material form-horizontal m-t-30" action='<?php echo base_url().'/admin/product/edit?id='.$product['product_id']?>' method='POST' enctype="multipart/form-data">
                <div class="form-group">
                    <label class="col-md-12" for="example-text">Product Name</span>
                    </label>
                    <div class="col-md-12">
                        <input type="text" id="text" name="product_name" class="form-control"
                            placeholder="enter product name" value="<?= $product['name']?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12" for="price">Price</span>
                    </label>
                    <div class="col-md-12">
                        <input type="text" id="price" name="price" class="form-control"
                            placeholder="enter product price" value="<?= $product['price']?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12" for="quantity">Quantity</span>
                    </label>
                    <div class="col-md-12">
                        <input type="text" id="quantity" name="quantity" class="form-control"
                            placeholder="enter quantity" value="<?= $product['quantity']?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12" for="color">Product Code</span>
                    </label>
                    <div class="col-md-12">
                        <input type="text" id="color" name="code" class="form-control "
                            placeholder="Product code" value="<?= $product['productCode']?>">
                    </div>
                </div>
                    <div class="form-group">
                        <label class="col-sm-12">Category</label>
                        <div class="col-sm-12">
                            <select class="form-control">
                            <?php use App\Models\categoryModel;
                                $model = new categoryModel();
                                $data = $model->findAll();
                                foreach ($data as $item){
                                    if($item['category_id'] == $product['category_id']){
                                        echo '<option value="'.$item['category_id'].'" selected>'.$item['name'].'</option>';
                                    }else{
                                    echo '<option value="'.$item['category_id'].'">'.$item['name'].'</option>';}
                                }
                            ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-12">Provider</label>
                        <div class="col-sm-12">
                            <select class="form-control">
                            <?php use App\Models\supplierModel;
                                $sup = new supplierModel();
                                $data = $sup->findAll();
                                foreach ($data as $item){
                                    echo '<option value="'.$item['id'].'">'.$item['company_name'].'</option>';
                                }
                            ?>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Thumnail</h4>
                                    <label for="input-file-now">Choose a image</label>
                                    <input type="file" id="input-file-now" class="dropify" name='fileToUpload' />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Upload More Image</h4>
                                    <label for="input-file-now-custom-1">More Image</label>
                                    <input type="file" id="input-file-now-custom-1" class="dropify" name ='image_more[]' multiple />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Description</h4>
                                    <div id="education_fields"></div>
                                    <?php foreach(explode('|', $product['featureData']) as $item):
                                        $row = explode(':',$item); ?>
                                    <div class="row">
                                        <div class="col-sm-3 nopadding">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="Schoolname" name="name[]" value="<?= $row[0]?>" placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="col-sm-3 nopadding">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="Major" name="value[]" value="<?= $row[1]?>" placeholder="value">
                                            </div>
                                        </div>
                                        <!-- <div class="input-group-append" style="height: 40px;">
                                            <button class="btn btn-success" type="button" onclick="education_fields();"><i class="fa fa-plus"></i></button>
                                        </div> -->


                                    </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Comment -->
                    <!-- <div class="form-group">
                                        <label class="col-sm-12">Profile Image</label>
                                        <div class="col-sm-12">
                                            <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Select file</span> <span class="fileinput-exists">Change</span>
                                                <input type="file" name="..."> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
                                        </div>
                                    </div> -->

                    <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Submit</button>
                    <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- ============================================================== -->
<!-- End PAge Content -->

<?= $this->endSection() ?>