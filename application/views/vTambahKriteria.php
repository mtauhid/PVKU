          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tambah Kriteria</h4>
                  <p class="card-description">
                    <!--Basic form elements-->
                  </p>
                  <form class="forms-sample" method="post" action="<?php echo site_url('Kriteria/saveTambahKriteria')?>">
                    <div class="form-group">
                      <label for="exampleInputName1">Nama Kriteria</label>
                      <input type="text" name="nama_kriteria" class="form-control" id="exampleInputName1" placeholder="Nama Alternatif">
                    </div>
                    <div class="form-group">
                      <label for="exampleSelectGender">Jenis Kriteria</label>
                        <select class="form-control" id="exampleSelectGender" name="jenis_kriteria">
                          <option value="Benefit" selected>Benefit</option>
                          <option value="Cost">Cost</option>
                        </select>
                      </div>
                    <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                    <a class="btn btn-light" href="<?php echo site_url('Kriteria')?>">Batal</a>
                  </form>
                </div>
              </div>
            </div>
          </div>