<div id="layoutSidenav_nav">
    <nav class="sidenav shadow-right sidenav-light">
        <div class="sidenav-menu">
            <div class="nav accordion" id="accordionSidenav">
                <!-- Sidenav Menu Heading (Admin)-->
                <div class="sidenav-menu-heading">Admin</div>
                <!-- Sidenav (Dashboard)-->
                <a class="nav-link <?= $this->uri->segment(2) == 'admin' ? 'active' : '' ?>" href="<?= base_url('admin') ?>">
                    <div class="nav-link-icon"><i data-feather="activity"></i></div>
                    Dashboards
                </a>
                <!-- Sidenav Heading (Items)-->
                <div class="sidenav-menu-heading">Items</div>
                <!-- Sidenav Accordion (Produk)-->
                <a class="nav-link <?= $this->uri->segment(2) == 'produk' || 'jenis_produk' || 'suplier' ? 'active' : '' ?>" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseProduk" aria-expanded="true" aria-controls="collapseProduk">
                    <div class="nav-link-icon"><i data-feather="grid"></i></div>
                    Produk
                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse show" id="collapseProduk" data-bs-parent="#accordionSidenav">
                    <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavProdukMenu">
                        <!-- Nested Sidenav Accordion (Produk)-->
                        <a class="nav-link <?= $this->uri->segment(2) == 'jenis_produk' ? 'active' : '' ?>" href="<?= base_url('admin/jenis_produk') ?>">
                            Jenis Produk
                        </a>
                        <a class="nav-link <?= $this->uri->segment(2) == 'produk' ? 'active' : '' ?>" href="<?= base_url('admin/produk') ?>">
                            Produk
                        </a>
                        <a class="nav-link <?= $this->uri->segment(2) == 'suplier' ? 'active' : '' ?>" href="<?= base_url('admin/suplier') ?>">
                            Suplier
                        </a>
                        <a class="nav-link <?= $this->uri->segment(2) == 'pembelian' ? 'active' : '' ?>" href="<?= base_url('admin/pembelian') ?>">
                            Pembelian
                        </a>
                        <a class="nav-link <?= $this->uri->segment(2) == 'pesanan' ? 'active' : '' ?>" href="<?= base_url('admin/pesanan') ?>">
                            Pesanan
                        </a>
                    </nav>
                </div>

                <!-- Sidenav Heading (Users)-->
                <div class="sidenav-menu-heading">Users</div>
                <!-- Sidenav Users (Layout)-->
                <a class="nav-link <?= $this->uri->segment(2) == 'users' ? 'active' : '' ?>" href="<?= base_url('admin/users') ?>">
                    <div class="nav-link-icon"><i data-feather="users"></i></div>
                    Users
                </a>
                <!-- Sidenav Heading (Profile)-->
                <div class="sidenav-menu-heading">Setting</div>
                <!-- Sidenav Profile (Layout)-->
                <a class="nav-link <?= $this->uri->segment(2) == 'profile' ? 'active' : '' ?>" href="<?= base_url('admin/profile') ?>">
                    <div class="nav-link-icon"><i data-feather="user"></i></div>
                    Profile
                </a>
            </div>
        </div>
        <!-- Sidenav Footer-->
        <div class="sidenav-footer">
            <div class="sidenav-footer-content">
                <div class="sidenav-footer-subtitle">Logged in as:</div>
                <div class="sidenav-footer-title"><?= htmlentities($current_user->username) ?></div>
            </div>
        </div>
    </nav>
</div>