<?php
  $Page = "Experience Day";

  $MicrodataPageType = "ItemPage";
  
  $OGType = 'website';
  $PageTitle = "Birds Of Prey Experience Day | SMJ Falconry";
  $PageDescr = "With a collection of 60 birds of prey this experience day promises the opportunity to interact with some magnificent creatures. You will experience handling &amp; flying birds of prey, their different characteristics, hunting habits &amp; speed capabilities. This takes place in beautiful Yorkshire countryside.";
  $PageImage = 'site-files/images/og-images/harris-hawk-experience-smj-falconry.jpg';
  $PageKeywords = "experience birds of prey, experience falconry, experience birds of prey yorkshire, experience birds of prey west yorkshire, experience birds of prey north yorkshire, experience birds of prey lancashire, experience falconry yorkshire, experience falconry west yorkshire, experience falconry north yorkshire, experience falconry lancashire";

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
          <link itemprop="item" href="<?php echo 'http://'.$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];?>">
		  <meta itemprop="name" content="Experience Day">
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
                  <h1>Birds Of Prey Experience</h1>
                  <?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/buying-item/full-day-experience.php') ;?>
			
                  <?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/buying-item/half-day-experience.php') ;?>
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
