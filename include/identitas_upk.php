        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0">Identitas UPK</h1>
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
                  <li><a href="<?= BASE_URL ?>identitas_upk/"> Identitas UPK</a></li>
                  <li><a href="<?= BASE_URL ?>identitas_upk/aparat"> Identitas Aparat</a></li>
                  <li><a href="<?= BASE_URL ?>identitas_upk/jabatan"> Sebutan Jabatan</a></li>
                  <li><a href="<?= BASE_URL ?>identitas_upk/kredit"> Sistem Kredit</a></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-lg-9">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Identitas UPK</h3>
              </div>
              <!-- /.card-header -->

              <!-- form start -->
              <form method="POST" action="#">
                <div class="card-body">

                  <img src="" alt="Logo UPK">
                  <div class="form-group">
                    <label for="exampleInputFile">Ganti Logo</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input custom-file-input-sm" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label>Kode</label>
                        <input type="text" class="form-control form-control-sm" id="kode" name="kode">
                      </div>
                      <div class="form-group">
                        <label>Nama UPK</label>
                        <input type="text" class="form-control form-control-sm" id="kode" name="kode">
                      </div>

                      <div class="form-group">
                        <label>Alamat Lengkap</label>
                        <input type="text" class="form-control form-control-sm">
                      </div>

                      <div class="form-group">
                        <label>Kecamtan</label>
                        <input type="text" class="form-control form-control-sm">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label>Kabupaten</label>
                        <input type="text" class="form-control form-control-sm">
                      </div>

                      <div class="form-group">
                        <label>Provinsi</label>
                        <input type="text" class="form-control form-control-sm">
                      </div>

                      <div class="form-group">
                        <label>Telp</label>
                        <input type="text" class="form-control form-control-sm">
                      </div>

                      <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control form-control-sm">
                      </div>
                    </div>
                  </div>


                  <div class="form-group">
                    <label>Ketua</label>
                    <input type="text" class="form-control form-control-sm">
                  </div>

                  <div class="form-group">
                    <label>Skertaris</label>
                    <input type="text" class="form-control form-control-sm">
                  </div>

                  <div class="form-group">
                    <label>Bendahara</label>
                    <input type="text" class="form-control form-control-sm">
                  </div>

                  <div class="form-group">
                    <label>Ketua BKAD</label>
                    <input type="text" class="form-control form-control-sm">
                  </div>

                  <div class="form-group">
                    <label>Ketua BPUPK</label>
                    <input type="text" class="form-control form-control-sm">
                  </div>


                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!-- col -->
        </div>
        <!-- /.row (main row) -->