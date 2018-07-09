	<?php 

$options = get_option('salient'); 
global $post;
$cta_link = ( !empty($options['cta-btn-link']) ) ? $options['cta-btn-link'] : '#';

$exclude_pages = (!empty($options['exclude_cta_pages'])) ? $options['exclude_cta_pages'] : array(); 
if(!empty($options['cta-text']) && current_page_url() != $cta_link && !in_array($post->ID, $exclude_pages)) { 

$cta_btn_color = (!empty($options['cta-btn-color'])) ? $options['cta-btn-color'] : 'accent-color'; ?>
	
<div id="call-to-action">
	<div class="container">
		<div class="triangle"></div>
		<span> <?php echo $options['cta-text']; ?> </span>
		<a class="nectar-button <?php echo $cta_btn_color;?>" data-color-override="false" href="<?php echo $cta_link ?>"><?php if(!empty($options['cta-btn'])) echo $options['cta-btn']; ?> </a>
	</div>
</div>

<?php } ?>

<div id="footer-outer">
	
	<?php if( !empty($options['enable-main-footer-area']) && $options['enable-main-footer-area'] == 1) { ?>
		
	<div id="footer-widgets">
		
		<div class="container">
			
			<div class="row">
				
				<?php 
				
				$footerColumns = (!empty($options['footer_columns'])) ? $options['footer_columns'] : '4'; 
				
				if($footerColumns == '2'){
					$footerColumnClass = 'span_6';
				} else if($footerColumns == '3'){
					$footerColumnClass = 'span_4';
				} else {
					$footerColumnClass = 'span_3';
				}
				?>
				
				<div class="col <?php echo $footerColumnClass;?>">
				      <!-- Footer widget area 1 -->
		              <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Footer Area 1') ) : else : ?>	
		              	  <div class="widget">		
						  	 <h4 class="widgettitle">Widget Area 1</h4>
						 	 <p class="no-widget-added"><a href="<?php echo admin_url('widgets.php'); ?>">Click here to assign a widget to this area.</a></p>
				     	  </div>
				     <?php endif; ?>
				</div><!--/span_3-->
				
				<div class="col <?php echo $footerColumnClass;?>">
					 <!-- Footer widget area 2 -->
		             <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Footer Area 2') ) : else : ?>	
		                  <div class="widget">			
						 	 <h4 class="widgettitle">Widget Area 2</h4>
						 	 <p class="no-widget-added"><a href="<?php echo admin_url('widgets.php'); ?>">Click here to assign a widget to this area.</a></p>
				     	  </div>
				     <?php endif; ?>
				     
				</div><!--/span_3-->
				
				<?php if($footerColumns == '3' || $footerColumns == '4') { ?>
					<div class="col <?php echo $footerColumnClass;?>">
						 <!-- Footer widget area 3 -->
			              <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Footer Area 3') ) : else : ?>		
			              	  <div class="widget">			
							  	<h4 class="widgettitle">Widget Area 3</h4>
							  	<p class="no-widget-added"><a href="<?php echo admin_url('widgets.php'); ?>">Click here to assign a widget to this area.</a></p>
							  </div>		   
					     <?php endif; ?>
					     
					</div><!--/span_3-->
				<?php } ?>
				
				<?php if($footerColumns == '4') { ?>
					<div class="col <?php echo $footerColumnClass;?>">
						 <!-- Footer widget area 4 -->
			              <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Footer Area 4') ) : else : ?>	
			              	<div class="widget">		
							    <h4>Widget Area 4</h4>
							    <p class="no-widget-added"><a href="<?php echo admin_url('widgets.php'); ?>">Click here to assign a widget to this area.</a></p>
							 </div><!--/widget-->	
					     <?php endif; ?>
					     
					</div><!--/span_3-->
				<?php } ?>
				
			</div><!--/row-->
			
		</div><!--/container-->
	
	</div><!--/footer-widgets-->
	
	<?php } //endif for enable main footer area?>
		
		<div class="row" id="copyright">
			
			<div class="container">
				
				<img class="sf-with-ul" style="float:left;display: table-row !important;
vertical-align: middle !important;" src="https://www.autovox.net/wp-content/themes/inkelephant-4.0/img/autovox.bottom-bar-logo-regular.png"/>
			  
			  <div class="col span_5" style="float:left;display: table-row !important;
vertical-align: middle !important;padding-top: 16px !important;
padding-left: 8px !important;">
					
					<?php if(!empty($options['disable-auto-copyright']) && $options['disable-auto-copyright'] == 1) { ?>
						<p><?php if(!empty($options['footer-copyright-text'])) echo $options['footer-copyright-text']; ?> </p>	
					<?php } else { ?>
						<p>&copy; <?php echo date('Y') . ' ' . get_bloginfo('name'); ?>. <?php if(!empty($options['footer-copyright-text'])) echo $options['footer-copyright-text']; ?> </p>
					<?php } ?>
					
				</div><!--/span_5-->
				<ul class="sf-menu sf-js-enabled sf-arrows">
				  <li><img  class="sf-with-ul" style="float:right;display: table-row !important;
vertical-align: middle !important;" src="https://autovox.net/wp-content/uploads/2014/07/payment-icons.png"/> <a href="https://autovox.net/policies/">Policies<span>
					 <i style="font-size:12px;" class="icon-angle-up"></i>
					 </span></a>
			   <li></li>
				  </ul>
				<div class="col span_7 col_last">
					<ul id="social">
						<?php  if(!empty($options['use-twitter-icon']) && $options['use-twitter-icon'] == 1) { ?> <li><a target="_blank" href="<?php echo $options['twitter-url']; ?>"><i class="icon-twitter"></i> </a></li> <?php } ?>
						<?php  if(!empty($options['use-facebook-icon']) && $options['use-facebook-icon'] == 1) { ?> <li><a target="_blank" href="<?php echo $options['facebook-url']; ?>"><i class="icon-facebook"></i> </a></li> <?php } ?>
						<?php  if(!empty($options['use-vimeo-icon']) && $options['use-vimeo-icon'] == 1) { ?> <li><a target="_blank" href="<?php echo $options['vimeo-url']; ?>"> <i class="icon-vimeo"></i> </a></li> <?php } ?>
						<?php  if(!empty($options['use-pinterest-icon']) && $options['use-pinterest-icon'] == 1) { ?> <li><a target="_blank" href="<?php echo $options['pinterest-url']; ?>"><i class="icon-pinterest"></i> </a></li> <?php } ?>
						<?php  if(!empty($options['use-linkedin-icon']) && $options['use-linkedin-icon'] == 1) { ?> <li><a target="_blank" href="<?php echo $options['linkedin-url']; ?>"><i class="icon-linkedin"></i> </a></li> <?php } ?>
						<?php  if(!empty($options['use-youtube-icon']) && $options['use-youtube-icon'] == 1) { ?> <li><a target="_blank" href="<?php echo $options['youtube-url']; ?>"><i class="icon-youtube"></i> </a></li> <?php } ?>
						<?php  if(!empty($options['use-tumblr-icon']) && $options['use-tumblr-icon'] == 1) { ?> <li><a target="_blank" href="<?php echo $options['tumblr-url']; ?>"><i class="icon-tumblr"></i> </a></li> <?php } ?>
						<?php  if(!empty($options['use-dribbble-icon']) && $options['use-dribbble-icon'] == 1) { ?> <li><a target="_blank" href="<?php echo $options['dribbble-url']; ?>"><i class="icon-dribbble"></i> </a></li> <?php } ?>
						<?php  if(!empty($options['use-rss-icon']) && $options['use-rss-icon'] == 1) { ?> <li><a target="_blank" href="<?php echo (!empty($options['rss-url'])) ? $options['rss-url'] : get_bloginfo('rss_url'); ?>"><i class="icon-rss"></i> </a></li> <?php } ?>
						<?php  if(!empty($options['use-github-icon']) && $options['use-github-icon'] == 1) { ?> <li><a target="_blank" href="<?php echo $options['github-url']; ?>"><i class="icon-github-alt"></i></a></li> <?php } ?>
						<?php  if(!empty($options['use-behance-icon']) && $options['use-behance-icon'] == 1) { ?> <li><a target="_blank" href="<?php echo $options['behance-url']; ?>"> <i class="icon-be"></i> </a></li> <?php } ?>
						<?php  if(!empty($options['use-google-plus-icon']) && $options['use-google-plus-icon'] == 1) { ?> <li><a target="_blank" href="<?php echo $options['google-plus-url']; ?>"><i class="icon-google-plus"></i> </a></li> <?php } ?>
						<?php  if(!empty($options['use-instagram-icon']) && $options['use-instagram-icon'] == 1) { ?> <li><a target="_blank" href="<?php echo $options['instagram-url']; ?>"><i class="icon-instagram"></i></a></li> <?php } ?>
						<?php  if(!empty($options['use-stackexchange-icon']) && $options['use-stackexchange-icon'] == 1) { ?> <li><a target="_blank" href="<?php echo $options['stackexchange-url']; ?>"><i class="icon-stackexchange"></i></a></li> <?php } ?>
						<?php  if(!empty($options['use-soundcloud-icon']) && $options['use-soundcloud-icon'] == 1) { ?> <li><a target="_blank" href="<?php echo $options['soundcloud-url']; ?>"><i class="icon-soundcloud"></i></a></li> <?php } ?>
					</ul>
				</div><!--/span_7-->
			
			</div><!--/container-->
			
		</div><!--/row-->
		
	
