<?php
  // to determine which menu to set as highlighted
  $Page = "Sponsorship";

  // collect settings from the URL parameters
  $RequestedBirdType = trim(strtoupper($_GET["t"]).'');
  $RequestedBirdSize = trim(strtoupper($_GET["s"]).'');				   
  $ShowingAll=( strlen(trim($RequestedBirdType))==0 and strlen(trim($RequestedBirdSize))==0 );
  
  $MicrodataPageType = "ItemPage";
  
  // set variables for metatags
  $OGType = 'website';
  
  if ($RequestedBirdSize=='S') {
    $PageTitle = "Sponsor A Small Bird of Prey | SMJ Falconry";
    $PageDescr = "Sponsor one of our small birds of prey and in return you'll receive the opportunity to visit &amp; handle your new friend at no extra charge. Also, a personalised sponsorship certificate, a photograph of your chosen bird.";
    $PageImage = 'site-files/images/og-images/merlin-smj-falconry-5.jpg';
    $PageKeywords = "sponsor small birds of prey, sponsor small birds of prey yorkshire, sponsor small birds of prey west yorkshire, sponsor small birds of prey north yorkshire, sponsor small birds of prey lancashire, sponsorship small birds of prey, sponsorship small birds of prey yorkshire, sponsorship small birds of prey west yorkshire, sponsorship small birds of prey north yorkshire, sponsorship small birds of prey lancashire";
  }
  elseif ($RequestedBirdSize=='M') {
    $PageTitle = "Sponsor A Medium-Sized Bird of Prey | SMJ Falconry";
    $PageDescr = "Sponsor one of our medium-sized birds of prey and in return you'll receive the opportunity to visit &amp; handle your new friend at no extra charge. Also, a personalised sponsorship certificate, a photograph of your chosen bird.";
    $PageImage = 'site-files/images/og-images/barn-owl-smj-falconry-6.jpg';
    $PageKeywords = "sponsor medium birds of prey, sponsor medium birds of prey yorkshire, sponsor medium birds of prey west yorkshire, sponsor medium birds of prey north yorkshire, sponsor medium birds of prey lancashire, sponsorship medium birds of prey, sponsorship medium birds of prey yorkshire, sponsorship medium birds of prey west yorkshire, sponsorship medium birds of prey north yorkshire, sponsorship medium birds of prey lancashire";
  }
  elseif ($RequestedBirdSize=='L') {
    $PageTitle = "Sponsor A Large Bird of Prey | SMJ Falconry";
    $PageDescr = "Sponsor one of our large birds of prey and in return you'll receive the opportunity to visit &amp; handle your new friend at no extra charge. Also, a personalised sponsorship certificate, a photograph of your chosen bird.";
    $PageImage = 'site-files/images/og-images/mackinders-eagle-owl-smj-falconry.jpg';
    $PageKeywords = "sponsor large birds of prey, sponsor large birds of prey yorkshire, sponsor large birds of prey west yorkshire, sponsor large birds of prey north yorkshire, sponsor large birds of prey lancashire, sponsorship large birds of prey, sponsorship large birds of prey yorkshire, sponsorship large birds of prey west yorkshire, sponsorship large birds of prey north yorkshire, sponsorship large birds of prey lancashire";
  }
  elseif ($RequestedBirdType=='O') {
    $PageTitle = "Sponsor An Owl | SMJ Falconry";
    $PageDescr = "Sponsor one of our owls and in return you'll receive the opportunity to visit &amp; handle your new friend at no extra charge. Also, a personalised sponsorship certificate, a photograph of your chosen bird.";
    $PageImage = 'site-files/images/og-images/white-faced-scops-owl-smj-falconry.jpg';
    $PageKeywords = "sponsor owl, sponsor owl yorkshire, sponsor owl west yorkshire, sponsor owl north yorkshire, sponsor owl lancashire, sponsorship owl, sponsorship owl yorkshire, sponsorship owl west yorkshire, sponsorship owl north yorkshire, sponsorship owl lancashire ";
  }
  elseif ($RequestedBirdType=='F') {
    $PageTitle = "Sponsor A Falcon | SMJ Falconry";
    $PageDescr = "Sponsor one of our falcons and in return you'll receive the opportunity to visit &amp; handle your new friend at no extra charge. Also, a personalised sponsorship certificate, a photograph of your chosen bird.";
    $PageImage = 'site-files/images/og-images/peregrine-hybrid-smj-falconry.jpg';
    $PageKeywords = "sponsor falcon, sponsor falcon yorkshire, sponsor falcon west yorkshire, sponsor falcon north yorkshire, sponsor falcon lancashire, sponsorship falcon, sponsorship falcon yorkshire, sponsorship falcon west yorkshire, sponsorship falcon north yorkshire, sponsorship falcon lancashire";
  }
  elseif ($RequestedBirdType=='H') {
    $PageTitle = "Sponsor A Hawk | SMJ Falconry";
    $PageDescr = "Sponsor one of our hawks and in return you'll receive the opportunity to visit &amp; handle your new friend at no extra charge. Also, a personalised sponsorship certificate, a photograph of your chosen bird.";
    $PageImage = 'site-files/images/og-images/harris-hawk-experience-smj-falconry.jpg';
    $PageKeywords = "sponsor hawk, sponsor hawk yorkshire, sponsor hawk west yorkshire, sponsor hawk north yorkshire, sponsor hawk lancashire, sponsorship hawk, sponsorship hawk yorkshire, sponsorship hawk west yorkshire, sponsorship hawk north yorkshire, sponsorship hawk lancashire";
  }
  elseif ($RequestedBirdType=='K') {
    $PageTitle = "Sponsor A Kite | SMJ Falconry";
    $PageDescr = "Sponsor one of our kites and in return you'll receive the opportunity to visit &amp; handle your new friend at no extra charge. Also, a personalised sponsorship certificate, a photograph of your chosen bird.";
    $PageImage = 'site-files/images/og-images/white-faced-scops-owl-smj-falconry.jpg';
    $PageKeywords = "sponsor kite, sponsor kite yorkshire, sponsor kite west yorkshire, sponsor kite north yorkshire, sponsor kite lancashire, sponsorship kite, sponsorship kite yorkshire, sponsorship kite west yorkshire, sponsorship kite north yorkshire, sponsorship kite lancashire";
  }
  elseif ($RequestedBirdType=='V') {
    $PageTitle = "Sponsor A Vulture | SMJ Falconry";
    $PageDescr = "Sponsor one of our vultures and in return you'll receive the opportunity to visit &amp; handle your new friend at no extra charge. Also, a personalised sponsorship certificate, a photograph of your chosen bird.";
    $PageImage = 'site-files/images/og-images/white-faced-scops-owl-smj-falconry.jpg';
    $PageKeywords = "sponsor vulture, sponsor vulture yorkshire, sponsor vulture west yorkshire, sponsor vulture north yorkshire, sponsor vulture lancashire, sponsorship vulture, sponsorship vulture yorkshire, sponsorship vulture west yorkshire, sponsorship vulture north yorkshire, sponsorship vulture lancashire";
  }
  elseif ($RequestedBirdType=='E') {
    $PageTitle = "Sponsor An Eagle | SMJ Falconry";
    $PageDescr = "Sponsor one of our eagles and in return you'll receive the opportunity to visit &amp; handle your new friend at no extra charge. Also, a personalised sponsorship certificate, a photograph of your chosen bird.";
    $PageImage = 'site-files/images/og-images/white-faced-scops-owl-smj-falconry.jpg';
    $PageKeywords = "sponsor eagle, sponsor eagle yorkshire, sponsor eagle west yorkshire, sponsor eagle north yorkshire, sponsor eagle lancashire, sponsorship eagle, sponsorship eagle yorkshire, sponsorship eagle west yorkshire, sponsorship eagle north yorkshire, sponsorship eagle lancashire";
  }
  else {
    $PageTitle = "Sponsor A Bird of Prey | SMJ Falconry";
    $PageDescr = "Sponsor one of our birds of prey and in return you'll receive the opportunity to visit &amp; handle your new friend at no extra charge. Also, a personalised sponsorship certificate, a photograph of your chosen bird.";
    $PageImage = 'site-files/images/og-images/merlin-smj-falconry-2.jpg';
    $PageKeywords = "sponsor birds of prey, sponsor birds of prey yorkshire, sponsor birds of prey west yorkshire, sponsor birds of prey north yorkshire, sponsor birds of prey lancashire, sponsorship birds of prey, sponsorship birds of prey yorkshire, sponsorship birds of prey west yorkshire, sponsorship birds of prey north yorkshire, sponsorship birds of prey lancashire";
  }	
  
  // include pre-body prerequisites
  include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/doctype.php') ;
  include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/head.php');
