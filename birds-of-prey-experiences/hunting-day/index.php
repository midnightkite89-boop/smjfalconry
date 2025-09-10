<?php
  $Page = "Hunting Days";

  $MicrodataPageType = "ItemPage";
  
  $OGType = 'website';
  $PageTitle = "Hawking Hunting Days | Birds Of Prey Experiences by SMJ Falconry";
  $PageDescr = "A thrilling day hunting with some of the most magnificent birds of prey. You will have your own Harris Hawk for the day &amp; will soon have your hawk flying to your gloved hand whilst hunting for rabbits &amp; pheasants with our working ferrets. You will get real understanding of the hawks, their characteristics &amp; hunting abilities.";
  $PageImage = 'site-files/images/og-images/hunting-day-smj-falconry.jpg';
  $PageKeywords = "hunting day birds of prey, hawking day, hunting day birds of prey yorkshire, hunting day birds of prey west yorkshire, hunting day birds of prey north yorkshire, hunting day birds of prey lancashire, hawking day yorkshire, hawking day west yorkshire, hawking day north yorkshire, hawking day lancashire";

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
		  <meta itemprop="name" content="Hunting Day">
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
                    <?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/buying-item/hunting-day.php') ;?>
		     
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
