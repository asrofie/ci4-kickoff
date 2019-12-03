<?php
namespace App\Controllers\Client;

use App\Controllers\BaseController;
use Config\Services;

class ClientController extends BaseController {
    
    /**
	 * Constructor.
	 */
	public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
	{
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);

		//--------------------------------------------------------------------
		// Preload any models, libraries, etc, here.
		//--------------------------------------------------------------------
		// E.g.:
		// $this->session = \Config\Services::session();
	}

	protected function getSession() {
		$auth = Services::sessionLogin();
		return $auth;
	}
}