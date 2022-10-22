        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0">Kecamatan</h1>
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
          <div class="col-lg-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Kecamatan</h3>
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
                        <label>Camat</label>
                        <input type="text" class="form-control form-control-sm" id="kode" name="kode">
                      </div>
                      <div class="form-group">
                        <label>Pangkat</label>
                        <input type="text" class="form-control form-control-sm" id="kode" name="kode">
                      </div>

                    </div>
                    <div class="col-lg-6">

                      <div class="form-group">
                        <label>NIP</label>
                        <input type="text" class="form-control form-control-sm">
                      </div>

                      <div class="form-group">
                        <label>Alamat Kantor</label>
                        <textarea class="form-control form-control-sm"></textarea>
                      </div>
                    </div>
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