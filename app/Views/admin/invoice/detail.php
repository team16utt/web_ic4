<?= $this->extend('admin/_Layout') ?>
<?= $this->section('content_Admin') ?>
<div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5><b>INVOICE</b> <span class="pull-right"><?= $user_detail['id'] ?></span></h5>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="pull-left">
                                            <address>
                                                <h3> &nbsp;<b class="text-danger">Gear 16</b></h3>
                                                <p class="text-muted m-l-5">No.54 Trieu Khuc Street,
                                                    <br /> Thanh Xuan District,
                                                    <br /> Ha Noi City,
                                                    <br /> Vietnam</p>
                                            </address>
                                        </div>
                                        <div class="pull-right text-right">
                                            <address>
                                                <h3>To,</h3>
                                                <h4 class="font-bold"><?= $user_detail['fullname']?></h4>
                                                <p class="text-muted m-l-30"><?= 'Phone: ' .$user_detail['phone']?>
                                                    <br /> <?= 'Address: '.$user_detail['bill_address']?>,
                                                    <br /><h4 class="font-bold"><?php if($user_detail['paid_status']==0) echo 'Trạng thái: Chưa thanh toán'; else echo 'Trạng thái: Đã thanh toán'?></h4></p>
                                                <p class="m-t-30"><b>Invoice Date :</b> <i class="fa fa-calendar"></i>
                                                    <?= $user_detail['create_on']?></p>
                                                <p><b>Due Date :</b> <i class="fa fa-calendar"></i><?php echo date('Y-m-d', strtotime($user_detail['create_on']. ' + 7 days')); ?></p>
                                            </address>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="table-responsive m-t-40">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">#</th>
                                                        <th class="text-center">Description</th>
                                                        <th class="text-center">Quantity</th>
                                                        <th class="text-right">Unit Cost</th>
                                                        <th class="text-right">Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $stt=1;$total = 0;?>
                                                    <?php foreach($detail as $item):?>
                                                    <tr>
                                                        <td class="text-center"><?php echo $stt; $stt+=1;?></td>
                                                        <td class="text-center"><?= $item['name']?></td>
                                                        <td class="text-center"><?= $item['product_amount']?> </td>
                                                        <td class="text-right"> <?= $item['price']?> </td>
                                                        <td class="text-right"><?= $item['total_price'] ?></td>
                                                        <?php $total +=$item['total_price'];?>
                                                    </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="pull-right m-t-30 text-right">
                                            <h4>Note: <?= $user_detail['note']?></h4>
                                            <h3><b>Total :</b> <?=$total?>  VND</h3>
                                        </div>
                                        <div class="clearfix"></div>
                                        <hr>
                                        <div class="text-right">
                                            <button class="btn btn-danger" type="submit"> Proceed to payment </button>
                                            <button onClick="javascript:window.print();"
                                                class="btn btn-default btn-outline" type="button"> <span><i
                                                        class="fa fa-print"></i> Print</span> </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?= $this->endSection() ?>