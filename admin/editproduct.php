 <?php 
 require 'sidebar.php';

 ?>


 <!-- Content Header (Page header) -->
 <section class="content-header">
  <h1>
    update product

  </h1>

</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header">
          <h3 class="box-title">update data</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        <?php 
        if (isset($_GET['id'])) {
         $id=$_GET['id'];
       }

       require 'connection.php';
       $query=mysqli_query($connect , "SELECT * FROM products WHERE id=$id ");
       while ($result=mysqli_fetch_assoc($query)) {
         extract($result);
       }
       ?>
       <a href="showproduct.php"> <button class="btn btn-primary" >products</button></a>

       <form role="form" action="updateproduct.php<?php echo "?id=$id&&img=$image"; ?>" method="post" enctype="multipart/form-data" ><br>
        <div class="box-body">
          <?php
          if (isset($_GET['msg'])) {
           switch ($_GET['msg']) {
             case 'empty_data':
             echo '<div class="alert alert-danger alert-dismissable">
             <i class="fa fa-ban"></i>
             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
             <b>Alert!</b>   you leave input empty please complete inputs and try again.
             </div>';
             break;
             case 'error_data':
             echo '<div class="alert alert-danger alert-dismissable">
             <i class="fa fa-ban"></i>
             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
             <b>Alert!</b> enter this file as image .
             </div>';
             break;
             case 'error_update':
             echo '<div class="alert alert-danger alert-dismissable">
             <i class="fa fa-ban"></i>
             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
             <b>Alert!</b>   an error in your update please try again.
             </div>';
             break;

             default:
                                     # code...
             break;
           }
         } 
         ?>
         <div class="form-group">
          <label for="exampleInputFile">title : </label>
          <input type="text" value="<?php echo "$title"; ?>" name="title" id="exampleInputFile" placeholder="enter title">
        </div>
        <div class="form-group">
          <label for="exampleInputFile">content : </label>
          <textarea type="text" name='content' id="" cols="40" rows="5" placeholder="enter information about this product"><?php echo "$content"; ?></textarea>
        </div>

        <div class="form-group">
          <label for="exampleInputFile">add image</label>
          <input type="file" name="file" id="exampleInputFile">
          <p class="help-block">click to choose image</p>
          <?php echo '<img src="image/'.$image.'"><h3>'.$image.'</h3>'  ; ?>
        </div>


      </div><!-- /.box-body -->

      <div class="box-footer">
       <button  name="submit" type="submit" class="btn btn-primary">update</button>
     </div>
   </form>
 </div><!-- /.box -->


</div><!--/.col (right) -->
</div>   <!-- /.row -->
</section><!-- /.content -->

<?php 

require 'footer.php';
?>