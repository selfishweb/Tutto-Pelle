<?php
/**
 * Proceed to checkout button
 *
 * Contains the markup for the proceed to checkout button on the cart.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/proceed-to-checkout-button.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 2.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( is_user_logged_in() ){
	?>
	<a href="<?php echo esc_url( wc_get_checkout_url() ); ?>" class="checkout-button-sf button alt wc-forward" style="width: 100% !important;">
		<?php esc_html_e( 'Proceed to checkout', 'woocommerce' ); ?>
	</a>
<?php
}
else{
	echo "<p style='text-align: center;'>Accede a tu cuenta para finalizar la compra.</p>";
	echo do_shortcode('[xoo_el_action type="login" display="button" text="Acceder" change_to="logout" redirect_to="same"]');
}
?>

<style>
.checkout-button-sf {
    padding: 10px 20px !important;
    text-transform: uppercase;
    letter-spacing: 2px;
    font-size: 14px !important;
    font-weight: 600 !important;
    border-radius: 0 !important;
    background-color: #1e1e1e !important;
    border: 2px solid #1e1e1e !important;
    width: 100%;
    text-align: center;
    margin-bottom: 40px !important;
}
.wc-proceed-to-checkout a {
	background-color: #1e1e1e !important;
	background: #1e1e1e !important;
	color: white !important;
	text-align: center;
	width: 60%;
	display: block !important;
	margin: 0 auto !important;
}
</style>
