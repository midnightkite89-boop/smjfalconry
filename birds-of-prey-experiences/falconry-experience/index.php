<?php
  $Page = "Falconry Day";

  $MicrodataPageType = "ItemPage";
  
  $OGType = 'website';
  $PageTitle = "Falconry Experience | SMJ Falconry";
  $PageDescr = "This memorable falconry experience give you the chance to interact with a selection from 60+ birds of prey. You will handling &amp; fly the birds, and discover their characteristics, hunting habits &amp; speed capabilities. All set in beautiful Yorkshire countryside.";
  $PageImage = 'site-files/images/og-images/harris-hawk-experience-smj-falconry.jpg';
  $PageKeywords = "falconry day, falconry experience, falconry birds of prey, falconry day west yorkshire, falconry experience west yorkshire, falconry day north yorkshire, falconry experience north yorkshire, falconry birds of prey north yorkshire, falconry day lancashire, falconry experience lancashire, falconry birds of prey lancashire";

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
		  <meta itemprop="name" content="Falconry Experience">
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
				  <div class="divide15"></div>
                  <h1>Falconry Experience</h1>
                  <?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/buying-item/full-day-falconry-experience.php') ;?>
			
                  <?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/buying-item/half-day-falconry-experience.php') ;?>
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
