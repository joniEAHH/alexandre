<?php
/**
 * Custom Functions file for current theme.
 *
 */

add_theme_support( 'post-thumbnails' );

// IMPORT PARENT STYLE
function child_theme_enqueue_styles() {
    $parent_style = 'divi-style'; // This is 'divi-style' for the Divi theme.
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'child_theme_enqueue_styles' );


function wpdocs_theme_name_scripts() {
 
      wp_enqueue_script( 'script-name', get_stylesheet_directory_uri() . '/textfullfil.js', array(), '1.0.0', true );
     wp_enqueue_script('owl-scriptts' ,  get_stylesheet_directory_uri() . '/owlscript.js' , array(), '1.0.0', true);
       wp_enqueue_style( 'owl-css' , 'https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css' , array(), '1.0.0', true );
      wp_enqueue_style( 'boostrappp-css' , 'https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css' , array(), '1.0.0', true );


}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );


function timeslot_func( $atts ) {


$html = '<div class="timeslot_calender">';


    $html .= '<div class="sectionhead"><div class="sloting"><div class="upperheader"><div class="slothead">Mercredi<br>31 juillet</div><div class="slothead">Jeudi<br>01 août</div><div class="slothead">Vendredi<br>02 août</div></div></div><div class="timeslot_content"><div class="slots">
 <div class="">11:30 - 13:30</div> <div class="active">13:30 - 15:30</div> <div class="">15:30 - 17:30</div> <div class="">17:30 - 19:30</div> <div class="">19:30 - 20:30</div></div><div class="slots">
 <div class="">11:30 - 13:30</div> <div class="">13:30 - 15:30</div> <div class="">15:30 - 17:30</div> <div class="">17:30 - 19:30</div> <div class="">19:30 - 20:30</div></div><div class="slots">
 <div class="">11:30 - 13:30</div> <div class="">13:30 - 15:30</div> <div class="">15:30 - 17:30</div> <div class="">17:30 - 19:30</div> <div class="">19:30 - 20:30</div></div></div></div>';

    $html .= '<div class="sectionhead"><div class="sloting"><div class="upperheader"><div class="slothead">Mercredi<br>31 juillet</div><div class="slothead">Jeudi<br>01 août</div><div class="slothead">Vendredi<br>02 août</div></div></div><div class="timeslot_content"><div class="slots">
 <div class="">11:30 - 13:30</div> <div class="active">13:30 - 15:30</div> <div class="">15:30 - 17:30</div> <div class="">17:30 - 19:30</div> <div class="">19:30 - 20:30</div></div><div class="slots">
 <div class="">11:30 - 13:30</div> <div class="">13:30 - 15:30</div> <div class="">15:30 - 17:30</div> <div class="">17:30 - 19:30</div> <div class="">19:30 - 20:30</div></div><div class="slots">
 <div class="">11:30 - 13:30</div> <div class="">13:30 - 15:30</div> <div class="">15:30 - 17:30</div> <div class="">17:30 - 19:30</div> <div class="">19:30 - 20:30</div></div></div></div>';

   $html .= '<div class="sectionhead"><div class="sloting"><div class="upperheader"><div class="slothead">Mercredi<br>31 juillet</div><div class="slothead">Jeudi<br>01 août</div><div class="slothead">Vendredi<br>02 août</div></div></div><div class="timeslot_content"><div class="slots">
 <div class="">11:30 - 13:30</div> <div class="active">13:30 - 15:30</div> <div class="">15:30 - 17:30</div> <div class="">17:30 - 19:30</div> <div class="">19:30 - 20:30</div></div><div class="slots">
 <div class="">11:30 - 13:30</div> <div class="">13:30 - 15:30</div> <div class="">15:30 - 17:30</div> <div class="">17:30 - 19:30</div> <div class="">19:30 - 20:30</div></div><div class="slots">
 <div class="">11:30 - 13:30</div> <div class="">13:30 - 15:30</div> <div class="">15:30 - 17:30</div> <div class="">17:30 - 19:30</div> <div class="">19:30 - 20:30</div></div></div>';




 $html .= '</div> </div>';



    return $html ;
}
add_shortcode( 'timeslot_func', 'timeslot_func' );



add_action( 'after_setup_theme', 'register_my_menu' );
function register_my_menu() {
  register_nav_menu( 'carrinho', __( 'Cart Menu' ) );
}



?>
