<?php
namespace App\ViewModel;

use Config\Services;

class BaseVM {
    protected $validation;
    public function __construct() {
        $this->validation=Services::validation();
        $this->init();
    }

    protected function init() {}

    public function getValidation() {
        return $this->validation;
    }
}