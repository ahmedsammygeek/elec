<?php 
$active = "tur";
require 'header.php';

?>
<section id="portfolio">
    <div class="container">
        <div class="center">
         <h2>Turbines</h2>
         <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
     </div>
     <div class="row">
        <div class="portfolio-items">
           <?php
           require 'admin/connection.php';
           $query=mysqli_query($connect , "SELECT * FROM products");
           while ($result = mysqli_fetch_assoc($query)) {
               extract($result);
               echo ' <div class="portfolio-item apps col-xs-12 col-sm-4 col-md-3">
            <div class="recent-work-wrap">
                <img class="img-responsive" style="width:290px; height:220px;" src="admin/image/'.$image.'" alt="">
                <div class="overlay">
                    <div class="recent-work-inner">
                        <h3><a href="#">'.$title.'</a></h3>
                        <p>'.$content.'</p>
                        <a class="preview" href="admin/image/'.$image.'" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                    </div> 
                </div>
            </div>
        </div>';
           } 
           ?>



         
    </div>

</div>
</div>
</section><!--/#portfolio-item-->
<?php 

require 'footer.php';
?>