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

       
             jQuery('#block-views-container-building-block .views-field-view-node').click(function(){   
             jQuery('#block-views-container-building-block').css('display','none');
             jQuery('#block-views-container-building-block .views-row').css('display','none');
            jQuery('#block-views-container-building-boxes-block .views-row').find('span.linkclear1').css('background','#00609E');
             jQuery('#block-views-container-building-boxes-block .views-row').find('span.linkclear1').removeClass('linkclear1_clk');

            });


});

</script>

<?php
for ($x=1; $x<=8; $x++) {
  echo "<script>

   jQuery(window).load(function(){
   // alert('gfgfg');
   jQuery('.header_top .linkclear1').clone().prependTo('#block-views-container-building-boxes-block .views-row-$x .views-field-title');
   });


jQuery(document).ready(function(){
   

           
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


 }); </script>";
}
?> 


<script src="http://bxslider.com/js/jquery.min.js"></script>

<script src="<?php print base_path();?>sites/all/themes/vanderwal/bxslider/jquery.bxslider.js"></script>


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





     <div class="region region-steel-advantage-views">


				   <div class="block block-views contextual-links-region" id="block-views-container-building-block">


				  <div class="content">
				    <div class="view view-container-building view-id-container_building view-display-id-block view-dom-id-8a23cc740d7ac519618f001f27f86d42">
		
				  
				  
				      <div class="view-content">


					
<?php
$type = "container_building";
$nodes = node_load_multiple(array(), array('type' => $type));
$i = 1;
foreach($nodes as $products):?>

  <div class="views-row views-row-<?php echo $i;?> views-row-odd views-row-first">
				      
				  <div class="views-field views-field-title">        <span class="field-content"><a href="/vanderwal/node/15">
<?php echo $products->title ;?></a></span>  </div>  
				 

 

<div class="views-field views-field-body"><div class="field-content">

<?php echo $products->body['und'][0]['value'] ;?>

<?php if(!empty($products->field_photo_gallery['und'])) : ?>
<div class="field-content-gallery small-scrn-biggestlong">

<ul class="bxslider<?php echo $i;?>">
     <?php foreach($products->field_photo_gallery['und'] as $img) : ?>

  <li><img src="<?php print render(file_create_url($img['uri'])); ?>" />
<div class="content_box"><h1><?php print($img['title']) ;?></h1><p><?php print($img['alt']) ;?></p></div>
</li>
     <?php endforeach; ?>
</ul>


<div class="bxpager-container"  id="bx-pager<?php echo $i;?>">
 <?php $x = 0 ; foreach($products->field_photo_gallery['und'] as $img) : ?>
  <a data-slide-index="<?php echo $x; ?>" href=""><img class="thumb" src="<?php echo render(file_create_url($img['uri'])); ?>" /></a>
     <?php $x++ ; endforeach; ?>
</div>


<script type="text/javascript">
$('.bxslider<?php echo $i;?>').bxSlider({
  pagerCustom: '#bx-pager<?php echo $i;?>',
  slideWidth: 540
});
</script>

</div>





<div class="field-content-gallery small-scrn-bign" style="display:none;">

<ul class="bxslidern-<?php echo $i;?>">
     <?php foreach($products->field_photo_gallery['und'] as $img) : ?>

  <li><img src="<?php print render(file_create_url($img['uri'])); ?>" />
<div class="content_box"><h1><?php print($img['title']) ;?></h1><p><?php print($img['alt']) ;?></p></div>
</li>
     <?php endforeach; ?>
</ul>


<div class="bxpager-container"  id="bx-pagern-<?php echo $i;?>">
 <?php $x = 0 ; foreach($products->field_photo_gallery['und'] as $img) : ?>
  <a data-slide-index="<?php echo $x; ?>" href=""><img class="thumb" src="<?php echo render(file_create_url($img['uri'])); ?>" /></a>
     <?php $x++ ; endforeach; ?>
</div>


<script type="text/javascript">
$('.bxslidern-<?php echo $i;?>').bxSlider({
  pagerCustom: '#bx-pagern-<?php echo $i;?>',
  slideWidth: 400
});
</script>

</div>


<div class="field-content-gallery small-scrn-bigger" style="display:none;">

<ul class="bxslider3-<?php echo $i;?>">
     <?php foreach($products->field_photo_gallery['und'] as $img) : ?>

  <li><img src="<?php print render(file_create_url($img['uri'])); ?>" />
<div class="content_box"><h1><?php print($img['title']) ;?></h1><p><?php print($img['alt']) ;?></p></div>
</li>
     <?php endforeach; ?>
</ul>


<div class="bxpager-container"  id="bx-pager3-<?php echo $i;?>">
 <?php $x = 0 ; foreach($products->field_photo_gallery['und'] as $img) : ?>
  <a data-slide-index="<?php echo $x; ?>" href=""><img class="thumb" src="<?php echo render(file_create_url($img['uri'])); ?>" /></a>
     <?php $x++ ; endforeach; ?>
</div>


