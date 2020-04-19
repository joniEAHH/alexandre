<?php
/**
 * Customer processing order email
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/customer-processing-order.php.
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

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/*
 * @hooked WC_Emails::email_header() Output the email header
 */
do_action( 'woocommerce_email_header', $email_heading, $email ); ?>

<?php /* translators: %s: Customer first name */ ?>
<h1><?php printf( esc_html__( 'Olá %s,', 'woocommerce' ), esc_html( $order->get_billing_first_name() ) ); ?></h1>


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
do_action( 'woocommerce_email_customer_details', $order, $sent_to_admin, $plain_text, $email );

/**
 * Show user-defined additional content - this is set in each email's settings.
 */
if ( $additional_content ) {
	echo wp_kses_post( wpautop( wptexturize( $additional_content ) ) );
}

?>

<tr>
	<td align="center" valign="top" style="padding: 48px 48px 32px;">
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

			<tr>
				<td>
					<table border="0" cellpadding="0" cellspacing="0" width="600" id="template_header">
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

			<tr id="template_footer_notas">
				<td valign="top">
					<!-- Header -->
					<p>
					Nota:<br>
						Para as encomendas em Portugal o nosso operador logístico fornece o serviço de Track&Trace até ao momento da entrega. Para os restantes países, este serviço apenas é garantido até à saída de Portugal, salvo exceções. Dependendo da sua localização, a entrega demora normalmente entre 2 a 10 dias úteis a contar da data de envio. Para mais informações consulte as nossas <a href="https://alexandrecoxo.com/ajuda/">FAQ’s</a>.
						Para mais informações contate o nosso operador logístico (<a href="https://www.ctt.pt/particulares/">aqui</a>).
					</p>

					<p>
					Note:<br>
					For orders in Portugal our logistics operator provides Track & Trace service until delivery. For all other countries, this service is only guaranteed until you leave Portugal, except for exceptions. Depending on your location, shipping typically takes 2-10 business days from the date of shipment. For more information see our <a href="https://alexandrecoxo.com/ajuda/">FAQ’s</a>.
					For more information contact our logistics operator (<a href="https://www.ctt.pt/particulares/">here</a>).

					</p>
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
