<?php
namespace App\Models;

class CategoryModel extends BaseModel {
    protected $table = 'category';
    protected $primaryKey = 'category_id';
    protected $allowedFields = [
        'name', 'desc', 'is_deleted', 'deleted_at'
    ];
    protected $returnType = 'App\Entities\Category';
}