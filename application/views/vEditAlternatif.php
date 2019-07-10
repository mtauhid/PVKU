        <script src="<?php echo base_url('')?>assets/js/jquery.js"></script>
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit Alternatif</h4>
                  <p class="card-description">
                    <!--Basic form elements-->
                  </p>
                  <!--<form class="forms-sample" action="<?php //echo site_url('Alternatif/prosesEditAlternatif')?>" method="post">-->
                  <form id="form1" method="post">
                    <div class="form-group">
                      <label for="exampleInputName1">Nama Alternatif</label>
                      <input type="hidden" name="id_alternatif" value="<?php echo $this->uri->segment(3)?>">
                      <input type="text" class="form-control" name="nama_alternatif" id="exampleInputName1" value="<?php echo $data_alternatif->nama_alternatif ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleSelectGender">Status</label>
                        <select class="form-control" name="status" id="exampleSelectGender">
                          <option disabled>Pilih Status</option>
                          <?php
                            if($data_alternatif->status == "Aktif"){
                          ?>
                          <option value="Aktif" selected>Aktif</option>
                          <option value="Non Aktif">Non Aktif</option>
                          <?php
                            }else{
                          ?>
                          <option value="Aktif">Aktif</option>
                          <option value="Non Aktif" selected>Non Aktif</option>
                        <?php } ?>
                        </select>
                      </div>
                    <button type="submit" id="btn-submit" class="btn btn-primary mr-2">Simpan Perubahan</button>
                    <a href="<?php echo site_url('Alternatif')?>" class="btn btn-outline-primary">Batal</a>
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
               url: "<?php echo base_url()?>Alternatif/prosesEditAlternatif",
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