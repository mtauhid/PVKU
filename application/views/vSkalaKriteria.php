          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Skala Kriteria <b>(<?php echo $kriteria->nama_kriteria?>)</b></h4>
                  <br>
                  <a href="<?php echo site_url('Kriteria/tambahSkalaKriteria/'.$this->uri->segment(3)) ?>" class="btn btn-success"><i class="icon icon-plus"></i> Tambah Skala</a>
                  <a href="<?php echo site_url('Kriteria') ?>" class="btn btn-primary" >Batal</a>
                  <div class="row grid-margin">
                    <div class="col-12">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 table-responsive">
                      <table id="order-listing" class="table">
                        <thead>
                          <tr class="bg-light">
                              <th style="text-align: center;">No</th>
                              <th style="text-align: center;">Skala Kriteria</th>
                              <th style="text-align: center;">Nilai Skala</th>
                              <th style="text-align: center;">Range Skala</th>
                              <th style="text-align: center;" colspan="2">Action</th>
                          </tr>
                        </thead>
                        
                        <tbody>
                          <?php
                          $no = 1;
                          foreach($data_skala_kriteria as $skala){
                        ?>
                          <tr>
                              <td  style="text-align: center;"><?php echo $no++ ?></td>
                              <td  style="text-align: center;"><?php echo $skala->skala_kriteria ?></td>
                              <td  style="text-align: center;"><?php echo $skala->nilai_skalakriteria ?></td>
                              <td  style="text-align: center;"><?php echo $skala->range_skala ?></td>
                              <td  style="text-align: center;" class="text-right" width="1">
                                <a class="btn btn-light btn-rounded" href="<?php echo site_url('Kriteria/editSkalaKiteria/'.$skala->id_skalakriteria);?>">
                                  <i class="icon-pencil"></i>Edit
                                </a>
                              </td>
                              <td style="width: 1px">
                                <form action="<?php echo site_url('Kriteria/deleteSkalaKriteria');?>" method="post">
                                  <input type="hidden" name="id_kriteria" value="<?php echo $this->uri->segment(3)?>">
                                  <input type="hidden" name="id_skalakriteria" value="<?php echo $skala->id_skalakriteria ?>">
                                  <button type="submit" class="btn btn-light btn-rounded" >
                                  <i class="icon-close"></i>Remove
                                </buttons>
                                </form>
                                
                              </td>
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