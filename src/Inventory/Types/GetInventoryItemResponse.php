<?php

namespace DTS\eBaySDK\Inventory\Types;

/**
 * @property \DTS\eBaySDK\Inventory\Types\ErrorDetailV3 $errors
 * @property \DTS\eBaySDK\Inventory\Types\InventoryItemWithSkuLocaleGroupKeys $inventoryItem
 * @property string $sku
 * @property string $statusCode
 * @property \DTS\eBaySDK\Inventory\Types\ErrorDetailV3 $warnings
 */

class GetInventoryItemResponse extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'errors' => [
            'type' => 'DTS\eBaySDK\Inventory\Types\ErrorDetailV3',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'errors',
        ],
        'inventoryItem' => [
            'type' => 'DTS\eBaySDK\Inventory\Types\InventoryItemWithSkuLocaleGroupKeys',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'inventoryItem',
        ],
        'sku' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'sku',
        ],
        'statusCode' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'statusCode',
        ],
    ];

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = [])
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
