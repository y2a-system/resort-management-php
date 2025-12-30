<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        <?php echo $_settings->info('title') ? $_settings->info('title') . ' | ' : '' ?>
        <?php echo $_settings->info('name'); ?>
    </title>

    <!-- Favicon -->
    <link rel="icon" href="<?php echo validate_image($_settings->info('logo')); ?>">

    <!-- ===================== -->
    <!-- Vendor Stylesheets -->
    <!-- ===================== -->

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url ?>plugins/fontawesome-free/css/all.min.css">

    <!-- Bootstrap Plugins -->
    <link rel="stylesheet" href="<?php echo base_url ?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="<?php echo base_url ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url ?>plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <!-- Select2 -->
    <link rel="stylesheet" href="<?php echo base_url ?>plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="<?php echo base_url ?>plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

    <!-- Plugins -->
    <link rel="stylesheet" href="<?php echo base_url ?>plugins/jqvmap/jqvmap.min.css">
    <link rel="stylesheet" href="<?php echo base_url ?>plugins/fullcalendar/main.css">
    <link rel="stylesheet" href="<?php echo base_url ?>plugins/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="<?php echo base_url ?>plugins/summernote/summernote-bs4.min.css">
    <link rel="stylesheet" href="<?php echo base_url ?>plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

    <!-- ===================== -->
    <!-- Theme Styles -->
    <!-- ===================== -->
    <link rel="stylesheet" href="<?php echo base_url ?>dist/css/adminlte.css">
    <link rel="stylesheet" href="<?php echo base_url ?>dist/css/custom.css">
    <link rel="stylesheet" href="<?php echo base_url ?>assets/css/styles.css">

    <!-- ===================== -->
    <!-- Core Scripts -->
    <!-- ===================== -->
    <script src="<?php echo base_url ?>plugins/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url ?>plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="<?php echo base_url ?>plugins/sweetalert2/sweetalert2.min.js"></script>
    <script src="<?php echo base_url ?>plugins/toastr/toastr.min.js"></script>

    <script>
        var _base_url_ = '<?php echo base_url ?>';
    </script>

    <script src="<?php echo base_url ?>dist/js/script.js"></script>

    <!-- ===================== -->
    <!-- Inline Styles -->
    <!-- ===================== -->
    <style>
        /* Chart.js animation fix */
        @keyframes chartjs-render-animation {
            from { opacity: .99; }
            to { opacity: 1; }
        }
        .chartjs-render-monitor {
            animation: chartjs-render-animation 1ms;
        }
        .chartjs-size-monitor,
        .chartjs-size-monitor-expand,
        .chartjs-size-monitor-shrink {
            position: absolute;
            inset: 0;
            overflow: hidden;
            pointer-events: none;
            visibility: hidden;
            z-index: -1;
        }

        /* Header Background */
        #main-header {
            position: relative;
            background: radial-gradient(
                circle,
                rgba(0, 0, 0, 0.48) 22%,
                rgba(0, 0, 0, 0.39) 49%,
                rgba(0, 212, 255, 0) 100%
            ) !important;
        }

        #main-header::before {
            content: "";
            position: absolute;
            inset: 0;
            background: url('<?php echo base_url . $_settings->info('cover'); ?>') no-repeat center / cover;
            filter: drop-shadow(0 7px 6px black);
            z-index: -1;
        }
    </style>
</head>
