<?php

namespace Skrill\Methods;

use Plenty\Plugin\Log\Loggable;

/**
* Class AdbPaymentMethod
* @package Skrill\Methods
*/
class AdbPaymentMethod extends AbstractPaymentMethod
{
	use Loggable;

	/**
	 * @var name
	 */
	protected $name = 'Direct Bank Transfer';

	/**
	 * @var allowedBillingCountries
	 */
	protected $allowedBillingCountries = array('ARG','BRA');

	/**
	 * @var logoFileName
	 */
	protected $logoFileName = 'adb.png';

	/**
	 * @var settingsType
	 */
	protected $settingsType = 'skrill_adb';

	/**
	 * Get the description of the payment method.
	 *
	 * @return string
	 */
	public function getDescription()
	{
		return 'Banco Santander Rio | Banco Itau | Banco do Brasil | Banco Bradesco';
	}
}
