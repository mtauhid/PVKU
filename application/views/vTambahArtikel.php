          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tambah Artikel</h4>
                  <p class="card-description">
                    <!--Basic form elements-->
                  </p>
                  <form class="forms-sample" method="post" action="<?php echo site_url('Artikel/prosesTambahArtikel')?>">
                    <div class="form-group">
                      <label for="exampleInputName1">Judul</label>
                      <input type="text" name="judul" class="form-control" id="exampleInputName1" placeholder="Nama Alternatif">
                    </div>
                    <div class="form-group">
                      <label for="exampleSelectGender">Isi Konten</label>
                        <textarea id="simpleMde" name="konten">
                        </textarea>
                      </div>
                      <div class="form-group">
                        <label>Upload Gambar</label>
                        <input type="file" class="form-control" name="gambar">
                      </div>
                    <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                    <a class="btn btn-light" href="<?php echo site_url('Alternatif')?>">Batal</a>
                  </form>
                </div>
              </div>
            </div>
          </div>