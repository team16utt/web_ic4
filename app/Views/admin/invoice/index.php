<?= $this->extend('admin/_Layout') ?>
<?= $this->section('content_Admin') ?>
<div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                             
                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Fullname</th>
                                                <th>Phone</th>
                                                <th>Paid Status</th>
                                                <th>Created On</th>
                                                <th>Shipping Status</th>
                                                <th>Bill Address</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($orders as $row):?>
                                            <tr>
                                                <td><?= $row['id']?> <span class="label label-success">New</span> </td>
                                                <td><?= $row['fullname']?></td>
                                                <td><?= $row['phone']?></td>
                                                <td><?php if($row['paid_status'] == 0) echo 'Chưa thanh toán'; else echo 'Đã thanh toán'; ?></td>
                                                <td><?= $row['create_on']?></td>
                                                <td><?= $row['shipping_status']?></td>
                                                <td><?= $row['bill_address']?></td>
                                                <td>
                                                    <div class="obj-action">
                                                        <div class="ac">

                                                            <a href="<?php echo base_url().'/admin/invoice/detail?id='.$row['id']?>" data-toggle="tooltip" data-placement="bottom"
                                                                title="Detail"><i class="fas fa-info-circle"></i></a>
                                                        </div>
                                                        <div class="ac">
                                                            <a href="<?php echo base_url().'/admin/invoice/edit?id='.$row['id']?>" data-toggle="tooltip" data-placement="bottom"
                                                                title="Edit"><i class="far fa-edit"></i> </a>
                                                        </div>
                                                        <div class="ac">
                                                            <a href="<?php echo base_url().'/admin/invoice/delete?id='.$row['id']?>" data-toggle="tooltip" data-placement="bottom"
                                                                title="Delete"><i class="far fa-trash-alt"></i></a>
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