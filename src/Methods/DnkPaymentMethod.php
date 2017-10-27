<?php

namespace Skrill\Methods;

use Plenty\Plugin\Log\Loggable;

/**
* Class DnkPaymentMethod
* @package Skrill\Methods
*/
class DnkPaymentMethod extends AbstractPaymentMethod
{
	use Loggable;

	/**
	 * @var name
	 */
	protected $name = 'Dankort by Visa';

	/**
	 * @var allowedBillingCountries
	 */
	protected $allowedBillingCountries = array('DNK');

	/**
	 * @var logoFileName
	 */
	protected $logoFileName = 'dnk.png';

	/**
	 * @var settingsType
	 */
	protected $settingsType = 'skrill_dnk';
}
