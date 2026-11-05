<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang</title>
</head>
<body>
<?php
    //membuat variabel
    $nama_barang = "sepatu";
    $harga = 50000;
    $jumlah = 10;
    $total = $harga * $jumlah;
?> 
<h1><?php echo "nama barang adalah" .$nama_barang; ?></h1>
<h1><?php print "harganya adalah" .$harga; ?></h1>
<h1><?= "jumlahnya adalah" .$jumlah; ?></h1>
<h1><?= "total harga semuanya adalah" .$total; ?></h1>
    
</body>
</html>