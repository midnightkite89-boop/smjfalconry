<?php
  $Page = "Example Birthday";
  
  $OGType = 'website';
  $PageTitle = "Example Of A Birthday Party | Birds Of Prey Experiences by SMJ Falconry";
  $PageDescr = "Everyone will get the chance to handle some of the birds, with guidance from a professional bird-handler. Then, once you are all comfortable, flying the birds to and from gloved hands.";
  $PageImage = 'site-files/images/og-images/birthday-party-smj-falconry-4.jpg';
  $PageKeywords = "example birthday birds of prey, example birthday falconry, example birthday birds of prey yorkshire, example birthday birds of prey west yorkshire, example birthday birds of prey north yorkshire, example birthday birds of prey lancashire, example birthday falconry yorkshire, example birthday falconry west yorkshire, example birthday falconry north yorkshire, example birthday falconry lancashire";
  
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
          <link itemprop="item" href="http://www.smjfalconry.co.uk/birds-of-prey-services/">
		  <meta itemprop="name" content="Birds Of Prey Services">
		  <meta itemprop="position" content="2">
        </div>
        <div itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <link itemprop="item" href="http://www.smjfalconry.co.uk/birds-of-prey-services/birthday-party/">
		  <meta itemprop="name" content="Birthday Party">
		  <meta itemprop="position" content="3">
        </div>
        <div itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <link itemprop="item" href="<?php echo 'http://'.$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];?>">
		  <meta itemprop="name" content="Example Birthday Party">
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
                      <div class="col-sm-7"><h1>Example of one of these unique birthday party experiences</h1></div>
					  <div class="col-sm-5"></div>
					</div>
					<!-- CONTENT ROW - CONTENT ROW - CONTENT ROW - CONTENT ROW -->
                    <div class="row">
                      <div class="col-sm-7">
						<p>The example that follows details activities that you’d expect to experience when you visit us here, if we’re coming to you we bring around half a dozen birds and flying them is dependant upon having a large open area nearby.  Otherwise the activities would be very similar:</p>
                          <ul>
                            <li>Meet and greet - introduce ourselves to yourselves and the children.</li>
                            <li>Conversation about the day’s plans and events and finding out what the birthday boy or girl like about the birds and if they have any favourites.</li>
                            <li>If you’re coming here we’ll tour around the birds’ living quarters and an introduction to more than 30 different species of birds of prey, we have owls, hawks, falcons, kestrels and an eagle. We have around 13 species of birds of prey that are suitable for our youngest guests to handle later.</li>
                            <li>While we’re finding out which birds are today’s favourites, our staff will be preparing some birds to be handled and flown.</li>
                            <li>Soon everyone will get the chance to handle some of the birds, on a gloved hand, with guidance from a professional bird-handler to make you and the children comfortable.</li>
                            <li>Flying the birds to and from gloved hands.</li>
                            <li>Finally, if you’re visiting us, or there’s a large open area nearby, a professional falconer will put on a flying display for you all.</li>
                          </ul>
                        <p>We can cater for up to around 10 children, and parents. And we can stop anytime during the activities for drinks, cakes and such like - we can put a marquee up for you here.</p>
                        <p>We only accept visits from people who are booking one of these special experiences so you can be sure of our personal and undivided attention.</p>
                        <p>Don’t forget your camera!</p>
                      </div>
					  <div class="col-sm-5">
					    <div class="shaded-container">
                          <?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/content/note-booking-your-party.php') ; ?>
						</div>
						<div class="shaded-container">
						  <?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/content/note-location.php') ; ?>
                        </div>
						<div class="shaded-container">
                          <img src="/site-files/images/site-images/birthday-party-smj-falconry-4.jpg" alt="Birthday Girl" />
						</div>
						
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
