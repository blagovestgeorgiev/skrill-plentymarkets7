<?php

namespace Skrill\Methods;

use Plenty\Plugin\Log\Loggable;

/**
* Class AmxPaymentMethod
* @package Skrill\Methods
*/
class AmxPaymentMethod extends AbstractPaymentMethod
{
	use Loggable;

	/**
	 * @var name
	 */
	protected $name = 'American Express';

	/**
	 * @var exceptedBillingCountries
	 */
	protected $exceptedBillingCountries = array('USA');

	/**
	 * @var logoFileName
	 */
	protected $logoFileName = 'amx.png';

	/**
	 * @var settingsType
	 */
	protected $settingsType = 'skrill_amx';
}
