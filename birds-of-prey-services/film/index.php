<?php
  $Page = "Film";
  $MicrodataPageType = "ItemPage";
  $OGType = 'website';
  $PageTitle = "Birds Of Prey Film Work | Services by SMJ Falconry";
  $PageDescr = "";
  $PageImage = 'site-files/images/og-images/catch-me-daddy.jpg';
  $PageKeywords = "birds of prey film";
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
      <meta itemprop="name" content="Film Work">
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
		    <h1>Birds of Prey <span itemprop="name">Film Work</span></h1>
			<h2>Example Of Our Work</h2>
			<div class="row">
			  <div class="col-sm-4">
			    <img src="/site-files/images/misc/catch-me-daddy-full-poster.jpg" alt="Catch Me Daddy Movie Poster">
			  </div>
			  <div class="col-sm-8">
			    <div class="aspect-ratio"><iframe src="https://www.youtube.com/embed/GNJUklY6NUQ" allowfullscreen></iframe></div>
			  </div>
			</div>		  			
			<!-- /\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/ -->
			<!-- WIDGETS - WIDGETS - WIDGETS - WIDGETS - WIDGETS - WIDGETS - WIDGETS - WIDGETS -->
			<!-- /\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/ -->
			<?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/sections/widget-row-birthday.php') ;?>
          </div> <!-- End: Container -->
		</section>
		<?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/footer.php') ;?>
      </div>
  </div>

</body>
</html>
