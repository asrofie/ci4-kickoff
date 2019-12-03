<?php
namespace App\Widget;

class General {

    public function copyright() {
        return view('Widget/general_copyright');
    }

    public function logoImage() {
        return $this->logo('image');
    }

    public function logoText() {
        return $this->logo('text');
    }

    public function logo($type='full') {
        return view('Widget/general_logo', array('type' => $type));
    }

}