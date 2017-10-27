<?php

namespace Skrill\Methods;

use Plenty\Plugin\Log\Loggable;

/**
* Class DidPaymentMethod
* @package Skrill\Methods
*/
class DidPaymentMethod extends AbstractPaymentMethod
{
	use Loggable;

	/**
	 * @var name
	 */
	protected $name = 'Direct Debit / ELV';

	/**
	 * @var allowedBillingCountries
	 */
	protected $allowedBillingCountries = array('DEU');

	/**
	 * @var logoFileName
	 */
	protected $logoFileName = 'did.png';

	/**
	 * @var settingsType
	 */
	protected $settingsType = 'skrill_did';
}
