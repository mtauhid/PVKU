    
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Perhitungan</h4>
                     <!-- <a class="btn btn-success" target="BLANK" href="<?php echo site_url('Perhitungan/detail_perhitungan')?>"><i class="icon icon-eye"></i> Detail Perhitungan</a> -->
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
                              <td style="text-align: center;"><?php echo $no++ ?></td>
                              <td  style="text-align: center;"><?php echo $row->nama_alternatif ?></td>
                              <td style="text-align: center;"><?php echo number_format($row->vektor_s, 9) ?></td>
                              <td style="text-align: center;"><b><?php echo number_format($row->vektor_v, 9) ?></b></td>
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
