<?php
namespace App\Controllers\Client\Setup;

use App\Controllers\Client\ClientController;
use App\ViewModel\UnitVM;
use App\Widget\FlashMessage;

class UnitController extends ClientController {

    public function indexAction() {
        return view('Setup/Unit/index.php');
    }

    public function formAction() {
        helper(['form', 'url']);
        $vm = new UnitVM();
        $session = $this->getSession();
        if($submit = $this->isSubmit('submit', array(1,2))) {
            $post=$this->request->getPost();
            $post['ap_client_id']=$session->getClientId();
            $error = $vm->save($post);
            if(is_null($error) || empty($error)) {
                FlashMessage::createMessage('success', 'Data berhasil disimpan');
                if($submit == 1) {
                    return redirect('client_unit_index');
                }
            }
        }
        $data = array(
            'validation'=> $vm->getValidation()
        );
        return view('Setup/Unit/form', $data);
    }

}