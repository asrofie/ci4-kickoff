<?php
namespace App\Widget;

use Config\Services;

class FlashMessage {
    public static function createMessage($type='success', $message=null, $title=null) {
        $session = Services::session();
        $message= array(
            'page_message' => 1,
            'type'=> $type,
            'message'=> $message,
            'title' => $title
        );
        $session->setFlashdata($message);
    }

    public function message() {
        $session = Services::session();
        if($session->has('page_message')) {
            $view=view('Widget/flash_message', array(
                'type'=> $session->get('type'),
                'title'=> $session->get('title'),
                'message'=> $session->get('message')));
            $session->remove(array('page_message','type','message','title'));
            return $view;
        }
        return '';
    }
}