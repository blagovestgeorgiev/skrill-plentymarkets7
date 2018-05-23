<?php

namespace Skrill\Controllers;

use Plenty\Plugin\Controller;
use Plenty\Plugin\Http\Request;
use Plenty\Plugin\Log\Loggable;

use IO\Services\SessionStorageService;

use Skrill\Helper\PaymentHelper;

/**
* Class PaymentNotificationController
* @package Skrill\Controllers
*/
class PaymentNotificationController extends Controller
{
	use Loggable;

	/**
	 *
	 * @var Request
	 */
	private $request;

	/**
	 *
	 * @var PaymentHelper
	 */
	private $paymentHelper;

	/**
	 * @var SessionStorage
	 */
	private $sessionStorage;

	/**
	 * PaymentNotificationController constructor.
	 *
	 * @param Request $request
	 * @param PaymentHelper $paymentHelper
	 */
	public function __construct(
		Request $request,
		SessionStorageService $sessionStorage,
		PaymentHelper $paymentHelper
	)
	{
		$this->request = $request;
		$this->sessionStorage = $sessionStorage;
		$this->paymentHelper = $paymentHelper;
	}

	/**
	 * handle status_url from payment gateway
	 * @return string
	 */
	public function handleStatusUrl()
	{
		$this->getLogger(__METHOD__)->error('Skrill:status_url', $this->request->all());

		$paymentStatus = $this->request->all();
		$this->sessionStorage->setSessionValue('paymentStatus', $paymentStatus);
		$this->getLogger(__METHOD__)->error('Skrill:paymentStatus', $this->sessionStorage->getSessionValue('paymentStatus'));
		// $this->paymentHelper->updatePlentyPayment($paymentStatus);

		return 'ok';
	}

	/**
	 * handle refund_status_url from refund payment gateway
	 * @return string
	 */
	public function handleRefundStatusUrl()
	{
		$this->getLogger(__METHOD__)->error('Skrill:refund_status_url', $this->request->all());

		$refundStatus = $this->request->all();
		$this->paymentHelper->updatePlentyRefundPayment($refundStatus);

		return 'ok';
	}
}
