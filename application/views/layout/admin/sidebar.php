<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="<?= base_url('admin/dashboard') ?>" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img src="<?= base_url() ?>public/image/default/logo.png" alt="logo" style="width:100%; max-width:100px;">
            </span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item <?= $title == 'Dashboard' ? 'active' :''?>">
            <a href="<?= base_url('admin/dashboard') ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-alt"></i>
                <div>Dashboard</div>
            </a>
        </li>
        <li class="menu-item <?= $title == 'Mail Box' ? 'active' :''?>">
            <a href="<?= base_url('admin/mail') ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bx-envelope"></i>
                <div>Mail Box</div>
            </a>
        </li>
        <!-- <li class="menu-header small text-uppercase"><span class="menu-header-text">Management</span></li> -->
        <!-- <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layer"></i>
                <div>Halaman</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="#" class="menu-link">
                        <div>Semua halaman</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#" class="menu-link">
                        <div>Kategori Barang</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#" class="menu-link">
                        <div>Stok Barang</div>
                    </a>
                </li>
            </ul>
        </li> -->
        <!-- <li class="menu-header small text-uppercase"><span class="menu-header-text">Pengaturan</span></li>
        <li class="menu-item <?= $title == 'Settings' ? 'active' :''?>">
            <a href="<?= base_url('admin/settings') ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bx-cog"></i>
                <div>Pengaturan</div>
            </a>
        </li> -->
    </ul>
</aside>
        <!-- / Menu -->