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

<section id="abt" class="cmnSec">
    <div class="cntnt">
		<div class="contain">
			<div class="text-center">
				<h1><?=$content['main_heading']?></h1>
				<p><?=$content['main_heading_tagline']?></p>
			</div>
        </div>
	</div>
	<div class="contain">
	    <div class="outer-flex">
			<div class="flex">
				<div class="col">
					<div class="inner-box">
						<h2><?=$content['banner_heading1']?></h2>
                        <a href="<?= base_url() ?>events/weddings">Weddings</a>
                        <a href="<?= base_url() ?>events/corporate">Corporate</a>
                        <a href="<?= base_url() ?>events/wakes">Wakes</a>
                        <a href="<?= base_url() ?>events/parties">Birthdays / Parties</a>
                        <a href="<?= base_url() ?>events/christmas">Christmas</a>
					</div>
				</div>
				<div class="col">
					<div class="image">
						<img src="<?= !empty($content['image4']) ? getImageSrc(UPLOAD_PATH."images/", $content['image4']) : 'http://placehold.it/3000x1000' ?>">
					</div>
				</div>
			</div>

			<div class="flex">
				<div class="col">
					<div class="inner-box">
						<h2><?=$content['banner_heading2']?></h2>
						<p><?=$content['banner_detail2']?></p>
						<a href="<?= base_url() ?>cake">Wedding cakes</a>
						<a href="<?= base_url() ?>cake">Birthday cakes</a>
					</div>
				</div>
				<div class="col">
					<div class="image">
						<img src="<?= !empty($content['image5']) ? getImageSrc(UPLOAD_PATH."images/", $content['image5']) : 'http://placehold.it/3000x1000' ?>">
					</div>
				</div>
			</div>

			<div class="flex">
				<div class="col">
					<div class="inner-box">
						<h2><?=$content['banner_heading3']?></h2>
						<p><?=$content['banner_detail3']?></p>
						<a href="<?= base_url() ?>drinks">Beverages Magic</a>
					</div>
				</div>
				<div class="col">
					<div class="image">
						<img src="<?= !empty($content['image6']) ? getImageSrc(UPLOAD_PATH."images/", $content['image6']) : 'http://placehold.it/3000x1000' ?>">
					</div>
				</div>
			</div>

			<div class="flex">
				<div class="col">
					<div class="inner-box">
						<h2><?=$content['banner_heading4']?></h2>
						<p><?=$content['banner_detail4']?></p>
						<a href="<?= base_url() ?>mirror-photo-booth">Mirror Photo Booth</a>
					</div>
				</div>
				<div class="col">
					<div class="image">
						<img src="<?= !empty($content['image7']) ? getImageSrc(UPLOAD_PATH."images/", $content['image7']) : 'http://placehold.it/3000x1000' ?>">
					</div>
				</div>
			</div>

			<div class="flex">
				<div class="col">
					<div class="inner-box">
					    <a href="<?= base_url() ?>gallery">Gallery</a>
						<a href="<?= base_url() ?>contact-us">Contact Us</a>
					</div>
				</div>
				<div class="col">
					<div class="image">
						<img src="<?= !empty($content['image8']) ? getImageSrc(UPLOAD_PATH."images/", $content['image8']) : 'http://placehold.it/3000x1000' ?>">
					</div>
				</div>
			</div>

		</div>
	</div>
</section>

</main>
<?php $this->load->view('includes/footer'); ?>
</body>
</html>