<?php
namespace App\Widget;

use App\Models\PersonModel;
use Config\Services;

class ClientTemplate {

    private $session;
    private $employee;
    private $person;

    public function __construct() {
        $this->session = Services::sessionLogin();
        $this->employee = $this->session->getEmployee();
        $person = new PersonModel();
        $this->person= $person->find($this->employee['person_id']);
    }

    public function getEmployeeName() {
        return $this->person->name;
    }

    public function pageHeader($title, $breadcrum=array()) {
        return view('Widget/page_header', array(
            'page_title'=> $title,
            'breadcrum'=> $breadcrum)
        );
    }

    public function pageDesc($title, $desc=null) {
        return view('Widget/page_desc', array(
            'title'=> $title,
            'desc'=> $desc)
        );
    }


}