<section class="content-header">
    <h1>Penyewaan Loker</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Penyewaan Loker</li>
    </ol>
</section>
<?php include 'pages/static/database-connector.php'; ?>
<section class="content">
<?php include 'pages/static/alerts.php'; ?>
    <div class="row">
        <?php
            if($db->show() != null) {
                foreach($db->show() as $show) {
        ?>
            <div class="col-lg-4 col-xs-6">
                    <?php if ($show['status'] == "Reserved") { ?>
                        <button class="btn btn-block" data-toggle="modal" data-target="#save-<?php echo $show['id_loker']; ?>" disabled>
                        <div class="small-box bg-green">
                    <?php } else { ?>
                        <button class="btn btn-block" data-toggle="modal" data-target="#save-<?php echo $show['id_loker']; ?>">
                        <div class="small-box bg-aqua">
                    <?php } ?>
                            <div class="inner">
                                <h4 class="text-center"><b><?php echo $show['name']; ?></b></h4>
                            </div>
                        </div>
                </button>
                <div div class="modal fade" id="save-<?php echo $show['id_loker']; ?>">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header bg-aqua">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title"><b>Sewa Loker <?php echo $show['id_loker']; ?></b></h4>
                            </div>
                            <form action="pages/kelola-data/action.php?page=dashboard&action=save" method="post" class="contact-form">
                                <div class="modal-body">
                                    <input type="hidden" name="id_loker" value="<?php echo $show['id_loker']; ?>">
                                    <input type="hidden" name="status1" value="Reserved">
                                    <input type="hidden" name="status2" value="Active">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>NIM</label>
                                                <input type="text" placeholder="NIM" name="nim" class="form-control" autocomplete="off" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" placeholder="Name" name="name" class="form-control" autocomplete="off" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" placeholder="Email" name="email" class="form-control" autocomplete="off" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Finish Date</label>
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-calendar"></i>
                                                    </div>
                                                    <input type="text" name="finish_date" class="form-control pull-right datepicker" autocomplete="off" placeholder="Finish Date" required/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Rental</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php } } ?>
    </div>
</section>