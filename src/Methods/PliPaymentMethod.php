<?php

namespace Skrill\Methods;

use Plenty\Plugin\Log\Loggable;

/**
* Class PliPaymentMethod
* @package Skrill\Methods
*/
class PliPaymentMethod extends AbstractPaymentMethod
{
	use Loggable;

	/**
	 * @var name
	 */
	protected $name = 'POLi';

	/**
	 * @var allowedBillingCountries
	 */
	protected $allowedBillingCountries = array('AUS');

	/**
	 * @var logoFileName
	 */
	protected $logoFileName = 'pli.png';

	/**
	 * @var settingsType
	 */
	protected $settingsType = 'skrill_pli';
}
