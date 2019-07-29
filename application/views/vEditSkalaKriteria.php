          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit Skala Alternatif <b>(<?php echo $data_skala_kriteria->nama_kriteria?>)</b></h4>
                  <p class="card-description">
                    <!--Basic form elements-->
                  </p>
                  <form class="forms-sample" action="<?php echo site_url('Kriteria/prosesEditSkalaKriteria')?>" method="post">
                    <div class="form-group">
                      <label for="exampleInputName1">Skala Kriteria</label>
                      <input type="hidden" name="id_skalakriteria" class="form-control" id="exampleInputName1" placeholder="Nama Alternatif" value="<?php echo $this->uri->segment(3)?>">
                      <input type="hidden" name="id_kriteria" class="form-control" id="exampleInputName1" placeholder="Nama Alternatif" value="<?php echo $data_skala_kriteria->id_kriteria ?>">
                      <input type="text" name="skala_kriteria" class="form-control" id="exampleInputName1" placeholder="Skala Kriteria" value="<?php echo $data_skala_kriteria->skala_kriteria?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleSelectGender">Range Skala</label>
                        <input type="text" name="range_skala" class="form-control" id="exampleInputName1" placeholder="Nilai Skala" value="<?php echo $data_skala_kriteria->range_skala?>">
                      </div>
                    <div class="form-group">
                      <label for="exampleSelectGender">Nilai Skala</label>
                        <input type="text" name="nilai_skala" class="form-control" id="exampleInputName1" placeholder="Nilai Skala" value="<?php echo $data_skala_kriteria->nilai_skalakriteria?>">
                      </div>
                    <button type="submit" class="btn btn-primary mr-2">Simpan Perubahan</button>
                    <a class="btn btn-light" href="<?php echo site_url('Kriteria/skalaKriteria/'.$data_skala_kriteria->id_kriteria)?>">Cancel</a>
                  </form>
                </div>
              </div>
            </div>
          </div>