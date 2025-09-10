<?php
  $Page = "School Visits";

  $MicrodataPageType = "ItemPage";
  
  $OGType = 'website';
  $PageTitle = "School Visits | Birds Of Prey Experiences by SMJ Falconry";
  $PageDescr = "We bring our birds of prey into schools around Yorkshire, Lancashire &amp; surrounding areas. Our school visits are very popular &amp; fit in with your school curriculum. From Owl Babies for the younger years, up to flight, diet &amp; nutrition for older years. We often visit as a reward at the end of term!";
  $PageImage = 'site-files/images/og-images/owl-visit-smj-falconry-2.jpg';
  $PageKeywords = "birds of prey school visit, birds of prey school visit, owls school visit, birds of prey school visit yorkshire, birds of prey school visit west yorkshire, birds of prey school visit north yorkshire, birds of prey school visit lancashire, owls school visit yorkshire, owls school visit west yorkshire, owls school visit north yorkshire, owls school visit lancashire";

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
          <link itemprop="item" href="http://www.smjfalconry.co.uk/birds-of-prey-learn/">
		  <meta itemprop="name" content="Learning About Birds Of Prey">
		  <meta itemprop="position" content="2">
        </div>
        <div itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <link itemprop="item" href="<?php echo 'http://'.$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];?>">
		  <meta itemprop="name" content="School Visit">
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
				
                  <div class="shaded-container">				    
					<!-- Heading Row - Heading Row - Heading Row - Heading Row - Heading Row --> 
				    <div class="row">
					  <div class="col-sm-5"></div>
				      <div class="col-sm-7"><h1>Birds of Prey <span itemprop="name">School Visits</span></h1></div>
				    </div>
				    <!-- Main Section Row - Main Section Row - Main Section Row - Main Section Row -->
				    <div class="row"> 
					  <div class="col-sm-5">
					    <div class="bordered-image">
                          <img itemprop="image" src="/site-files/images/site-images/owl-visit-smj-falconry.jpg" alt="School Visit" />
                        </div>
                        <div class="hidden-xs">
						  <div class="divide20"></div>
						  <?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/content/testimonial-school-visit.php') ;?>
						</div>
				      </div>
					  <!-- - Main Content - Main Content - Main Content - Main Content -->
                      <div class="col-sm-7">
					    <?php 
						  include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/content/school-visits.php') ;
						  $ContactEmail='roger@smjfalconry.co.uk';
						  $ContactSubject='School | Contact Form';
						  echo "<hr>";
						  echo "<aside>";
 					      echo "  <h2>Get In Touch</h2>";
					      echo "  <p>Whatever your question we're here to help, drop us a line and we'll get back to you.</p>";
						  include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/contact-form.php') ;
						  echo "</aside>";						  
						?>						
                        <div class="visible-xs">
                          <div class="divide20"></div>
                          <?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/content/testimonial-school-visit.php'); ?>
                        </div>					
                      </div>
					  
				    </div> <!-- End: Main Row -->
  				  </div> <!-- End: Shaded Container -->
				  
				  <!-- /\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/ -->
				  <!-- CONSENSUS SECTION - CONSENSUS SECTION - CONSENSUS SECTION -->
				  <!-- /\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/ -->
				  <?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/sections/school-visits-consensus.php'); ?>
				  <!-- /\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/ -->
				  <!-- WIDGETS - WIDGETS - WIDGETS - WIDGETS - WIDGETS - WIDGETS - WIDGETS - WIDGETS -->
				  <!-- /\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/ -->
				  <?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/sections/widget-row-schools.php') ;?>
				  
                </div> <!-- End: Container -->
            </section> <!-- End: Main Content Section -->				
				
        <?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/footer.php') ;?>
      </div> <!-- End: Page Inner } -->
    </div> <!-- End: Page Wrapper } -->
</body>
</html>
