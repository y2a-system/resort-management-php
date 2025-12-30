<nav id="topbar" class="navbar navbar-expand-lg navbar-dark">
    <div class="container">

        <!-- Brand -->
        <a href="./" class="navbar-brand d-flex align-items-center">
            <img src="<?= validate_image($_settings->info('logo')) ?>"
                 class="brand-image img-circle elevation-2 mr-2"
                 style="width:32px; height:32px;">
            <span><?= $_settings->info('short_name') ?></span>
        </a>

        <!-- Mobile Toggle -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Nav -->
        <div class="collapse navbar-collapse" id="mainNavbar">

            <!-- Center Nav -->
            <ul class="navbar-nav mx-auto">
                <?php
                $nav = [
                    'home'       => ['./', 'Home'],
                    'rooms'      => ['./rooms', 'Rooms'],
                    'activities' => ['./activities', 'Activities'],
                    'about'      => ['./about', 'About Us'],
                    'contact_us' => ['./contact_us', 'Contact'],
                ];
                foreach ($nav as $key => [$url, $label]):
                ?>
                <li class="nav-item">
                    <a href="<?= $url ?>"
                       class="nav-link <?= ($page ?? '') === $key ? 'active' : '' ?>">
                        <?= $label ?>
                    </a>
                </li>
                <?php endforeach; ?>
            </ul>

            <!-- Right User Area -->
            <ul class="navbar-nav align-items-center">
                <?php if ($_settings->userdata('id') > 0): ?>
                <!-- Dashboard Link -->
                <li class="nav-item">
                    <a href="<?= base_url ?>admin" class="nav-link text-light">
                        <i class="fas fa-tachometer-alt mr-1"></i> Dashboard
                    </a>
                </li>
                    <li class="nav-item d-flex align-items-center">
                        <img src="<?= validate_image($_settings->userdata('avatar')) ?>" class="user-img mr-2">
                        <span class="user-name text-light">
                            <?= $_settings->userdata('username') ?: $_settings->userdata('email') ?>
                        </span>
                        <?php
                        $logout = $_settings->userdata('login_type') == 1
                            ? base_url.'classes/Login.php?f=logout'
                            : base_url.'classes/Login.php?f=client_logout';
                        ?>
                        <a href="<?= $logout ?>" class="logout-btn" title="Logout">
                            <i class="fas fa-power-off"></i>
                        </a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a href="./admin" class="nav-link">
                            <i class="fas fa-sign-in-alt mr-1"></i> Login
                        </a>
                    </li>
                <?php endif; ?>
            </ul>

        </div>
    </div>
</nav>