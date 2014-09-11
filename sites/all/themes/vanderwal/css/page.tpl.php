<script>

    jQuery(document).ready(function(){
      jQuery('.res_menu').click(function(){    
            
        	   if(jQuery(".res_menu").hasClass('active'))
            { 
           jQuery('ul.res_nav').css('max-height','0px');
           jQuery(this).removeClass('active');
           }
           else
           {  
           jQuery('ul.res_nav').css('max-height','700px');
            jQuery(this).addClass('active');
           }
           
   });
});



jQuery(document).ready(function(){

	jQuery(".views-row").each(function(){
	   
		jQuery(this).hover(function(){
                  jQuery(this).find(".linkclear1").css("background","#eee210");
		});  
                 
		jQuery(this).mouseout(function(){
                  jQuery(this).find(".linkclear1").css("background","#00609E");
		});        
                     
     	});

            
            jQuery('#block-views-steel-advantage-block .views-field-view-node').click(function(){   
             jQuery('#block-views-steel-advantage-block').css('display','none');
             jQuery('#block-views-steel-advantage-block .views-row').css('display','none');
             jQuery('#block-views-steel-advantage-boxes-block .views-row').find('span.linkclear1').css('background','#00609E');
             jQuery('#block-views-steel-advantage-boxes-block .views-row').find('span.linkclear1').removeClass('linkclear1_clk');
            });

             jQuery('#block-views-container-building-block .views-field-view-node').click(function(){   
             jQuery('#block-views-container-building-block').css('display','none');
             jQuery('#block-views-container-building-block .views-row').css('display','none');
            jQuery('#block-views-container-building-boxes-block .views-row').find('span.linkclear1').css('background','#00609E');
             jQuery('#block-views-container-building-boxes-block .views-row').find('span.linkclear1').removeClass('linkclear1_clk');

            });

             jQuery('#block-views-products-services-block .views-field-view-node').click(function(){   
             jQuery('#block-views-products-services-block').css('display','none');
             jQuery('#block-views-products-services-block .views-row').css('display','none');
              jQuery('#block-views-products-services-boxes-block .views-row').find('span.linkclear1').css('background','#00609E');
             jQuery('#block-views-products-services-boxes-block .views-row').find('span.linkclear1').removeClass('linkclear1_clk');

            });

             jQuery('#block-views-technical-data-block .views-field-view-node').click(function(){   
             jQuery('#block-views-technical-data-block').css('display','none');
             jQuery('#block-views-technical-data-block .views-row').css('display','none');
             jQuery('#block-views-083ba299723cf19a5629b677c7ee89ae .views-row').find('span.linkclear1').css('background','#00609E');
             jQuery('#block-views-083ba299723cf19a5629b677c7ee89ae .views-row').find('span.linkclear1').removeClass('linkclear1_clk');

            });

            jQuery('#block-views-faq-block .views-field-view-node').click(function(){   
             jQuery('#block-views-faq-block').css('display','none');
             jQuery('#block-views-faq-block .views-row').css('display','none');
             jQuery('#block-views-faq-boxes-block .views-row').find('span.linkclear1').css('background','#00609E');
             jQuery('#block-views-faq-boxes-block .views-row').find('span.linkclear1').removeClass('linkclear1_clk');
            });


});

</script>

