<?php
namespace App\Controllers\Client\Api;

use App\Models\UnitModel;
use CodeIgniter\RESTful\ResourceController;
use Config\Services;

class ApiSetupController extends ResourceController {
    
    public function unitIndexAction() {
        $model = new UnitModel();
        $post = $this->request->getPost();
        return $this->respond($model->datatable($post));
    }

    protected function datatableResponse($data) {


    }

    protected function getSession() {
        return Services::sessionLogin();
    }
}