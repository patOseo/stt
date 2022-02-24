<?php


$section_class = get_field('section_class');
$heading = get_field('heading');
$image = get_field('image');
$sub_heading = get_field('sub_heading');
$description = get_field('description');
$button = get_field('button');
$button_link = get_field('button_link');


?> 

 <section class="text-block sec content bg-ice white-text <?= $section_class; ?>" style="background-image: url(<?= $image; ?>);">
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-xl-10">
                    <h2 class="text-uppercase mb-4"><?= $heading; ?></h2>
                    <h3 class="text-uppercase mt-1"><?= $sub_heading; ?></h3>
                    <?= $description; ?>
                    <div class="button-wrapper"><a href="<?= $button_link; ?>" class="cta d-inline-flex mt-4 orange-bg-white white-black-text shadow"><?= $button; ?></a></div>
                </div>
            </div>
        </div>
    </section>