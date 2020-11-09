

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
               <h3 class="panel-title"><!-- panel-title begin -->
               
                   <i class="fa fa-tags"></i>  View Services
                
               </h3><!-- panel-title finish --> 
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <div class="table-responsive"><!-- table-responsive begin -->
                    <table class="table table-striped table-bordered table-hover"><!-- table table-striped table-bordered table-hover begin -->
                        
                        <thead><!-- thead begin -->
                            <tr><!-- tr begin -->
                                <th> Service ID: </th>
                                <th> Service Title: </th>
                                <th> Service Image: </th>
                                <th> Service Price: </th>
                                <th> Service Booked: </th>
                                <th> Host Name: </th>
                                <th> Service Added Date: </th>
                                <th> Service Delete: </th>
                                <th> Service Edit: </th>
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                            
                            <?php 
          
                                $i=0;
                            $customer_session = $_SESSION['customer_email'];
                            $get_id="select customer_id from customers where customer_email='$customer_session'";
                             $run_id = mysqli_query($con,$get_id);

                                $row_id = mysqli_fetch_array($run_id);

                                $c_id = $row_customer['customer_id'];
                               
                                $get_pro = "select * from services where c_id='$c_id'";
                                
                                $run_pro = mysqli_query($con,$get_pro);
          
                                while($row_pro=mysqli_fetch_array($run_pro)){
                                    
                                    $pro_id = $row_pro['s_id'];
                                    
                                    $pro_title = $row_pro['s_title'];
                                    
                                    $pro_img1 = $row_pro['s_img1'];
                                    
                                    $pro_price = $row_pro['s_price'];
                                    
                                    $Manu_name = $row_pro['host_name'];
                                    
                                    $pro_date = $row_pro['date'];
                                    
                                    $i++;
                            
                            ?>
                            
                            <tr><!-- tr begin -->
                                <td> <?php echo $i; ?> </td>
                                <td> <?php echo $pro_title; ?> </td>
                                <td> <img src="../admin/product_images/<?php echo $pro_img1; ?>" width="60" height="60"></td>
                                <td> $ <?php echo $pro_price; ?> </td>
                                <td> 
                                </td>
                                <td> <?php echo $Manu_name; ?> </td>
                                <td> <?php echo $pro_date ?> </td>
                                <td> 
                                     
                                     <a href="delete_facilities.php?delete_facilities=<?php echo $pro_id; ?>">
                                     
                                        <i class="fa fa-trash-o"></i> Delete
                                    
                                     </a> 
                                     
                                </td>
                                <td> 
                                    
                                     <a href="edit_facilities.php?edit_facilities=<?php echo $pro_id; ?>">
                                     
                                        <i class="fa fa-pencil"></i> Edit
                                    
                                     </a> 
                                    
                                </td>
                            </tr><!-- tr finish -->
                            
                            <?php } 
                            if ($i==0){

                               ?>
                               <td colspan="9" align="center">No services added.<a href="check_host.php"><strong>Click Here</strong></a> to add your services.</td> 
                               <?php }?>
                            
                        </tbody><!-- tbody finish -->
                        
                    </table><!-- table table-striped table-bordered table-hover finish -->
                </div><!-- table-responsive finish -->
            </div><!-- panel-body finish -->
            
        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->
