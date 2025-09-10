<?php
  
  $Page = "Gallery"; 
  $MicrodataPageType = 'ImageGallery';

  $OGType = 'website';
  $PageTitle = "Gallery | Birds Of Prey Experience Days &amp; Displays by SMJ Falconry";
  $PageDescr = "A collection of photographs of our birds of prey and adventures at SMJ Falconry";
  $PageImage = 'site-files/images/og-images/white-faced-scops-owl-smj-falconry.jpg';
  $PageKeywords = "smj falconry photographs, smj falconry pictures, smj falconry photos, smj falconry gallery, owl photographs, owl pictures, owl photos, owl gallery, falcon photographs, falcon pictures, falcon photos, falcon gallery, birds of prey photographs, birds of prey pictures, birds of prey photos, birds of prey gallery";
  
  include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/doctype.php') ;	  
  include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/head.php');
?>

<body>
    <!-- support for the gallery -->
    <script src="/site-files/js/gallery.min.js" async=""></script>
    <!-- Breadcrumbs for Google -->
    <div itemscope itemtype="http://schema.org/BreadcrumbList">
        <div itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <link itemprop="item" href="http://www.smjfalconry.co.uk">
		  <meta itemprop="name" content="Birds Of Prey Experiences &amp; Services">
		  <meta itemprop="position" content="1">
        </div>
        <div itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <link itemprop="item" href="<?php echo 'http://'.$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];?>">
		  <meta itemprop="name" content="Gallery">
		  <meta itemprop="position" content="2">
        </div>
	</div>
	<!-- URL for Entire-Page-Level Metadata -->
    <link itemprop="url" href="<?php echo 'http://'.$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];?>">
	<!-- Page Content from here onwards... -->
    <div id="page-wrapper">
        <div class="page-inner theme-standard-content">
           <?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/header.php') ;?>

            <section class="main-content">
                <div class="container">
                    <section class="gallery">
                    
                        <div class="full-page-gal">
                            <div class="wray-gal wray-step wray-caption">
                                <div class="wray-over">
                                    <img src="/site-files/images/gallery/thumbnails/barn-owl-smj-falconry.jpg" alt="Barn Owl"/>
                                    <div class="wray-nav">
                                        <span class="wray-prev">&lt;&nbsp;&nbsp;Previous</span>
                                        <span class="wray-close">Return to Gallery</span>
                                        <span class="wray-next">Next&nbsp;&nbsp;&gt;</span>
                                    </div>
                                </div>
                                <div class="wray-thumbs">
                                    <img src="/site-files/images/gallery/thumbnails/barn-owl-smj-falconry.jpg" data-source="/site-files/images/gallery/barn-owl-smj-falconry.jpg" alt="Twilight - Barn Owl." title="Photo by Tony and Carol Dilger" />
                                    <img src="/site-files/images/gallery/thumbnails/great-horned-eagle-owl-smj-falconry.jpg" data-source="/site-files/images/gallery/great-horned-eagle-owl-smj-falconry.jpg" alt="Bruno - Great Horned Eagle Owl" title="Photo by Larry James" />
                                    <img src="/site-files/images/gallery/thumbnails/great-horned-eagle-owl-smj-falconry-4.jpg" data-source="/site-files/images/gallery/great-horned-eagle-owl-smj-falconry-4.jpg" alt="Bruno - Great Horned Eagle Owl" title="Photo by Larry James" />
                                    <img src="/site-files/images/gallery/thumbnails/buzzard-smj-falconry-3.jpg" data-source="/site-files/images/gallery/buzzard-smj-falconry-3.jpg" alt="Buzz - Buzzard" title="Photo by Larry James" />
                                    <img src="/site-files/images/gallery/thumbnails/hooded-vulture-smj-falconry.jpg" data-source="/site-files/images/gallery/hooded-vulture-smj-falconry.jpg" alt="Jullianne - Hooded Vulture" title="Photo by Gary Funnell"   />
                                    <img src="/site-files/images/gallery/thumbnails/kestrel-smj-falconry-2.jpg" data-source="/site-files/images/gallery/kestrel-smj-falconry-2.jpg" alt="Tiffin - Kestrel" title="Photo by Gary Funnell"   />
                                    <img src="/site-files/images/gallery/thumbnails/kestrel-smj-falconry-3.jpg" data-source="/site-files/images/gallery/kestrel-smj-falconry-3.jpg" alt="Tiffin - Kestrel" title="Photo by Gary Funnell"   />
                                    <img src="/site-files/images/gallery/thumbnails/red-kite-smj-falconry-1.jpg" data-source="/site-files/images/gallery/red-kite-smj-falconry-1.jpg" alt="Willow - Red Kite"    />
                                    <img src="/site-files/images/gallery/thumbnails/red-kite-smj-falconry-4.jpg" data-source="/site-files/images/gallery/red-kite-smj-falconry-4.jpg" alt="Willow - Red Kite"    />
                                    <img src="/site-files/images/gallery/thumbnails/red-kite-smj-falconry-6.jpg" data-source="/site-files/images/gallery/red-kite-smj-falconry-6.jpg" alt="Willow - Red Kite" title="Photo by Iain Leadley"   />
                                    <img src="/site-files/images/gallery/thumbnails/red-kite-smj-falconry-8.jpg" data-source="/site-files/images/gallery/red-kite-smj-falconry-8.jpg" alt="Willow - Red Kite" title="Photo by Iain Leadley"   />
                                    <img src="/site-files/images/gallery/thumbnails/spectacled-owl-smj-falconry.jpg" data-source="/site-files/images/gallery/spectacled-owl-smj-falconry.jpg" alt="Sofia - Spectacled Owl" title="Photo by Alex Hillier"   />
                                    <img src="/site-files/images/gallery/thumbnails/harris-hawk-experience-smj-falconry.jpg" data-source="/site-files/images/gallery/harris-hawk-experience-smj-falconry.jpg" alt="Toby - Harris Hawk during a Hawk Walk Experience." />
                                    <img src="/site-files/images/gallery/thumbnails/school-visit-smj-falconry.jpg" data-source="/site-files/images/gallery/school-visit-smj-falconry.jpg" alt="Timmy -American Kestrel during a School Visit" title="Photo by David Watson" />
                                    <img src="/site-files/images/gallery/thumbnails/hunting-day-smj-falconry-2.jpg" data-source="/site-files/images/gallery/hunting-day-smj-falconry-2.jpg" alt="Oslo - Harris Hawk on a Hunting Day above Kettlewell" />
                                    <img src="/site-files/images/gallery/thumbnails/hooded-vulture-smj-falconry-2.jpg" data-source="/site-files/images/gallery/hooded-vulture-smj-falconry-2.jpg" alt="Julianne - Hooded Vulture" />
                                    <img src="/site-files/images/gallery/thumbnails/gyr-hybrid-falcon-smj-falconry-2.jpg" data-source="/site-files/images/gallery/gyr-hybrid-falcon-smj-falconry-2.jpg" alt="Silver - Gyr Falcon Hybrid" />
                                    <img src="/site-files/images/gallery/thumbnails/gyr-hybrid-falcon-smj-falconry-3.jpg" data-source="/site-files/images/gallery/gyr-hybrid-falcon-smj-falconry-3.jpg" alt="Jay - Gyr Falcon Hybrid" title="Photo by Paul Miguel" />
                                    <img src="/site-files/images/gallery/thumbnails/black-kite-smj-falconry.jpg" data-source="/site-files/images/gallery/black-kite-smj-falconry.jpg" alt="Leon - Black Kite" />
                                    <img src="/site-files/images/gallery/thumbnails/white-faced-scops-owl-smj-falconry.jpg" data-source="/site-files/images/gallery/white-faced-scops-owl-smj-falconry.jpg" title="Photo taken by Tony and Carol Dilger" alt="Midge - White Faced Owl" />
                                    <img src="/site-files/images/gallery/thumbnails/raven-smj-falconry.jpg" data-source="/site-files/images/gallery/raven-smj-falconry.jpg" alt="Millie - Raven and Chris Johnson" />
                                    <img src="/site-files/images/gallery/thumbnails/peregrine-hybrid-smj-falconry.jpg" data-source="/site-files/images/gallery/peregrine-hybrid-smj-falconry.jpg" alt="Serena - Peregrine Falcon Hybrid" />
                                    <img src="/site-files/images/gallery/thumbnails/birthday-party-smj-falconry-2.jpg" data-source="/site-files/images/gallery/birthday-party-smj-falconry-2.jpg" alt="Ollie - Ashy Faced Barn Owl, handling during a Static Display" />
                                    <img src="/site-files/images/gallery/thumbnails/merlin-smj-falconry-2.jpg" data-source="/site-files/images/gallery/merlin-smj-falconry-2.jpg" alt="Murphy - Merlin during a Photography Workshop" title="Photo by Tony and Carol Dilger"/>
                                    <img src="/site-files/images/gallery/thumbnails/hunting-day-smj-falconry.jpg" data-source="/site-files/images/gallery/hunting-day-smj-falconry.jpg" alt="Hunting Day above Kettlewell" />
                                    <img src="/site-files/images/gallery/thumbnails/tawny-owl-smj-falconry.jpg" data-source="/site-files/images/gallery/tawny-owl-smj-falconry.jpg" alt="Molly - Tawny Owl" />
                                    <img src="/site-files/images/gallery/thumbnails/wedding-reception-smj-falconry.jpg" data-source="/site-files/images/gallery/wedding-reception-smj-falconry.jpg" alt="The best man at a Wedding Reception with Oslo - Harris Hawk" />
                                    <img src="/site-files/images/gallery/thumbnails/steppe-eagle-smj-falconry-2.jpg" data-source="/site-files/images/gallery/steppe-eagle-smj-falconry-2.jpg" alt="Anya - Steppe Eagle and James Dickinson" />
                                    <img src="/site-files/images/gallery/thumbnails/lantra-award-smj-falconry-2.jpg" data-source="/site-files/images/gallery/lantra-award-smj-falconry-2.jpg" alt="James Dickinson with a Lantra Award guest" />
                                    <img src="/site-files/images/gallery/thumbnails/little-owl-smj-falconry.jpg" data-source="/site-files/images/gallery/little-owl-smj-falconry.jpg" alt="Click - Little Owl during a Photography Workshop" title="Photo by Tony and Carol Dilger" />
                                    <img src="/site-files/images/gallery/thumbnails/birthday-party-smj-falconry-4.jpg" data-source="/site-files/images/gallery/birthday-party-smj-falconry-4.jpg" alt="Twilight - Barn Owl at a Birthday Party" />
                                    <img src="/site-files/images/gallery/thumbnails/merlin-smj-falconry.jpg" data-source="/site-files/images/gallery/merlin-smj-falconry.jpg" alt="Murphy - Merlin" title="Photo by Tony and Carol Dilger" />
                                    <img src="/site-files/images/gallery/thumbnails/merlin-smj-falconry-3.jpg" data-source="/site-files/images/gallery/merlin-smj-falconry-3.jpg" alt="Murphy - Merlin during a Photography Workshop" title="Photo by Paul Miguel" />
                                    <img src="/site-files/images/gallery/thumbnails/owl-bride-and-groom-smj-falconry.jpg" data-source="/site-files/images/gallery/owl-bride-and-groom-smj-falconry.jpg" alt="Bride and Groom with Claudia - European Eagle Owl" />
                                    <img src="/site-files/images/gallery/thumbnails/raven-smj-falconry-2.jpg" data-source="/site-files/images/gallery/raven-smj-falconry-2.jpg" alt="Millie - Raven" title="Photo by Paul Miguel" />
                                </div>
                            </div>
                         </div>
                    
                    </section>
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
