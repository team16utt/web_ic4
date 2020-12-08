<?= $this->extend('admin/_Layout') ?>
<?= $this->section('content_Admin') ?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Information</h5>
                <form class="form-horizontal m-t-30">

                    <div class="form-group">
                        <label class="col-md-12" for="example-text3">Client Name</span>
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="example-text3" name="example-text" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="example-text3">Phone Number</span>
                        </label>
                        <div class="col-md-12">
                            <input type="number" id="example-text3" name="example-text" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="example-text3">Email</span>
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="example-text3" name="example-text" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="example-text3">Address</span>
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="example-text3" name="example-text" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="bdate">Date of Created</span>
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="bdate" name="bdate" class="form-control mydatepicker" placeholder="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-12">Status</label>
                        <div class="col-sm-12">
                            <select class="form-control">
                                <option>Select Gender</option>
                                <option>New</option>
                                <option>Guarantee</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-12">Delivery Method</label>
                        <div class="col-sm-12">
                            <select class="form-control">
                                <option>Select Method</option>
                                <option>Online</option>
                                <option>Offline</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="example-text2">Product ID</span>
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="example-text2" name="example-text" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="example-text2">Product Name
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="example-text2" name="example-text" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="example-text2">Unit</span>
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="example-text2" name="example-text" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Cart</label>
                        <div class="card">
                            <div class="card-body">
                                <div id="education_fields">
                                    <!-- foreach here >>>>>>>>>>>>>>>>>>>>>>>>>>>>                                                     -->

                                </div>
                                <div class="row">
                                    <div class="col-sm-3 px-0 nopadding">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="pName[]" value="" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-sm-3 nopadding">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="pCount[]" value="" placeholder="so luong">
                                        </div>
                                    </div>
                                    <div class="input-group-append" style="height: 40px;">
                                        <button class="btn btn-success" type="button" onclick="add_foo_fields();"><i class="fa fa-plus"></i></button>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="form-group">
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
                    </div>



                    <!-- <div class="form-group">
                                        <label class="col-sm-12">Attachment</label>
                                        <div class="col-sm-12">
                                            <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Select file</span> <span class="fileinput-exists">Change</span>
                                                <input type="file" name="..."> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
                                        </div>
                                    </div> -->
                    <div class="form-group">
                        <label class="col-md-12">Description</label>
                        <div class="col-md-12">
                            <textarea class="form-control" rows="3"></textarea>
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