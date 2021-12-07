<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1><?php echo $title ?></h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>


  <div class="card-body">
    <!-- <?php
          if ($this->session->flashdata('msg')) { ?>
      <span data-flash="<?= $this->session->flashdata('msg') ?>"></span>
    <?php } ?> -->
    <div class="table-responsive">
      <table id="example" class="table table-dark table-striped" width="100%" cellspacing="0">

        <?php if ($this->session->userdata('level') == 'user') { ?>
        <?php } else { ?>
          <?php if ($this->session->userdata('add_proses_gaji_pegawai') == 'Y') { ?>
            <a class="btn btn-sm btn-success mb-3" href="<?= base_url('proses_gaji/tambah') ?>"><i class="fas fa-sync-alt"></i> Proses Gaji</a>
          <?php } ?>
        <?php } ?>
        <a class="btn btn-sm btn-warning mb-3 ml-2" data-toggle="modal" data-target="#exampleModalCenter"><i class="fas fa-print"></i> Export</a>
        <?php if ($this->session->userdata('level') == 'superadmin') { ?>
          <a class="btn btn-sm btn-primary mb-3 ml-2" data-toggle="modal" data-target="#laporan_gaji"><i class="fas fa-print"></i> Laporan Gaji</a>
        <?php } ?>
        <thead>
          <tr>
            <th class="text-center">No</th>
            <th class="text-center">Pegawai</th>
            <th class="text-center">Bulan/Tahun</th>
            <th class="text-center">Gaji Kotor</th>
            <th class="text-center">Total Potongan PU</th>
            <th class="text-center">Gaji Bersih</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $No = 1;
          foreach ($proses_gaji as $row) : ?>

            <tr>
              <td class="text-center"><?= $No++; ?></td>
              <td class="text-center"><?php echo ucfirst($row->nm_pegawai) ?></td>
              <td class="text-center"><?php echo ($row->bulan) ?>-<?php echo ($row->tahun) ?></td>
              <td class="text-center"><?php echo number_format($row->gaji_pokok) ?></td>
              <td class="text-center"><?php echo number_format($row->total_potongan_pu) ?></td>
              <td class="text-center"><?php echo number_format($row->gaji_bersih) ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>

      </table>
    </div>
  </div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Cetak Selip Gaji</h5>
      </div>
      <div class="modal-body">
        <form method="post" action="<?= base_url('proses_gaji/export'); ?>" target="_blank">

          <div class="row">
            <div class="col-md-6">
              <b>Bulan</b>
              <select name="bulan" class="form-control" required>
                <?php if ($this->session->userdata('level') == 'superadmin') { ?>
                  <option value="0" selected>--ALL--</option>
                <?php } else { ?>
                  <option value="" selected>--Pilih Bulan--</option>
                <?php } ?>
                <option value="1">Januari</option>
                <option value="2">Februari</option>
                <option value="3">Maret</option>
                <option value="4">April</option>
                <option value="5">Mei</option>
                <option value="6">Juni</option>
                <option value="7">Juli</option>
                <option value="8">Agustus</option>
                <option value="9">September</option>
                <option value="10">Oktober</option>
                <option value="11">November</option>
                <option value="12">Desember</option>
              </select>
              <?= form_error('bulan', ' <small class="text-danger">', '</small>'); ?>
            </div>
            <div class="col-md-6">
              <b> Tahun </b>
              <input type="number" maxlength="4" name="tahun" value="<?php echo date('Y', time()) ?>" class="form-control"></input>
            </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
            <button type="submit" class="btn btn-primary">Cetak</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- laporan gaji -->
<!-- Modal -->
<div class="modal fade" id="laporan_gaji" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Cetak Laporan Gaji</h5>
      </div>
      <div class="modal-body">
        <form method="post" action="<?= base_url('proses_gaji/export_laporan'); ?>" target="_blank">

          <div class="row">
            <div class="col-md-4">
              <b>Bulan</b>
              <select name="bulan" class="form-control" required>
                <?php if ($this->session->userdata('level') == 'superadmin') { ?>
                  <option value="0" selected>--ALL--</option>
                <?php } else { ?>
                  <option value="" selected>--Pilih Bulan--</option>
                <?php } ?> <option value="1">Januari</option>
                <option value="2">Februari</option>
                <option value="3">Maret</option>
                <option value="4">April</option>
                <option value="5">Mei</option>
                <option value="6">Juni</option>
                <option value="7">Juli</option>
                <option value="8">Agustus</option>
                <option value="9">September</option>
                <option value="10">Oktober</option>
                <option value="11">November</option>
                <option value="12">Desember</option>
              </select>
              <?= form_error('bulan', ' <small class="text-danger">', '</small>'); ?>
            </div>
            <div class="col-md-4">
              <b> Tahun </b>
              <input type="number" maxlength="4" name="tahun" value="<?php echo date('Y', time()) ?>" class="form-control"></input>
            </div>
            <div class="col-md-4">
              <b>Pegawai</b>
              <select name="id_pegawai" class="form-control">
                <option value="0" selected>--All Pegawai--</option>
                <?php foreach ($id_pegawai->result() as $row) : ?>
                  <option value="<?php echo $row->id_pegawai ?>"><?php echo $row->nm_pegawai ?></option>
                <?php endforeach; ?>
              </select>
              <?= form_error('id_pegawai', ' <small class="text-danger">', '</small>'); ?>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
            <button type="submit" class="btn btn-primary">Cetak</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
