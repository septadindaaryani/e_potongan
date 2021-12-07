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

    <h1 class="h3 mb-2 text-gray-800"> Edit Data Jabatan</h1>
    <div class="card shadow mb-4 border-left-primary">
      <div class="card-header py-3">

        <div class="modal-body">
          <form method="post" action="<?= base_url('Jabatan/update'); ?>">
            <?php foreach ($datajabatan as $row) { ?>
              <div class="row">
                <div class="col-md-6">
                  <b>Jabatan </b>
                  <input type="hidden" name="id_jabatan" class="form-control" value="<?= $row->id_jabatan ?>"></input>
                  <input type="text" name="nm_jabatan" class="form-control" value="<?= $row->nm_jabatan ?>" placeholder="Jabatan"></input>
                  <?= form_error('jabatan', ' <small class="text-danger">', '</small>'); ?>
                </div>

              </div>
              <br>

              <a href="<?= base_url('jabatan') ?>" type="reset" class="btn btn-danger">
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