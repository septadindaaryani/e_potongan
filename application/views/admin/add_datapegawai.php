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

    <h1 class="h3 mb-2 text-gray-800"> Tambah Data Pegawai</h1>
    <div class="card shadow mb-4 border-left-primary">
      <div class="card-header py-3">

        <div class="modal-body">
          <form method="post" action="<?= base_url('Datapegawai/tambah_aksi'); ?>">

            <div class="row">
              <div class="col-md-6">
                <b>Nip </b>
                <input type="number" name="nip" id="nip" class="form-control" placeholder="Nip" required value="<?php if (isset($nip)) {
                 echo $nip;
                 } ?>"></input>
                <span id="nip_error" class="text-danger"><?php echo form_error('nip'); ?></span>
              </div>

              <div class="col-md-6">
                <b>Nama Pegawai </b>
                <input type="text" name="nm_pegawai" class="form-control" placeholder=" Nama Pegawai" id="nm_pegawai" required></input>
                <?= form_error('nm_pegawai', ' <small class="text-danger">', '</small>'); ?>
                <span id="nm_pegawai_error" class="text-danger"></span>
              </div>
            </div>
            <br>

            <div class="row">
              <div class="col">
                <div class="form-group">
                  <label>Jenis Kelamin</label>
                  <select name="jenis_kelamin" class="form-control" id="jenis_kelamin" required>
                    <option value="">--Pilih Jenis Kelamin--</option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                  <?= form_error('jenis_kelamin', ' <small class="text-danger">', '</small>'); ?>
                  <span id="jenis_kelamin_error" class="text-danger"></span>
                </div>
              </div>

              <div class="col-md-3">
                <div class="form-group">
                  <b> Tahun Masuk </b>
                  <input type="number" name="thn_masuk" class="form-control mt-2 " placeholder="  Tahun Masuk " id="thn_masuk" required></input>
                  <?= form_error('thn_masuk', ' <small class="text-danger">', '</small>'); ?>
                  <span id="thn_masuk_error" class="text-danger"></span>
                </div>
              </div>


              <div class="col-md-3">
                <div class="form-group">
                  <label>Jenis Golongan</label>
                  <select name="jenis_golongan" class="form-control" id="jenis_golongan" required>
                    <option value="" selected>--Jenis Golongan--</option>
                    <?php foreach ($data_golongan->result() as $row) : ?>
                      <option value="<?php echo $row->id_golongan ?>"><?php echo $row->nm_golongan ?></option>
                    <?php endforeach; ?>
                  </select>
                  <?= form_error('jenis_golongan', ' <small class="text-danger">', '</small>'); ?>
                  <span id="jenis_golongan_error" class="text-danger"></span>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label>Jabatan</label>
                  <select name="id_jabatan" class="form-control" id="id_jabatan" required>
                    <option value="" selected>--Jabatan--</option>
                    <?php foreach ($data_jabatan->result() as $row) : ?>
                      <option value="<?php echo $row->id_jabatan ?>"><?php echo $row->nm_jabatan ?></option>
                    <?php endforeach; ?>
                  </select>
                  <?= form_error('id_jabatan', ' <small class="text-danger">', '</small>'); ?>
                  <span id="id_jabatan_error" class="text-danger"></span>
                </div>
              </div>
            </div>
            <br>

            <div class="row">
              <div class="col-md-3">
                <b> No Hp </b>
                <input type="number" name="no_hp" class="form-control" placeholder=" No HP " id="no_hp" required></input>
                <?= form_error('no_hp', ' <small class="text-danger">', '</small>'); ?>
                <span id="no_hp_error" class="text-danger"></span>
              </div>

              <div class="col-3">
                <b> No Rekening Bank BRI</b>
                <input type="number" name="no_rekening" class="form-control" id="rek" placeholder=" No Rekening Bank BRI" required></input>
                <?= form_error('no_rekening', ' <small class="text-danger">', '</small>'); ?>
                <span id="no_rekening_error" class="text-danger"></span>
              </div>

              <div class="col-md-3">
                <b> Jumlah Jiwa </b>
                <input type="number" name="jumlah_jiwa" class="form-control" id="jumlah_jiwa" placeholder=" Jumlah Jiwa " required></input>
                <?= form_error('jumlah_jiwa', ' <small class="text-danger">', '</small>'); ?>
                <span id="jumlah_jiwa_error" class="text-danger"></span>
              </div>

              <div class="col-3">
                <b> Jumlah Anak </b>
                <input type="number" name="jumlah_anak" class="form-control" id="jumlah_anak" placeholder=" Jumlah Anak " required></input>
                <?= form_error('jumlah_anak', ' <small class="text-danger">', '</small>'); ?>
                <span id="jumlah_anak_error" class="text-danger"></span>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label>Status</label>
                  <select name="status" class="form-control" id="status" required>
                    <option value="" selected>--Pilih Status--</option>
                    <option value="Sudah Menikah">Sudah Menikah</option>
                    <option value="Belum Menikah">Belum Menikah</option>
                  </select>
                  <?= form_error('status', ' <small class="text-danger">', '</small>'); ?>
                  <span id="status_error" class="text-danger"></span>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Masa Kerja</label>
                  <select name="masa_kerja" id="masa_kerja" class="form-control" required>
                    <option value="" selected>--Pilih Masa Kerja--</option>
                    <option value="0">0 Tahun</option>
                    <option value="1">1 Tahun</option>
                    <option value="2">2 Tahun</option>
                    <option value="3">3 Tahun</option>
                    <option value="4">4 Tahun</option>
                    <option value="5">5 Tahun</option>
                    <option value="6">6 Tahun</option>
                    <option value="7">7 Tahun</option>
                    <option value="8">8 Tahun</option>
                    <option value="9">9 Tahun</option>
                    <option value="10">10 Tahun</option>
                    <option value="11">11 Tahun</option>
                    <option value="12">12 Tahun</option>
                    <option value="13">13 Tahun</option>
                    <option value="14">14 Tahun</option>
                    <option value="15">15 Tahun</option>
                    <option value="16">16 Tahun</option>
                    <option value="17">17 Tahun</option>
                    <option value="18">18 Tahun</option>
                    <option value="19">19 Tahun</option>
                    <option value="20">20 Tahun</option>
                    <option value="21">21 Tahun</option>
                    <option value="22">22 Tahun</option>
                    <option value="23">23 Tahun</option>
                    <option value="24">24 Tahun</option>
                    <option value="25">25 Tahun</option>
                    <option value="26">26 Tahun</option>
                    <option value="27">27 Tahun</option>
                    <option value="28">28 Tahun</option>
                    <option value="29">29 Tahun</option>
                    <option value="30">30 Tahun</option>
                    <option value="31">31 Tahun</option>
                    <option value="32">32 Tahun</option>
                  </select>
                  <?= form_error('masa_kerja', ' <small class="text-danger">', '</small>'); ?>
                  <span id="masa_kerja_error" class="text-danger"></span>
                </div>
              </div>

              <div class="col-4">
                <b> Nominal Gaji Kotor </b>
                <input type="number" name="nominal_gaji" class="form-control mt-2" id="nominal_gaji" placeholder=" Nominal Gaji Kotor" required></input>
                <?= form_error('nominal_gaji', ' <small class="text-danger">', '</small>'); ?>
                <span id="nominal_gaji_error" class="text-danger"></span>
              </div>



            </div>
            <br>




            <a href="<?= base_url('datapegawai') ?>" type="reset" class="btn btn-danger">
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
  $("#nip").blur(function() {
    var nip = {
      nip: $("#nip").val()
    };
    $.ajax({
      type: "POST",
      url: "<?php echo base_url(); ?>datapegawai/validasi_nip",
      data: nip,
      success: function(msg) {
        $('#nip_error').html(msg);
        if (!$.trim(msg)) {
          //alert("What follows is blank: " + msg);
        } else {
          //alert("What follows is not blank: " + msg);
          $('#nip').focus();
          //document.getElementById("setuju").checked = false;
        }
      }
    });
  });


  $("#nm_pegawai").blur(function(event) {
    if ($('#nip').val() == "") {
      $("#nip").focus();
      return;
    }
    var field = $("#nm_pegawai");
    $.ajax({
      type: "POST",
      url: "<?php echo base_url(); ?>datapegawai/validasi_data",
      data: {field: field.val()},
      success: function(msg) {
        $('#nm_pegawai_error').html(msg.replace('<p>','').replace('</p>',''));
        if (!$.trim(msg)) {
          //alert("What follows is blank: " + msg);
        } else {
          //alert("What follows is not blank: " + msg);
          $('#nm_pegawai').focus();
          //document.getElementById("setuju").checked = false;
        }
      }
    });

  });

    $("#jenis_kelamin").blur(function(event) {

      if ($("#nm_pegawai").val() == "") {
        $("#nm_pegawai").focus();
        return;
      }

      var field = $("#jenis_kelamin");
      $.ajax({
        type: "POST",
        url: "<?php echo base_url(); ?>datapegawai/validasi_data",
        data: {field: field.val()},
        success: function(msg) {

          $('#jenis_kelamin_error').html(msg.replace('<p>','').replace('</p>',''));
          if (!$.trim(msg)) {
            //alert("What follows is blank: " + msg);
          } else {
            //alert("What follows is not blank: " + msg);
            $('#jenis_kelamin').focus();
            //document.getElementById("setuju").checked = false;
          }
        }
      });

  });

  $("#thn_masuk").blur(function(event) {

    if ($("#jenis_kelamin").val() == "") {
      $("#jenis_kelamin").focus();
      return;
    }

    var field = $("#thn_masuk");
    $.ajax({
      type: "POST",
      url: "<?php echo base_url(); ?>datapegawai/validasi_data",
      data: {field: field.val()},
      success: function(msg) {

        $('#thn_masuk_error').html(msg.replace('<p>','').replace('</p>',''));
        if (!$.trim(msg)) {
          //alert("What follows is blank: " + msg);
        } else {
          //alert("What follows is not blank: " + msg);
          $('#thn_masuk').focus();
          //document.getElementById("setuju").checked = false;
        }
      }
    });
  });

  $("#jenis_golongan").blur(function(event) {

    if ($("#thn_masuk").val() == "") {
      $("#thn_masuk").focus();
      return;
    }

    var field = $("#jenis_golongan");
    $.ajax({
      type: "POST",
      url: "<?php echo base_url(); ?>datapegawai/validasi_data",
      data: {field: field.val()},
      success: function(msg) {

        $('#jenis_golongan_error').html(msg.replace('<p>','').replace('</p>',''));
        if (!$.trim(msg)) {
          //alert("What follows is blank: " + msg);
        } else {
          //alert("What follows is not blank: " + msg);
          $('#jenis_golongan').focus();
          //document.getElementById("setuju").checked = false;
        }
      }
    });
  });

  $("#id_jabatan").blur(function(event) {

    if ($("#jenis_golongan").val() == "") {
      $("#jenis_golongan").focus();
      return;
    }

    var field = $("#id_jabatan");
    $.ajax({
      type: "POST",
      url: "<?php echo base_url(); ?>datapegawai/validasi_data",
      data: {field: field.val()},
      success: function(msg) {

        $('#id_jabatan_error').html(msg.replace('<p>','').replace('</p>',''));
        if (!$.trim(msg)) {
          //alert("What follows is blank: " + msg);
        } else {
          //alert("What follows is not blank: " + msg);
          $('#id_jabatan').focus();
          //document.getElementById("setuju").checked = false;
        }
      }
    });
  });

  $("#no_hp").blur(function(event) {

    if ($("#id_jabatan").val() == "") {
      $("#id_jabatan").focus();
      return;
    }

    var field = $("#no_hp");
    $.ajax({
      type: "POST",
      url: "<?php echo base_url(); ?>datapegawai/validasi_data",
      data: {field: field.val()},
      success: function(msg) {
        $('#no_hp_error').html(msg.replace('<p>','').replace('</p>',''));
        if (!$.trim(msg)) {
          //alert("What follows is blank: " + msg);
        } else {
          //alert("What follows is not blank: " + msg);
          $('#no_hp').focus();
          //document.getElementById("setuju").checked = false;
        }
      }
    });
  });

  $("#rek").blur(function(event) {

    if ($("#no_hp").val() == "") {
      $("#no_hp").focus();
      return;
    }

    var field = $("#rek");
    $.ajax({
      type: "POST",
      url: "<?php echo base_url(); ?>datapegawai/validasi_data",
      data: {field: field.val()},
      success: function(msg) {
        $('#no_rekening_error').html(msg.replace('<p>','').replace('</p>',''));
        if (!$.trim(msg)) {
          //alert("What follows is blank: " + msg);
        } else {
          //alert("What follows is not blank: " + msg);
          $('#rek').focus();
          //document.getElementById("setuju").checked = false;
        }
      }
    });
  });

  $("#jumlah_jiwa").blur(function(event) {

    if ($("#rek").val() == "") {
      $("#rek").focus();
      return;
    }

    var field = $("#jumlah_jiwa");
    $.ajax({
      type: "POST",
      url: "<?php echo base_url(); ?>datapegawai/validasi_data",
      data: {field: field.val()},
      success: function(msg) {
        $('#jumlah_jiwa_error').html(msg.replace('<p>','').replace('</p>',''));
        if (!$.trim(msg)) {
          //alert("What follows is blank: " + msg);
        } else {
          //alert("What follows is not blank: " + msg);
          $('#jumlah_jiwa').focus();
          //document.getElementById("setuju").checked = false;
        }
      }
    });
  });

  $("#jumlah_anak").blur(function(event) {

    if ($("#jumlah_jiwa").val() == "") {
      $("#jumlah_jiwa").focus();
      return;
    }

    var field = $("#jumlah_anak");
    $.ajax({
      type: "POST",
      url: "<?php echo base_url(); ?>datapegawai/validasi_data",
      data: {field: field.val()},
      success: function(msg) {
        $('#jumlah_anak_error').html(msg.replace('<p>','').replace('</p>',''));
        if (!$.trim(msg)) {
          //alert("What follows is blank: " + msg);
        } else {
          //alert("What follows is not blank: " + msg);
          $('#jumlah_anak').focus();
          //document.getElementById("setuju").checked = false;
        }
      }
    });
  });

  $("#status").blur(function(event) {

    if ($("#jumlah_anak").val() == "") {
      $("#jumlah_anak").focus();
      return;
    }

    var field = $("#status");
    $.ajax({
      type: "POST",
      url: "<?php echo base_url(); ?>datapegawai/validasi_data",
      data: {field: field.val()},
      success: function(msg) {
        $('#status_error').html(msg.replace('<p>','').replace('</p>',''));
        if (!$.trim(msg)) {
          //alert("What follows is blank: " + msg);
        } else {
          //alert("What follows is not blank: " + msg);
          $('#status').focus();
          //document.getElementById("setuju").checked = false;
        }
      }
    });
  });

  $("#masa_kerja").blur(function(event) {

    if ($("#status").val() == "") {
      $("#status").focus();
      return;
    }

    var field = $("#masa_kerja");
    $.ajax({
      type: "POST",
      url: "<?php echo base_url(); ?>datapegawai/validasi_data",
      data: {field: field.val()},
      success: function(msg) {
        $('#masa_kerja_error').html(msg.replace('<p>','').replace('</p>',''));
        if (!$.trim(msg)) {
          //alert("What follows is blank: " + msg);
        } else {
          //alert("What follows is not blank: " + msg);
          $('#masa_kerja').focus();
          //document.getElementById("setuju").checked = false;
        }
      }
    });
  });

  $("#nominal_gaji").blur(function(event) {

    if ($("#masa_kerja").val() == "") {
      $("#masa_kerja").focus();
      return;
    }

    var field = $("#nominal_gaji");
    $.ajax({
      type: "POST",
      url: "<?php echo base_url(); ?>datapegawai/validasi_data",
      data: {field: field.val()},
      success: function(msg) {
        $('#nominal_gaji_error').html(msg.replace('<p>','').replace('</p>',''));
        if (!$.trim(msg)) {
          //alert("What follows is blank: " + msg);
        } else {
          //alert("What follows is not blank: " + msg);
          $('#nominal_gaji').focus();
          //document.getElementById("setuju").checked = false;
        }
      }
    });
  });

</script>
