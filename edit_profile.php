<?php
session_start();
include("config/dbconfig.php");
$email = $_SESSION["email"];
$result = 0;
if (isset($_POST['update_info'])) {
    $nickname = mysqli_real_escape_string($con, $_POST['nickname']);
    $lname = mysqli_real_escape_string($con, $_POST['lname']);
    $position = mysqli_real_escape_string($con, $_POST['position']);
    $industry = mysqli_real_escape_string($con, $_POST['industry']);
    $dob = mysqli_real_escape_string($con, $_POST['dob']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $salary = mysqli_real_escape_string($con, $_POST['salary']);
    $avatar = mysqli_real_escape_string($con, $_POST['avatar']);
    $c_image = $_FILES['c_image']['name'];
    $c_image_temp = $_FILES['c_image']['tmp_name'];

    if ($c_image_temp != "") {
        move_uploaded_file($c_image_temp, "assets/images/user/$c_image");
        $c_update = $con->query("UPDATE `user` SET `f_name`='$nickname',`l_name`='$lname',`image`='$c_image',`industry`='$industry',`position`='$position',`dob`='$dob',`gender`='$gender',`salary`='$salary' WHERE `email` = '$email'");
        if ($c_update) {
            $result = 1;
        } else {
            $result = 2;
        }
    } else {
        $c_update = $con->query("UPDATE `user` SET `f_name`='$nickname',`l_name`='$lname',`image`='$avatar',`industry`='$industry',`position`='$position',`dob`='$dob',`gender`='$gender',`salary`='$salary' WHERE `email` = '$email'");
        if ($c_update) {
            $result = 1;
        } else {
            $result = 2;
        }
    }

}
?>
<!DOCTYPE html>
<html lang="en">

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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>


</head>
<body>


<div id="wrapper">

    <!-- Header -->
    <header>
        <div class="header_wrap">
            <div class="header_inner mcontainer">
                <div class="left_side">
                        <span class="slide_menu" uk-toggle="target: #wrapper ; cls: is-collapse is-active">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path
                                        d="M3 4h18v2H3V4zm0 7h12v2H3v-2zm0 7h18v2H3v-2z"
                                        fill="currentColor"></path></svg>
                        </span>
                    <div id="logo">
                        <a href="#">
                            <span>Secrery</span>
                            <!--<img src="assets/images/logo.png" alt="">
                            <img src="assets/images/logo-mobile.png" class="logo_mobile" alt="">-->
                        </a>
                    </div>
                </div>

                <!-- search icon for mobile -->
                <div class="header-search-icon" uk-toggle="target: #wrapper ; cls: show-searchbox"></div>
                <div class="header_search"><i class="uil-search-alt"></i>
                    <input value="" type="text" class="form-control"
                           placeholder="Search" autocomplete="off">
                    <!-- -->
                </div>
                <?php
                include("include/head_right.php");
                ?>
            </div>
        </div>
    </header>

    <!-- sidebar -->
    <div class="sidebar">

        <div class="sidebar_inner" data-simplebar>

            <ul>
                <li><a href="index.php">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                             class="text-blue-600">
                            <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"/>
                        </svg>
                        <span> Feed </span> </a>
                </li>

                <li><a href="companies.php">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                             class="text-blue-500">
                            <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"/>
                        </svg>
                        <span> Companies </span></a>
                </li>

                <!--industry section starts-->
                <?php include("include/industry_menu.php"); ?>
                <!--industry section ends-->

        </div>

        <!-- sidebar overly for mobile -->
        <div class="side_overly" uk-toggle="target: #wrapper ; cls: is-collapse is-active"></div>

    </div>

    <!-- Main Contents -->
    <div class="main_content">
        <div class="mcontainer">
            <div class="grid lg:grid-cols-3 mt-12 gap-8">
                <div class="bg-white rounded-md lg:shadow-md shadow col-span-2 lg:mx-16">
                    <?php
                    if ($result == 1) {
                        ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Congratulation!</strong> Data has been updated successfully.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <?php
                    } elseif ($result == 2) {
                        ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Sorry!</strong> Something went wrong!
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <?php
                    }
                    ?>
                    <form action="#" method="post" enctype="multipart/form-data">
                        <h1 class="lg:text-2xl text-xl font-semibold mb-6 flex align-items-center justify-content-center"
                            style="margin-top: 20px"> Update Profile </h1>
                        <div class="grid grid-cols-2 gap-3 lg:p-6 p-4">

                            <?php
                            $query = $con->query("select * from `user` where `email` = '$email'");
                            if ($query->num_rows == 1) {
                                while ($row = mysqli_fetch_assoc($query)) {
                                    ?>
                                    <div>
                                        <label for=""> Nick Name</label>
                                        <input type="text" name="nickname" value="<?php echo $row['f_name']; ?>"
                                               class="shadow-none with-border" required>
                                    </div>
                                    <div>
                                        <label for="">ID</label>
                                        <input type="text" name="lname" value="<?php echo $row['id']; ?>"
                                               class="shadow-none with-border" required>
                                    </div>
                                    <div>
                                        <label class="mb-0"> Position </label>
                                        <input type="text" name="position" value="<?php echo $row['position']; ?>"
                                               list="position"
                                               class="shadow-none with-border">
                                    </div>

                                    <div>
                                        <label class="mb-0"> Industry </label>
                                        <select class="shadow-none with-border"
                                                name="industry" required="" data-select2-id="select2-data-4-7a5n"
                                                tabindex="-1" aria-hidden="true">
                                            <?php
                                            $industry_id = $row['industry'];
                                            $fetch_industry = $con->query("select id, industry from industry where id='$industry_id'");
                                            while($fetch = mysqli_fetch_assoc($fetch_industry)){
                                                $id = $fetch['id'];
                                                $name = $fetch['industry'];
                                            }
                                            ?>
                                            <option value="<?php echo $id;?>" data-select2-id="select2-data-6-uhfj"><?php echo $name;?>
                                            </option>
                                            <option value=" " data-select2-id="select2-data-6-uhfj">Choose Your
                                                Industry
                                            </option>
                                            <?php
                                            $industry = $con->query("select * from industry");
                                            if ($industry->num_rows > 0) {
                                                while ($ind = mysqli_fetch_assoc($industry)) {
                                                    ?>
                                                    <option value="<?php echo $ind['id']; ?>"><?php echo $ind['industry']; ?></option>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>

                                    <div>
                                        <label for=""> Date of Birth</label>
                                        <input type="date" name="dob" value="<?php echo $row['dob']; ?>"
                                               class="shadow-none with-border">
                                    </div>
                                    <div>
                                        <label class="mb-0"> Gender </label>
                                        <select class="shadow-none with-border"
                                                name="gender" required="" data-select2-id="select2-data-4-7a5n"
                                                tabindex="-1" aria-hidden="true">
                                            <option><?php echo $row['gender']; ?></option>
                                            <option value=" " data-select2-id="select2-data-6-uhfj">Choose Your
                                                Gender
                                            </option>
                                            <option>Male</option>
                                            <option>Female</option>
                                            <option>Others</option>
                                        </select>
                                    </div>
                                    <div class="col-span-2">
                                        <label for="">Salary (Monthly)</label>
                                        <input type="number" name="salary" value="<?php echo $row['salary']; ?>"
                                               class="shadow-none with-border" required>
                                    </div>

                                    <div class="col-span-2">
                                        <label for=""> Profile Image</label>
                                        <input type="file" placeholder="" name="c_image"
                                               class="shadow-none with-border">
                                    </div>
                                    <div class="row px-3">
                                        <div class="col-4">
                                            <input class="form-check-input" type="radio" name="avatar"
                                                   id="1" value="1.jpg">
                                            <img src="assets/images/user/1.jpg">
                                        </div>
                                        <div class="col-4">
                                            <input class="form-check-input" type="radio" name="avatar"
                                                   id="2" value="2.jpg">
                                            <img src="assets/images/user/2.jpg">
                                        </div>
                                        <div class="col-4">
                                            <input class="form-check-input" type="radio" name="avatar"
                                                   id="3" value="3.jpg">
                                            <img src="assets/images/user/3.jpg">
                                        </div>
                                    </div>
                                    <div class="row px-3">
                                        <div class="col-4">
                                            <input class="form-check-input" type="radio" name="avatar"
                                                   id="1" value="4.jpg">
                                            <img src="assets/images/user/4.jpg">
                                        </div>
                                        <div class="col-4">
                                            <input class="form-check-input" type="radio" name="avatar"
                                                   id="2" value="5.jpg">
                                            <img src="assets/images/user/5.jpg">
                                        </div>
                                        <div class="col-4">
                                            <input class="form-check-input" type="radio" name="avatar"
                                                   id="3" value="6.jpg">
                                            <img src="assets/images/user/6.jpg">
                                        </div>
                                    </div>
                                    <div class="row px-3">
                                        <div class="col-4">
                                            <input class="form-check-input" type="radio" name="avatar"
                                                   id="1" value="7.jpg">
                                            <img src="assets/images/user/7.jpg">
                                        </div>
                                        <div class="col-4">
                                            <input class="form-check-input" type="radio" name="avatar"
                                                   id="2" value="8.jpg">
                                            <img src="assets/images/user/8.jpg">
                                        </div>
                                        <div class="col-4">
                                            <input class="form-check-input" type="radio" name="avatar"
                                                   id="3" value="9.jpg">
                                            <img src="assets/images/user/9.jpg">
                                        </div>
                                    </div>
                                    <div class="row px-3">
                                        <div class="col-4">
                                            <input class="form-check-input" type="radio" name="avatar"
                                                   id="1" value="10.jpg">
                                            <img src="assets/images/user/10.jpg">
                                        </div>
                                        <div class="col-4">
                                            <input class="form-check-input" type="radio" name="avatar"
                                                   id="2" value="11.jpg">
                                            <img src="assets/images/user/11.jpg">
                                        </div>
                                        <div class="col-4">
                                            <input class="form-check-input" type="radio" name="avatar"
                                                   id="3" value="12.jpg">
                                            <img src="assets/images/user/12.jpg">
                                        </div>
                                    </div>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                        <div class="bg-gray-10 p-6 pt-0 flex justify-end space-x-3">
                            <button class="p-2 px-4 rounded bg-gray-50 text-red-500"> Cancel</button>
                            <button type="submit" name="update_info" class="button bg-blue-700"> Save</button>
                        </div>
                    </form>

                </div>

            </div>

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
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
<script src="assets/js/tippy.all.min.js"></script>
<script src="assets/js/uikit.js"></script>
<script src="assets/js/simplebar.js"></script>
<script src="assets/js/custom.js"></script>
<script src="assets/js/bootstrap-select.min.js"></script>
<script src="unpkg.com/ionicons%405.2.3/dist/ionicons.js"></script>

</body>

</html>