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
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__wobble" src="dist/img/105499249_305650883958701_6277941166099520452_n Medium.jpeg" alt="StartupMEF Logo" height="60" width="60">
    </div>
    <?php
    $sayfa = "Ana Sayfa";
    include("inc/head.php");
    ?>
    <!-- Main Sidebar Container -->
    <?php
    include("inc/sidebar.php")
    ?>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Panel</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="../index.php">Ana Sayfa</a></li>
                <li class="breadcrumb-item active">Panel</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Info boxes -->
          <div class="row">
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box">
                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Web Sitesi Kullanımı</span>
                  <span class="info-box-number">
                    37
                  </span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-danger elevation-1"><i class="fa fa-calendar"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Etkinliğe Kalan Süre</span>
                  <span class="info-box-number">6</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up"></div>

            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-success elevation-1"><i class="fab fa-instagram"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Instagram Takipçi Sayısı</span>
                  <span class="info-box-number">2,566</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Squad Üye Sayısı</span>
                  <span class="info-box-number">1,500</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->

          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h5 class="card-title">Görevlerim</h5>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <div class="btn-group">
                      <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                        <i class="fas fa-bars"></i>
                      </button>
                      <div class="dropdown-menu dropdown-menu-right" role="menu">
                        <a href="#" class="dropdown-item">Future Founders</a>
                        <a href="#" class="dropdown-item">StartHUB</a>
                        <a href="#" class="dropdown-item">Hodri Girişim</a>
                        <a class="dropdown-divider"></a>
                        <a href="#" class="dropdown-item">Ofis Gezileri</a>
                      </div>
                    </div>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-8">
                      <p class="text-center">
                        <strong>Görevler: 01/09/22 - <?php echo date("d/m/y") ?></strong>
                      </p>

                      <div class="chart">
                        <!-- Sales Chart Canvas -->
                        <canvas id="salesChart" height="180" style="height: 180px;"></canvas>
                      </div>
                      <!-- /.chart-responsive -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-4">
                      <p class="text-center">
                        <strong>Tamamlanmış Görevler</strong>
                      </p>

                      <div class="progress-group">
                        Future Founders
                        <span class="float-right"><b>70</b>/100</span>
                        <div class="progress progress-sm">
                          <div class="progress-bar bg-primary" style="width: 70%"></div>
                        </div>
                      </div>
                      <!-- /.progress-group -->

                      <div class="progress-group">
                        StartHUB
                        <span class="float-right"><b>40</b>/100</span>
                        <div class="progress progress-sm">
                          <div class="progress-bar bg-danger" style="width: 40%"></div>
                        </div>
                      </div>

                      <!-- /.progress-group -->
                      <div class="progress-group">
                        <span class="progress-text">Hodri Girişim</span>
                        <span class="float-right"><b>90</b>/100</span>
                        <div class="progress progress-sm">
                          <div class="progress-bar bg-success" style="width: 90%"></div>
                        </div>
                      </div>

                      <!-- /.progress-group -->
                      <div class="progress-group">
                        Ofis Gezileri
                        <span class="float-right"><b>35</b>/70</span>
                        <div class="progress progress-sm">
                          <div class="progress-bar bg-warning" style="width: 50%"></div>
                        </div>
                      </div>
                      <!-- /.progress-group -->
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->
                </div>
                <!-- /.card-footer -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->

          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <div class="col-md-8">
              <!-- /.card -->
              <div class="row">
                <div class="col-md-6">
                  <!-- DIRECT CHAT -->
                  <div class="card direct-chat direct-chat-warning">
                    <div class="card-header">
                      <h3 class="card-title">Mesajlar</h3>

                      <div class="card-tools">
                        <span title="3 New Messages" class="badge badge-warning">3</span>
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                          <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" title="Contacts" data-widget="chat-pane-toggle">
                          <i class="fas fa-comments"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                          <i class="fas fa-times"></i>
                        </button>
                      </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <!-- Conversations are loaded here -->
                      <div class="direct-chat-messages">
                        <!-- Message. Default to the left -->
                        <div class="direct-chat-msg">
                          <div class="direct-chat-infos clearfix">
                            <span class="direct-chat-name float-left">Alexander Pierce</span>
                            <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                          </div>
                          <!-- /.direct-chat-infos -->
                          <img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="message user image">
                          <!-- /.direct-chat-img -->
                          <div class="direct-chat-text">
                            Is this template really for free? That's unbelievable!
                          </div>
                          <!-- /.direct-chat-text -->
                        </div>
                        <!-- /.direct-chat-msg -->

                        <!-- Message to the right -->
                        <div class="direct-chat-msg right">
                          <div class="direct-chat-infos clearfix">
                            <span class="direct-chat-name float-right">Sarah Bullock</span>
                            <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
                          </div>
                          <!-- /.direct-chat-infos -->
                          <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="message user image">
                          <!-- /.direct-chat-img -->
                          <div class="direct-chat-text">
                            You better believe it!
                          </div>
                          <!-- /.direct-chat-text -->
                        </div>
                        <!-- /.direct-chat-msg -->

                        <!-- Message. Default to the left -->
                        <div class="direct-chat-msg">
                          <div class="direct-chat-infos clearfix">
                            <span class="direct-chat-name float-left">Alexander Pierce</span>
                            <span class="direct-chat-timestamp float-right">23 Jan 5:37 pm</span>
                          </div>
                          <!-- /.direct-chat-infos -->
                          <img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="message user image">
                          <!-- /.direct-chat-img -->
                          <div class="direct-chat-text">
                            Working with AdminLTE on a great new app! Wanna join?
                          </div>
                          <!-- /.direct-chat-text -->
                        </div>
                        <!-- /.direct-chat-msg -->

                        <!-- Message to the right -->
                        <div class="direct-chat-msg right">
                          <div class="direct-chat-infos clearfix">
                            <span class="direct-chat-name float-right">Sarah Bullock</span>
                            <span class="direct-chat-timestamp float-left">23 Jan 6:10 pm</span>
                          </div>
                          <!-- /.direct-chat-infos -->
                          <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="message user image">
                          <!-- /.direct-chat-img -->
                          <div class="direct-chat-text">
                            I would love to.
                          </div>
                          <!-- /.direct-chat-text -->
                        </div>
                        <!-- /.direct-chat-msg -->

                      </div>
                      <!--/.direct-chat-messages-->

                      <!-- Contacts are loaded here -->
                      <div class="direct-chat-contacts">
                        <ul class="contacts-list">
                          <li>
                            <a href="#">
                              <img class="contacts-list-img" src="dist/img/user1-128x128.jpg" alt="User Avatar">

                              <div class="contacts-list-info">
                                <span class="contacts-list-name">
                                  Count Dracula
                                  <small class="contacts-list-date float-right">2/28/2015</small>
                                </span>
                                <span class="contacts-list-msg">How have you been? I was...</span>
                              </div>
                              <!-- /.contacts-list-info -->
                            </a>
                          </li>
                          <!-- End Contact Item -->
                          <li>
                            <a href="#">
                              <img class="contacts-list-img" src="dist/img/user7-128x128.jpg" alt="User Avatar">

                              <div class="contacts-list-info">
                                <span class="contacts-list-name">
                                  Sarah Doe
                                  <small class="contacts-list-date float-right">2/23/2015</small>
                                </span>
                                <span class="contacts-list-msg">I will be waiting for...</span>
                              </div>
                              <!-- /.contacts-list-info -->
                            </a>
                          </li>
                          <!-- End Contact Item -->
                          <li>
                            <a href="#">
                              <img class="contacts-list-img" src="dist/img/user3-128x128.jpg" alt="User Avatar">

                              <div class="contacts-list-info">
                                <span class="contacts-list-name">
                                  Nadia Jolie
                                  <small class="contacts-list-date float-right">2/20/2015</small>
                                </span>
                                <span class="contacts-list-msg">I'll call you back at...</span>
                              </div>
                              <!-- /.contacts-list-info -->
                            </a>
                          </li>
                          <!-- End Contact Item -->
                          <li>
                            <a href="#">
                              <img class="contacts-list-img" src="dist/img/user5-128x128.jpg" alt="User Avatar">

                              <div class="contacts-list-info">
                                <span class="contacts-list-name">
                                  Nora S. Vans
                                  <small class="contacts-list-date float-right">2/10/2015</small>
                                </span>
                                <span class="contacts-list-msg">Where is your new...</span>
                              </div>
                              <!-- /.contacts-list-info -->
                            </a>
                          </li>
                          <!-- End Contact Item -->
                          <li>
                            <a href="#">
                              <img class="contacts-list-img" src="dist/img/user6-128x128.jpg" alt="User Avatar">

                              <div class="contacts-list-info">
                                <span class="contacts-list-name">
                                  John K.
                                  <small class="contacts-list-date float-right">1/27/2015</small>
                                </span>
                                <span class="contacts-list-msg">Can I take a look at...</span>
                              </div>
                              <!-- /.contacts-list-info -->
                            </a>
                          </li>
                          <!-- End Contact Item -->
                          <li>
                            <a href="#">
                              <img class="contacts-list-img" src="dist/img/user8-128x128.jpg" alt="User Avatar">

                              <div class="contacts-list-info">
                                <span class="contacts-list-name">
                                  Kenneth M.
                                  <small class="contacts-list-date float-right">1/4/2015</small>
                                </span>
                                <span class="contacts-list-msg">Never mind I found...</span>
                              </div>
                              <!-- /.contacts-list-info -->
                            </a>
                          </li>
                          <!-- End Contact Item -->
                        </ul>
                        <!-- /.contacts-list -->
                      </div>
                      <!-- /.direct-chat-pane -->
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                      <form action="#" method="post">
                        <div class="input-group">
                          <input type="text" name="message" placeholder="Mesaj Yaz..." class="form-control">
                          <span class="input-group-append">
                            <button type="button" class="btn btn-warning">Gönder</button>
                          </span>
                        </div>
                      </form>
                    </div>
                    <!-- /.card-footer-->
                  </div>
                  <!--/.direct-chat -->
                </div>
                <!-- /.col -->

                <div class="col-md-6">
                  <!-- USERS LIST -->
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Ekip Üyeleri</h3>

                      <div class="card-tools">
                        <span class="badge badge-danger">2 Yeni Üye</span>
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                          <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                          <i class="fas fa-times"></i>
                        </button>
                      </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                      <ul class="users-list clearfix">
                        <li>
                          <img src="dist/img/ekipfoto/Kaan_Sismanoglu.JPG" alt="User Image">
                          <a class="users-list-name" href="#">Kaan Şişmanoğlu</a>
                          <span class="users-list-date">19/02/2022</span>
                        </li>
                        <li>
                          <img src="dist/img/ekipfoto/Kerem_Yunusoglu.jpg" alt="User Image">
                          <a class="users-list-name" href="#">Kerem Yunusoğlu</a>
                          <span class="users-list-date">2/10/2022</span>
                        </li>
                        <li>
                          <img src="dist/img/ekipfoto/Umut_Can.jpg" alt="User Image">
                          <a class="users-list-name" href="#">Umut Can</a>
                          <span class="users-list-date">2/10/2022</span>
                        </li>
                        <li>
                          <img src="dist/img/ekipfoto/Ceylin_Celik.jpeg" alt="User Image">
                          <a class="users-list-name" href="#">Ceylin Çelik</a>
                          <span class="users-list-date">19/02/2022</span>
                        </li>
                      </ul>
                      <!-- /.users-list -->
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer text-center">
                      <a href="javascript:">Bütün Ekibi Gör</a>
                    </div>
                    <!-- /.card-footer -->
                  </div>
                  <!--/.card -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- TABLE: LATEST ORDERS -->
              <div class="card">
                <div class="card-header border-transparent">
                  <h3 class="card-title">Son Görevler</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                  <div class="table-responsive">
                    <table class="table m-0">
                      <thead>
                        <tr>
                          <th>Görev ID</th>
                          <th>Etkinlik</th>
                          <th>Durumu</th>
                          <th>Görev</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><a href="pages/examples/invoice.html">1</a></td>
                          <td>StartHUB</td>
                          <td><span class="badge badge-success">Devam Ediyor</span></td>
                          <td>
                            <div class="sparkbar" data-color="#00a65a" data-height="20">Konuşmacıları araştır</div>
                          </td>
                        </tr>
                        <tr>
                          <td><a href="pages/examples/invoice.html">3</a></td>
                          <td>Future Founders</td>
                          <td><span class="badge badge-warning">Tamamlanmış</span></td>
                          <td>
                            <div class="sparkbar" data-color="#f39c12" data-height="20">Sponsorluklar etkinlik ekibine gönderilsin.</div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <!-- /.table-responsive -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                  <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Yeni Görev Ekle</a>
                  <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">Bütün Görevleri Gör</a>
                </div>
                <!-- /.card-footer -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->

            <div class="col-md-4">
              <!-- Info Boxes Style 2 -->
              <div class="info-box mb-3 bg-warning">
                <span class="info-box-icon"><i class="fa fa-id-card"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">İdari Kadro</span>
                  <span class="info-box-number"><?php 
                  $sor = $baglanti->prepare("SELECT COUNT(*) FROM kullanici");
                  $sor->execute();
                  $say = $sor->fetchColumn();
                  echo $say; ?></span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
              <div class="info-box mb-3 bg-success">
                <span class="info-box-icon"><i class="fa fa-handshake"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Toplam Sponsorluk</span>
                  <span class="info-box-number">253</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
              <div class="info-box mb-3 bg-danger">
                <span class="info-box-icon"><i class="fas fa-cloud-download-alt"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Yüklenilen Dosya</span>
                  <span class="info-box-number">23</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
              <div class="info-box mb-3 bg-info">
                <span class="info-box-icon"><i class="far fa-comment"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Toplam Mesaj</span>
                  <span class="info-box-number">234</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->

              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Kişi Bazlı Etkinlik Dağılımı</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-8">
                      <div class="chart-responsive">
                        <canvas id="pieChart" height="150"></canvas>
                      </div>
                      <!-- ./chart-responsive -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-4">
                      <ul class="chart-legend clearfix">
                        <li><i class="far fa-circle text-danger"></i> FF</li>
                        <li><i class="far fa-circle text-success"></i> SHUB</li>
                        <li><i class="far fa-circle text-warning"></i> HG</li>
                        <li><i class="far fa-circle text-info"></i> OG</li>
                        <li><i class="far fa-circle text-primary"></i> TT</li>
                      </ul>
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->
                </div>
                <!-- /.footer -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div><!--/. container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->


    <?php
    include("inc/footer.php");
    ?>
  </div>
  <!-- ./wrapper -->
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- REQUIRED SCRIPTS -->
  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.js"></script>

  <!-- PAGE PLUGINS -->
  <!-- jQuery Mapael -->
  <script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
  <script src="plugins/raphael/raphael.min.js"></script>
  <script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
  <script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
  <!-- ChartJS -->
  <script src="plugins/chart.js/Chart.min.js"></script>

  <!-- AdminLTE for demo purposes -->
  <script src="inc/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="dist/js/pages/dashboard2.js"></script>
</body>

</html>