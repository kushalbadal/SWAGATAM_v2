<?php
$active = '';
include("includes/header.php");

?>
   <div id="content"><!-- #content Begin -->
       <div class="container"><!-- container Begin -->
           <div class="col-md-12"><!-- col-md-12 Begin -->
               
               <ul class="breadcrumb"><!-- breadcrumb Begin -->
                   <li>
                       <a href="index.php">Home</a>
                   </li>
                   <li>
                       Homestay
                   </li>
               </ul><!-- breadcrumb Finish -->
               
           </div><!-- col-md-12 Finish -->
           
           <?php

           getProducts(7);

           ?>
       </div><!-- container Finish -->
        <center>
                   <ul class="pagination"><!-- pagination Begin -->

                        <?php getPaginator(7,'homestay'); ?>

                   </ul><!-- pagination Finish -->
               </center>
   </div><!-- #content Finish -->
   
   <?php 
    
    include("../includes/footer.php");
    
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>