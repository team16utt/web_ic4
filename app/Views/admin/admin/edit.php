<?= $this->extend('admin/_Layout') ?>
<?= $this->section('content_Admin') ?>

 <!-- start  main content -->
                
 <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Basic Information</h5>
                                <form class="form-material form-horizontal m-t-30">
                                    <div class="form-group">
                                        <label class="col-md-12" for="example-text">User Name</span>
                                        </label>
                                        <div class="col-md-12">
                                            <input type="text" id="example-text" name="UserName" class="form-control"
                                                placeholder="enter your username">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12" for="password">Password</span>
                                        </label>
                                        <div class="col-md-12">
                                            <input type="password" id="password" name="PassWord" class="form-control"
                                                placeholder="enter your password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12" for="fName">Full Name</span>
                                        </label>
                                        <div class="col-md-12">
                                            <input type="text" id="fName" name="FullName" class="form-control"
                                                placeholder="enter your full name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12" for="bdate">Date of Birth</span>
                                        </label>
                                        <div class="col-md-12">
                                            <input type="text" id="bdate" name="bdate" class="form-control mydatepicker"
                                                placeholder="enter your birth date">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-12">Gender</label>
                                        <div class="col-sm-12">
                                            <select class="form-control">
                                                <option>Select Gender</option>
                                                <option>Male</option>
                                                <option>Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12" for="email">Email</span>
                                        </label>
                                        <div class="col-md-12">
                                            <input type="email" id="email" name="Email" class="form-control"
                                                placeholder="enter your email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12" for="phone">Phone</span>
                                        </label>
                                        <div class="col-md-12">
                                            <input type="number" maxlength="11" id="phone" name="Phone"
                                                class="form-control" placeholder="enter your phone">
                                        </div>
                                    </div>
                
                                    <div class="form-group">
                                        <label class="col-sm-12">Address</label>
                                        <div class="col-md-12 d-flex justify-content-between">
                                            <select class="form-control col-lg-3 col-md-12">
                                                <option>Tỉnh</option>
                
                                            </select>
                                            <select class="form-control col-lg-3 col-md-12">
                                                <option>Huyện</option>
                
                                            </select>
                                            <select class="form-control col-lg-3 col-md-12">
                                                <option>Xã</option>
                
                                            </select>
                                        </div>
                                    </div>
                
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title">Avatar</h4>
                                                    <label for="input-file-now">Choose a image</label>
                                                    <input type="file" id="input-file-now" class="dropify" />
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