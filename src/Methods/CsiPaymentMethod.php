<?php

namespace Skrill\Methods;

use Plenty\Plugin\Log\Loggable;

/**
* Class CsiPaymentMethod
* @package Skrill\Methods
*/
class CsiPaymentMethod extends AbstractPaymentMethod
{
	use Loggable;

	/**
	 * @var name
	 */
	protected $name = 'CartaSi by Visa';

	/**
	 * @var allowedBillingCountries
	 */
	protected $allowedBillingCountries = array('ITA');

	/**
	 * @var logoFileName
	 */
	protected $logoFileName = 'csi.png';

	/**
	 * @var settingsType
	 */
	protected $settingsType = 'skrill_csi';
}
