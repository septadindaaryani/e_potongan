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

    <h1 class="h3 mb-2 text-gray-800"> Edit Data Eselon</h1>
    <div class="card shadow mb-4 border-left-primary">
      <div class="card-header py-3">

        <div class="modal-body">
          <form method="post" action="<?= base_url('Eselon/update'); ?>">
            <?php foreach ($dataeselon as $dataeselon) { ?>
              <div class="row">
                <div class="col-md-6">
                  <b>Eselon </b>
                  <input type="hidden" name="id_eselon" class="form-control" value="<?= $dataeselon->id_eselon ?>"></input>
                  <input type="text" name="nm_eselon" class="form-control" value="<?= $dataeselon->nm_eselon ?>" placeholder="Nama Eselon"></input>
                  <?= form_error('nm_eselon', ' <small class="text-danger">', '</small>'); ?>
                </div>
                <div class="col-md-6">
                  <b>Besar Tunjangan </b>
                  <input type="text" name="bsr_tunj" id="bsr_tunj" class="form-control" placeholder="Besar Tunjangan" value="<?= $dataeselon->bsr_tunj ?>" required></input>
                  <?= form_error('bsr_tunj', ' <small class="text-danger">', '</small>'); ?>
                </div>
              </div>
              <br>

              <a href="<?= base_url('eselon') ?>" type="reset" class="btn btn-danger">
                <i class="fas fa-reply"></i> Back </a>

              <button type="submit" class="btn btn-success">
                <i class=" fa fa-save"></i> Save </button>
            <?php        } ?>

        </div>
        </form>
      </div>
    </div>
  </div>
</div>
