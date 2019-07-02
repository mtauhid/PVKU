          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tambah Nilai Alternatif  (<b><?php echo $data_alternatif->nama_alternatif?></b>)</h4>
                  <br>
                  <form class="forms-sample" action="<?php echo site_url('Alternatif/prosesTambahNilaiAlternatif')?>" method="post">
                    <input type="hidden" name="id_alternatif" value="<?php echo $this->uri->segment(3)?>">
                    <div class="form-group">
                      <label for="exampleInputName1">Pilih Kriteria</label>
                      <select name="id_kriteria" class="form-control">
                        <option selected disabled>Pilih Kriteria</option>
                        <?php
                        foreach($data_kriteria as $row1){
                          echo "<option value='$row1->id_kriteria'>$row1->nama_kriteria</option>";
                        }
                        ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Nilai</label>
                      <input type="text" class="form-control" name="nilai" placeholder="Isi Nilai">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                    <a href="<?php echo site_url('Alternatif/nilaiAlternatif/'.$this->uri->segment(3))?>" class="btn btn-outline-primary">Batal</a>
                  </form>
                </div>
              </div>
            </div>
          </div>