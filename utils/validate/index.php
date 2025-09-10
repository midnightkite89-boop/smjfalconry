<?php
    $Page = "Validate";
    $OGType = 'website';
    $PageTitle = "Validate SMJ Falconry's Website";
    $PageDescr = "Validate SMJ Falconry's Website";
    $PageImage = '';$PageKeywords = "";

    include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/doctype.php') ;
    include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/head.php');
?>
  
<!-- DO NOT USE THIS PAGE AS A TEMPLATE/STARTING-POINT FOR A NEW ONE! -->
<!-- DO NOT USE THIS PAGE AS A TEMPLATE/STARTING-POINT FOR A NEW ONE! -->
<!-- DO NOT USE THIS PAGE AS A TEMPLATE/STARTING-POINT FOR A NEW ONE! -->    
  <body>
    <div id="page-wrapper"><div class="page-inner theme-standard-content">
	  <?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/header.php') ;?>
	  <div class="container"><div class="row">  
        <h1>Pages</h1>
        <?php
          $Config = simplexml_load_file($_SERVER['DOCUMENT_ROOT'].'/xml/validate-site.xml');
          $Domain = $Config->domain->url; 
    	  $DomainWOutHttp = str_replace("http://", "", $Domain);
          foreach ($Config->pages->page as $Page) {
          	$URL = '';
            $URL = $Domain.'/'.$Page->url;
            $EncodedURL = urlencode($URL);
            echo '<p>';
            echo '<a target="_blank" href="https://validator.w3.org/nu/?doc='.$EncodedURL.'">W3C</a>';
            echo ' -- ';
            echo '<a target="_blank" href="https://developers.google.com/speed/pagespeed/insights/?url='.$EncodedURL.'">Speed Test</a>';
            echo ' -- ';
            echo '<a target="_blank" href="https://www.google.co.uk/webmasters/tools/mobile-friendly/?url='.$EncodedURL.'">Mobile Test</a>';
            echo ' -- ';
            echo '<a target="_blank" href="https://developers.facebook.com/tools/debug/og/object?q='.$EncodedURL.'">Facebook</a>';
            echo ' -- ';
            echo '<a target="_blank" href="https://developers.google.com/structured-data/testing-tool/?url='.$EncodedURL.'">Microdata</a>';
            echo ' -- ';
            echo '<a target="_blank" href="https://validator.w3.org/checklink?uri='.$EncodedURL.'">Links</a>';
            echo ' -- ';
    		echo '<a target="_blank" href="http://www.w3.org/2002/01/spellchecker?uri='.$EncodedURL.'">Spelling</a>';
            echo ' -- ';
    		echo '<a target="_blank" href="http://services.w3.org/xslt?xmlfile=http%3A%2F%2Fservices.w3.org%2Ftidy%2Ftidy%3FdocAddr%3D'.$EncodedURL.'%252F%26passThroughXHTML%3D1&amp;xslfile=http%3A%2F%2Fwww.w3.org%2F2002%2F08%2Fextract-semantic.xsl">Semantics</a>';
            echo ' -- ';        
            echo '<a target="_blank" href="http://www.bing.com/webmaster/diagnostics/seo/analyzer?url='.$EncodedURL.'&amp;wmkt=en-GB&amp;wlang=en-US&amp;paramUrl='.$EncodedURL.'">Bing SEO</a>';
    		echo ' -- ';
			echo '<a target="_blank" href="http://checkgzipcompression.com/?url='.$EncodedURL.'">GZip?</a>';
    		echo ' -- ';
    		echo '<a target="_blank" href="http://Localhost/'.$Page->url.'">Localhost</a>';
            echo ' -- ';        
            echo '<a target="_blank" href="'.$URL.'">'.$Page->descr.'</a>';
            //<a target="_blank" href="'.$Domain.'/'.$URL.'"">'.$URL.'</a>
            echo '</p>';
          }
        ?>
    	    	
    	<h1>SEO Tools</h1>
    	<p><a target="_blank" href="http://www.spyfu.com/seo/competitors/domain?query=<?php echo $DomainWOutHttp; ?>">SpyFu</a></p>	
    	<p><a target="_blank" href="http://www.semrush.com/uk/info/<?php echo $DomainWOutHttp; ?>?db=uk">SEMRush</a></p>
    	<p><a target="_blank" href="https://ahrefs.com/site-explorer/overview/subdomains?target=http%3A%2F%2F<?php echo $DomainWOutHttp; ?>%2F">AhRefs</a></p>
    	
        <h1>More Validation Resources</h1>
    	<p><a target="_blank" href="http://nibbler.silktide.com/en_US/reports/<?php echo $DomainWOutHttp; ?>">Nibbler</a></p>
    	<p><a target="_blank" href="http://www.check-domains.com/website-analysis/website-analyzer.php">Check Domains</a></p>
    	<p><a target="_blank" href="http://www.site-analyzer.com/en/audit/<?php echo $Domain; ?>">Site Analyser</a></p>
    	<p><a target="_blank" href="http://checkgzipcompression.com/?url=<?php echo $Domain; ?>">Check Is GZip On Yet?</a></p>
    	
    	<h1>Other Resources</h1>
    	<p><a target="_blank" href="http://compressjpeg.com">Compress JPGs</a></p>
    	<p><a target="_blank" href="http://compresspng.com">Compress PNGs</a></p>
		<p><a target="_blank" href="http://jscompress.com">Compress Javascript</a></p>
    	
    	<h1>Direct Links to XML Files</h1>
    	<p><a target="_blank" href="<?php echo $Domain; ?>/xml/staff.xml">Staff</a></p>
    	<p><a target="_blank" href="<?php echo $Domain; ?>/xml/birds.xml">Birds</a></p>
    	<p><a target="_blank" href="<?php echo $Domain; ?>/xml/species.xml">Species</a></p>
    	<p><a target="_blank" href="<?php echo $Domain; ?>/xml/press.xml">Press</a></p>
    	<p><a target="_blank" href="<?php echo $Domain; ?>/xml/validate-site.xml">Validate Site</a></p>
    	<p><a target="_blank" href="<?php echo $Domain; ?>/sitemap.xml">Sitemap</a></p>
    	
    	<h1>SEO Analysis/Analytics</h1>
    	<p><a target="_blank" href="https://www.google.com/analytics/web/?hl=en-GB&amp;amp;pli=1#report/visitors-overview/a18197132w36660923p36120082/">Google Analytics</a></p>
    	<p><a target="_blank" href="https://www.google.com/analytics/web/?hl=en-GB&amp;amp;pli=1#my-reports/hCiOKTXXRZu5qSkp6c3P7w/a18197132w36660923p36120082/%3F_r.tabId%3D2043/">Custom Google Analytics</a></p>
    	<p><a target="_blank" href="https://www.google.com/webmasters/tools/dashboard?hl=en&amp;siteUrl=<?php echo $Domain; ?>">Google Webmaster Tools</a></p>
    	<p><a target="_blank" href="https://www.bing.com/webmaster/home/dashboard?url=<?php echo $Domain; ?>">Bing Webmaster Tools</a></p>
	  </div></div>		
    </div></div>		
  </body>
</html>

<!-- DO NOT USE THIS PAGE AS A TEMPLATE/STARTING-POINT FOR A NEW ONE! -->
<!-- DO NOT USE THIS PAGE AS A TEMPLATE/STARTING-POINT FOR A NEW ONE! -->
<!-- DO NOT USE THIS PAGE AS A TEMPLATE/STARTING-POINT FOR A NEW ONE! -->
