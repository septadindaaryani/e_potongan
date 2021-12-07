<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <div class="container-fluid">

    <h1 class="h3 mb-2 text-gray-800"> Edit User</h1>
    <div class="card shadow mb-4 border-left-primary">
      <div class="card-header py-3">

        <div class="modal-body">
          <form method="post" action="<?= base_url('user/update'); ?>">
            <?php foreach ($user as $row) { ?>

              <div class="row">
                <div class="col-md-3">
                  <b>Pegawai</b>
                  <input type="hidden" readonly name="id_user" value="<?= $row->id_user ?>" class="form-control" placeholder="nama pengguna " required></input>
                  <input type="text" readonly value="<?= $row->nm_pegawai ?>" class="form-control" placeholder="nama pengguna " required></input>
                  <?= form_error('id_pegawai', ' <small class="text-danger">', '</small>'); ?>
                </div>
                <div class="col-md-3">
                  <b>Role</b>
                  <select name="id_role" class="form-control" required>
                    <option value="" selected>--Pilih Role--</option>
                    <?php foreach ($data_role->result() as $row_1) : ?>
                      <option value="<?php echo $row_1->id_role ?>" <?php if ($row->id_role == $row_1->id_role) {
                                                                      echo "selected";
                                                                    } ?>><?php echo $row_1->jenis_user ?></option>
                    <?php endforeach; ?>
                  </select>
                  <?= form_error('id_role', ' <small class="text-danger">', '</small>'); ?>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col">
                  <b> Nama pengguna </b>
                  <input type="text" name="name" class="form-control" value="<?= $row->name ?>" placeholder="nama pengguna " required></input>
                </div>
                <div class="col">
                  <b> Username </b>
                  <input type="text" name="username" value="<?= $row->username ?>" class="form-control" placeholder="username" required></input>
                </div>
                <div class="col">
                  <b> Aktifkan Akun </b>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="aktif" value="Y" <?php
                                                                                        echo $row->aktif == 'Y' ? "checked" : "";
                                                                                        ?>>
                    <label class="form-check-label" for="aktif">
                      Aktif
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="aktif" value="T" <?php
                                                                                        echo $row->aktif == 'T' ? "checked" : "";
                                                                                        ?>>
                    <label class="form-check-label" for="aktif">
                      Tidak Aktif
                    </label>
                  </div>
                </div>
              <?php } ?>


              </div>
              <br>

              <a href="<?= base_url('user') ?>" type="reset" class="btn btn-danger">
                <i class="fas fa-reply"></i> Back </a>
              <button type="submit" class="btn btn-success">
                <i class=" fa fa-save"></i> Save </button>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>