<?php
namespace App\Controllers\Client\Setup;

use App\Controllers\Client\ClientController;
use App\ViewModel\CategoryVM;
use App\Widget\FlashMessage;

class CategoryController extends ClientController {

    public function indexAction() {
        return view('Setup/Category/index.php');
    }

    public function deleteAction($id) {
        $vm = new CategoryVM();
        $isDeleted = $vm->delete($id);
        if($isDeleted) {
            FlashMessage::createMessage('success', 'Data berhasil dihapus');
        }
        else {
            FlashMessage::createMessage('danger', 'Data gagal dihapus');
        }
        return redirect('client_category_index');
    }

    public function formAction($id='new') {
        helper(['form', 'url']);
        $segments=$this->request->uri->getSegments();
        $vm = new CategoryVM();
        $category = NULL;
        if($submit = $this->isSubmit('submit', array(1,2))) {
            $post=$this->request->getPost();
            if (!is_numeric($id)) {
                $id=NULL;
                unset($post['category_id']);
            }
            else {
                if (isset($post['category_id'])) {
                    $id=$post['category_id'];
                }
            }
            $error = $vm->save($post, $id);
            if(is_null($error) || empty($error)) {
                FlashMessage::createMessage('success', 'Data berhasil disimpan');
                if($submit == 1) {
                    return redirect('client_category_index');
                }
                $category = $vm->create();
            }
        }
        else {
            if(is_numeric($id)) {
                $category = $vm->find($id);
            }
            else {
                $category = $vm->create();
            }
        }
        
        $data = array(
            'validation'=> $vm->getValidation(),
            'data' => $category,
            'id'   => $id,
        );
        return view('Setup/Category/form', $data);
    }

}