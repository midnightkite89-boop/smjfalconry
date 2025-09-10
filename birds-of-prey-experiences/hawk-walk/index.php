<?php
  $Page = "Hawk Walks";
  
  $MicrodataPageType = "ItemPage";
  
  $OGType = 'website';
  $PageTitle = "Hawk Walk Experience | Birds Of Prey Experiences by SMJ Falconry";
  $PageDescr = "We take our Harris hawks along for a walk around the beautiful Yorkshire, Brontë countryside &amp; they follow us flying free: An up-close encounter with an impressive bird of prey where you will experience the birds' natural behaviour. You will handle &amp; even fly the birds yourself during this personal, interactive experience.";
  $PageImage = 'site-files/images/og-images/harris-hawk-experience-smj-falconry.jpg';
  $PageKeywords = "hawk walk, harris hawk experience, hawk walk yorkshire, hawk walk west yorkshire, hawk walk north yorkshire, hawk walk lancashire, harris hawk experience yorkshire, harris hawk experience west yorkshire, harris hawk experience north yorkshire, harris hawk experience lancashire";
  
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
		  <meta itemprop="name" content="Hawk Walk">
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
                  <?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/buying-item/hawk-walk.php') ;?>
					<?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/buying-item/1-hour-experience.php') ;?>
			
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
