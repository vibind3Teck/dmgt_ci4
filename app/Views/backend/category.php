<?=$this->include("backend/layouts/header")?>
<?=$this->include("backend/layouts/sidebar")?>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">

           
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Yachts</li>
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
                <h3 class="card-title"> All  Categories</h3>
                	<!--  <a href="addYacht.php"><button class="btn  btn-primary btn-md add-yacht">Add Product</button></a>
                	 <button class="btn  btn-warning btn-md add-yacht"data-toggle="modal" data-target="#modal-brand">Add Brand</button> -->
                	 <button class="btn  btn-success btn-md add-yacht"data-toggle="modal" data-target="#modal-category"style="float:right;">Add Category</button>

              </div>

              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
         
                  <tr>
                    <th width="20%">Sl-No</th>
                    <th width="30%">Brand Name</th>
                    <th width="30%">Category Name</th>
                    <th width="20%">Action</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                <?php foreach ($category_data as $item): ?>
                    <tr>
                    <td><?php echo $item['id'];?></td>
                    <td><?php echo $item['brand_name'];?></td>
                    <td><?php echo $item['category_name'];?></td>
                    <td>
                 
                 <a>
                 <button id="<?php echo $item['id'];?>"class=" btn  btn-warning btn-sm edit_category" data-id="<?php echo $item['id']; ?>" data-toggle="modal" data-target="#modal_edit_category">Edit</button>
                 </a>
                 <a>
                 <button id="<?php echo $item['id'];?>"class=" btn  btn-danger btn-sm delete_category">Delete</button>
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


  <!-- /.content-wrapper Category Modal-->
        <div class="modal fade" id="modal-category">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"id="msg1">Add New Category</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            	<form>
            		
              <div class="form-group">
                  <label>Choose Brand</label>
                  <select id="brand"class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                  	<option>Choose Brand</option>
                  <?php foreach ($brand_data as $item): ?>
                    <option value="<?php echo $item['id']; ?>"><?php echo $item['brand_name']; ?></option>
                      
                  <?php endforeach ?>
                  </select>
                </div>


		           <div class="form-group">
			            <label for="exampleInputEmail1"id="">Add New Category </label>
			            <input type="text" class="form-control" id="category_name" name="category_name" placeholder="Enter Category Name">
			           
		           </div>
            	</form>
              <!-- <p>One fine body&hellip;</p> -->
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary"id="save_category">Save changes</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>






        <!-- /.content-wrapper Edit Category Modal-->
        <div class="modal fade" id="modal_edit_category">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"id="msg2">Update Category</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form>
                
              <div class="form-group">
                  <label for="exampleInputEmail1"id="msg">Brand </label>
                  <input type="text" class="form-control" id="edit_brand_name" name="edit_brand_name"disabled="true" >
                </div>


               <div class="form-group">
                  <label for="exampleInputEmail1"id="msg">UpdateCategory </label>
                  <input type="text" class="form-control" id="edit_category_name" name="edit_category_name" placeholder="Enter Category Name">
                  <input type="hidden"id="hidden_category_id">
                 
                  
                 
               </div>
              </form>
              <!-- <p>One fine body&hellip;</p> -->
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary"id="update_category">Update changes</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
  <!-- /.modal -->


  <?=$this->include("backend/layouts/footer")?>
  <script type="text/javascript">
 
$(function() {

//insert Category
$(document).on('click', '#save_category', function(){ 
	        	   
   var category_name = $('#category_name').val();
   var brand_id = $('#brand').find(":selected").val();
   //alert(brand_id);
   //alert(category_name);

   if(category_name ==''){
     $('#msg1').text('Enter Valid Name!');
   }else{
   	 $('#msg1').text('Add New category!');
   	// console.log(brand_name);

   	      $.ajax({
             url:'<?php echo base_url('admin/addCategory');?>',
             type:"POST",
             data:{category_name,brand_id},
            
             
              success: function(msg){

                  if(msg.status == 0){ 

                    $('#msg1').text('Category  Already Exist...!');
                    setTimeout(function(){
                     location.reload();
                    },1500);

                }else if(msg.status == 1){ 

                    $('#msg1').text('Category  Created Successfully...!');
                     setTimeout(function(){
                     location.reload();
                    },1500);

                
                }
           }
         });
   }
 });

//edit and Pass Id,Data Into Modal
$(document).on('click', '.edit_category', function(){ 

    var currentRow=$(this).closest("tr"); 
    var category_id=  $(this).data('id')
    var brand= currentRow.find("td:eq(1)").text(); // get current row 2nd TD          
    var category_name= currentRow.find("td:eq(2)").text(); // get current row 2nd TD   
  
    $('#edit_brand_name').val(brand);
    $('#edit_category_name').val(category_name);
    $('#hidden_category_id').val(category_id);
   
 });



//update Category into db
$(document).on('click', '#update_category', function(){        
    var category_name = $('#edit_category_name').val();
    var category_id = $('#hidden_category_id').val();
  


   if(category_name ==''){
     $('#msg2').text('Enter Valid Name!');
   }else{
     $('#msg2').text('Update Brand!');
    // console.log(brand_name);

          $.ajax({
             url:'<?php echo base_url('admin/updateCategory');?>',
             type:"POST",
             data:{category_id,category_name},
            
             
          success: function(msg){

               if(msg.status == 0){ 

                    $('#msg2').text('Category  Already Exist...!');
                    setTimeout(function(){
                     location.reload();
                    },1500);

                }else if(msg.status == 1){ 

                    $('#msg2').text('Category  Updated Successfully...!');
                     setTimeout(function(){
                     location.reload();
                    },1500);

                
                }
           }
         });
   }
   
 });
   //delete Category
    $(document).on('click', '.delete_category', function(){ 
      var del_id = $(this).attr('id');
     // var methode = 'delete_category';
      //alert(del_id);
     
      var r=confirm("Do you want to delete this?")

      if (r==true){
           event.preventDefault();
        
    
       $.ajax({
           url:'<?php echo base_url('admin/delete_category');?>',
           type:"POST",
           data:{del_id},
      
        success: function(data){
          if(data ){
           location.reload();
          }
         }
        });
      }
  });

});

  </script>