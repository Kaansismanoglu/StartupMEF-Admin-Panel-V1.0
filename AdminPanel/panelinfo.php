<?php
$sayfa = "Panel Bilgileri";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>StartupMEF | Panel</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="./plugins/fontawesome-free/css/all.min.css">
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

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->

            <?php
            include("inc/title.php");
            ?>

            <!-- Main content -->
            <section class="content">
                <!-- /.card--->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Yönetim Paneli Yetki Dağılımı</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <th style="width: 250px">Veri Tabanındaki Karşılığı</th>
                                    <th>Yetki</th>
                                    <th style="width: 500px;">Oranı</th>
                                    <th style="width: 170px">Kaç Kişi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>Admin</td>
                                    <td>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-danger" style="width: 7.5%"></div>
                                        </div>
                                    </td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Yönetim Kurulu</td>
                                    <td>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-warning" style="width: 10%"></div>
                                        </div>
                                    </td>
                                    <td>4</td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>Organizasyon</td>
                                    <td>
                                        <div class="progress progress-xs progress-striped active">
                                            <div class="progress-bar bg-primary" style="width: 47.5%"></div>
                                        </div>
                                    </td>
                                    <td>19</td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td>Sponsorluk</td>
                                    <td>
                                        <div class="progress progress-xs progress-striped active">
                                            <div class="progress-bar bg-success" style="width: 12.5%"></div>
                                        </div>
                                    </td>
                                    <td>5</td>
                                </tr>
                                <tr>
                                    <td>5.</td>
                                    <td>Sosyal Medya ve Tasarım</td>
                                    <td>
                                        <div class="progress progress-xs progress-striped active">
                                            <div class="progress-bar bg-important" style="width: 10%"></div>
                                        </div>
                                    </td>
                                    <td>4</td>
                                </tr>
                                <tr>
                                    <td>6.</td>
                                    <td>İçerik</td>
                                    <td>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-warning" style="width: 10%"></div>
                                        </div>
                                    </td>
                                    <td>4</td>
                                </tr>
                                <tr>
                                    <td>7.</td>
                                    <td>Diğer</td>
                                    <td>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-success" style="width: 2.5%"></div>
                                        </div>
                                    </td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td><b>Toplam:</b> 7</td>
                                    <td></td>
                                    <td></td>
                                    <td><b>Toplam Kaç Kişi:</b> 40</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--Ortak Sayfalar-->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Ortak Sayfalar</h3>
                    </div>
                    <!-- ./card-header -->
                    <div class="card-body">
                        Aşağıda yazılmış olan bütün sayfalar, sistemde bulunan bütün kullanıcılar için ortak sayfalardır. Bütün kullanıcıların bu sayfalara girme izinleri vardır.
                        <br>
                        <b>Ana Sayfa, Profil, Mesajlar, Takvim</b>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
                <!--Kim Nerede-->

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Yetkilerin Özellikleri</h3>
                    </div>
                    <!-- ./card-header -->
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Yetki</th>
                                    <th>Görebildiği Sayfalar</th>
                                    <th>Açıklaması</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td>1</td>
                                    <td>Admin</td>
                                    <td>Hepsi</td>
                                    <td>Bu yetkiye sahip olan herkes sistem üzerinde tam yetkiye sahip olur.</td>
                                </tr>
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td>2</td>
                                    <td>Yönetim Kurulu</td>
                                    <td>Hepsi - (Admin Ayarları)</td>
                                    <td>Bu yetkiye sahip olanlar sistemde departmanlara ait bütün sayfaları görebilir.</td>
                                </tr>
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td>3</td>
                                    <td>Organizasyon</td>
                                    <td>Etkinlik Sayfaları ve Görev Takip Sayfası</td>
                                    <td>Bu yetkiye sahip olanlar sistemde Future Founders, StartHUB vb. etkinlikleri görebilirler.(Kayıtları Göremezler)</td>
                                </tr>
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td>4</td>
                                    <td>Sponsorluk</td>
                                    <td>Görev Takip Sayfası, Etkinlik Sayfaları ve Sponsorluklar Sayfası</td>
                                    <td>Bu yetkiye sahip olanlar sistemde Future Founders, StartHUB vb. etkinlikleri görebilirler.(Kayıtları Göremezler)</td>
                                </tr>
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td>5</td>
                                    <td>Sosyal Medya ve Tasarım</td>
                                    <td>Görev Takip Sayfası</td>
                                    <td>Bu yetkiye sahip olanlar sistemde sadece Görev Takip Sayfasını görebilirler.</td>
                                </tr>
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td>6</td>
                                    <td>İçerik</td>
                                    <td>Görev Takip Sayfası ve İçerik Sayfası</td>
                                    <td>Bu yetkiye sahip olanlar sistemde Görev Takip Sayfasını ve İçerik Sayfasını görebilirler.</td>
                                </tr>
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td>7</td>
                                    <td>Diğer</td>
                                    <td>Görev Takip Sayfası</td>
                                    <td>Bu yetkiye sahip olanlar sistemde sadece Görev Takip Sayfasını görebilirler.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
        </div>
        <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
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
    <!-- AdminLTE App -->
    <script src="./dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="./inc/js/demo.js"></script>
</body>

</html>