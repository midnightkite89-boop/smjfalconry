<?php
  $Page = "Overview of all Events";

  $MicrodataPageType = 'CollectionPage';

  $OGType = 'website';
  $PageTitle = "Overview Of All Offerings | Birds Of Prey Experiences &amp; Services by SMJ Falconry";
  $PageDescr = "A comprehesive list of all our offerings at SMJ Falconry";
  $PageImage = 'site-files/images/og-images/white-faced-scops-owl-smj-falconry.jpg';
  $PageKeywords = "birds of prey experiences and services, falconry experiences and services, birds of prey experiences and services yorkshire, birds of prey experiences and services west yorkshire, birds of prey experiences and services north yorkshire, birds of prey experiences and services lancashire, falconry experiences and services yorkshire, falconry experiences and services west yorkshire, falconry experiences and services north yorkshire, falconry experiences and services lancashire";

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
		  <meta itemprop="name" content="Overview Of All Our Offerings">
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
		  <h1>Birds of Prey Experiences &amp; Services</h1>
          <!-- /\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/ -->
          <!-- WIDGETS - WIDGETS - WIDGETS - WIDGETS - WIDGETS - WIDGETS - WIDGETS - WIDGETS -->
          <!-- /\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/ -->
          <?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/sections/widgets-all.php') ;?>
        </div>
      </section>
      <?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/footer.php') ;?>
      </div>
  </div>
</body>
</html>
