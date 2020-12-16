<?= $this->extend('admin/_Layout') ?>
<?= $this->section('content_Admin') ?>
<title>Manager Invoice</title>

<!-- ============================================================== -->
<!-- Start Page Content -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Invoice</h5>
                <h6 class="card-subtitle">All invoice</h6>
                <div class="table-responsive">
                    <table id="example23" class="table table-striped">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên người tạo</th>
                                <th>Paid Status</th>
                                <th>Ghi chú</th>
                                <th>Ngày tạo</th>
                                <th>Trạng thái giao hàng</th>
                                <th>Địa chỉ giao hàng</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $stt = 1 ?>
                            <?php foreach ($invoiceResult as $invoiceResult) :{ $invoiceResult = get_object_vars($invoiceResult);}?>
                                <tr class="obj-item">
                                    <td><?=$stt ?></td>
                                    <td><?php echo $invoiceResult['username'] ?></td>
                                    <td><?php echo $invoiceResult['paid_status'];?></td>
                                    <td><?php echo $invoiceResult['note'];?></td>
                                    <td><?php echo $invoiceResult['create_on'];?></td>
                                    <td><?=$invoiceResult['shipping_status']?></td>
                                    <td><?=$invoiceResult['bill_address']?></td>
                                    <td>
                                        <div class="obj-action">
                                            <div class="ac">
                                                <a href="<?php echo base_url().'/admin/invoiceDetail?id='.$invoiceResult['id']?>" data-toggle="tooltip" data-placement="bottom" title="Detail"><i class="fas fa-info-circle"></i></a>
                                            </div>
                                            <div class="ac">
                                                <a href="<?php echo base_url().'/admin/invoice/edit?id='.$invoiceResult['id']?>" data-toggle="tooltip" data-placement="bottom" title="Sửa"><i class="far fa-edit"></i> </a>
                                            </div>
                                            <div class="ac">
                                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Xóa"><i class="far fa-trash-alt"></i></a>
                                            </div>

                                        </div>
                                    </td>
                                    <?php $stt++ ?>
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