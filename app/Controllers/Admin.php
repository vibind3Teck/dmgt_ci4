<?php

namespace App\Controllers;
use App\Models\BrandModel;
use App\Models\CategoryModel;
use App\Models\ProductModel;

class Admin extends BaseController
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
        return view('backend/dashboard');
  
    }

    public function Brands()
    {   
       
        $data['brand_data'] =  $this->brand->findAll();
        return view('backend/Brand',$data);
  
    }
    public function addBrand()
    {   
       
        $rules = [
            'brand_name'=> [
                    'rules'=>'required|is_unique[brand.brand_name]',
                              'errors' => [
                                'is_unique'=> "Brand Name Already Exist",
                              ]
                     ],

           
        ];
        
        if (!$this->validate($rules)) {
          
           $msg= ["status"=>0];
        } else{
           
          if($img = $this->request->getFile('brand_image'))
            {
                if ($img->isValid() && ! $img->hasMoved())
                {
                    $newName = $img->getRandomName();
                    $img->move(FCPATH . 'public/uploads/brand', $newName);
                    $brand_data = [
                        'brand_name'=>$this->request->getPost('brand_name'),
                        'brand_logo'=>$newName
                    ];

                    //echo "<pre>";print_r($data);
                   // 
                    $this->brand->save($brand_data);
                    
                }
                 
            }

           $msg= ['status'=>1];
        }
             /* echo "<pre>";print_r($this->validator->listErrors());*/
             
              return $this->response->setJSON($msg);
  
    }

    public function editBrand()
    {  

$brand_logo =  $this->request->getFile('brand_image');



if(!$this->request->getFile('edit_brand_logo'))){
    echo"jjjj";
    //echo"<pre>"; print_r($this->request->getPost());
}else{
    echo"ccc";
    echo"<pre>"; print_r($this->request->getPost());
    echo"<pre>"; print_r($this->request->getFiles());
}
        $id = $this->request->getPost('brand_id');
        $data = [
           'brand_name'=>$this->request->getPost('brand_name')
        ];

        $rules = [
            'brand_name'=>'required|is_unique[brand.brand_name]',
 
            'brand_name'    => [
            'rules'  => 'required|is_unique[brand.brand_name]',
            'errors' => [
                'is_unique'=> "Brand Name Already Exist",
            ],
        ],
        ];
       
        
         if (!$this->validate($rules)) {

           $msg= ["status"=>0];
        } else{

           //$this->brand->update($id,$data);

           $msg= ['status'=>1];
        }
          //return $this->response->setJSON($msg);
  
    }

   public function delete_brand()
    {   

         $id = $this->request->getPost('del_id');
         $res = $this->brand->where('id', $id)->delete();
          $msg = 1;
         if($res){
            $msg = 1;

         }else{
            $msg = 0;
         }
         return $this->response->setJSON($msg);
        
  
    }


    public function Category()
    {    

          $builder = $this->db->table("category as category");
          $builder->select('category.*, brand.brand_name as brand_name');
          $builder->join('brand as brand', 'category.brand_id = brand.id');
          $data['category_data'] = $builder->get()->getResultArray();
       
          $data['brand_data'] =  $this->brand->findAll();
          return view('backend/category',$data);
  
    }
    public function addCategory()
    {   

        //echo "<pre>";print_r($this->request->getPost());
       
        $data = [
           'brand_id'=>  $this->request->getPost('brand_id'),
           'category_name'=>$this->request->getPost('category_name')
        ];

        $rules = [
            'category_name'=>'required|is_unique[category.category_name]',
 
            'category_name'    => [
            'rules'  => 'required|is_unique[category.category_name]',
            'errors' => [
                'is_unique'=> "Category_name Name Already Exist",
            ],
        ],
        ];
       
        
         if (!$this->validate($rules)) {

           $msg= ["status"=>0];
        } else{

           $this->category->save($data);

           $msg= ['status'=>1];
        }
          return $this->response->setJSON($msg);
  
    } 
    public function updateCategory()
    {  

        $id = $this->request->getPost('category_id');

        $data = [
          
           'category_name'=>$this->request->getPost('category_name')
        ];

        $rules = [
            'category_name'=>'required|is_unique[category.category_name]',
 
            'category_name'    => [
            'rules'  => 'required|is_unique[category.category_name]',
            'errors' => [
                'is_unique'=> "Category Already Exist",
            ],
        ],
        ];
       
        
         if (!$this->validate($rules)) {

           $msg= ["status"=>0];
        } else{

           $this->category->update($id,$data);

           $msg= ['status'=>1];
        }
          return $this->response->setJSON($msg);
  
    }

    public function delete_category()
    {   

         $id = $this->request->getPost('del_id');
         $res = $this->category->where('id', $id)->delete();
          $msg = 1;
         if($res){
            $msg = 1;

         }else{
            $msg = 0;
         }
         return $this->response->setJSON($msg);
        
  
    }
    public function Products()
    {   
        return view('backend/product');
  
    }



    
}
