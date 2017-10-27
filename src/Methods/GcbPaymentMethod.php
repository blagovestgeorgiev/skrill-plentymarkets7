<?php

namespace Skrill\Methods;

use Plenty\Plugin\Log\Loggable;

/**
* Class GcbPaymentMethod
* @package Skrill\Methods
*/
class GcbPaymentMethod extends AbstractPaymentMethod
{
	use Loggable;

	/**
	 * @var name
	 */
	protected $name = 'Carte Bleue by Visa';

	/**
	 * @var allowedBillingCountries
	 */
	protected $allowedBillingCountries = array('FRA');

	/**
	 * @var logoFileName
	 */
	protected $logoFileName = 'gcb.png';

	/**
	 * @var settingsType
	 */
	protected $settingsType = 'skrill_gcb';
}
