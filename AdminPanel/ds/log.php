<?php
				include("../AdminPanel/inc/vt.php");

				    
					$sorgu = $baglanti->prepare('SELECT kadi, yetki, advesoyad, profilfoto FROM kullanici WHERE aktif=1');
					$sorgu->execute();
					while ($sonuc = $sorgu->fetch()) {
						error_reporting(0);
						if (($_COOKIE["cerez"] == md5("aa" . $sonuc["kadi"] . "bb"))||(($_COOKIE["nocerez"] == md5("aa" . $sonuc["kadi"] . "bb")))){
							$_SESSION["Oturum"] = "5561";
							$_SESSION["kadi"] = $sonuc["kadi"];
							$_SESSION["yetki"] = $sonuc["yetki"];
                            $_SESSION["adsoyad"] = $sonuc["advesoyad"];
							$_SESSION["profilfoto"] = $sonuc["profilfoto"];

						}
					}
?>
