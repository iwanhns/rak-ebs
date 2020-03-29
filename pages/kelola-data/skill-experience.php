<?php include '../static/top.php'; 

          include '../../config/kelola-data/skill-experience.php';
        $db     = new skills();
          $table    = 'skills';?>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Skills</h3>
              <div class="pull-right box-tools">
                <button class="btn btn-primary btn-md" data-toggle="modal" data-target="#modalAdd"><i class="fa fa-plus"> </i> Add Skills</button>
            </div>
            </div><!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Skill</th>
                    <th>Tool Skill</th>
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
                        <td><?php echo $show['nama_skills']; ?></td>
                        <td><?php echo $show['tool_skills']; ?></td>
                      
                        <td>
                            <a href="#editSkills" class="btn  btn-warning btn-md" data-toggle="modal" data-target="#modalEdit-<?php echo $show['id_skills']; ?>"><i class="fa fa-edit" data-toggle="tooltip" title="Edit"></i> Edit</a>

                            <a href="#deleteSkills" class="btn  btn-danger btn-md" data-toggle="modal" data-target="#modalDelete-<?php echo $show['id_skills']; ?>"><i class="fa fa-trash" data-toggle="tooltip" title="Delete"></i> Delete</a>


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
            <h4 class="modal-title">Add Skills</h4>
          </div>
          <form action="action.php?table=skills&action=store" method="post">

             <input type="hidden" name="id_user" value="<?php echo $_SESSION['user']; ?>">
              <div class="modal-body row">
                <div class="col-sm-6">
                 <div class="form-group">
                    <label>Nama Skill</label>
                    <input type="text" class="form-control" name="nama_skills" placeholder="Masukan Nama" required>
                  </div>
                 </div> 
                 <div class="col-sm-6"> 
                  <div class="form-group">
                    <label>Tool Skills</label>
                    <input type="text" class="form-control" name="tool_skills" placeholder="Masukan Tool" required>
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
     
    <div id="modalEdit-<?php echo $show['id_skills']; ?>" class="modal fade" role="dialog">
      <div class="modal-dialog">
          <div class="modal-content">
          <div class="modal-header btn-warning">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            <h4 class="modal-title">Edit Skills</h4>
          </div>
          <form action="action.php?table=skills&action=update" method="post">
          <div class="modal-body">
             <input type="hidden" name="id_skills" value="<?php echo $show['id_skills'] ?>">
             <div class="form-group">
                <label>Nama Skill</label>
                <input type="text" class="form-control" name="nama_skills" placeholder="" value="<?php echo $show['nama_skills'] ?>" >
              </div>

              <div class="form-group">
                <label>Tool Skill</label>
                <input type="text" class="form-control" name="tool_skills" placeholder="" value="<?php echo $show['tool_skills'] ?>" >
              </div>

              

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-warning pull-left" data-dismiss="modal">Tutup</button>
            <button type="submit," class="btn btn-warning">Simpan</button>
          </div>
        </form>
        </div>
      </div>
    </div>


    <div id="modalDelete-<?php echo $show['id_skills']; ?>"  class="modal modal-danger fade">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="Tutup" data-dismiss="modal" aria-label="Tutup"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Delete Skill</h4>
            </div>
            <form action="action.php?table=skills&action=delete" method="post">
                <input name="id_skills" type="hidden" value="<?php echo $show['id_skills']; ?>">
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
