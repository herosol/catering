<!doctype html>
<html>
<head>
<title><?=$page_title?> — <?=$site_settings->site_name?></title>
<?php $this->load->view('includes/site-master'); ?>
</head>
<body id="home-page">
<?php $this->load->view('includes/header'); ?>
<main>
<section id="banner">
	<div class="bannerSlider owl-carousel owl-theme" id="owl-SmBanner">
        <?=main_slider($content)?>
    </div>
</section>

<section id="abt" class="cmnSec inner-page all-page-cntnt">
    <div class="cntnt">
		<div class="contain">
			<div class="text-center">
				<h1><?=$content['main_heading']?></h1>
				<p><?=$content['main_heading_tagline']?></p>
			</div>
        </div>
	</div>
    <?php if($page == 'christmas'): ?>
        <div class="contain">
            <?=$content['before_image_content']?>
        
        <div class="outer-image">
            <div class="left-quote">
                <h4>"<?=$content['mid_banner_heading']?>"</h4>
                <h6>- <?=$content['mid_banner_quote']?></h6>
            </div>
        </div>

        <?=$content['after_image_content']?>
    </div>
    <?php else: ?>
        <div class="contain">
            <?=str_replace("<ul>","<ul class='flex cstm-list'>", $content['main_content']);?>
        </div>
    <?php endif; ?>
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