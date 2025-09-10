<?php
    $Page = "Work Experience";

    $MicrodataPageType = "ItemPage";
  
    $OGType = 'website';
    $PageTitle = "Work Experience | Birds Of Prey Services by SMJ Falconry";
    $PageDescr = "With a diverse collection of 60+ birds of prey to look after and more than a decade of experience working with these magnificent animals ourselves, your students can be assured of an engaging and memorable working experience if they come to us.";
    $PageImage = 'site-files/images/og-images/peregrine-hybrid-smj-falconry.jpg';
    $PageKeywords = "bird of prey work experience, birds of prey work experience, owl work experience, hawk work experience, falcon work experience";

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
		  <meta itemprop="name" content="Work Experience">
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

                            <div class="col-sm-7">
							    <h1 itemprop="name">Work Experience</h1>
                                <p class="lead">Whether you are a pupil looking for a work experience placement or a teacher looking to arrange one, you can both be sure that we are here to help you get the most out of this kind of activity.</p>
                                <p>We have more than a decade of experience with birds of prey and have been working with pupils, schools and colleges for many years too. Work experience offers plenty of guidance and interaction with us and there's always a friendly &amp; knowledgeable member of staff around to help.</p>
								<p>A pupil can expect:</p>
								<ul>
								  <li>hands-on experience</li>
								  <li>guidance from expert bird-handlers</li>
								  <li>working in a friendly team</li>
								  <li>exposure to more than 60 birds of prey</li>
								  <li>learning about a career with animals</li>
								  <li>improved prospects</li>
								</ul>
								<p>Things that need doing all year round are handling and feeding the birds, and cleaning. Beyond that our schedule changes throughout the year, so it depends what we've got going-on at the time. We are a small business -- perhaps half-a-dozen people -- so there'll be no getting lost in the crowd. (We are a private centre too, all of the activities we offer are exclusive to people who have prearranged their visits. There are no crowds, no queues; we cater for our guests on a personal level.)</p>
								<p>Our collection of birds of prey includes: owls, falcons, hawks, kites and an eagle and vulture. We have quite a variety! The centre is based in Oxenhope, which is in West Yorkshire and close to the adjoining borders of North Yorkshire and Lancashire.</p>
								<p>Come along and enjoy your work experience with us!</p>
								<p>If you have any questions, please don't hesitate to get in touch.</p>
                            </div> 

                            <div class="col-sm-5">
							  <aside>
							    <h2>Get In Touch</h2>
								<p>Whatever your question we're here to help, drop us a line and we'll get back to you.</p>
								<?php
								  $ContactEmail='roger@smjfalconry.co.uk';
								  $ContactSubject='Work Experience | Contact Form';
								  include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/contact-form.php') ;
								?>
							  </aside>
                            </div>

                        </div>
						
						<div class="row">
						
						  <div class="col-sm-4 bordered-image">
						    <img itemprop="image" src="/site-files/images/site-images/steppe-eagle-smj-falconry-2.jpg" alt="Steppe Eagle"/>
						  </div>
						  <div class="col-sm-4 bordered-image">
						    <img itemprop="image" src="/site-files/images/site-images/barn-owl-smj-falconry.jpg" alt="Barn Owl"/>
						  </div>
						  <div class="col-sm-4 bordered-image">
						    <img itemprop="image" src="/site-files/images/site-images/merlin-smj-falconry-2.jpg" alt="Merlin"/>
						  </div>
						
						</div>
						
                    </div>

                    <!-- /\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/ -->
                    <!-- WIDGETS - WIDGETS - WIDGETS - WIDGETS - WIDGETS - WIDGETS - WIDGETS - WIDGETS -->
                    <!-- /\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/ -->
                    <?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/sections/widget-row-work-experience.php') ;?>
            
                </div>

            </section>

            <?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/footer.php') ;?>

        </div>
    </div>
</body>
</html>
