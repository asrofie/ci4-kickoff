<?php
namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Config\Services;

class GeneralFilter implements FilterInterface {

    public function before(RequestInterface $ri)
    {
        $session = Services::session();
        if($session->has('user_id') ||
            $session->has('role')) {
            return redirect('client');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response)
    {
        // Do something here
    }

}