<?= $this->extend('admin/_Layout') ?>
<?= $this->section('content_Admin') ?>

 <!-- start  main content -->
                
 <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Basic Information</h5>
                                <form class="form-material form-horizontal m-t-30" enctype="multipart/form-data" method='POST' >
                                    <div class="form-group">
                                        <label class="col-md-12" for="example-text">Company Name</span>
                                        </label>
                                        <div class="col-md-12">
                                            <input type="text" id="example-text" name="companyname" class="form-control"
                                                placeholder="enter company name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12" for="fName">Url website</span>
                                        </label>
                                        <div class="col-md-12">
                                            <input type="text" id="fName" name="url" class="form-control"
                                                placeholder="enter url website">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-12">Product Type</label>
                                        <div class="col-sm-12">
                                            <select class="form-control" name='type'>
                                                <!-- <option>Select</option> -->
                                                <?php use App\Models\categoryModel;
                                                    $model = new categoryModel();
                                                    $data = $model->findAll();
                                                    foreach ($data as $item){
                                                        echo '<option value="'.$item['category_id'].'">'.$item['name'].'</option>';
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12" for="email">Email</span>
                                        </label>
                                        <div class="col-md-12">
                                            <input type="email" id="email" name="email" class="form-control"
                                                placeholder="enter your email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12" for="phone">Phone</span>
                                        </label>
                                        <div class="col-md-12">
                                            <input type="number" maxlength="11" id="phone" name="phone"
                                                class="form-control" placeholder="enter your phone">
                                        </div>
                                    </div>
                
                                    <div class="form-group">
                                    <label class="col-md-12" for="phone">Address</span>
                                        </label>
                                        <div class="col-md-12">
                                            <input type="text" maxlength="11" id="address" name="address"
                                                class="form-control" placeholder="enter your address">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <label class="col-md-12" for="phone">Country</span>
                                        </label>
                                        <div class="col-md-12">
                                            <input type="text" maxlength="11" id="country" name="country"
                                                class="form-control" placeholder="enter your country">
                                        </div>
                                    </div>
                                    <label class="col-md-12" for="phone">Avatar</span>
                                        </label>
                                        <div class="col-md-12">
                                            <label for="input-file-now">Choose a image</label>
                                            <input type="file" id="input-file-now" name="file" class="dropify">
                                        </div>
                                    </div>
                                    
                
                                    <button type="submit"
                                        class="btn btn-info waves-effect waves-light m-r-10">Submit</button>
                                    <button type="submit"
                                        class="btn btn-inverse waves-effect waves-light">Cancel</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <!-- ============================================================== -->
                <!-- End Page Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->

<?= $this->endSection() ?>