</div><!--/footer-outer-->
<!-- Button trigger modal -->




<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<h1>KEY</h1>
      </div>
      <div class="modal-body">
		<div><div><p>Akrapovič's product line includes products regulated by national and international emission regulations. Akrapovič makes every effort to label regulated products and identify if they are for competition-use only or for general street/highway use in the regulated area. However, Akrapovič does not make any statement of compliance for products that do not have an explicit compliance label. Buyer is ultimately responsible for deciding if a part is legal for buyer's intended use.</p></div><div class="abbrevation-container"><div class="abbrevation"><div class="approvals"><span class="label"><abbr title="CARB Compliant (Replacement part)">CARB RP</abbr></span></div></div><div class="abbrevation-explanation" dynamic-template-include="Means that such product is &quot;CARB compliant&quot;, i.e. compliant with the requirements of the Air Resources Board of the California Environmental Protection Agency. Products marked as CARB compliant are considered replacement parts under CARB regulations."><span>Means that such product is "CARB compliant", i.e. compliant with the requirements of the Air Resources Board of the California Environmental Protection Agency. Products marked as CARB compliant are considered replacement parts under CARB regulations.</span></div></div><div class="abbrevation-container"><div class="abbrevation"><div class="approvals"><span class="label"><abbr title="EPA Noise Compliant">EPA</abbr></span></div></div><div class="abbrevation-explanation" dynamic-template-include="Means that such product meets the EPA noise standard as set forth by the United States Code of Federal Regulations, Title 40, Chapter I, Part 205, Subpart E (80 dBA)."><span>Means that such product meets the EPA noise standard as set forth by the United States Code of Federal Regulations, Title 40, Chapter I, Part 205, Subpart E (80 dBA).</span></div></div><div class="abbrevation-container"><div class="abbrevation"><div class="approvals"><span class="label"><abbr title="ECE Type Approval">ECE</abbr></span></div></div><div class="abbrevation-explanation" dynamic-template-include="<p>For motorcycle exhaust systems: Means that such product is compliant with the requirements of the United Nations Regulation ECE-R92 on Uniform provisions concerning the approval of non-original replacement exhaust silencing systems (RESS) for motorcycles, mopeds and three-wheeled vehicles.</p><p>For car exhaust systems: Means that such product is compliant with the requirements of the United Nations Regulation ECE-R59 on Uniform provisions concerning the approval of replacement silencing systems.</p>"><div><p>For motorcycle exhaust systems: Means that such product is compliant with the requirements of the United Nations Regulation ECE-R92 on Uniform provisions concerning the approval of non-original replacement exhaust silencing systems (RESS) for motorcycles, mopeds and three-wheeled vehicles.</p><p>For car exhaust systems: Means that such product is compliant with the requirements of the United Nations Regulation ECE-R59 on Uniform provisions concerning the approval of replacement silencing systems.</p></div></div></div><div class="abbrevation-container"><div class="abbrevation"><div class="approvals"><span class="label"><abbr title="EC Type Approval">EC</abbr></span></div></div><div class="abbrevation-explanation" dynamic-template-include="Means that such product is compliant with the applicable requirements of the European Union Directive EC 97/24 or the European Commission Delegated Regulation (EU) No. 134/2014 supplementing Regulation No. 168/2013 (EU) of the European Parliament and of the Council as indicated in the attached EC type approval document in the package and available on the product website."><span>Means that such product is compliant with the applicable requirements of the European Union Directive EC 97/24 or the European Commission Delegated Regulation (EU) No. 134/2014 supplementing Regulation No. 168/2013 (EU) of the European Parliament and of the Council as indicated in the attached EC type approval document in the package and available on the product website.</span></div></div><div class="abbrevation-container"><div class="abbrevation"><div class="approvals"><span class="label"><abbr title="ABE Type Approval">ABE</abbr></span></div></div><div class="abbrevation-explanation" dynamic-template-include="Means that such product is compliant with the requirements of the German Type Approval, paragraph 20 of the StVZO."><span>Means that such product is compliant with the requirements of the German Type Approval, paragraph 20 of the StVZO.</span></div></div><div class="abbrevation-container"><div class="abbrevation"><div class="approvals"><span class="label"><abbr title="Spark arrester">SA</abbr></span></div></div><div class="abbrevation-explanation" dynamic-template-include="Means that such product meets the USAD Forest service Standard for spark arresters FS5100-1."><span>Means that such product meets the USAD Forest service Standard for spark arresters FS5100-1.</span></div></div></div>
	   </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<h1>KEY</h1>
      </div>
      <div class="modal-body">
			<p dynamic-template-include="<div><p>Akrapovič's product line includes products regulated by national and international emission regulations. Akrapovič makes every effort to label regulated products and identify if they are for competition-use only or for general street/highway use in the regulated area. However, Akrapovič does not make any statement of compliance for products that do not have an explicit compliance label. Buyer is ultimately responsible for deciding if a part is legal for buyer's intended use.</p></div><div class='abbrevation-container'><div class='abbrevation'><div class='approvals'><span class='label'><abbr title='CARB Compliant (Replacement part)'>CARB RP</abbr></span></div></div><div class='abbrevation-explanation' dynamic-template-include='Means that such product is &quot;CARB compliant&quot;, i.e. compliant with the requirements of the Air Resources Board of the California Environmental Protection Agency. Products marked as CARB compliant are considered replacement parts under CARB regulations.'></div></div><div class='abbrevation-container'><div class='abbrevation'><div class='approvals'><span class='label'><abbr title='EPA Noise Compliant'>EPA</abbr></span></div></div><div class='abbrevation-explanation' dynamic-template-include='Means that such product meets the EPA noise standard as set forth by the United States Code of Federal Regulations, Title 40, Chapter I, Part 205, Subpart E (80 dBA).'></div></div><div class='abbrevation-container'><div class='abbrevation'><div class='approvals'><span class='label'><abbr title='ECE Type Approval'>ECE</abbr></span></div></div><div class='abbrevation-explanation' dynamic-template-include='<p>For motorcycle exhaust systems: Means that such product is compliant with the requirements of the United Nations Regulation ECE-R92 on Uniform provisions concerning the approval of non-original replacement exhaust silencing systems (RESS) for motorcycles, mopeds and three-wheeled vehicles.</p><p>For car exhaust systems: Means that such product is compliant with the requirements of the United Nations Regulation ECE-R59 on Uniform provisions concerning the approval of replacement silencing systems.</p>'></div></div><div class='abbrevation-container'><div class='abbrevation'><div class='approvals'><span class='label'><abbr title='EC Type Approval'>EC</abbr></span></div></div><div class='abbrevation-explanation' dynamic-template-include='Means that such product is compliant with the applicable requirements of the European Union Directive EC 97/24 or the European Commission Delegated Regulation (EU) No. 134/2014 supplementing Regulation No. 168/2013 (EU) of the European Parliament and of the Council as indicated in the attached EC type approval document in the package and available on the product website.'></div></div><div class='abbrevation-container'><div class='abbrevation'><div class='approvals'><span class='label'><abbr title='ABE Type Approval'>ABE</abbr></span></div></div><div class='abbrevation-explanation' dynamic-template-include='Means that such product is compliant with the requirements of the German Type Approval, paragraph 20 of the StVZO.'></div></div><div class='abbrevation-container'><div class='abbrevation'><div class='approvals'><span class='label'><abbr title='Spark arrester'>SA</abbr></span></div></div><div class='abbrevation-explanation' dynamic-template-include='Means that such product meets the USAD Forest service Standard for spark arresters FS5100-1.'></div></div>"><div><div><p>Akrapovič's product line includes products regulated by national and international emission regulations. Akrapovič makes every effort to label regulated products and identify if they are for competition-use only or for general street/highway use in the regulated area. However, Akrapovič does not make any statement of compliance for products that do not have an explicit compliance label. Buyer is ultimately responsible for deciding if a part is legal for buyer's intended use.</p></div><div class="abbrevation-container"><div class="abbrevation"><div class="approvals"><span class="label"><abbr title="CARB Compliant (Replacement part)">CARB RP</abbr></span></div></div><div class="abbrevation-explanation" dynamic-template-include="Means that such product is &quot;CARB compliant&quot;, i.e. compliant with the requirements of the Air Resources Board of the California Environmental Protection Agency. Products marked as CARB compliant are considered replacement parts under CARB regulations."><span>Means that such product is "CARB compliant", i.e. compliant with the requirements of the Air Resources Board of the California Environmental Protection Agency. Products marked as CARB compliant are considered replacement parts under CARB regulations.</span></div></div><div class="abbrevation-container"><div class="abbrevation"><div class="approvals"><span class="label"><abbr title="EPA Noise Compliant">EPA</abbr></span></div></div><div class="abbrevation-explanation" dynamic-template-include="Means that such product meets the EPA noise standard as set forth by the United States Code of Federal Regulations, Title 40, Chapter I, Part 205, Subpart E (80 dBA)."><span>Means that such product meets the EPA noise standard as set forth by the United States Code of Federal Regulations, Title 40, Chapter I, Part 205, Subpart E (80 dBA).</span></div></div><div class="abbrevation-container"><div class="abbrevation"><div class="approvals"><span class="label"><abbr title="ECE Type Approval">ECE</abbr></span></div></div><div class="abbrevation-explanation" dynamic-template-include="<p>For motorcycle exhaust systems: Means that such product is compliant with the requirements of the United Nations Regulation ECE-R92 on Uniform provisions concerning the approval of non-original replacement exhaust silencing systems (RESS) for motorcycles, mopeds and three-wheeled vehicles.</p><p>For car exhaust systems: Means that such product is compliant with the requirements of the United Nations Regulation ECE-R59 on Uniform provisions concerning the approval of replacement silencing systems.</p>"><div><p>For motorcycle exhaust systems: Means that such product is compliant with the requirements of the United Nations Regulation ECE-R92 on Uniform provisions concerning the approval of non-original replacement exhaust silencing systems (RESS) for motorcycles, mopeds and three-wheeled vehicles.</p><p>For car exhaust systems: Means that such product is compliant with the requirements of the United Nations Regulation ECE-R59 on Uniform provisions concerning the approval of replacement silencing systems.</p></div></div></div><div class="abbrevation-container"><div class="abbrevation"><div class="approvals"><span class="label"><abbr title="EC Type Approval">EC</abbr></span></div></div><div class="abbrevation-explanation" dynamic-template-include="Means that such product is compliant with the applicable requirements of the European Union Directive EC 97/24 or the European Commission Delegated Regulation (EU) No. 134/2014 supplementing Regulation No. 168/2013 (EU) of the European Parliament and of the Council as indicated in the attached EC type approval document in the package and available on the product website."><span>Means that such product is compliant with the applicable requirements of the European Union Directive EC 97/24 or the European Commission Delegated Regulation (EU) No. 134/2014 supplementing Regulation No. 168/2013 (EU) of the European Parliament and of the Council as indicated in the attached EC type approval document in the package and available on the product website.</span></div></div><div class="abbrevation-container"><div class="abbrevation"><div class="approvals"><span class="label"><abbr title="ABE Type Approval">ABE</abbr></span></div></div><div class="abbrevation-explanation" dynamic-template-include="Means that such product is compliant with the requirements of the German Type Approval, paragraph 20 of the StVZO."><span>Means that such product is compliant with the requirements of the German Type Approval, paragraph 20 of the StVZO.</span></div></div><div class="abbrevation-container"><div class="abbrevation"><div class="approvals"><span class="label"><abbr title="Spark arrester">SA</abbr></span></div></div><div class="abbrevation-explanation" dynamic-template-include="Means that such product meets the USAD Forest service Standard for spark arresters FS5100-1."><span>Means that such product meets the USAD Forest service Standard for spark arresters FS5100-1.</span></div></div></div></p>
	   </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>

