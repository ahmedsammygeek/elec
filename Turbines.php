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
             echo " 
             <div class='portfolio-item joomla html bootstrap col-xs-12 col-sm-4 col-md-3'>
             <div class='recent-work-wrap'>
             <h2 class='text-center'>$title</h2>
             <img class='img-responsive' src='admin/image/$image'>
             <h3>$content</h3>
             
             </div>      
             </div><!--/.portfolio-item-->";
         } 
         ?>




     </div>
 </div>
</div>
</section><!--/#portfolio-item-->
<?php 

require 'footer.php';
?>