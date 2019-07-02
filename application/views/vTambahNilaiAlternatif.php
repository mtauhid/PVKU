          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit Alternatif</h4>
                  <br>
                  <form class="forms-sample" action="<?php echo site_url('Alternatif/prosesEditAlternatif')?>" method="post">
                    <?php
                    if($data_nilaialternatif->num_rows() > 0){
                    foreach($data_nilaialternatif as $row){
                    ?>
                    <div class="form-group">
                      <label for="exampleInputName1"><?php echo $row->nama_kriteria?></label>
                      <input type="text" class="form-control" name="nama_alternatif" value="<?php echo $row->nilai ?>">
                    </div>
                    <?php
                      }
                    }else{
                    ?>
                    <div class="form-group">
                      <label for="exampleInputName1"><?php echo $row->nama_kriteria?></label>
                      <input type="text" class="form-control" name="nama_alternatif" value="<?php echo $row->nilai ?>">
                    </div>
                  <?php } ?>
                    <button type="submit" class="btn btn-primary mr-2">Simpan Perubahan</button>
                    <a href="<?php echo site_url('Alternatif')?>" class="btn btn-outline-primary">Batal</a>
                  </form>
                </div>
              </div>
            </div>
          </div>