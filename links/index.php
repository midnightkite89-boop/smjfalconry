<?php
    $Page = "Links";

    $MicrodataPageType = 'CollectionPage';

    $OGType = 'website';
    $PageTitle = "Useful Links | SMJ Falconry";
    $PageDescr = "Find out more about our local area and other attractions nearby. We are located in an area of natural beauty and distinctive character. The landscape is rugged moorland, hills and valleys, interspersed by pretty reservoirs (a setting made famous by the descriptions it inspired in Emily Brontë's famous novel Wuthering Heights).";
    $PageImage = 'site-files/images/og-images/white-faced-scops-owl-smj-falconry.jpg';
    $PageKeywords = "smj falconry useful links";

    include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/doctype.php') ;
    include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/head.php');
	
	$RequestedType = trim(strtoupper($_GET["t"]).'');
	$ShowingAll=( strlen($RequestedType)==0 );
	
?>

<body>
    <!-- Breadcrumbs for Google -->
    <div itemscope itemtype="https://schema.org/BreadcrumbList">
        <div itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <link itemprop="item" href="https://www.smjfalconry.co.uk">
		  <meta itemprop="name" content="Birds Of Prey Experiences &amp; Services">
		  <meta itemprop="position" content="1">
        </div>
        <div itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <link itemprop="item" href="<?php echo 'https://'.$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];?>">
		  <meta itemprop="name" content="Links">
		  <meta itemprop="position" content="2">
        </div>
	</div>
	<!-- URL for Entire-Page-Level Metadata -->
    <link itemprop="url" href="<?php echo 'https://'.$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];?>">
	<!-- Page Content from here onwards... -->
  <div id="page-wrapper">
    <div class="page-inner">
      <?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/header.php') ;?>
      <section class="main-content">
        <div class="container">                  
          <h1>Useful Links</h1>
		  <p>Click or select any title to be taken to the associated website.</p>
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
			echo '    --><a href="?t=pl#filters"';if ($RequestedType=='PL') {echo ' class="filter-active" ';};echo'>Places</a><!--';						   
			echo '    --><a href="?t=at#filters"';if ($RequestedType=='AT') {echo ' class="filter-active" ';};echo'>Attractions</a><!--';
			echo '    --><a href="?t=ac#filters"';if ($RequestedType=='AC') {echo ' class="filter-active" ';};echo'>Accommodation</a><!--';
			echo '    --><a href="?t=ph#filters"';if ($RequestedType=='PH') {echo ' class="filter-active" ';};echo'>Photographers</a><!--';
			echo '    --><a href="?t=bl#filters"';if ($RequestedType=='BL') {echo ' class="filter-active" ';};echo'>Breakfast &amp; Lunch</a><!--';
			echo '    --><a href="?t=ot#filters"';if ($RequestedType=='OT') {echo ' class="filter-active" ';};echo'>Other</a>';
			echo '</aside>';

			switch($RequestedType){
			  case "PL":
			    include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/content/links-local-area.php');
				break;
			  case "AT":
			    include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/content/links-nearby.php');
				break;
			  case "AC":
			    include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/content/links-accomodation.php');
				break;
			  case "PH":
			    include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/content/links-photographers.php');
				break;
			  case "BL":
			    include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/content/links-lunches.php');
				break;
			  case "OT":
			    include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/content/links-suppliers.php');
				break;
			  default:
		        include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/content/links-local-area.php');
			    include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/content/links-nearby.php');
			    include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/content/links-accomodation.php');
			    include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/content/links-photographers.php');
			    include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/content/links-lunches.php');
			    include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/content/links-suppliers.php');
			}
		  ?>
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
