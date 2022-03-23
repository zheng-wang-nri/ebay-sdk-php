<?php

namespace DTS\eBaySDK\Inventory\Types;

use DTS\eBaySDK\HttpHeadersTrait;
use DTS\eBaySDK\StatusCodeTrait;

/**
 *
 * @property \DTS\eBaySDK\Inventory\Types\ErrorDetailV3[] $errors
 * @property \DTS\eBaySDK\Inventory\Types\ErrorDetailV3[] $warnings
 */
class BulkGetInventoryItemRestResponse extends \DTS\eBaySDK\Inventory\Types\BulkGetInventoryItemResponse
{
	use StatusCodeTrait;
	use HttpHeadersTrait;

	/**
	 * @var array Properties belonging to objects of this class.
	 */
	private static $propertyTypes = [
		'errors' => [
			'type' => 'DTS\eBaySDK\Inventory\Types\ErrorDetailV3',
			'repeatable' => true,
			'attribute' => false,
			'elementName' => 'errors'
		]
	];

	/**
	 * @param array $values Optional properties and values to assign to the object.
	 * @param int $statusCode Status code
	 * @param array $headers HTTP Response headers.
	 */
	public function __construct(array $values = [], $statusCode = 200, array $headers = [])
	{
		list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

		parent::__construct($parentValues);

		if (!array_key_exists(__CLASS__, self::$properties)) {
			self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
		}

		$this->setValues(__CLASS__, $childValues);

		$this->statusCode = (int)$statusCode;

		$this->setHeaders($headers);
	}
}
