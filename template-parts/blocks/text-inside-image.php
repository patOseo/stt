<?php

$section_class = get_field('section_class');
$heading = get_field('heading');
$description = get_field('description');
$image = get_field('image');



?>  


    <section class="sec content white-text stt-pics pb-0 text-center <?= $section_class; ?>" style="background:#011725;">
        <div class="course-set">
        <h2><?= $heading; ?></h2></div>
        <div class="img-place">
            <?php echo wp_get_attachment_image($image, 'full', '', array('class' => 'w-100 h-auto', 'alt' => $heading)); ?>
            <div class="center-copy">
                <h2 class="text-uppercase"><?= $description; ?></h2>
            </div>
        </div>
    </section>