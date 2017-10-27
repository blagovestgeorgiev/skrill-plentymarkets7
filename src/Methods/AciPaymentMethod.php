<?php

namespace Skrill\Methods;

use Plenty\Plugin\Log\Loggable;

/**
* Class AciPaymentMethod
* @package Skrill\Methods
*/
class AciPaymentMethod extends AbstractPaymentMethod
{
	use Loggable;

	/**
	 * @var name
	 */
	protected $name = 'Cash / Invoice';

	/**
	 * @var allowedBillingCountries
	 */
	protected $allowedBillingCountries = array('ARG','BRA','CHL','CHN','COL','MEX','PER','URY');

	/**
	 * @var logoFileName
	 */
	protected $logoFileName = 'aci.png';

	/**
	 * @var settingsType
	 */
	protected $settingsType = 'skrill_aci';

	/**
	 * Get the description of the payment method.
	 *
	 * @return string
	 */
	public function getDescription()
	{
		return 'RedLink|Pago Facil| Boleto|Servi Pag|Efecty|Davivienda|Éxito|Banco de Occidente|'.
			'Carulla| EDEQ|SurtiMax|BBVA Bancomer|OXXO| Banamex|Santander|Redpagos';
	}
}
