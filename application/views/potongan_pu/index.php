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
    <?php
    if ($this->session->flashdata('add_pegawai')) { ?>
      <!-- <span id="flash" data-flash="<?= $this->session->flashdata('add_pegawai') ?>"></span> -->
    <?php } ?>
    <div class="table-responsive">
      <table id="example" class="table table-dark table-striped" width="100%" cellspacing="0">
        <?php if ($this->session->userdata('add_potongan_pu') == 'Y') { ?>
          <a class="btn btn-sm btn-success mb-3" href="<?= base_url('potongan_pu/tambah') ?>"><i class="fas fa-plus"></i> Tambah Potongan PU</a>
        <?php } ?>
        <thead>
          <tr>
            <th class="text-center">No</th>
            <th class="text-center">PEGAWAI</th>
            <th class="text-center">Tanggal</th>
            <th class="text-center">KORPRI</th>
            <th class="text-center">KOPRASI</th>
            <th class="text-center">AP KOPRASI</th>
            <th class="text-center">BANK SUMSEL</th>
            <th class="text-center">BANK SUMSEL SYARIAH</th>
            <th class="text-center">BANK BRI CAB</th>
            <th class="text-center">BANK BRI KOTA</th>
            <th class="text-center">DW</th>
            <th class="text-center">KOP KARYAWAN MULYA</th>
            <th class="text-center">BPR</th>
            <th class="text-center">BAZDA</th>
            <th class="text-center">K IURAN BPJS</th>
            <?php if ($this->session->userdata('edit_potongan_pu') == 'Y') { ?>
              <th class="text-center">Actions</th>
            <?php } ?>
          </tr>
        </thead>
        <tbody>

          <?php
          $No = 1;
          foreach ($potongan_pu as $row) : ?>

            <tr>
              <td class="text-center"><?= $No++; ?></td>
              <td class="text-center"><?php echo $row->nm_pegawai ?></td>
              <td class="text-center"><?php echo $row->date ?></td>
              <td class="text-center"><?php echo number_format($row->korpri) ?></td>
              <td class="text-center"><?php echo number_format($row->koprasi) ?></td>
              <td class="text-center"><?php echo number_format($row->ap_koprasi) ?></td>
              <td class="text-center"><?php echo number_format($row->bank_sumsel) ?></td>
              <td class="text-center"><?php echo number_format($row->bank_sumsel_syariah) ?></td>
              <td class="text-center"><?php echo number_format($row->bank_bri_cab) ?></td>
              <td class="text-center"><?php echo number_format($row->bank_bri_kota) ?></td>
              <td class="text-center"><?php echo number_format($row->dw) ?></td>
              <td class="text-center"><?php echo number_format($row->kop_karya_mulya) ?></td>
              <td class="text-center"><?php echo number_format($row->bpr) ?></td>
              <td class="text-center"><?php echo number_format($row->bazda) ?></td>
              <td class="text-center"><?php echo number_format($row->k_iuran_bpjs) ?></td>
              <?php if ($this->session->userdata('edit_potongan_pu') == 'Y') { ?>
                <td class="text-center">
                  <a class="badge badge-primary" href="<?= site_url('potongan_pu/edit/' . $row->id_potongan_pu) ?>"> <i class="fa  fa-edit"> </i> Edit </a>
                  <a class="badge badge-danger" id="btn-hapus" href="<?= site_url('potongan_pu/delete/' . $row->id_potongan_pu) ?>"> <i class="fa fa-trash"> </i> Delete </a>
                </td>
              <?php } ?>
            </tr>
          <?php endforeach; ?>
        </tbody>

      </table>
    </div>
  </div>
</div>
</div>