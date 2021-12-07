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

    <h1 class="h3 mb-2 text-gray-800"> Akses Role</h1>
    <div class="card shadow mb-4 border-left-primary">
      <div class="card-header py-3">

        <div class="modal-body">
          <form method="post" action="<?= base_url('user/role_proses'); ?>">
            <?php foreach ($role as $row) { ?>
              <input type="hidden" name="id_role" value="<?= $row->id_role ?>">
              <table id="example" class="table table-dark table-striped" width="100%" cellspacing="0">
                <tbody>
                  <tr>
                    <div class="row">
                      <div class="col">
                        <td colspan="4">
                          <label class="pr-2">Dashboard</label><br>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="dashboard" value="Y" <?php
                                                                                                    echo $row->dashboard == 'Y' ? "checked" : "";
                                                                                                    ?>>
                            <label class="form-check-label" for="inlineRadio1">Aktif</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="dashboard" value="T" <?php
                                                                                                    echo $row->dashboard == 'T' ? "checked" : "";
                                                                                                    ?>>
                            <label class="form-check-label" for="inlineRadio2">Tidak aktif</label>
                          </div>
                        </td>
                      </div>
                    </div>
                  </tr>

                  <tr>
                    <div class="row">
                      <div class="col">
                        <td>
                          <label class="pr-2">Data Pegawai</label><br>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="data_pegawai" value="Y" <?php
                                                                                                        echo $row->data_pegawai == 'Y' ? "checked" : "";
                                                                                                        ?>>
                            <label class="form-check-label" for="inlineRadio1">Aktif</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="data_pegawai" value="T" <?php
                                                                                                        echo $row->data_pegawai == 'T' ? "checked" : "";
                                                                                                        ?>>
                            <label class="form-check-label" for="inlineRadio2">Tidak aktif</label>
                          </div>
                        </td>
                        <td>
                          <label>Tambah data pegawai</label><br>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="add_data_pegawai" value="Y" <?php
                                                                                                            echo $row->add_data_pegawai == 'Y' ? "checked" : "";
                                                                                                            ?>>
                            <label class="form-check-label" for="inlineRadio1">Aktif</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="add_data_pegawai" value="T" <?php
                                                                                                            echo $row->add_data_pegawai == 'T' ? "checked" : "";
                                                                                                            ?>>
                            <label class="form-check-label" for="inlineRadio2">Tidak aktif</label>
                          </div>
                        </td>
                        <td>
                          <label>Edit data pegawai</label><br>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="edit_data_pegawai" value="Y" <?php
                                                                                                            echo $row->edit_data_pegawai == 'Y' ? "checked" : "";
                                                                                                            ?>>
                            <label class="form-check-label" for="inlineRadio1">Aktif</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="edit_data_pegawai" value="T" <?php
                                                                                                            echo $row->edit_data_pegawai == 'T' ? "checked" : "";
                                                                                                            ?>>
                            <label class="form-check-label" for="inlineRadio2">Tidak aktif</label>
                          </div>
                        </td>
                      </div>
                    </div>
                  </tr>

                  <tr>
                    <div class="row">
                      <div class="col">
                        <td>
                          <label class="pr-2">Data Golongan</label><br>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="data_golongan" value="Y" <?php
                                                                                                        echo $row->data_golongan == 'Y' ? "checked" : "";
                                                                                                        ?>>
                            <label class="form-check-label" for="inlineRadio1">Aktif</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="data_golongan" value="T" <?php
                                                                                                        echo $row->data_golongan == 'T' ? "checked" : "";
                                                                                                        ?>>
                            <label class="form-check-label" for="inlineRadio2">Tidak aktif</label>
                          </div>
                        </td>
                        <td>
                          <label>Tambah data golongan</label><br>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="add_data_golongan" value="Y" <?php
                                                                                                            echo $row->add_data_golongan == 'Y' ? "checked" : "";
                                                                                                            ?>>
                            <label class="form-check-label" for="inlineRadio1">Aktif</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="add_data_golongan" value="T" <?php
                                                                                                            echo $row->add_data_golongan == 'T' ? "checked" : "";
                                                                                                            ?>>
                            <label class="form-check-label" for="inlineRadio2">Tidak aktif</label>
                          </div>
                        </td>
                        <td>
                          <label>Edit data golongan</label><br>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="edit_data_golongan" value="Y" <?php
                                                                                                              echo $row->edit_data_golongan == 'Y' ? "checked" : "";
                                                                                                              ?>>
                            <label class="form-check-label" for="inlineRadio1">Aktif</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="edit_data_golongan" value="T" <?php
                                                                                                              echo $row->edit_data_golongan == 'T' ? "checked" : "";
                                                                                                              ?>>
                            <label class="form-check-label" for="inlineRadio2">Tidak aktif</label>
                          </div>
                        </td>
                      </div>
                    </div>
                  </tr>

                  <tr>
                    <div class="row">
                      <div class="col">
                        <td>

                          <label class="pr-2">Data Jabatan</label><br>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="data_jabatan" value="Y" <?php
                                                                                                        echo $row->data_jabatan == 'Y' ? "checked" : "";
                                                                                                        ?>>
                            <label class="form-check-label" for="inlineRadio1">Aktif</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="data_jabatan" value="T" <?php
                                                                                                        echo $row->data_jabatan == 'T' ? "checked" : "";
                                                                                                        ?>>
                            <label class="form-check-label" for="inlineRadio2">Tidak aktif</label>
                          </div>
                        </td>
                        <td>

                          <label>Tambah data Jabatan</label><br>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="add_data_jabatan" value="Y" <?php
                                                                                                            echo $row->add_data_jabatan == 'Y' ? "checked" : "";
                                                                                                            ?>>
                            <label class="form-check-label" for="inlineRadio1">Aktif</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="add_data_jabatan" value="T" <?php
                                                                                                            echo $row->add_data_jabatan == 'T' ? "checked" : "";
                                                                                                            ?>>
                            <label class="form-check-label" for="inlineRadio2">Tidak aktif</label>
                          </div>
                        </td>
                        <td>

                          <label>Edit data Jabatan</label><br>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="edit_data_jabatan" value="Y" <?php
                                                                                                            echo $row->edit_data_jabatan == 'Y' ? "checked" : "";
                                                                                                            ?>>
                            <label class="form-check-label" for="inlineRadio1">Aktif</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="edit_data_jabatan" value="T" <?php
                                                                                                            echo $row->edit_data_jabatan == 'T' ? "checked" : "";
                                                                                                            ?>>
                            <label class="form-check-label" for="inlineRadio2">Tidak aktif</label>
                          </div>
                        </td>
                      </div>
                    </div>
                  </tr>

                  <tr>
                    <td colspan="4">

                      <div class="row">
                        <div class="col">
                          <label class="pr-2">Potongan</label><br>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="potongan" value="Y" <?php
                                                                                                    echo $row->potongan == 'Y' ? "checked" : "";
                                                                                                    ?>>
                            <label class="form-check-label" for="inlineRadio1">Aktif</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="potongan" value="T" <?php
                                                                                                    echo $row->potongan == 'T' ? "checked" : "";
                                                                                                    ?>>
                            <label class="form-check-label" for="inlineRadio2">Tidak aktif</label>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>

                  

                  <tr>

                    <div class="row">
                      <div class="col">
                        <td>

                          <label class="pr-2">Potongan PU</label><br>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="potongan_pu" value="Y" <?php
                                                                                                      echo $row->potongan_pu == 'Y' ? "checked" : "";
                                                                                                      ?>>
                            <label class="form-check-label" for="inlineRadio1">Aktif</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="potongan_pu" value="T" <?php
                                                                                                      echo $row->potongan_pu == 'T' ? "checked" : "";
                                                                                                      ?>>
                            <label class="form-check-label" for="inlineRadio2">Tidak aktif</label>
                          </div>
                        </td>
                        <td>

                          <label>Tambah Potongan PU</label><br>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="add_potongan_pu" value="Y" <?php
                                                                                                          echo $row->add_potongan_pu == 'Y' ? "checked" : "";
                                                                                                          ?>>
                            <label class="form-check-label" for="inlineRadio1">Aktif</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="add_potongan_pu" value="T" <?php
                                                                                                          echo $row->add_potongan_pu == 'T' ? "checked" : "";
                                                                                                          ?>>
                            <label class="form-check-label" for="inlineRadio2">Tidak aktif</label>
                          </div>
                        </td>
                        <td>

                          <label>Edit Potongan PU</label><br>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="edit_potongan_pu" value="Y" <?php
                                                                                                            echo $row->edit_potongan_pu == 'Y' ? "checked" : "";
                                                                                                            ?>>
                            <label class="form-check-label" for="inlineRadio1">Aktif</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="edit_potongan_pu" value="T" <?php
                                                                                                            echo $row->edit_potongan_pu == 'T' ? "checked" : "";
                                                                                                            ?>>
                            <label class="form-check-label" for="inlineRadio2">Tidak aktif</label>
                          </div>
                        </td>
                      </div>
                    </div>
                  </tr>


                  <tr>
                    <div class="row">
                      <div class="col">
                        <td>
                          <label class="pr-2">Proses Gaji Pegawai</label><br>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="proses_gaji_pegawai" value="Y" <?php
                                                                                                              echo $row->proses_gaji_pegawai == 'Y' ? "checked" : "";
                                                                                                              ?>>
                            <label class="form-check-label" for="inlineRadio1">Aktif</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="proses_gaji_pegawai" value="T" <?php
                                                                                                              echo $row->proses_gaji_pegawai == 'T' ? "checked" : "";
                                                                                                              ?>>
                            <label class="form-check-label" for="inlineRadio2">Tidak aktif</label>
                          </div>
                        </td>
                        <td>
                          <label>Proses Gaji Pegawai</label><br>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="add_proses_gaji_pegawai" value="Y" <?php
                                                                                                                  echo $row->add_proses_gaji_pegawai == 'Y' ? "checked" : "";
                                                                                                                  ?>>
                            <label class="form-check-label" for="inlineRadio1">Aktif</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="add_proses_gaji_pegawai" value="T" <?php
                                                                                                                  echo $row->add_proses_gaji_pegawai == 'T' ? "checked" : "";
                                                                                                                  ?>>
                            <label class="form-check-label" for="inlineRadio2">Tidak aktif</label>
                          </div>
                        </td>
                        <td>
                          <label>export Proses Gaji Pegawai</label><br>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="export_proses_gaji_pegawai" value="Y" <?php
                                                                                                                      echo $row->export_proses_gaji_pegawai == 'Y' ? "checked" : "";
                                                                                                                      ?>>
                            <label class="form-check-label" for="inlineRadio1">Aktif</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="export_proses_gaji_pegawai" value="T" <?php
                                                                                                                      echo $row->export_proses_gaji_pegawai == 'T' ? "checked" : "";
                                                                                                                      ?>>
                            <label class="form-check-label" for="inlineRadio2">Tidak aktif</label>
                          </div>
                        </td>
                      </div>
                    </div>
                  </tr>

                  <tr>
                    <div class="row">
                      <div class="col">
                        <td>
                          <label class="pr-2">User</label><br>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="user" value="Y" <?php
                                                                                                echo $row->user == 'Y' ? "checked" : "";
                                                                                                ?>>
                            <label class="form-check-label" for="inlineRadio1">Aktif</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="user" value="T" <?php
                                                                                                echo $row->user == 'T' ? "checked" : "";
                                                                                                ?>>
                            <label class="form-check-label" for="inlineRadio2">Tidak aktif</label>
                          </div>
                        </td>
                        <td>
                          <label>Tambah User</label><br>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="add_user" value="Y" <?php
                                                                                                    echo $row->add_user == 'Y' ? "checked" : "";
                                                                                                    ?>>
                            <label class="form-check-label" for="inlineRadio1">Aktif</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="add_user" value="T" <?php
                                                                                                    echo $row->add_user == 'T' ? "checked" : "";
                                                                                                    ?>>
                            <label class="form-check-label" for="inlineRadio2">Tidak aktif</label>
                          </div>
                        </td>
                        <td>
                          <label>Edit User</label><br>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="edit_user" value="Y" <?php
                                                                                                    echo $row->edit_user == 'Y' ? "checked" : "";
                                                                                                    ?>>
                            <label class="form-check-label" for="inlineRadio1">Aktif</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="edit_user" value="T" <?php
                                                                                                    echo $row->edit_user == 'T' ? "checked" : "";
                                                                                                    ?>>
                            <label class="form-check-label" for="inlineRadio2">Tidak aktif</label>
                          </div>
                        </td>
                      </div>
                    </div>
                  </tr>
                </tbody>
              </table>
              <br>

            <?php } ?>

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