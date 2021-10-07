<?php $page = $this->uri->segment(1); ?>

<header class="ease simple">
<div class="topNav">
        <div class="contain">
            <div class="flex">
                <div class="colL">
                    
                </div>
                <div class="colR flex">
                    <ul class="top-lnks">
                        <li class="<?php if( $page == ""){echo 'active';} ?> hideSm">
                          <a href="<?= base_url() ?>">Home</a>
                        </li>
                        <li class="<?php if( $page=="about-us" ){echo 'active';} ?> hideSm">
                          <a href="<?= base_url() ?>about-us">About</a>
                        </li>
                        
                        <li class="<?php if( $page=="contact-us" ){echo 'active';} ?> hideSm">
                            <a href="<?= base_url() ?>contact-us">Contact</a>
                        </li>
                        <li class="hideSm">
                            <a href="mailto:<?= $site_settings->site_email ?>">E: <?= $site_settings->site_email ?></a>
                        </li>
                        <li class="hideSm">
                            <a href="tell:<?= $site_settings->site_phone ?>">T: <?= $site_settings->site_phone ?></a>
                        </li>
                    </ul>
                    <ul class="social flex social-icons">
                        <li><a href="<?= makeExternalUrl($site_settings->site_instagram) ?>" class="instagram" target="blank"></a></li>
                        <li><a href="<?= makeExternalUrl($site_settings->site_linkedin) ?>" class="in" target="blank"></a></li>
                        <li><a href="<?= makeExternalUrl($site_settings->site_facebook) ?>" class="fb" target="blank"></a></li>
                        <li><a href="<?= makeExternalUrl($site_settings->site_twitter) ?>" class="tw" target="blank"></a></li>
                        <li><a href="<?= makeExternalUrl($site_settings->site_pinterest) ?>" class="pin" target="blank"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="contain">

        <div class="logo ease">

            <a href="index.php"><img src="<?= base_url().SITE_IMAGES.'images/'.$site_settings->site_logo ?>" alt=""></a>

        </div>

        <div class="toggle"><span></span> <em>Menu</em></div>
        <div class="navBasket">
            <a href="<?= base_url() ?>contact-usp" class="topBasket">
                Get a quote
            </a>
        </div>
        <nav class="ease">

            <ul id="nav">
               
                <li class="<?php if($page=="events" ){echo 'active';} ?> drop">

                    <a href="javascript:void(0)">Events <i class="fa fa-angle-down"></i></a>
                    <ul class="sub regular scrollbar">
                        <li><a href="wedding.php">Weddings</a></li>
                        <li><a href="corporate.php">Corporate</a></li>
                        <li><a href="wakes.php">Wakes</a></li>
                        <li><a href="birthday.php">Birthdays / Parties</a></li>
                        <li><a href="christmas.php">Christmas</a></li>
                        
                    </ul>
                </li>
                <li class="<?php if( $page=="menus" ){echo 'active';} ?> drop">

                    <a href="javascript:void(0)">Menus <i class="fa fa-angle-down"></i></a>
                    <ul class="sub regular scrollbar">
                        <li><a href="chines-buffet.php">Chinese Buffets</a></li>
                        <li><a href="canapes.php">Canapes</a></li>
                        <li><a href="caribbean-wedding.php">Caribbean Wedding</a></li>
                        <li><a href="chines-buffet.php">Bowl Food</a></li>
                        <li><a href="chines-buffet.php">Buffets</a></li>
                        <li><a href="chines-buffet.php">Bespoke Dining</a></li>
                        <li><a href="chines-buffet.php">Christmas Parties</a></li>
                        <li><a href="chines-buffet.php">Barbecue</a></li>
                        <li><a href="chines-buffet.php">Picnic Parties</a></li>
                        <li><a href="chines-buffet.php">Breakfast</a></li>
                    </ul>
                </li>
                
                <li class="<?php if( $page=="cake" ){echo 'active';} ?>">
                    <a href="<?= base_url() ?>cake">Cake</a>

                </li>
                <li class="<?php if($page=="drink"){echo 'active';} ?>">
                    <a href="<?= base_url() ?>drink">Drinks</a>

                </li>
                <li class="<?php if($page=="mirror"){echo 'active';} ?>">
                    <a href="<?= base_url() ?>mirror">Mirror Photo Booth</a>

                </li>
                <li class="<?php if($page=="gallery"){echo 'active';} ?> hideSm">
                    <a href="<?= base_url() ?>gallery">Gallery</a>
                </li>
                

            </ul>

        </nav>
        
        

        <div class="clearfix"></div>

    </div>

</header>

<!-- header -->





<div class="upperlay"></div>

<!-- <div id="pageloader">

    <span class="loader"></span>

</div> -->

