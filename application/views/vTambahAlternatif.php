<script src="<?php echo base_url('')?>assets/js/jquery.js"></script>
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tambah Alternatif</h4>
                  <p class="card-description">
                    <!--Basic form elements-->
                  </p>
                  <form id="form1" class="forms-sample" method="post">
                    <div class="form-group">
                      <label for="exampleInputName1">Nama Alternatif</label>
                      <input type="text" name="nama_alternatif" class="form-control" id="exampleInputName1" placeholder="Nama Alternatif">
                    </div>
                    <button type="submit" id="btn-submit" class="btn btn-primary mr-2">Simpan</button>
                    <a class="btn btn-light" href="<?php echo site_url('Alternatif')?>">Batal</a>
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
               url: "<?php echo base_url()?>Alternatif/saveTambahAlternatif",
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