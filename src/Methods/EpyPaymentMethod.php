<?php

namespace Skrill\Methods;

use Plenty\Plugin\Log\Loggable;

/**
* Class EpyPaymentMethod
* @package Skrill\Methods
*/
class EpyPaymentMethod extends AbstractPaymentMethod
{
	use Loggable;

	/**
	 * @var name
	 */
	protected $name = 'ePay.bg';

	/**
	 * @var allowedBillingCountries
	 */
	protected $allowedBillingCountries = array('BGR');

	/**
	 * @var logoFileName
	 */
	protected $logoFileName = 'epy.png';

	/**
	 * @var settingsType
	 */
	protected $settingsType = 'skrill_epy';
}
