<?php
$sayfa = "Panel Kullanıcı Ayarları";
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
    <link rel="stylesheet" href="./plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="./plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="./plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="./plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="./dist/css/adminlte.min.css">
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

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Panel Kullanıcı Listesi</h3>
                                </div>
                                <div class="card-header">
                                    <a type="button" href="add.php" class="btn btn-primary">
                                        Kullanıcı Ekle
                                    </a>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Kullanıcı Adı</th>
                                                <th>Parola</th>
                                                <th>Ad ve Soyad</th>
                                                <th>Yetki</th>
                                                <th>Email</th>
                                                <th>Parola Güncelle</th>
                                                <th>Düzenle</th>
                                                <th>Sil</th>
                                                <th>Profil Fotoğrafı</th>
                                                <th>Aktif</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($personnellist as $person) { ?>
                                                <tr>
                                                    <td><?= $person->id ?></td>
                                                    <td><?= $person->kadi ?></td>
                                                    <td><?= $person->parola ?></td>
                                                    <td><?= $person->advesoyad ?></td>
                                                    <td><?= $person->yetki ?></td>
                                                    <td><?= $person->email ?></td>
                                                    <td class="text-center"><a href="editparola.php?id=<?php echo $person->id; ?>">
                                                            <span class="fa fa-key fa-2x"></span>
                                                        </a></td>
                                                    <td class="text-center"><a href="edit.php?id=<?php echo $person->id; ?>">
                                                            <span class="fa fa-edit fa-2x"></span>
                                                        </a></td>
                                                    <td class="text-center"><a href="#" data-toggle="modal" data-target="#silModal<?php echo $person->id; ?>">
                                                            <span class="fa fa-trash fa-2x"></span>
                                                        </a></td>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="silModal<?php echo $person->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Çıkış</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Silmek istediğinizden emin misiniz?
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">İptal</button>
                                                                    <a href="delete.php?id=<?= $person->id;?>&tablo=kullanici" class="btn btn-danger">Evet</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <td><?= $person->profilfoto ?></td>
                                                    <td><?= $person->aktif ?></td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
                </div>
            </section>
            <!-- /.content -->
        </div>
        <?php
        include("inc/footer.php");
        ?>
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="./plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="./plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="./plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="./plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="./plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="./plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="./plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="./plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="./plugins/jszip/jszip.min.js"></script>
    <script src="./plugins/pdfmake/pdfmake.min.js"></script>
    <script src="./plugins/pdfmake/vfs_fonts.js"></script>
    <script src="./plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="./plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="./plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- AdminLTE App -->
    <script src="./dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="./inc/js/demo.js"></script>
    <!-- Page specific script -->
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": true,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
</body>

</html>