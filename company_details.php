<?php
session_start();
include("config/dbconfig.php");
$company_id = $_GET['id'];
$email = $_SESSION["email"];
$query = $con->query("select * from `company_domain` where `id` = '$company_id'");
if ($query->num_rows == 1) {
    while ($row = mysqli_fetch_assoc($query)) {
        $company_name = $row['company_name'];
        $description = $row['description'];
        $salary = $row['salary'];
        $hours = $row['hours'];
        $promotion = $row['promotion'];
        $happiness = $row['happiness'];
        $experience = $row['experience'];
        $monthly_income = $row['monthly_income'];
        $location = $row['location'];
        $working_hour = $row['working_hour'];
        $working_day = $row['working_day'];
        $employee = $row['employee'];
        $created_at = $row['created_at'];
    }
    $review = ($salary + $hours + $promotion + $happiness) / 4;
}
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.foxthemes.net/socialitev2.2/course-intro.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Nov 2022 06:21:02 GMT -->
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicon -->
    <link href="assets/images/favicon.png" rel="icon" type="image/png">

    <!-- Basic Page Needs
        ================================================== -->
    <title>Secrery</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="Secrery" name="description">

    <!-- icons
    ================================================== -->
    <link href="assets/css/icons.css" rel="stylesheet">

    <!-- CSS
    ================================================== -->
    <link href="assets/css/uikit.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="unpkg.com/tailwindcss%402.2.19/dist/tailwind.min.css" rel="stylesheet">


</head>
<body>