<?php
for ($x=1; $x<=8; $x++) {
  echo "<script>
   jQuery(window).load(function(){
   jQuery('.header_top .linkclear1').clone().prependTo('#block-views-products-services-boxes-block .views-row-$x .views-field-title');
   jQuery('.header_top .linkclear1').clone().prependTo('#block-views-steel-advantage-boxes-block .views-row-$x .views-field-title');
   jQuery('.header_top .linkclear1').clone().prependTo('#block-views-container-building-boxes-block .views-row-$x .views-field-title');
   jQuery('.header_top .linkclear1').clone().prependTo('#block-views-083ba299723cf19a5629b677c7ee89ae .views-row-$x .views-field-title');
   jQuery('.header_top .linkclear1').clone().prependTo('#block-views-faq-boxes-block .views-row-$x .views-field-title');

   });

jQuery(document).ready(function(){

     jQuery('#block-views-steel-advantage-boxes-block .views-row-$x').click(function(){
   
 jQuery('#block-views-steel-advantage-boxes-block .views-row').find('span.linkclear1').css('background','#00609E');
        jQuery('#block-views-steel-advantage-boxes-block .views-row').find('span.linkclear1').removeClass('linkclear1_clk');
           jQuery(this).find('span.linkclear1').addClass('linkclear1_clk');
     
        jQuery('#block-views-steel-advantage-block').css('display','block');
       jQuery('#block-views-steel-advantage-block .views-field-view-node').css('display','block');
       jQuery('#block-views-steel-advantage-block .views-row').css('display','none');
       jQuery('#block-views-steel-advantage-block .views-row-$x').css('display','block');
       jQuery('#block-views-steel-advantage-block .views-row-$x').css('max-height','1000px');
       
         });
           
       jQuery('#block-views-container-building-boxes-block .views-row-$x').click(function(){
   
      jQuery('#block-views-container-building-boxes-block .views-row').find('span.linkclear1').css('background','#00609E');
        jQuery('#block-views-container-building-boxes-block .views-row').find('span.linkclear1').removeClass('linkclear1_clk');
           jQuery(this).find('span.linkclear1').addClass('linkclear1_clk');

    jQuery('#block-views-container-building-block').css('display','block');
    jQuery('#block-views-container-building-block .views-field-view-node').css('display','block');
jQuery('#block-views-container-building-block .views-row').css('display','none');
 jQuery('#block-views-container-building-block .views-row-$x').css('display','block');
jQuery('#block-views-container-building-block .views-row-$x').css('max-height','1000px');
      }); 


     jQuery('#block-views-products-services-boxes-block .views-row-$x').click(function(){
     
          jQuery('#block-views-products-services-boxes-block .views-row').find('span.linkclear1').css('background','#00609E');
           jQuery('#block-views-products-services-boxes-block .views-row').find('span.linkclear1').removeClass('linkclear1_clk');
           jQuery(this).find('span.linkclear1').addClass('linkclear1_clk');
     
        jQuery('#block-views-products-services-block').css('display','block');
        jQuery('#block-views-products-services-block .views-field-view-node').css('display','block');
       jQuery('#block-views-products-services-block .views-row').css('display','none');
       jQuery('#block-views-products-services-block .views-row-$x').css('display','block');
        jQuery('#block-views-products-services-block .views-row-$x').css('max-height','1000px');
       jQuery('#block-views-products-services-block .views-row-8').css('max-height','0px');
          
         });


		jQuery('.view--products-services-boxes .views-row-8').click(function(){
		     window.location.href = '59'; 
		 jQuery('#block-views-products-services-block').css('max-height','0px');
		       jQuery('#block-views-products-services-block .views-row').css('max-height','0px');
		       jQuery('#block-views-products-services-block .views-row-8').css('max-height','0px');
		 }); 

         
         jQuery('#block-views-083ba299723cf19a5629b677c7ee89ae .views-row-$x').click(function(){
   
          jQuery('#block-views-083ba299723cf19a5629b677c7ee89ae .views-row').find('span.linkclear1').css('background','#00609E');
         jQuery('#block-views-083ba299723cf19a5629b677c7ee89ae .views-row').find('span.linkclear1').removeClass('linkclear1_clk');
           jQuery(this).find('span.linkclear1').addClass('linkclear1_clk');
     
        jQuery('#block-views-technical-data-block').css('display','block');
        jQuery('#block-views-technical-data-block .views-field-view-node').css('display','block');
       jQuery('#block-views-technical-data-block .views-row').css('display','none');
       jQuery('#block-views-technical-data-block .views-row-$x').css('display','block');
       jQuery('#block-views-technical-data-block .views-row-$x').css('max-height','1000px');
         });


	   jQuery('#block-views-faq-boxes-block .views-row-$x').click(function(){
	   
	 jQuery('#block-views-faq-boxes-block .views-row').find('span.linkclear1').css('background','#00609E');
		jQuery('#block-views-faq-boxes-block .views-row').find('span.linkclear1').removeClass('linkclear1_clk');
		   jQuery(this).find('span.linkclear1').addClass('linkclear1_clk');
	     
		jQuery('#block-views-faq-block').css('display','block');
               jQuery('#block-views-faq-block .views-field-view-node').css('display','block');
	       jQuery('#block-views-faq-block .views-row').css('display','none');
	       jQuery('#block-views-faq-block .views-row-$x').css('display','block');
               jQuery('#block-views-faq-block .views-row-$x').css('max-height','1000px');
               jQuery('#block-views-faq-block .views-row-$x .views-field-title .field-content a').html('Answer');
	       
		 });
  




 }); </script>";
}
?> 


