<?php
  $Page = "Contact";

  $MicrodataPageType = 'ContactPage';

  $OGType = 'website';
  $PageTitle = "Contact Us | Birds Of Prey Experience Days &amp; Displays by SMJ Falconry";
  $PageDescr = "Please get in touch, we'd love to hear from you. With a wide-variety of experiences and services on offer, including full-day experiences with owls, falcons, hawks, kites etc., We also do school visits, corporate events, film work and much, much more.";
  $PageImage = 'site-files/images/og-images/white-faced-scops-owl-smj-falconry.jpg';
  $PageKeywords = "contact smj falconry";

  include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/doctype.php') ;
  include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/head.php');
?>

<body>
    <!-- Breadcrumbs for Google -->
    <div itemscope itemtype="http://schema.org/BreadcrumbList">
        <div itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <link itemprop="item" href="http://www.smjfalconry.co.uk">
		  <meta itemprop="name" content="Birds Of Prey Experiences &amp; Services">
		  <meta itemprop="position" content="1">
        </div>
        <div itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <link itemprop="item" href="<?php echo 'http://'.$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];?>">
		  <meta itemprop="name" content="Contact Us">
		  <meta itemprop="position" content="2">
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

                  <!-- /\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/ -->
                  <!-- HEADING - HEADING - HEADING - HEADING - HEADING - HEADING - HEADING - HEADING - HEADING - HEADING - HEADING - HEADING -->
                  <!-- /\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/ -->
                  <div class="row">
                    <div class="col-sm-12">
                      <h1>Contact Us</h1>
					  <p>Whatever your question, we’re here to help. Use the contact details or form below and we'll get back to you.</p>
                    </div>
                  </div>    
                  
                  <!-- /\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/ -->
                  <!-- MAIN SECTION - MAIN SECTION - MAIN SECTION - MAIN SECTION - MAIN SECTION - MAIN SECTION - MAIN SECTION - MAIN SECTION -->
                  <!-- /\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/ -->

                  <div class="row">
                    <div class="col-sm-4">
                      <h2>Sandra</h2>
                      <strong><a href="tel:+44-7974-361299">07974 361299</a></strong>
                      <p><a href="mailto:sandra@smjfalconry.co.uk">sandra@smjfalconry.co.uk</a></p>
                    </div>
                    <div class="col-sm-4">
                      <h2>Office</h2>
                      <strong><a href="tel:+44-1535-646800">01535 646800</a></strong>
                      <p><a href="mailto:info@smjfalconry.co.uk">info@smjfalconry.co.uk</a></p>
                    </div>
                    <div class="col-sm-4">
                      <h2>Chris</h2>
					  <strong><a href="tel:+44-7534-649047">07534 649047</a></strong>
                      <p><a href="mailto:chris@smjfalconry.co.uk">chris@smjfalconry.co.uk</a></p>
                    </div>
                  </div>


                  <div class="row">
                    <!-- /\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\//\/\ -->
                    <!-- CONTACT FORM - CONTACT FORM - CONTACT FORM - CONTACT FORM - CONTACT FORM - CONTACT FORM - CONTACT FORM - CONTACT FORM -->
                    <!-- /\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\//\/\ -->
                    <div class="col-sm-6">
                      <?php
                        $ContactEmail='roger@smjfalconry.co.uk';
                        $ContactSubject='Contact Us | Contact Form';
						$HideMoreWaysContact=true; // please note this setting isn't always relevant
                        include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/contact-form.php') ;
                      ?>
                    </div>
                    <div class="col-sm-6">
                      <!-- /\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\//\/\ -->
                      <!-- NOTES - NOTES - NOTES - NOTES - NOTES - NOTES - NOTES - NOTES - NOTES - NOTES - NOTES - NOTES - NOTES - NOTES - NOTES -->
                      <!-- /\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\//\/\ -->
                      <div class="shaded-container">
                        <?php 
						  include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/content/note-booking-your-experience.php') ;
						  include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/content/note-weather.php') ;
						  include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/content/note-address.php') ;
						?>
						  
			          </div>
                    </div>
                  </div>
                  
                  <!-- /\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/ -->
                  <!-- WIDGETS - WIDGETS - WIDGETS - WIDGETS - WIDGETS - WIDGETS - WIDGETS - WIDGETS -->
                  <!-- /\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/ -->
				  <?php
					$IncludeWidgetRowTitle=true;$IncludeWidgetRowDivide=true;
					Include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/sections/widget-row-main.php') ;
				  ?>
                
                </div>


            </section>

            <?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/footer.php') ;?>

        </div>
    </div>
</body>
</html>
