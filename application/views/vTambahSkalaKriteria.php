          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tambah Skala Kriteria <b>(<?php echo $data_kriteria->nama_kriteria?>)</b></h4>
                  <p class="card-description">
                    <!--Basic form elements-->
                  </p>
                  <form class="forms-sample" method="post" action="<?php echo site_url('Kriteria/prosesTambahSkalaKriteria')?>">
                    <div class="form-group">
                      <label for="exampleInputName1">Skala Kriteria</label>

                      <input type="hidden" name="id_kriteria" class="form-control" id="exampleInputName1" placeholder="Nama Alternatif" value="<?php echo $this->uri->segment(3)?>">

                      <input type="text" name="skala_kriteria" class="form-control" id="exampleInputName1" placeholder="Skala Kriteria">

                    </div>
                    <div class="form-group">
                      <label for="exampleSelectGender">Range Skala</label>
                        <input type="text" name="range_skala" class="form-control" id="exampleInputName1" placeholder="Range Skala">
                      </div>
                    <div class="form-group">
                      <label for="exampleSelectGender">Nilai Skala</label>
                        <input type="text" name="nilai_skala" class="form-control" id="exampleInputName1" placeholder="Nilai Skala">
                      </div>
                      
                    <button type="submit" class="btn btn-primary mr-2">Tambah Skala</button>
                    <a class="btn btn-light" href="<?php echo site_url('Kriteria/skalaKriteria/'.$this->uri->segment(3))?>">Batal</a>
                  </form>
                </div>
              </div>
            </div>
          </div>