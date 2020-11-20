<?php
/**
 * TimesheetLine
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Xero Payroll UK
 *
 * This is the Xero Payroll API for orgs in the UK region.
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

namespace XeroAPI\XeroPHP\Models\PayrollUk;

use \ArrayAccess;
use \XeroAPI\XeroPHP\PayrollUkObjectSerializer;
use \XeroAPI\XeroPHP\StringUtil;
/**
 * TimesheetLine Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TimesheetLine implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TimesheetLine';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'timesheet_line_id' => 'string',
        'date' => '\DateTime',
        'earnings_rate_id' => 'string',
        'tracking_item_id' => 'string',
        'number_of_units' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'timesheet_line_id' => 'uuid',
        'date' => 'date',
        'earnings_rate_id' => 'uuid',
        'tracking_item_id' => 'uuid',
        'number_of_units' => 'double'
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
        'timesheet_line_id' => 'timesheetLineID',
        'date' => 'date',
        'earnings_rate_id' => 'earningsRateID',
        'tracking_item_id' => 'trackingItemID',
        'number_of_units' => 'numberOfUnits'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'timesheet_line_id' => 'setTimesheetLineId',
        'date' => 'setDate',
        'earnings_rate_id' => 'setEarningsRateId',
        'tracking_item_id' => 'setTrackingItemId',
        'number_of_units' => 'setNumberOfUnits'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'timesheet_line_id' => 'getTimesheetLineId',
        'date' => 'getDate',
        'earnings_rate_id' => 'getEarningsRateId',
        'tracking_item_id' => 'getTrackingItemId',
        'number_of_units' => 'getNumberOfUnits'
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
        $this->container['timesheet_line_id'] = isset($data['timesheet_line_id']) ? $data['timesheet_line_id'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['earnings_rate_id'] = isset($data['earnings_rate_id']) ? $data['earnings_rate_id'] : null;
        $this->container['tracking_item_id'] = isset($data['tracking_item_id']) ? $data['tracking_item_id'] : null;
        $this->container['number_of_units'] = isset($data['number_of_units']) ? $data['number_of_units'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['date'] === null) {
            $invalidProperties[] = "'date' can't be null";
        }
        if ($this->container['earnings_rate_id'] === null) {
            $invalidProperties[] = "'earnings_rate_id' can't be null";
        }
        if ($this->container['number_of_units'] === null) {
            $invalidProperties[] = "'number_of_units' can't be null";
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
     * Gets timesheet_line_id
     *
     * @return string|null
     */
    public function getTimesheetLineId()
    {
        return $this->container['timesheet_line_id'];
    }

    /**
     * Sets timesheet_line_id
     *
     * @param string|null $timesheet_line_id The Xero identifier for a Timesheet Line
     *
     * @return $this
     */
    public function setTimesheetLineId($timesheet_line_id)
    {

        $this->container['timesheet_line_id'] = $timesheet_line_id;

        return $this;
    }



    /**
     * Gets date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime $date The Date that this Timesheet Line is for (YYYY-MM-DD)
     *
     * @return $this
     */
    public function setDate($date)
    {

        $this->container['date'] = $date;

        return $this;
    }



    /**
     * Gets earnings_rate_id
     *
     * @return string
     */
    public function getEarningsRateId()
    {
        return $this->container['earnings_rate_id'];
    }

    /**
     * Sets earnings_rate_id
     *
     * @param string $earnings_rate_id The Xero identifier for the Earnings Rate that the Timesheet is for
     *
     * @return $this
     */
    public function setEarningsRateId($earnings_rate_id)
    {

        $this->container['earnings_rate_id'] = $earnings_rate_id;

        return $this;
    }



    /**
     * Gets tracking_item_id
     *
     * @return string|null
     */
    public function getTrackingItemId()
    {
        return $this->container['tracking_item_id'];
    }

    /**
     * Sets tracking_item_id
     *
     * @param string|null $tracking_item_id The Xero identifier for the Tracking Item that the Timesheet is for
     *
     * @return $this
     */
    public function setTrackingItemId($tracking_item_id)
    {

        $this->container['tracking_item_id'] = $tracking_item_id;

        return $this;
    }



    /**
     * Gets number_of_units
     *
     * @return double
     */
    public function getNumberOfUnits()
    {
        return $this->container['number_of_units'];
    }

    /**
     * Sets number_of_units
     *
     * @param double $number_of_units The Number of Units of the Timesheet Line
     *
     * @return $this
     */
    public function setNumberOfUnits($number_of_units)
    {

        $this->container['number_of_units'] = $number_of_units;

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
            PayrollUkObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


