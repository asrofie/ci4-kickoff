<?php
namespace App\Models;

class UnitModel extends BaseModel {
    protected $table = 'unit';
    protected $primaryKey = 'unit_id';
    protected $allowedFields = [
        'name', 'desc'
    ];
    protected $returnType = 'App\Entities\Unit';
}