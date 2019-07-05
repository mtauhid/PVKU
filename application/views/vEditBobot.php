<script>
    function get_nilai_skala(){
        var skala_kriteria = $("#skala_kriteria").val();
        $.ajax({
            type: 'POST',
            url: "<?php echo site_url('Pembobotan/getDataNiliForSkala');?>",
            data:"skala_kriteria="+skala_kriteria,
            success: function(msg){
                //$("#div_daftarservice").html(msg);
                //$("#nohp").html(msg);
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
                  <h4 class="card-title">Edit Pembobotan</h4>
                  <p class="card-description">
                    <!--Basic form elements-->
                  </p>
                  <form class="forms-sample" method="post" action="<?php echo site_url('Pembobotan/saveEditBobot')?>">
                    <div class="form-group">
                      <label for="exampleSelectGender">Bobot Saat Ini</label>
                      <input type="hidden" name="id_kriteria" class="form-control" value="<?php echo $data_skala_kriteria->id_kriteria?>">
                      <input type="text" name="nama_kriteria" class="form-control" value="<?php echo $data_skala_kriteria->nama_kriteria?> - <?php echo $data_skala_kriteria->skala_kriteria." (".$data_skala_kriteria->nilai_skalakriteria./*.$data_skala_kriteria->satuan_kriteria.*/")"?>" readonly>
                    </div>
                    <div class="form-group">
                      <label for="exampleSelectGender">Skala Kriteria</label>
                      <select name="skala_kriteria" class="form-control" id="skala_kriteria" onchange="get_nilai_skala();">
                        <option selected disabled>-Pilih Skala Kriteria</option>
                        <?php
                        foreach($data_skala_kriteria_by_id as $row2){

                          echo "<option value='$row2->id_skalakriteria'>$row2->skala_kriteria ($row2->nilai_skalakriteria)</option>";
                        }
                        ?>
                      </select>
                    </div>
                    <input type="hidden" name="bobot_awal" value="" id="bobot_awal">
                    <button type="submit" class="btn btn-success mr-2">Simpan Perubahan</button>
                    <a class="btn btn-light" href="<?php echo site_url('Pembobotan')?>">Cancel</a>
                  </form>
                </div>
              </div>
            </div>
          </div>