<style>

</style>

<script src="http://bxslider.com/js/jquery.min.js"></script>

<script src="<?php print base_path();?>sites/all/themes/vanderwal/bxslider/jquery.bxslider.js"></script>

<script type="text/javascript" src="<?php print base_path();?>sites/all/themes/vanderwal/html5gallery/html5gallery.js"></script>




<div id="wrapper"> 
  <!-------------- Start First Part ------------------>
  <section class="first_part">
    <div class="main_container">
    <!-------------- Start Header ------------------>
      <header>
   <div class="header_top">
<span class="linkclear1"></span>

			<?php print theme('links', array('links' => menu_navigation_links('menu-top-menu'), 'attributes' => array('class'=> array('top_nav')) ));?>


           <?php print render($page['header-social-link']); ?>
   <!-------------- Responsiv Menu Start-------------------------->
               <div class="res_menu_holder" style="display:none">
           		<div class="res_menu"></div>
            
                 <?php print theme('links', array('links' => menu_navigation_links('menu-top-mob-menu'), 'attributes' => array('class'=> array('res_nav')) ));?>
            
           </div>
           <!-------------- /end Responsiv Menu ------------------------->
        </div>
        <div class="logo">
			 <?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
        <img src="<?php print base_path();?>sites/all/themes/vanderwal/images/logo.png">
      </a>
    <?php endif; ?>
    </div>
     
        <nav>
			
			  <?php print theme('links__system_main_menu', array(
          'links' => $main_menu,
          'attributes' => array(
            'id' => '',
            'class' => array('nav', 'clearfix'),
          ),
        )); ?>
        </nav>
      </header>
    <!-------------- /end Header ------------------> 
    <!-------------- Start Banner Part ------------------> 
      <div class="banner">
      	<div class="banner_right">

 <?php print render($page['top-content']); ?>


        </div>
      </div>
     <!-------------- /end Banner Part ------------------> 
    </div>
  </section>
  <!-------------- /end First Part ------------------> 
  <!-------------- Start Center Part ------------------>
  <section class="center_part" style="height:auto">
  	<div class="main_container">

<?php if ($messages): ?>
    <div id="messages"><div class="section clearfix">
      <?php print $messages; ?>
    </div></div> <!-- /.section, /#messages -->
  <?php endif; ?>
  
 <?php if ($tabs): ?>
        <div class="tabs">
          <?php print render($tabs); ?>
        </div>
      <?php endif; ?>
	  


                    <?php print render($page['steel-advantage-views']); ?>
		    <?php print render($page['content']); ?>

<!--script>
$(document).ready(function(){
  $('.views-slideshow-pager-fields').bxSlider({
    slideWidth: 80,
    minSlides: 0,
    maxSlides: 5,
    slideMargin: 10,
    asNavfor:'.views-slideshow-cycle-main-frame' 
  });
});
</script-->

    </div>
  </section>
  <!-------------- /end Center Part ------------------>
  <!-------------- Start Footer Here ------------------>
  <footer>
  	<div class="main_container">
    
        <div class="f_right">

<?php print render($page['footer-logo']); ?>

<?php print render($page['footer-contact-info']); ?>

<?php print render($page['footer-social-link']); ?>
 
            <div class="f_email_holder">
            	<h3>Sign Up For Our Newsletter</h3>
                    
