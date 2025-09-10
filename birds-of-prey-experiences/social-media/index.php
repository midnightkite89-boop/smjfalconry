<?php
  $Page = "Social Media";

  $OGType = 'website';
  $PageTitle = "Connect With Us | SMJ Falconry";
  $PageDescr = "Connect with SMJ Falconry on Social Media for all the latest news and events.";
  $PageImage = 'site-files/images/og-images/harris-hawk-experience-smj-falconry.jpg';
  $PageKeywords = "birds of prey social media, falconry social media, birds of prey social media yorkshire, birds of prey social media west yorkshire, birds of prey social media north yorkshire, birds of prey social media lancashire, falconry social media yorkshire, falconry social media west yorkshire, falconry social media north yorkshire, falconry social media lancashire";

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
		  <meta itemprop="name" content="Social Media">
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
				  <h1>Connect With Us On Social Media</h1>
				  <p>Please select your favorite social media channel:</p>
				  <div class="social-media-connect">
				    <a href="https://www.facebook.com/smjfalcon" target="_blank"><em class="fa fa-facebook-official"></em></a>
				    <a href="https://twitter.com/smjfalconry" target="_blank"><em class="fa fa-twitter"></em></a>
				    <a href="https://www.youtube.com/channel/UCO5b2BQip83NCX9sQb0-VBA" target="_blank"><em class="fa fa-youtube"></em></a>
				    <a href="https://plus.google.com/117068087884050052357/about" target="_blank"><em class="fa fa-google-plus"></em></a>
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
