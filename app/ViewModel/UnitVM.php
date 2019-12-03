<?php
namespace App\ViewModel;

use App\Models\UnitModel;

class UnitVM extends BaseVM {
    private $model;
    public $insertRules= array(
        'name'  => 'required|min_length[2]',
        'desc'  => 'min_length[6]',
    );

    protected function init() {
        $this->model = new UnitModel();
    }

    public function save($post) {
        $this->validation->setRules($this->insertRules);
        if ($this->validation->run($post)) {
            
            return NULL;
        }
        return $this->validation->listErrors();
    }
}