<?php
namespace App\Controllers\Web;

use App\Controllers\BaseController;

class HomeController extends BaseController {

    public function indexAction() {
        return view('website_base_template');
    }
}