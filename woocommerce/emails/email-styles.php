<?php
/**
 * Email Styles
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/email-styles.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates/Emails
 * @version 4.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Load colors.
$bg        = get_option( 'woocommerce_email_background_color' );
$body      = get_option( 'woocommerce_email_body_background_color' );
$base      = get_option( 'woocommerce_email_base_color' );
$base_text = wc_light_or_dark( $base, '#202020', '#ffffff' );
$text      = get_option( 'woocommerce_email_text_color' );

// Pick a contrasting color for links.
$link_color = wc_hex_is_light( $base ) ? $base : $base_text;

if ( wc_hex_is_light( $body ) ) {
	$link_color = wc_hex_is_light( $base ) ? $base_text : $base;
}

$bg_darker_10    = wc_hex_darker( $bg, 10 );
$body_darker_10  = wc_hex_darker( $body, 10 );
$base_lighter_20 = wc_hex_lighter( $base, 20 );
$base_lighter_40 = wc_hex_lighter( $base, 40 );
$text_lighter_20 = wc_hex_lighter( $text, 20 );
$text_lighter_40 = wc_hex_lighter( $text, 40 );

// !important; is a gmail hack to prevent styles being stripped if it doesn't like something.
// body{padding: 0;} ensures proper scale/positioning of the email in the iOS native email app.
?>
body {
	padding: 0;
	font-family: 'Roboto', sans-serif;
}

#wrapper {
	background-color: <?php echo esc_attr( $bg ); ?>;
	margin: 0;
	padding: 70px 0;
	-webkit-text-size-adjust: none !important;
	width: 100%;
}

.flex-container {
	display: flex;
	font-size: 10px;
}


.flex-item {
	padding: 1em;
	width: 100%;
}


p {
   color: #5c5c5c;
   font-size: 14px;
}

#template_container {
	box-shadow: 0 1px 4px rgba(0, 0, 0, 0.1) !important;
	background-color: <?php echo esc_attr( $body ); ?>;
	border: 1px solid <?php echo esc_attr( $bg_darker_10 ); ?>;
	border-radius: 3px !important;
}

#template_header {
	background-color: #faf7f4;
	border-radius: 3px 3px 0 0 !important;
	border-bottom: 0;
	font-weight: bold;
	line-height: 100%;
	vertical-align: middle;
	font-family: Roboto, "Helvetica Neue", Helvetica, Arial, sans-serif;
}

#template_header h1,
#template_header h1 a {
	color: #555555;
}

#template_header_image img {
	margin-left: 0;
	margin-right: 0;
	width: 250px;
}

#template_footer td,
#template_footer_notas td {
	padding: 0;
	border-radius: 6px;
}

#template_footer_notas p {
	font-size: 12px;
	line-heigth: 1.4em;
}

.et_pb_button {
	display: block;
	padding: 0.3em 1em;
	border: 2px solid #000;
    color: #000;
    font-size: 14px;
    font-family: 'Roboto',Helvetica,Arial,Lucida,sans-serif;
	font-weight: bold;
	text-decoration: none; 
	text-align: center;
}

#template_footer #credit {
	border: 0;
	color: <?php echo esc_attr( $text_lighter_40 ); ?>;
	font-family: Roboto, "Helvetica Neue", Helvetica, Arial, sans-serif;
	font-size: 12px;
	line-height: 150%;
	text-align: center;
	padding: 24px 0;
}

#template_footer #credit p {
	margin: 0 0 16px;
}

#body_content {
	background-color: <?php echo esc_attr( $body ); ?>;
}

#body_content table td {
	padding: 48px 48px 0;
}

#body_content table td td {
	padding: 8px;
}

#body_content table td th {
	padding: 8px;
}

#body_content td ul.wc-item-meta {
	font-size: small;
	margin: 1em 0 0;
	padding: 0;
	list-style: none;
}

#body_content td ul.wc-item-meta li {
	margin: 0.5em 0 0;
	padding: 0;
}

#body_content td ul.wc-item-meta li p {
	margin: 0;
}

#body_content p {
	margin: 0 0 16px;
}

#body_content_inner {
	color: <?php echo esc_attr( $text_lighter_20 ); ?>;
	font-family: Roboto, "Helvetica Neue", Helvetica, Arial, sans-serif;
	font-size: 14px;
	line-height: 1.4em;
	text-align: <?php echo is_rtl() ? 'right' : 'left'; ?>;
}

.td {
	color: <?php echo esc_attr( $text_lighter_20 ); ?>;
	border: 1px solid <?php echo esc_attr( $body_darker_10 ); ?>;
	vertical-align: middle;
	font-size: 14px;
}

.td--title {
	color: #333;
}

.address {
	font-size: 14px;
	padding: 8px;
	color: <?php echo esc_attr( $text_lighter_20 ); ?>;
}

.text {
	color: <?php echo esc_attr( $text ); ?>;
	font-family: Roboto, "Helvetica Neue", Helvetica, Arial, sans-serif;
}

.link {
	color: <?php echo esc_attr( $base ); ?>;
}

#header_wrapper {
	padding: 10px 48px;
	display: block;
}

h1 {
	color: #515151;
	font-family: Roboto, Arial, sans-serif;
	font-size: 18px;
	font-weight: 300;
	line-height: 1.2em;
	text-align: <?php echo is_rtl() ? 'right' : 'left'; ?>;
}

.secondary-font {
	font-family: 'Playfair Display', "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
}

h2 {
	color: <?php echo esc_attr( $base ); ?>;
	display: block;
	font-family: Roboto, "Helvetica Neue", Helvetica, Arial, sans-serif;
	font-size: 16px;
	font-weight: bold;
	line-height: 1.2em;
	margin: 0 0 5px;
	text-align: <?php echo is_rtl() ? 'right' : 'left'; ?>;
}

h3 {
	color: <?php echo esc_attr( $base ); ?>;
	display: block;
	font-family: Roboto, "Helvetica Neue", Helvetica, Arial, sans-serif;
	font-size: 14px;
	font-weight: bold;
	line-height: 1.2em;
	margin: 16px 0 8px;
	text-align: <?php echo is_rtl() ? 'right' : 'left'; ?>;
}

a {
	color: <?php echo esc_attr( $link_color ); ?>;
	font-weight: normal;
	text-decoration: underline;
}

img {
	border: none;
	display: inline-block;
	font-size: 14px;
	font-weight: bold;
	height: auto;
	outline: none;
	text-decoration: none;
	text-transform: capitalize;
	vertical-align: middle;
	margin-<?php echo is_rtl() ? 'left' : 'right'; ?>: 10px;
	max-width: 100%;
	height: auto;
}


#processing-order #addresses,
.ctt-tracking {
	display: none;
}

#processing-order .ctt-tracking {
	display: block;
}

<?php
