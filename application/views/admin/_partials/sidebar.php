<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= site_url('admin') ?>">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3"><?= SITE_NAME ?><sup>1</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="<?= site_url('admin') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item <?= $this->uri->segment(2) == 'produk' ? 'active' : '' ?>">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fa-brands fa-fw fa-product-hunt"></i>
            <span>Product</span>
        </a>
        <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Components:</h6>
                <a class="collapse-item <?= $this->uri->segment(2) == 'produk' ? 'active' : '' ?>" href="<?= site_url('admin/produk') ?>">Produk</a>
                <a class="collapse-item <?= $this->uri->segment(2) == 'jenis_produk' ? 'active' : '' ?>" href="<?= site_url('admin/jenis_produk') ?>">Jenis Produk</a>
                <a class="collapse-item <?= $this->uri->segment(2) == 'pesanan' ? 'active' : '' ?>" href="<?= site_url('admin/pesanan') ?>">Pesanan</a>
                <a class="collapse-item <?= $this->uri->segment(2) == 'pembelian' ? 'active' : '' ?>" href="<?= site_url('admin/pembelian') ?>">Pembelian</a>
                <a class="collapse-item <?= $this->uri->segment(2) == 'suplier' ? 'active' : '' ?>" href="<?= site_url('admin/suplier') ?>">Suplier</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Users
    </div>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed <?= $this->uri->segment(2) == 'produks' ? 'active' : '' ?>" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fa-solid fa-fw fa-users"></i>
            <span>Users</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Utilities:</h6>
                <a class="collapse-item" href="<?= site_url('admin/users') ?>">Users</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Settings
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
            <i class="fa-solid fa-fw fa-user-gear"></i>
            <span>Account</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Login Screens:</h6>
                <a class="collapse-item" href="login.html">Login</a>
                <a class="collapse-item" href="register.html">Register</a>
                <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Other Pages:</h6>
                <a class="collapse-item" href="404.html">404 Page</a>
                <a class="collapse-item" href="blank.html">Blank Page</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->
    <div class="sidebar-card d-none d-lg-flex">
        <img class="sidebar-card-illustration mb-2" src="<?= base_url('assets/img/undraw_rocket.svg') ?>" alt="...">
        <p class="text-center mb-2">Thanks to <strong>SB Admin</strong> for the great Bootstrap templates!</p>
        <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-2">Get SB Admin!</a>
    </div>

</ul>