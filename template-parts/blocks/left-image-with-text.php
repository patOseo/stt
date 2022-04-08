
<?php


$section_class = get_field('section_class');
$background_color = get_field('background_color');
$heading = get_field('heading');
$sub_heading = get_field('sub_heading');
$description = get_field('description');
$left_image = get_field('left_image');
$button = get_field('button');
$button_link = get_field('button_link');
$popup = get_field('pop_up');
$rand = rand(1, 1000);

?>

 <section class="text-block sec content white-text <?= $section_class; ?>" style="background: <?= $background_color; ?>;">
        <div class="container">
            <div class="row justify-content-center align-items-center mt-5">

              <?php if($left_image != ""): ?>
                <div class="col-lg-6 px-5">
                    <?php echo wp_get_attachment_image($left_image, 'full', '', array('class' => 'left-im w-100 h-auto mb-4')); ?>
                </div>
                  <?php endif; ?>

                  
                <div class="col-lg-6 text-center text-lg-start">
                    <h2 class="text-uppercase mb-4"><?= $heading; ?></h2>
                    <h3 class="text-uppercase mt-1"><?= $sub_heading; ?></h3>
                    <?php if($description != ""): ?>

                    <?= $description; ?>

                <?php endif; ?>
                   
                 <?php if($button != ""): ?>

                    <a href="#" class="cta d-inline-flex mt-4 orange-bg-white white-black-text shadow"
                        data-bs-toggle="modal" data-bs-target="#<?php echo $popup . '_' . $rand; ?>"><?= $button; ?></a>
                    
                      <?php endif; ?>

                </div>

                


            </div>
        </div>

    </section>


<?php if($popup == 'bookCallModal'): ?>
   <!-- Modal -->
<div class="modal fade" id="bookCallModal_<?= $rand; ?>" tabindex="-1" aria-labelledby="bookCallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header border-0">
        <button type="button" class="btn-close rounded-circle btn-lg" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></button>
      </div>
      <div class="modal-body px-5">
        <h5 class="modal-title" id="bookCallModalLabel"><strong><?php the_field('popup_1_title', 'option'); ?></strong></h5>
        <p class="text-dark"><small><?php the_field('popup_1_text', 'option'); ?></small></p><br>
        <div class="position-relative">
          <?php get_template_part('template-parts/form-book-a-call', null, array('btntext' => $button)); ?>
        </div>
      </div>
      
    </div>
  </div>
</div>

<?php elseif($popup == 'bookCallModal2'): ?>
   <!-- Modal -->
<div class="modal fade" id="bookCallModal2_<?= $rand; ?>" tabindex="-1" aria-labelledby="bookCallModal2Label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header border-0">
        <button type="button" class="btn-close rounded-circle btn-lg" data-bs-dismiss="modal" aria-label="Close"><span class="fa fa-close">&#10005;</span></button>
      </div>
      <div class="modal-body px-5">
        <h5 class="modal-title" id="bookCallModal2Label"><strong><?php the_field('popup_2_title', 'option'); ?></strong></h5>
        <p class="text-dark"><small><?php the_field('popup_2_text', 'option'); ?></small></p><br>
        <div class="position-relative">
          <?php get_template_part('template-parts/form-book-a-call-2', null, array('btntext' => $button)); ?>
        </div>
      </div>
      
    </div>
  </div>
</div>


<?php elseif($popup == 'certificationModal'): ?>
   <!-- Modal -->
<div class="modal fade" id="certificationModal" tabindex="-1" aria-labelledby="certificationModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header border-0">
        <button type="button" class="btn-close rounded-circle btn-lg" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></button>
      </div>
      <div class="modal-body px-4 py-5 p-lg-5">
        <h5 class="modal-title" id="certificationModalLabel"><?php the_field('popup_3_title', 'option'); ?></h5>
        <p class="text-dark"><small><?php the_field('popup_3_text', 'option'); ?></small></p><br>
        <?php get_template_part('template-parts/form-certification'); ?>
      </div>
      
    </div>
  </div>
</div>
<?php endif; ?>
