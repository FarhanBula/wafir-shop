<?php 
include 'config.php';
$id=$_POST['id'];
$nm_pembeli=$_POST['nm_pembeli'];
$tanggal=$_POST['tgl'];
$nama=$_POST['nama'];


$harga=$_POST['harga'];
$jumlah=$_POST['jumlah'];


mysql_query("update barang_laku set nm_pembeli='$nm_pembeli', tanggal='$tanggal', nama='$nama', harga='$harga', jumlah='$jumlah' where id='$id'");
header("location:barang_laku.php");

?>