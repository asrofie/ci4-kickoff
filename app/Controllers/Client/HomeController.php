<?php
namespace App\Controllers\Client;

use Config\Services;

class HomeController extends ClientController{
    public function indexAction() {
        return view('admin_template');
    }
    public function profileAction() {
        return view('Widget/profile');
    }
    public function logoutAction() {
        $session = Services::session();
        $session->destroy();
        return redirect('general_auth_login_from_logout');
    }
}