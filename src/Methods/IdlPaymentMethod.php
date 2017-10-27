<?php

namespace Skrill\Methods;

use Plenty\Plugin\Log\Loggable;

/**
* Class IdlPaymentMethod
* @package Skrill\Methods
*/
class IdlPaymentMethod extends AbstractPaymentMethod
{
	use Loggable;

	/**
	 * @var name
	 */
	protected $name = 'iDEAL';

	/**
	 * @var allowedBillingCountries
	 */
	protected $allowedBillingCountries = array('NLD');

	/**
	 * @var logoFileName
	 */
	protected $logoFileName = 'idl.png';

	/**
	 * @var settingsType
	 */
	protected $settingsType = 'skrill_idl';
}
