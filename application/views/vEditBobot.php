<script>
    function get_data_skala_kriteria(){
        var nama_kriteria = $("#nama_kriteria").val();
        $.ajax({
            type: 'POST',
            url: "<?php echo site_url('Pembobotan/get_data_skala_kriteria');?>",
            data:"nama_kriteria="+nama_kriteria,
            success: function(msg){
                //$("#div_daftarservice").html(msg);
                $("#skala_kriteria").html(msg);
            }
        });
    }

    function get_jenis_kriteria(){
        var nama_kriteria = $("#nama_kriteria").val();
        $.ajax({
            type: 'POST',
            url: "<?php echo site_url('Pembobotan/get_jenis_kriteria');?>",
            data:"nama_kriteria="+nama_kriteria,
            success: function(msg){
                //$("#div_daftarservice").html(msg);
                //$("#jenis_kriteria").html(msg);
                document.getElementById('jenis_kriteria').value=msg;
                //get_data_mobil();
            }
        });
    }

    function get_skala_kriteria(){
        var nama_kriteria = $("#nama_kriteria").val();
        $.ajax({
            type: 'POST',
            url: "<?php echo site_url('Pembobotan/get_skala_kriteria');?>",
            data:"nama_kriteria="+nama_kriteria,
            success: function(msg){
                //$("#div_daftarservice").html(msg);
                //$("#jenis_kriteria").html(msg);
                document.getElementById('skalakriteria').value=msg;
                //get_data_mobil();
            }
        });
      }
</script>

          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit Kriteria</h4>
                  <p class="card-description">
                    <!--Basic form elements-->
                  </p>
                  <form class="forms-sample" method="post" action="<?php echo site_url('Pembobotan/saveEditBobot')?>">
                    <div class="form-group">
                      <label for="exampleInputName1">Nama Kriteria</label>
                      <input type="hidden" name="id_kriteria" class="form-control" value="<?php echo $this->uri->segment(3)?>" get_jenis_kriteria(); get_skala_kriteria(); get_data_skala_kriteria();>
                      <!--<select name="nama_kriteria" id="nama_kriteria" class="form-control" onchange="get_jenis_kriteria(); get_skala_kriteria(); get_data_skala_kriteria();">
                        <option value="0">-Pilih Kriteria</option>
                        <?php
                         // foreach($data_kriteria as $row){
                          //  echo "<option value='".$row->id_kriteria."'>".$row->nama_kriteria."</option>";
                          //}
                        ?>
                      
                      </select>
                      -->
                    </div>
                    <div class="form-group">
                      <label for="exampleSelectGender">Jenis Kriteria</label>
                          <input type="text" name="jenis_kriteria" id="jenis_kriteria" class="form-control"  value="" readonly>
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleSelectGender">Skala saat ini</label>
                          <input type="text" name="skalakriteria" id="skalakriteria" class="form-control"  value="" readonly>
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Skala</label>
                      <select name="skala_kriteria" class="form-control" required="" >
                                <option disabled selected>-Skala Kriteria</option>
                                <?php
                                  foreach($data_skala_kriteria as $row){
                                    echo "<option value=''>".$row->skala_kriteria."</option>";
                                  }
                                ?>
                                </option>
                      </select>
                      <p class="text-warning text-muted">*skala kriteria (nilai kriteria)</p>
                    </div>

                    <button type="submit" class="btn btn-success mr-2">Simpan Perubahan</button>
                    <a class="btn btn-light" href="<?php echo site_url('Pembobotan')?>">Cancel</a>
                  </form>
                </div>
              </div>
            </div>
          </div>
