<?php

namespace Skrill\Methods;

use Plenty\Plugin\Log\Loggable;

/**
* Class NtlPaymentMethod
* @package Skrill\Methods
*/
class NtlPaymentMethod extends AbstractPaymentMethod
{
	use Loggable;

	/**
	 * @var name
	 */
	protected $name = 'Neteller';

	/**
	 * @var exceptedBillingCountries
	 */
	protected $exceptedBillingCountries = array(
		'AFG','ARM','BTN','BVT','MMR','CHN','COD','COK','CUB','ERI','SGS','GUM','GIN','HMD','IRN','IRQ','CIV','KAZ',
		'PRK','KGZ','LBR','LBY','MNG','MNP','FSM','MHL','PLW','PAK','TLS','PRI','SLE','SOM','ZWE','SDN','SYR','TJK',
		'TKM','UGA','USA','VIR','UZB','YEM'
	);

	/**
	 * @var logoFileName
	 */
	protected $logoFileName = 'ntl.png';

	/**
	 * @var settingsType
	 */
	protected $settingsType = 'skrill_ntl';
}
