<?php
  $Page = "Photography Workshops";
  $MicrodataPageType = "ItemPage";
  $OGType = 'website';
  $PageTitle = "Birds Of Prey Photography Workshops | SMJ Falconry";
  $PageDescr = "Spend a inspiring day photographing birds of prey with guidance &amp; interaction from a professional photographer. You will receive tuition and take spectacular photos of birds such as owls, falcons, hawks etc.";
  $PageImage = 'site-files/images/og-images/merlin-smj-falconry-2.jpg';
  $PageKeywords = "birds of prey photography workshops, birds of preybirds of prey photography workshops, birds of prey photography, birds of preybirds of prey photography workshops yorkshire, birds of preybirds of prey photography workshops west yorkshire, birds of preybirds of prey photography workshops north yorkshire, birds of preybirds of prey photography workshops lancashire, birds of prey photography yorkshire, birds of prey photography west yorkshire, birds of prey photography north yorkshire, birds of prey photography lancashire, tony dilger birds of prey photography, paul miguel birds of prey photography";
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
      <meta itemprop="name" content="Photography Workshops">
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
		  <!-- MAIN INTRODUCTION - MAIN INTRODUCTION - MAIN INTRODUCTION --> 
		  <h1>Birds Of Prey <span itemprop="name">Photography Workshops</span></h1>
		  <div itemprop="description">
		    <p>We currently have a professional wildlife photographer working with us at SMJ Falconry: David Southard from Wild Arena, These take place here in Oxenhope, West Yorkshire near the borders with North Yorkshire and Lancashire.</p>
		    <p>To follow is a description of their popular workshops:</p>
		    <p></p>
		  </div>
		  
		  
		  <!-- NEXT - NEXT - NEXT - NEXT - NEXT - NEXT --> 
		  <hr>
		<!-- WILD ARENA  -->
		  <h2 id="wild arena">Wild Arena</h2>
		  <div class="row hidden-xs">
			<!-- <div class="col-sm-6 bordered-image"><img src="/site-files/images/site-images/tony-and-carol-smj-falconry.jpg" alt="Tony & Carol Dilger"/></div>
			<div class="col-sm-6 bordered-image"><img itemprop="image" src="/site-files/images/site-images/barn-owl-smj-falconry-2.jpg" title="Photo by Tony & Carol Dilger" alt="Barn Owl"/></div>  --> 
		  </div>
		  <div class="divide15 hidden-xs"></div>
		  	<p>Birds of prey have always been a favourite with photographers and can be a very challenging subject to photograph, especially in flight. On this session we aim to cover the best use of equipment to get captivating shots of the Birds in natural settings.</p>

			<p>This session will take place with SMJ falconry in the beautiful setting of Oxenhope. The centre is set within natural scenery including photogenic stone walls, hills and fields. With this in mind we will be concentrating on native birds to this wonderful habitat. Our experienced falconer will position and fly the birds to enable the best use of photographic opportunities as well as ensuring the comfort of the Birds.</p>

			<p>So, if you’re new to this type of photography or simply love Birds of Prey, then this is the perfect session for you. The falconer and Wild Arena guide will be on hand all day to ensure you get the best possible pictures from this session and with a small group of just 6 photographers, there will be plenty of time for everyone to get the help they need.</p>

			<p>The session will start with a detailed briefing from your photography guide, how to set up your camera and the proposed running order for the day. This will be decided on the day, depending on weather conditions and availability of Birds</p>
		<!--  <div class="visible-xs bordered-image"><img src="/site-files/images/site-images/tony-and-carol-smj-falconry.jpg" alt="Tony & Carol Dilger" class="bordered-image" /><div class="divide15"></div></div>    -->
	      <p>Species on show include British raptors such as peregrine, merlin, kestrel and raven, tawny, barn, little and long-eared owl, plus foreign exotics like gyrfalcon, steppe eagle, great grey and European eagle owl. Places are limited to six photographers, so please book early.</p>
	      
		  <div class="row">
		    <div class="col-sm-6">
		      <h3>Dates for 2024:</h3>
		      <ul>
				<li><strong>4th May </strong></li>
				


		      </ul>
 		      <p><a class="brown-button" target="_blank" href="https://www.wildarena.com/bird-workshop">Book via the Wild Arena website</a></p>
		      <h3>About Wild Arena</h3>
	          <p>At Wild Arena we aim to offer personal, expert advice and educational support for developing photographers within a range of events to provide inspirational photography and learning experiences.  Our simple goal is to help our customers further their photographic journey whilst showing empathy for their subjects and the environment.  We believe the route of this journey is as important as the destination, so we make our events as enjoyable as possible for small groups of like-minded people.</p>
			  <aside><p><a class="brown-button" target="_blank" href="https://www.wildarena.com/">Read more</a></p></aside>
	          <div class="visible-xs bordered-image"><img src="/site-files/images/site-images/barn-owl-smj-falconry-2.jpg" title="Photo by Tony & Carol Dilger" alt="Barn Owl" class="bordered-image" /><div class="divide15"></div></div>
		    </div>
			<div class="col-sm-6">
			  <div class="shaded-container">
			    <h3>Ask Wild Arena A Question:</h3>
			    <?php 
			      $HideMoreWaysContact = true; $NessageRows = "3";
			      $ContactEmail='info@wildarena.com';
			      $ContactSubject='Enquiry | Photography Workshop with SMJ Falconry';
			      include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/contact-form.php') ;						  
			    ?>	
			  </div>				
		    </div>			

          <!-- /\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/ -->
          <!-- WIDGETS - WIDGETS - WIDGETS - WIDGETS - WIDGETS - WIDGETS - WIDGETS - WIDGETS -->
          <!-- /\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/ -->
          <?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/sections/widget-row-generic.php') ;?>   
	    </div> <!-- End: Container -->
      </section>
	  <?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/footer.php') ;?>
    </div>
  </div>
</body>
</html>
