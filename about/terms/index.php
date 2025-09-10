<?php
  $Page = "terms";

  $OGType = 'website';
  $PageTitle = "Terms &amp; Conditions | SMJ Falconry";
  $PageDescr = "SMJ Falconry Terms and Conditions";
  $PageImage = 'site-files/images/og-images/white-faced-scops-owl-smj-falconry.jpg';
  $PageKeywords = "SMJ Falconry Terms and Conditions";

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
          <link itemprop="item" href="http://www.smjfalconry.co.uk/about/">
		  <meta itemprop="name" content="About SMJ Falconry">
		  <meta itemprop="position" content="2">
        </div>
        <div itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <link itemprop="item" href="<?php echo 'http://'.$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];?>">
		  <meta itemprop="name" content="Terms & Conditions">
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
                  <div class="row">
                    <div class="col-sm-12">
                      <h1>Terms and Conditions</h1>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-6">                  

                      <h2>Prices and Payment</h2>
                      <p>All prices are in £ sterling. We accept payment by most major credit and debit cards. Our online shop takes payment through WorldPay, we do not store your card details. All our prices also include 20% VAT. VAT Number 198 8209 51</p>

                      <h2>Purchasing</h2>
                      <p>To purchase any of the items on our website, click the "Add to basket" <span class="add-to-cart"></span>button corresponding to your chosen service, which is shown on each page representing an Experience that can be purchased online. When you pay we will send you an email confirming receipt of your order. We also send you a voucher, which represents your purchase; this voucher is redeemable within 12 months from the date of purchase.</p>

					  <h2>SMJ Falconry Refund and Cancellation policy</h2>
						<h3>Displays, Weddings, Parties</h3>
						<p>1.	A non-refundable 20% deposit is payable at the time of booking the event.</p>
						<p>2.	If the booking is cancelled by the customer within 14 days of the event, the balance owing is payable to SMJ Falconry in full.</p>
						<p>For our full Events Terms and Conditions please click Here <a href="/birds-of-prey-services/displays/smj_terms.pdf" class="brown-button">Terms and Conditions</a></p>
						<h3>Voucher sales</h3>
						<p>1.	100% of the value of the voucher is payable at the time of sale and the voucher is valid for redemption within the ensuing 12 months. This period can be extended by SMJ Falconry on request.</p>
						<p>2.	Ownership of the voucher is transferable, on request and at SMJ Falconry’s discretion.</p>
						<p>3.	The full value of the voucher is redeemable to the customer if the customer so requests it at any time up to 7 days from date of purchase.</p>
						<p>4.	Only in very exceptional circumstances after the 7 days period, and at SMJ Falconry’s discretion, can the value of the voucher be returned to the customer.</p>

                    </div>
                    
                    <div class="col-sm-6">

                      <h2>Weather</h2>
                      <p>In the unlikely event that the weather is forecast to be too extreme to fly the birds on the date of your booking, we will contact you (in advance) to discuss arrangements for a more suitable date.</p>

                      <h2>Delivery</h2>
                      <p>Vouchers are posted via first class post as soon as the order is processed. Purchase of goods such as soft toys are sent out via parcel post, again first class.</p>

                      <h2>After-Sales Services and Guarantees</h2>
                      <p>Due to the nature of our services we reserve the right to re-arrange the experience.</p>

                      <h2>Customer Service</h2>
                      <p>Any complaints regarding the goods or services supplied should be made to Sandra Johnson by email <a href="mailto:sandra@smjfalconry.co.uk">sandra@smjfalconry.co.uk</a> or by phone <a href="tel:+44-1535-646800">01535 646800</a>. Our normal office hours are 9am-5.30pm Monday-Friday and 10am-4.30pm Saturday and Sunday.</p>

                      <h2>Statutory Rights</h2>
                      <p>These Terms and Conditions do not affect any of your statutory rights.</p>
                      
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


            </section>

            <?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/footer.php') ;?>

        </div>
    </div>
</body>
</html>
