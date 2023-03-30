<?php

final class WC_AreebaWoocommerceGateway_Provider
{
    public static function paymentMethods()
    {
        /**
         * Comment/disable adapters that are not applicable
         */
        return [
            'WC_AreebaWoocommerceGateway_CreditCard',
          //  'WC_AreebaWoocommerceGateway_CreditCard_Amex',
          //  'WC_AreebaWoocommerceGateway_CreditCard_Diners',
          //  'WC_AreebaWoocommerceGateway_CreditCard_Discover',
          //  'WC_AreebaWoocommerceGateway_CreditCard_Jcb',
            'WC_AreebaWoocommerceGateway_CreditCard_Maestro',
            'WC_AreebaWoocommerceGateway_CreditCard_Mastercard',
           // 'WC_AreebaWoocommerceGateway_CreditCard_UnionPay',
            'WC_AreebaWoocommerceGateway_CreditCard_Visa',
        ];
    }

    public static function autoloadClient()
    {
        require_once AREEBA_WOOCOMMERCE_GATEWAY_EXTENSION_BASEDIR . 'classes/vendor/autoload.php';
    }
}
