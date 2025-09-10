<?php
  $Page = "Example Owl Encounter";

  $OGType = 'website';
  $PageTitle = "Example Of An Owl Experience Day | SMJ Falconry";
  $PageDescr = "Soon you’ll be handling some of the birds with guidance from a professional bird-handler, to make you comfortable with each other, before moving onto flying them to and from your gloved hand.";
  $PageImage = 'site-files/images/og-images/tawny-owl-smj-falconry.jpg';
  $PageKeywords = "example experience owls, example owl encounter, example experience owls yorkshire, example experience owls west yorkshire, example experience owls north yorkshire, example experience owls lancashire, example owl encounter yorkshire, example owl encounter west yorkshire, example owl encounter north yorkshire, example owl encounter lancashire";
  
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
          <link itemprop="item" href="http://www.smjfalconry.co.uk/birds-of-prey-experiences/">
		  <meta itemprop="name" content="Birds Of Prey Experiences">
		  <meta itemprop="position" content="2">
        </div>
        <div itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <link itemprop="item" href="http://www.smjfalconry.co.uk/birds-of-prey-experiences/owl-experience/">
		  <meta itemprop="name" content="Owl Encounter">
		  <meta itemprop="position" content="3">
        </div>
        <div itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <link itemprop="item" href="<?php echo 'http://'.$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];?>">
		  <meta itemprop="name" content="Example Owl Encounter">
		  <meta itemprop="position" content="4">
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
                    
					<!-- HEADING ROW - HEADING ROW - HEADING ROW - HEADING ROW --> 
					<div class="row">
                      <div class="col-sm-7"><h1>Example of an Owl Encounter's activities</h1></div>
					  <div class="col-sm-5"></div>
					</div>
					<!-- CONTENT ROW - CONTENT ROW - CONTENT ROW - CONTENT ROW -->
                    <div class="row">
                      <div class="col-sm-7">
                        <h2>Meet and Greet</h2>
                        <p>introduce ourselves to each other over a cup of tea or coffee. Conversation about the day’s plans and events, where we also find out more about your interest in the birds and personal preferences, so that we can tailor your day accordingly.</p>
                        <h2>Tour</h2>
                        <p>Tour around the birds’ living quarters and an introduction to more than 20 different species of owls, we have Barn owls, Little owl, White Faced, Boobook, Ashy Faced, European Eagle owl, Bengal Eagle owls, Asian Brown Wood owl, Snowy owls, Burrowing, Great Grey, Northern Hawk, Long-Eared, Chaco, Canadian Great Horned, an African Spotted Eagle owl, a MacKinder’s Eagle owl, Tawny, Tropical Screech and an Abyssinian Eagle owl</p>
                        <h2>Handling</h2>
                        <p>Soon you’ll be handling some of the birds with guidance from a professional bird-handler, to make you comfortable with each other, before moving onto flying them to and from your gloved hand.</p>
                        <h2>Flying</h2>
                        <p>Flying 3 or 4 of our owls, a close encounter with an impressive bird of prey in flight!</p>
                        <p><strong>Don’t forget your camera!</strong></p>
				        <p><a class="brown-button" href="/birds-of-prey-experiences/owl-experience/">Purchase This Experience</a></p>
					  </div>
					  <div class="col-sm-5">
					    <div class="shaded-container">
                          <?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/content/note-arranging-date.php') ; ?>
						</div>
						<div class="shaded-container">
						  <?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/content/note-location.php') ; ?>
                        </div>
						<div class="shaded-container">
                          <img src="/site-files/images/site-images/tawny-owl-smj-falconry.jpg" alt="Tawny Owl" />
						</div>
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
