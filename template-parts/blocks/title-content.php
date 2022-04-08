
<?php


$section_class = get_field('section_class');
$text_alignment = get_field('text_alignment');
$background_color = get_field('background_color');
$heading = get_field('heading');
$sub_heading = get_field('sub_heading');
$description = get_field('description');
$image = get_field('image');
$right_image = get_field('right_image');
$full_width_image = get_field('full_width_image');
$button = get_field('button');
$button_link = get_field('button_link');


?>

 <section class="text-block sec content white-text <?= $section_class; ?> position-relative" style="background: <?= $background_color; ?>;">
        <div class="container ">
            <div class="row justify-content-center mt-5">
                <div class="col-lg-7 mb-5 pb-5 text-center text-lg-start">
                    <h2 class="text-uppercase mb-4 <?= $text_alignment; ?>"><?= $heading; ?></h2>
                    <h3 class="text-uppercase mt-1 <?= $text_alignment; ?>"><?= $sub_heading; ?></h3>
                    <?php if($description != ""): ?>

                    <?= $description; ?>

                <?php endif; ?>
                   
                <?php if($image != ""): ?>

                    <div class="img mt-5">
                        <?php echo wp_get_attachment_image($image, full, '', array('class' => 'img-fluid')); ?>
                    </div>
                <?php endif; ?>

                 <?php if($button != ""): ?>

                    <a href="<?= $button_link; ?>" class="<?= $text_alignment; ?> cta d-inline-flex mt-4 orange-bg-white white-black-text shadow"
                        data-bs-toggle="modal" data-bs-target="<?= $popup_id; ?>"><?= $button; ?></a>
                    
                      <?php endif; ?>

                </div>

                <?php if($right_image != ""): ?>
                <div class="col-lg-5 px-5 px-lg-0 text-center">
                  <?php if(str_contains($section_class, 'compass')) { ?>
                    <?php echo wp_get_attachment_image($right_image, 'full', '', array('class' => 'right-img px-5 pull-up')); ?>
                  <?php } else { ?>
                    <?php echo wp_get_attachment_image($right_image, 'full', '', array('class' => 'right-img h-auto')); ?>
                  <?php } ?>
                </div>
                  <?php endif; ?>


            </div>
        </div>

          <?php if($full_width_image != ""): ?>
                <div class="full_image">
                    <?php echo wp_get_attachment_image($full_width_image, 'full', '', array('class' => 'full_width_image w-100')); ?>
                </div>
                  <?php endif; ?>


          <?php if(str_contains($section_class, 'moonsun')): ?>
            <div class="orangegradient"></div>
          <?php endif; ?>
    </section>





   <!-- Modal box one -->
<!-- <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ready to talk to an actual Save the Titanic facilitator to see if this is a good fit for your organization?</h5>

        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p> Provide your contact details and we will be in touch soon. </p><br>
        <?php echo do_shortcode('[contact-form-7 id="220" title="test drive"]'); ?>
        
      </div>
      
    </div>
  </div>
</div> -->



   <!-- Modal box two -->
<!-- <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Book a no-obligation demo of the Save the Titanic Program</h5>

        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>With over 800 successful digital deliveries, this award-winning team building and leadership program guarantees to deliver ROI. Provide your email to get started and book your free demo. </p><br>
        <?php echo do_shortcode('[contact-form-7 id="220" title="test drive"]'); ?>
        
      </div>
      
    </div>
  </div>
</div> -->