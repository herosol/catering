<!doctype html>
<html>
<head>
<title><?= $record->menu_name?> — <?=$site_settings->site_name?></title>
<?php $this->load->view('includes/site-master'); ?>
</head>
<body id="home-page">
<?php $this->load->view('includes/header'); ?>
<main>
<section id="banner">
	<div class="bannerSlider owl-carousel owl-theme" id="owl-SmBanner">
        <?=main_slider($menu)?>
    </div>
</section>

<section id="abt" class="cmnSec inner-page all-page-cntnt">
    <div class="cntnt">
		<div class="contain">
			<div class="text-center">
				<h1><?= $content['main_heading']?> <?= $record->menu_name?></h1>
				<p><?= $content['main_heading_tagline']?></p>
			</div>
        </div>
	</div>
	<div class="contain">
        <?= $menu['main_content']?>
        <div class="flex outer-col-pricing">
            
            <div class="col-pricing">
                <div class="inner gold">
                    <div class="top-header-pricing-tb">
                        <h4>Gold</h4>
                        <h2><?= $menu['gold_price']?> <em><?= $menu['gold_per_head']?></em></h2>
                    </div>
                    <div class="inner-pricing-cntnt">
                        <?= $menu['gold_content']?>
                    </div>
                </div>
            </div>
            <div class="col-pricing">
                <div class="inner silver">
                    <div class="top-header-pricing-tb">
                        <h4>Silver</h4>
                        <h2><?= $menu['silver_price']?> <em><?= $menu['silver_per_head']?></em></h2>
                    </div>
                    <div class="inner-pricing-cntnt">
                        <?= $menu['silver_content']?>
                    </div>
                </div>
            </div>
            <div class="col-pricing">
                <div class="inner platinum">
                    <div class="top-header-pricing-tb">
                        <h4>Silver</h4>
                        <h2><?= $menu['platinum_price']?> <em><?= $menu['platinum_per_head']?></em></h2>
                    </div>
                    <div class="inner-pricing-cntnt">
                        <?= $menu['platinum_content']?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="gallery-image-slider cmn-gallery">
    <div class="contain">
        <div class="image owl-carousel owl-theme" id="owl-pro">
            <?=mini_slider($mini_sliders)?>
        </div>
    </div>
</section>
</main>
<?php $this->load->view('includes/footer'); ?>
</body>
</html>