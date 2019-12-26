<?php
namespace App\ViewModel;

use App\Entities\Category;
use App\Models\CategoryModel;

class CategoryVM extends BaseVM {
    private $model;
    public $insertRules= array(
        'name'  => 'required|min_length[2]',
        'desc'  => 'min_length[6]',
    );

    public function uniq(string $str, string &$error = null): bool
    {
        $exist = $this->model->where('lower(name)',strtolower($str))
                           ->where('is_deleted', 'N')
                           ->limit(1)
                           ->first();
        if ($exist)
        {
            $error = 'Nama tidak boleh sama';
            return false;
        }
        return true;
    }

    protected function init() {
        $this->model = new CategoryModel();
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

    public function create() {
        $obj = new Category();
        $obj->name='';
        $obj->category_id=NULL;
        $obj->desc='';
        return $obj;
    }

    public function save($post, $id=NULL) {
        $this->validation->setRules($this->insertRules);
        if ($this->validation->run($post)) {
            if($id) {
                $data = $this->find($id);
                $data->name = $post['name'];
                $data->desc = $post['desc'];
            }
            else {
                $data=new Category($post);
            }
            $this->model->save($data);
            return NULL;
        }
        return $this->validation->listErrors();
    }
}