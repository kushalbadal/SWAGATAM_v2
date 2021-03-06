a<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li>
                
                <i class="fa fa-dashboard"></i> Dashboard / Insert Host
                
            </li>
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
                <h3 class="panel-title"><!-- panel-title begin -->
                
                    <i class="fa fa-money fa-fw"></i> Insert Host
                
                </h3><!-- panel-title finish -->
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <form action="" class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal begin -->
                    <div class="form-group"><!-- form-group 1 begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                        Host Name 
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <input name="manufacturer_name" type="text" class="form-control" required="required">
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group 1 finish -->
                     <div class="form-group"><!-- form-group 1 begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                        Host Email 
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <input type="Email" name="manufacturer_email"  class="form-control" required="required">
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group 1 finish -->
                     <div class="form-group"><!-- form-group 1 begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                        Host Contact 
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <input name="manufacturer_contact" type="text" class="form-control" required="required">
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group 1 finish -->
                     <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label">Category </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <select name="product_cat" class="form-control"><!-- form-control Begin -->
                              
                              <option selected disabled> Select a Category </option>
                              
                              <?php 
                              
                              $get_cats = "select * from categories";
                              $run_cats = mysqli_query($con,$get_cats);
                              
                              while ($row_cats=mysqli_fetch_array($run_cats)){
                                  
                                  $cat_id = $row_cats['cat_id'];
                                  $cat_title = $row_cats['cat_title'];
                                  
                                  echo "
                                  
                                  <option value='$cat_id'> $cat_title </option>
                                  
                                  ";
                                  
                              }
                              
                              ?>
                              
                          </select><!-- form-control Finish -->
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                    <div class="form-group"><!-- form-group 2 begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                            Choose As Top Host
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <input name="manufacturer_top" type="radio" value="yes">
                            <label>Yes</label>
                            
                        
                            <input name="manufacturer_top" type="radio" value="no">
                            <label>No</label>
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group 2 finish -->
            
                    <div class="form-group"><!-- form-group 3 begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                        Host Image
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <input type="file" name="manufacturer_image" class="form-control" required="required">
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group 3 finish -->
                    <div class="form-group"><!-- form-group 4 begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --></label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <input type="submit" name="submit" value="Submit Host" class="btn btn-primary form-control">
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group 4 finish -->
                </form><!-- form-horizontal finish -->
            </div><!-- panel-body finish -->
            
        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->

<?php  

    if(isset($_POST['submit'])){
        
        $manufacturer_name = $_POST['manufacturer_name'];
        $manufacturer_store = $_POST['manuf
        acturer_store'];

        $manufacturer_email = $_POST['manufacturer_email'];

        $manufacturer_contact = $_POST['manufacturer_contact'];
        
        $manufacturer_top = $_POST['manufacturer_top'];
        
        $manufacturer_image = $_FILES['manufacturer_image']['name'];
        
        $temp_name = $_FILES['manufacturer_image']['tmp_name'];
        if (filter_var($manufacturer_email, FILTER_VALIDATE_EMAIL)) {
     
        move_uploaded_file($temp_name,"manu_image/$manufacturer_image");
        

   $insert_manufacturer = "insert into manufacturers (manufacturer_title,verification_code,verified,created_at,manufacturer_top,manufacturer_store,manufacturer_image,manufacturer_email,manufacturer_contact) values ('$manufacturer_name','$verificationcode','0','$created_at','$manufacturer_top','$manufacturer_store','$manufacturer_image','$manufacturer_email','$manufacturer_contact')";
        
        $run_manufacturer = mysqli_query($con,$insert_manufacturer);
        
        echo "<script>alert('Your new Host has been inserted')</script>";
        
        echo "<script>window.open('index.php?view_hosts','_self')</script>";
        
    }
    else{
        echo "<script>alert('Invalid Email')</script>";
    }
}

?>

<?php } ?>