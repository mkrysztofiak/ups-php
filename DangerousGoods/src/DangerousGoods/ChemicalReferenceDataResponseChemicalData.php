<?php
/**
 * ChemicalReferenceDataResponseChemicalData
 *
 * PHP version 5
 *
 * @category Class
 * @package  UPS\DangerousGoods
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Dangerous Goods Utility
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * 
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.50
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace UPS\DangerousGoods\DangerousGoods;

use \ArrayAccess;
use \UPS\DangerousGoods\ObjectSerializer;

/**
 * ChemicalReferenceDataResponseChemicalData Class Doc Comment
 *
 * @category Class
 * @description Container to hold Chemical Data information.
 * @package  UPS\DangerousGoods
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ChemicalReferenceDataResponseChemicalData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ChemicalReferenceDataResponse_ChemicalData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'chemical_detail' => '\UPS\DangerousGoods\DangerousGoods\ChemicalDataChemicalDetail',
        'proper_shipping_name_detail' => '\UPS\DangerousGoods\DangerousGoods\ChemicalDataProperShippingNameDetail',
        'package_quantity_limit_detail' => '\UPS\DangerousGoods\DangerousGoods\ChemicalDataPackageQuantityLimitDetail[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'chemical_detail' => null,
        'proper_shipping_name_detail' => null,
        'package_quantity_limit_detail' => null
    ];

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
        'chemical_detail' => 'ChemicalDetail',
        'proper_shipping_name_detail' => 'ProperShippingNameDetail',
        'package_quantity_limit_detail' => 'PackageQuantityLimitDetail'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'chemical_detail' => 'setChemicalDetail',
        'proper_shipping_name_detail' => 'setProperShippingNameDetail',
        'package_quantity_limit_detail' => 'setPackageQuantityLimitDetail'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'chemical_detail' => 'getChemicalDetail',
        'proper_shipping_name_detail' => 'getProperShippingNameDetail',
        'package_quantity_limit_detail' => 'getPackageQuantityLimitDetail'
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
        $this->container['chemical_detail'] = isset($data['chemical_detail']) ? $data['chemical_detail'] : null;
        $this->container['proper_shipping_name_detail'] = isset($data['proper_shipping_name_detail']) ? $data['proper_shipping_name_detail'] : null;
        $this->container['package_quantity_limit_detail'] = isset($data['package_quantity_limit_detail']) ? $data['package_quantity_limit_detail'] : null;
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
     * Gets chemical_detail
     *
     * @return \UPS\DangerousGoods\DangerousGoods\ChemicalDataChemicalDetail
     */
    public function getChemicalDetail()
    {
        return $this->container['chemical_detail'];
    }

    /**
     * Sets chemical_detail
     *
     * @param \UPS\DangerousGoods\DangerousGoods\ChemicalDataChemicalDetail $chemical_detail chemical_detail
     *
     * @return $this
     */
    public function setChemicalDetail($chemical_detail)
    {
        $this->container['chemical_detail'] = $chemical_detail;

        return $this;
    }

    /**
     * Gets proper_shipping_name_detail
     *
     * @return \UPS\DangerousGoods\DangerousGoods\ChemicalDataProperShippingNameDetail
     */
    public function getProperShippingNameDetail()
    {
        return $this->container['proper_shipping_name_detail'];
    }

    /**
     * Sets proper_shipping_name_detail
     *
     * @param \UPS\DangerousGoods\DangerousGoods\ChemicalDataProperShippingNameDetail $proper_shipping_name_detail proper_shipping_name_detail
     *
     * @return $this
     */
    public function setProperShippingNameDetail($proper_shipping_name_detail)
    {
        $this->container['proper_shipping_name_detail'] = $proper_shipping_name_detail;

        return $this;
    }

    /**
     * Gets package_quantity_limit_detail
     *
     * @return \UPS\DangerousGoods\DangerousGoods\ChemicalDataPackageQuantityLimitDetail[]
     */
    public function getPackageQuantityLimitDetail()
    {
        return $this->container['package_quantity_limit_detail'];
    }

    /**
     * Sets package_quantity_limit_detail
     *
     * @param \UPS\DangerousGoods\DangerousGoods\ChemicalDataPackageQuantityLimitDetail[] $package_quantity_limit_detail package_quantity_limit_detail
     *
     * @return $this
     */
    public function setPackageQuantityLimitDetail($package_quantity_limit_detail)
    {
        $this->container['package_quantity_limit_detail'] = $package_quantity_limit_detail;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
