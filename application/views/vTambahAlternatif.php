          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tambah Alternatif</h4>
                  <p class="card-description">
                    <!--Basic form elements-->
                  </p>
                  <form class="forms-sample" method="post" action="<?php echo site_url('Alternatif/saveTambahAlternatif')?>">
                    <div class="form-group">
                      <label for="exampleInputName1">Nama Alternatif</label>
                      <input type="text" name="nama_alternatif" class="form-control" id="exampleInputName1" placeholder="Nama Alternatif">
                    </div>
                    <div class="form-group">
                      <label for="exampleSelectGender">Status Alternatif</label>
                        <select class="form-control" id="exampleSelectGender" name="status_alternatif">
                          <option value="Aktif" selected>Aktif</option>
                          <option value="Non Aktif">Non Aktif</option>
                        </select>
                      </div>
                    <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                    <a class="btn btn-light" href="<?php echo site_url('Alternatif')?>">Batal</a>
                  </form>
                </div>
              </div>
            </div>
          </div>