<?php isGuest(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr" data-mode="light" class="scroll-smooths group" data-theme-color="violet">

<head>
    <meta charset="utf-8" />
    <title>index-1 | Jobcy - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta content="Tailwind Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="Themesbrand" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="/assets/images/favicon.ico" />



    <link rel="stylesheet" href="/assets/css/icons.css" />
    <link rel="stylesheet" href="/assets/css/tailwind.css" />




</head>

<body class="bg-white dark:bg-neutral-800">


    <div class="fixed z-40 flex flex-col gap-3 ltr:left-0 rtl:right-0 top-[330px]">
        <!-- light-dark mode button -->
        <a href="javascript: void(0);" id="ltr-rtl" class="z-40 px-3 py-3 font-medium text-white transition-all duration-300 ease-linear group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 text-14 hover:bg-violet-700 ltr:rounded-r rtl:rounded-l" onclick="changeMode(event)">
            <span class="ltr:hidden">LTR</span>
            <span class="rtl:hidden">RTL</span>
        </a>

    </div>

    <div class="fixed transition-all duration-300 ease-linear top-[27.5rem] switcher" id="style-switcher">
        <div class="w-48 p-4 bg-white shadow-md">
            <div>
                <h3 class="mb-2 font-semibold text-white text-16">Select your color</h3>
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
                        <a class="h-10 w-10 bg-[#e35490] block rounded-full" data-color="pink" href="javascript: void(0);"></a>
                    </li>
                    <li>
                        <a class="h-10 w-10 bg-[#5276f4] block rounded-full" data-color="blue" href="javascript: void(0);"></a>
                    </li>
                </ul>
            </div>

            <div class="mt-5">
                <h3 class="mb-2 font-semibold text-white text-16">Light/dark Layout</h3>
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

            <section class="flex items-center justify-center min-h-screen py-10 group-data-[theme-color=violet]:bg-violet-500/10 group-data-[theme-color=sky]:bg-sky-500/10 group-data-[theme-color=red]:bg-red-500/10 group-data-[theme-color=green]:bg-green-500/10 group-data-[theme-color=pink]:bg-pink-500/10 group-data-[theme-color=blue]:bg-blue-500/10 dark:bg-neutral-700">
                <div class="container mx-auto">
                    <div class="grid grid-cols-12">
                        <div class="col-span-12 lg:col-span-10 lg:col-start-2">
                            <div class="flex flex-col bg-white rounded-lg dark:bg-neutral-800">
                                <div class="grid flex-col grid-cols-12">
                                    <div class="col-span-12 lg:col-span-6 ltr:rounded-l-lg rtl:rounded-r-lg">
                                        <div class="p-10">
                                        <a href="/">
                                                    <img src="assets/images/logo.svg" alt="" class="hidden mx-auto dark:block" width="136">
                                                    <img src="assets/images/logo.svg" alt="" class="block mx-auto dark:hidden" width="136">
                                        </a>
                                            <div class="mt-5">
                                                <img src="/assets/images/auth/sign-up.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-12 rounded-b-md lg:col-span-6 group-data-[theme-color=violet]:bg-violet-700 group-data-[theme-color=sky]:bg-sky-700 group-data-[theme-color=red]:bg-red-700 group-data-[theme-color=green]:bg-green-700 group-data-[theme-color=pink]:bg-pink-700 group-data-[theme-color=blue]:bg-blue-700 lg:rounded-b-none lg:ltr:rounded-r-lg rtl:rounded-l-lg">
                                        <div class="flex flex-col justify-center h-full p-12">
                                            <div class="text-center">
                                                <h5 class="text-[18.5px] text-white">Let's Get Started</h5>
                                                <p class="mt-3 text-gray-50">Sign Up and get access to all the features of HireMe</p>
                                            </div>
                                            <form action="/register" method="POST">
                                                <div class="mt-5">
                                                    <div class="grid grid-cols-12 gap-5">
                                                        <div class="col-span-12 lg:col-span-6">
                                                            <div class="mb-3">
                                                                <label for="firstName" class="text-sm text-white dark:text-gray-50">First Name</label>
                                                                <input type="text" name="firstName" class="w-full mt-1 text-gray-500 border rounded border-gray-100/50 text-13 dark:bg-transparent dark:border-neutral-600" id="firstName" placeholder="First Name" required>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-12 lg:col-span-6">
                                                            <div class="mb-3">
                                                                <label for="lastName" class="text-sm text-white dark:text-gray-50">Last Name</label>
                                                                <input type="text" name="lastName" class="w-full mt-1 text-gray-500 border rounded border-gray-100/50 text-13 dark:bg-transparent dark:border-neutral-600" id="lastName" value="Last Name" required>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-12">
                                                            <div class="mb-3">
                                                                <label for="email" class="text-sm text-white dark:text-gray-50">Email</label>
                                                                <input type="email" name="email" class="w-full mt-1 text-gray-500 border rounded border-gray-100/50 text-13 dark:bg-transparent dark:border-neutral-600" id="email" placeholder="user@example.com" required>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-12 lg:col-span-6">
                                                            <div class="mb-3">
                                                                <label for="choices-single-categories" class="text-sm text-white dark:text-gray-50">Account Type</label>
                                                                <div class="mt-1">
                                                                    <select class="rounded w-full" data-trigger name="accountType" id="choices-single-categories" aria-label="Default select example">
                                                                        <option value="jobseeker">Job Seeker</option>
                                                                        <option value="Recuiter">Recuiter</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-12 lg:col-span-6">
                                                            <div class="mb-3">
                                                                <label for="phone" class="text-sm text-white dark:text-gray-50">Phone</label>
                                                                <input type="text" name="phone" class="w-full mt-1 text-gray-500 border rounded border-gray-100/50 text-13 dark:bg-transparent dark:border-neutral-600" id="phone" placeholder="+20123456789" required>
                                                            </div>
                                                        </div>
                                                        <!--end col-->

                                                    </div>
                                                </div>
                                                <!--end row-->
                                        
                                        <!--end account-->
                                        <div class="mt-4">
                                            <div class="grid grid-cols-12 gap-5">
                                                <div class="col-span-12 lg:col-span-6">
                                                    <div class="mb-3">
                                                        <label for="new-password-input" class="text-sm text-white dark:text-gray-50">Password</label>
                                                        <input type="password" name="password" class="w-full mt-1 text-gray-500 border rounded border-gray-100/50 text-13 dark:bg-transparent dark:border-neutral-600" placeholder="Enter password" id="new-password-input" required>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-6">
                                                    <div class="mb-3">
                                                        <label for="confirm-password-input" class="text-sm text-white dark:text-gray-50">Confirm Password</label>
                                                        <input type="password" name="passwordConfirmation" class="w-full mt-1 text-gray-500 border rounded border-gray-100/50 text-13 dark:bg-transparent dark:border-neutral-600" placeholder="Confirm Password" id="confirm-password-input" required>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12">
                                                    <?php if (isset($_GET['error']) && $_GET['error'] == 'password_mismatch') : ?>
                                                        <div class="bg-red-500 text-white p-1 text-center rounded">Password mismatch</div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <!--end row-->
                                        </div>
                                        <!--end Change-password-->
                                            <div class="mt-8 flex w-full justify-between items-center">
                                                <p class="text-white text-left">Already a member ? <a href="/login" class="text-white underline fw-medium"> Sign In </a></p>
                                                <button type="submit" class="text-white btn group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 border-transparent focus:ring group-data-[theme-color=violet]:focus:ring-violet-500/20 group-data-[theme-color=sky]:focus:ring-sky-500/20 group-data-[theme-color=red]:focus:ring-red-500/20 group-data-[theme-color=green]:focus:ring-green-500/20 group-data-[theme-color=pink]:focus:ring-pink-500/20 group-data-[theme-color=blue]:focus:ring-blue-500/20">Create Account</button>
                                        </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
        </div>
        </section>

    </div>
    </div>


    <script src="https://unicons.iconscout.com/release/v4.0.0/script/monochrome/bundle.js"></script>
    <script src="/assets/libs/@popperjs/core/umd/popper.min.js"></script>
    <script src="/assets/libs/simplebar/simplebar.min.js"></script>


    <script src="/assets/js/pages/switcher.js"></script>

    <script src="/assets/js/app.js"></script>

</body>

</html>