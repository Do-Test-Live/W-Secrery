<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.foxthemes.net/socialitev2.2/companies.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Nov 2022 06:17:39 GMT -->
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
                           placeholder="Search for Friends , Videos and more.." autocomplete="off">

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
                <!-- <li><a href="jobs.html">
                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                          class="text-pink-500">
                         <path fill-rule="evenodd"
                               d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z"
                               clip-rule="evenodd"/>
                         <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z"/>
                     </svg>
                     <span> Salary </span> </a>
                 </li>-->
                <!--<li><a href="#">
                    <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z"
                              clip-rule="evenodd"></path>
                    </svg>
                    <span> Chat </span> </a>
                </li>-->


                <!--<a href="#" class="see-mover h-10 flex my-1 pl-2 rounded-xl text-gray-600" uk-toggle="target: #more-veiw; animation: uk-animation-fade">
                    <span class="w-full flex items-center" id="more-veiw">
                        <svg class="  bg-gray-100 mr-2 p-0.5 rounded-full text-lg w-7" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        See More
                    </span>
                    <span class="w-full flex items-center" id="more-veiw" hidden>
                        <svg  class="bg-gray-100 mr-2 p-0.5 rounded-full text-lg w-7"  fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd"></path></svg>
                        See Less
                    </span>
                </a>-->

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


            <div class="flex justify-between relative md:mb-4 mb-3">
                <div class="flex-1">
                    <h2 class="text-2xl font-semibold"> Companies </h2>
                </div>
                <a href="#"
                   class="flex items-center justify-center h-9 lg:px-5 px-2 rounded-md bg-blue-600 text-white space-x-1.5 absolute right-0">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5">
                        <path fill-rule="evenodd"
                              d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z"
                              clip-rule="evenodd"></path>
                    </svg>
                    <span class="md:block hidden"> Create </span>
                </a>
            </div>

            <div class="relative" uk-slider="finite: true">

                <div class="uk-slider-container px-1 py-3">
                    <ul class="uk-slider-items uk-child-width-1-4@m uk-child-width-1-3@s uk-grid-small uk-grid">

                        <li>
                            <div class="card">
                                <div class="card-media h-28">
                                    <div class="card-media-overly"></div>
                                    <img src="assets/images/group/group-cover-1.jpg" alt="" class="">

                                    <div class="absolute bg-red-100 font-semibold px-2.5 py-1 rounded-lg text-red-500 text-xs top-2.5 left-2.5">
                                        Trend
                                    </div>
                                </div>
                                <div class="card-body">
                                    <a href="company_details.php" class="font-semibold text-lg truncate"> FTW &
                                        Partners CPA Limited </a>
                                    <div class="flex items-center flex-wrap space-x-1 mt-1 text-sm text-gray-500 capitalize">
                                        <a href="#"> <span> 200 members </span> </a>
                                        <a href="#"> <span> 1.2/10 </span> </a>
                                    </div>

                                    <div class="flex mt-3.5 space-x-2 text-sm font-medium">
                                        <a href="#"
                                           class="bg-blue-600 flex flex-1 h-8 items-center justify-center rounded-md text-white capitalize">
                                            Join
                                        </a>
                                        <a href="company_details.php"
                                           class="bg-gray-200 flex flex-1 h-8 items-center justify-center rounded-md capitalize">
                                            View
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="card">
                                <div class="card-media h-28">
                                    <div class="card-media-overly"></div>
                                    <img src="assets/images/group/group-cover-2.jpg" alt="" class="">

                                    <div class="absolute bg-red-100 font-semibold px-2.5 py-1 rounded-lg text-red-500 text-xs top-2.5 left-2.5">
                                        Trend
                                    </div>
                                </div>
                                <div class="card-body">
                                    <a href="#" class="font-semibold text-lg truncate"> [SJ Interview] Conpak CPA
                                        Limited </a>
                                    <div class="flex items-center flex-wrap space-x-1 mt-1 text-sm text-gray-500 capitalize">
                                        <a href="#"> <span> 350 members </span> </a>
                                        <a href="#"> <span> 3.2/10 </span> </a>
                                    </div>

                                    <div class="flex mt-3.5 space-x-2 text-sm font-medium">
                                        <a href="#"
                                           class="bg-blue-600 flex flex-1 h-8 items-center justify-center rounded-md text-white capitalize">
                                            Join
                                        </a>
                                        <a href="#"
                                           class="bg-gray-200 flex flex-1 h-8 items-center justify-center rounded-md capitalize">
                                            View
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="card">
                                <div class="card-media h-28">
                                    <div class="card-media-overly"></div>
                                    <img src="assets/images/group/group-cover-3.jpg" alt="" class="">

                                    <div class="absolute bg-red-100 font-semibold px-2.5 py-1 rounded-lg text-red-500 text-xs top-2.5 left-2.5">
                                        Trend
                                    </div>
                                </div>
                                <div class="card-body">
                                    <a href="#" class="font-semibold text-lg truncate"> Hang Seng Bank Digital Product
                                        Manager Salary Revenue </a>
                                    <div class="flex items-center flex-wrap space-x-1 mt-1 text-sm text-gray-500 capitalize">
                                        <a href="#"> <span> 100 members </span> </a>
                                        <a href="#"> <span> 1.2/10 </span> </a>
                                    </div>

                                    <div class="flex mt-3.5 space-x-2 text-sm font-medium">
                                        <a href="#"
                                           class="bg-blue-600 flex flex-1 h-8 items-center justify-center rounded-md text-white capitalize">
                                            Join
                                        </a>
                                        <a href="#"
                                           class="bg-gray-200 flex flex-1 h-8 items-center justify-center rounded-md capitalize">
                                            View
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="card">
                                <div class="card-media h-28">
                                    <div class="card-media-overly"></div>
                                    <img src="assets/images/group/group-cover-4.jpg" alt="" class="">
                                </div>
                                <div class="card-body">
                                    <a href="#" class="font-semibold text-lg truncate"> Wenping Patent & Trade Mark
                                        Agent Ltd. Salary income </a>
                                    <div class="flex items-center flex-wrap space-x-1 mt-1 text-sm text-gray-500 capitalize">
                                        <a href="#"> <span> 50 members </span> </a>
                                        <a href="#"> <span> 4.0/10 </span> </a>
                                    </div>

                                    <div class="flex mt-3.5 space-x-2 text-sm font-medium">
                                        <a href="#"
                                           class="bg-blue-600 flex flex-1 h-8 items-center justify-center rounded-md text-white capitalize">
                                            Join
                                        </a>
                                        <a href="#"
                                           class="bg-gray-200 flex flex-1 h-8 items-center justify-center rounded-md capitalize">
                                            View
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="card">
                                <div class="card-media h-28">
                                    <div class="card-media-overly"></div>
                                    <img src="assets/images/group/group-cover-1.jpg" alt="" class="">
                                </div>
                                <div class="card-body">
                                    <a href="#" class="font-semibold text-lg truncate"> DHL Express HK Ltd Resourcing
                                        Executive Salary Revenue </a>
                                    <div class="flex items-center flex-wrap space-x-1 mt-1 text-sm text-gray-500 capitalize">
                                        <a href="#"> <span> 500 members </span> </a>
                                        <a href="#"> <span> 1.8/10 </span> </a>
                                    </div>

                                    <div class="flex mt-3.5 space-x-2 text-sm font-medium">
                                        <a href="#"
                                           class="bg-blue-600 flex flex-1 h-8 items-center justify-center rounded-md text-white capitalize">
                                            Join
                                        </a>
                                        <a href="#"
                                           class="bg-gray-200 flex flex-1 h-8 items-center justify-center rounded-md capitalize">
                                            View
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </li>

                    </ul>

                    <a class="absolute bg-white bottom-1/2 flex items-center justify-center p-2 -left-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white"
                       href="#" uk-slider-item="previous"> <i class="icon-feather-chevron-left"></i></a>
                    <a class="absolute bg-white bottom-1/2 flex items-center justify-center p-2 -right-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white"
                       href="#" uk-slider-item="next"> <i class="icon-feather-chevron-right"></i></a>

                </div>
            </div>


        </div>
        <div class="mcontainer">
            <div class="flex justify-between relative md:mb-4 mb-3">
                <div class="flex-1">
                    <h2 class="text-2xl font-semibold"> Popular </h2>
                </div>
            </div>

            <div class="relative" uk-slider="finite: true">

                <div class="uk-slider-container px-1 py-3">
                    <ul class="uk-slider-items uk-child-width-1-4@m uk-child-width-1-3@s uk-grid-small uk-grid">

                        <li>
                            <div class="card">
                                <div class="card-media h-28">
                                    <div class="card-media-overly"></div>
                                    <img src="assets/images/group/group-cover-1.jpg" alt="" class="">

                                    <div class="absolute bg-red-100 font-semibold px-2.5 py-1 rounded-lg text-red-500 text-xs top-2.5 left-2.5">
                                        Trend
                                    </div>
                                </div>
                                <div class="card-body">
                                    <a href="#" class="font-semibold text-lg truncate"> Salary, a full-time Chinese
                                        teacher at Wise Children Education Centre </a>
                                    <div class="flex items-center flex-wrap space-x-1 mt-1 text-sm text-gray-500 capitalize">
                                        <a href="#"> <span> 200 members </span> </a>
                                        <a href="#"> <span> 1.8/10 </span> </a>
                                    </div>

                                    <div class="flex mt-3.5 space-x-2 text-sm font-medium">
                                        <a href="#"
                                           class="bg-blue-600 flex flex-1 h-8 items-center justify-center rounded-md text-white capitalize">
                                            Join
                                        </a>
                                        <a href="company_details.php"
                                           class="bg-gray-200 flex flex-1 h-8 items-center justify-center rounded-md capitalize">
                                            View
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="card">
                                <div class="card-media h-28">
                                    <div class="card-media-overly"></div>
                                    <img src="assets/images/group/group-cover-2.jpg" alt="" class="">

                                    <div class="absolute bg-red-100 font-semibold px-2.5 py-1 rounded-lg text-red-500 text-xs top-2.5 left-2.5">
                                        Trend
                                    </div>
                                </div>
                                <div class="card-body">
                                    <a href="#" class="font-semibold text-lg truncate"> Wise Children Education Center
                                        Salary income </a>
                                    <div class="flex items-center flex-wrap space-x-1 mt-1 text-sm text-gray-500 capitalize">
                                        <a href="#"> <span> 350 members </span> </a>
                                        <a href="#"> <span> 5.6/10 </span> </a>
                                    </div>

                                    <div class="flex mt-3.5 space-x-2 text-sm font-medium">
                                        <a href="#"
                                           class="bg-blue-600 flex flex-1 h-8 items-center justify-center rounded-md text-white capitalize">
                                            Join
                                        </a>
                                        <a href="#"
                                           class="bg-gray-200 flex flex-1 h-8 items-center justify-center rounded-md capitalize">
                                            View
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="card">
                                <div class="card-media h-28">
                                    <div class="card-media-overly"></div>
                                    <img src="assets/images/group/group-cover-3.jpg" alt="" class="">
                                </div>
                                <div class="card-body">
                                    <a href="#" class="font-semibold text-lg truncate"> BOCI BOCI Analyst Salary
                                        Income </a>
                                    <div class="flex items-center flex-wrap space-x-1 mt-1 text-sm text-gray-500 capitalize">
                                        <a href="#"> <span> 100 members </span> </a>
                                        <a href="#"> <span> 2.2/10 </span> </a>
                                    </div>

                                    <div class="flex mt-3.5 space-x-2 text-sm font-medium">
                                        <a href="#"
                                           class="bg-blue-600 flex flex-1 h-8 items-center justify-center rounded-md text-white capitalize">
                                            Join
                                        </a>
                                        <a href="#"
                                           class="bg-gray-200 flex flex-1 h-8 items-center justify-center rounded-md capitalize">
                                            View
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="card">
                                <div class="card-media h-28">
                                    <div class="card-media-overly"></div>
                                    <img src="assets/images/group/group-cover-4.jpg" alt="" class="">
                                </div>
                                <div class="card-body">
                                    <a href="#" class="font-semibold text-lg truncate"> FTW & Partners CPA Limited
                                        Accounting Clerk Salary Income </a>
                                    <div class="flex items-center flex-wrap space-x-1 mt-1 text-sm text-gray-500 capitalize">
                                        <a href="#"> <span> 50 members </span> </a>
                                        <a href="#"> <span> 1.2/10 </span> </a>
                                    </div>

                                    <div class="flex mt-3.5 space-x-2 text-sm font-medium">
                                        <a href="#"
                                           class="bg-blue-600 flex flex-1 h-8 items-center justify-center rounded-md text-white capitalize">
                                            Join
                                        </a>
                                        <a href="#"
                                           class="bg-gray-200 flex flex-1 h-8 items-center justify-center rounded-md capitalize">
                                            View
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="card">
                                <div class="card-media h-28">
                                    <div class="card-media-overly"></div>
                                    <img src="assets/images/group/group-cover-1.jpg" alt="" class="">
                                </div>
                                <div class="card-body">
                                    <a href="#" class="font-semibold text-lg truncate"> Prudential Prudential Assistant
                                        Manager Salary Income </a>
                                    <div class="flex items-center flex-wrap space-x-1 mt-1 text-sm text-gray-500 capitalize">
                                        <a href="#"> <span> 500 members </span> </a>
                                        <a href="#"> <span> 1.8/10 </span> </a>
                                    </div>

                                    <div class="flex mt-3.5 space-x-2 text-sm font-medium">
                                        <a href="#"
                                           class="bg-blue-600 flex flex-1 h-8 items-center justify-center rounded-md text-white capitalize">
                                            Join
                                        </a>
                                        <a href="#"
                                           class="bg-gray-200 flex flex-1 h-8 items-center justify-center rounded-md capitalize">
                                            View
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </li>

                    </ul>

                    <a class="absolute bg-white bottom-1/2 flex items-center justify-center p-2 -left-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white"
                       href="#" uk-slider-item="previous"> <i class="icon-feather-chevron-left"></i></a>
                    <a class="absolute bg-white bottom-1/2 flex items-center justify-center p-2 -right-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white"
                       href="#" uk-slider-item="next"> <i class="icon-feather-chevron-right"></i></a>

                </div>
            </div>


        </div>
    </div>

</div>


<!-- open chat box -->
<!--<div uk-toggle="target: #offcanvas-chat" class="start-chat">
    <svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
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

<!-- Mirrored from demo.foxthemes.net/socialitev2.2/companies.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Nov 2022 06:18:19 GMT -->
</html>