
<?php


function theme_styles() {

    wp_enqueue_style ('bootstrap_css', get_template_directory_uri().'/css/bootstrap.min.css');

}

add_action ('wp_enqueuq_scripts', 'theme_styles');









?>


