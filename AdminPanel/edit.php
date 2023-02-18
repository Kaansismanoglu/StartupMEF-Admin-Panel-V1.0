<?php
$sayfa = "Panel Kullanıcı Ayarları";
include("inc/vt.php");
?>
<?php
include("ds/userds.php");
?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>StartupMEF | Panel</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <script type="text/javascript" src="../js/sweetalert2.all.min.js"></script>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <?php
        include("inc/head.php");
        ?>
        <?php
        include("inc/sidebar.php");
        ?>

        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <?php
            include("inc/title.php");
            ?>

            <?php

            if ($_GET) {

                $id = (int)$_GET["id"];
                $sor = $baglanti->prepare("SELECT * FROM kullanici WHERE id=:id");
                $sor->execute(array(":id" => $id));
                $row = $sor->fetch(PDO::FETCH_ASSOC);
            }

                $hata = "";
                $foto = "";
                if ($_POST["kadi"] != "" && $_POST["email"] != "" && $_POST["yetki"] != "") {

                    if ($_FILES["foto"]["name"] != "") {
                        if ($_FILES["foto"]["error"] != 0) {
                            $hata = 'Dosya Yüklenirken Bir Hata Oluştu';
                        } else if (file_exists('../AdminPanel/dist/img/ekipfoto/' . strtolower($_FILES["foto"]['name']))) {
                            $hata = 'Aynı Dosyadan Mevcut';
                        } else if ($_FILES["foto"]["size"] > (1024 * 1024 * 2)) { // 2097152 B (byte), 2MB (megabyte) ediyor
                            $hata = 'Dosya Boyutu 2 MB Büyük Olmaz';
                        } else if (!in_array($_FILES["foto"]["type"], ["image/png", "image/jpeg"])) {
                            $hata = 'Hata Dosya Türü png ya da jpeg Olmalı';
                        } else {
                            copy($_FILES["foto"]["tmp_name"], '../AdminPanel/dist/img/ekipfoto/' . strtolower($_FILES["foto"]["name"]));
                            unlink('../AdminPanel/dist/img/ekipfoto/' . $row["foto"]);
                            $foto = strtolower($_FILES["foto"]["name"]);
                        }
                        if ($hata != "") {
                            echo "<script> Swal.fire({position: 'top-end', icon: 'error', title: '$hata', showConfirmButton: false, timer: 1500})</script>";
                        }
                    } else {
                        $foto = $row["foto"];
                    }
                    if($_POST["kadi"] != "" && $_POST["email"] != "" && $hata == "") {
                        $guncellesorgu = $baglanti->prepare("UPDATE kullanici SET kadi=:kadi, advesoyad=:advesoyad, yetki=:yetki, email=:email, profilfoto=:profilfoto, aktif=:aktif WHERE id=:id");
                        $guncelle = $guncellesorgu->execute([
                            'kadi' => $_POST['kadi'],
                            'advesoyad' => $_POST['adsoyad'],
                            'yetki' => $_POST['yetki'],
                            'profilfoto' => $foto,
                            'email' => $_POST['email'],
                            'aktif' => $_POST['aktif'],
                            'id' => $id
                        ]);
                        if ($guncelle) {
                            echo "<script> Swal.fire({position: 'top-end', icon: 'success', title: 'Güncelleme Başarılı', showConfirmButton: false, timer: 1500}).then((value)=>{
                    if(value.isConfirmed){window.location.href='../panelusersettings.php'}})</script>";
                        } 
                    }
                }
            
            ?>
            <!-- ADD Modal -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Kullanıcı Ekleme</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Kullanıcı Adı</label>
                            <input type="text" name="kadi" class="form-control" id="exampleInputEmail1" value="<?php echo $row["kadi"] ?>">
                        </div>
                        <div class="form-group">
                            <label>Yetki</label>
                            <select type="text" name="yetki" class="form-control" value="<?php echo $row["yetki"] ?>">
                                <OPTION SELECTED><?php echo $row["yetki"] ?>
                                <OPTION> 7
                                <OPTION> 6
                                <OPTION> 5
                                <OPTION> 4
                                <OPTION> 3
                                <OPTION> 2
                                <OPTION> 1
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Ad ve Soyad</label>
                            <input type="text" name="adsoyad" class="form-control" value="<?php echo $row["advesoyad"] ?>">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control" id="exampleInputEmail1" value="<?php echo $row["email"] ?>">
                        </div>
                        <div class="form-group">
                            <img width="90px" src="../AdminPanel/dist/img/ekipfoto/<?php echo $row["profilfoto"] ?>">
                            <label for="exampleInputFile">Profil Fotoğrafı</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input name="foto" type="file" class="form-control-file" value="<?php echo $row["profilfoto"] ?>">
                                </div>
                            </div>
                            </div>
                            <div class="form-group">
                                <label>Aktiflik</label>
                                <select type="text" name="aktif" class="form-control" value="<?php echo $row["aktif"] ?>">
                                    <OPTION SELECTED><?php echo $row["aktif"] ?>
                                    <OPTION> 1
                                    <OPTION> 0
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Tamamlandı</button>
                        <a class="btn btn-danger" href="panelusersettings.php">İptal</a>
                    </div>
                </form>
            </div>
            <!--END EDIT USER MODAL-->

        </div>
        <?php
        include("inc/footer.php");
        ?>
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>

    </div>

    <!-- /.control-sidebar -->
    <!-- AdminPanel/wrapper -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="plugins/jszip/jszip.min.js"></script>
    <script src="plugins/pdfmake/pdfmake.min.js"></script>
    <script src="plugins/pdfmake/vfs_fonts.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="inc/js/demo.js"></script>

</body>

</html>