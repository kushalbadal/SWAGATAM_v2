<?php
    $active = 'booking';
    include("includes/header.php");
?>
<div class="container vertical-center" style="padding:30px">
        <div class="row" style="    display: flex;
    justify-content: center;
    align-items: center;">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            Payment Details
                        </h3>
                    </div>
                    <div class="panel-body">
                        <form method="post" role="form">
                            <div class="form-group">
                                <label for="cardNumber">
                                    CARD NUMBER</label>
                                <div class="input-group">
                                    <input name="cardNumber" type="text" class="form-control" id="cardNumber"
                                        placeholder="Valid Card Number" required autofocus />
                                    <span class="input-group-addon"><span
                                            class="glyphicon glyphicon-lock"></span></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-7 col-md-7">
                                    <div class="form-group">
                                        <label for="expityMonth" style="display:block">
                                            EXPIRY DATE</label>
                                        <div class="col-xs-6 col-lg-6 pl-ziro">
                                            <input type="text" class="form-control" id="expityMonth" placeholder="MM"
                                                required />
                                        </div>
                                        <div class="col-xs-6 col-lg-6 pl-ziro">
                                            <input type="text" class="form-control" id="expityYear" placeholder="YY"
                                                required /></div>
                                    </div>
                                </div>
                                <div class="col-xs-5 col-md-5 pull-right">
                                    <div class="form-group">
                                        <label for="cvCode">
                                            CV CODE</label>
                                        <input name="cvCode" type="password" class="form-control" id="cvCode" placeholder="CV"
                                            required />
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <ul class="nav nav-pills nav-stacked">
                    <li class="active"><a href="#"><span class="badge pull-right"><span
                                    class="glyphicon glyphicon-usd"></span>4200</span> Final Payment</a>
                    </li>
                </ul>
                <br />
                <input name="submit" type="button" value="Pay" class="btn btn-danger btn-lg btn-block"></input>
            </div>
        </div>
    </div>
  
<?php

include("includes/footer.php");

?>
<?php
    if(isset($_POST['submit'])){
    
   
        $cardNumber = $_POST['cardNumber'];
        $cvCode = $_POST['cvCode'];
       
        
        $get_ma = "select count(*) as total from hosts where host_title='$host_name'";
       $num=mysqli_query($con,$get_ma);
       $nm=mysqli_fetch_object($num);
        if ($nm->total==1) {
        move_uploaded_file($temp_name1,"../admin/product_images/$s_img1");
        move_uploaded_file($temp_name2,"../admin/product_images/$s_img2");
        move_uploaded_file($temp_name3,"../admin/product_images/$s_img3");
        
        $insert_service = "insert into services (s_cat_id,host_name,date,s_title,s_img1,s_img2,s_img3,s_price,address,addressUrl,s_desc,c_id) values ('$s_cat','$host_name',NOW(),'$s_title','$s_img1','$s_img2','$s_img3','$s_price','$address','$addressUrl','$s_desc','$cu_id')";
        
        $run_service = mysqli_query($con,$insert_service);
        
        if($run_service){
            
            echo "<script>alert('Service has been inserted sucessfully')</script>";
            echo "<script>window.open('my_account.php?my_services','_self')</script>";
            
        }
      }else{
        echo "<script>alert('Host doesnot exist')</script>";
      }
        
    }
?>
