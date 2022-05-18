<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>PHP Dasar</title>
</head>
<body>
 <h1>Belajar PHP Dasar</h1>
 <?php
 echo "Hello World";
 ?>
 <h1>Menggunakan Variable</h1>
<?php
$nim = "312010169";
$nama = 'Wayis Al Qorni TS';
echo "NIM : " . $nim . "<br>";
echo "Nama : $nama";
?>
<h1>operator</h1>
<?php
$gaji = 1000000;
$pajak = 0.1;
$thp = $gaji - ($gaji*$pajak);
echo "Gaji sebelum pajak = Rp. $gaji <br>";
echo "Gaji yang dibawa pulang = Rp. $thp";
?>
<h1>kondisi IF</h1>
<?php
$nama_hari = date("l");
if ($nama_hari == "Sunday") {
 echo "Minggu";
} elseif ($nama_hari == "Monday") {
 echo "Senin";
} else {
 echo "Selasa";
}
?>
<h1>kondisi switch</h1>
<?php
$nama_hari = date("l");
switch ($nama_hari) {
 case "Sunday":
 echo "Minggu";
 break;
 case "Monday":
 echo "Senin";
 break;
 case "Tuesday":
    echo "Selasa";
    break;
    default:
    echo "Sabtu";
   ?>

</body>
</html>



