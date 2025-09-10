<?php

    $Page = "Home";

    $OGType = 'website';
    $PageTitle = "Birds Of Prey Experiences &amp; Services by SMJ Falconry";
    $PageDescr = "We offer you the opportunity to have personal, first-hand experiences with birds of prey and have a wide variety including hawks, falcons, kestrels, owls, kites and a few others. To enable us to provide you with the best, most engaging experiences we are a private falconry centre, this means you get well looked after by a team dedicated to you.";
    $PageImage = 'site-files/images/og-images/barn-owl.jpg';
	$PageKeywords = "birds of prey yorkshire, birds of prey west yorkshire, birds of prey north yorkshire, birds of prey lancashire, birds of prey centre yorkshire, birds of prey centre west yorkshire, birds of prey centre north yorkshire, birds of prey centre lancashire, falconry yorkshire, falconry west yorkshire, falconry north yorkshire, falconry lancashire, falconry centre yorkshire, falconry centre west yorkshire, falconry centre north yorkshire, falconry centre lancashire";   
	
    include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/doctype.php') ;
    include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/head.php');
?>

<body itemscope itemtype="https://schema.org/Organization">
	<!-- Breadcrumbs for Google -->
    <div itemscope itemtype="https://schema.org/BreadcrumbList">
        <div itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <link itemprop="item" href="https://www.smjfalconry.co.uk">
		  <meta itemprop="name" content="Birds Of Prey Experiences &amp; Services">
		  <meta itemprop="position" content="1">
        </div>
	</div>
	<!-- URL for Entire-Page-Level Metadata (also the logo) -->
    <link itemprop="url" href="<?php echo 'http://'.$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];?>">
	<link itemprop="logo" href="https://www.smjfalconry.co.uk/site-files/images/icons/152x152-bg.png">
	
	<!-- Page Content from here onwards... -->
    <div id="page-wrapper">
        <div class="page-inner">

            <?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/header.php') ;?>

            <section class="main-content">
                <div class="container">
                    <?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/main-banner.php') ;?>

                    <div class="bottom-gap">
					    <div class="row">
						    <div class="col-xs-12">
							  <h1>Welcome to <span itemprop="name">SMJ Falconry</span>!</h1> <!-- BE AWARE: The business name is marked-up with MicroData --> 
							</div>
						</div>
                        <div class="row">
                            <div class="col-md-7">
								<div itemprop="description"> <!-- BE AWARE: The description is marked-up with MicroData -->
                                 
								  <p>We offer exclusive experiences and services with birds of prey.</p>
                                  <p>Experiences are one-to-one, engaging and interactive, thus providing you with our undivided attention. A level of participation made possible by our being a private falconry centre and not open to the general public. Visiting is available by pre-booking only so there'll be no crowds, no queues and no interruptions from drop-in visitors -- just yourself and whomever you bring along, catered for by our friendly team. All our Experiences are one-to-one with our falconers - no groups or others involved. We will also provide you with refreshments.</p>
								  <p>We fully comply with all relevant legislation including The Animal Welfare Regulations 2018. Our Licence Number is 197751/545521, issued by Bradford Metropolitan District Council.</p>
                                  <p>Located in the beautiful "Brontë Country" countryside of Oxenhope, West Yorkshire (nearby Haworth and the adjoining borders of North Yorkshire and Lancashire), we have a diverse collection of more than 50 birds of prey including owls, falcons, hawks, kites and an eagle and vulture. Along with them we have many years of experience providing our guests with thrilling encounters, so you can certainly be assured of a memorable time!</p>
                                  <a href="/birds-of-prey-experiences/"><p>Discover birds of prey experiences &gt;</p></a>
                                  <p>As far as other services: Our birds have entertained crowds with interactive bird of prey displays, captivated children (and teachers) with school visits, flown wedding rings down the aisle with owls and hawks, persuaded pigeons to move on from the city centre and appeared on TV series and in a critically-acclaimed movie... in short, whatever type of service you're looking for we're bound to be able to help you!</p>
                                  <a href="/birds-of-prey-services/"><p>Browse our birds of prey services &gt;</p></a>
								  <p>We are passionate about learning and education too, and offer a broad range of services and activities to accommodate. Ranging from school visits to college-course partnership and beyond.</p>
								  <p>We are approved to deliver the Raptor Award Course, see below for more information.</p>
                                  <a href="/birds-of-prey-learn/"><p>Learn more &gt;</p></a>
								</div>
                            </div>
                <div class="col-md-5 visible-md visible-lg bordered-image">
								<img src="/site-files/images/widget-images/bengal-eagle-owl-smj-falconry-lg.jpg"  alt="Bengal Eagle Owl"/>
								<div class="divide10"></div>
                                <img src="/site-files/images/widget-images/kestrel-smj-falconry-lg-1.jpg"  alt="Kestrel"/>
								<div class="divide10 visible-md"></div>															
                                <img class="visible-md" src="/site-files/images/widget-images/tawny-owl-smj-falconry-lg.jpg" alt="Little Owl"/>
                            </div>
                        </div>
                    </div>

                    <!-- /\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/ -->
                    <!-- WIDGETS - WIDGETS - WIDGETS - WIDGETS - WIDGETS - WIDGETS - WIDGETS - WIDGETS - WIDGETS - WIDGETS - WIDGETS - WIDGETS -->
                    <!-- /\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/ -->
					<h2>Our Most Popular Experiences &amp; Services</h2>
					<p><em>Full listings are available in the main menu at the top of the page.</em></p>
					<?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/sections/widgets-home.php') ;?>
                    
                    <!-- /\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/ -->
                    <!-- LAST SECTION - LAST SECTION - LAST SECTION - LAST SECTION - LAST SECTION - LAST SECTION - LAST SECTION - LAST SECTION -->
                    <!-- /\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/ -->

                    <div class="bottom-gap">
                        <div class="row">
                            <div class="col-sm-6">
                                <h2>Locations </h2>
                                <p>You can come to us, or we can bring our birds of prey to you. We only accept visitors by appointment, so that if you visit us you can be assured of a personal, engaging experience and of our undivided attention. We are located in <span itemprop="location" itemscope itemtype="https://schema.org/Place"><span itemprop="address" itemscope itemtype="https://schema.org/PostalAddress"><span itemprop="addressLocality">Oxenhope</span>, <span itemprop="addressRegion">West Yorkshire</span>, which is near the adjoining borders of West Yorkshire, North Yorkshire and Lancashire in the <span itemprop="addressCountry">UK</span></span></span>. Click here to <a href="/contact">contact us…</a></p>
                            </div>
                            <div class="col-sm-6">
                              <h2>Looking for something that isn't here?</h2>
                              <p>We tailor our offerings for you personally when we’re together. It’s very easy for us to provide you with a personalised experience, catering to your taste and preferences, as we are a private falconry centre and not open to the public. Further than that, if you’re looking for an experience or service that you don’t see listed here and would like to check that we can make something specific happen for you please get in touch with us and we’ll do our very best to achieve what you're looking for.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <?php
			  $FooterOrgMicroData=true; // this setting is unique to the homepage
			  include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/footer.php');
			?>
        </div>
    </div>

    <!-- Support of the carousel -->
    <script src="/site-files/js/slick.min.js"></script>  
    <script src="/site-files/js/main-carousel.min.js" async=""></script>	
	
</body>
</html>

