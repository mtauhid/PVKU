<script src="<?php echo base_url('')?>assets/js/jquery.js"></script>
<script>
    function get_skala_kriteria(){
        var id_kriteria = $("#id_kriteria").val();
        var skala_kriteria = $("#skala_kriteria").val();
        $.ajax({
            type: 'POST',
            url: "<?php echo site_url('Pembobotan/getDataSkalaKriteria');?>",
            data:"id_kriteria="+id_kriteria+"&skala_kriteria="+skala_kriteria,
            success: function(msg){
                //$("#div_daftarservice").html(msg);
                $("#skala_kriteria").html(msg);
                //document.getElementById('skala_kriteria').value=msg;
                //get_data_mobil();
            }
        });
    }

    function get_bobot_awal(){
      var skala_kriteria = $("#skala_kriteria").val();
        $.ajax({
            type: 'POST',
            url: "<?php echo site_url('Pembobotan/getDataNilaiSkalaKriteria');?>",
            data:"skala_kriteria="+skala_kriteria,
            success: function(msg){
                //$("#div_daftarservice").html(msg);
                //$("#skala_kriteria").html(msg);
                document.getElementById('bobot_awal').value=msg;
                //get_data_mobil();
            }
        });
    }
</script>
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Setting User</h4>
                  <p class="card-description">
                    <!--Basic form elements-->
                  </p>
                  <form action="<?php echo site_url('Lainnya/edit_user_no_pass_1')?>" method="post">
                    <div class="form-group">
                      <label for="exampleInputName1">Nama Lengkap</label>
                      <input type="hidden" name="id_user" value="<?php echo $data_user->id_user?>">
                      <input type="text" name="nama" class="form-control" id="exampleInputName1" value="<?php echo $data_user->nama_user?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Level User</label>
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
                    <div class="form-group">
                      <label for="exampleInputName1">Username</label>
                      <input type="text" name="username" class="form-control" id="exampleInputName1" value="<?php echo $data_user->username?>">
                    </div>
                    <button type="submit" id="btn-submit" class="btn btn-primary mr-2">Simpan Perubahan</button>
                    <a class="btn btn-light" href="<?php echo site_url('Lainnya')?>">Batal</a>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Ganti Password</h4>
                  <p class="card-description">
                    <!--Basic form elements-->
                  </p>
                  <form action="<?php echo site_url('Lainnya/edit_pass_1')?>" class="forms-sample" method="post">
                    <div class="form-group">
                      <label for="exampleInputName1">Password</label>
                      <input type="hidden" name="id_user" value="<?php echo $data_user->id_user?>">
                      <input type="password" name="password" class="form-control" id="exampleInputName1" placeholder="Password">
                    </div>
                    <button type="submit" id="btn-submit" class="btn btn-primary mr-2">Simpan Perubahan</button>
                    <a class="btn btn-light" href="<?php echo site_url('Lainnya')?>">Batal</a>
                  </form>
                </div>
              </div>
            </div>
          </div>