<?php if(!empty($options['boxed_layout']) && $options['boxed_layout'] == '1') { echo '</div>'; } ?>

<?php if(!empty($options['back-to-top']) && $options['back-to-top'] == 1) { ?>
	<a id="to-top"><i class="icon-angle-up"></i></a>
<?php } ?>

<?php if(!empty($options['google-analytics'])) echo $options['google-analytics']; ?> 

<?php wp_footer(); ?>

</body>


<script>
/* 	/* jQuery(document).ready(function() {
		var $scrollingDiv = jQuery(".sub"); 
		jQuery(window).scroll(function(){			
			$scrollingDiv
				.stop()
				/* .animate({"marginTop": (jQuery(window).scrollTop() + 0) + "px"}, "slow" );	
		});
	}); */

/*jQuery(window).scroll(function() {
  var scrollY = window.pageYOffset;
  if(scrollY >= 1422) {
    jQuery('.sub').css({
      'position':'absolute',
      'bottom': '-' + scrollY + 'px'
    })
  }else {
    jQuery('sub').css({
      'position':'static'
    })
  }
})	 */
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>


  <script type="text/javascript">

/* jQuery('.slick').slick({
 
  infinite: false, 
 
  speed: 300,
  slidesToShow:10,
  slidesToScroll: 1,
  accessibility :true  
});
 */





jQuery('.slick').slick({
  /* dots: true, */
  infinite: false,
  speed: 300,
  slidesToShow: 10,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
  </script>
  <script>	
 jQuery('.slider-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  variableWidth: true,
  fade: true,
  asNavFor: '.slider-nav'
});
jQuery('.slider-nav').slick({
  slidesToShow: 10,
  infinite: false,
  slidesToScroll: 1,
  asNavFor: '.slider-for',
  
  arrows: false,
  focusOnSelect: true
});
jQuery('.slider-for2').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  variableWidth: true,
  fade: true,
  asNavFor: '.slider-nav2'
});
jQuery('.slider-nav2').slick({
  slidesToShow: 10,
  infinite: false,
  slidesToScroll: 1,
  asNavFor: '.slider-for2',
  
  arrows: false,
  focusOnSelect: true
});
  </script>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1507842172567401'); // Insert your pixel ID here.
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1507842172567401&ev=PageView&noscript=1"
/></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->

<script>
jQuery(document).ready(function () {
    jQuery(".menu1").hover(function () {
        jQuery(".sub-pages").css("display", "block");
        jQuery(".sub-pages2,.sub-pages3,.sub-pages4,.sub-pages5,.sub-pages6,.sub-pages7,.sub-pages8,.sub-pages9,.sub-pages10,.sub-pages11,.sub-pages12,.sub-pages13").css("display", "none");     
		});
    jQuery(".menu2").hover(function () {
    	// jQuery('.ct-sub2').addClass('ct-added-class');
        jQuery(".sub-pages2").css("display","block");
		 jQuery(".sub-pages,.sub-pages3,.sub-pages4,.sub-pages5,.sub-pages6,.sub-pages7,.sub-pages8,.sub-pages9,.sub-pages10,.sub-pages11,.sub-pages12,.sub-pages13").css("display", "none");
		});
    jQuery(".menu3").hover(function () {
        jQuery(".sub-pages3").css("display","block");
		jQuery(".sub-pages,.sub-pages2,.sub-pages4,.sub-pages5,.sub-pages6,.sub-pages7,.sub-pages8,.sub-pages9,.sub-pages10,.sub-pages11,.sub-pages12,.sub-pages13").css("display", "none");
		});
    jQuery(".menu4").hover(function () {
        jQuery(".sub-pages4").css("display","block");		
		jQuery(".sub-pages,.sub-pages3,.sub-pages2,.sub-pages5,.sub-pages6,.sub-pages7,.sub-pages8,.sub-pages9,.sub-pages10,.sub-pages11,.sub-pages12,.sub-pages13").css("display", "none");   
		});
    jQuery(".menu5").hover(function () {
        jQuery(".sub-pages5").css("display","block");
		jQuery(".sub-pages,.sub-pages3,.sub-pages4,.sub-pages2,.sub-pages6,.sub-pages7,.sub-pages8,.sub-pages9,.sub-pages10,.sub-pages11,.sub-pages12,.sub-pages13").css("display", "none");   
		});
    jQuery(".menu6").hover(function () {
        jQuery(".sub-pages6").css("display","block");
		jQuery(".sub-pages,.sub-pages3,.sub-pages4,.sub-pages5,.sub-pages2,.sub-pages7,.sub-pages8,.sub-pages9,.sub-pages10,.sub-pages11,.sub-pages12,.sub-pages13").css("display", "none");
		});
    jQuery(".menu7").hover(function () {
        jQuery(".sub-pages7").css("display","block");
		jQuery(".sub-pages,.sub-pages3,.sub-pages4,.sub-pages5,.sub-pages6,.sub-pages2,.sub-pages8,.sub-pages9,.sub-pages10,.sub-pages11,.sub-pages12,.sub-pages13").css("display", "none");   
		});
    jQuery(".menu8").hover(function () {
        jQuery(".sub-pages8").css("display","block");
		jQuery(".sub-pages,.sub-pages3,.sub-pages4,.sub-pages5,.sub-pages6,.sub-pages7,.sub-pages2,.sub-pages9,.sub-pages10,.sub-pages11,.sub-pages12,.sub-pages13").css("display", "none");
		});
    jQuery(".menu9").hover(function () {
        jQuery(".sub-pages9").css("display","block");
		jQuery(".sub-pages,.sub-pages3,.sub-pages4,.sub-pages5,.sub-pages6,.sub-pages7,.sub-pages8,.sub-pages2,.sub-pages10,.sub-pages11,.sub-pages12,.sub-pages13").css("display", "none");
		});
    jQuery(".menu10").hover(function () {
        jQuery(".sub-pages10").css("display","block");
		jQuery(".sub-pages,.sub-pages3,.sub-pages4,.sub-pages5,.sub-pages6,.sub-pages7,.sub-pages8,.sub-pages9,.sub-pages2,.sub-pages11,.sub-pages12,.sub-pages13").css("display", "none");
		});
    jQuery(".menu11").hover(function () {
        jQuery(".sub-pages11").css("display","block");
		jQuery(".sub-pages,.sub-pages3,.sub-pages4,.sub-pages5,.sub-pages6,.sub-pages7,.sub-pages8,.sub-pages9,.sub-pages10,.sub-pages2,.sub-pages12,.sub-pages13").css("display", "none");     
		});
    jQuery(".menu12").hover(function () {
        jQuery(".sub-pages12").css("display","block");
		jQuery(".sub-pages,.sub-pages3,.sub-pages4,.sub-pages5,.sub-pages6,.sub-pages7,.sub-pages8,.sub-pages9,.sub-pages10,.sub-pages11,.sub-pages2,.sub-pages13").css("display", "none");
		});
    jQuery(".menu13").hover(function () {
        jQuery(".sub-pages13").css("display","block");
		jQuery(".sub-pages,.sub-pages3,.sub-pages4,.sub-pages5,.sub-pages6,.sub-pages7,.sub-pages8,.sub-pages9,.sub-pages10,.sub-pages11,.sub-pages12,.sub-pages2").css("display", "none");
		});
	});
