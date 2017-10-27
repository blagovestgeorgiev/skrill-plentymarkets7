<?php

namespace Skrill\Methods;

use Plenty\Plugin\Log\Loggable;

/**
* Class VsaPaymentMethod
* @package Skrill\Methods
*/
class VsaPaymentMethod extends AbstractPaymentMethod
{
	use Loggable;

	/**
	 * @var name
	 */
	protected $name = 'Visa';

	/**
	 * @var logoFileName
	 */
	protected $logoFileName = 'vsa.png';

	/**
	 * @var settingsType
	 */
	protected $settingsType = 'skrill_vsa';
}
