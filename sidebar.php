<!-- Brand Logo -->
<a href="<?= BASE_URL ?>" class="brand-link">
  <img src="<?= BASE_URL ?>assets/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
  <span class="brand-text font-weight-light">AdminLTE 3</span>
</a>

<!-- Sidebar -->
<div class="sidebar">
  <!-- Sidebar user panel (optional) -->
  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
      <img src="<?= BASE_URL ?>assets/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
      <a href="#" class="d-block">Alexander Pierce</a>
    </div>
  </div>

  <!-- SidebarSearch Form -->
  <div class="form-inline">
    <div class="input-group" data-widget="sidebar-search">
      <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
      <div class="input-group-append">
        <button class="btn btn-sidebar">
          <i class="fas fa-search fa-fw"></i>
        </button>
      </div>
    </div>
  </div>

  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
      <li class="nav-item">
        <a href="<?= BASE_URL ?>" class="nav-link">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Beranda
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-bars"></i>
          <p>
            Pengaturan
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Profile
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item ml-3">
                <a href="<?= BASE_URL ?>identitas_upk" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Identitast UPK</p>
                </a>
              </li>
              <li class="nav-item ml-3">
                <a href="<?= BASE_URL ?>kecamatan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kecamatan</p>
                </a>
              </li>
              <li class="nav-item ml-3">
                <a href="<?= BASE_URL ?>desa" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Desa</p>
                </a>
              </li>
              <li class="nav-item ml-3">
                <a href="<?= BASE_URL ?>pengurus" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengurus</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Akuntasi
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item ml-3">
                <a href="<?= BASE_URL ?>akuntansi" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Periode Akuntassi</p>
                </a>
              </li>
              <li class="nav-item ml-3">
                <a href="<?= BASE_URL ?>akuntansi/saldo_awal" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Saldo Awal</p>
                </a>
              </li>
              <li class="nav-item ml-3">
                <a href="<?= BASE_URL ?>akuntansi/modal" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Modal</p>
                </a>
              </li>
              <li class="nav-item ml-3">
                <a href="<?= BASE_URL ?>akuntansi/hibah" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Hibah</p>
                </a>
              </li>
              <li class="nav-item ml-3">
                <a href="<?= BASE_URL ?>akuntansi/tutup_buku" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tutup Buku</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
                User
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item ml-3">
                <a href="<?= BASE_URL ?>user" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User List</p>
                </a>
              </li>
              <li class="nav-item ml-3">
                <a href="<?= BASE_URL ?>user/hak_akses" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Hak Askes</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Referensi
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item ml-3">
                <a href="<?= BASE_URL ?>kelembagaan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kelembagaan</p>
                </a>
              </li>
              <li class="nav-item ml-3">
                <a href="<?= BASE_URL ?>jabatan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jabatan</p>
                </a>
              </li>
            </ul>
          </li>
        
        </ul>
      </li>

            

          

      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-table"></i>
          <p>
            Manajemen
            <i class="fas fa-angle-left right"></i>
            <span class="badge badge-info right">6</span>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item ml-2">
            <a href="<?= BASE_URL ?>proposal" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Proposal
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
              <li class="nav-item ml-3">
                <a href="<?= BASE_URL ?>kelompok" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kelompok</p>
                </a>
              </li>
              <li class="nav-item ml-3">
                <a href="<?= BASE_URL ?>jabatan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jabatan</p>
                </a>
              </li>
            </ul>

          </li>

          <li class="nav-item ml-2">
            <a href="<?= BASE_URL ?>pinjaman/" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Pinjaman</p>
            </a>
          </li>

          <li class="nav-item ml-2">
            <a href="<?= BASE_URL ?>database" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Database</p>
            </a>
          </li>

          <li class="nav-item ml-2">
            <a href="<?= BASE_URL ?>anggota" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Anggota</p>
            </a>
          </li>

        </ul>
      </li>


      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-edit"></i>
          <p>
            Transaksi
            <i class="fas fa-angle-left right"></i>
            <span class="badge badge-info right">6</span>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item ml-2">
            <a href="pages/layout/top-nav.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Penerimaan Angsuran</p>
            </a>
          </li>

          <li class="nav-item ml-2">
            <a href="pages/layout/top-nav.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Penyaluran Kredit</p>
            </a>
          </li>

          <li class="nav-item ml-2">
            <a href="pages/layout/top-nav.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Buku Kas</p>
            </a>
          </li>

          <li class="nav-item ml-2">
            <a href="pages/layout/top-nav.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Buku Bank</p>
            </a>
          </li>

          <li class="nav-item ml-2">
            <a href="pages/layout/top-nav.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Buku Bantu Lainnya</p>
            </a>
          </li>

        </ul>
      </li>

      <li class="nav-item">
        <a href="pages/calendar.html" class="nav-link">
          <i class="nav-icon far fa-calendar-alt"></i>
          <p>
            Laporan
          </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-th"></i>
          <p>
            Informasi
            <i class="fas fa-angle-left right"></i>
            <span class="badge badge-info right">6</span>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item ml-2">
            <a href="pages/layout/top-nav.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Kelompok</p>
            </a>
          </li>

          <li class="nav-item ml-2">
            <a href="pages/layout/top-nav.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Pinjaman</p>
            </a>
          </li>

          <li class="nav-item ml-2">
            <a href="pages/layout/top-nav.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Keuangan</p>
            </a>
          </li>

          <li class="nav-item ml-2">
            <a href="pages/layout/top-nav.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Lain-lain</p>
            </a>
          </li>

          <li class="nav-item ml-2">
            <a href="pages/layout/top-nav.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Buku Bantu Lainnya</p>
            </a>
          </li>

        </ul>
      </li>

    </ul>
  </nav>
  <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->