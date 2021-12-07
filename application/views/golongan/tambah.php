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

    <h1 class="h3 mb-2 text-gray-800"> Tambah Data Golongan</h1>
    <div class="card shadow mb-4 border-left-primary">
      <div class="card-header py-3">

        <div class="modal-body">
          <form method="post" action="<?= base_url('Golongan/create'); ?>">

            <div class="row">
              <div class="col-md-6">
                <b>Pangkat/Golongan </b>
                <input type="text" name="nm_golongan" id="nm_golongan" class="form-control" placeholder="Pangkat/Golongan" required></input>
                <span id="nm_golongan_error" class="text-danger"><?php echo form_error('nm_golongan'); ?></span>
              </div>
            </div>
            <br>

            <a href="<?= base_url('golongan') ?>" type="reset" class="btn btn-danger">
              <i class="fas fa-reply"></i> Back </a>

            <button type="submit" class="btn btn-success">
              <i class=" fa fa-save"></i> Save </button>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  $("#nm_golongan").blur(function() {
    var nm_golongan = {
      nm_golongan: $("#nm_golongan").val()
    };
    $.ajax({
      type: "POST",
      url: "<?php echo base_url(); ?>golongan/validasi_golongan",
      data: nm_golongan,
      success: function(msg) {
        $('#nm_golongan_error').html(msg);
        if (!$.trim(msg)) {
          //alert("What follows is blank: " + msg);
        } else {
          //alert("What follows is not blank: " + msg);
          $('#nm_golongan').focus();
          //document.getElementById("setuju").checked = false;
        }
      }
    });
  });
</script>