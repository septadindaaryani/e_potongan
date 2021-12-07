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
    if ($this->session->flashdata('add_data_eselon')) { ?>
      <!-- <span id="flash" data-flash="<?= $this->session->flashdata('add_pegawai') ?>"></span> -->
    <?php } ?>
    <div class="table-responsive">
      <table id="example" class="table table-dark table-striped" width="100%" cellspacing="0">
        <?php if ($this->session->userdata('add_data_pegawai') == 'Y') { ?>
          <a class="btn btn-sm btn-success mb-3" href="<?= base_url('eselon/tambah') ?>"><i class="fas fa-plus"></i> Tambah Eselon</a>
        <?php } ?>
        <thead>
          <tr>
            <th class="text-center">No</th>
            <th class="text-center">Eselon</th>
            <th class="text-center">Besar Tunjangan</th>
            <?php if ($this->session->userdata('edit_data_pegawai') == 'Y') { ?>
              <th class="text-center">Actions</th>
            <?php } ?>
          </tr>
        </thead>
        <tbody>

          <?php
          $No = 1;
          foreach ($dataeselon as $dataeselon) : ?>

            <tr>
              <td class="text-center"><?= $No++; ?></td>
              <td class="text-center"><?php echo ucfirst($dataeselon->nm_eselon) ?></td>
              <td class="text-center"><?php echo number_format($dataeselon->bsr_tunj) ?></td>
              <?php if ($this->session->userdata('edit_data_pegawai') == 'Y') { ?>
                <td class="text-center">
                  <a class="badge badge-primary" href="<?= site_url('eselon/edit/' . $dataeselon->id_eselon) ?>"> <i class="fa  fa-edit"> </i> Edit </a>
                  <a class="badge badge-danger" id="btn-hapus" href="<?= site_url('eselon/delete/' . $dataeselon->id_eselon) ?>"> <i class="fa fa-trash"> </i> Delete </a>
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
