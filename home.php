<?php
$datapaket = array (
   array("Paket A", "cuci kering biasa",40000),
   array("Paket B ", "Cuci kering dan lipat",45000),
   array("Paket C", "Cuci kering, setrika, dan lipat",50000),
   array("Paket D","Cuci kering, setrika, pengharum,lipat",55000)
   );
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>

<ul>
  <li><a href="home.php">Home</a></li>
  <li><a href="">Transaksi</a></li>
  <li style="float:right"><a class="" href="index.php">LogOut</a></li>
</ul>
<img src="home1.png" alt="home" class="homecenter">
<div class ="container">
<h2>Daftar Paket Laundry</h2>
<div class="a1-container">
   <p><?php echo $datapaket[0][0]."<br> "."<br>".$datapaket[0][1]."<br>"."<br>"."Rp ".$datapaket[0][2]."<br>";?>
</p>
</div>
<div class="a2-container">
   <p><?php echo $datapaket[1][0]."<br> "."<br>".$datapaket[1][1]."<br>"."<br>"."Rp ".$datapaket[1][2]."<br>";?>
</p>
</div>

<div class="a3-container">
   <p><?php echo $datapaket[2][0]."<br> "."<br>".$datapaket[2][1]."<br>"."<br>"."Rp ".$datapaket[2][2]."<br>";?>
</p>
</div>
<div class="a4-container">
   <p><?php echo $datapaket[3][0]."<br> "."<br>".$datapaket[3][1]."<br>"."<br>"."Rp ".$datapaket[3][2]."<br>";?>
</p>
</div>
</div>
<div class="button1">
   <p><a href ="transaksi.php?paket=<?= $datapaket[0][0]?>&harga=<?= $datapaket[0][2]?>">PILIH PAKET</a>
</div>
<div class="button2">
   <p><a href ="transaksi.php?paket=<?= $datapaket[1][0]?>&harga=<?= $datapaket[1][2]?>">PILIH PAKET</a>
</div>
<div class="button3">
   <p><a href ="transaksi.php?paket=<?= $datapaket[2][0]?>&harga=<?= $datapaket[2][2]?>">PILIH PAKET</a>
</div>
<div class="button4">
   <p><a href ="transaksi.php?paket=<?= $datapaket[3][0]?>&harga=<?= $datapaket[3][2]?>">PILIH PAKET</a>
</div>
</body>
<div class="footer"><p align="center">Copyright ©Adhim Maulana</a></p>
</div>
</html>
