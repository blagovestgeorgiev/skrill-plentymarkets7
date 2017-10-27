<?php

namespace Skrill\Methods;

use Plenty\Plugin\Log\Loggable;

/**
* Class AliPaymentMethod
* @package Skrill\Methods
*/
class AliPaymentMethod extends AbstractPaymentMethod
{
	use Loggable;

	/**
	 * @var name
	 */
	protected $name = 'Alipay';

	/**
	 * @var allowedBillingCountries
	 */
	protected $allowedBillingCountries = array('CHN','GBR');

	/**
	 * @var logoFileName
	 */
	protected $logoFileName = 'ali.png';

	/**
	 * @var settingsType
	 */
	protected $settingsType = 'skrill_ali';
}
