<?php 

    session_start();
    include("includes/db.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Swagatam Admin Pannel</title>
    <link rel="stylesheet" href="css/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <!-- <link rel="stylesheet" href="css/login.css"> -->

       <style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    body {
        height: 100vh;
        background: rgba(240, 52, 52, 1);
        font-family: 'Lato', sans-serif;
        color: #222;
    }

    .wrap-left {
        width: 100%;
        height: 90vh;
        padding: 20px;
        background: rgba(240, 52, 52, 1);
        position: relative;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .wrap-left h1 {
        color: white;
        font-size: 6rem;
    }

    .wrap-left h4 {
        letter-spacing: 2px;
    }

    .wrap-right {
        width: 100%;
        height: 100vh;
        padding: 20px;
        background: white;
        position: relative;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .wrap-right h2 {
        font-size: 2.5rem;
        text-align: center;
        text-transform: uppercase;
        letter-spacing: 2px;
    }

    .wrap-right h2::after {
        content: "";
        display: block;
        margin: 5px 0;
        border-bottom: 2px solid #f03434;
    }

    form {
        margin-top: 10px;

    }

    input {
        padding: 10px;
        box-sizing: border-box;
        margin-bottom: 10px;
        border: none;
        outline: none;
        font-size: 15px;
    }

    #user,
    #pass {
        position: relative;
        left: -91px;
    }

    #user::before {
        content: '\f007';
        color: #f03434;
        display: inline-block;
        font-family: 'FontAwesome';
        font-size: 2.3rem;
        padding: 4.5px 14px;
        border-radius: 5px 0px 0px 5px;
        background-color: rgb(232, 240, 254);
    }

    #pass::before {
        content: '\f084';
        color: #f03434;
        display: inline-block;
        font-family: 'FontAwesome';
        font-size: 2.3rem;
        padding: 4.5px 14px;
        border-radius: 5px 0px 0px 5px;
        background-color: rgb(232, 240, 254);
    }

    input[type=email],input[type=text],
    input[type=password] {
        position: absolute;
        display: inline-block;
        border-radius: 0px 5px 5px 0px;
        background-color: rgb(232, 240, 254);
    }

    input[type=submit] {
        position: relative;
        display: inline-block;
        background-color: white;
        letter-spacing: 1px;
        font-weight: 700;
        color: #f03434;
        font-size: 20px;
        transition: all 0.35s;
        border: 1px solid #f03434;
        border-radius: 5px;
        margin: .6rem 0;
        margin-bottom: 2.8rem;
    }

    input[type=submit]:hover {
        color: #fff;
        background: #f03434;
        transition-delay: 0.2s;

    }

    .closebtn {
        position: absolute;
        top: 20px;
        left: 15px;
        font-size: 1.5rem;
        cursor: pointer;
        color: #000;
    }

    .closebtn:hover {
        color: #fff;
    }

    #error-msg {
        background-color: rgba(240, 52, 52, 1);
        color: white;
        padding: .8rem;
    }

    #column-right {
        padding: 0;
    }

    @media (max-width:991px) {

        
        .wrap-left {
            height: 40vh;
        }
        .wrap-left h1
        {
            font-size:4rem;
        }
         .wrap-left h4
        {
            font-size:1.4rem;
        }
        .wrap-right {
            height: 60vh;
        }
        #swagatamLogo
        {
            width:30px;
        }
    }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="wrap-left">
                    <span class="closebtn" onclick="closeForm()" title="close overlay">
                        <img src="../images/swagatamLogoWhite.png" alt="Swagatam Logo" width="50" id="swagatamLogo">
                    </span>
                    <h1>
                        SWAGATAM ADMIN
                    </h1>
                    <h4>
                        WHERE MAGIC HAPPENS
                    </h4>
                </div>
            </div>
            <div class="col-md-6" id="column-right">
                <div id="myoverlay" class="overlay">
                    <div class="wrap-right">
                        <h2>Admin Login</h2>
                        <h5 class="badge badge-primary
                <?php
                $isError =  isset($_GET['msg']);
                if ($isError === false) {
                    echo 'hide';
                }
                ?> " id="error-msg">
                            <!-- Contenttt -->
                            <?php
                            $isError =  isset($_GET['msg']);
                            if ($isError === true) {
                                echo $_GET['msg'];
                            }
                            ?>
                        </h5>
                        <form action="" method="post" enctype="multipart/form-data">
                            <p id="user"><input type="text" placeholder="Enter your Email" name="admin_email" required></p>
                            <p id="pass"><input type="password" placeholder="Enter your Password" name="admin_pass"
                                    required></p>
                            <input type="submit" name="admin_login" value="Login" required>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    echo "<script> document.getElementById('myoverlay').style.display = 'block';</script>";
    ?>
    <!-- <button class="openbtn" onclick="openForm()">Click Here to Sign Up</button> -->

    <script type="text/javascript">
    function openForm() {
        document.getElementById("myoverlay").style.display = "block";
    }

    function closeForm() {
        window.open('index.php', '_self');
    }
    </script>
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>

</body>
</html>


<?php 

    if(isset($_POST['admin_login'])){
        
        $admin_email = mysqli_real_escape_string($con,$_POST['admin_email']);
        
        $admin_pass = md5(mysqli_real_escape_string($con,$_POST['admin_pass']));
        
        $get_admin = "select * from admins where admin_email='$admin_email' AND admin_pass='$admin_pass'";
        
        $run_admin = mysqli_query($con,$get_admin);
        
        $count = mysqli_num_rows($run_admin);
        
        if($count==1){
            
            $_SESSION['admin_email']=$admin_email;
            
            echo "<script>alert('Logged in. Welcome Back')</script>";
            
            echo "<script>window.open('index.php?dashboard','_self')</script>";
            
        }else{
            
            echo "<script>alert('Email or Password is Wrong !')</script>";
            
        }
        
    }

?>