<?php

namespace Skrill\Methods;

use Plenty\Plugin\Log\Loggable;

/**
* Class AobPaymentMethod
* @package Skrill\Methods
*/
class AobPaymentMethod extends AbstractPaymentMethod
{
	use Loggable;

	/**
	 * @var name
	 */
	protected $name = 'Manual Bank Transfer';

	/**
	 * @var allowedBillingCountries
	 */
	protected $allowedBillingCountries = array('BRA','CHL','CHN','COL');

	/**
	 * @var logoFileName
	 */
	protected $logoFileName = 'aob.png';

	/**
	 * @var settingsType
	 */
	protected $settingsType = 'skrill_aob';

	/**
	 * Get the description of the payment method.
	 *
	 * @return string
	 */
	public function getDescription()
	{
		return 'HSBC | Caixa | Santander | PSEi | WebPay | Bancolombia';
	}
}
