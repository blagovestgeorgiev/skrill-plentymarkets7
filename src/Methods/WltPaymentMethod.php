<?php

namespace Skrill\Methods;

use Plenty\Plugin\Log\Loggable;

/**
* Class WltPaymentMethod
* @package Skrill\Methods
*/
class WltPaymentMethod extends AbstractPaymentMethod
{
	use Loggable;

	/**
	 * @var name
	 */
	protected $name = 'Skrill Wallet';

	/**
	 * @var logoFileName
	 */
	protected $logoFileName = 'wlt.png';

	/**
	 * @var settingsType
	 */
	protected $settingsType = 'skrill_wlt';
}
