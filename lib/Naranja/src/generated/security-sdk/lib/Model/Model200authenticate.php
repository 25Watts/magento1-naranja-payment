<?php
/**
 * Model200authenticate
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
 * Model200authenticate Class Doc Comment
 *
 * @category Class
 * @package  Naranja\Security
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Model200authenticate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '200authenticate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'owner_id' => 'string',
        'owner_document_type_id' => 'float',
        'role' => 'string',
        'logged_id' => 'string',
        'logged_document_type_id' => 'float',
        'logged_email' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'owner_id' => null,
        'owner_document_type_id' => null,
        'role' => null,
        'logged_id' => null,
        'logged_document_type_id' => null,
        'logged_email' => null
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
        'owner_id' => 'owner_id',
        'owner_document_type_id' => 'owner_document_type_id',
        'role' => 'role',
        'logged_id' => 'logged_id',
        'logged_document_type_id' => 'logged_document_type_id',
        'logged_email' => 'logged_email'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'owner_id' => 'setOwnerId',
        'owner_document_type_id' => 'setOwnerDocumentTypeId',
        'role' => 'setRole',
        'logged_id' => 'setLoggedId',
        'logged_document_type_id' => 'setLoggedDocumentTypeId',
        'logged_email' => 'setLoggedEmail'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'owner_id' => 'getOwnerId',
        'owner_document_type_id' => 'getOwnerDocumentTypeId',
        'role' => 'getRole',
        'logged_id' => 'getLoggedId',
        'logged_document_type_id' => 'getLoggedDocumentTypeId',
        'logged_email' => 'getLoggedEmail'
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
        $this->container['owner_id'] = isset($data['owner_id']) ? $data['owner_id'] : null;
        $this->container['owner_document_type_id'] = isset($data['owner_document_type_id']) ? $data['owner_document_type_id'] : null;
        $this->container['role'] = isset($data['role']) ? $data['role'] : null;
        $this->container['logged_id'] = isset($data['logged_id']) ? $data['logged_id'] : null;
        $this->container['logged_document_type_id'] = isset($data['logged_document_type_id']) ? $data['logged_document_type_id'] : null;
        $this->container['logged_email'] = isset($data['logged_email']) ? $data['logged_email'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['owner_id'] === null) {
            $invalidProperties[] = "'owner_id' can't be null";
        }
        if ($this->container['owner_document_type_id'] === null) {
            $invalidProperties[] = "'owner_document_type_id' can't be null";
        }
        if ($this->container['role'] === null) {
            $invalidProperties[] = "'role' can't be null";
        }
        if ($this->container['logged_id'] === null) {
            $invalidProperties[] = "'logged_id' can't be null";
        }
        if ($this->container['logged_document_type_id'] === null) {
            $invalidProperties[] = "'logged_document_type_id' can't be null";
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
     * Gets owner_id
     *
     * @return string
     */
    public function getOwnerId()
    {
        return $this->container['owner_id'];
    }

    /**
     * Sets owner_id
     *
     * @param string $owner_id owner_id
     *
     * @return $this
     */
    public function setOwnerId($owner_id)
    {
        $this->container['owner_id'] = $owner_id;

        return $this;
    }

    /**
     * Gets owner_document_type_id
     *
     * @return float
     */
    public function getOwnerDocumentTypeId()
    {
        return $this->container['owner_document_type_id'];
    }

    /**
     * Sets owner_document_type_id
     *
     * @param float $owner_document_type_id owner_document_type_id
     *
     * @return $this
     */
    public function setOwnerDocumentTypeId($owner_document_type_id)
    {
        $this->container['owner_document_type_id'] = $owner_document_type_id;

        return $this;
    }

    /**
     * Gets role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
     * Sets role
     *
     * @param string $role role
     *
     * @return $this
     */
    public function setRole($role)
    {
        $this->container['role'] = $role;

        return $this;
    }

    /**
     * Gets logged_id
     *
     * @return string
     */
    public function getLoggedId()
    {
        return $this->container['logged_id'];
    }

    /**
     * Sets logged_id
     *
     * @param string $logged_id logged_id
     *
     * @return $this
     */
    public function setLoggedId($logged_id)
    {
        $this->container['logged_id'] = $logged_id;

        return $this;
    }

    /**
     * Gets logged_document_type_id
     *
     * @return float
     */
    public function getLoggedDocumentTypeId()
    {
        return $this->container['logged_document_type_id'];
    }

    /**
     * Sets logged_document_type_id
     *
     * @param float $logged_document_type_id logged_document_type_id
     *
     * @return $this
     */
    public function setLoggedDocumentTypeId($logged_document_type_id)
    {
        $this->container['logged_document_type_id'] = $logged_document_type_id;

        return $this;
    }

    /**
     * Gets logged_email
     *
     * @return string|null
     */
    public function getLoggedEmail()
    {
        return $this->container['logged_email'];
    }

    /**
     * Sets logged_email
     *
     * @param string|null $logged_email logged_email
     *
     * @return $this
     */
    public function setLoggedEmail($logged_email)
    {
        $this->container['logged_email'] = $logged_email;

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


