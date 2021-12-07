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

    <h1 class="h3 mb-2 text-gray-800"> Tambah Potongan PU</h1>
    <div class="card shadow mb-4 border-left-primary">
      <div class="card-header py-3">

        <div class="modal-body">
          <form method="post" action="<?= base_url('potongan_pu/create'); ?>">

            <div class="row">
              <div class="col-md-3">
                <b>Pegawai</b>
                <select name="id_pegawai" class="form-control">
                  <option value="" selected>--Pilih Pegawai--</option>
                  <?php foreach ($data_pegawai->result() as $row) : ?>
                    <option value="<?php echo $row->id_pegawai ?>"><?php echo $row->nm_pegawai ?></option>
                  <?php endforeach; ?>
                </select>
                <?= form_error('id_pegawai', ' <small class="text-danger">', '</small>'); ?>
              </div>
              <div class="col-md-3">
                <b> Tanggal </b>
                <input type="date" name="date" class="form-control"></input>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col">
                <b> Korpri </b>
                <input type="number" name="korpri" class="form-control" placeholder=" Korpri "></input>
              </div>

              <div class="col-md-3">
                <b> Koprasi </b>
                <input type="number" name="koprasi" class="form-control" placeholder=" Koprasi "></input>
              </div>

              <div class="col-md-3">
                <b> Ap Koprasi </b>
                <input type="number" name="ap_koprasi" class="form-control" placeholder=" Ap Koprasi "></input>
              </div>

              <div class="col-3">
                <b>Bank Sumsel </b>
                <input type="number" name="bank_sumsel" class="form-control" placeholder=" Bank Sumsel "></input>
              </div>
            </div>
            <br>

            <div class="row">
              <div class="col">
                <b>Bank Sumsel Syariah </b>
                <input type="number" name="bank_sumsel_syariah" class="form-control" placeholder=" Bank Sumsel Syariah "></input>
              </div>

              <div class="col-md-3">
                <b>Bank Bri Cab </b>
                <input type="number" name="bank_bri_cab" class="form-control" placeholder=" Bank Bri Cab "></input>
              </div>

              <div class="col-md-3">
                <b>Bank Bri Kota </b>
                <input type="number" name="bank_bri_kota" class="form-control" placeholder=" Bank Bri Kota "></input>
              </div>

              <div class="col-md-3">
                <b>Dw </b>
                <input type="number" name="dw" class="form-control" placeholder=" Dw "></input>
              </div>
            </div>
            <br>

            <div class="row">
              <div class="col-md-3">
                <b>Kop Karya Mulya </b>
                <input type="number" name="kop_karya_mulya" class="form-control" placeholder=" Kop Karya Mulya "></input>
              </div>

              <div class="col-md-3">
                <b>Bpr </b>
                <input type="number" name="bpr" class="form-control" placeholder=" Bpr "></input>
              </div>

              <div class="col-md-3">
                <b>Bazda </b>
                <input type="number" name="bazda" class="form-control" placeholder=" Bazda "></input>
              </div>
              <div class="col-md-3">
                <b>K Iuaran BPJS </b>
                <input type="number" name="k_iuran_bpjs" class="form-control" placeholder=" K Iuran BPJS "></input>
              </div>


            </div>
            <br>




            <a href="<?= base_url('potongan_pu') ?>" type="reset" class="btn btn-danger">
              <i class="fas fa-reply"></i> Back </a>
            <button type="submit" class="btn btn-success">
              <i class=" fa fa-save"></i> Save </button>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>
