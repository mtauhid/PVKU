<script src="<?php echo base_url('')?>assets/js/jquery.js"></script>
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tambah Nilai Alternatif <b><?php echo $data_alternatif->nama_alternatif?></b></h4>
                  <p class="card-description">
                    <!--Basic form elements-->
                  </p>
                  <form id="form1" class="forms-sample" method="post">
                    <div class="alert alert-warning" role="alert">Penginputan nilai dengan tanda koma <b>(,)</b> diganti menjadi tanda titik <b>(.)</b>. Contoh : nilai <b>2,5</b> menjadi <b>2.5</b></div>

                    <div class="form-group">
                      <label for="exampleInputName1"><b>Berat Biji</b><!--  (<i>gram/100 biji</i>) --></label>
                      <input type="hidden" name="id_alternatif" class="form-control" id="exampleInputName1" value="<?php echo $this->uri->segment(3)?>" readonly>
                      <input type="hidden" name="id_kriteria_1" class="form-control" id="exampleInputName1" value="1" readonly>
                      <input type="text" name="nilai_1" class="form-control" id="exampleInputName1" placeholder="Satuan : Gram / 100 biji" required>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputName1"><b>Potensi Hasil</b><!--  (<i>Ton/Hektar</i>) --></label>
                      <input type="hidden" name="id_alternatif" class="form-control" id="exampleInputName1" value="<?php echo $this->uri->segment(3)?>" readonly>
                      <input type="hidden" name="id_kriteria_2" class="form-control" id="exampleInputName1" value="2" readonly>
                      <input type="text" name="nilai_2" class="form-control" id="exampleInputName1" placeholder="Satuan : Ton/Hektar" required>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputName1"><b>Umur Panen</b><!--  (<i>Hari</i>) --></label>
                      <input type="hidden" name="id_alternatif" class="form-control" id="exampleInputName1" value="<?php echo $this->uri->segment(3)?>" readonly>
                      <input type="hidden" name="id_kriteria_3" class="form-control" id="exampleInputName1" value="3" readonly>
                      <input type="text" name="nilai_3" class="form-control" id="exampleInputName1" placeholder="Satuan : Hari" required>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputName1"><b>Tinggi Tanaman</b><!--  (<i>Cm</i>) --></label>
                      <input type="hidden" name="id_alternatif_5" class="form-control" id="exampleInputName1" value="<?php echo $this->uri->segment(3)?>" readonly>
                      <input type="hidden" name="id_kriteria_5" class="form-control" id="exampleInputName1" value="5" readonly>
                      <input type="text" name="nilai_5" class="form-control" id="exampleInputName1" placeholder="Satuan : Cm" required>
                    </div>

                    <button type="submit" id="btn-submit" class="btn btn-primary mr-2">Tambah Nilai Alternatif</button>
                    <a class="btn btn-light" href="<?php echo site_url('Alternatif/nilaiAlternatif/'.$this->uri->segment(3))?>">Batal</a>
                  </form>
                </div>
              </div>
            </div>
          </div>
<script>
jQuery(document).ready(function () {
       $('#form1').submit((e) => {
           const formData = $('#form1').serialize();
           $('#btn-submit').button('loading');
           e.preventDefault();
           $.ajax({
               type: "POST",
               url: "<?php echo base_url()?>Alternatif/saveTambahNilaiAlternatif2",
               data: formData,
               success: function (response) {
                   alert("Data Berhasil Disimpan");
                   window.location="<?php echo base_url()?>Alternatif";
               },
               error: function (){
                    $('#btn-submit').button('normal')[0].innerHTML='Save';
                    alert("Data gagal disimpan");
               }
           });
       });

    });
</script>