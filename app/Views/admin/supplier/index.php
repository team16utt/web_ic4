<?= $this->extend('admin/_Layout') ?>
<?= $this->section('content_Admin') ?>
<?php $array_type = [
    '1' => 'Chuột',
    '2' => 'Bàn phím',
    '3' => 'Ghế gaming',
    '4' => 'Laptop',
    '5' => 'Linh Kiện PC',
    '6' => 'Màn hình',
    '7' => 'Tai nghe',
    '8' => 'Thiết bị livestream'
]?>
<div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Admin</h5>
                                <h6 class="card-subtitle">all projects Admin</h6>
                                <div class="table-responsive">
                                    <table id="example23" class="table table-striped">
                                    <?php 
                                        session_start();
                                    ?>
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Company Name</th>
                                                <th>Website</th>
                                                <th>Country</th>
                                                <th>Product</th>
                                                <th></th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                        <?php foreach ($supplier as $row) :?>
                                            <tr class="obj-item">
                                                <td><?=$row['id']?></td>
                                                <td><?=$row['company_name']?></td>
                                                <td><?=$row['weburl']?></td>
                                                <td><?=$row['country']?></td>
                                                <td><?php echo $array_type[(string) $row['product_type']];?></td>
                                                <td>
                                                    <div class="obj-action">
                                                        <div class="ac">

                                                            <a href="<?php echo base_url().'/admin/supplier/detail?id='.$row['id']?>" data-toggle="tooltip" data-placement="bottom"
                                                                title="Detail"><i class="fas fa-info-circle"></i></a>
                                                        </div>
                                                        <div class="ac">
                                                            <a href="<?php echo base_url().'/admin/supplier/edit?id='.$row['id']?>" data-toggle="tooltip" data-placement="bottom"
                                                                title="Edit"><i class="far fa-edit"></i> </a>
                                                        </div>
                                                        <div class="ac">
                                                            <!-- <a href="<?php echo base_url().'/admin/admin/delete?id='.$row['id']?>" data-toggle="tooltip" data-placement="bottom"
                                                                title="Delete" onclick="return confirm('Are you sure?');"><i class="far fa-trash-alt"></i></a> -->
                                                                <a href="<?php echo base_url().'/admin/supplier/delete?id='.$row['id']?>" data-toggle="tooltip" data-placement="bottom" onclick="return confirm('Are you sure?');"
                                                                id="sa-confirm" data-original-title="Delete"><i class="far fa-trash-alt"></i></a>
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