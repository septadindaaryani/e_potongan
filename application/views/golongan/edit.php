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

    <h1 class="h3 mb-2 text-gray-800"> Edit Data Golongan</h1>
    <div class="card shadow mb-4 border-left-primary">
      <div class="card-header py-3">

        <div class="modal-body">
          <form method="post" action="<?= base_url('Golongan/update'); ?>">
            <?php foreach ($datagolongan as $datagolongan) { ?>
              <div class="row">
                <div class="col-md-6">
                  <b>Golongan </b>
                  <input type="hidden" name="id_golongan" class="form-control" value="<?= $datagolongan->id_golongan ?>"></input>
                  <input type="text" name="nm_golongan" class="form-control" value="<?= $datagolongan->nm_golongan ?>" placeholder="Golongan"></input>
                  <?= form_error('golongan', ' <small class="text-danger">', '</small>'); ?>
                </div>
              </div>
              <br>

              <a href="<?= base_url('golongan') ?>" type="reset" class="btn btn-danger">
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