          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Informasi Varietas</h4>
                  <div class="row grid-margin">
                    <div class="col-12">
                     <a class="btn btn-success" href="<?php echo site_url('Artikel/tambahArtikel')?>"><i class="icon icon-plus"></i> Tambah Informasi Varietas</a>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 table-responsive">
                      <table id="order-listing" class="table">
                        <thead>
                          <tr class="bg-light">
                              <th style="text-align: center;">No</th>
                              <th style="text-align: left;">Judul</th>
                              <th style="text-align: center;">Action</th>
                          </tr>
                        </thead>
                        
                        <tbody>
                          <?php
                          $no = 1;
                          foreach($data_artikel as $row){
                        ?>
                          <tr>
                              <td  style="text-align: center;"><?php echo $no++ ?></td>
                              <td  style="text-align: left;"><?php echo $row->judul ?></td>
                              <td  style="text-align: center;" class="text-right" width="1">
                                <a class="btn btn-light  btn-sm btn-rounded btn-sx" href="<?php echo site_url('Artikel/editArtikel/'.$row->id_artikel);?>">
                                  <i class="icon-pencil"></i> Edit
                                </a>
                                <a class="btn btn-light  btn-sm btn-rounded btn-sx" href="<?php echo site_url('Artikel/deleteArtikel/'.$row->id_artikel);?>">
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