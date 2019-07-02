          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Alternatif (<b><?php echo $data_alternatif->nama_alternatif?></b>)</h4>
                  <div class="row grid-margin">
                    
                    <div class="col-12">
                     <a class="btn btn-inverse-success" href="<?php echo site_url('Alternatif/tambahNilaiAlternatif/'.$this->uri->segment(3))?>">Tambah Alternatif</a>
                     <a href="<?php echo site_url('Alternatif')?>" class="btn btn-outline-primary">Batal</a>
                    </div>
                    <!--
                    <div class="col-3">
                    </div>
                    <div class="col-3">
                      <form method="post" action="<?php echo site_url('nilaiAlternatif/search1')?>">
                        <div class="form-group">
                          <div class="input-group">
                            <select name="search1" class="form-control">
                              <option selected disabled>Cari Alternatif</option>
                              <?php
                              foreach($data_alternatif as $row3){
                                echo "<option>$row3->nama_alternatif</option>";
                              }
                              ?>
                            </select>
                            <button type="submit" class="btn btn-sm btn-success"><i class="icon icon-magnifier"></i></button>
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="col-3">
                      <form method="post" action="<?php echo site_url('nilaiAlternatif/search2')?>">
                        <div class="form-group">
                          <div class="input-group">
                            <input type="text" name="search2" class="form-control" placeholder="Cari Alternatif" aria-label="Cari Alternatif" autofocus>
                            <div class="input-group-append">
                            <button class="btn btn-sm btn-success" type="submit">Search</button>
                            </div> 
                        </div>
                      </div>  
                    </form>
                    </div>
                  -->
                  </div>
                  <div class="row">
                    <div class="col-12 table-responsive">
                      <table id="order-listing" class="table table-bordered">
                        <thead>
                          <tr class="bg-light">
                            <th style="text-align: center;">No</th>
                            <?php
                            //foreach($data_kriteria as $row1){
                            ?>
                              <th style="text-align: center;">Nama Kriteria</th>
                            <?php
                            //}
                            ?>
                            <th style="text-align: center;">Nilai Kriteria</th>
                            <th style="text-align: center;">Action</th>
                          </tr>
                        </thead>
                        
                        <tbody>
                          <?php
                          $no = 1;
                          foreach($data_nilaialternatif as $row){
                        ?>
                          <tr>
                              <td  style="text-align: center;"><?php echo $no++ ?></td>

                              <td  style="text-align: center;"><?php echo $row->nama_kriteria ?></td>
                              
                              <td  style="text-align: center;"><?php echo $row->nilai ?></td>

                              <td  style="text-align: center;" class="text-right" width="1">
                                <a class="btn btn-outline-success btn-rounded btn-sm" href="<?php echo site_url('Alternatif/editNilaiAlternatif/'.$row->id_nilai);?>">
                                  <i class="icon-pencil"></i>
                                </a>
                                <a class="btn btn-outline-danger btn-rounded btn-sm" href="<?php echo site_url('Alternatif/deleteAlternatif/'.$row->id_alternatif);?>">
                                  <i class="icon-close"></i>
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