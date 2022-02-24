<?php

$section_class = get_field('section_class');
$background = get_field('background');
$heading = get_field('heading');
$sub_heading = get_field('sub_heading');
$description = get_field('description');
$button = get_field('button');
$button_link = get_field('button_link');
$popup = get_field('pop_up');
$rand = rand(1, 1000);

?>

 <section class="align-items-center d-flex hero justify-content-center white-text <?= $section_class; ?>">
    <video class="titanic-video" autoplay="" loop="" style="background-image:url(&quot;https://uploads-ssl.webflow.com/603a93d4e815e8b316783351/6074740541a8c07a32b0fbb3_Titanic at Sea Background Video SD-poster-00001.jpg&quot;)" muted="" playsinline="" data-wf-ignore="true" data-object-fit="cover"><source src="https://uploads-ssl.webflow.com/603a93d4e815e8b316783351/6074740541a8c07a32b0fbb3_Titanic at Sea Background Video SD-transcode.mp4" data-wf-ignore="true"><source src="https://uploads-ssl.webflow.com/603a93d4e815e8b316783351/6074740541a8c07a32b0fbb3_Titanic at Sea Background Video SD-transcode.webm" data-wf-ignore="true"></video>
        <div class="container mt-5 text-center">
            <h1 class="text-uppercase"><?= $heading; ?></h1>
            <h2><?= $sub_heading; ?></h2>
            <?= $description; ?>
            <a href="#" class="cta d-inline-flex mt-4 orange-bg-white white-black-text shadow" data-bs-toggle="modal" data-bs-target="#<?= $popup; ?>_<?= $rand; ?>"><?= $button; ?></a>
        </div>

        <?php if(str_contains($section_class, 'bg-ship')): ?>
          <div class="hero-video-lower-gradient"></div>
          <div class="hero-lower-solid"></div>
        <?php endif; ?>
   </section>


<?php if($popup == 'bookCallModal'): ?>
   <!-- Modal -->
<div class="modal fade" id="bookCallModal_<?= $rand; ?>" tabindex="-1" aria-labelledby="bookCallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header border-0">
        <button type="button" class="btn-close rounded-circle btn-lg" data-bs-dismiss="modal" aria-label="Close"><span class="fa fa-close">&#10005;</span></button>
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
        <button type="button" class="btn-close rounded-circle btn-lg" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></button>
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
