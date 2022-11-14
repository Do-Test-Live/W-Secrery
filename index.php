<?php
session_start();
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
    <meta name="description" content="Secrery">

    <!-- icons
    ================================================== -->
    <link rel="stylesheet" href="assets/css/icons.css">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="assets/css/uikit.css">
    <link rel="stylesheet" href="assets/css/style.css">
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
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path
                                    d="M3 4h18v2H3V4zm0 7h12v2H3v-2zm0 7h18v2H3v-2z" fill="currentColor"></path></svg>
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
                           placeholder="Search for Friends , Videos and more.." autocomplete="off">
                    <!-- -->
                </div>
                <?php
                include ("include/head_right.php");
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
                <h3 class="side-title"> Industries </h3>

                <div class="contact-list my-2 ml-1">

                    <a href="tech.php">
                        <div class="contact-avatar">
                            <img src="assets/images/icons/technology.jpg" alt="">
                        </div>
                        <div class="contact-username"> Tech</div>
                    </a>
                    <a href="finance.php">
                        <div class="contact-avatar">
                            <img src="assets/images/icons/finance.jpg" alt="">
                            <span class="user_status"></span>
                        </div>
                        <div class="contact-username"> Finance</div>
                    </a>
                    <a href="#">
                        <div class="contact-avatar">
                            <img src="assets/images/icons/hardware.jpg" alt="">
                        </div>
                        <div class="contact-username">Hardware & Semiconductor</div>
                    </a>
                    <a href="#">
                        <div class="contact-avatar">
                            <img src="assets/images/icons/E-Commerce%20&%20Retail.jpg" alt="">
                        </div>
                        <div class="contact-username"> E-Commerce & Retail</div>
                    </a>
                    <a href="#">
                        <div class="contact-avatar">
                            <img src="assets/images/icons/Gaming.jpg" alt="">
                        </div>
                        <div class="contact-username"> Gaming</div>
                    </a>
                    <a href="#">
                        <div class="contact-avatar">
                            <img src="assets/images/icons/auto.jpg" alt="">
                        </div>
                        <div class="contact-username"> Auto</div>
                    </a>
                    <a href="#">
                        <div class="contact-avatar">
                            <img src="assets/images/icons/social-media.jpg" alt="">
                        </div>
                        <div class="contact-username"> Media & Entertainment</div>
                    </a>
                    <a href="#">
                        <div class="contact-avatar">
                            <img src="assets/images/icons/telecommunications.jpg" alt="">
                        </div>
                        <div class="contact-username"> Telecom</div>
                    </a>
                    <a href="#">
                        <div class="contact-avatar">
                            <img src="assets/images/icons/healthcare.jpg" alt="">
                        </div>
                        <div class="contact-username"> Health</div>
                    </a>
                    <a href="#">
                        <div class="contact-avatar">
                            <img src="assets/images/icons/Aviation.jpg" alt="">
                        </div>
                        <div class="contact-username"> Aviation</div>
                    </a>

                </div>
                <!--industry section ends-->

        </div>

        <!-- sidebar overly for mobile -->
        <div class="side_overly" uk-toggle="target: #wrapper ; cls: is-collapse is-active"></div>

    </div>

    <!-- Main Contents -->
    <div class="main_content">
        <div class="mcontainer">

            <div class="lg:flex lg:space-x-12">

                <div class="lg:w-2/3 flex-shirink-0">

                    <div class="flex justify-between relative md:mb-4 mb-3">
                        <div class="flex-1">
                            <h2 class="text-2xl font-semibold"> Tranding </h2>
                        </div>
                    </div>

                    <ul class="card divide-y divide-gray-100 sm:m-0 -mx-5">
                        <li>
                            <div class="flex items-start space-x-5 p-7">
                                <img src="assets/images/avatars/avatar-2.jpg" alt="" class="w-12 h-12 rounded-full">
                                <div class="flex-1">
                                    <a href="blog_detail.php" class="text-lg font-semibold line-clamp-1 mb-1"> How do
                                        you know AWS is
                                        planning on laying you off? Do they give severance? </a>
                                    <p class="text-sm text-gray-400 mb-2"><span data-href="%40 .html"> </span>
                                        8 hours ago</span> </p>
                                    <p class="leading-6 line-clamp-2 mt-3">Currently a Cloud Support Associate and have
                                        been working since July. Not really enjoying it and going through some personal
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
                                <img src="assets/images/avatars/avatar-1.jpg" alt="" class="w-12 h-12 rounded-full">
                                <div class="flex-1">
                                    <a href="#" class="text-lg font-semibold line-clamp-1 mb-1">Talk privately with your
                                        coworkers.</a>
                                    <p class="text-sm text-gray-400 mb-2"><span data-href="%40 .html"> </span>
                                        8 hours ago</span> </p>
                                    <p class="leading-6 line-clamp-2 mt-3">Promotions? All-hands? Join your company's
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
                                <img src="assets/images/avatars/avatar-3.jpg" alt="" class="w-12 h-12 rounded-full">
                                <div class="flex-1">
                                    <a href="#" class="text-lg font-semibold line-clamp-1 mb-1"> Don’t give Preference
                                        to laid off H1B holders </a>
                                    <p class="text-sm text-gray-400 mb-2"><span data-href="%40 .html"> </span>
                                        8 hours ago</span> </p>
                                    <p class="leading-6 line-clamp-2 mt-3">DM me if you want to work on this cause. I
                                        will connect with the people who are contributing for this cause. We need your
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
                                <img src="assets/images/avatars/avatar-2.jpg" alt="" class="w-12 h-12 rounded-full">
                                <div class="flex-1">
                                    <a href="#" class="text-lg font-semibold line-clamp-1 mb-1">AMZN to GOOG - 3 months
                                        later</a>
                                    <p class="text-sm text-gray-400 mb-2"><span data-href="%40 .html"> </span>
                                        8 hours ago</span> </p>
                                    <p class="leading-6 line-clamp-2 mt-3">I joined GCP from AWS three months ago and
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

                    <h2 class="text-xl font-semibold mb-6 lg:mt-10 mt-4"> Top Contributors </h2>
                    <ul class="card divide-y divide-gray-100">
                        <li>
                            <div class="flex items-center space-x-5 p-7">
                                <img src="assets/images/avatars/avatar-1.jpg" alt="" class="w-12 h-12 rounded-full">
                                <div class="flex-1">
                                    <a href="#" class="text-lg font-semibold line-clamp-1"> Wild to think that the smartest people I know are… </a>
                                    <div class="flex space-x-3 text-sm pb-2 mt-1 flex-wrap font-medium">
                                        <a href="timeline.html" class="font-semibold"> Justin Hau </a>
                                        <div class="text-gray-500"> Oct 20Th , 2020</div>
                                        <div class="text-gray-500"> 12 replies</div>
                                    </div>
                                </div>
                                <div class="sm:flex items-center -space-x-4 hidden">
                                    <img src="assets/images/avatars/avatar-1.jpg" alt=""
                                         class="w-10 h-10 rounded-full border-2 border-white" data-tippy-placement="top"
                                         title="Justin Hau">
                                    <img src="assets/images/avatars/avatar-2.jpg" alt=""
                                         class="w-10 h-10 rounded-full border-2 border-white" data-tippy-placement="top"
                                         title="Steven Tai">
                                    <img src="assets/images/avatars/avatar-3.jpg" alt=""
                                         class="w-10 h-10 rounded-full border-2 border-white" data-tippy-placement="top"
                                         title="Doris Logue">
                                    <div class="w-10 h-10 rounded-full flex justify-center items-center bg-red-100 text-red-500 font-semibold">
                                        12+
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center space-x-5 p-7">
                                <img src="assets/images/avatars/avatar-2.jpg" alt="" class="w-12 h-12 rounded-full">
                                <div class="flex-1">
                                    <a href="#" class="text-lg font-semibold line-clamp-1"> Desi/Asian parents: can you give insight? </a>
                                    <div class="flex space-x-3 text-sm pb-2 flex-wrap">
                                        <a href="timeline.html" class="font-semibold"> Doris Logue </a>
                                        <div class="text-gray-500"> Oct 20Th , 2020</div>
                                        <div class="text-gray-500"> 12 replies</div>
                                    </div>
                                </div>
                                <div class="sm:flex items-center -space-x-4 hidden">
                                    <img src="assets/images/avatars/avatar-2.jpg" alt=""
                                         class="w-10 h-10 rounded-full border-2 border-white" data-tippy-placement="top"
                                         title="Doris Logue">
                                    <img src="assets/images/avatars/avatar-1.jpg" alt=""
                                         class="w-10 h-10 rounded-full border-2 border-white" data-tippy-placement="top"
                                         title="Justin Hau">
                                    <img src="assets/images/avatars/avatar-4.jpg" alt=""
                                         class="w-10 h-10 rounded-full border-2 border-white" data-tippy-placement="top"
                                         title="Steven Tai">
                                    <div class="w-10 h-10 rounded-full flex justify-center items-center bg-green-100 text-green-500 font-semibold">
                                        12+
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center space-x-5 p-7">
                                <img src="assets/images/avatars/avatar-4.jpg" alt="" class="w-12 h-12 rounded-full">
                                <div class="flex-1">
                                    <a href="#" class="text-lg font-semibold line-clamp-1"> Wtf LinkedIn??? Anyone experiencing this?</a>
                                    <div class="flex space-x-3 text-sm pb-2 mt-1 flex-wrap font-medium">
                                        <a href="timeline.html" class="font-semibold"> Steven Tai </a>
                                        <div class="text-gray-500"> Oct 20Th , 2020</div>
                                        <div class="text-gray-500"> 12 replies</div>
                                    </div>
                                </div>
                                <div class="sm:flex items-center -space-x-4 hidden">
                                    <img src="assets/images/avatars/avatar-3.jpg" alt=""
                                         class="w-10 h-10 rounded-full border-2 border-white" data-tippy-placement="top"
                                         title="Doris Logue">
                                    <img src="assets/images/avatars/avatar-4.jpg" alt=""
                                         class="w-10 h-10 rounded-full border-2 border-white" data-tippy-placement="top"
                                         title="Steven Jesse">
                                    <div class="w-10 h-10 rounded-full flex justify-center items-center bg-red-100 text-red-500 font-semibold">
                                        24+
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center space-x-5 p-7">
                                <img src="assets/images/avatars/avatar-2.jpg" alt="" class="w-12 h-12 rounded-full">
                                <div class="flex-1">
                                    <a href="#" class="text-lg font-semibold line-clamp-1">Green card rate race </a>
                                    <div class="flex space-x-3 text-sm pb-2 mt-1 flex-wrap font-medium">
                                        <a href="timeline.html" class="font-semibold"> Justin Hau </a>
                                        <div class="text-gray-500"> Oct 20Th , 2020</div>
                                        <div class="text-gray-500"> 12 replies</div>
                                    </div>
                                </div>
                                <div class="sm:flex items-center -space-x-4 hidden">
                                    <img src="assets/images/avatars/avatar-5.jpg" alt=""
                                         class="w-10 h-10 rounded-full border-2 border-white hover:z-10"
                                         data-tippy-placement="top" title="Doris Logue">
                                    <img src="assets/images/avatars/avatar-6.jpg" alt=""
                                         class="w-10 h-10 rounded-full border-2 border-white" data-tippy-placement="top"
                                         title="Justin Hau">
                                    <img src="assets/images/avatars/avatar-2.jpg" alt=""
                                         class="w-10 h-10 rounded-full border-2 border-white" data-tippy-placement="top"
                                         title="Steven Tai">
                                    <div class="w-10 h-10 rounded-full flex justify-center items-center bg-green-100 text-green-500 font-semibold">
                                        18+
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>

                </div>

                <div class="lg:w-1/3 pt-5">

                    <div uk-sticky="offset:100">

                        <h2 class="text-xl font-semibold mb-2"> Top Contributors </h2>
                        <p> People who started the most discussions on Talks. </p>
                        <br>
                        <ul class="space-y-3">
                            <li>
                                <div class="flex items-center space-x-3">
                                    <img src="assets/images/avatars/avatar-1.jpg" alt="" class="w-8 h-8 rounded-full">
                                    <a href="#" class="font-semibold"> Steven Tai </a>
                                    <div class="flex items-center space-x-2">
                                        <ion-icon name="chatbubble-ellipses-outline" class="text-lg"></ion-icon>
                                        <span> 137 </span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center space-x-3">
                                    <img src="assets/images/avatars/avatar-2.jpg" alt="" class="w-8 h-8 rounded-full">
                                    <a href="#" class="font-semibold"> Doris Logue </a>
                                    <div class="flex items-center space-x-2">
                                        <ion-icon name="chatbubble-ellipses-outline" class="text-lg"></ion-icon>
                                        <span> 14 </span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center space-x-3">
                                    <img src="assets/images/avatars/avatar-3.jpg" alt="" class="w-8 h-8 rounded-full">
                                    <a href="#" class="font-semibold"> Sammy Ka </a>
                                    <div class="flex items-center space-x-2">
                                        <ion-icon name="chatbubble-ellipses-outline" class="text-lg"></ion-icon>
                                        <span> 257 </span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center space-x-3">
                                    <img src="assets/images/avatars/avatar-1.jpg" alt="" class="w-8 h-8 rounded-full">
                                    <a href="#" class="font-semibold"> Steven Tai </a>
                                    <div class="flex items-center space-x-2">
                                        <ion-icon name="chatbubble-ellipses-outline" class="text-lg"></ion-icon>
                                        <span> 137 </span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center space-x-3">
                                    <img src="assets/images/avatars/avatar-2.jpg" alt="" class="w-8 h-8 rounded-full">
                                    <a href="#" class="font-semibold"> Doris Logue </a>
                                    <div class="flex items-center space-x-2">
                                        <ion-icon name="chatbubble-ellipses-outline" class="text-lg"></ion-icon>
                                        <span> 14 </span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center space-x-3">
                                    <img src="assets/images/avatars/avatar-3.jpg" alt="" class="w-8 h-8 rounded-full">
                                    <a href="#" class="font-semibold"> Sammy Ka </a>
                                    <div class="flex items-center space-x-2">
                                        <ion-icon name="chatbubble-ellipses-outline" class="text-lg"></ion-icon>
                                        <span> 257 </span>
                                    </div>
                                </div>
                            </li>
                        </ul>

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
                    <ion-icon name="search" class="text-xl hover:bg-gray-100 p-1 rounded-full"></ion-icon>
                </a>
                <a href="#">
                    <ion-icon name="settings-outline" class="text-xl hover:bg-gray-100 p-1 rounded-full"></ion-icon>
                </a>
                <a href="#">
                    <ion-icon name="ellipsis-vertical" class="text-xl hover:bg-gray-100 p-1 rounded-full"></ion-icon>
                </a>
                <div class="bg-white w-56 shadow-md mx-auto p-2 mt-12 rounded-md text-gray-500 hidden border border-gray-100 dark:bg-gray-900 dark:text-gray-100 dark:border-gray-700"
                     uk-drop="mode: click;pos: bottom-right;animation: uk-animation-slide-bottom-small; offset:5">
                    <ul class="space-y-1">
                        <li>
                            <a href="#"
                               class="flex items-center px-3 py-2 hover:bg-gray-100 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                <ion-icon name="checkbox-outline" class="pr-2 text-xl"></ion-icon>
                                Mark all as read
                            </a>
                        </li>
                        <li>
                            <a href="#"
                               class="flex items-center px-3 py-2 hover:bg-gray-100 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                <ion-icon name="settings-outline" class="pr-2 text-xl"></ion-icon>
                                Chat setting
                            </a>
                        </li>
                        <li>
                            <a href="#"
                               class="flex items-center px-3 py-2 hover:bg-gray-100 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                <ion-icon name="notifications-off-outline" class="pr-2 text-lg"></ion-icon>
                                Disable notifications
                            </a>
                        </li>
                        <li>
                            <a href="#"
                               class="flex items-center px-3 py-2 hover:bg-gray-100 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                <ion-icon name="star-outline" class="pr-2 text-xl"></ion-icon>
                                Create a group chat
                            </a>
                        </li>
                    </ul>
                </div>


            </div>


        </div>

        <div class="absolute bg-white z-10 w-full -mt-5 lg:-mt-2 transform translate-y-1.5 py-2 border-b items-center flex"
             id="search" hidden>
            <input type="text" placeholder="Search.." class="flex-1">
            <ion-icon name="close-outline" class="text-2xl hover:bg-gray-100 p-1 rounded-full mr-4 cursor-pointer"
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
                        <img src="assets/images/avatars/avatar-7.jpg" alt="">
                    </div>
                    <div class="contact-username"> Sammy Ka</div>
                </a>
                <a href="chats-friend.html">
                    <div class="contact-avatar">
                        <img src="assets/images/avatars/avatar-8.jpg" alt="">
                        <span class="user_status status_online"></span>
                    </div>
                    <div class="contact-username"> Dennis Han</div>
                </a>
                <a href="chats-friend.html">
                    <div class="contact-avatar">
                        <img src="assets/images/avatars/avatar-2.jpg" alt="">
                        <span class="user_status"></span>
                    </div>
                    <div class="contact-username"> Erica Jones</div>
                </a>
                <a href="chats-friend.html">
                    <div class="contact-avatar">
                        <img src="assets/images/avatars/avatar-3.jpg" alt="">
                    </div>
                    <div class="contact-username">Steven Tai</div>
                </a>

                <a href="chats-friend.html">
                    <div class="contact-avatar">
                        <img src="assets/images/avatars/avatar-5.jpg" alt="">
                    </div>
                    <div class="contact-username">Doris Logue</div>
                </a>
                <a href="chats-friend.html">
                    <div class="contact-avatar">
                        <img src="assets/images/avatars/avatar-6.jpg" alt="">
                    </div>
                    <div class="contact-username"> Jonathan Madano</div>
                </a>
                <a href="chats-friend.html">
                    <div class="contact-avatar">
                        <img src="assets/images/avatars/avatar-2.jpg" alt="">
                        <span class="user_status"></span>
                    </div>
                    <div class="contact-username"> Erica Jones</div>
                </a>
                <a href="chats-friend.html">
                    <div class="contact-avatar">
                        <img src="assets/images/avatars/avatar-1.jpg" alt="">
                        <span class="user_status status_online"></span>
                    </div>
                    <div class="contact-username"> Dennis Han</div>
                </a>


            </div>
            <div class="p-1">
                <a href="chats-group.html">
                    <div class="contact-avatar">
                        <img src="assets/images/avatars/avatar-7.jpg" alt="">
                    </div>
                    <div class="contact-username"> Sammy Ka</div>
                </a>
                <a href="chats-group.html">
                    <div class="contact-avatar">
                        <img src="assets/images/avatars/avatar-8.jpg" alt="">
                        <span class="user_status status_online"></span>
                    </div>
                    <div class="contact-username"> Dennis Han</div>
                </a>
                <a href="chats-group.html">
                    <div class="contact-avatar">
                        <img src="assets/images/avatars/avatar-2.jpg" alt="">
                        <span class="user_status"></span>
                    </div>
                    <div class="contact-username"> Erica Jones</div>
                </a>
                <a href="chats-group.html">
                    <div class="contact-avatar">
                        <img src="assets/images/avatars/avatar-3.jpg" alt="">
                    </div>
                    <div class="contact-username">Steven Tai</div>
                </a>

                <a href="chats-group.html">
                    <div class="contact-avatar">
                        <img src="assets/images/avatars/avatar-5.jpg" alt="">
                    </div>
                    <div class="contact-username">Doris Logue</div>
                </a>
                <a href="chats-group.html">
                    <div class="contact-avatar">
                        <img src="assets/images/avatars/avatar-6.jpg" alt="">
                    </div>
                    <div class="contact-username"> Jonathan Madano</div>
                </a>
                <a href="chats-group.html">
                    <div class="contact-avatar">
                        <img src="assets/images/avatars/avatar-2.jpg" alt="">
                        <span class="user_status"></span>
                    </div>
                    <div class="contact-username"> Erica Jones</div>
                </a>
                <a href="chats-group.html">
                    <div class="contact-avatar">
                        <img src="assets/images/avatars/avatar-1.jpg" alt="">
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
<script src="code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
<script src="assets/js/tippy.all.min.js"></script>
<script src="assets/js/uikit.js"></script>
<script src="assets/js/simplebar.js"></script>
<script src="assets/js/custom.js"></script>
<script src="assets/js/bootstrap-select.min.js"></script>
<script src="unpkg.com/ionicons%405.2.3/dist/ionicons.js"></script>

</body>

<!-- Mirrored from demo.foxthemes.net/socialitev2.2/forums.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Nov 2022 06:15:04 GMT -->
</html>