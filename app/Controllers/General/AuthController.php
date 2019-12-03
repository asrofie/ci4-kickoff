<?php
namespace App\Controllers\General;

use App\Controllers\BaseController;
use App\ViewModel\AuthVM;
use App\Widget\FlashMessage;

class AuthController extends BaseController {

    public function loginAction() {
        helper(['form', 'url']);
        if($this->isSubmit('submit', 1)) {
            $vm = new AuthVM();
            $post=$this->request->getPost();
            $error = $vm->doLogin($post);
            if(is_null($error)) {
                return redirect('client');
            }
            else {
                FlashMessage::createMessage('danger', $error);
            }
        }
        $logout=$this->request->getGet('logout');
        if($logout && intval($logout) == 1) {
            FlashMessage::createMessage('success', 'Anda berhasil logout');
        }
        return view('Auth/login');
    }

    public function registerAction() {
        return view('Auth/register');
    }

    public function forgotPassAction() {
        return view('Auth/forgot');
    }
}