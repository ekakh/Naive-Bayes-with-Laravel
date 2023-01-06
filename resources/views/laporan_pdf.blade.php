<!DOCTYPE html>
<html>

<head>
    <title>Laporan Penerima Bantuan Sosial</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


</head>

<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;
        }
    </style>
    <center>
        <h4>Laporan Penerima Bantuan Sosial</h4>
        <h5>Tahun <?= $_GET['tahun_awal'] . " s/d " . $_GET['tahun_akhir']; ?></h5>
    </center>

    <table class='table table-bordered table-sm'>
        <thead>
            <tr>
                <th style="text-align: center;">No</th>
                <th style="text-align: center;">NIK</th>
                <th style="text-align: center;">Nama</th>
                <th style="text-align: center;">Dusun</th>
                <th style="text-align: center;">RT</th>
                <th style="text-align: center;">RW</th>
                <th style="text-align: center;">Status</th>
            </tr>
        </thead>
        <?php
        $no = 1;
        foreach ($data_cari as $hasil_pencarian) { ?>
            <tbody>
                <tr>
                    <td style="text-align: center;"><?= $no++; ?></td>
                    <td style="text-align: center;"><?= $hasil_pencarian->nik; ?></td>
                    <td><?= $hasil_pencarian->nama_kk; ?></td>
                    <td style="text-align: center;"><?= $hasil_pencarian->dusun; ?></td>
                    <td style="text-align: center;"><?= $hasil_pencarian->rt; ?></td>
                    <td style="text-align: center;"><?= $hasil_pencarian->rw; ?></td>
                    <td style="text-align: center;"><?= $hasil_pencarian->status; ?></td>
                </tr>
            </tbody>
        <?php  } ?>
    </table>

</body>

</html>