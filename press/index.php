<?php
  $Page = "Press";

  $MicrodataPageType = 'CollectionPage';

  $RequestedMediaType = trim(strtoupper($_GET["m"]).'');
  $RequestedCategory = trim(strtoupper($_GET["c"]).'');
  $RequestedSubCategory = trim(strtoupper($_GET["s"]).'');				   
  $ShowingAll=( strlen(trim($RequestedMediaType))==0 and strlen(trim($RequestedCategory))==0 and strlen(trim($RequestedSubCategory))==0 );
  
  $OGType = 'website';
  
  if ($RequestedCategory=='SCHOOL') {  
    $PageTitle = "SMJ Falconry in the Press | School Visits";
    $PageDescr = "Keep up with our adventures in newspaper articles, news reports and other media about SMJ Falconry's school visits";
    $PageImage = 'http://www.thetelegraphandargus.co.uk/resources/images/2444128/';
    $PageKeywords = "birds of prey school news, birds of prey school news, owls school news, birds of prey school news yorkshire, birds of prey school news west yorkshire, birds of prey school news north yorkshire, birds of prey school news lancashire, owls school news yorkshire, owls school news west yorkshire, owls school news north yorkshire, owls school news lancashire";
  }
  elseif ($RequestedCategory=='SHOW') {
    $PageTitle = "SMJ Falconry in the Press | Shows";
    $PageDescr = "Keep up with our adventures in newspaper articles, news reports and other media about shows attended by SMJ Falconry";
    $PageImage = 'http://www.thetelegraphandargus.co.uk/resources/images/3743557/';
    $PageKeywords = "birds of prey show news, birds of prey show news, falconry show news, birds of prey show news yorkshire, birds of prey show news west yorkshire, birds of prey show news north yorkshire, birds of prey show news lancashire, falconry show news yorkshire, falconry show news west yorkshire, falconry show news north yorkshire, falconry show news lancashire";
  }
  elseif ($RequestedCategory=='COMMUNITY') {
    $PageTitle = "SMJ Falconry in the Press | Community";
    $PageDescr = "Keep up with our adventures in newspaper articles, news reports and other media about community related activities involving SMJ Falconry";
    $PageImage = 'http://www.keighleynews.co.uk/resources/images/2422643/';
    $PageKeywords = "birds of prey community news, birds of prey community news, falconry community news, birds of prey community news yorkshire, birds of prey community news west yorkshire, birds of prey community news north yorkshire, birds of prey community news lancashire, falconry community news yorkshire, falconry community news west yorkshire, falconry community news north yorkshire, falconry community news lancashire";
  }
  elseif ($RequestedCategory=='FILM') {
    $PageTitle = "SMJ Falconry in Film & Movies";
    $PageDescr = "Keep up with our adventures in newspaper articles, news reports and other media about SMJ Falconry's involvement in film-making.";
    $PageImage = 'site-files/images/og-images/catch-me-daddy.jpg';
    $PageKeywords = "birds of prey film, birds of prey film, falconry film, birds of prey film yorkshire, birds of prey film west yorkshire, birds of prey film north yorkshire, birds of prey film lancashire, falconry film yorkshire, falconry film west yorkshire, falconry film north yorkshire, falconry film lancashire";
  }
  else {
    $PageTitle = "SMJ Falconry in the Press | Birds Of Prey Experience Days &amp; Displays";
    $PageDescr = "Keep up with our adventures in newspaper articles, news reports and other media about SMJ Falconry";
    $PageImage = 'site-files/images/og-images/merlin-smj-falconry-5.jpg';
    $PageKeywords = "birds of prey press, birds of prey press, owl press, birds of prey press yorkshire, birds of prey press west yorkshire, birds of prey press north yorkshire, birds of prey press lancashire, owl press yorkshire, owl press west yorkshire, owl press north yorkshire, owl press lancashire";
  }

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
		  <meta itemprop="name" content="SMJ Falconry in the Press">
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
		  <h1>Press & Media Features About Our Birds of Prey Adventures</h1>
		  <div id="filters" class="divide20"></div>
		  <?php
		    // create the filters, done on-the-fly to capture te active filter and highlight it
			echo '<aside class="filter">';
			if ($ShowingAll) {
			  echo '    <a href="?reset=1#filters" class="filter-active">Showing All</a><!--';
			}
			else {
			  echo '    <a href="?reset=1#filters">Show All</a><!--';
			}			   
			echo '    --><a href="?c=school#filters"';if ($RequestedCategory=='SCHOOL') {echo ' class="filter-active" ';};echo'>Schools</a><!--';						   
			echo '    --><a href="?c=show#filters"';if ($RequestedCategory=='SHOW') {echo ' class="filter-active" ';};echo'>Shows</a><!--';
			echo '    --><a href="?c=community#filters"';if ($RequestedCategory=='COMMUNITY') {echo ' class="filter-active" ';};echo'>Community</a><!--';
			echo '    --><a href="?c=film#filters"';if ($RequestedCategory=='FILM') {echo ' class="filter-active" ';};echo'>Film</a>';
			echo '</aside>';
			include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/sections/dynamic-press-page.php') ;
		  ?>
        </div>
      </section>
      <?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/footer.php') ;?>
    </div>
  </div>
</body>

</html>
