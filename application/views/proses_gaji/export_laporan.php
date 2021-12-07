<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title_pdf; ?></title>
    <style>
        #table {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #table td,
        #table th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #table tr:hover {
            background-color: #ddd;
        }

        #table th {
            padding-top: 10px;
            padding-bottom: 10px;
            text-align: left;
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>

<body>
        <header>
            <table width="100%">
                <tr>
                    <td align="center">
                        <img align="left" src="<?= base_url('assets/img/bin.png') ?>" width="70px" height="50px"><br>
                        <font style="font-size: 12pt;font-weight: bold "> DINAS PEKERJAAN UMUM BINA MARGA </font><br>
                        <font style="font-size: 12pt;font-weight: bold "><u>KABUPATEN OGAN KOMERING ULU</u></font><br>
                        <font style="font-size: 10pt;padding-left:60px;">Jln. A. Yani KM. 7 Kemelak Baturaja Timur</font><br><br>
                    </td>
                </tr>
            </table>
        </header>
        
        <table id="example" border="1" class="table table-dark table-striped" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th class="text-center">No</th>
            <th class="text-center">Pegawai</th>
            <th class="text-center">Bulan/Tahun</th>
            <th class="text-center">Gaji Kotor</th>
            <th class="text-center">Total Potongan PU</th>
            <th class="text-center">Gaji Bersih</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $No = 1;
          foreach ($proses_gaji as $row) : ?>

            <tr>
              <td class="text-center"><?= $No++; ?></td>
              <td class="text-center"><?php echo ucfirst($row->nm_pegawai) ?></td>
              <td class="text-center"><?php echo ($row->bulan) ?>-<?php echo ($row->tahun) ?></td>
              <td class="text-center"><?php echo number_format($row->gaji_pokok) ?></td>
              <td class="text-center"><?php echo number_format($row->total_potongan_pu) ?></td>
              <td class="text-center"><?php echo number_format($row->gaji_bersih) ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>

      </table>


        <table width="100%" style="font-size: 12pt; padding-top:35px;">
            <tr style="font-size: 12pt;">
                <td align="center" width="200">BENDAHARA GAJI</td>
            </tr><br>
        </table>
        <table width="100%" style="font-size: 12pt; padding-top:10px;">
            <tr style="font-size: 12pt;">
                <td align="center" width="200"><u>SURATMI</u></td>
            </tr>
            <tr>
                <td align="center" width="200">NIP. 196310151985122002</td>
            </tr>
        </table>
</body>

</html>