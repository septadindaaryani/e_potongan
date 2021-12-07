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
        <?php if ($this->session->userdata('add_data_pegawai') == 'Y') { ?>
          <a class="btn btn-sm btn-success mb-3" href="<?= base_url('Datapegawai/add_datapegawai') ?>"><i class="fas fa-plus"></i> Tambah Pegawai</a>
        <?php } ?>
        <thead>
          <tr>
            <th class="text-center">No</th>
            <th class="text-center">NIP</th>
            <th class="text-center">Nama Pegawai</th>
            <th class="text-center">Jenis Kelamin</th>
            <th class="text-center">Jabatan</th>
            <th class="text-center">Tahun Masuk</th>
            <th class="text-center">Masa Kerja</th>
            <th class="text-center">Jumlah Jiwa</th>
            <th class="text-center">Jumlah anak</th>
            <th class="text-center">Jenis Golongan</th>
            <th class="text-center">No Hp</th>
            <th class="text-center">Status</th>
            <th class="text-center">No Rekening</th>
            <?php if ($this->session->userdata('edit_data_pegawai') == 'Y') { ?>
              <th class="text-center">Actions</th>
            <?php } ?>
          </tr>
        </thead>
        <tbody>

          <?php
          $No = 1;
          foreach ($datapegawai as $datapegawai) : ?>

            <tr>
              <td class="text-center"><?= $No++; ?></td>
              <td class="text-center"><?php echo ucfirst($datapegawai->nip) ?></td>
              <td class="text-center"><?php echo ucfirst($datapegawai->nm_pegawai) ?></td>
              <td class="text-center"><?php echo ucfirst($datapegawai->jenis_kelamin) ?></td>
              <td class="text-center"><?php echo ucfirst($datapegawai->nm_jabatan) ?></td>
              <td class="text-center"><?php echo ucfirst($datapegawai->thn_masuk) ?></td>
              <td class="text-center"><?php echo ucfirst($datapegawai->masa_kerja) ?> Tahun</td>
              <td class="text-center"><?php echo ucfirst($datapegawai->jumlah_jiwa) ?></td>
              <td class="text-center"><?php echo ucfirst($datapegawai->jumlah_anak) ?></td>
              <td class="text-center"><?php echo ucfirst($datapegawai->nm_golongan) ?></td>
              <td class="text-center"><?php echo ucfirst($datapegawai->no_hp) ?></td>
              <td class="text-center"><?php echo ucfirst($datapegawai->status) ?></td>
              <td class="text-center"><?php echo ucfirst($datapegawai->no_rekening) ?></td>
              <?php if ($this->session->userdata('edit_data_pegawai') == 'Y') { ?>
                <td class="text-center">
                  <a class="badge badge-primary" href="<?= site_url('Datapegawai/edit/' . $datapegawai->id_pegawai) ?>"> <i class="fa  fa-edit"> </i> Edit </a>
                  <a class="badge badge-danger" id="btn-hapus" href="<?= site_url('Datapegawai/hapus/' . $datapegawai->id_pegawai) ?>"> <i class="fa fa-trash"> </i> Delete </a>
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
</br>

</table>
</div>