<script type="text/javascript">
$('.bxslider3-<?php echo $i;?>').bxSlider({
  pagerCustom: '#bx-pager3-<?php echo $i;?>',
  slideWidth: 640
});
</script>

</div>



<div class="field-content-gallery small-scrn-biggest" style="display:none;">

<ul class="bxslider4-<?php echo $i;?>">
     <?php foreach($products->field_photo_gallery['und'] as $img) : ?>

  <li><img src="<?php print render(file_create_url($img['uri'])); ?>" />
<div class="content_box"><h1><?php print($img['title']) ;?></h1><p><?php print($img['alt']) ;?></p></div>
</li>
     <?php endforeach; ?>
</ul>


<div class="bxpager-container"  id="bx-pager4-<?php echo $i;?>">
 <?php $x = 0 ; foreach($products->field_photo_gallery['und'] as $img) : ?>
  <a data-slide-index="<?php echo $x; ?>" href=""><img class="thumb" src="<?php echo render(file_create_url($img['uri'])); ?>" /></a>
     <?php $x++ ; endforeach; ?>
</div>


<script type="text/javascript">
$('.bxslider4-<?php echo $i;?>').bxSlider({
  pagerCustom: '#bx-pager4-<?php echo $i;?>',
  slideWidth: 700
});
</script>

</div>



<div class="field-content-gallery small-scrn" style="display:none;">

<ul class="bxslider1-<?php echo $i;?>">
     <?php foreach($products->field_photo_gallery['und'] as $img) : ?>

  <li><img src="<?php print render(file_create_url($img['uri'])); ?>" />
<div class="content_box"><h1><?php print($img['title']) ;?></h1><p><?php print($img['alt']) ;?></p></div>
</li>
     <?php endforeach; ?>
</ul>


<div class="bxpager-container"  id="bx-pager1-<?php echo $i;?>">
 <?php $x = 0 ; foreach($products->field_photo_gallery['und'] as $img) : ?>
  <a data-slide-index="<?php echo $x; ?>" href=""><img class="thumb" src="<?php echo render(file_create_url($img['uri'])); ?>" /></a>
     <?php $x++ ; endforeach; ?>
</div>


<script type="text/javascript">
$('.bxslider1-<?php echo $i;?>').bxSlider({
  pagerCustom: '#bx-pager1-<?php echo $i;?>',
  slideWidth: 220
});
</script>

</div>



<div class="field-content-gallery small-scrn-big" style="display:none;">

<ul class="bxslider2-<?php echo $i;?>">
     <?php foreach($products->field_photo_gallery['und'] as $img) : ?>

  <li><img src="<?php print render(file_create_url($img['uri'])); ?>" />
<div class="content_box"><h1><?php print($img['title']) ;?></h1><p><?php print($img['alt']) ;?></p></div>
</li>
     <?php endforeach; ?>
</ul>


<div class="bxpager-container"  id="bx-pager2-<?php echo $i;?>">
 <?php $x = 0 ; foreach($products->field_photo_gallery['und'] as $img) : ?>
  <a data-slide-index="<?php echo $x; ?>" href=""><img class="thumb" src="<?php echo render(file_create_url($img['uri'])); ?>" /></a>
     <?php $x++ ; endforeach; ?>
</div>


<script type="text/javascript">
$('.bxslider2-<?php echo $i;?>').bxSlider({
  pagerCustom: '#bx-pager2-<?php echo $i;?>',
  slideWidth: 300
});
</script>

</div>





<?php endif ;  ?>

</div> </div>

				  <div class="views-field views-field-view-node">        <span class="field-content"><a href="/vanderwal/node/15">Cross</a></span>  </div>  
				 
                              </div>

<?php $i++ ; endforeach; ?>
                                </div>
				  
				
				</div>  </div>
				
                         </div>





			      <div class="block block-views contextual-links-region" id="block-views-container-building-boxes-block">

						  <div class="content">
						    <div class="view view-container-building-boxes view-id-container_building_boxes view-display-id-block view-dom-id-26b10376882b9c56186bb83c1e4633ce">
		 
						      <div class="view-content">
							
<?php
$type = "container_building";
$nodes = node_load_multiple(array(), array('type' => $type));
$i = 1;
foreach($nodes as $products):?>

                                             <div class="views-row views-row-<?php echo $i;?> views-row-odd views-row-first">
						      
						  <div class="views-field views-field-title">        <span class="field-content"><a href="/vanderwal/node/15"><?php echo $products->title ;?></a></span>  </div>  
						  <div class="views-field views-field-field-upload-images">        <div class="field-content"><img width="307" height="307" alt=""  src="<?php echo render(file_create_url($products->field_upload_images['und'][0]['uri'])); ?>" typeof="foaf:Image"></div>  </div>  
						  <div class="views-field views-field-view-node">        <span class="field-content"><a href="/vanderwal/node/15">+</a></span>  </div>  </div>

<?php $i++ ; endforeach; ?>
						  
						  
						    </div>
						  
						</div>  </div>
						</div>



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
