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

    <h1 class="h3 mb-2 text-gray-800"> Proses Gaji Pegawai</h1>
    <div class="card shadow mb-4 border-left-primary">
      <div class="card-header py-3">

        <div class="modal-body">
          <form method="post" action="<?= base_url('proses_gaji/create'); ?>">

            <div class="row">
              <div class="col-md-6">
                <b>Bulan</b>
                <select name="bulan" class="form-control" required>
                  <option value="" selected>--Pilih Bulan--</option>
                  <option <?php if (date('m') == '1') {
                            echo "selected";
                          } ?> value="1">Januari</option>
                  <option <?php if (date('m') == '2') {
                            echo "selected";
                          } ?> value="2">Februari</option>
                  <option <?php if (date('m') == '3') {
                            echo "selected";
                          } ?> value="3">Maret</option>
                  <option <?php if (date('m') == '4') {
                            echo "selected";
                          } ?> value="4">April</option>
                  <option <?php if (date('m') == '5') {
                            echo "selected";
                          } ?> value="5">Mei</option>
                  <option <?php if (date('m') == '6') {
                            echo "selected";
                          } ?> value="6">Juni</option>
                  <option <?php if (date('m') == '7') {
                            echo "selected";
                          } ?> value="7">Juli</option>
                  <option <?php if (date('m') == '8') {
                            echo "selected";
                          } ?> value="8">Agustus</option>
                  <option <?php if (date('m') == '9') {
                            echo "selected";
                          } ?> value="9">September</option>
                  <option <?php if (date('m') == '10') {
                            echo "selected";
                          } ?> value="10">Oktober</option>
                  <option <?php if (date('m') == '11') {
                            echo "selected";
                          } ?> value="11">November</option>
                  <option <?php if (date('m') == '12') {
                            echo "selected";
                          } ?> value="12">Desember</option>
                </select>
                <?= form_error('bulan', ' <small class="text-danger">', '</small>'); ?>
              </div>
              <div class="col-md-6">
                <b> Tahun </b>
                <input type="number" maxlength="4" name="tahun" value="<?= date('Y'); ?>" class="form-control" required></input>
              </div>
            </div>
            <br>
            <div lass="row">
              <label class="pt-20">Pilih Untuk Proses Gaji Atau Membatalkan Proses Gaji</label><br>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="proses" value="Y" checked>
                <label class="form-check-label" for="inlineRadio1">Proses</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="proses" value="T">
                <label class="form-check-label" for="inlineRadio2">Batalkan Proses</label>
              </div>
            </div><br>

            <a href="<?= base_url('proses_gaji') ?>" type="reset" class="btn btn-danger">
              <i class="fas fa-reply"></i> Back </a>

            <button type="submit" class="btn btn-success">
              <i class=" fa fa-save"></i> Proses </button>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>