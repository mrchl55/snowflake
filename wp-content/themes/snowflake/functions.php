<?php
// GET SCRIPTS

function snowflake_files() {
    wp_enqueue_script('aos', get_template_directory_uri() . '/js/aos.js', array(), '', true);
    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('boot3'), '1.0.0', true);
    wp_enqueue_script('owl-script', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), '', true);
    wp_enqueue_style('snowflake_main_styles', get_stylesheet_uri( ));
    wp_register_style('owl-style', get_template_directory_uri() . '/css/owl.carousel.min.css');
    wp_register_style('owl-default-style', get_template_directory_uri() . '/css/owl.theme.default.min.css');
    
    wp_enqueue_style( 'load-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '1.0.0', true);
    wp_enqueue_style('aos-style', get_template_directory_uri() . '/css/aos.css');
    
    wp_enqueue_style('owl-style');
    wp_enqueue_style('owl-default-style');
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Work+Sans:wght@100;300;400;700&display=swap', false );
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Encode+Sans&display=swap', false );
   
}

add_action('wp_enqueue_scripts', 'snowflake_files');


function my_scripts() {
    wp_enqueue_style('bootstrap4', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css');

    wp_enqueue_script( 'boot2','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array( 'jquery' ),'',true );
    wp_enqueue_script( 'boot3','https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js', array( 'jquery' ),'',true );
    wp_register_script( 'map','https://polyfill.io/v3/polyfill.min.js?features=default');
    wp_enqueue_script('map');
    wp_register_script( 'map2','https://maps.googleapis.com/maps/api/js?key=AIzaSyCredPXdU1go0GP8xj1d423bmWYuM7i-m8&map_ids=a50b1284c3a70fc2&callback=initMap' );
    wp_enqueue_script('map2', array('scripts'));

    // wp_enqueue_script('map', 'https://polyfill.io/v3/polyfill.min.js?features=default', array('jquery'), '', true);
    // wp_enqueue_script('map2', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCredPXdU1go0GP8xj1d423bmWYuM7i-m8&map_ids=a50b1284c3a70fc2&callback=initMap', array('jquery'), '', true);
    
}
add_action( 'wp_enqueue_scripts', 'my_scripts' );


// REGISTER MENUS 

if ( ! function_exists( 'mytheme_register_nav_menu' ) ) {
 
    function mytheme_register_nav_menu(){
        register_nav_menus( array(
            'primary_menu' => __( 'Primary Menu', 'text_domain' )
          
        ) );
    }
    add_action( 'after_setup_theme', 'mytheme_register_nav_menu', 0 );
}

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
  if (in_array('current-menu-item', $classes) ){
    $classes[] = 'active ';
  }
  return $classes;
}