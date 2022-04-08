<?php $setting = system_setting(); ?>
<div class="side-nav vertical-menu nav-menu-light scrollable">
    <div class="nav-logo">
        <div class="w-100 logo">
            <img class="img-fluid" src="<?= base_url(); ?>assets/images/logo/logo.png" style="max-height: 70px;" alt="logo">
        </div>
    </div>
    <ul class="nav-menu">
    <li class="nav-group-title">DASHBOARD</li>
        <li class="nav-menu-item router-link">
            <a href="<?php echo site_url('dashboard'); ?>">
                <i class="feather icon-home"></i>
                <span class="nav-menu-item-title">Dashboard</span>
            </a>
        </li>
        <?php if ($this->custom_lib->hasActive('settings')) { ?>
        <?php if ($this->rbac->hasPrivilege('general', 'can_view') || $this->rbac->hasPrivilege('module', 'can_view') || $this->rbac->hasPrivilege('operations', 'can_view') || $this->rbac->hasPrivilege('roles', 'can_view') || $this->rbac->hasPrivilege('users', 'can_view') || $this->rbac->hasPrivilege('database', 'can_view')) { ?>
        <li class="nav-group-title">SETTINGS</li>
        <?php if ($this->rbac->hasPrivilege('general', 'can_view')) { ?>
        <li class="nav-menu-item <?= ($this->uri->segment(2) === 'general') ? 'router-link-active' : '' ?>"> <a href="<?php echo site_url('general'); ?>"><i class="feather icon-settings" data-i18n="general"></i> <span class="nav-menu-item-title">General</span></a></li>
        <?php } ?>
        <?php if ($this->rbac->hasPrivilege('backup', 'can_view')) { ?>
        <li class="nav-menu-item <?= ($this->uri->segment(2) === 'backup') ? 'router-link-active' : '' ?>"> <a href="<?php echo site_url('backup'); ?>"><i class="feather icon-database" data-i18n="backup"></i> <span class="nav-menu-item-title">Backup Database</span></a></li>
        <?php } ?>
        <?php if ($this->rbac->hasPrivilege('module', 'can_view')) { ?>
        <li class="nav-menu-item <?= ($this->uri->segment(2) === 'module') ? 'router-link-active' : '' ?>"> <a href="<?php echo site_url('module'); ?>"><i class="feather icon-book" data-i18n="module"></i> <span class="nav-menu-item-title">Module</span></a></li>
        <?php } ?>
        <?php if ($this->rbac->hasPrivilege('operations', 'can_view')) { ?>
        <li class="nav-menu-item <?= ($this->uri->segment(2) === 'operations') ? 'router-link-active' : '' ?>"> <a href="<?php echo site_url('operations'); ?>"><i class="feather icon-plus-square" data-i18n="operation"></i> <span class="nav-menu-item-title">Operation</span></a></li>
        <?php } ?>
        <?php if ($this->rbac->hasPrivilege('roles', 'can_view')) { ?>
        <li class="nav-menu-item <?= ($this->uri->segment(2) === 'roles') ? 'router-link-active' : '' ?>"> <a href="<?php echo site_url('roles'); ?>"><i class="feather icon-cpu" data-i18n="roles"></i> <span class="nav-menu-item-title">Role Permition</span></a></li>
        <?php } ?>
        <?php if ($this->rbac->hasPrivilege('users', 'can_view')) { ?>
        <li class="nav-menu-item <?= ($this->uri->segment(2) === 'user') ? 'router-link-active' : '' ?>"> <a href="<?php echo site_url('users'); ?>"><i class="feather icon-user" data-i18n="user"></i> <span class="nav-menu-item-title">User</span></a></li>
        <?php } ?>
        <?php } ?>
        <?php } ?>
        <?php if ($this->custom_lib->hasActive('master-data')) { ?>
        <?php if ($this->rbac->hasPrivilege('barang', 'can_view') || $this->rbac->hasPrivilege('perharga', 'can_view')) { ?>
        <li class="nav-group-title">MASTER DATA</li>
        <?php if ($this->rbac->hasPrivilege('perharga', 'can_view')) { ?>
        <li class="nav-menu-item <?= ($this->uri->segment(2) === 'perharga') ? 'router-link-active' : '' ?>"> <a href="<?php echo site_url('perharga'); ?>"><i class="feather icon-slack" data-i18n="perharga"></i> <span class="nav-menu-item-title">Perubahan Harga</span></a></li>
        <?php } ?>
        <?php if ($this->rbac->hasPrivilege('barang', 'can_view')) { ?>
        <li class="nav-menu-item <?= ($this->uri->segment(2) === 'barang') ? 'router-link-active' : '' ?>"> <a href="<?php echo site_url('barang'); ?>"><i class="feather icon-list" data-i18n="barang"></i> <span class="nav-menu-item-title">Barang</span></a></li>
        <?php } ?>
        <?php } ?>
        <?php } ?>
        <?php if ($this->custom_lib->hasActive('transaksi')) { ?>
        <?php if ($this->rbac->hasPrivilege('trpenjualan', 'can_view')) { ?>
        <li class="nav-group-title">TRANSAKSI</li>
        <?php if ($this->rbac->hasPrivilege('trpenjualan', 'can_view')) { ?>
        <li class="nav-menu-item <?= ($this->uri->segment(2) === 'trpenjualan') ? 'router-link-active' : '' ?>"> <a href="<?php echo site_url('trpenjualan'); ?>"><i class="feather icon-activity" data-i18n="penjualan"></i> <span class="nav-menu-item-title">Penjualan</span></a></li>
        <?php } ?>
        <?php } ?>
        <?php } ?>
        <?php if ($this->custom_lib->hasActive('laporan')) { ?>
        <?php if ($this->rbac->hasPrivilege('lappenjualan', 'can_view')) { ?>
        <li class="nav-group-title">LAPORAN</li>
        <?php if ($this->rbac->hasPrivilege('lappenjualan', 'can_view')) { ?>
        <li class="nav-menu-item <?= ($this->uri->segment(2) === 'lappenjualan') ? 'router-link-active' : '' ?>"> <a href="<?php echo site_url('lappenjualan'); ?>"><i class="feather icon-bar-chart-line-" data-i18n="laporan"></i> <span class="nav-menu-item-title">Penjualan</span></a></li>
        <?php } ?>
        <?php } ?>
        <?php } ?>
    </ul>
</div>