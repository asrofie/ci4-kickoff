<?php
namespace App\Models;

class UserModel extends BaseModel {

    protected $table = 'user';
    protected $primaryKey = 'user_id';

    public function login($email,$password) {
        $where = array(
            'email' => $email,
            'pwd'   => sha1($password)
        );
        return $this->where($where)
                    ->first();
    }

}