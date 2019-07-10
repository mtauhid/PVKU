          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Print Data</h4>
                  <div class="row grid-margin">
                    <div class="col-12">
                     <div class="btn-group">
                      <button type="button" class="btn btn-success">Print Data Varietas</button>
                      <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" id="dropdownMenuSplitButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Toggle Dropdown</span>
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuSplitButton3">
                        <h6 class="dropdown-header"><b>Status</b></h6>
                        <a class="dropdown-item" href="<?php echo base_url('Lainnya/print_data_varietas_aktif')?>">Status Aktif</a>
                        <a class="dropdown-item" href="<?php echo base_url('Lainnya/print_data_varietas_nonaktif')?>">Status Non Aktif</a>
                        <a class="dropdown-item" href="<?php echo base_url('Lainnya/print_data_varietas_semua')?>">Semua</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo base_url('Lainnya/print_data_varietas_dan_nilai')?>">Nilai per kriteria</a>
                      </div>
                    </div>
                    </div>
                  </div>
                  <br>
                  <h4 class="card-title">Settings User</h4>
                  <div class="row grid-margin">
                    <div class="col-12">
                      <?php
                              if($this->session->userdata('level_user') == "Super Admin"){
                              ?>
                              <a class="btn btn-success" href="<?php echo site_url('Lainnya/tambahUser')?>"><i class="icon icon-plus"></i> Tambah User</a>
                              <?php
                              }else if($this->session->userdata('level_user') == "Admin"){

                              }
                              ?>
                     
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 table-responsive">
                      <table id="order-listing" class="table">
                        <thead>
                          <tr class="bg-light">
                              <th style="text-align: center;">No</th>
                              <th style="text-align: center;">Nama User</th>
                              <th style="text-align: center;">Username</th>
                              <th style="text-align: center;">Level User</th>
                              <?php
                              if($this->session->userdata('level_user') == "Super Admin"){
                              ?>
                              <th style="text-align: center;">Action</th>
                              <?php
                              }else if($this->session->userdata('level_user') == "Admin"){

                              }
                              ?>
                          </tr>
                        </thead>
                        
                        <tbody>
                          <?php
                          $no = 1;
                          foreach($data_user as $row){
                        ?>
                          <tr>
                              <td  style="text-align: center;"><?php echo $no++ ?></td>
                              <td  style="text-align: center;"><?php echo $row->nama_user ?></td>
                              <td style="text-align: center;" ><?php echo $row->username ?>
                              <td style="text-align: center;" ><?php echo $row->level_user ?>
                              </td>
                              <?php
                              if($this->session->userdata('level_user') == "Super Admin"){
                              ?>
                              <td  style="text-align: center;" class="text-right" width="1">
                                <a class="btn btn-light  btn-sm btn-rounded btn-sx" href="<?php echo site_url('Lainnya/editUser/'.$row->id_user);?>">
                                  <i class="icon-pencil"></i> Edit
                                </a>
                                <a class="btn btn-light  btn-sm btn-rounded btn-sx" href="<?php echo site_url('Lainnya/hapusUser/'.$row->id_user);?>">
                                  <i class="icon-close"></i> Hapus
                                </button>
                              </td>
                              <?php
                              }else if($this->session->userdata('level_user') == "Admin"){

                              }
                              ?>
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