          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">EditArtikel</h4>
                  <p class="card-description">
                    <!--Basic form elements-->
                  </p>
                  <form class="forms-sample" method="post" action="<?php echo site_url('Artikel/prosesEditArtikel')?>">
                    <div class="form-group">
                      <label for="exampleInputName1">Judul</label>
                      <input type="hidden" name="id_artikel" value="<?php echo $data_artikel->id_artikel?>">
                      <input type="text" name="judul" class="form-control" id="exampleInputName1" placeholder="Nama Alternatif" value="<?php echo $data_artikel->judul?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleSelectGender">Isi Konten</label>
                        <textarea id="simpleMde" name="konten">
                          <?php echo $data_artikel->konten?>
                        </textarea>
                      </div>
                      <input type="hidden" name="tanggal_waktu" value="<?php echo date('y-m-d h:i:s')?>">
                    <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                    <a class="btn btn-light" href="<?php echo site_url('Artikel')?>">Batal</a>
                  </form>
                </div>
              </div>
            </div>
          </div>