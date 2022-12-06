<?php
session_start();
include("config/dbconfig.php");
$company_id = $_GET['id'];
if(isset($_SESSION['email'])){
    $email = $_SESSION["email"];
}

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
                    <input autocomplete="off" class="form-control" placeholder="Search"
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
                                    <span class="bg-yellow-500 text-white mr-1.5 px-2 rounded font-semibold"> <?php echo $review; ?> </span>
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
                                <li><a class="lg:px-2" href="#">Post</a></li>
                                <li><a class="lg:px-2" href="#">Overview</a></li>
                                <li><a class="lg:px-2" href="#">Faq</a></li>
                                <?php
                                if (isset($_SESSION['email'])) {
                                    $query = $con->query("select `c_domain_id`,`email` from `user` where `email` = '$email'");
                                    if ($query->num_rows == 1) {
                                        while ($result = mysqli_fetch_assoc($query)) {
                                            $id = $result['c_domain_id'];
                                        }
                                    }
                                    if ($id == $company_id) {
                                        ?>
                                        <li><a class="lg:px-2" href="#">Channel</a></li>
                                        <?php
                                    }
                                }
                                ?>
                            </ul>
                        </nav>

                        <div class="mcontainer" style="padding: 0">

                            <div class="uk-switcher" id="components-nav">

                                <!-- Post -->
                                <?php include ("include/fetch_company_blog.php");?>

                                <!-- Overview -->
                                <?php include ("include/fetch_overview.php");?>


                                <!-- Faq -->
                                <?php include ("include/fetch_faq.php");?>


                                <!-- Channel -->
                                <?php include ("include/chanel.php");?>

                            </div>

                        </div>


                    </div>

                </div>
                <div class="lg:w-1/4 w-full">

                    <div uk-sticky="offset:100; top:1 ; bottom: true">

                        <h2 class="text-lg font-semibold mb-3"> Related Companies </h2>
                        <ul>
                            <?php include ('include/fetch_random_company.php');?>
                        </ul>
                        <br>
                        <?php include ("include/fetch_tag.php");?>

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
<script src="assets/js/tippy.all.min.js"></script>
<script src="assets/js/uikit.js"></script>
<script src="assets/js/simplebar.js"></script>
<script src="assets/js/custom.js"></script>
<script src="assets/js/bootstrap-select.min.js"></script>
<script src="unpkg.com/ionicons%405.2.3/dist/ionicons.js"></script>

</body>

<!-- Mirrored from demo.foxthemes.net/socialitev2.2/course-intro.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Nov 2022 06:21:02 GMT -->
</html>
