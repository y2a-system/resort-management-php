<!-- =========================
     PREMIUM TOPBAR
========================= -->
<nav class="main-header navbar navbar-expand navbar-dark premium-topbar shadow-sm text-sm">

  <!-- Left -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link premium-toggle" data-widget="pushmenu" href="#" role="button">
        <i class="fas fa-bars"></i>
      </a>
    </li>

    <li class="nav-item d-none d-sm-inline-block">
      <a href="<?php echo base_url ?>" class="nav-link premium-title">
        <b>
          <?php echo (!isMobileDevice())
            ? $_settings->info('name')
            : $_settings->info('short_name'); ?> - Admin
        </b>
      </a>
    </li>
  </ul>

  <!-- Right -->
  <ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown">

      <button class="btn user-dropdown-btn dropdown-toggle"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false">
        <img src="<?php echo validate_image($_settings->userdata('avatar')) ?>"
             class="img-circle elevation-2 user-avatar"
             alt="User Image">
        <span class="user-name">
         <?php echo ucwords($_settings->userdata('lastname')) ?>
        </span>
      </button>

      <div class="dropdown-menu dropdown-menu-right">
        <a class="dropdown-item" href="<?php echo base_url.'admin/?route=user' ?>">
          <i class="fa fa-user mr-2"></i> My Account
        </a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item text-danger" href="<?php echo base_url.'/classes/Login.php?f=logout' ?>">
          <i class="fas fa-sign-out-alt mr-2"></i> Logout
        </a>
      </div>

    </li>
  </ul>
</nav>
<!-- /.navbar -->