</script>

<!--- Right Side BAR Jquery -->
<script>
jQuery(document).ready(function () {
    jQuery(".right-menu").hover(function () {
        jQuery(".right-sub-pages").css("display", "block");
        jQuery(".right-sub-pages1, right-sub-pages2, .right-sub-pages3, .right-sub-pages4, .right-sub-pages5, .right-sub-pages6, .right-sub-pages7, .right-sub-pages8, .right-sub-pages9, .right-sub-pages10, .right-sub-pages11, .right-sub-pages12, .right-sub-pages13 ").css("display", "none");
        /* jQuery(".right-sub-pages2").css("display", "none");
        jQuery(".right-sub-pages3").css("display", "none");
        jQuery(".right-sub-pages4").css("display", "none");
        jQuery(".right-sub-pages5").css("display", "none");
        jQuery(".right-sub-pages6").css("display", "none");
        jQuery(".right-sub-pages7").css("display", "none");
        jQuery(".right-sub-pages8").css("display", "none");
        jQuery(".right-sub-pages9").css("display", "none");
        jQuery(".right-sub-pages10").css("display", "none");
        jQuery(".right-sub-pages11").css("display", "none");
        jQuery(".right-sub-pages12").css("display", "none");
        jQuery(".right-sub-pages13").css("display", "none"); */
		});
	});
</script>
<script>
jQuery(document).ready(function () {
    jQuery(".right-menu1").hover(function () {
        jQuery(".right-sub-pages1").css("display", "block");
        jQuery(".right-sub-pages").css("display", "none");
        jQuery(".right-sub-pages2").css("display", "none");
        jQuery(".right-sub-pages3").css("display", "none");
        jQuery(".right-sub-pages4").css("display", "none");
        jQuery(".right-sub-pages5").css("display", "none");
        jQuery(".right-sub-pages6").css("display", "none");
        jQuery(".right-sub-pages7").css("display", "none");
        jQuery(".right-sub-pages8").css("display", "none");
        jQuery(".right-sub-pages9").css("display", "none");
        jQuery(".right-sub-pages10").css("display", "none");
        jQuery(".right-sub-pages11").css("display", "none");
        jQuery(".right-sub-pages12").css("display", "none");
        jQuery(".right-sub-pages13").css("display", "none");
		});
	});
</script>
<script>
jQuery(document).ready(function () {
    jQuery(".right-menu2").hover(function () {
        jQuery(".right-sub-pages2").css("display","block");
		jQuery(".right-sub-pages").css("display", "none");        
		jQuery(".right-sub-pages1").css("display", "none");        
		jQuery(".right-sub-pages3").css("display", "none");        
		jQuery(".right-sub-pages4").css("display", "none");        
		jQuery(".right-sub-pages5").css("display", "none");        
		jQuery(".right-sub-pages6").css("display", "none");        
		jQuery(".right-sub-pages7").css("display", "none");        
		jQuery(".right-sub-pages8").css("display", "none");        
		jQuery(".right-sub-pages9").css("display", "none");        
		jQuery(".right-sub-pages10").css("display", "none");        
		jQuery(".right-sub-pages11").css("display", "none");        
		jQuery(".right-sub-pages12").css("display", "none");        
		jQuery(".right-sub-pages13").css("display", "none");        
		});
	});
</script>
<script>
jQuery(document).ready(function () {
    jQuery(".right-menu3").hover(function () {
        jQuery(".right-sub-pages3").css("display","block");
		jQuery(".right-sub-pages").css("display", "none");        
		jQuery(".right-sub-pages1").css("display", "none");        
		jQuery(".right-sub-pages2").css("display", "none");        
		jQuery(".right-sub-pages4").css("display", "none");        
		jQuery(".right-sub-pages5").css("display", "none");        
		jQuery(".right-sub-pages6").css("display", "none");        
		jQuery(".right-sub-pages7").css("display", "none");        
		jQuery(".right-sub-pages8").css("display", "none");        
		jQuery(".right-sub-pages9").css("display", "none");        
		jQuery(".right-sub-pages10").css("display", "none");        
		jQuery(".right-sub-pages11").css("display", "none");        
		jQuery(".right-sub-pages12").css("display", "none");        
		jQuery(".right-sub-pages13").css("display", "none");        
		});
	});
</script>

<script>
jQuery(document).ready(function () {
    jQuery(".right-menu4").hover(function () {
        jQuery(".right-sub-pages4").css("display","block");
		jQuery(".right-sub-pages").css("display", "none");        
		jQuery(".right-sub-pages1").css("display", "none");        
		jQuery(".right-sub-pages2").css("display", "none");        
		jQuery(".right-sub-pages3").css("display", "none");        
		jQuery(".right-sub-pages5").css("display", "none");        
		jQuery(".right-sub-pages6").css("display", "none");        
		jQuery(".right-sub-pages7").css("display", "none");        
		jQuery(".right-sub-pages8").css("display", "none");        
		jQuery(".right-sub-pages9").css("display", "none");        
		jQuery(".right-sub-pages10").css("display", "none");        
		jQuery(".right-sub-pages11").css("display", "none");        
		jQuery(".right-sub-pages12").css("display", "none");        
		jQuery(".right-sub-pages13").css("display", "none");        
		});
	});
</script>
<script>
jQuery(document).ready(function () {
    jQuery(".right-menu5").hover(function () {
        jQuery(".right-sub-pages5").css("display","block");
		jQuery(".right-sub-pages").css("display", "none");        
		jQuery(".right-sub-pages1").css("display", "none");        
		jQuery(".right-sub-pages2").css("display", "none");        
		jQuery(".right-sub-pages3").css("display", "none");        
		jQuery(".right-sub-pages4").css("display", "none");        
		jQuery(".right-sub-pages6").css("display", "none");        
		jQuery(".right-sub-pages7").css("display", "none");        
		jQuery(".right-sub-pages8").css("display", "none");        
		jQuery(".right-sub-pages9").css("display", "none");        
		jQuery(".right-sub-pages10").css("display", "none");        
		jQuery(".right-sub-pages11").css("display", "none");        
		jQuery(".right-sub-pages12").css("display", "none");        
		jQuery(".right-sub-pages13").css("display", "none");        
		});
	});
</script>
<script>
jQuery(document).ready(function () {
    jQuery(".right-menu6").hover(function () {
        jQuery(".right-sub-pages6").css("display","block");
		jQuery(".right-sub-pages").css("display", "none");        
		jQuery(".right-sub-pages1").css("display", "none");        
		jQuery(".right-sub-pages2").css("display", "none");        
		jQuery(".right-sub-pages3").css("display", "none");        
		jQuery(".right-sub-pages4").css("display", "none");        
		jQuery(".right-sub-pages5").css("display", "none");        
		jQuery(".right-sub-pages7").css("display", "none");        
		jQuery(".right-sub-pages8").css("display", "none");        
		jQuery(".right-sub-pages9").css("display", "none");        
		jQuery(".right-sub-pages10").css("display", "none");        
		jQuery(".right-sub-pages11").css("display", "none");        
		jQuery(".right-sub-pages12").css("display", "none");        
		jQuery(".right-sub-pages13").css("display", "none");        
		});
	});
