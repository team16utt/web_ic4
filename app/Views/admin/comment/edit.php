<?= $this->extend('admin/_Layout') ?>
<?= $this->section('content_Admin') ?>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Information</h5>
                <form class="form-horizontal m-t-30" method='POST' >

                    <div class="form-group">
                        <label class="col-md-12" for="example-text3">Author</span>
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="example-text3" name="author" class="form-control" placeholder="" value="<?= $comment['author']?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="example-text3">Address</span>
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="example-text3" name="address" class="form-control" placeholder="" value="<?= $comment['address']?>"> 
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-12">Comment</label>
                        <div class="col-md-12">
                            <textarea class="form-control" rows="3" name='comment'><?= $comment['content']?></textarea>
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