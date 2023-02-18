<?php
include("inc/vt.php");
?>
<?php
include("ds/userds.php");
?>
            <?php
            if ($_GET) {
                   
                $tablo=$_GET["tablo"];
                $id = (int)$_GET["id"];

                $sorgu=$baglanti->prepare("DELETE FROM $tablo WHERE id=:id");
                $sonuc=$sorgu->execute(["id"=>$id]);
                if($sonuc){
                    header("Location: panelusersettings.php");
                }
                }
            ?>