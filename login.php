<html>
<?php
session_start();
include("includes/db.php");
include("functions/functions.php");
?>

<head>
    <title>
        login form
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
        height: 100%;
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

    input[type=email],
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
            height: 40%;
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
            height: 60%;
        }
        #swagatamLogo
        {
            width:30;
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
                        <img src="images/swagatamLogoWhite.png" alt="Swagatam Logo" width="50" id="swagatamLogo">
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
                        <h2>Member Login</h2>
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
                        <form action="login.php" method="post" enctype="multipart/form-data">
                            <p id="user"><input type="email" placeholder="Enter your Email" name="c_email" required></p>
                            <p id="pass"><input type="password" placeholder="Enter your Password" name="c_pass"
                                    required></p>
                            <input type="submit" name="login" value="Login" required>
                        </form>
                        <p>Don't have an account? <a href="signup.php">Signup Here</a></p>
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
if (isset($_POST['login'])) {

    $customer_email = mysqli_real_escape_string($con, $_POST['c_email']);

    $customer_pass = md5(mysqli_real_escape_string($con, $_POST['c_pass']));

    $select_customer = "select * from customers where customer_email='$customer_email' AND customer_pass='$customer_pass'";

    $run_customer = mysqli_query($con, $select_customer);

    $get_ip = getRealIpUser();

    $check_customer = mysqli_num_rows($run_customer);

    $select_cart = "select * from cart where ip_add='$get_ip'";

    $run_cart = mysqli_query($con, $select_cart);

    $check_cart = mysqli_num_rows($run_cart);

    if ($check_customer == 0) {

        echo "<script>alert('Your email or password is wrong')</script>";

        exit();
    }

    if ($check_customer == 1) {

        $_SESSION['customer_email'] = $customer_email;
        echo "<script>window.open('customer/index.php','_self')</script>";
    }
}
// isset($err_msg) ? $err_msg = $_GET['msg'] : null;
?>