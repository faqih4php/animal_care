<?php $page = basename($_SERVER['PHP_SELF'], '.php'); ?>
<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html " target="_blank">
        <img src="../../assets/img/logo-ct-dark.png" width="26px" height="26px" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">Creative Tim</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
       <?php if ($_SESSION['role'] == 1) { ?>
        <li class="nav-item">
          <a class="nav-link <?= $page == 'admin' ? 'active' : ''?>" href="<?php echo '/animal_care/pages/admin/admin.php'; ?>">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-home text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $page == 'dokter' ? 'active' : ''?>" href="<?php echo '/animal_care/pages/admin/dokter/dokter.php'; ?>">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-user-doctor text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Doctor</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $page == 'user' ? 'active' : ''?>" href="<?php echo '/animal_care/pages/admin/user/user.php'; ?>">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-user text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">User</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $page == 'nama_hewan' ? 'active' : ''?>" href="<?php echo '/animal_care/pages/admin/nama_hewan/nama_hewan.php'; ?>">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-paw text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Animal's Name</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $page == 'jenis_penyakit' ? 'active' : ''?>" href="<?php echo '/animal_care/pages/admin/jenis_penyakit/jenis_penyakit.php'; ?>">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-disease text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Type of Disease</span>
          </a>
        </li>
        <?php } elseif ($_SESSION['role'] == 2){ ?>
        <li class="nav-item">
          <a class="nav-link <?= $page == 'dokter' ? 'active' : ''?>" href="<?php echo '/animal_care/pages/dokter/dokter.php'; ?>">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-home text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <?php }elseif ($_SESSION['role'] == 3) { ?>
        <li class="nav-item">
          <a class="nav-link <?= $page == 'user' ? 'active' : ''?>" href="<?php echo '/animal_care/pages/user/user.php'; ?>">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-home text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <?php } ?>
      </ul>
    </div>
    <div class="sidenav-footer mx-3 ">
      <div class="card card-plain shadow-none" id="sidenavCard">
        <img class="w-50 mx-auto" src="../../assets/img/illustrations/icon-documentation.svg" alt="sidebar_illustration">
        <div class="card-body text-center p-3 w-100 pt-0">
          <div class="docs-info">
            <h6 class="mb-0">Need help?</h6>
            <p class="text-xs font-weight-bold mb-0">Please check our docs</p>
          </div>
        </div>
      </div>
      <a href="https://www.creative-tim.com/learning-lab/bootstrap/license/argon-dashboard" target="_blank" class="btn btn-dark btn-sm w-100 mb-3">Documentation</a>
      <a class="btn btn-primary btn-sm mb-0 w-100" href="https://www.creative-tim.com/product/argon-dashboard-pro?ref=sidebarfree" type="button">Upgrade to pro</a>
    </div>
  </aside>