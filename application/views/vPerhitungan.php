    
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Perhitungan</h4>
                  <br>
                  <div class="row grid-margin">
                  </div>
                  <div class="row">
                    <div class="col-12 table-responsive">
                      <table id="order-listing"  class="table">
                        <thead>
                          <tr class="bg-light">
                              <th style="text-align: center;">Rangking</th>
                              <th style="text-align: center;">Alternatif</th>
                              <th style="text-align: center;">Vektor S</th>
                              <th style="text-align: center;">Vektor V</th>
                          </tr>
                        </thead>
                        
                        <tbody>
                          <?php
                          $no = 1;
                          foreach($data_hasil_perhitungan as $row){
                            
                        ?>
                          <tr>
                              <td  style="text-align: center;"><?php echo $no++ ?></td>
                              <td  style="text-align: center;"><?php echo $row->nama_alternatif ?></td>
                              <td style="text-align: center;"><?php echo number_format($row->vektor_s,5) ?></td>
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
