<?php

namespace DTS\eBaySDK\Inventory\Types;

class BulkCreateOrReplaceInventoryItemRestResponse extends \DTS\eBaySDK\Inventory\Types\BulkCreateOrReplaceInventoryItemResponse
{
	/**
	 * @var array Properties belonging to objects of this class.
	 */
	private static $propertyTypes = [];

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
