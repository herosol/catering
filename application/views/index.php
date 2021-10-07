<!doctype html>
<html>
<head>
<title>Home - Halo Catering</title>
<?php $this->load->view('includes/site-master'); ?>
</head>
<body id="home-page">
<?php $this->load->view('includes/header'); ?>
<main>
<section id="banner">
	<div class="bannerSlider owl-carousel owl-theme" id="owl-SmBanner">
        <div class="item">
            <div class="image">
                <img src="<?= base_url() ?>assets/images/slider3.jpg">
            </div>
        </div>
        <div class="item">
            <div class="image">
                <img src="<?= base_url() ?>assets/images/slider2.jpg">
            </div>
        </div>
        <div class="item">
            <div class="image">
                <img src="<?= base_url() ?>assets/images/slider1.jpg">
            </div>
        </div>
    </div>
</section>

<section id="abt" class="cmnSec">
    <div class="cntnt">
		<div class="contain">
			<div class="text-center">
				<h1>Halo Catering</h1>
				<p>Quality the nunc bibe endum in finibus elit eget they solli citudin elit.</p>
			</div>
        </div>
	</div>
	<div class="contain">
	    <div class="outer-flex">
			<div class="flex">
				<div class="col">
					<div class="inner-box">
						<h2>Catering Event Services</h2>
						<a href="wedding.php">Weddings</a>
						<a href="corporate.php">Corporate</a>
						<a href="wakes.php">Wakes</a>
						<a href="birthday.php">Birthdays / Parties</a>
						<a href="christmas.php">Christmas</a>
					</div>
				</div>
				<div class="col">
					<div class="image">
						<img src="<?= base_url() ?>assets/images/34.jpg">
					</div>
				</div>
			</div>

			<div class="flex">
				<div class="col">
					<div class="inner-box">
						<h2>Cake Shop</h2>
						<p>Quality the nunc bibe endum in finibus elit eget they solli citudin elit.</p>
						<a href="cake.php">Wedding cakes</a>
						<a href="cake.php">Birthday cakes</a>
					</div>
				</div>
				<div class="col">
					<div class="image">
						<img src="<?= base_url() ?>assets/images/37.jpg">
					</div>
				</div>
			</div>

			<div class="flex">
				<div class="col">
					<div class="inner-box">
						<h2>Drinks</h2>
						<p>Quality the nunc bibe endum in finibus elit eget they solli citudin elit.</p>
						<a href="drink.php">Beverages Magic</a>
					</div>
				</div>
				<div class="col">
					<div class="image">
						<img src="<?= base_url() ?>assets/images/drin.jpg">
					</div>
				</div>
			</div>

			<div class="flex">
				<div class="col">
					<div class="inner-box">
						<h2>Mirror photo booth</h2>
						<p>Quality the nunc bibe endum in finibus elit eget they solli citudin elit.</p>
						<a href="mirror.php">Mirror Photo Booth</a>
					</div>
				</div>
				<div class="col">
					<div class="image">
						<img src="<?= base_url() ?>assets/images/booth.jpg">
					</div>
				</div>
			</div>

			<div class="flex">
				<div class="col">
					<div class="inner-box">
					    <a href="gallery.php">Gallery</a>
						<a href="contact.php">Contact Us</a>
					</div>
				</div>
				<div class="col">
					<div class="image">
						<img src="<?= base_url() ?>assets/images/slide-2.jpg">
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