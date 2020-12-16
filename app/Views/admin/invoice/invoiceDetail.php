<?= $this->extend('admin/_Layout') ?>
<?= $this->section('content_Admin') ?>
<title>Invoice Detail</title>

<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Page title</h4>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- start  main content -->

    <!-- import code here-->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5><b>INVOICE</b><span class="pull-right"> #<?php foreach ($invoiceDetail as $order):{$order = get_object_vars($order);}?><?php endforeach; ?><?=$order['order_id'];?></span></h5>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="pull-left">
                                <address>
                                    <h3> &nbsp;<b class="text-danger"><?php foreach ($info_admin as $info_admin):{$info_admin = get_object_vars($info_admin);}?><?php endforeach; ?><?=$info_admin['username'];?></b></h3>
                                    <p class="text-muted m-l-5">54 Triều Khúc
                                        <br /> Thanh Xuân,
                                        <br /> Hà Nội - 10000
                                    </p>
                                </address>
                            </div>
                            <div class="pull-right text-right">
                                <address>
                                    <h3>To, <?php foreach ($info_client as $info_client):{$info_client = get_object_vars($info_client);}?><?=$info_client['fullname'];?></h3>
                                    <!-- <h4 class="font-bold">Gaala & Sons,</h4> -->
                                    <p class="text-muted m-l-30"><?=$info_client['bill_address'];?>
                                        <!-- <br /> Nr' Viswakarma Temple,
                                        <br /> Talaja Road,
                                        <br /> Bhavnagar - 364002</p> -->
                                    <p class="m-t-30"><b>Invoice Date :</b> <i class="fa fa-calendar"> </i> <?=$info_client['create_on'];?></p>
                                    <!-- <p><b>Due Date :</b> <i class="fa fa-calendar"></i> 25th Jan 2017</p> -->
                                    <?php endforeach; ?>
                                </address>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="table-responsive m-t-40">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center">STT</th>
                                            <th class="text-right">Tên Sản Phẩm</th>
                                            <th class="text-right">Số lượng</th>
                                            <th class="text-right">Giá</th>
                                            <th class="text-right">Thành Tiền</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $stt = 1; ?>
                                        <?php foreach ($invoiceDetail as $row) : {$row = get_object_vars($row);}?>
                                            <tr>
                                                <td class="text-right"><?=$stt?></td>
                                                <td class="text-right"><?=$row['name']?></td>
                                                <td class="text-right"><?=$row['product_amount']?></td>
                                                <td class="text-right"></td>
                                                <td class="text-right"><?=$row['total_price']?></td>
                                                <?php $stt++ ?>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="pull-right m-t-30 text-right">
                                <p>Sub - Total amount: <?php $stt = 1; $sub_total_price = 0 ?>
                                        <?php foreach ($invoiceDetail as $row) : {$row = get_object_vars($row); $sub_total_price = $sub_total_price + $row['total_price']; $stt++;}?>
                                        <?php endforeach; ?><?=$sub_total_price?> vnđ</p>
                                <p>vat (10%) : <?php $vat = (($sub_total_price/100)*10)?><?=$vat?> vnđ</p>
                                <hr>
                                <h3><b>Total :</b> <?=$vat + $sub_total_price?> vnđ</h3>
                            </div>
                            <div class="clearfix"></div>
                            <hr>
                            <div class="text-right">
                                <button class="btn btn-danger" type="submit"> Proceed to payment </button>
                                <button onClick="javascript:window.print();" class="btn btn-default btn-outline" type="button"> <span><i class="fa fa-print"></i> Print</span> </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ============================================================== -->
    <!-- End Page Content -->
    <!-- ============================================================== -->
    <?= $this->endSection() ?>