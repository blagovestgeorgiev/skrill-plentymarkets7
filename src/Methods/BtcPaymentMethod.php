<?php

namespace Skrill\Methods;

use Plenty\Plugin\Log\Loggable;

/**
* Class BtcPaymentMethod
* @package Skrill\Methods
*/
class BtcPaymentMethod extends AbstractPaymentMethod
{
	use Loggable;

	/**
	 * @var name
	 */
	protected $name = 'Bitcoin';

	/**
	 * @var exceptedBillingCountries
	 */
	protected $exceptedBillingCountries = array(
		'CUB','SDN','SYR','PRK','IRN','KGZ','BOL','ECU','BGD','CAN','USA','TUR'
	);

	/**
	 * @var logoFileName
	 */
	protected $logoFileName = 'btc.png';

	/**
	 * @var settingsType
	 */
	protected $settingsType = 'skrill_btc';
}
