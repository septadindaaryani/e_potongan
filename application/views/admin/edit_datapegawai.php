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

    <h1 class="h3 mb-2 text-gray-800"> Edit Data Pegawai</h1>
    <div class="card shadow mb-4 border-left-primary">
      <div class="card-header py-3">

        <div class="modal-body">

          <?php foreach ($datapegawai as $datapegawai) { ?>
            <form action="<?= base_url() . 'Datapegawai/update'; ?>" method="post">

              <div class="row">
                <div class="col-md-6">
                  <b>Nip </b>
                  <input type="hidden" name="id_pegawai" class="form-control" value="<?= $datapegawai->id_pegawai ?>">
                  <input type="text" name="nip" class="form-control" placeholder="Nip" value="<?= $datapegawai->nip ?>" readonly></input>
                </div>

                <div class="col-md-6">
                  <b>Nama Pegawai </b>
                  <input type="text" name="nm_pegawai" class="form-control" placeholder=" Nama Pegawai" value="<?= $datapegawai->nm_pegawai ?>"></input>
                </div>
              </div>
              <br>

              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-control">
                      <option value="">--Pilih Jenis Kelamin--</option>
                      <option <?php if ($datapegawai->jenis_kelamin == 'Laki-Laki') {
                                echo "selected";
                              } ?> value="Laki-Laki">Laki-Laki</option>
                      <option <?php if ($datapegawai->jenis_kelamin == 'Perempuan') {
                                echo "selected";
                              } ?> value="Perempuan">Perempuan</option>
                    </select>
                  </div>
                </div>



                <div class="col-md-3">
                  <div class="form-group">
                    <label>Jenis Golongan</label>
                    <select name="jenis_golongan" class="form-control">
                      <option value="">--Pilih Jenis Golongan--</option>
                      <?php foreach ($data_golongan->result() as $row) : ?>
                        <option <?php if ($datapegawai->id_golongan == $row->id_golongan) {
                                  echo "selected";
                                } ?> value="<?= $row->id_golongan ?>"><?= $row->nm_golongan ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="form-group">
                    <label>Jabatan</label>
                    <select name="id_jabatan" class="form-control">
                      <option value="">--Pilih Jabatan--</option>
                      <?php foreach ($data_jabatan->result() as $row) : ?>
                        <option <?php if ($datapegawai->id_jabatan == $row->id_jabatan) {
                                  echo "selected";
                                } ?> value="<?= $row->id_jabatan ?>"><?= $row->nm_jabatan ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <b> Tahun Masuk </b>
                    <input type="number" name="thn_masuk" class="form-control mt-2 " placeholder="  Tahun Masuk " required value="<?= $datapegawai->thn_masuk ?>"></input>
                    <?= form_error('thn_masuk', ' <small class="text-danger">', '</small>'); ?>
                  </div>
                </div>

              </div>

              <br>

              <div class="row">
                <div class="col-md-3">
                  <b> No Hp </b>
                  <input type="number" name="no_hp" class="form-control" placeholder=" No HP " value="<?= $datapegawai->no_hp ?>"></input>
                </div>

                <div class="col-3">
                  <b> No Rekening BRI </b>
                  <input type="number" name="no_rekening" class="form-control" placeholder=" No Rekening Bank BRI" value="<?= $datapegawai->no_rekening ?>"></input>
                </div>

                <div class="col-md-3">
                  <b> Jumlah Jiwa </b>
                  <input type="number" name="jumlah_jiwa" class="form-control" value="<?= $datapegawai->jumlah_jiwa ?>" placeholder=" Jumlah Jiwa " required></input>
                  <?= form_error('jumlah_jiwa', ' <small class="text-danger">', '</small>'); ?>
                </div>

                <div class="col-3">
                  <b> Jumlah Anak </b>
                  <input type="number" name="jumlah_anak" class="form-control" placeholder=" Jumlah Anak " value="<?= $datapegawai->jumlah_anak ?>"></input>
                  <?= form_error('jumlah_anak', ' <small class="text-danger">', '</small>'); ?>
                </div>
              </div>

              <br>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Status</label>
                    <select name="status" class="form-control" required>
                      <option value="" selected>--Pilih Status--</option>
                      <option <?php if ($datapegawai->status == 'Sudah Menikah') {
                                echo "selected";
                              } ?> value="Sudah Menikah">Sudah Menikah</option>
                      <option <?php if ($datapegawai->status == 'Belum Menikah') {
                                echo "selected";
                              } ?> value="Belum Menikah">Belum Menikah</option>
                    </select>
                    <?= form_error('status', ' <small class="text-danger">', '</small>'); ?>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Masa Kerja</label>
                    <select name="masa_kerja" class="form-control" required>
                      <option value="" selected>--Pilih Masa Kerja--</option>
                      <option <?php if ($datapegawai->masa_kerja == 0) {
                                echo "selected";
                              } ?> value="0">0 Tahun</option>
                      <option <?php if ($datapegawai->masa_kerja == 1) {
                                echo "selected";
                              } ?> value="1">1 Tahun</option>
                      <option <?php if ($datapegawai->masa_kerja == 2) {
                                echo "selected";
                              } ?> value="2">2 Tahun</option>
                      <option <?php if ($datapegawai->masa_kerja == 3) {
                                echo "selected";
                              } ?> value="3">3 Tahun</option>
                      <option <?php if ($datapegawai->masa_kerja == 4) {
                                echo "selected";
                              } ?> value="4">4 Tahun</option>
                      <option <?php if ($datapegawai->masa_kerja == 5) {
                                echo "selected";
                              } ?> value="5">5 Tahun</option>
                      <option <?php if ($datapegawai->masa_kerja == 6) {
                                echo "selected";
                              } ?> value="6">6 Tahun</option>
                      <option <?php if ($datapegawai->masa_kerja == 7) {
                                echo "selected";
                              } ?> value="7">7 Tahun</option>
                      <option <?php if ($datapegawai->masa_kerja == 8) {
                                echo "selected";
                              } ?> value="8">8 Tahun</option>
                      <option <?php if ($datapegawai->masa_kerja == 9) {
                                echo "selected";
                              } ?> value="9">9 Tahun</option>
                      <option <?php if ($datapegawai->masa_kerja == 10) {
                                echo "selected";
                              } ?> value="10">10 Tahun</option>
                      <option <?php if ($datapegawai->masa_kerja == 11) {
                                echo "selected";
                              } ?> value="11">11 Tahun</option>
                      <option <?php if ($datapegawai->masa_kerja == 12) {
                                echo "selected";
                              } ?> value="12">12 Tahun</option>
                      <option <?php if ($datapegawai->masa_kerja == 13) {
                                echo "selected";
                              } ?> value="13">13 Tahun</option>
                      <option <?php if ($datapegawai->masa_kerja == 14) {
                                echo "selected";
                              } ?> value="14">14 Tahun</option>
                      <option <?php if ($datapegawai->masa_kerja == 15) {
                                echo "selected";
                              } ?> value="15">15 Tahun</option>
                      <option <?php if ($datapegawai->masa_kerja == 16) {
                                echo "selected";
                              } ?> value="16">16 Tahun</option>
                      <option <?php if ($datapegawai->masa_kerja == 17) {
                                echo "selected";
                              } ?> value="17">17 Tahun</option>
                      <option <?php if ($datapegawai->masa_kerja == 18) {
                                echo "selected";
                              } ?> value="18">18 Tahun</option>
                      <option <?php if ($datapegawai->masa_kerja == 19) {
                                echo "selected";
                              } ?> value="19">19 Tahun</option>
                      <option <?php if ($datapegawai->masa_kerja == 20) {
                                echo "selected";
                              } ?> value="20">20 Tahun</option>
                      <option <?php if ($datapegawai->masa_kerja == 21) {
                                echo "selected";
                              } ?> value="21">21 Tahun</option>
                      <option <?php if ($datapegawai->masa_kerja == 22) {
                                echo "selected";
                              } ?> value="22">22 Tahun</option>
                      <option <?php if ($datapegawai->masa_kerja == 23) {
                                echo "selected";
                              } ?> value="23">23 Tahun</option>
                      <option <?php if ($datapegawai->masa_kerja == 24) {
                                echo "selected";
                              } ?> value="24">24 Tahun</option>
                      <option <?php if ($datapegawai->masa_kerja == 25) {
                                echo "selected";
                              } ?> value="25">25 Tahun</option>
                      <option <?php if ($datapegawai->masa_kerja == 26) {
                                echo "selected";
                              } ?> value="26">26 Tahun</option>
                      <option <?php if ($datapegawai->masa_kerja == 27) {
                                echo "selected";
                              } ?> value="27">27 Tahun</option>
                      <option <?php if ($datapegawai->masa_kerja == 28) {
                                echo "selected";
                              } ?> value="28">28 Tahun</option>
                      <option <?php if ($datapegawai->masa_kerja == 29) {
                                echo "selected";
                              } ?> value="29">29 Tahun</option>
                      <option <?php if ($datapegawai->masa_kerja == 30) {
                                echo "selected";
                              } ?> value="30">30 Tahun</option>
                      <option <?php if ($datapegawai->masa_kerja == 31) {
                                echo "selected";
                              } ?> value="31">31 Tahun</option>
                      <option <?php if ($datapegawai->masa_kerja == 32) {
                                echo "selected";
                              } ?> value="32">32 Tahun</option>
                    </select>
                    <?= form_error('id_jabatan', ' <small class="text-danger">', '</small>'); ?>
                  </div>
                </div>
                <div class="col-4">
                  <b> Nominal Gaji Kotor</b>
                  <input type="number" name="nominal_gaji" value="<?= $datapegawai->nominal_gaji ?>" class="form-control mt-2" placeholder=" Nominal Gaji Kotor"></input>
                  <?= form_error('nominal_gaji', ' <small class="text-danger">', '</small>'); ?>
                </div>

              

              </div>
              <br>



              <a href="<?= base_url('datapegawai') ?>" type="reset" class="btn btn-danger">
                <i class="fas fa-reply"></i> Back </a>

              <button type="submit" class="btn btn-success">
                <i class=" fa fa-save"></i> Save </button>
        </div>
        </form>
        </table>
      <?php        } ?>

      </div>
    </div>
  </div>
</div>
</div>
