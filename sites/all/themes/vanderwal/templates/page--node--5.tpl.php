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

<style>


.html5gallery-tn-0,.html5gallery-tn-selected-0,.html5gallery-tn-1,.html5gallery-tn-selected-1,.html5gallery-tn-2,.html5gallery-tn-selected-2,.html5gallery-tn-3,.html5gallery-tn-selected-3,.html5gallery-tn-4,.html5gallery-tn-selected-4
{
background:transparent!important;
box-shadow:none!important
}


.html5gallery-tn-img-0,.html5gallery-tn-img-0 div,.html5gallery-tn-img-0 img
{
height:78px!important;
}
.html5gallery-tn-img-play-0
{
display:none!important;
}




.html5gallery-elem-0 iframe
{
width:100%!important;
}
.html5gallery-title-0
{
display:block!important;
 left: 500px!important;
 width:340px!important;
}

.html5gallery-box-0
{
width:460px!important;
}

.html5gallery-elem-0
{
width:100%!important;
}

.html5gallery-right-0,.html5gallery-lightbox-0
{
left:415px!important;
}

.html5gallery-play-0,.html5gallery-pause-0
{
display:none!important;
}
.html5boxVideoPlay
{
left:30%!important;
}

.html5gallery-elem-0 img
{
max-width:100%!important;
height:100%!important;
top:0px!important;
min-height:350px!important;
}

.html5gallery-elem-img-0
{
width:100%!important;
}


</style>


<script type="text/javascript" src="<?php print base_path();?>sites/all/themes/vanderwal/html5gallery/html5gallery.js"></script>


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
		$node2 = node_load(5);
		print '<h1>'. $node2->title .'</h1>';
		?>
		 <p><?php print $node2->body['und'][0]['value']; ?></p>

        </div>
      </div>
     <!-------------- /end Banner Part ------------------> 
    </div>
  </section>
  <!-------------- /end First Part ------------------> 
  <!-------------- Start Center Part ------------------>
  <section class="center_part" style="height:auto">
  	<div class="main_container">
  

        <div style="display:none;margin:0 auto;" class="html5gallery" data-skin="gallery" data-width="650" data-height="350" data-resizemode="fill">

<?php
$type = "bim_capabilities";
$nodes = node_load_multiple(array(), array('type' => $type));
foreach($nodes as $products):?>

<a href="<?php print $products->field_video_image_url['und'][0]['value']; ?>">
<img src="<?php echo render(file_create_url($products->field_url_thumbnails['und'][0]['uri'])); ?>" alt="<?php print $products->body['und'][0]['value']; ?>"></a>

<?php endforeach; ?>
	
	</div>
    
    
    
        <div style="display:none;margin:0 auto;" id="htmlmobslider" class="html5gallery" data-skin="gallery" data-width="280" data-height="320" data-resizemode="fill">

<?php
$type = "bim_capabilities";
$nodes = node_load_multiple(array(), array('type' => $type));
foreach($nodes as $products):?>

<a href="<?php print $products->field_video_image_url['und'][0]['value']; ?>">
<img src="<?php echo render(file_create_url($products->field_url_thumbnails['und'][0]['uri'])); ?>" alt="<?php print $products->body['und'][0]['value']; ?>"></a>

<?php endforeach; ?>
	
	</div>
    
    
    <div style="display:none;margin:0 auto;" id="htmlmobsliderbig" class="html5gallery" data-skin="gallery" data-width="320" data-height="400" data-resizemode="fill">

<?php
$type = "bim_capabilities";
$nodes = node_load_multiple(array(), array('type' => $type));
foreach($nodes as $products):?>

<a href="<?php print $products->field_video_image_url['und'][0]['value']; ?>">
<img src="<?php echo render(file_create_url($products->field_url_thumbnails['und'][0]['uri'])); ?>" alt="<?php print $products->body['und'][0]['value']; ?>"></a>

<?php endforeach; ?>
	
	</div>


 <div style="display:none;margin:0 auto;" id="htmlmobsliderbigger" class="html5gallery" data-skin="gallery" data-width="320" data-height="400" data-resizemode="fill">

<?php
$type = "bim_capabilities";
$nodes = node_load_multiple(array(), array('type' => $type));
foreach($nodes as $products):?>

<a href="<?php print $products->field_video_image_url['und'][0]['value']; ?>">
<img src="<?php echo render(file_create_url($products->field_url_thumbnails['und'][0]['uri'])); ?>" alt="<?php print $products->body['und'][0]['value']; ?>"></a>

<?php endforeach; ?>
	
	</div>
    
    
    
 <div style="display:none;margin:0 auto;" id="htmlmobsliderbiggest" class="html5gallery" data-skin="gallery" data-width="600" data-height="400" data-resizemode="fill">

<?php
$type = "bim_capabilities";
$nodes = node_load_multiple(array(), array('type' => $type));
foreach($nodes as $products):?>

<a href="<?php print $products->field_video_image_url['und'][0]['value']; ?>">
<img src="<?php echo render(file_create_url($products->field_url_thumbnails['und'][0]['uri'])); ?>" alt="<?php print $products->body['und'][0]['value']; ?>"></a>

<?php endforeach; ?>
	
	</div>






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
