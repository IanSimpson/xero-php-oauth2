<?php
/**
 * TimesheetStatus
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Xero Payroll AU
 *
 * This is the Xero Payroll API for orgs in Australia region.
 *
 * OpenAPI spec version: 2.1.1
 * Contact: api@xero.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace XeroAPI\XeroPHP\Models\PayrollAu;
use \XeroAPI\XeroPHP\PayrollAuObjectSerializer;
use \XeroAPI\XeroPHP\StringUtil;
/**
 * TimesheetStatus Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TimesheetStatus
{
    /**
     * Possible values of this enum
     */
    const DRAFT = 'DRAFT';
    const PROCESSED = 'PROCESSED';
    const APPROVED = 'APPROVED';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DRAFT,
            self::PROCESSED,
            self::APPROVED,
        ];
    }
}


