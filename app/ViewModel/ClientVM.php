<?php
namespace App\ViewModel;

use App\Entities\Client;
use App\Entities\Person;
use App\Models\ClientModel;
use App\Models\PersonModel;

class ClientVM extends BaseVM {
    private $model;
    private $personModel;
    public $insertRules= array(
        'name'  => 'required|min_length[3]',
        'password'  => 'required|min_length[6]',
        'email'  => 'required|valid_email',
    );

    public function uniq(string $str, string &$error = null): bool
    {
        $exist = $this->model->where('lower(email)',strtolower($str))
                           ->where('is_deleted', 'N')
                           ->limit(1)
                           ->first();
        if ($exist)
        {
            $error = 'Email tidak boleh sama';
            return false;
        }
        return true;
    }

    protected function init() {
        $this->model = new ClientModel();
        $this->personModel = new PersonModel();
    }

    public function find($id) {
        return $this->model->find($id);
    }

    public function delete($id) {
        $data = $this->find($id);
        if(!$data) return FALSE;

        $data->is_deleted = 'Y';
        $data->deleted_at =new \DateTime();
        $this->model->save($data);
        return TRUE;
    }

    public function create($post=NULL) {
        $obj = new Client($post);
        if(!$post) {
            $now = new \DateTime();
            $obj->client_id=NULL;
            $obj->name='';
            $obj->email='';
            $obj->client_type=CLIENT_TYPE_FREE;
            $obj->password='';
            $obj->register_at=$now;
            $obj->verify_at=NULL;
        }
        return $obj;
    }

    public function save($post, $id=NULL) {
        $this->validation->setRules($this->insertRules);
        if ($this->validation->run($post)) {
            if($id) {
                $data = $this->find($id);
                $data->name = $post['name'];
                $data->email = $post['email'];
                $data->password = sha1($post['password']);
            }
            else {
                $data=new Client($post);
                $person = new Person();
                $person->name = $data->name;
                $person->ktp = '123';
                $person_id = $this->personModel->insert($person);
                $data->person_id = $person_id;
            }
            $this->model->save($data);
            return NULL;
        }
        return $this->validation->listErrors();
    }
}