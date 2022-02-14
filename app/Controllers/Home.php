<?php


namespace App\Controllers;
use CodeIgniter\Controllers;
use App\Models\ProductModel;
use App\Models\BrandModel;
use App\Models\CategoryModel;


class Home extends BaseController
{

    public $brand;
    public $category;
    public $product;
    private $db;

    public function __construct()
    {

        helper(["url","form","file"]); 
        $this->brand = new BrandModel();
        $this->category = new CategoryModel();
        $this->product = new ProductModel();
        $this->db = db_connect(); // Loading database
       
      
    }
    public function index()
    { 
        
        $builder = $this->db->table("product as product");
        $builder->select('product.*, brand.brand_name as brand_name,category.category_name as category_name',);
        $builder->join('brand as brand', 'product.brand_id = brand.id');
        $builder->join('category as category', 'product.cat_id = category.id');
        $product_data = $builder->get()->getResultArray();



      
       foreach ( $product_data as $row) {
            $data['category_data'][$row['category_name']][] = $row['product_name'];

          }
    //echo "<pre>";print_r($product_data);

        $data['brand_data'] =  $this->brand->findAll();
       return view('frontend/home',$data);
    }

    public function about()
    {
        return view('frontend/about');
    } 
    
    public function products()
    {
        return view('frontend/products');
    } 


    public function cart()
    {
        return view('frontend/cart');
    }
    public function productDetails($id)
    {
        return view('frontend/productdetails');
    }
    public function contact()
    {
        return view('frontend/contactus');
    }
}
