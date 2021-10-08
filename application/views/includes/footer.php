<footer>
    <div class="contain">
        <div class="flex">
            <div class="colL">
                <div class="inner">
                    <div class="copyright">
                        <?= $site_settings->site_copyright ?>
                        <br>
                        <strong>E</strong> <a href="mailto:<?= $site_settings->site_email ?>"><?= $site_settings->site_email ?></a> • <strong>T</strong> <a href="tel:<?= $site_settings->site_phone ?>"><?= $site_settings->site_phone ?></a><br>
                        <?= $site_settings->site_address ?><br>
                        <div class="footer-navigation">
                        <ul id="footermenu" class="resetul footer-menu hide">
                            <li id="menu-item-747" class=""><a href="?">Terms</a></li>
                            <li id="menu-item-30" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-30"><a href="?">Privacy</a></li>
                            <li id="menu-item-32" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-32"><a href="?">Contact</a></li>
                            <li id="menu-item-29" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-29"><a href="?">Links</a></li>
                            <li id="menu-item-33" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-33"><a target="_blank" rel="noopener" href="?">CHILLIBYTE</a></li>
                        </ul>                   
                        </div>
                        <!--.footer-navigation-->
                    </div>
                </div>
            </div>
            <div class="colR">
                <div class="footer-logo">
                    <a href="<?=base_url()?>"><img src="<?= base_url().SITE_IMAGES.'images/'.$site_settings->site_logo ?>" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php $this->load->view('includes/commonjs'); ?>



