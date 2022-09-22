<?php



function load_costa_styles(){
    wp_enqueue_style('costa-style',get_template_directory_uri().'/assets/css/style1.css',array('owl-theme'),'1.0','all');
    wp_enqueue_style('owl-theme',get_template_directory_uri().'/assets/css/owl.theme.default.min.css',array('owl'),'1.0','all');
    wp_enqueue_style('owl',get_template_directory_uri().'/assets/css/owl.carousel.min.css',array(),'1.0','all');
    wp_enqueue_style('google-fonts','https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200',array(),'1.0','all');
    
    wp_enqueue_style('font-awesome','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css',array(),'1.0','all');

  
}

add_action('wp_enqueue_scripts','load_costa_styles');
function include_jquery(){
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery',get_template_directory_uri().'/assets/js/jquery.min.js','',1,true);
    add_action('wp_enqueue_scripts','jquery');

}
add_action('wp_enqueue_scripts','include_jquery');



function load_costa_js(){
    wp_enqueue_script('costa-main', get_template_directory_uri().'/assets/js/main.js', array('costa-owl'), '1.0', true);
    wp_enqueue_script('costa-owl',get_template_directory_uri().'/assets/js/owl.carousel.min.js',array(),'1.0',true); 
}
add_action('wp_enqueue_scripts','load_costa_js');
?>