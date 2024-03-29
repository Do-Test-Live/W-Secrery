<?php
session_start();
$email = $_SESSION["email"];
include ("config/dbconfig.php");
$query = $con->query("select `c_domain_id` from `user` where `email` = '$email'");
if($query->num_rows == 1){
    while($row = mysqli_fetch_assoc($query)){
        $company_id = $row['c_domain_id'];
    }
}
$result = 0;
if (isset($_POST['update_info'])){
    $c_location = mysqli_real_escape_string($con, $_POST['c_location']);
    $experience = mysqli_real_escape_string($con, $_POST['experience']);
    $working_hours = mysqli_real_escape_string($con, $_POST['working_hours']);
    $working_days = mysqli_real_escape_string($con, $_POST['working_days']);
    $salary = mysqli_real_escape_string($con, $_POST['salary']);
    $hours = mysqli_real_escape_string($con, $_POST['hours']);
    $promotion = mysqli_real_escape_string($con, $_POST['promotion']);
    $happiness = mysqli_real_escape_string($con, $_POST['happiness']);
    $description = mysqli_real_escape_string($con, $_POST['description']);
    $monthly_income = mysqli_real_escape_string($con, $_POST['monthly_income']);
    $employee = mysqli_real_escape_string($con, $_POST['employee']);
    $c_image = $_FILES['c_image']['name'];
    $c_image_temp=$_FILES['c_image']['tmp_name'];

    if($c_image_temp != "")
    {
        move_uploaded_file($c_image_temp , "assets/images/company/$c_image");
        $c_update=$con->query("UPDATE `company_domain` SET `description`='$description',`salary`='$salary',`hours`='$hours',
                            `promotion`='$promotion',`happiness`='$happiness',`experience`='$experience',`monthly_income`='$monthly_income',`location`='$c_location',`working_hour`='$working_hours',`working_day`='$working_days',
                            `image`='$c_image',`employee`='$employee' WHERE `id` = '$company_id'");
        if($c_update){
            $result = 1;
        }else{
            $result = 2;
        }
    }else
    {
        $c_update=$con->query("UPDATE `company_domain` SET `description`='$description',`salary`='$salary',`hours`='$hours',
                            `promotion`='$promotion',`happiness`='$happiness',`experience`='$experience',`monthly_income`='$monthly_income',`location`='$c_location',`working_hour`='$working_hours',`working_day`='$working_days',`employee`='$employee' WHERE `id` = '$company_id'");
        if($c_update){
            $result = 1;
        }else{
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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>


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
                    if ($result == 1){
                        ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Congratulation!</strong> Company information updated successfully.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <?php
                    }elseif ($result == 2){
                        ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Sorry!</strong> Something went wrong!
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <?php
                    }
                    ?>
                    <form action="#" method="post" enctype="multipart/form-data">
                        <h1 class="lg:text-2xl text-xl font-semibold mb-6 flex align-items-center justify-content-center" style="margin-top: 20px"> Provide Feedback for Company </h1>
                        <div class="grid lg:p-6 p-4">

                            <?php
                            $query = $con->query("select * from `company_domain` where `id` = '$company_id'");
                            if($query->num_rows > 0){
                                while($row = mysqli_fetch_assoc($query)){
                                    ?>
                                    <div>
                                        <label for="">Location of Company (Ex: Road, State, City)</label>
                                        <input type="text" name="c_location" value="<?php echo $row['location'];?>" class="shadow-none with-border" required>
                                    </div>
                                    <div>
                                        <label for="">No. of Employee</label>
                                        <input type="text" name="employee" value="<?php echo $row['employee'];?>" class="shadow-none with-border" required>
                                    </div>
                                    <div>
                                        <label for=""> Years of Experience</label>
                                        <input type="text" name="experience" value="<?php echo $row['experience'];?>" class="shadow-none with-border" required>
                                    </div>
                                    <div>
                                        <label for=""> Approximate Monthly Income </label>
                                        <input type="text" name="monthly_income" value="<?php echo $row['monthly_income'];?>" class="shadow-none with-border" required>
                                    </div>
                                    <div>
                                        <label for="">Working Hours (Ex: 9am to 5pm)</label>
                                        <input type="text" name="working_hours" value="<?php echo $row['working_hour'];?>" class="shadow-none with-border" required>
                                    </div>
                                    <div>
                                        <label for="">Working Days (Per Week)</label>
                                        <input type="text" name="working_days" value="<?php echo $row['working_day'];?>" class="shadow-none with-border" required>
                                    </div>
                                    <div>
                                        <label for="">Rate Income/Salary (Between 1 to 10)</label>
                                        <input type="number" name="salary" value="<?php echo $row['salary'];?>" class="shadow-none with-border" required>
                                    </div>
                                    <div>
                                        <label for="">Rate Working Hours (Between 1 to 10)</label>
                                        <input type="number" name="hours" value="<?php echo $row['hours'];?>" class="shadow-none with-border" required>
                                    </div>
                                    <div>
                                        <label for="">Rate Promotion Prospect (Between 1 to 10)</label>
                                        <input type="number" name="promotion" value="<?php echo $row['promotion'];?>" class="shadow-none with-border" required>
                                    </div>
                                    <div>
                                        <label for="">Overall Satisfaction (Between 1 to 10)</label>
                                        <input type="number" name="happiness" value="<?php echo $row['happiness'];?>" class="shadow-none with-border" required>
                                    </div>
                                    <div>
                                        <label for="">Add Company Cover</label>
                                        <input type="file" name="c_image" class="shadow-none with-border">
                                    </div>
                                    <div>
                                        <label for="">Write Company Description</label>
                                        <input type="text" name="description" value="<?php echo $row['description'];?>" class="shadow-none with-border" required>
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

    function alertCompany(){
        alert("Please add a company email to your profile first!");
    }
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
