<?php
namespace App\Widget;

class Asset {

    public function getDatatable($asset='css') {
        return view('Widget/asset', array('directory' => 'datatable', 'type' => $asset));
    }
}