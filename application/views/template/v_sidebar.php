<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link " href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $this->session->userdata('name') ?></span>
          <img width="30" class="img-profile rounded-circle " src="<?php echo base_url() ?>assets/dist/img/logo_pupr.jpg">
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->


  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url('assets/') ?>dist/img/logo_pupr.jpg" class="img-fluid elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><b>PUPR Kab. Oku</b></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <?php if ($this->session->userdata('dashboard') == 'Y') { ?>
            <li class="nav-item ">
              <a href="<?= base_url('dashboard') ?>" class="nav-link <?= $this->uri->segment(1) == 'dashboard' || $this->uri->segment(1) == '' ? 'active' : '' ?>">
                <i class=" nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
          <?php } ?>

          <?php if ($this->session->userdata('data_pegawai') == 'Y') { ?>
            <li class="nav-item">
              <a href="<?= base_url('datapegawai') ?>" class="nav-link <?= $this->uri->segment(1) == 'datapegawai' || $this->uri->segment(1) == '' ? 'active' : '' ?>">
                <i class="nav-icon far fa-address-card"></i>
                <p>
                  Data Pegawai
                </p>
              </a>
            </li>
          <?php } ?>


          <?php if ($this->session->userdata('data_golongan') == 'Y') { ?>
            <li class="nav-item">
              <a href="<?= base_url('golongan') ?>" class="nav-link <?= $this->uri->segment(1) == 'golongan' || $this->uri->segment(1) == '' ? 'active' : '' ?>">
                <i class="nav-icon far fa-address-card"></i>
                <p>
                  Data Golongan
                </p>
              </a>
            </li>
          <?php } ?>


          <?php if ($this->session->userdata('data_jabatan') == 'Y') { ?>
            <li class="nav-item">
              <a href="<?= base_url('jabatan') ?>" class="nav-link <?= $this->uri->segment(1) == 'jabatan' || $this->uri->segment(1) == '' ? 'active' : '' ?>">
                <i class="nav-icon far fa-address-card"></i>
                <p>
                  Data Jabatan
                </p>
              </a>
            </li>
          <?php } ?>

          <?php if ($this->session->userdata('potongan') == 'Y') { ?>
            <li class="nav-item  <?= $this->uri->segment(1) == 'potongan_apbd' || $this->uri->segment(1) == 'potongan_pu'  ? 'menu-open' : '' ?>">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-dollar-sign"></i>
                <p>
                  Potongan
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">

                <?php if ($this->session->userdata('potongan_pu') == 'Y') { ?>
                  <li class="nav-item">
                    <a href="<?= base_url('potongan_pu') ?>" class="nav-link <?= $this->uri->segment(1) == 'potongan_pu' || $this->uri->segment(1) == '' ? 'active' : '' ?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        Potongan PU
                      </p>
                    </a>
                  </li>
                <?php } ?>
              </ul>
            </li>
          <?php } ?>


          <?php if ($this->session->userdata('proses_gaji_pegawai')) { ?>
            <li class="nav-item">
              <a href="<?= base_url('proses_gaji') ?>" class="nav-link <?= $this->uri->segment(1) == 'proses_gaji' || $this->uri->segment(1) == '' ? 'active' : '' ?>">
                <i class="nav-icon fas fa-server"></i>
                <?php if ($this->session->userdata('level') == 'user') { ?>
                  <p>
                    Data Gaji Pegawai
                  </p>
                <?php } else { ?>
                  <p>
                    Proses Gaji Pegawai
                  </p>
                <?php } ?>
              </a>
            </li>
          <?php } ?>

          <?php if ($this->session->userdata('user') == 'Y') { ?>
            <li class="nav-item">
              <a href="<?= base_url('user') ?>" class="nav-link <?= $this->uri->segment(1) == 'user' || $this->uri->segment(1) == '' ? 'active' : '' ?>">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  User
                </p>
              </a>
            </li>
          <?php } ?>


          <li class="nav-item">
            <a href="<?= base_url('reset_pass') ?>" class="nav-link <?= $this->uri->segment(1) == 'reset_pass' || $this->uri->segment(1) == '' ? 'active' : '' ?>">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Ganti Password
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?= base_url('auth/logout') ?>" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>



      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
