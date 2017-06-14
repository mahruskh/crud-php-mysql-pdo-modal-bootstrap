<?php
include '../koneksi.php';
$jk="Perempuan";
$perempuan = $koneksi->prepare("SELECT COUNT(nis) FROM tb_siswa WHERE jk=:jk");
$perempuan->bindParam(':jk',$jk);
$perempuan->execute();
$data = $perempuan->fetch(PDO::FETCH_NUM);
echo $data[0];
 ?>
