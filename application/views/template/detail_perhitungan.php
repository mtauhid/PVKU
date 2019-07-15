          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Alternatif</h4>
                  <div class="row grid-margin">
                    <div class="col-12">
                     <a class="btn btn-success" href="<?php echo site_url('Alternatif/tambahAlternatif')?>"><i class="icon icon-plus"></i> Tambah Alternatif</a>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 table-responsive">
                      <table id="order-listing" class="table">
                        <thead>
                          <tr class="bg-light">
                              <th style="text-align: center;">No</th>
                              <th style="text-align: center;">Nama Alternatif</th>
                              <?php
                                foreach($data_kriteria as $rowkriteria){
                                  echo "<th style='text-align: center'>$rowkriteria->nama_kriteria</th>";
                                }
                              ?>
                              <th style="text-align: center;">Status</th>
                              <th style="text-align: center;">Action</th>
                          </tr>
                        </thead>
                        
                        <tbody>
                          <?php
                          $no = 1;
                          foreach($data_alternatif as $row){
                        ?>
                          <tr>
                              <td  style="text-align: center;"><?php echo $no++ ?></td>
                              <td  style="text-align: center;"><?php echo $row->nama_alternatif ?></td>
                              <td>
                                <?php
                                
                                foreach($nilai_alternatif as $rownilai){
                                  echo "<th style='text-align: center'>$rownilai->nilai</th>";
                                }
                                ?>

                              </td>
                              <td style="text-align: center;" >
                                <?php
                                if($row->status == "Aktif"){
                                  echo "<i class='badge badge-success' style='width:70px;'>Aktif</i>";
                                }else if($row->status == "Non Aktif"){
                                  echo "<i class='badge badge-danger' style='width:70px;'>Non Aktif</i>";
                                }
                                ?>
                                
                              </td>
                              <td  style="text-align: center;" class="text-right" width="1">
                               
                                <a class="btn btn-light btn-rounded btn-sm" href="<?php echo site_url('Alternatif/nilaiAlternatif/'.$row->id_alternatif);?>">
                                  <i class="icon-plus"></i> Nilai
                                </a>
                                <a class="btn btn-light  btn-sm btn-rounded btn-sx" href="<?php echo site_url('Alternatif/editAlternatif/'.$row->id_alternatif);?>">
                                  <i class="icon-pencil"></i> Edit
                                </a>
                                <a class="btn btn-light  btn-sm btn-rounded btn-sx" href="<?php echo site_url('Alternatif/deleteAlternatif/'.$row->id_alternatif);?>">
                                  <i class="icon-close"></i> Hapus
                                </button>
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