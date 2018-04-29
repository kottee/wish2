<?php
namespace Wish\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

/**
 * Class HelloWorldRouteServiceProvider
 * @package HelloWorld\Providers
 */
class WishRouteServiceProvider extends RouteServiceProvider
{
	/**
	 * @param Router $router
	 */
	public function map(Router $router)
	{
		$router->get('wishhello', 'Wish\Controllers\ContentController@sayHello');
		$router->get('hellotest', 'Wish\Controllers\ContentController@sayHello');
		$router->get('hello', 'Wish\Controllers\ContentController@sayHello');
	}

}
