<?php

namespace Skrill\Methods;

use Plenty\Plugin\Log\Loggable;

/**
* Class EbtPaymentMethod
* @package Skrill\Methods
*/
class EbtPaymentMethod extends AbstractPaymentMethod
{
	use Loggable;

	/**
	 * @var name
	 */
	protected $name = 'Nordea Solo';

	/**
	 * @var allowedBillingCountries
	 */
	protected $allowedBillingCountries = array('SWE');

	/**
	 * @var logoFileName
	 */
	protected $logoFileName = 'ebt.png';

	/**
	 * @var settingsType
	 */
	protected $settingsType = 'skrill_ebt';
}
