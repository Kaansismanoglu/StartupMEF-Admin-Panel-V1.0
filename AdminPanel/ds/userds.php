<?php
include("../AdminPanel/inc/vt.php");
$sorgu=$baglanti->prepare('SELECT * FROM kullanici');
$sorgu->execute();
$personnellist=$sorgu->fetchAll(PDO::FETCH_OBJ);
?>

