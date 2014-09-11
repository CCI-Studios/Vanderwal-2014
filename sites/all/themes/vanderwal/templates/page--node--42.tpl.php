
<style>
.center_img:hover span
{
display:table;
}
</style>
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
</script>

<div id="wrapper"> 
  <!-------------- Start First Part ------------------>
  <section class="first_part">
    <div class="main_container">
    <!-------------- Start Header ------------------>
      <header>
 <div class="header_top">

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

<?php
//$type = "page";
$products  = node_load(42);
//foreach($nodes as $products):
//print_r($products);
?>

        	<h1><?php print $products->title; ?></h1>
            <p><?php print $products->field_short_description['und'][0]['value']; ?></p>

<?php //endforeach; ?>
        </div>
      </div>
     <!-------------- /end Banner Part ------------------> 
    </div>
  </section>
  <!-------------- /end First Part ------------------> 
  <!-------------- Start Center Part ------------------>
  <section class="center_part">
  	<div class="main_container">

	                 <?php
			//$type = "page";
			$products  = node_load(42);// = node_load_multiple(array(), array('type' => $type));
			
			//foreach($nodes as $products):
			//echo "<pre>";print_r($products);
                        //echo "</pre>";
			?>
                         <?php print $products->body['und'][0]['value']; ?>

			<?php // endforeach; ?>
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
