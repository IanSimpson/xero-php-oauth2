<?php
/**
 * TimeEntry
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Xero Projects API
 *
 * This is the Xero Projects API
 *
 * OpenAPI spec version: 2.5.0
 * Contact: api@xero.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace XeroAPI\XeroPHP\Models\Project;

use \ArrayAccess;
use \XeroAPI\XeroPHP\ProjectObjectSerializer;
use \XeroAPI\XeroPHP\StringUtil;
/**
 * TimeEntry Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TimeEntry implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TimeEntry';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'time_entry_id' => 'string',
        'user_id' => 'string',
        'project_id' => 'string',
        'task_id' => 'string',
        'date_utc' => '\DateTime',
        'date_entered_utc' => '\DateTime',
        'duration' => 'int',
        'description' => 'string',
        'status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'time_entry_id' => 'uuid',
        'user_id' => 'uuid',
        'project_id' => 'uuid',
        'task_id' => 'uuid',
        'date_utc' => 'date-time',
        'date_entered_utc' => 'date-time',
        'duration' => null,
        'description' => null,
        'status' => null
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
        'time_entry_id' => 'timeEntryId',
        'user_id' => 'userId',
        'project_id' => 'projectId',
        'task_id' => 'taskId',
        'date_utc' => 'dateUtc',
        'date_entered_utc' => 'dateEnteredUtc',
        'duration' => 'duration',
        'description' => 'description',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'time_entry_id' => 'setTimeEntryId',
        'user_id' => 'setUserId',
        'project_id' => 'setProjectId',
        'task_id' => 'setTaskId',
        'date_utc' => 'setDateUtc',
        'date_entered_utc' => 'setDateEnteredUtc',
        'duration' => 'setDuration',
        'description' => 'setDescription',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'time_entry_id' => 'getTimeEntryId',
        'user_id' => 'getUserId',
        'project_id' => 'getProjectId',
        'task_id' => 'getTaskId',
        'date_utc' => 'getDateUtc',
        'date_entered_utc' => 'getDateEnteredUtc',
        'duration' => 'getDuration',
        'description' => 'getDescription',
        'status' => 'getStatus'
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

    const STATUS_ACTIVE = 'ACTIVE';
    const STATUS_LOCKED = 'LOCKED';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ACTIVE,
            self::STATUS_LOCKED,
        ];
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
        $this->container['time_entry_id'] = isset($data['time_entry_id']) ? $data['time_entry_id'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['project_id'] = isset($data['project_id']) ? $data['project_id'] : null;
        $this->container['task_id'] = isset($data['task_id']) ? $data['task_id'] : null;
        $this->container['date_utc'] = isset($data['date_utc']) ? $data['date_utc'] : null;
        $this->container['date_entered_utc'] = isset($data['date_entered_utc']) ? $data['date_entered_utc'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets time_entry_id
     *
     * @return string|null
     */
    public function getTimeEntryId()
    {
        return $this->container['time_entry_id'];
    }

    /**
     * Sets time_entry_id
     *
     * @param string|null $time_entry_id Identifier of the time entry.
     *
     * @return $this
     */
    public function setTimeEntryId($time_entry_id)
    {

        $this->container['time_entry_id'] = $time_entry_id;

        return $this;
    }



    /**
     * Gets user_id
     *
     * @return string|null
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param string|null $user_id The xero user identifier of the person who logged time.
     *
     * @return $this
     */
    public function setUserId($user_id)
    {

        $this->container['user_id'] = $user_id;

        return $this;
    }



    /**
     * Gets project_id
     *
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->container['project_id'];
    }

    /**
     * Sets project_id
     *
     * @param string|null $project_id Identifier of the project, that the task (which the time entry is logged against) belongs to.
     *
     * @return $this
     */
    public function setProjectId($project_id)
    {

        $this->container['project_id'] = $project_id;

        return $this;
    }



    /**
     * Gets task_id
     *
     * @return string|null
     */
    public function getTaskId()
    {
        return $this->container['task_id'];
    }

    /**
     * Sets task_id
     *
     * @param string|null $task_id Identifier of the task that time entry is logged against.
     *
     * @return $this
     */
    public function setTaskId($task_id)
    {

        $this->container['task_id'] = $task_id;

        return $this;
    }



    /**
     * Gets date_utc
     *
     * @return \DateTime|null
     */
    public function getDateUtc()
    {
        return $this->container['date_utc'];
    }

    /**
     * Sets date_utc
     *
     * @param \DateTime|null $date_utc The date time that time entry is logged on. UTC Date Time in ISO-8601 format.
     *
     * @return $this
     */
    public function setDateUtc($date_utc)
    {

        $this->container['date_utc'] = $date_utc;

        return $this;
    }



    /**
     * Gets date_entered_utc
     *
     * @return \DateTime|null
     */
    public function getDateEnteredUtc()
    {
        return $this->container['date_entered_utc'];
    }

    /**
     * Sets date_entered_utc
     *
     * @param \DateTime|null $date_entered_utc The date time that time entry is created. UTC Date Time in ISO-8601 format. By default it is set to server time.
     *
     * @return $this
     */
    public function setDateEnteredUtc($date_entered_utc)
    {

        $this->container['date_entered_utc'] = $date_entered_utc;

        return $this;
    }



    /**
     * Gets duration
     *
     * @return int|null
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param int|null $duration The duration of logged minutes.
     *
     * @return $this
     */
    public function setDuration($duration)
    {

        $this->container['duration'] = $duration;

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
     * @param string|null $description A description of the time entry.
     *
     * @return $this
     */
    public function setDescription($description)
    {

        $this->container['description'] = $description;

        return $this;
    }



    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status Status of the time entry. By default a time entry is created with status of `ACTIVE`. A `LOCKED` state indicates that the time entry is currently changing state (for example being invoiced). Updates are not allowed when in this state. It will have a status of INVOICED once it is invoiced.
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['status'] = $status;

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
            ProjectObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


