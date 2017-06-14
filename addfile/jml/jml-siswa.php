<?php
include '../koneksi.php';
$siswa = $koneksi->prepare("SELECT COUNT(nis) FROM tb_siswa");
$siswa->execute();
$data = $siswa->fetch(PDO::FETCH_NUM);
echo $data[0];
 ?>
