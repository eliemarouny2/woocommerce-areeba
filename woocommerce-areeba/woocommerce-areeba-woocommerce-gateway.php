<?php
/**
 * Plugin Name: WooCommerce areeba woocommerce gateway Extension
 * Description: areeba woocommerce gateway for WooCommerce
 * Version: 1.7.3
 * Author: areeba woocommerce gateway
 * WC requires at least: 3.6.0
 * WC tested up to: 3.7.0
 */
if (!defined('ABSPATH')) {
    exit;
}

define('AREEBA_WOOCOMMERCE_GATEWAY_EXTENSION_URL', 'https://gateway.areebapayment.com/');
define('AREEBA_WOOCOMMERCE_GATEWAY_EXTENSION_NAME', 'areeba woocommerce gateway');
define('AREEBA_WOOCOMMERCE_GATEWAY_EXTENSION_VERSION', '1.7.3');
define('AREEBA_WOOCOMMERCE_GATEWAY_EXTENSION_UID_PREFIX', 'areeba_woocommerce_gateway_');
define('AREEBA_WOOCOMMERCE_GATEWAY_EXTENSION_BASEDIR', plugin_dir_path(__FILE__));

add_action('plugins_loaded', function () {
    require_once AREEBA_WOOCOMMERCE_GATEWAY_EXTENSION_BASEDIR . 'classes/includes/areeba-woocommerce-gateway-provider.php';
    require_once AREEBA_WOOCOMMERCE_GATEWAY_EXTENSION_BASEDIR . 'classes/includes/areeba-woocommerce-gateway-creditcard.php';
    require_once AREEBA_WOOCOMMERCE_GATEWAY_EXTENSION_BASEDIR . 'classes/includes/areeba-woocommerce-gateway-creditcard-amex.php';
    require_once AREEBA_WOOCOMMERCE_GATEWAY_EXTENSION_BASEDIR . 'classes/includes/areeba-woocommerce-gateway-creditcard-diners.php';
    require_once AREEBA_WOOCOMMERCE_GATEWAY_EXTENSION_BASEDIR . 'classes/includes/areeba-woocommerce-gateway-creditcard-discover.php';
    require_once AREEBA_WOOCOMMERCE_GATEWAY_EXTENSION_BASEDIR . 'classes/includes/areeba-woocommerce-gateway-creditcard-jcb.php';
    require_once AREEBA_WOOCOMMERCE_GATEWAY_EXTENSION_BASEDIR . 'classes/includes/areeba-woocommerce-gateway-creditcard-maestro.php';
    require_once AREEBA_WOOCOMMERCE_GATEWAY_EXTENSION_BASEDIR . 'classes/includes/areeba-woocommerce-gateway-creditcard-mastercard.php';
    require_once AREEBA_WOOCOMMERCE_GATEWAY_EXTENSION_BASEDIR . 'classes/includes/areeba-woocommerce-gateway-creditcard-unionpay.php';
    require_once AREEBA_WOOCOMMERCE_GATEWAY_EXTENSION_BASEDIR . 'classes/includes/areeba-woocommerce-gateway-creditcard-visa.php';

    add_filter('woocommerce_payment_gateways', function ($methods) {
        foreach (WC_AreebaWoocommerceGateway_Provider::paymentMethods() as $paymentMethod) {
            $methods[] = $paymentMethod;
        }
        return $methods;
    }, 0);

    // add_filter('woocommerce_before_checkout_form', function(){
    add_filter('the_content', function($content){
        if(is_checkout_pay_page() || is_checkout()) {
            if(!empty($_GET['gateway_return_result']) && $_GET['gateway_return_result'] == 'error') {
                wc_print_notice(__('Payment failed or was declined', 'woocommerce'), 'error');
            }
        }
        return $content;
    }, 0, 1);

    add_action( 'init', 'woocommerce_clear_cart_url' );
    function woocommerce_clear_cart_url() {
        if (isset( $_GET['clear-cart']) && is_order_received_page()) {
            global $woocommerce;

            $woocommerce->cart->empty_cart();
        }
    }
});
