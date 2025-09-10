<?php
  $Page = "Weddings";

  $MicrodataPageType = "ItemPage";
  
  $OGType = 'website';
  $PageTitle = "Weddings | Birds Of Prey Experiences &amp; Services by SMJ Falconry";
  $PageDescr = "Tailored just for you on your special day. Choose from an incredible ring bearing owl or hawk who will give flying delivery of the rings to your Best Man during your ceremony. Our birds can be available for your photos &amp; you can even have a bird of prey display team for a flying display &amp; photographs at your reception.";
  $PageImage = 'site-files/images/og-images/white-faced-scops-owl-smj-falconry.jpg';
  $PageKeywords = "birds of prey wedding, birds of prey wedding, owl wedding, birds of prey wedding yorkshire, birds of prey wedding west yorkshire, birds of prey wedding north yorkshire, birds of prey wedding lancashire, owl wedding yorkshire, owl wedding west yorkshire, owl wedding north yorkshire, owl wedding lancashire";

  include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/doctype.php') ;
  include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/head.php');
?>

<body itemscope itemtype="http://schema.org/Product">
    <!-- Breadcrumbs for Google -->
    <div itemscope itemtype="http://schema.org/BreadcrumbList">
        <div itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <link itemprop="item" href="http://www.smjfalconry.co.uk">
		  <meta itemprop="name" content="Birds Of Prey Experiences &amp; Services">
		  <meta itemprop="position" content="1">
        </div>
        <div itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <link itemprop="item" href="http://www.smjfalconry.co.uk/birds-of-prey-services/">
		  <meta itemprop="name" content="Birds Of Prey Services">
		  <meta itemprop="position" content="2">
        </div>
        <div itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <link itemprop="item" href="<?php echo 'http://'.$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];?>">
		  <meta itemprop="name" content="Wedding">
		  <meta itemprop="position" content="3">
        </div>
	</div>
	<!-- URL for Entire-Page-Level Metadata -->
    <link itemprop="url" href="<?php echo 'http://'.$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];?>">
	<!-- Page Content from here onwards... -->
    <div id="page-wrapper">
        <div class="page-inner">
           <?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/header.php') ;?>

            <section class="main-content">
              <div class="container">
                
                <div class="row">
                  <div class="col-sm-12">
                    <div class="shaded-container">
                        <h1>Bird of Prey <span itemprop="name">Wedding Services</span></h1>
						<div itemprop="description">
                          <p>Our wedding experience will really add something spectacular to your special day -- creating extraordinary memories for you and your guests. You can choose from a wide variety of options, including your choice of friendly ring bearer (a beautiful owl or majestic hawk) who will fly the rings to your best man during the ceremony. We can also offer a birds of prey display team for photographs afterwards at your reception; also a fun and interactive flying display, if you wish!</p>
                          <p>Your guests can also meet, handle and photograph the bird(s).</p>
                          <p>We know this is a very special day, and with more than 5 years of experience providing the service of our birds of prey at weddings, you can be assured that we’ll deliver!</p>
						</div>
                    </div>
                  </div>
                </div>

                <div class="row equal-height-grid-columns-sm">

                    <div class="col-sm-4">
                      <div class="shaded-container">
                        <h2>Flying Wedding Ring Delivery</h2>
                        <div class="bordered-image">
                          <img itemprop="image" src="/site-files/images/site-images/wedding-ring-delivery-smj-falconry.jpg" alt="Wedding Ring Delivery"/>
                        </div>
						<br>
                        <p>One of our friendly ring bearers (a magnificent owl or hawk) will fly down the aisle delivering wedding rings to the Best Man or another person of your choice. This special guest will also be available following your ceremony for handing and photographs.</p>
                        <p><strong>Prices start from £375</strong></p>
                      </div>
                    </div>   
                    

                    <div class="col-sm-4">
                      <div class="shaded-container">
                        <h2>Ring Delivery &amp; Reception</h2>
                        <div class="bordered-image">
                          <img src="/site-files/images/site-images/owl-bride-and-groom-smj-falconry.jpg" alt="Bride And Groom"/>
                        </div>
						<br>
                        <p>In addition to the flying wedding ring delivery, the owl or Harris hawk of your choice will be available during your reception where they can be held and photographed.</p>
                        <p><strong>Prices start from £425</strong></p>
                      </div>
                    </div>

                    <div class="col-sm-4">
                      <div class="shaded-container">
                        <h2>Wedding Ring Delivery &amp; Display</h2>
                        <div class="bordered-image">
                          <img src="/site-files/images/site-images/merlin-smj-falconry.jpg" title="Photo by Tony and Carol Dilger" alt="Merlin"/>
                        </div>
						<br>
                        <p>Wedding ring delivery, this time with the addition of an amazing bird of prey flying display by a professional falconer -- this fun and interactive flying display will include commentary and even involve some of your guests!</p>
                        <p>You will be able to choose a few birds for the flying display from our extensive collection, which includes a diverse range of owls, falcons, hawks, kites and more. There will also be plenty of opportunity for everybody to handle and photograph the birds.</p>
                        <p><em>A flying display requires a large outdoor area at your venue.</em></p>
                        <p><strong>Prices start from £525</strong></p>
                      </div>
                    </div>

                </div>

                <div class="shaded-container">               
                  <div class="row">
                    <div class="col-sm-6">
                        <h2>...moreover</h2>
                        <p>We can also tailor a unique experience just for you!</p>
                        <p>So -- if you want an impressive flying ring delivery and/or a birds of prey display team at your reception, or anything else you might be looking for -- get in touch and we can arrange for you to come here and choose your favourite owl or hawk. Similarly, if you want a birds of prey display you can choose from your favourite owls, falcons, hawks, kites, kestrels and maybe even an eagle or vulture!</p>
                        <p>We can cater for you at any location. We will be travelling to you from Oxenhope, which is close to the adjoining borders of West Yorkshire, North Yorkshire and Lancashire in the UK.</p>
                        <p>To enquire about our wedding experiences please use the form to the right, or click the button below to visit our contact us page.</p>
                        <!-- /\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\ -->
                        <!-- CONTACT BUTTON - CONTACT BUTTON - CONTACT BUTTON -->
                        <!-- /\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\ -->
                        <aside><p><a href="/contact" class="brown-button">Contact Us</a></p></aside>

                    </div>

                    <!-- /\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\//\/\ -->
                    <!-- CONTACT FORM - CONTACT FORM - CONTACT FORM - CONTACT FORM - CONTACT FORM - CONTACT FORM - CONTACT FORM - CONTACT FORM -->
                    <!-- /\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\//\/\ -->
					<aside>   
                      <div class="col-sm-6">
					    <h2>Get In Touch</h2>
					    <p>Whatever your question we're here to help, drop us a line and we'll get back to you.</p>
                        <?php
                          $ContactEmail='chris@smjfalconry.co.uk';
                          $ContactSubject='Wedding | Contact Form';
                          include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/contact-form.php') ;
                        ?>
                      </div>
					</aside>
					
                  </div>
                </div>

                <!-- /\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/ -->
                <!-- WIDGETS - WIDGETS - WIDGETS - WIDGETS - WIDGETS - WIDGETS - WIDGETS - WIDGETS -->
                <!-- /\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/ -->
                <?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/sections/widget-row-generic.php') ;?>
                   
              </div>
          </section>

          <?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/footer.php') ;?>

        </div>
    </div>
</body>
</html>
