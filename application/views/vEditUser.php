<script src="<?php echo base_url('')?>assets/js/jquery.js"></script>
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit User</h4>
                  <p class="card-description">
                    <!--Basic form elements-->
                  </p>
                  <form id="form1" class="forms-sample" method="post">
                    <div class="form-group">
                      <label for="exampleInputName1">Nama Lengkap</label>
                      <input type="hidden" name="id_user" value="<?php echo $data_user->id_user?>">
                      <input type="text" name="nama" class="form-control" id="exampleInputName1" value="<?php echo $data_user->nama_user?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Username</label>
                      <input type="text" name="username" class="form-control" id="exampleInputName1" value="<?php echo $data_user->username?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Password</label>
                      <input type="password" name="password" class="form-control" id="exampleInputName1" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Level</label>
                      <select name="level" class="form-control">
                        <option disabled>Pilih Level User</option>
                        <?php
                        if($data_user->level == "Super Admin"){
                          echo "<option value='Super Admin' selected>Super Admin</option>";
                          echo "<option value='Admin'>Admin</option>";
                        }else if($data_user->level == "Admin"){
                          echo "<option value='Super Admin'>Super Admin</option>";
                          echo "<option value='Admin' selected>Admin</option>";
                        }
                        ?>
                      </select>
                    </div>
                    <button type="submit" id="btn-submit" class="btn btn-primary mr-2">Simpan Perubahan</button>
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
               url: "<?php echo base_url()?>Lainnya/prosesEditUser",
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