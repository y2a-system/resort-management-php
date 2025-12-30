<?php require_once('../config.php') ?>
<!DOCTYPE html>
<html lang="en">
<?php require_once('inc/header.php') ?>

<body class="hold-transition login-page-custom">
<script>start_loader()</script>

<style>
  html, body {
    height: 100%;
  }

  body {
    background: linear-gradient(
        rgba(0,0,0,.55),
        rgba(0,0,0,.55)
      ),
      url("<?php echo validate_image($_settings->info('cover')) ?>") no-repeat center center;
    background-size: cover;
    font-family: 'Inter', system-ui, -apple-system, BlinkMacSystemFont, sans-serif;
  }

  /* Center wrapper */
  .login-wrapper {
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
  }

  /* Left branding */
  .login-brand {
    text-align: center;
    color: #fff;
    margin-bottom: 30px;
  }

  #logo-img {
    height: 120px;
    width: 120px;
    object-fit: contain;
    border-radius: 50%;
    background: #fff;
    padding: 10px;
    box-shadow: 0 10px 30px rgba(0,0,0,.4);
  }

  .login-brand h1 {
    font-weight: 700;
    margin-top: 25px;
    font-size: 1.8rem;
    text-shadow: 0 3px 10px rgba(0,0,0,.5);
  }

  /* Glass card */
  .login-card {
    background: rgba(255,255,255,.92);
    backdrop-filter: blur(10px);
    border-radius: 16px;
    box-shadow: 0 25px 60px rgba(0,0,0,.35);
    overflow: hidden;
    max-width: 420px;
    width: 100%;
  }

  .login-card-header {
    padding: 25px;
    text-align: center;
    border-bottom: 1px solid rgba(0,0,0,.05);
  }

  .login-card-header h4 {
    margin: 0;
    font-weight: 700;
    color: #3b82f6;
  }

  .login-card-body {
    padding: 30px;
  }

  .input-group-text {
    background: transparent;
    border-left: none;
  }

  .form-control {
    height: 46px;
    border-radius: 10px;
  }

  .form-control:focus {
    box-shadow: 0 0 0 .2rem rgba(59,130,246,.25);
  }

  .btn-login {
    height: 46px;
    border-radius: 10px;
    font-weight: 600;
    background: linear-gradient(135deg, #3b82f6, #2563eb);
    border: none;
  }

  .btn-login:hover {
    opacity: .95;
  }

  .login-footer {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-top: 10px;
  }

  .login-footer a {
    font-size: .9rem;
    color: #2563eb;
  }

  /* Mobile logo support */
@media (max-width: 767px) {
  .login-brand {
    margin-bottom: 20px;
  }

  #logo-img {
    height: 90px;
    width: 90px;
  }

  .login-brand h1 {
    font-size: 1.2rem;
    margin-top: 15px;
  }
}
/* Footer */
.login-footer-bar {
  position: fixed;
  bottom: 0;
  left: 0;
  width: 100%;
  padding: 12px 10px;
  background: rgba(0,0,0,.45);
  backdrop-filter: blur(6px);
  color: #e5e7eb;
  font-size: 0.85rem;
  z-index: 10;
}

.login-footer-bar b {
  color: #fff;
}

@media (max-width: 767px) {
  .login-footer-bar {
    font-size: 0.8rem;
    padding: 10px 5px;
  }
}
</style>

<div class="login-wrapper">
  <div class="w-100" style="max-width: 900px;">
    <div class="row no-gutters align-items-center">

      <!-- Branding -->
      <div class="col-md-6">
        <div class="login-brand">
          <img src="<?= validate_image($_settings->info('logo')) ?>" id="logo-img" alt="Logo">
          <h1><?= $_settings->info('short_name') ?> <br><small class="fw-light"><?= $_settings->info('name') ?></small></h1>
        </div>
      </div>

      <!-- Login Card -->
      <div class="col-md-6 d-flex justify-content-center">
        <div class="login-card">
          <div class="login-card-header">
            <h4>Dashboard Login</h4>
          </div>

          <div class="login-card-body">
            <form id="login-frm" method="post">
              <div class="input-group mb-3">
                <input type="text" class="form-control" name="username" autofocus placeholder="Username">
                <div class="input-group-append">
                  <span class="input-group-text"><i class="fas fa-user"></i></span>
                </div>
              </div>

              <div class="input-group mb-4">
                <input type="password" class="form-control" name="password" placeholder="Password">
                <div class="input-group-append">
                  <span class="input-group-text"><i class="fas fa-lock"></i></span>
                </div>
              </div>

              <button type="submit" class="btn btn-login btn-block text-white">
                Sign In
              </button>

              <div class="login-footer mt-3">
                <a href="<?php echo base_url ?>">← Go to Website</a>
              </div>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
<footer class="login-footer-bar">
  <div class="container text-center">
    <small>
      © <?php echo date('Y') ?> 
      <b><?php echo $_settings->info('name') ?></b>.
      All rights reserved.
    </small>
  </div>
</footer>

<!-- Scripts -->
<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="dist/js/adminlte.min.js"></script>

<script>
  $(document).ready(function(){
    end_loader();
  });
</script>
</body>
</html>
