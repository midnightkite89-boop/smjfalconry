<div class="shaded-container" itemscope itemtype="http://schema.org/Product">

    <div class="row">
        <div class="col-sm-5">
        </div>
        <div class="col-sm-7">
            <h2 itemprop="name" class="buying-item-title">2 Hour Bird of Prey Experience</h2>
        </div>
    </div>    

    <div class="row">
        <div class="col-sm-5">
            <div class="bordered-image">
                <img itemprop="image" src="/site-files/images/site-images/white-faced-scops-owl-smj-falconry.jpg" alt="White Faced Scops Owl" />
            </div>
            <div class="hidden-xs">
			  <div class="divide20"></div>
			  <?php $MarkupRating=true;include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/sections/credentials-without-testimonial.php') ;?>
			</div>
        </div>
        <div class="col-sm-7">
		    <div itemprop="description">
              <p>Come and join us at SMJ Falconry for this limited-time offer, 2 hour bird of prey experience.</p>
              <p>Available weekdays, Monday to Friday, you will be part of a group of up to 10 people and provided the opportunity to experience a close encounter with birds of prey. You will tour our private falconry centre, handle our fascinating birds of prey, and even fly some!</p>
              <p>If you would prefer to see our more personal, in-depth offerings <a href="/birds-of-prey-experiences/">click here</a>.</p>

              <p><em>We are located in West Yorkshire, near the borders with North Yorkshire &amp; Lancashire, UK.</em></p>
            </div>		
            <div class="row">
                <div class="col-sm-6 price-option">
                    <p class="price-title">2 hour experience</p>
					<?php
					  $ppProdCode='EXP-2HR';
					  $ppDescr='2 hour Experience';
					  $ppNetPrice=00.01;
					  $ppTax=;
					?>
                    <label>Per Person: &pound;<?php echo $ppNetPrice+$ppTax; ?></label>
                    <?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/buying-item/price-option.php') ;?>
                </div>
                <div class="col-sm-6 price-option">
                </div>
			</div>
			<aside><p><button class="brown-button goto-basket hidden">View Basket</button></p></aside>
			<p>Notes:</p>
			<ul>
			  <li>Includes light refreshments.</li>
			  <li>Located in West Yorkshire, near the borders with North Yorkshire & Lancashire, UK.</li>
			  <li>We give discounts for groups of 4+ people, please contact us for details.</li>
			  <li>Either: start at 10am or 1pm.</li>
			  <li>This is not a one-to-one experience and groups can contain up to 10 people per experience.</li>
			  <li>Valid mid-week only (Monday to Friday).</li>
			</ul>
			<aside> <!-- !! PLEASE NOTE: This is only in an aside because it is repeated on the experience dasys page. If copying and pasting code into another type of experience, think about whether the aside tag is relevant -->
			  <?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/content/experience-generic-notes.php') ;?>
			</aside> <!-- !! PLEASE NOTE: This is only in an aside because it is repeated on the experience dasys page. If copying and pasting code into another type of experience, think about whether the aside tag is relevant -->
			<div class="visible-xs">
			  <div class="divide20"></div>
			  <?php $MarkupRating=false;include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/sections/credentials-without-testimonial.php') ;?>
			</div>
			
        </div>

    </div>

</div>

