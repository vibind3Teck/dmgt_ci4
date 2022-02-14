<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'product';

	protected $primaryKey = 'id';

	//protected $allowedFields = ['name', 'email', 'gender'];
	protected $allowedFields = ['id','product_name','product_sku','product_price','brand_id','cat_id','product_image','status_flag','product_description'];

}