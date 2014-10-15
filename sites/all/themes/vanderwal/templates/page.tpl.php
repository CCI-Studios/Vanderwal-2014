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
           jQuery('ul.res_nav').css('max-height','400px');
            jQuery(this).addClass('active');
           }
           
   });
});
</script>



<div id="wrapper"> 
  <!-------------- Start First Part ------------------>
  <div class="first_part">
    <div class="main_container"><div>
    <!-------------- Start Header ------------------>
      <div id="header">
   <div class="header_top">

			<?php print theme('links', array('links' => menu_navigation_links('menu-top-menu'), 'attributes' => array('class'=> array('top_nav')) ));?>


           <?php print render($page['header-social-link']); ?>
   <!-------------- Responsiv Menu Start-------------------------->
               <div class="res_menu_holder" style="display:none">
           		<div class="res_menu"></div>
            
                 <?php print theme('links', array('links' => menu_navigation_links('menu-mobile-menu'), 'attributes' => array('class'=> array('res_nav')) ));?>
            
           </div>
           <!-------------- /end Responsiv Menu -------------------------->
        </div>
        <div class="logo">
			 <?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
        <img src="<?php print base_path();?>sites/all/themes/vanderwal/images/logo.png">
      </a>
    <?php endif; ?>
    </div>
     
        <div id="nav">
			
			  <?php print theme('links__system_main_menu', array(
          'links' => $main_menu,
          'attributes' => array(
            'id' => '',
            'class' => array('nav', 'clearfix'),
          ),
        )); ?>
    </div>
    <!-------------- /end Header ------------------> 
    <!-------------- Start Banner Part ------------------> 
      <div class="banner">
      	<div class="banner_right">
<?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
 <?php print render($page['top-content']); ?>


        </div>
      </div>
     <!-------------- /end Banner Part ------------------> 
</div>
 </div></div>
  </div>
  <!-------------- /end First Part ------------------> 
  <!-------------- Start Center Part ------------------>
  <div class="center_part" style="height:auto">
  	<div class="main_container"><div>

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

    </div></div>
</div>
  <!-------------- /end Center Part ------------------>
  <!-------------- Start Footer Here ------------------>
  <div id="footer">
  	<div class="main_container"><div>
    
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


    </div></div>
</div>

  <!-------------- /end Footer Here ------------------>
</div>
