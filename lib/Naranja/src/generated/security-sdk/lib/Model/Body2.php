<?php
/**
 * Body2
 *
 * PHP version 5
 *
 * @category Class
 * @package  Naranja\Security
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * naranja-security-api-prodblue
 *
 * This is Naranja API to manage Security
 *
 * The version of the OpenAPI document: 3.1.2
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.2
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Naranja\Security\Model;

use \ArrayAccess;
use \Naranja\Security\ObjectSerializer;

/**
 * Body2 Class Doc Comment
 *
 * @category Class
 * @package  Naranja\Security
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Body2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'body2';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'create_api' => 'bool',
        'api' => '\Naranja\Security\Model\M2msapi',
        'create_client' => 'bool',
        'name' => 'string',
        'description' => 'string',
        'logo_uri' => 'string',
        'token_lifetime' => 'float',
        'app_type' => 'string',
        'client_metadata' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'create_api' => null,
        'api' => null,
        'create_client' => null,
        'name' => null,
        'description' => null,
        'logo_uri' => null,
        'token_lifetime' => null,
        'app_type' => null,
        'client_metadata' => null
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
        'create_api' => 'create_api',
        'api' => 'api',
        'create_client' => 'create_client',
        'name' => 'name',
        'description' => 'description',
        'logo_uri' => 'logo_uri',
        'token_lifetime' => 'token_lifetime',
        'app_type' => 'app_type',
        'client_metadata' => 'client_metadata'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'create_api' => 'setCreateApi',
        'api' => 'setApi',
        'create_client' => 'setCreateClient',
        'name' => 'setName',
        'description' => 'setDescription',
        'logo_uri' => 'setLogoUri',
        'token_lifetime' => 'setTokenLifetime',
        'app_type' => 'setAppType',
        'client_metadata' => 'setClientMetadata'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'create_api' => 'getCreateApi',
        'api' => 'getApi',
        'create_client' => 'getCreateClient',
        'name' => 'getName',
        'description' => 'getDescription',
        'logo_uri' => 'getLogoUri',
        'token_lifetime' => 'getTokenLifetime',
        'app_type' => 'getAppType',
        'client_metadata' => 'getClientMetadata'
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
        $this->container['create_api'] = isset($data['create_api']) ? $data['create_api'] : null;
        $this->container['api'] = isset($data['api']) ? $data['api'] : null;
        $this->container['create_client'] = isset($data['create_client']) ? $data['create_client'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['logo_uri'] = isset($data['logo_uri']) ? $data['logo_uri'] : null;
        $this->container['token_lifetime'] = isset($data['token_lifetime']) ? $data['token_lifetime'] : null;
        $this->container['app_type'] = isset($data['app_type']) ? $data['app_type'] : null;
        $this->container['client_metadata'] = isset($data['client_metadata']) ? $data['client_metadata'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets create_api
     *
     * @return bool|null
     */
    public function getCreateApi()
    {
        return $this->container['create_api'];
    }

    /**
     * Sets create_api
     *
     * @param bool|null $create_api create_api
     *
     * @return $this
     */
    public function setCreateApi($create_api)
    {
        $this->container['create_api'] = $create_api;

        return $this;
    }

    /**
     * Gets api
     *
     * @return \Naranja\Security\Model\M2msapi|null
     */
    public function getApi()
    {
        return $this->container['api'];
    }

    /**
     * Sets api
     *
     * @param \Naranja\Security\Model\M2msapi|null $api api
     *
     * @return $this
     */
    public function setApi($api)
    {
        $this->container['api'] = $api;

        return $this;
    }

    /**
     * Gets create_client
     *
     * @return bool|null
     */
    public function getCreateClient()
    {
        return $this->container['create_client'];
    }

    /**
     * Sets create_client
     *
     * @param bool|null $create_client create_client
     *
     * @return $this
     */
    public function setCreateClient($create_client)
    {
        $this->container['create_client'] = $create_client;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets logo_uri
     *
     * @return string|null
     */
    public function getLogoUri()
    {
        return $this->container['logo_uri'];
    }

    /**
     * Sets logo_uri
     *
     * @param string|null $logo_uri logo_uri
     *
     * @return $this
     */
    public function setLogoUri($logo_uri)
    {
        $this->container['logo_uri'] = $logo_uri;

        return $this;
    }

    /**
     * Gets token_lifetime
     *
     * @return float|null
     */
    public function getTokenLifetime()
    {
        return $this->container['token_lifetime'];
    }

    /**
     * Sets token_lifetime
     *
     * @param float|null $token_lifetime token_lifetime
     *
     * @return $this
     */
    public function setTokenLifetime($token_lifetime)
    {
        $this->container['token_lifetime'] = $token_lifetime;

        return $this;
    }

    /**
     * Gets app_type
     *
     * @return string|null
     */
    public function getAppType()
    {
        return $this->container['app_type'];
    }

    /**
     * Sets app_type
     *
     * @param string|null $app_type app_type
     *
     * @return $this
     */
    public function setAppType($app_type)
    {
        $this->container['app_type'] = $app_type;

        return $this;
    }

    /**
     * Gets client_metadata
     *
     * @return object|null
     */
    public function getClientMetadata()
    {
        return $this->container['client_metadata'];
    }

    /**
     * Sets client_metadata
     *
     * @param object|null $client_metadata client_metadata
     *
     * @return $this
     */
    public function setClientMetadata($client_metadata)
    {
        $this->container['client_metadata'] = $client_metadata;

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


