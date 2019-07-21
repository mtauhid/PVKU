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
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tambah Pembobotan</h4>
                  <p class="card-description">
                    <!--Basic form elements-->
                  </p>
                  <form action="<?php echo site_url('Pembobotan/prosesTambahPembobotan')?>" class="forms-sample" method="post">
                    <div class="form-group">
                      <label for="exampleSelectGender">Pili Kriteria</label>
                      <select class="form-control" id="id_kriteria" name="id_kriteria"  onchange="get_skala_kriteria();">
                        <option selected disabled>-Pilih Kriteria</option>
                        <?php
                        foreach($data_kriteria as $row1){
                          echo "<option value='$row1->id_kriteria'>$row1->nama_kriteria</option>";
                        }
                        ?>
                        
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleSelectGender">Skala Kriteria</label>
                      <select name="skala_kriteria" id="skala_kriteria" class="form-control"  onchange="get_bobot_awal();">
                        <option selected disabled>-Pilih Skala Kriteria</option>
                        
                      </select>
                    </div>
                    <input type="hidden" name="bobot_awal" value="" id="bobot_awal">
                    <button type="submit" id="btn-submit" class="btn btn-success mr-2">Tambah</button>
                    <a class="btn btn-light" href="<?php echo site_url('Pembobotan')?>">Cancel</a>
                  </form>
                </div>
              </div>
            </div>
          </div>