    
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Pembobotan</h4>
                  <br>
                  <div class="row grid-margin">
                    <div class="col-12">
                      <form method="post" action="<?php echo site_url('Perhitungan/prosesPerhitungan')?>">
                        <?php
                        foreach ($data_perhitungan as $row1) {
                          echo "<input type='text' name='id_alternatif' value='$row1->id_alternatif'>";
                        }
                        ?>
                        
                        <button type="submit" class="btn btn-success">Proses Perhitungan</button>
                      </form>
                      
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 table-responsive">
                      <table id="order-listing"  class="table">
                        <thead>
                          <tr class="bg-light">
                              <th style="text-align: center;">No</th>
                              <th style="text-align: center;">Alternatif</th>
                              <th style="text-align: center;">Vektor S</th>
                              <th style="text-align: center;">Vektor V</th>
                          </tr>
                        </thead>
                        
                        <tbody>
                          <?php
                          $no = 1;
                          foreach($data_perhitungan as $row){
                            
                        ?>
                          <tr>
                              <td  style="text-align: center;"><?php echo $no++ ?></td>
                              <td  style="text-align: center;"><?php echo $row->nama_alternatif ?></td>
                              <td style="text-align: center;"><?php echo $row->vektor_s ?></td>
                              <td style="text-align: center;"><b><?php echo $row->vektor_v ?></b></td>
                          </tr>
                          <?php
                            }
                      ?>
                        </tbody>
                      
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
