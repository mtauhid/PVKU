          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Pembobotan</h4>
                  <div class="row grid-margin">
                    <div class="col-12">
                      <a class="btn btn-success" href="<?php echo site_url('Pembobotan/tambahPembobotan')?>"><i class="icon icon-plus"></i> Tambah Pembobotan</a>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 table-responsive">
                      <table id="order-listing"  class="table">
                        <thead>
                          <tr class="bg-light">
                              <th style="text-align: center;">No</th>
                              <th style="text-align: center;">Kriteria</th>
                              <th style="text-align: center;">Bobot Awal</th>
                              <th style="text-align: center;">Bobot Akhir</th>
                              <th style="text-align: center;">Edit Bobot</th>
                          </tr>
                        </thead>
                        
                        <tbody>
                          <?php
                          $no = 1;
                          if(isset($data_bobot)){
                          foreach($data_bobot as $row){
                            
                        ?>
                          <tr>
                              <td  style="text-align: center;"><?php echo $no++ ?></td>
                              <td  style="text-align: center;"><?php echo $row->nama_kriteria ?></td>
                              <td style="text-align: center;"><?php echo $row->skala_kriteria." (<b>".$row->bobot_awal."</b>)" ?></td>
                              <td style="text-align: center;"><b><?php echo $row->bobot_akhir ?></b></td>
                              <td style="text-align: center;">
                                <a href="<?php echo base_url("Pembobotan/editBobot/".$row->id_kriteria)?>" class="btn btn-light btn-rounded "><i class="icon-pencil"></i> Edit</a>
                              </td>
                                
                        <?php
                              }
                          }
                        ?>
                          </tr>
                      </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
