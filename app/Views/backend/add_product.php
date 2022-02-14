<?=$this->include("backend/layouts/header")?>
<?=$this->include("backend/layouts/sidebar")?>
    <style>
        #frm-add-user label.error{
            color:red;
        }
    </style>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
       <div class="col-6">
<div class="card card-primary">
 
              <div class="card-header">
                <h3 class="card-title">Add-Product</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="product" enctype="multipart/form-data" action="" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Product Name</label>
                    <input type="text" class="form-control" id="product_name" name="product_name"placeholder="Enter Product Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Product SKU</label>
                    <input type="text" class="form-control" id="product_sku" name="product_sku"placeholder="Enter Product SkU">
                  </div> 

                   <div class="form-group">
                    <label for="exampleInputPassword1">Product Price</label>
                    <input type="text" class="form-control" id="product_price" name="product_price"placeholder="Enter Product Price">
                  </div> 

                <div class="form-group">
                  <label>Choose Brand</label>
                  <select class="form-control " id="brand_name" name="brand_name">
                    <option>Choose Brand</option>
                  <?php foreach ($brand_data as $item): ?>
                    <option value="<?php echo $item['id']; ?>"><?php echo $item['brand_name']; ?></option>
                      
                  <?php endforeach ?>
 
               
                  </select>
                </div>

                <div class="form-group">
                  <label>Choose Category</label>
                  <select class="form-control " id="category_name" name="category_name">
                  
                  </select>
                </div>
                  <div class="form-group">
                    <label for="Product_image">Product  Image(Choose multiple image for galley also!)</label>
                  <div class="custom-file">
                      <!-- <input type="file" class="custom-file-input" id="Product_image" name="Product_image"> -->
                      <input type="file" name="product_image[]" id="product_image" class="form-group" multiple>
                    </div>
                  </div> 

                <div class="form-group">
                  <label>Product Availabilty</label>
                  <select id="brand"class="form-control select2 select2-hidden-accessible" id="product_status" name="product_status">
                    
                    <option value="1">Active</option>
                    <option value="0">Deactie</option>
                   
                  
                  </select>
                </div>
<!--           <div id="dynamic_field_2">
             <div class="row" >
             
               <div class="col-4">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Sku No</label>
                      <input type="text" class="form-control" id="product_name" name="product_name"placeholder="Enter Product Number">
                     
                    </div>
               </div>
                <div class="col-4">
                   
                    <div class="form-group">
                     <label>Date and time:</label>
                     <div id="content">
                        <input class="form-control datepicker_recurring_start"/>
                    </div>
                                     
                    
                    </div>
               </div> 
                <div class="col-2">
                   <div class="form-group">
                     <button type="button" name="add" class="btn btn-success add-options" id="add_row">Add </button>
                   </div>
               </div> 
             </div>
           </div> -->
                <div class="form-group">
                  <label>Product Description</label>
                 <div id="summernote"></div>
               </div>

                <!-- /.card-body -->

                <div class="card-footer">
                <!--   <button type="submit" class="btn btn-primary">Submit</button> -->
                  <input type="button" name="submit" id="submit" class="btn btn-primary" value="Submit" />  
                </div>
              </form>
             </div>
            </div>
          </div>
 <?=$this->include("backend/layouts/footer")?>
<script type="text/javascript">




$(document).ready(function() {
  $('#summernote').summernote();
  $('#brand_name').on('change', function(e) {
     e.preventDefault();
    var brand_id =  this.value ;

     $.ajax({
             url:'<?php echo base_url('getCategoryById');?>',
             type:"POST",
             data:{brand_id},
          beforeSend: function(){
                
            $('#category_name').empty();
               },
          success: function(response){
            $('#category_name').find('option').not(':first').remove();
            $.each(JSON.parse(response),function(index,data){
            $('#category_name').append('<option value="'+data['id']+'">'+data['category_name']+'</option>');
            });
           
           }
          });
  });


});
/*     $('#summernote').summernote();
              var j=1;  
              var k=1;  
         
              $('#add_row').click(function(){  
                   j++;  
                  
                   $('#dynamic_field_2').append(' <div class="row" id="row2'+j+'"><div class="col-4">\
                    <div class="form-group">\
                      <label for="exampleInputEmail1">Sku No</label>\
                      <input type="text" class="form-control" id="product_name" name="product_name"placeholder="Enter Product Number">\
                     \
                    </div>\
               </div>\
                <div class="col-4">\
                   \
                    <div class="form-group">\
                     <label>Date and time:</label>\
                       <div id="content">\
                        <input class="form-control datepicker_recurring_start"/>\
                    </div>\
                       \
                    </div>\
               </div>\
                <div class="col-2">\
                   <div class="form-group">\
                     <button type="button" name="remove" id="'+j+'" class="btn btn-danger items_remove">X</button>\
                   </div>\
               </div></div> ');  
                   

              });  
             
              $('body').on('focus',".datepicker_recurring_start", function(){
                  $(this).datepicker();
              });
              $(document).on('click', '.items_remove', function(){  
                   var button_id = $(this).attr("id");   
                   $('#row2'+button_id+'').remove();  
              }); */

  $(document).on('click', '#submit', function(){ 
    var html = $('#summernote').summernote('code');

   var form_data = new FormData($('#product')[0]);
  
   form_data.append('description', html);


   /* var category_id = $('#category_id').find(":selected").val();
    var product_name = $('#product_name').val();
    var product_sku = $('#product_sku').val();*/
   if($('#product_name').val() == ''){
  
      Swal.fire('Product Name Is Required!', '', 'error')
    
   }else if($('#product_sku').val() == ''){
  
      Swal.fire('Product SKU Is Required!', '', 'error')
    
   }else if($('#product_price').val() == ''){
  
      Swal.fire('Product Price Is Required!', '', 'error')
    
   }else if($('#brand_name').val() == 'Choose Brand'){
  
      Swal.fire('Brand Name Is Required!', '', 'error')
    
   }else if($('#category_name').val() == ''){
  
      Swal.fire('Category Name Is Required!', '', 'error')
    
   }else if($('#product_image').val() == ''){
  
      Swal.fire('Product Image  Is Required!', '', 'error')
    
   }else if($('#summernote').summernote('isEmpty')){
  
      Swal.fire('Product Description  Is Required!', '', 'error')
    
   }else{
        $.ajax({
             url:'<?php echo base_url('addSingleProduct');?>',
             type:"POST",
             data:form_data,
             processData: false,
             contentType: false,
             
              success: function(data){
                //console.log(data);
               Swal.fire(data.msg)   

                window.location.href = '<?php echo base_url('admin/Products');?>'; 
           }
         });
   }

 });

  </script>


