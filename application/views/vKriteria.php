          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Kriteria</h4>
                  <div class="row grid-margin">
                    <div class="col-12">
                     <!-- <a class="btn btn-success" href="<?php echo site_url('Kriteria/tambahKriteria')?>"><i class="icon icon-plus"></i> Tambah Kriteria</a> -->
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 table-responsive">
                      <table id="order-listing" class="table">
                        <thead>
                          <tr class="bg-light">
                              <th style="text-align: center;">No</th>
                              <th style="text-align: center;">Nama Kriteria</th>
                              <th style="text-align: center;">Jenis Kriteria</th>
                              <th style="text-align: center;">Satuan Kriteria</th>
                              <th colspan="2" style="text-align: center;width: 1%">Action</th>
                          </tr>
                        </thead>
                        
                        <tbody>
                          <?php
                          $no = 1;
                          foreach($data_kriteria as $row){
                        ?>
                          <tr>
                              <td  style="text-align: center;"><?php echo $no++ ?></td>
                              <td  style="text-align: center;"><?php echo $row->nama_kriteria ?></td>
                              <td style="text-align: center;" title="Edit Skala Kriteria"><?php echo $row->jenis_kriteria ?></td>
                              <td style="text-align: center;" title="Edit Skala Kriteria"><?php echo $row->satuan_kriteria ?></td>
                              <td  style="text-align: center;" width="1">
                                <a class="btn btn-inverse-light btn-rounded" href="<?php echo site_url('Kriteria/skalaKriteria/'.$row->id_kriteria);?>"><i class="icon-menu btn-xs"></i> Skala Kriteria
                                </a>
                              </td>
                              <td>
                                <a class="btn btn-light btn-rounded" href="<?php echo site_url('Kriteria/editKriteria/'.$row->id_kriteria);?>"><i class="icon-pencil btn-xs"></i> Edit Kriteria
                                </a>
                              </td>
                              <!-- <td>
                                <a class="btn btn-light btn-rounded" href="<?php echo site_url('Kriteria/deleteKriteria/'.$row->id_kriteria);?>">
                                  <i class="icon-trash btn-xs"></i>
                                </a>
                              </td> -->
                                
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