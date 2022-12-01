<?php
include("config/dbconfig.php");
$value = 0;
/*register code*/
if (isset($_POST['register'])) {
    $pemail = mysqli_real_escape_string($con, $_POST['pemail']);
    $cemail = mysqli_real_escape_string($con, $_POST['cemail']);
    $c_domain_id = mysqli_real_escape_string($con, $_POST['c_domain_id']);
    $nickname = mysqli_real_escape_string($con, $_POST['nickname']);
    $v_code = rand(100000, 999999);
    $data = $con->query("select `email` from `user` where `email` = '$email'");
    if ($data->num_rows == 0) {
        $query = $con->query("INSERT INTO `user`(`email`, `vcode`,`c_domain_id`,`f_name`,`company_email`)  VALUES ('$pemail','$v_code','$c_domain_id','$nickname','$cemail')");
        if ($query) {
            /*$email_to = $email;
            $subject = 'Verify your email.';


            $headers = "From: Secrery <signup@nftprj.com>\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

            $messege = "
            <html>
                <body style='background-color: #eee; font-size: 16px;'>
                <div style='max-width: 600px; min-width: 200px; background-color: #ffffff; padding: 20px; margin: auto;'>
                
                    <p style='text-align: center;color:green;font-weight:bold'>Thank you for reaching out us!</p>
                
                    <p style='color:black;text-align: center'>
                        6 digit authentication code for your email verification is : <strong>$v_code</strong>
                    </p>
                </div>
                </body>
            </html>";

            if (mail($email_to, $subject, $messege, $headers)) {
                session_start();
                $_SESSION["email"] = $email;
                Header("Location: email_verify.php");
            }*/
            session_start();
            $_SESSION["email"] = $pemail;
            Header("Location: email_verify.php");
        } else {
            echo "something went wrong";
            $value = 1;
        }

    } else {
        $value = 2;
    }
}

if (isset($_POST['add_company'])){
    $company_name = mysqli_real_escape_string($con, $_POST['company_name']);
    $company_domain = mysqli_real_escape_string($con, $_POST['company_domain']);
    $verify = $con->query("select `id` from `company_domain` where `domain_name` = '$company_domain'");
    if($verify -> num_rows == 0){
        $insert_company = $con->query("INSERT INTO `company_domain`(`company_name`, `domain_name`) VALUES ('$company_name','$company_domain')");
        if($insert_company){
            $value = 3;
        }else{
            $value = 1;
        }
    }

}

?>
<!DOCTYPE html>
<html lang="en" class="bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link href="assets/images/favicon.png" rel="icon" type="image/png">

    <!-- Basic Page Needs
        ================================================== -->
    <title>Secrery</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Socialite is - Professional A unique and beautiful collection of UI elements">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- icons
    ================================================== -->
    <link rel="stylesheet" href="assets/css/icons.css">

    <!-- CSS 
    ================================================== -->
    <link rel="stylesheet" href="assets/css/uikit.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="unpkg.com/tailwindcss%402.2.19/dist/tailwind.min.css" rel="stylesheet">


    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;display=swap"
          rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


    <style>
        input, .bootstrap-select.btn-group button {
            background-color: #f3f4f6 !important;
            height: 44px !important;
            box-shadow: none !important;
        }
    </style>

</head>
<body class="bg-gray-100">


