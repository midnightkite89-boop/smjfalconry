<?php
  $Page = "Corporate";

  $MicrodataPageType = "CollectionPage";
  
  $OGType = 'website';
  $PageTitle = "Corporate Events &amp; Services | Birds Of Prey | SMJ Falconry";
  $PageDescr = "From team experience days to marketing campaigns, and client hospitality days to community profile raisers: The sky's the limit when it comes to our offering of corporate activities and services!";
  $PageImage = 'site-files/images/og-images/peregrine-hybrid-smj-falconry.jpg';
  $PageKeywords = "corporate birds of prey, corporate falconry, corporate birds of prey yorkshire, corporate birds of prey west yorkshire, corporate birds of prey north yorkshire, corporate birds of prey lancashire, publicity birds of prey, publicity falconry, publicity birds of prey yorkshire, publicity birds of prey west yorkshire, publicity birds of prey north yorkshire, publicity birds of prey lancashire, marketing birds of prey, marketing falconry, marketing birds of prey yorkshire, marketing birds of prey west yorkshire, marketing birds of prey north yorkshire, marketing birds of prey lancashire, brand birds of prey, brand falconry, brand birds of prey yorkshire, brand birds of prey west yorkshire, brand birds of prey north yorkshire, brand birds of prey lancashire";

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
          <link itemprop="item" href="<?php echo 'http://'.$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];?>">
		  <meta itemprop="name" content="Corporate">
		  <meta itemprop="position" content="3">
        </div>
	</div>
	<!-- URL for Entire-Page-Level Metadata -->
    <link itemprop="url" href="<?php echo 'http://'.$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];?>">
	<!-- Page Content from here onwards... -->
  <div id="page-wrapper">
    <div class="page-inner theme-standard-content">
      <?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/header.php') ;?>
      <section class="main-content">
        <div class="container">
          <div class="shaded-container">
            <h1>Corporate Experiences and Services</h1>
            <p class="alert-heads-up">From team experience days to marketing campaigns, and client hospitality days to community profile raisers: The sky's the limit when it comes to our offering of corporate activities and services!</p>
			<p>Here are a few examples of the kinds of experiences and services we can offer you:</p>             
          </div>
		  
		  <!-- BE AWARE: The alternating left/right aligned layouts are slightly different -->
		  <!--           Left aligned has only one image --> 
		  
		  <div itemscope itemtype="http://schema.org/Product" class="shaded-container"><div class="row">
		    <!-- LEFT ALIGNED IMAGE -->
		    <div class="col-sm-5 bordered-image">
			  <img itemprop="image" src="/site-files/images/site-images/barn-owl-smj-falconry-4.jpg" alt="Barn Owl" />
			</div>
			<div class="col-sm-7">
			  <h2 itemprop="name">Experience Day For Your Staff/Customers</h2>
  			  <p itemprop="description">Strengthen your relationships with a shared experience, take your mind off the game for a day, motivate and reward your team... Whatever your purpose in taking a day-out from normal proceedings, enjoy each others company along with our fantastic collection of birds of prey. Our corporate experience day offers your team an exclusive, personalized, engaging activity hosted by our dedicated staff. We are a private centre so there'll be no interruptions from casual, drop-in visitors allowing us to offer you complete participation. We can tailor a day's experience to suit any specific requirements or requests, or carry out a similar agenda to our personal experience day (<a target="_blank" href="../experience-day/index.php">detailed here</a>), or a combination of both. We will provide you with refreshments throughout the day and a buffet lunch, or even take you into the nearby, famous & historic village of Haworth for a pub lunch... To discuss your specific requirements, and to get a quote for the number of guests you expect to bring along, please contact us.</p>
			  <aside><p><a href="/contact" class="brown-button">Contact Us</a></p></aside>                      
            </div>
		  </div></div>

		  <div itemscope itemtype="http://schema.org/Product" class="shaded-container"><div class="row">
   		    <!-- RIGHT ALIGNED IMAGE (BE AWARE: Uses Push/Pull) -->
		    <div class="col-sm-5 col-sm-push-7 bordered-image">
			  <img itemprop="image" src="/site-files/images/site-images/merlin-smj-falconry.jpg" alt="Merlin" />
			</div>
		    <div class="col-sm-7 col-sm-pull-5">
              <h2 itemprop="name">Static And Flying Displays</h2>
			  <p itemprop="description">How about some on-site entertainment at your corporate function? Allow us to surprise and delight your customers/staff/business partners with the appearance of our magnificent birds of prey. Or why not put on a display for your local community? It's guaranteed to lead to a fond and memorable guest experience.</p>
			  <aside><p><a href="/contact" class="brown-button">Contact Us</a></p></aside>                       
            </div>
		  </div></div>

		  <div itemscope itemtype="http://schema.org/Product" class="shaded-container"><div class="row">
		    <!-- LEFT ALIGNED IMAGE -->
		    <div class="col-sm-5 bordered-image">
			  <img itemprop="image" src="/site-files/images/site-images/barn-owl-smj-falconry.jpg" alt="Barn Owl" />
			</div>
			<div class="col-sm-7">
              <h2 itemprop="name">Sales & Marketing</h2>
			  <p itemprop="description">We can provide and facilitate the use of our birds into your promotional ventures and advertising campaigns. For example: Our various birds of prey have diverse and interesting qualities that you can use to demonstrate business and brand qualities such as adaptability, speed, simplicity, acumen, listening, tenacity, focus, super-powered senses, sensitivity, stealth etc., not to mention play-on-words like "what a hoot!" or "it's a real head-turner", and the kinds of memories & associations these animals can promote within us, such as the idea that owls represent wisdom, etc. Whatever your business, brand or company-values we can brainstorm something together that works for you -- with Specsavers, for example, we developed a marketing campaign using a Spectacled Owl. Let us help you to create a more resonant message and more compelling brand, too, with these magnificent animals. We can even put on static and flying displays to help you strengthen relationships with your local community.</p>
			  <aside><p><a href="/contact" class="brown-button">Contact Us</a></p></aside>                         
            </div>
		  </div></div>

		  <div itemscope itemtype="http://schema.org/Product" class="shaded-container"><div class="row">
   		    <!-- RIGHT ALIGNED IMAGE (BE AWARE: Uses Push/Pull) -->
		    <div class="col-sm-5 col-sm-push-7 bordered-image">
			  <img itemprop="image" src="/site-files/images/site-images/school-event-smj-falconry-3.jpg" alt="School Event" />
			</div>
		    <div class="col-sm-7 col-sm-pull-5">
              <h2 itemprop="name">Sponsorship for School Visits</h2>
			  <p itemprop="description">Your business can sponsor us to make school visits with our birds of prey in its name. We would write to a selection of schools  -- of your choice, if you wish -- on your behalf and inform them that your business has sponsored an educational visit from us with our birds of prey. In the past we have been sponsored to carry out school visits by business such as <cite>The Countryside Alliance</cite> and <cite>Specsavers</cite>.</p>
			  <aside><p><a href="/contact" class="brown-button">Contact Us</a> <a href="/birds-of-prey-learn/school-visit" class="brown-button">Read More</a></p></aside>                         
            </div>
		  </div></div>

		  <!-- BE AWARE: The layout of this one is different (it's in an aside) -->
		  <aside>
		    <div class="shaded-container"><div class="row">
		      <!-- LEFT ALIGNED IMAGE -->
		      <div class="col-sm-5 bordered-image">
			    <img src="/site-files/images/site-images/merlin-smj-falconry-5.jpg" alt="Merlin Preening" />
			  </div>
			  <div class="col-sm-7">
                <h2>Get In Touch</h2>
			    <p>Whatever your question we're here to help, drop-us a line and we'll be right on it:</p> 
			    <?php
			      $ContactEmail='roger@smjfalconry.co.uk';
				  $ContactSubject='Corporate Services | Contact Form';
				  include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/contact-form.php') ;
                ?>                        
              </div>
		    </div></div>
		  </aside>
		  
		  <div class="shaded-container"><div class="row">
   		    <!-- RIGHT ALIGNED IMAGE (BE AWARE: Uses Push/Pull) -->
		    <div class="col-sm-5 col-sm-push-7 bordered-image">
			  <img itemprop="image" src="/site-files/images/site-images/tawny-owl-smj-falconry.jpg" alt="Tawny Owl" />
			</div>
		    <div class="col-sm-7 col-sm-pull-5">
              <h2>Anything Else</h2>
			  <p>If you have more ideas please get in touch -- the sky's the limit!</p> 
			  <aside><p><a href="/contact" class="brown-button">Contact Us</a></p></aside>                        
            </div>
		  </div></div>

          <!-- /\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/ -->
          <!-- WIDGETS - WIDGETS - WIDGETS - WIDGETS - WIDGETS - WIDGETS - WIDGETS - WIDGETS -->
          <!-- /\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/ -->
          <?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/sections/widget-row-corporate.php') ;?>
        </div>
      </section>      
      <?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/footer.php') ;?>
    </div>
  </div>
</body>
</html>
