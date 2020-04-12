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

remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0);
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );


add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 25 );


add_action( 'after_setup_theme', 'register_my_menu' );
function register_my_menu() {
  register_nav_menu( 'carrinho', __( 'Cart Menu' ) );
}


// To change add to cart text on single product page
add_filter( 'woocommerce_product_single_add_to_cart_text', 'woocommerce_custom_single_add_to_cart_text' ); 
function woocommerce_custom_single_add_to_cart_text() {
    return __( 'Adicionar ao carrinho', 'woocommerce' ); 
}

add_filter( 'woocommerce_sale_flash', 'wc_custom_replace_sale_text' );
function wc_custom_replace_sale_text( $html ) {
return str_replace( __( 'Sale!', 'woocommerce' ), __( 'Promoção', 'woocommerce' ), $html );
}

function woocommerce_template_product_description() {
  wc_get_template( 'single-product/tabs/description.php' );
}
add_action( 'woocommerce_after_single_product_summary', 'woocommerce_template_product_description', 10 );


  
add_filter( 'woocommerce_get_price_html', 'bbloomer_price_free_zero_empty', 9999, 2 );
   
function bbloomer_price_free_zero_empty( $price, $product ){
    if ( '' === $product->get_price() || 0 == $product->get_price() ) {
        $price = '<span class="woocommerce-Price-amount amount">Grátis</span>';
    }  
    return $price;
}



// Remove the product description Title
add_filter( 'woocommerce_product_description_heading', '__return_null' );



// add_filter( 'woocommerce_email_styles', 'bbloomer_add_css_to_emails', 9999, 2 );
 
// function bbloomer_add_css_to_emails( $css, $email ) { 
//   var_dump($email->id);
// if ( $email->id == 'new_order' ) {
//    $css .= '
//       #header_wrapper { display: none !important; }
//    ';
// }
// return $css;
// }
