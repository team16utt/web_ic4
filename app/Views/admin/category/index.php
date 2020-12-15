<?= $this->extend('admin/_Layout') ?>
<?= $this->section('content_Admin') ?>
<!-- import code hereeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Category</h5>
                <h6 class="card-subtitle">all category</h6>
                <div class="table-responsive">
                    <table id="example23" class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên</th>
                                <th>Mô tả</th>
                                <th>Ngày tạo</th>
                                <th>Tạo bởi</th>
                                <th align="center">Hành động</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach($category as $item): ?>
                            <tr class="obj-item">
                                <td><?= $item['category_id'] ?></td>
                                <td><?= $item['name'] ?></td>
                                <td><?= $item['description'] ?></td>
                                <td><?= date("d-m-Y H:i:s", strtotime($item['createdDate'])) ?></td>
                                <td><?= $item['createdBy'] ?></td>
                                <td>
                                    <div class="obj-action">
                                        <!-- <div class="ac">

                                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Detail"><i class="fas fa-info-circle"></i></a>
                                        </div> -->
                                        <div class="ac">
                                            <a href="<?= base_url().'/admin/category/edit?id='.$item['category_id']?>" data-toggle="tooltip" data-placement="bottom" title="Sửa"><i class="far fa-edit"></i> </a>
                                        </div>
                                        <div class="ac">
                                            <a href="<?php echo base_url().'/admin/category/delete?id='.$item['category_id']?>" onclick="return confirm('Are you sure?');" data-toggle="tooltip" data-placement="bottom" title="Xóa"><i class="far fa-trash-alt"></i></a>
                                        </div>

                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; ?>                         
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