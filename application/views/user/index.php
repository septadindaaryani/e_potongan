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
        <?php if ($this->session->userdata('add_user') == 'Y') { ?>
          <a class="btn btn-sm btn-success mb-3" href="<?= base_url('user/tambah') ?>"><i class="fas fa-plus"></i> Tambah User</a>
          <a class="btn btn-sm btn-warning mb-3 ml-2" data-toggle="modal" data-target="#exampleModalCenter"> <i class="fa  fa-edit"> </i> Akses Role </a>
        <?php } ?>
        <thead>
          <tr>
            <th class="text-center">No</th>
            <th class="text-center">Nama Pegawai</th>
            <th class="text-center">Nama Pengguna</th>
            <th class="text-center">username</th>
            <th class="text-center">Akun</th>
            <th class="text-center">Level</th>
            <?php if ($this->session->userdata('edit_user') == 'Y') { ?>
              <th class="text-center">Actions</th>
            <?php } ?>
          </tr>
        </thead>
        <tbody>

          <?php
          $No = 1;
          foreach ($user as $row) : ?>

            <tr>
              <td class="text-center"><?= $No++; ?></td>
              <td class="text-center"><?php echo $row->nm_pegawai ?></td>
              <td class="text-center"><?php echo $row->name ?></td>
              <td class="text-center"><?php echo ($row->username) ?></td>
              <?php if ($row->aktif == 'T') { ?>
                <td class="text-center">Tidak Aktif</td>
              <?php } else { ?>
                <td class="text-center">Aktif</td>
              <?php } ?>
              <td class="text-center"><?php echo ($row->level) ?></td>


              <?php if ($this->session->userdata('edit_user') == 'Y') { ?>
                <td class="text-center">
                  <a class="badge badge-primary" href="<?= site_url('user/edit/' . $row->id_user) ?>"> <i class="fa  fa-edit"> </i> Edit </a>
                  <a class="badge badge-danger" id="btn-hapus" href="<?= site_url('user/delete/' . $row->id_user) ?>"> <i class="fa fa-trash"> </i> Delete </a>
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

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Pengaturan Role</h5>
      </div>
      <div class="modal-body">
        <form method="post" action="<?= site_url('user/role') ?>">

          <div class="row">
            <div class="col-md-12">
              <b>Role Akses</b>
              <select name="id_role" class="form-control" required>
                <option value="" selected>--Pilih Jenis Role--</option>
                <?php foreach ($role->result() as $row) { ?>
                  <option value="<?= $row->id_role ?>"><?= $row->jenis_user ?></option>
                <?php } ?>
              </select>
            </div>
          </div><br>
          <div>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
            <button type="submit" class="btn btn-primary">Proses</button>
          </div>
        </form>
      </div>
    </div>
  </div>