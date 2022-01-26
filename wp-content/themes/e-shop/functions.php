<?php
/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
    require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
}

add_action( 'after_setup_theme', 'register_navwalker' );
require_once get_template_directory() . '/inc/customizer.php';
function e_shop_scripts()
    {
        wp_enqueue_script
        (
            'bootstrap',
            get_template_directory_uri() . '/assets/js/bootstrap.min.js',
            array('jquery'),
            '4.2',
            true
        );
        wp_enqueue_style
        (
            'bootstrap-css',
            get_template_directory_uri(). '/assets/css/bootstrap.min.css',
            array(),
            '4.2',
            'all'
        );
        wp_enqueue_style
        (
            'e-shop-style',
            get_template_directory_uri(). '/assets/css/template.css',
            array(),
            //filemtime is css function to force the site to load your new css file after every change // change when the site goes live
            filemtime(get_template_directory(). '/assets/css/template.css'),
            'all'
        );
        wp_enqueue_style('google-fonts',
        'https://fonts.googleapis.com/css2?family=Pacifico&family=Permanent+Marker&display=swap');

        wp_enqueue_style('flexslider-css',
        get_template_directory_uri() . '/assets/flexslider/flexslider.css',
        array(),
        '',
        'all'
        );

        wp_enqueue_script('flexslider-js',
        get_template_directory_uri(). '/assets/flexslider/jquery.flexslider-min.js',
        array('jquery'),
        '',
        'true'
        );
        wp_enqueue_script('flexslider-jquery',
            get_template_directory_uri(). '/assets/flexslider/flexslider.js',
            array('jquery'),
            '',
            'true'
        );
    }
    add_action('wp_enqueue_scripts', 'e_shop_scripts');

function e_shop_theme_config()
    {
        register_nav_menus(
            array
            (
                'nav_menu' => __('Navigation Menu','e-shop'),
                'side_bar' => __('Side bar Menu',' e-shop'),
                'footer' => __('Footer Menu','e-shop')
            )
        );

        $textdomain = 'e-shop';
        load_theme_textdomain($textdomain, get_stylesheet_directory() . '/language/');
        load_theme_textdomain($textdomain, get_template_directory() . '/language/');
        // adding support for woocommerce


        add_theme_support('woocommerce',
        array
        (   // thumbnail image size
            'thumbnail_image_width' => 255,
            'single_image_width' => 255,
            'product_grid' => array
            ( // defining how many rows my store will have
                'default_rows' => 10,
                'min_rows' => 5,
                'max_rows' => 10,
                // defining how many columns my store will have
                'default_columns' => 1,
                'min_columns' => 1,
                'max_columns' => 1,

            )
        ));
        // the user can zoom in on the the product photos and the products wil have now sliders.
        add_theme_support('wc-product-gallery-zoom');
        add_theme_support('wc-product-gallery-lightbox');
        add_theme_support('wc-product-gallery-slider');
        // fixed height and width for the logo
        add_theme_support('custom-logo', array
            (
                    'height' => 85,
                    'width' => 160,
                    'flex_height' => true,
                    'flex_width' => true,
        ));
        add_theme_support('post-thumbnails');
        // adding a fixed image sizes for the blog images on the home page
        add_image_size('e-shop-blog',960,640,array
        (
            'center',
            'center'
        ));
        // adding new image size in settings->media page on wordpress
        add_image_size('e-shop-slider',1920,800,array
        (
                'center',
                'center'
        ));
        //display the title in the browser tab
        add_theme_support('title-tag');

        // max content width
        if (! isset($content_width)){
            $content_width = 600;
        }
    }
add_action('after_setup_theme','e_shop_theme_config',0);
// if woocommerce plugin is active
if(class_exists('WooCommerce'))
    {
        //  load the file.
        require get_template_directory() . '/inc/wc-modi.php';
    }

/**
 * Show cart contents / total Ajax
 */
add_filter( 'woocommerce_add_to_cart_fragments', 'e_shop_woocommerce_header_add_to_cart_fragment' );

function e_shop_woocommerce_header_add_to_cart_fragment( $fragments ) {
    global $woocommerce;
    ob_start();
    ?>
    <span class="items"><?php echo WC()->cart->get_cart_contents_count();?></span>
    <?php
    $fragments['span.items'] = ob_get_clean();
    return $fragments;
}
        // widgets
add_action('widgets_init', 'e_shop_sidebars');
function e_shop_sidebars()
{
    register_sidebar(
            array
    (
            'name' => __('My main sidebar','e-shop'),
            'id' => 'e-shop-sidebar-1',
            'description' => __('Drop and drag your widget','e-shop'),
            'before_widget'=> '<div id="%1$s" class="Widget %2$s  widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',
    ));
    register_sidebar(
        array
        (
            'name' =>  __('Shop page sidebar','e-shop'),
            'id' => 'e-shop-sidebar-shop',
            'description' => __('drop your woocommerce widgets','e-shop'),
            'before_widget'=> '<div id="%1$s" class="Widget %2$s  widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',
        ));
    register_sidebar(
        array
        (
            'name' => __('Footer widget left ','e-shop'),
            'id' => 'e-shop-footer-widget-left',
            'description' => __('footer widgets','e-shop'),
            'before_widget'=> '<div id="%1$s" class="Widget %2$s  widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',
        ));
    register_sidebar(
        array
        (
            'name' => __('Footer widget center','e-shop'),
            'id' => 'e-shop-footer-widget-center',
            'description' => __('footer widgets','e-shop'),
            'before_widget'=> '<div id="%1$s" class="Widget %2$s  widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',
        ));
    register_sidebar(
        array
        (
            'name' => __('Footer widget right','e-shop'),
            'id' => 'e-shop-footer-widget-right',
            'description' => __('footer widgets','e-shop'),
            'before_widget'=> '<div id="%1$s" class="Widget %2$s  widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',
        ));
}