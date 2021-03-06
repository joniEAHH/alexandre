<?php
/**
 * Customer on-hold order email
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/customer-on-hold-order.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates/Emails
 * @version 3.7.0
 */

defined( 'ABSPATH' ) || exit;

/*
 * @hooked WC_Emails::email_header() Output the email header
 */
do_action( 'woocommerce_email_header', $email_heading, $email ); ?>

<?php /* translators: %s: Customer first name */ ?>
<h1 class="secondary-font"><?php printf( esc_html__( 'Olá %s,', 'woocommerce' ), esc_html( $order->get_billing_first_name() ) ); ?></h1>
<p><?php esc_html_e( 'O seu Pedido foi recebido com sucesso. | Your Order has been successfully received.', 'woocommerce' ); ?></p>

<p><?php esc_html_e( 'Brevemente irá receber um email de confirmação do pagamento e respetiva fatura. | You will soon receive a payment confirmation email and invoice.', 'woocommerce' ); ?></p>



<p>
	<img src="https://alexandrecoxo.com/wp-content/uploads/2020/04/foto_email.jpg" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"  />
</p>


<?php

// /*
//  * @hooked WC_Emails::order_details() Shows the order details table.
//  * @hooked WC_Structured_Data::generate_order_data() Generates structured data.
//  * @hooked WC_Structured_Data::output_structured_data() Outputs structured data.
//  * @since 2.5.0
//  */
// do_action( 'woocommerce_email_order_details', $order, $sent_to_admin, $plain_text, $email );

// /*
//  * @hooked WC_Emails::order_meta() Shows order meta data.
//  */
// do_action( 'woocommerce_email_order_meta', $order, $sent_to_admin, $plain_text, $email );

// /*
//  * @hooked WC_Emails::customer_details() Shows customer details
//  * @hooked WC_Emails::email_address() Shows email address
//  */
// do_action( 'woocommerce_email_customer_details', $order, $sent_to_admin, $plain_text, $email );

/**
 * Show user-defined additional content - this is set in each email's settings.
 */
if ( $additional_content ) {
	echo wp_kses_post( wpautop( wptexturize( $additional_content ) ) );
}
?>

<tr>
	<td align="center" valign="top">
		<table border="0" cellpadding="10" cellspacing="0" width="600" id="template_header">
			<tr>
				<td align="center" style="padding: 10px;">
					<div style="display: inline-flex;">
						<a style="width: 20px; height: 20px; background-image: url(https://alexandrecoxo.com/wp-content/uploads/2020/04/insta-1.png); display: block; background-size: contain; background-repeat: no-repeat;" 
						href="https://www.instagram.com/alexandre_coxo/"></a>
						<a style="width: 20px; height: 20px; margin-left: 10px; background-image: url(https://alexandrecoxo.com/wp-content/uploads/2020/04/face-1.png); display: block; background-size: contain; background-repeat: no-repeat;" 
						href="https://www.facebook.com/alexandrecoxoart/"></a>
					</div>
				</td>
			</tr>
		</table>
	</td>
</tr>
<tr>
	<td align="center" valign="top">
		<!-- Footer -->
		<table border="0" cellpadding="10" cellspacing="0" width="600" id="template_footer">
			<tr>
				<td align="right" valign="top">
					<!-- Header -->
					<p>
						Obrigado pela sua aquisição.<br>
						Thank you for your purchase.
					</p>

					<p>
						Até breve,<br>
						See you later,
					</p>
					<p style="font-weight: bold; color: black;">Alexandre Coxo</p>
					<!-- End Header -->
				</td>
			</tr>
		</table>
		<!-- End Footer -->
	</td>
</tr>




<?php
/*
 * @hooked WC_Emails::email_footer() Output the email footer
 */
do_action( 'woocommerce_email_footer', $email );
?>

