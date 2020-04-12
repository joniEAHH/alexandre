<?php
/**
 * Email Addresses
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/email-addresses.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates/Emails
 * @version 3.9.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$text_align = is_rtl() ? 'right' : 'left';
$address    = $order->get_formatted_billing_address();
$shipping   = $order->get_formatted_shipping_address();

?><table id="addresses" border="1" cellspacing="0" cellpadding="0" style="width: 100%; vertical-align: top; margin-bottom: 40px; padding:0; border: 1px solid #e5e5e5;">
    <tr>
		<th class="td" scope="col" style="text-align:<?php echo esc_attr( $text_align ); ?>;">
			<p>Morada de Faturação</p>
		</th>
		<th class="td" scope="col" style="text-align:<?php echo esc_attr( $text_align ); ?>;">
			<p>Morada de Envio</p>
		</th>
    </tr>
	<tr>
		<td style="text-align:<?php echo esc_attr( $text_align ); ?>; border: 1px solid #e5e5e5; padding:0;" valign="top" width="50%">

			<address class="address">
				<?php echo wp_kses_post( $address ? $address : esc_html__( 'N/A', 'woocommerce' ) ); ?>
				<?php if ( $order->get_billing_phone() ) : ?>
					<br/><?php echo wc_make_phone_clickable( $order->get_billing_phone() ); ?>
				<?php endif; ?>
				<?php if ( $order->get_billing_email() ) : ?>
					<br/><?php echo esc_html( $order->get_billing_email() ); ?>
				<?php endif; ?>
			</address>
		</td>
		<?php if ( ! wc_ship_to_billing_address_only() && $order->needs_shipping_address() && $shipping ) : ?>
			<td style="text-align:<?php echo esc_attr( $text_align ); ?>; border:0; padding:0; border: 1px solid #e5e5e5" valign="top" width="50%">

				<address class="address"><?php echo wp_kses_post( $shipping ); ?></address>
			</td>
		<?php endif; ?>
	</tr>
</table>
