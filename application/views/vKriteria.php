          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Kriteria</h4>
                  <div class="row grid-margin">
                    <div class="col-12">
                     <a class="btn btn-inverse-success" href="<?php echo site_url('Kriteria/tambahKriteria')?>">Tambah Kriteria</a>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 table-responsive">
                      <table id="order-listing" class="table table-bordered">
                        <thead>
                          <tr class="bg-light">
                              <th style="text-align: center;">No</th>
                              <th style="text-align: center;">Nama Kriteria</th>
                              <th style="text-align: center;">Jenis Kriteria</th>
                              <th style="text-align: center;">Action</th>
                          </tr>
                        </thead>
                        <?php
                          $no = 1;
                          if(isset($data_kriteria)){
                          foreach($data_kriteria as $row){
                        ?>
                        <tbody>
                          <tr>
                              <td  style="text-align: center;"><?php echo $no++ ?></td>
                              <td  style="text-align: center;"><?php echo $row->nama_kriteria ?></td>
                              <td style="text-align: center;" title="Edit Skala Kriteria"><a class="btn btn-warning btn-icon btn-xs" style="width: 70px" href="<?php echo site_url('Kriteria/skalaKriteria/'.$row->id_kriteria);?>">
                                  <?php echo $row->jenis_kriteria ?>
                                </a></td>
                              <td  style="text-align: center;" class="text-right" width="1">
                                <a class="btn btn-light  btn-sm" href="<?php echo site_url('Kriteria/editKriteria/'.$row->id_kriteria);?>">
                                  <i class="icon-pencil text-primary btn-xs"></i>
                                </a>
                                <a class="btn btn-light  btn-sm" href="<?php echo site_url('Kriteria/deleteKriteria/'.$row->id_kriteria);?>">
                                  <i class="icon-trash text-danger btn-xs"></i>
                                </a>
                              </td>
                          </tr>
                        </tbody>
                      <?php 
                            } 
                        } 
                      ?>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>