<?= $this->extend('admin/_Layout') ?>
<?= $this->section('content_Admin') ?>
<!-- import code hereeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Comment</h5>
                <h6 class="card-subtitle">All comment</h6>
                <div class="table-responsive">
                    <table id="example23" class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên</th>
                                <th>Địa chỉ</th>
                                <th>Ngày tạo</th>
                                <th align="center">Hành động</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach($comment as $item):?>
                            <tr class="obj-item">
                                <td><?= $item['id'] ?></td>
                                <td><?= $item['author'] ?></td>
                                <td><?= $item['address'] ?></td>
                                <td><?= $item['createdDate'] ?></td>
                                <td>
                                    <div class="obj-action">
                                        <div class="ac">

                                            <a href="<?= base_url().'/admin/comment/detail?id='.$item['id']?>" data-toggle="tooltip" data-placement="bottom" title="Detail"><i class="fas fa-info-circle"></i></a>
                                        </div>
                                        <div class="ac">
                                            <a href="<?= base_url().'/admin/comment/edit?id='.$item['id']?>" data-toggle="tooltip" data-placement="bottom" title="Sửa"><i class="far fa-edit"></i> </a>
                                        </div>
                                        <div class="ac">
                                            <a href="<?php echo base_url().'/admin/comment/delete?id='.$item['id']?>" onclick="return confirm('Are you sure?');" data-toggle="tooltip" data-placement="bottom" title="Xóa"><i class="far fa-trash-alt"></i></a>
                                        </div>

                                    </div>
                                </td>
                            </tr>
                            <?php endforeach;?>                   
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ============================================================== -->
<!-- End Page Content -->
<?= $this->endSection() ?>