<?php print render($page['footer-newsletter']); ?>
                <p><?php print render($page['footer-copyright']); ?></p>
            </div>
        </div>

	<div class="f_left">
            	<h1>Contact</h1>
<?php print render($page['footer-contact-form']); ?>
        </div>


    </div>
  </footer>

  <!-------------- /end Footer Here ------------------>
</div>
</body>
</html>





<?php /*



<div id="wrapper">




  <header>
    <div class="main_container">
      <div class="logo">
	  <?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
        <img style="width: 42%;" src="<?php print base_path();?>sites/all/themes/players/images/logo.png">
      </a>
    <?php endif; ?>

	  <a href="#"><img style="margin-left: 50px; width: 40%;" src="<?php print base_path();?>sites/all/themes/players/images/balon-logo.png"></a></div>
      <div class="logo_ajax"><?php //print render($page['top-right-logo']); ?></div>
	   <nav>
	  <?php print theme('links__system_main_menu', array(
          'links' => $main_menu,
          'attributes' => array(
            'id' => 'main-menu-links',
            'class' => array('links', 'clearfix'),
          ),
          'heading' => array(
            'text' => t('Main menu'),
            'level' => 'h2',
            'class' => array('element-invisible'),
          ),
        )); ?>
		
        <div class="search_holder">
            <?php print render($page['search-box']); ?></div>
      </nav>
    </div>
  </header>
  <article>
    <div class="main_container">
           
      <div class="banner">
        <div class="slider">
         <?php print render($page['hometop-slider']); ?>
        </div>
        <div class="banner_right">
		<?php print render($page['home-slider-right-box']); ?>
        </div>
      </div>
      <div class="content_part">

	
			  <?php if ($messages): ?>
    <div id="messages"><div class="section clearfix">
      <?php print $messages; ?>
    </div></div> <!-- /.section, /#messages -->
  <?php endif; ?>
  
 <?php if ($tabs): ?>
        <div class="tabs">
          <?php print render($tabs); ?>
        </div>
      <?php endif; ?>
	  
        <div class="content_left">
          <div class="story_top"></div>
          <div class="story_inner">
		  <?php print render($page['latest-stories']); ?>
          </div>
          <div class="story_bottum"></div>
        </div>
        <div class="r_sidebar">
          <div class="content_center">
            <div class="video_top"></div>
            <div class="story_inner">
              <ul class="video_tab">
                <li><span style="cursor:pointer" id="glry1" class="tab_sel">training</span></li>
                <li><span style="cursor:pointer" id="glry2" >coaches</span></li>
                <li><span style="cursor:pointer" id="glry3">events</span></li>
              </ul>
			
			<div id="gallery1">
	<div style="display:none;margin:0 auto;" class="html5gallery" data-skin="gallery" data-width="380" data-height="272" data-resizemode="fill">

<?php
$type = "training_videos";
$nodes = node_load_multiple(array(), array('type' => $type));
foreach($nodes as $products):
$youtubeimg=explode('/',$products->field_vurl['und'][0]['video_url']);  $youimg=$youtubeimg[count($youtubeimg)-1];
?>


<?php
$youimgs = str_replace("watch?v=","",$youimg);
$strArray = explode('&',$youimgs);
$name = $strArray[0];

$getname = explode('=',$name);
$viewimgname = $getname[0];
// print_r($viewimgname);?>
	
		<a href="<?php echo $products->field_vurl['und'][0]['video_url'];?>"><img src="http://img.youtube.com/vi/<?php print $viewimgname;?>/0.jpg" alt="<?php print $youimg ?>"></a>
		
<?php   //print $products->nid; ?>
<?php //print $products->title; ?>
<?php  ?>
<?php //echo image_style_url($style, $node->field_image['und'][0]['uri']); ?>
<?php endforeach; ?>

	
	</div>
	
	</div>
	
	<div id="gallery2">
	<div style="display:none;margin:0 auto;" class="html5gallery" data-skin="gallery" data-width="380" data-height="272" data-resizemode="fill">
<?php
$type = "coaching_gallery";
$nodes = node_load_multiple(array(), array('type' => $type));
foreach($nodes as $products):

$youtubeimg=explode('/',$products->field_video_url['und'][0]['video_url']);  $youimg=$youtubeimg[count($youtubeimg)-1];
?>
	
	<?php
$youimgs = str_replace("watch?v=","",$youimg);
$strArray = explode('&',$youimgs);
$name = $strArray[0];
$getname = explode('=',$name);
$viewimgname = $getname[0];
?>


		<a href="<?php echo $products->field_video_url['und'][0]['video_url'];?>"><img src="http://img.youtube.com/vi/<?php print $viewimgname;?>/0.jpg" alt="<?php print $youimg ?>"></a>
		
<?php   //print $products->nid; ?>
<?php //print_r ($products->field_video_url); ?>
<?php  ?>
<?php //echo image_style_url($style, $node->field_image['und'][0]['uri']); ?>
<?php endforeach; ?>

	
	</div>
	</div>
	
		<div id="gallery3">
	<div style="display:none;margin:0 auto;" class="html5gallery" data-skin="gallery" data-width="380" data-height="272" data-resizemode="fill">
<?php
$type = "events";
$nodes = node_load_multiple(array(), array('type' => $type));
foreach($nodes as $products):

$youtubeimg=explode('/',$products->field_event_video_url['und'][0]['video_url']);  $youimg=$youtubeimg[count($youtubeimg)-1];

$youimgs = str_replace("watch?v=","",$youimg);

$newarr = explode('&',$youimgs);
$nameimg = $newarr[0];
$youthumg = explode('=',$nameimg);
$viewthumb = $youthumg[0];
?>

	
		<a href="<?php echo $products->field_event_video_url['und'][0]['video_url'];?>"><img src="http://img.youtube.com/vi/<?php print $viewthumb;?>/0.jpg" alt="<?php print $youimg ?>"></a>
		
<?php   //print $products->nid; ?>
<?php //print_r ($products->field_video_url); ?>
<?php  ?>
<?php //echo image_style_url($style, $node->field_image['und'][0]['uri']); ?>
<?php endforeach; ?>

	
	</div>
	</div>

        	<?php print render($page['home-gallery-content']); ?>
     
            </div>
            <div class="story_bottum"></div>
          </div>
          <div class="adver_area">
            <div class="add">
			<?php print render($page['rightbar-advertisement']); ?>
			</div>
          </div>
          <div class="text_area">
            <div class="newslatter">
			<!-- Begin MailChimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">
<style type="text/css">
	/*#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }*/
	/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. *

