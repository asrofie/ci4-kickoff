<?php
namespace App\Controllers\Client\Api;

use App\Models\CategoryModel;
use App\Models\UnitModel;
use App\Models\VideoModel;
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

    public function videoIndexAction() {
        $model = new VideoModel();
        $post = $this->request->getPost();
        return $this->respond($model->datatable('video.video_id,video.name,video.link,category.name as category,video.author,video.channel,video.channel_link',$post,array('video.is_deleted' => 'N')));
    }

    protected function datatableResponse($data) {


    }

    protected function getSession() {
        return Services::sessionLogin();
    }
}