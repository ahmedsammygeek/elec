 <?php 
 require 'sidebar.php';

 ?>


 <!-- Content Header (Page header) -->
 <section class="content-header">
    <h1>
        add new product

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
                    <h3 class="box-title">enter data of new product</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <?php 
                if (isset($_GET['msg'])) {
                    //if exist msg in link get this message and do deffrent action in every case and show alert
                    switch ($_GET['msg']) {
                        case 'empty_data':
                        //here user left eny input place empty
                        echo '<div class="alert alert-danger alert-dismissable">
                        <i class="fa fa-ban"></i>
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <b>Alert!</b> please complete required data.
                        </div>';
                        break;
                        case 'error_data':
                        //this case error in sql request
                        echo '<div class="alert alert-danger alert-dismissable">
                        <i class="fa fa-ban"></i>
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <b>Alert!</b> erro in your data inserted please try again.
                        </div>';
                        break;
                        default:
                                            # code...
                        break;
                    }
                }


                ?>
                <a href="showproduct.php"> <button class="btn btn-primary" >products</button></a>

                <form role="form" action="addproduct.php" method="post" enctype="multipart/form-data" ><br>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputFile">title : </label>
                            <input type="text" name="title" id="exampleInputFile" placeholder="enter title">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">content : </label>
                            <textarea type="text" name='content' id="" cols="40" rows="5" placeholder="enter information about this product"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">add image</label>
                            <input type="file" name="file" id="exampleInputFile">
                            <p class="help-block">click to choose image</p>
                        </div>



                    </div><!-- /.box-body -->

                    <div class="box-footer">
                        <input type="submit" name="submit" class="btn btn-primary" value="add product">
                    </div>
                </form>
            </div><!-- /.box -->


        </div><!--/.col (right) -->
    </div>   <!-- /.row -->
</section><!-- /.content -->

<?php 

require 'footer.php';
?>