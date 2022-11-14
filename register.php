<?php
include("config/dbconfig.php");
$value = 0;
if (isset($_POST['register'])) {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $domain_name = mysqli_real_escape_string($con, $_POST['domain_name']);
    $dob = mysqli_real_escape_string($con, $_POST['dob']);
    $company = mysqli_real_escape_string($con, $_POST['company']);
    $industry = mysqli_real_escape_string($con, $_POST['industry']);
    $position = mysqli_real_escape_string($con, $_POST['position']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $v_code = rand(100000,999999);
    $data = $con->query("select `email` from `user` where `email` = '$email'");
    if ($data->num_rows == 0){
        $query = $con->query("INSERT INTO `user`(`email`, `industry`, `position`, `company`, `domain_name`, `dob`, `gender`,`vcode`) 
VALUES ('$email','$industry','$position','$company','$domain_name','$dob','$gender','$v_code')");
        if ($query) {
            session_start();
            $_SESSION["email"] = $email;
            Header("Location: email_verify.php");
        } else {
            echo "something went wrong";
            $value = 1;
        }
    }else{
        $value = 2;
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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

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

                <a href="#">
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
        <?php if ($value == 1){?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Sorry!</strong> Something Went Wrong.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php
        } elseif ($value == 2){
            ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Sorry!</strong> This Email is already registered with us.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php
        }
            ?>
            <form class="lg:p-10 p-6 space-y-3 relative bg-white shadow-xl rounded-md" action="#" method="post">
                <h1 class="lg:text-2xl text-xl font-semibold mb-6"> Register </h1>
                <div>
                    <label class="mb-0"> Email Address</label>
                    <input type="email" name="email" placeholder="Your Company Email" required
                           class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                </div>
                <div>
                    <label class="mb-0"> Domain Name </label>
                    <input type="text" name="domain_name" placeholder="Domain Name" required
                           class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                </div>
                <div>
                    <label class="mb-0"> Date of Birth </label>
                    <input type="date" name="dob" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full" required>
                </div>
                <div class="grid lg:grid-cols-2 gap-3">
                    <div>
                        <label class="mb-0"> Company Name </label>
                        <input type="text" name="company" list="company"
                               class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full" required>
                        <datalist id="company">
                            <option>Volvo</option>
                            <option>Saab</option>
                            <option>Mercedes</option>
                            <option>Audi</option>
                        </datalist>
                    </div>
                    <div>
                        <label class="mb-0"> Industry </label>
                        <input type="text" name="industry" list="industry"
                               class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full" required>
                        <datalist id="industry">
                            <option>Tech</option>
                            <option>Finance</option>
                            <option>Hardware and Semiconductor</option>
                            <option>E-Commerce and Retail</option>
                            <option>Gaming</option>
                            <option>Auto</option>
                            <option>Media and Entertainment</option>
                            <option>Telecom</option>
                            <option>Health</option>
                            <option>Aviation</option>
                        </datalist>
                    </div>
                </div>
                <div class="grid lg:grid-cols-2 gap-3">
                    <div>
                        <label class="mb-0"> Position </label>
                        <input type="text" name="position" list="position"
                               class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full" required>
                        <datalist id="position">
                            <option>Account Manager</option>
                            <option>Analyst</option>
                            <option>Assistant Manager</option>
                            <option>Associate</option>
                            <option>Business Analyst</option>
                            <option>Consultant</option>
                            <option>Director</option>
                            <option>Engineer</option>
                            <option>Manager</option>
                            <option>Partner</option>
                            <option>Product Manager</option>
                            <option>Senior Analyst</option>
                            <option>Senior Associate</option>
                            <option>Senior Consultant</option>
                            <option>Senior Manager</option>
                            <option>Software Engineer</option>
                            <option>Student</option>
                            <option>Unemployed</option>
                            <option>Vice President</option>
                        </datalist>
                    </div>
                    <div>
                        <label class="mb-0"> Gender </label>
                        <input type="text" name="gender" list="gender"
                               class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full" required>
                        <datalist id="gender">
                            <option>Male</option>
                            <option>Female</option>
                            <option>Others</option>
                        </datalist>
                    </div>
                </div>


                <!--<div class="checkbox">
                    <input type="checkbox" id="chekcbox1" checked="">
                    <label for="chekcbox1"><span class="checkbox-icon"></span> I agree to the <a href="pages-terms.html" target="_blank" class="uk-text-bold uk-text-small uk-link-reset"> Terms and Conditions </a>
                    </label>
                </div>-->

                <div>
                    <button type="submit" name="register"
                            class="bg-blue-600 font-semibold p-2 mt-5 rounded-md text-center text-white w-full">
                        Get Started
                    </button>
                </div>
            </form>


        </div>
    </div>

    <!-- Footer -->

    <div class="lg:mb-5 py-3 uk-link-reset">
        <div class="flex align-items-center justify-content-center lg:flex-row max-w-6xl mx-auto lg:space-y-0 space-y-3">
            <p class="capitalize"> © copyright 2020 by Secrary</p>
        </div>
    </div>

</div>


<!-- For Night mode -->
<script>
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
</script>

<!-- Javascript
================================================== -->
<script src="code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
<script src="assets/js/tippy.all.min.js"></script>
<script src="assets/js/uikit.js"></script>
<script src="assets/js/simplebar.js"></script>
<script src="assets/js/custom.js"></script>
<script src="assets/js/bootstrap-select.min.js"></script>
<script src="unpkg.com/ionicons%405.2.3/dist/ionicons.js"></script>


</body>

<!-- Mirrored from demo.foxthemes.net/socialitev2.2/register.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Nov 2022 06:21:01 GMT -->
</html>