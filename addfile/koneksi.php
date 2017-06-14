<?php
try {
    $koneksi = New PDO ("mysql:host=localhost;dbname=db_datasiswa","root","");
} catch (Exception $e) {
    echo $e->getMessage();
}
?>