</script>
<script>
jQuery(document).ready(function () {
    jQuery(".right-menu7").hover(function () {
        jQuery(".right-sub-pages7").css("display","block");
		jQuery(".right-sub-pages").css("display", "none");        
		jQuery(".right-sub-pages1").css("display", "none");        
		jQuery(".right-sub-pages2").css("display", "none");        
		jQuery(".right-sub-pages3").css("display", "none");        
		jQuery(".right-sub-pages4").css("display", "none");        
		jQuery(".right-sub-pages5").css("display", "none");        
		jQuery(".right-sub-pages6").css("display", "none");        
		jQuery(".right-sub-pages8").css("display", "none");        
		jQuery(".right-sub-pages9").css("display", "none");        
		jQuery(".right-sub-pages10").css("display", "none");        
		jQuery(".right-sub-pages11").css("display", "none");        
		jQuery(".right-sub-pages12").css("display", "none");        
		jQuery(".right-sub-pages13").css("display", "none");        
		});
	});
</script>
<script>
jQuery(document).ready(function () {
    jQuery(".right-menu8").hover(function () {
        jQuery(".right-sub-pages8").css("display","block");
		jQuery(".right-sub-pages").css("display", "none");        
		jQuery(".right-sub-pages1").css("display", "none");        
		jQuery(".right-sub-pages2").css("display", "none");        
		jQuery(".right-sub-pages3").css("display", "none");        
		jQuery(".right-sub-pages4").css("display", "none");        
		jQuery(".right-sub-pages5").css("display", "none");        
		jQuery(".right-sub-pages6").css("display", "none");        
		jQuery(".right-sub-pages7").css("display", "none");        
		jQuery(".right-sub-pages9").css("display", "none");        
		jQuery(".right-sub-pages10").css("display", "none");        
		jQuery(".right-sub-pages11").css("display", "none");        
		jQuery(".right-sub-pages12").css("display", "none");        
		jQuery(".right-sub-pages13").css("display", "none");        
		});
	});
</script>
<script>
jQuery(document).ready(function () {
    jQuery(".right-menu9").hover(function () {
        jQuery(".right-sub-pages9").css("display","block");
		jQuery(".right-sub-pages").css("display", "none");        
		jQuery(".right-sub-pages1").css("display", "none");        
		jQuery(".right-sub-pages2").css("display", "none");        
		jQuery(".right-sub-pages3").css("display", "none");        
		jQuery(".right-sub-pages4").css("display", "none");        
		jQuery(".right-sub-pages5").css("display", "none");        
		jQuery(".right-sub-pages6").css("display", "none");        
		jQuery(".right-sub-pages7").css("display", "none");        
		jQuery(".right-sub-pages8").css("display", "none");        
		jQuery(".right-sub-pages10").css("display", "none");        
		jQuery(".right-sub-pages11").css("display", "none");        
		jQuery(".right-sub-pages12").css("display", "none");        
		jQuery(".right-sub-pages13").css("display", "none");        
		});
	});
</script>
<script>
jQuery(document).ready(function () {
    jQuery(".right-menu10").hover(function () {
        jQuery(".right-sub-pages10").css("display","block");
		jQuery(".right-sub-pages").css("display", "none");        
		jQuery(".right-sub-pages1").css("display", "none");        
		jQuery(".right-sub-pages2").css("display", "none");        
		jQuery(".right-sub-pages3").css("display", "none");        
		jQuery(".right-sub-pages4").css("display", "none");        
		jQuery(".right-sub-pages5").css("display", "none");        
		jQuery(".right-sub-pages6").css("display", "none");        
		jQuery(".right-sub-pages7").css("display", "none");        
		jQuery(".right-sub-pages8").css("display", "none");        
		jQuery(".right-sub-pages9").css("display", "none");        
		jQuery(".right-sub-pages11").css("display", "none");        
		jQuery(".right-sub-pages12").css("display", "none");        
		jQuery(".right-sub-pages13").css("display", "none");        
		});
	});
</script>
<script>
jQuery(document).ready(function () {
    jQuery(".right-menu11").hover(function () {
        jQuery(".right-sub-pages11").css("display","block");
		jQuery(".right-sub-pages").css("display", "none");        
		jQuery(".right-sub-pages1").css("display", "none");        
		jQuery(".right-sub-pages2").css("display", "none");        
		jQuery(".right-sub-pages3").css("display", "none");        
		jQuery(".right-sub-pages4").css("display", "none");        
		jQuery(".right-sub-pages5").css("display", "none");        
		jQuery(".right-sub-pages6").css("display", "none");        
		jQuery(".right-sub-pages7").css("display", "none");        
		jQuery(".right-sub-pages8").css("display", "none");        
		jQuery(".right-sub-pages9").css("display", "none");        
		jQuery(".right-sub-pages10").css("display", "none");        
		jQuery(".right-sub-pages12").css("display", "none");        
		jQuery(".right-sub-pages13").css("display", "none");        
		});
	});
</script>
<script>
jQuery(document).ready(function () {
    jQuery(".right-menu12").hover(function () {
        jQuery(".right-sub-pages12").css("display","block");
		jQuery(".right-sub-pages").css("display", "none");        
		jQuery(".right-sub-pages1").css("display", "none");        
		jQuery(".right-sub-pages2").css("display", "none");        
		jQuery(".right-sub-pages3").css("display", "none");        
		jQuery(".right-sub-pages4").css("display", "none");        
		jQuery(".right-sub-pages5").css("display", "none");        
		jQuery(".right-sub-pages6").css("display", "none");        
		jQuery(".right-sub-pages7").css("display", "none");        
		jQuery(".right-sub-pages8").css("display", "none");        
		jQuery(".right-sub-pages9").css("display", "none");        
		jQuery(".right-sub-pages10").css("display", "none");        
		jQuery(".right-sub-pages11").css("display", "none");        
		jQuery(".right-sub-pages13").css("display", "none");        
		});
	});
</script>
<script>
jQuery(document).ready(function () {
    jQuery(".right-menu13").hover(function () {
        jQuery(".right-sub-pages13").css("display","block");
		jQuery(".right-sub-pages").css("display", "none");        
		jQuery(".right-sub-pages1").css("display", "none");        
		jQuery(".right-sub-pages2").css("display", "none");        
		jQuery(".right-sub-pages3").css("display", "none");        
		jQuery(".right-sub-pages4").css("display", "none");        
		jQuery(".right-sub-pages5").css("display", "none");        
		jQuery(".right-sub-pages6").css("display", "none");        
		jQuery(".right-sub-pages7").css("display", "none");        
		jQuery(".right-sub-pages8").css("display", "none");        
		jQuery(".right-sub-pages9").css("display", "none");        
		jQuery(".right-sub-pages10").css("display", "none");        
		jQuery(".right-sub-pages11").css("display", "none");        
		jQuery(".right-sub-pages12").css("display", "none");        
		});
	});
</script>

