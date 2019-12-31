<?php 
namespace App\Models;

class PersonModel extends BaseModel {
    protected $table = 'person';
    protected $primaryKey = 'person_id';
    protected $allowedFields = [
        'name', 'ktp', 'kk', 'sim', 'passport', 'nation', 'birth_place', 'birth_date', 'is_deleted','deleted_at'
    ];
    protected $returnType = 'App\Entities\Person';
}