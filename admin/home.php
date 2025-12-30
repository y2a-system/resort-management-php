<div class="dashboard-row container-fluid">
  <!-- Header -->
  <div class="dashboard-header">
    <h1>Welcome back 👋</h1>
    <p><?php echo $_settings->info('name') ?> · Admin Panel</p>
  </div>

  <hr class="border-info">

  <!-- Cards grid -->
  <div class="dashboard-cards">
    <!-- Active Rooms -->
    <div class="stat-card warning">
      <div class="stat-icon"><i class="fas fa-bed"></i></div>
      <div class="stat-content">
        <span class="stat-label">Available Rooms</span>
        <span class="stat-value"><?php echo $conn->query("SELECT * FROM `room_list` WHERE delete_flag=0 AND status=1")->num_rows; ?></span>
      </div>
    </div>

    <!-- Inactive Rooms -->
    <div class="stat-card danger">
      <div class="stat-icon"><i class="fas fa-bed"></i></div>
      <div class="stat-content">
        <span class="stat-label">Unavailable Rooms</span>
        <span class="stat-value"><?php echo $conn->query("SELECT * FROM `room_list` WHERE delete_flag=0 AND status=2")->num_rows; ?></span>
      </div>
    </div>

    <!-- Pending Reservations -->
    <div class="stat-card secondary">
      <div class="stat-icon"><i class="fas fa-clock"></i></div>
      <div class="stat-content">
        <span class="stat-label">Pending Reservations</span>
        <span class="stat-value"><?php echo $conn->query("SELECT * FROM `reservation_list` WHERE status=0")->num_rows; ?></span>
      </div>
    </div>

    <!-- Confirmed Reservations -->
    <div class="stat-card primary">
      <div class="stat-icon"><i class="fas fa-check-circle"></i></div>
      <div class="stat-content">
        <span class="stat-label">Confirmed Reservations</span>
        <span class="stat-value"><?php echo $conn->query("SELECT * FROM `reservation_list` WHERE status=1")->num_rows; ?></span>
      </div>
    </div>

    <!-- Cancelled Reservations -->
    <div class="stat-card danger">
      <div class="stat-icon"><i class="fas fa-times-circle"></i></div>
      <div class="stat-content">
        <span class="stat-label">Cancelled Reservations</span>
        <span class="stat-value"><?php echo $conn->query("SELECT * FROM `reservation_list` WHERE status=2")->num_rows; ?></span>
      </div>
    </div>

    <!-- Active Activities -->
    <div class="stat-card success">
      <div class="stat-icon"><i class="fas fa-swimmer"></i></div>
      <div class="stat-content">
        <span class="stat-label">Available Activities</span>
        <span class="stat-value"><?php echo $conn->query("SELECT * FROM `activity_list` WHERE status=1")->num_rows; ?></span>
      </div>
    </div>

    <!-- Inactive Activities -->
    <div class="stat-card danger">
      <div class="stat-icon"><i class="fas fa-swimmer"></i></div>
      <div class="stat-content">
        <span class="stat-label">Unavailable Activities</span>
        <span class="stat-value"><?php echo $conn->query("SELECT * FROM `activity_list` WHERE status=0")->num_rows; ?></span>
      </div>
    </div>

    <!-- Unread Inquiries -->
    <div class="stat-card teal">
      <div class="stat-icon"><i class="fas fa-envelope-open-text"></i></div>
      <div class="stat-content">
        <span class="stat-label">Unread Inquiries</span>
        <span class="stat-value"><?php echo $conn->query("SELECT * FROM `message_list` WHERE status=0")->num_rows; ?></span>
      </div>
    </div>
  </div>
</div>
