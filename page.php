<?php get_header(); ?>




  <?php
         if (have_posts()):
             while ( have_posts() ) : the_post();
   
                 the_content();

             endwhile;
         endif;
     ?>




<?php if( is_front_page()) : 
            get_footer(); ?>

<?php else: ?>

<?php get_footer('nospace'); ?>
<?php endif; ?>