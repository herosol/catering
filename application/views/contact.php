<!doctype html>
<html>
<head>
<title><?=$page_title?> — <?=$site_settings->site_name?></title>
<?php $this->load->view('includes/site-master'); ?>
</head>
<body id="home-page">
<?php $this->load->view('includes/header'); ?>
<main>
<section id="banner" class="about-page">
	
</section>

<section id="abt" class="cmnSec inner-page all-page-cntnt coontact-blk">
    <div class="cntnt">
		<div class="contain">
			<div class="text-center">
				<h1><?=$content['main_heading']?></h1>
				<p><?=$content['main_heading_tagline']?></p>
			</div>
        </div>
	</div>
	<div class="contain">
		<?=$content['main_content']?>
    </div>
</section>

</main>
<?php $this->load->view('includes/footer'); ?>
</body>
</html>