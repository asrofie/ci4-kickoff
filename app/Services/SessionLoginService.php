<?php
namespace App\Services;

use App\Models\EmployeeModel;
use App\Models\PersonModel;
use App\Models\UserModel;
use Config\Services;

class SessionLoginService {
   
    private $userId;
    private $employeeId;
    private $role;
    private $user;
    private $employee;

    public function __construct() {
        $session = Services::session();
        $this->userId=$session->get('user_id');
        $this->role=$session->get('role');
        $this->employeeId=$session->get('employee_id');
    }

    /**
     * Get the value of userId
     */ 
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Get the value of employeeId
     */ 
    public function getEmployeeId()
    {
        return $this->employeeId;
    }

    /**
     * Get the value of role
     */ 
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Get the value of user
     */ 
    public function getUser()
    {
        if(is_null($this->user)) {
            $userModel=new UserModel();
            $this->user=$userModel->find($this->userId);
        }
        return $this->user;
    }

    /**
     * Get the value of employee
     */ 
    public function getEmployee()
    {
        if(is_null($this->employee)) {
            $empModel=new EmployeeModel();
            $this->employee=$empModel->find($this->employeeId);
            if($this->employee) {
                $personModel=new PersonModel();
                $this->employee['person']=$personModel->find($this->employee['person_id']);
            }
        }
        return $this->employee;
    }
}