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
    <?php $no = 1;
    foreach ($gaji_pegawai->result() as $row) { ?>
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
        <div style="font-size: 10pt;text-align:center;padding-left:50px;">
            <h3> DAFTAR PERINCIAN GAJI</h3>
        </div>
        <?php
        $potongan_pu = $this->db->query("select *, month(date) as bulan, year(date) as tahun from tb_potongan_pu where id_pegawai = '$row->id_pegawai' and month(date) = month('$row->date') and year(date) = year('$row->date')");
        $row_1 = $potongan_pu->row()

        ?>

        <table id="table">
            <tr>
                <td width="5">Bulan</td>
                <td width="5">:</td>
                <td><?= $row->bulan  ?> - <?= $row->tahun ?></td>
            </tr>
            <tr>
                <td>Nomor</td>
                <td>:</td>
                <td><?= $no++ ?></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?= $row->nm_pegawai ?></td>
            </tr>
        </table>
        <table id="table">
            <tbody>


                <tr>
                    <td colspan="3">Gaji Kotor</td>
                    <td>Rp.</td>
                    <td><?= number_format($row->gaji_pokok) ?></td>
                </tr>
                <tr>
                    <td colspan="2">POTONGAN-POTONGAN</td>
                    <td colspan="3"></td>
                </tr>
                <tr>
                    <td width="5">1</td>
                    <td width="70%">Korpri</td>
                    <td width="5">:</td>
                    <td width="5">Rp.</td>
                    <td><?= $potongan_pu->num_rows() != null ? $row_1->korpri : '0' ?></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Koprasi</td>
                    <td>:</td>
                    <td>Rp.</td>
                    <td><?= $potongan_pu->num_rows() != null ? $row_1->koprasi : '0' ?></td>

                </tr>
                <tr>
                    <td>3</td>
                    <td>AP. Koprasi</td>
                    <td>:</td>
                    <td>Rp.</td>
                    <td><?= $potongan_pu->num_rows() != null ? $row_1->ap_koprasi : '0' ?></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Bank Sumsel</td>
                    <td>:</td>
                    <td>Rp.</td>
                    <td><?= $potongan_pu->num_rows() != null ? $row_1->bank_sumsel : '0' ?></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Bank Sumsel Syariah</td>
                    <td>:</td>
                    <td>Rp.</td>
                    <td><?= $potongan_pu->num_rows() != null ? $row_1->bank_sumsel_syariah     : '0' ?></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Bank BRI Cab</td>
                    <td>:</td>
                    <td>Rp.</td>
                    <td><?= $potongan_pu->num_rows() != null ? $row_1->bank_bri_cab : '0' ?></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Bank BRI Kota</td>
                    <td>:</td>
                    <td>Rp.</td>
                    <td><?= $potongan_pu->num_rows() != null ? $row_1->bank_bri_kota : '0' ?></td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>DW</td>
                    <td>:</td>
                    <td>Rp.</td>
                    <td><?= $potongan_pu->num_rows() != null ? $row_1->dw : '0' ?></td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Kop. Karya Mulya</td>
                    <td>:</td>
                    <td>Rp.</td>
                    <td><?= $potongan_pu->num_rows() != null ? $row_1->kop_karya_mulya : '0' ?></td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>BPR</td>
                    <td>:</td>
                    <td>Rp.</td>
                    <td><?= $potongan_pu->num_rows() != null ? $row_1->bpr : '0' ?></td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>Bazda</td>
                    <td>:</td>
                    <td>Rp.</td>
                    <td><?= $potongan_pu->num_rows() != null ? $row_1->bazda : '0' ?></td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>K.Iuran BPJS</td>
                    <td>:</td>
                    <td>Rp.</td>
                    <td><?= $potongan_pu->num_rows() != null ? $row_1->k_iuran_bpjs : '0' ?></td>
                </tr>
                <tr>
                    <td colspan="2">Jumlah Potongan</td>
                    <td></td>
                    <td>Rp.</td>
                    <td><?= number_format($row->total_potongan_pu) ?></td>
                </tr>
                <tr>
                    <td colspan="3">Gaji Bersih</td>
                    <td>Rp.</td>
                    <td><?= number_format($row->gaji_pokok + $row->total_potongan_pu) ?></td>
                </tr>
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
    <?php } ?>
</body>

</html>