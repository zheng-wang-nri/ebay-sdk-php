<?php

namespace DTS\eBaySDK\Inventory\Types;

class InventoryItemResponse extends \DTS\eBaySDK\Types\BaseType
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
		'locale' => [
			'type' => 'string',
			'repeatable' => false,
			'attribute' => false,
			'elementName' => 'locale',
		],
		'statusCode' => [
			'type' => 'integer',
			'repeatable' => false,
			'attribute' => false,
			'elementName' => 'statueCode'
		],
		'warnings' => [
			'type' => 'DTS\eBaySDK\Inventory\Types\ErrorDetailV3',
			'repeatable' => true,
			'attribute' => false,
			'elementName' => 'wawrnings'
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
			self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
		}

		$this->setValues(__CLASS__, $childValues);
	}
}
