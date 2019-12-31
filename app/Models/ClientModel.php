<?php
namespace App\Models;

class ClientModel extends BaseModel {
    protected $table = 'client';
    protected $primaryKey = 'client_id';
    protected $allowedFields = [
        'name', 'email', 'password', 'register_at', 'verify_at', 'client_type', 'person_id', 'is_deleted','deleted_at'
    ];
    protected $returnType = 'App\Entities\Person';

}