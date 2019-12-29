<?php
namespace App\ViewModel;

use App\Entities\Video;
use App\Models\VideoModel;

class VideoVM extends BaseVM {
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
        $this->model = new VideoModel();
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
        $obj = new Video($post);
        if(!$post) {
            $obj->video_id=NULL;
            $obj->name='';
            $obj->desc='';
            $obj->category_id=NULL;
            $obj->author='';
            $obj->link='';
            $obj->tag='';
            $obj->channel='';
            $obj->channel_link='';
        }
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
                $data=new Video($post);
            }
            $this->model->save($data);
            return NULL;
        }
        return $this->validation->listErrors();
    }
}