............................................

</style>
<div id="mc_embed_signup">
<form action="//fcai.us2.list-manage.com/subscribe/post?u=9b53235ffb54406561c6b621c&amp;id=83a964b5b8" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>

<div class="mc-field-group">
	
<label for="edit-submitted-newsletter-sign-up"> Newsletter Sign Up <span title="This field is required." class="form-required">*</span></label>

	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;"><input type="text" name="b_9b53235ffb54406561c6b621c_83a964b5b8" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
</form>
</div>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->

              <?php //print render($page['newsletter-form']); ?>
              <div class="clear"></div>
            </div>
            <p><?php print render($page['newsletter-description']); ?></p>
          </div>
        </div>
        <div class="clear"></div>
      </div>
    </div>
  </article>
  <div class="middle_area">
    <div class="main_container">
      <div class="story_cont">
	  <?php print render($page['player-story']); ?>
      </div>
      <div class="man_img"><img src="<?php print base_path();?>sites/all/themes/players/images/man_p.png" width="316" height="608" alt=""></div>
    </div>
  </div>
  <footer>
    <div class ="main_container">
      <div class="footer_inner">
        <?php print render($page['footer-menus-heading']); ?>
         
  <div class="footer1_menu"><?php print render($page['footer1-menu']); ?></div>
   <div class="footer2_menu"><?php print render($page['footer2-menu']); ?></div>

        <div class="follow">
		<?php print render($page['social-footer-box']); ?>
        </div>
        <div class="coach_img"> </div>
      </div><div class="f_bottom clear"><?php print render($page['footer-copyright']); ?></div>
    </div>
  </footer>
 


  
</div>
</body>
</html>
*/ ?>
