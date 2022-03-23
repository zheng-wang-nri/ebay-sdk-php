<?php

namespace DTS\eBaySDK\Inventory\Types;

/**
 *
 * @property \DTS\eBaySDK\Inventory\Types\Availability $availability
 * @property \DTS\eBaySDK\Inventory\Enums\ConditionEnum $condition
 * @property string $conditionDescription
 * @property string[] $inventoryItemGroupKeys
 * @property \DTS\eBaySDK\Inventory\Enums\LocaleEnum $locale
 * @property \DTS\eBaySDK\Inventory\Types\PackageWeightAndSize $packageWeightAndSize
 * @property \DTS\eBaySDK\Inventory\Types\Product $product
 * @property string $sku
 */
class InventoryItemWithSkuLocaleGroupKeys extends \DTS\eBaySDK\Types\BaseType
{
	/**
	 * @var array Properties belonging to objects of this class.
	 */
	private static $propertyTypes = [
		'availability' => [
			'type' => 'DTS\eBaySDK\Inventory\Types\Availability',
			'repeatable' => false,
			'attribute' => false,
			'elementName' => 'availability'
		],
		'condition' => [
			'type' => 'DTS\eBaySDK\Inventory\Enums\ConditionEnum',
			'repeatable' => false,
			'attribute' => false,
			'elementName' => 'condition'
		],
		'conditionDescription' => [
			'type' => 'string',
			'repeatable' => false,
			'attribute' => false,
			'elementName' => 'conditionDescription'
		],
		'inventoryItemGroupKeys' => [
			'type' => 'string',
			'repeatable' => true,
			'attribute' => false,
			'elementName' => 'inventoryItemGroupKeys'
		],
		'locale' => [
			'type' => '\DTS\eBaySDK\Inventory\Enums\LocaleEnum',
			'repeatable' => false,
			'attribute' => false,
			'elementName' => 'locale'
		],
		'packageWeightAndSize' => [
			'type' => '\DTS\eBaySDK\Inventory\Types\PackageWeightAndSize',
			'repeatable' => false,
			'attribute' => false,
			'elementName' => 'packageWeightAndSize'
		],
		'product' => [
			'type' => '\DTS\eBaySDK\Inventory\Types\Product',
			'repeatable' => false,
			'attribute' => false,
			'elementName' => 'product'
		],
		'sku' => [
			'type' => 'string',
			'repeatable' => false,
			'attribute' => false,
			'elementName' => 'sku'
		]
	];

	/**
	 * @param array $values Optional properties and values to assign to the object.
	 */
	public function __construct(array $values = [])
	{
		list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

		parent::__construct($parentValues);

		if (!array_key_exists(__CLASS__, self::$properties)) {
			self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$properties);
		}

		$this->setValues(__CLASS__, $childValues);
	}
}
