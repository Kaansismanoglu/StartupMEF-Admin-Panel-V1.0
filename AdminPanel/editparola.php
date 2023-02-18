<?php
$sayfa = "Panel Kullanıcı Ayarları";
include("inc/vt.php");
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
            <!-- EDIT PAROLA Modal -->
            <?php
            if ($_GET) {

                $id = (int)$_GET["id"];
                $sor = $baglanti->prepare("SELECT * FROM kullanici WHERE id=:id");
                $sor->execute(array(":id" => $id));
                $row = $sor->fetch(PDO::FETCH_ASSOC);
            }


            if ($_POST) {

                if ($_POST["kadi"] != "" && $_POST["parola"] != "" && $_POST["parolatekrar"] == $_POST["parola"]) {
                    $eklesorgu = $baglanti->prepare("UPDATE kullanici SET kadi=:kadi, parola=:parola WHERE id=:id");
                    $ekle = $eklesorgu->execute([
                        'kadi' => $_POST['kadi'],
                        'parola' => md5(md5("2014" . $_POST['parola'] . "it")),
                        'id' => $_GET['id']
                    ]);
                    if ($ekle) {
                        echo "<script> Swal.fire({position: 'top-end', icon: 'success', title: 'Parola Güncelleme Başarılı', showConfirmButton: false, timer: 1500}).then((value)=>{
                if(value.isConfirmed){window.location.href='../panelusersettings.php'}})</script>";
                    } else {
                        echo "<script> Swal.fire({position: 'top-end', icon: 'error', title: 'Parola Güncelleme Başarısız', showConfirmButton: false, timer: 1500})</script>";
                    }
                } else {
                    echo "<script> Swal.fire({position: 'top-end', icon: 'error', title: 'Eksik Veri', showConfirmButton: false, timer: 1500})</script>";
                }
            }

            ?>
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
                            <label for="exampleInputEmail">Parola</label>
                            <input type="text" name="parola" class="form-control" id="exampleInputEmail" value="<?php echo $row["parola"] ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail">Parola(Tekrar Giriniz)</label>
                            <input type="text" name="parolatekrar" class="form-control" id="exampleInputEmail">
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