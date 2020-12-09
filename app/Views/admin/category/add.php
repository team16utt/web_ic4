<?= $this->extend('admin/_Layout') ?>
<?= $this->section('content_Admin') ?>

<!-- import code hereeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Basic Information</h5>
                <?= \Config\Services::validation()->listErrors(); ?>
                <form action="<?= base_url()?>/admin/category/add" method="post" class="form-material form-horizontal m-t-30">
                    <div class="form-group">
                        <label class="col-md-12" for="example-text">Tên loại hàng</span>
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="example-text" name="cName" class="form-control" placeholder="Nhập tên loại hàng">
                        </div>
                        <label class="col-md-12" for="example-text">Mô tả</span>
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="example-text" name="cDesription" class="form-control" placeholder="Nhập mô tả">
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

                    <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Xác nhận</button>
                    <a href="<?= base_url() ?>/admin/category" class="btn btn-inverse waves-effect waves-light m-r-10">Hủy</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- ============================================================== -->
<!-- End Page Content -->

<?= $this->endSection() ?>