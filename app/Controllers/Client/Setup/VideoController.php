<?php
namespace App\Controllers\Client\Setup;

use App\Controllers\Client\ClientController;
use App\Models\CategoryModel;
use App\ViewModel\VideoVM;
use App\Widget\FlashMessage;

class VideoController extends ClientController {

    public function indexAction() {
        return view('Setup/Video/index.php');
    }

    public function deleteAction($id) {
        $vm = new VideoVM();
        $isDeleted = $vm->delete($id);
        if($isDeleted) {
            FlashMessage::createMessage('success', 'Data berhasil dihapus');
        }
        else {
            FlashMessage::createMessage('danger', 'Data gagal dihapus');
        }
        return redirect('client_video_index');
    }

    public function formAction($id='new') {
        helper(['form', 'url']);
        $vm = new VideoVM();
        $video = NULL;
        if($submit = $this->isSubmit('submit', array(1,2))) {
            $post=$this->request->getPost();
            if (!is_numeric($id)) {
                $id=NULL;
                unset($post['video_id']);
            }
            else {
                if (isset($post['video_id'])) {
                    $id=$post['video_id'];
                }
            }
            $error = $vm->save($post, $id);
            if(is_null($error) || empty($error)) {
                FlashMessage::createMessage('success', 'Data berhasil disimpan');
                if($submit == 1) {
                    return redirect('client_video_index');
                }
                $video = $vm->create();
            }
            else {
                $video = $vm->create($post);
            }
        }
        else {
            if(is_numeric($id)) {
                $video = $vm->find($id);
            }
            else {
                $video = $vm->create();
            }
        }
        $catModel = new CategoryModel();
        $categories = $catModel->findAll();
        $data = array(
            'validation'=> $vm->getValidation(),
            'data' => $video,
            'id'   => $id,
            'categories' => $categories
        );
        return view('Setup/Video/form', $data);
    }

}