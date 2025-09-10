<?php
  $Page = "Owl Encounters";

  $MicrodataPageType = "ItemPage";
  
  $OGType = 'website';
  $PageTitle = "Owl Experience | Birds Of Prey Experience Days by SMJ Falconry";
  $PageDescr = "With a willing team of friendly owls from 20 different species, the owl encounter is one of our most popular experience days. We have a diverse range, including British &amp; foreign owls. You’ll get close to, handle &amp; even fly these amazing birds of prey with the dedicated participation of one of our professional bird handlers.";
  $PageImage = 'site-files/images/og-images/tawny-owl-smj-falconry.jpg';
  $PageKeywords = "experience owls, owl encounter, experience owls yorkshire, experience owls west yorkshire, experience owls north yorkshire, experience owls lancashire, owl encounter yorkshire, owl encounter west yorkshire, owl encounter north yorkshire, owl encounter lancashire";

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
          <link itemprop="item" href="http://www.smjfalconry.co.uk/birds-of-prey-experiences/">
		  <meta itemprop="name" content="Birds Of Prey Experiences">
		  <meta itemprop="position" content="2">
        </div>
        <div itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <link itemprop="item" href="<?php echo 'http://'.$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];?>">
		  <meta itemprop="name" content="Owl Experience">
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
                  <?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/buying-item/owl-encounter.php') ;?>
	
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
