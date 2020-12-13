<?= $this->extend('admin/_Layout') ?>
<?= $this->section('content_Admin') ?>
<div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="row">                             
                                <div class="col-lg-12  bg-light border-left">
                                    <div class="card-body">
                                    <form action="<?php echo base_url().'/admin/mailbox'?>" method='POST'>    
                                    <div class="btn-group m-b-10 m-r-10" role="group" aria-label="Button group with nested dropdown">
                                            <button type="submit" class="btn btn-secondary font-18"><i class="mdi mdi-delete"></i></button>
                                        </div>
                                       
                                    </div>
                                    <div class="card-body p-t-0">
                                        <div class="card b-all shadow-none">
                                            <div class="inbox-center table-responsive">
                                                <table class="table table-hover no-wrap">
                                                    <tbody>
                                                    <?php foreach($user as $row): ?>
                                                        <tr>
                                                            <td>
                                                                <div class="custom-control custom-checkbox mr-sm-2">
                                                                    <input type="checkbox" name="arrDelete[]" id="<?= $row['id']?>" value="<?= $row['id']?>">
                                                                    <!-- <label class="custom-control-label" for="<?= $row['id']?>"></label> -->
                                                                </div>
                                                            </td>
                                                            <td class="hidden-xs-down"><i class="far fa-star"></i></td>
                                                            <td class="hidden-xs-down"><?= $row['fullname']?></td>
                                                            <td class="max-texts"><a href="<?php echo base_url().'/admin/mailbox/detail?id='.$row['id']?>"><span class="label label-success">Elite</span><?= $row['content']?></a></td>
                                                            <td class="text-right"><?= $row['state']?></td>
                                                            <td class="hidden-xs-down"><i class="fa fa-paperclip"></i></td>
                                                            <td class="text-right"><?= $row['created_on']?></td>
                                                        </tr>
                                                        <?php endforeach; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?= $this->endSection() ?>