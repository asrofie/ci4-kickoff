<?php
namespace App\Controllers\Client\Setup;

use App\Controllers\Client\ClientController;
use App\Models\ClientModel;
use App\ViewModel\ClientVM;
use App\Widget\FlashMessage;

class ClientSetupController extends ClientController {

    public function indexAction() {
        return view('Setup/Client/index.php');
    }

    public function deleteAction($id) {
        $vm = new ClientVM();
        $isDeleted = $vm->delete($id);
        if($isDeleted) {
            FlashMessage::createMessage('success', 'Data berhasil dihapus');
        }
        else {
            FlashMessage::createMessage('danger', 'Data gagal dihapus');
        }
        return redirect('client_client_index');
    }

    public function formAction($id='new') {
        helper(['form', 'url']);
        $vm = new ClientVM();
        $video = NULL;
        if($submit = $this->isSubmit('submit', array(1,2))) {
            $post=$this->request->getPost();
            if (!is_numeric($id)) {
                $id=NULL;
                unset($post['client_id']);
            }
            else {
                if (isset($post['client_id'])) {
                    $id=$post['client_id'];
                }
            }
            $error = $vm->save($post, $id);
            if(is_null($error) || empty($error)) {
                FlashMessage::createMessage('success', 'Data berhasil disimpan');
                if($submit == 1) {
                    return redirect('client_client_index');
                }
                $video = $vm->create();
            }
            else {
                $video = $vm->create($post);
                $id='new';
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
        $data = array(
            'validation'=> $vm->getValidation(),
            'data'      => $video,
            'id'        => $id,
            'clientType'=> appGetClientType()
        );
        return view('Setup/Client/form', $data);
    }

}