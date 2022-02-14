<?php

namespace App\Models;

use CodeIgniter\Model;

class BrandModel extends Model
{
    protected $table = 'brand';

	protected $primaryKey = 'id';

	protected $allowedFields = ['id','brand_name','brand_logo'];
}