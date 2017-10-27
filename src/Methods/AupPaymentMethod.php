<?php

namespace Skrill\Methods;

use Plenty\Plugin\Log\Loggable;

/**
* Class AupPaymentMethod
* @package Skrill\Methods
*/
class AupPaymentMethod extends AbstractPaymentMethod
{
	use Loggable;

	/**
	 * @var name
	 */
	protected $name = 'Unionpay';

	/**
	 * @var allowedBillingCountries
	 */
	protected $allowedBillingCountries = array('CHN');

	/**
	 * @var logoFileName
	 */
	protected $logoFileName = 'aup.png';

	/**
	 * @var settingsType
	 */
	protected $settingsType = 'skrill_aup';
}
