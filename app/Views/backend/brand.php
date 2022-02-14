<?=$this->include("backend/layouts/header")?>
<?=$this->include("backend/layouts/sidebar")?>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Brand</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">

           
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Brands</li>
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
                <h3 class="card-title">All Brands</h3>
                	<!--  <a href="addYacht.php"><button class="btn  btn-primary btn-md add-yacht">Add Product</button></a> -->
                	 <button class="btn  btn-success btn-md add-yacht"data-toggle="modal" data-target="#modal-brand"style="float:right;">Add Brand</button>
                	<!--  <button class="btn  btn-secondary btn-md add-yacht"data-toggle="modal" data-target="#modal-category">Add Category</button> -->

              </div>

              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
         
                  <tr>
                    <th width="20%">id</th>
                    <th width="60%">Brand Name</th>
                    <th width="60%">Brand Logo</th>
                    <th width="20%">Action</th>
                    
                  </tr>
                  </thead>
                  <tbody>
              <?php foreach ($brand_data as $item): ?>
                  <tr>
                   

      

  
                    <td><?php echo $item['id'];?></td>
                    <td><?php echo $item['brand_name'];?></td>
                    <td> <img src="<?php echo base_url('public/uploads/brand');?>/<?php echo preg_replace('/\s+/', '', $item['brand_logo']);?>" width="50" height="50"></td>
                    <td>
                 
                 <a>
                 <button id="<?php echo $item['id'];?>"class=" btn  btn-warning btn-sm edit_brand"data-toggle="modal" data-target="#modal_edit_brand">Edit</button>
                 </a>
                 <a>
                 <button id="<?php echo $item['id'];?>"class=" btn  btn-danger btn-sm delete_brand">Delete</button>
                 </a>

                    </td>
                  </tr>
                 
              <?php endforeach ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Sl-No</th>
                    <th>Brand Name</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
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



  <!-- /.content-wrapper Brand model-->
        <div class="modal fade"id="modal-brand">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="msg1">Add New Brand</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
   		    <form id="brand_add" enctype="multipart/form-data" action="" method="post">
	   		    <div class="form-group">
		            <label for="exampleInputEmail1">Brand Name </label>
		            <input type="text" class="form-control" id="brand_name" name="brand_name" placeholder="Enter Brand Name">
	           </div>

              <div class="form-group">
            <label for="Product_image">  Brand Image(210px × 80px)</label>
              <div class="custom-file">
              <!-- <input type="file" class="lcustom-file-input" id="Product_image" name="Product_image"> -->
              <input type="file" name="brand_image" id="uploads" class="form-group" >
            </div>
          </div>
    	   </form>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" id="save_brand">Save changes</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
  <!-- /.modal --> 


   <!-- /.content-wrapper Brand Edit model-->
        <div class="modal fade" id="modal_edit_brand">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="msg2">Update Brand</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
          <form id="brand_update" enctype="multipart/form-data" action="" method="post">
             <div class="form-group">
                <label for="exampleInputEmail1">Brand Name </label>
                <input type="text" class="form-control" id="edit_brand_name" name="brand_name" placeholder="Enter Brand Name">
                <input type="hidden"id="hidden_brand_id">
             </div> 

                <div class="form-group">
            <label for="Product_image">  Brand Image(210px × 80px)</label>
              <div class="custom-file">
              <!-- <input type="file" class="lcustom-file-input" id="Product_image" name="Product_image"> -->
              <input type="file" name="edit_brand_logo" id="edit_uploads" class="form-group" >

               <div id="img"></div>
              
            </div>
          </div>
         </form>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary" id="update_brand">Upadta changes</button>
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

$(document).on('click', '#save_brand', function(e){ 
      e.preventDefault();          

   var form_data = new FormData($('#brand_add')[0]);

   var brand_name = $('#brand_name').val();
   var brand_image = $('#uploads').val();

   if(brand_name ==''){
     $('#msg1').text('Enter Valid Name!');
   }else if(brand_image ==''){
     $('#msg1').text('Add Brand Image!');
   }
   else{
   	 $('#msg1').text('Add New Brand!');
   	// console.log(brand_name);
//alert(form_data);
   	      $.ajax({
             url:'<?php echo base_url('admin/addBrand');?>',
             type:"POST",
             data:form_data,
             processData: false,
             contentType: false,
              success: function(msg){
                  if(msg.status == 0){ 

                  	$('#msg1').text('Brand Name Already Exist...!');
                    setTimeout(function(){
                     location.reload();
                    },1500);
                  	  //location.reload();

                
                }else if(msg.status == 1){ 

                    $('#msg1').text('Brand Name Created Successfully...!');
                     setTimeout(function(){
                     location.reload();
                    },1500);

                
                }
           }
         });
   }
 });
//edit and Pass Id,Data Into Modal
$(document).on('click', '.edit_brand', function(){ 

    var currentRow=$(this).closest("tr"); 
    var id= $(this).attr('id');
    var brand= currentRow.find("td:eq(1)").text(); // get current row 2nd TD          
    var brand_logo= currentRow.find("td:eq(2) img").attr('src'); // get current row 2nd TD       
    //alert(brand_logo);   
    $('#edit_brand_name').val(brand);
    $('#hidden_brand_id').val(id);
    //$("#edit_uploads").val(brand_logo);
    $('#img').html('<img id="brand_logo" name="brand_image" src="'+ brand_logo +'"style="width:100px;">');
  
 });


//update into db
$(document).on('click', '#update_brand', function(e){     

   e.preventDefault();          
    var brand_id = $('#hidden_brand_id').val();
    var form_data = new FormData($('#brand_update')[0]);   
      form_data.append('brand_id', brand_id);
    var brand_name = $('#edit_brand_name').val();
    var brand_logo = $('#brand_logo').attr('src');;
   

   if(brand_name ==''){
     $('#msg2').text('Enter Valid Name!');
   }else if(brand_logo ==''){
     $('#msg2').text('add brand Logo!');
   }else{
     $('#msg2').text('Update Brand!');
  

          $.ajax({
             url:'<?php echo base_url('admin/editBrand');?>',
             type:"POST",
             data:form_data,
             processData: false,
             contentType: false,
             
              success: function(msg){
                 if(msg.status == 0){ 

                    $('#msg2').text('Brand Name Already Exist...!');
                    setTimeout(function(){
                     location.reload();
                    },1500);
                      //location.reload();

                
                }else if(msg.status == 1){ 

                    $('#msg2').text('Brand Name Updated Successfully...!');
                     setTimeout(function(){
                     location.reload();
                    },1500);

                
                }
           }
         });
   }
   
 });
//Delete Brand
    $(document).on('click', '.delete_brand', function(){ 
      var del_id = $(this).attr('id');
    
      var r=confirm("Do you want to delete this?")

      if (r==true){
           event.preventDefault();
        //alert(del_id);
    
       $.ajax({
           url:'<?php echo base_url('admin/delete_brand');?>',
           type:"POST",
           data:{del_id},
      
        success: function(msg){
          if(msg ){
           location.reload();
          }
         }
        });
      }
  });

});


  </script>