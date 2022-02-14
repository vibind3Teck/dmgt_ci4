<?php

namespace App\Controllers;
use App\Models\BrandModel;
use App\Models\CategoryModel;
use App\Models\ProductModel;

class Product extends BaseController
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
        $data['product_data'] = $builder->get()->getResultArray();
        //echo "<pre>";print_r($data['product_data']);
        return view('backend/product',$data);
  
    }



    public function addProduct()
    {   
        $data['brand_data'] =  $this->brand->findAll();
        return view('backend/add_product',$data);
  
    }


    public function getCategoryById() 
    {

        $brand_id = $this->request->getPost('brand_id');
        //$data = $this->category->find('brand_id', $brand_id);
        //$data = $this->category->find('brand_id', $brand_id);

        $data = $this->category->where('brand_id', $brand_id)->findAll();
        echo json_encode($data);
   
    } 

    public function addSingleProduct() 
    {

     $product_name = $this->request->getPost('product_name');
     $product_sku = $this->request->getPost('product_sku');
     $product_price = $this->request->getPost('product_price');
     $brand_id = $this->request->getPost('brand_name');
     $category_id = $this->request->getPost('category_name');
     $product_status = $this->request->getPost('product_status');
     $description = $this->request->getPost('description');


     $files = $this->request->getFiles('product_image');
     $product_image= [];
     $data= [];
      //echo "<pre>";print_r($this->request->getPost());
      // echo "<pre>";print_r($this->request->getFiles());
      $rules = [
                "product_name" => "required",
                "product_sku" => "required",
                "category_name" => "required",
                "product_price" => "required",
                "product_status" => "required",
                "brand_name" => "required",
                "description" => "required",
      
                'product_image' => [
                'uploaded[product_image.0]',
                'mime_in[product_image,image/jpg,image/jpeg,image/gif,image/png]',
                'max_size[product_image,4096]',
            ]
            ];

            if (!$this->validate($rules)) {
                $data = ['msg' => "Failed..!"];

                
               
            }else{

            foreach($files['product_image'] as $file){   

            $newName = $file->getClientName();
            if($file->isValid() && !$file->hasMoved()){

               if($file->move(FCPATH . 'public\uploads')){
                 //echo"images".$file->getName();

               }else{
                 $data = ['msg' => "Image Not Uploaded...!"];
               }

            }
           array_push($product_image, $newName);

             }

                    $product_data = [
                     'product_name'=>$product_name,
                     'product_sku'=>$product_sku,
                     'product_price'=>$product_price,
                     'brand_id'=>$brand_id,
                     'cat_id'=>$category_id,
                     'product_image'=>implode(' ,', $product_image),
                     'status_flag'=>$product_status,
                     'product_description'=>$description
                    ];
                     $res = $this->product->save($product_data);
                     if($res){
                      $data = ['msg' => "Products Added Successfully...!"];
                     }else{
                      $data = ['msg' => "Failed Please Check All Fields...!"];
                     }
                     //echo "<pre>";print_r($product_data);
                     //$this->product->save($data);
                 
            }
             return $this->response->setJSON($data);
      
      
    }

   public function editProduct($id)
    {   
        //echo ;
        //$data['product_data'] =  $this->product->find($id);

        $builder = $this->db->table("product as product");
        $builder->select('product.*, brand.brand_name as brand_name,category.category_name as category_name',);
        $builder->join('brand as brand', 'product.brand_id = brand.id');
        $builder->join('category as category', 'product.cat_id = category.id');
        $builder->where('product.id', $id);
        $data['product_data'] = $builder->get()->getResultArray();

        $data['brand_data'] =  $this->brand->findAll();
       // echo "<pre>";print_r($data['product_data']);
        return view('backend/editProduct',$data);
  
    }

  public function editSingleProduct() 
    {

        // echo "<pre>";print_r($this->request->getPost());die;
     $product_id = $this->request->getPost('product_id');
     $products =  $this->product->where('id', $product_id)->findAll();
     foreach($products as $key=>$val1){
              // $fac[] = $val1['facility'];
               $p_image = explode(",",$val1['product_image']);
             
          }
 
 
     $product_name = $this->request->getPost('product_name');
     $product_sku = $this->request->getPost('product_sku');
     $product_price = $this->request->getPost('product_price');
     $brand_id = $this->request->getPost('brand_name');
     $category_id = $this->request->getPost('category_name');
     $product_status = $this->request->getPost('product_status');
     $description = $this->request->getPost('description');

     $product_image= [];
     $data= [];

     $file = $this->request->getFiles('product_image');

     $rules = [
            "product_name" => "required",
            "product_sku" => "required",
            "category_name" => "required",
            "product_price" => "required",
            "product_status" => "required",
            "brand_name" => "required",
            "description" => "required",

            ];

    if (!$this->validate($rules)) {
        $data = ['msg' => "Failed..!"];
       
    }else{

       foreach($file['product_image'] as $file){   

            $newName = $file->getClientName();
            if($file->isValid() && !$file->hasMoved()){

               if($file->move(FCPATH . 'public\uploads')){
                 //echo"images".$file->getName();

               }else{
                 $data = ['msg' => "Image Not Uploaded...!"];
               }
              array_push($product_image, $newName);
            }else{
               $product_image =   $p_image;
            }
         

     }

        $product_data = [
         'product_name'=>$product_name,
         'product_sku'=>$product_sku,
         'product_price'=>$product_price,
         'brand_id'=>$brand_id,
         'cat_id'=>$category_id,
         'product_image'=>implode(' ,', $product_image),
         'status_flag'=>$product_status,
         'product_description'=>$description
        ];

      
         $res = $this->product->update($product_id,$product_data);
         if($res){
          $data = ['msg' => "Products Updated  Successfully...!"];
         }else{
          $data = ['msg' => "Failed Please Check All Fields...!"];
         }
                    
                 
            }
              //return $this->response->setJSON($data); 

              return $this->response->setJSON($data);
      
      
    }
    
}
