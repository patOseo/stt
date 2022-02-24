<?php 

function save_script(){

		// wp_enqueue_style('style-css', get_stylesheet_uri());
		// wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css2?family=Righteous&display=swap');
		// wp_enqueue_style('awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
		// wp_enqueue_style('bootstrap', get_template_directory_uri(). '/css/bootstrap.min.css');
        // wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');
        
		// wp_enqueue_style('Owl_css', get_template_directory_uri().'/OwlCarousel/assets/owl.carousel.min.css', array( 'jquery' ), '1.0.0', true);
        wp_enqueue_style('css', get_template_directory_uri().'/css/css.css');
	
		// wp_enqueue_script( 'jquery');
		wp_enqueue_script('jquery_js', get_template_directory_uri(). '/js/jquery.min.js', array(), '', true);
        // wp_enqueue_script('boot_js', get_template_directory_uri(). '/js/bootstrap.min.js');
        // wp_enqueue_script('popper_js', get_template_directory_uri(). '/js/popper.min.js');
        // wp_enqueue_script('bootstrap.js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js');

        
		// wp_enqueue_script('owl_js', get_template_directory_uri().'/OwlCarousel/owl.carousel.min.js');
        wp_enqueue_script('main_js', get_template_directory_uri().'/js/main.js', array(), '', true);
	}
add_action('wp_enqueue_scripts','save_script');



function custom_logo(){
			$defaults = array(
				'height' => 46,
				'width' => 300
				);
			add_theme_support('custom-logo',$defaults);
	}
add_action('after_setup_theme','custom_logo');


function menus(){
			register_nav_menus(array(
				'footer-menu' => __('Footer Menu')
				));
					}
add_action('init','menus');



if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Global Settings',
		'menu_title'	=> 'Global Settings',
		'menu_slug' 	=> 'global-settings',
	
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'global-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'global-settings',
	));

    acf_add_options_sub_page(array(
        'page_title'    => 'Pop Up Settings',
        'menu_title'    => 'Pop Up',
        'parent_slug'   => 'global-settings',
    ));

	
}



//blocks

function my_acf_init_block_types() {

    if( function_exists('acf_register_block_type') ) {

     	acf_register_block_type(array(
                'name'              => 'Scrolling Background',
                'title'             => __('Scrolling Background'),
                'description'       => __('Scrolling Background'),
                'render_template'   =>   'wp-content/themes/savetitanic/template-parts/blocks/scrolling-background.php',
                'category'          => 'layout',
                'icon'              => 'admin-comments',
                'keywords'          => array( 'section one','Scrolling Background' ),
            ));

     	acf_register_block_type(array(
                'name'              => 'Title Content',
                'title'             => __('Title Content'),
                'description'       => __('Title Content'),
                'render_template'   =>   'wp-content/themes/savetitanic/template-parts/blocks/title-content.php',
                'category'          => 'layout',
                'icon'              => 'admin-comments',
                'keywords'          => array( 'section two','title content' ),
            ));


     	acf_register_block_type(array(
                'name'              => 'Text Inside Image',
                'title'             => __('Text Inside Image'),
                'description'       => __('Text Inside Image'),
                'render_template'   =>   'wp-content/themes/savetitanic/template-parts/blocks/text-inside-image.php',
                'category'          => 'layout',
                'icon'              => 'admin-comments',
                'keywords'          => array( 'section four','Text Inside Image' ),
            ));

     	acf_register_block_type(array(
                'name'              => 'Text With Background',
                'title'             => __('Text With Background'),
                'description'       => __('Text With Background'),
                'render_template'   =>   'wp-content/themes/savetitanic/template-parts/blocks/text-with-background.php',
                'category'          => 'layout',
                'icon'              => 'admin-comments',
                'keywords'          => array( 'section five','Text With Background' ),
            ));

     	
     	acf_register_block_type(array(
                'name'              => 'Two Images',
                'title'             => __('Two Images'),
                'description'       => __('Two Images'),
                'render_template'   =>   'wp-content/themes/savetitanic/template-parts/blocks/two-images.php',
                'category'          => 'layout',
                'icon'              => 'admin-comments',
                'keywords'          => array( 'Two Images'),
            ));


     	acf_register_block_type(array(
                'name'              => 'Description Block',
                'title'             => __('Description Block'),
                'description'       => __('Description Block'),
                'render_template'   =>   'wp-content/themes/savetitanic/template-parts/blocks/description-block.php',
                'category'          => 'layout',
                'icon'              => 'admin-comments',
                'keywords'          => array( 'Description Block'),
            ));

        acf_register_block_type(array(
                'name'              => 'Slider Block',
                'title'             => __('Slider Block'),
                'description'       => __('Slider Block'),
                'render_template'   =>   'wp-content/themes/savetitanic/template-parts/blocks/slider.php',
                'category'          => 'layout',
                'icon'              => 'admin-comments',
                'keywords'          => array( 'Slider Block'),
            ));

        acf_register_block_type(array(
                'name'              => 'Left Image With Text',
                'title'             => __('Left Image With Text'),
                'description'       => __('Left Image With Text'),
                'render_template'   =>   'wp-content/themes/savetitanic/template-parts/blocks/left-image-with-text.php',
                'category'          => 'layout',
                'icon'              => 'admin-comments',
                'keywords'          => array( 'Left Image With Text'),
            ));

        acf_register_block_type(array(
                'name'              => 'Text With Button',
                'title'             => __('Text With Button'),
                'description'       => __('Text With Button'),
                'render_template'   =>   'wp-content/themes/savetitanic/template-parts/blocks/text-with-button.php',
                'category'          => 'layout',
                'icon'              => 'admin-comments',
                'keywords'          => array( 'Text With Button'),
            ));








    }
}
add_action('acf/init', 'my_acf_init_block_types');


if (!function_exists('str_contains')) {
    function str_contains($haystack, $needle) {
        return $needle !== '' && mb_strpos($haystack, $needle) !== false;
    }
}
