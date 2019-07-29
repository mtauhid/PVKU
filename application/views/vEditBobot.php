<script src="<?php echo base_url('')?>assets/js/jquery.js"></script>
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
                  <form id="form1" class="forms-sample" method="post">
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
                          echo "<option value='$row2->id_skalakriteria'>$row2->skala_kriteria range ($row2->range_skala) bobot ($row2->nilai_skalakriteria)</option>";
                        }
                        ?>
                      </select>
                    </div>
                    <input type="hidden" name="bobot_awal" value="" id="bobot_awal">
                    <button type="submit" id="btn-submit" class="btn btn-success mr-2">Simpan Perubahan</button>
                    <a class="btn btn-light" href="<?php echo site_url('Pembobotan')?>">Cancel</a>
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
               url: "<?php echo base_url()?>Pembobotan/saveEditBobot",
               data: formData,
               success: function (response) {
                   alert("Edit Bobot Berhasil");
                   window.location="<?php echo base_url()?>Pembobotan";
               },
               error: function (){
                    $('#btn-submit').button('normal')[0].innerHTML='Save';
                    alert("Data gagal disimpan");
               }
           });
       });

    });
</script>