?>

<!-- DO NOT USE THIS PAGE AS A TEMPLATE/STARTING-POINT FOR A NEW ONE! -->
<!-- DO NOT USE THIS PAGE AS A TEMPLATE/STARTING-POINT FOR A NEW ONE! -->
<!-- DO NOT USE THIS PAGE AS A TEMPLATE/STARTING-POINT FOR A NEW ONE! -->

<body itemscope itemtype="http://schema.org/Product">
    <!-- Breadcrumbs for Google -->
    <div itemscope itemtype="http://schema.org/BreadcrumbList">
        <div itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <link itemprop="item" href="http://www.smjfalconry.co.uk">
		  <meta itemprop="name" content="Birds Of Prey Experiences &amp; Services">
		  <meta itemprop="position" content="1">
        </div>
        <div itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <link itemprop="item" href="<?php echo 'http://'.$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];?>">
		  <meta itemprop="name" content="Birds Of Prey Sponsorship">
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
                  <div class="row">
                    <div class="col-sm-12">
                         <div class="shaded-container">
                           <h1 itemprop="name">Sponsor a Bird of Prey</h1>
						   <p class="lead">When you sponsor a bird of prey at SMJ Falconry we don't just give you a certificate and a photograph. We make your connection as meaningful as possible by offering you the chance to visit and handle your new friend <em>once</em> during each year of sponsorship!</p>
						   <p>So, sponsor one of our birds of prey and in return we'll give you:</p>
						   <div itemprop="description">
						     <ul>
						       <li>A visit to handle your new friend, each year of sponsorship</li>						 
						       <li>a personalised sponsorship certificate</li>
						       <li>a photograph of your chosen bird of prey</li>
							   <li>Key Ring and Fridge Magnet</li>
							   <li>6x4 Photograph of your chosen bird</li>
							   <li>USB Stick containing photographs of your chosen Bird and a selection of our other birds at SMJ Falconry</li>
						     </ul>
						   </div>
						 </div>
						 <div id="filters" class="divide10"></div>
						 
						 <?php
						   // create the filters, done on-the-fly to capture te active filter and highlight it
						   echo '<aside class="filter">';

						   if ($ShowingAll) {
						     echo '    <a href="?reset=1#filters" class="filter-active">Showing All</a><!--';
						   }
						   else {
						     echo '    <a href="?reset=1#filters">Show All</a><!--';
						   }
						   
						   echo '    --><a href="?s=s#filters"';if ($RequestedBirdSize=='S') {echo ' class="filter-active" ';};echo'>Small</a><!--';						   
          				   echo '    --><a href="?s=m#filters"';if ($RequestedBirdSize=='M') {echo ' class="filter-active" ';};echo'>Medium-Sized</a><!--';
          				   echo '    --><a href="?s=l#filters"';if ($RequestedBirdSize=='L') {echo ' class="filter-active" ';};echo'>Large</a><!--';
						   echo '    --><a href="?t=o#filters"';if ($RequestedBirdType=='O') {echo ' class="filter-active" ';};echo'>Owls</a><!--';
          				   echo '    --><a href="?t=f#filters"';if ($RequestedBirdType=='F') {echo ' class="filter-active" ';};echo'>Falcons</a><!--';
          				   echo '    --><a href="?t=h#filters"';if ($RequestedBirdType=='H') {echo ' class="filter-active" ';};echo'>Hawks</a>';

						   	// Show a sub-heading, for whatever is selected
						   if ($RequestedBirdSize=='S') {echo '<h2>Sponsor a Small Bird of Prey</h2>';}
          				   elseif ($RequestedBirdSize=='M') {echo '<h2>Sponsor a Medium-Sized Bird of Prey</h2>';}
          				   elseif ($RequestedBirdSize=='L') {echo '<h2>Sponsor a Large Bird of Prey</h2>';}
						   elseif ($RequestedBirdType=='O') {echo '<h2>Sponsor an Owl</h2>';}
          				   elseif ($RequestedBirdType=='F') {echo '<h2>Sponsor a Falcon</h2>';}
          				   elseif ($RequestedBirdType=='H') {echo '<h2>Sponsor a Hawk</h2>';}
						   elseif ($RequestedBirdType=='K') {echo '<h2>Sponsor a Kite</h2>';}
						   elseif ($RequestedBirdType=='V') {echo '<h2>Sponsor a Vulture</h2>';}
						   elseif ($RequestedBirdType=='E') {echo '<h2>Sponsor an Eagle</h2>';}
						   else {echo '<h2>Choose a Bird to Sponsor</h2>';}						    
						   echo '</aside>';
						   // display the list of birds
						   include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/sponsor-birds-list.php') ;
						?>
						 
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

<!-- DO NOT USE THIS PAGE AS A TEMPLATE/STARTING-POINT FOR A NEW ONE! -->
<!-- DO NOT USE THIS PAGE AS A TEMPLATE/STARTING-POINT FOR A NEW ONE! -->
<!-- DO NOT USE THIS PAGE AS A TEMPLATE/STARTING-POINT FOR A NEW ONE! -->

