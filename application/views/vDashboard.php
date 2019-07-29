

          <div class="row">
            <div class="col-md-6 col-lg-4 grid-margin stretch-card">
              <div class="card bg-success text-white border-0">
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <i class="icon-list icon-lg"></i>
                    <div class="ml-4">
                      <h4 class="font-weight-light">Total Alternatif</h4>
                      <h3 class="font-weight-light mb-3"><?php echo $data_jumlah_alternatif->total?></h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 grid-margin stretch-card">
              <div class="card bg-danger text-white border-0">
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <i class="icon-grid icon-lg"></i>
                    <div class="ml-4">
                      <h4 class="font-weight-light">Total Kriteria</h4>
                      <h3 class="font-weight-light mb-3"><?php echo $data_jumlah_kriteria->totalkriteria?></h3>
                      <!--<p class="mb-0 font-weight-light">69% increase</p>-->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 grid-margin stretch-card">
              <div class="card bg-primary text-white border-0">
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <i class="icon-user icon-lg"></i>
                    <div class="ml-4">
                      <h4 class="font-weight-light">Total Pengguna</h4>
                      <h3 class="font-weight-light mb-3"><?php echo $data_jumlah_user->totaluser?></h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card text-white border-0">
                <img class="card-img h-100 rounded-0" src="<?php echo base_url('')?>assets/images/dashboard/cover.png" alt="Card image">
                <div class="card-img-overlay d-flex flex-column justify-content-between">
                  <h4 class="font-weight-light">
                      <b><?php echo date("l jS \of F Y")?></b>
                  </h4>
                  <div>
                    <h4 class="font-weight-light">
                        Sistem Pendukung Keputusan Pemilihan Varietas Kedelai Unggul
                    </h4>
                    <h3 class="font-weight-light mb-0">
                        <b>Selamat Datang di Admin Dashboard</b>
                    </h3>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Pembobotan</h4>
                  <?php
                  foreach ($data_bobot as $row1){
                  ?>
                  <div class="mb-3">
                    <p class="d-flex mb-2">
                      <?php echo $row1->nama_kriteria?>
                      <span class="ml-auto font-weight-bold"><?php echo round($row1->bobot_akhir, 4)?></span>
                    </p>
                    <div class="progress progress-xs">
                      <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                <?php } ?>
                </div>
              </div>
            </div>
            <div class="col-md-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Rangking Varietas</h4>
                  <?php
                  foreach ($data_perhitungan as $row2){
                  ?>
                  <div class="mb-3">
                    <p class="d-flex mb-2">
                      <?php echo $row2->nama_alternatif?>
                      <span class="ml-auto font-weight-bold"><?php echo number_format($row2->vektor_v, 4)?></span>
                    </p>
                    <div class="progress progress-xs">
                      <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                <?php } ?>
                </div>
              </div>
            </div>
          </div>
          <!-- <div class="col-lg-9 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Langkah-langkah Menggunakan SPK</h4>
                  <p class="card-description">Langkah-langkah ini hanya untuk Administrator SPK (Web)</p>
                  <div class="accordion accordion-filled" id="accordion-7" role="tablist">
                    <div class="card">
                      <div class="card-header" role="tab" id="heading-7">
                        <h5 class="mb-0">
                          <a data-toggle="collapse" href="#collapse-7" aria-expanded="false" aria-controls="collapse-7">
                            Menggunakan Menu Alternatif (Data Varietas Kedelai)
                          </a>
                        </h5>
                      </div>
                      <div id="collapse-7" class="collapse" role="tabpanel" aria-labelledby="heading-7" data-parent="#accordion-3">
                        <div class="card-body">
                          You can at any time reclaim your money to your bank account that you have registered with us. If there are no registered account, then you can add an account in the ‘Register Bank Account’ page.
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header" role="tab" id="heading-8">
                        <h5 class="mb-0">
                          <a class="collapsed" data-toggle="collapse" href="#collapse-8" aria-expanded="false" aria-controls="collapse-8">
                            Menggunakan Menu Kriteria (Data Kriteria Pengambilan Keputusan)
                          </a>
                        </h5>
                      </div>
                      <div id="collapse-8" class="collapse" role="tabpanel" aria-labelledby="heading-8" data-parent="#accordion-3">
                        <div class="card-body">
                          <ol class="pl-3">
                            <li>Click on the ‘forgot password’ link.</li>
                            <li>Enter your email address registered with us</li>
                            <li>Click on the link sent you in the email</li>
                            <li>Reset your password</li>
                          </ol>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header" role="tab" id="heading-9">
                        <h5 class="mb-0">
                          <a class="collapsed" data-toggle="collapse" href="#collapse-9" aria-expanded="false" aria-controls="collapse-9">
                            What should I do if I need any assistance using my account
                          </a>
                        </h5>
                      </div>
                      <div id="collapse-9" class="collapse" role="tabpanel" aria-labelledby="heading-9" data-parent="#accordion-3">
                        <div class="card-body">
                          If you need any assistance while using your account, you can contact our customer support via email at support@abc.com. Or you can live chat with our support team. Our support team is available 24*7
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->