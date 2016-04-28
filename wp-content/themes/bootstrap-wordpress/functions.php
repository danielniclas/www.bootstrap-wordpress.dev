
<?php

//  LINKS TO CSS:
function theme_styles() {

    wp_enqueue_style ('bootstrap_css', get_template_directory_uri().'/css/bootstrap.min.css');
    wp_enqueue_style ('main_css', get_template_directory_uri().'/style.css');
}
add_action ('wp_enqueue_scripts', 'theme_styles');

// LINKS TO JS:
function theme_js () {

    global $wp_scripts;

    //  Register JS Scripts to prepare for the conditional statement
    wp_register_script( 'html5_shiv' , 'https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js', '', '', false );
    wp_register_script( 'respond_js' , 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js', '', '', false );

    //  Conditional statement loads:
    $wp_scripts->add_data('html5_shiv', 'conditional', 'lt IE 9' );
    $wp_scripts->add_data('respond_js', 'conditional', 'lt IE 9' );

    //  Standard (non-conditional) LINK to JS script - Direct loads:
    wp_enqueue_script('bootstrap_js', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'), '', true);  //  jQuery is a dependency
    wp_enqueue_script('theme_js', get_template_directory_uri().'/js/theme.js', array('jquery', 'bootstrap_js'), '', true);
    // 1.  HANDLE:  theme_js     2.  URL  3.  Dependency Array: bootstrap_js must be loaded for our theme.js to work  4.   5.

}
add_action('wp_enqueue_scripts', 'theme_js');

//Add and remove admin bar from top of site
//add_filter ('show_admin_bar', '__return_false');


//  Add Menu Support AND Featured Image Support
//  Add a new header menu that will appear in the back end of our site, as well as we can use to display on the front end
//  inside of our header template:
add_theme_support('menus');
add_theme_support('post-thumbnails');
function register_theme_menus() {

    //  MENU to appear:  Appearance >>  Menus >> Menu Settings
    register_nav_menus(
        array(
            'header-menu' => __('Header Menu XXX')
            )
        );
}
add_action('init', 'register_theme_menus');

//  ADD/CREATE Widgets
function create_widget( $name, $id, $description ) {

	register_sidebar(array(
		'name' => __( $name ),
		'id' => $id,
		'description' => __( $description ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));

}

create_widget( 'Front Page Left', 'front-left', 'Displays on the left of the homepage' );
create_widget( 'Front Page Center', 'front-center', 'Displays in the center of the homepage' );
create_widget( 'Front Page Right', 'front-right', 'Displays on the right of the homepage' );

create_widget( 'Page Sidebar', 'page', 'Displays on the side of pages with a sidebar' );
create_widget( 'Blog Sidebar', 'blog', 'Displays on the side of blog pages with a sidebar' );




?>


