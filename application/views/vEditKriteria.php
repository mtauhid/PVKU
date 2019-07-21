          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit Kriteria</h4>
                  <p class="card-description">
                    <!--Basic form elements-->
                  </p>
                  <form class="forms-sample" action="<?php echo site_url('Kriteria/prosesEditKriteria')?>" method="post">
                    <div class="form-group">
                      <label for="exampleInputName1">Nama Kriteria</label>
                      <input type="hidden" name="id_kriteria" value="<?php echo $this->uri->segment(3)?>">
                      <input type="text" class="form-control" name="nama_kriteria" id="exampleInputName1" value="<?php echo $data_kriteria->nama_kriteria ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleSelectGender">Jenis Kriteria</label>
                        <select class="form-control" name="jenis_kriteria" id="exampleSelectGender">
                          <option disabled>Pilih Jenis Kriteria</option>
                          <?php
                            if($data_kriteria->jenis_kriteria == "Benefit"){
                          ?>
                          <option value="Benefit" selected>Benefit</option>
                          <option value="Cost">Cost</option>
                          <?php
                            }else{
                          ?>
                          <option value="Benefit" >Benefit</option>
                          <option value="Cost" selected>Cost</option>
                        <?php } ?>
                        </select>
                      </div>
                      <div class="form-group">
                      <label for="exampleInputName1">Satuan Kriteria</label>
                      <input type="text" class="form-control" name="satuan_kriteria" id="exampleInputName1" value="<?php echo $data_kriteria->satuan_kriteria ?>">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Simpan Perubahan</button>
                    <a href="<?php echo site_url('Kriteria')?>" class="btn btn-outline-primary">Batal</a>
                  </form>
                </div>
              </div>
            </div>
          </div>