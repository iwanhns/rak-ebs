<?php include '../static/top.php'; 
include '../../config/kelola-data/personal_details.php';
        $db     = new personal_details();
          $table    = 'personal_details';?>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Personal Details</h3>
                <link rel="stylesheet" href="css/bootstrap.css">
              <div class="pull-right box-tools">
               
            </div><!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-striped">
                <thead>
                  <tr> 
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>Kontak</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                        $no = 1;
                        if($db->search_by_field('id_user' , $_SESSION['user']) != null) {
                            foreach($db->search_by_field('id_user' , $_SESSION['user']) as $show) {
                    ?>
                      <tr>
                        <td><?php echo $show['nim']; ?></td>
                        <td><?php echo $show['nama']; ?></td>
                        <td><?php echo $show['alamat']; ?></td>
                        <td><?php echo $show['email']; ?></td>
                        <td><?php echo $show['no_hp']; ?></td>
                        <td>
                            <a href="#editPersonal" class="btn  btn-warning btn-md" data-toggle="modal" data-target="#modalEdit-<?php echo $show['id_personal_details']; ?>"><i class="fa fa-edit" data-toggle="tooltip" title="Edit"></i> Edit</a>

                            <a href="print-cv-mahasiswa.php"><button class="btn btn-primary btn-md"><i class="fa fa-print"> </i> Print</button></a>


                        </td>
                      </tr> 
                              <?php 
                                      }
                                  }
                              ?> 
                    </tbody>
              </table>
            </div><!-- /.box-body -->
          </div><!-- /.box -->
        </div><!-- /.col -->

     
    <?php
       $no = 1;
       if($db->search_by_field('id_user' , $_SESSION['user']) != null) {
          foreach($db->search_by_field('id_user' , $_SESSION['user']) as $show) {
    ?>

    

    <div id="modalEdit-<?php echo $show['id_personal_details']; ?>" class="modal fade" role="dialog">
      <div class="modal-dialog">
          <div class="modal-content">
          <div class="modal-header btn-warning">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            <h4 class="modal-title">Edit Personal Details</h4>
          </div>
          <form action="action.php?table=personal_details&action=update" method="post">
        
            
          <div class="modal-body">

            <input type="hidden" name="id_personal_details" value="<?php echo $show['id_personal_details'] ?>">

             <div class="col-sm-6">
             <div class="form-group">
                <label>NIM</label>
                <input type="text" class="form-control" name="nim" value="<?php echo $show['nim'] ?>">
              </div>
             </div>

              <div class="col-sm-6"> 
              <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="nama" value="<?php echo $show['nama'] ?>">
              </div>
            </div>

              <div class="col-sm-6">
              <div class="form-group">
                <label>Tempat Lahir</label>
                <input type="text" class="form-control" name="tempat_lahir" value="<?php echo $show['tempat_lahir'] ?>">
              </div>
             </div>

             <div class="col-sm-6">
                <label> Tanggal Lahir</label>
                    <div class="row ">
                     <div class="col-sm-4">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                 <div class="input-group-text">D</div>
                            </div>
                            <select name="tanggal" class="form-control custom-select">
                               <?php
                                $tanggal = 01;
                                $d_now = date('d', strtotime($dataProfile['tanggal_lahir']));
                                while ($tanggal < 32) {
                                  if ($d_now == $tanggal) {
                                     ?>
                                      <option selected value="<?php echo $tanggal; ?>"><?php echo $tanggal++; ?></option>
                              <?php } else { ?>
                                        <option value="<?php echo $tanggal; ?>"><?php echo $tanggal++; ?></option>
                                      <?php
                                     }
                                  }
                               ?>
                              </select>
                        </div>
                       </div>
                       <div class="col-sm-4">
                       <div class="input-group mb-2">
                          <div class="input-group-prepend">
                               <div class="input-group-text">M</div>
                          </div>
                          <select name="bulan" class="form-control custom-select">
                          <?php
                           $bulan = 01;
                           $m_now = date('m', strtotime($dataProfile['tanggal_lahir']));
                              while ($bulan < 13) {
                                  if ($m_now == $bulan) {
                                    ?>
                                  <option selected value="<?php echo $bulan; ?>"><?php echo $bulan++; ?></option>
                                   <?php } else { ?>
                                  <option value="<?php echo $bulan; ?>"><?php echo $bulan++; ?></option>
                                 <?php
                                  }
                                }
                              ?>
                            </select>
                        </div>
             </div>
                  <div class="col-sm-4">
                      <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Y</div>
                        </div>
                        <select name="tahun" class="form-control custom-select">
                          <?php
                           $tahun = 1990;
                           $y_now = date('Y', strtotime($dataProfile['tanggal_lahir']));
                           while ($tahun < 2011) {
                              if ($y_now == $tahun) {
                                 ?>
                             <option selected value="<?php echo $tahun; ?>"><?php echo $tahun++; ?></option>
                                <?php } else { ?>
                              <option value="<?php echo $tahun; ?>"><?php echo $tahun++; ?></option>
                                <?php
                               }
                           }
                        ?>
                         </select>
                        </div>
                  </div>
                </div>
            </div>

            <div class="col-sm-6">
              <div class="form-group">
                <label>Kontak</label>
                <input type="number" class="form-control" name="no_hp" value="<?php echo $show['no_hp'] ?>">
              </div>
            </div>

            <div class="col-sm-6">
              <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" name="email" value="<?php echo $show['email'] ?>">
              </div>
            </div>

            <div class="col-sm-6">
              <div class="form-group">
                <label>Alamat</label>
                <input type="text" class="form-control" name="alamat" value="<?php echo $show['alamat'] ?>">
              </div>
            </div>

           <div class="col-sm-6">
              <div class="form-group">
                <label>Status Pernikahan</label>
                <table border="0">
                <tr>
                    <td><input type="radio" name="status_pernikahan" value="Belum Menikah" checked />Belum Menikah</td>
                </tr>
                <tr>
                    <td><input type="radio" name="status_pernikahan" value="Sudah Menikah"/>Sudah Menikah</td>
                </tr>
                </table>
              </div>
            </div>

               <div class="col-lg-6">
                  <div class="form-group">
                      <label>Prodi</label>
                          <select name="prodi" class="form-control">
                          <option><?php echo $show['prodi'] ?></option>
                          <option>Manajemen Bisnis</option>
                          <option>Ilmu Komputer</option>
                          <option>Sistem Informasi</option>
                    </select>
                </div>
            </div>

              <div class="col-lg-6">
                <div class="form-group">
                  <label>Angkatan</label>
                  <select name="angkatan" class="form-control">
                  <option><?php echo $show['angkatan'] ?></option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                  <option>6</option>
                  <option>7</option>
                 </select>
                </div>
              </div>

            <div class="col-sm-12">
              <div class="form-group">
                <label>Sosial Media</label>
                <input type="text" class="form-control" name="sosmed" value="<?php echo $show['sosmed'] ?>">
              </div>
            </div>
            
              
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-warning pull-left" data-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-warning">Simpan</button>
          </div>
        </form>
        </div>
      </div>
    </div>

    
     <?php 
                                      }
                                  }
                              ?>

      </div><!-- /.row -->
    </section>
<?php include '../static/bot.php'; ?>
