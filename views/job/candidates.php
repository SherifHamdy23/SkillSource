<!DOCTYPE html>
<html lang="en" dir="ltr" data-mode="light" class="scroll-smooths group" data-theme-color="violet">
    <head>
        <meta charset="utf-8" />
        <title>index-1 | Jobcy - Admin & Dashboard Template</title>
        <meta
          name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <meta
          content="Tailwind Multipurpose Admin & Dashboard Template"
          name="description"
        />
        <meta content="" name="Themesbrand" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="/assets/images/favicon.ico" />


         <link rel="stylesheet" href="/assets/libs/choices.js/public//assets/styles/choices.min.css">

        <link rel="stylesheet" href="/assets/css/icons.css" />
        <link rel="stylesheet" href="/assets/css/tailwind.css" />




    </head>
    
    <body class="bg-white dark:bg-neutral-800">



        
        <div class="hidden px-5 mx-auto border-gray-200 container-fluid lg:px-24 bg-gray-50 md:block dark:bg-neutral-600">
            <div class="grid items-center grid-cols-12">
                <div class="col-span-7">
                    <ul class="flex items-center py-3">
                        <li class="ltr:mr-4 rtl:ml-4">
                            <p class="mb-0 text-gray-800 text-13 dark:text-gray-50"> <i class="mdi mdi-map-marker"></i> Your Location: <a href="javascript:void(0)" class="font-medium">New Caledonia</a></p>
                        </li>
                        <li>
                            <ul class="flex flex-wrap gap-4 text-gray-800 ">
                                <li class="transition-all duration-200 ease-in hover:text-green-500 dark:text-gray-50 dark:hover:text-green-500"><a href="javascript:void(0)" class="social-link"><i class="uil uil-whatsapp"></i></a></li>
                                <li class="transition-all duration-200 ease-in hover:text-green-500 dark:text-gray-50 dark:hover:text-green-500"><a href="javascript:void(0)" class="social-link"><i class="uil uil-facebook-messenger-alt"></i></a></li>
                                <li class="transition-all duration-200 ease-in hover:text-green-500 dark:text-gray-50 dark:hover:text-green-500"><a href="javascript:void(0)" class="social-link"><i class="uil uil-instagram"></i></a></li>
                                <li class="transition-all duration-200 ease-in hover:text-green-500 dark:text-gray-50 dark:hover:text-green-500"><a href="javascript:void(0)" class="social-link"><i class="uil uil-envelope"></i></a></li>
                                <li class="transition-all duration-200 ease-in hover:text-green-500 dark:text-gray-50 dark:hover:text-green-500"><a href="javascript:void(0)" class="social-link"><i class="uil uil-twitter-alt"></i></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="col-span-5 ltr:ml-auto rtl:mr-auto">
                    <ul class="flex items-center gap-4">
                        <li>
                            <a href="#signupModal" class="py-3 font-medium text-gray-800 text-13 dark:text-gray-50" data-tw-toggle="modal" data-tw-target="#modal-id_form"><i class="uil uil-lock ltr:mr-1 rtl:ml-1"></i>Sign Up</a>
               
                            <div class="relative z-50 hidden modal" id="modal-id_form" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                <div class="fixed top-0 bottom-0 left-0 right-0 z-50 overflow-hidden">
                                    <div class="absolute inset-0 transition-opacity bg-black bg-opacity-60 modal-overlay"></div>
                                    <div class="box-content p-4 mx-auto animate-translate sm:max-w-lg">
                                        <div class="relative overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl top-36 dark:bg-neutral-800">
                                            <div class="p-12 bg-white dark:bg-neutral-800">
                                                <div class="mb-4 text-center">
                                                    <h5 class="mb-1 text-gray-800 dark:text-gray-50">Sign Up</h5>
                                                    <p class="text-gray-500 dark:text-gray-300">Sign Up and get access to all the features of Jobcy</p>
                                                </div>
                                                <div class="mb-4">
                                                    <label for="usernameInput" class="block text-gray-900 dark:text-gray-50 ltr:text-left rtl:text-right">Username</label>
                                                    <input type="text" class="w-full mt-2 border-gray-100 rounded placeholder:text-13 placeholder:text-gray-200 focus:ring-1 focus:ring-violet-500 dark:bg-transparent dark:text-gray-50 dark:border-neutral-600" id="usernameInput" placeholder="Enter your username">
                                                </div>
                                                <div class="mb-4">
                                                    <label for="emailInput" class="block text-gray-900 dark:text-gray-50 ltr:text-left rtl:text-right">Email</label>
                                                    <input type="email" class="w-full mt-2 border-gray-100 rounded placeholder:text-13 placeholder:text-gray-200 focus:ring-1 focus:ring-violet-500 dark:bg-transparent dark:text-gray-50 dark:border-neutral-600" id="usernameInput" placeholder="Enter your email">
                                                </div>
                                                <div class="mb-4">
                                                    <label for="passwordInput" class="block text-gray-900 dark:text-gray-50 ltr:text-left rtl:text-right">Password</label>
                                                    <input type="password" class="w-full mt-2 border-gray-100 rounded placeholder:text-13 placeholder:text-gray-200 focus:ring-1 focus:ring-violet-500 dark:bg-transparent dark:text-gray-50 dark:border-neutral-600" id="usernameInput" placeholder="Enter your password">
                                                </div>
                                                <div class="mb-3 ltr:float-left rtl:float-right">
                                                    <a href="#!">
                                                        <input class="mr-1 align-middle rounded cursor-pointer group-data-[theme-color=violet]:checked:bg-violet-500 group-data-[theme-color=sky]:checked:bg-sky-500 group-data-[theme-color=red]:checked:bg-red-500 group-data-[theme-color=green]:checked:bg-green-500 group-data-[theme-color=pink]:checked:bg-pink-500 group-data-[theme-color=blue]:checked:bg-blue-500 checked:ring-0 checked:ring-offset-0 focus:ring-0 focus:ring-offset-0 dark:bg-neutral-800 dark:border-neutral-500 dark:checked:bg-violet-500/20" type="checkbox" id="flexCheckDefault">
                                                        <label class="dark:text-gray-50" for="flexCheckDefault">I agree to the <a href="javascript:void(0)" class="underline group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">Terms and conditions</a></label>
                                                    </a>
                                                </div>
                                                <div class="text-center">
                                                    <button type="submit" class="w-full mt-4 text-white border-transparent btn group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500">Sign Up</button>
                                                </div>
                                                <div class="mt-4 text-center">
                                                    <p class="mb-0 text-gray-800 dark:text-gray-300">Already a member ? <a href="sign-in.html" class="font-medium underline group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500"> Sign-in </a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="relative hidden dropdown language sm:block">
                                <button class="px-4 py-3 border-0 btn dropdown-toggle" type="button" aria-expanded="false" data-dropdown-toggle="navNotifications">
                                    <img src="/assets/images/flags/us.jpg" alt="" class="h-4" id="header-lang-img">
                                </button>
                                <div class="absolute top-auto z-50 hidden w-40 list-none bg-white rounded shadow dropdown-menu -left-20 dark:bg-neutral-700" id="navNotifications">
                                    <ul class="border border-gray-50 dark:border-gray-700" aria-labelledby="navNotifications">
                                        <li>
                                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50/50 dark:text-gray-200 dark:hover:bg-neutral-600/50 dark:hover:text-white"><img src="/assets/images/flags/us.jpg" alt="user-image" class="inline-block h-3 mr-1"> <span class="align-middle">English</span></a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50/50 dark:text-gray-200 dark:hover:bg-neutral-600/50 dark:hover:text-white"><img src="/assets/images/flags/spain.jpg" alt="user-image" class="inline-block h-3 mr-1"> <span class="align-middle">Spanish</span></a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50/50 dark:text-gray-200 dark:hover:bg-neutral-600/50 dark:hover:text-white"><img src="/assets/images/flags/germany.jpg" alt="user-image" class="inline-block h-3 mr-1"> <span class="align-middle">German</span></a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50/50 dark:text-gray-200 dark:hover:bg-neutral-600/50 dark:hover:text-white"><img src="/assets/images/flags/italy.jpg" alt="user-image" class="inline-block h-3 mr-1"> <span class="align-middle">Italian</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>


        
        <nav class="navbar fixed right-0 left-0 top-0 lg:top-[44.5px] px-5 lg:px-24 transition-all duration-500 ease shadow-lg shadow-gray-200/20 bg-white border-gray-200 dark:bg-neutral-800 z-40 dark:shadow-neutral-900" id="navbar">
            <div class="mx-auto container-fluid">
                <div class="flex flex-wrap items-center justify-between mx-auto">
                    <a href="index.html" class="flex items-center">
                        <img src="/assets/images/logo-dark.png" alt="" class="logo-dark h-[22px] block dark:hidden">
                        <img src="/assets/images/logo-light.png" alt="" class="logo-dark h-[22px] hidden dark:block">
                    </a>
                    <button data-collapse-toggle="navbar-collapse" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg navbar-toggler group lg:hidden hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                    </button>
                    <div class="flex items-center lg:order-2">
                        <div>
                            <div class="relative dropdown">
                                <div class="relative">
                                    <button type="button" class="btn border-0 h-[70px] dropdown-toggle px-4 text-gray-500 dark:text-gray-300" aria-expanded="false" data-dropdown-toggle="notification">
                                        <i class="text-2xl mdi mdi-bell"></i>
                                    </button>
                                        <span class="absolute text-xs px-1.5 bg-red-500 text-white font-medium rounded-full left-6 top-3 ring-2 ring-white dark:ring-neutral-800">3</span>
                                </div>
                                <div class="absolute right-0 top-auto left-auto z-50 hidden list-none bg-white rounded shadow dropdown-menu w-72 dark:bg-neutral-800 " id="notification">
                                    <div class="border rounded border-gray-50 dark:border-neutral-600" aria-labelledby="notification">
                                        <div class="grid grid-cols-1 ">
                                            <div class="p-4 bg-gray-50 dark:bg-neutral-700">
                                                <h6 class="mb-1 text-gray-800 dark:text-gray-50"> Notification </h6>
                                                <p class="mb-0 text-gray-500 text-13 dark:text-gray-300">You have 4 unread Notification</p>
                                            </div>
                                        </div>
                                        <div class="h-60" data-simplebar>
                                            <div>
                                                <a href="#!">
                                                    <div class="flex p-4 hover:bg-gray-50/30 dark:hover:bg-neutral-600/50">
                                                        <div class="flex-shrink-0 ltr:mr-3 rtl:ml-3">
                                                            <div class="h-10 w-10 bg-violet-500/20 rounded-full text-center leading-[2.8]">
                                                                <i class="text-lg text-violet-500 uil uil-user-check"></i>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <h6 class="mb-1 text-sm text-gray-700 dark:text-gray-300">22 verified registrations</h6>
                                                            <div class="text-gray-600 text-13 dark:text-gray-300">
                                                                <p class="mb-0"><i class="mdi mdi-clock-outline dark:text-gray-300"></i> <span>3 hour ago</span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                       
                                                <a href="#!">
                                                    <div class="flex items-center p-4 hover:bg-gray-50/30 dark:hover:bg-neutral-600/50">
                                                        <div class="flex-shrink-0 ltr:mr-3 rtl:ml-3">
                                                            <img src="/assets/images/user/img-01.jpg" class="w-10 h-10 rounded-full" alt="user-pic">
                                                        </div>
                                                        <div class="flex-grow">
                                                            <h6 class="mb-1 text-sm text-gray-700 dark:text-gray-300">Kevin Stewart</h6>
                                                            <div class="text-gray-600 text-13 dark:text-gray-300">
                                                                <p class="mb-0"><i class="mdi mdi-clock-outline dark:text-gray-300"></i> <span>1 hour ago</span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>

                                                <a href="#!">
                                                    <div class="flex items-center p-4 hover:bg-gray-50/30 dark:hover:bg-neutral-600/50">
                                                        <div class="flex-shrink-0 ltr:mr-3 rtl:ml-3">
                                                            <img src="/assets/images/featured-job/img-04.png" class="w-10 h-10 rounded-full" alt="user-pic">
                                                        </div>
                                                        <div class="flex-grow">
                                                            <h6 class="mb-1 text-sm text-gray-700 dark:text-gray-300">Applications has been approved</h6>
                                                            <div class="text-gray-600 text-13 dark:text-gray-300">
                                                                <p class="mb-0"><i class="mdi mdi-clock-outline dark:text-gray-300"></i> <span>45 min ago</span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>

                                                <a href="#!">
                                                    <div class="flex items-center p-4 hover:bg-gray-50/30 dark:hover:bg-neutral-600/50">
                                                        <div class="flex-shrink-0 ltr:mr-3 rtl:ml-3">
                                                            <img src="/assets/images/user/img-02.jpg" class="w-10 h-10 rounded-full" alt="user-pic">
                                                        </div>
                                                        <div class="flex-grow">
                                                            <h6 class="mb-1 text-sm text-gray-700 dark:text-gray-300">Salena Layfield</h6>
                                                            <div class="text-gray-600 text-13 dark:text-gray-300">
                                                                <p class="mb-0"><i class="mdi mdi-clock-outline dark:text-gray-300"></i> <span>15 min ago</span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>

                                                <a href="#!">
                                                    <div class="flex items-center p-4 hover:bg-gray-50/30 dark:hover:bg-neutral-600/50">
                                                        <div class="flex-shrink-0 ltr:mr-3 rtl:ml-3">
                                                            <img src="/assets/images/featured-job/img-01.png" class="w-10 h-10 rounded-full" alt="user-pic">
                                                        </div>
                                                        <div class="flex-grow">
                                                            <h6 class="mb-1 text-sm text-gray-700 dark:text-gray-300">Creative Agency</h6>
                                                            <div class="text-gray-600 text-13 dark:text-gray-300">
                                                                <p class="mb-0"><i class="mdi mdi-clock-outline dark:text-gray-300"></i> <span>15 min ago</span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>

                                            </div>
                                        </div>
                                        <div class="grid p-1 border-t border-gray-50 dark:border-zinc-600 justify-items-center bg-gray-50 dark:bg-neutral-700">
                                            <a class="border-0 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 btn dark:text-gray-50" href="javascript:void(0)">
                                                <i class="mr-1 mdi mdi-arrow-right-circle"></i> <span>View More..</span> 
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="relative dropdown ltr:mr-4 rtl:ml-4">
                                <button type="button" class="flex items-center px-4 py-5 dropdown-toggle" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    <img class="w-8 h-8 rounded-full ltr:xl:mr-2 rtl:xl:ml-2" src="/assets/images/user/img-02.jpg" alt="Header Avatar">
                                    <span class="hidden fw-medium xl:block dark:text-gray-50">Shawn L.</span>
                                </button>
                                <ul class="absolute top-auto z-50 hidden w-48 p-3 list-none bg-white border rounded shadow-lg dropdown-menu border-gray-500/20 xl:ltr:-left-3 ltr:-left-32 rtl:-right-3 dark:bg-neutral-800" id="profile/log" aria-labelledby="navNotifications">
                                    <li class="p-2 dropdown-item group/dropdown dark:text-gray-300">
                                        <a class="text-15 font-medium text-gray-800  group-data-[theme-color=violet]:group-hover/dropdown:text-violet-500 group-data-[theme-color=sky]:group-hover/dropdown:text-sky-500 group-data-[theme-color=red]:group-hover/dropdown:text-red-500 group-data-[theme-color=green]:group-hover/dropdown:text-green-500 group-data-[theme-color=pink]:group-hover/dropdown:text-pink-500 group-data-[theme-color=blue]:group-hover/dropdown:text-blue-500 group-hover:pl-1.5 transition-all duration-300 ease-in dark:text-gray-50" href="manage-jobs.html">Manage Jobs</a>
                                    </li>
                                    <li class="p-2 dropdown-item group/dropdown dark:text-gray-300">
                                        <a class="text-15 font-medium text-gray-800 group-data-[theme-color=violet]:group-hover/dropdown:text-violet-500 group-data-[theme-color=sky]:group-hover/dropdown:text-sky-500 group-data-[theme-color=red]:group-hover/dropdown:text-red-500 group-data-[theme-color=green]:group-hover/dropdown:text-green-500 group-data-[theme-color=pink]:group-hover/dropdown:text-pink-500 group-data-[theme-color=blue]:group-hover/dropdown:text-blue-500 group-hover:pl-1.5 transition-all duration-300 ease-in dark:text-gray-50" href="bookmark-jobs.html">Bookmarks Jobs</a>
                                    </li>
                                    <li class="p-2 dropdown-item group/dropdown dark:text-gray-300">
                                        <a class="text-15 font-medium text-gray-800 group-data-[theme-color=violet]:group-hover/dropdown:text-violet-500 group-data-[theme-color=sky]:group-hover/dropdown:text-sky-500 group-data-[theme-color=red]:group-hover/dropdown:text-red-500 group-data-[theme-color=green]:group-hover/dropdown:text-green-500 group-data-[theme-color=pink]:group-hover/dropdown:text-pink-500 group-data-[theme-color=blue]:group-hover/dropdown:text-blue-500 group-hover:pl-1.5 transition-all duration-300 ease-in dark:text-gray-50" href="profile.html">My Profile</a>
                                    </li>
                                    <li class="p-2 dropdown-item group/dropdown dark:text-gray-300">
                                        <a class="text-15 font-medium text-gray-800 group-data-[theme-color=violet]:group-hover/dropdown:text-violet-500 group-data-[theme-color=sky]:group-hover/dropdown:text-sky-500 group-data-[theme-color=red]:group-hover/dropdown:text-red-500 group-data-[theme-color=green]:group-hover/dropdown:text-green-500 group-data-[theme-color=pink]:group-hover/dropdown:text-pink-500 group-data-[theme-color=blue]:group-hover/dropdown:text-blue-500 group-hover:pl-1.5 transition-all duration-300 ease-in dark:text-gray-50" href="sign-out.html">Logout</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div id="navbar-collapse" class="navbar-res items-center justify-between w-full text-sm lg:flex lg:w-auto lg:order-1 group-focus:[.navbar-toggler]:block hidden">
                        <ul class="flex flex-col items-start mt-5 mb-10 font-medium lg:mt-0 lg:mb-0 lg:items-center lg:flex-row" id="navigation-menu">
                            <li class="relative dropdown">
                                <button class="py-5 text-gray-800 lg:px-4 dropdown-toggle dark:text-gray-50 lg:h-[70px]" id="home" data-bs-toggle="dropdown">Home <i class='align-middle bx bxs-chevron-down ltr:ml-1 rtl:mr-1'></i></button>

                                <ul class="relative top-auto z-50 w-full py-2 list-none bg-white border-0 rounded dropdown-menu lg:border border-gray-500/20 lg:absolute ltr:-left-3 rtl:-right-3 lg:w-48 lg:shadow-lg dark:bg-neutral-800 " aria-labelledby="home">
                                    <li class="w-full">
                                        <a
                                        class="block w-full px-4 py-2 text-13 font-medium text-gray-700 duration-300 bg-transparent dropdown-item whitespace-nowrap hover:translate-x-1.5 group-data-[theme-color=violet]:hover:text-violet-500 group-data-[theme-color=sky]:hover:text-sky-500 group-data-[theme-color=red]:hover:text-red-500 group-data-[theme-color=green]:hover:text-green-500 group-data-[theme-color=pink]:hover:text-pink-500 group-data-[theme-color=blue]:hover:text-blue-500 uppercase group-data-[mode=dark]:text-gray-50"
                                        href="index.html">Home 1</a>
                                    </li>
                                    <li class="w-full"><a class="block w-full px-4 py-2 text-13 font-medium text-gray-700 duration-300 bg-transparent dropdown-item whitespace-nowrap hover:translate-x-1.5 group-data-[theme-color=violet]:hover:text-violet-500 group-data-[theme-color=sky]:hover:text-sky-500 group-data-[theme-color=red]:hover:text-red-500 group-data-[theme-color=green]:hover:text-green-500 group-data-[theme-color=pink]:hover:text-pink-500 group-data-[theme-color=blue]:hover:text-blue-500 uppercase group-data-[mode=dark]:text-gray-50" href="index-2.html">Home 2</a >
                                    </li>
                                    <li class="w-full"><a class="block w-full px-4 py-2 text-13 font-medium text-gray-700 duration-300 bg-transparent dropdown-item whitespace-nowrap hover:translate-x-1.5 group-data-[theme-color=violet]:hover:text-violet-500 group-data-[theme-color=sky]:hover:text-sky-500 group-data-[theme-color=red]:hover:text-red-500 group-data-[theme-color=green]:hover:text-green-500 group-data-[theme-color=pink]:hover:text-pink-500 group-data-[theme-color=blue]:hover:text-blue-500 uppercase group-data-[mode=dark]:text-gray-50" href="index-3.html">Home 3</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="relative dropdown lg:mt-0">
                                <button class="py-5 text-gray-800 lg:px-4 dropdown-toggle dark:text-gray-50 lg:h-[70px]" id="company" data-bs-toggle="dropdown">Company <i class='align-middle bx bxs-chevron-down ltr:ml-1 rtl:mr-1'></i></button>

                                <ul class="relative top-auto z-50 py-2 list-none bg-white border-0 rounded dropdown-menu lg:border border-gray-500/20 lg:absolute ltr:-left-3 rtl:-right-3 lg:w-48 lg:shadow-lg dark:bg-neutral-800" aria-labelledby="company">
                                    <li><a
                                        class="block w-full px-4 py-2 text-13 font-medium text-gray-700 duration-300 bg-transparent dropdown-item whitespace-nowrap hover:translate-x-1.5 group-data-[theme-color=violet]:hover:text-violet-500 group-data-[theme-color=sky]:hover:text-sky-500 group-data-[theme-color=red]:hover:text-red-500 group-data-[theme-color=green]:hover:text-green-500 group-data-[theme-color=pink]:hover:text-pink-500 group-data-[theme-color=blue]:hover:text-blue-500 uppercase group-data-[mode=dark]:text-gray-50"
                                        href="about.html">About Us</a>
                                    </li>
                                    <li><a class="block w-full px-4 py-2 text-13 font-medium text-gray-700 duration-300 bg-transparent dropdown-item whitespace-nowrap hover:translate-x-1.5 group-data-[theme-color=violet]:hover:text-violet-500 group-data-[theme-color=sky]:hover:text-sky-500 group-data-[theme-color=red]:hover:text-red-500 group-data-[theme-color=green]:hover:text-green-500 group-data-[theme-color=pink]:hover:text-pink-500 group-data-[theme-color=blue]:hover:text-blue-500 uppercase group-data-[mode=dark]:text-gray-50" href="services.html">Services</a >
                                    </li>
                                    <li><a class="block w-full px-4 py-2 text-13 font-medium text-gray-700 duration-300 bg-transparent dropdown-item whitespace-nowrap hover:translate-x-1.5 group-data-[theme-color=violet]:hover:text-violet-500 group-data-[theme-color=sky]:hover:text-sky-500 group-data-[theme-color=red]:hover:text-red-500 group-data-[theme-color=green]:hover:text-green-500 group-data-[theme-color=pink]:hover:text-pink-500 group-data-[theme-color=blue]:hover:text-blue-500 uppercase group-data-[mode=dark]:text-gray-50" href="team.html">Team</a >
                                    </li>
                                    <li><a class="block w-full px-4 py-2 text-13 font-medium text-gray-700 duration-300 bg-transparent dropdown-item whitespace-nowrap hover:translate-x-1.5 group-data-[theme-color=violet]:hover:text-violet-500 group-data-[theme-color=sky]:hover:text-sky-500 group-data-[theme-color=red]:hover:text-red-500 group-data-[theme-color=green]:hover:text-green-500 group-data-[theme-color=pink]:hover:text-pink-500 group-data-[theme-color=blue]:hover:text-blue-500 uppercase group-data-[mode=dark]:text-gray-50" href="pricing.html">Pricing</a>
                                    </li>
                                    <li><a class="block w-full px-4 py-2 text-13 font-medium text-gray-700 duration-300 bg-transparent dropdown-item whitespace-nowrap hover:translate-x-1.5 group-data-[theme-color=violet]:hover:text-violet-500 group-data-[theme-color=sky]:hover:text-sky-500 group-data-[theme-color=red]:hover:text-red-500 group-data-[theme-color=green]:hover:text-green-500 group-data-[theme-color=pink]:hover:text-pink-500 group-data-[theme-color=blue]:hover:text-blue-500 uppercase group-data-[mode=dark]:text-gray-50" href="privacy-policy.html">Privacy & Policy</a>
                                    </li>
                                    <li><a class="block w-full px-4 py-2 text-13 font-medium text-gray-700 duration-300 bg-transparent dropdown-item whitespace-nowrap hover:translate-x-1.5 group-data-[theme-color=violet]:hover:text-violet-500 group-data-[theme-color=sky]:hover:text-sky-500 group-data-[theme-color=red]:hover:text-red-500 group-data-[theme-color=green]:hover:text-green-500 group-data-[theme-color=pink]:hover:text-pink-500 group-data-[theme-color=blue]:hover:text-blue-500 uppercase group-data-[mode=dark]:text-gray-50" href="faqs.html">Faqs</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="relative dropdown lg:mt-0">
                                <button href="#" class="py-5 text-gray-800 lg:px-4 dropdown-toggle dark:text-gray-50 lg:h-[70px]"id="pages" data-bs-toggle="dropdown">Pages <i class='align-middle bx bxs-chevron-down ltr:ml-1 rtl:mr-1'></i></button>
                                <div class="relative top-auto z-50 py-2 list-none bg-white border-0 rounded dropdown-menu lg:border border-gray-500/20 lg:absolute  lg:w-[40rem] lg:shadow-lg dark:bg-neutral-800">
                                    <div class="grid grid-cols-12">
                                        <div class="col-span-12 lg:col-span-4">
                                            <ul class="relative top-auto z-50 py-2 list-none dark:bg-neutral-800" aria-labelledby="pages">
                                                <span class="block px-4 py-3 font-normal text-gray-500 uppercase text-13">Jobs</span>
                                                <li><a
                                                    class="block w-full px-4 py-2 text-13 font-medium text-gray-900 duration-300 bg-transparent dropdown-item whitespace-nowrap hover:translate-x-1.5 group-data-[theme-color=violet]:hover:text-violet-500 group-data-[theme-color=sky]:hover:text-sky-500 group-data-[theme-color=red]:hover:text-red-500 group-data-[theme-color=green]:hover:text-green-500 group-data-[theme-color=pink]:hover:text-pink-500 group-data-[theme-color=blue]:hover:text-blue-500 uppercase group-data-[mode=dark]:text-gray-50"
                                                    href="job-list.html">Job List</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-2 text-13 font-medium text-gray-900 duration-300 bg-transparent dropdown-item whitespace-nowrap hover:translate-x-1.5 group-data-[theme-color=violet]:hover:text-violet-500 group-data-[theme-color=sky]:hover:text-sky-500 group-data-[theme-color=red]:hover:text-red-500 group-data-[theme-color=green]:hover:text-green-500 group-data-[theme-color=pink]:hover:text-pink-500 group-data-[theme-color=blue]:hover:text-blue-500 uppercase group-data-[mode=dark]:text-gray-50" href="job-list-2.html">Job List-2</a >
                                                </li>
                                                <li><a class="block w-full px-4 py-2 text-13 font-medium text-gray-900 duration-300 bg-transparent dropdown-item whitespace-nowrap hover:translate-x-1.5 group-data-[theme-color=violet]:hover:text-violet-500 group-data-[theme-color=sky]:hover:text-sky-500 group-data-[theme-color=red]:hover:text-red-500 group-data-[theme-color=green]:hover:text-green-500 group-data-[theme-color=pink]:hover:text-pink-500 group-data-[theme-color=blue]:hover:text-blue-500 uppercase group-data-[mode=dark]:text-gray-50" href="job-grid.html">Job Grid</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-2 text-13 font-medium text-gray-900 duration-300 bg-transparent dropdown-item whitespace-nowrap hover:translate-x-1.5 group-data-[theme-color=violet]:hover:text-violet-500 group-data-[theme-color=sky]:hover:text-sky-500 group-data-[theme-color=red]:hover:text-red-500 group-data-[theme-color=green]:hover:text-green-500 group-data-[theme-color=pink]:hover:text-pink-500 group-data-[theme-color=blue]:hover:text-blue-500 uppercase group-data-[mode=dark]:text-gray-50" href="job-grid-2.html">Job Grid-2</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-2 text-13 font-medium text-gray-900 duration-300 bg-transparent dropdown-item whitespace-nowrap hover:translate-x-1.5 group-data-[theme-color=violet]:hover:text-violet-500 group-data-[theme-color=sky]:hover:text-sky-500 group-data-[theme-color=red]:hover:text-red-500 group-data-[theme-color=green]:hover:text-green-500 group-data-[theme-color=pink]:hover:text-pink-500 group-data-[theme-color=blue]:hover:text-blue-500 uppercase group-data-[mode=dark]:text-gray-50" href="job-details.html">Job Details</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-2 text-13 font-medium text-gray-900 duration-300 bg-transparent dropdown-item whitespace-nowrap hover:translate-x-1.5 group-data-[theme-color=violet]:hover:text-violet-500 group-data-[theme-color=sky]:hover:text-sky-500 group-data-[theme-color=red]:hover:text-red-500 group-data-[theme-color=green]:hover:text-green-500 group-data-[theme-color=pink]:hover:text-pink-500 group-data-[theme-color=blue]:hover:text-blue-500 uppercase group-data-[mode=dark]:text-gray-50" href="job-categories.html">Jobs Categories</a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-span-12 lg:col-span-4">
                                            <ul class="relative top-auto z-50 py-2 list-none dark:bg-neutral-800" aria-labelledby="pages">
                                                <span class="block px-4 py-3 font-normal text-gray-500 uppercase text-13">Candidates / Companys</span>
                                                <li><a
                                                    class="block w-full px-4 py-2 text-13 font-medium text-gray-900 duration-300 bg-transparent dropdown-item whitespace-nowrap hover:translate-x-1.5 group-data-[theme-color=violet]:hover:text-violet-500 group-data-[theme-color=sky]:hover:text-sky-500 group-data-[theme-color=red]:hover:text-red-500 group-data-[theme-color=green]:hover:text-green-500 group-data-[theme-color=pink]:hover:text-pink-500 group-data-[theme-color=blue]:hover:text-blue-500 uppercase group-data-[mode=dark]:text-gray-50"
                                                    href="candidate-list.html">Candidate List</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-2 text-13 font-medium text-gray-900 duration-300 bg-transparent dropdown-item whitespace-nowrap hover:translate-x-1.5 group-data-[theme-color=violet]:hover:text-violet-500 group-data-[theme-color=sky]:hover:text-sky-500 group-data-[theme-color=red]:hover:text-red-500 group-data-[theme-color=green]:hover:text-green-500 group-data-[theme-color=pink]:hover:text-pink-500 group-data-[theme-color=blue]:hover:text-blue-500 uppercase group-data-[mode=dark]:text-gray-50" href="candidate-grid.html">Candidate Grid</a >
                                                </li>
                                                <li><a class="block w-full px-4 py-2 text-13 font-medium text-gray-900 duration-300 bg-transparent dropdown-item whitespace-nowrap hover:translate-x-1.5 group-data-[theme-color=violet]:hover:text-violet-500 group-data-[theme-color=sky]:hover:text-sky-500 group-data-[theme-color=red]:hover:text-red-500 group-data-[theme-color=green]:hover:text-green-500 group-data-[theme-color=pink]:hover:text-pink-500 group-data-[theme-color=blue]:hover:text-blue-500 uppercase group-data-[mode=dark]:text-gray-50" href="candidate-details.html">Candidate Details</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-2 text-13 font-medium text-gray-900 duration-300 bg-transparent dropdown-item whitespace-nowrap hover:translate-x-1.5 group-data-[theme-color=violet]:hover:text-violet-500 group-data-[theme-color=sky]:hover:text-sky-500 group-data-[theme-color=red]:hover:text-red-500 group-data-[theme-color=green]:hover:text-green-500 group-data-[theme-color=pink]:hover:text-pink-500 group-data-[theme-color=blue]:hover:text-blue-500 uppercase group-data-[mode=dark]:text-gray-50" href="company-list.html">Company List</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-2 text-13 font-medium text-gray-900 duration-300 bg-transparent dropdown-item whitespace-nowrap hover:translate-x-1.5 group-data-[theme-color=violet]:hover:text-violet-500 group-data-[theme-color=sky]:hover:text-sky-500 group-data-[theme-color=red]:hover:text-red-500 group-data-[theme-color=green]:hover:text-green-500 group-data-[theme-color=pink]:hover:text-pink-500 group-data-[theme-color=blue]:hover:text-blue-500 uppercase group-data-[mode=dark]:text-gray-50" href="company-details.html">Company Details</a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-span-12 lg:col-span-4">
                                            <ul class="relative top-auto z-50 py-2 list-none dark:bg-neutral-800" aria-labelledby="pages">
                                                <span class="block px-4 py-3 font-normal text-gray-500 uppercase text-13">Extra Pages</span>
                                                <li><a
                                                    class="block w-full px-4 py-2 text-13 font-medium text-gray-900 duration-300 bg-transparent dropdown-item whitespace-nowrap hover:translate-x-1.5 group-data-[theme-color=violet]:hover:text-violet-500 group-data-[theme-color=sky]:hover:text-sky-500 group-data-[theme-color=red]:hover:text-red-500 group-data-[theme-color=green]:hover:text-green-500 group-data-[theme-color=pink]:hover:text-pink-500 group-data-[theme-color=blue]:hover:text-blue-500 uppercase group-data-[mode=dark]:text-gray-50"
                                                    href="sign-up.html">Sign Up</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-2 text-13 font-medium text-gray-900 duration-300 bg-transparent dropdown-item whitespace-nowrap hover:translate-x-1.5 group-data-[theme-color=violet]:hover:text-violet-500 group-data-[theme-color=sky]:hover:text-sky-500 group-data-[theme-color=red]:hover:text-red-500 group-data-[theme-color=green]:hover:text-green-500 group-data-[theme-color=pink]:hover:text-pink-500 group-data-[theme-color=blue]:hover:text-blue-500 uppercase group-data-[mode=dark]:text-gray-50" href="sign-in.html">Sign In</a >
                                                </li>
                                                <li><a class="block w-full px-4 py-2 text-13 font-medium text-gray-900 duration-300 bg-transparent dropdown-item whitespace-nowrap hover:translate-x-1.5 group-data-[theme-color=violet]:hover:text-violet-500 group-data-[theme-color=sky]:hover:text-sky-500 group-data-[theme-color=red]:hover:text-red-500 group-data-[theme-color=green]:hover:text-green-500 group-data-[theme-color=pink]:hover:text-pink-500 group-data-[theme-color=blue]:hover:text-blue-500 uppercase group-data-[mode=dark]:text-gray-50" href="sign-out.html">Sign Out</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-2 text-13 font-medium text-gray-900 duration-300 bg-transparent dropdown-item whitespace-nowrap hover:translate-x-1.5 group-data-[theme-color=violet]:hover:text-violet-500 group-data-[theme-color=sky]:hover:text-sky-500 group-data-[theme-color=red]:hover:text-red-500 group-data-[theme-color=green]:hover:text-green-500 group-data-[theme-color=pink]:hover:text-pink-500 group-data-[theme-color=blue]:hover:text-blue-500 uppercase group-data-[mode=dark]:text-gray-50" href="reset-password.html">Reset Password</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-2 text-13 font-medium text-gray-900 duration-300 bg-transparent dropdown-item whitespace-nowrap hover:translate-x-1.5 group-data-[theme-color=violet]:hover:text-violet-500 group-data-[theme-color=sky]:hover:text-sky-500 group-data-[theme-color=red]:hover:text-red-500 group-data-[theme-color=green]:hover:text-green-500 group-data-[theme-color=pink]:hover:text-pink-500 group-data-[theme-color=blue]:hover:text-blue-500 uppercase group-data-[mode=dark]:text-gray-50" href="coming-soon.html">Coming Soon</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-2 text-13 font-medium text-gray-900 duration-300 bg-transparent dropdown-item whitespace-nowrap hover:translate-x-1.5 group-data-[theme-color=violet]:hover:text-violet-500 group-data-[theme-color=sky]:hover:text-sky-500 group-data-[theme-color=red]:hover:text-red-500 group-data-[theme-color=green]:hover:text-green-500 group-data-[theme-color=pink]:hover:text-pink-500 group-data-[theme-color=blue]:hover:text-blue-500 uppercase group-data-[mode=dark]:text-gray-50" href="404-error.html">404 Error</a>
                                                </li>
                                                <li><a class="block w-full px-4 py-2 text-13 font-medium text-gray-900 duration-300 bg-transparent dropdown-item whitespace-nowrap hover:translate-x-1.5 group-data-[theme-color=violet]:hover:text-violet-500 group-data-[theme-color=sky]:hover:text-sky-500 group-data-[theme-color=red]:hover:text-red-500 group-data-[theme-color=green]:hover:text-green-500 group-data-[theme-color=pink]:hover:text-pink-500 group-data-[theme-color=blue]:hover:text-blue-500 uppercase group-data-[mode=dark]:text-gray-50" href="components.html">Components</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="relative dropdown lg:mt-0">
                                <button href="#" class="py-5 text-gray-800 lg:px-4 dropdown-toggle dark:text-gray-50 lg:h-[70px]"id="blog" data-bs-toggle="dropdown">Blog <i class='align-middle bx bxs-chevron-down ltr:ml-1 rtl:mr-1'></i></button>

                                <ul class="relative top-auto z-50 py-2 list-none bg-white border-0 rounded dropdown-menu lg:border border-gray-500/20 lg:absolute ltr:-left-3 rtl:-right-3 lg:w-48 lg:shadow-lg dark:bg-neutral-800" aria-labelledby="blog">
                            
                                    <li><a class="block w-full px-4 py-2 text-13 font-medium text-gray-700 duration-300 bg-transparent dropdown-item whitespace-nowrap hover:translate-x-1.5 group-data-[theme-color=violet]:hover:text-violet-500 group-data-[theme-color=sky]:hover:text-sky-500 group-data-[theme-color=red]:hover:text-red-500 group-data-[theme-color=green]:hover:text-green-500 group-data-[theme-color=pink]:hover:text-pink-500 group-data-[theme-color=blue]:hover:text-blue-500 uppercase group-data-[mode=dark]:text-gray-50"
                                        href="blog.html">Blog</a>
                                    </li>
                                    <li><a class="block w-full px-4 py-2 text-13 font-medium text-gray-700 duration-300 bg-transparent dropdown-item whitespace-nowrap hover:translate-x-1.5 group-data-[theme-color=violet]:hover:text-violet-500 group-data-[theme-color=sky]:hover:text-sky-500 group-data-[theme-color=red]:hover:text-red-500 group-data-[theme-color=green]:hover:text-green-500 group-data-[theme-color=pink]:hover:text-pink-500 group-data-[theme-color=blue]:hover:text-blue-500 uppercase group-data-[mode=dark]:text-gray-50" href="blog-grid.html">Blog Grid</a >
                                    </li>
                                    <li><a class="block w-full px-4 py-2 text-13 font-medium text-gray-700 duration-300 bg-transparent dropdown-item whitespace-nowrap hover:translate-x-1.5 group-data-[theme-color=violet]:hover:text-violet-500 group-data-[theme-color=sky]:hover:text-sky-500 group-data-[theme-color=red]:hover:text-red-500 group-data-[theme-color=green]:hover:text-green-500 group-data-[theme-color=pink]:hover:text-pink-500 group-data-[theme-color=blue]:hover:text-blue-500 uppercase group-data-[mode=dark]:text-gray-50" href="blog-modern.html">Blog Modern</a>
                                    </li>
                                    <li><a class="block w-full px-4 py-2 text-13 font-medium text-gray-700 duration-300 bg-transparent dropdown-item whitespace-nowrap hover:translate-x-1.5 group-data-[theme-color=violet]:hover:text-violet-500 group-data-[theme-color=sky]:hover:text-sky-500 group-data-[theme-color=red]:hover:text-red-500 group-data-[theme-color=green]:hover:text-green-500 group-data-[theme-color=pink]:hover:text-pink-500 group-data-[theme-color=blue]:hover:text-blue-500 uppercase group-data-[mode=dark]:text-gray-50" href="blog-masonry.html">Blog Masonry</a>
                                    </li>
                                    <li><a class="block w-full px-4 py-2 text-13 font-medium text-gray-700 duration-300 bg-transparent dropdown-item whitespace-nowrap hover:translate-x-1.5 group-data-[theme-color=violet]:hover:text-violet-500 group-data-[theme-color=sky]:hover:text-sky-500 group-data-[theme-color=red]:hover:text-red-500 group-data-[theme-color=green]:hover:text-green-500 group-data-[theme-color=pink]:hover:text-pink-500 group-data-[theme-color=blue]:hover:text-blue-500 uppercase group-data-[mode=dark]:text-gray-50" href="blog-details.html">Blog details</a>
                                    </li>
                                    <li><a class="block w-full px-4 py-2 text-13 font-medium text-gray-700 duration-300 bg-transparent dropdown-item whitespace-nowrap hover:translate-x-1.5 group-data-[theme-color=violet]:hover:text-violet-500 group-data-[theme-color=sky]:hover:text-sky-500 group-data-[theme-color=red]:hover:text-red-500 group-data-[theme-color=green]:hover:text-green-500 group-data-[theme-color=pink]:hover:text-pink-500 group-data-[theme-color=blue]:hover:text-blue-500 uppercase group-data-[mode=dark]:text-gray-50" href="blog-author.html">Blog Author</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="py-5 lg:px-4">
                                <a href="contact.html" class="py-2.5 text-gray-800 font-medium leading-tight dark:text-gray-50" id="contact" data-bs-toggle="dropdown">Contact </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>


                <div class="fixed z-40 flex flex-col gap-3 ltr:left-0 rtl:right-0 top-[330px]">
                    <!-- light-dark mode button -->
                    <a href="javascript: void(0);" id="ltr-rtl" class="z-40 px-3 py-3 font-medium text-white transition-all duration-300 ease-linear group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 text-14 hover:bg-violet-700 ltr:rounded-r rtl:rounded-l" onclick="changeMode(event)">
                                <span class="ltr:hidden">LTR</span>
                                <span  class="rtl:hidden">RTL</span>
                            </a>  
           
                </div> 
        
                <div class="fixed transition-all duration-300 ease-linear top-[27.5rem] switcher" id="style-switcher">
                    <div class="w-48 p-4 bg-white shadow-md" >
                        <div>
                            <h3 class="mb-2 font-semibold text-gray-900 text-16">Select your color</h3>
                            <ul class="flex gap-3 ">
                                <li>
                                    <a class="h-10 w-10 bg-[#815DF2] block rounded-full" data-color="violet" href="javascript: void(0);"></a>
                                </li>
                                <li>
                                    <a class="h-10 w-10 bg-[#69cdf1] block rounded-full" data-color="sky" href="javascript: void(0);"></a>
                                </li>
                                <li>
                                    <a class="h-10 w-10 bg-[#dd4948] block rounded-full" data-color="red" href="javascript: void(0);"></a>
                                </li>
                            </ul>
                            <ul class="flex gap-3 mt-4">
                                <li>
                                    <a class="h-10 w-10 bg-[#38c284] block rounded-full" data-color="green" href="javascript: void(0);"></a>
                                </li>
                                 <li>
                                    <a class="h-10 w-10 bg-[#e35490] block rounded-full" data-color="pink"  href="javascript: void(0);"></a>
                                </li>
                                <li>
                                    <a class="h-10 w-10 bg-[#5276f4] block rounded-full" data-color="blue" href="javascript: void(0);"></a>
                                </li>
                            </ul>
                        </div>

                        <div class="mt-5">
                            <h3 class="mb-2 font-semibold text-gray-900 text-16">Light/dark Layout</h3>
                            <div class="flex justify-center mt-2">
                                   <!-- light-dark mode button -->
                                <a href="javascript: void(0);" id="mode" class="z-40 px-6 py-2 font-normal text-white transition-all duration-300 ease-linear rounded text-14 bg-zinc-800" onclick="changeMode(event)">
                                    <i class="hidden text-xl uil uil-brightness dark:text-white dark:inline-block"></i>
                                    <i class="inline-block text-xl uil uil-moon dark:text-zinc-800 dark:hidden"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div> 
                <!-- light-dark mode button -->
                <a href="javascript: void(0);" onclick="toggleSwitcher()" class="fixed z-40 flex flex-col gap-3 px-4 py-3 font-normal text-white group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 top-96 text-14 ltr:rounded-r rtl:rounded-l">
                    <i class="text-xl mdi mdi-cog mdi-spin"></i>
                </a> 

        <div class="main-content">
            <div class="page-content">

                <section class="pt-28 lg:pt-44 pb-28 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 dark:bg-neutral-900 bg-[url('../images/home/page-title.png')] bg-center bg-cover relative" >
                    <div class="container mx-auto">
                        <div class="grid">
                            <div class="col-span-12">
                                <div class="text-center text-white">
                                    <h3 class="mb-4 text-[26px]">Candidate Grid</h3>
                                    <div class="page-next">
                                        <nav class="inline-block" aria-label="breadcrumb text-center">
                                            <ol class="flex flex-wrap justify-center text-sm font-medium uppercase">
                                                <li><a href="index.html">Home</a></li>
                                                <li><i class="bx bxs-chevron-right align-middle px-2.5"></i><a href="javascript:void(0)">Pages</a></li>
                                                <li class="active" aria-current="page"><i class="bx bxs-chevron-right align-middle px-2.5"></i>Candidate Grid</li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img src="/assets/images/about/shape.png" alt="" class="absolute block bg-cover -bottom-0 dark:hidden">
                    <img src="/assets/images/about/shape-dark.png" alt="" class="absolute hidden bg-cover -bottom-0 dark:block">
                </section>

                <!-- Start grid -->
                    <section class="py-20">
                        <div class="container mx-auto">
                            <div class="col-span-12">
                                <div class="job-list-header">
                                    <form action="#">
                                        <div class="grid grid-cols-12 gap-y-3 lg:gap-3">
                                            <div class="col-span-12 xl:col-span-3">
                                                <div class="relative filler-job-form">
                                                    <i class="uil uil-briefcase-alt"></i>
                                                    <input type="search" class="w-full filter-job-input-box dark:text-gray-100" id="exampleFormControlInput1" placeholder="Job, company... ">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-span-12 xl:col-span-3">
                                                <div class="relative filler-job-form">
                                                    <i class="uil uil-location-point"></i>
                                                    <select class="form-select" data-trigger name="choices-single-location" id="choices-single-location" aria-label="Default select example">
                                                        <option value="AF">Afghanistan</option>
                                                        <option value="AX">&Aring;land Islands</option>
                                                        <option value="AL">Albania</option>
                                                        <option value="DZ">Algeria</option>
                                                        <option value="AS">American Samoa</option>
                                                        <option value="AD">Andorra</option>
                                                        <option value="AO">Angola</option>
                                                        <option value="AI">Anguilla</option>
                                                        <option value="AQ">Antarctica</option>
                                                        <option value="AG">Antigua and Barbuda</option>
                                                        <option value="AR">Argentina</option>
                                                        <option value="AM">Armenia</option>
                                                        <option value="AW">Aruba</option>
                                                        <option value="AU">Australia</option>
                                                        <option value="AT">Austria</option>
                                                        <option value="AZ">Azerbaijan</option>
                                                        <option value="BS">Bahamas</option>
                                                        <option value="BH">Bahrain</option>
                                                        <option value="BD">Bangladesh</option>
                                                        <option value="BB">Barbados</option>
                                                        <option value="BY">Belarus</option>
                                                        <option value="BE">Belgium</option>
                                                        <option value="BZ">Belize</option>
                                                        <option value="BJ">Benin</option>
                                                        <option value="BM">Bermuda</option>
                                                        <option value="BT">Bhutan</option>
                                                        <option value="BO">Bolivia, Plurinational State of</option>
                                                        <option value="BA">Bosnia and Herzegovina</option>
                                                        <option value="BW">Botswana</option>
                                                        <option value="BV">Bouvet Island</option>
                                                        <option value="BR">Brazil</option>
                                                        <option value="IO">British Indian Ocean Territory</option>
                                                        <option value="BN">Brunei Darussalam</option>
                                                        <option value="BG">Bulgaria</option>
                                                        <option value="BF">Burkina Faso</option>
                                                        <option value="BI">Burundi</option>
                                                        <option value="KH">Cambodia</option>
                                                        <option value="CM">Cameroon</option>
                                                        <option value="CA">Canada</option>
                                                        <option value="CV">Cape Verde</option>
                                                        <option value="KY">Cayman Islands</option>
                                                        <option value="CF">Central African Republic</option>
                                                        <option value="TD">Chad</option>
                                                        <option value="CL">Chile</option>
                                                        <option value="CN">China</option>
                                                        <option value="CX">Christmas Island</option>
                                                        <option value="CC">Cocos (Keeling) Islands</option>
                                                        <option value="CO">Colombia</option>
                                                        <option value="KM">Comoros</option>
                                                        <option value="CG">Congo</option>
                                                        <option value="CD">Congo, the Democratic Republic of the</option>
                                                        <option value="CK">Cook Islands</option>
                                                        <option value="CR">Costa Rica</option>
                                                        <option value="CI">C&ocirc;te d'Ivoire</option>
                                                        <option value="HR">Croatia</option>
                                                        <option value="CU">Cuba</option>
                                                        <option value="CY">Cyprus</option>
                                                        <option value="CZ">Czech Republic</option>
                                                        <option value="DK">Denmark</option>
                                                        <option value="DJ">Djibouti</option>
                                                        <option value="DM">Dominica</option>
                                                        <option value="DO">Dominican Republic</option>
                                                        <option value="EC">Ecuador</option>
                                                        <option value="EG">Egypt</option>
                                                        <option value="SV">El Salvador</option>
                                                        <option value="GQ">Equatorial Guinea</option>
                                                        <option value="ER">Eritrea</option>
                                                        <option value="EE">Estonia</option>
                                                        <option value="ET">Ethiopia</option>
                                                        <option value="FK">Falkland Islands (Malvinas)</option>
                                                        <option value="FO">Faroe Islands</option>
                                                        <option value="FJ">Fiji</option>
                                                        <option value="FI">Finland</option>
                                                        <option value="FR">France</option>
                                                        <option value="GF">French Guiana</option>
                                                        <option value="PF">French Polynesia</option>
                                                        <option value="TF">French Southern Territories</option>
                                                        <option value="GA">Gabon</option>
                                                        <option value="GM">Gambia</option>
                                                        <option value="GE">Georgia</option>
                                                        <option value="DE">Germany</option>
                                                        <option value="GH">Ghana</option>
                                                        <option value="GI">Gibraltar</option>
                                                        <option value="GR">Greece</option>
                                                        <option value="GL">Greenland</option>
                                                        <option value="GD">Grenada</option>
                                                        <option value="GP">Guadeloupe</option>
                                                        <option value="GU">Guam</option>
                                                        <option value="GT">Guatemala</option>
                                                        <option value="GG">Guernsey</option>
                                                        <option value="GN">Guinea</option>
                                                        <option value="GW">Guinea-Bissau</option>
                                                        <option value="GY">Guyana</option>
                                                        <option value="HT">Haiti</option>
                                                        <option value="HM">Heard Island and McDonald Islands</option>
                                                        <option value="VA">Holy See (Vatican City State)</option>
                                                        <option value="HN">Honduras</option>
                                                        <option value="HK">Hong Kong</option>
                                                        <option value="HU">Hungary</option>
                                                        <option value="IS">Iceland</option>
                                                        <option value="IN">India</option>
                                                        <option value="ID">Indonesia</option>
                                                        <option value="IR">Iran, Islamic Republic of</option>
                                                        <option value="IQ">Iraq</option>
                                                        <option value="IE">Ireland</option>
                                                        <option value="IM">Isle of Man</option>
                                                        <option value="IL">Israel</option>
                                                        <option value="IT">Italy</option>
                                                        <option value="JM">Jamaica</option>
                                                        <option value="JP">Japan</option>
                                                        <option value="JE">Jersey</option>
                                                        <option value="JO">Jordan</option>
                                                        <option value="KZ">Kazakhstan</option>
                                                        <option value="KE">Kenya</option>
                                                        <option value="KI">Kiribati</option>
                                                        <option value="KP">Korea, Democratic People's Republic of</option>
                                                        <option value="KR">Korea, Republic of</option>
                                                        <option value="KW">Kuwait</option>
                                                        <option value="KG">Kyrgyzstan</option>
                                                        <option value="LA">Lao People's Democratic Republic</option>
                                                        <option value="LV">Latvia</option>
                                                        <option value="LB">Lebanon</option>
                                                        <option value="LS">Lesotho</option>
                                                        <option value="LR">Liberia</option>
                                                        <option value="LY">Libyan Arab Jamahiriya</option>
                                                        <option value="LI">Liechtenstein</option>
                                                        <option value="LT">Lithuania</option>
                                                        <option value="LU">Luxembourg</option>
                                                        <option value="MO">Macao</option>
                                                        <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                                                        <option value="MG">Madagascar</option>
                                                        <option value="MW">Malawi</option>
                                                        <option value="MY">Malaysia</option>
                                                        <option value="MV">Maldives</option>
                                                        <option value="ML">Mali</option>
                                                        <option value="MT">Malta</option>
                                                        <option value="MH">Marshall Islands</option>
                                                        <option value="MQ">Martinique</option>
                                                        <option value="MR">Mauritania</option>
                                                        <option value="MU">Mauritius</option>
                                                        <option value="YT">Mayotte</option>
                                                        <option value="MX">Mexico</option>
                                                        <option value="FM">Micronesia, Federated States of</option>
                                                        <option value="MD">Moldova, Republic of</option>
                                                        <option value="MC">Monaco</option>
                                                        <option value="MN">Mongolia</option>
                                                        <option value="ME">Montenegro</option>
                                                        <option value="MS">Montserrat</option>
                                                        <option value="MA">Morocco</option>
                                                        <option value="MZ">Mozambique</option>
                                                        <option value="MM">Myanmar</option>
                                                        <option value="NA">Namibia</option>
                                                        <option value="NR">Nauru</option>
                                                        <option value="NP">Nepal</option>
                                                        <option value="NL">Netherlands</option>
                                                        <option value="AN">Netherlands Antilles</option>
                                                        <option value="NC">New Caledonia</option>
                                                        <option value="NZ">New Zealand</option>
                                                        <option value="NI">Nicaragua</option>
                                                        <option value="NE">Niger</option>
                                                        <option value="NG">Nigeria</option>
                                                        <option value="NU">Niue</option>
                                                        <option value="NF">Norfolk Island</option>
                                                        <option value="MP">Northern Mariana Islands</option>
                                                        <option value="NO">Norway</option>
                                                        <option value="OM">Oman</option>
                                                        <option value="PK">Pakistan</option>
                                                        <option value="PW">Palau</option>
                                                        <option value="PS">Palestinian Territory, Occupied</option>
                                                        <option value="PA">Panama</option>
                                                        <option value="PG">Papua New Guinea</option>
                                                        <option value="PY">Paraguay</option>
                                                        <option value="PE">Peru</option>
                                                        <option value="PH">Philippines</option>
                                                        <option value="PN">Pitcairn</option>
                                                        <option value="PL">Poland</option>
                                                        <option value="PT">Portugal</option>
                                                        <option value="PR">Puerto Rico</option>
                                                        <option value="QA">Qatar</option>
                                                        <option value="RE">R&eacute;union</option>
                                                        <option value="RO">Romania</option>
                                                        <option value="RU">Russian Federation</option>
                                                        <option value="RW">Rwanda</option>
                                                        <option value="BL">Saint Barth&eacute;lemy</option>
                                                        <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                                        <option value="KN">Saint Kitts and Nevis</option>
                                                        <option value="LC">Saint Lucia</option>
                                                        <option value="MF">Saint Martin (French part)</option>
                                                        <option value="PM">Saint Pierre and Miquelon</option>
                                                        <option value="VC">Saint Vincent and the Grenadines</option>
                                                        <option value="WS">Samoa</option>
                                                        <option value="SM">San Marino</option>
                                                        <option value="ST">Sao Tome and Principe</option>
                                                        <option value="SA">Saudi Arabia</option>
                                                        <option value="SN">Senegal</option>
                                                        <option value="RS">Serbia</option>
                                                        <option value="SC">Seychelles</option>
                                                        <option value="SL">Sierra Leone</option>
                                                        <option value="SG">Singapore</option>
                                                        <option value="SK">Slovakia</option>
                                                        <option value="SI">Slovenia</option>
                                                        <option value="SB">Solomon Islands</option>
                                                        <option value="SO">Somalia</option>
                                                        <option value="ZA">South Africa</option>
                                                        <option value="GS">South Georgia and the South Sandwich Islands</option>
                                                        <option value="ES">Spain</option>
                                                        <option value="LK">Sri Lanka</option>
                                                        <option value="SD">Sudan</option>
                                                        <option value="SR">Suriname</option>
                                                        <option value="SJ">Svalbard and Jan Mayen</option>
                                                        <option value="SZ">Swaziland</option>
                                                        <option value="SE">Sweden</option>
                                                        <option value="CH">Switzerland</option>
                                                        <option value="SY">Syrian Arab Republic</option>
                                                        <option value="TW">Taiwan, Province of China</option>
                                                        <option value="TJ">Tajikistan</option>
                                                        <option value="TZ">Tanzania, United Republic of</option>
                                                        <option value="TH">Thailand</option>
                                                        <option value="TL">Timor-Leste</option>
                                                        <option value="TG">Togo</option>
                                                        <option value="TK">Tokelau</option>
                                                        <option value="TO">Tonga</option>
                                                        <option value="TT">Trinidad and Tobago</option>
                                                        <option value="TN">Tunisia</option>
                                                        <option value="TR">Turkey</option>
                                                        <option value="TM">Turkmenistan</option>
                                                        <option value="TC">Turks and Caicos Islands</option>
                                                        <option value="TV">Tuvalu</option>
                                                        <option value="UG">Uganda</option>
                                                        <option value="UA">Ukraine</option>
                                                        <option value="AE">United Arab Emirates</option>
                                                        <option value="GB">United Kingdom</option>
                                                        <option value="US">United States</option>
                                                        <option value="UM">United States Minor Outlying Islands</option>
                                                        <option value="UY">Uruguay</option>
                                                        <option value="UZ">Uzbekistan</option>
                                                        <option value="VU">Vanuatu</option>
                                                        <option value="VE">Venezuela, Bolivarian Republic of</option>
                                                        <option value="VN">Viet Nam</option>
                                                        <option value="VG">Virgin Islands, British</option>
                                                        <option value="VI">Virgin Islands, U.S.</option>
                                                        <option value="WF">Wallis and Futuna</option>
                                                        <option value="EH">Western Sahara</option>
                                                        <option value="YE">Yemen</option>
                                                        <option value="ZM">Zambia</option>
                                                        <option value="ZW">Zimbabwe</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-span-12 xl:col-span-3">
                                                <div class="relative filler-job-form">
                                                    <i class="uil uil-clipboard-notes"></i>
                                                    <select class="form-select " data-trigger name="choices-single-categories" id="choices-single-categories" aria-label="Default select example">
                                                        <option value="4">Accounting</option>
                                                        <option value="1">IT & Software</option>
                                                        <option value="3">Marketing</option>
                                                        <option value="5">Banking</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-span-12 xl:col-span-3">
                                                <a href="javascript:void(0)" class="text-white border-transparent btn group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 focus:ring focus:ring-custom-500/30"><i class="uil uil-filter"></i> Fliter</a>
                                                <a href="javascript:void(0)" class="text-white bg-green-500 border-transparent btn focus:ring focus:ring-green-500/30 ltr:ml-1 rtl:mr-1"><i class="uil uil-cog"></i> Advance</a>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end grid-->
                                    </form>
                                </div>
                            </div>
                            <div class="mt-5">
                                <div class="grid items-center grid-cols-12">
                                    <div class="col-span-12 lg:col-span-8">
                                        <h6 class="mb-0 text-gray-900 fs-16 dark:text-gray-50"> Showing 1 – 8 of 11 results </h6>
                                    </div>
                                    <div class="col-span-12 lg:col-span-4">
                                        <div class="grid grid-cols-12 gap-y-3 lg:gap-3">
                                            <div class="col-span-12 lg:col-span-6">
                                                <div class="mt-2 selection-widget mt-lg-0">
                                                    <select class="form-select" data-trigger name="choices-single-filter-orderby" id="choices-single-filter-orderby" aria-label="Default select example">
                                                        <option value="df">Default</option>
                                                        <option value="ne">Newest</option>
                                                        <option value="od">Oldest</option>
                                                        <option value="rd">Random</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-span-12 lg:col-span-6">
                                                <div class="mt-2 selection-widget mt-lg-0">
                                                    <select class="form-select" data-trigger name="choices-candidate-page" id="choices-candidate-page" aria-label="Default select example">
                                                        <option value="df">All</option>
                                                        <option value="ne">8 per Page</option>
                                                        <option value="ne">12 per Page</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-10">
                                <div class="grid grid-cols-12 gap-y-6 lg:gap-6">
                                    <div class="col-span-12 lg:col-span-4">
                                         <div class="relative p-5 border rounded-md border-gray-100/50 dark:border-neutral-600">
                                        
                                            <div class="flex mb-4">
                                                <div class="relative shrink-0">
                                                    <img src="/assets/images/user/img-01.jpg" alt="" class="w-16 h-16 rounded">
                                                    <span class="absolute h-3.5 w-3.5 rounded-full bg-green-500 border-2 border-white -top-1 -right-1 dark:border-neutral-700">
                                                        <span class="hidden">active</span>
                                                    </span>
                                                </div>
                                                <div class="ltr:ml-3 rtl:mr-3">
                                                    <a href="candidate-details.html"><h5 class="mb-2 text-17 dark:text-white">Charles Dickens</h5></a>
                                                    <span class="text-13 bg-sky-500/20 text-sky-500 px-1.5 py-1 rounded">$800/month</span>
                                                </div>
                                            </div>
    
                                            <ul class="flex items-center justify-between">
                                                <li class="text-yellow-500 text-17">
                                                    <i class="mdi mdi-star"></i>
                                                    <i class="mdi mdi-star"></i>
                                                    <i class="mdi mdi-star"></i>
                                                    <i class="mdi mdi-star"></i>  
                                                    <i class="mdi mdi-star-half-full"></i>
                                                </li>
                                                <li>
                                                    <div class="h-8 w-8 bg-red-600 rounded text-white leading-[2.4] text-center">
                                                        <a href="javascript:void(0)"><i class="text-lg uil uil-heart-alt"></i></a>
                                                    </div>
                                                </li>
                                            </ul>
                                            
                                            <div class="mt-5 border rounded border-gray-100/50 dark:border-neutral-600">
                                                <div class="grid grid-cols-12">
                                                    <div class="col-span-6">
                                                        <div class="px-3 py-2 ltr:border-r rtl:border-l dark:border-neutral-600 border-gray-100/50">
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300">Exp. : 0-3 Years</p>
                                                        </div>
                                                    </div><!--end col-->
                                                    <div class="col-span-6">
                                                        <div class="px-3 py-2">
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300">Freelancers</p>
                                                        </div>
                                                    </div><!--end col-->
                                                </div>
                                            </div>
    
                                            <div class="mt-4">
                                                <p class="text-gray-500 dark:text-gray-300">Some quick example text to build on the card title and bulk the card's content Moltin gives you platform.</p>
                                            </div>
                                           
                                            <div class="mt-6">
                                                <a href="#hireNow" data-bs-toggle="modal" class="w-full text-white border-transparent btn group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 hover:-translate-y-2"><i class="mdi mdi-account-check"></i> Hire Now</a>
                                                <a href="candidate-details.html" class="w-full mt-2 border-transparent btn group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 hover:-translate-y-1 group-data-[theme-color=violet]:hover:bg-violet-500 group-data-[theme-color=violet]:hover:text-white group-data-[theme-color=sky]:hover:bg-sky-500 group-data-[theme-color=sky]:hover:text-white group-data-[theme-color=red]:hover:bg-red-500 group-data-[theme-color=red]:hover:text-white group-data-[theme-color=green]:hover:bg-green-500 group-data-[theme-color=green]:hover:text-white group-data-[theme-color=pink]:hover:bg-pink-500 group-data-[theme-color=pink]:hover:text-white group-data-[theme-color=blue]:hover:bg-blue-500 group-data-[theme-color=blue]:hover:text-white hover:ring group-data-[theme-color=violet]:hover:ring-violet-500/20 group-data-[theme-color=sky]:hover:ring-sky-500/20 group-data-[theme-color=red]:hover:ring-red-500/20 group-data-[theme-color=green]:hover:ring-green-500/20 group-data-[theme-color=pink]:hover:ring-pink-500/20 group-data-[theme-color=blue]:hover:ring-blue-500/20"><i class="mdi mdi-eye"></i> View Profile</a>
                                            </div>
    
                                            <div class="absolute px-2 text-white bg-violet-500 top-2 ltr:right-0 rtl:left-0">
                                                <span class="relative text-xs font-medium uppercase">featured</span>
                                                <div class="after:contant[] ltr:after:border-r-[11px] rtl:after:border-l-[11px] after:absolute after:border-b-[12px] ltr:after:-left-[11px] rtl:after:-right-[11.5px] after:top-0 after:border-t-[11.5px] after:border-t-transparent after:border-violet-500 after:border-b-transparent"></div>
                                            </div>
    
                                        </div>
                                    </div> 
    
                                     <div class="col-span-12 lg:col-span-4">
                                         <div class="relative p-5 border rounded-md border-gray-100/50 dark:border-neutral-600">
                                        
                                            <div class="flex mb-4">
                                                <div class="relative shrink-0">
                                                    <img src="/assets/images/user/img-02.jpg" alt="" class="w-16 h-16 rounded">
                                                    <span class="absolute h-3.5 w-3.5 rounded-full bg-green-500 border-2 border-white -top-1 -right-1 dark:border-neutral-700">
                                                        <span class="hidden">active</span>
                                                    </span>
                                                </div>
                                                <div class="ltr:ml-3 rtl:mr-3">
                                                    <a href="candidate-details.html"><h5 class="mb-2 text-17 dark:text-white">Gabriel Palmer</h5></a>
                                                    <span class="text-13 bg-sky-500/20 text-sky-500 px-1.5 py-1 rounded">$350/hrs</span>
                                                </div>
                                            </div>
    
                                            <ul class="flex items-center justify-between">
                                                <li class="text-yellow-500 text-17">
                                                    <i class="mdi mdi-star"></i>
                                                    <i class="mdi mdi-star"></i>
                                                    <i class="mdi mdi-star"></i>
                                                    <i class="mdi mdi-star"></i>  
                                                    <i class="mdi mdi-star-half-full"></i>
                                                </li>
                                                <li>
                                                    <div class="h-8 w-8 bg-red-600 rounded text-white leading-[2.4] text-center">
                                                        <a href="javascript:void(0)"><i class="text-lg uil uil-heart-alt"></i></a>
                                                    </div>
                                                </li>
                                            </ul>
                                            
                                            <div class="mt-5 border rounded border-gray-100/50 dark:border-neutral-600">
                                                <div class="grid grid-cols-12">
                                                    <div class="col-span-6">
                                                        <div class="px-3 py-2 ltr:border-r rtl:border-l dark:border-neutral-600 border-gray-100/50">
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300">Exp. : 3.5 Years</p>
                                                        </div>
                                                    </div><!--end col-->
                                                    <div class="col-span-6">
                                                        <div class="px-3 py-2">
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300">Freelancers</p>
                                                        </div>
                                                    </div><!--end col-->
                                                </div>
                                            </div>
    
                                            <div class="mt-4">
                                                <p class="text-gray-500 dark:text-gray-300">Some quick example text to build on the card title and bulk the card's content Moltin gives you platform.</p>
                                            </div>
                                           
                                            <div class="mt-6">
                                                <a href="#hireNow" data-bs-toggle="modal" class="w-full text-white border-transparent btn group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 hover:-translate-y-2"><i class="mdi mdi-account-check"></i> Hire Now</a>
                                                <a href="candidate-details.html" class="w-full mt-2 border-transparent btn group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 hover:-translate-y-1 group-data-[theme-color=violet]:hover:bg-violet-500 group-data-[theme-color=violet]:hover:text-white group-data-[theme-color=sky]:hover:bg-sky-500 group-data-[theme-color=sky]:hover:text-white group-data-[theme-color=red]:hover:bg-red-500 group-data-[theme-color=red]:hover:text-white group-data-[theme-color=green]:hover:bg-green-500 group-data-[theme-color=green]:hover:text-white group-data-[theme-color=pink]:hover:bg-pink-500 group-data-[theme-color=pink]:hover:text-white group-data-[theme-color=blue]:hover:bg-blue-500 group-data-[theme-color=blue]:hover:text-white hover:ring group-data-[theme-color=violet]:hover:ring-violet-500/20 group-data-[theme-color=sky]:hover:ring-sky-500/20 group-data-[theme-color=red]:hover:ring-red-500/20 group-data-[theme-color=green]:hover:ring-green-500/20 group-data-[theme-color=pink]:hover:ring-pink-500/20 group-data-[theme-color=blue]:hover:ring-blue-500/20"><i class="mdi mdi-eye"></i> View Profile</a>
                                            </div>
    
                                        </div>
                                    </div> 
    
                                     <div class="col-span-12 lg:col-span-4">
                                         <div class="relative p-5 border rounded-md border-gray-100/50 dark:border-neutral-600">
                                        
                                            <div class="flex mb-4">
                                                <div class="relative shrink-0">
                                                    <img src="/assets/images/user/img-03.jpg" alt="" class="w-16 h-16 rounded">
                                                    <span class="absolute h-3.5 w-3.5 rounded-full bg-red-500 border-2 border-white -top-1 -right-1 dark:border-neutral-700">
                                                        <span class="hidden">active</span>
                                                    </span>
                                                </div>
                                                <div class="ltr:ml-3 rtl:mr-3">
                                                    <a href="candidate-details.html"><h5 class="mb-2 text-17 dark:text-white">James Lemire</h5></a>
                                                    <span class="text-13 bg-sky-500/20 text-sky-500 px-1.5 py-1 rounded">$280/hrs</span>
                                                </div>
                                            </div>
    
                                            <ul class="flex items-center justify-between">
                                                <li class="text-yellow-500 text-17">
                                                    <i class="mdi mdi-star"></i>
                                                    <i class="mdi mdi-star"></i>
                                                    <i class="mdi mdi-star"></i>
                                                    <i class="mdi mdi-star"></i>  
                                                    <i class="mdi mdi-star-half-full"></i>
                                                </li>
                                                <li>
                                                    <div class="h-8 w-8 border border-gray-100/50 bg-transparent rounded text-gray-100 leading-[2.4] text-center hover:bg-red-600 hover:text-white transition-all hover:border-transparent dark:border-neutral-600 dark:hover:border-transparent">
                                                        <a href="javascript:void(0)"><i class="text-lg uil uil-heart-alt"></i></a>
                                                    </div>
                                                </li>
                                            </ul>
                                            
                                            <div class="mt-5 border rounded border-gray-100/50 dark:border-neutral-600">
                                                <div class="grid grid-cols-12">
                                                    <div class="col-span-6">
                                                        <div class="px-3 py-2 ltr:border-r rtl:border-l dark:border-neutral-600 border-gray-100/50">
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300">Exp. : 4 Years</p>
                                                        </div>
                                                    </div><!--end col-->
                                                    <div class="col-span-6">
                                                        <div class="px-3 py-2">
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300">Freelancers</p>
                                                        </div>
                                                    </div><!--end col-->
                                                </div>
                                            </div>
    
                                            <div class="mt-4">
                                                <p class="text-gray-500 dark:text-gray-300">Some quick example text to build on the card title and bulk the card's content Moltin gives you platform.</p>
                                            </div>
                                           
                                            <div class="mt-6">
                                                <a href="#hireNow" data-bs-toggle="modal" class="w-full text-white border-transparent btn group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 hover:-translate-y-2"><i class="mdi mdi-account-check"></i> Hire Now</a>
                                                <a href="candidate-details.html" class="w-full mt-2 border-transparent btn group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 hover:-translate-y-1 group-data-[theme-color=violet]:hover:bg-violet-500 group-data-[theme-color=violet]:hover:text-white group-data-[theme-color=sky]:hover:bg-sky-500 group-data-[theme-color=sky]:hover:text-white group-data-[theme-color=red]:hover:bg-red-500 group-data-[theme-color=red]:hover:text-white group-data-[theme-color=green]:hover:bg-green-500 group-data-[theme-color=green]:hover:text-white group-data-[theme-color=pink]:hover:bg-pink-500 group-data-[theme-color=pink]:hover:text-white group-data-[theme-color=blue]:hover:bg-blue-500 group-data-[theme-color=blue]:hover:text-white hover:ring group-data-[theme-color=violet]:hover:ring-violet-500/20 group-data-[theme-color=sky]:hover:ring-sky-500/20 group-data-[theme-color=red]:hover:ring-red-500/20 group-data-[theme-color=green]:hover:ring-green-500/20 group-data-[theme-color=pink]:hover:ring-pink-500/20 group-data-[theme-color=blue]:hover:ring-blue-500/20"><i class="mdi mdi-eye"></i> View Profile</a>
                                            </div>

                                             <div class="absolute px-2 text-white bg-violet-500 top-2 ltr:right-0 rtl:left-0">
                                                <span class="relative text-xs font-medium uppercase">Urgent</span>
                                                <div class="after:contant[] ltr:after:border-r-[11px] rtl:after:border-l-[11px] after:absolute after:border-b-[12px] ltr:after:-left-[11px] rtl:after:-right-[11.5px] after:top-0 after:border-t-[11.5px] after:border-t-transparent after:border-violet-500 after:border-b-transparent"></div>
                                            </div>
    
                                        </div>
                                    </div> 

                                    <div class="col-span-12 lg:col-span-4">
                                         <div class="relative p-5 border rounded-md border-gray-100/50 dark:border-neutral-600">
                                        
                                            <div class="flex mb-4">
                                                <div class="relative shrink-0">
                                                    <img src="/assets/images/user/img-04.jpg" alt="" class="w-16 h-16 rounded">
                                                    <span class="absolute h-3.5 w-3.5 rounded-full bg-green-500 border-2 border-white -top-1 -right-1 dark:border-neutral-700">
                                                        <span class="hidden">active</span>
                                                    </span>
                                                </div>
                                                <div class="ltr:ml-3 rtl:mr-3">
                                                    <a href="candidate-details.html"><h5 class="mb-2 text-17 dark:text-white">Rebecca Swartz</h5></a>
                                                    <span class="text-13 bg-sky-500/20 text-sky-500 px-1.5 py-1 rounded">$240/hrs</span>
                                                </div>
                                            </div>
    
                                            <ul class="flex items-center justify-between">
                                                <li class="text-yellow-500 text-17">
                                                    <i class="mdi mdi-star"></i>
                                                    <i class="mdi mdi-star"></i>
                                                    <i class="mdi mdi-star"></i>
                                                    <i class="mdi mdi-star"></i>  
                                                    <i class="mdi mdi-star-half-full"></i>
                                                </li>
                                                <li>
                                                    <div class="h-8 w-8 border border-gray-100/50 bg-transparent rounded text-gray-100 leading-[2.4] text-center hover:bg-red-600 hover:text-white transition-all hover:border-transparent dark:border-neutral-600 dark:hover:border-transparent">
                                                        <a href="javascript:void(0)"><i class="text-lg uil uil-heart-alt"></i></a>
                                                    </div>
                                                </li>
                                            </ul>
                                            
                                            <div class="mt-5 border rounded border-gray-100/50 dark:border-neutral-600">
                                                <div class="grid grid-cols-12">
                                                    <div class="col-span-6">
                                                        <div class="px-3 py-2 ltr:border-r rtl:border-l dark:border-neutral-600 border-gray-100/50">
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300">Exp. : 2 Years</p>
                                                        </div>
                                                    </div><!--end col-->
                                                    <div class="col-span-6">
                                                        <div class="px-3 py-2">
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300">Freelancers</p>
                                                        </div>
                                                    </div><!--end col-->
                                                </div>
                                            </div>
    
                                            <div class="mt-4">
                                                <p class="text-gray-500 dark:text-gray-300">Some quick example text to build on the card title and bulk the card's content Moltin gives you platform.</p>
                                            </div>
                                           
                                            <div class="mt-6">
                                                <a href="#hireNow" data-bs-toggle="modal" class="w-full text-white border-transparent btn group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 hover:-translate-y-2"><i class="mdi mdi-account-check"></i> Hire Now</a>
                                                <a href="candidate-details.html" class="w-full mt-2 border-transparent btn group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 hover:-translate-y-1 group-data-[theme-color=violet]:hover:bg-violet-500 group-data-[theme-color=violet]:hover:text-white group-data-[theme-color=sky]:hover:bg-sky-500 group-data-[theme-color=sky]:hover:text-white group-data-[theme-color=red]:hover:bg-red-500 group-data-[theme-color=red]:hover:text-white group-data-[theme-color=green]:hover:bg-green-500 group-data-[theme-color=green]:hover:text-white group-data-[theme-color=pink]:hover:bg-pink-500 group-data-[theme-color=pink]:hover:text-white group-data-[theme-color=blue]:hover:bg-blue-500 group-data-[theme-color=blue]:hover:text-white hover:ring group-data-[theme-color=violet]:hover:ring-violet-500/20 group-data-[theme-color=sky]:hover:ring-sky-500/20 group-data-[theme-color=red]:hover:ring-red-500/20 group-data-[theme-color=green]:hover:ring-green-500/20 group-data-[theme-color=pink]:hover:ring-pink-500/20 group-data-[theme-color=blue]:hover:ring-blue-500/20"><i class="mdi mdi-eye"></i> View Profile</a>
                                            </div>
    
                                        </div>
                                    </div> 
    
                                     <div class="col-span-12 lg:col-span-4">
                                         <div class="relative p-5 border rounded-md border-gray-100/50 dark:border-neutral-600">
                                        
                                            <div class="flex mb-4">
                                                <div class="relative shrink-0">
                                                    <img src="/assets/images/user/img-05.jpg" alt="" class="w-16 h-16 rounded">
                                                    <span class="absolute h-3.5 w-3.5 rounded-full bg-green-500 border-2 border-white -top-1 -right-1 dark:border-neutral-700">
                                                        <span class="hidden">active</span>
                                                    </span>
                                                </div>
                                                <div class="ltr:ml-3 rtl:mr-3">
                                                    <a href="candidate-details.html"><h5 class="mb-2 text-17 dark:text-white">Betty Richards</h5></a>
                                                    <span class="text-13 bg-sky-500/20 text-sky-500 px-1.5 py-1 rounded">$198/hrs</span>
                                                </div>
                                            </div>
    
                                            <ul class="flex items-center justify-between">
                                                <li class="text-yellow-500 text-17">
                                                    <i class="mdi mdi-star"></i>
                                                    <i class="mdi mdi-star"></i>
                                                    <i class="mdi mdi-star"></i>
                                                    <i class="mdi mdi-star"></i>  
                                                    <i class="mdi mdi-star-half-full"></i>
                                                </li>
                                                <li>
                                                    <div class="h-8 w-8 border border-gray-100/50 bg-transparent rounded text-gray-100 leading-[2.4] text-center hover:bg-red-600 hover:text-white transition-all hover:border-transparent dark:border-neutral-600 dark:hover:border-transparent">
                                                        <a href="javascript:void(0)"><i class="text-lg uil uil-heart-alt"></i></a>
                                                    </div>
                                                </li>
                                            </ul>
                                            
                                            <div class="mt-5 border rounded border-gray-100/50 dark:border-neutral-600">
                                                <div class="grid grid-cols-12">
                                                    <div class="col-span-6">
                                                        <div class="px-3 py-2 ltr:border-r rtl:border-l dark:border-neutral-600 border-gray-100/50">
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300">Exp. : 2 Years</p>
                                                        </div>
                                                    </div><!--end col-->
                                                    <div class="col-span-6">
                                                        <div class="px-3 py-2">
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300">Freelancers</p>
                                                        </div>
                                                    </div><!--end col-->
                                                </div>
                                            </div>
    
                                            <div class="mt-4">
                                                <p class="text-gray-500 dark:text-gray-300">Some quick example text to build on the card title and bulk the card's content Moltin gives you platform.</p>
                                            </div>
                                           
                                            <div class="mt-6">
                                                <a href="#hireNow" data-bs-toggle="modal" class="w-full text-white border-transparent btn group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 hover:-translate-y-2"><i class="mdi mdi-account-check"></i> Hire Now</a>
                                                <a href="candidate-details.html" class="w-full mt-2 border-transparent btn group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 hover:-translate-y-1 group-data-[theme-color=violet]:hover:bg-violet-500 group-data-[theme-color=violet]:hover:text-white group-data-[theme-color=sky]:hover:bg-sky-500 group-data-[theme-color=sky]:hover:text-white group-data-[theme-color=red]:hover:bg-red-500 group-data-[theme-color=red]:hover:text-white group-data-[theme-color=green]:hover:bg-green-500 group-data-[theme-color=green]:hover:text-white group-data-[theme-color=pink]:hover:bg-pink-500 group-data-[theme-color=pink]:hover:text-white group-data-[theme-color=blue]:hover:bg-blue-500 group-data-[theme-color=blue]:hover:text-white hover:ring group-data-[theme-color=violet]:hover:ring-violet-500/20 group-data-[theme-color=sky]:hover:ring-sky-500/20 group-data-[theme-color=red]:hover:ring-red-500/20 group-data-[theme-color=green]:hover:ring-green-500/20 group-data-[theme-color=pink]:hover:ring-pink-500/20 group-data-[theme-color=blue]:hover:ring-blue-500/20"><i class="mdi mdi-eye"></i> View Profile</a>
                                            </div>
    
                                        </div>
                                    </div> 
    
                                     <div class="col-span-12 lg:col-span-4">
                                         <div class="relative p-5 border rounded-md border-gray-100/50 dark:border-neutral-600">
                                        
                                            <div class="flex mb-4">
                                                <div class="relative shrink-0">
                                                    <img src="/assets/images/user/img-06.jpg" alt="" class="w-16 h-16 rounded">
                                                    <span class="absolute h-3.5 w-3.5 rounded-full bg-green-500 border-2 border-white -top-1 -right-1 dark:border-neutral-700">
                                                        <span class="hidden">active</span>
                                                    </span>
                                                </div>
                                                <div class="ltr:ml-3 rtl:mr-3">
                                                    <a href="candidate-details.html"><h5 class="mb-2 text-17 dark:text-white">Jeffrey Montgomery</h5></a>
                                                    <span class="text-13 bg-sky-500/20 text-sky-500 px-1.5 py-1 rounded">$280/hrs</span>
                                                </div>
                                            </div>
    
                                            <ul class="flex items-center justify-between">
                                                <li class="text-yellow-500 text-17">
                                                    <i class="mdi mdi-star"></i>
                                                    <i class="mdi mdi-star"></i>
                                                    <i class="mdi mdi-star"></i>
                                                    <i class="mdi mdi-star"></i>  
                                                    <i class="mdi mdi-star-half-full"></i>
                                                </li>
                                                <li>
                                                    <div class="h-8 w-8 bg-red-600 rounded text-white leading-[2.4] text-center">
                                                        <a href="javascript:void(0)"><i class="text-lg uil uil-heart-alt"></i></a>
                                                    </div>
                                                </li>
                                            </ul>
                                            
                                            <div class="mt-5 border rounded border-gray-100/50 dark:border-neutral-600">
                                                <div class="grid grid-cols-12">
                                                    <div class="col-span-6">
                                                        <div class="px-3 py-2 ltr:border-r rtl:border-l dark:border-neutral-600 border-gray-100/50">
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300">Exp. : 7 Years</p>
                                                        </div>
                                                    </div><!--end col-->
                                                    <div class="col-span-6">
                                                        <div class="px-3 py-2">
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300">Freelancers</p>
                                                        </div>
                                                    </div><!--end col-->
                                                </div>
                                            </div>
    
                                            <div class="mt-4">
                                                <p class="text-gray-500 dark:text-gray-300">Some quick example text to build on the card title and bulk the card's content Moltin gives you platform.</p>
                                            </div>
                                           
                                            <div class="mt-6">
                                                <a href="#hireNow" data-bs-toggle="modal" class="w-full text-white border-transparent btn group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 hover:-translate-y-2"><i class="mdi mdi-account-check"></i> Hire Now</a>
                                                <a href="candidate-details.html" class="w-full mt-2 border-transparent btn group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 hover:-translate-y-1 group-data-[theme-color=violet]:hover:bg-violet-500 group-data-[theme-color=violet]:hover:text-white group-data-[theme-color=sky]:hover:bg-sky-500 group-data-[theme-color=sky]:hover:text-white group-data-[theme-color=red]:hover:bg-red-500 group-data-[theme-color=red]:hover:text-white group-data-[theme-color=green]:hover:bg-green-500 group-data-[theme-color=green]:hover:text-white group-data-[theme-color=pink]:hover:bg-pink-500 group-data-[theme-color=pink]:hover:text-white group-data-[theme-color=blue]:hover:bg-blue-500 group-data-[theme-color=blue]:hover:text-white hover:ring group-data-[theme-color=violet]:hover:ring-violet-500/20 group-data-[theme-color=sky]:hover:ring-sky-500/20 group-data-[theme-color=red]:hover:ring-red-500/20 group-data-[theme-color=green]:hover:ring-green-500/20 group-data-[theme-color=pink]:hover:ring-pink-500/20 group-data-[theme-color=blue]:hover:ring-blue-500/20"><i class="mdi mdi-eye"></i> View Profile</a>
                                            </div>
    
                                        </div>
                                    </div> 

                                    <div class="col-span-12 lg:col-span-4">
                                         <div class="relative p-5 border rounded-md border-gray-100/50 dark:border-neutral-600">
                                        
                                            <div class="flex mb-4">
                                                <div class="relative shrink-0">
                                                    <img src="/assets/images/user/img-07.jpg" alt="" class="w-16 h-16 rounded">
                                                    <span class="absolute h-3.5 w-3.5 rounded-full bg-green-500 border-2 border-white -top-1 -right-1 dark:border-neutral-700">
                                                        <span class="hidden">active</span>
                                                    </span>
                                                </div>
                                                <div class="ltr:ml-3 rtl:mr-3">
                                                    <a href="candidate-details.html"><h5 class="mb-2 text-17 dark:text-white">Brooke Hayes</h5></a>
                                                    <span class="text-13 bg-sky-500/20 text-sky-500 px-1.5 py-1 rounded">$310/hrs</span>
                                                </div>
                                            </div>
    
                                            <ul class="flex items-center justify-between">
                                                <li class="text-yellow-500 text-17">
                                                    <i class="mdi mdi-star"></i>
                                                    <i class="mdi mdi-star"></i>
                                                    <i class="mdi mdi-star"></i>
                                                    <i class="mdi mdi-star"></i>  
                                                    <i class="mdi mdi-star-half-full"></i>
                                                </li>
                                                <li>
                                                    <div class="h-8 w-8 bg-red-600 rounded text-white leading-[2.4] text-center">
                                                        <a href="javascript:void(0)"><i class="text-lg uil uil-heart-alt"></i></a>
                                                    </div>
                                                </li>
                                            </ul>
                                            
                                            <div class="mt-5 border rounded border-gray-100/50 dark:border-neutral-600">
                                                <div class="grid grid-cols-12">
                                                    <div class="col-span-6">
                                                        <div class="px-3 py-2 ltr:border-r rtl:border-l dark:border-neutral-600 border-gray-100/50">
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300">Exp. : 4 Years</p>
                                                        </div>
                                                    </div><!--end col-->
                                                    <div class="col-span-6">
                                                        <div class="px-3 py-2">
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300">Freelancers</p>
                                                        </div>
                                                    </div><!--end col-->
                                                </div>
                                            </div>
    
                                            <div class="mt-4">
                                                <p class="text-gray-500 dark:text-gray-300">Some quick example text to build on the card title and bulk the card's content Moltin gives you platform.</p>
                                            </div>
                                           
                                            <div class="mt-6">
                                                <a href="#hireNow" data-bs-toggle="modal" class="w-full text-white border-transparent btn group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 hover:-translate-y-2"><i class="mdi mdi-account-check"></i> Hire Now</a>
                                                <a href="candidate-details.html" class="w-full mt-2 border-transparent btn group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 hover:-translate-y-1 group-data-[theme-color=violet]:hover:bg-violet-500 group-data-[theme-color=violet]:hover:text-white group-data-[theme-color=sky]:hover:bg-sky-500 group-data-[theme-color=sky]:hover:text-white group-data-[theme-color=red]:hover:bg-red-500 group-data-[theme-color=red]:hover:text-white group-data-[theme-color=green]:hover:bg-green-500 group-data-[theme-color=green]:hover:text-white group-data-[theme-color=pink]:hover:bg-pink-500 group-data-[theme-color=pink]:hover:text-white group-data-[theme-color=blue]:hover:bg-blue-500 group-data-[theme-color=blue]:hover:text-white hover:ring group-data-[theme-color=violet]:hover:ring-violet-500/20 group-data-[theme-color=sky]:hover:ring-sky-500/20 group-data-[theme-color=red]:hover:ring-red-500/20 group-data-[theme-color=green]:hover:ring-green-500/20 group-data-[theme-color=pink]:hover:ring-pink-500/20 group-data-[theme-color=blue]:hover:ring-blue-500/20"><i class="mdi mdi-eye"></i> View Profile</a>
                                            </div>
    
                                        </div>
                                    </div> 
    
                                     <div class="col-span-12 lg:col-span-4">
                                         <div class="relative p-5 border rounded-md border-gray-100/50 dark:border-neutral-600">
                                        
                                            <div class="flex mb-4">
                                                <div class="relative shrink-0">
                                                    <img src="/assets/images/user/img-08.jpg" alt="" class="w-16 h-16 rounded">
                                                    <span class="absolute h-3.5 w-3.5 rounded-full bg-red-500 border-2 border-white -top-1 -right-1 dark:border-neutral-700">
                                                        <span class="hidden">active</span>
                                                    </span>
                                                </div>
                                                <div class="ltr:ml-3 rtl:mr-3">
                                                    <a href="candidate-details.html"><h5 class="mb-2 text-17 dark:text-white">Cerys Woods</h5></a>
                                                    <span class="text-13 bg-sky-500/20 text-sky-500 px-1.5 py-1 rounded">$450/hrs</span>
                                                </div>
                                            </div>
    
                                            <ul class="flex items-center justify-between">
                                                <li class="text-yellow-500 text-17">
                                                    <i class="mdi mdi-star"></i>
                                                    <i class="mdi mdi-star"></i>
                                                    <i class="mdi mdi-star"></i>
                                                    <i class="mdi mdi-star"></i>  
                                                    <i class="mdi mdi-star-half-full"></i>
                                                </li>
                                                <li>
                                                    <div class="h-8 w-8 border border-gray-100/50 bg-transparent rounded text-gray-100 leading-[2.4] text-center hover:bg-red-600 hover:text-white transition-all hover:border-transparent dark:border-neutral-600 dark:hover:border-transparent">
                                                        <a href="javascript:void(0)"><i class="text-lg uil uil-heart-alt"></i></a>
                                                    </div>
                                                </li>
                                            </ul>
                                            
                                            <div class="mt-5 border rounded border-gray-100/50 dark:border-neutral-600">
                                                <div class="grid grid-cols-12">
                                                    <div class="col-span-6">
                                                        <div class="px-3 py-2 ltr:border-r rtl:border-l dark:border-neutral-600 border-gray-100/50">
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300">Exp. : 2 Years</p>
                                                        </div>
                                                    </div><!--end col-->
                                                    <div class="col-span-6">
                                                        <div class="px-3 py-2">
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300">Freelancers</p>
                                                        </div>
                                                    </div><!--end col-->
                                                </div>
                                            </div>
    
                                            <div class="mt-4">
                                                <p class="text-gray-500 dark:text-gray-300">Some quick example text to build on the card title and bulk the card's content Moltin gives you platform.</p>
                                            </div>
                                           
                                            <div class="mt-6">
                                                <a href="#hireNow" data-bs-toggle="modal" class="w-full text-white border-transparent btn group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 hover:-translate-y-2"><i class="mdi mdi-account-check"></i> Hire Now</a>
                                                <a href="candidate-details.html" class="w-full mt-2 border-transparent btn group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 hover:-translate-y-1 group-data-[theme-color=violet]:hover:bg-violet-500 group-data-[theme-color=violet]:hover:text-white group-data-[theme-color=sky]:hover:bg-sky-500 group-data-[theme-color=sky]:hover:text-white group-data-[theme-color=red]:hover:bg-red-500 group-data-[theme-color=red]:hover:text-white group-data-[theme-color=green]:hover:bg-green-500 group-data-[theme-color=green]:hover:text-white group-data-[theme-color=pink]:hover:bg-pink-500 group-data-[theme-color=pink]:hover:text-white group-data-[theme-color=blue]:hover:bg-blue-500 group-data-[theme-color=blue]:hover:text-white hover:ring group-data-[theme-color=violet]:hover:ring-violet-500/20 group-data-[theme-color=sky]:hover:ring-sky-500/20 group-data-[theme-color=red]:hover:ring-red-500/20 group-data-[theme-color=green]:hover:ring-green-500/20 group-data-[theme-color=pink]:hover:ring-pink-500/20 group-data-[theme-color=blue]:hover:ring-blue-500/20"><i class="mdi mdi-eye"></i> View Profile</a>
                                            </div>
    
                                        </div>
                                    </div> 
    
                                     <div class="col-span-12 lg:col-span-4">
                                         <div class="relative p-5 border rounded-md border-gray-100/50 dark:border-neutral-600">
                                        
                                            <div class="flex mb-4">
                                                <div class="relative shrink-0">
                                                    <img src="/assets/images/user/img-06.jpg" alt="" class="w-16 h-16 rounded">
                                                    <span class="absolute h-3.5 w-3.5 rounded-full bg-green-500 border-2 border-white -top-1 -right-1 dark:border-neutral-700">
                                                        <span class="hidden">active</span>
                                                    </span>
                                                </div>
                                                <div class="ltr:ml-3 rtl:mr-3">
                                                    <a href="candidate-details.html"><h5 class="mb-2 text-17 dark:text-white">Jeffrey Montgomery</h5></a>
                                                    <span class="text-13 bg-sky-500/20 text-sky-500 px-1.5 py-1 rounded">$280/hrs</span>
                                                </div>
                                            </div>
    
                                            <ul class="flex items-center justify-between">
                                                <li class="text-yellow-500 text-17">
                                                    <i class="mdi mdi-star"></i>
                                                    <i class="mdi mdi-star"></i>
                                                    <i class="mdi mdi-star"></i>
                                                    <i class="mdi mdi-star"></i>  
                                                    <i class="mdi mdi-star-half-full"></i>
                                                </li>
                                                <li>
                                                    <div class="h-8 w-8 border border-gray-100/50 bg-transparent rounded text-gray-100 leading-[2.4] text-center hover:bg-red-600 hover:text-white transition-all hover:border-transparent dark:border-neutral-600 dark:hover:border-transparent">
                                                        <a href="javascript:void(0)"><i class="text-lg uil uil-heart-alt"></i></a>
                                                    </div>
                                                </li>
                                            </ul>
                                            
                                            <div class="mt-5 border rounded border-gray-100/50 dark:border-neutral-600">
                                                <div class="grid grid-cols-12">
                                                    <div class="col-span-6">
                                                        <div class="px-3 py-2 ltr:border-r rtl:border-l dark:border-neutral-600 border-gray-100/50">
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300">Exp. : 7 Years</p>
                                                        </div>
                                                    </div><!--end col-->
                                                    <div class="col-span-6">
                                                        <div class="px-3 py-2">
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300">Freelancers</p>
                                                        </div>
                                                    </div><!--end col-->
                                                </div>
                                            </div>
    
                                            <div class="mt-4">
                                                <p class="text-gray-500 dark:text-gray-300">Some quick example text to build on the card title and bulk the card's content Moltin gives you platform.</p>
                                            </div>
                                           
                                            <div class="mt-6">
                                                <a href="#hireNow" data-bs-toggle="modal" class="w-full text-white border-transparent btn group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 hover:-translate-y-2"><i class="mdi mdi-account-check"></i> Hire Now</a>
                                                <a href="candidate-details.html" class="w-full mt-2 border-transparent btn group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 hover:-translate-y-1 group-data-[theme-color=violet]:hover:bg-violet-500 group-data-[theme-color=violet]:hover:text-white group-data-[theme-color=sky]:hover:bg-sky-500 group-data-[theme-color=sky]:hover:text-white group-data-[theme-color=red]:hover:bg-red-500 group-data-[theme-color=red]:hover:text-white group-data-[theme-color=green]:hover:bg-green-500 group-data-[theme-color=green]:hover:text-white group-data-[theme-color=pink]:hover:bg-pink-500 group-data-[theme-color=pink]:hover:text-white group-data-[theme-color=blue]:hover:bg-blue-500 group-data-[theme-color=blue]:hover:text-white hover:ring group-data-[theme-color=violet]:hover:ring-violet-500/20 group-data-[theme-color=sky]:hover:ring-sky-500/20 group-data-[theme-color=red]:hover:ring-red-500/20 group-data-[theme-color=green]:hover:ring-green-500/20 group-data-[theme-color=pink]:hover:ring-pink-500/20 group-data-[theme-color=blue]:hover:ring-blue-500/20"><i class="mdi mdi-eye"></i> View Profile</a>
                                            </div>
    
                                        </div>
                                    </div> 
                                </div>
                            </div>
                           
                            <div class="grid grid-cols-12">
                                <div class="col-span-12">
                                    <ul class="flex justify-center gap-2 mt-8">
                                        <li class="w-12 h-12 text-center border rounded-full cursor-default border-gray-100/50 dark:border-gray-100/20">
                                            <a class="cursor-auto" href="javascript:void(0)" tabindex="-1">
                                                <i class="mdi mdi-chevron-double-left text-16 leading-[2.8] dark:text-white"></i>
                                            </a>
                                        </li>
                                        <li class="w-12 h-12 text-center text-white border border-transparent rounded-full cursor-pointer group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500">
                                            <a class="text-16 leading-[2.8]" href="javascript:void(0)">1</a>
                                        </li>
                                        <li class="w-12 h-12 text-center text-gray-900 transition-all duration-300 border rounded-full cursor-pointer border-gray-100/50 hover:bg-gray-100/30 focus:bg-gray-100/30 dark:border-gray-100/20 dark:text-gray-50 dark:hover:bg-gray-500/20">
                                            <a class="text-16 leading-[2.8]" href="javascript:void(0)">2</a>
                                        </li>
                                        <li class="w-12 h-12 text-center text-gray-900 transition-all duration-300 border rounded-full cursor-pointer border-gray-100/50 hover:bg-gray-100/30 focus:bg-gray-100/30 dark:border-gray-100/20 dark:text-gray-50 dark:hover:bg-gray-500/20">
                                            <a class="text-16 leading-[2.8]" href="javascript:void(0)">3</a>
                                        </li>
                                        <li class="w-12 h-12 text-center text-gray-900 transition-all duration-300 border rounded-full cursor-pointer border-gray-100/50 hover:bg-gray-100/30 focus:bg-gray-100/30 dark:border-gray-100/20 dark:text-gray-50 dark:hover:bg-gray-500/20">
                                            <a class="text-16 leading-[2.8]" href="javascript:void(0)">4</a>
                                        </li>
                                        <li class="w-12 h-12 text-center text-gray-900 transition-all duration-300 border rounded-full cursor-pointer border-gray-100/50 hover:bg-gray-100/30 focus:bg-gray-100/30 dark:border-gray-100/20 dark:text-gray-50 dark:hover:bg-gray-500/20">
                                            <a href="javascript:void(0)" tabindex="-1">
                                                <i class="mdi mdi-chevron-double-right text-16 leading-[2.8]"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!--end col-->
                            </div>
                        </div>
                    </section>
                <!-- End grid -->

            </div>
        </div>
        
        
        <!-- start subscribe -->
        <section class="relative py-16 overflow-hidden bg-zinc-700 dark:bg-neutral-900">
            <div class="container mx-auto">
                <div class="grid items-center grid-cols-12 gap-5">
                    <div class="col-span-12 lg:col-span-7">
                        <div class="text-center lg:text-start">
                            <h4 class="text-white">Get New Jobs Notification!</h4>
                            <p class="mt-1 mb-0 text-white/50 dark:text-gray-300">Subscribe &amp; get all related jobs notification.</p>
                        </div>
                    </div>
                    <div class="z-40 col-span-12 lg:col-span-5">
                        <form class="flex" action="#">
                            <input
                                type="text" class="w-full text-gray-100 bg-transparent rounded-md border-gray-50/30 ltr:border-r-0 rtl:border-l-0 ltr:rounded-r-none rtl:rounded-l-none placeholder:text-13 placeholder:text-gray-100 dark:text-gray-100 dark:bg-white/5 dark:border-neutral-600 focus:ring-0 focus:ring-offset-0"
                                id="subscribe" placeholder="Enter your email" >
                            <button class="text-white border-transparent btn ltr:rounded-l-none rtl:rounded-r-none group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 focus:ring focus:ring-custom-500/30" type="button" id="subscribebtn">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="absolute right-0 -top-10 -z-0 opacity-20">
                <img src="/assets/images/subscribe.png" alt="" class="img-fluid">
            </div>
        </section>
        <!-- end subscribe -->
        <!-- Footer Start -->
        <footer class="footer ">
            <!-- start footer -->
            <section class="py-12 bg-zinc-800 dark:bg-neutral-900">
                <div class="container mx-auto">
                    <div class="grid grid-cols-12 lg:gap-10">
                        <div class="col-span-12 xl:col-span-4">
                            <div class="mr-12">
                                <h4 class="text-white mb-6 text-[23px]">Jobcy</h4>
                                <p class="text-white/50 dark:text-gray-300">
                                    It is a long established fact that a reader will be of a page reader
                                    will be of at its layout.
                                </p>
                                <p class="mt-3 text-white dark:text-gray-50">Follow Us on:</p>
                                <div class="mt-5">
                                    <ul class="flex gap-3">
                                        <li class="w-8 h-8 leading-loose text-center text-gray-200 transition-all duration-300 border rounded-full cursor-pointer border-gray-200/50 hover:text-gray-50 group-data-[theme-color=violet]:hover:bg-violet-500 group-data-[theme-color=sky]:hover:bg-sky-500 group-data-[theme-color=red]:hover:bg-red-500 group-data-[theme-color=green]:hover:bg-green-500 group-data-[theme-color=pink]:hover:bg-pink-500 group-data-[theme-color=blue]:hover:bg-blue-500 hover:border-transparent">
                                            <a href="#">
                                                <i class="uil uil-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li class="w-8 h-8 leading-loose text-center text-gray-200 transition-all duration-300 border rounded-full cursor-pointer border-gray-200/50 hover:text-gray-50 group-data-[theme-color=violet]:hover:bg-violet-500 group-data-[theme-color=sky]:hover:bg-sky-500 group-data-[theme-color=red]:hover:bg-red-500 group-data-[theme-color=green]:hover:bg-green-500 group-data-[theme-color=pink]:hover:bg-pink-500 group-data-[theme-color=blue]:hover:bg-blue-500 hover:border-transparent">
                                            <a href="#">
                                                <i class="uil uil-linkedin-alt"></i>
                                            </a>
                                        </li>
                                        <li class="w-8 h-8 leading-loose text-center text-gray-200 transition-all duration-300 border rounded-full cursor-pointer border-gray-200/50 hover:text-gray-50 group-data-[theme-color=violet]:hover:bg-violet-500 group-data-[theme-color=sky]:hover:bg-sky-500 group-data-[theme-color=red]:hover:bg-red-500 group-data-[theme-color=green]:hover:bg-green-500 group-data-[theme-color=pink]:hover:bg-pink-500 group-data-[theme-color=blue]:hover:bg-blue-500 hover:border-transparent">
                                            <a href="#">
                                                <i class="uil uil-google"></i>
                                            </a>
                                        </li>
                                        <li class="w-8 h-8 leading-loose text-center text-gray-200 transition-all duration-300 border rounded-full cursor-pointer border-gray-200/50 hover:text-gray-50 group-data-[theme-color=violet]:hover:bg-violet-500 group-data-[theme-color=sky]:hover:bg-sky-500 group-data-[theme-color=red]:hover:bg-red-500 group-data-[theme-color=green]:hover:bg-green-500 group-data-[theme-color=pink]:hover:bg-pink-500 group-data-[theme-color=blue]:hover:bg-blue-500 hover:border-transparent">
                                            <a href="#">
                                                <i class="uil uil-twitter"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 mt-8 md:col-span-6 xl:col-span-2 md:mt-0">
                            <p class="mb-6 text-white text-16">Company</p>
                            <ul class="space-y-4">
                                <li class="text-sm transition-all duration-500 ease-in-out text-white/50 hover:text-gray-50 hover:text-base dark:text-gray-300 dark:hover:text-gray-50">
                                    <a href="about.html">
                                        <i class="mdi mdi-chevron-right"></i> About Us
                                    </a>
                                </li>
                                <li class="text-sm transition-all duration-500 ease-in-out text-white/50 hover:text-gray-50 hover:text-base dark:text-gray-300 dark:hover:text-gray-50">
                                    <a href="contact.html">
                                        <i class="mdi mdi-chevron-right"></i> Contact Us
                                    </a>
                                </li>
                                <li class="text-sm transition-all duration-500 ease-in-out text-white/50 hover:text-gray-50 hover:text-base dark:text-gray-300 dark:hover:text-gray-50">
                                    <a href="services.html">
                                        <i class="mdi mdi-chevron-right"></i> Services
                                    </a>
                                </li>
                                <li class="text-sm transition-all duration-500 ease-in-out text-white/50 hover:text-gray-50 hover:text-base dark:text-gray-300 dark:hover:text-gray-50">
                                    <a href="blog.html">
                                        <i class="mdi mdi-chevron-right"></i> Blog
                                    </a>
                                </li>
                                <li class="text-sm transition-all duration-500 ease-in-out text-white/50 hover:text-gray-50 hover:text-base dark:text-gray-300 dark:hover:text-gray-50">
                                    <a href="team.html">
                                        <i class="mdi mdi-chevron-right"></i> Team
                                    </a>
                                </li>
                                <li class="text-sm transition-all duration-500 ease-in-out text-white/50 hover:text-gray-50 hover:text-base dark:text-gray-300 dark:hover:text-gray-50">
                                    <a href="pricing.html">
                                        <i class="mdi mdi-chevron-right"></i> Pricing
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-span-12 mt-8 md:col-span-6 xl:col-span-2 md:mt-0">
                            <p class="mb-6 text-white text-16">For Jobs</p>
                            <ul class="space-y-4">
                                <li class="text-sm transition-all duration-500 ease-in-out text-white/50 hover:text-gray-50 hover:text-base dark:text-gray-300 dark:hover:text-gray-50">
                                    <a href="job-categories.html">
                                        <i class="mdi mdi-chevron-right"></i> Browser Categories
                                    </a>
                                </li>
                                <li class="text-sm transition-all duration-500 ease-in-out text-white/50 hover:text-gray-50 hover:text-base dark:text-gray-300 dark:hover:text-gray-50">
                                    <a href="job-list.html">
                                        <i class="mdi mdi-chevron-right"></i> Browser Jobs
                                    </a>
                                </li>
                                <li class="text-sm transition-all duration-500 ease-in-out text-white/50 hover:text-gray-50 hover:text-base dark:text-gray-300 dark:hover:text-gray-50">
                                    <a href="job-details.html">
                                        <i class="mdi mdi-chevron-right"></i> Job Details
                                    </a>
                                </li>
                                <li class="text-sm transition-all duration-500 ease-in-out text-white/50 hover:text-gray-50 hover:text-base dark:text-gray-300 dark:hover:text-gray-50">
                                    <a href="bookmark-jobs.html">
                                        <i class="mdi mdi-chevron-right"></i> Bookmark Jobs
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-span-12 mt-8 md:col-span-6 xl:col-span-2 md:mt-0">
                            <p class="mb-6 text-white text-16">For Candidates</p>
                            <ul class="space-y-4">
                                <li class="text-sm transition-all duration-500 ease-in-out text-white/50 hover:text-gray-50 hover:text-base dark:text-gray-300 dark:hover:text-gray-50">
                                    <a href="candidate-list.html">
                                        <i class="mdi mdi-chevron-right"></i> Candidate List
                                    </a>
                                </li>
                                <li class="text-sm transition-all duration-500 ease-in-out text-white/50 hover:text-gray-50 hover:text-base dark:text-gray-300 dark:hover:text-gray-50">
                                    <a href="candidate-grid.html">
                                        <i class="mdi mdi-chevron-right"></i> Candidate Grid
                                    </a>
                                </li>
                                <li class="text-sm transition-all duration-500 ease-in-out text-white/50 hover:text-gray-50 hover:text-base dark:text-gray-300 dark:hover:text-gray-50">
                                    <a href="candidate-details.html">
                                        <i class="mdi mdi-chevron-right"></i> Candidate Details
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-span-12 mt-8 md:col-span-6 xl:col-span-2 md:mt-0">
                            <p class="mb-6 text-white text-16">Support</p>
                            <ul class="space-y-4">
                                <li class="text-sm transition-all duration-500 ease-in-out text-white/50 hover:text-gray-50 hover:text-base dark:text-gray-300 dark:hover:text-gray-50">
                                    <a href="contact.html">
                                        <i class="mdi mdi-chevron-right"></i> Help Center
                                    </a>
                                </li>
                                <li class="text-sm transition-all duration-500 ease-in-out text-white/50 hover:text-gray-50 hover:text-base dark:text-gray-300 dark:hover:text-gray-50">
                                    <a href="faqs.html">
                                        <i class="mdi mdi-chevron-right"></i> FAQ'S
                                    </a>
                                </li>
                                <li class="text-sm transition-all duration-500 ease-in-out text-white/50 hover:text-gray-50 hover:text-base dark:text-gray-300 dark:hover:text-gray-50">
                                    <a href="privacy-policy.html">
                                        <i class="mdi mdi-chevron-right"></i> Privacy Policy
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end footer -->
            <!-- strat footer alt -->
            <section class="py-6 border-t bg-zinc-800 border-gray-100/10 dark:bg-neutral-900">
                <div class="container mx-auto">
                    <div class="text-center">
                        <p class="mb-0 text-center text-white/50">
                            <script>document.write(new Date().getFullYear())</script>
                            © Jobcy - Job Listing Page
                                Template by
                            <a href="https://themeforest.net/search/themesdesign" target="_blank" class="underline transition-all duration-300 hover:text-gray-50">Themesdesign</a>
                        </p>
                    </div>
                </div>
            </section>
            <!-- end footer alt -->
        </footer>
        <!-- end Footer -->


     <script src="https://unicons.iconscout.com/release/v4.0.0/script/monochrome/bundle.js"></script>
     <script src="/assets/libs/@popperjs/core/umd/popper.min.js"></script>
     <script src="/assets/libs/simplebar/simplebar.min.js"></script>


     <script src="/assets/js/pages/switcher.js"></script>

      <script src="/assets/libs/choices.js/public//assets/scripts/choices.min.js"></script>

     <script src="/assets/js/pages/job-list.init.js"></script>
     <script src="/assets/js/pages/candidate.init.js"></script>

    <script src="/assets/js/pages/dropdown&modal.init.js"></script>

    <script src="/assets/js/pages/nav&tabs.js"></script>

    <script src="/assets/js/app.js"></script>
    
</body>
</html>