<?php include '../static/top.php'; 
include '../../config/kelola-data/writing_experience.php';
        $db     = new writing_experience();
          $table    = 'writing_experience';?>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Writing Experience</h3>
              <div class="pull-right box-tools">
                <button class="btn btn-primary btn-md" data-toggle="modal" data-target="#modalAdd"><i class="fa fa-plus" > </i> Add Writing Experience</button>
            </div><!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>        
                    <th>No</th>   
                    <th>Judul Karya</th>
                    <th>Dosen Pembimbing</th>
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
                        <td width="4%"><?php echo $no++; ?></td>
                        <td><?php echo $show['judul_karya']; ?></td>
                        <td><?php echo $show['nama_dosen']; ?></td>
                        <td>
                            <a href="#editWriting" class="btn  btn-warning btn-md" data-toggle="modal" data-target="#modalEdit-<?php echo $show['id_writing_experience']; ?>"><i class="fa fa-edit" data-toggle="tooltip" title="Edit"></i> Edit</a>

                            <a href="#deleteWriting" class="btn  btn-danger btn-md" data-toggle="modal" data-target="#modalDelete-<?php echo $show['id_writing_experience']; ?>"><i class="fa fa-trash" data-toggle="tooltip" title="Delete"></i> Delete</a>


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

     <div id="modalAdd" class="modal fade" role="dialog">
      <div class="modal-dialog">
          <div class="modal-content">
          <div class="modal-header btn-primary">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            <h4 class="modal-title">Add Writing Experience</h4>
          </div>
          <form action="action.php?table=writing_experience&action=store" method="post">
          <input type="hidden" name="id_user" value="<?php echo $_SESSION['user']; ?>">    

          <div class="modal-body">

             <div class="col-sm-6">
             <div class="form-group">
                <label>Judul Karya</label>
                <input type="text" class="form-control" name="judul_karya" placeholder="Masukan Judul Karya" required>
              </div>
             </div>

              <div class="col-sm-6"> 
              <div class="form-group">
                <label>Nama Dosen</label>
                <input type="text" class="form-control" name="nama_dosen" placeholder="Masukan Nama Dosen" required>
              </div>
            </div>

              <div class="col-sm-6">
              <div class="form-group">
                <label>Nama Jurnal</label>
                <input type="text" class="form-control" name="nama_jurnal" placeholder="Masukan Nama Jurnal" required>
              </div>
             </div>

            <div class="col-lg-6">
                   <div class="form-group">
                          <label>Tahun</label>
                          <select name="tahun" class="form-control" required>
                          <option>Tahun</option>
                              <option>2010</option>
                              <option>2011</option>
                              <option>2012</option>
                              <option>2013</option>
                              <option>2014</option>
                              <option>2015</option>
                              <option>2016</option>
                              <option>2017</option>
                              <option>2018</option>
                              <option>2019</option>
                      </select>
                  </div>
              </div>

             <div class="col-sm-6">
               <div class="form-group">
                <label>Volume</label>
                <input type="text" class="form-control" name="volume" placeholder="Masukan Volume" required>
              </div>
            </div>

            <div class="col-sm-6">
              <div class="form-group">
                <label>Halaman</label>
                <input type="number" class="form-control" name="halaman" placeholder="Masukan Halaman" required>
              </div>
            </div>

            <div class="col-sm-6">
              <div class="form-group">
                <label>Link URl</label>
                <input type="text" class="form-control" name="link" placeholder="Masukan Link URl" required>
              </div>
            </div>

            <div class="col-sm-6">
              <div class="form-group">
                <label>Kategori</label>
                <input type="text" class="form-control" name="kategori" placeholder="Masukan Kategori" required>
              </div>
            </div>

            <div class="col-lg-12">
                 <div class="form-group">
                   <label>File</label>
                   <input type="file" name="upload_file" class="custom-file-input" id="customFile" autocomplete="off">
                 </div>
            </div> 
              
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-primary pull-left" data-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>

        </form>
        </div>
      </div>
    </div>

    <?php
       $no = 1;
       if($db->search_by_field('id_user' , $_SESSION['user']) != null) {
          foreach($db->search_by_field('id_user' , $_SESSION['user']) as $show) {
    ?>

    

    <div id="modalEdit-<?php echo $show['id_writing_experience']; ?>" class="modal fade" role="dialog">
      <div class="modal-dialog">
          <div class="modal-content">
          <div class="modal-header btn-warning">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            <h4 class="modal-title">Edit Writing Experience</h4>
          </div>
          <form action="action.php?table=writing_experience&action=update" method="post">

          <div class="modal-body">
            <input type="hidden" name="id_writing_experience" value="<?php echo $show['id_writing_experience'] ?>">
             <div class="col-sm-6">
             <div class="form-group">
                <label>Judul Karya</label>
                <input type="text" class="form-control" name="judul_karya" placeholder="" value="<?php echo $show['judul_karya'] ?>">
              </div>
             </div>

              <div class="col-sm-6"> 
              <div class="form-group">
                <label>Nama Dosen</label>
                <input type="text" class="form-control" name="nama_dosen" placeholder="" value="<?php echo $show['nama_dosen'] ?>">
              </div>
            </div>

              <div class="col-sm-6">
              <div class="form-group">
                <label>Nama Jurnal</label>
                <input type="text" class="form-control" name="nama_jurnal" placeholder="" value="<?php echo $show['nama_jurnal'] ?>">
              </div>
             </div>

              <div class="col-lg-6">
                <div class="form-group">
                  <label>Tahun</label>
                  <select name="tahun" class="form-control">
                  <option><?php echo $show['tahun'] ?></option>
                  <option>2010</option>
                  <option>2011</option>
                  <option>2012</option>
                  <option>2013</option>
                  <option>2014</option>
                  <option>2015</option>
                  <option>2016</option>
                  <option>2017</option>
                  <option>2018</option>
                  <option>2019</option>
                        </select>
                    </div>
                </div>

             <div class="col-sm-6">
               <div class="form-group">
                <label>Volume</label>
                <input type="text" class="form-control" name="volume" placeholder="" value="<?php echo $show['tahun'] ?>" >
              </div>
            </div>

            <div class="col-sm-6">
              <div class="form-group">
                <label>Halaman</label>
                <input type="number" class="form-control" name="halaman" placeholder="" value="<?php echo $show['halaman'] ?>">
              </div>
            </div>

            <div class="col-sm-6">
              <div class="form-group">
                <label>Link URl</label>
                <input type="text" class="form-control" name="link" placeholder="" value="<?php echo $show['link'] ?>">
              </div>
            </div>

            <div class="col-sm-6">
              <div class="form-group">
                <label>Kategori</label>
                <input type="text" class="form-control" name="kategori" placeholder="" value="<?php echo $show['kategori'] ?>">
              </div>
            </div> 

             <div class="col-lg-12">
                 <div class="form-group">
                   <label>File</label>
                   <input type="file" name="upload_file" class="custom-file-input" id="customFile" value="<?php echo $show['upload_file'] ?>">
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

    <div id="modalDelete-<?php echo $show['id_writing_experience']; ?>"  class="modal modal-danger fade">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header btn-danger">
              <button type="button" class="Tutup" data-dismiss="modal" aria-label="Tutup"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Delete Writing Experience</h4>
            </div>
            <form action="action.php?table=writing_experience&action=delete" method="post">
                <input name="id_writing_experience" type="hidden" value="<?php echo $show['id_writing_experience']; ?>">
                <div class="modal-body">
                  <p>Apakah kamu ingin menghapus data ini?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Tutup</button>
                  <button type="submit" class="btn btn-outline">YA</button>
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
