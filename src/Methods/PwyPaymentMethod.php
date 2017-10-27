<?php

namespace Skrill\Methods;

use Plenty\Plugin\Log\Loggable;

/**
* Class PwyPaymentMethod
* @package Skrill\Methods
*/
class PwyPaymentMethod extends AbstractPaymentMethod
{
	use Loggable;

	/**
	 * @var name
	 */
	protected $name = 'Przelewy24';

	/**
	 * @var allowedBillingCountries
	 */
	protected $allowedBillingCountries = array('POL');

	/**
	 * @var logoFileName
	 */
	protected $logoFileName = 'pwy.png';

	/**
	 * @var settingsType
	 */
	protected $settingsType = 'skrill_pwy';
}
