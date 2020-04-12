<?php
/**
 * Admin new order email
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/admin-new-order.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates/Emails/HTML
 * @version 3.7.0
 */

defined( 'ABSPATH' ) || exit;

/*
 * @hooked WC_Emails::email_header() Output the email header
 */
do_action( 'woocommerce_email_header', $email_heading, $email ); ?>
<style>
	#header_wrapper,
	tfoot, .preco,
	.order_item td:nth-child(3) {
		display: none;
	}
</style>	

<?php /* translators: %s: Customer billing full name */ ?>
<h1 style="color: #000"><?php printf( esc_html__( 'Olá %s,', 'woocommerce' ), esc_html( $order->get_billing_first_name() ) ); ?></h1>
<p style="margin: 10px 0">
	Obrigado por adquirir as minhas obras!<br>
	Thank you for purchasing my works!
</p>

<?php

/*
 * @hooked WC_Emails::order_details() Shows the order details table.
 * @hooked WC_Structured_Data::generate_order_data() Generates structured data.
 * @hooked WC_Structured_Data::output_structured_data() Outputs structured data.
 * @since 2.5.0
 */
do_action( 'woocommerce_email_order_details', $order, $sent_to_admin, $plain_text, $email );

/*
 * @hooked WC_Emails::order_meta() Shows order meta data.
 */
do_action( 'woocommerce_email_order_meta', $order, $sent_to_admin, $plain_text, $email );

/*
 * @hooked WC_Emails::customer_details() Shows customer details
 * @hooked WC_Emails::email_address() Shows email address
 */
do_action( 'woocommerce_email_customer_details', $order, $sent_to_admin, $plain_text, $email );

?>

<div class="flex-container">
    <div class="flex-item">
        <p>
            Deseja devolver a obra?<br>
            Devolva-a diretamente para mim. Como?<br>
			<br>
            1 - Verifique se ainda se encontra dentro do período de devolução: 30 dias após a receção da encomenda.<br>
            2 - Prepare a devolução: coloque a obra na sua caixa original com todos os seus componentes e feche com fita
            cola.<br>
            3 - O envio é da sua responsabilidade, para o endereço: Alexandre Coxo | Avenida de Fernão de Magalhães, nº
            52 | 4300-187 Porto, Portugal.<br>
            Recomendo que guarde o recibo do frete como comprovativo da devolução.<br>
            4 - Receberá o seu reembolso quando a obra devolvida for verificada.<br>
            5 - Para mais informações consulte a secção Termos e Condições do site
            <a href="www.alexandrecoxo.com">www.alexandrecoxo.com</a>, ou contacte-me para o email
            <a href="mailto:info@alexandrecoxo.com">info@alexandrecoxo.com</a>
        </p>
    </div>
    <div class="flex-item">
        <p>
            Do you want to return an article?<br>
            Send your order back to me. How?<br>
			<br>
            1 - Check if it is still within the return period: 30 days after receiving the order.<br>
            2 - Prepare the return: place the article in it’s original box with all it’s components and close with tape.<br>
            3 - Send the package, at the customer´s risl and costs, to the following address: Alexandre Coxo | Fernão de
            Magalhães Avenue, nº 52 | 4300-187 Porto, Portugal.<br>
            I recommend that you keep the receipt given to you by the couvier service as proof of your return.<br>
            4 - You will receive your refund once the returned items have verified.<br>
            5 - For more information see the Terms and Conditions section of the website
            <a href="www.alexandrecoxo.com">www.alexandrecoxo.com</a>, or contact me at
            <a href="mailto:info@alexandrecoxo.com">info@alexandrecoxo.com</a>
        </p>
    </div>
</div>




	<?php

/**
 * Show user-defined additional content - this is set in each email's settings.
 */
if ( $additional_content ) {
	echo wp_kses_post( wpautop( wptexturize( $additional_content ) ) );
}

/*
 * @hooked WC_Emails::email_footer() Output the email footer
 */
do_action( 'woocommerce_email_footer', $email );
