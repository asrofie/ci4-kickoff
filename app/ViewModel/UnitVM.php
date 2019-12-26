<?php
namespace App\ViewModel;

use App\Entities\Unit;
use App\Models\UnitModel;

class UnitVM extends BaseVM {
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
        $this->model = new UnitModel();
    }

    public function find($id) {
        return $this->model->find($id);
    }

    public function create() {
        $obj = new Unit();
        $obj->name='';
        $obj->unit_id=NULL;
        $obj->desc='';
        return $obj;
    }

    public function save($post, $id=NULL) {
        $this->validation->setRules($this->insertRules);
        if ($this->validation->run($post)) {
            $data=new Unit($post);
            $this->model->save($data);
            return NULL;
        }
        return $this->validation->listErrors();
    }
}