<?php 
$active = "home";
require 'header.php';
?>

<section id="main-slider" class="no-margin">
    <div class="carousel slide">

        <div class="carousel-inner">
            <div class="item active" >
                <div class="container">
                    <div class="row slide-margin">
                        <div class="col-sm-6 hidden-xs animation animated-item-4">
                            <div class="slider-img">
                                <?php require 'admin/connection.php';
                                $query=mysqli_query($connect , "SELECT image FROM products");
                                while ($result=mysqli_fetch_assoc($query)) {
                                    extract($result);
                                }

                                ?>
                                <img src="<?php echo "admin/image/$image"; ?>" style="width:1043px;height372px" >
                            </div>
                        </div>

                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.carousel-inner-->
    </div><!--/.carousel-->
    <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
        <i class="fa fa-chevron-left"></i>
    </a>
    <a class="next hidden-xs" href="#main-slider" data-slide="next">
        <i class="fa fa-chevron-right"></i>
    </a>
</section><!--/#main-slider-->






<section id="conatcat-info">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="media contact-info wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="pull-left">
                        <i class="fa fa-phone"></i>
                    </div>
                    <div class="media-body">
                        <h2>how to contact with us?</h2>
                        <p>contact with us through: <br> <a href="www.facebook.com">facebook</a>
                            <br><a href="contact.php">here our website</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.container-->    
    </section><!--/#conatcat-info-->

    <?php 

    require 'footer.php';
    ?>