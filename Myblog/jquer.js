function nepdoc_styles() {
    global $wp_styles;
     wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/fonts/font-awesome.min.css', false ,'0.1', 'all' );
    }
    add_action( 'wp_enqueue_scripts', 'nepdoc_styles' ); // This is important