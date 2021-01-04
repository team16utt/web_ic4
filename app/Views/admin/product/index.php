<?= $this->extend('admin/_Layout') ?>
<?= $this->section('content_Admin') ?>

<!-- Start Page Content -->
<!-- ============================================================== -->
<!-- -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive m-t-40">
                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Product Name</th>
                                <th>Provider</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Image</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($user as $row): ?>
                            <tr class="obj-item">
                                <td><?=$row['product_id']?></td>
                                <td><?=$row['name']?></td>
                                <td><?=$row['supplier_id']?></td>
                                <td><?=$row['quantity']?></td>
                                <td><?=$row['price']?></td>
                                <td><img src=" <?php if($row['image'][0] == 'h'){
                                    echo $row['image'];}
                                    else {
                                        echo base_url() . $row['image'];
                                    }
                                ?>" alt="" width="50" height="50"></td>
                                <!-- <td>63-(612)356-9955</td> -->
                                <td>
                                    <div class="obj-action">
                                        <div class="ac">

                                            <a href="<?php echo base_url().'/admin/product/detail?id='.$row['product_id']?>" data-toggle="tooltip" data-placement="bottom" title="Detail"><i class="fas fa-info-circle"></i></a>
                                        </div>
                                        <div class="ac">
                                            <a href="<?php echo base_url().'/admin/product/edit?id='.$row['product_id']?>" data-toggle="tooltip" data-placement="bottom" title="Edit"><i class="far fa-edit"></i> </a>
                                        </div>
                                        <div class="ac">
                                            <a href="<?php echo base_url().'/admin/product/delete?id='.$row['product_id']?>" onclick="return confirm('Are you sure?');" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="far fa-trash-alt"></i></a>
                                        </div>

                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                            <!-- <tr class="obj-item">
                                <td>70</td>
                                <td>Shirley</td>
                                <td>Oyonder</td>
                                <td>1000</td>
                                <td>sfreeman1x@dmoz.org</td>
                                <td>63-(612)356-9955</td>
                                <td>
                                    <div class="obj-action">
                                        <div class="ac">

                                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Detail"><i class="fas fa-info-circle"></i></a>
                                        </div>
                                        <div class="ac">
                                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Edit"><i class="far fa-edit"></i> </a>
                                        </div>
                                        <div class="ac">
                                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="far fa-trash-alt"></i></a>
                                        </div>

                                    </div>
                                </td>
                            </tr> -->

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- table responsive -->

    </div>
</div>
<!-- ============================================================== -->
<!-- End PAge Content -->

<?= $this->endSection() ?>