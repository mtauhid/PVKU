

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
                    <i class="icon-screen-desktop icon-lg"></i>
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
                <img class="card-img h-100 rounded-0" src="images/dashboard/cover.png" alt="Card image">
                <div class="card-img-overlay d-flex flex-column justify-content-between">
                  <h4 class="font-weight-light">
                      10 Oct 2018
                  </h4>
                  <div>
                    <h4 class="font-weight-light">
                        Check our unlimited elements
                    </h4>
                    <h3 class="font-weight-light mb-0">
                        Welcome to Flare Admin dashboard
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
                      <span class="ml-auto font-weight-bold"><?php echo round($row2->vektor_v, 4)?></span>
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