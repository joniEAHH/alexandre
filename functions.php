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


add_action( 'woocommerce_thankyou', 'bbloomer_redirectcustom');
  
function bbloomer_redirectcustom( $order_id ){
    $order = wc_get_order( $order_id );
    $url = 'https://alexandrecoxo.com/agradecimento/';
    if ( ! $order->has_status( 'failed' ) ) {
        wp_safe_redirect( $url );
        exit;
    }
}

add_action( 'woocommerce_email_before_order_table', 'bbloomer_add_content_specific_email', 20, 4 );
  
function bbloomer_add_content_specific_email( $order, $sent_to_admin, $plain_text, $email ) {
   if ( $email->id == 'customer_processing_order' && $order->total !== "0.00" ) {
      //var_dump($order->total);
      echo '<div id="processing-order">

      <p>A sua encomenda foi expedida! | Your order has been shipped!</p>
      <p>O número de rastreamento da sua encomenda é:<br>
      Your order tracking number is:<br>';
      do_action( 'woocommerce_email_customer_details', $order, $sent_to_admin, $plain_text, $email );
      echo '</p>
      <p>Pode acompanhar a encomenda através do site do nosso parceiro (aqui), colocando o seu número de rastreamento no espaço próprio.<br>
      You can track the order through our partner’s website (here) by placing your tracking number in the space provided.<br>
      encomenda: | Following is the description of your order:</p>
      <p>Se tiver alguma dúvida, sinta-se livre de entrar em contato comigo.<br>
      If you have any questions, feel free to contact me.</p>
     </div>';
   }
}

function filter_woocommerce_email_heading( $email_heading, $email ) {
    // make filter magic happen here...
    if ( $email->total == "0.00" ) {
        $email_heading = 'Descarregue / Download';
    }
    return $email_heading;
};
    
// add the filter
add_filter( "woocommerce_email_heading_customer_processing_order", 'filter_woocommerce_email_heading', 10, 2 );




add_action( 'woocommerce_email_order_details', 'ts_email_order_details', 10, 4 );
function ts_email_order_details( $order, $sent_to_admin, $plain_text, $email ) {
    if ( $order->total == "0.00" ) {
    echo '<p>Na tabela seguinte encontra as ligações para descarregar os ficheiros!
    Clique na palavra correspondente da coluna “Download” para iniciar a descarga.    
    </p>';
    }
}