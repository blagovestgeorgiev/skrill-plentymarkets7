<?php

namespace Skrill\Methods;

use Plenty\Plugin\Log\Loggable;

/**
* Class PspPaymentMethod
* @package Skrill\Methods
*/
class PspPaymentMethod extends AbstractPaymentMethod
{
	use Loggable;

	/**
	 * @var name
	 */
	protected $name = 'PostePay by Visa';

	/**
	 * @var allowedBillingCountries
	 */
	protected $allowedBillingCountries = array('ITA');

	/**
	 * @var logoFileName
	 */
	protected $logoFileName = 'psp.png';

	/**
	 * @var settingsType
	 */
	protected $settingsType = 'skrill_psp';
}