<div id="wrapper">

    <!-- Header -->
    <header>
        <div class="header_wrap">
            <div class="header_inner mcontainer">
                <div class="left_side">
                        <span class="slide_menu" uk-toggle="target: #wrapper ; cls: is-collapse is-active">
                            <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path
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
                    <input autocomplete="off" class="form-control" placeholder="Search for Friends , Videos and more.."
                           type="text" value="">
                </div>

                <?php include("include/head_right.php"); ?>
            </div>
        </div>
    </header>

    <!-- sidebar -->
    <div class="sidebar">

        <div class="sidebar_inner" data-simplebar>

            <ul>
                <li><a href="index.php">
                        <svg class="text-blue-600" fill="currentColor" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"/>
                        </svg>
                        <span> Feed </span> </a>
                </li>

                <li><a href="companies.php">
                        <svg class="text-blue-500" fill="currentColor" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"/>
                        </svg>
                        <span> Companies </span></a>
                </li>
            </ul>

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

            <div class="lg:flex lg:space-x-10">


                <div class="lg:w-3/4 md:p-3 p-2">

                    <div>

                        <div class="space-y-3">
                            <h5 class="uppercase text-sm font-medium text-gray-400"> Popular Company </h5>
                            <h1 class="font-semibold text-3xl"><?php echo $company_name ?></h1>
                            <ul class="flex  gap-4">
                                <li class="flex items-center">
                                    <span class="bg-yellow-500 text-white mr-1.5 px-2 rounded font-semibold"> <?php echo $review;?> </span>
                                </li>
                                <li><i class="icon-feather-users"></i> <?php echo $employee; ?></li>
                            </ul>
                            <ul class="flex items-center text-gray-500 text-sm">
                                <li> Created by <a class="font-bold" href="#"> Sj </a></li>
                                <span class="middot mx-3 text-2xl">·</span>
                                <li> Last updated <?php echo $created_at ?></li>
                            </ul>

                        </div>

                        <nav class="responsive-nav md:m-0 -mx-4 nav-small">
                            <ul uk-switcher="connect: #components-nav ;animation: uk-animation-fade ; toggle: > * ">
                                <li><a class="lg:px-2" href="#">Overview</a></li>
                                <li><a class="lg:px-2" href="#">Post</a></li>
                                <li><a class="lg:px-2" href="#">Channel</a></li>
                                <li><a class="lg:px-2" href="#">Faq</a></li>
                            </ul>
                        </nav>

                        <div class="mcontainer" style="padding: 0">

                            <div class="uk-switcher" id="components-nav">


                                <!-- Overview -->
                                <div>
                                    <div class="md:flex md:space-x-14">
                                        <div class="lg:mt-9 mt-5">

                                            <!-- course description -->
                                            <div class="space-y-5">
                                                <div>
                                                    <h3 class="font-semibold mb-2 text-xl"> Description </h3>
                                                    <p>
                                                        <?php echo $description; ?>
                                                    </p>
                                                </div>

                                                <!-- course Reviews -->
                                                <div class="flex space-x-5 my-8" id="reviews">
                                                    <div class="w-full">
                                                        <div class="bg-blue-100 p-4 rounded-md border border-blue-200 text-center shadow-xs">
                                                            <h1 class="leading-none text-6xl"> <?php echo $review; ?></h1>
                                                            <div class="flex justify-center">
                                                                <?php
                                                                $star = (int)$review;
                                                                for ($i = 0; $i < $star; $i++) {
                                                                    ?>
                                                                    <svg class="w-5 h-5" fill="currentColor"
                                                                         viewBox="0 0 20 20"
                                                                         xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                                                    </svg>
                                                                    <?php
                                                                }
                                                                for ($j = 0; $j < 5 - $star ; $j++) {
                                                                    ?>
                                                                    <svg class="w-5 h-5 text-gray-400"
                                                                         fill="currentColor"
                                                                         viewBox="0 0 20 20"
                                                                         xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                                                    </svg>
                                                                    <?php
                                                                }
                                                                ?>
                                                            </div>
                                                            <h5 class="text-base mb-0 mt-1 text-gray-800"> Company
                                                                Rating</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="w-full h-3 rounded-lg bg-gray-300 shadow-xs relative">
                                                            <div class="w-<?php echo $salary;?>/12 h-3 rounded-lg bg-gray-800"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="flex">
                                                            <span class="ml-2"> Income Salary - <?php echo $salary;?>/10</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="w-full h-3 rounded-lg bg-gray-300 shadow-xs relative">
                                                            <div class="w-<?php echo $hours?>/12 h-3 rounded-lg bg-gray-800"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="flex">
                                                            <span class="ml-2"> Hours are reasonable - <?php echo $hours?>/10</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="w-full h-3 rounded-lg bg-gray-300 shadow-xs relative">
                                                            <div class="w-<?php echo $promotion;?>/12 h-3 rounded-lg bg-gray-800"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="flex">
                                                            <span class="ml-2"> Promotion Prospect - <?php echo $promotion;?>/10</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="w-full h-3 rounded-lg bg-gray-300 shadow-xs relative">
                                                            <div class="w-<?php echo $happiness; ?>/12 h-3 rounded-lg bg-gray-800"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="flex">
                                                            <span class="ml-2">Happiness - <?php echo $happiness; ?>/10</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <h3 class="font-semibold mb-2 text-xl"> Income </h3>
                                                    <ul class="grid md:grid-cols-1">
                                                        <li><i class="uil-check text-xl font-bold mr-2"></i>Accounting
                                                            Clerk Years of
                                                            experience: <?php echo $experience; ?>
                                                        </li>
                                                        <li><i class="uil-check text-xl font-bold mr-2"></i>Monthly
                                                            Income: <?php echo $monthly_income;?>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <h3 class="font-semibold text-xl mb-2"> Location of Company:</h3>
                                                    <ul class="list-disc ml-5">
                                                        <li><?php echo $location;?></li>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <h3 class="font-semibold mb-2 text-xl"> Reasonable working
                                                        Hours: </h3>
                                                    <p> <?php echo $working_hour?></p>
                                                </div>
                                                <div>
                                                    <h3 class="font-semibold mb-2 text-xl"> Reasonable working Days: </h3>
                                                    <p> <?php echo $working_day?></p>
                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                </div>

                                <!-- Post -->
                                <div>
                                    <div class="md:flex md:space-x-14 mt-5 pt-4">
                                        <ul class="card divide-y divide-gray-100 sm:m-0 -mx-5">
                                            <li>
                                                <div class="flex items-start space-x-5 p-7">
                                                    <img src="assets/images/avatars/avatar-2.jpg" alt=""
                                                         class="w-12 h-12 rounded-full">
                                                    <div class="flex-1">
                                                        <a href="blog_detail.php"
                                                           class="text-lg font-semibold line-clamp-1 mb-1"> How do
                                                            you know AWS is
                                                            planning on laying you off? Do they give severance? </a>
                                                        <p class="text-sm text-gray-400 mb-2"><span
                                                                    data-href="%40 .html"> </span>
                                                            8 hours ago</span> </p>
                                                        <p class="leading-6 line-clamp-2 mt-3">Currently a Cloud Support
                                                            Associate and have
                                                            been working since July. Not really enjoying it and going
                                                            through some personal
                                                            depression that has melted into my work life.</p>
                                                    </div>
                                                    <div class="sm:flex items-center space-x-4 hidden">
                                                        <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M2 5a2 2 0 012-2h7a2 2 0 012 2v4a2 2 0 01-2 2H9l-3 3v-3H4a2 2 0 01-2-2V5z"></path>
                                                            <path d="M15 7v2a4 4 0 01-4 4H9.828l-1.766 1.767c.28.149.599.233.938.233h2l3 3v-3h2a2 2 0 002-2V9a2 2 0 00-2-2h-1z"></path>
                                                        </svg>
                                                        <span class="text-xl"> 4 </span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="flex items-start space-x-5 p-7">
                                                    <img src="assets/images/avatars/avatar-1.jpg" alt=""
                                                         class="w-12 h-12 rounded-full">
                                                    <div class="flex-1">
                                                        <a href="#" class="text-lg font-semibold line-clamp-1 mb-1">Talk
                                                            privately with your
                                                            coworkers.</a>
                                                        <p class="text-sm text-gray-400 mb-2"><span
                                                                    data-href="%40 .html"> </span>
                                                            8 hours ago</span> </p>
                                                        <p class="leading-6 line-clamp-2 mt-3">Promotions? All-hands?
                                                            Join your company's
                                                            internal discussion.</p>
                                                    </div>
                                                    <div class="sm:flex items-center space-x-4 hidden">
                                                        <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M2 5a2 2 0 012-2h7a2 2 0 012 2v4a2 2 0 01-2 2H9l-3 3v-3H4a2 2 0 01-2-2V5z"></path>
                                                            <path d="M15 7v2a4 4 0 01-4 4H9.828l-1.766 1.767c.28.149.599.233.938.233h2l3 3v-3h2a2 2 0 002-2V9a2 2 0 00-2-2h-1z"></path>
                                                        </svg>
                                                        <span class="text-xl"> 6 </span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="flex items-start space-x-5 p-7">
                                                    <img src="assets/images/avatars/avatar-3.jpg" alt=""
                                                         class="w-12 h-12 rounded-full">
                                                    <div class="flex-1">
                                                        <a href="#" class="text-lg font-semibold line-clamp-1 mb-1">
                                                            Don’t give Preference
                                                            to laid off H1B holders </a>
                                                        <p class="text-sm text-gray-400 mb-2"><span
                                                                    data-href="%40 .html"> </span>
                                                            8 hours ago</span> </p>
                                                        <p class="leading-6 line-clamp-2 mt-3">DM me if you want to work
                                                            on this cause. I
                                                            will connect with the people who are contributing for this
                                                            cause. We need your
                                                            voice.</p>
                                                    </div>
                                                    <div class="sm:flex items-center space-x-4 hidden">
                                                        <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M2 5a2 2 0 012-2h7a2 2 0 012 2v4a2 2 0 01-2 2H9l-3 3v-3H4a2 2 0 01-2-2V5z"></path>
                                                            <path d="M15 7v2a4 4 0 01-4 4H9.828l-1.766 1.767c.28.149.599.233.938.233h2l3 3v-3h2a2 2 0 002-2V9a2 2 0 00-2-2h-1z"></path>
                                                        </svg>
                                                        <span class="text-xl"> 3 </span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="flex items-start space-x-5 p-7">
                                                    <img src="assets/images/avatars/avatar-2.jpg" alt=""
                                                         class="w-12 h-12 rounded-full">
                                                    <div class="flex-1">
                                                        <a href="#" class="text-lg font-semibold line-clamp-1 mb-1">AMZN
                                                            to GOOG - 3 months
                                                            later</a>
                                                        <p class="text-sm text-gray-400 mb-2"><span
                                                                    data-href="%40 .html"> </span>
                                                            8 hours ago</span> </p>
                                                        <p class="leading-6 line-clamp-2 mt-3">I joined GCP from AWS
                                                            three months ago and
                                                            here’s what I saw so far in no particular order:</p>
                                                    </div>
                                                    <div class="sm:flex items-center space-x-4 hidden">
                                                        <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M2 5a2 2 0 012-2h7a2 2 0 012 2v4a2 2 0 01-2 2H9l-3 3v-3H4a2 2 0 01-2-2V5z"></path>
                                                            <path d="M15 7v2a4 4 0 01-4 4H9.828l-1.766 1.767c.28.149.599.233.938.233h2l3 3v-3h2a2 2 0 002-2V9a2 2 0 00-2-2h-1z"></path>
                                                        </svg>
                                                        <span class="text-xl"> 2 </span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Channel -->
                                <div>
                                    <div class="md:flex md:space-x-14 mt-5 pt-4">
                                        <div class="card divide-y divide-gray-100 px-4">

                                            <div class="lg:flex lg:space-x-6 py-5">
                                                <div class="flex-1 lg:pt-0 pt-4">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <h2>Steven Tai</h2>
                                                        </div>
                                                        <div class="col-6 uk-text-right">
                                                            In: Graphic
                                                        </div>
                                                    </div>
                                                    <a class="text-xl font-semibold line-clamp-2" href="blog-read.html">
                                                        Interesting
                                                        JavaScript and CSS Libraries in 2021 you should be know</a>
                                                    <p class="line-clamp-2 pt-3"> Lorem ipsum dolor sit amet,
                                                        consectetuer adipiscing elit,
                                                        sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                                                        aliquam erat
                                                        volutpat </p>

                                                    <div class="flex items-center pt-3">
                                                        <div class="flex items-center">
                                                            <i class="fa-regular fa-thumbs-up mx-2"></i>
                                                            12
                                                        </div>
                                                        <div class="flex items-center mx-4">
                                                            <i class="fa-regular fa-thumbs-down mx-2"></i>
                                                            12
                                                        </div>
                                                        <div class="flex items-center">
                                                            <i class="fa-regular fa-comment mx-2"></i>
                                                            Answer
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="lg:flex lg:space-x-6 py-5">
                                                <div class="flex-1 lg:pt-0 pt-4">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <h2>Doris Logue</h2>
                                                        </div>
                                                        <div class="col-6 uk-text-right">
                                                            In: Graphic
                                                        </div>
                                                    </div>
                                                    <a class="text-xl font-semibold line-clamp-2" href="blog-read.html">
                                                        Interesting
                                                        JavaScript and CSS Libraries in 2021 you should be know</a>
                                                    <p class="line-clamp-2 pt-3"> Lorem ipsum dolor sit amet,
                                                        consectetuer adipiscing elit,
                                                        sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                                                        aliquam erat
                                                        volutpat </p>

                                                    <div class="flex items-center pt-3">
                                                        <div class="flex items-center">
                                                            <i class="fa-regular fa-thumbs-up mx-2"></i>
                                                            12
                                                        </div>
                                                        <div class="flex items-center mx-4">
                                                            <i class="fa-regular fa-thumbs-down mx-2"></i>
                                                            12
                                                        </div>
                                                        <div class="flex items-center">
                                                            <i class="fa-regular fa-comment mx-2"></i>
                                                            Answer
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="lg:flex lg:space-x-6 py-5">
                                                <div class="flex-1 lg:pt-0 pt-4">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <h2>Sammy Ka</h2>
                                                        </div>
                                                        <div class="col-6 uk-text-right">
                                                            In: Graphic
                                                        </div>
                                                    </div>
                                                    <a class="text-xl font-semibold line-clamp-2" href="blog-read.html">
                                                        Interesting
                                                        JavaScript and CSS Libraries in 2021 you should be know</a>
                                                    <p class="line-clamp-2 pt-3"> Lorem ipsum dolor sit amet,
                                                        consectetuer adipiscing elit,
                                                        sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                                                        aliquam erat
                                                        volutpat </p>

                                                    <div class="flex items-center pt-3">
                                                        <div class="flex items-center">
                                                            <i class="fa-regular fa-thumbs-up mx-2"></i>
                                                            12
                                                        </div>
                                                        <div class="flex items-center mx-4">
                                                            <i class="fa-regular fa-thumbs-down mx-2"></i>
                                                            12
                                                        </div>
                                                        <div class="flex items-center">
                                                            <i class="fa-regular fa-comment mx-2"></i>
                                                            Answer
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="lg:flex lg:space-x-6 py-5">
                                                <div class="flex-1 lg:pt-0 pt-4">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <h2>Justin Hau</h2>
                                                        </div>
                                                        <div class="col-6 uk-text-right">
                                                            In: Graphic
                                                        </div>
                                                    </div>
                                                    <a class="text-xl font-semibold line-clamp-2" href="blog-read.html">
                                                        Interesting
                                                        JavaScript and CSS Libraries in 2021 you should be know</a>
                                                    <p class="line-clamp-2 pt-3"> Lorem ipsum dolor sit amet,
                                                        consectetuer adipiscing elit,
                                                        sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                                                        aliquam erat
                                                        volutpat </p>

                                                    <div class="flex items-center pt-3">
                                                        <div class="flex items-center">
                                                            <i class="fa-regular fa-thumbs-up mx-2"></i>
                                                            12
                                                        </div>
                                                        <div class="flex items-center mx-4">
                                                            <i class="fa-regular fa-thumbs-down mx-2"></i>
                                                            12
                                                        </div>
                                                        <div class="flex items-center">
                                                            <i class="fa-regular fa-comment mx-2"></i>
                                                            Answer
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <!-- Faq -->
                                <div>
                                    <div class="md:flex md:space-x-14">
                                        <div class="lg:mt-9">
                                            <ul class="uk-accordion space-y-3" uk-accordion>
                                                <li class="card hover:shadow-md px-6 py-4 rounded-md uk-open">
                                                    <a class="uk-accordion-title font-semibold text-base" href="#">How
                                                        many days of
                                                        annual leave are there? How many days of AL available? </a>
                                                    <div aria-hidden="false" class="uk-accordion-content mt-3">
                                                        <p>“7 days” – Anonymous – 8.10.2022 </p>
                                                    </div>
                                                </li>
                                                <li class="card hover:shadow-md px-6 py-4 rounded-md">
                                                    <a class="uk-accordion-title font-semibold text-base" href="#">
                                                        Promotion prospect
                                                        Career Prospect:</a>
                                                    <div aria-hidden="true" class="uk-accordion-content mt-3" hidden="">
                                                        <p> "Different teams, different bosses, separate ways" –
                                                            Anonymous – 8.10.202
                                                            2 </p>
                                                    </div>
                                                </li>
                                                <li class="card hover:shadow-md px-6 py-4 rounded-md">
                                                    <a class="uk-accordion-title font-semibold text-base" href="#">
                                                        Scope of Work Scope
                                                        of Work: </a>
                                                    <div aria-hidden="true" class="uk-accordion-content mt-3" hidden="">
                                                        <p> “Secretary work” – Anonymous – 8.10.2022 </p>
                                                    </div>
                                                </li>
                                                <li class="card hover:shadow-md px-6 py-4 rounded-md">
                                                    <a class="uk-accordion-title font-semibold text-base" href="#">
                                                        Happy index Are you
                                                        happy? </a>
                                                    <div aria-hidden="true" class="uk-accordion-content mt-3" hidden="">
                                                        <p> “More with less money” – Anonymous – 8.10.2022 </p>
                                                    </div>
                                                </li>
                                                <li class="card hover:shadow-md px-6 py-4 rounded-md">
                                                    <a class="uk-accordion-title font-semibold text-base" href="#">
                                                        Application
                                                        Tips: </a>
                                                    <div aria-hidden="true" class="uk-accordion-content mt-3" hidden="">
                                                        <p> "Interview" - Anonymous - 8.10.202 2 </p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>


                    </div>

                </div>
                <div class="lg:w-1/4 w-full">

                    <div uk-sticky="offset:100; top:1 ; bottom: true">

                        <h2 class="text-lg font-semibold mb-3"> Related Companies </h2>
                        <ul>
                            <li>
                                <a class="hover:bg-gray-100 rounded-md p-2 -mx-2 block" href="#">
                                    <h3 class="font-medium line-clamp-2"> Melco Resorts & Entertainment VP, Internal
                                        Audit Salary Income </h3>
                                    <div class="flex items-center my-auto text-xs space-x-1.5">
                                        <div class="pb-1"> .</div>
                                        <i class="icon-feather-users mr-2"></i>
                                        <div> 10/10</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="hover:bg-gray-100 rounded-md p-2 -mx-2 block" href="#">
                                    <h3 class="font-medium line-clamp-2">
                                        Stephenson Harwood LLP Training Contract Guide </h3>
                                    <div class="flex items-center my-auto text-xs space-x-1.5">
                                        <div class="pb-1"> .</div>
                                        <i class="icon-feather-users mr-2"></i>
                                        <div> 10/10</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="hover:bg-gray-100 rounded-md p-2 -mx-2 block" href="#">
                                    <h3 class="font-medium line-clamp-2"> HSBC HSBC Analyst Salary Income </h3>
                                    <div class="flex items-center my-auto text-xs space-x-1.5">
                                        <div class="pb-1"> .</div>
                                        <i class="icon-feather-users mr-2"></i>
                                        <div> 9.8/10</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="hover:bg-gray-100 rounded-md p-2 -mx-2 block" href="#">
                                    <h3 class="font-medium line-clamp-2"> Apple Genius Salary Revenue </h3>
                                    <div class="flex items-center my-auto text-xs space-x-1.5">
                                        <div class="pb-1"> .</div>
                                        <i class="icon-feather-users mr-2"></i>
                                        <div> 9.8/10</div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <br>

                        <h4 class="text-lg font-semibold mb-3"> Tags </h4>

                        <div class="flex flex-wrap gap-2">
                            <a class="bg-gray-100 py-1.5 px-4 rounded-full" href="#"> Marketing</a>
                            <a class="bg-gray-100 py-1.5 px-4 rounded-full" href="#"> IT</a>
                            <a class="bg-gray-100 py-1.5 px-4 rounded-full" href="#"> Law Firms</a>
                            <a class="bg-gray-100 py-1.5 px-4 rounded-full" href="#"> Sales</a>
                            <a class="bg-gray-100 py-1.5 px-4 rounded-full" href="#"> TC Train</a>
                            <a class="bg-gray-100 py-1.5 px-4 rounded-full" href="#"> Invesment Bank</a>
                        </div>

                    </div>


                </div>

            </div>


        </div>
    </div>

