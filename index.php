<!DOCTYPE html>
<html lang="tr">

<head>
	<title>StartupMEF Yönetim Paneli</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
</head>

<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<?php
				session_start();
				include("AdminPanel/inc/vt.php");

				if (isset($_SESSION['Oturum']) && ($_SESSION["Oturum"] = "5561")) {
					header("location: AdminPanel/mainpage.php");
				} else if (isset($_COOKIE["cerez"])) {
					$sorgu = $baglanti->prepare('SELECT kadi, yetki FROM kullanici WHERE aktif=1');
					$sorgu->execute();
					while ($sonuc = $sorgu->fetch()) {
						if ($_COOKIE["cerez"] == md5("aa" . $sonuc["kadi"] . "bb")) {
							$_SESSION["Oturum"] = "5561";
							$_SESSION["kadi"] = $sonuc["kadi"];
							$_SESSION["yetki"] = $sonuc["yetki"];
							header("location: AdminPanel/mainpage.php");

						}
					}
				}

				if ($_POST) {
					$kadi = $_POST["txtuser"];
					$parola = $_POST["txtParola"];
				}


				?>
				<form class="login100-form validate-form" method="post" action="index.php">
					<span class="login100-form-title p-b-48">
						<img src="images//105499249_305650883958701_6277941166099520452_n Medium.jpeg" alt="startupmeflogo">
					</span>
					<span class="login100-form-title p-b-26">
						Welcome
					</span>
					<div class="wrap-input100 validate-input" data-validate="Enter username">
						<input class="input100" type="text" name="txtuser" value="<?= @$kadi ?>">
						<span class="focus-input100" data-placeholder="Username"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="txtParola">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>
					<div>
						<div>
							<input type="checkbox" name="hatirla"/>
							Remember me
						</div>
					</div>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								LOGIN
							</button>
						</div>
					</div>
				</form>
				<script type="text/javascript" src="js/sweetalert2.all.min.js"></script>
				<?php
				if ($_POST) {
					error_reporting(0);
					$sorgu = $baglanti->prepare('SELECT parola, yetki, kadi FROM kullanici WHERE kadi=:kadi AND aktif=1');
					$sorgu->execute(["kadi" => htmlspecialchars($kadi)]);
					$sonuc = $sorgu->fetch();
					if ((md5(md5("2014" . $parola . "it")) == $sonuc["parola"]) && ($kadi == $sonuc["kadi"])) {
						$_SESSION["Oturum"] = "5561";
						$_SESSION["kadi"] = $kadi;
						$_SESSION["yetki"] = $sonuc["yetki"];
						if (isset($_POST["hatirla"])) {
							setcookie("cerez", md5("aa" . $kadi . "bb"), time() + (60 * 60 * 24 * 7), "/AdminPanel");
						}else{
							setcookie("nocerez", md5("aa" . $kadi . "bb"), time() + (60 * 60 * 24 * 7), "/AdminPanel");
						}

						header("location:AdminPanel/mainpage.php");
					} else {
						echo "<script> Swal.fire('Hata', 'Kullanıcı adı ya da parola hatalı!')</script>";

					}
				}
				?>


				<div class="text-center p-t-115">
					<a class="txt1" href="#" style="margin-right: 30px;">
						I forgot my password
					</a>

					<a class="txt2" href="#">
						Sign Up
					</a>
				</div>
				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>

</html>