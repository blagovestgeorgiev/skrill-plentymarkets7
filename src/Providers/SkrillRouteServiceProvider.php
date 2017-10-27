<?php

namespace Skrill\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;
use Plenty\Plugin\Routing\ApiRouter;

/**
* Class SkrillRouteServiceProvider
* @package Skrill\Providers
*/
class SkrillRouteServiceProvider extends RouteServiceProvider
{
	/**
	 * mapping the router
	 *
	 * @param Router $router
	 * @param ApiRouter $apiRouter
	 */
	public function map(Router $router, ApiRouter $apiRouter)
	{
		// Skrill-Settings routes
		$apiRouter->version(
						['v1'],
						['namespace' => 'Skrill\Controllers', 'middleware' => 'oauth'],
						function ($apiRouter) {
							$apiRouter->post('payment/skrill/settings/', 'SettingsController@saveSettings');
							$apiRouter->get('payment/skrill/settings/{settingType}', 'SettingsController@loadSettings');
							$apiRouter->get('payment/skrill/setting/{plentyId}/{settingType}', 'SettingsController@loadSetting');
						}
		);

		// Routes for display Skrill settings
		$router->get('skrill/settings/{settingType}', 'Skrill\Controllers\SettingsController@loadConfiguration');

		// Routes for save Skrill settings
		$router->post('skrill/settings/save', 'Skrill\Controllers\SettingsController@saveConfiguration');

		// Routes for Skrill status_url
		$router->post('payment/skrill/status', 'Skrill\Controllers\PaymentNotificationController@handleStatus');

		// Routes for Skrill return_url
		$router->get('payment/skrill/return', 'Skrill\Controllers\PaymentController@handleReturn');

		// Routes for Skrill refund_status_url
		$router->post('payment/skrill/refundstatus', 'Skrill\Controllers\PaymentNotificationController@handleRefundStatus');

		// Routes for Skrill payment widget
		$router->get('payment/skrill/pay/{sid}', 'Skrill\Controllers\PaymentController@handlePayment');
	}
}
