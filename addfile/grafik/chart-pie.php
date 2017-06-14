<?php
include '../koneksi.php';

$data_jk_siswa = array();

$jk = $koneksi->prepare("SELECT  jk, COUNT(*) AS Jml_Jk  FROM tb_siswa GROUP BY jk ASC");
$jk->execute();
$jk->setFetchMode(PDO::FETCH_ASSOC);
while ($data = $jk->fetch(PDO::FETCH_ORI_NEXT)) {

          array_push($data_jk_siswa, array("Jk"=>$data['jk'],"Jml_Jk"=>$data['Jml_Jk']));
        }
      echo json_encode($data_jk_siswa);
 ?>
