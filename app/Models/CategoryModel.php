<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoryModel extends Model
{
    protected $table = 'category';

	protected $primaryKey = 'id';

	protected $allowedFields = ['id','brand_id','category_name'];
}