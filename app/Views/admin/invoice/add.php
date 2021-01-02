<?= $this->extend('admin/_Layout') ?>
<?= $this->section('content_Admin') ?>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Information</h5>
                <form class="form-horizontal m-t-30" method='POST' >

                    <div class="form-group">
                        <label class="col-md-12" for="example-text3">Client Name</span>
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="example-text3" name="client_name" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="example-text3">Phone Number</span>
                        </label>
                        <div class="col-md-12">
                            <input type="number" id="example-text3" name="phone" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="example-text3">Address</span>
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="example-text3" name="address" class="form-control" placeholder="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-12">Status</label>
                        <div class="col-sm-12">
                            <select class="form-control" name="status">
                                <option value="0">Have Not Paid</option>
                                <option value="1">Have Paid</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-12">Cart</label>
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div id="education_fields"></div>
                                    <div class="row">
                                        <div class="col-sm-3 nopadding">
                                            <div class="form-group">
                                                <!-- <input type="text" class="form-control" id="Schoolname" name="name[]" value="" placeholder="Name"> -->
                                                <select name="name[]" class='form-control'>
                                                <?php foreach($product as $row):?>
                                                    <option value="<?= $row['product_id'] ?>"><?= $row['name']?></option>
                                                <?php endforeach;?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 nopadding">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="Major" name="value[]" value="" placeholder="value">
                                            </div>
                                        </div>
                                        <div class="input-group-append" style="height: 40px;">
                                            <button class="btn btn-success" type="button" onclick="education_1fields();"><i class="fa fa-plus"></i></button>
                                        </div>
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="form-group">
                        <label class="col-md-12" for="example-text4">Amount</span>
                        </label>
                        <div class="col-md-12">
                            <input type="number" id="example-text4" name="example-text" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="example-text4">Guarantee (Month)</span>
                        </label>
                        <div class="col-md-12">
                            <input type="number" id="example-text4" name="example-text" class="form-control" placeholder="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-12" for="example-text4">Discount (%)</span>
                        </label>
                        <div class="col-md-12">
                            <input type="number" id="example-text4" name="example-text" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="example-text4">Total</span>
                        </label>
                        <div class="col-md-12">
                            <input type="number" id="example-text4" name="example-text" class="form-control" placeholder="">
                        </div>
                    </div> -->



                    <!-- <div class="form-group">
                                        <label class="col-sm-12">Attachment</label>
                                        <div class="col-sm-12">
                                            <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Select file</span> <span class="fileinput-exists">Change</span>
                                                <input type="file" name="..."> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
                                        </div>
                                    </div> -->
                    <div class="form-group">
                        <label class="col-md-12">Note</label>
                        <div class="col-md-12">
                            <textarea class="form-control" rows="3" name='note'></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Submit</button>
                    <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- ============================================================== -->
<!-- End Page Content -->


<?= $this->endSection() ?>