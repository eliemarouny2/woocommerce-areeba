<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname(dirname($vendorDir));

return array(
    'AreebaWoocommerceGateway\\Client\\Callback\\ChargebackData' => $baseDir . '/classes/client/Callback/ChargebackData.php',
    'AreebaWoocommerceGateway\\Client\\Callback\\ChargebackReversalData' => $baseDir . '/classes/client/Callback/ChargebackReversalData.php',
    'AreebaWoocommerceGateway\\Client\\Callback\\Result' => $baseDir . '/classes/client/Callback/Result.php',
    'AreebaWoocommerceGateway\\Client\\Client' => $baseDir . '/classes/client/Client.php',
    'AreebaWoocommerceGateway\\Client\\CustomerProfile\\CustomerData' => $baseDir . '/classes/client/CustomerProfile/CustomerData.php',
    'AreebaWoocommerceGateway\\Client\\CustomerProfile\\DeleteProfileResponse' => $baseDir . '/classes/client/CustomerProfile/DeleteProfileResponse.php',
    'AreebaWoocommerceGateway\\Client\\CustomerProfile\\GetProfileResponse' => $baseDir . '/classes/client/CustomerProfile/GetProfileResponse.php',
    'AreebaWoocommerceGateway\\Client\\CustomerProfile\\PaymentData\\CardData' => $baseDir . '/classes/client/CustomerProfile/PaymentData/CardData.php',
    'AreebaWoocommerceGateway\\Client\\CustomerProfile\\PaymentData\\IbanData' => $baseDir . '/classes/client/CustomerProfile/PaymentData/IbanData.php',
    'AreebaWoocommerceGateway\\Client\\CustomerProfile\\PaymentData\\PaymentData' => $baseDir . '/classes/client/CustomerProfile/PaymentData/PaymentData.php',
    'AreebaWoocommerceGateway\\Client\\CustomerProfile\\PaymentData\\WalletData' => $baseDir . '/classes/client/CustomerProfile/PaymentData/WalletData.php',
    'AreebaWoocommerceGateway\\Client\\CustomerProfile\\PaymentInstrument' => $baseDir . '/classes/client/CustomerProfile/PaymentInstrument.php',
    'AreebaWoocommerceGateway\\Client\\CustomerProfile\\UpdateProfileResponse' => $baseDir . '/classes/client/CustomerProfile/UpdateProfileResponse.php',
    'AreebaWoocommerceGateway\\Client\\Data\\CreditCardCustomer' => $baseDir . '/classes/client/Data/CreditCardCustomer.php',
    'AreebaWoocommerceGateway\\Client\\Data\\Customer' => $baseDir . '/classes/client/Data/Customer.php',
    'AreebaWoocommerceGateway\\Client\\Data\\Data' => $baseDir . '/classes/client/Data/Data.php',
    'AreebaWoocommerceGateway\\Client\\Data\\IbanCustomer' => $baseDir . '/classes/client/Data/IbanCustomer.php',
    'AreebaWoocommerceGateway\\Client\\Data\\Item' => $baseDir . '/classes/client/Data/Item.php',
    'AreebaWoocommerceGateway\\Client\\Data\\Request' => $baseDir . '/classes/client/Data/Request.php',
    'AreebaWoocommerceGateway\\Client\\Data\\Result\\CreditcardData' => $baseDir . '/classes/client/Data/Result/CreditcardData.php',
    'AreebaWoocommerceGateway\\Client\\Data\\Result\\IbanData' => $baseDir . '/classes/client/Data/Result/IbanData.php',
    'AreebaWoocommerceGateway\\Client\\Data\\Result\\PhoneData' => $baseDir . '/classes/client/Data/Result/PhoneData.php',
    'AreebaWoocommerceGateway\\Client\\Data\\Result\\ResultData' => $baseDir . '/classes/client/Data/Result/ResultData.php',
    'AreebaWoocommerceGateway\\Client\\Data\\Result\\WalletData' => $baseDir . '/classes/client/Data/Result/WalletData.php',
    'AreebaWoocommerceGateway\\Client\\Exception\\ClientException' => $baseDir . '/classes/client/Exception/ClientException.php',
    'AreebaWoocommerceGateway\\Client\\Exception\\InvalidValueException' => $baseDir . '/classes/client/Exception/InvalidValueException.php',
    'AreebaWoocommerceGateway\\Client\\Exception\\RateLimitException' => $baseDir . '/classes/client/Exception/RateLimitException.php',
    'AreebaWoocommerceGateway\\Client\\Exception\\TimeoutException' => $baseDir . '/classes/client/Exception/TimeoutException.php',
    'AreebaWoocommerceGateway\\Client\\Exception\\TypeException' => $baseDir . '/classes/client/Exception/TypeException.php',
    'AreebaWoocommerceGateway\\Client\\Http\\ClientInterface' => $baseDir . '/classes/client/Http/ClientInterface.php',
    'AreebaWoocommerceGateway\\Client\\Http\\CurlClient' => $baseDir . '/classes/client/Http/CurlClient.php',
    'AreebaWoocommerceGateway\\Client\\Http\\CurlExec' => $baseDir . '/classes/client/Http/CurlExec.php',
    'AreebaWoocommerceGateway\\Client\\Http\\Exception\\ClientException' => $baseDir . '/classes/client/Http/Exception/ClientException.php',
    'AreebaWoocommerceGateway\\Client\\Http\\Exception\\ResponseException' => $baseDir . '/classes/client/Http/Exception/ResponseException.php',
    'AreebaWoocommerceGateway\\Client\\Http\\Response' => $baseDir . '/classes/client/Http/Response.php',
    'AreebaWoocommerceGateway\\Client\\Http\\ResponseInterface' => $baseDir . '/classes/client/Http/ResponseInterface.php',
    'AreebaWoocommerceGateway\\Client\\Json\\DataObject' => $baseDir . '/classes/client/Json/DataObject.php',
    'AreebaWoocommerceGateway\\Client\\Json\\ErrorResponse' => $baseDir . '/classes/client/Json/ErrorResponse.php',
    'AreebaWoocommerceGateway\\Client\\Json\\ResponseObject' => $baseDir . '/classes/client/Json/ResponseObject.php',
    'AreebaWoocommerceGateway\\Client\\Schedule\\ScheduleData' => $baseDir . '/classes/client/Schedule/ScheduleData.php',
    'AreebaWoocommerceGateway\\Client\\Schedule\\ScheduleError' => $baseDir . '/classes/client/Schedule/ScheduleError.php',
    'AreebaWoocommerceGateway\\Client\\Schedule\\ScheduleResult' => $baseDir . '/classes/client/Schedule/ScheduleResult.php',
    'AreebaWoocommerceGateway\\Client\\StatusApi\\StatusRequestData' => $baseDir . '/classes/client/StatusApi/StatusRequestData.php',
    'AreebaWoocommerceGateway\\Client\\StatusApi\\StatusResult' => $baseDir . '/classes/client/StatusApi/StatusResult.php',
    'AreebaWoocommerceGateway\\Client\\Transaction\\Base\\AbstractTransaction' => $baseDir . '/classes/client/Transaction/Base/AbstractTransaction.php',
    'AreebaWoocommerceGateway\\Client\\Transaction\\Base\\AbstractTransactionWithReference' => $baseDir . '/classes/client/Transaction/Base/AbstractTransactionWithReference.php',
    'AreebaWoocommerceGateway\\Client\\Transaction\\Base\\AddToCustomerProfileInterface' => $baseDir . '/classes/client/Transaction/Base/AddToCustomerProfileInterface.php',
    'AreebaWoocommerceGateway\\Client\\Transaction\\Base\\AddToCustomerProfileTrait' => $baseDir . '/classes/client/Transaction/Base/AddToCustomerProfileTrait.php',
    'AreebaWoocommerceGateway\\Client\\Transaction\\Base\\AmountableInterface' => $baseDir . '/classes/client/Transaction/Base/AmountableInterface.php',
    'AreebaWoocommerceGateway\\Client\\Transaction\\Base\\AmountableTrait' => $baseDir . '/classes/client/Transaction/Base/AmountableTrait.php',
    'AreebaWoocommerceGateway\\Client\\Transaction\\Base\\ItemsInterface' => $baseDir . '/classes/client/Transaction/Base/ItemsInterface.php',
    'AreebaWoocommerceGateway\\Client\\Transaction\\Base\\ItemsTrait' => $baseDir . '/classes/client/Transaction/Base/ItemsTrait.php',
    'AreebaWoocommerceGateway\\Client\\Transaction\\Base\\OffsiteInterface' => $baseDir . '/classes/client/Transaction/Base/OffsiteInterface.php',
    'AreebaWoocommerceGateway\\Client\\Transaction\\Base\\OffsiteTrait' => $baseDir . '/classes/client/Transaction/Base/OffsiteTrait.php',
    'AreebaWoocommerceGateway\\Client\\Transaction\\Base\\ScheduleInterface' => $baseDir . '/classes/client/Transaction/Base/ScheduleInterface.php',
    'AreebaWoocommerceGateway\\Client\\Transaction\\Base\\ScheduleTrait' => $baseDir . '/classes/client/Transaction/Base/ScheduleTrait.php',
    'AreebaWoocommerceGateway\\Client\\Transaction\\Capture' => $baseDir . '/classes/client/Transaction/Capture.php',
    'AreebaWoocommerceGateway\\Client\\Transaction\\Debit' => $baseDir . '/classes/client/Transaction/Debit.php',
    'AreebaWoocommerceGateway\\Client\\Transaction\\Deregister' => $baseDir . '/classes/client/Transaction/Deregister.php',
    'AreebaWoocommerceGateway\\Client\\Transaction\\Error' => $baseDir . '/classes/client/Transaction/Error.php',
    'AreebaWoocommerceGateway\\Client\\Transaction\\Payout' => $baseDir . '/classes/client/Transaction/Payout.php',
    'AreebaWoocommerceGateway\\Client\\Transaction\\Preauthorize' => $baseDir . '/classes/client/Transaction/Preauthorize.php',
    'AreebaWoocommerceGateway\\Client\\Transaction\\Refund' => $baseDir . '/classes/client/Transaction/Refund.php',
    'AreebaWoocommerceGateway\\Client\\Transaction\\Register' => $baseDir . '/classes/client/Transaction/Register.php',
    'AreebaWoocommerceGateway\\Client\\Transaction\\Result' => $baseDir . '/classes/client/Transaction/Result.php',
    'AreebaWoocommerceGateway\\Client\\Transaction\\VoidTransaction' => $baseDir . '/classes/client/Transaction/VoidTransaction.php',
    'AreebaWoocommerceGateway\\Client\\Xml\\Generator' => $baseDir . '/classes/client/Xml/Generator.php',
    'AreebaWoocommerceGateway\\Client\\Xml\\Parser' => $baseDir . '/classes/client/Xml/Parser.php',
    'Psr\\Log\\AbstractLogger' => $vendorDir . '/psr/log/Psr/Log/AbstractLogger.php',
    'Psr\\Log\\InvalidArgumentException' => $vendorDir . '/psr/log/Psr/Log/InvalidArgumentException.php',
    'Psr\\Log\\LogLevel' => $vendorDir . '/psr/log/Psr/Log/LogLevel.php',
    'Psr\\Log\\LoggerAwareInterface' => $vendorDir . '/psr/log/Psr/Log/LoggerAwareInterface.php',
    'Psr\\Log\\LoggerAwareTrait' => $vendorDir . '/psr/log/Psr/Log/LoggerAwareTrait.php',
    'Psr\\Log\\LoggerInterface' => $vendorDir . '/psr/log/Psr/Log/LoggerInterface.php',
    'Psr\\Log\\LoggerTrait' => $vendorDir . '/psr/log/Psr/Log/LoggerTrait.php',
    'Psr\\Log\\NullLogger' => $vendorDir . '/psr/log/Psr/Log/NullLogger.php',
    'Psr\\Log\\Test\\DummyTest' => $vendorDir . '/psr/log/Psr/Log/Test/LoggerInterfaceTest.php',
    'Psr\\Log\\Test\\LoggerInterfaceTest' => $vendorDir . '/psr/log/Psr/Log/Test/LoggerInterfaceTest.php',
    'Psr\\Log\\Test\\TestLogger' => $vendorDir . '/psr/log/Psr/Log/Test/TestLogger.php',
);
