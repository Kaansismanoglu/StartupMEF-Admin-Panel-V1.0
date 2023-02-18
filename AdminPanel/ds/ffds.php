<?php
$sorgu=$baglanti->prepare('SELECT * FROM ffdata');
$sorgu->execute();
$personnellist=$sorgu->fetchAll(PDO::FETCH_OBJ);
?>