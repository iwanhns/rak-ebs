<?php include '../static/top.php';?>
    <section class="content-header">
        <h1>Kelola Tenant</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li class="active">Kelola-Tenant</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <?php include '../static/alerts.php';?>
                    </div>
                    <div class="box-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nim</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Rental Date</th>
                                    <th>Finish Date</th>
                                    <th>Loker Number</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $no = 1;
                                    if($db->show() != null) {
                                        foreach($db->show() as $show) {
                                ?>
                                    <tr>
                                        <td width="4%">
                                            <?php echo $no++; ?>
                                        </td>
                                        <td>
                                            <?php echo $show['nim']; ?>
                                        </td>
                                        <td>
                                            <?php echo $show['name']; ?>
                                        </td>
                                        <td>
                                            <?php echo $show['email']; ?>
                                        </td>
                                        <td>
                                            <?php echo date('Y/m/d', strtotime($show['rental_date']));?>
                                        </td>
                                        <td>
                                            <?php echo date('Y/m/d', strtotime($show['finish_date']));?>
                                        </td>
                                        <td>
                                            <?php echo $show['id_loker']; ?>
                                        </td>
                                        <td>
                                            <a href="#editEducation" class="btn  btn-warning btn-md" data-toggle="modal" data-target="#modalEdit-<?php echo $show['id_tenant']; ?>"><i class="fa fa-edit" data-toggle="tooltip" title="Edit"></i> Edit</a>

                                            <a href="#deleteEducation" class="btn  btn-danger btn-md" data-toggle="modal" data-target="#modalDelete-<?php echo $show['id_tenant']; ?>"><i class="fa fa-trash" data-toggle="tooltip" title="Delete"></i> Delete</a>

                                        </td>
                                    </tr>
                                    <div id="modalEdit-<?php echo $show['id_tenant']; ?>" class="modal fade" role="dialog">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header btn-warning">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                    <h4 class="modal-title">Edit Data Tenant</h4>
                                                </div>
                                                <form action="action.php?page=tenant&action=update" method="post">
                                                    <div class="modal-body">
                                                        <input type="hidden" name="id_tenant" value="<?php echo $show['id_tenant'] ?>">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label>NIM</label>
                                                                    <input type="text" placeholder="NIM" name="nim" class="form-control" autocomplete="off" value="<?php echo $show['nim']; ?>" disabled>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label>Name</label>
                                                                    <input type="text" placeholder="Name" name="name" class="form-control" autocomplete="off" value="<?php echo $show['name']; ?>" disabled>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label>Email</label>
                                                                    <input type="email" placeholder="Email" name="email" class="form-control" autocomplete="off" value="<?php echo $show['email']; ?>" disabled>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label>Lokcer Number</label>
                                                                    <input type="email" placeholder="Email" name="id_loker" class="form-control" autocomplete="off" value="<?php echo $show['id_loker']; ?>" disabled>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label>Rental Date</label>
                                                                    <input type="text" placeholder="Email" name="rental_date" class="form-control" autocomplete="off" value="<?php echo date('Y/m/d', strtotime($show['rental_date']));?>" disabled>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label>Finish Date</label>
                                                                    <div class="input-group">
                                                                        <div class="input-group-addon">
                                                                            <i class="fa fa-calendar"></i>
                                                                        </div>
                                                                        <input type="text" name="finish_date" class="form-control pull-right datepicker" autocomplete="off" placeholder="Finish Date" value="<?php echo date('Y/m/d', strtotime($show['finish_date']));?>" required/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit," class="btn btn-warning">Edit</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="modalDelete-<?php echo $show['id_tenant']; ?>" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header bg-red">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                    <h4 class="modal-title">Delete Data Tenant</h4>
                                                </div>
                                                <form action="action.php?page=tenant&action=delete" method="post">
                                                    <input name="id_tenant" type="hidden" value="<?php echo $show['id_tenant']; ?>">
                                                    <input name="id_loker" type="hidden" value="<?php echo $show['id_loker']; ?>">
                                                    <input type="hidden" name="status1" class="form-control" value="Avaliable">
                                                    <input type="hidden" name="status2" class="form-control" value="Expired">
                                                    <div class="modal-body">
                                                        <p>Apakah kamu ingin menghapus data ini?</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <?php 
                                      }
                                  }
                              ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </section>
    <?php include '../static/bot.php'; ?>