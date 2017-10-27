<?php

namespace Skrill\Methods;

use Plenty\Plugin\Log\Loggable;

/**
* Class MaePaymentMethod
* @package Skrill\Methods
*/
class MaePaymentMethod extends AbstractPaymentMethod
{
	use Loggable;

	/**
	 * @var name
	 */
	protected $name = 'Maestro';

	/**
	 * @var allowedBillingCountries
	 */
	protected $allowedBillingCountries = array('GBR','ESP','IRL','AUT');

	/**
	 * @var logoFileName
	 */
	protected $logoFileName = 'mae.png';

	/**
	 * @var settingsType
	 */
	protected $settingsType = 'skrill_mae';
}
