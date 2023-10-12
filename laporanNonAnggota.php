<?php 
include 'koneksi.php';
$data = mysqli_query($konek ,"SELECT * FROM tamu WHERE tglkunjung BETWEEN '$_GET[tgl1]'
		AND '$_GET[tgl2]' ORDER BY tglkunjung ASC");
 ?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <style>
    .col-md-4col-md-offset-4 {
        margin-top: 20px;
    }

    body {
        background: url('img/beasiswa.jpg');
        background-size: 200px;
    }

    @media print {
        .print {
            color: blue background-color: blue;

        }

        .id {
            display: none;
        }

    }

    .print {
        border-collapse: collapse;
    }
    </style>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">


</head>
<style>

</style>
<h2>LAPORAN </h2>
<hr />
<table class="print table" style="margin-top: 50px;" border="1" align="center" width="100%">
    <tr>
        <th scope="col">NO</th>
        <th scope="col">NAMA TAMU</th>
        <th scope="col">ALAMAT</th>
        <th scope="col">INSTANSI</th>
        <th scope="col">TGL KUNJUNG</th>
        <th scope="col">TUJUAN</th>
    </tr>
    <?php 
 	$i=1;
 	while($dta = mysqli_fetch_assoc($data)) :
 	 ?>
    <tr>
        <td><?= $i ?></td>
        <td><?= $dta['namatamu'] ?></td>
        <td><?= $dta['alamat'] ?></td>
        <td><?= $dta['instansi']?></td>
        <td><?= $dta['tglkunjung']?></td>
        <td><?= $dta['tujuan']?></td>
    </tr>

    <?php $i++; ?>
    <?php endwhile; ?>
</table>
<table width="100%">
    <tr>
        <td></td>
        <td width="200px">
            <BR />
            <p>Jombang , <?= date('d/m/y') ?> <br />
                Administrator Pentium,
                <br />
                <br />
                <br />
            <p>__________________________</p>
        </td>
    </tr>
</table>
<a class="id" href="#" onclick="window.print();">CETAK</a>