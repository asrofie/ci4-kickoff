<?php
namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Config\Services;

class ClientFilter implements FilterInterface {

    public function before(RequestInterface $ri)
    {
        $session = Services::session();
        $data=$session->get();
        if(!$session->has('user_id') ||
            !$session->has('role')) {
            return redirect('general_auth_login');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response)
    {
        // Do something here
    }

}