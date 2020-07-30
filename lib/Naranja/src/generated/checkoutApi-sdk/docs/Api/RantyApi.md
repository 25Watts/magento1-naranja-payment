# Naranja\CheckoutApi\RantyApi

All URIs are relative to *https://checkout.apinaranja.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPaymentRequest**](RantyApi.md#createPaymentRequest) | **POST** /payment_requests | Create a new intents payment
[**getPayment**](RantyApi.md#getPayment) | **GET** /payments/{id} | returns the information of a transaction ,
[**getPaymentRequest**](RantyApi.md#getPaymentRequest) | **GET** /payment_requests/{id} | returns the information of a transaction ,



## createPaymentRequest

> \Naranja\CheckoutApi\Model\CreatePaymentRequest200 createPaymentRequest($payment_request)

Create a new intents payment

Post new intents payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Naranja\CheckoutApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Naranja\CheckoutApi\Api\RantyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_request = new \Naranja\CheckoutApi\Model\PaymentRequest(); // \Naranja\CheckoutApi\Model\PaymentRequest | 

try {
    $result = $apiInstance->createPaymentRequest($payment_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RantyApi->createPaymentRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_request** | [**\Naranja\CheckoutApi\Model\PaymentRequest**](../Model/PaymentRequest.md)|  |

### Return type

[**\Naranja\CheckoutApi\Model\CreatePaymentRequest200**](../Model/CreatePaymentRequest200.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getPayment

> \Naranja\CheckoutApi\Model\Payment200 getPayment($id)

returns the information of a transaction ,

Will return information to id,

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Naranja\CheckoutApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Naranja\CheckoutApi\Api\RantyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | is the id returned for the payment intention

try {
    $result = $apiInstance->getPayment($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RantyApi->getPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| is the id returned for the payment intention |

### Return type

[**\Naranja\CheckoutApi\Model\Payment200**](../Model/Payment200.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getPaymentRequest

> \Naranja\CheckoutApi\Model\PaymentRequest200 getPaymentRequest($id)

returns the information of a transaction ,

Will return information to id,

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Naranja\CheckoutApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Naranja\CheckoutApi\Api\RantyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | is the id returned for the payment intention

try {
    $result = $apiInstance->getPaymentRequest($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RantyApi->getPaymentRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| is the id returned for the payment intention |

### Return type

[**\Naranja\CheckoutApi\Model\PaymentRequest200**](../Model/PaymentRequest200.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

