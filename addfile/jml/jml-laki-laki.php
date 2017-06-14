<?php
include '../koneksi.php';
$jk="Laki - Laki";
$laki = $koneksi->prepare("SELECT COUNT(nis) FROM tb_siswa WHERE jk=:jk");
$laki->bindParam(':jk',$jk);
$laki->execute();
$data = $laki->fetch(PDO::FETCH_NUM);
echo $data[0];
?>