<script>
jQuery(document).ready(function(){
	jQuery("ul#menu-data > .menu1").hover(function(){
		jQuery("ul#menu-data > .menu1").addClass("trim");	
		jQuery("ul#menu-data > .menu1 > .pull-right > i.fa.fa-angle-right").css("display", "inline-block");
		jQuery("ul#menu-data > .menu2").removeClass("trim");		
		jQuery("ul#menu-data > .menu2 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu3").removeClass("trim");		
		jQuery("ul#menu-data > .menu3 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu4").removeClass("trim");		
		jQuery("ul#menu-data > .menu4 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu5").removeClass("trim");		
		jQuery("ul#menu-data > .menu5 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu6").removeClass("trim");		
		jQuery("ul#menu-data > .menu6 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu7").removeClass("trim");		
		jQuery("ul#menu-data > .menu7 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu8").removeClass("trim");		
		jQuery("ul#menu-data > .menu8 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu9").removeClass("trim");		
		jQuery("ul#menu-data > .menu9 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu10").removeClass("trim");		
		jQuery("ul#menu-data > .menu10> .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu11").removeClass("trim");		
		jQuery("ul#menu-data > .menu11 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu12").removeClass("trim");		
		jQuery("ul#menu-data > .menu12 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu13").removeClass("trim");		
		jQuery("ul#menu-data > .menu13 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
	
	});
});
</script>
<script>
jQuery(document).ready(function(){
	jQuery("ul#menu-data > .menu2").hover(function(){
		jQuery("ul#menu-data > .menu2").addClass("trim");	
		jQuery("ul#menu-data > .menu2 > .pull-right > i.fa.fa-angle-right").css("display", "inline-block");
		jQuery("ul#menu-data > .menu1").removeClass("trim");		
		jQuery("ul#menu-data > .menu1 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu3").removeClass("trim");		
		jQuery("ul#menu-data > .menu3 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu4").removeClass("trim");		
		jQuery("ul#menu-data > .menu4 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu5").removeClass("trim");		
		jQuery("ul#menu-data > .menu5 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu6").removeClass("trim");		
		jQuery("ul#menu-data > .menu6 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu7").removeClass("trim");		
		jQuery("ul#menu-data > .menu7 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu8").removeClass("trim");		
		jQuery("ul#menu-data > .menu8 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu9").removeClass("trim");		
		jQuery("ul#menu-data > .menu9 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu10").removeClass("trim");		
		jQuery("ul#menu-data > .menu10> .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu11").removeClass("trim");		
		jQuery("ul#menu-data > .menu11 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu12").removeClass("trim");		
		jQuery("ul#menu-data > .menu12 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu13").removeClass("trim");		
		jQuery("ul#menu-data > .menu13 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		
	
	});
});
</script>
<script>
jQuery(document).ready(function(){
	jQuery("ul#menu-data > .menu3").hover(function(){
		jQuery("ul#menu-data > .menu3").addClass("trim");	
		jQuery("ul#menu-data > .menu3 > .pull-right > i.fa.fa-angle-right").css("display", "inline-block");
		jQuery("ul#menu-data > .menu1").removeClass("trim");		
		jQuery("ul#menu-data > .menu1 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu2").removeClass("trim");		
		jQuery("ul#menu-data > .menu2 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu4").removeClass("trim");		
		jQuery("ul#menu-data > .menu4 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu5").removeClass("trim");		
		jQuery("ul#menu-data > .menu5 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu6").removeClass("trim");		
		jQuery("ul#menu-data > .menu6 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu7").removeClass("trim");		
		jQuery("ul#menu-data > .menu7 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu8").removeClass("trim");		
		jQuery("ul#menu-data > .menu8 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu9").removeClass("trim");		
		jQuery("ul#menu-data > .menu9 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu10").removeClass("trim");		
		jQuery("ul#menu-data > .menu10> .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu11").removeClass("trim");		
		jQuery("ul#menu-data > .menu11 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu12").removeClass("trim");		
		jQuery("ul#menu-data > .menu12 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu13").removeClass("trim");		
		jQuery("ul#menu-data > .menu13 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
	});
});
</script>
<script>
jQuery(document).ready(function(){
	jQuery("ul#menu-data > .menu4").hover(function(){
		jQuery("ul#menu-data > .menu4").addClass("trim");	
		jQuery("ul#menu-data > .menu4 > .pull-right > i.fa.fa-angle-right").css("display", "inline-block");
		jQuery("ul#menu-data > .menu1").removeClass("trim");		
		jQuery("ul#menu-data > .menu1 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu2").removeClass("trim");		
		jQuery("ul#menu-data > .menu2 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu3").removeClass("trim");		
		jQuery("ul#menu-data > .menu3 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu5").removeClass("trim");		
		jQuery("ul#menu-data > .menu5 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu6").removeClass("trim");		
		jQuery("ul#menu-data > .menu6 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu7").removeClass("trim");		
		jQuery("ul#menu-data > .menu7 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu8").removeClass("trim");		
		jQuery("ul#menu-data > .menu8 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu9").removeClass("trim");		
		jQuery("ul#menu-data > .menu9 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu10").removeClass("trim");		
		jQuery("ul#menu-data > .menu10> .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu11").removeClass("trim");		
		jQuery("ul#menu-data > .menu11 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu12").removeClass("trim");		
		jQuery("ul#menu-data > .menu12 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu13").removeClass("trim");		
		jQuery("ul#menu-data > .menu13 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
	});
});
</script>
<script>
jQuery(document).ready(function(){
	jQuery("ul#menu-data > .menu5").hover(function(){
		jQuery("ul#menu-data > .menu5").addClass("trim");	
		jQuery("ul#menu-data > .menu5 > .pull-right > i.fa.fa-angle-right").css("display", "inline-block");
		jQuery("ul#menu-data > .menu1").removeClass("trim");		
		jQuery("ul#menu-data > .menu1 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu2").removeClass("trim");		
		jQuery("ul#menu-data > .menu2 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu3").removeClass("trim");		
		jQuery("ul#menu-data > .menu3 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu4").removeClass("trim");		
		jQuery("ul#menu-data > .menu4 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu6").removeClass("trim");		
		jQuery("ul#menu-data > .menu6 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu7").removeClass("trim");		
		jQuery("ul#menu-data > .menu7 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu8").removeClass("trim");		
		jQuery("ul#menu-data > .menu8 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu9").removeClass("trim");		
		jQuery("ul#menu-data > .menu9 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu10").removeClass("trim");		
		jQuery("ul#menu-data > .menu10> .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu11").removeClass("trim");		
		jQuery("ul#menu-data > .menu11 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu12").removeClass("trim");		
		jQuery("ul#menu-data > .menu12 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu13").removeClass("trim");		
		jQuery("ul#menu-data > .menu13 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
	});
});
</script>
<script>
jQuery(document).ready(function(){
	jQuery("ul#menu-data > .menu6").hover(function(){
		jQuery("ul#menu-data > .menu6").addClass("trim");	
		jQuery("ul#menu-data > .menu6 > .pull-right > i.fa.fa-angle-right").css("display", "inline-block");
		jQuery("ul#menu-data > .menu1").removeClass("trim");		
		jQuery("ul#menu-data > .menu1 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu2").removeClass("trim");		
		jQuery("ul#menu-data > .menu2 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu3").removeClass("trim");		
		jQuery("ul#menu-data > .menu3 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu4").removeClass("trim");		
		jQuery("ul#menu-data > .menu4 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu5").removeClass("trim");		
		jQuery("ul#menu-data > .menu5 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu7").removeClass("trim");		
		jQuery("ul#menu-data > .menu7 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu8").removeClass("trim");		
		jQuery("ul#menu-data > .menu8 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu9").removeClass("trim");		
		jQuery("ul#menu-data > .menu9 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu10").removeClass("trim");		
		jQuery("ul#menu-data > .menu10> .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu11").removeClass("trim");		
		jQuery("ul#menu-data > .menu11 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu12").removeClass("trim");		
		jQuery("ul#menu-data > .menu12 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu13").removeClass("trim");		
		jQuery("ul#menu-data > .menu13 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
	});
});
</script>
<script>
jQuery(document).ready(function(){
	jQuery("ul#menu-data > .menu7").hover(function(){
		jQuery("ul#menu-data > .menu7").addClass("trim");	
		jQuery("ul#menu-data > .menu7 > .pull-right > i.fa.fa-angle-right").css("display", "inline-block");
		jQuery("ul#menu-data > .menu1").removeClass("trim");		
		jQuery("ul#menu-data > .menu1 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu2").removeClass("trim");		
		jQuery("ul#menu-data > .menu2 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu3").removeClass("trim");		
		jQuery("ul#menu-data > .menu3 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu4").removeClass("trim");		
		jQuery("ul#menu-data > .menu4 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu5").removeClass("trim");		
		jQuery("ul#menu-data > .menu5 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu6").removeClass("trim");		
		jQuery("ul#menu-data > .menu6 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu8").removeClass("trim");		
		jQuery("ul#menu-data > .menu8 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu9").removeClass("trim");		
		jQuery("ul#menu-data > .menu9 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu10").removeClass("trim");		
		jQuery("ul#menu-data > .menu10> .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu11").removeClass("trim");		
		jQuery("ul#menu-data > .menu11 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu12").removeClass("trim");		
		jQuery("ul#menu-data > .menu12 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu13").removeClass("trim");		
		jQuery("ul#menu-data > .menu13 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
	});
});
</script>
<script>
jQuery(document).ready(function(){
	jQuery("ul#menu-data > .menu8").hover(function(){
		jQuery("ul#menu-data > .menu8").addClass("trim");	
		jQuery("ul#menu-data > .menu8 > .pull-right > i.fa.fa-angle-right").css("display", "inline-block");
		jQuery("ul#menu-data > .menu1").removeClass("trim");		
		jQuery("ul#menu-data > .menu1 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu2").removeClass("trim");		
		jQuery("ul#menu-data > .menu2 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu3").removeClass("trim");		
		jQuery("ul#menu-data > .menu3 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu4").removeClass("trim");		
		jQuery("ul#menu-data > .menu4 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu5").removeClass("trim");		
		jQuery("ul#menu-data > .menu5 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu6").removeClass("trim");		
		jQuery("ul#menu-data > .menu6 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu7").removeClass("trim");		
		jQuery("ul#menu-data > .menu7 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu9").removeClass("trim");		
		jQuery("ul#menu-data > .menu9 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu10").removeClass("trim");		
		jQuery("ul#menu-data > .menu10> .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu11").removeClass("trim");		
		jQuery("ul#menu-data > .menu11 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu12").removeClass("trim");		
		jQuery("ul#menu-data > .menu12 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu13").removeClass("trim");		
		jQuery("ul#menu-data > .menu13 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
	});
});
</script>
<script>
jQuery(document).ready(function(){
	jQuery("ul#menu-data > .menu9").hover(function(){
		jQuery("ul#menu-data > .menu9").addClass("trim");	
		jQuery("ul#menu-data > .menu9 > .pull-right > i.fa.fa-angle-right").css("display", "inline-block");
		jQuery("ul#menu-data > .menu1").removeClass("trim");		
		jQuery("ul#menu-data > .menu1 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu2").removeClass("trim");		
		jQuery("ul#menu-data > .menu2 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu3").removeClass("trim");		
		jQuery("ul#menu-data > .menu3 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu4").removeClass("trim");		
		jQuery("ul#menu-data > .menu4 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu5").removeClass("trim");		
		jQuery("ul#menu-data > .menu5 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu6").removeClass("trim");		
		jQuery("ul#menu-data > .menu6 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu7").removeClass("trim");		
		jQuery("ul#menu-data > .menu7 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu8").removeClass("trim");		
		jQuery("ul#menu-data > .menu8 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu10").removeClass("trim");		
		jQuery("ul#menu-data > .menu10> .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu11").removeClass("trim");		
		jQuery("ul#menu-data > .menu11 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu12").removeClass("trim");		
		jQuery("ul#menu-data > .menu12 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu13").removeClass("trim");		
		jQuery("ul#menu-data > .menu13 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
	});
});
</script>
<script>
jQuery(document).ready(function(){
	jQuery("ul#menu-data > .menu10").hover(function(){
		jQuery("ul#menu-data > .menu10").addClass("trim");	
		jQuery("ul#menu-data > .menu10 > .pull-right > i.fa.fa-angle-right").css("display", "inline-block");
		jQuery("ul#menu-data > .menu1").removeClass("trim");		
		jQuery("ul#menu-data > .menu1 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu2").removeClass("trim");		
		jQuery("ul#menu-data > .menu2 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu3").removeClass("trim");		
		jQuery("ul#menu-data > .menu3 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu4").removeClass("trim");		
		jQuery("ul#menu-data > .menu4 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu5").removeClass("trim");		
		jQuery("ul#menu-data > .menu5 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu6").removeClass("trim");		
		jQuery("ul#menu-data > .menu6 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu7").removeClass("trim");		
		jQuery("ul#menu-data > .menu7 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu8").removeClass("trim");		
		jQuery("ul#menu-data > .menu8 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu9").removeClass("trim");		
		jQuery("ul#menu-data > .menu9> .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu11").removeClass("trim");		
		jQuery("ul#menu-data > .menu11 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu12").removeClass("trim");		
		jQuery("ul#menu-data > .menu12 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu13").removeClass("trim");		
		jQuery("ul#menu-data > .menu13 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
	});
});
</script>
<script>
jQuery(document).ready(function(){
	jQuery("ul#menu-data > .menu11").hover(function(){
		jQuery("ul#menu-data > .menu11").addClass("trim");	
		jQuery("ul#menu-data > .menu11 > .pull-right > i.fa.fa-angle-right").css("display", "inline-block");
		jQuery("ul#menu-data > .menu1").removeClass("trim");		
		jQuery("ul#menu-data > .menu1 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu2").removeClass("trim");		
		jQuery("ul#menu-data > .menu2 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu3").removeClass("trim");		
		jQuery("ul#menu-data > .menu3 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu4").removeClass("trim");		
		jQuery("ul#menu-data > .menu4 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu5").removeClass("trim");		
		jQuery("ul#menu-data > .menu5 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu6").removeClass("trim");		
		jQuery("ul#menu-data > .menu6 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu7").removeClass("trim");		
		jQuery("ul#menu-data > .menu7 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu8").removeClass("trim");		
		jQuery("ul#menu-data > .menu8 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu9").removeClass("trim");		
		jQuery("ul#menu-data > .menu9> .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu10").removeClass("trim");		
		jQuery("ul#menu-data > .menu10 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu12").removeClass("trim");		
		jQuery("ul#menu-data > .menu12 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu13").removeClass("trim");		
		jQuery("ul#menu-data > .menu13 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
	});
});
</script>
<script>
jQuery(document).ready(function(){
	jQuery("ul#menu-data > .menu12").hover(function(){
		jQuery("ul#menu-data > .menu12").addClass("trim");	
		jQuery("ul#menu-data > .menu12 > .pull-right > i.fa.fa-angle-right").css("display", "inline-block");
		jQuery("ul#menu-data > .menu1").removeClass("trim");		
		jQuery("ul#menu-data > .menu1 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu2").removeClass("trim");		
		jQuery("ul#menu-data > .menu2 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu3").removeClass("trim");		
		jQuery("ul#menu-data > .menu3 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu4").removeClass("trim");		
		jQuery("ul#menu-data > .menu4 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu5").removeClass("trim");		
		jQuery("ul#menu-data > .menu5 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu6").removeClass("trim");		
		jQuery("ul#menu-data > .menu6 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu7").removeClass("trim");		
		jQuery("ul#menu-data > .menu7 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu8").removeClass("trim");		
		jQuery("ul#menu-data > .menu8 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu9").removeClass("trim");		
		jQuery("ul#menu-data > .menu9> .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu10").removeClass("trim");		
		jQuery("ul#menu-data > .menu10 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu11").removeClass("trim");		
		jQuery("ul#menu-data > .menu11 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu13").removeClass("trim");		
		jQuery("ul#menu-data > .menu13 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
	});
});
</script>
<script>
jQuery(document).ready(function(){
	jQuery("ul#menu-data > .menu13").hover(function(){
		jQuery("ul#menu-data > .menu13").addClass("trim");	
		jQuery("ul#menu-data > .menu13 > .pull-right > i.fa.fa-angle-right").css("display", "inline-block");
		jQuery("ul#menu-data > .menu1").removeClass("trim");		
		jQuery("ul#menu-data > .menu1 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu2").removeClass("trim");		
		jQuery("ul#menu-data > .menu2 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu3").removeClass("trim");		
		jQuery("ul#menu-data > .menu3 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu4").removeClass("trim");		
		jQuery("ul#menu-data > .menu4 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu5").removeClass("trim");		
		jQuery("ul#menu-data > .menu5 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu6").removeClass("trim");		
		jQuery("ul#menu-data > .menu6 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu7").removeClass("trim");		
		jQuery("ul#menu-data > .menu7 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu8").removeClass("trim");		
		jQuery("ul#menu-data > .menu8 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu9").removeClass("trim");		
		jQuery("ul#menu-data > .menu9> .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu10").removeClass("trim");		
		jQuery("ul#menu-data > .menu10 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu11").removeClass("trim");		
		jQuery("ul#menu-data > .menu11 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .menu12").removeClass("trim");		
		jQuery("ul#menu-data > .menu12 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
	});
});
</script>



<!--- Right Side JS -->


<script>
jQuery(document).ready(function(){
	jQuery("ul#menu-data > .right-menu").hover(function(){
		jQuery("ul#menu-data > .right-menu").addClass("trim");	
		jQuery("ul#menu-data > .right-menu > .pull-right > i.fa.fa-angle-right").css("display", "inline-block");
		jQuery("ul#menu-data > .right-menu1").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu1 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu2").removeClass("trim");	
		jQuery("ul#menu-data > .right-menu2 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu3").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu3 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu4").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu4 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu5").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu5 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu6").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu6 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu7").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu7 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu8").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu8 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu9").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu9 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu10").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu10> .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu11").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu11 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu12").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu12 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu13").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu13 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
	
	});
});
</script>
<script>
jQuery(document).ready(function(){
	jQuery("ul#menu-data > .right-menu1").hover(function(){
		jQuery("ul#menu-data > .right-menu1").addClass("trim");	
		jQuery("ul#menu-data > .right-menu1 > .pull-right > i.fa.fa-angle-right").css("display", "inline-block");
		jQuery("ul#menu-data > .right-menu").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu2").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu2 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu3").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu3 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu4").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu4 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu5").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu5 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu6").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu6 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu7").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu7 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu8").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu8 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu9").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu9 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu10").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu10> .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu11").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu11 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu12").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu12 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu13").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu13 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
	
	});
});
</script>
<script>
jQuery(document).ready(function(){
	jQuery("ul#menu-data > .right-menu2").hover(function(){
		jQuery("ul#menu-data > .right-menu2").addClass("trim");	
		jQuery("ul#menu-data > .right-menu2 > .pull-right > i.fa.fa-angle-right").css("display", "inline-block");
		jQuery("ul#menu-data > .right-menu").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu1").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu1 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu3").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu3 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu4").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu4 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu5").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu5 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu6").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu6 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu7").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu7 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu8").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu8 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu9").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu9 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu10").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu10> .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu11").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu11 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu12").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu12 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu13").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu13 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		
	
	});
});
</script>
<script>
jQuery(document).ready(function(){
	jQuery("ul#menu-data > .right-menu3").hover(function(){
		jQuery("ul#menu-data > .right-menu3").addClass("trim");	
		jQuery("ul#menu-data > .right-menu3 > .pull-right > i.fa.fa-angle-right").css("display", "inline-block");
		jQuery("ul#menu-data > .right-menu").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu1").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu1 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu2").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu2 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu4").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu4 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu5").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu5 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu6").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu6 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu7").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu7 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu8").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu8 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu9").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu9 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu10").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu10> .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu11").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu11 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu12").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu12 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu13").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu13 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
	});
});
</script>
<script>
jQuery(document).ready(function(){
	jQuery("ul#menu-data > .right-menu4").hover(function(){
		jQuery("ul#menu-data > .right-menu4").addClass("trim");	
		jQuery("ul#menu-data > .right-menu4 > .pull-right > i.fa.fa-angle-right").css("display", "inline-block");
		jQuery("ul#menu-data > .right-menu").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu1").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu1 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu2").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu2 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu3").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu3 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu5").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu5 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu6").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu6 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu7").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu7 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu8").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu8 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu9").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu9 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu10").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu10> .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu11").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu11 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu12").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu12 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu13").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu13 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
	});
});
</script>
<script>
jQuery(document).ready(function(){
	jQuery("ul#menu-data > .right-menu5").hover(function(){
		jQuery("ul#menu-data > .right-menu5").addClass("trim");	
		jQuery("ul#menu-data > .right-menu5 > .pull-right > i.fa.fa-angle-right").css("display", "inline-block");
		jQuery("ul#menu-data > .right-menu").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu1").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu1 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu2").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu2 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu3").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu3 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu4").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu4 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu6").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu6 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu7").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu7 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu8").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu8 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu9").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu9 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu10").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu10> .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu11").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu11 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu12").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu12 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu13").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu13 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
	});
});
</script>
<script>
jQuery(document).ready(function(){
	jQuery("ul#menu-data > .right-menu6").hover(function(){
		jQuery("ul#menu-data > .right-menu6").addClass("trim");	
		jQuery("ul#menu-data > .right-menu6 > .pull-right > i.fa.fa-angle-right").css("display", "inline-block");
		jQuery("ul#menu-data > .right-menu").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu1").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu1 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu2").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu2 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu3").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu3 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu4").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu4 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu5").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu5 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu7").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu7 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu8").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu8 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu9").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu9 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu10").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu10> .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu11").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu11 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu12").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu12 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu13").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu13 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
	});
});
</script>
<script>
jQuery(document).ready(function(){
	jQuery("ul#menu-data > .right-menu7").hover(function(){
		jQuery("ul#menu-data > .right-menu7").addClass("trim");	
		jQuery("ul#menu-data > .right-menu7 > .pull-right > i.fa.fa-angle-right").css("display", "inline-block");
		jQuery("ul#menu-data > .right-menu").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu1").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu1 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu2").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu2 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu3").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu3 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu4").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu4 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu5").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu5 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu6").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu6 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu8").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu8 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu9").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu9 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu10").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu10> .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu11").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu11 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu12").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu12 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu13").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu13 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
	});
});
</script>
<script>
jQuery(document).ready(function(){
	jQuery("ul#menu-data > .right-menu8").hover(function(){
		jQuery("ul#menu-data > .right-menu8").addClass("trim");	
		jQuery("ul#menu-data > .right-menu8 > .pull-right > i.fa.fa-angle-right").css("display", "inline-block");
		jQuery("ul#menu-data > .right-menu").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu1").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu1 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu2").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu2 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu3").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu3 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu4").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu4 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu5").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu5 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu6").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu6 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu7").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu7 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu9").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu9 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu10").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu10> .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu11").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu11 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu12").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu12 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu13").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu13 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
	});
});
</script>
<script>
jQuery(document).ready(function(){
	jQuery("ul#menu-data > .right-menu9").hover(function(){
		jQuery("ul#menu-data > .right-menu9").addClass("trim");	
		jQuery("ul#menu-data > .right-menu9 > .pull-right > i.fa.fa-angle-right").css("display", "inline-block");
		jQuery("ul#menu-data > .right-menu").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu1").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu1 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu2").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu2 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu3").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu3 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu4").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu4 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu5").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu5 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu6").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu6 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu7").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu7 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu8").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu8 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu10").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu10> .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu11").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu11 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu12").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu12 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu13").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu13 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
	});
});
</script>
<script>
jQuery(document).ready(function(){
	jQuery("ul#menu-data > .right-menu10").hover(function(){
		jQuery("ul#menu-data > .right-menu10").addClass("trim");	
		jQuery("ul#menu-data > .right-menu10 > .pull-right > i.fa.fa-angle-right").css("display", "inline-block");
		jQuery("ul#menu-data > .right-menu").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu1").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu1 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu2").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu2 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu3").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu3 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu4").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu4 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu5").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu5 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu6").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu6 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu7").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu7 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu8").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu8 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu9").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu9> .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu11").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu11 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu12").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu12 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu13").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu13 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
	});
});
</script>
<script>
jQuery(document).ready(function(){
	jQuery("ul#menu-data > .right-menu11").hover(function(){
		jQuery("ul#menu-data > .right-menu11").addClass("trim");	
		jQuery("ul#menu-data > .right-menu11 > .pull-right > i.fa.fa-angle-right").css("display", "inline-block");
		jQuery("ul#menu-data > .right-menu").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu1").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu1 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu2").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu2 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu3").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu3 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu4").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu4 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu5").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu5 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu6").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu6 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu7").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu7 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu8").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu8 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu9").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu9> .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu10").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu10 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu12").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu12 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu13").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu13 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
	});
});
</script>
<script>
jQuery(document).ready(function(){
	jQuery("ul#menu-data > .right-menu12").hover(function(){
		jQuery("ul#menu-data > .right-menu12").addClass("trim");	
		jQuery("ul#menu-data > .right-menu12 > .pull-right > i.fa.fa-angle-right").css("display", "inline-block");
		jQuery("ul#menu-data > .right-menu").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu1").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu1 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu2").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu2 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu3").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu3 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu4").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu4 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu5").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu5 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu6").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu6 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu7").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu7 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu8").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu8 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu9").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu9> .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu10").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu10 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu11").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu11 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu13").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu13 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
	});
});
</script>
<script>
jQuery(document).ready(function(){
	jQuery("ul#menu-data > .right-menu13").hover(function(){
		jQuery("ul#menu-data > .right-menu13").addClass("trim");	
		jQuery("ul#menu-data > .right-menu13 > .pull-right > i.fa.fa-angle-right").css("display", "inline-block");
		jQuery("ul#menu-data > .right-menu").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu1").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu1 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu2").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu2 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu3").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu3 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu4").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu4 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu5").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu5 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu6").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu6 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu7").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu7 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu8").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu8 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu9").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu9> .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu10").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu10 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu11").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu11 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
		jQuery("ul#menu-data > .right-menu12").removeClass("trim");		
		jQuery("ul#menu-data > .right-menu12 > .pull-right > i.fa.fa-angle-right").css("display", "none;");
	});
});
</script>

