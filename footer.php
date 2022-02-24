    <footer class="footer stt-footer">
        <div class="container">
            <div class="row justify-content-center align-items-center">

           <?php if( is_front_page()) : ?>

                <div class="col-md-6">

                   <?php if( have_rows('first_block', 'option') ): ?>
                        <?php while( have_rows('first_block', 'option') ): the_row(); 

                            // Get sub field values.
                            $heading = get_sub_field('heading');
                            $sub_heading = get_sub_field('sub_heading');
                            $description = get_sub_field('description');
                            $button_one = get_sub_field('button_one');
                            $button_one_link = get_sub_field('button_one_link');
                            $button_two = get_sub_field('button_two');
                            $button_link = get_sub_field('button_link');

                            ?>
                            <h2><?= $heading; ?></h2>
                                <h3><?= $sub_heading; ?></h3>
                                <?= $description; ?>
                                <div class="cta-row mt-4">
                                    <a href="<?= $button_one_link; ?>" class="cta d-inline-flex me-4 white"><?= $button_one; ?></a>
                                    <a href="<?= $button_link; ?>" class="black cta white-black-text"><?= $button_two; ?></a>
                                </div>
                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>
                <div class="col-md-1 d-none d-md-block"></div>
                <div class="col-md-5 mt-4 mt-md-0">
                    <div class="box-wht px-3 py-5 p-lg-5">
                       
                   <?php if( have_rows('second_block', 'option') ): ?>
                        <?php while( have_rows('second_block', 'option') ): the_row(); 

                            // Get sub field values.
                            $heading = get_sub_field('heading');
                            $description = get_sub_field('description');
                            $button = get_sub_field('button');
                            $popup = get_sub_field('pop_up');

                            ?>
                            <h3><?= $heading; ?></h3>
                                <?= $description; ?>
                        <a href="#" class="cta d-inline-flex mt-4 px-2 px-md-5 orange-bg-white white-black-text black-hover" data-bs-toggle="modal" data-bs-target="#<?= $popup; ?>"><?= $button; ?></a>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    </div>
                </div>
            </div>

            <?php endif; ?>

                <div class="row">
                <div class="col-12 mt-5 link-footer">
                    <?php $nav = wp_get_nav_menu_items('footer-menu'); ?>
                        <ul class="d-flex flex-column flex-md-row justify-content-center list-unstyled mb-0 mt-3 text-center">

                        <li><p class="mt-1 pb-0">Copyright &copy; 2000-<?php echo date('Y'); ?></p></li>
                        <?php foreach ($nav as $fn) : ?>
                        <li><a href="<?php echo $fn->url; ?>"><?php echo $fn->title; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                

                </div>
            </div>
        </div>
    </footer>

</div>

   <!-- Modal -->
<div class="modal fade" id="certificationModal" tabindex="-1" aria-labelledby="certificationModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header border-0">
        <button type="button" class="btn-close rounded-circle btn-lg" data-bs-dismiss="modal" aria-label="Close"><span class="fa fa-close">&#10005;</span></button>
      </div>
      <div class="modal-body px-4 py-5 p-lg-5">
        <h5 class="modal-title" id="certificationModalLabel"><?php the_field('popup_3_title', 'option'); ?></h5>
        <p class="text-dark"><small><?php the_field('popup_3_text', 'option'); ?></small></p><br>
        <?php get_template_part('template-parts/form-certification'); ?>
      </div>
      
    </div>
  </div>
</div>

<?php wp_footer(); ?>
<noscript>
  <img src="https://ws.zoominfo.com/pixel/61afb3db513e3b001ae445da" width="1" height="1" style="display: none;" />
</noscript>
</body>