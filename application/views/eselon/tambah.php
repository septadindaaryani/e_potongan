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

    <h1 class="h3 mb-2 text-gray-800"> Tambah Data Eselon</h1>
    <div class="card shadow mb-4 border-left-primary">
      <div class="card-header py-3">

        <div class="modal-body">
          <form method="post" action="<?= base_url('Eselon/create'); ?>">

            <div class="row">
              <div class="col-md-6">
                <b>Eselon </b>
                <input type="text" name="nm_eselon" id="nm_eselon" class="form-control" placeholder="Eselon" required></input>
                <span id="nm_eselon_error" class="text-danger"><?php echo form_error('nm_eselon'); ?></span>
              </div>
              <div class="col-md-6">
                <b>Besar Tunjangan </b>
                <input type="text" name="bsr_tunj" id="bsr_tunj" class="form-control" placeholder="Besar Tunjangan" required></input>
                <span id="bsr_tunj" class="text-danger"><?php echo form_error('bsr_tunj'); ?></span>
              </div>
            </div>
            <br>

            <a href="<?= base_url('eselon') ?>" type="reset" class="btn btn-danger">
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
  $("#nm_eselon").blur(function() {
    var nm_eselon = {
      nm_eselon: $("#nm_eselon").val()
    };
    $.ajax({
      type: "POST",
      url: "<?php echo base_url(); ?>eselon/validasi_eselon",
      data: nm_eselon,
      success: function(msg) {
        // console.log(msg);
        $('#nm_eselon_error').html(msg);
        if (!$.trim(msg)) {
          //alert("What follows is blank: " + msg);
        } else {
          //alert("What follows is not blank: " + msg);
          $('#nm_eselon').focus();
          //document.getElementById("setuju").checked = false;
        }
      }
    });
  });
</script>
