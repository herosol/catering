<div class="sidebar-menu fixed">
    <div class="sidebar-menu-inner ps-container ps-active-y">
        <header class="logo-env">
            <div class="logo">
                <a href="<?=site_url(ADMIN.'/dashboard')?>">
                    <img src="<?= base_url().SITE_IMAGES.'images/'.$adminsite_setting->site_logo ?>" width="120" alt="">
                </a>
            </div>
            <div class="sidebar-collapse">
                <a href="#" class="sidebar-collapse-icon">
                    <i class="entypo-menu"></i>
                </a>
            </div>
            <div class="sidebar-mobile-menu visible-xs">
                <a href="#" class="with-animation">
                    <i class="entypo-menu"></i>
                </a>
            </div>
        </header>
        <ul id="main-menu" class="main-menu">
            <li class="opened <?= ($this->uri->segment(2) == 'dashboard') ? 'active' : '' ?>">
                <a href="<?= site_url(ADMIN.'/dashboard') ?>">
                    <i class="entypo-gauge"></i>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <li class="opened<?= $this->uri->segment('2') == 'menus' ? ' active' : '' ?>">
                <a href="<?= site_url(ADMIN.'/sitecontent/menus') ?>">
                    <i class="fa fa-bars"></i>
                    <span class="title">Manage Menus</span>
                </a>
            </li>
            <li class=" <?= ($this->uri->segment(2) == 'sitecontent' || $this->uri->segment(2) == 'preferences') ? ' opened  active' : '' ?>">
                <a href="javascript:void(0)">
                    <i class="fa fa-pagelines  "></i>
                    <span class="title">Manage Pages</span>
                </a>
                <ul>
                    <li class=" <?= ($this->uri->segment(3) == 'home') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/sitecontent/home') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">Home</span>
                        </a>
                    </li>
                    <li class="<?= ($this->uri->segment(3) == 'about') ? ' active' : '' ?>">
                        <a href="javascript:void(0)">
                        <i class="entypo-doc-text  "></i>
                            <span class="title">Events</span>
                        </a>
                        <ul>
                            <li class=" <?= ($this->uri->segment(3) == 'weddings') ? ' active' : '' ?>">
                                <a href="<?= site_url(ADMIN.'/sitecontent/weddings') ?>">
                                    <i class="entypo-doc-text  "></i>
                                    <span class="title">Weddings</span>
                                </a>
                            </li>
                            <li class=" <?= ($this->uri->segment(3) == 'corporate') ? ' active' : '' ?>">
                                <a href="<?= site_url(ADMIN.'/sitecontent/corporate') ?>">
                                    <i class="entypo-doc-text  "></i>
                                    <span class="title">Corporate</span>
                                </a>
                            </li>
                            <li class=" <?= ($this->uri->segment(3) == 'wakes') ? ' active' : '' ?>">
                                <a href="<?= site_url(ADMIN.'/sitecontent/wakes') ?>">
                                    <i class="entypo-doc-text  "></i>
                                    <span class="title">Wakes</span>
                                </a>
                            </li>
                            <li class=" <?= ($this->uri->segment(3) == 'parties') ? ' active' : '' ?>">
                                <a href="<?= site_url(ADMIN.'/sitecontent/parties') ?>">
                                    <i class="entypo-doc-text  "></i>
                                    <span class="title">Birthdays / Parties</span>
                                </a>
                            </li>
                            <li class=" <?= ($this->uri->segment(3) == 'christmas') ? ' active' : '' ?>">
                                <a href="<?= site_url(ADMIN.'/sitecontent/christmas') ?>">
                                    <i class="entypo-doc-text  "></i>
                                    <span class="title">Christmas</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=" <?= ($this->uri->segment(3) == 'menu_content') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/sitecontent/menu_content') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">Menus</span>
                        </a>
                    </li>
                    <li class=" <?= ($this->uri->segment(3) == 'cake') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/sitecontent/cake') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">Cake</span>
                        </a>
                    </li>
                    <li class=" <?= ($this->uri->segment(3) == 'drinks') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/sitecontent/drinks') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">Drinks</span>
                        </a>
                    </li>
                    <li class=" <?= ($this->uri->segment(3) == 'mirror') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/sitecontent/mirror') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">Morrir Photo Booth</span>
                        </a>
                    </li>
                    <li class=" <?= ($this->uri->segment(3) == 'gallery') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/sitecontent/gallery') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">Gallery</span>
                        </a>
                    </li>
                    <li class=" <?= ($this->uri->segment(3) == 'about') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/sitecontent/about') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">About Us</span>
                        </a>
                    </li>
                    <li class=" <?= ($this->uri->segment(3) == 'contact') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/sitecontent/contact') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">Contact Us</span>
                        </a>
                    </li>
                    <li class=" <?= ($this->uri->segment(3) == 'terms_conditions') ? ' active' : '' ?>">
                        <a href="<?= site_url(ADMIN.'/sitecontent/terms_conditions') ?>">
                            <i class="entypo-doc-text  "></i>
                            <span class="title">Terms & Conditions</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="opened <?= ($this->uri->segment('2') == 'meta-info') ? 'active' : '' ?>">
                <a href="<?= site_url('admin/meta-info') ?>">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                    <span class="title">Site Meta</span>
                </a>
            </li>
            <li class="opened <?= ($this->uri->segment(2) == 'settings' && $this->uri->segment(3) == '') ? 'active' : '' ?>">
                <a href="<?= site_url(ADMIN.'/settings') ?>">
                    <i class="fa fa-cogs"></i>
                    <span class="title">Site Settings</span>
                </a>
            </li>
            <li class="opened">
                <a href="<?= site_url('admin/settings/change') ?>">
                    <i class="fa fa-lock"></i>
                    <span class="title">Change Password</span>
                </a>
            </li>
        </ul>
    </div>
</div>