<?php

namespace AreebaWoocommerceGateway\Client\CustomerProfile;

use AreebaWoocommerceGateway\Client\Json\ResponseObject;

/**
 * Class GetProfileResponse
 *
 * @package AreebaWoocommerceGateway\Client\CustomerProfile
 *
 * @property bool $profileExists
 * @property string $profileGuid
 * @property string $customerIdentification
 * @property string $preferredMethod
 * @property CustomerData $customer
 * @property PaymentInstrument[] $paymentInstruments
 */
class GetProfileResponse extends ResponseObject {

}
