          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit Nilai Alternatif</h4>
                  <br>
                  <form class="forms-sample" action="<?php echo site_url('Alternatif/prosesEditNilaiAlternatif')?>" method="post">
                    <input type="hidden" name="id_nilai" value="<?php echo $this->uri->segment(3)?>">
                    <input type="hidden" name="id_alternatif" value="<?php echo $data_nilaialternatif->id_alternatif?>">
                    <div class="form-group">
                      <label for="exampleInputName1">Pilih Kriteria</label>
                      <input type="text" name="id_kriteria" class="form-control" value="<?php echo $data_nilaialternatif->nama_kriteria?>" readonly>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Nilai</label>
                      <input type="text" class="form-control" name="nilai" value="<?php echo $data_nilaialternatif->nilai?>">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Simpan Perubahan</button>
                    <a href="<?php echo site_url('Alternatif/nilaiAlternatif/'.$this->uri->segment(3))?>" class="btn btn-outline-primary">Batal</a>
                  </form>
                </div>
              </div>
            </div>
          </div>