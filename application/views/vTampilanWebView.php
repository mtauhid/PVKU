                  <div class="row">
                    <div class="col-12">
                      <div class="row portfolio-grid">
                        <?php
                        foreach($data_artikel as $row){
                        ?>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                          <figure class="effect-text-in">
                            <img src="<?php echo base_url('assets/images/samples/300x300/3.jpg')?>" alt="image"/>
                            <a href="<?php echo site_url('Artikel/tampilanreadwebview/'.$row->id_artikel)?>">
                              <figcaption>
                              <h4><b><?php echo $row->judul?></b></h4>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                            </figcaption>
                            </a>
                            
                          </figure>
                        </div>
                      <?php } ?>
                      </div>
                    </div>
                  </div>