<script>
	jQuery(document).ready(function(){
		jQuery(".sub-menu6 > li").mouseover(function(){
		 jQuery(".sub-menu6 > li").addClass("trim");
		});	
		jQuery(".sub-menu6 > li").mouseleave(function(){
			jQuery(".sub-menu6 > li").removeClass("trim");
		});	
	});
</script>
<script>
	/* jQuery(document).ready(function(){
		jQuery(".recent-posts-widget-with-thumbnails > ul > li").hover(function(){
			jQuery(".rpwwt-post-categories").css("color","white");			
			jQuery(".rpwwt-post-date").css("color", "white	");			
		}),	
		jQuery(".recent-posts-widget-with-thumbnails > ul > li").mouseleave(function(){
			jQuery(".rpwwt-post-categories").css("color","#1F1F1F");
			jQuery(".rpwwt-post-date").css("color","#1F1F1F");
		
		});
	}); */
	
</script>
<script>
jQuery(document).ready(function(){
	jQuery('.expand-one').click(function(){
    jQuery('.content-one').slideToggle('slow');
    jQuery('.content-1,.content-2').slideUp('slow');	
	});	
});
</script>
<script>
jQuery(document).ready(function(){
	jQuery('.expand-1').click(function(){
    jQuery('.content-1').slideToggle('slow');
    jQuery('.content-one,.content-2').slideUp('slow');	
	});	
});
</script>
<script>
jQuery(document).ready(function(){
	jQuery('.expand-2').click(function(){
    jQuery('.content-2').slideToggle('slow');
    jQuery('.content-1,.content-one').slideUp('slow');	
	});	
});
</script>
<script>
	jQuery().ready(function(){
		jQuery("ul.content-one > li").hover(function(){
			jQuery("ul.content-one > li > a").css("color", "white");
		});
		
	});
</script>

<!-- custom jquery 3/16 -->
<script type="text/javascript">
	
jQuery('.abt-dropdown').on('hover', function(){
	var theId = jQuery(this).attr('id');

	jQuery('ul.'+theId).css({'background-color':'blue'});
});

</script>

<!-- END custom jquery 3/16 -->

<script type="text/javascript" src="/wp-content/themes/inkelephant-4.0.3/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="/wp-content/themes/inkelephant-4.0.3/js/ct.js"></script>
</html>