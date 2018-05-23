<?php

namespace Skrill\Controllers;

use Plenty\Plugin\Controller;
use Plenty\Plugin\Http\Request;
use Plenty\Plugin\Http\Response;
use Plenty\Modules\Basket\Contracts\BasketItemRepositoryContract;
use Plenty\Modules\Order\Contracts\OrderRepositoryContract;
use Plenty\Plugin\Log\Loggable;
use Plenty\Plugin\Templates\Twig;

use IO\Services\SessionStorageService;

use Skrill\Services\GatewayService;
use Skrill\Services\OrderService;

/**
* Class PaymentController
* @package Skrill\Controllers
*/
class PaymentController extends Controller
{
	use Loggable;

	/**
	 * @var Request
	 */
	private $request;

	/**
	 * @var Response
	 */
	private $response;

	/**
	 * @var BasketItemRepositoryContract
	 */
	private $basketItemRepository;

	/**
	 * @var OrderRepositoryContract
	 */
	private $orderRepository;

	/**
	 * @var SessionStorage
	 */
	private $sessionStorage;

	/**
	 *
	 * @var gatewayService
	 */
	private $gatewayService;

	/**
	 *
	 * @var orderService
	 */
	private $orderService;

	/**
	 * PaymentController constructor.
	 *
	 * @param Request $request
	 * @param Response $response
	 * @param BasketItemRepositoryContract $basketItemRepository
	 * @param SessionStorageService $sessionStorage
	 */
	public function __construct(
					Request $request,
					Response $response,
					BasketItemRepositoryContract $basketItemRepository,
					OrderRepositoryContract $orderRepository,
					SessionStorageService $sessionStorage,
					GatewayService $gatewayService,
					OrderService $orderService
	) {
		$this->request = $request;
		$this->response = $response;
		$this->basketItemRepository = $basketItemRepository;
		$this->orderRepository = $orderRepository;
		$this->sessionStorage = $sessionStorage;
		$this->gatewayService = $gatewayService;
		$this->orderService = $orderService;
	}

	/**
	 * handle return_url from payment gateway
	 */
	public function handleReturnUrl()
	{
		$this->getLogger(__METHOD__)->error('Skrill:return_url', $this->request->all());
		$this->getLogger(__METHOD__)->error('Skrill:paymentStatus', $this->sessionStorage->getSessionValue('paymentStatus'));
		$this->sessionStorage->setSessionValue('skrillTransactionId', $this->request->get('transaction_id'));

		$orderId = $this->sessionStorage->getSessionValue('lastOrderId');
		if (!$orderId) {
			$orderData = $this->orderService->placeOrder();
			$orderId = $orderData->order->id;
			$this->sessionStorage->setSessionValue('lastOrderId', $orderId);
			$this->getLogger(__METHOD__)->error('Skrill:orderId', $this->sessionStorage->getSessionValue('lastOrderId'));
		};

		return $this->response->redirectTo('execute-payment/'.$orderId);
	}

	/**
	 * display payment widget
	 *
	 * @param Twig $twig
	 * @param string $sid
	 * @param int $orderId
	 */
	public function displayPaymentWidget(Twig $twig, $sid)
	{
		// $orders = $this->orderRepository->findOrderById($orderId);

		// if ($orders->statusId == 5) {
		// 	$this->resetBasket();
		// 	return $this->response->redirectTo('execute-payment/'.$orderId);
		// }

		$paymentPageUrl = $this->gatewayService->getPaymentPageUrl($sid);
		$this->getLogger(__METHOD__)->error('Skrill:paymentPageUrl', $paymentPageUrl);

		return $twig->render('Skrill::Payment.PaymentWidget', ['paymentPageUrl' => $paymentPageUrl]);
	}
}
