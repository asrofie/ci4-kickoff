<?php
namespace App\Controllers\Client\Api;

use App\Models\CategoryModel;
use App\Models\UnitModel;
use CodeIgniter\RESTful\ResourceController;
use Config\Services;

class ApiSetupController extends ResourceController {
    
    public function unitIndexAction() {
        $model = new UnitModel();
        $post = $this->request->getPost();
        return $this->respond($model->datatable('unit_id,name,desc',$post));
    }

    public function categoryIndexAction() {
        $model = new CategoryModel();
        $post = $this->request->getPost();
        return $this->respond($model->datatable('category_id,name,desc',$post,array('is_deleted' => 'N')));
    }

    protected function datatableResponse($data) {


    }

    protected function getSession() {
        return Services::sessionLogin();
    }
}