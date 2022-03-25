<?php

namespace DTS\eBaySDK\Account\Types;

/**
 * @property string $returnMethod
 * @property DTS\eBaySDK\Account\Types\TimeDuration $returnPeriod
 * @property boolean $returnsAccepted
 * @property string $returnShippingCostPayer
 */
class InternationalReturnOverrideType extends \DTS\eBaySDK\Types\BaseType
{
	/**
	 * @var array Properties belonging to objects of this class.
	 */
	private static $propertyTypes = [
		'returnMethod' => [
			'type' => 'string',
			'repeatable' => false,
			'attribute' => false,
			'elementName' => 'returnMethod'
		],
		'returnPeriod' => [
			'type' => 'DTS\eBaySDK\Account\Types\TimeDuration',
			'repeatable' => false,
			'attribute' => false,
			'elementName' => 'returnPeriod'
		],
		'returnsAccepted' => [
			'type' => 'boolean',
			'repeatable' => false,
			'attribute' => false,
			'elementName' => 'returnsAccepted'
		],
		'returnShippingCostPayer' => [
			'type' => 'string',
			'repeatable' => false,
			'attribute' => false,
			'elementName' => 'returnShippingCostPayer'
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
