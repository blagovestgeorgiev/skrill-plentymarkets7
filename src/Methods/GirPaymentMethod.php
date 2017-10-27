<?php

namespace Skrill\Methods;

use Plenty\Plugin\Log\Loggable;

/**
* Class GirPaymentMethod
* @package Skrill\Methods
*/
class GirPaymentMethod extends AbstractPaymentMethod
{
	use Loggable;

	/**
	 * @var name
	 */
	protected $name = 'Giropay';

	/**
	 * @var allowedBillingCountries
	 */
	protected $allowedBillingCountries = array('DEU');

	/**
	 * @var logoFileName
	 */
	protected $logoFileName = 'gir.png';

	/**
	 * @var settingsType
	 */
	protected $settingsType = 'skrill_gir';
}
