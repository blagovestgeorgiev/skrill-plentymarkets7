<?php

namespace Skrill\Methods;

use Plenty\Plugin\Log\Loggable;

/**
* Class PscPaymentMethod
* @package Skrill\Methods
*/
class PscPaymentMethod extends AbstractPaymentMethod
{
	use Loggable;

	/**
	 * @var name
	 */
	protected $name = 'Paysafecard';

	/**
	 * @var allowedBillingCountries
	 */
	protected $allowedBillingCountries = array(
		'ASM','AUT','BEL','CAN','HRV','CYP','CZE','DNK','FIN','FRA','DEU','GUM','HUN','IRL','ITA','LVA','LUX','MLT',
		'MEX','NLD','MNP','NOR','POL','PRT','PRI','ROU','SVK','SVN','ESP','SWE','CHE','TUR','GBR','USA','VIR'
	);

	/**
	 * @var logoFileName
	 */
	protected $logoFileName = 'psc.png';

	/**
	 * @var settingsType
	 */
	protected $settingsType = 'skrill_psc';
}
