
<?php


$section_class = get_field('section_class');
$heading = get_field('heading');
$sub_heading = get_field('sub_heading');



?> 


    <section class="sec content menu-course-sec white-text <?= $section_class; ?>" style="background: #001724;">
        <div class="container text-center">
        	<div class="course-set">
            <h2 class="text-uppercase mb-4"><?= $heading; ?></h2>
            <h3 class="text-uppercase mt-1"><?= $sub_heading; ?></h3></div>
            <div class="d-flex flex-column flex-md-row justify-content-center menu-course">
                <div class="col-course left">

                	<?php if( have_rows('block_left') ): ?>
					    <?php while( have_rows('block_left') ): the_row(); 

					        // Get sub field values.
					        $background_image = get_sub_field('background_image');
					        $menu_image = get_sub_field('menu_image');
					        $description = get_sub_field('description');

					        ?>
					   <div class="bg-course"><?php echo wp_get_attachment_image($background_image, 'full', '', array('class' => 'w-100 h-100', 'alt' => 'Menu')) ?></div>
	                    <div class="course-text">
	                        <div class="menu-logo"><?php echo wp_get_attachment_image($menu_image, 'full', '', array('class' => 'w-100 h-100', 'alt' => 'Menu')) ?></div>
	                        <?= $description; ?>
	                    </div>
					       
					    <?php endwhile; ?>
					<?php endif; ?>



                    
                </div>
                <div class="col-course right">

                	<?php if( have_rows('block_right') ): ?>
					    <?php while( have_rows('block_right') ): the_row(); 

					        // Get sub field values.
					        $background_image = get_sub_field('background_image');
					        $title = get_sub_field('title');
					        $divider_image = get_sub_field('divider_image');
					        $second_title = get_sub_field('second_title');
					        $second_content = get_sub_field('second_content');
					        $divider_image_two = get_sub_field('divider_image_two');
					        $third_title = get_sub_field('third_title');
					        $third_content = get_sub_field('third_content');
					        $divider_image_three = get_sub_field('divider_image_three');
					        $fourth_title = get_sub_field('fourth_title');
					        $fourth_content = get_sub_field('fourth_content');

					        ?>
					<div class="bg-course"><?php echo wp_get_attachment_image($background_image, 'full', '', array('class' => 'w-100 h-100', 'alt' => 'Menu')) ?></div>
                    <div class="course-text">
                        <p><?= $title; ?></p>
                        <div class="divider"><?php echo wp_get_attachment_image($divider_image, 'full', '', array('class' => 'w-100 h-100', 'alt' => 'Divider')) ?></div>
                        <h2><?= $second_title; ?></h2>
                        <p><?= $second_content; ?></p>
                        <div class="divider"><?php echo wp_get_attachment_image($divider_image_two, 'full', '', array('class' => 'w-100 h-100', 'alt' => 'Divider')) ?></div>
                        <h2><?= $third_title; ?></h2>
                        <p><?= $third_content; ?></p>
                        <div class="divider"><?php echo wp_get_attachment_image($divider_image_three, 'full', '', array('class' => 'w-100 h-100', 'alt' => 'Divider')) ?></div>
                        <h2><?= $fourth_title; ?></h2>
                        <p><?= $fourth_content; ?></p>
                    </div>
					       
					    <?php endwhile; ?>
					<?php endif; ?>


                    
                </div>
            </div>
        </div>
    </section>