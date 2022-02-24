<?php


$section_class = get_field('section_class');
$background_color = get_field('background_color');
$heading = get_field('heading');
$description = get_field('description');


?>

<section class="text-block sec content white-text <?= $section_class; ?>" style="background: <?= $background_color; ?>;">
        <div class="container text-center">
            <div class="row justify-content-center mt-5">
                <div class="col-xl-10">
                    <h2 class="text-uppercase mb-4"><?= $heading; ?></h2>
                    <div class="text-spacing text-sm"> 
                         <?= $description; ?>
                    </div>
                </div>
            </div>
        </div>
 </section>