<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="../mainpage.php" class="brand-link">
    <img src="dist/img/105499249_305650883958701_6277941166099520452_n Medium.jpeg" alt="StartupMEF Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">StartupMEF Panel</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="../AdminPanel/dist/img/ekipfoto/<?php if (isset($_SESSION['kadi'])){echo $_SESSION['profilfoto'];} ?>" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="../AdminPanel/profile.php" class="d-block">
          <?php
             if (isset($_SESSION['kadi'])) {
              echo $_SESSION["adsoyad"];
            }
          ?>
        </a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <!--Ana Sayfa-->
        <li class="nav-item">
          <a href="./mainpage.php" class="nav-link <?php if ($sayfa == "Ana Sayfa") echo "active" ?>">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Ana Sayfa
            </p>
          </a>
        </li>
        <!--Etkinlikler-->
        <li class="nav-header">ETKİNLİKLER</li>

        <!--Future Founders -->
        <li class="nav-item">
          <a href="#" class="nav-link <?php if (($sayfa == "Future Founders Katılımcılar") || ($sayfa == "Future Founders Görevler")) echo "active" ?>">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Future Founders
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <!-- <li class="nav-item">
              <a href="./events.php" class="nav-link <?php if ($sayfa == "Future Founders Görevler") echo "active" ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Görevler</p>
              </a>
            </li> -->
            <li class="nav-item">
              <a href="../AdminPanel/ffdata.php" class="nav-link <?php if ($sayfa == "Future Founders Katılımcılar") echo "active" ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Etkinlik Kayıtları</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../AdminPanel/ffsoru.php" class="nav-link <?php if ($sayfa == "Future Founders Katılımcı Soruları") echo "active" ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Katılımcı Soruları</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- StartHUB
        <li class="nav-item">
          <a href="#" class="nav-link <?php if (($sayfa == "StartHUB Katılımcılar") || ($sayfa == "StartHUB Görevler")) echo "active" ?>">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              StartHUB
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link <?php if ($sayfa == "StartHUB Görevler") echo "active" ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Görevler</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link <?php if ($sayfa == "StartHUB Katılımcılar") echo "active" ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Etkinlik Kayıtları</p>
              </a>
            </li>
          </ul>
        </li> -->
        <!-- Genel
        <li class="nav-header">GENEL</li>
        <li class="nav-item">
          <a href="./calender.php" class="nav-link <?php if ($sayfa == "Takvim") echo "active" ?>">
            <i class="nav-icon far fa-calendar-alt"></i>
            <p>
              Takvim
              <span class="badge badge-info right">2</span>
            </p>
          </a>
        </li> -->
        <!--Admin Ayarları -->
        <li class="nav-item">
            <a href="#" class="nav-link <?php if (($sayfa == "StartHUB Katılımcılar") || ($sayfa == "StartHUB Görevler")) echo "active" ?>">
              <i class="nav-icon fas fa-file"></i>
              <p>Admin Ayarları
              <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="../AdminPanel/panelinfo.php" class="nav-link <?php if ($sayfa == "Panel Bilgileri") echo "active" ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Panel Bilgileri</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../AdminPanel/panelusersettings.php" class="nav-link <?php if ($sayfa == "Panel Kullanıcı Ayarları") echo "active" ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Panel Kullanıcı Ayarları</p>
              </a>
            </li>
          </ul>
          </li>
        <!-- end -->
      </ul>
    </nav>
  </div>
</aside>