<?php include '../static/top.php'; 
include '../../config/kelola-data/working_experience.php';
        $db     = new working_experience();
          $table    = 'working_experience';?>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Working Experience</h3>
              <div class="pull-right box-tools">
                <button class="btn btn-primary btn-md" data-toggle="modal" data-target="#modalAdd"><i class="fa fa-plus"> </i> Add Working Experience</button>
            </div><!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
					<th>No</th>
                    <th>Nama Pekerjaan</th>
                    <th>Posisi</th>
                    <th>Tahun Masuk</th>
                    <th>Tahun Berakhir</th>
                    <th>Deskripsi</th>
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
                        <td><?php echo $show['nama_working_experience']; ?></td>
                        <td><?php echo $show['posisi']; ?></td>
            						<td><?php echo $show['tahun_masuk']; ?></td>
            						<td><?php echo $show['tahun_berakhir']; ?></td>
            						<td><?php echo $show['deskripsi']; ?></td>
                        <td>
                            <a href="#editWriting" class="btn  btn-warning btn-md" data-toggle="modal" data-target="#modalEdit-<?php echo $show['id_working_experience']; ?>"><i class="fa fa-edit" data-toggle="tooltip" title="Edit"></i> Edit</a>

                            <a href="#deleteWriting" class="btn  btn-danger btn-md" data-toggle="modal" data-target="#modalDelete-<?php echo $show['id_working_experience']; ?>"><i class="fa fa-trash" data-toggle="tooltip" title="Delete"></i> Delete</a>


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
            <h4 class="modal-title">Add Working Experience</h4>
          </div>
          <form action="action.php?table=working_experience&action=store" method="post">
		  <input type="hidden" name="id_user" value="<?php echo $_SESSION['user']; ?>">  

          <div class="modal-body">
			
             <div class="col-sm-6">			
             <div class="form-group">
                <label>Nama Pekerjaan</label>
                <input type="text" class="form-control" name="nama_working_experience" placeholder="Masukan Nama Pekerjaan" required>
              </div>
			  </div>
			  
			  
			  <div class="col-sm-6">
              <div class="form-group">
                <label>Posisi</label>
                <input type="text" class="form-control" name="posisi" placeholder="Masukan Posisi" required>
              </div>
			  </div>
			  
      <div class="col-lg-6">
             <div class="form-group">
                    <label>Tahun Masuk</label>
                    <select name="tahun_masuk" class="form-control">
                    <option>Tahun Masuk</option>
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

      <div class="col-lg-6">
             <div class="form-group">
                    <label>Tahun Berakhir</label>
                    <select name="tahun_berakhir" class="form-control">
                    <option>Tahun Berakhir</option>
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
                <label>Deskripsi</label>
                <input type="text" class="form-control" name="deskripsi" placeholder="Deskripsi" required>
              </div>
            </div>
			  
			  <div class="col-lg-14">
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

    <div id="modalEdit-<?php echo $show['id_working_experience']; ?>" class="modal fade" role="dialog">
      <div class="modal-dialog">
          <div class="modal-content">
          <div class="modal-header btn-warning">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            <h4 class="modal-title">Edit Working Internship</h4>
          </div>
        <form action="action.php?table=working_experience&action=update" method="post">

          <div class="modal-body">
            <input type="hidden" name="id_working_experience" value="<?php echo $show['id_working_experience'] ?>">
             <div class="col-sm-6">
             <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="nama_working_experience" placeholder="" value="<?php echo $show['nama_working_experience'] ?>">
              </div>
			</div>
			
              <div class="col-sm-6"> 
              <div class="form-group">
                <label>Posisi</label>
                <input type="text" class="form-control" name="posisi" placeholder="" value="<?php echo $show['posisi'] ?>">
              </div>
            </div>

        <div class="col-lg-6">
             <div class="form-group">
                    <label>Tahun Masuk</label>
                    <select name="tahun_masuk" class="form-control">
          <option><?php echo $show['tahun_masuk'] ?></option>
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

        <div class="col-lg-6">
             <div class="form-group">
                    <label>Tahun Berakhir</label>
                    <select name="tahun_berakhir" class="form-control">
          <option><?php echo $show['tahun_berakhir'] ?></option>
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
                <label>Deskripsi</label>
                <input type="text" class="form-control" name="deskripsi" placeholder="" value="<?php echo $show['deskripsi'] ?>">
              </div>
             </div>
			  
        <div class="col-lg-14">
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

    <div id="modalDelete-<?php echo $show['id_working_experience']; ?>"  class="modal modal-danger fade">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header btn-danger">
              <button type="button" class="Tutup" data-dismiss="modal" aria-label="Tutup"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Delete Working Experience</h4>
            </div>
            <form action="action.php?table=working_experience&action=delete" method="post">
                <input name="id_working_experience" type="hidden" value="<?php echo $show['id_working_experience']; ?>">
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