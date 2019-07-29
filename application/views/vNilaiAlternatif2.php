          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Nilai Alternatif (<b><?php echo $data_alternatif->nama_alternatif?></b>)</h4>
                  <div class="row grid-margin">
                    <div class="col-12">
                      <?php
                      if ($data_alternatif_count < 4) {  
                    ?>
                      <a class="btn btn-success" href="<?php echo site_url('Alternatif/tambahNilaiAlternatif2/'.$this->uri->segment(3))?>"><i class="icon icon-plus"></i> Tambah Nilai Alternatif</a>
                    <?php
                      } else {
                    ?>
                      <a class="btn btn-success disabled" href="<?php echo site_url('Alternatif/tambahNilaiAlternatif2/'.$this->uri->segment(3))?>"><i class="icon icon-plus"></i> Tambah Nilai Alternatif</a>
                    <?php
                      }
                    ?>
                     <a href="<?php echo site_url('Alternatif')?>" class="btn btn-primary">Batal</a>
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
                              
                              <td  style="text-align: center;">
                                <?php 

                                if($row->nilai < 10 && $row->id_kriteria == 1){
                                  echo "Kecil";
                                }else if($row->nilai <= 14 && $row->id_kriteria == 1){
                                  echo "Sedang";
                                }else if($row->nilai >= 15 && $row->id_kriteria == 1){
                                  echo "Besar";
                                  //Potensi Hasil
                                }else if($row->nilai < 1.5 && $row->id_kriteria == 2){
                                  echo "Rendah";
                                }else if($row->nilai <= 2 && $row->id_kriteria == 2){
                                  echo "Sedang";
                                }else if($row->nilai > 2 && $row->id_kriteria == 2){
                                  echo "Tinggi";
                                  //Umur Panen
                                }else if($row->nilai < 80 && $row->id_kriteria == 3){
                                  echo "Genjah";
                                }else if($row->nilai <= 85 && $row->id_kriteria == 3){
                                  echo "Sedang";
                                }else if($row->nilai > 85 && $row->id_kriteria == 3){
                                  echo "Dalam";
                                  //Tinggi Tanaman
                                }else if($row->nilai < 50 && $row->id_kriteria == 5){
                                  echo "Pendek";
                                }else if($row->nilai <= 70 && $row->id_kriteria == 5){
                                  echo "Sedang";
                                }else if($row->nilai > 70 && $row->id_kriteria == 5){
                                  echo "Tinggi";
                                }else{

                                }
                                echo " (".$row->nilai." ".$row->satuan_kriteria.")";
                                ?>
                                  
                              </td>

                              <td  style="text-align: center;" class="text-right" width="1">
                                <a class="btn btn-light btn-rounded" href="<?php echo site_url('Alternatif/editNilaiAlternatif/'.$row->id_nilai);?>">
                                  <i class="icon-pencil"></i> Edit
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