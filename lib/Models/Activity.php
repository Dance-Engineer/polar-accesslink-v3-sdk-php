<?php
/**
 * Activity
 *
 * PHP version 5
 *
 * @category Class
 * @package  Coachbox\Services\Polar
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
* Polar Accesslink API
 *
* Polar Accesslink API documentation
 *
* OpenAPI spec version: 3.19.0
 * Contact: b2bhelpdesk@polar.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.4
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Coachbox\Services\Polar\Models;

use \ArrayAccess;
use \Coachbox\Services\Polar\ObjectSerializer;

/**
 * Activity Class Doc Comment
 *
 * @category Class
 * @description Summary of user&#x27;s daily activity
 * @package  Coachbox\Services\Polar
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Activity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'activity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'polar_user' => 'string',
'transaction_id' => 'int',
'date' => 'string',
'created' => 'string',
'calories' => 'int',
'active_calories' => 'int',
'duration' => 'string',
'active_steps' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
'polar_user' => null,
'transaction_id' => 'int64',
'date' => null,
'created' => null,
'calories' => 'int32',
'active_calories' => 'int32',
'duration' => null,
'active_steps' => 'int32'    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
'polar_user' => 'polar-user',
'transaction_id' => 'transaction-id',
'date' => 'date',
'created' => 'created',
'calories' => 'calories',
'active_calories' => 'active-calories',
'duration' => 'duration',
'active_steps' => 'active-steps'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'polar_user' => 'setPolarUser',
'transaction_id' => 'setTransactionId',
'date' => 'setDate',
'created' => 'setCreated',
'calories' => 'setCalories',
'active_calories' => 'setActiveCalories',
'duration' => 'setDuration',
'active_steps' => 'setActiveSteps'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'polar_user' => 'getPolarUser',
'transaction_id' => 'getTransactionId',
'date' => 'getDate',
'created' => 'getCreated',
'calories' => 'getCalories',
'active_calories' => 'getActiveCalories',
'duration' => 'getDuration',
'active_steps' => 'getActiveSteps'    ];

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
        return self::$swaggerModelName;
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['polar_user'] = isset($data['polar_user']) ? $data['polar_user'] : null;
        $this->container['transaction_id'] = isset($data['transaction_id']) ? $data['transaction_id'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['calories'] = isset($data['calories']) ? $data['calories'] : null;
        $this->container['active_calories'] = isset($data['active_calories']) ? $data['active_calories'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['active_steps'] = isset($data['active_steps']) ? $data['active_steps'] : null;
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

        return true;
    }


    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id Activity summary id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets polar_user
     *
     * @return string
     */
    public function getPolarUser()
    {
        return $this->container['polar_user'];
    }

    /**
     * Sets polar_user
     *
     * @param string $polar_user Absolute link to user owning the activity
     *
     * @return $this
     */
    public function setPolarUser($polar_user)
    {
        $this->container['polar_user'] = $polar_user;

        return $this;
    }

    /**
     * Gets transaction_id
     *
     * @return int
     */
    public function getTransactionId()
    {
        return $this->container['transaction_id'];
    }

    /**
     * Sets transaction_id
     *
     * @param int $transaction_id Id of the activity-transaction this training was transferred in
     *
     * @return $this
     */
    public function setTransactionId($transaction_id)
    {
        $this->container['transaction_id'] = $transaction_id;

        return $this;
    }

    /**
     * Gets date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param string $date Date when activity summary was recorded, in format YYYY-MM-DD
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets created
     *
     * @return string
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param string $created The time activity summary was created in Accesslink, in format YYYY-MM-DDTHH:mm:ss.SSS
     *
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets calories
     *
     * @return int
     */
    public function getCalories()
    {
        return $this->container['calories'];
    }

    /**
     * Sets calories
     *
     * @param int $calories Total daily calories in kilo calories including BMR
     *
     * @return $this
     */
    public function setCalories($calories)
    {
        $this->container['calories'] = $calories;

        return $this;
    }

    /**
     * Gets active_calories
     *
     * @return int
     */
    public function getActiveCalories()
    {
        return $this->container['active_calories'];
    }

    /**
     * Sets active_calories
     *
     * @param int $active_calories Total daily calories not including BMR. Precise calculation requires that user's physical data is entered into Polar Flow
     *
     * @return $this
     */
    public function setActiveCalories($active_calories)
    {
        $this->container['active_calories'] = $active_calories;

        return $this;
    }

    /**
     * Gets duration
     *
     * @return string
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param string $duration The time interval as specified in ISO 8601
     *
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets active_steps
     *
     * @return int
     */
    public function getActiveSteps()
    {
        return $this->container['active_steps'];
    }

    /**
     * Sets active_steps
     *
     * @param int $active_steps You could consider this as a kind of activity unit. If you take one step the active-steps should increase by one and any activity comparable to one physical step would also increase the number by one
     *
     * @return $this
     */
    public function setActiveSteps($active_steps)
    {
        $this->container['active_steps'] = $active_steps;

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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}