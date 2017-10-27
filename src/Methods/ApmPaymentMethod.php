<?php

namespace Skrill\Methods;

use Plenty\Plugin\Log\Loggable;

/**
* Class ApmPaymentMethod
* @package Skrill\Methods
*/
class ApmPaymentMethod extends AbstractPaymentMethod
{
	use Loggable;

	/**
	 * @var name
	 */
	protected $name = 'All Credit Card and Alternative Payment Methods';

	/**
	 * @var logoFileName
	 */
	protected $logoFileName = 'apm.png';

	/**
	 * @var settingsType
	 */
	protected $settingsType = 'skrill_apm';

	/**
	 * Check whether the payment setting is show separately
	 *
	 * @return bool
	 */
	protected function isShowSeparately()
	{
		return true;
	}
}
