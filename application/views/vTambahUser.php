<script src="<?php echo base_url('')?>assets/js/jquery.js"></script>
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tambah User</h4>
                  <p class="card-description">
                    <!--Basic form elements-->
                  </p>
                  <form id="form1" class="forms-sample" method="post">
                    <div class="form-group">
                      <label for="exampleInputName1">Nama Lengkap</label>
                      <input type="text" name="nama" class="form-control" id="exampleInputName1" placeholder="Nama Lengkap">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Username</label>
                      <input type="text" name="username" class="form-control" id="exampleInputName1" placeholder="Username">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Password</label>
                      <input type="password" name="password" class="form-control" id="exampleInputName1" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Level</label>
                      <select name="level" class="form-control">
                        <option selected disabled>Pilih Level User</option>
                          <option value='Super Admin'>Super Admin</option>
                          <option value='Admin'>Admin</option>
                      </select>
                    </div>
                    <button type="submit" id="btn-submit" class="btn btn-primary mr-2">Simpan</button>
                    <a class="btn btn-light" href="<?php echo site_url('Lainnya')?>">Batal</a>
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
               url: "<?php echo base_url()?>Lainnya/prosesTambahUser",
               data: formData,
               success: function (response) {
                   alert("Data Berhasil Disimpan");
                   window.location="<?php echo base_url()?>Lainnya";
               },
               error: function (){
                    $('#btn-submit').button('normal')[0].innerHTML='Save';
                    alert("Data gagal disimpan");
               }
           });
       });

    });
</script>