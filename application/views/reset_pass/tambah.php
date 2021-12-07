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

    <h1 class="h3 mb-2 text-gray-800"> Ubah Password</h1>
    <div class="card shadow mb-4 border-left-primary">
      <div class="card-header py-3">

        <div class="modal-body">
          <form method="post" action="<?= base_url('reset_pass/update'); ?>">


            <div class="row">
              <div class="col-sm-2">
                <div class="box">
                  <p style="font-family: Nunito, sans-serif;font-size: 16px;margin-bottom: 15px;margin-top: 15px;">Password*</p>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="box">
                  <input type="password" name="password" id="password" class="border rounded form-control-lg d-xl-flex" type="password" style="margin-top: 5px;margin-bottom: 5px;width: 100%;font-family: Nunito, sans-serif;" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,15}" title="Harus mengandung setidaknya 1 angka, 1 karakter huruf besar dan huruf kecil, minimal 6 digit dan maksimal 15 digit" maxlength="15">
                  <span id="pass_error" class="error"><?php echo form_error('password'); ?></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-2">
                <div class="box">
                  <p style="font-family: Nunito, sans-serif;font-size: 16px;margin-bottom: 15px;margin-top: 15px;">Ulangi-Password*</p>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="box">
                  <input type="password" name="cpassword" id="cpassword" class="border rounded form-control-lg d-xl-flex" type="password" style="margin-top: 5px;margin-bottom: 5px;width: 100%;font-family: Nunito, sans-serif;" required maxlength="15">
                  <span id="cpass_error" class="error"><?php if (isset($validasi_password)) {
                                                          echo $validasi_password;
                                                        } ?></span>
                </div>
              </div>
            </div>
            <br>

            <a href="<?= base_url('dashboard') ?>" type="reset" class="btn btn-danger">
              <i class="fas fa-reply"></i> Back </a>
            <button type="submit" class="btn btn-success">
              <i class=" fa fa-save"></i> Save </button>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>