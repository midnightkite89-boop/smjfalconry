<?php
  $Page = "Gift Vouchers";

  $MicrodataPageType = 'CollectionPage';

  $OGType = 'website';
  $PageTitle = "Gift Vouchers | Bird of Prey Experiences";
  $PageDescr = "Buy gift vouchers for a wide variety of experiences with birds of prey.";
  $PageImage = 'site-files/images/og-images/barn-owl-smj-falconry-6.jpg';
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
          <link itemprop="item" href="http://www.smjfalconry.co.uk/birds-of-prey-experiences/">
		  <meta itemprop="name" content="Birds Of Prey Experiences">
		  <meta itemprop="position" content="2">
        </div>
        <div itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <link itemprop="item" href="<?php echo 'http://'.$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];?>">
		  <meta itemprop="name" content="Gift Vouchers">
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
				  
				  <div class="shaded-container">
				    <h1>Gift Vouchers</h1>
				    <p class="lead">Perfect for an animal lover or for any unique gift at Christmas, on Birthdays, Valentine's etc. These gift vouchers can be redeemed against any of the birds of prey experiences we offer. Our experiences are personal, memorable and interactive. There are no crowds or queues here, just the voucher recipient and whomever they bring along, catered for by our friendly, dedicated team!</p>
				  </div>
				  
				  <div class="shaded-container">
				  
				    <div class="row">
					  <div class="col-sm-12">
					    <p class="lead">Please select the value(s) you would like to purchase:</p>
					  </div>
					</div>
				  
				    <div class="row">
					  <div class="col-sm-12">
					    <div class="price-option" itemscope itemtype="http://schema.org/Product">
					      <p><span class="price-title" itemprop="name description">&pound;25 Gift Voucher</span></p>
						  <label>E.g. Half-way towards a Hawk Walk.</label>
					      <?php
					        $ppProdCode='GV-25';
					        $ppDescr='Gift Voucher: £25';
					        $ppNetPrice=20.83;
					        $ppTax=4.17;
					      ?>
                          <?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/buying-item/price-option.php') ;?>	
					    </div>
					  </div>
				    </div>					  
					
					<hr>
					
				    <div class="row">		
					  <div class="col-sm-12">
					    <div class="price-option" itemscope itemtype="http://schema.org/Product">
					      <p><span class="price-title" itemprop="name description">&pound;50 Gift Voucher</span></p>
						  <label>E.g. Enough for a Hawk Walk or well on the way to an Owl Encounter.</label>					  
						  <?php
					        $ppProdCode='GV-50';
					        $ppDescr='Gift Voucher: £50';
					        $ppNetPrice=41.67;
					        $ppTax=8.33;
					      ?>
                          <?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/buying-item/price-option.php') ;?>	
					    </div>
					  </div>
				    </div>					  	

					<hr>					
					
				    <div class="row">
					  <div class="col-sm-12">
					    <div class="price-option" itemscope itemtype="http://schema.org/Product">
   					      <p><span class="price-title" itemprop="name description">&pound;75 Gift Voucher</span></p>
						  <label>E.g. Half-way towards a Full-day Experience.</label>
						  <?php
					        $ppProdCode='GV-75';
					        $ppDescr='Gift Voucher: £75';
					        $ppNetPrice=62.50;
					        $ppTax=12.50;
					      ?>
                          <?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/buying-item/price-option.php') ;?>
					    </div>	
					  </div>
				    </div>					  

					<hr>					
					
				    <div class="row">					  
					  <div class="col-sm-12">
					    <div class="price-option" itemscope itemtype="http://schema.org/Product">
					    <p><span class="price-title" itemprop="name description">&pound;100 Gift Voucher</span></p>
						<label>E.g. Enough for a Half-day Experience and beyond.</label>
						  <?php
					        $ppProdCode='GV-100';
					        $ppDescr='Gift Voucher: £100';
					        $ppNetPrice=83.33;
					        $ppTax=16.67;
					      ?>
                          <?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/buying-item/price-option.php') ;?>	
					    </div>
					  </div>
				    </div>

					<hr>					
					
				    <div class="row">
					  <div class="col-sm-12">	
					    <aside><p><button class="brown-button goto-basket hidden">View Basket</button></p></aside>
					  </div>					  
				    </div>
					
					<div class="divide20"></div>					
					
					<div class="row">
					  <div class="col-sm-12">
					    <p>Notes:</p>
					    <ul>
						  <li>Voucher valid for 12 months</li>
						  <li>Bookings taken for any day of the week, Monday through Sunday.</li>
						  <li>Located in West Yorkshire, near the borders with North Yorkshire & Lancashire, UK.</li>
			  			  <li>No crowds, no queues, just the voucher holder and whomever they bring along catered for by our friendly, dedicated team.</li>
						  <li>All experiences include light refreshments.</li>
						  <li>Full-day experiences include lunch.</li>
					    </ul>
					  </div>					  
				    </div>
					
					<hr>					
					
				    <div class="row">
					  <div class="col-sm-12">	
					    <p class="lead">You can also purchase an experience directly as a gift:</p>
					    <aside><a href="/birds-of-prey-experiences/"><p class="brown-button">See the Experiences</p></a></aside>
					  </div>					  
				    </div>
								  
				  </div>				  
				  
				  <!-- /\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/ -->
                  <!-- WIDGETS - WIDGETS - WIDGETS - WIDGETS - WIDGETS - WIDGETS - WIDGETS - WIDGETS -->
                  <!-- /\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/ -->
				  <?php
					$IncludeWidgetRowTitle=true;$IncludeWidgetRowDivide=true;
					Include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/sections/widget-row-main.php');
				  ?>
                </div>
            </section>
            <?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/footer.php') ;?>
        </div>
    </div>
</body>
</html>
