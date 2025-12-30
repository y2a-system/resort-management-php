<?php require_once('./config.php'); ?>
<!DOCTYPE html>
<html lang="en" style="height:auto;">
<?php require_once('inc/header.php'); ?>
<body class="layout-top-nav layout-fixed layout-navbar-fixed" style="height:auto;">
    <div class="wrapper">
            <?php $page = isset($_GET['page']) ? $_GET['page'] : 'home'; require_once('inc/topBarNav.php'); ?>
            <?php if ($_settings->chk_flashdata('success')): ?>
                <script>alert_toast("<?= $_settings->flashdata('success') ?>", "success");</script>
        <?php endif; ?>
        
        <!-- Content Wrapper -->
        <div class="content-wrapper">
            <?php if ($page === "home" || $page === "about_us"): ?>
                <div id="header" class="shadow mb-0 position-relative">
                    <img src="<?= validate_image($_settings->info('cover')) ?>" alt="Site Cover" class="cover-img">
                    <div class="header-content d-flex justify-content-center align-items-center flex-column px-3 text-center text-md-center">
                        <h2 class="w-100 site-title px-md-5 mb-3 text-start text-md-center"><?= $_settings->info('name') ?></h2>
                        <!-- Action Buttons -->
                            <a href="rooms" class="btn btn-warning btn-lg text-dark">
                                <i class="fa fa-calendar-check me-2"></i> Reservation
                            </a>
                    </div>
                </div>
            <?php endif; ?>
            <!-- Main Content -->
            <?php
                if (!file_exists($page . ".php") && !is_dir($page)) {
                    include '404.html';
                } else {
                    if (is_dir($page)) {
                        include $page . '/index.php';
                    } else {
                        include $page . '.php';
                    }
                }
            ?>
        </div>
        <!-- /.content-wrapper -->  
        <?php require_once('inc/modals.php'); ?>
        <?php require_once('inc/footer.php'); ?>
    </div>
</body>
</html>
