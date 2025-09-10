<?php
    $Page = "Pest Control";

    $MicrodataPageType = "ItemPage";
  
    $OGType = 'website';
    $PageTitle = "Pest Control | Birds Of Prey Services by SMJ Falconry";
    $PageDescr = "A natural form of bird control using hawks and falcons to disperse your unwanted guests. It is highly effective, environmentally friendly &amp; socially appropriate (as our birds are there to scare, not kill, the pest species). We can disperse birds such as gulls &amp; feral pigeons in a wide-range of environments.";
    $PageImage = 'site-files/images/og-images/peregrine-hybrid-smj-falconry.jpg';
    $PageKeywords = "birds of prey pest control, birds of prey pest control, falconry pest control, birds of prey pest control yorkshire, birds of prey pest control west yorkshire, birds of prey pest control north yorkshire, birds of prey pest control lancashire, falconry pest control yorkshire, falconry pest control west yorkshire, falconry pest control north yorkshire, falconry pest control lancashire, bird control";

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
          <link itemprop="item" href="http://www.smjfalconry.co.uk/birds-of-prey-services/">
		  <meta itemprop="name" content="Birds Of Prey Services">
		  <meta itemprop="position" content="2">
        </div>
        <div itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <link itemprop="item" href="<?php echo 'http://'.$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];?>">
		  <meta itemprop="name" content="Pest Control">
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
                        <div class="row">
                        
                            <div class="col-sm-12">
                                <h1 itemprop="name">Pest Control</h1>
                            </div>
                            <div class="col-sm-7">
                                <h2>Using Birds of Prey for effective pest/bird control</h2>
								<div itemprop="description">
                                  <p>SMJ Falconry can provide a natural form of pest control by using our hawks and falcons to disperse pest species such as gulls and feral pigeons. This method is highly effective, environmentally friendly, natural and public friendly as our birds are there to scare and not kill the pest species. The presence of a hawk or falcon quickly makes an area undesirable and unsafe for pest species.</p>
                                  <p>All of our hawks and falcons are specially trained by ourselves for use in displays, experience days and pest control. Our team of birds are trained and accustomed to urban and industrial environments, and our falconers are experienced at disturbance techniques.</p>
                                  <p>Our birds can be used in urban areas and locations where bird proofing, such as spikes and netting, has not worked or is not a viable option - areas such as: hospitals, housing developments, offices, industrial estates, universities, schools, sports centres, stadiums, golf courses, airports, railway stations and landfill sites.</p>
								</div>
								<div class="row visible-xs">
								  <div class="col-xs-6 bordered-image">
                                    <img itemprop="image" src="/site-files/images/site-images/gyr-hybrid-falcon-smj-falconry-3.jpg" title="photo by Paul Miguel" alt="Gyrfalcon"/>
                                  </div>									  
								  <div class="col-xs-6 bordered-image">							  							        
                                    <img src="/site-files/images/site-images/peregrine-hybrid-smj-falconry.jpg" title="photo by Tony & Carol Dilger" alt="Peregrine Falcon" />      
                                  </div>
								</div>
                                <p>The droppings of nuisance birds, such as gulls and pigeons, can spread diseases e.g. Ornithosis, E.Coli and Salmonella. Their droppings are extremely hard to clean and cause damage to buildings, vehicles, entrances and pavements, which can become slippery and hazardous. Gulls in particular are extremely noisy, causing disruption to workforce and neighbours - they can also become aggressive during the breeding season and attack people!</p>
                                <p>At airports birds are a danger to any aircraft taking off and landing. Bird strikes cause thousands of pounds worth of damage every year.</p>
                                <p>We can provide bird control services for all kinds of areas: domestic, agricultural and industrial units. Each site is different and requires a survey to see what is required.</p>
                                <p>We can provide a free survey, quotation and demonstration. We are based on the border with West Yorkshire, North Yorkshire and Lancashire in the UK.</p>

                                <h2>Netting and Spiking</h2>
                                <p>The use of netting and spiking is extremely effective at keeping pest bird species such as pigeons and seagulls off of buildings and from preventing them from nesting.</p>
                                <p>To discuss your requirements or for more information please contact:
								<p class="lead">Chris Johnson:<br>
                                  <a href="tel:+44-7534-649047">07534 649047</a><br>
                                  <a href="mailto:chris@smjfalconry.co.uk">chris@smjfalconry.co.uk</a>
								</p>
                                    
                            </div> 
                            <div class="col-sm-5">
                              <div class="bordered-image hidden-xs">
                                <img src="/site-files/images/site-images/peregrine-hybrid-smj-falconry.jpg" title="photo by Tony & Carol Dilger" alt="Peregrine Falcon" />      
                              </div>
							  <aside>
							    <h2>Get In Touch</h2>
								<p>Whatever your question we're here to help, drop us a line and we'll get back to you.</p>
								<?php
								  $ContactEmail='chris@smjfalconry.co.uk';
								  $ContactSubject='Pest Control | Contact Form';
								  include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/contact-form.php') ;
								?>
							  </aside>
                              <div class="bordered-image hidden-xs hidden-lg">
                                <img itemprop="image" src="/site-files/images/site-images/gyr-hybrid-falcon-smj-falconry-3.jpg" title="photo by Paul Miguel" alt="Gyrfalcon"/>
                              </div>               
                            </div>

                        </div>
                    </div>

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
