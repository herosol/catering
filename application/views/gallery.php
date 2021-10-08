<!doctype html>
<html>
<head>
<title><?=$page_title?> — <?=$site_settings->site_name?></title>
<?php $this->load->view('includes/site-master'); ?>
</head>
<body id="home-page">
<?php $this->load->view('includes/header'); ?>
<main>

<section id="abt" class="cmnSec inner-page all-page-cntnt banner-less-page">
    <div class="cntnt">
		<div class="contain">
			<div class="text-center">
				<h1><?=$content['main_heading']?></h1>
				<p><?=$content['main_heading_tagline']?></p>
			</div>
        </div>
	</div>
	<div class="contain">
        <div class="imgGallery flex">
            <?php foreach($gallery as $image): ?>
                <a href="<?=!empty($image->image) ? get_site_image_src("images/", $image->image) : 'http://placehold.it/3000x1000'?>" data-thumb="<?=!empty($image->image) ? get_site_image_src("images/", $image->image, 'thumb_') : 'http://placehold.it/3000x1000'?>">
                    <img src="<?=!empty($image->image) ? get_site_image_src("images/", $image->image, 'thumb_') : 'http://placehold.it/3000x1000'?>">
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

</main>
<?php $this->load->view('includes/footer'); ?>
</body>
</html>