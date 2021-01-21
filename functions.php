<?php
    // Theme Setup
    if (!function_exists('cbt_theme_setup')) {
        function cbt_theme_setup() {
            add_theme_support( 'woocommerce' );			//Woocommerce Support
            add_theme_support('automatic-feed-links');	//RSS FEED LINK
            add_theme_support( 'post-thumbnails' );		//Post Thumbnail
            add_theme_support( 'wc-product-gallery-zoom' );
            add_theme_support( 'wc-product-gallery-lightbox' );
            add_theme_support( 'wc-product-gallery-slider' );
            
            register_nav_menus(
                array(
                    'primary'   => __('Hauptmenü'),
                    'footer'    => __('Fußzeile-Menü')
                )
            );
        }
    }
    add_action('after_setup_theme', 'cbt_theme_setup');

    // Customizer
    require get_template_directory() . '/inc/customizer.php';
?>