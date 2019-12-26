<?php namespace Config;

/**
 * --------------------------------------------------------------------
 * URI Routing
 * --------------------------------------------------------------------
 * This file lets you re-map URI requests to specific controller functions.
 *
 * Typically there is a one-to-one relationship between a URL string
 * and its corresponding controller class/method. The segments in a
 * URL normally follow this pattern:
 *
 *    example.com/class/method/id
 *
 * In some instances, however, you may want to remap this relationship
 * so that a different class/function is called than the one
 * corresponding to the URL.
 */

// Create a new instance of our RouteCollection class.
$routes = Services::routes(true);

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 * The RouteCollection object allows you to modify the way that the
 * Router works, by acting as a holder for it's configuration settings.
 * The following methods can be called on the object to modify
 * the default operations.
 *
 *    $routes->defaultNamespace()
 *
 * Modifies the namespace that is added to a controller if it doesn't
 * already have one. By default this is the global namespace (\).
 *
 *    $routes->defaultController()
 *
 * Changes the name of the class used as a controller when the route
 * points to a folder instead of a class.
 *
 *    $routes->defaultMethod()
 *
 * Assigns the method inside the controller that is ran when the
 * Router is unable to determine the appropriate method to run.
 *
 *    $routes->setAutoRoute()
 *
 * Determines whether the Router will attempt to match URIs to
 * Controllers when no specific route has been defined. If false,
 * only routes that have been defined here will be available.
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Web\HomeController');
$routes->setDefaultMethod('indexAction');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(false);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Web/HomeController::indexAction');
$routes->group('auth', function($route) {
	$route->add('login', 'General/AuthController::loginAction', ['as' => 'general_auth_login']);
	$route->add('login?logout=1', 'General/AuthController::loginAction', ['as' => 'general_auth_login_from_logout']);
	$route->add('register', 'General/AuthController::registerAction', ['as' => 'general_auth_register']);
	$route->add('forgot', 'General/AuthController::forgotPassAction', ['as' => 'general_auth_forgotpass']);
});
$routes->get('auth', 'General/AuthController::loginAction');
$routes->group('client', function($route) {
	$route->add('home', 'Client/HomeController::indexAction', ['as' => 'client_home_index']);
	$route->add('profile', 'Client/HomeController::profileAction', ['as' => 'client_home_profile']);
	$route->add('logout', 'Client/HomeController::logoutAction', ['as' => 'client_home_logout']);
	$route->group('setup', function($routeSub) {
		$routeSub->group('unit', function($routeUnit) {
			$routeUnit->get('/', 'Client/Setup/UnitController::indexAction', ['as' => 'client_unit_index']);
			$routeUnit->match(['get', 'post'], 'form','Client/Setup/UnitController::formAction', ['as' => 'client_unit_form']);
			$routeUnit->add('form/:num','Client/Setup/UnitController::formAction/$1');
		});
		$routeSub->group('category', function($routeUnit) {
			$routeUnit->get('/', 'Client/Setup/CategoryController::indexAction', ['as' => 'client_category_index']);
			$routeUnit->match(['get', 'post'], 'form/(:any)','App\Controllers\Client\Setup\CategoryController::formAction/$1', ['as' => 'client_category_form']);
			$routeUnit->get('delete/(:any)', 'App\Controllers\Client\Setup\CategoryController::deleteAction/$1', ['as' => 'client_category_delete']);
		});
		// $routeSub->group('office', function($routeUnit) {
		// 	$routeUnit->get('/', 'Client/Setup/OfficeController::indexAction', ['as' => 'client_office_index']);
		// 	$routeUnit->match(['get', 'post'], 'form/(:num)','Client/Setup/OfficeController::formAction', ['as' => 'client_office_form']);
		// });
		// $routeSub->add('unit', 'Client/Setup/UnitController::indexAction', ['as' => 'client_unit_index']);
		// $routeSub->add('office', 'Client/Setup/OfficeController::indexAction', ['as' => 'client_office_index']);
	});
	$route->group('api', function($routeApi) {
		$routeApi->add('unit/index', 'Client/Api/ApiSetupController::unitIndexAction', ['as' => 'client_api_unit_index']);
		$routeApi->add('category/index', 'Client/Api/ApiSetupController::categoryIndexAction', ['as' => 'client_api_category_index']);
	});
});
$routes->get('client', 'Client/HomeController::indexAction');
/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need to it be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
