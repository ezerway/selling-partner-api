<?php
/**
 * RemovalShipmentItemAdjustment
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Finances
 *
 * The Selling Partner API for Finances helps you obtain financial information relevant to a seller's business. You can obtain financial events for a given order, financial event group, or date range without having to wait until a statement period closes. You can also obtain financial event groups for a given date range.
 *
 * The version of the OpenAPI document: v0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\Finances;

use \ArrayAccess;
use \SellingPartnerApi\ObjectSerializer;
use \SellingPartnerApi\Model\ModelInterface;

/**
 * RemovalShipmentItemAdjustment Class Doc Comment
 *
 * @category Class
 * @description Item-level information for a removal shipment item adjustment.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class RemovalShipmentItemAdjustment implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RemovalShipmentItemAdjustment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'removal_shipment_item_id' => 'string',
        'tax_collection_model' => 'string',
        'fulfillment_network_sku' => 'string',
        'adjusted_quantity' => 'int',
        'revenue_adjustment' => '\SellingPartnerApi\Model\Finances\Currency',
        'tax_amount_adjustment' => '\SellingPartnerApi\Model\Finances\Currency',
        'tax_withheld_adjustment' => '\SellingPartnerApi\Model\Finances\Currency'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'removal_shipment_item_id' => null,
        'tax_collection_model' => null,
        'fulfillment_network_sku' => null,
        'adjusted_quantity' => 'int32',
        'revenue_adjustment' => null,
        'tax_amount_adjustment' => null,
        'tax_withheld_adjustment' => null
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
        'removal_shipment_item_id' => 'RemovalShipmentItemId',
        'tax_collection_model' => 'TaxCollectionModel',
        'fulfillment_network_sku' => 'FulfillmentNetworkSKU',
        'adjusted_quantity' => 'AdjustedQuantity',
        'revenue_adjustment' => 'RevenueAdjustment',
        'tax_amount_adjustment' => 'TaxAmountAdjustment',
        'tax_withheld_adjustment' => 'TaxWithheldAdjustment'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'removal_shipment_item_id' => 'setRemovalShipmentItemId',
        'tax_collection_model' => 'setTaxCollectionModel',
        'fulfillment_network_sku' => 'setFulfillmentNetworkSku',
        'adjusted_quantity' => 'setAdjustedQuantity',
        'revenue_adjustment' => 'setRevenueAdjustment',
        'tax_amount_adjustment' => 'setTaxAmountAdjustment',
        'tax_withheld_adjustment' => 'setTaxWithheldAdjustment'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'removal_shipment_item_id' => 'getRemovalShipmentItemId',
        'tax_collection_model' => 'getTaxCollectionModel',
        'fulfillment_network_sku' => 'getFulfillmentNetworkSku',
        'adjusted_quantity' => 'getAdjustedQuantity',
        'revenue_adjustment' => 'getRevenueAdjustment',
        'tax_amount_adjustment' => 'getTaxAmountAdjustment',
        'tax_withheld_adjustment' => 'getTaxWithheldAdjustment'
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
        $this->container['removal_shipment_item_id'] = $data['removal_shipment_item_id'] ?? null;
        $this->container['tax_collection_model'] = $data['tax_collection_model'] ?? null;
        $this->container['fulfillment_network_sku'] = $data['fulfillment_network_sku'] ?? null;
        $this->container['adjusted_quantity'] = $data['adjusted_quantity'] ?? null;
        $this->container['revenue_adjustment'] = $data['revenue_adjustment'] ?? null;
        $this->container['tax_amount_adjustment'] = $data['tax_amount_adjustment'] ?? null;
        $this->container['tax_withheld_adjustment'] = $data['tax_withheld_adjustment'] ?? null;
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
     * Gets removal_shipment_item_id
     *
     * @return string|null
     */
    public function getRemovalShipmentItemId()
    {
        return $this->container['removal_shipment_item_id'];
    }

    /**
     * Sets removal_shipment_item_id
     *
     * @param string|null $removal_shipment_item_id An identifier for an item in a removal shipment.
     *
     * @return self
     */
    public function setRemovalShipmentItemId($removal_shipment_item_id)
    {
        $this->container['removal_shipment_item_id'] = $removal_shipment_item_id;

        return $this;
    }

    /**
     * Gets tax_collection_model
     *
     * @return string|null
     */
    public function getTaxCollectionModel()
    {
        return $this->container['tax_collection_model'];
    }

    /**
     * Sets tax_collection_model
     *
     * @param string|null $tax_collection_model The tax collection model applied to the item. Possible values: * MarketplaceFacilitator - Tax is withheld and remitted to the taxing authority by Amazon on behalf of the seller. * Standard - Tax is paid to the seller and not remitted to the taxing authority by Amazon.
     *
     * @return self
     */
    public function setTaxCollectionModel($tax_collection_model)
    {
        $this->container['tax_collection_model'] = $tax_collection_model;

        return $this;
    }

    /**
     * Gets fulfillment_network_sku
     *
     * @return string|null
     */
    public function getFulfillmentNetworkSku()
    {
        return $this->container['fulfillment_network_sku'];
    }

    /**
     * Sets fulfillment_network_sku
     *
     * @param string|null $fulfillment_network_sku The Amazon fulfillment network SKU for the item.
     *
     * @return self
     */
    public function setFulfillmentNetworkSku($fulfillment_network_sku)
    {
        $this->container['fulfillment_network_sku'] = $fulfillment_network_sku;

        return $this;
    }

    /**
     * Gets adjusted_quantity
     *
     * @return int|null
     */
    public function getAdjustedQuantity()
    {
        return $this->container['adjusted_quantity'];
    }

    /**
     * Sets adjusted_quantity
     *
     * @param int|null $adjusted_quantity Adjusted quantity of removal shipmentItemAdjustment items.
     *
     * @return self
     */
    public function setAdjustedQuantity($adjusted_quantity)
    {
        $this->container['adjusted_quantity'] = $adjusted_quantity;

        return $this;
    }

    /**
     * Gets revenue_adjustment
     *
     * @return \SellingPartnerApi\Model\Finances\Currency|null
     */
    public function getRevenueAdjustment()
    {
        return $this->container['revenue_adjustment'];
    }

    /**
     * Sets revenue_adjustment
     *
     * @param \SellingPartnerApi\Model\Finances\Currency|null $revenue_adjustment revenue_adjustment
     *
     * @return self
     */
    public function setRevenueAdjustment($revenue_adjustment)
    {
        $this->container['revenue_adjustment'] = $revenue_adjustment;

        return $this;
    }

    /**
     * Gets tax_amount_adjustment
     *
     * @return \SellingPartnerApi\Model\Finances\Currency|null
     */
    public function getTaxAmountAdjustment()
    {
        return $this->container['tax_amount_adjustment'];
    }

    /**
     * Sets tax_amount_adjustment
     *
     * @param \SellingPartnerApi\Model\Finances\Currency|null $tax_amount_adjustment tax_amount_adjustment
     *
     * @return self
     */
    public function setTaxAmountAdjustment($tax_amount_adjustment)
    {
        $this->container['tax_amount_adjustment'] = $tax_amount_adjustment;

        return $this;
    }

    /**
     * Gets tax_withheld_adjustment
     *
     * @return \SellingPartnerApi\Model\Finances\Currency|null
     */
    public function getTaxWithheldAdjustment()
    {
        return $this->container['tax_withheld_adjustment'];
    }

    /**
     * Sets tax_withheld_adjustment
     *
     * @param \SellingPartnerApi\Model\Finances\Currency|null $tax_withheld_adjustment tax_withheld_adjustment
     *
     * @return self
     */
    public function setTaxWithheldAdjustment($tax_withheld_adjustment)
    {
        $this->container['tax_withheld_adjustment'] = $tax_withheld_adjustment;

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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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


