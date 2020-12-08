<?= $this->extend('admin/_Layout') ?>
<?= $this->section('content_Admin') ?>
<div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Admin</h5>
                                <h6 class="card-subtitle">all projects Admin</h6>
                                <div class="table-responsive">
                                    <table id="example23" class="table table-striped">
                                        <?php var_dump($adminModel) ?>
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>Password</th>
                                                <th>Student code</th>
                                                <th>Date</th>
                                                <th></th>
                                            </tr>
                                        </thead>

                                        <tbody>

                                            <tr class="obj-item">
                                                <td>70</td>
                                                <td>Shirley Freeman</td>
                                                <td>Oyonder</td>
                                                <td>sfreeman1x@dmoz.org</td>
                                                <td>63-(612)356-9955</td>
                                                <td>
                                                    <div class="obj-action">
                                                        <div class="ac">

                                                            <a href="#" data-toggle="tooltip" data-placement="bottom"
                                                                title="Detail"><i class="fas fa-info-circle"></i></a>
                                                        </div>
                                                        <div class="ac">
                                                            <a href="#" data-toggle="tooltip" data-placement="bottom"
                                                                title="Edit"><i class="far fa-edit"></i> </a>
                                                        </div>
                                                        <div class="ac">
                                                            <a href="#" data-toggle="tooltip" data-placement="bottom"
                                                                title="Delete"><i class="far fa-trash-alt"></i></a>
                                                        </div>

                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="obj-item">
                                                <td>70</td>
                                                <td>Shirley Freeman</td>
                                                <td>Oyonder</td>
                                                <td>sfreeman1x@dmoz.org</td>
                                                <td>63-(612)356-9955</td>
                                                <td>
                                                    <div class="obj-action">
                                                        <div class="ac">

                                                            <a href="#" data-toggle="tooltip" data-placement="bottom"
                                                                title="Detail"><i class="fas fa-info-circle"></i></a>
                                                        </div>
                                                        <div class="ac">
                                                            <a href="#" data-toggle="tooltip" data-placement="bottom"
                                                                title="Edit"><i class="far fa-edit"></i> </a>
                                                        </div>
                                                        <div class="ac">
                                                            <a href="#" data-toggle="tooltip" data-placement="bottom"
                                                                title="Delete"><i class="far fa-trash-alt"></i></a>
                                                        </div>

                                                    </div>
                                                </td>
                                            </tr>
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