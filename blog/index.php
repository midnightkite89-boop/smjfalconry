<?php
  $Page = "Blog";

  $MicrodataPageType = 'Blog';

  $OGType = 'website';
  $PageTitle = "Blog | Birds Of Prey Experience Days &amp; Displays by SMJ Falconry";
  $PageDescr = "Welcome to our Blog where you will keep up with our story and find the latest events and news about SMJ Falconry.";
  $PageImage = 'site-files/images/og-images/white-faced-scops-owl-smj-falconry.jpg';
  $PageKeywords = "smj falconry blog, birds of prey blog, falconry blog, hawking blog, owl blog";

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
		  <meta itemprop="name" content="Blog">
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
          <h1>Blog</h1>
          <!-- /\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/ -->
          <!-- POST - POST - POST - POST - POST - POST - POST - POST -->
          <!-- /\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/ -->

          <?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/blog-posts/20161231.php') ;?>

          <?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/blog-posts/20160829.php') ;?>

          <?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/blog-posts/20160304.php') ;?>

          <?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/blog-posts/20151210.php') ;?>

          <?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/blog-posts/20150922.php') ;?>

          <?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/blog-posts/20150815.php') ;?>

          <?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/blog-posts/20150801.php') ;?>
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
  <script src="/site-files/js/magnific-popup.min.js"></script>
</body>

</html>
