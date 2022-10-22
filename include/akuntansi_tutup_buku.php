        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0">Proses Tutup Buku Tahunan</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Dashboard v1</li>
                </ol>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>

        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3">
            <div class="card">
              <div class="card-header">
                <h6>Menu</h6>
              </div>
              <div class="card-body pl-3 pt-3">
                <ul class="ml-0 pl-3">
                  <li><a href="<?= BASE_URL ?>tutup_buku/">Backup</a></li>
                  <li><a href="<?= BASE_URL ?>tutup_buku/validator">Validator</a></li>
                  <li><a href="<?= BASE_URL ?>tutup_buku/pembagian_surplus">Pembagian Surplus</a></li>
                  <li><a href="<?= BASE_URL ?>tutup_buku/perubahan_surplus">Perubahan Surplus Depisit Dutahan</a></li>
                  <li><a href="<?= BASE_URL ?>tutup_buku/proses_tutup">Proses Tutup Buku</a></li>
                  <li><a href="<?= BASE_URL ?>tutup_buku/saldo_awal">Saldo Awal</a></li>
                  <li><a href="<?= BASE_URL ?>tutup_buku/neraca_awal">Neraca Awal</a></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-lg-9">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Backup Database</h3>
              </div>
              <!-- /.card-header -->

              <!-- form start -->
              <form method="POST" action="#">
                <div class="card-body">

                  <div class="form-group">
                    <label>Backup Database</label>
                    <input type="text" class="form-control form-control-sm" id="kode" name="kode">
                  </div>


                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-warning">Backup</button>
                  <button type="submit" class="btn btn-primary">Restore</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!-- col -->
        </div>
        <!-- /.row (main row) -->