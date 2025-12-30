<aside class="main-sidebar sidebar-dark-primary elevation-4 premium-sidebar">

  <!-- Brand -->
  <a href="<?php echo base_url ?>admin" class="brand-link premium-brand">
    <img src="<?php echo validate_image($_settings->info('logo')) ?>"
         alt="Logo" class="brand-image img-circle elevation-2" style="width:1.9rem;height:1.9rem;object-fit:contain;">
    <span class="brand-text ml-2">
      <?php echo $_settings->info('short_name') ?>
    </span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">

    <nav class="mt-4">
      <ul class="nav nav-pills nav-sidebar flex-column text-sm nav-compact" data-widget="treeview" role="menu" data-accordion="false">

        <!-- Dashboard -->
        <li class="nav-item">
          <a href="./" class="nav-link nav-home">
            <i class="nav-icon fas fa-chart-line"></i>
            <p>Dashboard</p>
          </a>
        </li>

        <!-- Reservations -->
        <li class="nav-item">
          <a href="<?php echo base_url ?>admin/?route=reservations" class="nav-link nav-reservations">
            <i class="nav-icon fas fa-calendar-check"></i>
            <p>Reservation List</p>
          </a>
        </li>

        <!-- Inquiries -->
        <li class="nav-item">
          <a href="<?php echo base_url ?>admin/?route=inquiries" class="nav-link nav-inquiries">
            <i class="nav-icon fas fa-envelope-open-text"></i>
            <p>Inquiries</p>
          </a>
        </li>

        <li class="nav-header">Pages</li>

        <!-- Activities -->
        <li class="nav-item">
          <a href="<?php echo base_url ?>admin/?route=activities" class="nav-link nav-activities">
            <i class="nav-icon fas fa-water"></i>
            <p>Activity List</p>
          </a>
        </li>

        <li class="nav-header">Reports</li>

        <!-- Reports -->
        <li class="nav-item">
          <a href="<?php echo base_url ?>admin/?route=reports" class="nav-link nav-reports">
            <i class="nav-icon fas fa-file-invoice"></i>
            <p>Reservation Report</p>
          </a>
        </li>

        <?php if($_settings->userdata('type') == 1): ?>
          <li class="nav-header">Maintenance</li>

          <!-- Rooms -->
          <li class="nav-item">
            <a href="<?php echo base_url ?>admin/?route=rooms" class="nav-link nav-rooms">
              <i class="nav-icon fas fa-hotel"></i>
              <p>Rooms List</p>
            </a>
          </li>

          <!-- Users -->
          <li class="nav-item">
            <a href="<?php echo base_url ?>admin/?route=user/list" class="nav-link nav-user_list">
              <i class="nav-icon fas fa-users"></i>
              <p>User List</p>
            </a>
          </li>

          <!-- Settings -->
          <li class="nav-item">
            <a href="<?php echo base_url ?>admin/?route=system_info" class="nav-link nav-system_info">
              <i class="nav-icon fas fa-sliders-h"></i>
              <p>Settings</p>
            </a>
          </li>
        <?php endif; ?>

      </ul>
    </nav>
  </div>
</aside>
<script>
$(document).ready(function(){
  let page = '<?php echo isset($_GET['route']) ? $_GET['route'] : 'home' ?>';
  page = page.replace(/\//gi,'_');

  if($('.nav-link.nav-'+page).length){
    $('.nav-link.nav-'+page).addClass('active');

    if($('.nav-link.nav-'+page).closest('.nav-treeview').length){
      $('.nav-link.nav-'+page)
        .closest('.nav-treeview')
        .siblings('a')
        .addClass('active')
        .parent()
        .addClass('menu-open');
    }
  }
});
</script>