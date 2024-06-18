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
    {{-- Header --}}
    <div class="" style="height: 9%; width: 100%;">
        <nav class=" border-gray-200 dark:bg-gray-900">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
                </a>
                <div class="flex md:order-2">

                    <button data-collapse-toggle="navbar-search" type="button"
                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="navbar-search" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                </div>
            </div>
        </nav>
    </div>
    @yield('content')
    {{-- Footer --}}
    <div class="footer" style="height: 31%; width: 100%">
        <footer class="mt-5 bg-gray-900">
            <div class="mx-auto w-full max-w-screen-xl ">
                <div class="md:flex md:justify-between">
                    <div class="mb-6 md:mb-0">
                        <a href="https://flowbite.com/" class="flex items-center">
                            <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 me-3" alt="FlowBite Logo" />
                            <span
                                class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>

                        </a>

                    </div>
                    <div class="grid grid-cols-5 gap-8 sm:gap-4 sm:grid-cols-1">
                        <div>

                            <ul class="text-gray-500 dark:text-gray-400 font-medium mt-3>
                                <li class="mb-4">
                                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">
                                        Thông tin liên lạc</h2>
                                        <div class="flex items-center mt-4">
                                            <!-- Biểu tượng SVG -->
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 mr-2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                                            </svg>
                                            <!-- Nội dung về số điện thoại -->
                                            <p class="text-base">
                                                <span class="font-bold">Số điện thoại:</span> 
                                                <span class="ml-2">0778629133</span>
                                            </p>
                                        </div>
                                        
                                    <div class="flex items-center mt-4">
                                        <!-- Biểu tượng SVG -->
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 mr-2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 21v-7.5a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 .75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349M3.75 21V9.349m0 0a3.001 3.001 0 0 0 3.75-.615A2.993 2.993 0 0 0 9.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 0 0 2.25 1.016c.896 0 1.7-.393 2.25-1.015a3.001 3.001 0 0 0 3.75.614m-16.5 0a3.004 3.004 0 0 1-.621-4.72l1.189-1.19A1.5 1.5 0 0 1 5.378 3h13.243a1.5 1.5 0 0 1 1.06.44l1.19 1.189a3 3 0 0 1-.621 4.72M6.75 18h3.75a.75.75 0 0 0 .75-.75V13.5a.75.75 0 0 0-.75-.75H6.75a.75.75 0 0 0-.75.75v3.75c0 .414.336.75.75.75Z" />
                                        </svg>
                                        <!-- Nội dung về địa chỉ -->
                                        <p class="text-sm">
                                            <span class="font-bold text-base">Địa Chỉ:</span> 
                                            <span class="ml-1 text-base">Đường DC13, Sơn Kỳ, Tân Phú, Thành phố Hồ Chí Minh, Việt Nam</span>
                                        </p>
                                    </div>
                                    
                                        <div class="flex items-center mt-4">
                                            <!-- Biểu tượng SVG -->
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 mr-2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0Zm0 0c0 1.657 1.007 3 2.25 3S21 13.657 21 12a9 9 0 1 0-2.636 6.364M16.5 12V8.25" />
                                            </svg>
                                            <!-- Nội dung về email -->
                                            <p class="text-sm">
                                                <span class="font-bold text-base">Mail:</span> 
                                                <span class="ml-1 text-base">dinhnhieu3051@gmail.com</span>
                                            </p>
                                        </div>
                                                                       
                            </ul>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">

                        <div>

                            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">
                                công ty</h2>
                            <ul class="text-gray-500 dark:text-gray-400 font-medium">
                                <li class="mb-4">
                                    <a href="https://flowbite.com/" class="hover:underline">Trang Chủ</a>
                                </li>
                                <li>
                                    <a href="https://tailwindcss.com/" class="hover:underline">Sản Phẩm</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Liên Hệ
                            </h2>
                            <ul class="text-gray-500 dark:text-gray-400 font-medium">
                                <li class="mb-4">
                                    <a href="https://github.com/themesberg/flowbite"
                                        class="hover:underline ">Github</a>
                                </li>
                                <li>
                                    <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Discord</a>
                                </li>
                                <li class="mb-4 mt-4">
                                    <a href="https://www.facebook.com/"
                                        class="hover:underline ">facebook</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Nhập kho &amp; nhân sự
                            </h2>
                            <ul class="text-gray-500 dark:text-gray-400 font-medium">
                                <li class="mb-4 mt-1">
                                    <a href="#" class="hover:underline">Nhập Kho</a>
                                </li>
                                <li>
                                    <a href="#" class="hover:underline">Xuất Kho</a>
                                </li>

                                <li class="mt-4">
                                    <a href="#" class="hover:underline">Nhân Viên</a>
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
</body>

</html>
