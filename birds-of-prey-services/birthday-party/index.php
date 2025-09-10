<?php
  $Page = "Birthday Parties";

  $MicrodataPageType = "ItemPage";
  
  $OGType = 'website';
  $PageTitle = "Birthday Parties | Birds Of Prey Experiences by SMJ Falconry";
  $PageDescr = "Suitable for children old enough to be able to appreciate the birds, &amp; beyond. Come along for an unforgettable experience where they will be able to handle &amp; fly the birds as well as watch falcons fly at incredible speed. We can even supply a themed cake!";
  $PageImage = 'site-files/images/og-images/white-faced-scops-owl-smj-falconry.jpg';
  $PageKeywords = "birds of prey birthday party, birds of prey birthday party, owl birthday party, birds of prey birthday party yorkshire, birds of prey birthday party west yorkshire, birds of prey birthday party north yorkshire, birds of prey birthday party lancashire, owl birthday party yorkshire, owl birthday party west yorkshire, owl birthday party north yorkshire, owl birthday party lancashire";

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
		  <meta itemprop="name" content="Birthday Party">
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
                        
                        <div class="row">
                            <div class="col-sm-12">                                
                                <h1 itemprop="name">Birthday Parties</h1>
                            </div>
                        </div>
                                

                        <div class="row">
                            <div class="col-sm-6">
							    <div itemprop="description">
                                  <p>Enjoy a unique and unforgettable birthday experience with our impressive birds of prey!</p>
                                  <p>An unforgettable opportunity for children (and adults) of all ages</p>
                                  <p>You’ll have the opportunity to get close to, handle and even fly our owls, falcons, kestrels and hawks.  We have around 30 different species of birds of prey. We can also organise a Ferret Race for you.</p>  
                                  <p>We can supply party invitations and party bags which will include a photograph of each guest holding one of the birds.</p>
                                  <p>Our experienced falconers will help the children learn about these magnificent creatures, their habits, how they feed and how they live in the wild.</p>
                                  <p>You can visit us here where we are situated in a picturesque countryside location, or we can visit you at your home, or another venue of your choice.</p>
                                  <p>Prices start from £156 inc.VAT</p>
                                  <p>For further information and a specific quote for your event:</p>
                                  <aside><p><a href="/contact" class="brown-button">Contact Us</a></p></aside> 
								</div>
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
                                      $ContactSubject='Birthday Party | Contact Form';
                                      include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/contact-form.php') ;
                                    ?>
                                </div>
							</aside>								
                        </div>
                    </div>

                    <!-- /\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/ -->
                    <!-- WIDGETS - WIDGETS - WIDGETS - WIDGETS - WIDGETS - WIDGETS - WIDGETS - WIDGETS -->
                    <!-- /\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/ -->
                    <?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/sections/widget-row-birthday.php') ;?>
                    
                  </div>
              </section>

            <?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/footer.php') ;?>

        </div>
    </div>
</body>
</html>
