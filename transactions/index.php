<?php
    $Page = "Transactions";

    $OGType = 'website';
    $PageTitle = "Thank You For Your Purchase | SMJ Falconry";
    $PageDescr = "";
    $PageImage = 'site-files/images/og-images/white-faced-scops-owl-smj-falconry.jpg';
    $PageKeywords = "";
	  
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
		  <meta itemprop="name" content="Purchase Transaction Successful">
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
                <div class="transction-page">
                  <div class="shaded-container">
                    <div class="row">
                      <div class="col-sm-5">
                        <div class="bordered-image">
                          <img src="/site-files/images/widget-images/merlin-flying-widget-smj-falconry.jpg" alt="Merlin" />
                        </div>
						<div class="divide15"></div>
                        <?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/sections/experience-credentials.php') ;?>
                      </div>
                      <div class="col-sm-7">
                        <h1>Thank you!</h1>
                        <h2>Your order is now being processed. You will hear from us soon</h2>

                        <p>We will send your voucher out as soon as possible, your voucher will be valid for 12 months.</p>

                        <p>To book please</p>

                        <section class="widgets">
                          <div class="widget">
                            <aside><a href="/contact" class="read-more">Contact Us</a></aside>
                          </div>
                        </section>

                        <p>Please feel free to continue browsing our site</p>
                      </div>

                    </div>
                  </div>

                  <!-- /\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/ -->
				  <!-- WIDGETS - WIDGETS - WIDGETS - WIDGETS - WIDGETS - WIDGETS - WIDGETS - WIDGETS -->
				  <!-- /\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/ -->
				  <?php
				    $IncludeWidgetRowTitle=true;$IncludeWidgetRowDivide=true;
					Include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/sections/widget-row-main.php') ;
				  ?>

                </div>

              </div>
          </section>
		  
		  <?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/footer.php') ;?>

        </div>
    </div>
</body>
</html>
