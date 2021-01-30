<?php
/**
 * EmployeeOpeningBalance
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Xero Payroll NZ
 *
 * This is the Xero Payroll API for orgs in the NZ region.
 *
 * Contact: api@xero.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace XeroAPI\XeroPHP\Models\PayrollNz;

use \ArrayAccess;
use \XeroAPI\XeroPHP\PayrollNzObjectSerializer;
use \XeroAPI\XeroPHP\StringUtil;
/**
 * EmployeeOpeningBalance Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class EmployeeOpeningBalance implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EmployeeOpeningBalance';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'period_end_date' => '\DateTime',
        'days_paid' => 'int',
        'unpaid_weeks' => 'int',
        'gross_earnings' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'period_end_date' => 'date',
        'days_paid' => 'int32',
        'unpaid_weeks' => 'int32',
        'gross_earnings' => 'double'
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
        'period_end_date' => 'periodEndDate',
        'days_paid' => 'daysPaid',
        'unpaid_weeks' => 'unpaidWeeks',
        'gross_earnings' => 'grossEarnings'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'period_end_date' => 'setPeriodEndDate',
        'days_paid' => 'setDaysPaid',
        'unpaid_weeks' => 'setUnpaidWeeks',
        'gross_earnings' => 'setGrossEarnings'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'period_end_date' => 'getPeriodEndDate',
        'days_paid' => 'getDaysPaid',
        'unpaid_weeks' => 'getUnpaidWeeks',
        'gross_earnings' => 'getGrossEarnings'
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
        $this->container['period_end_date'] = isset($data['period_end_date']) ? $data['period_end_date'] : null;
        $this->container['days_paid'] = isset($data['days_paid']) ? $data['days_paid'] : null;
        $this->container['unpaid_weeks'] = isset($data['unpaid_weeks']) ? $data['unpaid_weeks'] : null;
        $this->container['gross_earnings'] = isset($data['gross_earnings']) ? $data['gross_earnings'] : null;
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
     * Gets period_end_date
     *
     * @return \DateTime|null
     */
    public function getPeriodEndDate()
    {
        return $this->container['period_end_date'];
    }

    /**
     * Sets period_end_date
     *
     * @param \DateTime|null $period_end_date The opening balance period end date.
     *
     * @return $this
     */
    public function setPeriodEndDate($period_end_date)
    {

        $this->container['period_end_date'] = $period_end_date;

        return $this;
    }



    /**
     * Gets days_paid
     *
     * @return int|null
     */
    public function getDaysPaid()
    {
        return $this->container['days_paid'];
    }

    /**
     * Sets days_paid
     *
     * @param int|null $days_paid The paid number of days.
     *
     * @return $this
     */
    public function setDaysPaid($days_paid)
    {

        $this->container['days_paid'] = $days_paid;

        return $this;
    }



    /**
     * Gets unpaid_weeks
     *
     * @return int|null
     */
    public function getUnpaidWeeks()
    {
        return $this->container['unpaid_weeks'];
    }

    /**
     * Sets unpaid_weeks
     *
     * @param int|null $unpaid_weeks The number of unpaid weeks.
     *
     * @return $this
     */
    public function setUnpaidWeeks($unpaid_weeks)
    {

        $this->container['unpaid_weeks'] = $unpaid_weeks;

        return $this;
    }



    /**
     * Gets gross_earnings
     *
     * @return double|null
     */
    public function getGrossEarnings()
    {
        return $this->container['gross_earnings'];
    }

    /**
     * Sets gross_earnings
     *
     * @param double|null $gross_earnings The gross earnings during the period.
     *
     * @return $this
     */
    public function setGrossEarnings($gross_earnings)
    {

        $this->container['gross_earnings'] = $gross_earnings;

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
            PayrollNzObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


