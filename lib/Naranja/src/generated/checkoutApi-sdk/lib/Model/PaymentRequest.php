<?php
/**
 * PaymentRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Naranja\CheckoutApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Ranty-sls
 *
 * Digital payments Tarjeta Naranja
 *
 * The version of the OpenAPI document: 3.0.0
 * Contact: you@your-company.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.2
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Naranja\CheckoutApi\Model;

use \ArrayAccess;
use \Naranja\CheckoutApi\ObjectSerializer;

/**
 * PaymentRequest Class Doc Comment
 *
 * @category Class
 * @package  Naranja\CheckoutApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PaymentRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'payment_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'payment_type' => 'string',
        'authorization_mode' => 'string',
        'external_payment_id' => 'string',
        'transactions' => '\Naranja\CheckoutApi\Model\Transaction[]',
        'additional_info' => 'string',
        'seller_data' => '\Naranja\CheckoutApi\Model\SellerData',
        'request_creation_redirect' => '\Naranja\CheckoutApi\Model\RequestCreationRedirect',
        'callback_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'payment_type' => null,
        'authorization_mode' => null,
        'external_payment_id' => null,
        'transactions' => null,
        'additional_info' => null,
        'seller_data' => null,
        'request_creation_redirect' => null,
        'callback_url' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'payment_type' => 'payment_type',
        'authorization_mode' => 'authorization_mode',
        'external_payment_id' => 'external_payment_id',
        'transactions' => 'transactions',
        'additional_info' => 'additional_info',
        'seller_data' => 'sellerData',
        'request_creation_redirect' => 'request_creation_redirect',
        'callback_url' => 'callback_url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'payment_type' => 'setPaymentType',
        'authorization_mode' => 'setAuthorizationMode',
        'external_payment_id' => 'setExternalPaymentId',
        'transactions' => 'setTransactions',
        'additional_info' => 'setAdditionalInfo',
        'seller_data' => 'setSellerData',
        'request_creation_redirect' => 'setRequestCreationRedirect',
        'callback_url' => 'setCallbackUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'payment_type' => 'getPaymentType',
        'authorization_mode' => 'getAuthorizationMode',
        'external_payment_id' => 'getExternalPaymentId',
        'transactions' => 'getTransactions',
        'additional_info' => 'getAdditionalInfo',
        'seller_data' => 'getSellerData',
        'request_creation_redirect' => 'getRequestCreationRedirect',
        'callback_url' => 'getCallbackUrl'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['payment_type'] = isset($data['payment_type']) ? $data['payment_type'] : null;
        $this->container['authorization_mode'] = isset($data['authorization_mode']) ? $data['authorization_mode'] : null;
        $this->container['external_payment_id'] = isset($data['external_payment_id']) ? $data['external_payment_id'] : null;
        $this->container['transactions'] = isset($data['transactions']) ? $data['transactions'] : null;
        $this->container['additional_info'] = isset($data['additional_info']) ? $data['additional_info'] : null;
        $this->container['seller_data'] = isset($data['seller_data']) ? $data['seller_data'] : null;
        $this->container['request_creation_redirect'] = isset($data['request_creation_redirect']) ? $data['request_creation_redirect'] : null;
        $this->container['callback_url'] = isset($data['callback_url']) ? $data['callback_url'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['payment_type'] === null) {
            $invalidProperties[] = "'payment_type' can't be null";
        }
        if ($this->container['authorization_mode'] === null) {
            $invalidProperties[] = "'authorization_mode' can't be null";
        }
        if ($this->container['external_payment_id'] === null) {
            $invalidProperties[] = "'external_payment_id' can't be null";
        }
        if ($this->container['transactions'] === null) {
            $invalidProperties[] = "'transactions' can't be null";
        }
        if ($this->container['request_creation_redirect'] === null) {
            $invalidProperties[] = "'request_creation_redirect' can't be null";
        }
        if ($this->container['callback_url'] === null) {
            $invalidProperties[] = "'callback_url' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets payment_type
     *
     * @return string
     */
    public function getPaymentType()
    {
        return $this->container['payment_type'];
    }

    /**
     * Sets payment_type
     *
     * @param string $payment_type payment_type
     *
     * @return $this
     */
    public function setPaymentType($payment_type)
    {
        $this->container['payment_type'] = $payment_type;

        return $this;
    }

    /**
     * Gets authorization_mode
     *
     * @return string
     */
    public function getAuthorizationMode()
    {
        return $this->container['authorization_mode'];
    }

    /**
     * Sets authorization_mode
     *
     * @param string $authorization_mode authorization_mode
     *
     * @return $this
     */
    public function setAuthorizationMode($authorization_mode)
    {
        $this->container['authorization_mode'] = $authorization_mode;

        return $this;
    }

    /**
     * Gets external_payment_id
     *
     * @return string
     */
    public function getExternalPaymentId()
    {
        return $this->container['external_payment_id'];
    }

    /**
     * Sets external_payment_id
     *
     * @param string $external_payment_id external_payment_id
     *
     * @return $this
     */
    public function setExternalPaymentId($external_payment_id)
    {
        $this->container['external_payment_id'] = $external_payment_id;

        return $this;
    }

    /**
     * Gets transactions
     *
     * @return \Naranja\CheckoutApi\Model\Transaction[]
     */
    public function getTransactions()
    {
        return $this->container['transactions'];
    }

    /**
     * Sets transactions
     *
     * @param \Naranja\CheckoutApi\Model\Transaction[] $transactions transactions
     *
     * @return $this
     */
    public function setTransactions($transactions)
    {
        $this->container['transactions'] = $transactions;

        return $this;
    }

    /**
     * Gets additional_info
     *
     * @return string|null
     */
    public function getAdditionalInfo()
    {
        return $this->container['additional_info'];
    }

    /**
     * Sets additional_info
     *
     * @param string|null $additional_info additional_info
     *
     * @return $this
     */
    public function setAdditionalInfo($additional_info)
    {
        $this->container['additional_info'] = $additional_info;

        return $this;
    }

    /**
     * Gets seller_data
     *
     * @return \Naranja\CheckoutApi\Model\SellerData|null
     */
    public function getSellerData()
    {
        return $this->container['seller_data'];
    }

    /**
     * Sets seller_data
     *
     * @param \Naranja\CheckoutApi\Model\SellerData|null $seller_data seller_data
     *
     * @return $this
     */
    public function setSellerData($seller_data)
    {
        $this->container['seller_data'] = $seller_data;

        return $this;
    }

    /**
     * Gets request_creation_redirect
     *
     * @return \Naranja\CheckoutApi\Model\RequestCreationRedirect
     */
    public function getRequestCreationRedirect()
    {
        return $this->container['request_creation_redirect'];
    }

    /**
     * Sets request_creation_redirect
     *
     * @param \Naranja\CheckoutApi\Model\RequestCreationRedirect $request_creation_redirect request_creation_redirect
     *
     * @return $this
     */
    public function setRequestCreationRedirect($request_creation_redirect)
    {
        $this->container['request_creation_redirect'] = $request_creation_redirect;

        return $this;
    }

    /**
     * Gets callback_url
     *
     * @return string
     */
    public function getCallbackUrl()
    {
        return $this->container['callback_url'];
    }

    /**
     * Sets callback_url
     *
     * @param string $callback_url callback_url
     *
     * @return $this
     */
    public function setCallbackUrl($callback_url)
    {
        $this->container['callback_url'] = $callback_url;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


