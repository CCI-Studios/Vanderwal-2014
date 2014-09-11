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
