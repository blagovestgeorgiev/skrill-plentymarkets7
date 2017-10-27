<?php

namespace Skrill\Methods;

use Plenty\Plugin\Log\Loggable;

/**
* Class NpyPaymentMethod
* @package Skrill\Methods
*/
class NpyPaymentMethod extends AbstractPaymentMethod
{
	use Loggable;

	/**
	 * @var name
	 */
	protected $name = 'EPS (Netpay)';

	/**
	 * @var allowedBillingCountries
	 */
	protected $allowedBillingCountries = array('AUT');

	/**
	 * @var logoFileName
	 */
	protected $logoFileName = 'npy.png';

	/**
	 * @var settingsType
	 */
	protected $settingsType = 'skrill_npy';
}
