<?php
  $Page = "Raptor Award";

  $MicrodataPageType = "ItemPage";
  
  $OGType = 'website';
  $PageTitle = "Raptor Award: Beginning Falconry Award | Birds Of Prey Experiences &amp; Services by SMJ Falconry";
  $PageDescr = "The Lantra Award is a perfect introduction to the world of falconry & keeping birds of prey. This nationally recognised course teaches you the basics including: housing, nutrition, health, equipment &amp; more. We will see you through to completion where you will receive the official &quot;Beginning Falconry&quot; certificate.";
  $PageImage = 'site-files/images/og-images/white-faced-scops-owl-smj-falconry.jpg';
  $PageKeywords = "birds of prey course, lantra birds of prey course, falconry course, lantra falconry course, birds of prey course yorkshire, birds of prey course west yorkshire, birds of prey course north yorkshire, birds of prey course lancashire, falconry course yorkshire, falconry course west yorkshire, falconry course north yorkshire, falconry course lancashire";

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
      <link itemprop="item" href="http://www.smjfalconry.co.uk/birds-of-prey-learn/">
      <meta itemprop="name" content="Learning About Birds Of Prey">
      <meta itemprop="position" content="2">
    </div>
    <div itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
      <link itemprop="item" href="<?php echo 'http://'.$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];?>">
      <meta itemprop="name" content="Raptor Award - Beginning Falconry">
      <meta itemprop="position" content="3">
    </div>
  </div>
  <!-- URL for Entire-Page-Level Metadata -->
  <link itemprop="url" href="<?php echo 'http://'.$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];?>">
  
  <!-- Page Content from here onwards... -->
  <div id="page-wrapper">
    <div class="page-inner">
      <!-- /\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/ -->
      <!-- CONTENT - CONTENT - CONTENT - CONTENT - CONTENT - CONTENT - CONTENT - CONTENT -->
      <!-- /\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/ -->
      <?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/header.php') ;?>
      <section class="main-content">
        <div class="container">
          <!-- /\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/ -->
          <!-- CONTENT - CONTENT - CONTENT - CONTENT - CONTENT - CONTENT - CONTENT - CONTENT -->
          <!-- /\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/ -->
          <?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/content/raptor-awards-beginning-falconry.php'); ?>
          <!-- /\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/ -->
          <!-- WIDGETS - WIDGETS - WIDGETS - WIDGETS - WIDGETS - WIDGETS - WIDGETS - WIDGETS -->
          <!-- /\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/ -->
          <?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/sections/widget-row-generic.php') ;?>
        </div>
      </section>
	  <?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/footer.php') ;?>
	</div>
  </div>
</body>
</html>
