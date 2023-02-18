<?php
$sorgu=$baglanti->prepare('SELECT * FROM ffiletisim');
$sorgu->execute();
$personnellist=$sorgu->fetchAll(PDO::FETCH_OBJ);
?>