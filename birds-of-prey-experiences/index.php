<?php
  $Page = "Experiences";

  $MicrodataPageType = 'CollectionPage';

  $OGType = 'website';
  $PageTitle = "Birds Of Prey Experiences | SMJ Falconry";
  $PageDescr = "From owl encounters to hawk walks &amp; school visits to photography workshops: if you are interested in an experience involving birds of prey we’re bound to have something for you. Our best-seller is the full-day birds of prey experience.";
  $PageImage = 'site-files/images/og-images/harris-hawk-experience-smj-falconry.jpg';
  $PageKeywords = "birds of prey experiences, falconry experiences, birds of prey experiences yorkshire, birds of prey experiences west yorkshire, birds of prey experiences north yorkshire, birds of prey experiences lancashire, falconry experiences yorkshire, falconry experiences west yorkshire, falconry experiences north yorkshire, falconry experiences lancashire";

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
		  <meta itemprop="name" content="Birds Of Prey Experiences">
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
				          <h1>Birds of Prey Experiences</h1>
                    <!-- /\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/ -->
                    <!-- WIDGETS - WIDGETS - WIDGETS - WIDGETS - WIDGETS - WIDGETS - WIDGETS - WIDGETS -->
                    <!-- /\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/ -->
                    
                    <?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/quick-buy/experience-buy.php') ;?>
                    <?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/quick-buy/half-day-experience-buy.php') ;?>
                    <?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/quick-buy/owl-experience-buy.php') ;?>
                    <?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/quick-buy/hawk-walk-buy.php') ;?>
                    <?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/quick-buy/hunting-day-buy.php') ;?>
					
                    
                    <?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/sections/widget-row-experience.php') ;?>
                    
                    
                    
                </div>
            </section>
            <?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/footer.php') ;?>
        </div>
    </div>
</body>
</html>
