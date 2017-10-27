<?php

namespace Skrill\Methods;

use Plenty\Plugin\Log\Loggable;

/**
* Class MscPaymentMethod
* @package Skrill\Methods
*/
class MscPaymentMethod extends AbstractPaymentMethod
{
	use Loggable;

	/**
	 * @var name
	 */
	protected $name = 'MasterCard';

	/**
	 * @var logoFileName
	 */
	protected $logoFileName = 'msc.png';

	/**
	 * @var settingsType
	 */
	protected $settingsType = 'skrill_msc';
}