<div id="wrapper" class="flex flex-col justify-between h-screen">

    <!-- header-->
    <div class="bg-white py-4 shadow dark:bg-gray-800">
        <div class="max-w-6xl mx-auto">


            <div class="flex items-center lg:justify-between justify-around">

                <a href="index.php">
                    <h2 class="text-2xl font-semibold"> Secrery </h2>
                </a>

                <div class="capitalize flex font-semibold hidden lg:block my-2 space-x-3 text-center text-sm">
                    <a href="login.php" class="py-3 px-4">Login</a>
                    <a href="register.php" class="bg-purple-500 purple-500 px-6 py-3 rounded-md shadow text-white">Register</a>
                </div>

            </div>
        </div>
    </div>

    <!-- Content-->
    <div>
        <div class="lg:p-12 max-w-xl lg:my-0 my-12 mx-auto p-6 space-y-">
            <?php if ($value == 1) { ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Sorry!</strong> Something Went Wrong.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php
            } elseif ($value == 2) {
                ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Sorry!</strong> This Email is already registered with us.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php
            }elseif ($value == 3){
            ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Congratulation!</strong> Company has been added successfully.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php
            }
            ?>
            <form class="lg:p-10 p-6 space-y-3 relative bg-white shadow-xl rounded-md" action="#" method="post">
                <h1 class="lg:text-2xl text-xl font-semibold mb-6"> Register </h1>

                <div>
                    <label class="mb-0">Select Your Company Domain </label>
                    <select class="js-example-basic-single" name="c_domain_id">
                        <option value="None">None</option>
                        <?php
                        $query = $con->query("select `id`,`company_name` from `company_domain`");
                        if($query->num_rows > 0){
                            while($row = $query->fetch_assoc()){
                                ?>
                                <option value="<?php echo $row['id'];?>"><?php echo $row['company_name']?></option>
                                <?php
                            }
                        }
                        ?>
                    </select>
                    <p> Can't find your Company Domain?<a href="" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        Add Company
                    </a></p>
                </div>
                <div>
                    <label class="mb-0"> Nick Name</label>
                    <input type="text" name="nickname" placeholder="Enter your Nickname" required
                           class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                </div>
                <div>
                    <label class="mb-0">Personal Email Address</label>
                    <input type="email" name="pemail" placeholder="Your Personal Email" required
                           class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                </div>
                <div>
                    <label class="mb-0">Company Email Address</label>
                    <input type="email" name="cemail" placeholder="Your Company Email" required
                           class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                </div>

                <div>
                    <button type="submit" name="register"
                            class="bg-blue-600 font-semibold p-2 mt-5 rounded-md text-center text-white w-full">
                        Get Started
                    </button>
                </div>
            </form>
            <p class="flex align-items-center justify-content-center">Already have an account? <a href="login.php"> Log In</a></p>


        </div>
    </div>

    <!-- Footer -->

    <div class="lg:mb-5 py-3 uk-link-reset">
        <div class="flex align-items-center justify-content-center lg:flex-row max-w-6xl mx-auto lg:space-y-0 space-y-3">
            <p class="capitalize"> © copyright 2022 by Secrary</p>
        </div>
    </div>

</div>

<!--company add form-->
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Add Company</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="lg:p-10 p-6 space-y-3 relative bg-white shadow-xl rounded-md" action="#" method="post">
                    <div>
                        <label class="mb-0"> Company Name</label>
                        <input type="text" name="company_name" placeholder="Your Company Name" required
                               class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                    </div>
                    <div>
                        <label class="mb-0"> Company Domain</label>
                        <input type="text" name="company_domain" placeholder="Your Company Name" required
                               class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                    </div>
                    <div>
                        <button type="submit" name="add_company"
                                class="bg-blue-600 font-semibold p-2 mt-5 rounded-md text-center text-white w-full">
                            Add Company
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- For Night mode -->
<!--<script>
    (function (window, document, undefined) {
        'use strict';
        if (!('localStorage' in window)) return;
        var nightMode = localStorage.getItem('gmtNightMode');
        if (nightMode) {
            document.documentElement.className += ' night-mode';
        }
    })(window, document);

    (function (window, document, undefined) {

        'use strict';

        // Feature test
        if (!('localStorage' in window)) return;

        // Get our newly insert toggle
        var nightMode = document.querySelector('#night-mode');
        if (!nightMode) return;

        // When clicked, toggle night mode on or off
        nightMode.addEventListener('click', function (event) {
            event.preventDefault();
            document.documentElement.classList.toggle('dark');
            if (document.documentElement.classList.contains('dark')) {
                localStorage.setItem('gmtNightMode', true);
                return;
            }
            localStorage.removeItem('gmtNightMode');
        }, false);

    })(window, document);
</script>-->

<!-- Javascript
================================================== -->
<script>
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });
</script>
<script src="code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
<script src="assets/js/tippy.all.min.js"></script>
<script src="assets/js/uikit.js"></script>
<script src="assets/js/simplebar.js"></script>
<!--<script src="assets/js/custom.js"></script>-->
<script src="assets/js/bootstrap-select.min.js"></script>
<script src="unpkg.com/ionicons%405.2.3/dist/ionicons.js"></script>


</body>

<!-- Mirrored from demo.foxthemes.net/socialitev2.2/register.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Nov 2022 06:21:01 GMT -->
</html>