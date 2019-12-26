<?php
namespace App\Controllers\Client\Setup;

use App\Controllers\Client\ClientController;
use App\ViewModel\UnitVM;
use App\Widget\FlashMessage;

class UnitController extends ClientController {

    public function indexAction() {
        return view('Setup/Unit/index.php');
    }

    public function formAction($id=NULL) {
        helper(['form', 'url']);
        $segments=$this->request->uri->getSegments();
        $vm = new UnitVM();
        $unit = NULL;
        if($submit = $this->isSubmit('submit', array(1,2))) {
            $post=$this->request->getPost();
            $error = $vm->save($post, $id);
            if(is_null($error) || empty($error)) {
                FlashMessage::createMessage('success', 'Data berhasil disimpan');
                if($submit == 1) {
                    return redirect('client_unit_index');
                }
                $unit = $vm->create();
            }
        }
        else {
            if($id) {
                $unit = $vm->find($id);
            }
            else {
                $unit = $vm->create();
            }
        }
        
        $data = array(
            'validation'=> $vm->getValidation(),
            'data' => $unit,
            'id'   => $id,
        );
        return view('Setup/Unit/form', $data);
    }

}