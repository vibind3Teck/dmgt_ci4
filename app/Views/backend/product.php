<?=$this->include("backend/layouts/header")?>
<?=$this->include("backend/layouts/sidebar")?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Products</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">

           
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Products</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <div class="row">
          <div class="col-12">
           
        
            <div class="card">
              <div class="card-header">
              <h3 class="card-title">All Products</h3>
                  <a href="<?php echo base_url('admin/addProduct');?>"><button class="btn  btn-primary btn-md add-yacht"style="float:right;">Add Product</button></a> 
                

              </div>

              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
         
                  <tr>
                    <th >Sl-No</th>
                    <th >Product Name</th>
                    <th >Brand Name</th>
                    <th >Category Name</th>
                    <th >Product SKU</th>
                    <th >Product Price</th>
                    <th >Product Status</th>
                   
                    <th width="20%">Action</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                     <?php foreach ($product_data as $item): ?>          
                  <tr>
                    <td><?php echo $item['id'];?></td>
                    <td><?php echo $item['product_name'];?></td>
                    <td><?php echo $item['brand_name'];?></td>
                    <td><?php echo $item['category_name'];?></td>
                    <td><?php echo $item['product_sku'];?></td>
                    <td><?php echo $item['product_price'];?></td>
                    <td><?php echo $item['status_flag']== 1 ? '<span class="badge badge-success">Available</span>' : '<span class="badge badge-danger">Not Available</span>' ;?></td>
                    <td>
                 
                 <a href="<?php echo base_url('editProduct');?>/<?php echo $item['id'];?> ">
                 <button class=" btn  btn-warning btn-sm edit_brand">Edit</button>
                 </a>
                 <a>
                 <button id=""class=" btn  btn-danger btn-sm delete_brand">Delete</button>
                 </a>

                    </td>
                  </tr>
                   <?php endforeach ?>

                  </tbody>
                 
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>



  <?=$this->include("backend/layouts/footer")?>
  