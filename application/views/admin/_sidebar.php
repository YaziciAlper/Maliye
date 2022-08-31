<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="../../index3.html" class="brand-link">
    <img src="/Maliye/assets/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Admin Panel</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?=base_url()?>uploads/<?=$this->session->admin_session["resim"]?>" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block"><?=$this->session->admin_session["adsoy"]?></a>
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
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fa fa-home" aria-hidden="true"></i>
            <p>
              Ana Sayfa
            </p>
          </a>
        </li>



        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fa fa-users"></i>
            <p>
              Kullanıcı İşlemleri
              <i class="fas fa-angle-left right"></i>

            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="../layout/top-nav.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>KullanıcıLarı Görüntüle</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../layout/top-nav-sidebar.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Kullanıcı Ekle</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-header">AYARLAR</li>

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon far fa-circle text-info"></i>
            <p>Admin</p>
          </a>
        </li>


        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon far fa-circle text-danger"></i>
            <p class="text">Ayarlar</p>
          </a>
        </li>

<?php if($this->session->userdata("admin_session")){ ?>
        <li class="nav-item">
          <a href="<?=base_url()?>admin/login/login_cikis" class="nav-link">
            <i class="nav-icon far fa-circle text-danger"></i>
            <p class="text">Çıkış</p>
          </a>
        </li>

<?php } ?>






      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
