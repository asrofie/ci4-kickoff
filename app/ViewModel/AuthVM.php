<?php
namespace App\ViewModel;

use App\Models\UserModel;

class AuthVM extends BaseVM {

    public $loginRules= array(
        'email'     => 'required|valid_email|min_length[4]',
        'password'  => 'required|min_length[4]',
    );

    public function doLogin($post) {
        $this->validation->setRules($this->loginRules);
        if ($this->validation->run($post)) {
            $userModel = new UserModel();
            $user = $userModel->login($post['email'], $post['password']);
            if(is_null($user)) {
                return 'Username dan password tidak sessuai';
            }
            $session = session();
            $data = array(
                'email' => $user['email'],
                'user_id' => $user['user_id'],
                'employee_id' => $user['employee_id'],
                'role' => $user['role'],
            );
            $session->set($data);
            return NULL;
        }
        return $this->validation->listErrors();
    }
} 