          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Skala Kriteria <b>(<?php echo $kriteria->nama_kriteria?>)</b></h4>
                  <br>
                  <a href="<?php echo site_url('Kriteria/tambahSkalaKriteria/'.$this->uri->segment(3)) ?>" class="btn btn-success">Tambah Skala</a>
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
                              <th style="text-align: center;">Nilai SKala</th>
                              <th style="text-align: center;">Action</th>
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
                              <td  style="text-align: center;" class="text-right" width="1">
                                <a class="btn btn-inverse-warning  btn-xs" href="<?php echo site_url('Kriteria/editSkalaKiteria/'.$skala->id_skalakriteria);?>">
                                  <i class="icon-pencil"></i>Edit
                                </a>
                                <a class="btn btn-inverse-danger  btn-xs" href="<?php echo site_url('Kriteria/deleteSkalaKriteria/'.$skala->id_skalakriteria);?>">
                                  <i class="icon-close"></i>Remove
                                </a>
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