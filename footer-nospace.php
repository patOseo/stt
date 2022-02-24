    <footer class="footer stt-footer nospace">
        <div class="container">
            <div class="row">
                <div class="col-12 link-footer">
                    <?php $nav = wp_get_nav_menu_items('footer-menu'); ?>
                        <ul class="d-flex flex-column flex-md-row justify-content-center list-unstyled mb-0 text-center">

                        <li><?php the_field('copyright', 'option'); ?></li>
                        <?php foreach ($nav as $fn) : ?>
                        <li><a href="<?php echo $fn->url; ?>"><?php echo $fn->title; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                

                </div>
            </div>
        </div>
    </footer>
<?php wp_footer(); ?>
</body>