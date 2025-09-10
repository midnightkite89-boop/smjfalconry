<?php
  $Page = "Example Experience";
  
  $OGType = 'website';
  $PageTitle = "Example Of A Bird Of Prey Experience Day | SMJ Falconry";
  $PageDescr = "Full and half-day experiences follow a similar agenda, the full-day experience covers the various activities in more depth. The only difference in the agenda for a full-day is that we break for a lunch, which we provide for you.";
  $PageImage = 'site-files/images/og-images/white-faced-scops-owl-smj-falconry.jpg';
  $PageKeywords = "example experience birds of prey, example experience falconry, example experience birds of prey yorkshire, example experience birds of prey west yorkshire, example experience birds of prey north yorkshire, example experience birds of prey lancashire, example experience falconry yorkshire, example experience falconry west yorkshire, example experience falconry north yorkshire, example experience falconry lancashire";
  
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
          <link itemprop="item" href="http://www.smjfalconry.co.uk/birds-of-prey-experiences/experience-day/">
		  <meta itemprop="name" content="Experience Day">
		  <meta itemprop="position" content="3">
        </div>
        <div itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <link itemprop="item" href="<?php echo 'http://'.$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];?>">
		  <meta itemprop="name" content="Example Experience Day">
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
                      <div class="col-sm-7"><h1>Example of an Experience Day’s activities</h1></div>
					  <div class="col-sm-5"></div>
					</div>
					<!-- CONTENT ROW - CONTENT ROW - CONTENT ROW - CONTENT ROW -->
                    <div class="row">
                      <div class="col-sm-7">
                        <p>Full and half-day Experiences follow a similar agenda, with the full-day experience covers the various activities in more depth. Here’s an example of one of these experiences:</p>
                        <h2>Meet and Greet</h2>
                        <p>introduce ourselves to each other over a cup of tea or coffee. Conversation about the day’s plans and events, where we also find out more about your interest in the birds and personal preferences, so that we can tailor your day accordingly.</p>
                        <h2>Tour</h2>
                        <p>Tour around the birds’ living quarters and an introduction to more than 30 different species of birds of prey. We have owls, hawks, falcons, kestrels and a vulture and eagle; you’re very likely to find that we have your favourite!</p>
                        <h2>Handling</h2>
                        <p>We then move on to get you accustomed to carrying and holding the birds on a glove. Our falconers will bring a variety of birds to you to see and hold yourself.</p>
                        <h2>Hawk Walk</h2>
                        <p>Now we move onto a Hawk Walk.  Many people come and visit us just for this and, as you can imagine, it’s a very exciting part of the day.  Having familiarised yourselves with handling the birds, and feeling confident, we take a Harris Hawk out and fly him/her free around our adjoining fields.</p>
                        <h2>Flying</h2>
                        <p>As we head back with the hawk our staff will be preparing some more birds for you to have the opportunity to handle and fly.</p>
                        <h2>Falcon Demonstration</h2>
                        <p>Finally, a professional falconer will demonstrate flying falcons with a lure, where you’ll understand much more about the birds' flight and behaviour.</p>
                        <p>Don’t forget your camera!</p>
                        <p><strong>A full day usually starts at 10am and finishes at 3.30pm and a half-day is a morning or afternoon.</strong></p>
                        <p><a class="brown-button" href="/birds-of-prey-experiences/experience-day/">Purchase an Experience</a></p>
					  </div>
					  <div class="col-sm-5">
					    <div class="shaded-container">
                          <?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/content/note-arranging-date.php') ; ?>
						</div>
						<div class="shaded-container">
						  <?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/content/note-location.php') ; ?>
                        </div>
						<div class="shaded-container">
                          <img src="/site-files/images/site-images/black-kite-smj-falconry.jpg" alt="Black Kite" />
						</div>
						<div class="shaded-container">
                          <img src="/site-files/images/site-images/ashy-faced-barn-owl-smj-falconry-2.jpg" alt="Ashy Faced Owl" />
						</div>
					  </div>
                    </div>

                    

                    <!-- /\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/ -->
                    <!-- WIDGETS - WIDGETS - WIDGETS - WIDGETS - WIDGETS - WIDGETS - WIDGETS - WIDGETS -->
                    <!-- /\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/ -->
                    <?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/sections/widget-row-experience-day.php') ;?>
                 
                </div>


            </section>

            <?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/footer.php') ;?>

        </div>
    </div>
</body>
</html>
