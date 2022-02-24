<?php 

$heading = get_field('heading');

?>
<div class="slider sec">
	<h2 class="text-center text-light h1"> <?= $heading; ?> </h2><br>
<div class="carousel-slide">
  
  <!-- The slideshow -->
  <div class="carousel-inner">

//<!-- data-interval="3000" -->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-interval="3000">
  <div class="carousel-inner">

  	<?php
				if( have_rows('slider') ):
				    while( have_rows('slider') ) : the_row();

				        $logo = get_sub_field('logo'); 
				        $heading = get_sub_field('heading'); 
				        $description_one = get_sub_field('description_one');

				        ?>
    <div class="carousel-item active">
    
				            <div class="carousel-box">
							    <div class="bg-img">
							      	<?php echo wp_get_attachment_image(184, 'full', '', array('alt' => 'Previous Voyages')); ?>
							    </div>
							    <div class="slider-outer">
							      	<div class="slider-inner">
									    <div class="text">
									      	<div class="logo">
												<?php echo wp_get_attachment_image($logo, 'full', '', array('class' => 'w-100 mb-4', 'alt' => 'logo')); ?>
												<h3 class="text-head"><?= $heading; ?></h3>
											</div>
											
											<?=  $description_one; ?>

										</div>
									</div>
								</div>
							</div>
    </div>
   
  
     <?php endwhile;
				endif; ?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>



  </div>
</div>
</div>

<!-- <script type="text/javascript">
	$('.carousel').carousel({
	  interval: 3000
	});
</script> -->
