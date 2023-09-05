<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-5">
  <!-- Brand Logo -->
  <a href="#" class="brand-link">
    <img src="<?= base_url() ?>/dist/img/Logo Universitas Sriwijaya.png" alt="Logo Universitas Sriwijaya" class="brand-image img-circle elevation-2" style="opacity: .8">
    <span class="brand-text font-weight-light">Monitoring IoT</span>
  </a>
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?= base_url() ?>/dist/img/Logo TK DIPKOM.jpg" width="20px" height="20px" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Arib Fayyadhtamir A.P</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
        <li class="nav-item">
          <a href="/Pages" class="nav-link">
            <i class="fas fa-tachometer-alt nav-icon"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-database"></i>
            <p>
              Data Sensor
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= url_to('sensor_getar') ?>" class="nav-link">
                <i class="fas fa-history nav-icon"></i>
                <p>Riwayat Sensor Getar</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= url_to('sensor_gyro') ?>" class="nav-link">
                <i class="fas fa-history nav-icon"></i>
                <p>Riwayat Sensor Gyro</p>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>