<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body style="height: 100%; width: 100%;" class="dark:bg-gray-900">

    <div style="height: 100%; width: 100%;">

        <div class="" style="height: 9%; width: 100%;">
            <nav class=" border-gray-200 dark:bg-gray-900">
                <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                    <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                        <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
                        <span
                            class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
                    </a>
                    <div class="flex md:order-2">
                        
                        <button data-collapse-toggle="navbar-search" type="button"
                            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                            aria-controls="navbar-search" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 17 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                            </svg>
                        </button>
                    </div>
                </div>
            </nav>
        </div>

        <div class="" style="height: 60%; width: 100%;">
            <div class="" style="height: 100%; width: 100%; display: flex">
                <button data-drawer-target="sidebar" data-drawer-toggle="sidebar" aria-controls="sidebar" type="button"
                    class="inline-flex items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                    <span class="sr-only">Open sidebar</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path clip-rule="evenodd" fill-rule="evenodd"
                            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                        </path>
                    </svg>
                </button>

                <aside id="sidebar" class="" aria-label="Sidenav">
                    <div
                        class="overflow-y-auto py-5 px-3 h-full bg-white border-r border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                        <ul class="space-y-2">
                            <li>
                                <a href="/"
                                    class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                    <svg aria-hidden="true"
                                        class="w-6 h-6 text-gray-400 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                                        <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                                    </svg>
                                    <span class="ml-3">Overview</span>
                                </a>
                            </li>
                            <li>
                                <button type="button"
                                    class="flex items-center p-2 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                                    aria-controls="dropdown-pages" data-collapse-toggle="dropdown-pages">
                                    <svg aria-hidden="true"
                                        class="flex-shrink-0 w-6 h-6 text-gray-400 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="flex-1 ml-3 text-left whitespace-nowrap">Pages</span>
                                    <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                                <ul id="dropdown-pages" class="hidden py-2 space-y-2">
                                    <li>
                                        <a href="#"
                                            class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Settings</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Kanban</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Calendar</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <button type="button"
                                    class="flex items-center p-2 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                                    aria-controls="dropdown-sales" data-collapse-toggle="dropdown-sales">
                                    <svg aria-hidden="true"
                                        class="flex-shrink-0 w-6 h-6 text-gray-400 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="flex-1 ml-3 text-left whitespace-nowrap">Sales</span>
                                    <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                                <ul id="dropdown-sales" class="hidden py-2 space-y-2">
                                    <li>
                                        <a href="#"
                                            class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Products</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Billing</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Invoice</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <button type="button"
                                    class="flex items-center p-2 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                                    aria-controls="dropdown-authentication"
                                    data-collapse-toggle="dropdown-authentication">
                                    <svg aria-hidden="true"
                                        class="flex-shrink-0 w-6 h-6 text-gray-400 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="flex-1 ml-3 text-left whitespace-nowrap">Authentication</span>
                                    <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                                <ul id="dropdown-authentication" class="hidden py-2 space-y-2">
                                    <li>
                                        <a href="#"
                                            class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Sign
                                            In</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Sign
                                            Up</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Forgot
                                            Password</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="pt-5 mt-5 space-y-2 border-t border-gray-200 dark:border-gray-700">
                            <li>
                                <a href="#"
                                    class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg transition duration-75 hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group">
                                    <svg aria-hidden="true"
                                        class="flex-shrink-0 w-6 h-6 text-gray-400 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                                        <path fill-rule="evenodd"
                                            d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="ml-3">Docs</span>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg transition duration-75 hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group">
                                    <svg aria-hidden="true"
                                        class="flex-shrink-0 w-6 h-6 text-gray-400 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z">
                                        </path>
                                    </svg>
                                    <span class="ml-3">Components</span>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg transition duration-75 hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group">
                                    <svg aria-hidden="true"
                                        class="flex-shrink-0 w-6 h-6 text-gray-400 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-2 0c0 .993-.241 1.929-.668 2.754l-1.524-1.525a3.997 3.997 0 00.078-2.183l1.562-1.562C15.802 8.249 16 9.1 16 10zm-5.165 3.913l1.58 1.58A5.98 5.98 0 0110 16a5.976 5.976 0 01-2.516-.552l1.562-1.562a4.006 4.006 0 001.789.027zm-4.677-2.796a4.002 4.002 0 01-.041-2.08l-.08.08-1.53-1.533A5.98 5.98 0 004 10c0 .954.223 1.856.619 2.657l1.54-1.54zm1.088-6.45A5.974 5.974 0 0110 4c.954 0 1.856.223 2.657.619l-1.54 1.54a4.002 4.002 0 00-2.346.033L7.246 4.668zM12 10a2 2 0 11-4 0 2 2 0 014 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="ml-3">Help</span>
                                </a>
                            </li>
                            <li>
                              <a href="#"
                                  class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                  <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H8m12 0-4 4m4-4-4-4M9 4H7a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h2"/>
                                  </svg>                                    
                                  <span class="flex-1 ml-3 whitespace-nowrap">Đăng xuất</span>
                              </a>
                          </li>
                        </ul>
                    </div>
                </aside>
                <div class=" content w-full dark:bg-gray-900">

                  <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <div class="flex items-center justify-between flex-column md:flex-row flex-wrap space-y-4 md:space-y-0 py-4 bg-white dark:bg-gray-900">
                        <div class="ml-5">
                            <button id="dropdownActionButton" data-dropdown-toggle="dropdownAction" class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700" type="button">
                                <span class="sr-only">Action button</span>
                                Action
                                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                </svg>
                            </button>
                            <!-- Dropdown menu -->
                            <div id="dropdownAction" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownActionButton">
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Reward</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Promote</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Activate account</a>
                                    </li>
                                </ul>
                                <div class="py-1">
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Chỉnh Sửa</a>
                                </div>
                            </div>
                        </div>
                        <label for="table-search" class="sr-only">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                </svg>
                            </div>
                            <input type="text" id="table-search-users" class="mr-5 block pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for users">
                        </div>
                    </div>
                    <table class=" w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class=" text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr class="">
                                <th scope="col" class="p-4">
                                    <div class="flex items-center">
                                        <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="checkbox-all-search" class="sr-only">checkbox</label>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Tên Sản Phẩm / hãng
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Số Lượng
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Giá 
                                </th>
                              
                                <th scope="col" class="px-6 py-3">
                                    trạng thái
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Chỉnh Sửa
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="w-4 p-4">
                                    <div class="flex items-center">
                                        <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                    </div>
                                </td>
                                <th scope="row" class="flex items-center px-6 py-7 text-gray-900 whitespace-nowrap dark:text-white">
                                    <img class="w-20 h-14 rounded -left-1 product-image" src="{{ asset("images/images4.jpg") }}" alt="Jese image">
                                    <div class="ps-3">
                                     <div class="text-base font-semibold product">Sản Phẩm 1</div>
                                        <div class="font-normal text-gray-500 product-brand">Hãng Sản phẩm 1</div>
                                    </div>  
                                </th>
                              
                                <td class="px-6 py-4 Quantity">
                                    1
                                </td>
                                <td class="px-6 py-4 font-bold  price">
                                    199.000đ                               
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center Status">
                                        <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div> Đang Bán
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <!-- Modal toggle -->
                                    <a href="#" type="button" data-modal-target="editUserModal" data-modal-show="editUserModal" class="font-medium text-blue-600 dark:text-blue-500 hover:underline Status">Chỉnh Sửa</a>
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="w-4 p-4">
                                    <div class="flex items-center">
                                        <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                    </div>
                                </td>
                                <th scope="row" class="flex items-center px-6 py-7 text-gray-900 whitespace-nowrap dark:text-white">
                                    <img class="w-20 h-14 rounded -left-1 product-image" src="{{ asset("images/images4.jpg") }}" alt="Jese image">
                                    <div class="ps-3">
                                     <div class="text-base font-semibold product">Sản Phẩm 1</div>
                                        <div class="font-normal text-gray-500 product-brand">Hãng Sản phẩm 1</div>
                                    </div>  
                                </th>
                                <td class="px-6 py-4 Quantity">
                                    1
                                </td>
                                <td class="px-6 py-4 font-bold  price">
                                    199.000đ                               
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center Status">
                                        <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div> Đang Bán
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <!-- Modal toggle -->
                                    <a href="#" type="button" data-modal-target="editUserModal" data-modal-show="editUserModal" class="font-medium text-blue-600 dark:text-blue-500 hover:underline Status">Chỉnh Sửa</a>
                                </td>
                          </tr>
                          <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="w-4 p-4">
                                <div class="flex items-center">
                                    <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                </div>
                            </td>
                            <th scope="row" class="flex items-center px-6 py-7 text-gray-900 whitespace-nowrap dark:text-white">
                                <img class="w-20 h-14 rounded -left-1 product-image" src="{{ asset("images/images4.jpg") }}" alt="Jese image">
                                <div class="ps-3">
                                 <div class="text-base font-semibold product">Sản Phẩm 1</div>
                                    <div class="font-normal text-gray-500 product-brand">Hãng Sản phẩm 1</div>
                                </div>  
                            </th>
                            <td class="px-6 py-4 Quantity">
                                1
                            </td>
                            <td class="px-6 py-4 font-bold  price">
                                199.000đ                               
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center Status">
                                    <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div> Đang Bán
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <!-- Modal toggle -->
                                <a href="#" type="button" data-modal-target="editUserModal" data-modal-show="editUserModal" class="font-medium text-blue-600 dark:text-blue-500 hover:underline Status">Chỉnh Sửa</a>
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="w-4 p-4">
                                <div class="flex items-center">
                                    <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                </div>
                            </td>
                            <th scope="row" class="flex items-center px-6 py-7 text-gray-900 whitespace-nowrap dark:text-white">
                                <img class="w-20 h-14 rounded -left-1 product-image" src="{{ asset("images/images4.jpg") }}" alt="Jese image">
                                <div class="ps-3">
                                 <div class="text-base font-semibold product">Sản Phẩm 1</div>
                                    <div class="font-normal text-gray-500 product-brand">Hãng Sản phẩm 1</div>
                                </div>  
                            </th>
                            <td class="px-6 py-4 Quantity">
                                1
                            </td>
                            <td class="px-6 py-4 font-bold  price">
                                199.000đ                               
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center Status">
                                    <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div> Đang Bán
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <!-- Modal toggle -->
                                <a href="#" type="button" data-modal-target="editUserModal" data-modal-show="editUserModal" class="font-medium text-blue-600 dark:text-blue-500 hover:underline Status">Chỉnh Sửa</a>
                            </td>
                      </tr>
                      <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="w-4 p-4">
                            <div class="flex items-center">
                                <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                            </div>
                        </td>
                        <th scope="row" class="flex items-center px-6 py-7 text-gray-900 whitespace-nowrap dark:text-white">
                            <img class="w-20 h-14 rounded -left-1 product-image" src="{{ asset("images/images4.jpg") }}" alt="Jese image">
                            <div class="ps-3">
                             <div class="text-base font-semibold product">Sản Phẩm 1</div>
                                <div class="font-normal text-gray-500 product-brand">Hãng Sản phẩm 1</div>
                            </div>  
                        </th>
                        <td class="px-6 py-4 Quantity">
                            1
                        </td>
                        <td class="px-6 py-4 font-bold  price">
                            199.000đ                               
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center Status">
                                <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div> Đang Bán
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <!-- Modal toggle -->
                            <a href="#" type="button" data-modal-target="editUserModal" data-modal-show="editUserModal" class="font-medium text-blue-600 dark:text-blue-500 hover:underline Status">Chỉnh Sửa</a>
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="w-4 p-4">
                            <div class="flex items-center">
                                <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                            </div>
                        </td>
                        <th scope="row" class="flex items-center px-6 py-7 text-gray-900 whitespace-nowrap dark:text-white">
                            <img class="w-20 h-14 rounded -left-1 product-image" src="{{ asset("images/images4.jpg") }}" alt="Jese image">
                            <div class="ps-3">
                             <div class="text-base font-semibold product">Sản Phẩm 1</div>
                                <div class="font-normal text-gray-500 product-brand">Hãng Sản phẩm 1</div>
                            </div>  
                        </th>
                        <td class="px-6 py-4 Quantity">
                            1
                        </td>
                        <td class="px-6 py-4 font-bold  price">
                            199.000đ                               
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center Status">
                                <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div> Đang Bán
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <!-- Modal toggle -->
                            <a href="#" type="button" data-modal-target="editUserModal" data-modal-show="editUserModal" class="font-medium text-blue-600 dark:text-blue-500 hover:underline Status">Chỉnh Sửa</a>
                        </td>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="w-4 p-4">
                                    <div class="flex items-center">
                                        <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                    </div>
                                </td>
                                <th scope="row" class="flex items-center px-6 py-7 text-gray-900 whitespace-nowrap dark:text-white">
                                    <img class="w-20 h-14 rounded -left-1 product-image" src="{{ asset("images/images4.jpg") }}" alt="Jese image">
                                    <div class="ps-3">
                                     <div class="text-base font-semibold product">Sản Phẩm 1</div>
                                        <div class="font-normal text-gray-500 product-brand">Hãng Sản phẩm 1</div>
                                    </div>  
                                </th>
                                <td class="px-6 py-4 Quantity">
                                    1
                                </td>
                                <td class="px-6 py-4 font-bold  price">
                                    199.000đ                               
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center Status">
                                        <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div> Đang Bán
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <!-- Modal toggle -->
                                    <a href="#" type="button" data-modal-target="editUserModal" data-modal-show="editUserModal" class="font-medium text-blue-600 dark:text-blue-500 hover:underline Status">Chỉnh Sửa</a>
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="w-4 p-4">
                                    <div class="flex items-center">
                                        <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                    </div>
                                </td>
                                <th scope="row" class="flex items-center px-6 py-7 text-gray-900 whitespace-nowrap dark:text-white">
                                    <img class="w-20 h-14 rounded -left-1 product-image" src="{{ asset("images/images4.jpg") }}" alt="Jese image">
                                    <div class="ps-3">
                                     <div class="text-base font-semibold product">Sản Phẩm 1</div>
                                        <div class="font-normal text-gray-500 product-brand">Hãng Sản phẩm 1</div>
                                    </div>  
                                </th>
                                <td class="px-6 py-4 Quantity">
                                    1
                                </td>
                                <td class="px-6 py-4 font-bold  price">
                                    199.000đ                               
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center Status">
                                        <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div> Đang Bán
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <!-- Modal toggle -->
                                    <a href="#" type="button" data-modal-target="editUserModal" data-modal-show="editUserModal" class="font-medium text-blue-600 dark:text-blue-500 hover:underline Status">Chỉnh Sửa</a>
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="w-4 p-4">
                                    <div class="flex items-center">
                                        <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                    </div>
                                </td>
                                <th scope="row" class="flex items-center px-6 py-7 text-gray-900 whitespace-nowrap dark:text-white">
                                    <img class="w-20 h-14 rounded -left-1 product-image" src="{{ asset("images/images4.jpg") }}" alt="Jese image">
                                    <div class="ps-3">
                                     <div class="text-base font-semibold product">Sản Phẩm 1</div>
                                        <div class="font-normal text-gray-500 product-brand">Hãng Sản phẩm 1</div>
                                    </div>  
                                </th>
                                <td class="px-6 py-4 Quantity">
                                    1
                                </td>
                                <td class="px-6 py-4 font-bold  price">
                                    199.000đ                               
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center Status">
                                        <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div> Đang Bán
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <!-- Modal toggle -->
                                    <a href="#" type="button" data-modal-target="editUserModal" data-modal-show="editUserModal" class="font-medium text-blue-600 dark:text-blue-500 hover:underline Status">Chỉnh Sửa</a>
                                </td>
                            </tr>
                            <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="w-4 p-4">
                                    <div class="flex items-center">
                                        <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                    </div>
                                </td>
                                <th scope="row" class="flex items-center px-6 py-7 text-gray-900 whitespace-nowrap dark:text-white">
                                    <img class="w-20 h-14 rounded -left-1 product-image" src="{{ asset("images/images4.jpg") }}" alt="Jese image">
                                    <div class="ps-3">
                                     <div class="text-base font-semibold product">Sản Phẩm 1</div>
                                        <div class="font-normal text-gray-500 product-brand">Hãng Sản phẩm 1</div>
                                    </div>  
                                </th>
                                <td class="px-6 py-4 Quantity">
                                    1
                                </td>
                                <td class="px-6 py-4 font-bold  price">
                                    199.000đ                               
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center Status">
                                        <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div> Đang Bán
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <!-- Modal toggle -->
                                    <a href="#" type="button" data-modal-target="editUserModal" data-modal-show="editUserModal" class="font-medium text-blue-600 dark:text-blue-500 hover:underline Status">Chỉnh Sửa</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- Edit user modal -->
                    <div id="editUserModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 items-center justify-center hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative w-full max-w-2xl max-h-full">
                            <!-- Modal content -->
                            <form class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <!-- Modal header -->
                                <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                        Edit user
                                    </h3>
                                   <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="editUserModal">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                                </div>
                                <!-- Modal body -->
                                <div class="p-6 space-y-6">
                                    <div class="grid grid-cols-6 gap-6">
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="first-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First Name</label>
                                            <input type="text" name="first-name" id="first-name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Bonnie" required="">
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="last-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last Name</label>
                                            <input type="text" name="last-name" id="last-name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Green" required="">
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                            <input type="email" name="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="example@company.com" required="">
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="phone-number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone Number</label>
                                            <input type="number" name="phone-number" id="phone-number" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="e.g. +(12)3456 789" required="">
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="department" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Department</label>
                                            <input type="text" name="department" id="department" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Development" required="">
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Company</label>
                                            <input type="number" name="company" id="company" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="123456" required="">
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="current-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Current Password</label>
                                            <input type="password" name="current-password" id="current-password" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="••••••••" required="">
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="new-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">New Password</label>
                                            <input type="password" name="new-password" id="new-password" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="••••••••" required="">
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal footer -->
                                <div class="flex items-center p-6 space-x-3 rtl:space-x-reverse border-t border-gray-200 rounded-b dark:border-gray-600">
                                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save all</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
                </div>

            </div>
        </div>
        <div class="footer" style="height: 31%; width: 100%">
            <footer class="mt-5 bg-gray-900">
                <div class="mx-auto w-full max-w-screen-xl ">
                    <div class="md:flex md:justify-between">
                        <div class="mb-6 md:mb-0">
                            <a href="https://flowbite.com/" class="flex items-center">
                                <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 me-3"
                                    alt="FlowBite Logo" />
                                <span
                                    class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
                                    
                            </a>
                            
                        </div>
                        <div class="grid grid-cols-5 gap-8 sm:gap-4 sm:grid-cols-1">
                            <div>                         
                                
                                  <ul class="text-gray-500 dark:text-gray-400 font-medium mt-1">
                                      <li class="mb-4">
                                        <p style="font-size:16px " class="dark:text-white mt-1">
                                            0778629133
                                        </p>
                                    <p style="font-size:15px " class="dark:text-white">Địa Chỉ:Đường DC13, Sơn Kỳ, Tân Phú, Thành phố Hồ Chí Minh, Việt Nam</p>
                                      <p style="font-size:14px " class="dark:text-white">dinhhieu3051@gmail.com</p>
                                 <div class="flex mt-2">  
        <!-- Facebook Icon -->
        <a href="https://www.facebook.com" target="_blank" class="text-white hover:text-gray-300 mr-2 ">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" stroke="none">
                <path d="M22.675 0H1.325C.593 0 0 .593 0 1.325v21.351C0 23.407.593 24 1.325 24H12.82v-9.294H9.692V11.41h3.127V8.575c0-3.1 1.894-4.788 4.659-4.788 1.325 0 2.463.099 2.794.143v3.24l-1.917.001c-1.504 0-1.796.715-1.796 1.763v2.31h3.59l-.467 3.296h-3.123V24h6.116c.732 0 1.325-.593 1.325-1.325V1.325C24 .593 23.407 0 22.675 0z"/>
            </svg>
        </a>

        <!-- YouTube Icon -->
        <a href="https://www.youtube.com" target="_blank" class="text-white hover:text-gray-300 mr-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" stroke="none">
                <path d="M23.498 6.186c-.27-1.017-1.072-1.815-2.09-2.09C19.945 3.696 12 3.696 12 3.696s-7.945 0-9.408.4c-1.017.27-1.82 1.073-2.09 2.09C0 7.649 0 12 0 12s0 4.351.502 5.814c.27 1.017 1.072 1.815 2.09 2.09C4.055 20.304 12 20.304 12 20.304s7.945 0 9.408-.4c1.017-.27 1.82-1.073 2.09-2.09C24 16.351 24 12 24 12s0-4.351-.502-5.814zM9.545 15.568V8.432l6.273 3.568-6.273 3.568z"/>
            </svg>
        </a>

        <!-- Messenger Icon -->
        <a href="https://www.messenger.com" target="_blank" class="text-white hover:text-gray-300 mr-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" stroke="none">
                <path d="M12 2C6.486 2 2 6.486 2 12c0 3.805 2.224 7.112 5.595 8.841-.026.524-.069 1.315-.106 1.899-.165 2.559.992 2.572 1.886 1.846 1.215-.978 2.421-2.28 3.337-3.247.971-.02 1.929-.141 2.84-.354 3.372-1.273 5.448-4.633 5.448-8.232C22 6.486 17.514 2 12 2zm-.705 13.127l-2.13-2.248-5.373 2.248 6.973-7.877 2.155 2.25 5.346-2.25-6.971 7.877z"/>
            </svg>
        </a>

        <!-- Instagram Icon -->
        <a href="https://www.instagram.com" target="_blank" class="text-white hover:text-gray-300 mr-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" stroke="none">
                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 1.366.062 2.633.313 3.608 1.288.974.974 1.225 2.242 1.288 3.608.058 1.266.069 1.646.069 4.85s-.012 3.584-.07 4.85c-.062 1.366-.313 2.633-1.288 3.608-.974.974-2.242 1.225-3.608 1.288-1.266.058-1.646.069-4.85.069s-3.584-.012-4.85-.07c-1.366-.062-2.633-.313-3.608-1.288-.974-.974-1.225-2.242-1.288-3.608-.058-1.266-.069-1.646-.069-4.85s.012-3.584.07-4.85c.062-1.366.313-2.633 1.288-3.608.974-.974 2.242-1.225 3.608-1.288 1.266-.058 1.646-.069 4.85-.069zm0-2.163c-3.259 0-3.667.013-4.947.072-1.294.06-2.573.341-3.637 1.405-1.064 1.064-1.345 2.343-1.405 3.637-.059 1.28-.072 1.688-.072 4.947s.013 3.667.072 4.947c.06 1.294.341 2.573 1.405 3.637 1.064 1.064 2.343 1.345 3.637 1.405 1.28.059 1.688.072 4.947.072s3.667-.013 4.947-.072c1.294-.06 2.573-.341 3.637-1.405 1.064-1.064 1.345-2.343 1.405-3.637.059-1.28.072-1.688.072-4.947s-.013-3.667-.072-4.947c-.06-1.294-.341-2.573-1.405-3.637-1.064-1.064-2.343-1.345-3.637-1.405-1.28-.059-1.688-.072-4.947-.072zM12 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zm0 10.162a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 11-2.881 0 1.44 1.44 0 012.881 0z"/>
            </svg>
        </a>
    </div>    
                                  </ul>
                              </div>
                        </div>
                        <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                         
                            <div>
                               
                              <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">
                                    Resources</h2>
                                <ul class="text-gray-500 dark:text-gray-400 font-medium">
                                    <li class="mb-4">
                                        <a href="https://flowbite.com/" class="hover:underline">Flowbite</a>
                                    </li>
                                    <li>
                                        <a href="https://tailwindcss.com/" class="hover:underline">Tailwind CSS</a>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Follow
                                    us</h2>
                                <ul class="text-gray-500 dark:text-gray-400 font-medium">
                                    <li class="mb-4">
                                        <a href="https://github.com/themesberg/flowbite"
                                            class="hover:underline ">Github</a>
                                    </li>
                                    <li>
                                        <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Discord</a>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal
                                </h2>
                                <ul class="text-gray-500 dark:text-gray-400 font-medium">
                                    <li class="mb-4">
                                        <a href="#" class="hover:underline">Privacy Policy</a>
                                    </li>
                                    <li>
                                        <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                                    </li>
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                    <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8">
                    <div class="sm:flex sm:items-center sm:justify-between">
                      <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400 mx-auto">© 2023 <a
                              href="https://flowbite.com/" class="hover:underline">Mitoru</a>. All Rights
                          Reserved.
                      </span>
                  </div>
                  
                </div>
            </footer>
        </div>
    </div>

</body>

</html>
