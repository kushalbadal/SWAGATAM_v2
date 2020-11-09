<html>
<?php
include("includes/db.php");
include("functions/functions.php");
?>

<head>
    <title>
        Signup Form
    </title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
    <style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    body {
        background: rgba(240, 52, 52, 1);
        font-family: 'Lato', sans-serif;
        color: #222;
    }

    p {
        color: #919191;
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
        margin-left: 9rem;
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
    #address #email,
    #pass {
        position: relative;
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

    #email::before {
        content: '\f0e0';
        color: #f03434;
        display: inline-block;
        font-family: 'FontAwesome';
        font-size: 2.3rem;
        padding: 4.5px 14px;
        border-radius: 5px 0px 0px 5px;
        background-color: rgb(232, 240, 254);
    }

    #address::before {
        content: '\f279';
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

    input[type=email],
    input[type=text],
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

    #pp {
        margin-top: 3rem;
    }

    #column-right {
        padding: 0;
    }

    @media (max-width:991px) {

        .wrap-left {
            height: 60%;
        }

        .wrap-right {
            height: 100%;
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
                        <img src="images/swagatamLogoWhite.png" alt="Swagatam Logo" width="50">
                    </span>
                    <h1>
                        SWAGATAM
                    </h1>
                    <h4>
                        WHEREVER YOU GO &mdash; GO WITH YOUR HEART
                    </h4>
                </div>
            </div>
            <div class="col-md-6" id="column-right">
                <div id="myoverlay" class="overlay">
                    <div class="wrap-right">
                        <h2>Create Account</h2>
                        <h5 class="badge badge-primary
                <?php
                $isError =  isset($_GET['msg']);
                if ($isError === false) {
                    echo 'hide';
                }
                ?> " id="error-msg">
                            <!-- Content -->
                            <?php
                            $isError =  isset($msg);
                            if ($isError === true) {
                                echo $msg;
                            }
                            ?>
                        </h5>
                        <form action="signup.php" method="post" enctype="multipart/form-data">
                            <p id="user">
                                <input type="text" placeholder="Enter your First name" name="c_fname" required>
                            </p>
                            <p id="user">
                                <input type="text" placeholder="Enter your Last name" name="c_lname" required>
                            </p>
                            <p id="email">
                                <input type="email" placeholder="Enter your Email address" name="c_email" required>
                            </p>
                            <p id="address">
                                <input type="text" placeholder="Enter your Address" name="c_address" required>
                            </p>
                            <p id="pass"><input type="password" placeholder="Enter your Password" name="c_pass"
                                    required>
                            </p>
                            <p id="pp">
                                <span>Your Profile Picture
                                </span>
                                <input type="file" name="c_image" required>
                            </p>
                            <p>
                                <input type="submit" name="register" value="Join Now" required>

                                <!-- <input type="submit" name="login" value="Login" required> -->
                            </p>



                        </form>
                        <p>Already have an account?<a href="login.php">&nbsp; Login Here</a></p>
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

if (isset($_POST['register'])) {

    $c_fname = $_POST['c_fname'];
    $c_lname = $_POST['c_lname'];

    $c_email = $_POST['c_email'];

    $c_pass = $_POST['c_pass'];

    $c_address = $_POST['c_address'];

    $c_image = $_FILES['c_image']['name'];

    $c_image_tmp = $_FILES['c_image']['tmp_name'];

    $c_ip = getRealIpUser();

    $get_ma = "select count(*) as total from customers where customer_email='$c_email'";
    $num = mysqli_query($con, $get_ma);
    $nm = mysqli_fetch_object($num);
    if ($nm->total >= 1) {
        $msg = "Email Already Exist";
        echo "<script>alert('Email Already Exist.')</script>";
    } else {
        move_uploaded_file($c_image_tmp, "customer/customer_images/$c_image");

        $insert_customer = "insert into customers (customer_fname,customer_lname,customer_email,customer_pass,customer_address,customer_image,customer_ip,is_host) values ('$c_fname','$c_lname','$c_email',md5('$c_pass'),'$c_address','$c_image','$c_ip','0')";

        $run_customer = mysqli_query($con, $insert_customer);

        $sel_cart = "select * from cart where ip_add='$c_ip'";

        $run_cart = mysqli_query($con, $sel_cart);

        $check_cart = mysqli_num_rows($run_cart);
        session_start();
        if ($check_cart > 0) {

            /// If register have items in cart ///

            $_SESSION['customer_email'] = $c_email;
            $msg = urlencode('Register Successfull. Login Now');
            echo "<script>window.open('login.php?msg=$msg','_self')</script>";
        } else {

            /// If register without items in cart ///

            $_SESSION['customer_email'] = $c_email;
            $msg = urlencode('Register Successfull. Login Now');
            echo "<script>window.open('login.php?msg=$msg','_self')</script>";
        }
    }
}

?>
