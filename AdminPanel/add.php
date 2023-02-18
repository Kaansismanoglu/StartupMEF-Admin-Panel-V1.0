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
            if ($_POST) {

                $hata = "";
                $foto = "";

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
                        copy($_FILES["foto"]["tmp_name"], '../AdminPanel/dist/img/ekipfoto/'.strtolower($_FILES["foto"]["name"]));
                        
                        $eklesorgu = $baglanti->prepare("INSERT INTO kullanici SET kadi=:kadi, parola=:parola, advesoyad=:advesoyad, yetki=:yetki, email=:email, profilfoto=:profilfoto, aktif=:aktif");
                        $ekle = $eklesorgu->execute([
                            'kadi' => $_POST['kullaniciadi'],
                            'parola' => md5(md5("2014" .$_POST['parola']. "it")),
                            'advesoyad' => $_POST['adsoyad'],
                            'yetki' => $_POST['yetki'],
                            'profilfoto' => strtolower($_FILES["foto"]['name']),
                            'email' => $_POST['email'],
                            'aktif' => $_POST['aktif']
                        ]);

                        if ($ekle) {
                            echo "<script> Swal.fire({position: 'top-end', icon: 'success', title: 'Kayıt Başarılı', showConfirmButton: false, timer: 1500}).then((value)=>{
                        if(value.isConfirmed){window.location.href='panelusersettings.php'}})</script>";
                        
                        }
                    }
                    if ($hata != "") {
                        echo "<script> Swal.fire({position: 'top-end', icon: 'error', title: '$hata', showConfirmButton: false, timer: 1500})</script>";
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
                            <input type="text" name="kullaniciadi" class="form-control" id="exampleInputEmail1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail">Parola (Girilen Paroları Ayrı Bir Kısımda Not Alınız)</label>
                            <input type="text" name="parola" class="form-control" id="exampleInputEmail">
                        </div>
                        <div class="form-group">
                            <label>Yetki</label>
                            <select type="text" name="yetki" class="form-control">
                                <OPTION SELECTED>
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
                            <input type="text" name="adsoyad" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control" id="exampleInputEmail1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Profil Fotoğrafı</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input name="foto" type="file" class="form-control-file">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Aktiflik</label>
                                <select type="text" name="aktif" class="form-control">
                                    <OPTION SELECTED>
                                    <OPTION> 1
                                    <OPTION> 0
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <input type="submit" value="Ekle" class="btn btn-primary">
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