</div>


<!-- open chat box -->
<!--<div uk-toggle="target: #offcanvas-chat" class="start-chat">
    <svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
    </svg>
</div>-->

<div id="offcanvas-chat" uk-offcanvas="flip: true; overlay: true">
    <div class="uk-offcanvas-bar bg-white p-0 w-full lg:w-80 shadow-2xl">


        <div class="relative pt-5 px-4">

            <h3 class="text-2xl font-bold mb-2"> Chats </h3>

            <div class="absolute right-3 top-4 flex items-center space-x-2">

                <button class="uk-offcanvas-close  px-2 -mt-1 relative rounded-full inset-0 lg:hidden blcok"
                        type="button" uk-close></button>

                <a href="#" uk-toggle="target: #search;animation: uk-animation-slide-top-small">
                    <ion-icon class="text-xl hover:bg-gray-100 p-1 rounded-full" name="search"></ion-icon>
                </a>
                <a href="#">
                    <ion-icon class="text-xl hover:bg-gray-100 p-1 rounded-full" name="settings-outline"></ion-icon>
                </a>
                <a href="#">
                    <ion-icon class="text-xl hover:bg-gray-100 p-1 rounded-full" name="ellipsis-vertical"></ion-icon>
                </a>
                <div class="bg-white w-56 shadow-md mx-auto p-2 mt-12 rounded-md text-gray-500 hidden border border-gray-100 dark:bg-gray-900 dark:text-gray-100 dark:border-gray-700"
                     uk-drop="mode: click;pos: bottom-right;animation: uk-animation-slide-bottom-small; offset:5">
                    <ul class="space-y-1">
                        <li>
                            <a class="flex items-center px-3 py-2 hover:bg-gray-100 hover:text-gray-800 rounded-md dark:hover:bg-gray-800"
                               href="#">
                                <ion-icon class="pr-2 text-xl" name="checkbox-outline"></ion-icon>
                                Mark all as read
                            </a>
                        </li>
                        <li>
                            <a class="flex items-center px-3 py-2 hover:bg-gray-100 hover:text-gray-800 rounded-md dark:hover:bg-gray-800"
                               href="#">
                                <ion-icon class="pr-2 text-xl" name="settings-outline"></ion-icon>
                                Chat setting
                            </a>
                        </li>
                        <li>
                            <a class="flex items-center px-3 py-2 hover:bg-gray-100 hover:text-gray-800 rounded-md dark:hover:bg-gray-800"
                               href="#">
                                <ion-icon class="pr-2 text-lg" name="notifications-off-outline"></ion-icon>
                                Disable notifications
                            </a>
                        </li>
                        <li>
                            <a class="flex items-center px-3 py-2 hover:bg-gray-100 hover:text-gray-800 rounded-md dark:hover:bg-gray-800"
                               href="#">
                                <ion-icon class="pr-2 text-xl" name="star-outline"></ion-icon>
                                Create a group chat
                            </a>
                        </li>
                    </ul>
                </div>


            </div>


        </div>

        <div class="absolute bg-white z-10 w-full -mt-5 lg:-mt-2 transform translate-y-1.5 py-2 border-b items-center flex"
             hidden id="search">
            <input class="flex-1" placeholder="Search.." type="text">
            <ion-icon class="text-2xl hover:bg-gray-100 p-1 rounded-full mr-4 cursor-pointer" name="close-outline"
                      uk-toggle="target: #search;animation: uk-animation-slide-top-small"></ion-icon>
        </div>

        <nav class="responsive-nav border-b extanded mb-2 -mt-2">
            <ul uk-switcher="connect: #chats-tab; animation: uk-animation-fade">
                <li class="uk-active"><a class="active" href="#0"> Friends </a></li>
                <li><a href="#0">Groups <span> 10 </span> </a></li>
            </ul>
        </nav>

        <div class="contact-list px-2 uk-switcher" id="chats-tab">

            <div class="p-1">
                <a href="chats-friend.html">
                    <div class="contact-avatar">
                        <img alt="" src="assets/images/avatars/avatar-7.jpg">
                    </div>
                    <div class="contact-username"> Sammy Ka</div>
                </a>
                <a href="chats-friend.html">
                    <div class="contact-avatar">
                        <img alt="" src="assets/images/avatars/avatar-8.jpg">
                        <span class="user_status status_online"></span>
                    </div>
                    <div class="contact-username"> Dennis Han</div>
                </a>
                <a href="chats-friend.html">
                    <div class="contact-avatar">
                        <img alt="" src="assets/images/avatars/avatar-2.jpg">
                        <span class="user_status"></span>
                    </div>
                    <div class="contact-username"> Erica Jones</div>
                </a>
                <a href="chats-friend.html">
                    <div class="contact-avatar">
                        <img alt="" src="assets/images/avatars/avatar-3.jpg">
                    </div>
                    <div class="contact-username">Steven Tai</div>
                </a>

                <a href="chats-friend.html">
                    <div class="contact-avatar">
                        <img alt="" src="assets/images/avatars/avatar-5.jpg">
                    </div>
                    <div class="contact-username">Doris Logue</div>
                </a>
                <a href="chats-friend.html">
                    <div class="contact-avatar">
                        <img alt="" src="assets/images/avatars/avatar-6.jpg">
                    </div>
                    <div class="contact-username"> Jonathan Madano</div>
                </a>
                <a href="chats-friend.html">
                    <div class="contact-avatar">
                        <img alt="" src="assets/images/avatars/avatar-2.jpg">
                        <span class="user_status"></span>
                    </div>
                    <div class="contact-username"> Erica Jones</div>
                </a>
                <a href="chats-friend.html">
                    <div class="contact-avatar">
                        <img alt="" src="assets/images/avatars/avatar-1.jpg">
                        <span class="user_status status_online"></span>
                    </div>
                    <div class="contact-username"> Dennis Han</div>
                </a>


            </div>
            <div class="p-1">
                <a href="chats-group.html">
                    <div class="contact-avatar">
                        <img alt="" src="assets/images/avatars/avatar-7.jpg">
                    </div>
                    <div class="contact-username"> Sammy Ka</div>
                </a>
                <a href="chats-group.html">
                    <div class="contact-avatar">
                        <img alt="" src="assets/images/avatars/avatar-8.jpg">
                        <span class="user_status status_online"></span>
                    </div>
                    <div class="contact-username"> Dennis Han</div>
                </a>
                <a href="chats-group.html">
                    <div class="contact-avatar">
                        <img alt="" src="assets/images/avatars/avatar-2.jpg">
                        <span class="user_status"></span>
                    </div>
                    <div class="contact-username"> Erica Jones</div>
                </a>
                <a href="chats-group.html">
                    <div class="contact-avatar">
                        <img alt="" src="assets/images/avatars/avatar-3.jpg">
                    </div>
                    <div class="contact-username">Steven Tai</div>
                </a>

                <a href="chats-group.html">
                    <div class="contact-avatar">
                        <img alt="" src="assets/images/avatars/avatar-5.jpg">
                    </div>
                    <div class="contact-username">Doris Logue</div>
                </a>
                <a href="chats-group.html">
                    <div class="contact-avatar">
                        <img alt="" src="assets/images/avatars/avatar-6.jpg">
                    </div>
                    <div class="contact-username"> Jonathan Madano</div>
                </a>
                <a href="chats-group.html">
                    <div class="contact-avatar">
                        <img alt="" src="assets/images/avatars/avatar-2.jpg">
                        <span class="user_status"></span>
                    </div>
                    <div class="contact-username"> Erica Jones</div>
                </a>
                <a href="chats-group.html">
                    <div class="contact-avatar">
                        <img alt="" src="assets/images/avatars/avatar-1.jpg">
                        <span class="user_status status_online"></span>
                    </div>
                    <div class="contact-username"> Dennis Han</div>
                </a>


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
<script crossorigin="anonymous" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        src="code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="assets/js/tippy.all.min.js"></script>
<script src="assets/js/uikit.js"></script>
<script src="assets/js/simplebar.js"></script>
<script src="assets/js/custom.js"></script>
<script src="assets/js/bootstrap-select.min.js"></script>
<script src="unpkg.com/ionicons%405.2.3/dist/ionicons.js"></script>

</body>

<!-- Mirrored from demo.foxthemes.net/socialitev2.2/course-intro.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Nov 2022 06:21:02 GMT -->
</html>
