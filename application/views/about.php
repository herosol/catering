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

<section id="abt" class="cmnSec inner-page all-page-cntnt">
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
        <div class="flex team-grid">
            <?php foreach($team as $mem): ?>
                <div class="col">
                    <div class="team-heading">
                        <h4><?=$mem->mem_name?> <em><?=$mem->mem_designation?></em></h4>
                    </div>
                    <?=$mem->mem_description?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

</main>
<?php $this->load->view('includes/footer'); ?>
</body>
</html>