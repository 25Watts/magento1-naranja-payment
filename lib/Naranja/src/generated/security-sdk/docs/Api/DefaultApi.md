# Naranja\Security\DefaultApi

All URIs are relative to *https://services.apinaranja.com/security-ms*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiHealthLivenessGet**](DefaultApi.md#apiHealthLivenessGet) | **GET** /api/health/liveness | 
[**apiHealthReadinessGet**](DefaultApi.md#apiHealthReadinessGet) | **GET** /api/health/readiness | 
[**deleteAuth0Emails**](DefaultApi.md#deleteAuth0Emails) | **DELETE** /api/security/auth0/emails/{email} | 
[**getAudiencesM2m**](DefaultApi.md#getAudiencesM2m) | **GET** /api/m2ms/audiences | 
[**getAuth0EmailsEligibility**](DefaultApi.md#getAuth0EmailsEligibility) | **GET** /api/security/auth0/emails/{email}/eligibility | 
[**getAuth0UsersImpersonate**](DefaultApi.md#getAuth0UsersImpersonate) | **GET** /api/security/auth0/users/{user_id}/impersonate | 
[**getClientsM2m**](DefaultApi.md#getClientsM2m) | **GET** /api/m2ms/clients | 
[**getLogin**](DefaultApi.md#getLogin) | **GET** /api/security/{account_id}/login | 
[**getPasswordRecoveryTemporaryPassword**](DefaultApi.md#getPasswordRecoveryTemporaryPassword) | **GET** /api/security/password_recovery/temporary_password | 
[**getPhoneEligibility**](DefaultApi.md#getPhoneEligibility) | **GET** /api/security/phones/{phone_number}/eligibility | 
[**getTwoFactorValidation**](DefaultApi.md#getTwoFactorValidation) | **GET** /api/security/{account_id}/two_factor_validation | 
[**postAuth0B2b**](DefaultApi.md#postAuth0B2b) | **POST** /api/security/auth0/b2b/{tenant_group_id} | 
[**postAuthenticate**](DefaultApi.md#postAuthenticate) | **POST** /api/security/authenticate | 
[**postChangePassword**](DefaultApi.md#postChangePassword) | **POST** /api/security/change_password | 
[**postCreateM2m**](DefaultApi.md#postCreateM2m) | **POST** /api/m2ms | 
[**postTwoFactorValidation**](DefaultApi.md#postTwoFactorValidation) | **POST** /api/security/{account_id}/two_factor_validation | 
[**postUsers**](DefaultApi.md#postUsers) | **POST** /api/security/users | 
[**putAuth0Emails**](DefaultApi.md#putAuth0Emails) | **PUT** /api/security/auth0/emails/{email} | 
[**putAuth0UsersRole**](DefaultApi.md#putAuth0UsersRole) | **PUT** /api/security/auth0/users/{user_id}/role | 
[**versionGet**](DefaultApi.md#versionGet) | **GET** /version | 



## apiHealthLivenessGet

> apiHealthLivenessGet()



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Naranja\Security\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->apiHealthLivenessGet();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiHealthLivenessGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## apiHealthReadinessGet

> apiHealthReadinessGet()



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Naranja\Security\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->apiHealthReadinessGet();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiHealthReadinessGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteAuth0Emails

> \Naranja\Security\Model\Inlineresponse2004 deleteAuth0Emails($email)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: multi-custom-authorizer-no-scope-validation
$config = Naranja\Security\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Naranja\Security\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Naranja\Security\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email = 'email_example'; // string | 

try {
    $result = $apiInstance->deleteAuth0Emails($email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteAuth0Emails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**|  |

### Return type

[**\Naranja\Security\Model\Inlineresponse2004**](../Model/Inlineresponse2004.md)

### Authorization

[multi-custom-authorizer-no-scope-validation](../../README.md#multi-custom-authorizer-no-scope-validation)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAudiencesM2m

> getAudiencesM2m()



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: multi-custom-authorizer-no-scope-validation
$config = Naranja\Security\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Naranja\Security\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Naranja\Security\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->getAudiencesM2m();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAudiencesM2m: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[multi-custom-authorizer-no-scope-validation](../../README.md#multi-custom-authorizer-no-scope-validation)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAuth0EmailsEligibility

> \Naranja\Security\Model\Auth0userseligibility getAuth0EmailsEligibility($email)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Naranja\Security\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email = 'email_example'; // string | 

try {
    $result = $apiInstance->getAuth0EmailsEligibility($email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAuth0EmailsEligibility: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**|  |

### Return type

[**\Naranja\Security\Model\Auth0userseligibility**](../Model/Auth0userseligibility.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAuth0UsersImpersonate

> \Naranja\Security\Model\Inlineresponse2001 getAuth0UsersImpersonate($user_id)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: multi-custom-authorizer-no-scope-validation
$config = Naranja\Security\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Naranja\Security\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Naranja\Security\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | 

try {
    $result = $apiInstance->getAuth0UsersImpersonate($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAuth0UsersImpersonate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |

### Return type

[**\Naranja\Security\Model\Inlineresponse2001**](../Model/Inlineresponse2001.md)

### Authorization

[multi-custom-authorizer-no-scope-validation](../../README.md#multi-custom-authorizer-no-scope-validation)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getClientsM2m

> getClientsM2m()



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: multi-custom-authorizer-no-scope-validation
$config = Naranja\Security\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Naranja\Security\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Naranja\Security\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->getClientsM2m();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getClientsM2m: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[multi-custom-authorizer-no-scope-validation](../../README.md#multi-custom-authorizer-no-scope-validation)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getLogin

> \Naranja\Security\Model\Inlineresponse200 getLogin($channel, $account_id)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: multi-custom-authorizer-no-scope-validation
$config = Naranja\Security\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Naranja\Security\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Naranja\Security\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel = 'channel_example'; // string | 
$account_id = 'account_id_example'; // string | 

try {
    $result = $apiInstance->getLogin($channel, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getLogin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel** | **string**|  |
 **account_id** | **string**|  |

### Return type

[**\Naranja\Security\Model\Inlineresponse200**](../Model/Inlineresponse200.md)

### Authorization

[multi-custom-authorizer-no-scope-validation](../../README.md#multi-custom-authorizer-no-scope-validation)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getPasswordRecoveryTemporaryPassword

> \Naranja\Security\Model\MODELa5c73d getPasswordRecoveryTemporaryPassword($user_id, $version)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Naranja\Security\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_id = 'user_id_example'; // string | 
$version = 'version_example'; // string | 

try {
    $result = $apiInstance->getPasswordRecoveryTemporaryPassword($user_id, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getPasswordRecoveryTemporaryPassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  | [optional]
 **version** | **string**|  | [optional]

### Return type

[**\Naranja\Security\Model\MODELa5c73d**](../Model/MODELa5c73d.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getPhoneEligibility

> \Naranja\Security\Model\MODEL9521d9 getPhoneEligibility($phone_number)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: multi-custom-authorizer-no-scope-validation
$config = Naranja\Security\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Naranja\Security\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Naranja\Security\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phone_number = 'phone_number_example'; // string | 

try {
    $result = $apiInstance->getPhoneEligibility($phone_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getPhoneEligibility: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **phone_number** | **string**|  |

### Return type

[**\Naranja\Security\Model\MODEL9521d9**](../Model/MODEL9521d9.md)

### Authorization

[multi-custom-authorizer-no-scope-validation](../../README.md#multi-custom-authorizer-no-scope-validation)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getTwoFactorValidation

> \Naranja\Security\Model\Twofactorvalidationget200 getTwoFactorValidation($account_id, $two_factor_code)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: multi-custom-authorizer-no-scope-validation
$config = Naranja\Security\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Naranja\Security\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Naranja\Security\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | 
$two_factor_code = 'two_factor_code_example'; // string | 

try {
    $result = $apiInstance->getTwoFactorValidation($account_id, $two_factor_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getTwoFactorValidation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**|  |
 **two_factor_code** | **string**|  | [optional]

### Return type

[**\Naranja\Security\Model\Twofactorvalidationget200**](../Model/Twofactorvalidationget200.md)

### Authorization

[multi-custom-authorizer-no-scope-validation](../../README.md#multi-custom-authorizer-no-scope-validation)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## postAuth0B2b

> \Naranja\Security\Model\Authenticationtoken postAuth0B2b($tenant_group_id, $authenticationb2bpost)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Naranja\Security\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_group_id = 'tenant_group_id_example'; // string | 
$authenticationb2bpost = new \Naranja\Security\Model\Authenticationb2bpost(); // \Naranja\Security\Model\Authenticationb2bpost | 

try {
    $result = $apiInstance->postAuth0B2b($tenant_group_id, $authenticationb2bpost);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->postAuth0B2b: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_group_id** | **string**|  |
 **authenticationb2bpost** | [**\Naranja\Security\Model\Authenticationb2bpost**](../Model/Authenticationb2bpost.md)|  |

### Return type

[**\Naranja\Security\Model\Authenticationtoken**](../Model/Authenticationtoken.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## postAuthenticate

> \Naranja\Security\Model\Model200authenticate postAuthenticate($reqauthenticate)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Naranja\Security\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$reqauthenticate = new \Naranja\Security\Model\Reqauthenticate(); // \Naranja\Security\Model\Reqauthenticate | 

try {
    $result = $apiInstance->postAuthenticate($reqauthenticate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->postAuthenticate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reqauthenticate** | [**\Naranja\Security\Model\Reqauthenticate**](../Model/Reqauthenticate.md)|  |

### Return type

[**\Naranja\Security\Model\Model200authenticate**](../Model/Model200authenticate.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## postChangePassword

> postChangePassword($reqchangepassword)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Naranja\Security\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$reqchangepassword = new \Naranja\Security\Model\Reqchangepassword(); // \Naranja\Security\Model\Reqchangepassword | 

try {
    $apiInstance->postChangePassword($reqchangepassword);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->postChangePassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reqchangepassword** | [**\Naranja\Security\Model\Reqchangepassword**](../Model/Reqchangepassword.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## postCreateM2m

> \Naranja\Security\Model\Create postCreateM2m($body2)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: multi-custom-authorizer-no-scope-validation
$config = Naranja\Security\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Naranja\Security\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Naranja\Security\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body2 = new \Naranja\Security\Model\Body2(); // \Naranja\Security\Model\Body2 | 

try {
    $result = $apiInstance->postCreateM2m($body2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->postCreateM2m: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body2** | [**\Naranja\Security\Model\Body2**](../Model/Body2.md)|  |

### Return type

[**\Naranja\Security\Model\Create**](../Model/Create.md)

### Authorization

[multi-custom-authorizer-no-scope-validation](../../README.md#multi-custom-authorizer-no-scope-validation)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## postTwoFactorValidation

> \Naranja\Security\Model\Twofactorvalidationpost200 postTwoFactorValidation($account_id)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: multi-custom-authorizer-no-scope-validation
$config = Naranja\Security\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Naranja\Security\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Naranja\Security\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | 

try {
    $result = $apiInstance->postTwoFactorValidation($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->postTwoFactorValidation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**|  |

### Return type

[**\Naranja\Security\Model\Twofactorvalidationpost200**](../Model/Twofactorvalidationpost200.md)

### Authorization

[multi-custom-authorizer-no-scope-validation](../../README.md#multi-custom-authorizer-no-scope-validation)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## postUsers

> \Naranja\Security\Model\MODEL7aa63e postUsers($userid)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Naranja\Security\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$userid = new \Naranja\Security\Model\Userid(); // \Naranja\Security\Model\Userid | 

try {
    $result = $apiInstance->postUsers($userid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->postUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userid** | [**\Naranja\Security\Model\Userid**](../Model/Userid.md)|  |

### Return type

[**\Naranja\Security\Model\MODEL7aa63e**](../Model/MODEL7aa63e.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## putAuth0Emails

> \Naranja\Security\Model\Inlineresponse2003 putAuth0Emails($email, $body1)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: multi-custom-authorizer-no-scope-validation
$config = Naranja\Security\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Naranja\Security\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Naranja\Security\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email = 'email_example'; // string | 
$body1 = new \Naranja\Security\Model\Body1(); // \Naranja\Security\Model\Body1 | 

try {
    $result = $apiInstance->putAuth0Emails($email, $body1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->putAuth0Emails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**|  |
 **body1** | [**\Naranja\Security\Model\Body1**](../Model/Body1.md)|  |

### Return type

[**\Naranja\Security\Model\Inlineresponse2003**](../Model/Inlineresponse2003.md)

### Authorization

[multi-custom-authorizer-no-scope-validation](../../README.md#multi-custom-authorizer-no-scope-validation)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## putAuth0UsersRole

> \Naranja\Security\Model\Inlineresponse2002 putAuth0UsersRole($user_id, $body)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: multi-custom-authorizer-no-scope-validation
$config = Naranja\Security\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Naranja\Security\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Naranja\Security\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | 
$body = new \Naranja\Security\Model\Body(); // \Naranja\Security\Model\Body | 

try {
    $result = $apiInstance->putAuth0UsersRole($user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->putAuth0UsersRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |
 **body** | [**\Naranja\Security\Model\Body**](../Model/Body.md)|  |

### Return type

[**\Naranja\Security\Model\Inlineresponse2002**](../Model/Inlineresponse2002.md)

### Authorization

[multi-custom-authorizer-no-scope-validation](../../README.md#multi-custom-authorizer-no-scope-validation)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## versionGet

> versionGet()



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Naranja\Security\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->versionGet();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->versionGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

